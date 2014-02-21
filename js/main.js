//On Load
$(function() {

//Save new exercise click
	$('#addNewExercise').click(function() {
		addNewExercise();
	}); 

//Add new exercise to database
	function addNewExercise()
	{
		var _userName = $('#userName').val();
		var _exerciseTitle = $('#addExerciseTitle').val();
		var _exerciseDesc = $('#addExerciseDesc').val();
		var _exerciseURL = $('#addExerciseURL').val();
		var _exercisePrimary = $('#addPrimaryMuscle').val();
		var _exerciseSecondary = $('#addSecondaryMuscle').val();
		alert (_userName + _exerciseTitle + _exerciseDesc + _exerciseURL + _exercisePrimary + _exerciseSecondary );
		if(_exerciseTitle.length > 0)
		{
			$.post('ajax/saveExercise.php',
				{
					task : 'saveExercise',
					userName : _userName,					
					exerciseTitle : _exerciseTitle,
					exerciseDesc : _exerciseDesc,
					exerciseURL : _exerciseURL,
					exercisePrimary : _exercisePrimary,
					exerciseSecondary : _exerciseSecondary
				}
			)
			.error(
				function()
				{
					console.log("Error saving new exercise")
				})
			.success(
				function(data)
				{
					addExerciseToList(jQuery.parseJSON(data));
					console.log("Response Text: " + data)
				});
		}
		else
		{
			console.log("Bad Data"); 
		}
	}

//Add newly added exercise title to dropdown list
	function addExerciseToList(data)
	{
		var str='<option value="">'+ data.newExercise +'</option>';
		$('#selectedExercise').append(str);
	}

//Save new exercise click
	$('#selectExercise').click(function() {
		getExercise();
	}); 



//Select existing exercise
	function getExercise()
	{
		var _userName = $('#userName').val();
		var _selectedExercise = $('#selectedExercise option:selected').text();		
		$.post('ajax/getExercise.php',
			{
				task : 'getExercise',
				userName : _userName,
				selectedExercise : _selectedExercise
			}
		)
		.error(
			function()
			{
				console.log("Error retrieving new exercise")
			})
		.success(
			function(data)
			{
				displaySelectedExercise(jQuery.parseJSON(data));
				console.log("Response Text: " + data)
			});
	}
});
//Save new exercise click
	$('#saveWeightEntry').live("click", function() {
		alert ("Made it");
		var _selectedExerciseTitle = $('#selectedExerciseTitle').attr('id');
		alert (_selectedExerciseTitle);
		var _userName = $('#userName').val();
		alert (_userName);
		var _repOne = $('.repOne option:selected').text();		
		var _weightOne = $('.weightOne').val();
		var _repTwo = $('.repTwo option:selected').text();		
		var _weightTwo = $('.weightTwo').val();
		var _repThree = $('.repThree option:selected').text();		
		var _weightThree = $('.weightThree').val();
		var _repFour = $('.repFour option:selected').text();		
		var _weightFour = $('.weightFour').val();
		$.post('ajax/weightEntry.php',
			{
				task : 'weightEntry',
				selectedExerciseTitle : _selectedExerciseTitle,
				userName : _userName,
				repOne : _repOne,
				weightOne : _weightOne,
				repTwo : _repTwo,
				weightTwo : _weightTwo,
				repThree : _repThree,
				weightThree : _weightThree,
				repFour : _repFour,
				weightFour : _weightFour
			}
		)
		.error(
			function()
			{
				console.log("Error retrieving new exercise")
			})
		.success(
			function(data)
			{
				alert ("Weight has been saved!")
			});
	}); 

//Display selected exercise to user
	function displaySelectedExercise(data)
	{
		var html = '<div id="selectedExerciseTitle">' + data.exerciseInfo.exerciseTitle + '</div>';
		html += '<div>' + data.exerciseInfo.exerciseDesc + '</div>';
		html += '<div>' + data.exerciseInfo.primaryMuscleGroup + '</div>';
		html += '<div>' + data.exerciseInfo.secondaryMuscleGroup + '</div>';
		html += '<div>' + data.exerciseInfo.exercisePicture + '</div>';
		$('.selectedExercise').append(html);
	}





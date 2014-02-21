<?php  
	include('../defines.php');
	if(isset($_POST['task']) && $_POST['task'] == 'weightEntry')
	{
		$selectedExerciseTitle = addslashes($_POST['selectedExerciseTitle']);
		$userName = addslashes($_POST['userName']);
		$repOne = addslashes($_POST['repOne']);
		$weightOne = addslashes($_POST['weightOne']);
		$repTwo = addslashes($_POST['repTwo']);
		$weightTwo = addslashes($_POST['weightTwo']);
		$repThree = addslashes($_POST['repThree']);
		$weightThree = addslashes($_POST['weightThree']);
		$repFour = addslashes($_POST['repFour']);
		$weightFour = addslashes($_POST['weightFour']);
		
		//Require weight Class
		require_once '../mysql/models/weight.php';
		if(class_exists('Weight'))
		{
			$weightEntry = Weight::weightEntry($selectedExerciseTitle, $userName, $repOne, $weightOne, $repTwo, $weightTwo, $repThree, $weightThree, $repFour, $weightFour);
		}
	}
	else
	{
		header('location: /');
	}
?>
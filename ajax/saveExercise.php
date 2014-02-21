<?php  
	include('../defines.php');
	if(isset($_POST['task']) && $_POST['task'] == 'saveExercise')
	{
		$userName = addslashes($_POST['userName']);
		$exerciseTitle = addslashes($_POST['exerciseTitle']);
		$exerciseDesc = addslashes($_POST['exerciseDesc']);
		$exerciseURL = addslashes($_POST['exerciseURL']);
		$exercisePrimary = addslashes($_POST['exercisePrimary']);
		$exerciseSecondary = addslashes($_POST['exerciseSecondary']);
		//mysql_query("INSERT into exercises values('','Brandon','$exerciseTitle','Default Description','Pic URL','Primary Muscle group','Secondary Muscle Group')");
		require_once '../mysql/models/exercises.php';
		if(class_exists('Exercises'))
		{
			$newExercise = Exercises::saveNewExercise($userName, $exerciseTitle, $exerciseDesc, $exerciseURL, $exercisePrimary, $exerciseSecondary);
		}
		$std = new stdClass();
		$std->newExercise = $exerciseTitle;
		echo json_encode($std);
	}
	else
	{
		header('location: /');
	}
?>
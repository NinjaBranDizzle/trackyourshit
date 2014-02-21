<?php  
	include('../defines.php');
	if(isset($_POST['task']) && $_POST['task'] == 'getExercise')
	{
		$userName = addslashes($_POST['userName']);
		$selectedExercise = $_POST['selectedExercise'];
		$std = new stdClass();
		$std->exerciseInfo = null;
		$std->error = false;
		require_once '../mysql/models/exercises.php';
		if(class_exists('Exercises'))
		{
			$getExercise = Exercises::getExercise($userName, $selectedExercise);
			if($getExercise == null)
			{
				$std->error = true;
			}
			else
			{
				$std->exerciseInfo = $getExercise;
			}
		}
		echo json_encode($std);
	}
	else
	{
		header('location: /');
	}
?>
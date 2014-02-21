<?php  
	require_once '../defines.php';
	$selectedExercise = $_GET['selectedExercise'];
	mysql_query("SELECT FROM exercises WHERE exerciseTitle='" . $selectedExercise . "'") or die ($error);
	
	echo 'success';
?>
<?php
	class Exercises{
		public static function getExercise($userName, $selectedExercise)
		{
			$sql = "SELECT * FROM exercises WHERE exerciseTitle='".$selectedExercise."' AND user='".$userName."'";
			$query = mysql_query($sql);
			if($query)
			{
				return mysql_fetch_object($query);
			}
			return null;
		}

		//return a stdClass object from the database
		public static function saveNewExercise ($userName, $exerciseTitle, $exerciseDesc, $exerciseURL, $exercisePrimary, $exerciseSecondary)
		{
			//Save new exercise in the database
			mysql_query("INSERT into exercises values('','$userName','$exerciseTitle','$exerciseDesc','$exerciseURL','$exercisePrimary','$exerciseSecondary')");
			mysql_query("INSERT into weightEntry values('','$exerciseTitle','0','0','0','0','0','0','0','0')");
			if($query)
			{
				$insertId = mysql_insert_id();
				$std = new stdClass();
				$std->exerciseID = $insertId;
				return $std;
			}
			return null;
		}

		public static function update ($data)
		{
			
		}

		public static function delete ($commentId)
		{
				
		}
	}
?>
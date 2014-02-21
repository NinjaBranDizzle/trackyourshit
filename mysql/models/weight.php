<?php
	class Weight{
		public static function getWeight($userName, $selectedExercise)
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
		public static function weightEntry ($selectedExerciseTitle, $userName, $repOne, $weightOne, $repTwo, $weightTwo, $repThree, $weightThree, $repFour, $weightFour)
		{
			//Save new weight entry in the database
			$query = mysql_query("INSERT into weightEntry values('','$selectedExerciseTitle','$userName','$repOne','$weightOne','$repTwo','$weightTwo','$repThree','$weightThree','$repFour','$weightFour')");
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
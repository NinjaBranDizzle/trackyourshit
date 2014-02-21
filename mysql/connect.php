<?php
	$error = "Problem connecting to database.  Please try again later.";

	$connect = mysql_connect('localhost', 'spincent_admin', 'Justhost!984') or die ($error); 
	$db = mysql_select_db('spincent_trackyourshit') or die ($error);


?>
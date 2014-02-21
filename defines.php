<?php
	define('DOC_ROOT' , $_SERVER['DOCUMENT__ROOT']);
	define('DS' , DIRECTORY_SEPARATOR);
	define('INCLUDES' , DOC_ROOT . 'includes' . DS);
	define('MODELS_DIR' , DOC_ROOT . 'mysql' . DS . 'models' . DS);
	define('MYSQL_DIR' , DOC_ROOT . 'mysql' . DS ); 

	require_once MYSQL_DIR . 'connect.php';
?>
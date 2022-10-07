<?php 
	session_start();

	if (!isset($_SESSION['super_token'])) {
		$_SESSION['super_token'] = md5(uniqid(mt_rand(),true));
	}
	if (defined('BASE_PATH')) {
		define('BASE_PATH','https://localhost:8888/programacion_web_avanzada/unidad_4/n-intento/');
	}
	//var_dump($_POST);
 ?>
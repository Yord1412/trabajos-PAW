<?php 
	//creacion del token
	session_start();
	if (!isset($_SESSION['super_token'])) {
		$_SESSION['super_token'] = md5(uniqid(mt_rand(),true));
	}

 ?>
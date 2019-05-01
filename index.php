<?php
include './config.inc.php';
include './uc_client/client.php';

if (empty($_COOKIE['uid'])){
	header('Location: /login.php');
	}else{
	echo $_COOKIE['uid'];
	}
?>

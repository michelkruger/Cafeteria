<?php
	session_start();
	if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
		header("Location: ../login/login.php");
	}
?>
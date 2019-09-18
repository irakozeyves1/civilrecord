<?php
	session_start();
	if(!isset($_SESSION['manId']) || (trim($_SESSION['manId']) == '')) {
		header("location:../index.php");
		exit();
	}
?>
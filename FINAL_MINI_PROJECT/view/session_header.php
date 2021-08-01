<?php
	session_start();
	if(!isset($_SESSION['username'])){
		header('view/login.php?error=invalid_request');
	}
?>
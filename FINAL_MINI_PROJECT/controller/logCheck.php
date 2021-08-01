<?php
	session_start();
	require_once('view/session_header.php');
	require_once('view/sub_db.php');

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];

		if(empty($username) || empty($password)){
			header('view/login.php?error=null_value');
		}else{

			$user = [
				'username'=>$username,
				'password'=>$password,
			];
			
			$status = validate($user);

			if($status){
				$_SESSION['username'] = $username;
				header('view/home.php');
			}else{
				header('view/login.php?error=invalid_user');
			}
		}
	}



?>
<?php
	session_start();
require_once('../model/empDB.php');

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];

		if($username != '' && $password != ''){
			  
	$emp = getEmp($username);
          
                

			if($emp['uname'] == $username && $emp['pass'] == $password){          
                    $_SESSION['flag'] = true;
                $_FILES['flag']['flag'] = true;
					setcookie('flag', 'true', time()+3700, '/');
                
                 
			 		header('location: ../view/home.php');
			}else{
				echo 'invalid username/password';
			}
                }

		}else{
			echo "null value found...";
		}
	
?>
<?php
include "header.php" 
?>

<?php
	session_start();
	if(isset($_COOKIE['flag'])){
?>
<?php
include "menu.php"
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	<h1 align = "center" >Welcome To The Site!  </h1>
	
</body>
</html>

<?php
	
	
	}else{
		header('location: login.php');
	}
?>
<div id="nav_bar">

<a href="user_list.php">View User List</a> |		
<a href="../controller/logout.php">Logout</a>		
</div>
<?php
include "footer.php" 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Confirmation</title>
</head>
<body>
<?php 
	$id = $_GET['id'];
 ?>
	<h1 align="center">
		 Delete this User?	
	</h1>
	<h2 align="center"><a href="../controller/delete.php?id=<?= $id?>" style="" >Yes</a> /
		<a href="user_list.php" style="">No</a>
	</h2>
</body>
</html>
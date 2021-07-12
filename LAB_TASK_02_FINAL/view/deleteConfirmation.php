<<?php 
	$id = $_GET['id'];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Confirmation</title>
</head>
<body>
	<h1 align="center">
		DELETE THE USER?	
	</h1>
	<h2 align="center"><a href="../controller/delete.php?id=<?= $id?>" style="" >Yes</a> /
		<a href="user_list.php" style="">No</a>
	</h2>
</body>
</html>
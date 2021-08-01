<?php
	$title="Delete User";
	include 'view/header.php';

	$id = $_GET['id'];
	$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['id'] == $id){
			$user = $u;
			break;
		}
	}
?>

	<h1>Delete user</h1>

	<nav>
		<a href="../view/home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<input type="hidden" name="id" value="<?=$user['id']?>">
			<table border="1">
				<tr>
					<td>Name</td>
					<td><?=$user['name']?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?=$user['email']?></td>
				</tr>
				<tr>
					<td>Dept</td>
					<td>
						<?=$user['dept']?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'view/footer.php';
?>
<?php
	$title="Delete Products";
	require_once('../model/productConfig.php');
	$products = deleteProduct('id');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Product</title>
</head>
<body>
	<center>
		<form method="POST" action="">
			<table>
				<tr>
					<td>
						<fieldset>
							<legend>DELETE PRODUCT</legend>
							
						</fieldset>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
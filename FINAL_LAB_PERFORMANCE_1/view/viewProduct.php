<?php
	$title="View Products";
	require_once('../model/productConfig.php');
	$products = getAllProduct();
?>

	<h1>Product List</h1>

	<br>

	<div>
		<table border="1">
			<tr>
				<td>ID</td>
				<td>Name</td>
				<td>Buying Price</td>
				<td>Selling Price</td>
				<td>Action</td>
			</tr>

			<?php  for($i=0; $i<count($products); $i++){ ?>
				<tr>
					<td><?=$products[$i]['id']?></td>
					<td><?=$products[$i]['name']?></td>
					<td><?=$products[$i]['buy_price']?></td>
					<td><?=$products[$i]['sell_price']?></td>
					<td>
						<a href="editProduct.php?id=<?=$products[$i]['id']?>">Edit</a> |
						<a href="deleteProduct.php?id=<?=$products[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>

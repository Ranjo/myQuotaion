<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<link rel="stylesheet" type="text/css" href="../css/addStock.css">
<body>

	<div class="container">
		<div class="well">
			<form method="POST" action="../config/stock.php">
				<div>
					<label for="itemid" class="col-md-4 control-label"> Item Id</label>
					<input required  placeholder="Item Id" type="text" name="itemid">
				</div>
				<div>
					<label for="cartegory">Category</label>
					<input required placeholder="Item Category" type="text" name="cartegory">
				</div>
				<div>
					<label for="itemname">Item Name</label>
					<input required placeholder="Item name" type="text" name="itemname">
				</div>
				<div>
					<label for="itemdesc">Description</label>
					<input required placeholder="Description" type="text" name="itemdesc">
				</div>
				<div>
					<label for="cost">Cost</label>
					<input required placeholder="Cost" type="text" name="cost">
				</div>
				<div>
					<label for="tax">Tax</label>
					<input required placeholder="tax" type="text" name="tax">
				</div>
				<div>

				</div>
				<div>
					<input type="submit" class="w3-green" name="additmbtn" value="Add Item">
				</div>

			</form>
		</div>
	</div>
</body>
</html>
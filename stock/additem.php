<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<link rel="stylesheet" type="text/css" href=".stock.css">
<style type="text/css">
	input{
		margin: 5px 0px 5px 0px;
		padding:5px;
	}
</style>
<body>

	<div class="container">
		<div class="well">
			<form method="POST" action="stock.php">
				<div >
					<label for="itemid" class="col-sm-2"> Item Id</label>
					<input required  placeholder="Item Id" type="text" name="itemid">
				</div>
				<div>
					<label for="cartegory" class="col-sm-2">Category</label>
					<input required placeholder="Item Category" type="text" name="cartegory">
				</div>
				<div>
					<label for="itemname" class="col-sm-2">Item Name</label>
					<input required placeholder="Item name" type="text" name="itemname">
				</div>
				<div>
					<label for="itemdesc" class="col-sm-2">Description</label>
					<input required placeholder="Description" type="text" name="itemdesc">
				</div>
				<div>
					<label for="cost" class="col-sm-2">Cost</label>
					<input required placeholder="Cost" type="text" name="cost">
				</div>
				<div>
					<label for="tax" class="col-sm-2">Tax</label>
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
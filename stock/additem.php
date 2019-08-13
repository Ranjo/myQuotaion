<!DOCTYPE html>
<html>
<head>
	<title>Add Item</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/w3.css">
<style type="text/css">
	.formc{
		width: 30%;
		padding-top: 100px;
	}
</style>
<body>
<div class="container formc">
<form>
	
	<div class="form-group">
	<input class="form-control" required placeholder="Item Id" type="text" name="itemid">
	</div>
	<div class="form-group">
	<input class="form-control" required placeholder="Item Category" type="text" name="cartegory">
	</div>
	<div class="form-group">
	<input class="form-control" required placeholder="Item name" type="text" name="itemname">
	</div>
	<div class="form-group">
	<input class="form-control" required placeholder="Description" type="text" name="itemdesc">
    </div>
    <div class="form-group">
    <input class="form-control" required placeholder="Cost" type="text" name="cost">
    </div>
    <div class="form-group">
    <input class="form-control" required placeholder="Quantity" type="text" name="quantity">
    </div>
    <div class="form-group">
    <input class="form-control" required placeholder="tax" type="text" name="tax">
    </div>
    <div class="form-group container" style="width: 50%;">
    <input type="submit" class="w3-green form-control" name="additmbtn" value="Add Item">
</div>

</form>
</div>
</body>
</html>
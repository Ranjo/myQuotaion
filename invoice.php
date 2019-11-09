<!DOCTYPE html>
<html>
<head>
	<title>Quotation</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="invoice.css">
<?php 
	//include('config/session.php');
	//session_start();
/*$quantity =$_POST['qty'];
$amount =$_POST['amt'];
$total = $quantity*$amount*/
include 'config/dbconfig.php';
$result= mysqli_query($conn, "SELECT * FROM stock WHERE id='1'");
$result1= mysqli_fetch_array($result);
$quan= $result1['iquantity'];
$costs= $result1['cost'];
$tx = $result1['tax']/100;

$total= $quan*$costs;
$sumTot= $total+($total*$tx);
?>
<body>
	<div class="container">
		<div class="det01 w3-bordered">
			<div id="conts ">
				<img src="images/logo.png">
				<div id="companyadd">
					Glatoo Oil Dealers<br>
					P.O. Box 400-2301<br>
					Nairobi<br>
					Email: info@glatoo.com<br>
					Tel: 0700142145<br>
					<i>Dealers in Petrol Diesel and<br> other petroleum product</i>
				</div><br>
			</div>
			<hr>
			<div >
				<p id="ref"><label for="refference">Ref:</label> TT/0223/2019</p>
			</div>
			<div>
				To:<br> <div class="col-xs-4 w3-border w3-teal"> Maisha Bora Sacco <br> P.o Box 120-00100 <br> Nairobi, Kenya</div>

			</div>
			<div class="w3-light-green col-xs-6 tt1"> Attention: ttomno.tom@gmail.com</div>

			<div class="rows sd">
				
				<div class="col-xs-3">
					<label>Quotation number:</label> 1
				</div><div class="col-xs-6">
					
				</div>
				<div class="col-xs-3">
					Date:<?php echo date("d/m/Y"); ?>
				</div>
			</div>

		</div>
		<div>

			<table class="tables">
				<thead>
					<tr>
						<th>Item description</th>
						<th class="col-xs-2">Quantity</th>
						<th>Unit price</th>
						<th>Total Cost</th>
					</tr>
				</thead>
				<tbody>
					<tr id="desh">
						<td><!-- <input type="textarea" name="descrip" value=" --><?php echo $result1['itemname']; echo "<br>"; echo $result1['idescription'] ?><!-- "> --></td>
						<td><input type="text" name="qty" value="<?php echo $result1['iquantity'] ?>"></td>
						<td><!-- <input type="text" name="amt" value="120"> --><?php echo $result1['cost'] ?></td>
						<td><?php //echo $total; ?><?php echo $total; ?></td>

					</tr>

				</tbody>
				<tfoot >

<tr>
	<td colspan="3"><b>Tax</b></td>
	<td><b><?php echo $result1['tax'];echo "%"; ?></b></td>
</tr>
					<tr>

						
						<td colspan="3"><b>Total</b></td>
						<td><b><?php echo $sumTot; ?></b></td>
					</tr>

				</tfoot>
			</table>
		</div>
		<div >
			
			<p>
				<div>
					Served by:


					Tomno <?php //echo $user_check; ?>
				</div>
			</p>
			<p>
				<div >
					Date:

					<?php echo date("d/m/Y"); ?>
				</div>

			</p>
			<p>
				<div >
					Warrant:

					12 months
				</div>

			</p>
			<p>
				<div >
					Quotation Validity:

					30 days
					</div>
			</p>

		</div>
		<div>
			<Button class="btn-primary">Save and Print</Button>
			<button class="btn-md w3-green">Send Via email</button>
		</div>
	</div>
</body>
</html>

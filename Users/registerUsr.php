<!DOCTYPE html>
<html>
<head>
	<title>Join Us Today!</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
    <link rel="stylesheet" type="text/css" href="../css/reg.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<body>

	<fieldset><h2>Signup</h2>
		<form method="post" action="../config/logincon.php">
			<fieldset><h5>Personal Details</h5>
				<div class="container">
					<div class="row">
						<div >
						<input class="col-md-6" type="text" name="username">
						</div>
					</div>
					<div class="row">
						<div class="input-element">
							<input class="col-md-3" type="text" placeholder="First Name" name= "firstname">
						</div>
						<div class="input-element">
							<input class="col-md-3" type="text" placeholder="Surname" name= "surname">
						</div>	
					</div>
				<div class="row">
					<div class="input-element" >
						<input class="col-md-3" type="email" placeholder="Email Address" name="eaddress">
					</div>
					<div class="input-element">
						<input class="col-md-3" type="text" placeholder="Phone Number" name="UserPhone">
					</div>
				</div>
				</div>
			</fieldset>
			<fieldset><h5>Company Details</h5>
					<input type="text" name="companyName">
					<input type="text" name="CompanyAddress">
					<input type="email" name="companyEmail">
					<input type="text" name="companyPhone">
					<input type="file" id="logo" name="companyLogo" accept=".gif, .jpg, .png" id="image">
			</fieldset>
			<input type="text" name="acceptTC">
			<input type="submit" id="register" value="Register" name="register">
			
		</form>
	</fieldset>

	<script>
	        $(document).ready(function(){  
      $('#register').click(function(){  
           var image_name = $('#logo').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#logo').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#logo').val('');  
                     return false;  
                }  
           }  
      });  
	}); </script>
	<script type="javascript" src="Js/style.js">
	
	</script>
</body>
</html>
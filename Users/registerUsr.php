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
<div class="form-body">
	<fieldset><h2>Signup</h2>
		<form method="post" action="../config/logincon.php">
		<div>
			<fieldset><h5>Personal Details</h5>
					<div class="row">
						<div >
						<input class="col-md-6" type="text" name="username" placeholder="Username" >
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
			</fieldset>
			<fieldset><h5>Company Details</h5>
				<div class="row">
					<div>
						<inputclass="col-md-6"  type="text" placeholder="Company Name" name="companyName">
					</div>
				</div>
				<div class="row">
					<div >
						<input class="col-md-6"  type="text" placeholder="Company Address" name="CompanyAddress">
					</div>
				</div>
				<div class="row">
					<div>
						<input class="col-md-3" type="email" placeholder="Company Email" name="companyEmail">
					</div>
					<div>
						<input class="col-md-3" type="text" placeholder="Company Phone" name="companyPhone">
					</div>
				</div>
				<div>
					<input type="file" id="logo" name="companyLogo" accept=".gif, .jpg, .png" id="image">
				</div>
				<div class="row">
					<div class="col-md-3">
						<input type="password" placeholder="Password" name="password" id="pwd" >
					</div>
					<div class="col-md-3">
						<input type="password" placeholder="Confirm Password" name="confirmPassword" id="conpwd" >
					</div>
				</div>
			</fieldset>
			<input type="checkbox" name="acceptTC"><br>
			<input type="submit" id="register" value="Register" name="register">
			</div>
		</form>
	</fieldset>
</div>
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
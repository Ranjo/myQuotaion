<!DOCTYPE html>
<html>
<head>
	<title>Join Us Today!</title>
</head>
<link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
	<!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" type="text/css" href="../css/reg.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<body>
<div class="form-body">
	<fieldset><legend><h1>Signup</h1></legend>
		<form method="post" action="../config/logincon.php">
		<div class="inside-form">
			<fieldset><legend>Personal Details</legend>
					<div class="row">
						<div >
						<input class="col-md-6" type="text" required name="username" placeholder="Username" >
						</div>
					</div>
					<div class="row">
						<div class="input-element">
							<input class="col-md-5" type="text" required placeholder="First Name" name= "firstname">
						</div>
						<div class="input-element">
							<input class="col-md-5" type="text" required placeholder="Surname" name= "surname">
						</div>	
					</div>
				<div class="row">
					<div class="input-element" >
						<input class="col-md-5" type="email" required placeholder="Email Address" name="eaddress">
					</div>
					<div class="input-element">
						<input class="col-md-5" type="text" required placeholder="Phone Number" name="UserPhone">
					</div>
				</div>
			</fieldset>
			<fieldset><legend>Company Details</legend>
				<div class="row">
					<div>
						<input class="col-md-6"  type="text" required placeholder="Company Name" name="companyName">
					</div>
				</div>
				<div class="row">
					<div >
						<input class="col-md-6"  type="text" required placeholder="Company Address" name="CompanyAddress">
					</div>
				</div>
				<div class="row">
					<div>
						<input class="col-md-5" type="email" required placeholder="Company Email" name="companyEmail">
					</div>
					<div>
						<input class="col-md-5" type="text" required placeholder="Company Phone" name="companyPhone">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<input type="file" id="logo" name="companyLogo" accept=".gif, .jpg, .png" id="image">
					</div>
				</div>
				<div class="row">
					<div>
						<input class="col-md-5" type="password" required placeholder="Password" name="password" id="pwd" >
					</div>
					<div>
						<input class="col-md-5" type="password" required placeholder="Confirm Password" name="confirmPassword" id="conpwd" >
					</div>
				</div>
			</fieldset>
			<input aligned="center" type="checkbox" name="acceptTC">
			I agree with the <a href="#">terms and conditions</a><br>
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
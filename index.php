<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/inv.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<body>
	<div>
		<!--<div class="container cent">
		<fieldset class="w3-padding w3-pannel">
            <div id="logintxt">Login</div>
				<form method="POST" action="config/logincon.php">
					<div class="form-group">
						<input class="form-control" required type="text" name="username" id="usern"  placeholder="Usename">
					</div>
					<div class="form-group">
						<input class="form-control" required type="password" name="pswd"  placeholder="Password">
					</div>
					<div class="form-group " align="center">
						<input type="submit" name="sub" class="btn btn-block btn-success  btnn" value="Login">
						<input type="submit" name="fgtpsw"  class="btn btn-block btn-danger btnn" value="Forgot Password" >
					</div>

				</form>
			</fieldset>
		</div>-->
		<div id="back-div">
			<div id="form-div">
				<form method="post" action="config/logincon.php">
					<div class="input-field">
				<!--<div class="icon-element">
				<i class="fa fa-user-circle-o fa-2x"></i>
			</div>-->
			<input type="text" name="usrname" required placeholder="Enter your username"  id="usrname" autofocus>
		</div>
		<div class="input-field">
				<!--<div class="icon-element">
				<i class="fa fa-key fa-2x"></i>
			</div>-->
			<input type="password" placeholder="Enter Password" name="pwds" id="passwd">
		</div>
		<div class="container reg">
			Dont have an account? <a href="Users/registerUsr.php">Register</a></div>
			<div>
				<button class="" id="loginbtn">Login</button><br>
				<button class="w3-red" id="fgtbtn"> Forgot Password</button>
			</div>
		</form>
	</div>
	
</div>
</div>
<script type="javascript" src="Js/style.js">
	
</script>
</body>
</html>
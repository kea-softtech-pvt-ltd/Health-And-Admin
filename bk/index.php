<?php
include_once('includes/application_top_no_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Health</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
	<!--js file-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		
</head>
<body>
<body>

<div class="signupform">
	<div class="container">
		<!-- main content -->
		<!---728x90--->

		<div class="agile_info">
			<div class="w3l_form">
				<div class="left_grid_info">
					<h1>Manage Your Account</h1>
					<p>Donec dictum nisl nec mi lacinia, sed maximus tellus eleifend. Proin molestie cursus sapien ac eleifend.</p>
					<img src="images/image.jpg" alt="" />
				</div>
			</div>

			<div class="w3_info">
			<!---728x90--->

			<div class="alert alert-danger" id="error_message" style="display:none;color:#FF0000;"></div>
				<h2>Login to your Account</h2>
				
				<form method="post" name="loginForm" id="loginForm">
					<label>Mobile Number</label>
					<div class="input-group">
						<span class="fa fa-mobile" aria-hidden="true"></span>
						<input type="text" name="mobilenumber" id="mobilenumber" placeholder="Enter Your Mobile Number" onkeypress="return isNumberKey(event)" maxlength="10" required=""> 
					</div>
					<div id="mobilenumber_error" style="color:#FF0000;font-size:12px;"></div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" name="password" id="password" placeholder="Enter Password" maxlength="16" required="">
						</div>
					<div id="password_error" style="color:#FF0000;font-size:12px;">
					</div>						
						
					<input onclick="validateForm();" class="btn btn-danger btn-block" type="button" name="submit" value="Login">
					<p class="account1" style="float:right;"><a href="forgot.php" style="color:green;">Forgot Password?</a></p>
				</form>
				<p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
				<p class="account1">Dont have an account? <a href="register.php">Register here</a></p>
				
			</div>
		</div>
		<!-- //main content -->
	</div>
	<!---728x90--->

	<!-- footer -->
	<div class="footer">
		<p>&copy; 2019 All Rights Reserved</p>
	</div>
	<!-- footer -->
</div>

<script src="js/user_login.js" type="text/javascript"></script>
</body>
</html>
	


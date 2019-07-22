<!DOCTYPE html>
<html lang="en">
<head>
<title>Health</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	
	<!--js files-->	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->

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

				<h2>Forgot Password</h2>
				<p>Enter your details to reset password.</p>
				<form  method="post" id="send_otp" name="send_otp">
					<label>Mobile Number</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="text" placeholder="Enter Your Mobile Number" id="input_mobile" name="input_mobile" onkeypress="return isNumberKey(event)" maxlength="10" required=""> 
					</div>				
					<div class="alert alert-danger" id="otp_error" style="display:none;"></div>	
					<input type="button" onclick="validateotp();" class="btn btn-danger btn-block" value="send OTP" /> 					
					<a href="index.php"><button class="btn btn-danger btn-block" type="button">Login</button></a>
				</form>
				
				
				
				<form method="post" id="verify_otp" name="verify_otp" style="display:none;">
					<label>OTP</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="hidden" placeholder="Enter OTP" name="mobile_hidden" id="mobile_hidden"> 
						<input type="text" placeholder="Enter OTP" name="try_otp" id="try_otp"> 
					</div>					
					<input type="button" onclick="verifyotp();" class="btn btn-danger btn-block" name="submit" value="Verify"/>
					<a href="index.php"><button class="btn btn-danger btn-block" type="button">Login</button></a>
					</form>
				
				
				
				<form  method="post" id="new_password" name="new_password" style="display:none;">					
					<input type="hidden" placeholder="Enter OTP" name="mobile_hide" id="mobile_hide"> 
					<label>New Password</label>
					<div class="input-group">
						<span class="fa fa-envelope" aria-hidden="true"></span>
						<input type="password" name="password1" id="password1" placeholder="Enter Your New Password" required=""> 
					</div>
					<label>Confirm Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="Password" id="confirm_password" name="confirm_password" placeholder="Enter Confirm Password" required="">
					</div> 
					<input onclick="" class="btn btn-danger btn-block" type="button" name="submit" value="Reset"> 
					<input onclick="update_password();" button class="btn btn-danger btn-block" type="button" name="submit" value="Login">
				</form>
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
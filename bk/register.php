<!DOCTYPE html>

<head>
<title>Health</title>
 <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Business Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    
	<!--// JS files-->
	<script type="text/JavaScript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" ></script>
	<script src="js/registration.js" type="text/javascript"></script>

	<!-- //Meta-Tags -->
	
	<!-- css files -->
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<!-- //css files -->
		
</head>

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
			<div class="alert alert-danger" id="error_message" style="display:none;color:red;"></div>
				<h2>Register Your Account</h2>
				<p id="doc_reg" >Are you a doctor? <a href="javascript:void(0);" onclick="setType(1);">Register here</a></p>
				<p id="pat_reg" style="display:none;">Are you a patient? <a href="javascript:void(0);" onclick="setType(0);">Register here</a></p>
				<form method="post" id="registration" name="registration" enctype="multipart/form-data">
					<label>Full Name</label>
					<div class="input-group">
						<span class="fa fa-pencil" aria-hidden="true"></span>
						<input type="text" autocomplete="off" class="form-control" name="full_name" id="full_name" placeholder="Enter Full Name" required>
																	
					</div>
					<div id="fname_error" style="color:#FF0000"></div>
					<label>Mobile Number</label>
					<div class="input-group">
						<span class="fa fa-mobile" aria-hidden="true"></span>
						<input type="text" id="mobile" name="mobile" class="form-control" placeholder="Enter Mobile" onkeypress="return isNumberKey(event)" maxlength="10" required>
						<div id="mobile_error" style="color:#FF0000">
						</div>
					</div>
					<label>Password</label>
					<div class="input-group">
						<span class="fa fa-lock" aria-hidden="true"></span>
						<input type="password" class="form-control" name="password" id="password" placeholder="Enter password" required>
					</div>
					<div id="password_error" style="color:#FF0000">
						</div>
					<div class="input-group"  style="display:none;">
						<input type="hidden" class="form-control"  name="type" id="type" value="0">	
					</div>
					<input class="btn btn-danger btn-block" type="button" name="submit" value="Register" onclick="validateForm();">
					<a href="index.php"><button class="btn btn-danger btn-block" type="button">Login</button></a>                
				</form>
			
			<form  method="post" id="verify_otp" name="verify_otp" style="display:none;">
			<div class="alert alert-danger" id="otp_error_message" style="display:none;color:red;"></div>
				<label>OTP</label>
				<div class="input-group">
					<span class="fa fa-mobile" aria-hidden="true"></span>
					<input type="hidden" id="mobile_hidden" name="mobile_hidden"/>
					<input type="text" id="verify_mobile" name="verify_mobile" placeholder="Enter OTP">
					<div id="otp_error" style="color:#FF0000">
					</div>
				</div>					
				<input class="btn btn-danger btn-block" type="button" name="submit" onclick="check_otp();" value="Verify">
				<a href="index.php"><button class="btn btn-danger btn-block" type="button">Login</button></a>                
			</form>				
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

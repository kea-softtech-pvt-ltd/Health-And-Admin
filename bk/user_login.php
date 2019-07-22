<?php
include_once('includes/application_top_no_login.php');
?>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>		 
</head>

 <div class="login-wrapper">
        
        <div class="container-center">
            <div class="panel panel-bd">
                <div class="panel-heading">
                    <div class="view-header">
                        <div class="header-icon">
                            <i class="pe-7s-unlock"></i>
                        </div>
                        <div class="header-title">
                            <h3>Login</h3>
                            <small><strong>Please enter your credentials to login.</strong></small>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
					<div class="alert alert-danger" id="error_message" style="display:none;"></div>
					<form method="post" name="loginForm" id="loginForm">
					<div class="form-group">
						<label class="control-label" for="username">Username</label>
						<input type="text" placeholder="example@gmail.com" title="Please enter you username" name="username" id="username" class="form-control"/>
						<div id="email_error" style="color:#FF0000">
						</div>
						<span class="help-block small">Your unique username to app</span>
					</div>
					<div class="form-group">
						<label class="control-label" for="password">Password</label>
						<input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control" />
						<div id="password_error" style="color:#FF0000">
						</div>
						<span class="help-block small">Your strong password</span>
					</div>
					<div>
						<input type="button" input type="button" class="btn btn-primary" onclick="validateForm1();" value="Login" />
						<button type="button" input type="button"><a  href="forgotpassword.php">Forgot Password</a></button>

					</div>
					</form>
                </div>
            </div>
        </div>
    </div>
	<script src="js/user_login.js" type="text/javascript"></script>
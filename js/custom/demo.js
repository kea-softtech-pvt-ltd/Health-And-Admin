function validateForm()
{		
	var _invalid = false;
	var _mobilenumber = $('#mobilenumber').val(); 
	var _password = $('#password').val();

	if(_mobilenumber=="") 
	{
		$('#mobilenumber_error').show();
		$('#mobilenumber_error').html('Please enter mobile number');
		setTimeout(function(){ $('#mobilenumber_error').hide(); }, 5000);
		_invalid = true;
	}
	
	if(_password=="") 
	{
		$('#password_error').show();
		$('#password_error').html('Please enter password');
		setTimeout(function(){ $('#password_error').hide(); }, 5000);
		_invalid = true;
	}	

	if(!_invalid)
	{	
		var formData = new FormData($('#loginForm')[0]);
		
		$.ajax({
			
			url: "ajax/ajax_user_login.php",
			type: "POST",
			data: { mobilenumber : mobilenumber, password : password },
			success: function(result)
			{	
				 
				if($.trim(result)=='doctor')
				{
					// alert('in doctor');
					window.location.href='form.php'
				}
				else if($.trim(result)=='patient')
				{
					// alert('in patient');
					window.location.href='patient_form.php'
				}
				else
				{
					$('#error_message').show().html('Invalid mobile or password');
					setTimeout(function(){
					$('#error_message').hide();},5000)
				}
			}
		});						
	}
}







//code for forgot password


function validateotp()
{
	var _invalid = false;
	var _mobile_check = $('#input_mobile').val();
	
	if(_mobile_check=="")
	{
		$('#otp_error').show();
		$('#otp_error').html('please enter mobile');
		setTimeout(function(){ $('#otp_error').hide(); }, 5000);
		_invalid = true;
	}
	else if(_mobile_check.length < 10)
	{
		$('#otp_error').show();
		$('#otp_error').html('please enter valid mobile');
		setTimeout(function(){ $('#otp_error').hide(); }, 5000);
		_invalid = true;
	}
	if(!_invalid)
	{	
		
		$.ajax({
			url: "ajax/ajax_forget_password.php", //for data insertion to database"
			type: "POST",
			data: {mobile_number : _mobile_check, action : "check_mobile"},			
			success: function(result){			
				if($.trim(result) == 'error') 
				{						
					$('#otp_error').show().html('Invalid mobile number.');	
					return false;					
				}
				else //if($.trim(result) == 'success') 
				{
					alert($.trim(result));
					$('#otp_error').hide();
					$('#mobile_hidden').val(_mobile_check);					
					$('#send_otp').hide();
					$('#verify_otp').show();
				}					
			}	
		});
	}
}



function verifyotp()
{
	
	var _invalid = false;
	var _otp_check = $('#try_otp').val();
	var _mobile_check = $('#mobile_hidden').val();
		
	if(_otp_check=="")
	{
		$('otp_error').show();
		$('otp_error').html('please enter otp');
		setTimeout(function(){ $('#otp_error').hide(); }, 5000);
		_invalid = true;
	}
	if(!_invalid)
	{		
		
		$.ajax({
			url: "ajax/ajax_forget_password.php", //for data insertion to database"
			type: "POST",
			data: {mobile :_mobile_check, otp : _otp_check, action : "verify"},
			
			success: function(result){			
				if($.trim(result)=='success')
				{
					$('#mobile_hide').val(_mobile_check);
					$('#verify_otp').hide();
					$('#new_password').show();					
				}
			}	
		});
	}
}


function update_password()
{
	var _invalid = false;
	var _new_password = $('#password1').val();
	var _confirm_password = $('#confirm_password').val();
	var mobile_id = $('#mobile_hide').val();
	
	if(_new_password=="")
	{
		$('newpassword_error').show();
		$('newpassword_error').html('please enter newpassword');
		setTimeout(function(){ $('#newpassword_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_confirm_password=="")
	{
		$('newpassword_error').show();
		$('newpassword_error').html('please enter confirm password');
		setTimeout(function(){ $('#newpassword_error').hide(); }, 5000);
		_invalid = true;
	}
	else if(_confirm_password!=_new_password)
	{
		$('newpassword_error').show();
		$('newpassword_error').html('passwords does not match');
		setTimeout(function(){ $('#newpassword_error').hide(); }, 5000);
		_invalid = true;
	}
	if(!_invalid)
	{
		
		$.ajax({
			url: "ajax/ajax_forget_password.php", //for data insertion to database"
			type: "POST",
			data: {mobile : mobile_id, pass : _new_password, action : "set_password"},
			success: function(result)
			{	
				
				if($.trim(result)=='success')
				{
					
					window.location.href='login.php'
				}
			}
		});
	}
}





function isNumberKey(evt)
{
	 var charCode = (evt.which) ? evt.which : event.keyCode
	 if(charCode > 31 && (charCode < 48 || charCode > 57))
	 {
		 return false;
	 }
	else
	{
		return true;
	}
}
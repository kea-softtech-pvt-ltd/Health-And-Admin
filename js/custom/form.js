function validateDoctorPersonalForm()
{
	var _invalid = false;
	
	//validation check for fileds
	
	var _email = $('#email').val();
	
	if(_email=="")
	{
		$('#email_error').show();
		$('#email_error').html('Please enter email id');
		setTimeout(function(){ $('#email_error').hide(); }, 5000);
		_invalid = true;
	}
	else if(IsEmail(_email)==false)
	{
		$('#email_error').show();
		$('#email_error').html('Please enter valid Email id');
		setTimeout(function(){ $('#email_error').hide(); }, 3000);
		_invalid = true;
	}

	
	if(!_invalid)
	{
		
		var formData = new FormData($('#doctor_personal')[0]);
		formData.append('action', 'doctor_personal_info');
		$.ajax({
			url: "ajax/ajax_profile.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result){
				if($.trim(result)=='success')
				{
					$('#doctor_educational').show();
				}
			}	
		});
	}
}


function IsEmail(email) 
{
		var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!regex.test(email))
		{
		return false;
		}
		else
		{
		return true;
		}
}


function validateDoctorEducational()
{	
		var formData = new FormData($('#doctor_educational')[0]);
		formData.append('action', 'doctor_educational_info');
		$.ajax({
			url: "ajax/ajax_profile.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result){
				alert(result);
				
			}	
		});	
}



function doctor_clinic_info()
{
	var _invalid = false;
	
	//validation check for fileds
	
	var _name = $('#clinic_name').val();
	var _address = $('#clinic_address').val();
	var _state = $('#clinic_state').val();
	var _city = $('#clinic_city').val();
	var _locality = $('#clinic_locality').val();
	var _pincode = $('#clinic_pincode').val();

	
	if(_name=="")
	{
		$('#clinic_name_error').show();
		$('#clinic_name_error').html('Please enter clinic Name');
		setTimeout(function(){ $('#clinic_name_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_address=="")
	{
		$('#clinic_address_error').show();
		$('#clinic_address_error').html('Please enter clinic address');
		setTimeout(function(){ $('#clinic_address_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_state=="")
	{
		$('#clinic_state_error').show();
		$('#clinic_state_error').html('Please enter clinic state');
		setTimeout(function(){ $('#clinic_state_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_city=="")
	{
		$('#clinic_city_error').show();
		$('#clinic_city_error').html('Please enter clinic city');
		setTimeout(function(){ $('#clinic_city_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_locality=="")
	{
		$('#clinic_locality_error').show();
		$('#clinic_locality_error').html('Please enter clinic locality');
		setTimeout(function(){ $('#clinic_locality_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_pincode=="")
	{
		$('#clinic_pincode_error').show();
		$('#clinic_pincode_error').html('Please enter pincode');
		setTimeout(function(){ $('#clinic_pincode_error').hide(); }, 5000);
		_invalid = true;
	}
	else if(_pincode.length <= 5)
	{
		$('#clinic_pincode_error').show();
		$('#clinic_pincode_error').html('Please enter valid pincode');
		setTimeout(function(){ $('#clinic_pincode_error').hide(); }, 5000);
		_invalid = true;
	}

	if(!_invalid)
	{
		
		var formData = new FormData($('#clinic_info')[0]);
		formData.append('action', 'doctor_clinic_info');
		$.ajax({
			url: "ajax/ajax_profile.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result){
				alert(result);				
			}	
		});
	}
}


function doctor_professional_info()
{
	var _invalid = false;
	
	//validation check for fileds
	
	var _number = $('#registration_number').val();
	var _council = $('#registration_council').val();
	var _year = $('#registration_year').val();
	var _gst = $('#gst').val();

	
	if(_number=="")
	{
		$('#registration_number_error').show();
		$('#registration_number_error').html('Please enter registration Number');
		setTimeout(function(){ $('#registration_number_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_council=="")
	{
		$('#registration_council_error').show();
		$('#registration_council_error').html('Please enter council');
		setTimeout(function(){ $('#registration_council_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_year=="")
	{
		$('#registration_year_error').show();
		$('#registration_year_error').html('Please enter registration year');
		setTimeout(function(){ $('#registration_year_error').hide(); }, 5000);
		_invalid = true;
	}
	if(_gst=="")
	{
		$('#gst_error').show();
		$('#gst_error').html('Please enter GSTIN');
		setTimeout(function(){ $('#gst_error').hide(); }, 5000);
		_invalid = true;
	}

	if(!_invalid)
	{
		
		var formData = new FormData($('#professional_details')[0]);
		formData.append('action', 'professional_info');
		$.ajax({
			url: "ajax/ajax_profile.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result){
				alert(result);				
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


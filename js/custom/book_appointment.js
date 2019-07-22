// Form validation code will come here.
function appointment() 
{
	var _invalid = false;
	
	var _date = $('#date').val();
	var _problem = $('#problem').val();
	
	if(_date=="")
	{
		$('#date_error').show();
		$('#date_error').html('Please enter appointment date');
		setTimeout(function(){ $('#date_error').hide(); }, 3000);
		_invalid = true;
	} 
	if(_problem=="")
	{
		$('#problem_error').show();
		$('#problem_error').html('Please enter problem');
		setTimeout(function(){ $('#problem_error').hide(); }, 3000);
		_invalid = true;
	}
	
	

	
	if(!_invalid)
	{
		alert(1);
		var formData = new FormData($('#book_appointment')[0]);
		formData.append('action','appointment_confirm');
		$.ajax({
			url: "ajax/ajax_book_appointment.php", //for data insertion to database"
			type: "POST",
			data: formData,
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result){
			if($.trim(result)=='success')
				alert(result);
				{
					if(confirm("Thank You For booking Your Appointment."))
					{
						window.location.href = 'confirm.php';
					}
				}
			
			}	
		});
	}
}







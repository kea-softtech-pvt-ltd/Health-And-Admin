
function appointment() 
{
	var _invalid = false;
	
	/* var _date = $('#date').val();
	var _time = $('#time').val();
	
	if(_date=="")
	{
		$('#appointment_error').show();
		$('#appointment_error').html('Please enter appointment date');
		setTimeout(function(){ $('#appointment_error').hide(); }, 3000);
		_invalid = true;
	} 
 */
	
	if(!_invalid)
	{
		var formData = new FormData($('#book_appointment')[0]);
		formData.append('action','appointment_request');
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
				{
					
					window.location.href = 'booking-page.php';
				}
			
			}	
		});
	}
}


function completed_appointment()
{
	$('#todays').hide();
	$('#completed').show();
	$('#pending').hide();
}

function todays_appointment()
{
	$('#todays').show();
	$('#completed').hide();
	$('#pending').hide();
}

function pending_appointment()
{
	$('#pending').show();
	$('#completed').hide();
	$('#todays').hide();
}


function view(user_id)
{        
	 alert(1);
	$.ajax({
		url: "ajax/ajax_book_appointment.php", 
		type: "POST",
		data: { id : user_id, action:'patient_view'},//to pass the value on another page 
		success: function(result){
			//alert(result);
			$('#profile').html(result);
		}	
	});
}
function getData(user_id,appointment_id)
{
	// alert(11);
	$.ajax({
		url: "ajax/ajax_book_appointment.php", //for data update to database"
		type: "POST",
		data: { userid : user_id,app_id : appointment_id,action:'edit_list'},//to pass the value on another page 
		success: function(result){
			// alert(result);
			$('#profile_data').html(result);
		}	
	});
}
function confirmList()
{
	alert(11);
	// var formData = new FormData($('#proaction','update_listfile_data_form')[0]);
		
		$.ajax({
			url: "ajax/ajax_book_appointment.php", //for data insertion to database"
			type: "POST",
			data: {app_date : date,id : app_id, action :'update_list'},
			cache: false,
			contentType: false,
			enctype: 'multipart/form-data',
			processData: false,
			success: function(result)
			{
				// alert(result);
				 if($.trim(result)=='success')
					alert(result);
				{
					//window.location.href = 'patient-list.php';
				} 				
			}	
		});
}
function confirmation(user_id)
{
	if(confirm("Are you sure to delete?"))
	{	
		alert(1);
		$.ajax({
			url: "ajax/ajax_book_appointment.php", 
			type: "POST",
			data: { id : user_id, action:'delete_appointment' },//to pass the value on another page 
			success: function(result){
				if($.trim(result)=='success')	
					alert(result);
					//window.location.href='patient-list.php'			
			}	
		});
    }
}

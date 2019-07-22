<?php
include_once('../includes/application_top.php');
include_once('../class/book_appointment.php');
//include_once('../class/profile1.php');

$book_app = new Bookappointment();

if($_REQUEST['action']=='appointment_confirm')
{
	 //print_r($_REQUEST);
	print_r($_FILES);
	 
	$data = Array(
			'app_date' => $_REQUEST['date'],
			'problem'  => $_REQUEST['problem'],
			'patient_id' => $_SESSION['user_id'],
			'doc_id' => $_SESSION['user_id']
			
		);
			
		$appointment_update_result = $book_app->addAppointment($data);
		if($appointment_update_result)
		{
			echo "success";
		}
		else
		{
			echo "error";
		}
}
else if($_REQUEST['action']=='patient_view')
{
	$id = $_REQUEST['id'];
	$user = $book_app->getUser($id);
?>
		<label>Profile Picture:</label>
		<img src="<?php echo base_url_image.$user['pic_source'];?>" style="width:70px;">
		<hr>
		<label>Full Name:</label>
		<span><?php echo $user['fullname'];?></span>
		<hr>
		<label>Date:</label>
		<span><?php echo $user['dob'];?></span>
		<hr>
		<label>Address:</label>
		<span><?php echo $user['address_line_one'];?></span>
		<hr>
		
<?php
}
else if($_REQUEST['action']=="edit_list")
{
	$user_id = $_REQUEST['userid'];
	$appointment_id = $_REQUEST['app_id'];
	// echo($appointment_id);
	$user = $book_app->getAppdate($appointment_id);
	
?>
		<div class="form-group">
			<input type="hidden" id="app_id" name="app_id" value="<?php echo $user['app_id'];?>">
		</div>
		
		<div class="form-group">
			<label>Apponitment Date</label>
			<input name="date" id="date" class="datepicker hasDatepicker" type="date" value="<?php echo $user['app_date'];?>">
		</div>

	<tr>
		<td colspan="2">
			<input type="button" onclick="confirmList();"  name="submit" class="btn btn-primary" value="save"/>
		</td>
	</tr>
<?php
}

else if($_REQUEST['action']=='update_list')
{
	print_r($_REQUEST);
	// print_r($_FILES);
	//die;
		
	// $data = Array(			
		   // 'app_date' => $_REQUEST['date']
		// );
		
			/* if(!empty($pic))
			$data = array_merge($data,$pic); */
		// $appointment_update_list = $book_app->updateUser($id,$data);
			//print_r($patient_update_result);
			//die;
			/* if($appointment_update_list)
			{
				echo "success";
			}
			else
			{
				echo "error occured";
			} */
	
}
else if($_REQUEST['action']=="delete_appointment")
{
	$id = $_POST['id'];
	$data = array('isDeleted' => '1');			
	$result = $book_app->deleteappointment($id,$data);
	if($result)
	{
		echo "success";
	}	
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">

<script>
 $(function () {
   var bindDatePicker = function() {
		$("#date").datetimepicker({
        format:'YYYY-MM-DD hh:ss a',
			icons: {
				time: "fa fa-clock-o",
				date: "fa fa-calendar",
				up: "fa fa-arrow-up",
				down: "fa fa-arrow-down"
			}
		}).find('input:first').on("blur",function () {
			// check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
			// update the format if it's yyyy-mm-dd
			var date = parseDate($(this).val());

			if (! isValidDate(date)) {
				//create date based on momentjs (we have that)
				date = moment().format('MM-DD-YYYY');
			}

			$(this).val(date);
		});
	}
   
   var isValidDate = function(value, format) {
		format = format || false;
		// lets parse the date to the best of our knowledge
		if (format) {
			value = parseDate(value);
		}

		var timestamp = Date.parse(value);

		return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
		var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
		if (m)
			value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

		return value;
   }
   
   bindDatePicker();
 });
</script>

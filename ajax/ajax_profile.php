<?php 
include_once('../includes/application_top_no_login.php');
include_once('../class/profile.php');


//     'doctor_identity_proof', 'registration_proof', 'clinic_registration_proof', 'type', 'status', 'isVerified', 'created_date', 'updated_date', 'isDeleted;




$profile = new Profile();
// $id = $_SESSION['id'];
$id = 46;

if($_REQUEST['action']=="doctor_personal_info")
{	
	
	$personal = Array(
				'fullname' => $_REQUEST['fullname'], 
				'email' => $_REQUEST['email'], 
				'mobile' => $_REQUEST['mobile'],
				'dob' => $_REQUEST['dob'], 
				'sex' => $_REQUEST['gender'], 
				'blood_group' => $_REQUEST['blood_group'], 
				'address_line_one' => $_REQUEST['address'], 
				'state' => $_REQUEST['state'], 
				'city' => $_REQUEST['city'], 
				'locality' => $_REQUEST['locality'], 
				'pincode' => $_REQUEST['pincode']
			);	
	
	if($profile->updateDoctorInfo($id, $personal))
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}

else if($_REQUEST['action']=="doctor_educational_info")
{
	$educational = Array(
				'qualification' => $_REQUEST['qualification'], 
				'college' => $_REQUEST['college'], 
				'passout_year' => $_REQUEST['passout'], 
				'year_of_experience' => $_REQUEST['year_of_experience']
				);

	if($profile->updateDoctorInfo($id,$educational))
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}

else if($_REQUEST['action']=="doctor_clinic_info")
{
	$clinic = Array(
				'clinic_name' => $_REQUEST['clinic_name'], 
				'clinic_address_line_one' => $_REQUEST['clinic_address'], 
				'clinic_state' => $_REQUEST['clinic_city'],  
				'clinic_city' => $_REQUEST['clinic_state'], 
				'clinic_locality' => $_REQUEST['clinic_locality'],
				'clinic_pincode' => $_REQUEST['clinic_pincode']
				);

	if($profile->updateDoctorInfo($id,$clinic))
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}


else if($_REQUEST['action']=="professional_info")
{
	$registration = Array(
				'registration_no' => $_REQUEST['registration_number'], 
				'registration_council' => $_REQUEST['registration_council'], 
				'registration_year' => $_REQUEST['registration_year'], 
				'gstin_no' => $_REQUEST['gst']
				);

	if($profile->updateDoctorInfo($id,$registration))
	{
		echo "success";
	}
	else
	{
		echo "error";
	}
}
?>
<?php
include_once('class/profile.php');
$profile = new Profile();

$general_result = $profile->getGeneralProfile($_SESSION['user_id']);
$professional_result = $profile->getProfessionalProfile($_SESSION['user_id']);
$educational_result = $profile->getEducationalProfile($_SESSION['user_id']);

?>

	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<script src="js/profile.js" type="text/javascript"></script>


<div class="container"><br>
  
	<ul class="nav nav-tabs">    
		<li class="active"><a data-toggle="tab" href="#general">General</a></li>
		<li><a data-toggle="tab" href="#professional">Professional</a></li>
		<li><a data-toggle="tab" href="#educational">Educational</a></li>
		<li><a href="session_end.php">Logout</a></li>
	</ul>

	<div class="tab-content">    
		<div id="general" class="tab-pane fade active in"><br><br>
			<table id="general_display" name="general_display">
				<tr>					
					<td>
						<span name="user_id" id="user_id" value="<?php echo $general_result['user_id'];?>"></span>
					</td>
				</tr>
				<tr>
					<th>
						Full Name
					</th>
					<td>
						<?php echo $general_result['fullname'];?>						
					</td>
				</tr>				
				<tr>
					<th>
						Mobile
					</th>
					<td>
						<?php echo $general_result['mobile'];?>
					</td>
				</tr>				
				<tr>
					<th>
						Mobile
					</th>
					<td>
						<?php echo $general_result['email'];?>
					</td>
				</tr>				
				<tr>
					<th>
						Address
					</th>
					<td>
						<?php echo $general_result['address'];?>
					</td>
				</tr>				
				<tr>
					<th>
						Date Of Birth
					</th>
					<td>
						<?php echo $general_result['dob'];?>
					</td>
				</tr>				
				<tr>
					<th>
						Gender
					</th>
					<td>
						<?php 
						if($general_result['sex']==1)
						{
							echo "Male";
						}
						else
						{
							echo "Female";
						}
						?>
					</td>
				</tr>				
				<tr>
					<td>
					<input type="Button" onclick="hideForm();" value="update"/>
					</td>
				</tr>
			</table>
			
			
			<form method="post" id="update_general" name="update_general" style="display:none;">
				<table>
				<tr>
					<th>
						Full Name
					</th>
					<td>
						<input type="text" name="full_name" id="full_name" value="<?php echo $general_result['fullname'];?>">
						<div id="full_name_error" style="color:#FF0000">
						</div>
					</td>
				</tr>				
				<tr>
					<th>
						Mobile
					</th>
					<td>
						<input readonly="readonly" name="mobile" id="mobile" value="<?php echo $general_result['mobile'];?>">
					</td>
				</tr>				
				<tr>
					<th>
						Email
					</th>
					<td>
						<input type="text" name="email" id="email" value="<?php echo $general_result['email'];?>">
						<div id="email_error" style="color:#FF0000">
						</div>
					</td>
				</tr>				
				<tr>
					<th>
						Address
					</th>
					<td>
						<input type="text" name="address" id="address" value="<?php echo $general_result['address'];?>">
						<div id="address_error" style="color:#FF0000">
						</div>
					</td>
				</tr>				
				<tr>
					<th>
						Date Of Birth
					</th>
					<td>
						<input type="date" name="dob" id="dob" value="<?php echo $general_result['dob'];?>">
						<div id="dob_error" style="color:#FF0000">
						</div>
					</td>
				</tr>				
				<tr>
					<th>
						Gender
					</th>
					<td>
						<label class="radio-inline">
							<input type="radio" name="sex" id="sex" value="1"<?php if($general_result['sex']=='1') { ?> checked <?php } ?>>Male
						</label> 
						<label class="radio-inline">
							<input type="radio" name="sex" id="sex" value="0"<?php if($general_result['sex']=='0') { ?> checked <?php } ?>>Female
						</label>						
					</td>
				</tr>				
				<tr>
					<td>
					<input type="Button" onclick="updateGeneralForm();" value="update"/>
					</td>
				</tr>
			</table>
			</form>
		</div>
		
		
		<div id="professional" class="tab-pane fade"><br><br>			
			<table id="display_professional" name="display_professional">
				<tr>
					<th>
						User Registration
					</th>
					<td>
						<?php echo $professional_result['user_id'];?>
					</td>
				</tr>
				<tr>
					<th>
						Department
					</th>
					<td>
						<?php echo $professional_result['department'];?>
					</td>
				</tr>
				
				<tr>
					<th>
						Description
					</th>
					<td>
						<?php echo $professional_result['description'];?>
					</td>
				</tr>
				<tr>
					<th>
						Short Bio
					</th>
					<td>
						<?php echo $professional_result['short_bio'];?>
					</td>
				</tr>				
				<tr>
					<td>
					<input type="Button" onclick="hideProfessionalForm();" value="update"/>
					</td>
				</tr>
			</table>
			
			<form method="post" id="update_professional" name="update_professional" style="display:none;">
			<table>
				<tr>				
					<th>
						User Registration
					</th>
					<td>
						<input readonly="readonly" id="user" name="user" value="<?php echo $professional_result['user_id'];?>">
						</td>
				</tr>
				<tr>
					<th>
						Department
					</th>
					<td>
						<input type="text" id="department" name="department" value="<?php echo $professional_result['department'];?>">
						<div id="department_error" style="color:#FF0000">
						</div>
					</td>
				</tr>
				<tr>
					<th>
						Description
					</th>
					<td>
						<input type="text" name="description" id="description" value="<?php echo $professional_result['description'];?>">
						<div id="description_error" style="color:#FF0000">
						</div>
					</td>
				</tr>
				<tr>
					<th>
						Short Bio
					</th>
					<td>
						<input type="text" id="short_bio" name="short_bio" value="<?php echo $professional_result['short_bio'];?>">
						<div id="short_bio_error" style="color:#FF0000">
						</div>
					</td>
				</tr>				
				<tr>
					<td>
					<input type="Button" onclick="updateProfessionalForm();" value="update"/>
					</td>
				</tr>
			</table>
			</form>
		</div>
				
		<div id="educational" class="tab-pane fade"><br><br>
			<table id="display_education" name="display_education">
				<tr>
					<th>
						User Registration
					</th>
					<td>
						<?php echo $educational_result['user_id'];?>
					</td>
				</tr>
				<tr>
					<th>
						Highest Degree
					</th>
					<td>
						<?php echo $educational_result['highest_degree'];?>
					</td>
				</tr>
				
				<tr>
					<th>
						College/University	
					</th>
					<td>
						<?php echo $educational_result['college/university'];?>
					</td>
				</tr>
				<tr>
					<th>
						Passout Year
					</th>
					<td>
						<?php echo $educational_result['passout_year'];?>
					</td>
				</tr>
				<tr>
					<th>
						Other Certification
					</th>
					<td>
						<?php echo $educational_result['other_certification'];?>
					</td>
				</tr>
				<tr>
					<th>
						Description
					</th>
					<td>
						<?php echo $educational_result['description'];?>
					</td>
				</tr>
				<tr>
					<th>
						Date Of Certification
					</th>
					<td>
						<?php echo $educational_result['date_of_certificate'];?>
					</td>
				</tr>				
				<tr>
					<td>
					<input type="Button" onclick="hideEducationalForm();" value="update"/>
					</td>
				</tr>
			</table>
			
			<form method="post" id="update_educational" name="update_educational" style="display:none;">
			<table>
				<tr>
					<th>
						User Registration
					</th>
					<td>
						<input readonly="readonly" id="user" name="user" value="<?php echo $educational_result['user_id'];?>">
					</td>
				</tr>
				<tr>
					<th>
						Highest Degree
					</th>
					<td>
						<input type="text" id="qualification" name="qualification" value="<?php echo $educational_result['highest_degree'];?>">
						<div id="qualification_error" style="color:#FF0000">
						</div>
					</td>
				</tr>				
				<tr>
					<th>
						College/University	
					</th>
					<td>
						<input type="text" id="college" name="college" value="<?php echo $educational_result['college/university'];?>">
						<div id="college_error" style="color:#FF0000">
						</div>
					</td>
				</tr>
				<tr>
					<th>
						Passout Year
					</th>
					<td>
						<input type="date" id="pass_year" name="pass_year" value="<?php echo $educational_result['passout_year'];?>">
						<div id="pass_year_error" style="color:#FF0000">
						</div>
					</td>
				</tr>
				<tr>
					<th>
						Other Certification
					</th>
					<td>
						<input type="text" name="extra" id="extra" value="<?php echo $educational_result['other_certification'];?>">
					</td>
				</tr>
				<tr>
					<th>
						Description
					</th>
					<td>
						<input type="text" id="description" name="description" value="<?php echo $educational_result['description'];?>">
					</td>
				</tr>
				<tr>
					<th>
						Date Of Certification
					</th>
					<td>
						<input type="date" id="doc" name="doc" value="<?php echo $educational_result['date_of_certificate'];?>">
					</td>
				</tr>				
				<tr>
					<td>
					<input type="Button" onclick="updateEducationForm();" value="update"/>
					</td>
				</tr>
			</table>
			</form>
		</div>
	</div>
</div>


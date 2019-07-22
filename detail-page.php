<?php 
    include_once('header.php');
	include_once('class/Patient.php');
	
	$p = new Patient();
	//$data = $p->getUser($_GET['user_id']);
	$data = $p->getUser($_SESSION['user_id']);
 ?>
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->

		<div class="container margin_60">
			<div class="row">
			<?php include_once('patient_sidebar.php');?>
				<div class="col-xl-9 col-6">
					<!--nav id="secondary_nav">
						<div class="container">
							<ul class="clearfix">
								<li><a href="#section_1" class="active">General info</a></li>
								<li><a href="#section_2">Reviews</a></li>
								<li><a href="#sidebar">Booking</a></li>
							</ul>
						</div>
					</nav-->
					<div id="section_1">
						<div class="box_general_3">
							<div class="profile">
								<div class="row">
									<div class="col-lg-5 col-md-4">
										<figure>
											<img src="<?php echo base_url_image.$data['pic_source'];?>" alt="" class="img-fluid"  height="200" width="180">
										</figure>
									</div>
									<div class="col-lg-7 col-md-8">
										<small>Primary care - <label><?php echo $data['specialization'];?></label></small>
										<h1> <label><?php echo $data['fullname'];?></label> </h1>
										<span class="rating">
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star voted"></i>
											<i class="icon_star"></i>
											<small>(145)</small>
											<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
										</span>
										<ul class="statistic">
											<li>854 Views</li>
											<li>124 Patients</li>
										</ul>
										<ul class="contacts">
											<li>
												<h6>Address</h6>
												<label><?php echo $data['address_line_one'];?></label>-
												<a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank"> <strong>View on map</strong></a>
											</li>
											<li>
												<h6>Phone</h6> <label><?php echo $data['mobile'];?></label>
										</ul>
									</div>
								</div>
							</div>
							
							<hr>
							
							<!-- /profile -->
							<div class="indent_title_in">
								<i class="pe-7s-user"></i>
								<h3>Professional statement</h3>
								<p><label><?php echo $data['qualification'];?></p>
							</div>
							<div class="wrapper_indent">
								<p><label><?php echo $data['year_of_experience'];?></p>
								<h6>Specializations</h6>
								<div class="row">
									<div class="col-lg-6">
										<ul class="bullets">
											<li><label><?php echo $data['specialization'];?></li>
										</ul>
									</div>
									<!--div class="col-lg-6">
										<ul class="bullets">
											<li>Abdominal Radiology</li>
											<li>Addiction Psychiatry</li>
											<li>Adolescent Medicine</li>
											<li>Cardiothoracic Radiology </li>
										</ul>
									</div-->
								</div>
								<!-- /row-->
							</div>
							<!-- /wrapper indent -->

							<hr>

							<div class="indent_title_in">
								<i class="pe-7s-news-paper"></i>
								<h3>Education</h3>
								<p><label><?php echo $data['qualification'];?></p>
							</div>
							<div class="wrapper_indent">
								<!--p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p-->
								<h6>Curriculum</h6>
								<ul class="list_edu">
									<li><label><?php echo $data['college'];?></li>
									<!--li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
									<li><strong>New York Medical College</strong> - Master Internal Medicine</li-->
								</ul>
							</div>
							<!--  End wrapper indent -->

							<hr>

							<!--div class="indent_title_in">
								<i class="pe-7s-cash"></i>
								<h3>Prices &amp; Payments</h3>
								<p>Mussum ipsum cacilds, vidis litro abertis.</p>
							</div-->
							<!--div class="wrapper_indent">
								<p>Zril causae ancillae sit ea. Dicam veritus mediocritatem sea ex, nec id agam eius. Te pri facete latine salutandi, scripta mediocrem et sed, cum ne mundi vulputate. Ne his sint graeco detraxit, posse exerci volutpat has in.</p>
								<div class="table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Service - Visit</th>
											<th>Price</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>New patient visit</td>
											<td>$34</td>
										</tr>
										<tr>
											<td>General consultation</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>Back Pain</td>
											<td>$40</td>
										</tr>
										<tr>
											<td>Diabetes Consultation</td>
											<td>$55</td>
										</tr>
										<tr>
											<td>Eating disorder</td>
											<td>$60</td>
										</tr>
										<tr>
											<td>Foot Pain</td>
											<td>$35</td>
										</tr>
									</tbody>
								</table>
								</div>
							</div-->
							<!--  /wrapper_indent -->
						</div>
						<!-- /section_1 -->
					</div>
					<!-- /box_general -->

				</div>
				<!-- /col -->
				<aside class="col-xl-9 col-6" id="sidebar">
					<div class="box_general_3 booking">
						<form method="post" name="book_appointment" id="book_appointment">
							<div class="title">
							<h3>Book a Visit</h3>
							<small>Monday to Friday 09.00am-06.00pm</small>
							</div>
							<div class="row">								
								<input class="form-control glyphicon-calendar datetimepicker" type="text" placeholder="Time and Date" id="date" name="date">
								<div id="date_error" style="color:#FF0000">
								</div>
							</div>								
							<!-- /row -->
							<ul class="treatments clearfix">
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit1" name="visit1">
										<label for="visit1" class="css-label">Back Pain visit <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit2" name="visit2">
										<label for="visit2" class="css-label">Cardiovascular screen <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit3" name="visit3">
										<label for="visit3" class="css-label">Diabetes consultation <strong>$55</strong></label>
									</div>
								</li>
								<li>
									<div class="checkbox">
										<input type="checkbox" class="css-checkbox" id="visit4" name="visit4">
										<label for="visit4" class="css-label">General visit <strong>$55</strong></label>
									</div>
								</li>
							</ul>
							<hr>
							 <div class="col-sm-12 form-group">
                                    <label>Problem Statement</label>
                                     <textarea id="problem" name="problem" class="form-control" rows="3" placeholder="Enter Problem Statement" ></textarea>
									<div id="problem_error" style="color:#FF0000">
									</div>
							</div> 
							<!--a href="booking-page.php" class="btn_1 full-width">Book Now</a-->
							<div>
								<input onclick="appointment();" class="btn_1 " name="submit" type="button" value="Book Now">
							</div>
						</form>
					</div>
					<!-- /box_general -->
				</aside>
				<!-- /asdide -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	<?php include_once('footer.php'); ?>
	
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
	
<script src="js/custom/book_appointment.js" type="text/javascript"></script>	
<script>
 $(function () {
   var bindDatePicker = function() {
		$("#date").datetimepicker({
			minDate: 0,
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

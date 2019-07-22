<?php
	include_once('header.php'); 
	include_once('class/profile.php');
	
	$skill = "";
	if(isset($_POST['skill_input']))
		$skill = $_POST['skill_input'];
	
	$p = new Profile();
	$data = $p->getDetail($skill);
	
	//print_r($_REQUEST);
	//print_r($data);
?>
	
	<main class="theia-exception">
		<div id="results">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h4><strong>Showing 10</strong> of 140 results</h4>
					</div>
					<div class="col-md-6">
						<form method="post" action="" name="list_information" id="list_information">
							<div class="search_bar_list">
								<input type="text" class="form-control" id="skill_input" name="skill_input" placeholder="Ex. Specialist, Name, Doctor...">
								<input type="submit" value="Search">
							</div>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /results -->

		<div class="filters_listing">
			<div class="container">
				<ul class="clearfix">
					<li>
						<h6>Type</h6>
						<div class="switch-field">
							<input type="radio" id="all" name="type_patient" value="all" checked>
							<label for="all">All</label>
							<input type="radio" id="doctors" name="type_patient" value="doctors">
							<label for="doctors">Doctors</label>
							<input type="radio" id="clinics" name="type_patient" value="clinics">
							<label for="clinics">Clinics</label>
						</div>
					</li>
					<li>
						<h6>Layout</h6>
						<div class="layout_view">
							<a href="grid-list.html"><i class="icon-th"></i></a>
							<a href="#0" class="active"><i class="icon-th-list"></i></a>
							<a href="list-map.html"><i class="icon-map-1"></i></a>
						</div>
					</li>
					<li>
						<h6>Sort by</h6>
						<select name="orderby" class="selectbox">
						<option value="Closest">Closest</option>
						<option value="Best rated">Best rated</option>
						<option value="Men">Men</option>
						<option value="Women">Women</option>
						</select>
					</li>
				</ul>
			</div>
			<!-- /container -->
		</div>
		<!-- /filters -->
		
		<div class="container margin_60_35">
			<div class="row">
			<?php include_once('patient_sidebar.php');?>
				<div class="col-xl-9 col-6">
					<?php 
					foreach($data as $val) 
					{
						?>
						<div class="strip_list wow fadeIn">
							
							<a href="#0" class="wish_bt"></a>
							<figure>
								<a href="detail-page.html"><img src="<?php echo base_url_image.$val['pic_source'];?>" style="border-radius: 50%;height: 90px;width: 90px;"></a>
							</figure>
							<h2><?php echo $val['clinic_name'];?></h2>
							<small><?php echo $val['specialization'];?></small>
							<h3><?php echo $val['fullname'];?></h3>
							<p><?php echo $val['qualification'];?> <?php echo $val['year_of_experience'];?></p>
							<small><?php echo $val['clinic_address_line_one'];?></small>
							<span class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></span>
							<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="img/badges/badge_1.svg" width="15" height="15" alt=""></a>
							<ul>
								<li><a href="#0" onclick="onHtmlClick('Doctors', 0)" class="btn_listing">View on Map</a></li>
								<li><a href="https://www.google.com/maps/dir//Assistance+%E2%80%93+H%C3%B4pitaux+De+Paris,+3+Avenue+Victoria,+75004+Paris,+Francia/@48.8606548,2.3348734,14z/data=!4m15!1m6!3m5!1s0x0:0xa6a9af76b1e2d899!2sAssistance+%E2%80%93+H%C3%B4pitaux+De+Paris!8m2!3d48.8568376!4d2.3504305!4m7!1m0!1m5!1m1!1s0x47e67031f8c20147:0xa6a9af76b1e2d899!2m2!1d2.3504327!2d48.8568361" target="_blank">Directions</a></li>
								<li><a href="detail-page.php?user_id=<?php echo $val['user_id']; ?>">Book now</a></li>
							</ul>
						</div>
						<!-- /strip_list -->
						<?php
					}
					?>					
					
					<nav aria-label="" class="add_top_20">
						<ul class="pagination pagination-sm">
							<li class="page-item disabled">
								<a class="page-link" href="#" tabindex="-1">Previous</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#">Next</a>
							</li>
						</ul>
					</nav>
					<!-- /pagination -->
				</div>
				<!-- /col -->
				
				<!--aside class="col-lg-5" id="sidebar">
					<div id="map_listing" class="normal_list">
					</div>
				</aside-->
				<!-- /aside -->
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	<?php include_once('footer.php'); ?>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="//maps.googleapis.com/maps/api/js?key=AIzaSyCoz993id_Qq7AcfaoVzviC6swgvQRixuQ"></script>
	<script src="js/markerclusterer.js"></script>
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script>
	
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	<script>
	$(function() {
		$("#skill_input").autocomplete({
			source: "demo.php",
		});
	});
	</script>
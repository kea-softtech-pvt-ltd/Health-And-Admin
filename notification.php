<?php 
include_once('header.php');
?>
<div id="breadcrumb">
	<div class="container">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Category</a></li>
			<li>Page active</li>
				<style>
					.topnav-right
					{
					float: right;
					}
				</style>
				<div class="topnav">
					<div class="topnav-right">
						<li title="Notification" class="the-icons col-md-3 col-sm-3"><i class="icon-bell"></i> <span class="i-name"></span><span class="i-code"></span></li>
					</div>
				</div>
			<ul class="dropdown-menu"></ul>
		</ul>
	</div>
</div>
 <div class="container">
		
		<form method="post" id="comment_form">

			<div class="form-group">

				<label>Enter Subject</label>

				<input type="text" name="subject" id="subject" class="form-control">

			</div>

					<div class="form-group">

					<label>Enter Comment</label>

					<textarea name="comment" id="comment" class="form-control" rows="5"></textarea>

					</div>

			<div class="form-group">

				<input type="submit" name="post" id="post" class="btn btn-info" value="Post" />

			</div>

		</form>
 </div>
<?php include_once('footer.php');?>
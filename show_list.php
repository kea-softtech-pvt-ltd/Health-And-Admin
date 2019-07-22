<?php 
		include_once('header.php');
		include_once('check.php');

		// include_once('class/Patient.php');

        $p = new Patient();  
		$patients = $p->getAllPatients();
		$num = count($patients);		

		/* $p = new Patient();  
		$patients = $p->getAllPatients();
		$num = count($patients); */
?>

        <div class="panel-body">
						<div class="table-responsive">
							<table id="example" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Sr.No</th>
						<th>Doctor Name</th>
						<th>Specialization</th>
						<th>Problem</th>
						<th>Date</th>																	
						
					</tr>
				</thead>	
				<?php 
				$j = 1;
				if($num > 0)
				{
					for($i=0;$i<$num;$i++)
					{
						?>
						<tr>
						    <td>
							   <label><?php echo $j++;?></label>
							</td>
							    <td><?php echo $patients[$i]['fullname'];?></td>
								<td><?php echo $patients[$i]['specialization'];?></td>						   
								<td><?php echo $patients[$i]['problem'];?></td>
							    <td><?php echo $patients[$i]['app_date'];?></td>
						</tr>
						<?php
								
					}	
				}
				?>
							
							</table>
						</div>	
		</div>				

<?php include_once('footer.php'); ?>
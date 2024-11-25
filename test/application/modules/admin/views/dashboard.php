<div class="page-content">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="mb-4">
						<span class="badge badge-soft-primary float-right"><?php echo $rm_data["profiles_count"];?></span>
						<h2 class="card-title mb-0">Total Active Profiles</h2>
					</div>
					<div class="row d-flex align-items-center mb-4">
						<div class="col-8">
							<h2 class="d-flex align-items-center mb-0">
								
							</h2>
						</div>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo $rm_data["assigned_count"];?></span>
								<h5 class="card-title mb-0">Assigned Profiles</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo $rm_data["unassigned_count"];?></span> 
								<h5 class="card-title mb-0">UnAssigned Profiles</h5>
							</div>
						</a>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card"> 
				<div class="card-body">
					<div class="mb-4">
						
						<h5 class="card-title mb-0">Profiles By Profile Type</h5>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/regularprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($regular_profiles['regprofiles']);?></span>
								<h5 class="card-title mb-0">Regular Profiles</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/confidentialprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($confidential_profiles["confprofiles"]);?></span> 
								<h5 class="card-title mb-0">Confidential Profiles</h5>
							</div>
						</a>	
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($sc_profiles["superconfprofiles"]);?></span>
								<h5 class="card-title mb-0">Super Confidential Profiles</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($eliteprofiles["eliteprofiles"]);?></span> 
								<h5 class="card-title mb-0">Elite Profiles</h5>
							</div>
						</a>	
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($supereliteprofiles["supereliteprofiles"]);?></span> 
								<h5 class="card-title mb-0">Super Elite Profiles</h5>
							</div>
						</a>	
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="mb-4">
						
						<h5 class="card-title mb-0">RM Type</h5>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/rcrmprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($rc_rm_profiles['rcrmprofiles']);?></span>
								<h5 class="card-title mb-0">RC Rm Profiles</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/scrmprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($sc_rm_profiles["scrmprofiles"]);?></span> 
								<h5 class="card-title mb-0">SC RM Profiles</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/eliteprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($elite_rm_profiles["elitermprofiles"]);?></span>
								<h5 class="card-title mb-0">Elite RM Profiles</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/supereliteprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($superelite_rm_profiles["superelitermprofiles"]);?></span> 
								<h5 class="card-title mb-0">SuperElite RM Profiles</h5>
							</div>
						</a>	
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="mb-4">
						
						<h5 class="card-title mb-0">Profile Status</h5>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/rcrmprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo matchmetingserious_count();?></span>
								<h5 class="card-title mb-0">Match Meeting Serious</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/scrmprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($sc_rm_profiles["scrmprofiles"]);?></span> 
								<h5 class="card-title mb-0">No service Last 10 Days</h5>
							</div>
						</a>
					</div>
					<div class="col-lg-12  col-xl-12">
						<a href="<?php echo base_url();?>admin/eliteprofiles">
							<div class="mb-4">
								<span class="badge badge-soft-primary float-right"><?php echo count($elite_rm_profiles["elitermprofiles"]);?></span>
								<h5 class="card-title mb-0">Near by Expiry Date</h5>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<h5 class="mb-3">Assigned Profiles By RM</h5>
	<div class="row">
				<?php 
		$i=1;
		foreach($rm_profiles[rmdata] as $row)
		{?>
		<div class="col-lg-3  col-xl-3">
			<div class="card card-body">
				<div class="mb-4">
					<span class="badge badge-soft-primary float-right">RM <?php echo $i;?></span>
					<h5 class="card-title mb-0"><?php echo $row["username"]; ?></h5>
				</div>
				<a href="<?php echo base_url().'admin/list_profiles_by_rm?rmid='.$row['id']; ?>" class="btn btn-info waves-effect waves-light"><?php echo $row["num"];?></a>
			</div>
		</div>
		<?php $i++; } ?>
	</div>  -->
	</div>
</div>



<div class="new-side-content">
<div class="page-content mt-3">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="mb-4">
						<span class="badge badge-soft-primary float-right">Total</span>
						<h5 class="card-title mb-0">Total Active Profiles</h5>
					</div>
					<div class="row d-flex align-items-center mb-4">
						<div class="col-8">
							<h2 class="d-flex align-items-center mb-0">
								<?php echo $rm_data["profiles_count"];?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="mb-4">
						<span class="badge badge-soft-primary float-right">Assigned</span>
						<h5 class="card-title mb-0">Assigned Profiles</h5>
					</div>
					<div class="row d-flex align-items-center mb-4">
						<div class="col-8">
							<h2 class="d-flex align-items-center mb-0">
								<?php echo $rm_data["assigned_count"];?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-xl-4">
			<div class="card">
				<div class="card-body">
					<div class="mb-4">
						<span class="badge badge-soft-primary float-right">Un Assigned</span>
						<h5 class="card-title mb-0">Un Assigned Profiles</h5>
					</div>
					<div class="row d-flex align-items-center mb-4">
						<div class="col-8">
							<h2 class="d-flex align-items-center mb-0">
								<?php echo $rm_data["unassigned_count"];?>
							</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<h5 class="mb-3">Assigned Profiles By RM</h5>
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
	</div>
	</div>
</div>
</div>


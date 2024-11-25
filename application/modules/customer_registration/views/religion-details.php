
<div >
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center min-vh-100">
				<div class="w-100 d-block bg-white shadow-lg rounded my-5">
					<div class="row">
						<div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
						<div class="col-lg-7">
							<div class="p-5">
								<h1 class="h5 mb-1">Religion Details</h1>
								<form class="customerregister needs-validation" method="POST" action="<?php echo site_url();?>registration/religion" novalidate data-toggle="validator">
									  <?php if($this->session->flashdata('msg_succ') != ''){ ?>
										<div class="alert alert-block alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<p>
												<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
											</p>
										</div>
									<?php } ?>
									<?php if($this->session->flashdata('msg_failure') != ''){ ?>
										<div class="alert alert-block alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<p>
												<?php echo $this->session->flashdata('msg_failure')?$this->session->flashdata('msg_failure'):'';?>
											</p>
										</div>
									<?php } ?>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="height">Height</label>
											<select class="form-control form-control-user" id="height" name="height" required>
											   <option value="">Select Height</option>
											   <?php foreach($heights as $value) { ?>
											   <option value="<?php echo stripcslashes($value['height']);?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select height.
											</div>
										</div>
										<div class="col-sm-6">
											<label for="height">Marital Status</label>
											<select class="form-control" id="marital_status" name="marital_status" required>
												 <option value="">Select Marital Status</option>
											   <option value="never_married">Never Married</option>
											   <option value="divorced">Divorced</option>
											   <option value="widow-widower">Widow / Widower</option>
											   <option value="separated">Separated</option>
											   <option value="annulled">Annulled</option>
											</select>
											<div class="invalid-feedback">
												Please select Marital Status.
											</div>
										</div>
									</div>
									<div class="form-group row">										
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="religion">Religion</label>
											<select id="religion" class="form-control form-control-user" name="religion" required>
											   <option selected="selected">Select Religion</option>
											   <?php foreach($religions as $value) { ?>
											   <option value="<?php echo $value['religion'];?>" <?php if($value['religion'] == "Hindu") echo "selected"; ?>><?php echo $value['religion'];?></option><?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select Religion.
											</div>	
										</div>
										<div class="col-sm-6">
											<label for="mothertounge">Mother Tongue</label>
											<select id="mothertounge" class="form-control form-control-user" name="mothertounge" required>
											   <option selected="selected">Select Mother Tongue</option>
											   <?php foreach($mother_tounges as $value) { ?>
											   <option value="<?php echo $value['mothertounge'];?>" <?php if($value['mothertounge'] == "Telugu") echo "selected"; ?>><?php echo $value['mothertounge'];?></option><?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select Mother Tongue.
											</div>																
										</div>
									</div>
									<div class="form-group row hide">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="caste">Caste</label>
											<select id="caste" class="form-control form-control-user" name="caste" required onchange="getsubcaste(this.value)">
											   <option selected="selected">Select Caste</option>
											   <?php foreach($castes as $value) { if($value['caste']=='Kamma'){?>
												<option value="<?php echo $value['caste'];?>" selected><?php echo $value['caste'];?></option>
												<?php } } ?>
											</select>
											<div class="invalid-feedback">
												Please select Caste.
											</div>	
										</div>
										<div class="col-sm-6">
											<label for="mothertounge">Subcaste</label>
											<select class="form-control form-control-user" id="subcaste" name="subcaste">
												<option value="">Select Subcaste</option>
											</select>
											<div class="invalid-feedback">
												Please select Subcaste.
											</div>																
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="caste">Star</label>
											<select class="form-control form-control-user" id="star" name="star">
											   <option value="">Select Star</option>
											   <?php foreach($stars as $value) { ?>
											   <option value="<?php echo $value['star'];?>"><?php echo $value['star'];?></option><?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select Star.
											</div>	
										</div>
										<div class="col-sm-6">
											<label for="caste">Raasi</label>
											<select class="form-control form-control-user" id="raasi" name="raasi">
											   <option value="">Select Raasi</option>
											   <?php foreach($zodic_signs as $value) { ?>
											   <option value="<?php echo $value['zodic'];?>"><?php echo $value['zodic'];?></option><?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select Raasi.
											</div>																	
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="place">Place of Birth</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="place" id="place" placeholder="Place of Birth">
											<div class="invalid-feedback">
												Please enter place of birth.
											</div>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="time">Time of Birth</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="time" id="time" placeholder="Time of Birth">
											<div class="invalid-feedback">
												Please enter place of birth.
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="place">Gothram</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="gothram" id="gothram" placeholder="gothram">
											<div class="invalid-feedback">
												Please enter gothram.
											</div>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											
										</div>
									</div>
									  <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="submit" value="Submit Religion Details">
								   </form>
								<!-- end row -->
							</div> <!-- end .padding-5 -->
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end .w-100 -->
			</div> <!-- end .d-flex -->
		</div> <!-- end col-->
	</div> <!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end page -->
<style>
.hide {display:none;}
</style>
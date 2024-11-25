<div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center">
				<div class="w-100 d-block bg-white shadow-lg rounded my-5">
					<div class="row">
						<div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
						<div class="col-lg-7">
							<div class="p-5">
								<h1 class="h5 mb-3">Family details help us to find best profile</h1>
								<form class="customerregister needs-validation" method="POST" action="<?php echo site_url();?>registration/property" novalidate data-toggle="validator">
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
											<label for="place">Father Name</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="father-name" id="father-name" placeholder="Father Name">
											<div class="invalid-feedback">
												Please enter Father Name.
											</div>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="time">Mother Name</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="mother-name" id="mother-name" placeholder="Mother Name">
											<div class="invalid-feedback">
												Please enter Mother Name.
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="place">Father Profession</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="father-profession" id="father-profession" placeholder="Father Profession">
											<div class="invalid-feedback">
												Please enter Father Profession.
											</div>
										</div>
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="time">Mother Profession</label>
											 <input type="text" class="form-control form-control-user" maxlength="50" name="mother-profession" id="mother-profession" placeholder="Mother Profession">
											<div class="invalid-feedback">
												Please enter Mother Profession.
											</div>
										</div>
									</div>
									<div class="col-sm-12 mb-3 mb-sm-0">
										 <label for="">Property Type By&nbsp;&nbsp;&nbsp;&nbsp;</label>
										<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="family" name="property_type" class="custom-control-input" value="family" >
										  <label class="custom-control-label" for="family">Family</label>
										</div>
										<div class="custom-control custom-radio custom-control-inline">
										  <input type="radio" id="shared" name="property_type" class="custom-control-input" value="shared" >
										  <label class="custom-control-label" for="shared">Shared</label>
										</div>
										</div>
									</div>		
									<div class="form-group">
											<label for="employee_in">Property Value </label>
											<select class="form-control" id="property_value" name="property_value" >
											  <option value="">Select Property Value</option>
											  
											   <?php foreach($property_values as $property_value) { ?>
												<option value="<?php echo $property_value["property_value"] ?>"><?php echo $property_value["property_value_label"] ?></option>
											   <?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select property value.
											</div>	
									</div>

								<!--	<div class="form-group">
											<label for="property_description">Property Description</label>
											 <textarea class="form-control form-control-user" name="property_description" id="property_description" cols="20" rows="5"></textarea>
											<div class="invalid-feedback">Please enter property description.</div>
									</div> -->
									  <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="submit" value="Submit Property Details">
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
<script src="<?php base_url() ?>assets/kamma/plugins/dropify/dropify.min.js"></script>

<!-- Init js-->
<script src="<?php base_url() ?>assets/kamma/pages/fileuploads-demo.js"></script>
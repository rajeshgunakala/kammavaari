<!-- Main Content Start Here -->
<div class="main_content">
	<div class="container-xl search-cont">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-8">
				<div class="tab-nav">
					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item" role="presentation">
							<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Basic Search</a>
						</li>
						<!--<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Advanced Search</a>
						</li>-->
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-profileid-tab" data-toggle="pill" href="#pills-profileid" role="tab" aria-controls="pills-profileid" aria-selected="false">Surname Search </a>
						</li>
						<li class="nav-item" role="presentation">
							<a class="nav-link" id="pills-profileidsearch-tab" data-toggle="pill" href="#pills-profileidsearch" role="tab" aria-controls="pills-profileidsearch" aria-selected="false">Profile ID Search </a>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<form method="POST" action="<?php echo site_url();?>dashboard/search_partner/searchprofiles?type=basic" class="row row-10" id="search_partner">
						
							<div class="col-12">
								<label class="form-label">Age</label>
							</div>
							<div class="col-12">
								<div class="row row-10">
									<div class="col flex-1 form-group">
										<?php //echo "<pre>";print_r($preference_details);
												$ageFrom = $ageTo = "";
												$age = $primary_info['age'];
												if($genderType == "male") {								
													if(isset($preference_details["p_age_from"]) && !empty($preference_details["p_age_from"])) {
														$ageFrom = $age - $preference_details["p_age_from"];
													}
													if(isset($preference_details["p_age_to"]) && !empty($preference_details["p_age_to"])) {
														$ageTo = $age - $preference_details["p_age_to"];
													}
												}
												if($genderType == "female") {
													if(isset($preference_details["p_age_from"]) && !empty($preference_details["p_age_from"])) {
														$ageFrom = $age + $preference_details["p_age_from"];
													}
													if(isset($preference_details["p_age_to"]) && !empty($preference_details["p_age_to"])) {
														$ageTo = $age + $preference_details["p_age_to"];
													}
												}							

											?>
									  <select name="agefrom" id="agefrom" class="form-control grey-bg selectpicker" title="Select" data-live-search="true">
											<option value="">Age From</option>
											<?php foreach($ages as $value) {							
												$selected = "";
												  if(isset($_SESSION['agefrom']) && !empty($_SESSION['agefrom'])) {
													if($_SESSION['agefrom'] == $value['age'])
														$selected = "selected";
													} elseif(!empty($ageTo) && $ageTo == $value['age']) {
														$selected = "selected";
													}
												?>
											<option value="<?php echo $value['age'];?>" ><?php echo $value['age'];?></option>
											<?php } ?>
										 </select>
									</div>
									<div class="col text-center px-0"><label class="form-label pt-3">To</label></div>
									<div class="col flex-1 form-group">
										<select name="ageto" id="ageto" class="form-control grey-bg selectpicker" title="Select" data-live-search="true">
											 <option value="">Age To</option>
											<?php foreach($ages as $value) {							
												$selected = "";
												  if(isset($_SESSION['ageto']) && !empty($_SESSION['ageto'])) {
													if($_SESSION['ageto'] == $value['age'])
														$selected = "selected";
													} elseif(!empty($ageFrom) && $ageFrom == $value['age']) {
														$selected = "selected";
													}
												?>
											<option value="<?php echo $value['age'];?>" ><?php echo $value['age'];?></option>
											<?php } ?>
										 </select>
									</div>
								</div>

							</div>
							
							<div class="col-12">
								<label class="form-label">Height</label>
							</div>
							<div class="col-12">
								<div class="row row-10">
									<div class="col flex-1 form-group">
										
										<?php $genderType = $primary_info['gender'];
											
										?>
									 <select class="form-control grey-bg selectpicker" id="heightfrom" name="heightfrom"  data-live-search="true">
										<option value="">Select Height</option>						
										
										<?php foreach($heights as $value) {
											
											$selected = "";
											  if(isset($_SESSION['heightfrom']) && !empty($_SESSION['heightfrom'])) {
						
												if($_SESSION['heightfrom'] == stripcslashes(str_replace("\n","",$value['height_in_cm'])))
												$selected = "selected";
											  } elseif($preference_details['p_height_from'] == stripcslashes(str_replace("\n","",$value['height_in_cm']))) {
												 $selected = "selected";
												} elseif($genderType == "female" && $heightFromInCms == $OptiomheightInCms) {
												 $selected = "selected";
												}
											?>
										<option value="<?php echo $value['height_in_cm'];?>" ><?php echo stripcslashes($value['height']);?></option><?php } ?>

									 </select>
									</div>
									<div class="col text-center px-0"><label class="form-label pt-3">To</label></div>
									<div class="col flex-1 form-group">
										<select class="form-control grey-bg selectpicker" id="heightto" name="heightto"  data-live-search="true">
										<option value="">Select Height</option>
										<?php foreach($heights as $value) { 
												$selected = "";
												  if(isset($_SESSION['heightto']) && !empty($_SESSION['heightto'])) {
													if($_SESSION['heightto'] == stripcslashes(str_replace("\n","",$value['height_in_cm'])))
													$selected = "selected";
												  } elseif($preference_details['p_height_to'] == stripcslashes(str_replace("\n","",$value['height_in_cm']))) {
													 $selected = "selected";
													} elseif($genderType == "male" && $heightFromInCms == $OptiomheightInCms) {
													 $selected = "selected";
													}

												?>
											<option value="<?php echo $value['height_in_cm'];?>" <?php echo $selected ?>><?php echo stripcslashes($value['height']);?></option><?php } ?>

										 </select>
									</div>
								</div>

							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label pt-3">Marital Status </label>
								<select class="form-control grey-bg selectpicker show-tick" multiple  id="maritalstatus" name="maritalstatus[]" data-actions-box="true" title="Select" data-live-search="true">
									<option value="never_married" <?php
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('never_married'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('never_married', explode(",", $preference_details['p_marital_status']))){ echo 'selected';} ?> >Never Married</option>

									   <option value="divorced" <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('divorced'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('divorced', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Divorced</option>

									   <option value="widow-widower"  <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('widow-widower'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('widow-widower', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Widow / Widower</option>

									   <option value="separated" <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('separated'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('separated', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Separated</option>

									   <option value="annulled" <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('annulled'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('annulled', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Annulled</option>
								</select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label pt-3">Religion</label>
								<select class="form-control grey-bg selectpicker"  id="religion" name="religion">
									<?php foreach($religions as $value) { ?>
									<option value="<?php echo $value['religion'];?>" <?php if($value['religion'] =="Hindu") { echo 'selected';  } ?> ><?php echo stripcslashes($value['religion']);?></option><?php } ?>
								 </select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 form-group">
								<label class="form-label pt-3">Mother Tongue</label>
								<select class="form-control grey-bg selectpicker" id="mothertounge" name="mothertounge">
									 <?php foreach($mothertounges as $value) { ?>
									<option value="<?php echo $value['mothertounge'];?>"<?php 
									 if($value['mothertounge'] == 'Telugu') { echo "selected"; } ?>>
									 <?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>
								</select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 form-group">
								<label class="form-label pt-3">Caste</label>
								<select class="form-control grey-bg selectpicker" id="caste" name="caste">
									<?php foreach($castes as $value) { ?>

									<option value="<?php echo $value['caste'];?>"
									  <?php                               
										if(in_array(stripcslashes($value['caste']),explode(",", $preference_details['p_caste'])))
										 { echo 'selected'; } else if($value['caste'] == "Kamma"){echo 'selected';}
									 else if($value['caste'] == 'Kamma') { echo "selected"; } ?>  ><?php echo stripcslashes($value['caste']);?></option>

								  <?php } ?>
								</select>
							</div>
							
							<div class="col-12">
								<label class="form-label">Property (Cr)</label>
							</div>
							<div class="col-12">
								<div class="row row-10">
									<div class="col flex-1 form-group">										
									  <input type="text" class="form-control" name="propertyfor" id="propertyfor" value="<?php if(!empty($_SESSION['property_for'])) echo $_SESSION['property_for']; ?>">
									</div>
									<div class="col text-center px-0"><label class="form-label pt-3">To</label></div>
									<div class="col flex-1 form-group">
										<input type="text" class="form-control" name="propertyto" id="propertyto" value="<?php if(!empty($_SESSION['property_to'])) echo $_SESSION['property_to']; ?>">
									</div>
								</div>

							</div>

							<div class="col-12">
								<hr class="hr-line-form">
								<h4 class="mt-3">Location</h4>
							</div>

							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Country Living In</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple id="country" name="country[]" data-actions-box="true" title="Select" data-live-search="true">
									<?php foreach($countries as $value) { ?>
									<option value="<?php echo $value['country'];?>"
									  <?php 
										if(isset($_SESSION['country'])) { 
										//echo 'hi';exit;
										  if(in_array(stripcslashes($value['country']),$_SESSION['country']))
										  echo 'selected'; 
										}
										elseif(in_array(stripcslashes($value['country']),explode(",", $preference_details['p_country']))) echo 'selected'; ?>  ><?php echo stripcslashes($value['country']);?></option><?php } ?>

								 </select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Education</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple id="education" name="education[]" data-actions-box="true" title="Select" data-live-search="true">
									<option value="Bachelors in Engineering"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Bachelors in Engineering'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Bachelors in Engineering', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Engineering</option>

								   <option value="Bachelors in Medicine"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Bachelors in Medicine'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Bachelors in Medicine', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Medicine</option>

								   <option value="Bachelors in Degree"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Bachelors in Degree'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Bachelors in Degree', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Degree</option>
                                    
                                    
                                     <option value="IIT"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('IIT'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('IIT', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >IIT</option>
									  
									  <option value="IIM"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('IIM'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('IIM', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >IIM</option>
									  
									  <option value="ISB"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('ISB'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('ISB', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >ISB</option>
									  
									  
								   <option value="Masters in Engineering"  <?php
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Masters in Engineering'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Masters in Engineering', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Engineering</option>

								   <option value="Masters in Medicine"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Masters in Medicine'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Masters in Medicine', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Medicine</option>

								   <option value="Masters in Degree"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Masters in Degree'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Masters in Degree', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Degree</option>

								   <option value="Finance - ICWAI/CA/CS"  <?php 

									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Finance - ICWAI/CA/CS'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Finance - ICWAI/CA/CS', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Finance - ICWAI/CA/CS</option>

								   <option value="Union Public Service Commision-Civil Services"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Union Public Service Commision-Civil Services'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Union Public Service Commision-Civil Services', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Union Public Service Commision-Civil Services</option>

								   <option value="Doctorate/phd" <?php 

									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Doctorate/phd'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Doctorate/phd', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Doctorate/phd</option>

								   <option value="Diploma / Below Graduation" <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Diploma / Below Graduation'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Diploma / Below Graduation', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Diploma / Below Graduation</option>

								   <option value="Others" <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Others'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Others', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Others</option>

							 </select>
							</div>
							 
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Profession</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple id="profession" name="profession[]" data-actions-box="true" title="Select" data-live-search="true">
									<?php foreach($professions as $value) { ?>
									<option value="<?php echo $value['profession'];?>"
									  <?php                               
									  if(isset($_SESSION['profession'])) { 
										if(in_array(stripcslashes($value['profession']),$_SESSION['profession']))
										echo 'selected';  } elseif(in_array(stripcslashes($value['profession']),explode(",", $preference_details['p_profession']))) echo 'selected'; ?>
									  >
									  
									  <?php echo stripcslashes($value['profession']);?></option><?php } ?>
							  </select>
							</div>						 
							<div class="col-12 col-sm-12 col-md-12 text-center mt-4">
								<input type="submit" class="btn btn-black max-206 m-2 btn-grad-orange" name="submit" value="SEARCH"/>
								<!--<input type="reset" class="btn btn-black-border max-206 m-2 btn-border-orange" name="reset" value="RESET"/>-->
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						<form method="POST" action="<?php echo site_url();?>dashboard/search_partner/searchprofiles" class="row row-10" id="advanced_search">
							<div class="col-12">
								<label class="form-label">Age</label>
							</div>
							<div class="col-12">
								<div class="row row-10">
									<div class="col flex-1 form-group">
										<?php //echo "<pre>";print_r($preference_details);
												$ageFrom = $ageTo = "";
												$age = $primary_info['age'];
												if($genderType == "male") {								
													if(isset($preference_details["p_age_from"]) && !empty($preference_details["p_age_from"])) {
														$ageFrom = $age - $preference_details["p_age_from"];
													}
													if(isset($preference_details["p_age_to"]) && !empty($preference_details["p_age_to"])) {
														$ageTo = $age - $preference_details["p_age_to"];
													}
												}
												if($genderType == "female") {
													if(isset($preference_details["p_age_from"]) && !empty($preference_details["p_age_from"])) {
														$ageFrom = $age + $preference_details["p_age_from"];
													}
													if(isset($preference_details["p_age_to"]) && !empty($preference_details["p_age_to"])) {
														$ageTo = $age + $preference_details["p_age_to"];
													}
												}							

											?>
									  <select name="agefrom" id="agefrom" class="form-control grey-bg selectpicker" title="Select" data-live-search="true">
											<option value="">Age From</option>
											<?php foreach($ages as $value) {							
												$selected = "";
												  if(isset($_SESSION['agefrom']) && !empty($_SESSION['agefrom'])) {
													if($_SESSION['agefrom'] == $value['age'])
														$selected = "selected";
													} elseif(!empty($ageTo) && $ageTo == $value['age']) {
														$selected = "selected";
													}
												?>
											<option value="<?php echo $value['age'];?>" <?php echo $selected ?>><?php echo $value['age'];?></option>
											<?php } ?>
										 </select>
									</div>
									<div class="col text-center px-0"><label class="form-label pt-3">To</label></div>
									<div class="col flex-1 form-group">
										<select name="ageto" id="ageto" class="form-control grey-bg selectpicker" title="Select" data-live-search="true">
											 <option value="">Age To</option>
											<?php foreach($ages as $value) {							
												$selected = "";
												  if(isset($_SESSION['ageto']) && !empty($_SESSION['ageto'])) {
													if($_SESSION['ageto'] == $value['age'])
														$selected = "selected";
													} elseif(!empty($ageFrom) && $ageFrom == $value['age']) {
														$selected = "selected";
													}
												?>
											<option value="<?php echo $value['age'];?>" <?php echo $selected ?>><?php echo $value['age'];?></option>
											<?php } ?>
										 </select>
									</div>
								</div>

							</div>
							<div class="col-12">
								<label class="form-label">Height</label>
							</div>
							<div class="col-12">
								<div class="row row-10">
									<div class="col flex-1 form-group">
										
										<?php $genderType = $primary_info['gender'];
											$inchesArr = explode(".",$religion_details['height']);
											$heightFromInCms = (($inchesArr[0] * 12) + $inchesArr[1])* 2.54;
										?>
									 <select class="form-control grey-bg selectpicker" id="heightfrom" name="heightfrom"  data-live-search="true">
										<option value="">Select Height</option>						
										
										<?php foreach($heights as $value) {
											$inchesArr = explode(".",$value['height']);
											$OptiomheightInCms = (($inchesArr[0] * 12) + $inchesArr[1])* 2.54;
											$selected = "";
											  if(isset($_SESSION['heightfrom']) && !empty($_SESSION['heightfrom'])) {
												if($_SESSION['heightfrom'] == stripcslashes(str_replace("\n","",$value['height'])))
												$selected = "selected";
											  } elseif($preference_details['p_height_from'] == stripcslashes(str_replace("\n","",$value['height']))) {
												 $selected = "selected";
												} elseif($genderType == "female" && $heightFromInCms == $OptiomheightInCms) {
												 $selected = "selected";
												}
											?>
										<option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>" <?php echo $selected ?>><?php echo stripcslashes($value['height']);?></option><?php } ?>

									 </select>
									</div>
									<div class="col text-center px-0"><label class="form-label pt-3">To</label></div>
									<div class="col flex-1 form-group">
										<select class="form-control grey-bg selectpicker" id="heightto" name="heightto"  data-live-search="true">
										<option value="">Select Height</option>
										<?php foreach($heights as $value) { 
												$inchesArr = explode(".",$value['height']);
												$OptiomheightInCms = (($inchesArr[0] * 12) + $inchesArr[1])* 2.54;
												$selected = "";
												  if(isset($_SESSION['heightto']) && !empty($_SESSION['heightto'])) {
													if($_SESSION['heightto'] == stripcslashes(str_replace("\n","",$value['height'])))
													$selected = "selected";
												  } elseif($preference_details['p_height_to'] == stripcslashes(str_replace("\n","",$value['height']))) {
													 $selected = "selected";
													} elseif($genderType == "male" && $heightFromInCms == $OptiomheightInCms) {
													 $selected = "selected";
													}

												?>
											<option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>" <?php echo $selected ?>><?php echo stripcslashes($value['height']);?></option><?php } ?>

										 </select>
									</div>
								</div>

							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label pt-3">Marital Status </label>
								<select class="form-control grey-bg selectpicker show-tick" multiple  id="maritalstatus" name="maritalstatus[]" data-actions-box="true" title="Select" data-live-search="true">
									<option value="never_married" <?php
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('never_married'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('never_married', explode(",", $preference_details['p_marital_status']))){ echo 'selected';} ?> >Never Married</option>

									   <option value="divorced" <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('divorced'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('divorced', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Divorced</option>

									   <option value="widow-widower"  <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('widow-widower'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('widow-widower', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Widow / Widower</option>

									   <option value="separated" <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('separated'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('separated', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Separated</option>

									   <option value="annulled" <?php 
										if(isset($_SESSION['maritalstatus'])) { 
										  if(in_array(stripcslashes('annulled'),$_SESSION['maritalstatus']))
										  echo 'selected'; 
										}
										elseif(in_array('annulled', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Annulled</option>
								</select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label pt-3">Religion</label>
								<select class="form-control grey-bg selectpicker"  id="religion" name="religion">
									<?php foreach($religions as $value) { ?>
									<option value="<?php echo $value['religion'];?>" <?php if($value['religion'] =="Hindu") {?>selected<?php } ?>><?php echo stripcslashes($value['religion']);?></option><?php } ?>
								 </select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 form-group">
								<label class="form-label pt-3">Mother Tongue</label>
								<select class="form-control grey-bg selectpicker" id="mothertounge" name="mothertounge">
									 <?php foreach($mothertounges as $value) { ?>
									<option value="<?php echo $value['mothertounge'];?>"<?php
									if(isset($_SESSION['mothertounge'])) { 
									  if(in_array(stripcslashes($value['mothertounge']),$_SESSION['mothertounge']))
									  echo 'selected'; 
									} elseif(in_array(stripcslashes($value['mothertounge']),explode(",", $preference_details['p_mother_tongue']))) { echo 'selected'; } ?>
									><?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>
								</select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 form-group">
								<label class="form-label pt-3">Caste</label>
								<select class="form-control grey-bg selectpicker" id="caste" name="caste">
									<?php foreach($castes as $value) { ?>

									<option value="<?php echo $value['caste'];?>"
									  <?php                               
										if(in_array(stripcslashes($value['caste']),explode(",", $preference_details['p_caste'])))
										  { echo 'selected'; } else if($value['caste'] == "Kamma"){echo 'selected';}?>
									  ><?php echo stripcslashes($value['caste']);?></option>

								  <?php } ?>
								</select>
							</div>

							<div class="col-12">
								<hr class="hr-line-form">
								<h4 class="mt-3">Location</h4>
							</div>

							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Country Living In</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple id="country" name="country[]" data-actions-box="true" title="Select" data-live-search="true">
									<?php foreach($countries as $value) { ?>
									<option value="<?php echo $value['country'];?>"
									  <?php 
										if(isset($_SESSION['country'])) { 
										  if(in_array(stripcslashes($value['country']),$_SESSION['country']))
										  echo 'selected'; 
										}
										elseif(in_array(stripcslashes($value['country']),explode(",", $preference_details['p_country']))) echo 'selected'; ?>
									  ><?php echo stripcslashes($value['country']);?></option><?php } ?>

								 </select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">State Living In</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple data-actions-box="true" title="Select" data-live-search="true">
									<option>India</option>
									<option>Usa</option>
								</select>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Visa Status</label>
								<select class="form-control grey-bg selectpicker">
									<option>Student Visa</option>
									<option>Work Permit</option>
								</select>
							</div>

							<div class="col-12">
								<hr class="hr-line-form">
								<h4 class="mt-3">Educational and Professional Details</h4>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Education</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple id="education" name="education[]" data-actions-box="true" title="Select" data-live-search="true">
									<option value="Bachelors in Engineering"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Bachelors in Engineering'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Bachelors in Engineering', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Engineering</option>

								   <option value="Bachelors in Medicine"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Bachelors in Medicine'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Bachelors in Medicine', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Medicine</option>

								   <option value="Bachelors in Degree"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Bachelors in Degree'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Bachelors in Degree', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Degree</option>
									  
									  
									  <option value="IIT"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('IIT'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('IIT', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >IIT</option>
									  
									  <option value="IIM"  <?php           
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('IIM'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('IIM', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >IIM</option>
									  
									  

								   <option value="Masters in Engineering"  <?php
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Masters in Engineering'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Masters in Engineering', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Engineering</option>

								   <option value="Masters in Medicine"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Masters in Medicine'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Masters in Medicine', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Medicine</option>

								   <option value="Masters in Degree"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Masters in Degree'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Masters in Degree', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Degree</option>

								   <option value="Finance - ICWAI/CA/CS"  <?php 

									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Finance - ICWAI/CA/CS'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Finance - ICWAI/CA/CS', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Finance - ICWAI/CA/CS</option>

								   <option value="Union Public Service Commision-Civil Services"  <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Union Public Service Commision-Civil Services'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Union Public Service Commision-Civil Services', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Union Public Service Commision-Civil Services</option>

								   <option value="Doctorate/phd" <?php 

									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Doctorate/phd'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Doctorate/phd', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Doctorate/phd</option>

								   <option value="Diploma / Below Graduation" <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Diploma / Below Graduation'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Diploma / Below Graduation', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Diploma / Below Graduation</option>

								   <option value="Others" <?php 
									  if(isset($_SESSION['education'])) { 
										if(in_array(stripcslashes('Others'),$_SESSION['education']))
										echo 'selected'; 
									  }
									  elseif(in_array('Others', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Others</option>

							 </select>
							</div>
							 
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label">Profession</label>
								<select class="form-control grey-bg selectpicker show-tick" multiple id="profession" name="profession[]" data-actions-box="true" title="Select" data-live-search="true">
									<?php foreach($professions as $value) { ?>
									<option value="<?php echo $value['profession'];?>"
									  <?php                               
									  if(isset($_SESSION['profession'])) { 
										if(in_array(stripcslashes($value['profession']),$_SESSION['profession']))
										echo 'selected';  } elseif(in_array(stripcslashes($value['profession']),explode(",", $preference_details['p_profession']))) echo 'selected'; ?>
									  >
									  
									  <?php echo stripcslashes($value['profession']);?></option><?php } ?>
							  </select>
							</div>
							<div class="col-12">
								<hr class="hr-line-form">
								<h4 class="mt-3">Astro Details</h4>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label pt-3">Kuja Dosham</label>
								<div class="d-block pt-1">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="Astro1" name="customRadioInline" class="custom-control-input" value="">
										<label class="custom-control-label" for="Astro1">Yes</label>
									  </div>
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="Astro2" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="Astro2">No</label>
									  </div>
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="Astro3" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="Astro3">Doesn't Matter</label>
									  </div>
								</div>
							</div>
							
							<div class="col-12">
								<hr class="hr-line-form">
								<h4 class="mt-3">Settings <small class="ml-2">Only For Paid Members</small> </h4>
							</div>
							<div class="col-12 p-0 advance-sub-from">
								<div class="row row-10">
									<label class="col-12 form-label pt-3">Monthly Income</label>
									<div class="col-12 col-sm-12 col-md-4 form-group">
										<select class="form-control grey-bg selectpicker" title="Select" data-live-search="true">
											<option>Select</option>
											<option>Select</option>
											<option>Select</option>
										</select>
									</div>
									<div class="col-12 col-sm-12 col-md-4 form-group">
										<input class="form-control grey-bg " type="text" placeholder="From" >
									</div>
									<div class="col-12 col-sm-12 col-md-4 form-group">
										<input class="form-control grey-bg " type="text" placeholder="From" >
									</div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 mb-2 form-group">
								<label class="form-label pt-3">Show Profile</label>
								<div class="d-block pt-1">
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" id="ShowProfile1" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="ShowProfile1">With Photo</label>
									  </div>
									 
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 mb-2 form-group">
								<label class="form-label pt-3">Prefered Star</label>
								<div class="d-block pt-1">
									<div class="btn-link font-12">( No Matched Star found )</div>
									 
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-6 mb-2 form-group">
								<label class="form-label pt-3">Registration Days</label>
								<div class="d-block pt-1">
									<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="RegistrationDays1" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="RegistrationDays1">All</label>
									  </div>
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="RegistrationDays2" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="RegistrationDays2">15 Days</label>
									  </div>
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="RegistrationDays3" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="RegistrationDays3">30 Days</label>
									  </div>
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="RegistrationDays4" name="customRadioInline" class="custom-control-input">
										<label class="custom-control-label" for="RegistrationDays4">45 Days</label>
									  </div>
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 mb-2 form-group">
								<label class="form-label pt-3">Don’t Show</label>
								<div class="d-block pt-1">
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" id="Showinput1" name="customRadioInline" class="custom-control-input" value="interested">
										<label class="custom-control-label" for="Showinput1">Interested / Not Interested</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" id="Showinput2" name="customRadioInline" class="custom-control-input" value="viewed">
										<label class="custom-control-label" for="Showinput2">Viewed Profiles</label>
									</div>
									<div class="custom-control custom-checkbox custom-control-inline">
										<input type="checkbox" id="Showinput3" name="customRadioInline" class="custom-control-input" value="shortlisted">
										<label class="custom-control-label" for="Showinput3">Shortlisted Profiles</label>
									</div>
									 
								</div>
							</div>
							<div class="col-12 col-sm-12 col-md-12 text-center mt-4">
									<input type="submit" class="btn btn-black max-206 m-2 btn-grad-orange" name="submit" value="SEARCH"/>
									<!--<input type="reset" class="btn btn-black-border max-206 m-2 btn-border-orange" name="reset" value="RESET"/>-->
								</div>
						</form>
					</div>
					<div class="tab-pane fade" id="pills-profileid" role="tabpanel" aria-labelledby="pills-profileid-tab">
						<form method="POST" action="<?php echo site_url();?>dashboard/search_partner/searchprofiles?type=profileid" class="row row-10 justify-content-center" id="search_partner">
							<div class="col-md-8 p-0">
								<div class="col-12 col-sm-12 col-md-12 mb-2 form-group">
									<label class="form-label pt-3">Surname</label>
									<input type="text" class="form-control grey-bg" placeholder="Enter Surname here" name="profile_id" required >
								</div>							
								<div class="col-12 col-sm-12 col-md-12 text-center mt-4">
									<input type="submit" class="btn btn-black max-206 m-2 btn-grad-orange" name="submit" value="SEARCH"/>
									<!--<input type="reset" class="btn btn-black-border max-206 m-2 btn-border-orange" name="reset" value="RESET"/>-->
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="pills-profileidsearch" role="tabpanel" aria-labelledby="pills-profileidsearch-tab">
						<form method="POST" action="<?php echo site_url();?>dashboard/search_partner/searchprofiles?type=profileid-search" class="row row-10 justify-content-center" id="search_partner">
							<div class="col-md-8 p-0">
								<div class="col-12 col-sm-12 col-md-12 mb-2 form-group">
									<label class="form-label pt-3">Profile ID</label>
									<input type="text" class="form-control grey-bg" placeholder="Enter Profile ID here" name="profile_id_search" required >
								</div>							
								<div class="col-12 col-sm-12 col-md-12 text-center mt-4">
									<input type="submit" class="btn btn-black max-206 m-2 btn-grad-orange" name="submit" value="SEARCH"/>
									<!--<input type="reset" class="btn btn-black-border max-206 m-2 btn-border-orange" name="reset" value="RESET"/>-->
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-12 col-sm-12 col-md-4">
				<!--<div class="membership-slide">
					<div class="membership-slide-item">
						<div class="membership-slide-item-lft">
							<img src="images/offers_ic.png" alt="offer" width="46" height="46" > 
						</div>
						<div class="membership-slide-item-rgt">
							<p> Upgrade Membership
								<small> Basic offers for you</small>
							</p>
							<div class="price-details">
								<div class="price-details-data"> ₹ 5900</div>
								<a class="price-details-pay">Pay Now</a>
							</div>
						</div>
					</div>
				</div>-->
				<?php $this->load->view('viewed-profile',$data);?>
			</div>
		</div>
	</div>
</div>
<!-- Main Content Ends Here -->
<script>
$(document).ready(function() {
	var profile_search_type = '<?php echo $_REQUEST["type"] ?>';
	if(profile_search_type == "profileid") {
		$("#pills-profileid-tab").click();
	}
	
	if(profile_search_type == "profileid-search") {
		$("#pills-profileidsearch-tab").click();
	}
	
	if(profile_search_type == "basic") {
		$("#pills-home-tab").click();
	}
	//pills-profile-tab
})
</script>
<style>
	@media screen and (max-width : 991px) {
	.viewed-profile-item {
		flex-direction: column;
		align-items: center;
	}
	.viewed-profile-item-rgt {
		padding-left: 0;
		text-align: center;
		margin-top: 5px;
	}
	.viewed-profile-item-lft{
		max-width: 150px;
	}
	.viewed-profile-item-rgt p {
		font-size: 15px;
		line-height: 24px;
	}
	}
	@media screen and (max-width : 640px) {
		.viewed-profile-item-lft{
			max-width: 200px;
		}
	}
</style>
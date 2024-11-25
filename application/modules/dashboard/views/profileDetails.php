<link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.0/css/lightgallery.min.css" rel="stylesheet"/>
<div class="main_content">
<?php if($this->uri->segment(3)!='view_profile_contact_info') { ?>
			<div class="container">
	            <div class="row m-0">
	            	<a class="back_link pl-2 mb-3" href="<?php echo $previous_url; ?>"><i class="icofont-circled-left back_link_arrow"></i> Back to search results</a>
	            </div>
	        </div>
<?php } ?>
			<div class="container">
	            <div class="row m-0">
	            	<div class="search_section">
		            	<div class="row pt-2 pb-5">
					         <div class="profile_img col-md-3 slick">												
							 <?php 
							 if(isset($images_info) && count($images_info) > 0) {
								 foreach($images_info as $value) { 
								if($value['photoname']!="" && $value['isactive']) {
									 ?>
								<a href="<?php echo $value['fullphotopath']; ?>" class="lightgallery">
							      <img src="<?php echo $value['applicationphotopath']; ?>" alt="" />
							    </a>
							 <?php } } } ?>
							</div>

					        <div class="my_profile_main col-md-6">
					            <p><?php echo $primary_info['last_name']." ".$primary_info['first_name'];?> | <?php echo $primary_info['profile_id'];?> </p>
					            <span class="profile_info">
				                    <p class="mt-2"><?php echo $primary_info['age'];?> Age, <?php echo $religion_info['height'];?>'' Height</p>
				                    <p><?php echo ucwords($religion_info['religion']);?>, <?php echo ucwords($religion_info['caste']);?>,<?php echo ucwords($religion_info['mother_tounge']);?><br /></p>
				                    <p><?php echo $profession_info['heighst_education'];?></p>
				                    <p><?php echo ucwords($profession_info['living_in']);?></p>
				                </span>
				                <span class="profile_info"><strong> Hello <?php echo $my_details['last_name'];?></strong>, If you find the basic details of <strong><?php echo $primary_info['last_name'];?> </strong>, suitable please click on send interest ❤️ button. On doing so you will be accessible to view <?php if($primary_info['gender']=='male') {echo 'his';}else{echo 'her';} ?> more information. </span>
				                
					        </div>
					        <div class="col-md-3 pt-2 text-center">
					        	 <div class="col-md-12 rm_details text-center">
									<img src="<?php echo site_url()?>/assets/kammavaari/images/call-img.png" />
									<p>RM Details<br/>
										<span><b style="color:red"><?php echo ucfirst($profile_rm_details[0]['rm_username']) ?></b></span><br/>
										<span>info@kammavaari.com</span><br/>
										<span>+91 - <?php echo $profile_rm_details[0]['rm_phone'] ?></span>
									</p>
								</div>
											<!--     <a href="#" class="profile_detail_icons" title="Get RM Details" data-toggle="modal" data-target="#showRMDetauls">
                            		<i class="icofont-phone"></i>
		                            <span>Get RM Details</span>
		                       </a>   -->
		                       
					        </div>
					    </div>
		            	<div class="tab-nav col-md-12">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="pills-basic-info-tab" data-toggle="pill" href="#pills-basic-info" role="tab" aria-controls="pills-basic-info" aria-selected="true">Basic Information</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-family-tab" data-toggle="pill" href="#pills-family" role="tab" aria-controls="pills-family" aria-selected="false">Family Details</a>
								</li>
							</ul>
						</div>
		                <div class="col-md-12 p-0">	  
		                <!-- Tab 1 Start Here -->
						<div class="row">
							<div class="col-md-12 tab-content" id="pills-tabContent">
								<!-- Tab 1 Start Here -->
								<div class="tab-pane fade show active" id="pills-basic-info" role="tabpanel" aria-labelledby="pills-basic-info-tab">
									<div class="dashboard_main_content">
										<div class="col-md-12 pt-4">
										<!--	<div class="row pb-3">
												<p class="col-md-4 attribute_name">About <?php echo $primary_info['last_name'];?></p>
												<p class="col-md-8 attribute_value"><?php echo $primary_info['last_name'];?>.</p>
											</div> -->
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Name:</p>
												<p class="col-md-8 attribute_value"><?php echo $primary_info['last_name']." ".$primary_info['first_name'];?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Marital Status:</p>
												<p class="col-md-8 attribute_value"><?php if($religion_info['marital_status']!='') { echo $religion_info['marital_status']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Height:</p>
												<p class="col-md-8 attribute_value"><?php if($religion_info['height']!='') { echo $religion_info['height'].'" ('.$religion_info['height_cm'].'cms)'; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Caste:</p>
												<p class="col-md-8 attribute_value"><?php if($religion_info['caste']!='') { echo $religion_info['caste']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Religion:</p>
												<p class="col-md-8 attribute_value"><?php if($religion_info['religion']!='') { echo $religion_info['religion']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Mother tongue:</p>
												<p class="col-md-8 attribute_value"><?php if($religion_info['mother_tounge']!='') { echo $religion_info['mother_tounge']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Date Of Birth:</p>
												<p class="col-md-8 attribute_value"><?php //if($primary_info['dob']!='') { echo date('d-m-Y',strtotime($primary_info['dob']))." (".$primary_info['age'].")"; } else{ echo "N/A"; }?>
												  <?php if($primary_info['date']!='') {echo $primary_info['date']." ".$primary_info['month']." ".$primary_info['year']; } else{ echo "N/A"; }?>
												</p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Time Of Birth:</p>
												<p class="col-md-8 attribute_value"><?php if($religion_info['time_of_birth']!='') { echo $religion_info['time_of_birth']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Place Of Birth:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['place_of_birth']!='') { echo $religion_info['place_of_birth']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Star:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['star']!='') { echo $religion_info['star']; } else{ echo "N/A"; }?></p>
											</div>
											 <?php if($religion_info['paadam']!='') { ?>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Paadam:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['paadam']!='') { echo $religion_info['paadam']; } else{ echo "N/A"; }?></p>
											</div>
											 <?php } ?>
											  <?php if($religion_info['raasi']!='') { ?>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Raasi:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['raasi']!='') { echo $religion_info['raasi']; } else{ echo "N/A"; }?></p>
											</div>
											  <?php } ?>
											  <?php if($religion_info['gothram']!='') { ?>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Gothram:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['gothram']!='') { echo $religion_info['gothram']; } else{ echo "N/A"; }?></p>
											</div>
											  <?php } ?>
											  <?php if($religion_info['lagnam']!='') { ?>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Lagnam:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['lagnam']!='') { echo $religion_info['lagnam']; } else{ echo "N/A"; }?></p>
											</div>
											  <?php } ?>
											  <?php if($religion_info['complexion']!='') { ?>
											<div class="row pb-3">
												<p class="col-md-4 attribute_name">Complexion:</p>
												<p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['complexion']!='') { echo $religion_info['complexion']; } else{ echo "N/A"; }?></p>
											</div>
											  <?php } ?>
											<?php if($education_info->kv_ue_highedu || $education_info->kv_ue_pg || $education_info->kv_ue_g || $education_info->kv_ue_ug || $education_info->kv_ue_x){ ?>
												<?php if($education_info->kv_ue_highedu){?>
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name"> <?php echo getlangkeywords('highestqua');?> </p>
												    <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php echo $education_info->kv_ue_highedu;?><?php echo ($education_info->kv_ue_highedu_deg) ? ', '.$education_info->kv_ue_highedu_deg : '';?><?php echo ($education_info->kv_ue_highedu_spec) ? ', '.$education_info->kv_ue_highedu_spec : '';?><?php echo ($education_info->kv_ue_highedu_univ) ? ', '.$education_info->kv_ue_highedu_univ : '';?><?php echo ($education_info->kv_ue_highedu_college) ? ', '.$education_info->kv_ue_highedu_college : '';?><?php echo ($education_info->kv_ue_highedu_year) ? ', '.$education_info->kv_ue_highedu_year : '';?>  </p>
											    </div>
											    <?php }?>
											    <?php if($education_info->kv_ue_pg){?>
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name"> <?php echo getlangkeywords('postgraduate');?> </p>
												    <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php echo $education_info->kv_ue_pg;?><?php echo (!empty(trim($education_info->kv_ue_pg_deg))) ? ', '.$education_info->kv_ue_pg_deg : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_spec))) ? ', '.$education_info->kv_ue_pg_spec : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_univ))) ? ', '.$education_info->kv_ue_pg_univ : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_college))) ? ', '.$education_info->kv_ue_pg_college : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_year))) ? ', '.$education_info->kv_ue_pg_year : '';?></p>
											    </div>
											    <?php } ?>
											    <?php if($education_info->kv_ue_g){?>
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name">  <?php echo getlangkeywords('graduate');?> </td>
												    <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php echo $education_info->kv_ue_g;?><?php echo (!empty(trim($education_info->kv_ue_g_deg))) ? ', '.$education_info->kv_ue_g_deg : '';?><?php echo (!empty(trim($education_info->kv_ue_g_spec))) ? ', '.$education_info->kv_ue_g_spec : '';?> <?php echo (!empty(trim($education_info->kv_ue_g_univ))) ? ', '.$education_info->kv_ue_g_univ : '';?><?php echo (!empty(trim($education_info->kv_ue_g_college))) ? ', '.$education_info->kv_ue_g_college : '';?><?php echo (!empty(trim($education_info->kv_ue_g_year))) ? ', '.$education_info->kv_ue_g_year : '';?></p>
											    </div>
											    <?php } ?>
											    <?php if($education_info->kv_ue_ug){?>
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name"> <?php echo getlangkeywords('undergraduate');?> </td>
												    <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php echo $education_info->kv_ue_ug;?><?php echo (!empty(trim($education_info->kv_ue_ug_deg))) ? ', '.$education_info->kv_ue_ug_deg : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_spec))) ? ', '.$education_info->kv_ue_ug_spec : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_univ))) ? ', '.$education_info->kv_ue_ug_univ : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_college))) ? ', '.$education_info->kv_ue_ug_college : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_year))) ? ', '.$education_info->kv_ue_ug_year : '';?></td>
											    </div>
											    <?php } ?>
											    <?php if($education_info->kv_ue_x){  ?>
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name">  <?php echo getlangkeywords('school');?> </p>
												    <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php $xEdu = htmlentities($education_info->kv_ue_x, null, 'utf-8');
													$xEduFormatted = str_replace("&nbsp;", "", $xEdu);
													$xEduFormatted = html_entity_decode($xEduFormatted);
													echo $xEduFormatted;?><?php echo (!empty(trim($education_info->kv_ue_x_deg))) ? ', '.$education_info->kv_ue_x_deg : '';?><?php 
													$spec = htmlentities($education_info->kv_ue_x_spec, null, 'utf-8');
													$specFormatted = str_replace("&nbsp;", "", $spec);
													$specFormatted = html_entity_decode($specFormatted);
													echo (!empty(trim($specFormatted))) ? ', '.$education_info->kv_ue_x_spec : '';?>
													<?php $xUniv = htmlentities($education_info->kv_ue_x_univ, null, 'utf-8');
													$xUnivFormatted = str_replace("&nbsp;", "", $xUniv);
													$xUnivFormatted = html_entity_decode($xUnivFormatted);
													echo (!empty($xUnivFormatted)) ? ', '.$education_info->kv_ue_x_univ : '';?>
													<?php $xCollege = htmlentities($education_info->kv_ue_x_college, null, 'utf-8');
													$xCollegeFormatted = str_replace("&nbsp;", "", $xCollege);
													$xCollegeFormatted = html_entity_decode($xCollegeFormatted);
													echo (!empty($xCollegeFormatted)) ? ', '.$education_info->kv_ue_x_college : '';?><?php echo (!empty(trim($education_info->kv_ue_x_year))) ? ', '.$education_info->kv_ue_x_year : '';?></p>
											    </div>
											    <?php } ?>
											    <?php if($profession_info['education_description']){  ?>
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name">  
													    More Details</p>
												    <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php echo ($profession_info['education_description']) ? ''.nl2br($profession_info['education_description']) : '';?></p>
											    </div>
											    <?php } ?>
										        <?php } else {?> 
											    <div class="row pb-3">
												    <p class="col-md-4 attribute_name">  
													Education Details</p>
										            <p class="col-md-8 attribute_value" data-toggle="modal" data-target="#exampleModal1">No details found.<br></p>
										        </div>
										        <?php } ?>			
										
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Profession:</p>
											<p class="col-md-8 attribute_value"><?php if($profession_info['occupation']!='') { echo $profession_info['occupation']; } else{ echo "N/A"; }?> </p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Income:</p>
											<p class="col-md-8 attribute_value"> <?php if($profession_info['annual_income']!='') { echo $profession_info['annual_income']." /-"; } else{ echo "N/A"; }?></p>
										</div>
									<!--	<div class="row pb-3">
											<p class="col-md-4 attribute_name">Company Name:</p>
											<p class="col-md-8 attribute_value"><?php if($profession_info['company']!='') { echo $profession_info['company']; } else{ echo "N/A"; }?></p>
										</div>   -->
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Professional Details:</p>
											<p class="col-md-8 attribute_value"><?php if($profession_info['about_profession']!='') { echo $profession_info['about_profession']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Country Living:</p>
											<p class="col-md-8 attribute_value"><?php if($profession_info['country']!='') { echo $profession_info['country']; } else{ echo "N/A"; }?></p>
										</div>
										<?php if($profession_info['visatype']!="" && $profession_info['country'] != "India") { ?>
										<div class="row pb-3">
											 <p class="col-md-4 attribute_name">Visa Type</p>
											  <p class="col-md-8 attribute_value"> <?php echo $profession_info['visatype'];?></p>
										  </div>
										  <?php } ?>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">State Living:</p>
											<p class="col-md-8 attribute_value"><?php if($profession_info['state']!='') { echo $profession_info['state']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">City Living:</p>
											<p class="col-md-8 attribute_value"><?php if($profession_info['city']!='') { echo $profession_info['city']; } else{ echo "N/A"; }?></p>
										</div>
										</div>
									</div>
								</div>
								<!-- Tab 1 Ends Here -->
								
								<!-- Tab 6 Start Here -->
								<div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
									<div class="col-md-12 pt-4">
										
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Father Name:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['father_name']!='') { echo $parents_info['father_name']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Father Education:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['father_education']!='') { echo $parents_info['father_education']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Father Profession:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['father_profession']!='') { echo $parents_info['father_profession']; } else{ echo "N/A"; }?></p>
										</div>
										
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Father's Father State:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['fathers_father_state']!='') { echo $parents_info['fathers_father_state']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Father's Father District:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['fathers_father_district']!='') { echo $parents_info['fathers_father_district']; } else{ echo "N/A"; }?></p>
										</div>
								<!--		<div class="row pb-3">
											<p class="col-md-4 attribute_name">Father's Father Native Place:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['fathers_father_native_place']!='') { echo $parents_info['fathers_father_native_place']; } else{ echo "N/A"; }?></p>
										</div>  -->
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother Name:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mother_name']!='') { echo $parents_info['mother_name']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother's Education:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mother_education']!='') { echo $parents_info['mother_education']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother's Profession:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mother_profession']!='') { echo $parents_info['mother_profession']; } else{ echo "N/A"; }?></p>
										</div>
								<!--		<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother's Father Name:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mothers_father_name']!='') { echo $parents_info['mothers_father_name']; } else{ echo "N/A"; }?></p>
										</div>   -->
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother's Father State:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mothers_father_state']!='') { echo $parents_info['mothers_father_state']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother's Father District:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mothers_father_district']!='') { echo $parents_info['mothers_father_district']; } else{ echo "N/A"; }?></p>
										</div>
								<!--		<div class="row pb-3">
											<p class="col-md-4 attribute_name">Mother's Father Native:</p>
											<p class="col-md-8 attribute_value"><?php if($parents_info['mothers_father_native_place']!='') { echo $parents_info['mothers_father_native_place']; } else{ echo "N/A"; }?></p>
										</div>   -->
										
										    <!-- check no of brothers info div -->
										    <?php if($siblings_info['no_of_younger_brothers']>0 && $siblings_info['no_of_elder_brothers']>0) {
										    ?>
										    <div class="row pb-3">
											    <p class="col-md-4 attribute_name">No of Younger brothers:</p>
											    <p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_younger_brothers']; ?></p>
											</div>
											<div class="row pb-3">
											    <p class="col-md-4 attribute_name">No of Elder brothers:</p>
											    <p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_elder_brothers']; ?></p>
											</div>
											<?php }
											 else if($siblings_info['no_of_elder_brothers']>0) {
										    ?>
										    <div class="row pb-3">
											<p class="col-md-4 attribute_name">No of Elder brothers:</p>
											<p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_elder_brothers']; ?></p>
											</div>
											<?php }
											else if($siblings_info['no_of_younger_brothers']>0) {
										    ?>
										    <div class="row pb-3">
											<p class="col-md-4 attribute_name">No of Younger brothers:</p>
											<p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_younger_brothers']; ?></p>
											</div>
											<?php }
											else {
											} ?>
										
										    <!-- check no of sisters info div -->
										    <?php if($siblings_info['no_of_younger_sisters']>0 && $siblings_info['no_of_elder_sisters']>0) {
										    ?>
										    <div class="row pb-3">
											    <p class="col-md-4 attribute_name">No of Younger Sisters:</p>
											    <p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_younger_sisters']; ?></p>
											</div>
											<div class="row pb-3">
											    <p class="col-md-4 attribute_name">No of Elder Sisters:</p>
											    <p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_elder_sisters']; ?></p>
											</div>
											<?php }
											 else if($siblings_info['no_of_elder_sisters']>0) {
										    ?>
										    <div class="row pb-3">
											<p class="col-md-4 attribute_name">No of Elder Sisters:</p>
											<p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_elder_sisters']; ?></p>
											</div>
											<?php }
											else if($siblings_info['no_of_younger_sisters']>0) {
										    ?>
										    <div class="row pb-3">
											<p class="col-md-4 attribute_name">No of Younger Sisters:</p>
											<p class="col-md-8 attribute_value"><?php echo $siblings_info['no_of_younger_sisters']; ?></p>
											</div>
											<?php } 
											else{
											} ?>
											 
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Property Type:</p>
											<p class="col-md-8 attribute_value"><?php if($property_info['Property_type']!='') { echo $property_info['Property_type']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-4 attribute_name">Property Value:</p>
											<p class="col-md-8 attribute_value"><?php if($property_info["property_value"]=='') { 
															echo "N/A"; 
															} else 
																	{	
																	echo $property_info['property_value']." <span> Cr</span>" ;
																	}
															 ?></p>
										</div>
										
										
									</div>
								</div>
								<!-- Tab 6 Ends Here -->
								<!-- Tab 7 Start Here -->
								
								<!-- Tab 7 Ends Here -->
							</div>    
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog profile_popup">
		    <div class="modal-content popup_main_in">      
		        <button type="button" class="close close_btn close_btn1 text-right" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      <div class="modal-body row">
		        <div class="col-md-12 text-center">
		        	<p class="font-size-16 font-weight-500 pb-4">Are You Sure?</p>
					<button class="btn btn-black mr-3 btn-grad-orange width-120" type="submit">Yes</button>
					<button class="btn btn-black m-2 btn-grad-orange width-120" type="submit">No</button>
				</div>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="modal fade" id="showRMDetauls" tabindex="1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		  <div class="modal-dialog profile_popup">
		    <div class="modal-content popup_main_in">      
		        <button type="button" class="close close_btn close_btn1 text-right" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      <div class="modal-body row">
		        <div class="col-md-12 rm_details text-center">
				    <img src="<?php echo site_url()?>/assets/kammavaari/images/call-img.png" />
				    <p>RM Details<br/>
				        <span><?php echo ucfirst($profile_rm_details[0]['rm_username']) ?></span><br/>
				        <span>info@kammavaari.com</span><br/>
				        <span>+91 - <?php echo $profile_rm_details[0]['rm_phone'] ?></span>
				    </p>
				</div>
		      </div>
		    </div>
		  </div>
		</div>
		<script src="<?php echo base_url() ?>assets/kammavaari/js/lightgallery-all.min.js"></script>
		<script src="<?php echo base_url() ?>assets/kammavaari/js/slick.min.js"></script>
		<script type="text/javascript">
          $(document).ready(function() { 
          	// init slick slider
		    $('.slick').slick({
		      dots: true,
		      infinite: true,
		      speed: 300,
		      slidesToShow: 1,
		      adaptiveHeight: true
			  
		    });

		    // slick light gallery
		    $('.slick').lightGallery({
		      selector: '.slick-slide:not(.slick-cloned) .lightgallery',
			  
		      //selectWithin: '.slick-slide:not(.slick-cloned)'
		    });
			});
			</script>
			
			<style>
			.lg-outer.lg-thumb-open .lg-thumb-outer {
				display: none !important;
			}
			
			#lg-download{display: none !important;}
			#lg-share{display: none !important;}
			#lg-actual-size{display: none !important;}
			.lg-autoplay-button{display: none !important;}
			</style>
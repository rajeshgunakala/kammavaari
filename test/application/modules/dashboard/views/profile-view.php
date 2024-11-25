<link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.0/css/lightgallery.min.css" rel="stylesheet"/>
<style>
.slick-slide div {height:300px;overflow:hidden;border-radius: 10px;}
</style>
<div class="main_content">
			<div class="container">
	            <div class="row m-0">
	            	<div class="search_section">
		            	<div class="row pt-2 pb-3">
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
					            <p><?php echo $primary_info['last_name'];?> | <?php echo $primary_info['profile_id'];?> </p>
					            <span class="profile_info">
				                    <p class="mt-2"><?php echo $primary_info['age'];?> Age, <?php echo $religion_info['height'];?>'' Height</p>
				                    <p><?php echo ucwords($religion_info['religion']);?>, <?php echo ucwords($religion_info['caste']);?>,<?php echo ucwords($religion_info['mother_tounge']);?><br /></p>
				                    <p><?php echo $profession_info['heighst_education'];?></p>
				                    <p><?php echo ucwords($profession_info['living_in']);?></p>
				                </span>
				                <span class="profile_info"><strong> Hello <?php echo $my_details['last_name'];?></strong>, If you find the basic details of <strong><?php echo $primary_info['last_name'];?> (<?php echo $primary_info['profile_id'];?>)</strong>, suitable please click on send interest ❤️ button. On doing so you will be accessible to view <?php if($primary_info['gender']=='male') {echo 'his';}else{echo 'her';} ?> more information. </span>
				                
					        </div>
							
					        <div class="col-md-3 pt-2 text-center">
								<a href="javascript:void(0)" title="Show Interest" class="profile_detail_icons interested" id="profile_<?php echo $primary_info['pid']; ?>" data-name="<?php echo $primary_info['last_name'];?>" data-id="<?php echo $primary_info['pid'];  ?>"><i class="icofont-heart-alt"></i> <span>Show Interest</span></a>
								<a href="javascript:void(0)" title="Get RM Details" class="profile_detail_icons rm_details" id="rm_data_<?php echo $primary_info['pid']; ?>" data-name="<?php echo $primary_info['rm_name'];?>#<?php echo $primary_info['rm_phone'];?>#<?php echo $primary_info['rm_email'];?>"><i class="icofont-phone"></i> <span>Get RM Details</span></a>
								<a href="javascript:void(0)" title="Decline Interest" class="profile_detail_icons notinterested" id="ign_profile_<?php echo $primary_info['pid']; ?>" data-name="<?php echo $primary_info['last_name'];?>" data-id="<?php echo $primary_info['pid'];  ?>"><i class="icofont-close"></i> <span>Decline Interest</span></a>
					        </div>
					    </div>
		            	<div class="tab-nav col-md-12">
							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="pills-basic-info-tab" data-toggle="pill" href="#pills-basic-info" role="tab" aria-controls="pills-basic-info" aria-selected="true">Basic Information</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-education" role="tab" aria-controls="pills-education" aria-selected="false">Education</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-profession" role="tab" aria-controls="pills-profession" aria-selected="false">Profession</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-location-tab" data-toggle="pill" href="#pills-location" role="tab" aria-controls="pills-location" aria-selected="false">Location</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-family-tab" data-toggle="pill" href="#pills-family" role="tab" aria-controls="pills-family" aria-selected="false">Family Details</a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-property-tab" data-toggle="pill" href="#pills-property" role="tab" aria-controls="pills-property" aria-selected="false">Property Details</a>
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
												<p class="col-md-3 attribute_name">About <?php echo $primary_info['last_name'];?></p>
												<p class="col-md-9 attribute_value"><?php echo $primary_info['last_name'];?>.</p>
											</div> -->
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Name:</p>
												<p class="col-md-9 attribute_value"><?php echo $primary_info['last_name'];?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Marital Status:</p>
												<p class="col-md-9 attribute_value"><?php if($religion_info['marital_status']!='') { echo $religion_info['marital_status']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Height:</p>
												<p class="col-md-9 attribute_value"><?php if($religion_info['height']!='') { echo $religion_info['height'].'" ('.$religion_info['height_cm'].'cms)'; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Caste:</p>
												<p class="col-md-9 attribute_value"><?php if($religion_info['caste']!='') { echo $religion_info['caste']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Religion:</p>
												<p class="col-md-9 attribute_value"><?php if($religion_info['religion']!='') { echo $religion_info['religion']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Mother tongue:</p>
												<p class="col-md-9 attribute_value"><?php if($religion_info['mother_tounge']!='') { echo $religion_info['mother_tounge']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Age:</p>
												<p class="col-md-9 attribute_value"><?php if($primary_info['dob']!='') { echo $primary_info['dob']." (".$primary_info['age'].")"; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Time Of Birth:</p>
												<p class="col-md-9 attribute_value"><?php if($religion_info['time_of_birth']!='') { echo $religion_info['time_of_birth']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Place Of Birth:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['place_of_birth']!='') { echo $religion_info['place_of_birth']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Star:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['star']!='') { echo $religion_info['star']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Paadam:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['paadam']!='') { echo $religion_info['paadam']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Raasi:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['raasi']!='') { echo $religion_info['raasi']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Gothram:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['gothram']!='') { echo $religion_info['gothram']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Lagnam:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['lagnam']!='') { echo $religion_info['lagnam']; } else{ echo "N/A"; }?></p>
											</div>
											<div class="row pb-3">
												<p class="col-md-3 attribute_name">Complexion:</p>
												<p class="col-md-9 attribute_value" data-toggle="modal" data-target="#exampleModal1"><?php if($religion_info['complexion']!='') { echo $religion_info['complexion']; } else{ echo "N/A"; }?></p>
											</div>
										</div>
									</div>
								</div>
								<!-- Tab 1 Ends Here -->
								<!-- Tab 2 Start Here -->
								<div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
									<div class="col-md-12 pt-4">
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Education:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['heighst_education']!='') { echo $profession_info['heighst_education']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Specialization:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['specialization']!='') { echo $profession_info['specialization']; } else{ echo "N/A"; }?></p>
										</div>
									</div>
								</div>
								<!-- Tab 2 Ends Here -->
								<!-- Tab 3 Start Here -->
								<div class="tab-pane fade" id="pills-profession" role="tabpanel" aria-labelledby="pills-profession-tab">									
									<div class="col-md-12 pt-4">
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Profession:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['occupation']!='') { echo $profession_info['occupation']; } else{ echo "N/A"; }?> </p>
										</div>
										
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Income:</p>
											<p class="col-md-9 attribute_value"> <?php if($profession_info['annual_income']!='') { if($profession_info['country']=='usa'){ } else{ "Rs ";} echo $profession_info['annual_income']." /-"; } else{ echo "N/A"; }?></p>
										</div>
									<!--	<div class="row pb-3">
											<p class="col-md-3 attribute_name">Company Name:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['company']!='') { echo $profession_info['company']; } else{ echo "N/A"; }?></p>
										</div>   -->
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Professional Details:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['about_profession']!='') { echo $profession_info['about_profession']; } else{ echo "N/A"; }?></p>
										</div>
									</div>
								</div>
								<!-- Tab 3 Ends Here -->
								<!-- Tab 4 Start Here -->
								<div class="tab-pane fade" id="pills-location" role="tabpanel" aria-labelledby="pills-location-tab">
									<div class="col-md-12 pt-4">
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Country Living:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['country']!='') { echo $profession_info['country']; } else{ echo "N/A"; }?></p>
										</div>
										<?php if($profession_info['country'] != 'india') { ?>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Visa Type:</p>
											<p class="col-md-9 attribute_value"> <?php if($profession_info['visatype']!='') { echo $profession_info['visatype']; } else{ echo "N/A"; }?></p>
										</div>
										<?php } ?>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">State Living:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['state']!='') { echo $profession_info['state']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">City Living:</p>
											<p class="col-md-9 attribute_value"><?php if($profession_info['city']!='') { echo $profession_info['city']; } else{ echo "N/A"; }?></p>
										</div>
									</div>
								</div>
								<!-- Tab 6 Start Here -->
								<div class="tab-pane fade" id="pills-family" role="tabpanel" aria-labelledby="pills-family-tab">
									<div class="col-md-12 pt-4">
										
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Father Education:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['father_education']!='') { echo $parents_info['father_education']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Father Profession:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['father_profession']!='') { echo $parents_info['father_profession']; } else{ echo "N/A"; }?></p>
										</div>
										
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Father's Father State:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['fathers_father_state']!='') { echo $parents_info['fathers_father_state']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Father's Father District:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['fathers_father_district']!='') { echo $parents_info['fathers_father_district']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Mother's Education:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['mother_education']!='') { echo $parents_info['mother_education']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Mother's Profession:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['mother_profession']!='') { echo $parents_info['mother_profession']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Mother's Father State:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['mothers_father_state']!='') { echo $parents_info['mothers_father_state']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Mother's Father District:</p>
											<p class="col-md-9 attribute_value"><?php if($parents_info['mothers_father_district']!='') { echo $parents_info['mothers_father_district']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">No of Brothers:</p>
											<p class="col-md-9 attribute_value"><?php if($siblings_info['no_of_brothers']!='') { echo $siblings_info['no_of_brothers']; } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">No of Sisters:</p>
											<p class="col-md-9 attribute_value"><?php if($siblings_info['no_of_sisters']!='') { echo $siblings_info['no_of_sisters']; } else{ echo "N/A"; }?></p>
										</div>
									</div>
								</div>
								<!-- Tab 6 Ends Here -->
								<!-- Tab 7 Start Here -->
								<div class="tab-pane fade" id="pills-property" role="tabpanel" aria-labelledby="pills-property-tab">
									<div class="col-md-12 pt-4">
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Property Type:</p>
											<p class="col-md-9 attribute_value"><?php if($property_info['Property_type']!='') { echo ucfirst($property_info['Property_type']); } else{ echo "N/A"; }?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Property Value:</p>
											<p class="col-md-9 attribute_value"><?php if($property_info["property_value"]=='') { 
															echo "N/A"; 
															} else {
																	
																	echo $property_info['property_value']." <span> Cr</span>" ;
																	}
															?></p>
										</div>
										<div class="row pb-3">
											<p class="col-md-3 attribute_name">Property Details:</p>
											<p class="col-md-9 attribute_value"><?php if($property_info['property_Desc']!='') { echo $property_info['property_Desc']; } else{ echo "N/A"; }?></p>
										</div>
									</div>
								</div>
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
		<script src="<?php echo base_url() ?>assets/kammavaari/js/lightgallery-all.m
		in.js"></script>
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
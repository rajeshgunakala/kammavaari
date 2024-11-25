	 <?php
		$completeness = $profile_complete[0]->total;
		if ($profile_complete[0]->religion == 0) {

			$complete_profile_link = site_url() . "register/religion";
			$txt = "Add Religion details to get 2 times more responses ( +10% )";
			$btn_txt = "Add Religion details";
		} else if ($profile_complete[0]->edu_prof == 0) {
			$complete_profile_link = site_url() . "register/profession";
			$txt = "Add Prefession details to get 2 times more responses ( +20% )";
			$btn_txt = "Add Prefession details";
		} else if ($profile_complete[0]->parents == 0) {
			$complete_profile_link = site_url() . "register/parents";
			$txt = "Add Parent details to get 2 times more responses ( +10% )";
			$btn_txt = "Add Parent details";
		} else if ($profile_complete[0]->Siblings == 0) {
			$complete_profile_link = site_url() . "register/siblings";
			$txt = "Add Siblings details to get 2 times more responses ( +20% )";
			$btn_txt = "Add Siblings details";
		} else if ($profile_complete[0]->photo == 0) {
			$complete_profile_link = site_url() . "register/upload";
			$txt = "Add Images to get 2 times more responses ( +30% )";
			$btn_txt = "Add Photos";
		}

		if ($completeness != 100) {
		}
		?>

	 <style>
	 	.textblue {
	 		color: blue !important;
	 	}

	 	/* .blur-profile {
    filter: blur(5px);
     Adjust the blur intensity as needed 
    opacity: 0.7;
} */
	 </style>

	 <?php
		$expdate = date('Y-m-d');
		$curdate = date('Y-m-d');
		foreach ($payment_details1 as $v1) {
			$expdate =  date("Y-m-d", strtotime($v1['expiry_date']));
		}
		/*if($expdate > $curdate)
{
    echo $expdate;
    echo "<br/>";
    echo $curdate;
}
else
{
    echo $curdate;
}
exit();*/
		?>

	 <!-- Dashboard Banner Start Here -->
	 <div class="dashboard_banner">
	 	<div class="container">
	 		<div class="row">
	 			<div class="col-md-7  col-sm-7">
	 				<section class="">
	 					<div class="row mobile-responsive-row profimgrow">

	 						<div class="col-sm-4 col-md-5 col-lg-4 upload-photo" style="cursor: pointer;">
	 							<?php if ($profile_pic[0]["applicationphotopath"] != '') { ?>
	 								<div class=""><img class="dashboard_profile_img" src="<?php echo $profile_pic[0]["applicationphotopath"]; ?>"></div>
	 							<?php } else { ?>
	 								<div class=""><img class="dashboard_profile_img" src="<?php echo site_url() ?>images/noimage.jpg"></div>
	 							<?php } ?>
	 							<a
	 								href="<?php echo site_url() ?>/dashboard/dashboard/status/<?php echo $primary_info['pid'] ?>/<?php echo $primary_info['private'] ?>"> <button class="btn <?php echo ($primary_info['private'] == 1) ? 'btn-success' : 'btn-warning'; ?>" style="border-radius: 20px;"> <?php echo ($primary_info['private'] == 1) ? 'Private' : 'Public'; ?> </button>

	 							</a>


	 							<p style="color:white">
	 								<?php echo ($primary_info['private'] == 1) ? 'Your profile currently public ' : 'Your profile currently private'  ?>
	 							</p>
	 						</div>

	 						<div class="col-sm-8 col-md-7 col-lg-8 dashboard_profile">

	 							<?php $this->session->set_userdata('id_value', $primary_info['profile_id']); ?>
	 							<h2><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name']; ?></h2>
	 							<p class="ka-small-p m-0 p-0">Profile ID - <span>&nbsp; <?php echo $primary_info['profile_id']; ?> </span>
							</p>
							<p class="ka-small-p m-0 p-0"><?php if (($payment_details[0]['expiry_date']) == '') { } else { ?> (Expiry Date - <?php echo date("d/M/Y", strtotime($payment_details[0]['expiry_date'])); ?>)<?php } ?></p>
	 							<p class="ka-small-p m-0 p-0">Account Type - &nbsp; <span><?php echo ucwords($primary_info['ms_usertype']); ?></span></p>
	 							<p style="max-width: 200px; justify-content: space-between !important; cursor: pointer;">Profile Completeness <span> <?php echo $completeness; ?>%</span></p>
	 							<div class="progress"  style="max-width: 200px !important;">
	 								<div class="progress-bar" style="width: <?php echo $completeness; ?>%;">
	 								</div>
	 							</div>
	 							<!--	<?php if ($primary_info['ms_usertype'] == "regular") { ?>   -->
	 							<a href="<?php echo site_url() ?>dashboard/plan" class="btn btn-teal min-140" >Upgrade Membership</a>
	 							<!--	<?php } ?>   -->
	 						</div>
	 					</div>
	 				</section>
	 			</div>
	 			<div class="col-md-5  col-sm-5 rmSection">
	 				<div class="row mt-4 rmbox">
	 					<div class="col-sm-4 col-md-4 col-lg-6 mrm_section"><img alt="" src="<?php echo base_url() ?>assets/kammavaari/images/relationship_ic.svg" /></div>
	 					<div class="col-sm-8 col-md-8 col-lg-6 mrm_section_right">
	 						<p class="m-0 p-0">
	 							YOUR RM<br />
	 							<span><?php echo ucwords($primary_info['rm_username']); ?></span><br />
	 							<span style="color:yellow;">+91 - <?php echo $primary_info['rm_phone']; ?></span><br />
	 							<span style="display:none;"><?php echo $primary_info['rm_email']; ?></span>
	 							<span>9:00AM to 6:00PM</span>
	 						<div>
	 							<a href="<?php echo site_url() ?>/dashboard/chat_with_admin"><button class="btn btn-primary" style="border-radius:20px">Chat With RM</button></a>
	 						</div>
	 						</p>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>


	 </div>
	 </div>

	 </div>
	 </section>
	 </div>

	 <!-- Dashboard Banner Ends Here -->

	 <!--Profiles Cards Section Start Here-->
	 <div class="profile_cards_section">
	 	<div class="container">
	 		<div class="row mx-n2 profile_list-main">

			 <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
	 				<div class="row profile_list profile_list_bg" style="cursor: pointer;background-color:DodgerBlue;">
	 					<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
	 						<p class="count"><?php echo count($viewed_contacts); ?></p>
	 					</div>
	 					<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
	 						<a href="<?php echo site_url(); ?>dashboard/recently_viewed">
	 							<p>Viewed Profiles</p>
	 							<div class="col-lg-12 col-md-12 profile_list_right">
	 								<?php $i = 0;
										foreach ($viewed_contacts as $viewed) {
											$i++; ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($viewed["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $viewed["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										<?php } ?>
	 									</div>
	 								<?php if ($i == 3) {
												break;
											}
										} ?>
	 								<?php if (count($viewed_contacts) > 3) { ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($viewed["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $viewed_contacts[3]["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										<?php } ?>
	 										<div class="cover_img">+ <?php echo count($viewed_contacts) - 3; ?></div>
	 									</div>
	 								<?php } else if (count($viewed_contacts) == 0) {
										?>
	 									<p>Not Available</p>
	 								<?php } ?>
	 							</div>
	 						</a>
	 					</div>
	 				</div>
	 			</div>


	 			<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
	 				<div class="row profile_list profile_list_bg"
	 					style="cursor: pointer; background-color:MediumSeaGreen;">
	 					<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
	 						<p class="count"><?php echo count($contact_list); ?></p>
	 					</div>
	 					<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
	 						<a href="<?php echo site_url(); ?>dashboard/contact_list">
	 							<p>Intrested Profiles</p>
	 							<div class="col-lg-12 col-md-12 profile_list_right">
	 								<!---->
	 								<?php $i = 0;
										foreach ($contact_list as $contact) {
											$i++; ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($contact["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $contact["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url; ?>/images/no-image.jpg" />
	 										<?php } ?>
	 									</div>
	 								<?php if ($i == 3) {
												break;
											}
										} ?>
	 								<?php if (count($contact_list) > 3) { ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($contact_list[3]["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $contact_list[3]["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url; ?>/images/no-image.jpg" />
	 										<?php } ?><div class="cover_img">+ <?php echo count($contact_list) - 3; ?></div>
	 									</div>
	 								<?php } else if (count($contact_list) == 0) {
										?>
	 									<p>Not Available</p>
	 								<?php } ?>


	 							</div>
	 						</a>
	 					</div>
	 				</div>
	 			</div>

	 			<!-- <div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
	 				<div class="row profile_list profile_list_bg" style="cursor: pointer;background-color:DodgerBlue;">
	 					<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
	 						<p class="count"><?php echo count($viewed_contacts); ?></p>
	 					</div>
	 					<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
	 						<a href="<?php echo site_url(); ?>dashboard/recently_viewed">
	 							<p>Viewed Profiles</p>
	 							<div class="col-lg-12 col-md-12 profile_list_right">
	 								<?php $i = 0;
										foreach ($viewed_contacts as $viewed) {
											$i++; ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($viewed["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $viewed["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										<?php } ?>
	 									</div>
	 								<?php if ($i == 3) {
												break;
											}
										} ?>
	 								<?php if (count($viewed_contacts) > 3) { ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($viewed["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $viewed_contacts[3]["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										<?php } ?>
	 										<div class="cover_img">+ <?php echo count($viewed_contacts) - 3; ?></div>
	 									</div>
	 								<?php } else if (count($viewed_contacts) == 0) {
										?>
	 									<p>Not Available</p>
	 								<?php } ?>
	 							</div>
	 						</a>
	 					</div>
	 				</div>
	 			</div> -->

	 			<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
	 				<div class="row profile_list profile_list_bg" style="cursor: pointer;background-color:Violet;">
	 					<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
	 						<p class="count"><?php echo count($shortlisted_profiles); ?></p>
	 					</div>
	 					<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
	 						<a href="<?php echo site_url(); ?>dashboard/my_shortlist">
	 							<p>ShortList Profiles</p>
	 							<div class="col-lg-12 col-md-12 profile_list_right">
	 								<?php $i = 0;
										foreach ($shortlisted_profiles as $shortlist) {
											$i++; ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($shortlist["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $shortlist["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										<?php } ?>
	 									</div>
	 								<?php if ($i == 3) {
												break;
											}
										} ?>
	 								<?php if (count($shortlisted_profiles) > 3) { ?>
	 									<div class="profile_list_right_content">
	 										<?php if ($shortlisted_count[3]["applicationphotopath"]) { ?>
	 											<img alt="" src="<?php echo $shortlisted_count[3]["applicationphotopath"]; ?>" />
	 										<?php } else { ?>
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										<?php } ?>
	 										<div class="cover_img">+ <?php echo count($shortlisted_profiles) - 3; ?></div>
	 									</div>
	 								<?php } else if (count($shortlisted_profiles) == 0) {
										?>
	 									<p>Not Available</p>
	 								<?php } ?>

	 							</div>
	 						</a>
	 					</div>
	 				</div>
	 			</div>

	 			<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
	 				<div class="row profile_list profile_list_bg" style="cursor: pointer;">
	 					<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
	 						<p class="count"><?php echo is_array($profile_intrest_by) ? count($profile_intrest_by) : '0'; ?>
	 						</p>
	 					</div>
	 					<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
	 						<a href="<?php echo site_url(); ?>dashboard/Profileinterestedby_list">
	 							<p>Decision Pending</p>
	 							<div class="col-lg-12 col-md-12 profile_list_right">
	 								<?php if (count($profile_intrest_by) == 0) {
										?>
	 									<p>Not Available</p>
	 									<?php } else {
											$i = 0;
											foreach ($profile_intrest_by as $pending) {
												$i++; ?>
	 										<div class="profile_list_right_content">
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 										</div>
	 									<?php if ($i == 3) {
													break;
												}
											} ?>
	 									<?php if (count($profile_intrest_by) > 3) { ?>
	 										<div class="profile_list_right_content">
	 											<img alt="" src="<?php echo site_url(); ?>/images/no-image.jpg" />
	 											<div class="cover_img">+ <?php echo count($profile_intrest_by) - 3; ?></div>
	 										</div>
	 								<?php }
										} ?>


	 							</div>
	 						</a>
	 					</div>
	 				</div>
	 			</div>

	 			<!--			<div class="col-md-3 col-lg-3">
						<div class="row profile_list" data-toggle="modal" data-target="#exampleModal">
							<div  class="col-md-12">
								<div class="offers_card">
									<p>
										Upgrade Your Membership
										<br />
										<span>Offers Avaliable</span>
									</p>
								</div>
							</div>
						</div>
					</div>  -->
	 		</div>
	 	</div>
	 </div>
	 <!--Profiles Cards Section Ends Here-->

	 <!-- Main Content Start Here -->
	 <div class="main_content">
	 	<div class="container">
	 		<div class="row mdflexreverse">
	 			<div class="col-md-12 col-lg-9">


	 				<!-- Regular Profile Slider Content Start Here-->
	 				<div class="dashboard_main_content">
	 					<div class="row main_content_top">
	 						<p class="col-md-8 heading">
	 							<span><?php echo count($get_all_records); ?></span> New Profiles
	 						</p>
	 						<div class="show_all col-md-4">
	 							<a href="<?php echo site_url(); ?>dashboard/newprofiles">Show All Profiles</a>
	 						</div>
	 					</div>
	 					<div class="slider responsive main_slider">
	 						<?php if (count($get_all_records) > 0) {
									foreach ($get_all_records as $value) { ?>
	 								<div class="multiple main_slider_in">
	 									<div
	 										class="imgContainers <?php echo ($value['applicationphotopath'] != "" && $value['private'] == 0) ? 'blur-profile' : ''; ?>">
	 										<!--&& $value['ismain']==1 && $value['isactive']==1 -->

	 										<?php if ($value['applicationphotopath'] != "") { ?>
	 											<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 												class="view_profile"><img src="<?php echo $value["applicationphotopath"];   ?>"
	 													alt="<?php echo $value['last_name']; ?>"> </a>
	 										<?php } else { ?>

	 											<?php if ($value['gender'] == 'male') { ?>
	 												<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 													class="view_profile"><img class="profileImg"
	 														src="<?php echo site_url(); ?>images/boy.png"
	 														alt="<?php echo $value['last_name']; ?>"> </a>
	 											<?php } else { ?>
	 												<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 													class="view_profile"><img class="profileImg"
	 														src="<?php echo site_url(); ?>images/female.png"
	 														alt="<?php echo $value['last_name']; ?>"> </a>
	 											<?php } ?>

	 											<!--<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url(); ?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>-->

	 										<?php } ?>
	 									</div>
	 									<div class="col-md-12 main_slider_in_content">
	 										<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 											class="view_profile">
	 											<p title="<?php echo $value['last_name']; ?>" class="textblue">
	 												<?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p>
	 											<span><?php echo date('d-M-Y', strtotime($value['dob'])); ?> , Height
	 												<?php echo $value['height']; ?> ''</span>
	 											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?>
	 												<?php echo $value['mother_tounge']; ?></span>
	 											<span><?php echo $value['heighst_education']; ?></span>
	 											<span><?php echo $value['occupation']; ?></span>
	 										</a>

	 									</div>
	 								</div>
	 							<?php }
								} else { ?>
	 							<p>No matches found</p>
	 						<?php } ?>

	 					</div>
	 				</div>
	 				<!-- Recomende profiles-->
	 				<div class="dashboard_main_content">
	 					<div class="row main_content_top">
	 						<p class="col-md-8 heading">
	 							<?php
									$current_week = ceil((date('d') - 1) / 7) + 1;
									$profile_count = $current_week * 2;
									foreach ($recomended_profiles as $value) {
										if (!in_array($value['id'], $exist_profiles2)) {
											$exist_profiles2[] = $value['id'];
										}
									}
									?>
	 							<span><?php echo (count($recomended_profiles) >= $profile_count) ? $profile_count : count($recomended_profiles); ?></span>
	 							Recomended Profiles

	 						</p>
	 						<div class="show_all col-md-4">
	 							<a href="<?php echo site_url(); ?>dashboard/recomended_profiles">Show All Profiles</a>
	 						</div>
	 					</div>
	 					<div class="slider responsive main_slider">
	 						<?php if (count($recomended_profiles) > 0) {
									$exist_profiles = array();
									$i = 0;
									foreach ($recomended_profiles as $value) {
										if (!in_array($value['id'], $exist_profiles)) {
											$exist_profiles[] = $value['id'];
											$i++;
								?>
	 									<?php if ($i <= $profile_count) { ?>
	 										<div class="multiple main_slider_in">
	 											<div
	 												class="imgContainers  <?php echo ($value['applicationphotopath'] != "" && $value['private'] == 0) ? 'blur-profile' : ''; ?>">
	 												<?php if ($value['applicationphotopath'] != "") { ?>
	 													<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 														class="view_profile">
	 														<img src="<?php echo $value["applicationphotopath"];   ?>"
	 															alt="<?php echo $value['last_name'];  ?>"
	 															class="<?php echo ($value['status'] == 4 || $value['status'] == 3 || $value['status'] == 2) ? 'blur-profile' : ''; ?>"> </a>
	 												<?php } else { ?>

	 													<?php if ($value['gender'] == 'male') { ?>
	 														<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 															class="view_profile">
	 															<img class="profileImg"
	 																src="<?php echo site_url(); ?>images/boy.png"
	 																alt="<?php echo $value['last_name']; ?>"> </a>
	 													<?php } else { ?>
	 														<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 															class="view_profile"><img class="profileImg"
	 																src="<?php echo site_url(); ?>images/female.png"
	 																alt="<?php echo $value['last_name']; ?>"> </a>
	 													<?php } ?>

	 													<!--<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url(); ?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>-->

	 												<?php } ?>
	 											</div>
	 											<div class="col-md-12 main_slider_in_content">
	 												<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 													class="view_profile">
	 													<p title="<?php echo $value['last_name']; ?>" class="textblue">
	 														<?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p>
	 													<span><?php echo date('d-M-Y', strtotime($value['dob'])); ?> , Height
	 														<?php echo $value['height']; ?> ''</span>
	 													<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?>
	 														<?php echo $value['mother_tounge']; ?></span>
	 													<span><?php echo $value['heighst_education']; ?></span>
	 													<span><?php echo $value['occupation']; ?></span>
	 												</a>

	 											</div>
	 										</div>
	 									<?php } ?>
	 							<?php }
									}
								} else { ?>
	 							<p>No Recomended profiles found</p>
	 						<?php } ?>

	 					</div>
	 				</div>
	 				<!-- Regular Profile Slider Content Ends Here-->

	 				<!--  Assisted Profiles Slider Content Start Here-->
	 				<?php if (count($assisted_profiles) > 0) { ?>
	 					<div class="dashboard_main_content">
	 						<div class="row main_content_top">
	 							<p class="col-md-8 heading">
	 								<span><?php echo count($assisted_profiles) ?></span> Assisted Profiles
	 							</p>
	 							<div class="show_all col-md-4">
	 								<a href="<?php echo site_url(); ?>dashboard/assistedprofiles">Show All Profiles</a>
	 							</div>
	 						</div>
	 						<div class="slider responsive main_slider">
	 							<?php foreach ($assisted_profiles as $value) { ?>
	 								<div class="multiple main_slider_in">
	 									<div class="imgContainers">
	 										<?php if ($value['applicationphotopath'] != "") { ?>
	 											<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">
	 												<img
	 													src="<?php echo $value['applicationphotopath']; ?>"
	 													alt="<?php echo $value['last_name']; ?>"
	 													class="<?php echo ($value['status'] == 4 || $value['status'] == 3 || $value['status'] == 2) ? 'blur-profile' : ''; ?>">
	 											</a>
	 										<?php } else { ?>
	 											<?php if ($value['gender'] == 'male') { ?>
	 												<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">
	 													<img class="profileImg" src="<?php echo site_url(); ?>images/boy.png" alt="<?php echo $value['last_name']; ?>">
	 												</a>
	 											<?php } else { ?>
	 												<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">
	 													<img class="profileImg" src="<?php echo site_url(); ?>images/female.png" alt="<?php echo $value['last_name']; ?>">
	 												</a>
	 											<?php } ?>
	 										<?php } ?>
	 									</div>
	 									<div class="col-md-12 main_slider_in_content">
	 										<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">
	 											<p title="<?php echo $value['last_name']; ?>" class="textblue">
	 												<?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?>
	 											</p>
	 											<span><?php echo date('d-M-Y', strtotime($value['dob'])); ?>, Height <?php echo $value['height']; ?> ''</span>
	 											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
	 											<span><?php echo $value['heighst_education']; ?></span>
	 											<span><?php echo $value['occupation']; ?></span>
	 										</a>
	 									</div>
	 								</div>
	 							<?php } ?>
	 						</div>
	 					</div>
	 				<?php } ?>

	 				<!--  Assisted Profiles Slider Content Ends Here-->

	 				<!--  Recommended Profiles Slider Content Start Here 08-03-2023 09-03-2023 -->
	 				<?php if (count($assisted_profiles) == 2000000000000) { ?>
	 					<div class="dashboard_main_content">
	 						<div class="row main_content_top">
	 							<p class="col-md-8 heading">
	 								<span><?php if ((count($assisted_profiles)) >= 3) {
												echo $we = 3;
											} else {
												echo count($assisted_profiles);
											} ?></span>
	 								Recommended Profiles
	 							</p>
	 							<div class="show_all col-md-4 d-none">
	 								<a href="<?php echo site_url(); ?>dashboard/assistedprofiles">Show All Profiles</a>
	 							</div>
	 						</div>
	 						<div class="slider responsive main_slider">
	 							<?php $z = 1;
									foreach ($assisted_profiles as $value) {
										if ($z <= 3) { ?>
	 									<div class="multiple main_slider_in">

	 										<div class="imgContainers">
	 											<!--&& $value['ismain']==1 && $value['isactive']-->
	 											<?php if ($value['applicationphotopath'] != "") { ?>

	 												<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 													class="view_profile"><img src="<?php echo $value['applicationphotopath']; ?>"
	 														alt="<?php echo $value['last_name']; ?>"></a>

	 											<?php } else { ?>

	 												<?php if ($value['gender'] == 'male') { ?>
	 													<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 														class="view_profile"><img class="profileImg"
	 															src="<?php echo site_url(); ?>images/boy.png"
	 															alt="<?php echo $value['last_name']; ?>"> </a>
	 												<?php } else { ?>
	 													<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 														class="view_profile"><img class="profileImg"
	 															src="<?php echo site_url(); ?>images/female.png"
	 															alt="<?php echo $value['last_name']; ?>"> </a>
	 												<?php } ?>

	 												<!--<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url(); ?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>"></a>-->

	 											<?php } ?>
	 										</div>
	 										<div class="col-md-12 main_slider_in_content">

	 											<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>"
	 												class="view_profile">
	 												<p title="<?php echo $value['last_name']; ?>" class="textblue">
	 													<?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p>
	 												<span><?php echo date('d-M-Y', strtotime($value['dob'])); ?> , Height
	 													<?php echo $value['height']; ?> ''</span>
	 												<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?>
	 													<?php echo $value['mother_tounge']; ?></span>
	 												<span><?php echo $value['heighst_education']; ?></span>
	 												<span><?php echo $value['occupation']; ?></span>
	 											</a>

	 										</div>
	 									</div>
	 								<?php }
										$z++;
										?>
	 							<?php } ?>
	 						</div>
	 					</div>
	 				<?php } ?>
	 				<!--  Recommended Profiles Slider Content Ends Here 08-03-2023 09-03-2023 -->


	 				<!--- System Suggested Profiles start here---->
	 				<?php if (count($suggestedProfiles) > 0) { ?>
	 					<div class="dashboard_main_content">
	 						<div class="row main_content_top">
	 							<p class="col-md-8 heading">
	 								<span><?php echo count($suggestedProfiles) ?></span> Suggested Profiles
	 							</p>
	 							<div class="show_all col-md-4">
	 								<a href="<?php echo site_url(); ?>dashboard/suggestedprofiles">Show All Profiles</a>
	 							</div>
	 						</div>
	 						<div class="slider responsive main_slider">
	 							<?php foreach ($suggestedProfiles as $value) { ?>
	 								<div class="multiple main_slider_in">
	 									<div class="imgContainers">
	 										<!--&& $value['ismain']==1 && $value['isactive']-->
	 										<?php if ($value['applicationphotopath'] != "") { ?>
	 											<img src="<?php echo $value['applicationphotopath']; ?>"
	 												alt="<?php echo $value['last_name']; ?>">
	 										<?php } else { ?>
	 											<img src="<?php echo site_url(); ?>images/noimage.jpg"
	 												alt="<?php echo $value['last_name']; ?>">
	 										<?php } ?>
	 									</div>
	 									<div class="col-md-12 main_slider_in_content">
	 										<p title="<?php echo $value['last_name']; ?>"><?php echo $value['last_name']; ?> |
	 											<?php echo $value["profile_id"]; ?> </p>
	 										<span><?php echo $value['cur_age']; ?> Years, Height
	 											<?php echo $value['height']; ?></span>
	 										<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?>
	 											<?php echo $value['mother_tounge']; ?></span>
	 										<span><?php echo $value['heighst_education']; ?></span>
	 										<span><?php echo $value['occupation']; ?></span>
	 									</div>
	 								</div>
	 							<?php } ?>
	 						</div>
	 					</div>
	 				<?php } ?>

	 				<!--  System Suggested Profiles ends here --->
	 				<!--  Confidential Profiles Slider Content Start Here-->
	 				<?php if (count($conf_profiles_for_regular) > 0 && $primary_info['ms_usertype'] == "regular") { ?>
	 					<div class="dashboard_main_content p-0">
	 						<div class="row main_content_top">
	 							<p class="col-md-8 heading">
	 								<span><?php echo count($conf_profiles_for_regular) ?></span> Confidential Profiles
	 							</p>
	 						</div>
	 						<div class="confidential_profile">
	 							<div class="slider responsive main_slider m-0">
	 								<?php foreach ($conf_profiles_for_regular as $value) { ?>
	 									<div class="multiple main_slider_in">
	 										<div class="imgContainers">
	 											<!--&& $value['ismain']==1 && $value['isactive']-->
	 											<?php if ($value['image'] != "") { ?>
	 												<img src="<?php echo site_url(); ?>images/profilepics/<?php echo $value['id']; ?>/<?php echo $value['image']; ?>"
	 													alt="<?php echo $value['last_name']; ?>">
	 											<?php } else { ?>
	 												<img src="<?php echo site_url(); ?>images/noimage.jpg"
	 													alt="<?php echo $value['last_name']; ?>">
	 											<?php } ?>
	 										</div>
	 										<div class="col-md-12 main_slider_in_content">
	 											<p title="<?php echo $value['last_name']; ?>"><?php echo $value['last_name']; ?>
	 											</p>
	 											<span><?php echo $value['cur_age']; ?> Years, Height
	 												<?php echo $value['height']; ?></span>
	 											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?>
	 												<?php echo $value['mother_tounge']; ?></span>
	 											<span><?php echo $value['heighst_education']; ?></span>
	 											<span><?php echo $value['occupation']; ?></span>
	 										</div>
	 									</div>
	 								<?php } ?>
	 							</div>
	 							<div class="fullWidthBlur">
	 								<img alt="" class="ka-locked"
	 									src="<?php echo base_url() ?>assets/kammavaari/images/lock_ic.svg">
	 								<p class="pt-2 pb-3">As a confidential user, <br> you have the privilege to browse and
	 									select from thousands of profiles on kammavaari Matrimony. </p>
	 								<a class="btn btn-teal min-140" data-toggle="modal" data-target="#exampleModal">Upgrade
	 									Your Membership</a>
	 							</div>
	 						</div>
	 					</div>
	 				<?php } ?>
	 				<!--  Confidential Profiles Slider Content Ends Here-->
	 			</div>

	 			<div class="col-md-12 col-lg-3 ">
	 				<div class="search_section">
	 					<div class="text-center">
	 						<p>Why are you waiting, Start searching<br> your life partner</p>
	 						<a class="btn btn-teal btn_gradiant"
	 							href="<?php echo site_url() ?>dashboard/search_partner">Search Now</a>
	 					</div>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	 </div>
	 <!-- SweetAlert 1 -->
	 <!-- SweetAlert 1 -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

	 <script>
	 	document.addEventListener('DOMContentLoaded', function() {
	 		$.ajax({
	 			url: "<?php echo base_url(); ?>dashboard/dashboard/get_short",
	 			type: "POST",
	 			success: function(result) {
	 				var json = JSON.parse(result);
	 				if (Array.isArray(json)) {
	 					json.forEach(function(item) {
	 						console.log("ID:", item.id);
	 						console.log("First Name:", item.first_name);
	 						console.log("Image:", item.photo);
	 						console.log("Image:", item.main_id);
	 						//Display SweetAlert with user details
	 						swal({
	 							title: "Your Profile Shortlisted by",
	 							text: "Name: " + item.first_name,
	 							confirmButtonText: "Open",
	 							closeOnConfirm: false
	 						}, function() {
	 							// Handle custom button action
	 							console.log("Custom action triggered");
	 							// Redirect to a URL
	 							window.location.href = "<?php echo base_url(); ?>dashboard/search/profile2/" + item.id + "/" + item.main_id;
	 						});
	 					});
	 				}
	 			}
	 		});
	 	});
	 </script>

	 <style>
	 	.blur-profile {
	 		filter: blur(5px);
	 		/* Adjust the blur amount as needed */
	 	}
		/* msn code start */

		.dashboard_profile_img {
			margin-bottom: 10%;
			width: 185px;
			height: 185px;
			max-width: 100%;
			object-fit: cover;
		}
		@media screen and (max-width : 1080px) {
			.profile_list_right_main{
				padding-left: 15px;
			}
			img.dashboard_profile_img {
				height: auto;
			}
		}
		@media screen and (max-width : 1000px) {
			.profile_list_left {
				min-width: 100%;
			}

			.profile_list_right_main {
				min-width: 90%;
				border-top: 1px solid #fff;
				padding-top: 7px;
				margin-top: 5px;
				border-left: none;
			}
			.row.profile_list.profile_list_bg {
				justify-content: center;
			}
			.profile_list_right_main p {
				margin-bottom: 2px;
			}
		}

		@media screen and (max-width : 1000px) {
			a.btn.btn-teal.min-140 {
				font-size: 15px;
			}
			
		}
		@media screen and (max-width : 991px) {
			.mdflexreverse{
				flex-direction: column-reverse;
			}
			.profile_list{
				height: 115px;
			}
			
		}
		@media screen and (max-width : 767px) {
			.profile_list_right_main {
				min-width: auto;
				border-top: none;
				padding-top: 7px;
				margin-top: 5px;
				border-left: 1px solid #fff;
			}
			.profile_list_left {
				min-width: auto;
			}
			.mrm_section {
				justify-content: center;
			}
			.slick-slide {
				padding: 5px !important;
			}
			a.btn.btn-teal.min-140 {
				font-size: 14px;
			}
			
		}

		@media screen and (max-width : 575px) {
			.row.mobile-responsive-row.profimgrow {
				flex-wrap: nowrap;
				max-width: 440px;
				margin: auto;
			}
			.row.mt-4.rmbox {
				flex-wrap: nowrap;
				max-width: 440px;
				margin: auto;
			}
			.row.profile_list.profile_list_bg {
				max-width: 400px;
				margin-left: auto;
				margin-right: auto;
			}
			.profile_list {
				height: auto;
			}
			.rmbox button.btn.btn-primary {
                font-size: 14px;
            }
		}
		@media screen and (max-width : 440px) {
			.row.mobile-responsive-row.profimgrow,.row.mt-4.rmbox {
				flex-wrap: wrap;
			}
			.upload-photo {
				text-align: center;
			}
			img.dashboard_profile_img {
				height: auto;
				display: block;
				margin: auto;
				margin-bottom: 20px;
			}
			.dashboard_profile h2 {
				text-align: center !important;
			}
			.dashboard_profile p,.progress {
				justify-content: center;
				margin: auto;
			}
			.progress-bar {
				margin-right: auto;
			}
			.mrm_section_right {
				text-align: center;
				border-left: none;
				border-top: 1px solid #fff;
				margin-top: 15px;
				padding-top: 10px;
			}
			.multiple.main_slider_in {
				max-width: 240px;
				margin: auto;
				display: block !important;
			}
			a.btn.btn-teal.min-140 {
				font-size: 14px;
				margin: auto;
				display: block;
				max-width: 210px;
				margin-top: 15px;
			}
		}
		/* msn code ends */
	 </style>


	 
	 <!-- Main Content Ends Here -->
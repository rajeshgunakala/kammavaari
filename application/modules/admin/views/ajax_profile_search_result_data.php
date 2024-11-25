<?php echo $this->ajax_pagination->create_links(); ?>
<div class="col-md-12 no-padding">
	 <div class="profile_block">
		<?php foreach($posts as $profileData){ 
		$matchMeeting = getMatchmetingSeriousByProfileId($profileData["id"]); 
		?>
		<div class="col-md-12 <?php if($i%2 == 0) { echo "even"; } else { echo "odd"; }?>">	
			 <div class="all-images col-md-3">
				 <ul class="bxslider">
					<?php
					   if ($profileData['applicationphotopath']) {  ?>
					   <img src="<?php echo $profileData['applicationphotopath']; ?>" class="profil-img">
					<?php } else { ?>
					   <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img">
					<?php } ?>
				 </ul>
				 <div class="add_share_link"><a href="javascript:void(0);" id="<?php echo $profileData["id"]?>" onclick="addToShare(<?php echo $profileData["id"]?>)">Add to Share</a></div>
			  </div>
			<div class="col-md-9">
				<div class="col-md-9 left no-padding">
					<p class="profile_name"><?php echo $profileData["first_name"]. " ".$profileData["last_name"]; ?>
					<?php if($profileData['prime'] == 'yes') {  ?>
										    <span style="color: #fff;padding: 3px;background:blue"> 
										    <?php  echo 'Prime'; ?></span> <?php
										    }
										    else{
										        echo '';
										    }
										    ?></p>
				</div>
				<div class="col-md-3 left no-padding">
					<p class="profile_type"><?php echo ucfirst($profileData["ms_usertype"]) ?></p>
					<p class="full_profile_details share_link fp_share"><span>Share FP :</span>  <a onclick="open_whatsapp_share_popup1('<?php echo $profileData['id']; ?>')"><img src="<?php echo base_url(); ?>images/whats_app.png" width="25px" height="25px" class="whatsapp_icon"> </a></p>
				</div>
				<p class="profile_details bold"><span style="color: #fff;padding: 3px;background:<?php echo ($profileData["payment_status"] == 1) ? 'green' : 'red' ?>"><?php echo $profileData["profile_id"]; ?></span> | <?php echo (!empty($profileData['profile_owner_name'])) ? ucfirst($profileData['profile_owner_name']) : "Not Assigned"; ?></p>
				<div class="col-md-6 left no-padding">
					<ul style="padding-left:20px;">
						<?php $age = getAgeDetails($profileData["id"]);?>
						<li class="profile_details"><?php echo $profileData['date']."-".$profileData['month']."-".$profileData['year']; ?></li>
						<li class="profile_details"><?php echo $age['age'] . " Yrs"; ?>, <?php echo $profileData['height']; ?></li>
						<li class="profile_details"><?php echo ($profileData['marital_status'] == "never_married") ? "Un Married" : $profileData['marital_status']; ?></li>
						<li class="profile_details"><?php echo $profileData['religion'] . ", "; ?><?php echo $profileData['caste']; ?></li>
						<?php if(!empty($profileData['star'])) {?>
						<li class="profile_details">Star is <?php echo $profileData['star']; ?><?php if(!empty($profileData['gothram'])) {?>, Gothram is <?php echo $profileData['gothram']; } ?></li>
						<?php } ?>										
					</ul>
				</div>
				<div class="col-md-6 left">	
					<ul>
					<li class="profile_details">Lives in <?php echo $profileData['living_in']; ?></li>
					<li class="profile_details">Studied <?php echo $profileData['heighst_education']; ?></li>
					<?php if(!empty($profileData['occupation'])) {?>
					<li class="profile_details"><?php echo $profileData['occupation']; ?></li>
					<?php } ?>
					<?php if(!empty($profileData['annual_income'])) {?>
						<li class="profile_details">Earns <?php echo $profileData['annual_income']; ?></li>
					<?php } ?>
					<?php if(!empty($profileData['fathers_father_district'])) {?>
						<li class="profile_details">Father's Native is <?php echo $profileData['fathers_father_district']; ?></li>
					<?php } ?>
					<?php if(!empty($profileData['mothers_father_district'])) {?>
					<li class="profile_details">Mother's Native is <?php echo $profileData['mothers_father_district']; ?></li>
					<?php } ?>
					</ul>
				</div>
				<div class="col-md-12 no-padding">
					<div class="col-md-6 left no-padding">
					<p class="profile_details share_link"><span>Share Profile :</span>  <a onclick="open_whatsapp_share_popup('<?php echo $profileData['id']; ?>')"><img src="<?php echo base_url(); ?>images/whats_app.png" width="25px" height="25px" class="whatsapp_icon"> </a> <span class="separator">|</span> <a class="preferences trigger_popup_fricc" onclick="open_preferences_popup('<?php echo $profileData['id']; ?>')"><img src="<?php echo base_url(); ?>images/picon.png" width="25px" height="25px" class="whatsapp_icon"></a> <?php if($matchMeeting > 0) {?><span class="separator">|</span> <a href="<?php echo site_url().'admin/matchmetingserious' ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/images/mms.png" width="50px" height="25px" class="whatsapp_icon"></a><?php } ?><span class="separator">|</span> <a href="<?php echo base_url(); ?>/admin/service_report?profileId=<?php echo $profileData['profile_id']; ?>" target="_blank"><img src="<?php echo base_url(); ?>images/service-report.jpg" width="25px" height="25px" class="whatsapp_icon"></a></p>
					<div class="html_popup_box" id="popup_<?php echo $profileData['id']; ?>">
					<span class="helper"></span>
					<div class="preferences_content">
						<div class="popupCloseButton" onclick="close_preferences_popup('<?php echo $profileData['id']; ?>')">&times;</div>
						<h1>Partner Preferences</h1>
						<?php if(!empty($profileData['p_age_from']) && !empty($profileData['p_age_to'])) {?>
						<table class="table_responsive">
						<?php if(!empty($profileData['p_age_from']) && !empty($profileData['p_age_to'])) {?>
							<tr>
								<td class="label">Age Gap</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_age_from']." to  ".$profileData['p_age_to']; ?> Years</td>
							</tr>
						<?php } ?>
						<?php if(!empty($profileData['p_height_from']) && !empty($profileData['p_height_to'])) {?>
							<tr>
								<td class="label">Height</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_height_from']." to  ".$profileData['p_height_to']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_marital_status'])) {?>
							<tr>
								<td class="label">Marital Status</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_marital_status']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['employee_in'])) {?>
							<tr>
								<td class="label">Working In</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['employee_in']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_education'])) {?>
							<tr>
								<td class="label">Education</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_education']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_caste'])) {?>
							<tr>
								<td class="label">Caste</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_caste']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_star'])) {?>
							<tr>
								<td class="label">Star</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_star']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_mother_tongue'])) {?>
							<tr>
								<td class="label">Mother Tongue</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_mother_tongue']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_profession'])) {?>
							<tr>
								<td class="label">Profession</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_profession']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_country'])) {?>
							<tr>
								<td class="label">Country</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_country']; ?></td>
							</tr>
							<?php } ?> 
							<?php if(!empty($profileData['p_district'])) {?>
							<tr>
								<td class="label">District</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_district']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_city'])) {?>
							<tr>
								<td class="label">City</td>
								<td class="colon">:</td>
								<td class="value"><?php echo $profileData['p_city']; ?></td>
							</tr>
							<?php } ?>
							<?php if(!empty($profileData['p_about'])) {?>
							<tr>
								<td class="label">More Details</td>
								<td class="colon">:</td>
								<td class="value"><?php echo base64_decode($profileData['p_about']); ?></td>
							</tr>
							<?php } ?>							
					</table> 
					<?php }  else {?>
					<p>No data available.</p>
					<?php } ?>
					</div>
				</div>									
				</div>
					<div class="col-md-6 left no-padding">
						<p class="profile_details" style="padding:10px 0;"><a class="view_profile_link" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $profileData['id']; ?>" target="_blank">View Profile</a></p>
					</div>
				</div>				
			</div>
		</div>
		<?php $i++; } ?>
	</div>
	</div>
<?php echo $this->ajax_pagination->create_links(); ?>
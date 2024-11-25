<style type="text/css">
	.bxslider img {
		width: 100% !important;
		height: 200px !important;
	}

	.selected_sharing .remove {
		float: left;
		background: #cebfbf;
		padding: 0 5px 0 7px;
		position: relative;
		width: 23px;
		overflow: hidden;
		cursor: pointer;
		border: 1px solid #ecaf0e;
		border-radius: 50%;
		height: 23px;
		color: #c31a1a;
	}

	.processing_txt {
		float: left;
		padding: 10px;
	}

	.loader_img {
		float: left;
	}

	.rightside_box {
		margin-top: 55px;
	}

	.submit_share .share_box {
		margin: 10px 0;
	}

	.submit_share .share_label {
		margin: 10px 0;
	}

	.submit_share .submit_btn button {
		margin: 5px auto;
		float: right;
	}

	.selected_sharing .profile {
		border-bottom: 1px solid #ccc;
		padding: 0 0 10px 0;
		margin: 10px 0;
	}

	.admin_search_container {
		display: block;
		margin-top: 20px;
	}

	.admin_search_container .col-md-12 {
		display: flex;
	}

	.no-padding {
		padding: 0;
	}

	.left {
		float: left;
	}

	.pagination {
		margin: 20px 0;
	}

	.profile_type {
		color: #70cb5e;
		font-size: 18px;
		font-weight: 700;
		text-align: right;
	}

	.view_profile_link {
		font-size: 16px;
		font-weight: bold;
		color: #70cb5e;
		float: right;
	}

	.add_share_link {
		margin: 10px 0;
		text-align: center;
		background: #ffb902;
		padding: 10px;
		border-radius: 4px;
	}

	.add_share_link a {
		color: #000;
		font-size: 16px;
		font-weight: 700;
		margin: 10px 0;
	}

	.selected_profiles {
		display: block;
		width: 100%;
		position: relative;
		overflow: hidden;
		background: #efefef;
		border: 1px solid #ccc;
		padding: 0 10px;
		margin: 0 10px;
	}

	.selected_profiles h3 {
		border-bottom: 1px solid #dedede;
		font-size: 20px !important;
		color: #70cb5e;
		padding: 5px;
	}

	.selected_profile_details {
		padding: 10px;
		width: 85%;
		float: left;
	}

	.no-profiles-selected {
		padding: 10px;
		color: #ff0000;
	}

	.profile_block {
		display: block;
		width: 100%;
		position: relative;
		overflow: hidden;
		background: #efefef;
		border: 1px solid #ccc;
	}

	.profile_block .even {
		display: flex;
		width: 100%;
		position: relative;
		overflow: hidden;
		background: #efefef;
		margin: 0;
		border-bottom: 2px solid #dedede;
		padding: 10px;
	}

	.profile_block .odd {
		display: flex;
		width: 100%;
		position: relative;
		overflow: hidden;
		background: #fff;
		margin: 0;
		border-bottom: 2px solid #dedede;
		padding: 10px;
	}

	.profile_name {
		font-weight: bold;
		color: #000;
		font-size: 18px;
		margin-bottom: 10px;
	}

	.profile_details {
		color: #000;
		font-size: 14px;
		margin-bottom: 10px;
		float: left;
		width: 100%;
	}

	.pagination>li>,
	.pagination>li>span {
		background-color: #eae6e6;
		color: black;
	}

	.pagination>li {
		padding: 0px;
	}

	.page-link {
		background-color: white;
		border: none;
	}

	.page-link a#hover {
		text-decoration: none;
	}

	a:hover {
		text-decoration: none;
	}

	/* .pagination > li:nth-child(2){display:none;} */
	.pagination .previous .disabled,
	.pagination .next .disabled {
		display: none;
	}

	#loadingDiv .content {
		position: absolute;
		height: 100px;
		width: 20%;
		top: 50%;
		left: 50%;
		margin-left: -50px;
		margin-top: -50px;
		background-size: 100%;
		color: #fff;
	}

	.loading {
		position: fixed;
		top: 50%;
		left: 50%;
		margin-left: -50px;
		margin-top: -50px;
		background-size: 100%;
		background-color: #ffb902;
		padding: 5px;
		font-weight: 700;
		border: 1px solid #ccc;
	}

	.loading .content {
		display: flex;
	}

	.send_both_side_label span {
		padding: 0 5px;
	}

	#selected_share_profiles input[type="checkbox"] {
		vertical-align: bottom;
	}

	.fp_share {
		float: right;
		margin: 10px 0 0;
		cursor: pointer;
	}
</style>

<div class="new-side-content">
<div class="container admin_search_container">
	<div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;width:100%;">
		<div style="font-size: 22px;font-weight: 700;width:50%;float:left;">Profiles List</div>
		<!-- <div style="padding-left: 40px;width:50%;float: right;"><a href="<?php echo site_url(); ?>admin/basic_search?searchtype=<?php echo $_REQUEST["searchtype"] ?>"><button class="submit">Modify Search</button></a></div> -->
	</div>
	<!-- Display posts list -->
	<?php if (!empty($posts)) { ?>
		<div class="col-md-12 no-padding">
			<div class="post-list col-md-9 no-padding" id="dataList">
				<?php echo $this->ajax_pagination->create_links(); ?>
				<div class="col-md-12 no-padding">
					<div class="profile_block">
						<?php foreach ($posts as $profileData) {
							$matchMeeting = getMatchmetingSeriousByProfileId($profileData["id"]);
						?>
							<div class="col-md-12 <?php if ($i % 2 == 0) {
														echo "even";
													} else {
														echo "odd";
													} ?>">
								<div class="all-images col-md-3">
									<ul class="bxslider">
										<?php
										if ($profileData['applicationphotopath']) {  ?>
											<img src="<?php echo $profileData['applicationphotopath']; ?>" class="profil-img">
										<?php } else { ?>
											<img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img">
										<?php } ?>
									</ul>
									<div class="add_share_link"><a href="javascript:void(0);" id="<?php echo $profileData["id"] ?>" onclick="addToShare(<?php echo $profileData["id"] ?>)">Add to Share</a></div>
								</div>
								<div class="col-md-9">
									<div class="col-md-9 left no-padding">
										<p class="profile_name"><?php echo $profileData["first_name"] . " " . $profileData["last_name"]; ?>

											<?php if ($profileData['prime'] == 'yes') {  ?>
												<span style="color: #fff;padding: 3px;background:blue">
													<?php echo 'Prime'; ?></span> <?php
																				} else {
																					echo '';
																				}
																					?>
										</p>
									</div>
									<div class="col-md-3 left no-padding">
										<p class="profile_type"><?php echo ucfirst($profileData["ms_usertype"]) ?></p>
										<p class="full_profile_details share_link fp_share"><span>Share FP :</span> <a onclick="open_whatsapp_share_popup1('<?php echo $profileData['id']; ?>')"><img src="<?php echo base_url(); ?>images/whats_app.png" width="25px" height="25px" class="whatsapp_icon"> </a></p>
									</div>
									<p class="profile_details bold"><span style="color: #fff;padding: 3px;background:<?php echo ($profileData["payment_status"] == 1) ? 'green' : 'red' ?>"><?php echo $profileData["profile_id"]; ?></span> | <?php echo (!empty($profileData['profile_owner_name'])) ? ucfirst($profileData['profile_owner_name']) : "Not Assigned"; ?></p>
									<div class="col-md-6 left no-padding">
										<ul style="padding-left:20px;">
											<?php $age = getAgeDetails($profileData["id"]); ?>
											<li class="profile_details"><?php echo $profileData['date'] . "-" . $profileData['month'] . "-" . $profileData['year']; ?></li>
											<li class="profile_details"><?php echo $age['age'] . " Yrs"; ?>, <?php echo $profileData['height']; ?></li>
											<li class="profile_details"><?php echo ($profileData['marital_status'] == "never_married") ? "Un Married" : $profileData['marital_status']; ?></li>
											<li class="profile_details"><?php echo $profileData['religion'] . ", "; ?><?php echo $profileData['caste']; ?></li>
											<?php if (!empty($profileData['star'])) { ?>
												<li class="profile_details">Star is <?php echo $profileData['star']; ?><?php if (!empty($profileData['gothram'])) { ?>, Gothram is <?php echo $profileData['gothram'];
																																												} ?></li>
											<?php } ?>
										</ul>
									</div>
									<div class="col-md-6 left">
										<ul>
											<li class="profile_details">Lives in <?php echo $profileData['living_in']; ?></li>
											<li class="profile_details">Studied <?php echo $profileData['heighst_education']; ?></li>
											<?php if (!empty($profileData['occupation'])) { ?>
												<li class="profile_details"><?php echo $profileData['occupation']; ?></li>
											<?php } ?>
											<?php if (!empty($profileData['annual_income'])) { ?>
												<li class="profile_details">Earns <?php echo $profileData['annual_income']; ?></li>
											<?php } ?>
											<?php if (!empty($profileData['fathers_father_district'])) { ?>
												<li class="profile_details">Father's Native is <?php echo $profileData['fathers_father_district']; ?></li>
											<?php } ?>
											<?php if (!empty($profileData['mothers_father_district'])) { ?>
												<li class="profile_details">Mother's Native is <?php echo $profileData['mothers_father_district']; ?></li>
											<?php } ?>
										</ul>
									</div>
									<div class="col-md-12 no-padding">
										<div class="col-md-6 left no-padding">
											<p class="profile_details share_link"><span>Share Profile :</span> <a onclick="open_whatsapp_share_popup('<?php echo $profileData['id']; ?>')"><img src="<?php echo base_url(); ?>images/whats_app.png" width="25px" height="25px" class="whatsapp_icon"> </a> <span class="separator">|</span> <a class="preferences trigger_popup_fricc" onclick="open_preferences_popup('<?php echo $profileData['id']; ?>')"><img src="<?php echo base_url(); ?>images/picon.png" width="25px" height="25px" class="whatsapp_icon"></a> <?php if ($matchMeeting > 0) { ?><span class="separator">|</span> <a href="<?php echo site_url() . 'admin/matchmetingserious' ?>" target="_blank"><img src="<?php echo base_url(); ?>assets/images/mms.png" width="50px" height="25px" class="whatsapp_icon"></a><?php } ?><span class="separator">|</span> <a href="<?php echo base_url(); ?>/admin/service_report?profileId=<?php echo $profileData['profile_id']; ?>" target="_blank"><img src="<?php echo base_url(); ?>images/service-report.jpg" width="25px" height="25px" class="whatsapp_icon"></a></p>
											<div class="html_popup_box" id="popup_<?php echo $profileData['id']; ?>">
												<span class="helper"></span>
												<div class="preferences_content">
													<div class="popupCloseButton" onclick="close_preferences_popup('<?php echo $profileData['id']; ?>')">&times;</div>
													<h1>Partner Preferences</h1>
													<?php if (!empty($profileData['p_age_from']) && !empty($profileData['p_age_to'])) { ?>
														<table class="table_responsive">
															<?php if (!empty($profileData['p_age_from']) && !empty($profileData['p_age_to'])) { ?>
																<tr>
																	<td class="label">Age Gap</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_age_from'] . " to  " . $profileData['p_age_to']; ?> Years</td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_height_from']) && !empty($profileData['p_height_to'])) { ?>
																<tr>
																	<td class="label">Height</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_height_from'] . " to  " . $profileData['p_height_to']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_marital_status'])) { ?>
																<tr>
																	<td class="label">Marital Status</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_marital_status']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['employee_in'])) { ?>
																<tr>
																	<td class="label">Working In</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['employee_in']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_education'])) { ?>
																<tr>
																	<td class="label">Education</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_education']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_caste'])) { ?>
																<tr>
																	<td class="label">Caste</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_caste']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_star'])) { ?>
																<tr>
																	<td class="label">Star</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_star']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_mother_tongue'])) { ?>
																<tr>
																	<td class="label">Mother Tongue</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_mother_tongue']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_profession'])) { ?>
																<tr>
																	<td class="label">Profession</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_profession']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_country'])) { ?>
																<tr>
																	<td class="label">Country</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_country']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_district'])) { ?>
																<tr>
																	<td class="label">District</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_district']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_city'])) { ?>
																<tr>
																	<td class="label">City</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo $profileData['p_city']; ?></td>
																</tr>
															<?php } ?>
															<?php if (!empty($profileData['p_about'])) { ?>
																<tr>
																	<td class="label">More Details</td>
																	<td class="colon">:</td>
																	<td class="value"><?php echo base64_decode($profileData['p_about']); ?></td>
																</tr>
															<?php } ?>
														</table>
													<?php } else { ?>
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
						<?php $i++;
						} ?>
					</div>
				</div>
				<?php echo $this->ajax_pagination->create_links(); ?>
			</div>
			<div class="col-md-3 no-padding rightside_box">
				<div class="selected_profiles">
					<h3>Selected Profiles</h3>
					<?php //print_r($selected_profiles); 
					?>
					<form name="selected_share_profiles" id="selected_share_profiles" method="POST">
						<div class="selected_sharing">
							<?php if (count($selected_profiles) > 0) {
								foreach ($selected_profiles as $selected_profile) { ?>
									<div class="col-md-12 no-padding profile" id="profile_<?php echo $selected_profile["id"]; ?>">
										<div class="col-md-3 no-padding">
											<div><?php
													if (!empty($selected_profile['applicationphotopath'])) {  ?>
													<img src="<?php echo $selected_profile['applicationphotopath']; ?>" class="profil-img" style="width:100%;">
												<?php } else { ?>
													<img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img" style="width:100%;">
												<?php } ?>
											</div>
										</div>
										<div class="col-md-9 no-padding">
											<div class="selected_profile_details">
												<p class="profile_details"><?php echo $selected_profile["first_name"] . " " . $selected_profile["last_name"] ?></p>
												<p class="profile_details"><?php echo $selected_profile["profile_id"]; ?></p>
												<p><label class="send_both_side_label"><input type="checkbox" name="bothside_selected_profile[<?php echo $selected_profile["id"] ?>]" id="bothside_selected_profile_<?php echo $selected_profile["id"] ?>" value="0" onclick="sendThisBothSide(<?php echo $selected_profile['id'] ?>)" /><span>Send both side</span></label></p>
											</div>
											<div class="remove" id="<?php echo $selected_profile["profile_id"]; ?>" onclick="removeSeelctedProfile(<?php echo $selected_profile['id'];?>)">x</div>
										</div>
										<input type="hidden" name="selected_profiles" value="<?php echo $selected_profile["id"] ?>" />
									</div>
								<?php } ?>
							<?php } ?>
						</div>

						<p class="no-profiles-selected" <?php if (count($selected_profiles) == 0) { ?> style="display:block;" <?php } else { ?> style="display:none;" <?php } ?>>No Profiles selected so far... </p>
						<div class="submit_share" <?php if (count($selected_profiles) == 0) { ?> style="display:none;" <?php } else { ?> style="display:block;" <?php } ?>>
							<p class="share_label"><label style="width:90px"><strong>Share Type</strong></label>&nbsp;:&nbsp; <input type="radio" name="share_type" id="share_type_from" class="share_type" value="from" onclick="shareTypeOption('from')"> From &nbsp;<input type="radio" name="share_type" class="share_type" id="share_type_to" value="to" checked onclick="shareTypeOption('to')"> To</p>
							<div class="share_box"><label style="width:90px"><strong>Share <span id="SharingFromTo">To</span></strong></label>&nbsp;:&nbsp;<input type="text" style="width:150px" name="sendto_profile" class="form_control" value="" /></div>
							<p class="share_label"><input type="checkbox" name="send_profile_option" class="send_profile_option" value="0" onclick="sendProfileOption()"> Send both sides</p>
							<p class="share_label"><input type="checkbox" name="resend" class="resend" value="0" onclick="resendProfiles()"> Resend</p>
							<div class="submit_btn"><button href="javascript:void(0)" class="btn btn-primary" id="submit_share_profiles" onclick="sendProfiles()">Share Profiles</button></div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php  } else { ?>
		<p>No Profile(s) found...</p>
	<?php } ?>



	<!-- Loading Image -->
	<div class="loading" style="display: none;">
		<div class="content">
			<div class="loader_img"><img src="<?php echo base_url('assets/images/ajax-loader.gif'); ?>" /></div>
			<div class="processing_txt">Processing...</div>
		</div>
	</div>
	<div class="html_popup_box" id="whats_app_popup">
		<div class="preferences_content" style="padding:0; width:25%;top:25%;">
			<div class="popupCloseButton" onclick="whatsapp_close_popup()">&times;</div>
			<h1>WhatsApp Share</h1>
			<div class="body_content">
				<div class="notification"></div>
				<div class="share_form_row">
					<label class="label">Profile Id</label>
					<input type="text" name="share_to_profile_id" class="form-control" id="share_to_profile_id">
				</div>
				<div class="share_form_row">
					<label class="label"></label>
					<div style="text-align: left;"><input type="checkbox" name="resend_whatsapp" class="form-control-checkbox" id="resend_whatsapp" onclick="resendWhatsAppProfile()" value="0">&nbsp;Resend</div>
				</div>
				<input type="hidden" name="share_profile_id" class="form-control" id="share_profile_id">
				<div class="form_row" style="display:block;"><button type="button" class="btn btn-primary" name="submit" onclick="submit_whatsapp_share()">Generate WhatsApp Share URL</button></div>
			</div>
		</div>
	</div>
	<div class="html_popup_box" id="whats_app_popup_fp">
		<div class="preferences_content" style="padding:0; width:25%;top:25%;">
			<div class="popupCloseButton" onclick="whatsapp_close_popup_fp()">&times;</div>
			<h1>WhatsApp Full Share</h1>
			<div class="body_content">
				<div class="notification_fp"></div>
				<div class="share_form_row">
					<label class="label">Profile Id</label>
					<input type="text" name="share_to_profile_id_fp" class="form-control" id="share_to_profile_id_fp">
				</div>
				<div class="share_form_row">
					<label class="label"></label>
					<div style="text-align: left;"><input type="checkbox" name="resend_whatsapp_fp" class="form-control-checkbox" id="resend_whatsapp_fp" onclick="resendWhatsAppProfilefp()" value="0">&nbsp;Resend</div>
				</div>
				<input type="hidden" name="share_profile_id_fp" class="form-control" id="share_profile_id_fp">
				<div class="form_row" style="display:block;"><button type="button" class="btn btn-primary" name="submit" onclick="submit_whatsapp_share_fp()">Generate WhatsApp Share URL</button></div>
			</div>
		</div>
	</div>
</div>

<div id="whatsapp_share_url"></div>
</div>
<style>
	.body_content {
		padding: 15px;
	}

	.share_form_row {
		width: 100%;
		display: block;
		margin-bottom: 10px;
	}

	.share_form_row label {
		color: #000;
		font-weight: 600;
		width: 100px;
		float: left;
		vertical-align: middle;
		padding: 10px 0;
	}

	.share_form_row .form-control {
		width: 150px;
	}

	.notification {
		margin: 10px 0;
		color: #ff0000;
	}

	.notification_fp {
		margin: 10px 0;
		color: #ff0000;
	}
</style>
<script type="text/javascript">
	function shareTypeOption(type) {
		if (type == "from") {
			$("#SharingFromTo").text("From");
		} else {
			$("#SharingFromTo").text("To");
		}
	}

	function resendWhatsAppProfile() {
		if ($("#resend_whatsapp").val() == 1) {
			$("#resend_whatsapp").val("0");
		} else {
			$("#resend_whatsapp").val("1");
		}
	}

	function resendWhatsAppProfilefp() {
		if ($("#resend_whatsapp_fp").val() == 1) {
			$("#resend_whatsapp_fp").val("0");
		} else {
			$("#resend_whatsapp_fp").val("1");
		}
	}

	function close_preferences_popup(id) {
		$("#popup_" + id).hide();
	}

	function open_preferences_popup(id) {
		$("#popup_" + id).show();
	}

	function whatsapp_close_popup() {
		$("#whats_app_popup").hide();
		$(".notification").html("");
	}

	function whatsapp_close_popup_fp() {
		$("#whats_app_popup_fp").hide();
		$(".notification_fp").html("");
	}

	function open_whatsapp_share_popup(id) {
		$("#whats_app_popup").show();

		$("#share_profile_id").val(id);
	}

	function open_whatsapp_share_popup1(id) {
		$("#whats_app_popup_fp").show();
		$("#share_profile_id_fp").val(id);
	}

	function submit_whatsapp_share_fp() {
		var share_to_profile_id = $("#share_to_profile_id_fp").val();
		var share_profile_id = $("#share_profile_id_fp").val();
		var resend_whatsapp = $("#resend_whatsapp_fp").val();
		$(".notification_fp").html("");
		if (share_profile_id == "") {
			$(".notification_fp").html("Something went wrong. Please try again.");
			return false;
		}
		if (share_to_profile_id == "") {
			$(".notification_fp").html("Please enter Share To Profile Id");
			return false;
		}
		$.ajax({
			method: "POST",
			url: "<?php echo base_url() . 'admin/admin_search/generateWhatsAppShareUrl'; ?>",
			data: {
				profile_id: share_profile_id,
				share_to: share_to_profile_id,
				resend_whatsapp: resend_whatsapp,
				share_type: "fp"
			},
			dataType: 'json',
			beforeSend: function() {
				$('.loading').show();
			},
			success: function(data) {
				$('.loading').hide();
				if (data.status == "success") {
					//  alert(data.url);
					$("#whatsapp_share_url").text(data.url);
					$("#whats_app_popup_fp").hide();
					containerid = "whatsapp_share_url";
					var range = document.createRange();
					range.selectNode(document.getElementById(containerid));
					window.getSelection().addRange(range);
					document.execCommand("copy");
					alert("WhatsApp Share URL has been copied");
					$("#share_to_profile_id_fp").val('');
					$("#resend_whatsapp_fp").val('');
				} else {
					$(".notification_fp").html(data.message);
				}
			}
		});
	}

	function submit_whatsapp_share() {
		var share_to_profile_id = $("#share_to_profile_id").val();
		var share_profile_id = $("#share_profile_id").val();
		var resend_whatsapp = $("#resend_whatsapp").val();
		$(".notification").html("");
		if (share_profile_id == "") {
			$(".notification").html("Something went wrong. Please try again.");
			return false;
		}
		if (share_to_profile_id == "") {
			$(".notification").html("Please enter Share To Profile Id");
			return false;
		}
		$.ajax({
			method: "POST",
			url: "<?php echo base_url() . 'admin/admin_search/generateWhatsAppShareUrl'; ?>",
			data: {
				profile_id: share_profile_id,
				share_to: share_to_profile_id,
				resend_whatsapp: resend_whatsapp,
				share_type: "normal"
			},
			dataType: 'json',
			beforeSend: function() {
				$('.loading').show();
			},
			success: function(data) {
				$('.loading').hide();
				if (data.status == "success") {
					// alert(data.url);

					$("#whatsapp_share_url").text(data.url);
					$("#whats_app_popup").hide();
					containerid = "whatsapp_share_url";
					var range = document.createRange(0, 99999);
					range.deleteContents();
					range.selectNode(document.getElementById(containerid));
					//	alert(document.getElementById("whatsapp_share_url"));
					window.getSelection().addRange(range);
					document.execCommand("copy");
					alert(data.url);
					$("#whatsapp_share_url").text('');
					$("#share_to_profile_id").val('');
					$("#resend_whatsapp").val('');
					//	range.deleteContents();
				} else {
					$(".notification").html(data.message);
				}
			}
		});
	}



	// To copy link
	copyToClipboard = function(element) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val($(element).val()).select();
		document.execCommand("copy");
		$temp.remove();
		//alert("Link Copied");
	}

	function resendProfiles() {
		if ($(".resend").val() == 1) {
			$(".resend").val("0");
		} else {
			$(".resend").val("1");
		}
	}

	function sendProfileOption() {
		if ($(".send_profile_option").val() == 1) {
			$(".send_profile_option").val("0");
		} else {
			$(".send_profile_option").val("1");
		}
	}

	function sendThisBothSide(profle_id) {
		if ($("#bothside_selected_profile_" + profle_id).val() == 1) {
			$("#bothside_selected_profile_" + profle_id).val("0");
		} else {
			$("#bothside_selected_profile_" + profle_id).val("1");
		}
	}


	function removeSeelctedProfile(profile_id) {
		$.ajax({
			method: "POST",
			url: "<?php echo base_url() . 'admin/admin_search/removeProfileToShare'; ?>",
			data: {
				profile_id: profile_id
			},
			dataType: 'json',
			beforeSend: function() {
				$('.loading').show();
			},
			success: function(data) {
				$('.loading').hide();
				//if(data != "") {
				$('#profile_' + profile_id).remove();
				//$('.submit_share').show();
				//$('.no-profiles-selected').hide();
				//}
			}
		});
	}

	function addToShare(profile_id) {
		$.ajax({
			method: "POST",
			url: "<?php echo base_url() . 'admin/admin_search/addProfileToShare'; ?>",
			data: {
				profile_id: profile_id
			},
			beforeSend: function() {
				//$('body').append('<div id="loadingDiv"><div class="content"><div class="loader_img"><img src="<?php echo base_url() . "assets/images/ajax-loader.gif" ?>"/></div><div class="processing_txt">Processing...</div></div></div>');
				$('.loading').show();
			},
			success: function(data) {
				//$( "#loadingDiv" ).remove();
				$('.loading').hide();
				if (data != "") {
					$('.selected_sharing').append(data);
					$('.submit_share').show();
					$('.no-profiles-selected').hide();
				}
			}
		});
	}

	function sendProfiles() {
		var form_data = $("#selected_share_profiles").serializeArray();
		// console.log(form_data);
		$.ajax({
			method: "POST",
			url: "<?php echo base_url() . 'admin/admin_search/sendProfilesToShare'; ?>",
			data: {
				postdata: form_data
			},
			dataType: 'json',
			beforeSend: function() {
				$('.loading').show();
				$('.submit_btn button').attr("disabled", true);
			},
			success: function(data) {
				$('.loading').hide();
				$('.submit_btn button').removeAttr("disabled");;
				console.log(data);
				if (data != "") {
					alert(data.message);
					if (data.status == "success") {
						window.location.reload();
					}
					//$('.selected_sharing').html('');
				}
			}
		});
	}
</script>
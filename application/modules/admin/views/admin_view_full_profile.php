<div class="new-side-content">
<div class="main-container">
  <div class="container no-padding" style="margin-top: 4px;margin-bottom: 20px;background-color: white;">
    <div class="col-xs-12 col-md-12 col-lg-12 no-padding">
      <h1 class="page-header" style="padding-left:10px;"> Full Profile</h1>
    </div>
    <div class="col-xs-12 col-md-12 col-lg-12 no-padding" style="margin-top: 8px;">
      <div class="col-md-3 no-padding" style="float: left;">
        <div style="border:solid 1px #ccc;margin: 0 10px;">
        <div class="all-images">
          <ul class=" <?php if ($profile_pic[0]['applicationphotopath']) { ?>bxslider<?php } ?>" style="min-height:250px;max-height:250px;overflow: hidden;text-align: center;">
            <?php
			if ($profile_pic[0]['applicationphotopath']) { ?>
              <img src="<?php echo $profile_pic[0]['applicationphotopath']; ?>" class="profil-img" style="width:100%;">
            <?php
			} else { ?>
              <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img" style="width:100%;">
            <?php
			} ?>
          </ul>
        </div>
        <div class="candidate-information">
          <div class="col-md-12" style="padding: 0px;line-height: 16px;">
            <h4 style="padding:7px;font-size: 18px;"><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name']; ?> </h4>
			<h4 style="padding:7px;font-size: 18px;">(ID: <?php echo $primary_info['profile_id']; ?>)</h4>
          </div>
          <div class="col-md-12">
            <ul style="line-height: 16px; font-size: 13px;  text-align: left; list-style:none;">
              <li><?php echo $primary_info['age']; ?> Years, <?php echo stripcslashes($religion_info['height']); ?></li>
              <li><?php echo ucwords($religion_info['religion']); ?>, <?php echo ucwords($religion_info['caste']); ?>,<?php echo ucwords($religion_info['mother_tounge']); ?></li>
              <li><?php echo $religion_info['marital_status'] == "never_married" ? "Un Married" : ucwords($religion_info['marital_status']); ?></li>
            </ul>

          </div>
          <div class="col-md-12" style="line-height: 16px;">
            <ul>
              <li><?php echo $profession_info['heighst_education']; ?></li>
              <li><?php echo ucwords($profession_info['occupation']); ?></li>
              <li><?php echo ucwords($profession_info['living_in']); ?></li>
            </ul>
          </div>
		  <?php if (!empty($profession_info['about_me'])) { ?>
          <p class="p-20"><?php $cdata4 = preg_replace('/<[^>]*>/', '', $profession_info['about_me']);
				echo substr(stripslashes(str_replace("\n", "", $cdata4)), 0, 80); ?></p>
		  <?php	} ?>
        </div>
        </div>
      </div>
      <div class="col-md-9 no-padding" style="float: right; border:solid 0px;">
        <div class="view-profile col-xs-12 col-md-12 no-padding" st>
          <div class="profile-heading <?php if ($profilesettings->ms_usertype == 'confidential') { ?> premium<?php } ?><?php if ($profilesettings->ms_usertype == 'elite') { ?> elite<?php } ?>">
            <h3 class="lead">My Astro Details</h3>
          </div>
          <div class="col-xs-12 col-md-12" style="overflow:hidden;">
            <div class="preson-details" style="padding: 0px;width: 34%;float:left;  ">
              <p><strong>Age:</strong> <?php echo $primary_info['date']; ?>-<?php echo $primary_info['month']; ?>-<?php echo $primary_info['year']; ?> (<?php echo $primary_info['age']; ?> Years)</p>
              <p><strong>Star:</strong> <?php echo !empty($religion_info['star']) ? ucwords($religion_info['star']) : "NA"; ?></p>
			  <p><strong>Padam:</strong> <?php echo !empty($religion_info['paadam']) ? ucwords($religion_info['paadam']) : "NA"; ?></p>
            </div>

            <div style="padding: 0px;width: 33%;float:left;">
              <p><strong>Time Of Birth:</strong> <?php echo !empty($religion_info['time_of_birth']) ? ucwords($religion_info['time_of_birth']) : "NA"; ?></p>
              <p><strong>Raasi:</strong> <?php echo !empty($religion_info['raasi']) ? ucwords($religion_info['raasi']) : "NA"; ?></p>
			  <p><strong>Dosham:</strong> <?php echo !empty($religion_info['dosham']) ? ucwords($religion_info['dosham']) : "NA"; ?></p>
            </div>
            <div style="padding: 0px;width: 33%;float:right;">
              <p><strong>Place Of Birth:</strong> <?php echo !empty($religion_info['place_of_birth']) ? ucwords($religion_info['place_of_birth']) : "NA"; ?></p>
              <p><strong>Gothram:</strong> <?php echo !empty($religion_info['gothram']) ? ucwords($religion_info['gothram']) : "NA"; ?></p>
            </div>
          </div>
          <div class="col-xs-12">&nbsp;</div>
        </div>

        <div class="view-profile col-xs-12 col-md-12 no-padding">
          <div class="profile-heading">
            <h3 class="lead">My Education &amp; Professional Details</h3>
          </div>           
            <div class="preson-details">
              <strong>Education Details</strong>
              <?php if ($education_info->kv_ue_highedu || $education_info->kv_ue_pg || $education_info->kv_ue_g || $education_info->kv_ue_ug || $education_info->kv_ue_x) { ?>
				<table border="0" class="responsive_table">
            	<?php if ($education_info->kv_ue_highedu) { ?>
            	<tr>
                	<td class="strongbold widthtd"> <?php echo getlangkeywords('highestqua'); ?></td><td class="colon_pad">:</td><td><?php echo $education_info->kv_ue_highedu; ?><?php echo ($education_info->kv_ue_highedu_deg) ? ', ' . $education_info->kv_ue_highedu_deg : ''; ?><?php echo ($education_info->kv_ue_highedu_spec) ? ', ' . $education_info->kv_ue_highedu_spec : ''; ?><?php echo ($education_info->kv_ue_highedu_univ) ? ', ' . $education_info->kv_ue_highedu_univ : ''; ?><?php echo ($education_info->kv_ue_highedu_college) ? ', ' . $education_info->kv_ue_highedu_college : ''; ?><?php echo ($education_info->kv_ue_highedu_year) ? ', ' . $education_info->kv_ue_highedu_year : ''; ?>  </td>
                </tr>
                <?php } ?>
                <?php if ($education_info->kv_ue_pg) { ?>                <tr>
                	<td  class="strongbold widthtd"> <?php echo getlangkeywords('postgraduate'); ?> </td><td class="colon_pad">:</td><td><?php echo $education_info->kv_ue_pg; ?><?php echo ($education_info->kv_ue_pg_deg) ? ', ' . $education_info->kv_ue_pg_deg : ''; ?><?php echo ($education_info->kv_ue_pg_spec) ? ', ' . $education_info->kv_ue_pg_spec : ''; ?><?php echo ($education_info->kv_ue_pg_univ) ? ', ' . $education_info->kv_ue_pg_univ : ''; ?><?php echo ($education_info->kv_ue_pg_college) ? ', ' . $education_info->kv_ue_pg_college : ''; ?><?php echo ($education_info->kv_ue_pg_year) ? ', ' . $education_info->kv_ue_pg_year : ''; ?></td>
                </tr>
                <?php } ?>
                <?php if ($education_info->kv_ue_g) { ?>
                <tr>
                	<td  class="strongbold widthtd"><?php echo getlangkeywords('graduate'); ?> </td><td class="colon_pad">:</td><td><?php echo $education_info->kv_ue_g; ?><?php echo ($education_info->kv_ue_g_deg) ? ', ' . $education_info->kv_ue_g_deg : ''; ?><?php echo ($education_info->kv_ue_g_spec) ? ', ' . $education_info->kv_ue_g_spec : ''; ?> <?php echo ($education_info->kv_ue_g_univ) ? ', ' . $education_info->kv_ue_g_univ : ''; ?><?php echo ($education_info->kv_ue_g_college) ? ', ' . $education_info->kv_ue_g_college : ''; ?><?php echo ($education_info->kv_ue_g_year) ? ', ' . $education_info->kv_ue_g_year : ''; ?></td>
                </tr>
                <?php } ?>                
                  <?php if ($education_info->kv_ue_ug) { ?>
                <tr>
                	<td  class="strongbold widthtd"> <?php echo getlangkeywords('undergraduate'); ?> </td><td class="colon_pad">:</td><td><?php echo $education_info->kv_ue_ug; ?><?php echo ($education_info->kv_ue_ug_deg) ? ', ' . $education_info->kv_ue_ug_deg : ''; ?><?php echo ($education_info->kv_ue_ug_spec) ? ', ' . $education_info->kv_ue_ug_spec : ''; ?><?php echo ($education_info->kv_ue_ug_univ) ? ', ' . $education_info->kv_ue_ug_univ : ''; ?><?php echo ($education_info->kv_ue_ug_college) ? ', ' . $education_info->kv_ue_ug_college : ''; ?><?php echo ($education_info->kv_ue_ug_year) ? ', ' . $education_info->kv_ue_ug_year : ''; ?></td>
                </tr>
                <?php } ?>                
                 <?php if ($education_info->kv_ue_x) { ?>
                <tr>
                	<td  class="strongbold widthtd"> <?php echo getlangkeywords('school'); ?> </td><td class="colon_pad">:</td><td><?php echo $education_info->kv_ue_x; ?><?php echo (!empty(trim($education_info->kv_ue_x_college)) && strpos($education_info->kv_ue_x_college, '&nbsp;') === false) ? ', ' . $education_info->kv_ue_x_college : ''; ?><?php echo (!empty(trim($education_info->kv_ue_x_year)) && strpos($education_info->kv_ue_x_year, '&nbsp;') === false) ? ', ' . $education_info->kv_ue_x_year : ''; ?></td>
                </tr>
                <?php } ?>                
                <?php if ($profession_info['education_description']) { ?>
                <tr>
                	<td  class="strongbold widthtd">More Details</td><td class="colon_pad">:</td><td><?php echo ($profession_info['education_description']) ? '' . nl2br($profession_info['education_description']) : ''; ?></td>
                </tr>
                <?php } ?>
            </table>
			  <?php } else { ?> <p>No description found.<br></p> <?php } ?>
            </div>
          
           <div class="preson-details">
              <strong><br>Professional Details<br></strong>
				<table border="0" class="responsive_table">
					<tr>
						<td class="strongbold widthtd">Employee In</td><td class="colon_pad">:</td><td><?php echo !empty($profession_info['employee_in']) ? ucwords($profession_info['employee_in']) : "NA"; ?> </td>
					</tr>
					<tr>
						<td class="strongbold widthtd">Company</td><td class="colon_pad">:</td><td><?php echo !empty($profession_info['company']) ? ucwords($profession_info['company']) : "NA"; ?> </td>
					</tr>
					<tr>
						<td class="strongbold widthtd">Occupation</td><td class="colon_pad">:</td><td><?php echo !empty($profession_info['occupation']) ? ucwords($profession_info['occupation']) : "NA"; ?> </td>
					</tr>
					<tr>
						<td class="strongbold widthtd">Annual Income</td><td class="colon_pad">:</td><td><?php echo !empty($profession_info['annual_income']) ? ucwords($profession_info['annual_income']) : "NA"; ?> </td>
					</tr>
					<tr>
						<td class="strongbold widthtd">More Details</td><td class="colon_pad">:</td><td><?php echo !empty($profession_info['about_profession']) ? ucwords($profession_info['about_profession']) : "NA"; ?> </td>
					</tr>
				</table>              
            </div>
            <div class="col-xs-12"> &nbsp;</div>
        </div>
        <div class="view-profile col-xs-12 col-md-12 no-padding">
          <div class="profile-heading">
            <h3 class="lead">Current Details</h3>
          </div>
          <div class="col-xs-12 col-md-12">
            <div class="preson-details" style="padding: 0px;width: 34%;float:left;">
              <p><strong>Country Living In:</strong> <?php echo ucwords($profession_info['country']); ?></p>
            </div>
            <div class="preson-details" style="padding: 0px;width: 33%;float:left;">
              <p><strong>State Living:</strong> <?php echo ucwords($profession_info['state']); ?></p>
            </div>
            <div class="preson-details" style="padding: 0px;width: 33%;float:right;">
              <p><strong>City Living:</strong> <?php echo ucwords($profession_info['city']); ?></p>
            </div>
            <?php if ($profession_info['visatype'] != "") { ?>
              <div class="preson-details" style="padding: 0px;width: 34%;float:left;">
			  <p><strong>Visa Type:</strong><span> <?php echo $profession_info['visatype']; ?></span></p>
			  </div>
			  <?php } ?>
            <?php if ($profession_info['residing-since'] != "0000-00-00") { ?>
              <div class="preson-details" style="padding: 0px;width: 33%;float:left;">
			  <p><strong>Residing Science:</strong><span> <?php echo date("d/m/Y", strtotime($profession_info['residing-since'])); ?></span></p>
			  </div>
			  <?php } ?>
            <?php if ($profession_info['arrival-date'] != "0000-00-00") { ?>
              <div class="preson-details" style="padding: 0px;width: 33%;float:left;">
			  <p><strong>Arrival Date:</strong><span> <?php echo date("d/m/Y", strtotime($profession_info['arrival-date'])); ?></span></p>
			  </div>
			  <?php } ?>
            <?php if ($profession_info['departure-date'] != "0000-00-00") { ?>
              <div class="preson-details" style="padding: 0px;width: 33%;float:left;">
			  <p><strong>Departure Date:</strong><span> <?php echo date("d/m/Y", strtotime($profession_info['departure-date'])); ?></span></p>
			  </div>
			  <?php } ?>
				<div class="clear"></div>
          </div>
          <div class="col-xs-12"> &nbsp;
          </div>
        </div>
        <div class="view-profile col-xs-12 col-md-12 no-padding">
          <div class="profile-heading">
            <h3 class="lead">About My Family</h3>
          </div>
          <div class="preson-details">
            <table class="responsive_table">
				<tr>
					<td class="strongbold widthtd">Father Name </td><td class="colon_pad">:</td>
					<td><?php
						$fatherDetails = ucwords($parents_info['father_name']);
						if (!empty($parents_info['father_education'])) {
							$fatherDetails.= ", " . $parents_info['father_education'];
						}
						if (!empty($parents_info['father_profession'])) {
							$fatherDetails.= ", " . $parents_info['father_profession'];
						}
						echo !empty($fatherDetails) ? $fatherDetails : "NA"; ?>
					</td>
				</tr>
				<tr> <td class="strongbold widthtd">Father Email</td><td class="colon_pad">:</td><td><?php echo $parents_info['father_email']; ?></td></tr>
				<?php if ($parents_info['father_mobile'] != "") { ?>
				 <tr> <td class="strongbold widthtd">Father Mobile</td><td class="colon_pad">:</td><td><?php echo $parents_info['father_mobile']; ?></td></tr>
				 <?php } ?>
				 <?php if ($parents_info['fathers_father_name'] != "") { ?>
				 <tr><td class="strongbold">Father Father Name And Native</td><td class="colon_pad">:</td><td><?php echo ucwords($parents_info['fathers_father_name']); ?> , <?php echo ucwords($parents_info['fathers_father_native_place']); ?>, <?php echo ucwords($parents_info['fathers_father_district']); ?>, <?php echo ucwords($parents_info['fathers_father_state']); ?> </td></tr>
				<?php } ?>
				<tr><td class="strongbold">Show Father Native Place</td><td class="colon_pad">:</td><td><?php echo ($parents_info['father_natplace_d'] == 1) ? "No" : "Yes"; ?></td></tr>
				<tr><td class="strongbold">Father Semi Profession</td><td class="colon_pad">:</td><td><?php echo !empty($parents_info['father_semiprof_det']) ? $parents_info['father_semiprof_det'] : "NA"; ?></td></tr>
				<tr><td class="strongbold">Mother Name</td><td class="colon_pad">:</td>
					<td><?php
						$motherDetails = ucwords($parents_info['mother_name']);
						if (!empty($parents_info['mother_education'])) {
							$motherDetails.= ", " . $parents_info['mother_education'];
						}
						if (!empty($parents_info['mother_profession'])) {
							$motherDetails.= ", " . $parents_info['mother_profession'];
						}
						echo !empty($motherDetails) ? $motherDetails : "NA"; ?>
					</td>
				</tr>
				<?php if ($parents_info['mother_email'] != "") { ?>
				 <tr><td class="strongbold">Mother Email</td><td class="colon_pad">:</td><td><?php echo $parents_info['mother_email']; ?></td></tr>
				 <?php } ?>
				<?php if ($parents_info['mother_mobile'] != "") { ?>
				 <tr><td class="strongbold">Mother Mobile</td><td class="colon_pad">:</td><td><?php echo $parents_info['mother_mobile']; ?></td></tr>
				 <?php } ?>
				 <?php if ($parents_info['mothers_father_name'] != "") { ?>
				 <tr><td class="strongbold">Mother Father Name And Native</td><td class="colon_pad">:</td><td><?php echo ucwords($parents_info['mothers_father_name']); ?>, <?php echo ucwords($parents_info['mothers_father_native_place']); ?>, <?php echo ucwords($parents_info['mothers_father_district']); ?>, <?php echo ucwords($parents_info['mothers_father_state']); ?> </td></tr>
				 <?php } ?>
				 <tr><td class="strongbold">Show Mother Native Place</td><td class="colon_pad">:</td><td><?php echo ($parents_info['mother_natplace_d'] == 1) ? "No" : "Yes"; ?></td></tr>
				 <tr><td class="strongbold">Mother Semi Profession</td><td class="colon_pad">:</td><td><?php echo !empty($parents_info['mother_semiprof_det']) ? $parents_info['mother_semiprof_det'] : "NA"; ?></td></tr>
				<?php if ($siblings_info['no_of_elder_brothers'] != 0) { ?>
				  <tr><td class="strongbold">No. Of Elder Brothers</td><td class="colon_pad">:</td><td> <?php echo $siblings_info['no_of_elder_brothers']; ?></td></tr>
				<?php } ?>
				<?php if ($siblings_info['no_of_younger_brothers'] != 0) { ?>
				   <tr><td class="strongbold">No. Of Younger Brothers</td><td class="colon_pad">:</td><td><?php echo $siblings_info['no_of_younger_brothers']; ?></td></tr>
				<?php } ?>
				<?php if ($siblings_info['no_of_elder_sisters'] != 0) { ?>
				   <tr><td class="strongbold">No. Of Elder Sisters</td><td class="colon_pad">:</td><td> <?php echo $siblings_info['no_of_elder_sisters']; ?></td></tr>
				<?php } ?>
				<?php if ($siblings_info['no_of_younger_sisters'] != 0) { ?>
				 <tr><td class="strongbold">No. Of Younger Sisters</td><td class="colon_pad">:</td><td><?php echo $siblings_info['no_of_younger_sisters']; ?></td></tr>
				<?php } ?>
			</table>
          </div>
          <div class="col-xs-12"> &nbsp;
          </div>
        </div>
        <div class="view-profile col-xs-12 col-md-12 no-padding">
          <div class="profile-heading">
            <h3 class="lead">Property Details</h3>
          </div>
		  <div class="preson-details">
			<table class="responsive_table">
				<tr>
					<td class="strongbold widthtd">Property Type </td><td class="colon_pad">:</td><td><?php echo !empty($Propertyinfo['property_type']) ? ucwords($Propertyinfo['property_type']) : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">Property Value  </td><td class="colon_pad">:</td><td><?php echo !empty($Propertyinfo['property_value']) ? ucwords($Propertyinfo['property_value']) . " Cr" : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">Property Details </td><td class="colon_pad">:</td><td><?php echo !empty($Propertyinfo['property_Desc']) ? ucwords($Propertyinfo['property_Desc']) : "NA"; ?></td>
				</tr>
			</table>
          </div>
          <div class="col-xs-12"> &nbsp;
          </div>
        </div>
        <div class="view-profile col-xs-12 col-md-12 no-padding">

          <div class="col-xs-12 col-md-12 no-padding">
            <div class="profile-heading">
              <h3 class="lead">Contact Details</h3>
            </div>

           <div class="preson-details">
			<table class="responsive_table">
				<tr>
					<td class="strongbold widthtd">Phone Number </td><td class="colon_pad">:</td><td><?php echo !empty($primary_info['mobile']) ? $primary_info['mobile'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">Email Id</td><td class="colon_pad">:</td><td><?php echo !empty($primary_info['email']) ? $primary_info['email'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">House No</td><td class="colon_pad">:</td><td><?php echo !empty($contact_info['house_no']) ? $contact_info['house_no'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">Street</td><td class="colon_pad">:</td><td><?php echo !empty($contact_info['street_name']) ? $contact_info['street_name'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">Area</td><td class="colon_pad">:</td><td><?php echo !empty($contact_info['area_name']) ? $contact_info['area_name'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">Land Mark</td><td class="colon_pad">:</td><td><?php echo !empty($contact_info['land_mark']) ? $contact_info['land_mark'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">City</td><td class="colon_pad">:</td><td><?php echo !empty($contact_info['city']) ? $contact_info['city'] : "NA"; ?></td>
				</tr>
				<tr>
					<td class="strongbold widthtd">District</td><td class="colon_pad">:</td><td><?php echo !empty($contact_info['district']) ? $contact_info['district'] : "NA"; ?></td>
				</tr>								
			</table>
			  </div>
            </div>
          </div>
          <div class="col-xs-12"> &nbsp;
          </div>
        </div>

      </div>
    </div>

  </div>
</div>

<?php
if (isset($images_info) && count($images_info) > 0) {
?>
  <div class="html_popup_box" id="profile_images_popup">
			<div class="preferences_content" style="padding:0; width:600px;top:5%;max-width:600px;">
				<div class="popupCloseButton" onclick="profile_images_popup_close()">&times;</div>
				<h1>Profile Photos</h1>
				<div class="body_content">
					<div class="gallery_container">
						<div class="exzoom hidden" id="exzoom">
							<div class="exzoom_img_box">
								<ul class='exzoom_img_ul'>
								<?php    $i = 0;
									foreach ($images_info as $value) {
										if ($value['fullphotopath'] != '') { ?>
											<li><img src="<?php echo $value['fullphotopath'] ?>" style="width:100%;"/></li>
										<?php }	} ?>
								</ul>
							</div>
							<!--<div class="exzoom_nav"></div>-->
							<p class="exzoom_btn">
								<a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
								<a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
<?php } ?>

</div>

<style type="text/css">
  .new-side-content{
    padding-top:60px;
  }
.clear {clear:both;}
.responsive_table tr td {font-size:14px;}
.responsive_table tr{
	line-height:1.8em;	
}
.strongbold
{
	font-weight:bold;
}
.responsive_table tr td:first-child {
    width: 180px;
}
.responsive_table .colon_pad {
    Padding: 0 10px;
    font-weight: 700;
}
  .view-profile {
    border: solid 1px #ccc;
    margin-bottom: 10px;
    margin-left: 8px;
  }

  .main-container {
    background-color: lightgrey;
    display: flex;
  }

  .profile-heading {
    padding-left: 0px;
  }

  .no-padding {
    padding: 0px !important;
  }

  .profile-heading h3 {
    font-size: 15px;
    padding: 5px;
    background: #00818e;
    margin-top: 0px;
    border-radius: 0px;

  }

  .preson-details {
    padding-left: 10px;
  }

  .log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
  }

  p {
    font-weight: normal !important;
    font-size: 14px;
    line-height: 28px;

  }

  span.clr-blue {
    font-weight: normal;
    font-color: normal;

  }

  .page-header {
    padding-left: 10px;
    padding-top: 4px;
    padding-bottom: 4px;
    margin: 0px 0px 0px 0px !important;
    color: #FFF;
    font-size: 18px;
    background: #00818e;
  }

  .bxslider img {
    margin-bottom: 10px;
    min-height: 250px;
    max-height: 250px;
    padding-top: 0px;
    width: 270px;
  }

  @media (min-width: 768px) .navbar-nav>li {
    float: left;
    width: 100%;
  }
</style>
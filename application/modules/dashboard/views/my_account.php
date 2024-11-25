<link href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.0/css/lightgallery.min.css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
.slick-slide div {
    height: 300px;
    overflow: hidden;
    border-radius: 10px;
}
</style>
<!-- Main Content Start Here -->
<div class="main_content">
    <div class="container">
        <div class="row m-0">
            <div class="tab-nav col-md-12">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation"> <a class="nav-link active" id="pills-home-tab"
                            data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                            aria-selected="true">My Profile</a> </li>
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="pills-profile-tab"
                            data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                            aria-selected="false">Manage Photos</a> </li>
                    <?php if($primary_info["ms_usertype"]=='regular') { ?>
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="pills-contact-tab"
                            data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                            aria-selected="false">Upgrade Membership</a> </li>
                    <?php } ?>
                    <!--	<li class="nav-item" role="presentation"> <a class="nav-link" id="pills-profile-setting-tab" data-toggle="pill" href="#pills-profile-setting" role="tab" aria-controls="pills-profile-setting" aria-selected="false">Profile Settings</a> </li>
						-->
                    <li class="nav-item" role="presentation"> <a class="nav-link" id="pills-payment-tab"
                            data-toggle="pill" href="#pills-payment" role="tab" aria-controls="pills-payment"
                            aria-selected="false">Payment Statistics</a> </li>
                </ul>
            </div>
            <div class="col-md-12 p-0">
                <div class="row mx-n2">
                    <div class="col-md-8 col-lg-8 px-2 tab-content msnfull800" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="dashboard_main_content">
                                <div class="profileHolder">
                                    <div class="row pt-3 pb-4 col-md-12">

                                        <div class="profile_img col-md-3">
                                            <?php if(isset($profile_pic[0]) && $profile_pic[0]['applicationphotopath']!="" && $profile_pic[0]['ismain']==1 && $profile_pic[0]['isactive']) { ?>
                                            <img class="profileImg"
                                                src="<?php echo $profile_pic[0]['applicationphotopath']; ?>"
                                                alt="<?php echo $primary_info["last_name"];?>">
                                            <?php } else{ ?>
                                            <img class="profileImg" src="<?php echo site_url();?>images/noimage.jpg"
                                                alt="<?php echo $primary_info["last_name"];?>">
                                            <?php } ?>
                                        </div>
                                        <div class="my_profile_main col-md-9">
                                            <p><?php echo $primary_info["first_name"]." ".$primary_info["last_name"]; ?>
                                                | <?php echo $primary_info["profile_id"]; ?> </p> <span
                                                class="profile_info">
                                                <p class="mt-2"><?php echo $primary_info["currentAge"]; ?> Age,
                                                    <?php echo $religion_details["height"]; ?>'' Height</p>
                                                <p><?php echo $religion_details["caste"]; ?>,<?php echo $religion_details["religion"]; ?><br />
                                                </p>
                                                <p><?php  if(!empty($profile_info["heighst_education"])){echo $profile_info["heighst_education"];}else{echo 'NA';} ?>
                                                </p>
                                                <p><?php echo $profile_info["city"].", ".$profile_info["state"];?></p>
                                            </span>
                                            <!--<a class="horoscope mr-4">Generate Horoscope</a> <a class="horoscope mr-4">Upload Horoscope <input accept="image/png, image/jpeg,image/jpg,image/gif" class="inputupload_file" id="horoscopeId" type="file" /></a> -->
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="pt-4">
                                        <div class="col-md-12 basicinformation">
                                            <p class="profile_heading pb-4">Basic Information <span class="edit_link"
                                                    data-toggle="modal" data-target="#exampleModalBasic">Edit Basic
                                                    Info</span></p>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">About My Self</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($primary_info["city"]=='') { echo "N/A"; } else { ?>Hi
                                                    there! I am from
                                                    <?php echo $profile_info["city"]."(".$profile_info["country"].")";?>.<?php if(isset($profile_info["heighst_education"])) { echo "I have studied ".$profile_info["heighst_education"]; } } ?>.
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Name</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($primary_info["first_name"]=='') { echo "N/A"; } else { echo $primary_info["first_name"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Marital Status</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["marital_status"]=='') { echo "N/A"; } else { echo $profile_info["marital_status"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Height</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["height"]=='') { echo "N/A"; } else { echo $religion_details["height"].'" ('.$religion_details['height_cm'].'feet)'; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Caste</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["caste"]=='') { echo "N/A"; } else { echo $religion_details["caste"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Religion</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["religion"]=='') { echo "N/A"; } else { echo $religion_details["religion"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother tongue</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["mother_tounge"]=='') { echo "N/A"; } else { echo $religion_details["mother_tounge"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Age</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($primary_info["dob"]=='') { echo "N/A"; } else { echo  $primary_info["dob"]."(".$primary_info["currentAge"].")"; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Time Of Birth</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["time_of_birth"]=='') { echo "N/A"; } else { echo $religion_details["time_of_birth"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Place Of Birth</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["place_of_birth"]=='') { echo "N/A"; } else { echo $religion_details["place_of_birth"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Star</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["star"]=='') { echo "N/A"; } else { echo $religion_details["star"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Padam</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["paadam"]=='') { echo "N/A"; } else { echo $religion_details["paadam"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Raasi</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["raasi"]=='') { echo "N/A"; } else { echo $religion_details["raasi"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Gothram</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($religion_details["gothram"]=='') { echo "N/A"; } else { echo $religion_details["gothram"]; } ?>
                                                </p>
                                            </div>
                                            <!--	<div class="row pb-3">
														<p class="col-md-4 attribute_name">Lagnam:</p>
														<p class="col-md-8 attribute_value edit_link" data-toggle="modal" data-target="#exampleModal1">Add</p>
													</div>  
													<div class="row pb-3">
														<p class="col-md-4 attribute_name">Complexion:</p>
														<p class="col-md-8 attribute_value edit_link" data-toggle="modal" data-target="#exampleModal1">Add</p>
													</div>  -->
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 myprofession">
                                            <p class="profile_heading pb-4">My Profession <span class="edit_link"
                                                    data-toggle="modal" data-target="#exampleModalProfession">Edit
                                                    Profession & Location & Partner Preferences</span></p>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Profession</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["occupation"]=='') { echo "N/A"; } else { echo $profile_info["occupation"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Income</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["annual_income"]=='') { echo "N/A"; } else { echo $profile_info["annual_income"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Company Name</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($profile_info["company_name"]=='') { echo "N/A"; } else { echo $profile_info["company_name"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Professional Details</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["about_profession"]=='') { echo "N/A"; } else { echo $profile_info["about_profession"]; } ?>
                                                </p>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 myeducation">
                                            <!-- <p class="profile_heading pb-4">My Education <span class="edit_link"
                                                    data-toggle="modal" data-target="#exampleModalEducation">Edit
                                                    Education</span></p> -->
                                            <?php if($education_info->kv_ue_highedu || $education_info->kv_ue_pg || $education_info->kv_ue_g || $education_info->kv_ue_ug || $education_info->kv_ue_x){ ?>
                                            <?php if($education_info->kv_ue_highedu){?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    <?php echo getlangkeywords('highestqua');?> </p>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1"><span class="colon">:</span>
                                                    <?php echo $education_info->kv_ue_highedu;?><?php echo ($education_info->kv_ue_highedu_deg) ? ', '.$education_info->kv_ue_highedu_deg : '';?><?php echo ($education_info->kv_ue_highedu_spec) ? ', '.$education_info->kv_ue_highedu_spec : '';?><?php echo ($education_info->kv_ue_highedu_univ) ? ', '.$education_info->kv_ue_highedu_univ : '';?><?php echo ($education_info->kv_ue_highedu_college) ? ', '.$education_info->kv_ue_highedu_college : '';?><?php echo ($education_info->kv_ue_highedu_year) ? ', '.$education_info->kv_ue_highedu_year : '';?>
                                                </p>
                                            </div>
                                            <?php }?>
                                            <?php if($education_info->kv_ue_pg){?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    <?php echo getlangkeywords('postgraduate');?> </p>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1"><span class="colon">:</span>
                                                    <?php echo $education_info->kv_ue_pg;?><?php echo (!empty(trim($education_info->kv_ue_pg_deg))) ? ', '.$education_info->kv_ue_pg_deg : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_spec))) ? ', '.$education_info->kv_ue_pg_spec : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_univ))) ? ', '.$education_info->kv_ue_pg_univ : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_college))) ? ', '.$education_info->kv_ue_pg_college : '';?><?php echo (!empty(trim($education_info->kv_ue_pg_year))) ? ', '.$education_info->kv_ue_pg_year : '';?>
                                                </p>
                                            </div>
                                            <?php } ?>
                                            <?php if($education_info->kv_ue_g){?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    <?php echo getlangkeywords('graduate');?> </td>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1"><span class="colon">:</span>
                                                    <?php echo $education_info->kv_ue_g;?><?php echo (!empty(trim($education_info->kv_ue_g_deg))) ? ', '.$education_info->kv_ue_g_deg : '';?><?php echo (!empty(trim($education_info->kv_ue_g_spec))) ? ', '.$education_info->kv_ue_g_spec : '';?>
                                                    <?php echo (!empty(trim($education_info->kv_ue_g_univ))) ? ', '.$education_info->kv_ue_g_univ : '';?><?php echo (!empty(trim($education_info->kv_ue_g_college))) ? ', '.$education_info->kv_ue_g_college : '';?><?php echo (!empty(trim($education_info->kv_ue_g_year))) ? ', '.$education_info->kv_ue_g_year : '';?>
                                                </p>
                                            </div>
                                            <?php } ?>
                                            <?php if($education_info->kv_ue_ug){?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    <?php echo getlangkeywords('undergraduate');?> </td>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1"><span class="colon">:</span>
                                                    <?php echo $education_info->kv_ue_ug;?><?php echo (!empty(trim($education_info->kv_ue_ug_deg))) ? ', '.$education_info->kv_ue_ug_deg : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_spec))) ? ', '.$education_info->kv_ue_ug_spec : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_univ))) ? ', '.$education_info->kv_ue_ug_univ : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_college))) ? ', '.$education_info->kv_ue_ug_college : '';?><?php echo (!empty(trim($education_info->kv_ue_ug_year))) ? ', '.$education_info->kv_ue_ug_year : '';?>
                                                    </td>
                                            </div>
                                            <?php } ?>
                                            <?php if($education_info->kv_ue_x){  ?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    <?php echo getlangkeywords('school');?> </p>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1"><span class="colon">:</span>
                                                    <?php $xEdu = htmlentities($education_info->kv_ue_x, null, 'utf-8');
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
													echo (!empty($xCollegeFormatted)) ? ', '.$education_info->kv_ue_x_college : '';?><?php echo (!empty(trim($education_info->kv_ue_x_year))) ? ', '.$education_info->kv_ue_x_year : '';?>
                                                </p>
                                            </div>
                                            <?php } ?>
                                            <?php if($profession_info['education_description']){  ?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    More Details</p>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1">
                                                    <?php echo ($profession_info['education_description']) ? ''.nl2br($profession_info['education_description']) : '';?>
                                                </p>
                                            </div>
                                            <?php } ?>
                                            <?php } else {?>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">
                                                    Education Details</p>
                                                <p class="col-md-8 attribute_value" data-toggle="modal"
                                                    data-target="#exampleModal1">No details found.<br></p>
                                            </div>
                                            <?php } ?>
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 locationdetails">
                                            <!-- <p class="profile_heading pb-4">My Location <span class="edit_link"
                                                    data-toggle="modal" data-target="#exampleModalLocation">Edit
                                                    Location</span></p> -->
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Country Living</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["living_in"]=='') { echo "N/A"; } else { echo $profile_info["living_in"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">State Living</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["state"]=='') { echo "N/A"; } else { echo $profile_info["state"]; } ?>
                                                </p>
                                            </div>
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">District Living:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["distrct"]=='') { echo "N/A"; } else { echo $profile_info["district"]; } ?>
                                                </p>
                                            </div> -->
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">City Living</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["city"]=='') { echo "N/A"; } else { echo $profile_info["city"]; } ?>
                                                </p>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4">
                                            <!-- <p class="profile_heading pb-4">My Contact Info <span class="edit_link"
                                                    data-toggle="modal" data-target="#exampleModal">Edit Contact</span>
                                            </p> -->
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name xsw100">Contact</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>+91 -
                                                    <?php if($profile_info["mobile"]=='') { echo "N/A"; } else { echo $profile_info["mobile"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name xsw100">Email</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["email"]=='') { echo "N/A"; } else { echo $profile_info["email"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name xsw100">Address</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["city"]=='') { echo "N/A"; } else { echo $profile_info["city"]; } ?>
                                                </p>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 familydetails">
                                            <p class="profile_heading pb-4">Family Details <span class="edit_link"
                                                    data-toggle="modal" data-target="#exampleModalFamily">Edit
                                                    family</span></p>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father Name</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($profile_info["father_name"]=='') { echo "N/A"; } else { echo ucwords($profile_info["father_name"]); } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father Contact Details</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["father_mobile"]=='') { echo "N/A"; } else { echo $profile_info["father_mobile"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father Email</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["father_email"]=='') { echo "N/A"; } else { echo $profile_info["father_email"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father Education</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["father_education"]=='') { echo "N/A"; } else { echo $profile_info["father_education"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father Profession</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["father_profession"]=='') { echo "N/A"; } else { echo $profile_info["father_profession"]; } ?>
                                                </p>
                                            </div>
                                            <!--	<div class="row pb-3">
														<p class="col-md-4 attribute_name">Father Designation:</p>
														<p class="col-md-8 attribute_value"><?php if($profile_info["father_mobile"]=='') { echo "N/A"; } else { echo $profile_info["father_mobile"]; } ?></p>
													</div>
													<div class="row pb-3">
														<p class="col-md-4 attribute_name">Father Company Name:</p>
														<p class="col-md-8 attribute_value">N/A</p>
													</div>   -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father's Father Name:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["fathers_father_name"]=='') { echo "N/A"; } else { echo $profile_info["fathers_father_name"]; } ?>
                                                </p>
                                            </div> -->
                                            <!--	<div class="row pb-3">
														<p class="col-md-4 attribute_name">Father Job Location:</p>
														<p class="col-md-8 attribute_value"><?php if($profile_info["father_mobile"]=='') { echo "N/A"; } else { echo $profile_info["father_mobile"]; } ?></p>
													</div>   -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father's Father State:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["fathers_father_state"]=='') { echo "N/A"; } else { echo $profile_info["fathers_father_state"]; } ?>
                                                </p>
                                            </div> -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father's Father District:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["fathers_father_district"]=='') { echo "N/A"; } else { echo $profile_info["fathers_father_district"]; } ?>
                                                </p>
                                            </div> -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Father's Father Native Place:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["fathers_father_native_place"]=='') { echo "N/A"; } else { echo $profile_info["fathers_father_native_place"]; } ?>
                                                </p>
                                            </div> -->
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Name</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($profile_info["mother_name"]=='') { echo "N/A"; } else { echo $profile_info["mother_name"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Contact Details</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["mother_mobile"]=='') { echo "N/A"; } else { echo $profile_info["mother_mobile"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Email</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["mother_email"]=='') { echo "N/A"; } else { echo $profile_info["mother_email"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Education</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["mother_education"]=='') { echo "N/A"; } else { echo $profile_info["mother_education"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Profession</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["mother_profession"]=='') { echo "N/A"; } else { echo $profile_info["mother_profession"]; } ?>
                                                </p>
                                            </div>
                                            <!--	<div class="row pb-3">
														<p class="col-md-4 attribute_name">Mother's Designation:</p>
														<p class="col-md-8 attribute_value"><?php if($profile_info["father_mobile"]=='') { echo "N/A"; } else { echo $profile_info["father_mobile"]; } ?></p>
													</div>
													<div class="row pb-3">
														<p class="col-md-4 attribute_name">Mother's Company Name:</p>
														<p class="col-md-8 attribute_value"><?php if($profile_info["father_mobile"]=='') { echo "N/A"; } else { echo $profile_info["father_mobile"]; } ?></p>
													</div>
													<div class="row pb-3">
														<p class="col-md-4 attribute_name">Mother's Job Location:</p>
														<p class="col-md-8 attribute_value"><?php if($profile_info["father_mobile"]=='') { echo "N/A"; } else { echo $profile_info["father_mobile"]; } ?></p>
													</div>  -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Father Name:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["mothers_father_name"]=='') { echo "N/A"; } else { echo $profile_info["mothers_father_name"]; } ?>
                                                </p>
                                            </div> -->
                                            <!--<div class="row pb-3">
														<p class="col-md-4 attribute_name">Mother's Father Surname:</p>
														<p class="col-md-8 attribute_value"><?php //if($profile_info["mothers_father_surname"]=='') { echo "N/A"; } else { echo $profile_info["mothers_father_surname"]; } ?></p>
													</div>-->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Father State:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["mothers_father_state"]=='') { echo "N/A"; } else { echo $profile_info["mothers_father_state"]; } ?>
                                                </p>
                                            </div> -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Father District:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["mothers_father_district"]=='') { echo "N/A"; } else { echo $profile_info["mothers_father_district"]; } ?>
                                                </p>
                                            </div> -->
                                            <!-- <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother's Father Native:</p>
                                                <p class="col-md-8 attribute_value">
                                                    <?php if($profile_info["mothers_father_native_place"]=='') { echo "N/A"; } else { echo $profile_info["mothers_father_native_place"]; } ?>
                                                </p>
                                            </div> -->
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">No of Brothers</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($profile_info["no_of_brothers"]=='') { echo "N/A"; } else { echo $profile_info["no_of_brothers"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">No of Sisters</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["no_of_sisters"]=='') { echo "N/A"; } else { echo $profile_info["no_of_sisters"]; } ?>
                                                </p>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4">
                                            <!--	<p class="profile_heading pb-4">Property Details<span class="edit_link">Edit</span></p> -->
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Property Type</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["Property_type"]=='') { echo "N/A"; } else { echo $profile_info["Property_type"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Property Value</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["property_value"]=='') { 
															echo "N/A"; 
															} else {
																echo $profile_info['property_value']." <span> Cr</span>" ;
																	}
															 ?></p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Property Details</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($profile_info["property_Desc"]=='') { echo "N/A"; } else { echo $profile_info["property_Desc"]; } ?>
                                                </p>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 partnerpreferences">
                                            <p class="profile_heading pb-4">Partner Preferences
                                                <!--<span class="edit_link">Edit</span>-->
                                            </p>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Age Gap</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_age_from"]=='') { echo "N/A"; } else { echo $preference_details["p_age_from"]." to "; } ?>
                                                    <?php if($preference_details["p_age_to"]=='') { echo "N/A"; } else { echo $preference_details["p_age_to"]." Years"; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Height</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_height_from"]=='') { echo "N/A"; } else { echo $preference_details["p_height_from"].'" Feet to '	; } ?>
                                                    <?php if($preference_details["p_height_to"]=='') { echo "N/A"; } else { echo $preference_details["p_height_to"].'" Feet'; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Marital Status</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_marital_status"]=='') { echo "N/A"; } else { echo $preference_details["p_marital_status"]; } ?>
                                                </p>
                                            </div>
                                            <!--		<div class="row pb-3">
														<p class="col-md-4 attribute_name">Open to second marriage:</p>
														<p class="col-md-8 attribute_value edit_link">Add</p>
													</div>  -->
                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 religionpreferences">
                                            <p class="profile_heading pb-4">Religion Preferences
                                                <!--<span class="edit_link">Edit</span>-->
                                            </p>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Mother Tongue</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_mother_tongue"]=='') { echo "N/A"; } else { echo $preference_details["p_mother_tongue"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Religion</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($profile_info["religion"]=='') { echo "N/A"; } else { echo $profile_info["religion"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Caste</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_caste"]=='') { echo "N/A"; } else { echo $preference_details["p_caste"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Star</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($preference_details["p_star"]=='') { echo "N/A"; } else { echo $preference_details["p_star"]; } ?>
                                                </p>
                                            </div>

                                            <hr />
                                        </div>
                                        <div class="col-md-12 pt-4 partnereducation">
                                            <p class="profile_heading pb-4">Partner Education &amp; Career
                                                <!--<span class="edit_link">Edit</span>-->
                                            </p>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Education Category</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_education"]=='') { echo "N/A"; } else { echo $preference_details["p_education"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Employee In Group</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["employee_in"]=='') { echo "N/A"; } else { echo $preference_details["employee_in"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Profession Group</p>
                                                <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                                    <?php if($preference_details["p_profession"]=='') { echo "N/A"; } else { echo $preference_details["p_profession"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Preferred Country</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($preference_details["p_country"]=='') { echo "N/A"; } else { echo $preference_details["p_country"]; } ?>
                                                </p>
                                            </div>
                                            <div class="row pb-3">
                                                <p class="col-md-4 attribute_name">Preferred City</p>
                                                <p class="col-md-8 attribute_value edit_link"><span class="colon">:</span>
                                                    <?php if($preference_details["p_city"]=='') { echo "N/A"; } else { echo $preference_details["p_city"]; } ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 2 Manage Photos Start Here -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="search_section manage_photos">
                                <h2 class="text-center pb-2">Manage Photos</h2>
                                <div class="text-center">
                                    <form method="post"
                                        action="<?php echo site_url();?>register/upload/<?php echo $this->uri->segment(3);?>"
                                        enctype="multipart/form-data">
                                        <div class="col-md-12">
                                            <input type="file" class="form-control upload-input" id="images"
                                                name="images[]" onchange="preview_images();" multiple />
                                        </div>
                                        <div class="col-md-12 ptb-20 ht-140" style="padding:10px;" id="image_preview">
                                        </div>
                                        <input type="submit" class="btn btn-teal min-140 gradient_bg mt-4 mb-2"
                                            name='submit_image' value="Upload Images" />
                                    </form>
                                    <div class="col-md-12">
                                        <!--//image -->
                                        <?php  foreach($getImages as $value){ ?>

                                        <?php if($value['applicationphotopath']!="") { ?>
                                        <img src="<?php echo $value['applicationphotopath']; ?>"
                                            style="width:130px !important;height:150px !important;" class="profileImg"
                                            alt="Image">
                                        <?php } else{ ?>
                                        <img src="<?php echo site_url();?>images/noimage.jpg"
                                            style="width:130px !important;height:150px !important;" class="profileImg"
                                            alt="Image">
                                        <?php } ?>

                                        <?php } ?>
                                        <!--//image -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 2 Manage Photos Ends Here -->
                        <!-- Tab 3 Upgrade Membership Start Here -->
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                                     <div class="search_section">
										<div class="modal-body row">
											<div class="col-md-6 services_card upgrade_membership">
												<div class="row">
													<div class="services_card_top">
														<h2>Diamond Membership</h2> </div>
													<div class="services_card_content pb-3 pl-3 pr-3">
														<p>₹4,999 <span>/ 60 Days</span></p>
														<ul>
															<li>Express interest & View Upto 30 contacts</li>
															<li>Client Should Contact Relation Ship Manager </li>
															<li>Call Support For Any Clarifications</li>
															<li>60 days of validity</li>
														</ul>
														<button class="btn btn-teal min-140 gradient_bg" type="submit">Contact: +91-9177036777</button>
													</div>
												</div>
											</div>
											<div class="col-md-6 services_card upgrade_membership">
												<div class="row">
													<div class="services_card_top">
														<h2>Premium Service</h2> </div>
													<div class="services_card_content pb-3 pl-3 pr-3">
														<p>₹9,999 <span>/ 120 Days</span></p>
														<ul>
															<li>Assisted by separate RM</li>
															<li>Express interest & View Upto 45 contacts</li>
															<li>Call Support For Any Clarifications</li>								
															<li>Feed Back Will Be Updated For With In 10 Days</li>
														</ul>
														<button class="btn gradient_bg btn-teal min-140" type="submit">Contact: +91-9177036777</button>
													</div>
												</div>
											</div>
											<div class="col-md-6 services_card upgrade_membership">
												<div class="row">
													<div class="services_card_top">
														<h2>VIP & FAST TRACK</</h2> </div>
													<div class="services_card_content pb-3 pl-3 pr-3">
														<p>₹19,999 <span>/ 240 Days</span></p>
														<ul>
															<li>Express interest & View Upto 60 contacts</li>
															<li>Our Senior General Manager Will Take Responsibility In Dealing With Both Sides </li>
															<li>Call Support For Any Clarifications</li>
															<li>Feedback Will Be Updated With In Week</li>
															<li>240 days of validity</li>
														</ul>
														<button class="btn gradient_bg btn-teal min-140" type="submit">Contact: +91-9177036777</button>
													</div>
												</div>
											</div>
											<div class="col-md-6 services_card upgrade_membership">
												<div class="row">
													<div class="services_card_top">
														<h2>ELITE Membership</h2> </div>
													<div class="services_card_content pb-3 pl-3 pr-3">
														<p>₹49,999 <span>/ 1 Year</span></p>
														<ul>
															<li>Express interest & View Upto "90 contacts"</li>
															<li>Our Senior General Manager Will Take Responsibility In Dealing With Both Sides </li>
															<li>Call Support For Any Clarifications</li>
															<li>No Registration Required</li>
															<li>Feedback Will Be Updated Twice a Week</li>
														</ul>
														<button class="btn gradient_bg btn-teal min-140" type="submit">Contact: +91-9177036777</button>
													</div>
												</div>
											</div>
										</div>
									</div> -->
                        </div>
                        <!-- Tab 3 Upgrade Membership Ends Here -->
                        <!-- Tab 3 Upgrade Membership Start Here -->
                        <!-- Tab 4 Profile Setting Start Here -->
                        <!--	<div class="tab-pane fade" id="pills-profile-setting" role="tabpanel" aria-labelledby="pills-profile-setting-tab">
									<div class="search_section pt-3">
										<div class="tab-nav col-md-12">
											<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
												<li class="nav-item" role="presentation"> <a class="nav-link active" id="pills-edit-password" data-toggle="pill" href="#pills-password" role="tab" aria-controls="pills-password" aria-selected="true">Edit Password</a> </li>
												<li class="nav-item" role="presentation"> <a class="nav-link" id="pills-primary-contact" data-toggle="pill" href="#pills-primary" role="tab" aria-controls="pills-primary" aria-selected="false">Edit Primary Contact</a> </li>
												<li class="nav-item" role="presentation"> <a class="nav-link" id="pills-delete-profile" data-toggle="pill" href="#pills-delete" role="tab" aria-controls="pills-delete" aria-selected="false">Delete Profile</a> </li>
											</ul>
										</div>
										<div class="tab-content" id="pills-tabContent1">
											<div class="tab-pane fade show active" id="pills-password" role="tabpanel" aria-labelledby="pills-password-tab">
												<form class="col-md-10 edit_password_content pb-3 pt-2">
													<div class="row mb-3">
														<div class="col-md-6">
															<label class="col-md-12 text-right" for="">Mobile Number:</label>
														</div>
														<div class="col-md-6">
															<input class="form_control" name="mobile" placeholder=<?php if($profile_info["mobile"]!=''){ echo $profile_info["mobile"]; } else { echo "Enter Your Mobile Number"; } ?> type="number" readonly />
														</div>
													</div>
													<div class="row mb-3">
														<div class="col-md-6">
															<label class="col-md-12 text-right" for="">Enter New Password:</label>
														</div>
														<div class="col-md-6">
															<input class="form_control" min="6" minlength="6" name="new_password" placeholder="Enter new password" type="password" /> <span class="input-group-addon"><i class="fa fa-eye-slash" aria-hidden="true"></i></span> </div>
													</div>
													<div class="row">
														<div class="col-md-6">
															<label class="col-md-12 text-right" for="">Re enter New Password:</label>
														</div>
														<div class="col-md-6">
															<input class="form_control" min="6" minlength="6" name="confirm_password" placeholder="Re Enter password" type="password" /> <span class="input-group-addon"><i class="fa fa-eye-slash" aria-hidden="true"></i></span> </div>
													</div>
													<button class="btn btn-black m-2 btn-grad-orange edit_submit" id="password_update" type="submit">Update</button>
												</form>
											</div>
											<div class="tab-pane fade" id="pills-primary" role="tabpanel" aria-labelledby="pills-primary-tab">
												<div class="row pt-3 pb-3">
													<div class=" col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 text-center">
														<div class="contactEditSection">
															<p class="px-3 pb-3" offset="0"> To Edit your primary EmailId, please enter your new email id and click <strong>"Send OTP"</strong> and verify your Email address .</p>
															<form class="text-center pt-2 text-left ka-editForm">
																<div>
																	<input class="form_control" placeholder="Enter new email address" type="email"> </div>
																<button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
															</form>
														</div>
													</div>
													<div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 col-xl-6 text-center">
														<div class="contactEditSection">
															<p class="px-3 pb-3"> To Edit your primary mobile no, please enter your new mobile no and click <strong>"Send OTP"</strong> and verify your Mobile Number.</p>
															<div class="row pt-2">
																<select class="form_control col-4" style="border-radius: 6px 0 0 6px !important;">
																	<option value="1"> India(91) </option>
																	<option value="2"> USA(001) </option>
																	<option value="3"> UK(0044) </option>
																	<option value="4"> Canada(001) </option>
																	<option value="5"> Australia(0061) </option>
																	<option value="6"> Singapore(0065) </option>
																	<option value="7"> Saudi Arabia(0966) </option>
																	<option value="8"> South Africa(0027) </option>
																	<option value="9"> Kuwait(965) </option>
																	<option value="10"> Pakistan(92) </option>
																	<option value="11"> Afghanistan(93) </option>
																	<option value="12"> Albania(355) </option>
																	<option value="13"> Algeria(213) </option>
																	<option value="17"> Anguiila(126) </option>
																	<option value="18"> Antarctica(672) </option>
																	<option value="21"> Armenia(374) </option>
																	<option value="22"> Aruba(297) </option>
																	<option value="23"> Austria(43) </option>
																	<option value="24"> Azerbaijan(994) </option>
																	<option value="26"> Bahrain(973) </option>
																	<option value="27"> Bangladesh(880) </option>
																	<option value="30"> Belgium(32) </option>
																	<option value="37"> Botswana(267) </option>
																	<option value="39"> Brazil(55) </option>
																	<option value="40"> British Indian Ocean Territory(0) </option>
																	<option value="42"> Brunei(673) </option>
																	<option value="53"> China(86) </option>
																	<option value="58"> Congo(0) </option>
																	<option value="64"> Czech Republic(420) </option>
																	<option value="65"> Denmark(45) </option>
																	<option value="71"> Egypt(20) </option>
																	<option value="74"> Eritrea(291) </option>
																	<option value="76"> Ethiopia(251) </option>
																	<option value="80"> Finland(358) </option>
																	<option value="81"> France(33) </option>
																	<option value="88"> Germany(0049) </option>
																	<option value="89"> Ghana(233) </option>
																	<option value="93"> Grenada(147) </option>
																	<option value="103"> Hong Kong(852) </option>
																	<option value="104"> Hungary(36) </option>
																	<option value="105"> Iceland(354) </option>
																	<option value="106"> Indonesia(62) </option>
																	<option value="108"> Iraq(964) </option>
																	<option value="109"> Ireland(353) </option>
																	<option value="110"> Israel(972) </option>
																	<option value="111"> Italy(39) </option>
																	<option value="112"> Ivory Coast(225) </option>
																	<option value="113"> Jamaica(187) </option>
																	<option value="114"> Japan(81) </option>
																	<option value="115"> Jordan(962) </option>
																	<option value="116"> Kazakstan(7) </option>
																	<option value="117"> Kenya(254) </option>
																	<option value="119"> South Korea(82) </option>
																	<option value="120"> North Korea(0) </option>
																	<option value="124"> Lebanon(961) </option>
																	<option value="126"> Liberia(231) </option>
																	<option value="130"> Luxembourg(352) </option>
																	<option value="135"> Malaysia(60) </option>
																	<option value="136"> Maldives(960) </option>
																	<option value="137"> Mali(223) </option>
																	<option value="140"> Martinique(0) </option>
																	<option value="142"> Mauritius(230) </option>
																	<option value="144"> Mexico(52) </option>
																	<option value="155"> Nepal(977) </option>
																	<option value="156"> Netherlands(31) </option>
																	<option value="159"> New Zealand(64) </option>
																	<option value="162"> Nigeria(234) </option>
																	<option value="166"> Norway(47) </option>
																	<option value="167"> Oman(968) </option>
																	<option value="173"> Philippines(63) </option>
																	<option value="174"> Poland(48) </option>
																	<option value="176"> Puerto Rico(1) </option>
																	<option value="177"> Qatar(974) </option>
																	<option value="180"> Russia(7) </option>
																	<option value="189"> Senegal(221) </option>
																	<option value="195"> Spain(34) </option>
																	<option value="199"> Sudan(249) </option>
																	<option value="202"> Swaziland(268) </option>
																	<option value="203"> Sweden(46) </option>
																	<option value="204"> Switzerland (0041) </option>
																	<option value="206"> Taiwan(886) </option>
																	<option value="208"> Tanzania(255) </option>
																	<option value="209"> Thailand(66) </option>
																	<option value="215"> Turkey(90) </option>
																	<option value="219"> Uganda(256) </option>
																	<option value="220"> Ukraine(0) </option>
																	<option value="221"> United Arab Emirates(971) </option>
																	<option value="227"> Vietnam(84) </option>
																	<option value="234"> Zambia(260) </option>
																	<option value="237"> Not Given(00) </option>
																	<option value="238"> Other(00) </option>
																	<option value="239"> Srilanka(94) </option>
																	<option value="240"> West Indies(264) </option>
																	<option value="241"> Europe(0028) </option>
																	<option value="243"> WEST AFRICA(221) </option>
																	<option value="246"> Cambodia(855) </option>
																	<option value="247"> Seychelles(248) </option>
																</select>
																<input class="form_control col-8" placeholder="Enter mobile number" type="number" style="border-radius:0 6px 6px 0 !important;"> </div>
															<button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="pills-delete" role="tabpanel" aria-labelledby="pills-delete-tab">
												<div class="col-md-12 pt-1 pb-3 edit_password_content">
													<textarea class="form_control text_control col-md-12 p-2" name="message" cols="10" rows="10" placeholder="Please enter you reason"></textarea>
													<button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								-->
                        <!-- Tab 5  Payment Statitics Start Here -->
                        <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                            aria-labelledby="pills-payment-tab">
                            <div class="search_section col-md-12 pt-3 pb-2">
                                <h2 class="mb-4">Payment Statistics</h2>
                                <div class="row pb-3 xsnowrap">
                                    <p class="col-md-4 attribute_name">Membership Type</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php echo ucfirst($primary_info["ms_usertype"]); ?></p> <a
                                        class="payment_upgrade btn btn-teal btn_gradiant" data-toggle="modal"
                                        data-target="#exampleModal">Upgrade Membership</a>
                                </div>
                                <div class="row pb-3">
                                    <p class="col-md-4 attribute_name">Profile Created Date</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php echo date("d-M-Y", strtotime($payment_statistics["registered_on"])); ?>
                                    </p>
                                </div>
                                <div class="row pb-3">
                                    <p class="col-md-4 attribute_name">Number of Login Counts</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php echo $payment_statistics["login_count"]; ?></p>
                                </div>
                                <div class="row pb-3">
                                    <p class="col-md-4 attribute_name">Last Login Date</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php echo date("d-M-Y H:i:s", strtotime($payment_statistics["login_date_time"])); ?>
                                    </p>
                                </div>
                                <div class="row pb-3">
                                    <p class="col-md-4 attribute_name">Expiry Date</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php if($payment_details[0]["expiry_date"]){ echo date("d-M-Y", strtotime($payment_details[0]["expiry_date"]));} ?>
                                    </p>
                                </div>
                                <div class="row pb-3" style="display:none;">
                                    <p class="col-md-4 attribute_name">Express Interest Limit:</p>
                                    <p class="col-md-8 attribute_value">75</p>
                                </div>
                                <div class="row pb-3" style="display:none;">
                                    <p class="col-md-4 attribute_name">Remaining Express Interest Limit</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php echo 75-count($payment_statistics["intrest"]); ?></p>
                                </div>
                                <div class="row pb-3">
                                    <p class="col-md-4 attribute_name">Payment Date</p>
                                    <p class="col-md-8 attribute_value"><span class="colon">:</span>
                                        <?php if($payment_statistics["paid_date"]!=''){ echo date("d-M-Y", strtotime($payment_statistics["paid_date"])); }else{echo "Not Paid";}?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Tab 5 Payment Statitics Start Here -->
                    </div>
                    <div class="col-md-4 col-lg-4 px-2 msnfull800">
                        <div class="search_section">
                            <div class="text-center">
                                <p>Why are you waiting, Start searching
                                    <br> your life partner
                                </p> <a class="btn btn-teal btn_gradiant"
                                    href="<?php echo site_url();?>/dashboard/search_partner" tabindex="0">Search Now</a>
                            </div>
                        </div>
                        <?php $this->load->view('viewed-profile',$data);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content Ends Here -->
<!-- Edit Popup Start Here -->

<div class="modal fade" id="exampleModalBasic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog basicinfo" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Basic Information</h5>
                <button type="button" class="close basicinfobtn feedclbtn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo site_url()?>/dashboard/My_account/basic_info_update" method="post">
                <div class="modal-body" style="max-height:60vh;overflow-y:auto;" >
                    <div class="row pb-3">

                        <!-- <div class="row pb-3">
                        <label class="col-md-4">About My Self:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="myself"
                                value="<?php if($primary_info["city"]=='') { echo "N/A"; } else { ?>Hi there! I
                            am from
                            <?php echo $profile_info["city"]."(".$profile_info["country"].")";?>.<?php if(isset($profile_info["heighst_education"])) { echo "I have studied ".$profile_info["heighst_education"]; } } ?>" />
                        </div>
                    </div> -->
                    </div>
                    <div class="row pb-3">
                        <label class="col-md-4">Name:</label>
                        <div class="col-md-4">
                            <input name="user_id" hidden value="<?php  echo ($primary_info['pid']) ?>" />
                            <input class="form-control" name="name" type="text" readonly
                                value="<?php echo ($primary_info["first_name"] == '') ? 'N/A' : $primary_info["first_name"]; ?>" />
                        </div>
                    </div>
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Marital Status:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="status" readonly
                                value="<?php echo ($profile_info["marital_status"] == '') ? 'N/A' : $profile_info["marital_status"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Height:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="height" readonly
                                value="<?php echo ($religion_details["height"] == '') ? 'N/A' : $religion_details["height"] . ' (' . $religion_details['height_cm'] . 'cms)'; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Caste:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="caste" readonly
                                value="<?php echo ($religion_details["caste"] == '') ? 'N/A' : $religion_details["caste"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Religion:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="religion" readonly
                                value="<?php echo ($religion_details["religion"] == '') ? 'N/A' : $religion_details["religion"]; ?>" />
                        </div>
                    </div>
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother tongue:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="mtongue" readonly
                                value="<?php echo ($religion_details["mother_tounge"] == '') ? 'N/A' : $religion_details["mother_tounge"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Age:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="age" type="date" readonly
                                value="<?php if($primary_info["dob"]=='') { echo "N/A"; } else { echo  $primary_info["dob"]."(".$primary_info["currentAge"].")"; } ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Time Of Birth:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="btime" type="time" readonly
                                value="<?php echo ($religion_details["time_of_birth"] == '') ? 'N/A' : $religion_details["time_of_birth"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Place Of Birth:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="pbirth" type="text" readonly
                                value="<?php echo ($religion_details["place_of_birth"] == '') ? 'N/A' : $religion_details["place_of_birth"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Star:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="star" type="text" readonly
                                value="<?php echo ($religion_details["star"] == '') ? 'N/A' : $religion_details["star"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Padam:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="padam" type="text" readonly
                                value="<?php echo ($religion_details["paadam"] == '') ? 'N/A' : $religion_details["paadam"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Raasi:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="raasi" type="text" readonly
                                value="<?php echo ($religion_details["raasi"] == '') ? 'N/A' : $religion_details["raasi"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Gothram:</label>
                        <div class="col-md-4">
                            <input class="form-control" name="gothram" type="text" readonly
                                value="<?php echo ($religion_details["gothram"] == '') ? 'N/A' : $religion_details["gothram"]; ?>" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>

    </div>
</div>

<div class="modal fade" id="exampleModalProfession" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo site_url()?>/dashboard/My_account/profession_info_update" method="post">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Profession Details</h5>
                    <button type="button" class="close feedclbtn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height:60vh;overflow-y:auto;" >
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Profession:</label>
                        <div class="col-md-8">
                            <input name="user_id" hidden value="<?php  echo ($primary_info['pid']) ?>" />
                            <input class="form-control" name="occupation"
                                value="<?php echo ($profile_info["occupation"] == '') ? 'N/A' : $profile_info["occupation"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Income:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="annual_income"
                                value="<?php echo ($profile_info["annual_income"] == '') ? 'N/A' : $profile_info["annual_income"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Company Name:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="company_name"
                                value="<?php echo ($profile_info["company_name"] == '') ? 'N/A' : $profile_info["company_name"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Professional Details:</label>
                        <div class="col-md-8">
                            <textarea class="form-control" name="about_profession" rows="4">
                <?php echo ($profile_info["about_profession"] == '') ? 'N/A' : $profile_info["about_profession"]; ?>
            </textarea>
                        </div>
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel">Location Details</h5>
                    <!-- A styled horizontal line -->
                    <hr
                        style="color: #333; background-color: #333; height: 2px; margin-top: 20px; margin-bottom: 20px;">

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Country Living:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="living_in"
                                value="<?php echo ($profile_info["living_in"] == '') ? 'N/A' : $profile_info["living_in"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">State Living:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="state"
                                value="<?php echo ($profile_info["state"] == '') ? 'N/A' : $profile_info["state"]; ?>" />
                        </div>
                    </div>

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">District Living:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="district"
                                value="<?php echo ($profile_info["district"] == '') ? 'N/A' : $profile_info["district"]; ?>" />
                        </div>
                    </div> -->

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">City Living:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="city"
                                value="<?php echo ($profile_info["city"] == '') ? 'N/A' : $profile_info["city"]; ?>" />
                        </div>
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel">Parter Preferences</h5>
                    <hr
                        style="color: #333; background-color: #333; height: 2px; margin-top: 20px; margin-bottom: 20px;">
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Age:</label>
                        <div class="col-md-4">
                            From:<input class="form-control" name="p_age_from" type="number"
                                value="<?php echo ($preference_details["p_age_from"] == '') ? 'N/A' : $preference_details["p_age_from"]; ?>" />
                        </div>
                        <div class="col-md-4">
                            To:<input class="form-control" name="p_age_to" type="number"
                                value="<?php echo ($preference_details["p_age_to"] == '') ? 'N/A' : $preference_details["p_age_to"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Height:</label>
                        <div class="col-md-4">
                            From:<input class="form-control" step="any" name="p_height_from" type="number"
                                value="<?php echo ($preference_details["p_height_from"] == '') ? 'N/A' : $preference_details["p_height_from"]; ?>" />
                        </div>
                        <div class="col-md-4">
                            To:<input class="form-control" step="any" name="p_height_to" type="number"
                                value="<?php echo ($preference_details["p_height_to"] == '') ? 'N/A' : $preference_details["p_height_to"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Marital Status:</label>
                        <div class="col-md-8">
                            
                                <select class="form-control" name="p_marital_status">
                                    <option value="never_married"
                                        <?php echo ($preference_details["p_marital_status"] == 'never_married') ? 'selected' : ''; ?>>
                                        Never Married</option>
                                    <option value="married"
                                        <?php echo ($preference_details["p_marital_status"] == 'married') ? 'selected' : ''; ?>>
                                        Married</option>
                                    <option value="divorced"
                                        <?php echo ($preference_details["p_marital_status"] == 'divorced') ? 'selected' : ''; ?>>
                                        Divorced</option>
                                    <option value="Widowed"
                                        <?php echo ($preference_details["p_marital_status"] == 'Widowed') ? 'selected' : ''; ?>>
                                        Widowed</option>
                                    <option value="Awaiting_Divorce"
                                        <?php echo ($preference_details["p_marital_status"] == 'Awaiting_Divorce') ? 'selected' : ''; ?>>
                                    Awaiting Divorce</option>
                                </select>

                        </div>
                    </div>

                    <h5 class="modal-title" id="exampleModalLabel">Religion Preferences</h5>
                    <hr
                        style="color: #333; background-color: #331; height: 2px; margin-top: 20px; margin-bottom: 20px;">

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother Tongue:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_mother_tongue" type="text"
                                value="<?php echo ($preference_details["p_mother_tongue"] == '') ? 'N/A' : $preference_details["p_mother_tongue"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Religion:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_religion" type="text"
                                value="<?php echo ($profile_info["religion"] == '') ? 'N/A' : $profile_info["religion"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Caste:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_caste" type="text"
                                value="<?php echo ($preference_details["caste"] == '') ? 'N/A' : $preference_details["caste"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Star:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_star" type="text"
                                value="<?php echo ($preference_details["p_star"] == '') ? 'N/A' : $preference_details["p_star"]; ?>" />
                        </div>
                    </div>

                    <h5 class="modal-title" id="exampleModalLabel">Parter Education and career</h5>
                    <hr
                        style="color: #333; background-color: #333; height: 2px; margin-top: 20px; margin-bottom: 20px;">
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Education Category:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_education" type="text"
                                value="<?php echo ($preference_details["p_education"] == '') ? 'N/A' : $preference_details["p_education"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Employee In Group:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="employee_in" type="text"
                                value="<?php echo ($preference_details["employee_in"] == '') ? 'N/A' : $preference_details["employee_in"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Profession Group:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_profession" type="text"
                                value="<?php echo ($preference_details["p_profession"] == '') ? 'N/A' : $preference_details["p_profession"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Preferred Country:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_country" type="text"
                                value="<?php echo ($preference_details["p_country"] == '') ? 'N/A' : $preference_details["p_country"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Preferred City:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="p_city" type="text"
                                value="<?php echo ($preference_details["p_city"] == '') ? 'N/A' : $preference_details["p_city"]; ?>" />
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
        </div>
        </form>
    </div>
</div>

<div class="modal fade" id="exampleModalEducation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form>
        <div class="modal-dialog popup_main">
            <div class="modal-content popup_main_in">
                <div class="modal-header popup_header">
                    <h2 class="modal-title" id="exampleModalLabel">Basic Information</h2>
                    <button type="button" class="close close_btn feedclbtn" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-12 pt-1 pb-3 edit_password_content">
                        <p class="pb-3 text-center">Enter the details to be added / modified, which will be reviewed and
                            updated shortly.</p>
                        <textarea class="form_control text_control col-md-12 p-2" name="message" cols="10" rows="10"
                            placeholder="Please enter the text here"></textarea>
                        <button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="exampleModalLocation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form>
        <div class="modal-dialog popup_main">
            <div class="modal-content popup_main_in">
                <div class="modal-header popup_header">
                    <h2 class="modal-title" id="exampleModalLabel">Basic Information</h2>
                    <button type="button" class="close close_btn feedclbtn" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-12 pt-1 pb-3 edit_password_content">
                        <p class="pb-3 text-center">Enter the details to be added / modified, which will be reviewed and
                            updated shortly.</p>
                        <textarea class="form_control text_control col-md-12 p-2" name="message" cols="10" rows="10"
                            placeholder="Please enter the text here"></textarea>
                        <button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="exampleModalContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form>
        <div class="modal-dialog popup_main">
            <div class="modal-content popup_main_in">
                <div class="modal-header popup_header">
                    <h2 class="modal-title" id="exampleModalLabel">Basic Information</h2>
                    <button type="button" class="close close_btn feedclbtn" data-dismiss="modal" aria-label="Close"> <span
                            aria-hidden="true">&times;</span> </button>
                </div>
                <div class="modal-body row">
                    <div class="col-md-12 pt-1 pb-3 edit_password_content">
                        <p class="pb-3 text-center">Enter the details to be added / modified, which will be reviewed and
                            updated shortly.</p>
                        <textarea class="form_control text_control col-md-12 p-2" name="message" cols="10" rows="10"
                            placeholder="Please enter the text here"></textarea>
                        <button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="modal fade" id="exampleModalFamily" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form action="<?php echo site_url()?>/dashboard/My_account/family_info_update" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Edit Your Family Details</h5>
                    <button type="button" class="close feedclbtn" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="max-height:60vh;overflow-y:auto;">
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father Name:</label>
                        <div class="col-md-8">
                            <input name="user_id" hidden value="<?php  echo ($primary_info['pid']) ?>" />
                            <input class="form-control" name="father_name" type="text"
                                value="<?php echo ($profile_info["father_name"] == '') ? 'N/A' : $profile_info["father_name"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father Contact Details:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="father_mobile" type="number" pattern="\d{10}"
                                value="<?php echo ($profile_info["father_mobile"] == '') ? 'N/A' : $profile_info["father_mobile"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father Email:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="father_email" type="email"
                                value="<?php echo ($profile_info["father_email"] == '') ? '' : $profile_info["father_email"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father Education:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="father_education" type="text"
                                value="<?php echo ($profile_info["father_education"] == '') ? 'N/A' : $profile_info["father_education"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father Profession:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="father_profession" type="text"
                                value="<?php echo ($profile_info["father_profession"] == '') ? 'N/A' : $profile_info["father_profession"]; ?>" />
                        </div>
                    </div>

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father's Father Name:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="fathers_father_name" type="text"
                                value="<?php echo ($profile_info["fathers_father_name"] == '') ? 'N/A' : $profile_info["fathers_father_name"]; ?>" />
                        </div>
                    </div> -->

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father's Father State:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="fathers_father_state" type="text"
                                value="<?php echo ($profile_info["fathers_father_state"] == '') ? 'N/A' : $profile_info["fathers_father_state"]; ?>" />
                        </div>
                    </div> -->

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father's Father District:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="fathers_father_district" type="text"
                                value="<?php echo ($profile_info["fathers_father_district"] == '') ? 'N/A' : $profile_info["fathers_father_district"]; ?>" />
                        </div>
                    </div> -->

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Father's Father Native Place:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="fathers_father_native_place" type="text"
                                value="<?php echo ($profile_info["fathers_father_native_place"] == '') ? 'N/A' : $profile_info["fathers_father_native_place"]; ?>" />
                        </div>
                    </div> -->

                    <!-- Mother Details -->
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Name:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mother_name" type="text"
                                value="<?php echo ($profile_info["mother_name"] == '') ? 'N/A' : $profile_info["mother_name"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Contact Details:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mother_mobile" type="number"
                                value="<?php echo ($profile_info["mother_mobile"] == '') ? 'N/A' : $profile_info["mother_mobile"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Email:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mother_email" type="email"
                                value="<?php echo ($profile_info["mother_email"] == '') ? '' : $profile_info["mother_email"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Education:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mother_education" type="text"
                                value="<?php echo ($profile_info["mother_education"] == '') ? 'N/A' : $profile_info["mother_education"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Profession:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mother_profession" type="text"
                                value="<?php echo ($profile_info["mother_profession"] == '') ? 'N/A' : $profile_info["mother_profession"]; ?>" />
                        </div>
                    </div>

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Father Name:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mothers_father_name" type="text"
                                value="<?php echo ($profile_info["mothers_father_name"] == '') ? 'N/A' : $profile_info["mothers_father_name"]; ?>" />
                        </div>
                    </div> -->


                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Father State:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mothers_father_state" type="text"
                                value="<?php echo ($profile_info["mothers_father_state"] == '') ? 'N/A' : $profile_info["mothers_father_state"]; ?>" />
                        </div>
                    </div> -->

                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Father District:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mothers_father_district" type="text"
                                value="<?php echo ($profile_info["mothers_father_district"] == '') ? 'N/A' : $profile_info["mothers_father_district"]; ?>" />
                        </div>
                    </div> -->
                    <!-- 
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Mother's Father Native:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="mothers_father_native_place" type="text"
                                value="<?php echo ($profile_info["mothers_father_native_place"] == '') ? 'N/A' : $profile_info["mothers_father_native_place"]; ?>" />
                        </div>
                    </div> -->

                    <!-- Family Details -->
                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">No of Brothers:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="no_of_brothers" type="number"
                                value="<?php echo ($profile_info["no_of_brothers"] == '') ? 'N/A' : $profile_info["no_of_brothers"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">No of Sisters:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="no_of_sisters" type="number"
                                value="<?php echo ($profile_info["no_of_sisters"] == '') ? 'N/A' : $profile_info["no_of_sisters"]; ?>" />
                        </div>
                    </div>


                    <!-- <div class="row pb-3">
                        <label class="col-md-4 attribute_name">No of Sisters:</label>
                        <div class="col-md-8">
                            <input class="form-control" name="no_of_sisters" type="text"
                                value="<?php echo ($profile_info["no_of_sisters"] == '') ? 'N/A' : $profile_info["no_of_sisters"]; ?>" />
                        </div>
                    </div> -->

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Property Type:</label>
                        <div class="col-md-8 ">
                            <input class="form-control" name="property_type" type="text"
                                value="<?php echo ($profile_info["Property_type"] == '') ? 'N/A' : $profile_info["Property_type"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Property Value:</label>
                        <div class="col-md-8 ">
                            <input class="form-control" name="property_value" type="text"
                                value="<?php echo ($profile_info["property_value"] == '') ? 'N/A' : $profile_info["property_value"]; ?>" />
                        </div>
                    </div>

                    <div class="row pb-3">
                        <label class="col-md-4 attribute_name">Property Details:</label>
                        <div class="col-md-8 ">
                            <input class="form-control" name="property_desc" type="text"
                                value="<?php echo ($profile_info["property_Desc"] == '') ? 'N/A' : $profile_info["property_Desc"]; ?>" />
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Edit Popup Ends Here -->
<!-- Edit Popup One Start Here -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog popup_main">
        <div class="modal-content popup_main_in">
            <button type="button" class="close close_btn close_btn1 text-right feedclbtn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span> </button>
            <div class="modal-body row">
                <div class="col-md-12 pt-1 pb-3 edit_password_content">
                    <form class="row row-10">
                        <div class="col-12">
                            <div class="row row-10">
                                <div class="col flex-1 form-group">
                                    <label class="form-label">Country</label>
                                    <select class="form-control grey-bg selectpicker" title="Select"
                                        data-live-search="true">
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                    </select>
                                </div>
                                <div class="col flex-1 form-group">
                                    <label class="form-label">State</label>
                                    <select class="form-control grey-bg selectpicker" title="Select"
                                        data-live-search="true">
                                        <option>Telangana</option>
                                        <option>Andra Pradesh</option>
                                        <option>Tamilnadu</option>
                                    </select>
                                </div>
                                <div class="col flex-1 form-group">
                                    <label class="form-label">City</label>
                                    <select class="form-control grey-bg selectpicker" title="Select"
                                        data-live-search="true">
                                        <option>Hyderabad</option>
                                        <option>Amaravathi</option>
                                        <option>Tirvendram</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row row-10">
                                <div class="col flex-1 form-group">
                                    <label class="form-label">Country</label>
                                    <select class="form-control grey-bg selectpicker" title="Select"
                                        data-live-search="true">
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                    </select>
                                </div>
                                <div class="col flex-1 form-group">
                                    <label class="form-label">State</label>
                                    <select class="form-control grey-bg selectpicker" title="Select"
                                        data-live-search="true">
                                        <option>Telangana</option>
                                        <option>Andra Pradesh</option>
                                        <option>Tamilnadu</option>
                                    </select>
                                </div>
                                <div class="col flex-1 form-group">
                                    <label class="form-label">City</label>
                                    <select class="form-control grey-bg selectpicker" title="Select"
                                        data-live-search="true">
                                        <option>Hyderabad</option>
                                        <option>Amaravathi</option>
                                        <option>Tirvendram</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                    <button class="btn btn-black m-2 btn-grad-orange edit_submit" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Edit Popup One Ends Here -->

<script>
function preview_images() {
    var total_file = document.getElementById("images").files.length;
    for (var i = 0; i < total_file; i++) {
        $('#image_preview').append("<div class='col-md-1'><img class='img-responsive ht-140 mb-20' src='" + URL
            .createObjectURL(event.target.files[i]) + "'></div>");
    }
}
</script>
<script>
$('#add_more').click(function() {
    "use strict";
    $(this).before($("<div/>", {
        id: 'filediv'
    }).fadeIn('slow').append(
        $("<input/>", {
            name: 'file[]',
            type: 'file',
            id: 'file',
            multiple: 'multiple',
            accept: 'image/*'
        })
    ));
});

$('#upload').click(function(e) {
    "use strict";
    e.preventDefault();

    if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
        alert("No files are selected.");
        return false;
    }

});

deletePreview = function(ele, i) {
    "use strict";
    try {
        $(ele).parent().remove();
        window.filesToUpload.splice(i, 1);
    } catch (e) {
        console.log(e.message);
    }
}

$("#file").on('change', function() {
    "use strict";

    // create an empty array for the files to reside.
    window.filesToUpload = [];

    if (this.files.length >= 1) {
        $("[id^=previewImg]").remove();
        $.each(this.files, function(i, img) {
            var reader = new FileReader(),
                newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>")
                .prependTo(newElement),
                preview = newElement.find("img");

            reader.onloadend = function() {
                preview.attr("src", reader.result);
                preview.attr("alt", img.name);
            };

            try {
                window.filesToUpload.push(document.getElementById("file").files[i]);
            } catch (e) {
                console.log(e.message);
            }

            if (img) {
                reader.readAsDataURL(img);
            } else {
                preview.src = "";
            }

            newElement.appendTo("#filediv");
        });
    }
});
</script>
<script>
$(document).ready(function() {

    $("input").focusout(function() {

        var nameC = $(this).attr("data-Nclass");

        if ($(this).val().length > 0)
            $(nameC).addClass("stayPlaceInput");
        else
            $(nameC).removeClass("stayPlaceInput");
    });

});
</script>
<style>
    p.attribute_value, .familydetails .attribute_value {
        position: relative;
    }
    p.attribute_value>span.colon, .familydetails .attribute_value>span.colon {
        position: absolute;
        left: 0px;
        top: 0px;
    }
    button.close.basicinfobtn.feedclbtn {
        border: 1px solid #007bff;
    }
    
    @media(max-width:800px){
        .msnfull800{
            min-width: 100%;
        }
        .viewed-profile-item-lft img {
            width: auto;
            height: 95px;
            border-radius: 5px;
            object-fit: cover;
        }
        .search_section h2 {
            font-size: 26px;
        }
    }
    @media(max-width:767px){

        .profileHolder .row.pb-3,#pills-payment .row {
            flex-wrap: nowrap;
        }
        .xsnowrap{
            flex-wrap: wrap !important;
        }
        .xsnowrap p.attribute_value>span.colon{
            display: none;
        }
        .modal-title {
            font-size: 18px;
        }
        .modal.show .modal-dialog {
            margin-top: 15%;
        }

    }
    @media(max-width:640px){
        .search_section h2 {
            font-size: 20px;
        }
    }
    @media(max-width:400px){
        .xsw100 {
            max-width: 100px;
        }
    }
</style>
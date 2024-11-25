<style type="text/css">
  .datepick select {
    padding: 6px 6px !important;
  }

  .modal-header {
    background-color: #f97832;
    color: white;
  }

  .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
  }

  .col-md-6.col-xs-12 {
    padding: 5px;
  }

  /*For tab profile*/
  .view-profile {
    background: #fff;
    padding-left: 0px;
    padding-right: 0px;
    /*border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;*/
    border: 1px solid #cecece;
  }

  p.tabHeading {
    padding: 5px 15px;
    background-color: #00818e;
    color: #fefffe;
    font-size: 18px;
  }

  .imgBlock img {
    border: 2px solid darkred;
    border-radius: 5px;
  }

  .profileDet {
    padding: 20px;
    height: auto;
    margin: 0;
    background: #f3cb8b;
  }

  .DetailDiv {
    padding: 15px;
  }

  .DetailDiv table tbody tr {
    line-height: 1.8em;
  }

  .updateButton {
    float: right;
    margin-top: 5px;
    margin-right: 5px;
  }

  .DetailDiv h5 {
    font-size: 14px;
    font-weight: 600;
    color: #000;
  }

  .row {
    margin-left: 0px;
  }

  .DetailDiv table tr td:first-child {
    width: 200px;
  }

  /*For image*/
  #myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }

  #myImg:hover {
    opacity: 0.7;
  }

  /* The Modal (background) */
  .ImgModal {
    display: none;
    /* Hidden by default */
    position: fixed;
    /* Stay in place */
    z-index: 1;
    /* Sit on top */
    padding-top: 100px;
    /* Location of the box */
    left: 0;
    top: 0;
    width: 100%;
    /* Full width */
    height: 100%;
    /* Full height */
    overflow: auto;
    /* Enable scroll if needed */
    background-color: rgb(0, 0, 0);
    /* Fallback color */
    background-color: rgba(0, 0, 0, 0.9);
    /* Black w/ opacity */
  }

  /* Modal Content (image) */
  .contentModal {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
  }

  .contentModal img {
    width: 100%;
  }

  /* Caption of Modal Image */
  #caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
  }

  /* Add Animation */
  .contentModal,
  #caption {
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
  }

  @-webkit-keyframes zoom {
    from {
      -webkit-transform: scale(0)
    }

    to {
      -webkit-transform: scale(1)
    }
  }

  @keyframes zoom {
    from {
      transform: scale(0)
    }

    to {
      transform: scale(1)
    }
  }

  /* The Close Button */
  .closeIMGModal {
    position: absolute;
    top: -31px;
    right: -12px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
    opacity: 1;
  }

  .closeIMGModal:hover,
  .closeIMGModal:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
  }

  /* 100% Image Width on Smaller Screens */
  @media only screen and (max-width: 700px) {
    .contentModal {
      width: 100%;
    }
  }

  ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
  }

  /* @media (min-width: 768px){ */
     .navbar-nav>li {
    float: left;
    width: 100%;
  }

  tr.heading td {
    font-size: 16px;
    text-decoration: underline;
    color: red;
  }

  #proffesionForm .col-md-12 {
    margin-bottom: 20px;
  }

  .panel-primary>.panel-heading {
    color: #000;
    background-color: #d8d8d8;
    border-color: #d8d8d8;
    font-weight: 600;
  }

  .panel-primary {
    border-color: #d8d8d8;
  }

  .btn-submit {
    margin: 0 30%;
  }
  ul.dropdown-content>a {
    display: block;
    padding: 10px 0;
}
</style>


<div class="new-side-content">
<div id="page-inner" style="padding-top: 40px; background:#ffffff; padding-left:20px;">
  <div class="container1">
    <div class="row" style="margin:0px; border: 1px solid #f2f2f2;box-shadow: 0px 0px 10px 0px #f2f2f2;padding-right: 0;padding-left: 0;">
      <?php $user_id = $this->uri->segment(3);  ?>

      <div class="col-md-3 no-padding" style="background: #eeeeee;">
        <div class="profileDet">
          <!-- <div class="imgBlock">
                  <?php if ($profile_pic[0]['applicationphotopath']) {  ?>
                      <img id="myImg" src="<?php echo $profile_pic[0]['applicationphotopath']; ?>" width="180px" height="150px" >
                      <img id="myImgFull" src="<?php echo $profile_pic[0]['fullphotopath']; ?>" hidden>
                      <?php } else { ?>
                        <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img">
                  <?php } ?>
                  </div> -->
          <div class="all-images">
            <ul class="bxslider" style="height:250px; width: 250px; overflow: hidden;text-align: center; padding:0px;">
              <?php

              if ($profile_pic[0]['applicationphotopath']) {  ?>

                <img src="<?php echo $profile_pic[0]['applicationphotopath']; ?>" class="profil-img">

              <?php } else { ?>

                <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img">

              <?php } ?>
            </ul>
          </div>
          <!-- The Modal -->
          <div id="myModal" class="modal ImgModal">
            <div class="modal-content contentModal">
              <img id="img01">
              <span class="closeIMGModal">&times;</span>
            </div>
          </div>
          <p style="padding: 10px 0;"><?php echo $primary_info['first_name'] . " " . $primary_info['last_name']; ?></p>
          <p style="color: #00818e"><?php echo $primary_info['profile_id']; ?></p>
          <p>Reg On: <?php echo date("d/m/Y h:i", strtotime($primary_info['registered_on'])); ?></p>
          <p><a href="<?php echo base_url(); ?>/admin/admin_search/full_profile/<?php echo $primary_info['id']; ?>">View Full Profile </a></p>
        </div>
        <div class="sidebar">
          <ul class="dropdown-content">

            <a class="<?php if ($this->uri->segment(2) == "edit_profile") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_profile/<?php echo $user_id; ?>">Education & Profession Details</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_property") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_property/<?php echo $user_id; ?>">Property Details</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_parents") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_parents/<?php echo $user_id; ?>">Parents Details</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_siblings") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_siblings/<?php echo $user_id; ?>">Sibling Details</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_images") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_images/<?php echo $user_id; ?>">Update Images</a>

            <a class="<?php if ($this->uri->segment(2) == "edit_relatives") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_relatives/<?php echo $user_id; ?>">Relatives Details</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_astro") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_astro/<?php echo $user_id; ?>">Astro Details</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_contact_info") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_contact_info/<?php echo $user_id; ?>">Contact Info</a>
            <a class="<?php if ($this->uri->segment(2) == "edit_partner_preferences") {
                        echo "active-menu";
                      } ?>" href="<?php echo site_url(); ?>admin/edit_partner_preferences/<?php echo $user_id; ?>">Partner Preferences</a>

          </ul>

        </div>
      </div>

      <div class="col-md-9 no-padding">
        <div class="col-xs-12" style="padding-left: 0px;padding-right: 0px;">




          <div class="col-xs-12 view-profile">
            <span>
              <p class="tabHeading">Personal Details</p>
            </span>
            <a data-toggle="modal" data-target="#basicDetailModal" class="btn btn-primary updateButton" onclick="getBasicDataForUpdate()">Edit Basic Details</a>
            <div class="DetailDiv">
              <table border="0">
                <tr>
                  <td>
                    <h5>Gender</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo ucfirst($primary_info['gender']); ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Marital Status</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo ($primary_info['marital_status'] == "never_married") ? "Never Married" : ucfirst($primary_info['marital_status']); ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Date of Birth</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo $primary_info['date'] . " " . $primary_info['month'] . " " . $primary_info['year']; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Height</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo $primary_info['height']; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Religion</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo $primary_info['religion']; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Mother Tounge</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo $primary_info['mother_tounge']; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Caste</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo $primary_info['caste']; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Physical Status</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo ucfirst($primary_info['dosham']); ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Living In</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo ucfirst($primary_info['living_in']); ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Complexion</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo ucfirst($primary_info['complexion']); ?></td>
                </tr>

              </table>
            </div>
            <span>
              <p class="tabHeading">Education Details</p>
            </span>
            <!--<a class="btn btn-primary updateButton" data-toggle="modal" data-target="#educationDetailModal" onclick="getEducationDataForUpdate()" >Edit Education Details</a>-->

            <a class="btn btn-primary updateButton editeducdet" id="<?php echo $user_id; ?>" data-toggle="modal" data-target="#educationDetailModal">Edit Education Details</a>

            <div class="DetailDiv">
              <table border="0">
                <?php //print_r()$education_info);exit;
                ?>
                <?php if ($education_info->kv_ue_highedu) { ?>
                  <tr>
                    <td>
                      <h5><?php echo getlangkeywords('highestqua'); ?></h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td> <?php echo $education_info->kv_ue_highedu; ?><?php echo ($education_info->kv_ue_highedu_deg) ? ', ' . $education_info->kv_ue_highedu_deg : ''; ?><?php echo ($education_info->kv_ue_highedu_spec) ? ', ' . $education_info->kv_ue_highedu_spec : ''; ?><?php echo ($education_info->kv_ue_highedu_univ) ? ', ' . $education_info->kv_ue_highedu_univ : ''; ?><?php echo ($education_info->kv_ue_highedu_college) ? ', ' . $education_info->kv_ue_highedu_college : ''; ?><?php echo ($education_info->kv_ue_highedu_special) ? ', ' . $education_info->kv_ue_highedu_special : ''; ?><?php echo ($education_info->kv_ue_highedu_year) ? ', ' . $education_info->kv_ue_highedu_year : ''; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($education_info->kv_ue_pg) { ?>
                  <tr>
                    <td>
                      <h5><?php echo getlangkeywords('postgraduate'); ?></h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td> <?php echo $education_info->kv_ue_pg; ?><?php echo ($education_info->kv_ue_pg_deg) ? ', ' . $education_info->kv_ue_pg_deg : ''; ?><?php echo ($education_info->kv_ue_pg_spec) ? ', ' . $education_info->kv_ue_pg_spec : ''; ?><?php echo ($education_info->kv_ue_pg_univ) ? ', ' . $education_info->kv_ue_pg_univ : ''; ?><?php echo ($education_info->kv_ue_pg_college) ? ', ' . $education_info->kv_ue_pg_college : ''; ?><?php echo ($education_info->kv_ue_pg_special) ? ', ' . $education_info->kv_ue_pg_special : ''; ?><?php echo ($education_info->kv_ue_pg_year) ? ', ' . $education_info->kv_ue_pg_year : ''; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($education_info->kv_ue_g) { ?>
                  <tr>
                    <td>
                      <h5><?php echo getlangkeywords('graduate'); ?></h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td> <?php echo $education_info->kv_ue_g; ?><?php echo ($education_info->kv_ue_g_deg) ? ', ' . $education_info->kv_ue_g_deg : ''; ?><?php echo ($education_info->kv_ue_g_spec) ? ', ' . $education_info->kv_ue_g_spec : ''; ?> <?php echo ($education_info->kv_ue_g_special) ? ', ' . $education_info->kv_ue_g_special : ''; ?><?php echo ($education_info->kv_ue_g_univ) ? ', ' . $education_info->kv_ue_g_univ : ''; ?><?php echo ($education_info->kv_ue_g_college) ? ', ' . $education_info->kv_ue_g_college : ''; ?><?php echo ($education_info->kv_ue_g_year) ? ', ' . $education_info->kv_ue_g_year : ''; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($education_info->kv_ue_ug) { ?>
                  <tr>
                    <td>
                      <h5><?php echo getlangkeywords('undergraduate'); ?></h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td> <?php echo $education_info->kv_ue_ug; ?><?php echo ($education_info->kv_ue_ug_deg) ? ', ' . $education_info->kv_ue_ug_deg : ''; ?><?php echo $education_info->kv_ue_ug_spec ? ', ' . $education_info->kv_ue_ug_spec : ''; ?><?php echo ($education_info->kv_ue_ug_univ) ? ', ' . $education_info->kv_ue_ug_univ : ''; ?><?php echo ($education_info->kv_ue_ug_college) ? ', ' . $education_info->kv_ue_ug_college : ''; ?><?php echo ($education_info->kv_ue_ug_year) ? ', ' . $education_info->kv_ue_ug_year : ''; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($education_info->kv_ue_x) {  ?>
                  <tr>
                    <td>
                      <h5><?php echo getlangkeywords('school'); ?></h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo $education_info->kv_ue_x; ?><?php echo (!empty(trim($education_info->kv_ue_x_college)) && strpos($education_info->kv_ue_x_college, '&nbsp;') === false) ? ', ' . $education_info->kv_ue_x_college : ''; ?><?php echo (!empty(trim($education_info->kv_ue_x_year)) && strpos($education_info->kv_ue_x_year, '&nbsp;') === false) ? ',' . $education_info->kv_ue_x_year : ''; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($primary_info['education_description']) {  ?>
                  <tr>
                    <td>
                      <h5>More Details</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo ($primary_info['education_description']) ? '' . nl2br($primary_info['education_description']) : ''; ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <span>
              <p class="tabHeading">Profession Details</p>
            </span>
            <a href="#" class="btn btn-primary updateButton" data-toggle="modal" data-target="#proffesionDetailModal" onclick="getProfessionDataForUpdate()">Edit Proffesional Details</a>
            <div class="DetailDiv">
              <table border="0">
                <tr>
                  <td>
                    <h5>Employeed In</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo $primary_info['employee_in']; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Profession</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo (!empty($primary_info['occupation'])) ? $primary_info['occupation'] : "NA"; ?></td>
                </tr>
                <?php if ($primary_info['annual_income'] != "") { ?>
                  <tr>
                    <td>
                      <h5>Annual Salary</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo $primary_info['currency']; ?> - <?php echo $primary_info['annual_income']; ?></td>
                  </tr>
                <?php } ?>
                <?php if ($primary_info['company']) { ?>
                  <tr>
                    <td>
                      <h5>Company</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo (!empty($primary_info['company'])) ? $primary_info['company'] : "NA"; ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <td>
                    <h5>Profession Details</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo (!empty($primary_info['about_profession'])) ? $primary_info['about_profession'] : "NA"; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>Country Working In</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo (!empty($primary_info['country'])) ? $primary_info['country'] : "NA"; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>State</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo (!empty($primary_info['state'])) ? $primary_info['state'] : "NA"; ?></td>
                </tr>
                <tr>
                  <td>
                    <h5>City</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo (!empty($primary_info['city'])) ? $primary_info['city'] : "NA"; ?></td>
                </tr>
                <?php if ($primary_info['country'] != "India") { ?>
                  <tr>
                    <td>
                      <h5>Visa Type</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo (!empty($primary_info['visatype'])) ? $primary_info['visatype'] : "NA"; ?></td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Since Date</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo ($primary_info['residing-since'] != "0000-00-00") ? date("d/m/Y", strtotime($primary_info['residing-since'])) : "NA"; ?></td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Arrival Date</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo ($primary_info['arrival-date'] != "0000-00-00") ? date("d/m/Y", strtotime($primary_info['arrival-date'])) : "NA"; ?></td>
                  </tr>
                  <tr>
                    <td>
                      <h5>Departure Date</h5>
                    </td>
                    <td class="colon_pad">:</td>
                    <td><?php echo ($primary_info['departure-date'] != "0000-00-00") ? date("d/m/Y", strtotime($primary_info['departure-date'])) : "NA"; ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <td>
                    <h5>About Me</h5>
                  </td>
                  <td class="colon_pad">:</td>
                  <td><?php echo (!empty($primary_info['about_me'])) ? $primary_info['about_me'] : "NA"; ?></td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="basicDetailModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title">Update Basic Details</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
             
            </div>
            <div class="modal-body">
              <form id="basicForm">
                <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>">
              <div class="d-flex flex-wrap">

                <div class="col-md-12 no-padding d-flex align-items-center my-3">
                  
                    <label>Gender : </label>
                 
                  <div class="col-md-2 col-xs-9  d-flex align-items-center">
                    <div class=" pr-10 d-flex align-items-center">
                      <input type="radio" name="gender" id="male" value="male">
                      <label for="male">Male</label>
                      <span class="check"></span>
                    </div>
                    <div class=" pr-10 d-flex align-items-center">
                      <input type="radio" name="gender" id="female" value="female">
                      <label for="female">Female</label>
                      <span class="check"></span>
                    </div>
                  </div>
                  <span id="genders" class="text-danger font-weight-bold t-40"></span>
                </div>
                <div class="col-md-6 col-sm-7 col-xs-6">
                  <label>First Name </label>
                  <input type="text" class="form-control" name="fname" id="fname" />
                </div>
                <div class="col-md-6 col-sm-5 col-xs-6">
                  <label>Last Name </label>
                  <input type="text" class="form-control" name="lname" id="lname" />
                </div>
                <div class="col-md-6 col-sm-7 col-xs-6">
                  <label>Marital Status </label>
                  <select class="form-control" id="marital_status" name="marital_status">
                    <option value="0">Select Marital Status</option>
                    <option value="never_married">Never Married</option>
                    <option value="divorced">Divorced</option>
                    <option value="widow-widower">Widow / Widower</option>
                    <option value="separated">Separated</option>
                    <option value="annulled">Annulled</option>
                  </select>
                  <span id="marital_statuss" class="text-danger font-weight-bold"></span>
                </div>
                <div class="col-md-6 col-sm-5 col-xs-6 ">
                  <div>
                    <label style="float: left;width: 100%;">Date Of Birth </label> 
                  </div></br>
                  <div class="d-flex">
                  <div class="col-md-3 col-sm-3 col-xs-3 datepick no-padding">
                    <select name="date" id="date" class="form-control">
                      <option value="0">DD</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                      <option value="5">5</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      <option value="12">12</option>
                      <option value="13">13</option>
                      <option value="14">14</option>
                      <option value="15">15</option>
                      <option value="16">16</option>
                      <option value="17">17</option>
                      <option value="18">18</option>
                      <option value="19">19</option>
                      <option value="20">20</option>
                      <option value="21">21</option>
                      <option value="22">22</option>
                      <option value="23">23</option>
                      <option value="24">24</option>
                      <option value="25">25</option>
                      <option value="26">26</option>
                      <option value="27">27</option>
                      <option value="28">28</option>
                      <option value="29">29</option>
                      <option value="30">30</option>
                      <option value="31">31</option>
                    </select>
                    <span id="dates" class="text-danger font-weight-bold b-22"></span>
                  </div>
                  <div class="col-md-5 col-sm-5 col-xs-5 datepick">
                    <select name="month" id="month" class="form-control">
                      <option value="0">MM</option>
                      <option value="01" <?php if ($primary_info['month'] == 'Jan') {
                                            echo 'selected';
                                          } ?>>Jan</option>
                      <option value="02" <?php if ($primary_info['month'] == 'Feb') {
                                            echo 'selected';
                                          } ?>>Feb</option>
                      <option value="03" <?php if ($primary_info['month'] == 'Mar') {
                                            echo 'selected';
                                          } ?>>Mar</option>
                      <option value="04" <?php if ($primary_info['month'] == 'Apr') {
                                            echo 'selected';
                                          } ?>>Apr</option>
                      <option value="05" <?php if ($primary_info['month'] == 'May') {
                                            echo 'selected';
                                          } ?>>May</option>
                      <option value="06" <?php if ($primary_info['month'] == 'Jun') {
                                            echo 'selected';
                                          } ?>>Jun</option>
                      <option value="07" <?php if ($primary_info['month'] == 'Jul') {
                                            echo 'selected';
                                          } ?>>Jul</option>
                      <option value="08" <?php if ($primary_info['month'] == 'Aug') {
                                            echo 'selected';
                                          } ?>>Aug</option>
                      <option value="09" <?php if ($primary_info['month'] == 'Sep') {
                                            echo 'selected';
                                          } ?>>Sep</option>
                      <option value="10" <?php if ($primary_info['month'] == 'Oct') {
                                            echo 'selected';
                                          } ?>>Oct</option>
                      <option value="11" <?php if ($primary_info['month'] == 'Nov') {
                                            echo 'selected';
                                          } ?>>Nov</option>
                      <option value="12" <?php if ($primary_info['month'] == 'Dec') {
                                            echo 'selected';
                                          } ?>>Dec</option>
                    </select>
                    <span id="months" class="text-danger font-weight-bold b-22"></span>
                  </div>
                  <div class="col-md-4 col-sm-4 col-xs-4 datepick no-padding">
                    <select name="year" id="year" class="form-control">
                      <option value="Year" value="0">Year</option>
                      <option value="2015">2015</option>
                      <option value="2014">2014</option>
                      <option value="2013">2013</option>
                      <option value="2012">2012</option>
                      <option value="2011">2011</option>
                      <option value="2010">2010</option>
                      <option value="2009">2009</option>
                      <option value="2008">2008</option>
                      <option value="2007">2007</option>
                      <option value="2006">2006</option>
                      <option value="2005">2005</option>
                      <option value="2004">2004</option>
                      <option value="2003">2003</option>
                      <option value="2002">2002</option>
                      <option value="2001">2001</option>
                      <option value="2000">2000</option>
                      <option value="1999">1999</option>
                      <option value="1998">1998</option>
                      <option value="1997">1997</option>
                      <option value="1996">1996</option>
                      <option value="1995">1995</option>
                      <option value="1994">1994</option>
                      <option value="1993">1993</option>
                      <option value="1992">1992</option>
                      <option value="1991">1991</option>
                      <option value="1990">1990</option>
                      <option value="1989">1989</option>
                      <option value="1988">1988</option>
                      <option value="1987">1987</option>
                      <option value="1986">1986</option>
                      <option value="1985">1985</option>
                      <option value="1985">1985</option>
                      <option value="1984">1984</option>
                      <option value="1983">1983</option>
                      <option value="1982">1982</option>
                      <option value="1981">1981</option>
                      <option value="1980">1980</option>
                      <option value="1979">1979</option>
                      <option value="1978">1978</option>
                      <option value="1977">1977</option>
                      <option value="1976">1976</option>
                      <option value="1975">1975</option>
                      <option value="1974">1974</option>
                      <option value="1973">1973</option>
                      <option value="1972">1972</option>
                      <option value="1971">1971</option>
                      <option value="1970">1970</option>
                    </select>
                    <span id="years" class="text-danger font-weight-bold b-22"></span>
                  </div>
                  </div>
                 
                </div>
                <div class="col-md-6 col-sm-7 col-xs-6">
                  <label>Height </label>
                  <select class="form-control" id="select_height" name="select_height">
                    <option selected="selected" value="0">Select Height</option>
                    <?php foreach ($heights as $value) { ?>
                      <option value="<?php echo stripcslashes($value['height']); ?>"><?php echo stripcslashes($value['height']); ?></option><?php } ?>
                  </select>
                  <span id="heights" class="text-danger font-weight-bold"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Complexion </label>
                  <select class="form-control" id="select_complexion" name="complexion">
                    <option selected="selected">Select Complexion</option>
                    <option value="Average" <?php if ($primary_info['complexion'] == 'Average') {
                                              echo "selected";
                                            } ?>>Average</option>
                    <option value="Medium" <?php if ($primary_info['complexion'] == 'Medium') {
                                              echo "selected";
                                            } ?>>Medium</option>
                    <option value="Fair" <?php if ($primary_info['complexion'] == 'Fair') {
                                            echo "selected";
                                          } ?>>Fair</option>
                    <option value="Very-Fair" <?php if ($primary_info['complexion'] == 'Very-Fair') {
                                                echo "selected";
                                              } ?>>Very Fair</option>
                  </select>
                  <span id="religions" class="text-danger font-weight-bold"></span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Mother Tounge </label>
                  <select class="form-control" id="select_tounge" name="select_tounge">
                    <option selected="selected" value="0">Select Mother Tounge</option>
                    <?php foreach ($mother_tounges as $value) { ?>
                      <option value="<?php echo $value['mothertounge']; ?>"><?php echo $value['mothertounge']; ?></option><?php } ?>
                  </select>
                  <span id="mothertounges" class="text-danger font-weight-bold"></span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Religion </label>
                  <select class="form-control" id="select_religion" name="select_religion">
                    <option selected="selected" value="0">Select Religion</option>
                    <?php foreach ($religions as $value) { ?>
                      <option value="<?php echo $value['religion']; ?>"><?php echo $value['religion']; ?></option><?php } ?>
                  </select>
                  <span id="religions" class="text-danger font-weight-bold"></span>
                </div>
                <div class="col-md-6 col-sm-7 col-xs-6">
                  <label>Caste </label>
                  <select class="form-control" id="select_caste" name="select_caste" onchange="getsubcaste(this.value)">
                    <option selected="selected" value="0">Select Caste</option>
                    <?php foreach ($castes as $value) { ?>
                      <option value="<?php echo $value['caste']; ?>"><?php echo $value['caste']; ?></option>
                    <?php } ?>
                  </select>
                  <span id="castes" class="text-danger font-weight-bold"></span>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Sub Caste </label>
                  <select class="form-control" id="sub_caste" name="sub_caste">
                    <option selected="selected" value="0">Select Sub Caste</option>
                  </select>
                  <span id="castes" class="text-danger font-weight-bold"></span>
                </div>

                <div class="col-md-6 col-sm-6 col-xs-6">
                  <label>Physical Status </label>
                  <div class="col-md-12 no-padding d-flex justify-content-between">
                    <div class="col-md-2 no-padding d-flex align-items-center">
                      <input type="radio" name="dosham" id="no" value="no">
                      <label for="no">No</label>
                      <span class="check"></span>
                    </div>
                    <div class="col-md-2  no-padding d-flex align-items-center">
                      <input type="radio" name="dosham" id="yes" value="yes">
                      <label for="yes">Yes</label>
                      <span class="check"></span>
                    </div>
                    <div class="col-md-7 no-padding d-flex">
                      <input type="radio" name="dosham" id="dont_know" value="dont_know">
                      <label for="dont_know">Don't Know</label>
                      <span class="check"></span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6" style="width: 50%;">
                  <label>Living In</label>
                  <select class="form-control" id="living_in" name="living_in">
                    <option selected="selected" value="0">Select Living In</option>
                    <?php foreach ($countries as $value) { ?>
                      <option value="<?php echo $value['country']; ?>"><?php echo ucwords($value['country']); ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="submit-btn">
                    <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                  </div>
                </div>
                </div>
              </form>
            </div>
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> -->
          </div>

        </div>
      </div>
      <!-- Modal -->
      <!-- Modal -->
      <div class="modal fade " id="educationDetailModal" role="dialog">

        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Education Details</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              
            </div>

            <div class="modal-body educationDetailModal"></div>

          </div>

        </div>

      </div>
      <!-- Modal -->
      <!-- Modal -->
      <div class="modal fade" id="proffesionDetailModal" style="overflow-y: auto;" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
                 <h4 class="modal-title">Update Profesional Details</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
             
            </div>
            <div class="modal-body">
              <form id="proffesionForm">
                <input type="hidden" name="userIdPro" id="userIdPro" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="col-md-6 col-sm-5 col-xs-6 my-3">
                  <label>Employed In</label>
                  <select class="form-control" id="employee_in" onchange="employee(this.value);" name="employee_in">
                    <option value="Employed In">Select Employed In</option>
                    <option value="Government">Government</option>
                    <option value="Private">Private</option>
                    <option value="Business">Business</option>
                    <option value="Defencce">Defencce</option>
                    <option value="Student">Student</option>
                    <option value="Not-Working">Not-Working</option>
                  </select>
                  <span id="employee_ins" class="text-danger font-weight-bold"></span>
                </div>
                <div class="col-md-6 col-sm-5 col-xs-6 hide_not_working">
                  <label>Profession </label>
                  <select class="form-control" id="profession" name="profession">
                    <option value="Select Profession">Select Profession</option>
                    <?php foreach ($professions as $value) { ?>
                      <option value="<?php echo $value['profession']; ?>"><?php echo stripcslashes($value['profession']); ?></option>
                    <?php } ?>
                  </select>
                  <span id="professions" class="text-danger font-weight-bold"></span>
                </div>
                <div id="hidedata" style="display:none;">
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <label>Currency </label>
                    <select id="currency" class="form-control" name="currency">
                      <option value="Select Currency" value="0">Select Currency</option>

                      <option value="Rs">India</option>
                      <option value="US">USA</option>
                      <option value="GBP">UK</option>
                      <option value="CAD">Canada</option>
                      <option value="AUD">Australia</option>
                      <option value="SGD">Singapore</option>
                      <option value="SAR">Saudi Arabia</option>
                      <option value="ZAR">South Africa</option>
                      <option value="KWD">Kuwait</option>
                      <option value="PKR">Pakistan</option>
                      <option value="AFA">Afghanistan</option>
                      <option value="ALL">Albania</option>
                      <option value="DZD">Algeria</option>
                      <option value="SAR">Anguiila</option>
                      <option value="XCD">South Africa</option>
                      <option value="XCD">Antarctica</option>
                      <option value="AMD">Armenia</option>
                      <option value="AWG">Aruba</option>
                      <option value="EUR">Austria</option>
                      <option value="AZM">Azerbaijan</option>
                      <option value="BHD">Bahrain</option>
                      <option value="BDT">Bangladesh</option>
                      <option value="EUR">Belgium</option>
                      <option value="BWP">Botswana</option>
                      <option value="BRL">Brazil</option>
                      <option value="USD">British Indian Ocean Territory</option>
                      <option value="BND">Brunei</option>
                      <option value="CNY">China</option>
                      <option value="XAF">Congo</option>
                      <option value="CZK">Czech Republic</option>
                      <option value="DKK">Denmark</option>
                      <option value="ERN">Eritrea</option>
                      <option value="ETB">Ethiopia</option>
                      <option value="EUR">Finland</option>
                      <option value="EUR">France</option>
                      <option value="EUR">Germany</option>
                      <option value="GHC">Ghana</option>
                      <option value="XCD">Grenada</option>
                      <option value="HKD">Hong Kong</option>
                      <option value="HUF">Hungary</option>
                      <option value="ISK">Iceland</option>
                      <option value="IDR">Indonesia</option>
                      <option value="IQD">Iraq</option>
                      <option value="EUR">Ireland</option>
                      <option value="ILS">Israel</option>
                      <option value="EUR">Italy</option>
                      <option value="XOF">Ivory Coast</option>
                      <option value="JMD">Jamaica</option>
                      <option value="JPY">Japan</option>
                      <option value="JOD">Jordan</option>
                      <option value="KZT">Kazakstan</option>
                      <option value="KES">Kenya</option>
                      <option value="KRW">South Korea</option>
                      <option value="KPW">North Korea</option>
                      <option value="LNP">Lebanon</option>
                      <option value="LRD">Liberia</option>
                      <option value="EUR">Luxembourg</option>
                      <option value="MYR">Malaysia</option>
                      <option value="MVR">Maldives</option>
                      <option value="LRD">Liberia</option>
                      <option value="EUR">Luxembourg</option>
                      <option value="MYR">Malaysia</option>
                      <option value="MVR">Maldives</option>
                      <option value="XOF">Mali</option>
                      <option value="EUR">Martinique</option>
                      <option value="MUR">Martinique</option>
                      <option value="MXN">Mexico</option>
                      <option value="NPR">Nepal</option>
                      <option value="EUR">Netherlands</option>
                      <option value="NZD">New Zealand</option>
                      <option value="NGN">Nigeria</option>
                      <option value="NOK">Norway</option>
                      <option value="OMR">Oman</option>
                      <option value="PHP">Philippines</option>
                      <option value="PLZ">Poland</option>
                      <option value="USD">Puerto Rico</option>
                      <option value="QAR">Qatar</option>
                      <option value="RUR">Russia</option>
                      <option value="XOF">Senegal</option>
                      <option value="EUR">Spain</option>
                      <option value="SDD">Sudan</option>
                      <option value="SZL">Swaziland</option>
                      <option value="SEK">Sweden</option>
                      <option value="CHF">Switzerland</option>
                      <option value="RUR">Russia</option>
                      <option value="XOF">Senegal</option>
                      <option value="EUR">Spain</option>
                      <option value="SDD">Sudan</option>
                      <option value="SZL">Swaziland</option>
                      <option value="SEK">Sweden</option>
                      <option value="CHF">Switzerland</option>
                      <option value="TWD">Taiwan</option>
                      <option value="TZS">Tanzania</option>
                      <option value="THB">Thailand</option>
                      <option value="TRL">Turkey</option>
                      <option value="UGS">Uganda</option>
                      <option value="NO">Ukraine</option>
                      <option value="AED">United Arab Emirates</option>
                      <option value="VND">Vietnam</option>
                      <option value="ZMK">Zambia</option>
                      <option value="NotG">Not Given</option>
                      <option value="OthR">Other</option>
                      <option value="LKR">Srilanka</option>
                      <option value="BWI">West Indies</option>
                      <option value="Euro">Europe</option>
                      <option value="CFA">WEST AFRICA</option>
                      <option value="Riel">Cambodia</option>
                      <option value="RS">Seychelles</option>
                    </select>
                    <span id="currencys" class="text-danger font-weight-bold"></span>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6 hide_not_working">
                    <label>Annual Salary </label>
                    <input type="text" class="form-control" name="monthlySalary" id="monthlySalary" />
                  </div>

                  <div class="col-md-6 col-sm-7 col-xs-6 hide_not_working">
                    <label>Company </label>
                    <input type="text" class="form-control" name="companys" id="companys" />
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 hide_not_working">
                  <label>Profession Details </label>
                  <textarea type="text" name="about_profession" id="about_profession" class="form-control" cols="20" rows="5"></textarea>
                </div>

                <div class="col-md-6 col-sm-7 col-xs-6 hide_not_working">
                  <label>Country Working In </label>
                  <select class="form-control" id="workCountry" name="workCountry" onchange="getstates(this.value)">
                    <option value="Select Country">Select Country</option>
                    <?php foreach ($countries as $value) { ?>
                      <option value="<?php echo $value['country']; ?>"><?php echo ucwords($value['country']); ?></option><?php } ?>
                  </select>
                  <span id="groom_countrys" class="text-danger font-weight-bold"></span>
                  <!-- <input type="text" class="form-control" name="workCountry" id="workCountry"/> -->
                </div>

                <div class="col-md-6 col-sm-7 col-xs-6 hide_not_working">
                  <label>State Working In </label>
                  <select class="form-control" id="workState" name="workState" onchange="getdistrict(this.value)">
                    <option value="">Select State</option>
                  </select>
                  <span id="state_ids" class="text-danger font-weight-bold"></span>
                  <!-- <input type="text" class="form-control" name="workState" id="workState"/> -->
                </div>
                <!-- <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <label>District Working In </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">   
                        <select class="form-control" id="workDistrict" name="workDistrict">
                           <option value="Select District">Select District</option>
                        </select>         
                        <span id="workDistricts" class="text-danger font-weight-bold"></span>     
                      </div>
                    </div>
                  </div> -->
                <div class="col-md-6 col-sm-7 col-xs-6 hide_not_working">
                  <label>City Working In </label>
                  <input type="text" class="form-control" name="workCity" id="workCity" />
                  <span id="workCitys" class="text-danger font-weight-bold"></span>
                </div>
                <div id="appdate" style="display:none;">
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <label>Visa Type </label>
                    <select class="form-control" id="visatype" name="visatype">
                      <option value="">Select Visa Type</option>
                      <option value="Student Visa">Student Visa</option>
                      <option value="Work Permit">Work Permit</option>
                      <option value="Temporary Vissa">Temporary Visa</option>
                      <option value="Citizen">Citizen</option>
                      <option value="Permanent Resident">Permanent Resident</option>
                      <option value="Green Card">Green Card</option>
                      <option value="Green Card(Process)">Green Card(Process)</option>
                      <option value="H1b">H1b</option>
                      <option value="H1b i140 Approved">H1b i140 Approved</option>
                      <option value="L1 Visa">L1 Visa</option>
                      <option value="F1">F1</option>
                      <option value="O1">O1</option>
                      <option value="Opt">Opt</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <label>Since Date </label>
                    <input type="date" name="residing-since" id="residing-since" class="form-control">
                  </div>

                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <label>Arrival Date </label>
                    <input type="date" name="arrival-date" id="arrival-date" class="form-control">
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <label>Departure Date </label>
                    <input type="date" name="departure-date" id="departure-date" class="form-control">
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 my-3">
                  <label>About Me</label>
                  <textarea type="text" name="about_me" id="about_me" class="form-control" cols="20" rows="5"></textarea>
                </div>
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="submit-btn">
                      <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div> -->
          </div>

        </div>
      </div>
      <!-- Modal -->

      <?php
      if (isset($images_info) && count($images_info) > 0) { ?>
        <div class="html_popup_box" id="profile_images_popup">
          <div class="preferences_content" style="padding:0; width:600px;top:5%;max-width:600px;">
            <div class="popupCloseButton" onclick="profile_images_popup_close()">&times;</div>
            <h1>Profile Photos</h1>
            <div class="body_content">
              <div class="gallery_container">
                <div class="exzoom hidden" id="exzoom">
                  <div class="exzoom_img_box">
                    <ul class='exzoom_img_ul'>
                      <?php $i = 0;
                      foreach ($images_info as $value) {
                        if ($value['fullphotopath'] != '') { ?>
                          <li><img src="<?php echo $value['fullphotopath'] ?>" style="width:100%;" /></li>
                      <?php }
                      } ?>
                    </ul>
                  </div>
                  <!--<div class="exzoom_nav"></div>-->
                  <p class="exzoom_btn">
                    <a href="javascript:void(0);" class="exzoom_prev_btn">
                      < </a>
                        <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>
  </div>
</div>
                    </div>

<script src="<?php echo base_url(); ?>/js/jquery-1.12.4.js"></script>
<script>
  $('.editeducdet').click(function() {
    var $this = $(this);
    $.ajax({
      dataType: "json",
      type: "POST",
      url: '<?php echo site_url(); ?>admin/editeducdet',
      data: {
        userid: $this.attr('id')
      },
      complete: function(data) {
        //var dt = JSON.parse(data);
        //  console.log(data['responseText']);
        $('.educationDetailModal').html(data['responseText']);
        getalldeg();
        //var op = data.responseText.trim();
        // $("#sub_caste").html(op);
      }
    });

  });
  $(document).ready(function() {

    // // Get the modal
    // var modal = document.getElementById("myModal");

    // // Get the image and insert it inside the modal - use its "alt" text as a caption
    // var img = document.getElementById("myImg");
    // var imgFull = document.getElementById("myImgFull");
    // var modalImg = document.getElementById("img01");
    // var captionText = document.getElementById("caption");
    // img.onclick = function(){
    //   modal.style.display = "block";
    //   modalImg.src = imgFull.src;
    //   // captionText.innerHTML = this.alt;
    // }

    // // Get the <span> element that closes the modal
    // var span = document.getElementsByClassName("closeIMGModal")[0];

    // // When the user clicks on <span> (x), close the modal
    // span.onclick = function() { 
    //   modal.style.display = "none";
    // }

    getsubcaste = function(valu) {
      $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>admin/ws/getsubcastes',
        data: "valu=" + valu,
        complete: function(data) {
          var op = data.responseText.trim();
          $("#sub_caste").html(op);
        }
      });
    }
    getsubcaste('<?php echo $primary_info['caste']; ?>');

    // For Basic Detail Modal Popup data
    getBasicDataForUpdate = function() {

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>admin/ws/getBasicDataForUpdate",
        type: "POST",
        data: {
          user_id: userId
        },
        success: function(res) {
          var dt = JSON.parse(res);
          if (dt != null) {
            $("#fname").val(dt.first_name);
            $("#lname").val(dt.last_name);
            $("#marital_status > [value='" + dt.marital_status + "']").attr("selected", "true");
            $("#date > [value=" + dt.date + "]").attr("selected", "true");
            $("#month > [value=" + dt.month + "]").attr("selected", "true");
            $("#year > [value=" + dt.year + "]").attr("selected", "true");
            $("#select_height > [value='" + dt.height + "']").attr("selected", "true");
            $("#select_religion > [value='" + dt.religion + "']").attr("selected", "true");
            $("#select_tounge > [value='" + dt.mother_tounge + "']").attr("selected", "true");
            $("#select_caste > [value='" + dt.caste + "']").attr("selected", "true");
            $("#sub_caste > [value='" + dt.sub_caste + "']").attr("selected", "true");
            $("input[name=gender][value='" + dt.gender + "']").attr('checked', "true");
            $("input[name=dosham][value='" + dt.dosham + "']").attr('checked', "true");
            $("#living_in > [value='" + dt.living_in + "']").attr("selected", "true");
            $("#complexion > [value='" + dt.complexion + "']").attr("selected", "true");
          }
        }
      });
    }

    validation = function() {
      var date = document.getElementById('date').value;
      var month = document.getElementById('month').value;
      var year = document.getElementById('year').value;
      var male = document.getElementById('male').checked;
      var female = document.getElementById('female').checked;
      var marital_status = document.getElementById('marital_status').value;
      var height = document.getElementById('select_height').value;
      var religion = document.getElementById('select_religion').value;
      var mothertounge = document.getElementById('select_tounge').value;
      var caste = document.getElementById('select_caste').value;

      if (marital_status == "0") {
        document.getElementById('marital_statuss').innerHTML = " *please select marital_status";
        document.getElementById('marital_status').focus();
        return false;
      } else {
        document.getElementById('marital_statuss').innerHTML = " ";
      }
      if (date == "0") {
        document.getElementById('dates').innerHTML = " *please select date";
        document.getElementById('date').focus();
        return false;
      } else {
        document.getElementById('dates').innerHTML = " ";
      }
      if (month == "0") {
        document.getElementById('months').innerHTML = " *please select month";
        document.getElementById('month').focus();
        return false;
      } else {
        document.getElementById('months').innerHTML = " ";
      }
      if (year == "0") {
        document.getElementById('years').innerHTML = " *please select year";
        document.getElementById('year').focus();
        return false;
      } else {
        document.getElementById('years').innerHTML = " ";
      }
      if ((male == "") && (female == "")) {
        document.getElementById('genders').innerHTML = " *please select gender";

        return false;
      } else {
        document.getElementById('genders').innerHTML = " ";
      }
      if (height == "0") {
        document.getElementById('heights').innerHTML = " *please select height";
        document.getElementById('height').focus();
        return false;
      } else {
        document.getElementById('heights').innerHTML = " ";
      }
      if (religion == "0") {
        document.getElementById('religions').innerHTML = " *please select religion";
        document.getElementById('religion').focus();
        return false;
      } else {
        document.getElementById('religions').innerHTML = " ";
      }
      if ((mothertounge == "0")) {
        document.getElementById('mothertounges').innerHTML = " *please select mothertounge";
        document.getElementById('mothertounge').focus();
        return false;
      } else {
        document.getElementById('mothertounges').innerHTML = " ";
      }
      if ((caste == "0")) {
        document.getElementById('castes').innerHTML = " *please select caste";
        document.getElementById('caste').focus();
        return false;
      } else {
        document.getElementById('castes').innerHTML = " ";
      }
    }

    // For basic detail update
    $("form#basicForm").submit(function(e) {
      e.preventDefault();
      var status = validation();
      if (status == true || status == undefined) {
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/basicDetailUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res) {
            if (res) {
              alert('Basic Details updated successfully.');
              window.location.reload();
            } else {
              alert('Basic Details update failed.');
            }
          }
        });
      }
    });

    // For Education Detail Modal Popup data
    getEducationDataForUpdate = function() {

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>admin/ws/getEducationDataForUpdate",
        type: "POST",
        data: {
          user_id: userId
        },
        success: function(res) {
          var dt = JSON.parse(res);
          if (dt != null) {
            $("#select_education > [value='" + dt.heighst_education + "']").attr("selected", "true");
            $("#education_degree > [value='" + dt.education_degree + "']").attr("selected", "true");
            $("#specialization > [value='" + dt.specialization + "']").attr("selected", "true");
            $("#university").val(dt.university);
            $("#college").val(dt.college);
            $("#education-details").val(dt.education_description);
          }
        }
      });
    }

    educationValidation = function() {

      if ($('#highest_education_1').val() == '' && $('#highest_education_2').val() == '' && $('#highest_education_3').val() == '' && $('#highest_education_4').val() == '' && $('.txt_tenth').val() == '') {

        return false;
      }

      return true;
      /*
      		  
               var heighsteducation = document.getElementById('select_education_5').value;
               var education_degree = document.getElementById('education_degree_5').value;
               var specialization = document.getElementById('specialization_5').value;
              
              
                if(heighsteducation == "Select Education")
                {
                   document.getElementById('highest_educations').innerHTML = " *please select heighst education ";
                   document.getElementById('select_education_5').focus();
                   return false;
                }else {
                    document.getElementById('highest_educations').innerHTML = " ";
                }
               
                if(education_degree == "Select Education First")
                {
                   document.getElementById('education_degrees').innerHTML = " *please select education degree";
                    document.getElementById('education_degree_5').focus();
                   return false;
                }else {
                    document.getElementById('education_degrees').innerHTML = " ";
                }
               
                if(specialization == "Select Degree First")
                {
                   document.getElementById('specializations').innerHTML = " *please select specialization";
                   document.getElementById('specialization_5').focus();
                   return false;
                }else {
                    document.getElementById('specializations').innerHTML = " ";
                }
            */
    }

    // For education detail update
    $("body").on('click', '.btnrmeducform', function() {
      // e.preventDefault();
      var formstatus = educationValidation();

      if (formstatus == true || formstatus == undefined) {
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/educationDetailUpdate",
          type: "POST",
          data: $('#updateedudet').serialize(),
          // contentType: false,
          //processData: false,
          success: function(res) {
            if (res) {
              alert('Education Details updated successfully.');
              window.location.reload();
            } else {
              alert('Education Details update failed.');
            }
          }
        });
      }
    });

    getstates = function(valu) {
      if ((valu != "India")) {
        $('#appdate').show();
      } else {
        $('#appdate').hide();
        $("#arrival-date").val("");
        $("#departure-date").val("");
      }

      $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>admin/ws/getstatesADM',
        data: "valu=" + valu,
        complete: function(data) {
          var op = data.responseText.trim();
          $("#workState").html(op);
        }
      });
    }
    getstates('<?php echo $primary_info['country']; ?>');


    // getdistrict =  function(valu)
    // {
    //   var valu = valu;
    //     $.ajax({ 
    //        type: "POST", 
    //        url: '<?php echo site_url(); ?>admin/ws/getdistrictsADM',
    //        data: {valu: valu},
    //        complete: function(data){  
    //         var op = data.responseText.trim();
    //         $("#workDistrict").html(op);
    //        }
    //     });
    // }
    // getdistrict('<?php echo $primary_info['state']; ?>');

    // For profession data for modal popup      
    getProfessionDataForUpdate = function() {

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>admin/ws/getProfessionDataForUpdate",
        type: "POST",
        data: {
          user_id: userId
        },
        success: function(res) {
          var dt = JSON.parse(res);
          if (dt != null) {
            $("#employee_in > [value='" + dt.employee_in + "']").attr("selected", "true");
            $("#employee_in").trigger("change");
            $("#profession > [value='" + dt.occupation + "']").attr("selected", "true");
            $("#currency > [value='" + dt.currency + "']").attr("selected", "true");

            $("#workCountry > [value='" + dt.country + "']").attr("selected", "true");
            $("#workState > [value='" + dt.state + "']").attr("selected", "true");
            // $("#workState").trigger("change");
            // $("#workDistrict > [value='" + dt.district_working_in + "']").attr("selected", "true");
            $("#workCity").val(dt.city);
            //alert(dt.residing_since);
            $("#monthlySalary").val(dt.annual_income);
            $("#companys").val(dt.company);
            $("#about_profession").val(dt.about_profession);
            $("#visatype").val(dt.visatype);
            $("#residing-since").val(dt.residing_since);
            $("#arrival-date").val(dt.arrival_date);
            $("#departure-date").val(dt.departure_date);
            $("#about_me").val(dt.about_me);
          }
        }
      });
    }

    professionValidation = function() {
      var country = document.getElementById('workCountry').value;
      var state = document.getElementById('workState').value;
      // var district = document.getElementById('workDistrict').value;
      var city = document.getElementById('workCity').value;
      var employee_in = document.getElementById('employee_in').value;
      var profession = document.getElementById('profession').value;

      if (employee_in == "Employed In") {
        document.getElementById('employee_ins').innerHTML = " *please select this field";
        document.getElementById('employee_in').focus();
        return false;
      } else {
        document.getElementById('employee_ins').innerHTML = " ";
      }
      if (profession == "Select Profession") {
        document.getElementById('professions').innerHTML = " *please select profession";
        document.getElementById('profession').focus();
        return false;
      } else {
        document.getElementById('professions').innerHTML = " ";
      }
      if (country == "Select Country") {
        document.getElementById('groom_countrys').innerHTML = " *please select country";
        document.getElementById('workCountry').focus();
        return false;
      } else {
        document.getElementById('groom_countrys').innerHTML = " ";
      }

      /*if(state == "Select State")
      {
         document.getElementById('state_ids').innerHTML = " *please select state ";
         document.getElementById('workState').focus();
         return false;
      }else {
          document.getElementById('state_ids').innerHTML = " ";
      }*/

      // if(district == "Select District")
      // {
      //    document.getElementById('workDistricts').innerHTML = " *please select district ";
      //    document.getElementById('workDistrict').focus();
      //    return false;
      // }else {
      //     document.getElementById('workDistricts').innerHTML = " ";
      // }

      /* if(city == "")
       {
          document.getElementById('workCitys').innerHTML = " * please enter city";
          return false;
          document.getElementById('workCity').focus();
       }else {
           document.getElementById('workCitys').innerHTML = " ";
       }
       if((city.length < 3))
       {
          document.getElementById('workCitys').innerHTML = " * please fill the city with minimum 3 characters";
           document.getElementById('city').focus();
          return false;
       }else {
           document.getElementById('workCitys').innerHTML = " ";
       }
       if(!isNaN(city))
       {
          document.getElementById('workCitys').innerHTML = " * please enter only characters";
           document.getElementById('city').focus();
          return false;
       }else {
           document.getElementById('workCitys').innerHTML = " ";
       }*/
    }

    // For profession detail update
    $("form#proffesionForm").submit(function(e) {
      e.preventDefault();

      var profStatus = professionValidation();
      if (profStatus == true || profStatus == undefined) {
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/proffesionDetailUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res) {
            if (res) {
              alert('Profession Details updated successfully.');
              window.location.reload();
            } else {
              alert('Profession Details update failed.');
            }
          }
        });
      }
    });

    // For Degree
    getdegree = function(valu, n, nextdeg) {
      var ndeg = '';
      if (nextdeg) {
        ndeg = nextdeg;
      }
      $.ajax({
        type: "POST",
        url: '<?php echo base_url(); ?>admin/ws/getdegreeUser',
        data: {
          valu: valu,
          seldeg: ndeg
        },
        async: false,
        complete: function(data) {
          var op = data.responseText.trim();
          //alert(n);
          $("#education_degree_" + n).html(op);

        }
      });
    }
    getdegree('<?php echo $primary_info['heighst_education']; ?>');

    // For specialization
    getspecialization = function(valu, n, nextdeg) {
      var ndeg = '';
      var hedid = '';
      if (nextdeg) {
        ndeg = nextdeg;
      }
      if ($('#highest_education_' + n).val()) {
        hedid = $('#highest_education_' + n).children(":selected").attr("id"); //$('#highest_education_'+n).val();  
      }

      $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>admin/ws/getspecializationUser',
        data: {
          valu: valu,
          seldeg: ndeg,
          hedid: hedid
        },
        complete: function(data) {
          var op = data.responseText.trim();
          //alert(op);
          $("#specialization_" + n).html(op);
        }
      });
    }
    getspecialization('<?php echo $primary_info['education_degree']; ?>');

    // For Hidden div 
    employee = function(valu) {
      if ((valu == "Student") || (valu == "Not-Working")) {
        $('#hidedata').hide();
        $("#currency").val("");
        $("#monthlySalary").val("");
        $("#companys").val("");
        if (valu == "Not-Working") {
          $('.hide_not_working').hide();
        }
      } else {
        $('.hide_not_working').show();
        $('#hidedata').show();
      }
    }
  });

  function getalldeg() {
    getdegree($('#select_education_1').val(), 1, $('#select_education_1').attr('rel'));
    getspecialization($('#education_degree_1').val(), 1, $('#select_education_1').attr('rel1'));

    getdegree($('#highest_education_2').val(), 2, $('#highest_education_2').attr('rel'));
    getspecialization($('#education_degree_2').val(), 2, $('#highest_education_2').attr('rel1'));

    getdegree($('#highest_education_3').val(), 3, $('#highest_education_3').attr('rel'));
    getspecialization($('#education_degree_3').val(), 3, $('#highest_education_3').attr('rel1'));

    getdegree($('#highest_education_4').val(), 4, $('#highest_education_4').attr('rel'));
    getspecialization($('#education_degree_4').val(), 4, $('#highest_education_4').attr('rel1'));






  }
   $(document).ready(function(){
        $(".close").click(function() {
          $(document.body).removeClass('modal-open');
    $('.modal-backdrop').remove();
        });
});
</script>
</body>

</html>
<style type="text/css">
  .datepick select {
    padding: 6px 6px !important;
  }

  .modal-header {
    background-color: #ff5a60;
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


<div> 
<div class="new-side-content">
   <div id="page-inner" style="background:#ffffff">
       <div class="container" style="margin-top:40px;">
           <div class="row col-xs-12" style="border: 1px solid #f2f2f2;box-shadow: 0px 0px 10px 0px #f2f2f2;padding-right: 0;padding-left: 0;">
                       <?php $user_id=$this->uri->segment(3);  ?>
               
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
                    <ul class="bxslider" style="width:100%;height:auto;overflow: hidden;text-align: center;">
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
                  <p style="padding: 10px 0;"><?php echo $primary_info['first_name']." ".$primary_info['last_name']; ?></p>
                  <p style="color: #17a554"><?php echo $primary_info['profile_id']; ?></p>
                  <p><?php echo $primary_info['registered_on']; ?></p>
                </div>
                  <div class="sidebar"> 
                   <ul class="dropdown-content">
                       
    <a class="<?php if($this->uri->segment(2)=="edit_profile" && $this->uri->segment(2)=="edit_profile") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_profile/<?php echo $user_id; ?>">Education & Profession Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_property") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_property/<?php echo $user_id; ?>">Property Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_parents") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_parents/<?php echo $user_id; ?>">Parents Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_siblings") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_siblings/<?php echo $user_id; ?>">Sibling Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_images") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_images/<?php echo $user_id; ?>">Update Images</a>
    
    <a class="<?php if($this->uri->segment(2)=="edit_relatives") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_relatives/<?php echo $user_id; ?>">Relatives Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_astro") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_astro/<?php echo $user_id; ?>">Astro Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_contact_info") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_contact_info/<?php echo $user_id; ?>">Contact Info</a>
    <a class="<?php if($this->uri->segment(2)=="edit_partner_preferences") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_partner_preferences/<?php echo $user_id; ?>">Partner Preferences</a>
    <!-- <a class="<?php if($this->uri->segment(2)=="edit_religion") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_religion/<?php echo $user_id; ?>">Religion Details</a>
    <a class="<?php if($this->uri->segment(2)=="edit_profession") { echo "active-menu"; } ?>" href="<?php echo site_url();?>admin/edit_profession/<?php echo $user_id; ?>">Education & Profession Details</a> -->
            
  </ul>
  
                </div></div>
               <!-- </div> -->
               
               <div class="col-md-9 no-padding">
      <!-- <?php if(isset($msg)){ ?>
          <div class="alert alert-info alert-dismissible">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong><?php echo $msg ?></strong> 
          </div>
        <?php }?> -->
                         <div class="col-xs-12" style="padding-left: 0px;padding-right: 0px;">
                <!-- <h1 class="page-header">
                <i class="fa fa-user" aria-hidden="true"></i> Basic Details</small>
                </h1> -->
      
      
      
				 <div class="col-xs-12 view-profile">
          <span><p class="tabHeading">Parents Details</p></span>
          <a data-toggle="modal" data-target="#parentsDetailModal" class="btn btn-primary updateButton" onclick="getParentsDataForUpdate()">Edit Parents Details</a>
          <div class="DetailDiv">
              
            <table border="0">
              <tr>
                <td><h5>Father Name</h5></td><td>: <?php echo $parents_info['father_name'];?></td>
              </tr>
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $parents_info['father_education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession</h5></td><td>: <?php echo $parents_info['father_profession'];?></td>
              </tr>
               <?php if($parents_info['father_semiprof']==2){?>
               <tr>
                <td><h5><em>Semi Profession</em></h5></td><td>: <em><?php echo $parents_info['father_semiprof_det'];?></em></td>
              </tr>
              <?php } ?>
              <tr>
                <td><h5>Father Contact No</h5></td><td>: <?php if($parents_info['father_mobile']!="false"){ echo $parents_info['father_mobile']; } else { echo ""; }?></td>
              </tr>
              <tr>
                <td><h5>Father Email</h5></td><td>: <?php echo $parents_info['father_email'];?></td>
              </tr>
              <tr>
                <td><h5>Father's Father Name</h5></td><td>: <?php echo $parents_info['fathers_father_name'];?></td>
              </tr>
              <tr>
                <td><h5>Father's Mother Name</h5></td><td>: <?php echo $parents_info['father_mother_name'];?></td>
              </tr>
              <tr>
                <td><h5>Father's Father State</h5></td><td>: <?php echo $parents_info['fathers_father_state'];?></td>
              </tr>
              <tr>
                <td><h5>Father's Father District</h5></td><td>: <?php echo $parents_info['fathers_father_district'];?></td>
              </tr> 
              <tr>
                <td><h5>Native Place</h5></td><td>: <?php echo $parents_info['fathers_father_native_place'];?><?php if($parents_info['father_natplace_d']=='1'){?> (<em>Don't Display</em>)<?php } ?></td>
              </tr>

              <tr>
                <td><h5 style="margin-top: 25px;">Mother Name</h5></td><td>: <?php echo $parents_info['mother_name'];?></td>
              </tr>
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $parents_info['mother_education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession</h5></td><td>: <?php echo $parents_info['mother_profession'];?></td>
              </tr>
              
              <?php if($parents_info['mother_semiprof']==2){?>
               <tr>
                <td><h5><em>Semi Profession</em></h5></td><td>: <em><?php echo $parents_info['mother_semiprof_det'];?></em></td>
              </tr>
              <?php } ?>
              
              <tr>
                <td><h5>Mother Contact No</h5></td><td>: <?php echo $parents_info['mother_mobile'];?></td>
              </tr>
              <tr>
                <td><h5>Mother Email</h5></td><td>: <?php echo $parents_info['mother_email'];?></td>
              </tr>
              
              <tr>
                <td><h5>Mother Father's Name</h5></td><td>: <?php echo $parents_info['mothers_father_name'];?></td>
              </tr>
              <tr>
                <td><h5>Mother Mother's Name</h5></td><td>: <?php echo $parents_info['mother_mother_name'];?></td>
              </tr>
              <tr>
                <td><h5>Mother Father's State</h5></td><td>: <?php echo $parents_info['mothers_father_state'];?></td>
              </tr>
              <tr>
                <td><h5>Mother Father's District</h5></td><td>: <?php echo $parents_info['mothers_father_district'];?></td>
              </tr>
              <tr>
                <td><h5>Native Place</h5></td><td>: <?php echo $parents_info['mothers_father_native_place'];?><?php if($parents_info['mother_natplace_d']=='1'){?> (<em>Don't Display</em>)<?php } ?></td>
              </tr>
              <tr>
                <td><h5>Parents Current Location</h5></td><td>: <?php echo $contact_info['city'];?></td>
              </tr>
            </table>
          </div>
         </div>
	  </div>
    </div> 
    <!-- Modal -->
    <div class="modal fade" id="parentsDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Update Parent Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <form id="parentForm">
              <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Father Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="father_name" id="father_name"/>
                      <span id="father-names" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="father_education" id="father_education"/>
                      <span id="father-educations" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="father_profession" id="father_profession"/>
                      <span id="father-professions" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Select Semi Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select name="sel_semiprof" class="sel_semiprof form-control">
                      <option value="1" <?php if($parents_info['father_semiprof']=='1') echo 'selected="selected"';?>>Not Required</option>
                      <option value="2" <?php if($parents_info['father_semiprof']=='2') echo 'selected="selected"';?>>Required</option>
                      </select>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="row <?php if($parents_info['father_semiprof']=='1'){?>dn<?php }?> semiprofdiv">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Semi Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $parents_info['father_semiprof_det'];?>" name="father_semiprofession" id="father_semiprofession"/>
                      <span id="father-professions" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Father Contact No : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="father_mobile" id="father_mobile"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Father Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="father_email" id="father_email"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Father's Father Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="fathers_father_name" id="fathers_father_name"/>
                    </div>
                  </div>
                </div>
                
                 <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Father's Mother Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="father_mother_name" id="father_mother_name"/>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Father's Father State : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="fathers_father_state" name="fathers_father_state" onchange="getdistrict(this.value)">
                         <option value="">Select State</option>
                          <?php foreach($states as $value) { ?>
                                  <option  value="<?php echo $value['state'];?>"><?php echo ucwords($value['state']);?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Father's Father District : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="fathers_father_district" name="fathers_father_district">
                           <option value="">Select District</option>
                        </select>         
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Native Place : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control"  name="fathers_father_native_place" id="fathers_father_native_place"/>
                    </div>
                  </div>
                  
                  <div class="col-md-2 col-sm-7 col-xs-6">
                    <div class="form-group">
                     
                      <input title="If Select this checkbox Client can't see Native Place" type="checkbox" class="form-control" name="fathers_father_native_place_disp" value="1"  <?php if($parents_info['father_natplace_d']=='1') echo 'checked="checked"';?> id="fathers_father_native_place_disp"/>
                    </div>
                  </div>
                </div>                    
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Mother Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mother_name" id="mother_name"/>
                      <span id="mother-names" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>                  
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mother_education" id="mother_education"/>
                    </div>
                  </div>
                </div>                  
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mother_profession" id="mother_profession"/>
                    </div>
                  </div>
                </div>      
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Select Semi Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select name="sel_mothersemiprof" class="sel_mothersemiprof form-control">
                      <option value="1" <?php if($parents_info['mother_semiprof']=='1') echo 'selected="selected"';?>>Not Required</option>
                      <option value="2" <?php if($parents_info['mother_semiprof']=='2') echo 'selected="selected"';?>>Required</option>
                      </select>
                    </div>
                  </div>
                  
                  
                </div>
                
                <div class="row <?php if($parents_info['mother_semiprof']=='1'){?>dn<?php }?> mothersemiprofdiv">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Semi Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" value="<?php echo $parents_info['mother_semiprof_det'];?>" name="father_mothersemiprofession" id="father_mothersemiprofession"/>
                      <span id="father-professions" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                  
                  
                </div>
                
                            
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Mother Contact No : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mother_mobile" id="mother_mobile"/>
                    </div>
                  </div>
                </div>                  
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Mother Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mother_email" id="mother_email"/>
                    </div>
                  </div>
                </div>                  
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Mother Father's Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mothers_father_name" id="mothers_father_name"/>
                    </div>
                  </div>
                </div> 
                
                 <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Mother Mother's Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="mother_mother_name" id="mother_mother_name"/>
                    </div>
                  </div>
                </div> 
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label class="motherLabel">Mother's Father State : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="mothers_father_state" name="mothers_father_state" onchange="getdistrictMother(this.value)">
                         <option value="">Select State</option>
                          <?php foreach($states as $value) { ?>
                                  <option  value="<?php echo $value['state'];?>"><?php echo ucwords($value['state']);?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label class="motherLabel">Mother's Father District : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="mothers_father_district" name="mothers_father_district">
                           <option value="">Select District</option>
                        </select>         
                    </div>
                  </div>
                </div>   
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="motherLabel">Native Place : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" value="" name="mothers_father_native_place" id="mothers_father_native_place"/>
                    </div>
                  </div>
                  <div class="col-md-2 col-sm-7 col-xs-6">
                    <div class="form-group">
                     
                      <input title="If Select this checkbox Client can't see Native Place" type="checkbox" class="form-control" name="mothers_father_native_place_disp" id="mothers_father_native_place_disp" value="1"  <?php if($parents_info['mother_natplace_d']=='1') echo 'checked="checked"';?>/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label class="">Parents Current Location : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="parents_current_city" id="parents_current_city" value="<?php echo $contact_info['city'];?>"/>
                    </div>
                  </div>
                </div> 
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group" style="float: right;">
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
  </div>
</div>
<script src="<?php echo base_url(); ?>/js/jquery-1.12.4.js"></script>
<script>
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

$('.sel_semiprof').change(function(){
	
	var $this=$(this);
	
	if($this.val()=='1')
	{
		$('.semiprofdiv').addClass('dn');
		 
	}
	
	if($this.val()=='2')
	{
		$('.semiprofdiv').removeClass('dn');
		
	}
	$('#father_semiprofession').val('');
	});
	
$('.sel_mothersemiprof').change(function(){
	
	var $this=$(this);
	
	if($this.val()=='1')
	{
		$('.mothersemiprofdiv').addClass('dn');
		 
	}
	
	if($this.val()=='2')
	{
		$('.mothersemiprofdiv').removeClass('dn');
		
	}
	$('#father_mothersemiprofession').val('');
	});	
    // For all District
    getdistrict =  function(valu)
    {
      var valu = valu;
        $.ajax({ 
           type: "POST", 
           url: '<?php echo site_url();?>admin/ws/getdistrictsADM',
           data: {valu: valu},
           complete: function(data){  
            var op = data.responseText.trim();
            $("#fathers_father_district").html(op);
           }
        });
    }
    getdistrict('<?php echo $parents_info['fathers_father_state']; ?>');

    // For all District
    getdistrictMother =  function(valu)
    {
      var valu = valu;
        $.ajax({ 
           type: "POST", 
           url: '<?php echo site_url();?>admin/ws/getdistrictsADM',
           data: {valu: valu},
           complete: function(data){  
            var op = data.responseText.trim();
            $("#mothers_father_district").html(op);
           }
        });
    }
    getdistrictMother('<?php echo $parents_info['mothers_father_state']; ?>');

    // For Basic Detail Modal Popup data
    getParentsDataForUpdate = function(){

      var userId = <?php echo $this->uri->segment(3) ?>;

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getParentsDataForUpdate",
            type: "POST",
            data: {user_id: userId},
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != "")
              {
                $('#father_name').val(dt.father_name);
                $('#father_education').val(dt.father_education);
                $('#father_profession').val(dt.father_profession);
                $('#father_mobile').val(dt.father_mobile);
                $('#father_email').val(dt.father_email);
                $('#fathers_father_name').val(dt.fathers_father_name);
                $('#father_mother_name').val(dt.father_mother_name);
                $("#fathers_father_state > [value='" + dt.fathers_father_state + "']").attr("selected", "true");
                // $("#fathers_father_state").trigger("onchange");
                $("#fathers_father_district > [value='" + dt.fathers_father_district + "']").attr("selected", "true");

                $('#fathers_father_native_place').val(dt.fathers_father_native_place);
                $('#mother_name').val(dt.mother_name);
                $('#mother_education').val(dt.mother_education);
                $('#mother_profession').val(dt.mother_profession);
                $('#mother_mobile').val(dt.mother_mobile);
                $('#mother_email').val(dt.mother_email);
                $('#mothers_father_name').val(dt.mothers_father_name);
                 $('#mother_mother_name').val(dt.mother_mother_name);
                $("#mothers_father_state > [value='" + dt.mothers_father_state + "']").attr("selected", "true");
                // $("#mothers_father_state").trigger("onchange");
                $("#mothers_father_district > [value='" + dt.mothers_father_district + "']").attr("selected", "true");
                $('#mothers_father_native_place').val(dt.mothers_father_native_place);
              }
            }
      });
    }

    validation = function()
    {
       var fathername = document.getElementById('father_name').value;
       var fatherprofession = document.getElementById('father_profession').value;
       var fathereducation = document.getElementById('father_education').value;
       var mothername = document.getElementById('mother_name').value;
       
           
           if(fathername == "")
           {
               document.getElementById('father-names').innerHTML = " *please enter fathername";
                document.getElementById('father_name').focus();  
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(!isNaN(fathername))
           {
               document.getElementById('father-names').innerHTML = " * please enter only characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(fathername.length < 3)
           {
               document.getElementById('father-names').innerHTML = " name should be grater than 2 characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
          /* if(fathereducation == "")
           {
               document.getElementById('father-educations').innerHTML = " *please enter fathereducation";
               document.getElementById('father_education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
            if(!isNaN(fathereducation))
           {
               document.getElementById('father-educations').innerHTML = " * please enter only characters";
                document.getElementById('father_education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
            if(fathereducation.length < 3)
           {
               document.getElementById('father-educations').innerHTML = " profession should be grater than 2 characters";
                document.getElementById('father_education').focus();
               return false;
           }else {
                document.getElementById('father-educations').innerHTML = " ";
           }
           if(fatherprofession == "")
           {
               document.getElementById('father-professions').innerHTML = " *please enter fatherprofession";
               document.getElementById('father_profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
            if(!isNaN(fatherprofession))
           {
               document.getElementById('father-professions').innerHTML = " * please enter only characters";
               document.getElementById('father_profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }*/
            if(fatherprofession!= "" && fatherprofession.length < 3)
           {
               document.getElementById('father-professions').innerHTML = "Profession should be grater than 2 characters";
               document.getElementById('father_profession').focus();
               return false;
           }else {
                document.getElementById('father-professions').innerHTML = " ";
           }
           
           
           
           if(mothername == "")
           {
               document.getElementById('mother-names').innerHTML = "Please enter Mother Name";
               document.getElementById('mother_name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(!isNaN(mothername))
           {
               document.getElementById('mother-names').innerHTML = "Please enter only characters";
                document.getElementById('mother_name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(mothername.length < 3)
           {
               document.getElementById('mother-names').innerHTML = "Profession should be grater than 2 characters";
                document.getElementById('mother_name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
    }

    // For parents detail update
    $("form#parentForm").submit(function(e){
      e.preventDefault();
      var status = validation();
      if(status == true || status == undefined)
      { 
        //var data = new FormData(this);
        //alert(data.get('parents_current_city'));
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/parentsDetailUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
             
             alert('Parents Details updated successfully.');
             window.location.reload();
            }
            else
            {              
              alert('Parents Details update failed.');
            }
          }
        });
      }
    });

  });
   $(document).ready(function(){
        $(".close").click(function() {
          $(document.body).removeClass('modal-open');
    $('.modal-backdrop').remove();
        });
});
</script> 
</body>
</html>   
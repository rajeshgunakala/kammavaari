<style type="text/css">
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
    border-radius: 4px;
}
.profileDet {
  height: 150px;
}
p.tabHeading {
  padding: 5px 15px;
  background-color: #17a554;
  color: #fefffe;
  font-size: 18px;
}

p span.tabHeading2 {
  color: #f6f9f9;
  margin-left: 70px;
}
.imgBlock img {
  border: 2px solid darkred;
  border-radius: 5px;
}
.profileDet {
  padding: 20px;
  height: auto;
  margin: 0 20px 20px 0;
}
.DetailDiv {
  padding: 15px;
}
.DetailDiv table tbody tr {
  line-height: 1.8em;
}
.deletesiblings, .updateButton {
  float: right;
  margin-top: 5px;
  margin-right: 5px;
}
.DetailDiv h5 {
  font-size: 16px;
  font-weight: 600;
  color: #8c8b8b;
}
.DetailDiv h4 {
  font-size: 20px;
  font-weight: 600;
  color: #8c8b8b;
}

.DetailsubDiv tr:first-child td h5{
  color: red;
}
.DetailsubDiv tr:first-child td {
  color: red;
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

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.ImgModal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
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
.contentModal, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
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

#SistersDetailModal .col-md-4 {
  padding-left: 10px;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .contentModal {
    width: 100%;
  }
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}

</style>
<div> 
<div class="new-side-content">
   <div id="page-inner" style=" background:#ffffff">
       <div class="container" style="margin-top:40px;">
           <div class="row col-xs-12" style="border: 1px solid #f2f2f2;box-shadow: 0px 0px 10px 0px #f2f2f2;padding-right: 0;padding-left: 0;">
                       <?php $user_id=$this->uri->segment(3)  ?>
               
               <div class="col-md-3 no-padding" style="border-right: 2px solid darkred;background: #eeeeee;">
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
          <span><p class="tabHeading">Sibling  Details</p></span>
          <a data-toggle="modal" data-target="#siblingDetailModal" class="btn btn-primary updateButton" onclick="getSiblingDataForUpdate()">Edit Sibling Count</a>
          <div class="DetailDiv">
            <table border="0">
              <tr>
                <td width="20%"><h5>No Of Brothers</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_brothers'];?></td>
                <td width="25%"><h5>No Of Sisters</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_sisters'];?></td>
              </tr>

              <tr>
              <?php if($siblings_info['no_of_brothers'] != "0") { ?>
                <td width="20%"><h5>No Of Younger Brother</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_younger_brothers'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              <?php if($siblings_info['no_of_sisters'] != "0") { ?>
                <td width="25%"><h5>No Of Younger Sister</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_younger_sisters'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              </tr>
              
              <tr>
              <?php if($siblings_info['no_of_brothers'] != "0") { ?>
                <td width="20%"><h5>No Of Elder Brother</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_elder_brothers'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              <?php if($siblings_info['no_of_sisters'] != "0") { ?>
                <td width="25%"><h5>No Of Elder Sister</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_elder_sisters'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              </tr>
              <!-- <tr>
                <td><a class="btn btn-primary updateButton">Add Younger Brother</a></td>
              </tr> -->
            </table>
          </div>
          <div class="DetailDiv">
            
            <a data-toggle="modal" data-target="#addSistersDetailModal" class="btn btn-primary">Add Sister Details</a>

            <a data-toggle="modal" data-target="#addBrotherDetailModal" class="btn btn-primary">Add Brother Details</a>
          </div>
          <?php foreach($sister_info as $sister_info) {?>
          <span><p class="tabHeading">Sister Details <span class="tabHeading2">Modified By : <?php echo $sister_info['updated_by']; ?> On <?php echo $sister_info['updated_at']; ?></span>  </p>
          </span>
          <a href="javascript:void(0)" class="btn btn-danger pull-right btn-sm deletesiblings" rel="sisterdel" id="<?php echo $sister_info['id'];?>" >Delete</a> &nbsp;&nbsp;&nbsp; <a data-toggle="modal" data-target="#SistersDetailModal" class="btn btn-primary btn-sm  updateButton" onclick="getSistersDataForUpdate(<?php echo $sister_info['id'];?>)">Edit Sister Details</a>
         
          <div class="DetailDiv DetailsubDiv">
            <table border="0">
              <tr>
                <td><h5>Sister Name</h5></td><td>: <?php echo $sister_info['sister_name'];?>  (<?php echo $sister_info['sister_type'];?>)</td>
              </tr>
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $sister_info['sister_education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession</h5></td><td>: <?php echo $sister_info['sister_profession'];?></td>
              </tr>
              <tr>
                <td><h5>Job Location</h5></td><td>: <?php echo $sister_info['sister_joblocation'];?></td>
              </tr>
              <tr>
                <td><h5>Contact Nos</h5></td><td>: <?php echo $sister_info['sister_mobile'];?></td>
              </tr>
              <tr>
                <td><h5>Email</h5></td><td>: <?php echo $sister_info['sister_email'];?></td>
              </tr>
              <?php if($sister_info['married_type'] == "married") {?> 
              <tr>
                <td><h4>Husband Name</h4></td><td>: <?php echo $sister_info['husband_name'];?></td>
              </tr>              
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $sister_info['husband_education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession Category</h5></td><td>: <?php echo $sister_info['husband_profession_category'];?></td>
              </tr>
              <tr>
                <td><h5>Designation</h5></td><td>: <?php echo $sister_info['sister_husband_designation'];?></td>
              </tr>
              <tr>
                <td><h5>Job Location</h5></td><td>: <?php echo $sister_info['husband_joblocation'];?></td>
              </tr>
              <tr>
                <td><h5>Husband Fathers Contact</h5></td><td>: <?php echo $sister_info['husband_father_contact'];?></td>
              </tr>
              <tr>
                <td><h5>Native Place</h5></td><td>: <?php echo $sister_info['husband_father_nativeplace'];?></td>
              </tr>
              <?php }?>
            </table>
          </div>
          <?php } ?>

          <?php foreach($brother_info as $brother_info) {?>
          <span><p class="tabHeading">Brother Details <span class="tabHeading2">Modified By : <?php echo $brother_info['updated_by']; ?> On <?php echo $brother_info['updated_at']; ?></span>  </p>
          </span>
        <a href="javascript:void(0)" class="btn btn-danger pull-right btn-sm deletesiblings" rel="brotherdel" id="<?php echo $brother_info['id'];?>" >Delete</a> &nbsp;&nbsp;&nbsp;   <a data-toggle="modal" data-target="#BrotherDetailModal" class="btn btn-primary updateButton" onclick="getBrotherDataForUpdate(<?php echo $brother_info['id'];?>)">Edit Brother Details</a>
          <div class="DetailDiv DetailsubDiv">
            <table border="0">
              <tr>
                <td><h5>Brother Name</h5></td><td>: <?php echo $brother_info['brother_name'];?>  (<?php echo $brother_info['brother_type'];?>)</td>
              </tr>
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $brother_info['brother_education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession</h5></td><td>: <?php echo $brother_info['brother_profession'];?></td>
              </tr>
              <tr>
                <td><h5>Job Location</h5></td><td>: <?php echo $brother_info['brother_joblocation'];?></td>
              </tr>
              <tr>
                <td><h5>Contact Nos</h5></td><td>: <?php echo $brother_info['brother_mobile'];?></td>
              </tr>
              <tr>
                <td><h5>Email</h5></td><td>: <?php echo $brother_info['brother_email'];?></td>
              </tr>
              <?php if($brother_info['married_type'] == "married") {?> 
              <tr>
                <td><h4>Wife Name</h4></td><td>: <?php echo $brother_info['wife_name'];?></td>
              </tr>              
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $brother_info['wife_education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession Category</h5></td><td>: <?php echo $brother_info['wife_profession_category'];?></td>
              </tr>
              <tr>
                <td><h5>Designation</h5></td><td>: <?php echo $brother_info['brother_wife_designation'];?></td>
              </tr>
              <tr>
                <td><h5>Job Location</h5></td><td>: <?php echo $brother_info['wife_joblocation'];?></td>
              </tr>
              <tr>
                <td><h5>Wife Fathers Contact</h5></td><td>: <?php echo $brother_info['wife_father_contact'];?></td>
              </tr>
              <tr>
                <td><h5>Native Place</h5></td><td>: <?php echo $brother_info['wife_father_nativeplace'];?></td>
              </tr>
              <?php }?>
            </table>
          </div>
          <?php } ?>
         </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="siblingDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Update Sibling Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <form id="siblingForm">
              <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label style="font-weight: 600;">No Of Brothers : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_brothers" name="no_of_brothers" >
                         <option value="0">Select No Of Brothers</option>
                         <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                         <!--<option value="0">0</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                         <option value="3">3</option>
                         <option value="4">4</option>-->
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Younger Brothers : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_younger_brothers" name="no_of_younger_brothers">
                         <option value="0" data-val="0">Select No Of Younger Brothers</option>
                       <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Elder Brothers : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_elder_brothers" name="no_of_elder_brothers">
                         <option value="0" data-val="0">Select No Of Elder Brothers</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label style="font-weight: 600;">No Of Sisters : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_sisters" name="no_of_sisters">
                         <option value="0">Select No Of Sisters</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Younger Sisters : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_younger_sisters" name="no_of_younger_sisters">
                         <option value="0" data-val="0">Select No Of Younger Sisters</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Elder Sisters : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_elder_sisters" name="no_of_elder_sisters">
                         <option value="0" data-val="0">Select No Of Elder Sisters</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
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

    <!--Update Sister Modal -->
    <div class="modal fade" id="SistersDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
                <h4 class="modal-title">Update Sister Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          
          </div>
          <div class="modal-body">
            <form id="sisterForm">
              <input type="hidden" name="userIds" id="userIds" value="<?php echo $this->uri->segment(3) ?>;">
              <input type="hidden" name="sisid" id="sisid">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="sister_type" id="younger" value="younger">
                      <label for="younger">Younger</label>
                      <span class="check"></span>


                      <input type="radio" name="sister_type" id="elder" value="elder">
                      <label for="elder">Elder</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="sister_type_error" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_name" id="sister_name"/>
                    <span id="sister_name_error" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_education" id="sister_education"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_profession" id="sister_profession"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>JobLocation : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_joblocation" id="sister_joblocation"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Nos : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_mobile" id="sister_mobile"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_email" id="sister_email"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Married Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="married_type" id="married" value="married">
                      <label for="married">Married</label>
                      <span class="check"></span>


                      <input type="radio" name="married_type" id="unmarried" value="unmarried">
                      <label for="unmarried">Unmarried</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="married_type_error" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                
                <div class="HusbandDiv" style="display:none">                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <label>Husband Name : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_name" id="sister_husband_name"/>
                        <span id="husband_name_error" class="text-danger font-weight-bold"></span>
                      </div>
                    </div>
                  </div>                    
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_education" id="sister_husband_education"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession Category : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_profession_category" id="sister_husband_profession_category"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Designation : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_designation" id="sister_husband_designation"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Job Location : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_joblocation" id="sister_husband_joblocation"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Husband Fathers Contact : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_father_contact" id="sister_husband_father_contact"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Native Place : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_father_nativeplace" id="sister_husband_father_nativeplace"/>
                      </div>
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

    <!--Add Sister Modal -->
    <div class="modal fade" id="addSistersDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
               <h4 class="modal-title">Add Sister Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
           
          </div>
          <div class="modal-body">
            <form id="addsisterForm">
              <input type="hidden" name="userIdsadd" id="userIdsadd" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="sister_typeadd" id="youngeradd" value="younger" checked>
                      <label for="younger">Younger</label>
                      <span class="check"></span>


                      <input type="radio" name="sister_typeadd" id="elderadd" value="elder">
                      <label for="elder">Elder</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="sister_type_erroradd" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_nameadd" id="sister_nameadd"/>
                    <span id="sister_name_erroradd" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_educationadd" id="sister_educationadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_professionadd" id="sister_professionadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>JobLocation : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_joblocationadd" id="sister_joblocationadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Nos : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_mobileadd" id="sister_mobileadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_emailadd" id="sister_emailadd"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Married Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="married_typeadd" id="sismarriedadd" value="married">
                      <label for="married">Married</label>
                      <span class="check"></span>


                      <input type="radio" name="married_typeadd" id="sisunmarriedadd" value="unmarried" checked>
                      <label for="unmarried">Unmarried</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="married_type_erroradd" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                
                <div class="HusbandDivadd" style="display:none">                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <label>Husband Name : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_nameadd" id="sister_husband_nameadd"/>
                       <span id="husband_name_erroradd" class="text-danger font-weight-bold"></span>
                      </div>
                    </div>
                  </div>                    
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_educationadd" id="sister_husband_educationadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession Category : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_profession_categoryadd" id="sister_husband_profession_categoryadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Designation : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_designationadd" id="sister_husband_designationadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Job Location : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_joblocationadd" id="sister_husband_joblocationadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Husband Fathers Contact : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_father_contactadd" id="sister_husband_father_contactadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Native Place : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_father_nativeplaceadd" id="sister_husband_father_nativeplaceadd"/>
                      </div>
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

    <!--Add Brother Modal -->
    <div class="modal fade" id="addBrotherDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
               <h4 class="modal-title">Add Brother Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
           
          </div>
          <div class="modal-body">
            <form id="addbrotherForm">
              <input type="hidden" name="brotherIdsadd" id="brotherIdsadd" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="brother_typeadd" id="broyoungeradd" value="younger" checked>
                      <label for="younger">Younger</label>
                      <span class="check"></span>


                      <input type="radio" name="brother_typeadd" id="broelderadd" value="elder">
                      <label for="elder">Elder</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="brother_type_erroradd" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_nameadd" id="brother_nameadd"/>
                       <span id="brother_name_erroradd" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_educationadd" id="brother_educationadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_professionadd" id="brother_professionadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>JobLocation : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_joblocationadd" id="brother_joblocationadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Nos : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_mobileadd" id="brother_mobileadd"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_emailadd" id="brother_emailadd"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Married Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="bro_married_typeadd" id="bromarriedadd" value="married">
                      <label for="married">Married</label>
                      <span class="check"></span>


                      <input type="radio" name="bro_married_typeadd" id="brounmarriedadd" value="unmarried" checked>
                      <label for="unmarried">Unmarried</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="bromarried_type_erroradd" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                
                <div id="Bro_WifeDivadd" style="display:none">                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <label>Wife Name : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_nameadd" id="brother_wife_nameadd"/>
                       <span id="brother_wife_erroradd" class="text-danger font-weight-bold"></span>
                      </div>
                    </div>
                  </div>                    
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_educationadd" id="brother_wife_educationadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession Category : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_profession_categoryadd" id="brother_wife_profession_categoryadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Designation : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_designationadd" id="brother_wife_designationadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Job Location : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_joblocationadd" id="brother_wife_joblocationadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Wife Fathers Contact : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_father_contactadd" id="brother_wife_father_contactadd"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Native Place : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_father_nativeplaceadd" id="brother_wife_father_nativeplaceadd"/>
                      </div>
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

    <!--Update Brother Modal -->
    <div class="modal fade" id="BrotherDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title">Update Brother Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <form id="brotherForm">
              <input type="hidden" name="brotheruserIds" id="brotheruserIds" value="<?php echo $this->uri->segment(3); ?>">
              <input type="hidden" name="broid" id="broid">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="brother_type" id="broupyounger" value="younger">
                      <label for="younger">Younger</label>
                      <span class="check"></span>


                      <input type="radio" name="brother_type" id="broupelder" value="elder">
                      <label for="elder">Elder</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="brother_type_error" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_name" id="brother_name"/>
                    <span id="brother_name_error" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_education" id="brother_education"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_profession" id="brother_profession"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>JobLocation : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_joblocation" id="brother_joblocation"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Nos : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_mobile" id="brother_mobile"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_email" id="brother_email"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Married Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="brother_married_type" id="bromarried" value="married">
                      <label for="married">Marriedd</label>
                      <span class="check"></span>


                      <input type="radio" name="brother_married_type" id="brounmarried" value="unmarried">
                      <label for="unmarried">Unmarried</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="bro_married_type_error" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                
                <div class="wifeDiv" style="display:none">                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <label>Wife Name : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_name" id="brother_wife_name"/>
                        <span id="brother_wife_error" class="text-danger font-weight-bold"></span>
                      </div>
                    </div>
                  </div>                    
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_education" id="brother_wife_education"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession Category : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_profession_category" id="brother_wife_profession_category"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Designation : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_designation" id="brother_wife_designation"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Job Location : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_joblocation" id="brother_wife_joblocation"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Wife Fathers Contact : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_father_contact" id="brother_wife_father_contact"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Native Place : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="brother_wife_father_nativeplace" id="brother_wife_father_nativeplace"/>
                      </div>
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

$('.deletesiblings').on('click',function(){
	
	var $this=$(this);
	//alert($(this).attr('id'));
	if (confirm('Would you like to delete?')) {
		
		$.ajax({
          url: "<?php echo base_url(); ?>admin/ws/deletesiblings",
          type: "POST",
          data: {'delid':$this.attr('id'),'deltype':$this.attr('rel')},
          success: function(res)
          {
			   alert('Siblings Details deleted successfully.');
                window.location.reload();
		  }
        });
		
		 }
	
	
	});
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

    $('#no_of_brothers').on('change', function(e) {
        /*  let selector = $(this).val();
          
          $("#no_of_younger_brothers").val("0");
          $("#no_of_elder_brothers").val("0");

          $("#no_of_younger_brothers > option").hide();
          $("#no_of_younger_brothers > option").filter(function(){return $(this).data('val') <= selector}).show();
          $("#no_of_elder_brothers > option").hide();
          $("#no_of_elder_brothers > option").filter(function(){return $(this).data('val') <= selector}).show();*/
    });

    $('#no_of_sisters').on('change', function(e) {
        /*  let selector = $(this).val();

          $("#no_of_younger_sisters").val("0");
          $("#no_of_elder_sisters").val("0");
          $("#no_of_younger_sisters > option").hide();
          $("#no_of_younger_sisters > option").filter(function(){return $(this).data('val') <= selector}).show();
          $("#no_of_elder_sisters > option").hide();
          $("#no_of_elder_sisters > option").filter(function(){return $(this).data('val') <= selector}).show();*/
    });

    $("input[name='married_type']").click(function() {
        var test = $(this).val();
        if(test == "married")
        {
          $(".HusbandDiv").show();
        }
        else
        {
          $(".HusbandDiv").hide();
          $('#sister_husband_name').val("");
          $('#sister_husband_education').val("");
          $('#sister_husband_profession_category').val("");
          $('#sister_husband_designation').val("");
          $('#sister_husband_joblocation').val("");
          $('#sister_husband_father_contact').val("");
          $('#sister_husband_father_nativeplace').val("");
        }
    });

    // For add sister
    $("input[name='married_typeadd']").click(function() {
        var test = $(this).val();
        if(test == "married")
        {
            
          $(".HusbandDivadd").show();
        }
        else
        {
           
          $(".HusbandDivadd").hide();
          $('#sister_husband_nameadd').val("");
          $('#sister_husband_educationadd').val("");
          $('#sister_husband_profession_categoryadd').val("");
          $('#sister_husband_designationadd').val("");
          $('#sister_husband_joblocationadd').val("");
          $('#sister_husband_father_contactadd').val("");
          $('#sister_husband_father_nativeplaceadd').val("");
        }
    });

    // For married filter brother
    $(document).on("click", "input[type='radio'][name='bro_married_typeadd']", function() {
        var test1 = $(this).val();
        if(test1 == "married")
        {
          $("#Bro_WifeDivadd").show();
        }
        else
        {
          $("#Bro_WifeDivadd").hide();
          $('#brother_wife_nameadd').val("");
          $('#brother_wife_educationadd').val("");
          $('#brother_wife_profession_categoryadd').val("");
          $('#brother_wife_designationadd').val("");
          $('#brother_wife_joblocationadd').val("");
          $('#brother_wife_father_contactadd').val("");
          $('#brother_wife_father_nativeplaceadd').val("");
        }
    });

    // For married filter brother
    $("input[name='brother_married_type']").click(function() {
    
        var test = $(this).val();
        if(test == "married")
        {
          $(".wifeDiv").show();
        }
        else
        {
          $(".wifeDiv").hide();
          $('#brother_wife_nameadd').val("");
          $('#brother_wife_educationadd').val("");
          $('#brother_wife_profession_categoryadd').val("");
          $('#brother_wife_designationadd').val("");
          $('#brother_wife_joblocationadd').val("");
          $('#brother_wife_father_contactadd').val("");
          $('#brother_wife_father_nativeplaceadd').val("");
        }
    });

    // For Basic Detail Modal Popup data
    getSiblingDataForUpdate = function(){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getSiblingDataForUpdate",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              var dt = JSON.parse(res);
              $('#no_of_brothers').val(dt.no_of_brothers);
              $('#no_of_younger_brothers').val(dt.no_of_younger_brothers);
              $('#no_of_elder_brothers').val(dt.no_of_elder_brothers);
              $('#no_of_sisters').val(dt.no_of_sisters);
              $('#no_of_elder_sisters').val(dt.no_of_elder_sisters);
              $('#no_of_younger_sisters').val(dt.no_of_younger_sisters);
            }
      });
    }

    // For parents detail update
    $("form#siblingForm").submit(function(e){
      e.preventDefault();

      var TotalBro = $('#no_of_brothers').val();
      var elBro    = $('#no_of_elder_brothers').val();
      var yoBro    = $('#no_of_younger_brothers').val();

      var TotalSis = $('#no_of_sisters').val();
      var elSis    = $('#no_of_younger_sisters').val();
      var yoSis    = $('#no_of_elder_sisters').val();

      var yoelBro  = parseInt(yoBro) + parseInt(elBro);
      var yoelSis  = parseInt(yoSis) + parseInt(elSis);

      if(TotalBro >= yoelBro)
      {
        if(TotalSis >= yoelSis)
        {
          $.ajax({
            url: "<?php echo base_url(); ?>admin/ws/siblingsDetailUpdate",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(res)
            {
              if(res)
              {
                alert('Siblings Details updated successfully.');
                window.location.reload();
              }
              else
              {              
                alert('Siblings Details update failed.');
              }
            }
          });          
        }
        else
        {
          alert("Please enter correct no of sister");          
        }
      }
      else
      {
        alert("Please enter correct no of brothers");
      }
    });

    // For Basic Detail Modal Popup data
    getSistersDataForUpdate = function(id){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getSistersDataForUpdate",
            type: "POST",
            data: {
                user_id: userId,
                id: id
            },
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != null)
              {   
                if(dt.sister_type != "")
                {
                  $("input[value="+dt.sister_type+"]").attr('checked', 'checked');
                }
                $('#sisid').val(dt.id);
                $('#sister_name').val(dt.sister_name);
                $('#sister_education').val(dt.sister_education);
                $('#sister_profession').val(dt.sister_profession);
                $('#sister_joblocation').val(dt.sister_joblocation);
                $('#sister_mobile').val(dt.sister_mobile);
                $('#sister_email').val(dt.sister_email);
                if(dt.married_type != "")
                {
                  $("input[name='married_type'][value="+dt.married_type+"]").attr('checked', 'checked').trigger("click");
                }
                $('#sister_husband_name').val(dt.husband_name);
                $('#sister_husband_education').val(dt.husband_education);
                $('#sister_husband_profession_category').val(dt.husband_profession_category);
                $('#sister_husband_designation').val(dt.sister_husband_designation);
                $('#sister_husband_joblocation').val(dt.husband_joblocation);
                $('#sister_husband_father_contact').val(dt.husband_father_contact);
                $('#sister_husband_father_nativeplace').val(dt.husband_father_nativeplace);
              }
            }
      });
    }

    sisupdatevalidation = function()
    {
       var name       = document.getElementById('sister_name').value;
       var younger    = document.getElementById('younger').checked;
       var elder      = document.getElementById('elder').checked;
       var married    = document.getElementById('married').checked;
       var unmarried  = document.getElementById('unmarried').checked;
       var Hname      = document.getElementById('sister_husband_name').value;
       
       if(name == "")
       {
           document.getElementById('sister_name_error').innerHTML = "Please enter name";
           document.getElementById('sister_name').focus();
           return false;
       }else {
            document.getElementById('sister_name_error').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('sister_type_error').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('sister_type_error').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('married_type_error').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('married_type_error').innerHTML = " ";
       }

       /*if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('husband_name_error').innerHTML = "Please enter name";
             document.getElementById('sister_husband_name').focus();
             return false;
          }else {
              document.getElementById('husband_name_error').innerHTML = " ";
          }
       }*/
    }

    // For parents detail update
    $("form#sisterForm").submit(function(e){
      e.preventDefault();

      var status = sisupdatevalidation();

      if(status == true || status == undefined)
      {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/sisterDetailsUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Sister Details updated successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Sister Details update failed.');
            }
          }
        });
      }
    });

    sisaddvalidation = function()
    {
       var name       = document.getElementById('sister_nameadd').value;
       var younger    = document.getElementById('youngeradd').checked;
       var elder      = document.getElementById('elderadd').checked;
       var married    = document.getElementById('sismarriedadd').checked;
       var unmarried  = document.getElementById('sisunmarriedadd').checked;
       var Hname      = document.getElementById('sister_husband_nameadd').value;
       
       if(name == "")
       {
           document.getElementById('sister_name_erroradd').innerHTML = "Please enter name";
           document.getElementById('sister_nameadd').focus();
           return false;
       }else {
            document.getElementById('sister_name_erroradd').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('sister_type_erroradd').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('sister_type_erroradd').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('married_type_erroradd').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('married_type_erroradd').innerHTML = " ";
       }

       /*if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('husband_name_erroradd').innerHTML = "Please enter name";
             document.getElementById('sister_husband_nameadd').focus();
             return false;
          }else {
              document.getElementById('husband_name_erroradd').innerHTML = " ";
          }
       }*/
    }

    // For Add sister detail
    $("form#addsisterForm").submit(function(e){
      e.preventDefault();
      var adstatus = sisaddvalidation();

      if(adstatus == true || adstatus == undefined)
      {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/sisterDetailsAdd",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Sister Details added successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Sister Details add failed.');
            }
          }
        });
      }
    });


    broupdatevalidation = function()
    {
       var name       = document.getElementById('brother_name').value;
       var younger    = document.getElementById('broupyounger').checked;
       var elder      = document.getElementById('broupelder').checked;
       var married    = document.getElementById('bromarried').checked;
       var unmarried  = document.getElementById('brounmarried').checked;
       var Hname      = document.getElementById('brother_wife_name').value;

       if(name == "")
       {
           document.getElementById('brother_name_error').innerHTML = "Please enter name";
           document.getElementById('brother_name').focus();
           return false;
       }else {
            document.getElementById('brother_name_error').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('brother_type_error').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('brother_type_error').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('bro_married_type_error').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('bro_married_type_error').innerHTML = " ";
       }

       /*if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('brother_wife_error').innerHTML = "Please enter name";
             document.getElementById('brother_wife_name').focus();
             return false;
          }else {
              document.getElementById('brother_wife_error').innerHTML = " ";
          }
       }*/
    }

    broaddvalidation = function()
    {
       var name       = document.getElementById('brother_nameadd').value;
       var younger    = document.getElementById('broyoungeradd').checked;
       var elder      = document.getElementById('broelderadd').checked;
       var married    = document.getElementById('bromarriedadd').checked;
       var unmarried  = document.getElementById('brounmarriedadd').checked;
       var Hname      = document.getElementById('brother_wife_nameadd').value;

       if(name == "")
       {
           document.getElementById('brother_name_erroradd').innerHTML = "Please enter name";
           document.getElementById('brother_nameadd').focus();
           return false;
       }else {
            document.getElementById('brother_name_erroradd').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('brother_type_erroradd').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('brother_type_erroradd').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('bromarried_type_erroradd').innerHTML = "Please select type";
           
           return false;
       }else {
            document.getElementById('bromarried_type_erroradd').innerHTML = " ";
       }

       /*if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('brother_wife_erroradd').innerHTML = "Please enter name";
             document.getElementById('brother_wife_nameadd').focus();
             return false;
          }else {
              document.getElementById('brother_wife_erroradd').innerHTML = " ";
          }
       }*/
    }
    // For Add brother detail
    $("form#addbrotherForm").submit(function(e){
      e.preventDefault();
      var adstatus = broaddvalidation();

      if(adstatus == true || adstatus == undefined)
      {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/brotherDetailsAdd",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Brother Details added successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Brother Details add failed.');
            }
          }
        });
      }
    });

    // For Brother Modal Popup data
    getBrotherDataForUpdate = function(id){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getBrotherDataForUpdate",
            type: "POST",
            data: {
                user_id: userId,
                id: id
            },
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != null)
              {      
                $("input[name='brother_type'][value="+dt.brother_type+"]").attr('checked', 'checked');
                $('#broid').val(dt.id);
                $('#brother_name').val(dt.brother_name);
                $('#brother_education').val(dt.brother_education);
                $('#brother_profession').val(dt.brother_profession);
                $('#brother_joblocation').val(dt.brother_joblocation);
                $('#brother_mobile').val(dt.brother_mobile);
                $('#brother_email').val(dt.brother_email);
                $("input[name='brother_married_type'][value="+dt.married_type+"]").attr('checked', 'checked').trigger("click");
                $('#brother_wife_name').val(dt.wife_name);
                $('#brother_wife_education').val(dt.wife_education);
                $('#brother_wife_profession_category').val(dt.wife_profession_category);
                $('#brother_wife_designation').val(dt.brother_wife_designation);
                $('#brother_wife_joblocation').val(dt.wife_joblocation);
                $('#brother_wife_father_contact').val(dt.wife_father_contact);
                $('#brother_wife_father_nativeplace').val(dt.wife_father_nativeplace);
              }
            }
      });
    }

    // For brother detail update
    $("form#brotherForm").submit(function(e){
      e.preventDefault();
      var status = broupdatevalidation();

      if(status == true || status == undefined)
      {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/brotherDetailsUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Brother Details updated successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Brother Details update failed.');
            }
          }
        });
      }
    });

  });
</script>
<style>
  ul.dropdown-content>a {
    display: block;
    padding: 10px 0;
}
</style>
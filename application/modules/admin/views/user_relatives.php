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
  color: #38d8df;
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
.updateButton, .deleteButton {
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

.DetailsubDiv tr:first-child td h5, .DetailsubDiv tr:nth-child(2) td h5{
  color: red;
}
.DetailsubDiv tr:first-child td, .DetailsubDiv tr:nth-child(2) td {
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

.DeleteN {
  float: right;
  margin: 5px;
}
.DeleteY {
  float: right;
  margin: 5px;
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
@media (min-width: 768px){
.navbar-nav>li {
    float: left;
    width: 100%;
}
}
</style>
<div> 
<div class="new-side-content">
   <div id="page-inner" style=" background:#ffffff">
       <div class="container" style="margin-top:40px;">
           <div class="row col-xs-12" style="border: 1px solid #f2f2f2;box-shadow: 0px 0px 10px 0px #f2f2f2;padding-right: 0;padding-left: 0;">
                       <?php $user_id=$this->uri->segment(3)  ?>
               
               <div class="col-xs-3 col-md-3 no-padding" style="border-right: 2px solid darkred;background: #eeeeee;">
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
  
                </div>
               </div>
               
               <div class="col-xs-9 col-md-9 no-padding">
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
          <span><p class="tabHeading">Relatives  Details</p></span>
          <a data-toggle="modal" data-target="#siblingDetailModal" class="btn btn-primary updateButton" onclick="getSiblingDataForUpdate()">Edit Relatives Count</a>
          <div class="DetailDiv">
            <table border="0">
              <tr>
                <td width="20%"><h5>No Of Father Sibling</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_father_siblings'];?></td>
                <td width="25%"><h5>No Of Mother Sibling</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_mother_siblings'];?></td>
              </tr>

              <tr>
              <?php if($siblings_info['no_of_father_brother'] != "0") { ?>
                <td width="20%"><h5>No Of Father Brother</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_father_brother'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              <?php if($siblings_info['no_of_mother_brother'] != "0") { ?>
                <td width="25%"><h5>No Of Mother Brother</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_mother_brother'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              </tr>
              
              <tr>
              <?php if($siblings_info['no_of_father_sister'] != "0") { ?>
                <td width="20%"><h5>No Of Father Sister</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_father_sister'];?></td>
              <?php } else { ?>
                <td width="20%"><h5></h5></td>
                <td width="20%"></td>
              <?php } ?>
              <?php if($siblings_info['no_of_mother_sister'] != "0") { ?>
                <td width="25%"><h5>No Of Mother Sister</h5></td>
                <td width="20%">: <?php echo $siblings_info['no_of_mother_sister'];?></td>
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
          <?php foreach($sister_info as $sister_info) { ?>
          <span><p class="tabHeading">Sister Details</p></span>  
          </span>
          <a data-toggle="modal" data-target="#SistersDetailModal" class="btn btn-primary updateButton" onclick="getSistersDataForUpdate(<?php echo $sister_info['id'];?>)">
          Edit Sister Details</a>
          <a class="btn btn-danger deleteButton"  data-toggle="modal" data-target="#sisDelete" onclick="getSisterSiblingDataForDelete(<?php echo $sister_info['id'];?>)">Delete Sister Details</a>
          <div class="DetailDiv DetailsubDiv">
            <table border="0">
              <tr>
                <td><h5>Sister Of</h5></td><td>: <?php echo strtoupper($sister_info['sister_of']);?></td>
              </tr>
              <tr>
                <td><h5>Sister Name</h5></td><td>: <?php echo $sister_info['sister_name'];?>  (<?php echo $sister_info['sister_type'];?>)</td>
              </tr>              
              <tr>
                <td><h4>Husband Name</h4></td><td>: <?php echo $sister_info['husband_name'];?></td>
              </tr> 
              <tr>
                <td><h5>Education</h5></td><td>: <?php echo $sister_info['education'];?></td>
              </tr>
              <tr>
                <td><h5>Profession</h5></td><td>: <?php echo $sister_info['profession'];?></td>
              </tr>
              <tr>
                <td><h5>State</h5></td><td>: <?php echo $sister_info['state'];?></td>
              </tr>
              <tr>
                <td><h5>District</h5></td><td>: <?php echo $sister_info['district'];?></td>
              </tr>
              <tr>
                <td><h5>Native Place</h5></td><td>: <?php echo $sister_info['native_place'];?></td>
              </tr>
              <tr>
                <td><h5>Contact No</h5></td><td>: <?php echo $sister_info['contact_number'];?></td>
              </tr>
              <tr>
                <td><h5>Current Location</h5></td><td>: <?php echo $sister_info['current_location'];?></td>
              </tr>
            </table>
          </div>
          <?php } ?>

          <?php foreach($brother_info as $brother_info) { ?>
          <span><p class="tabHeading">Brother Details</span>  </p>
          </span>
          <a data-toggle="modal" data-target="#BrotherDetailModal" class="btn btn-primary updateButton" onclick="getBrotherDataForUpdate(<?php echo $brother_info['id'];?>)">Edit Brother Details</a>
          <a class="btn btn-danger deleteButton"  data-toggle="modal" data-target="#broDelete" onclick="getBrotherSiblingDataForDelete(<?php echo $brother_info['id'];?>)">Delete Brother Details</a>
          <div class="DetailDiv DetailsubDiv">
            <table border="0">
              <tr>
                <td><h5>Brother Of</h5></td><td>: <?php echo strtoupper($brother_info['brother_of']);?></td>
              </tr>
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
                <td><h5>Contact No</h5></td><td>: <?php echo $brother_info['brother_mobile'];?></td>
              </tr>
              <tr>
                <td><h5>Current Location</h5></td><td>: <?php echo $brother_info['current_location'];?></td>
              </tr>
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
               <h4 class="modal-title">Update Relative Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
           
          </div>
          <div class="modal-body">
            <form id="siblingForm">
              <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label style="font-weight: 600;">No Of Father Siblings : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_father_siblings" name="no_father_siblings" >
                         <option value="0">Select No Of father Siblings</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Father Brothers : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_father_brother" name="no_of_father_brother">
                         <option value="0" data-val="0">Select No Of Father Brothers</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Father Sister : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_father_sister" name="no_of_father_sister">
                         <option value="0" data-val="0">Select No Of Father Sister</option>
                      <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label style="font-weight: 600;">No Of Mother Siblings : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_mother_siblings" name="no_mother_siblings">
                         <option value="0">Select No Of Mother Siblings</option>
                       <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Mother Brother : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_mother_brother" name="no_of_mother_brother">
                         <option value="0" data-val="0">Select No Of Mother Brother</option>
                        <?php for($i=0;$i<=10;$i++){?>
                         <option value="<?php echo $i;?>"><?php echo $i;?></option>
                         <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No Of Mother Sisters : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="no_of_mother_sister" name="no_of_mother_sister">
                         <option value="0" data-val="0">Select No Of Mother Sisters</option>
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

    <!--Add Sister Modal -->
    <div class="modal fade" id="addSistersDetailModal" style="overflow-y: auto;" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add Sister Details</h4>
          </div>
          <div class="modal-body">
            <form id="addsisterForm">
              <input type="hidden" name="userIdsadd" id="userIdsadd" value="<?php echo $this->uri->segment(3) ?>;">              
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6 my-3">
                    <label>Sister Of : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="sister_ofadd"  value="mother" checked>
                      <label for="mother">Mother</label>
                      <span class="check"></span>


                      <input type="radio" name="sister_ofadd"  value="father">
                      <label for="father">Father</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="sister_of_erroradd" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row my-3">
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
                      <label>Profession : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_professionadd" id="sister_husband_professionadd"/>
                      </div>
                    </div>
                  </div>    
                  <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>State : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="sister_state_add" name="sister_state_add" onchange="getdistrict(this.value)">
                         <option value="Select State">Select State</option>
                          <?php foreach($states as $value) { ?>
                                  <option  value="<?php echo $value['state'];?>"><?php echo ucwords($value['state']);?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>District : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="sister_district_add" name="sister_district_add">
                           <option value="Select District">Select District</option>
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
                        <input type="text" class="form-control" name="sister_nativeplaceadd" id="sister_nativeplaceadd"/>
                      </div>
                    </div>
                  </div>          
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Number : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_contactadd" id="sister_contactadd"/>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Location : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_locationadd" id="sister_locationadd"/>
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
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Sister Details</h4>
          </div>
          <div class="modal-body">
            <form id="sisterForm">
              <input type="hidden" name="userIds" id="userIds" value="<?php echo $this->uri->segment(3) ?>;">
              <input type="hidden" name="sisid" id="sisid">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Of : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="sister_ofup"  value="mother" checked>
                      <label for="mother">Mother</label>
                      <span class="check"></span>


                      <input type="radio" name="sister_ofup"  value="father">
                      <label for="father">Father</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="sister_of_errorup" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="sister_typeup" id="youngerup" value="younger" checked>
                      <label for="younger">Younger</label>
                      <span class="check"></span>


                      <input type="radio" name="sister_typeup" id="elderup" value="elder">
                      <label for="elder">Elder</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="sister_type_errorup" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Sister Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="sister_nameup" id="sister_nameup"/>
                    <span id="sister_name_errorup" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                        <label>Husband Name : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_nameup" id="sister_husband_nameup"/>
                       <span id="husband_name_errorup" class="text-danger font-weight-bold"></span>
                      </div>
                    </div>
                  </div>                    
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_educationup" id="sister_husband_educationup"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_husband_professionup" id="sister_husband_professionup"/>
                      </div>
                    </div>
                  </div>    
                  <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>State : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="sister_state_up" name="sister_state_up" onchange="getdistrict(this.value)">
                         <option value="Select State">Select State</option>
                          <?php foreach($states as $value) { ?>
                                  <option  value="<?php echo $value['state'];?>"><?php echo ucwords($value['state']);?></option>
                          <?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>District : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="sister_district_up" name="sister_district_up">
                           <option value="Select District">Select District</option>
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
                        <input type="text" class="form-control" name="sister_nativeplaceup" id="sister_nativeplaceup"/>
                      </div>
                    </div>
                  </div>          
                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Number : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_contactup" id="sister_contactup"/>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Location : </label>
                    </div>
                    <div class="col-md-6 col-sm-7 col-xs-6">
                      <div class="form-group">
                        <input type="text" class="form-control" name="sister_locationup" id="sister_locationup"/>
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
                    <label>Brother Of : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="brother_ofadd"  value="mother" checked>
                      <label for="mother">Mother</label>
                      <span class="check"></span>


                      <input type="radio" name="brother_ofadd"  value="father">
                      <label for="father">Father</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="brother_of_erroradd" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
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
                      <label>Currrent Location : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="current_location" id="current_location"/>
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
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Update Brother Details</h4>
          </div>
          <div class="modal-body">
            <form id="brotherForm">
              <input type="hidden" name="brotheruserIds" id="brotheruserIds" value="<?php echo $this->uri->segment(3); ?>">
              <input type="hidden" name="broid" id="broid">
                <div class="row my-3">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Of : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="brother_ofup"  value="mother" checked>
                      <label for="mother">Mother</label>
                      <span class="check"></span>


                      <input type="radio" name="brother_ofup"  value="father">
                      <label for="father">Father</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="brother_of_errorup" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row my-3">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Type : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="brother_typeup" id="broyoungerup" value="younger" checked>
                      <label for="younger">Younger</label>
                      <span class="check"></span>


                      <input type="radio" name="brother_typeup" id="broelderup" value="elder">
                      <label for="elder">Elder</label>
                      <span class="check"></span>
                    </div>
                    <div style="margin-top:-15px;" id="brother_type_errorup" class="text-danger font-weight-bold"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Brother Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_nameup" id="brother_nameup"/>
                       <span id="brother_name_errorup" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Education : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_educationup" id="brother_educationup"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Profession : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_professionup" id="brother_professionup"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Nos : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="brother_mobileup" id="brother_mobileup"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Currrent Location : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="current_locationup" id="current_locationup"/>
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
    <!-- delete brother -->
    <div class="modal fade" id="broDelete" role="dialog">
        <div class="modal-dialog">                            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Delete Brother Details</h4>
                </div>
                <div class="modal-body">
                   <p id="deleteTextbro"></p>
                   <!-- <p id="deleteTextTemp" hidden="true"></p> -->
                   <input type="hidden" name="Dbroid" id="Dbroid"/>
                <div class="row"><div class="col-md-12 col-sm-12 col-xs-12 btn-div">
                <button type="button" class="btn btn-danger DeleteN" data-dismiss="modal">NO</button>
                <button type="button" id="deletebro" class="btn btn-success DeleteY" data-dismiss="modal">YES</button>
                </div></div>
                </div>
            </div>      
        </div>
    </div>

    <!-- delete sister -->
    <div class="modal fade" id="sisDelete" role="dialog">
        <div class="modal-dialog">                            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Delete Sister Details</h4>
                </div>
                <div class="modal-body">
                   <p id="deleteTextsis"></p>
                   <!-- <p id="deleteTextTemp" hidden="true"></p> -->
                   <input type="hidden" name="Dsisid" id="Dsisid"/>
                <div class="row"><div class="col-md-12 col-sm-12 col-xs-12 btn-div">
                <button type="button" class="btn btn-danger DeleteN" data-dismiss="modal">NO</button>
                <button type="button" id="deletesis" class="btn btn-success DeleteY" data-dismiss="modal">YES</button>
                </div></div>
                </div>
            </div>      
        </div>
    </div>
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
</div> </div>
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

    $('#no_father_siblings').on('change', function(e) {
          let selector = $(this).val();
          
        /*  $("#no_of_father_brother").val("0");
          $("#no_of_father_sister").val("0");

          $("#no_of_father_brother > option").hide();
          $("#no_of_father_brother > option").filter(function(){return $(this).data('val') <= selector}).show();
          $("#no_of_father_sister > option").hide();
          $("#no_of_father_sister > option").filter(function(){return $(this).data('val') <= selector}).show();*/
    });

    $('#no_mother_siblings').on('change', function(e) {
          let selector = $(this).val();

        /*  $("#no_of_mother_brother").val("0");
          $("#no_of_mother_sister").val("0");
          $("#no_of_mother_brother > option").hide();
          $("#no_of_mother_brother > option").filter(function(){return $(this).data('val') <= selector}).show();
          $("#no_of_mother_sister > option").hide();
          $("#no_of_mother_sister > option").filter(function(){return $(this).data('val') <= selector}).show();*/
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
            $("#sister_district_add").html(op);
            $("#sister_district_up").html(op);
           }
        });
    }

    // For all District when update
    getdistrictUP =  function(valu, district)
    {
      var valu = valu;
        $.ajax({ 
           type: "POST", 
           url: '<?php echo site_url();?>admin/ws/getdistrictsADM',
           data: {valu: valu},
           complete: function(data){  
            var op = data.responseText.trim();
            $("#sister_district_up").html(op);
            $("#sister_district_up > [value='" + district + "']").attr("selected", "true");
           }
        });
    }
    // getdistrict('<?php echo $parents_info['fathers_father_state']; ?>');

    // For Basic Detail Modal Popup data
    getSiblingDataForUpdate = function(){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getRelativesDataForUpdate",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              var dt = JSON.parse(res);
              $('#no_father_siblings').val(dt.no_father_siblings);
              $('#no_of_father_brother').val(dt.no_of_father_brother);
              $('#no_of_father_sister').val(dt.no_of_father_sister);
              $('#no_mother_siblings').val(dt.no_mother_siblings);
              $('#no_of_mother_brother').val(dt.no_of_mother_brother);
              $('#no_of_mother_sister').val(dt.no_of_mother_sister);
            }
      });
    }

    // To delete sister details
    getSisterSiblingDataForDelete = function (id) {
        $('#deleteTextsis').text('Do you really want to delete this details ?');
        $('#Dsisid').val(id);
    }

    $("#deletesis").click(function(){
        var id = $('#Dsisid').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/deletesisterRelativesData",
            type: "POST",
            data: {
                id: id
            },
            success: function(res) {
              if(res)
              {
                alert("Sister Details deleted successfully.");
                window.location.reload();
              }
            }
        });
    });

    // To delete brother details
    getBrotherSiblingDataForDelete = function (id) {
        $('#deleteTextbro').text('Do you really want to delete this details ?');
        $('#Dbroid').val(id);
    }

    $("#deletebro").click(function(){
        var id = $('#Dbroid').val();

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/deletebrotherRelativesData",
            type: "POST",
            data: {
                id: id
            },
            success: function(res) {
              if(res)
              {
                alert("Brother details deleted successfully.");
                window.location.reload();
              }
            }
        });
    });

    // For parents detail update
    $("form#siblingForm").submit(function(e){
      e.preventDefault();

      var TotalBro = $('#no_father_siblings').val();
      var elBro    = $('#no_of_father_sister').val();
      var yoBro    = $('#no_of_father_brother').val();

      var TotalSis = $('#no_mother_siblings').val();
      var elSis    = $('#no_of_mother_brother').val();
      var yoSis    = $('#no_of_mother_sister').val();

      var yoelBro  = parseInt(yoBro) + parseInt(elBro);
      var yoelSis  = parseInt(yoSis) + parseInt(elSis);

      if(TotalBro >= yoelBro)
      {
        if(TotalSis >= yoelSis)
        {
          $.ajax({
            url: "<?php echo base_url(); ?>admin/ws/ParentsiblingsDetailUpdate",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function(res)
            {
              if(res)
              {
                alert('Relatives Details updated successfully.');
                window.location.reload();
              }
              else
              {              
                alert('Relatives Details update failed.');
              }
            }
          });          
        }
        else
        {
          alert("Please enter correct no of siblings");          
        }
      }
      else
      {
        alert("Please enter correct no of siblings");
      }
    });

    // For Basic Detail Modal Popup data
    getSistersDataForUpdate = function(id){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getParentsSistersDataForUpdate",
            type: "POST",
            data: {
                user_id: userId,
                id: id
            },
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != null)
              {   
                $('#sisid').val(dt.id);
                $("input[name='sister_ofup'][value="+dt.sister_of+"]").attr('checked', 'checked');
                $("input[name='sister_typeup'][value="+dt.sister_type+"]").attr('checked', 'checked');
                $('#sister_nameup').val(dt.sister_name);
                $('#sister_husband_nameup').val(dt.husband_name);
                $('#sister_husband_educationup').val(dt.education);
                $('#sister_husband_professionup').val(dt.profession);
                // $('#sister_state_up').val(dt.state).trigger("change"); 
                $("#sister_state_up > [value='" + dt.state + "']").attr("selected", "true");
                // $('#sister_district_up').val(dt.district);
                getdistrictUP(dt.state, dt.district);
                
                $('#sister_nativeplaceup').val(dt.native_place);
                $('#sister_contactup').val(dt.contact_number);
                $('#sister_locationup').val(dt.current_location);
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
           document.getElementById('sister_name_error').innerHTML = " *please enter name";
           document.getElementById('sister_name').focus();
           return false;
       }else {
            document.getElementById('sister_name_error').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('sister_type_error').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('sister_type_error').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('married_type_error').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('married_type_error').innerHTML = " ";
       }

       if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('husband_name_error').innerHTML = " *please enter name";
             document.getElementById('sister_husband_name').focus();
             return false;
          }else {
              document.getElementById('husband_name_error').innerHTML = " ";
          }
       }
    }

    // For parents sister detail update
    $("form#sisterForm").submit(function(e){
      e.preventDefault();

      // var status = sisupdatevalidation();

      // if(status == true || status == undefined)
      // {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/parentsisterDetailsUpdate",
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
      // }
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
           document.getElementById('sister_name_erroradd').innerHTML = " *please enter name";
           document.getElementById('sister_nameadd').focus();
           return false;
       }else {
            document.getElementById('sister_name_erroradd').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('sister_type_erroradd').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('sister_type_erroradd').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('married_type_erroradd').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('married_type_erroradd').innerHTML = " ";
       }

       if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('husband_name_erroradd').innerHTML = " *please enter name";
             document.getElementById('sister_husband_nameadd').focus();
             return false;
          }else {
              document.getElementById('husband_name_erroradd').innerHTML = " ";
          }
       }
    }

    // For Add sister detail
    $("form#addsisterForm").submit(function(e){
      e.preventDefault();
      // var adstatus = sisaddvalidation();

      // if(adstatus == true || adstatus == undefined)
      // {
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/ParentssisterDetailsAdd",
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
      // }
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
           document.getElementById('brother_name_error').innerHTML = " *please enter name";
           document.getElementById('brother_name').focus();
           return false;
       }else {
            document.getElementById('brother_name_error').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('brother_type_error').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('brother_type_error').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('bro_married_type_error').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('bro_married_type_error').innerHTML = " ";
       }

       if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('brother_wife_error').innerHTML = " *please enter name";
             document.getElementById('brother_wife_name').focus();
             return false;
          }else {
              document.getElementById('brother_wife_error').innerHTML = " ";
          }
       }
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
           document.getElementById('brother_name_erroradd').innerHTML = " *please enter name";
           document.getElementById('brother_nameadd').focus();
           return false;
       }else {
            document.getElementById('brother_name_erroradd').innerHTML = " ";
       }
       
       if((younger == "") && (elder == ""))
       {
           document.getElementById('brother_type_erroradd').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('brother_type_erroradd').innerHTML = " ";
       }

       if((married == "") && (unmarried == ""))
       {
           document.getElementById('bromarried_type_erroradd').innerHTML = " *please select type";
           
           return false;
       }else {
            document.getElementById('bromarried_type_erroradd').innerHTML = " ";
       }

       if(married == true)
       {
          if(Hname == "")
          {
             document.getElementById('brother_wife_erroradd').innerHTML = " *please enter name";
             document.getElementById('brother_wife_nameadd').focus();
             return false;
          }else {
              document.getElementById('brother_wife_erroradd').innerHTML = " ";
          }
       }
    }
    // For Add brother detail
    $("form#addbrotherForm").submit(function(e){
      e.preventDefault();
      // var adstatus = broaddvalidation();

      // if(adstatus == true || adstatus == undefined)
      // {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/ParentsbrotherDetailsAdd",
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
      // }
    });

    // For Brother Modal Popup data
    getBrotherDataForUpdate = function(id){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getparentsBrotherDataForUpdate",
            type: "POST",
            data: {
                user_id: userId,
                id: id
            },
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != null)
              {      
                $('#broid').val(dt.id);
                $("input[name='brother_ofup'][value="+dt.brother_of+"]").attr('checked', 'checked');
                $("input[name='brother_typeup'][value="+dt.brother_type+"]").attr('checked', 'checked');
                $('#brother_nameup').val(dt.brother_name);
                $('#brother_educationup').val(dt.brother_education);
                $('#brother_professionup').val(dt.brother_profession);
                $('#brother_mobileup').val(dt.brother_mobile);
                $('#current_locationup').val(dt.current_location);
              }
            }
      });
    }

    // For brother detail update
    $("form#brotherForm").submit(function(e){
      e.preventDefault();
      // var status = broupdatevalidation();

      // if(status == true || status == undefined)
      // {          
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/parentsbrotherDetailsUpdate",
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
      // }
    });

  });
  
    $(document).ready(function(){
        $(".close").click(function() {
          $(document.body).removeClass('modal-open');
    $('.modal-backdrop').remove();
        });
});
</script> 
<style>
  ul.dropdown-content>a {
    display: block;
    padding: 10px 0;
}
</style>
</body>
</html>   
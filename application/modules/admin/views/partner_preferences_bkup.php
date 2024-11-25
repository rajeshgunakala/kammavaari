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
  margin: 0 20px 20px 0;
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
  margin-top: 5px;
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

.ms-options-wrap > button:focus, .ms-options-wrap > button {
    position: relative;
    width: 100%;
    text-align: left;
    border: 1px solid #ced4da;
    background-color: #fff;
    padding: 6px 12px !important;
    font-size: 14px;
    color: #495057;
    outline: none;
    white-space: nowrap;
    border-radius: .25rem;
}

.ms-options-wrap > button:after {
    content: ' ';
    height: 0px;
    position: absolute;
    top: 50%;
    right: 5px;
    width: 0;
    border: 4px solid rgba(0, 0, 0, 0);
    border-top-color: #495057;
    margin-top: -3px;
}

.ms-options-wrap > .ms-options > ul label {
    padding: 4px 12px !important;
}

.ms-options-wrap > .ms-options > ul li.selected label, .ms-options-wrap > .ms-options > ul label:hover {
    background-color: #007bff !important;
    color: #ffffff !important;
}

.ms-options {
    max-height: auto !important;
    min-height: auto !important;
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

.space {
  margin-bottom: 10px;
}

label {
  line-height: 30px;
}
.row {
  margin-right: -27px;
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
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<div> 
   <div id="page-inner" style="background:#ffffff">
       <div class="container" style="margin-top:60px;">
           <div class="col-xs-12" style="border: 1px solid #f2f2f2;box-shadow: 0px 0px 10px 0px #f2f2f2;padding-right: 0;padding-left: 0;">
                       <?php $user_id = $this->uri->segment(3);  ?>
               
               <div class="col-xs-3 no-padding" style="background: #eeeeee;">
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
                      <ul class="bxslider" style="min-height:250px;max-height:250px;overflow: hidden;text-align: center;">
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
               
               <div class="col-xs-9 no-padding">
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
          <span><p class="tabHeading">Partner Preferences</p></span>
              <a data-toggle="modal" data-target="#parentsDetailModal" class="btn btn-primary updateButton" onclick="getPartnerpreferenceDataForUpdate()">Edit Partner Preferences</a>
            <div class="DetailDiv">
              <table border="0">
                <tr>
                  <td><h5>Age Gap</h5></td><td>: <?php echo $viewData['p_age_from'] ." - ". $viewData['p_age_to'];?></td>
                </tr>
                <tr>
                  <td><h5>Height</h5></td><td>: <?php echo $viewData['p_height_from'] ." - ". $viewData['p_height_to'];?></td>
                </tr>
                <tr>
                  <td><h5>Marital Status</h5></td><td>: <?php echo $viewData['p_marital_status'];?></td>
                </tr>
                <tr>
                  <td><h5>Employee In</h5></td><td>: <?php echo $viewData['employee_in'];?></td>
                </tr>
                <tr>
                  <td><h5>Education</h5></td><td>: <?php echo $viewData['p_education'];?></td>
                </tr>
                <tr>
                  <td><h5>Caste</h5></td><td>: <?php echo $viewData['p_caste'];?></td>
                </tr>
                <tr>
                  <td><h5>Star</h5></td><td>: <?php echo $viewData['p_star'];?></td>
                </tr>
                <tr>
                  <td><h5>Mother Tongue</h5></td><td>: <?php echo $viewData['p_mother_tongue'];?></td>
                </tr>
                <tr>
                  <td><h5>Profession</h5></td><td>: <?php echo $viewData['p_profession'];?></td>
                </tr>
                <tr>
                  <td><h5>Country</h5></td><td>: <?php echo $viewData['p_country'];?></td>
                </tr>
                <?php if($viewData['p_district']){?>
                <tr>
                  <td><h5>District</h5></td><td>: <?php echo $viewData['p_district'];?></td>
                </tr>
                <?php } ?>
                 <?php if($viewData['p_city']){?>
                <tr>
                  <td><h5>City</h5></td><td>: <?php echo $viewData['p_city'];?></td>
                </tr>
                 <?php } ?>
				<tr>
				<td><h5>Property Value</h5></td><td>: 
				<?php if(!empty($viewData['property_from']))
				
				{	
					echo $viewData['property_from']." <span> Crores To</span>" ;
				}
				else { 
					echo "NA";
				}?>
				<?php if(!empty($viewData['property_to']))
				{	
					echo $viewData['property_to']." <span> Crores</span>" ;
				}
				else { 
					echo "NA";
				}?>
					</td>
				</tr>
				 
                  <?php if($viewData['p_about']){?>
                <tr>
                  <td><h5>Notes</h5></td><td>: <?php echo base64_decode($viewData['p_about']);?></td>
                </tr>
                 <?php } ?>
                
              </table>
            </div>
        </div>
	  </div>
    </div> 
         <!-- Modal -->
        <div class="modal fade" id="parentsDetailModal" style="overflow-y: auto;" style="" role="dialog">
          <div class="modal-dialog">      
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Partner Preferences</h4>
              </div>
              <div class="modal-body">                
                <form id="partnerForm" method="post">
                    <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>">                      
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>Age Gap</label>
                        <div class="grid-table">
							<div style="width:48%;float:left;margin-right:10px;">
								<select name="age_from" id="age_from" class="form-control colorChange">
									<option selected value="" label="Age Gap From">Age Gap From</option>
									<option value="1" label="1" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "1") echo 'selected' ?> >1</option>
									  <option value="2" label="2" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "2") echo 'selected' ?> >2</option>
									  <option value="3" label="3" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "3") echo 'selected' ?> >3</option>
									  <option value="4" label="4" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "4") echo 'selected' ?> >4</option>
									  <option value="5" label="5" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "5") echo 'selected' ?> >5</option>
									  <option value="6" label="6" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "6") echo 'selected' ?> >6</option>
									  <option value="7" label="7" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "7") echo 'selected' ?> >7</option>
									  <option value="8" label="8" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "8") echo 'selected' ?> >8</option>
									  <option value="9" label="9" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "9") echo 'selected' ?> >9</option>
									  <option value="10" label="10" <?php if($pageData['p_age_from'] != ""  && $pageData['p_age_from'] == "10") echo 'selected' ?> >10</option>
								</select>
							</div>
							<div style="width:48%;float:left;">
								<select name="age_to" id="age_to" class="form-control colorChange">
								  <option selected value="" label="Age Gap To">Age Gap To</option>
								  <option value="1" label="1" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "1") echo 'selected' ?> >1</option>
								  <option value="2" label="2" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "2") echo 'selected' ?> >2</option>
								  <option value="3" label="3" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "3") echo 'selected' ?> >3</option>
								  <option value="4" label="4" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "4") echo 'selected' ?> >4</option>
								  <option value="5" label="5" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "5") echo 'selected' ?> >5</option>
								  <option value="6" label="6" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "6") echo 'selected' ?> >6</option>
								  <option value="7" label="7" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "7") echo 'selected' ?> >7</option>
								  <option value="8" label="8" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "8") echo 'selected' ?> >8</option>
								  <option value="9" label="9" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "9") echo 'selected' ?> >9</option>
								  <option value="10" label="10" <?php if($pageData['p_age_to'] != ""  && $pageData['p_age_to'] == "10") echo 'selected' ?> >10</option>
								</select>
							</div>
						</div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label>Height</label>
						  <div class="grid-table">
							<div style="width:48%;float:left;margin-right:10px;">
							  <select name="height_from" id="height_from" class="form-control height colorChange">
								  <option selected value="" label="Height From">Height</option>
								  <?php foreach($heights as $value) { ?>
								  <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>" <?php if($pageData['p_height_from'] != ""  && $pageData['p_height_from'] == stripcslashes(str_replace("\n","",$value['height']))) echo 'selected' ?> ><?php echo stripcslashes($value['height']);?></option><?php } ?>
							  </select>
							</div>
							<div style="width:48%;float:left;">
								<select name="height_to" id="height_to" class="form-control height colorChange">
								<option selected value="" label="Height To">Height To</option>
								<?php foreach($heights as $value) { ?>
								<option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>" <?php if($pageData['p_height_to'] != ""  && $pageData['p_height_to'] == stripcslashes(str_replace("\n","",$value['height']))) echo 'selected' ?>><?php echo stripcslashes($value['height']);?></option><?php } ?>
								</select>
							</div>
							</div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label>Marital Status</label>
                        <select multiple="" name="marital_status[]" id="marital_status" class="multiselect form-control" >
                              <option value="never_married" >Never Married</option>
                              <option value="divorced" >Divorced</option>
                              <option value="widow-widower" >Widow / Widower</option>
                              <option value="separated" >Separated</option>
                              <option value="annulled" >Annulled</option>
                          </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label for="employeein">Employee In</label>
                        <select multiple="" class="multiselect form-control" id="employee_in" name="employee_in[]">
                               <option  value="Government">Government</option>
                               <option  value="Private">Private</option>
                               <option  value="Business">Business</option>
                               <option  value="Defencce">Defencce</option>
                               <option  value="Student">Student</option>
                               <option  value="Not-Working">Not-Working</option>
                               
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label>Education</label>
                        <select multiple="" name="education_level[]" id="education_level" class="multiselect form-control">
                          <?php foreach($educations as $value) { ?>
                          <option value="<?php echo $value['heighsteducation'];?>" ><?php echo stripcslashes($value['heighsteducation']);?></option><?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>Caste</label>
                        <select multiple="" name="caste[]" id="caste" class="multiselect form-control">
                          <?php foreach($castes as $value) { if($value['caste']=='Kamma'){?>
                          <option value="<?php echo $value['caste'];?>"  ><?php echo stripcslashes($value['caste']);?></option><?php } } ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>Star</label>
                        <select multiple="" name="star[]" id="star" class="multiselect form-control">
                          <?php foreach($stars as $value) { ?>
                          <option value="<?php echo $value['star'];?>" ><?php echo stripcslashes($value['star']);?></option><?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>Mother Tongue</label>
                        <select multiple="" name="mother_tongue[]" id="mother_tongue" class="multiselect form-control">
                          <?php foreach($mothertounges as $value) { ?>
                          <option value="<?php echo $value['mothertounge'];?>"  <?php if(!empty($mothertounge) && in_array(stripcslashes($value['mothertounge']),$mothertounge)) echo ' selected'; ?> ><?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                          <label>Profession</label>
                        <select multiple="" name="profession[]" id="profession" class="multiselect form-control">
                          <?php foreach($professions as $value) { ?>
                          <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option><?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>Country</label>
                        <select multiple="" name="country[]" id="country" class="multiselect form-control">
                          <?php foreach($countries as $value) { ?>
                          <option value="<?php echo $value['country'];?>"><?php echo stripcslashes($value['country']);?></option><?php } ?>
                        </select>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>District</label>
                        <input type="text" name="txt_district" value="<?php echo stripcslashes($pageData['p_district']);?>" class="txt_district form-control"  />
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>City</label>
                       <input type="text" name="txt_city" value="<?php echo stripcslashes($pageData['p_city']);?>" class="txt_city form-control"  />
                      </div>
					  <div class="col-md-6 col-sm-6 col-xs-6">
                        <label>Property Value From</label> 
									   <input type="text" class="form-control" name="property_from" maxlength="5" onKeyPress="return isNumber(event)"  id="property_from" value="<?php echo stripcslashes($pageData['property_from']);?>">
										<span>Cr</span>																	
								  </div>
								
								<div class="col-md-6 col-sm-6 col-xs-6">
									   <label for="property_to">Property To </label>
									   <input type="text" class="form-control" name="property_to" maxlength="5" onKeyPress="return isNumber(event)"  id="property_to" value="<?php echo stripcslashes($pageData['property_to']);?>" >
										<span>Cr</span>																	
								  </div>
							
								
							
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <label>Notes</label>
                       <textarea  name="txt_about" value="" class="txt_about form-control"  ><?php echo base64_decode($pageData['p_about']);?></textarea>
                      </div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="submit-btn" style="">
                          <input type="submit" value="Submit" class="btn btn-primary py-3 px-5">
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
<script src="<?php echo site_url(); ?>/js/jquery.multiselect.js"></script>
<script src="<?php echo site_url() ?>assets/js/jquery.exzoom.js"></script>
<link href="<?php echo site_url() ?>assets/css/jquery.exzoom.css" rel="stylesheet" type="text/css"/>
<!-- ======================= End JQuery libs ======================= -->
<script type="text/javascript">

function profile_images_popup_close() {
	$("#profile_images_popup").hide();
}
$(document).ready(function() {
	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 46 || charCode > 57)) {
        return false;
    }
    return true;
}
<?php
if (isset($images_info) && count($images_info) > 0) { ?>
	 $("#exzoom").exzoom({
        autoPlay: false,
    });	
<?php } ?>	
	$('.all-images img').on('click', function() {
		$("#exzoom").removeClass('hidden');
		$("#profile_images_popup").show();
	});
});			
</script>
<script>
  $(document).ready(function() {
	  
    $('.multiselect').multiselect();
    // For parents detail update
    $("form#partnerForm").submit(function(e){
      e.preventDefault();

      // var status = validation();
      // if(status == true || status == undefined)
      // { 
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/preferenceUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Preference Details updated successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Preference Details update failed.');
            }
          }
        });
      // }
    });

  });
  // For Basic Detail Modal Popup data
    getPartnerpreferenceDataForUpdate = function(){

      var userId = "<?php echo $this->uri->segment(3) ?>";

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getPartnerpreferenceDataForUpdate",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {				
              var dt = res;
              if(dt.p_education != null)
              {
                EduArr = dt.p_education.split(",");
                // console.log(EduArr);
                $("#education_level").val(EduArr);
                $('#education_level').multiselect('reload');
                if(EduArr.length > 2)
                {
                  var StrCount = EduArr.length+" selected";
                  $('.eduDiv .ms-options-wrap button').text(StrCount);
                }  
              }

              if(dt.p_profession!=null)
              {
                ProArr = dt.p_profession.split(",");
                // console.log(EduArr);
                $("#profession").val(ProArr);
                $('#profession').multiselect('reload');
                if(ProArr.length > 2)
                {
                  var ProCount = ProArr.length+" selected";
                  $('.ProDiv .ms-options-wrap button').text(ProCount);
                }
              }

              if(dt.p_caste!=null)
              {
                CasteArr = dt.p_caste.split(",");
                // console.log(EduArr);
                $("#caste").val(CasteArr);
                $('#caste').multiselect('reload');
                if(CasteArr.length > 2)
                {
                  var CastCount = CasteArr.length+" selected";
                  $('.CasteDiv .ms-options-wrap button').text(CastCount);
                }
              }

              if(dt.p_star!=null)
              {
                StarArr = dt.p_star.split(",");
                // console.log(EduArr);
                $("#star").val(StarArr);
                $('#star').multiselect('reload');
                if(StarArr.length > 2)
                {
                  var StarCount = StarArr.length+" selected";
                  $('.StarDiv .ms-options-wrap button').text(StarCount);
                }
              } 

              if(dt.employee_in!=null)
              {
                EinArr = dt.employee_in.split(",");
                // console.log(EduArr);
                $("#employee_in").val(EinArr);
                $('#employee_in').multiselect('reload');
                if(EinArr.length > 2)
                {
                  var EinCount = EinArr.length+" selected";
                  $('.EinDiv .ms-options-wrap button').text(EinCount);
                }
              }

              if(dt.p_country!=null)
              {
                CountryArr = dt.p_country.split(",");
                // console.log(EduArr);
                $("#country").val(CountryArr);
                $('#country').multiselect('reload');
                if(CountryArr.length > 2)
                {
                  var CountryCount = CountryArr.length+" selected";
                  $('.CountryDiv .ms-options-wrap button').text(CountryCount);
                }
              }

              if(dt.p_marital_status!=null)
              {
                marriageArr = dt.p_marital_status.split(",");
                // console.log(EduArr);
                $("#marital_status").val(marriageArr);
                $('#marital_status').multiselect('reload');
                if(marriageArr.length > 2)
                {
                  var marriageCount = marriageArr.length+" selected";
                  $('.marriageDiv .ms-options-wrap button').text(marriageCount);
                }
              }           
              
            }
      });
    }
</script> 
</body>
</html>   
<style type="text/css">

ul.dropdown-content>a {
    display: block;
    padding: 10px 0;
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
  font-size: 16px;
  font-weight: 600;
  color: #8c8b8b;
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

/*mother Label */
.motherLabel {
   font-weight: 700;
   color: #2ca316;
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
                       <?php $user_id=$this->uri->segment(3);  ?>
               
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
          <span><p class="tabHeading">Contact Details</p></span>
          <a data-toggle="modal" data-target="#parentsDetailModal" class="btn btn-primary updateButton" onclick="getContactDataForUpdate()">Edit Contact Details</a>
          <div class="DetailDiv">
            <table border="0">
              <tr>
                <td><h5>Contact no</h5></td><td>: <?php echo $primary_info['mobile'];?></td><td style="width: 150px;text-align: right;"><?php if($primary_info['is_Mverified'] == "0") {?><a id="verifyMNO" class="verifybutton" style="color: #ff0009;font-size: 18px;">Verify</a><?php } else {?><span style="color: #07c1eb;font-size: 18px;letter-spacing: 0.8px;">Verified</span><?php } ?></td>
              </tr>
              <tr>
                <td><h5>Email</h5></td><td>: <?php echo $primary_info['email'];?></td><td style="width: 150px;text-align: right;"><?php if($primary_info['is_Everified'] == "0") {?><a id="verifyEmail" class="verifybutton" style="color: #ff0009;font-size: 18px;">Verify</a><?php } else {?><span style="color: #07c1eb;font-size: 18px;letter-spacing: 0.8px;">Verified</span><?php } ?></td>
              </tr>
              <tr>
                <td><h5>House No</h5></td><td>: <?php echo $contact_info['house_no'];?></td>
              </tr>
              <tr>
                <td><h5>Street Name</h5></td><td>: <?php echo $contact_info['street_name'];?></td>
              </tr>
              <tr>
                <td><h5>Area Name</h5></td><td>: <?php echo $contact_info['area_name'];?></td>
              </tr>
              <tr>
                <td><h5>Land Mark</h5></td><td>: <?php echo $contact_info['land_mark'];?></td>
              </tr>
              <tr>
                <td><h5>City</h5></td><td>: <?php echo $contact_info['city'];?></td>
              </tr>
              <tr>
                <td><h5>Disctrict</h5></td><td>: <?php echo $contact_info['district'];?></td>
              </tr>
              <tr>
                <td><h5>Contact Exchaged</h5></td><td>: <?php echo $primary_info['contact_exchaged'];?></td>
              </tr>
              <tr>
                <td><h5>No. Of Match Makings</h5></td><td>: <?php echo $primary_info['no_of_match_makings'];?></td>
              </tr>
              <tr>
                <td><h5>Comments</h5></td><td>: <?php echo $primary_info['comments'];?></td>
              </tr>
            </table>
          </div>

          <span><p class="tabHeading">Setting</p></span>
          <div class="DetailDiv">
            <input type="hidden" value="<?php echo base_url(); ?>dashboard/search/view_profile_contact_info/<?php echo $shareID?>" id="myInput">
            <table border="0">
              <tr>
                <td><h5>Copy Link</h5></td><td>: <a  onclick="copyToClipboard('#myInput')"><img src="<?php echo base_url(); ?>/images/whats_app.png" width="35px" height="35px" class="whatsapp_icon"> </a></td>
              </tr>
             <!-- <tr style="line-height: 5em;">
                <td><h5>Profile Type</h5></td>
                <td>:
					<input type="radio" name="profile_type" id="profile_type_reg" value="regular" <?php if($primary_info['ms_usertype'] == "regular")  { ?> checked <?php } ?>>
					<label for="yes">Regular&nbsp;</label>
					<input type="radio" name="profile_type" id="profile_type_conf" value="confidential" <?php if($primary_info['ms_usertype'] == "confidential")  { ?> checked <?php } ?>>
					<label for="yes">Confidential&nbsp;</label>
					<input type="radio" name="profile_type" id="profile_type_elite" value="elite" <?php if($primary_info['ms_usertype'] == "elite")  { ?> checked <?php } ?>>
					<label for="yes">Elite</label>
					
                </td>
              </tr> -->
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
          <div class="modal-header"><h4 class="modal-title">Update Contact Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            
          </div>
          <div class="modal-body">
            <form id="parentForm">
              <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Contact No : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="contact_no" id="contact_no"/>
                      <span id="contact_no_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Email : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="email" id="email"/>
                      <span id="email_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>House No : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="house_no" id="house_no"/>
                      <span id="house_no_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Street Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="street_name" id="street_name"/>
                      <span id="street_name_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Area Name : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="area_name" id="area_name"/>
                      <span id="area_name_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Land Mark : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="land_mark" id="land_mark"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>City : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="city" id="city"/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Disctrict : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="district" id="district"/>
                    </div>
                  </div>
                </div>
                <input type="hidden" value="<?php echo $primary_info['profileowner']; ?>" name="rm_name" id="rm_name">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Exchanged : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="contact_exchaged" id="contact_exchaged"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Contact Exchanged DATE: </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="date" class="form-control" name="contact_exchaged_date" id="contact_exchaged_date"/>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>No. Of Match Making : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="no_of_match_makings" id="no_of_match_makings"/>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Match Making date: </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="date" class="form-control" name="no_of_match_makings_date" id="no_of_match_makings_date"/>
                    </div>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Comments : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <textarea class="form-control" name="comments" id="comments"></textarea>    
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

    // For elite
    $('input[name="profile_type"]').click(function(){
        var profile_type = $(this).val();
        var userId = <?php echo $this->uri->segment(3) ?>;
		if(profile_type == "regular") {
			var eliteValue = "no";
		} else {
			var eliteValue = "yes";
		}
        $.ajax({
              type: "POST",
              url: "<?php echo base_url(); ?>admin/ws/updateEliteInfo",
              type: "POST",
              data: {
                  user_id: userId,
                  eliteValue: eliteValue,
				  usertype:profile_type
              },
              success: function(res) {
                if(res == 1)
                {
                  alert('Profile type updated successfully.');
                  // window.location.reload();
                }
              }
        });

    });

    // For mobile verify
    $("#verifyMNO").click(function(){
      var userId = <?php echo $this->uri->segment(3) ?>;
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/verifyMobile",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              if(res)
              {
                alert('Mobile verified successfully.');
                window.location.reload();
              }
              else
              {              
                alert('Process failed, please try again.');
              }
            }
      });
    });

    // For email verify
    $("#verifyEmail").click(function(){
      var userId = <?php echo $this->uri->segment(3) ?>;
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/verifyEmail",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              if(res)
              {
                alert('Email verified successfully.');
                window.location.reload();
              }
              else
              {              
                alert('Process failed, please try again.');
              }
            }
      });
    });
    
    // For Basic Detail Modal Popup data
    getContactDataForUpdate = function(){

      var userId = <?php echo $this->uri->segment(3) ?>;

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getContactDataForUpdate",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != null)
              { 
                  
                $('#contact_no').val(dt.mobile);
                $('#email').val(dt.email);              
                $('#house_no').val(dt.house_no);
                $('#street_name').val(dt.street_name);
                $('#area_name').val(dt.area_name);
                $('#land_mark').val(dt.land_mark);
                $('#city').val(dt.city);
                $('#district').val(dt.district);
                $('#contact_exchaged').val(dt.contact_exchaged);
                $('#no_of_match_makings').val(dt.no_of_match_makings);
                $('#comments').html(dt.comments);
              }
            }
      });
    }

    // For parents detail update
    $("form#parentForm").submit(function(e){
      e.preventDefault();
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/contactDetailUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Contact Details updated successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Contact Details update failed.');
            }
          }
        });
    });

  });
</script>
<script>
    // To copy link
    copyToClipboard = function(element){
      var $temp = $("<input>");
      $("body").append($temp);
      $temp.val($(element).val()).select();
      document.execCommand("copy");
      $temp.remove();
      alert("Link Copied");
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
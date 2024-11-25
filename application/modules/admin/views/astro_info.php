<link rel="stylesheet" href="<?php echo site_url();?>css/intlTelInput.css">
<script src='<?php echo site_url();?>js/jquery.min.js'></script>
<script src="<?php echo site_url();?>js/monetization.js" type="text/javascript"></script>
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


  ul.dropdown-content>a {
    display: block;
    padding: 10px 0;
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
          <span><p class="tabHeading">Astro Details</p></span>
          <a data-toggle="modal" data-target="#parentsDetailModal" class="btn btn-primary updateButton" onclick="getAstroDataForUpdate()">Edit Astro Details</a>
          <div class="DetailDiv">
            <table border="0">
              <tr>
                <td><h5>Gothram</h5></td><td>: <?php echo $astro_info['gothram'];?></td>
              </tr>
              <tr>
                <td><h5>Place of Birth</h5></td><td>: <?php echo $astro_info['place_of_birth'];?></td>
              </tr>
              <tr>
                <td><h5>Time of Birth</h5></td><td>: <?php echo $astro_info['time_of_birth'];?></td>
              </tr>
              <tr>
                <td><h5>Star</h5></td><td>: <?php echo $astro_info['star'];?></td>
              </tr>
              <tr>
                <td><h5>Paadam</h5></td><td>: <?php echo $astro_info['paadam'];?></td>
              </tr>
              <tr>
                <td><h5>Rasi</h5></td><td>: <?php echo $astro_info['raasi'];?></td>
              </tr>
              <tr>
                <td><h5>Dosham</h5></td><td>: <?php echo $astro_info['dosham'];?></td>
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
               <h4 class="modal-title">Update Astro Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
           
          </div>
          <div class="modal-body">
            <form id="parentForm">
              <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>;">
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Gothram : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="gothram" id="gothram"/>
                      <span id="contact_no_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Place of Birth : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <input type="text" class="form-control" name="place_of_birth" id="place_of_birth"/>
                      <span id="email_err" class="text-danger font-weight-bold"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Time of Birth : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <div class="input-group time" id="timepicker"><input class="form-control" name="time" id="time"/><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Raasi : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="raasi" name="raasi">
                         <option value="">Select Raasi</option>
                         <?php foreach($zodic_signs as $value) { ?>
                         <option value="<?php echo $value['zodic'];?>"><?php echo $value['zodic'];?></option><?php } ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Star : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="star" name="star">
                         <option value="">Select Star</option>
                         <?php foreach($stars as $value) { ?>
                         <option value="<?php echo $value['star'];?>"><?php echo $value['star'];?></option><?php } ?>
                      </select>
                    </div>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                      <label>Paadam : </label>
                  </div>
                  <div class="col-md-6 col-sm-7 col-xs-6">
                    <div class="form-group">
                      <select class="form-control" id="paadam" name="paadam">
                         <option value="">Select Paadam</option>
                         <option value="1"> 1 </option>
                         <option value="2"> 2 </option>
                         <option value="3"> 3 </option>
                         <option value="4"> 4 </option>
                      </select>
                    </div>
                  </div>
                </div>                   
                <div class="row">
                  <div class="col-md-4 col-sm-5 col-xs-6">
                    <label>Dosham : </label>
                  </div>
                  <div class="col-md-8 col-sm-7 col-xs-6">
                    <div class="form-radio-item pr-10">
                      <input type="radio" name="dosham" id="no" value="no">
                      <label for="no">No</label>
                      <span class="check"></span>

                      <input type="radio" name="dosham" id="yes" value="yes">
                      <label for="yes">Yes</label>
                      <span class="check"></span>
                      
                      <input type="radio" name="dosham" id="dont_know" value="dont_know">
                      <label for="dont_know">Don't Know</label>
                      <span class="check"></span>
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
                        </div>
<script src="<?php echo site_url();?>js/jquery.menu-aim.js"> </script>
  <script src="<?php echo site_url();?>js/main.js"></script> <!-- Resource jQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
  <!-- //menu js aim -->    
<!-- Calendar -->
  <link rel="stylesheet" href="<?php echo site_url();?>css/jquery-ui.css" />
  <script src="<?php echo site_url();?>js/jquery-ui.js"></script>
  <script src="<?php echo site_url();?>js/bootstrap.js"></script>
  <script>if (/Mobi/.test(navigator.userAgent)) {
  // if mobile device, use native pickers
  $(".date-time input").attr("type", "datetime-local");
  $(".date input").attr("type", "date");
  $(".time input").attr("type", "time");
} else {
  // if desktop device, use DateTimePicker
  $("#datetimepicker").datetimepicker({
    icons: {
      time: "fa fa-clock-o",
      date: "fa fa-calendar",
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down",
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#datepicker").datetimepicker({
    useCurrent: false,
    format: "L",
    icons: {
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#timepicker").datetimepicker({
    format: "LT",
    icons: {
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down"
    }
  });
}
</script>
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

    // For Basic Detail Modal Popup data
    getAstroDataForUpdate = function(){

      var userId = <?php echo $this->uri->segment(3) ?>;

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getAstroDataForUpdate",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              var dt = JSON.parse(res);
              if(dt != null)
              { 
                $('#gothram').val(dt.gothram);
                $('#place_of_birth').val(dt.place_of_birth);              
                $('#time').val(dt.time_of_birth);
                $("#raasi > [value='"+dt.raasi+"']").attr("selected", "true");
                $("#star > [value='"+dt.star+"']").attr("selected", "true");
                $("#paadam > [value='"+dt.paadam+"']").attr("selected", "true");
                $("input[name=dosham][value='"+dt.dosham+"']").attr('checked', "true");
              }
            }
      });
    }

    // For parents detail update
    $("form#parentForm").submit(function(e){
      e.preventDefault();
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/astroDetailUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Astro Details updated successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Astro Details update failed.');
            }
          }
        });
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
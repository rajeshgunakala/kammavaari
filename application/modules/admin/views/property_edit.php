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
   <div id="page-inner">
       <div class="container" style="padding: 40px 0; background:#ffffff;">
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
                      <ul class="bxslider" style="    height: auto;
    width: 100%; overflow: hidden;text-align: center; padding:0px">
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
                  <p style="color: #00818e"><?php echo $primary_info['profile_id']; ?></p>
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
          <span><p class="tabHeading">Property Details</p></span>
          <a data-toggle="modal" data-target="#parentsDetailModal" class="btn btn-primary updateButton" onclick="getPropertyDataForUpdate()">Edit Property Details</a>
          <div class="DetailDiv">
            <table border="0">
              <tr>
                <td><h5>Property Type </h5></td><td>: <?php echo !empty($property_info['Property_type']) ? $property_info['Property_type'] : "";?></td>
              </tr>
              <tr>
                <td><h5>Property Value</h5></td><td>: <?php if(!empty($property_info['property_value']))
				{
					
					echo $property_info['property_value']." <span> Cr</span>" ;
					
				}
				
				else { 
					echo "NA";
				}?></td>
              </tr>
              <tr>
                <td><h5>Property Description</h5></td><td>: <?php echo !empty($property_info['property_Desc']) ? nl2br($property_info['property_Desc']) : ""; ?></td>
              </tr>
            </table>
          </div>
         </div>
	  </div>
    </div> 
    <!-- Modal -->
    <div class="modal fade" id="parentsDetailModal" style="" role="dialog">
      <div class="modal-dialog">      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
               <h4 class="modal-title">Update Property Details</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
           
          </div>
          <div class="modal-body">
            <form id="propertyForm">
              <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>">                
                <div class="col-md-12">
                  <div class="col-md-3 col-sm-5 col-xs-3 no-padding">
                    <label>Property Type</label>
                  </div>
                     <div class="d-flex my-3">
                  <div class="col-md-3 col-xs-3">
                      <input type="radio" name="Property_type" id="family" value="family">
                      <label for="family">Family</label>
                      <span class="check"></span>
					</div>
					
					<div class="col-md-3 col-xs-3">
                      <input type="radio" name="Property_type" id="shared" value="shared">
                      <label for="shared">Shared</label>
                      <span class="check"></span>
                    </div>
                    </div>
					<span id="property_type_error" class="text-danger font-weight-bold"></span>					
                </div>
                <div class="row">
                   <div class="col-md-12 col-sm-7 col-xs-12 my-3">
                   <label for="employee_in">Property Value </label>
				   <input type="text" class="form-control" name="property_value" maxlength="5" onKeyPress="return isNumber(event)"  id="property_value" >
					<span>Crores</span>																	
                  </div>
                </div>
		
                <div class="row my-3">
                  <div class="col-md-12 col-sm-5 col-xs-6">
                      <label>Property Description</label>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="form-group">
                      <textarea class="form-control" name="property_Desc" id="property_Desc" cols="20" rows="5"></textarea>
                    </div>
                  </div>
                </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="btn-submit" style="margin: 0 30%;">
                      <input type="submit" value="Submit Property Details" class="btn btn-primary">
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
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 46 || charCode > 57)) {
        return false;
    }
    return true;
}
  $(document).ready(function() {

    // Get the modal
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
    getPropertyDataForUpdate = function(){

      var userId = <?php echo $this->uri->segment(3) ?>;

      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/getPropertyDataForUpdate",
            type: "POST",
            data: {
                user_id: userId
            },
            success: function(res) {
              var dt = JSON.parse(res);
			  if(dt != null && dt.Property_type != "") {
				$("input[value="+dt.Property_type+"]").attr('checked', 'checked');			  
				$('#property_value').val(dt.property_value);
				$("#property_value > [value='" + dt.property_value + "']").attr("selected", "true");
				$('#property_Desc').val(dt.property_Desc);
			  }
            }
      });
    }

    function validation()
    {
       var family = document.getElementById('family').checked;
       
       var shared = document.getElementById('shared').checked;
       var property = document.getElementById('property_value').value;
      
       if(family==false && shared==false)
       {
            document.getElementById('property_type_error').innerHTML = "Please select property type";
           
            return false;
       }else{
            document.getElementById('property_type_error').innerHTML = " ";
       }
    }
    // For parents detail update
    $("form#propertyForm").submit(function(e){
      e.preventDefault();

      var status = validation();
      if(status == true || status == undefined)
      { 
        $.ajax({
          url: "<?php echo base_url(); ?>admin/ws/propertyDetailUpdate",
          type: "POST",
          data: new FormData(this),
          contentType: false,
          processData: false,
          success: function(res)
          {
            if(res)
            {
              alert('Property Details updated successfully.');
              window.location.reload();
            }
            else
            {              
              alert('Property Details update failed.');
            }
          }
        });
      }
    });

  });
</script> 
</body>
</html>   
<div class="new-side-content">
      <div id="page-inner">
      <div class="container" style="margin-top:40px;">
         <div class="row col-xs-12">
            <?php $user_id=$this->uri->segment(3);  ?>
            <div class="col-md-3 col-xs-3 no-padding edit_left_nav " style="background: #eeeeee;">
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
                     <ul class="bxslider" style="height:250px;height:250px;overflow: hidden;text-align: center;">
                        <?php
                           if ($profile_pic[0]['applicationphotopath']) {  ?>
                        <img src="<?php echo $profile_pic[0]['applicationphotopath']; ?>" class="profil-img" style="width:100%;">
                        <?php } else { ?>
                        <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img" style="width:100%;">
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
               <div class="col-xs-12 edit_right_box">
                  <div class="col-xs-12 view-profile">
                     <h1 class="page-header"><i class="fa fa-user" aria-hidden="true"></i> Profile Photo Details Details</h1>
                     <div class="col-xs-12 no-padding text-center">
                        75% of our users feel they need at least 5 photos to send an expression of interest.. <u>Upload More</u>
                     </div>
                     <?php if ($this->session->flashdata('msg_succ') != '') { ?>
                     <div class="alert alert-block alert-success" style="clear:both">
                        <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                        </button>
                        <p>
                           <?php echo $this->session->flashdata('msg_succ') ? $this->session->flashdata('msg_succ') : ''; ?>
                        </p>
                     </div>
                     <?php } ?>
                     <?php if ($this->session->flashdata('msg') != '') { ?>
                     <div class="alert alert-block alert-danger" style="clear:both">
                        <button type="button" class="close" data-dismiss="alert">
                        <i class="ace-icon fa fa-times"></i>
                        </button>
                        <p>
                           <?php echo $this->session->flashdata('msg') ? $this->session->flashdata('msg') : ''; ?>
                        </p>
                     </div>
                     <?php } ?>
                     <form method="POST" action="" enctype="multipart/form-data" class="register-form" id="register-form">
					 <?php 
						if(count($images_info) > 0) {?>
						<div class="col-xs-12">
                        <input type="hidden" value="<?php echo $this->uri->segment(3); ?>" name="user_id" class="user_id"/>
						 <h3 class="page-header"><strong>Update photos:</strong></h3>
                        <?php 
                           $user_id=$user_id = $this->uri->segment(3);
                           $i=0;
						   foreach($images_info as $value) { if($value['ismain']==1){
							   $photoName = (!empty($value['applicationphotopath'])) ? $value['applicationphotopath'] : site_url().'images/profilepics/'.$user_id.'/'.$value['photoname'];
							   ?>     
								<div class="col-3" style="    border: 1px solid #f97832;
    padding: 10px;
    border-radius: 10px;">
								   <div class="col-xs-12 no-padding img-profile-edit">
										
									  <img style="width:154px;height:150px;" src="<?php echo $photoName;?>">
								   </div>
								   <div class="col-xs-12 no-padding change_btn_ms p-2" style="border-radius: 10px;
    color: white; 
    background-color: #f97832;">
									  <a href="<?php echo site_url();?>admin/imagesedit/<?php echo $value['photos_id'];?>">
										 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
											<circle cx="12" cy="12" r="3.2"/>
											<path d="M9 2L7.17 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2h-3.17L15 2H9zm3 15c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"/>
											<path d="M0 0h24v24H0z" fill="none"/>
										 </svg>
										 <span class="text-light ">Change Photo</span>
									  </a>
								   </div>
								 </div>
                         <?php }  $i++; }  ?>
						 </div>
                        <?php } ?>
                        <div class="col-xs-12 ">
                           <h3 class="page-header"><strong>Upload photos:</strong></h3>
                           <div class="col-12 d-flex align-items-center my-2">
                              <div class="col-5 no-padding mr-4">
                                 <input type="file" name="image" class="form-control"/>
                              </div>
                              <div class="col-3 no-padding btn ">
                                 <input class="submit bsbb darkbg1 white bdr" type="submit" value="SUBMIT" name="submit" id="submit"></input>                
                              </div>
                           </div>
                           <div class="col-xs-12 small_txt_ms " style="font-size:12px" >
                              Strong Photo Privacy options | No downloads allowed | Photos are Watermarked ( Jpeg, Jpg, PNG | Upto 10MB | 5 Photos only )
                           </div>
                        </div>
                        <div class="col-xs-10 pull-right border-top-ms border-bottom-ms" style="display:none;">
                           <div class="col-xs-12 title-privacy_ms">
                              Photo Privacy
                           </div>
                           <div class="col-xs-12 no-padding">
                              <div class="col-xs-3 ">
                                 Photo Visible to 
                              </div>
                              <div class="col-xs-9">
                                 <div class="form-group">
                                    <select class="form-control" id="sel1">
                                       <option>Visible to All ( Recommended )</option>
                                       <option>Visible to Me</option>
                                       <option>Visible</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 small_txt_ms">
                              Your profile pic has been set successfully
                           </div>
                           <div class="col-xs-6 small_txt_ms no-margin">
                              75% of our users feel they need at least 3 photos to send an expression of interest
                           </div>
                           <div class="col-xs-6">
                              <!--<div class="col-xs-6"><button class="submit bsbb darkbg1 white bdr">Upload</button></div>-->
                              <div class="col-xs-6"><input type="submit" value="Upload" name="submit" id="submit" class="submit bsbb darkbg1 white bdr"></div>
                              <div class="col-xs-6 small_txt_ms no-margin" style="line-height:36px"><u>Skip & Continue</u></div>
                           </div>
                        </div>
                        <div class="col-xs-12" style="border-top: solid 1px #ccc; margin-top: 20px; padding-top: 20px;">
                           <div class="col-xs-2 box-upload_ms">
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                 <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                                 <path d="M0 0h24v24H0z" fill="none"/>
                              </svg>
                           </div>
                           <div class="d-flex justify-conttent-between flex-wrap">
                           <?php $i=0;foreach($images_info as $value) { 
						   $i++;
						  // print_r($value);
						   //echo $value['applicationphotopath'];exit;
						   $photoNameGrid = (!empty($value['applicationphotopath'])) ? $value['applicationphotopath'] : site_url().'images/profilepics/'.$user_id.'/'.$value['photoname'];
						   ?>
                           <div class="col-xs-3  m-1 photo1_upload_ms  img-profile-edit " style="    border: 1px solid #f97832;
    padding: 10px;
    border-radius: 10px;">
                              <img style="width:154px;height:150px;" src="<?php echo $photoNameGrid;?>">
                              <?php if($value['ismain']!=1){ ?>
                                 <div class=" p-2 my-2" style="border-radius: 10px; color: white; background-color: #f97832;">
                                     <span class="delete_image" data-id="<?php echo $value['photos_id']; ?>" style="cursor:pointer"><i class="fa fa-times"></i></span>
                              <span class="set_profile" data-id="<?php echo $value['photos_id']; ?>" style="cursor:pointer">Set as Profile Pic</span></div>
                              
                              <?php } ?>
                           </div>
                           <?php } ?>
                           </div>
                          
                           <div class="col-xs-2 photo2_upload_ms">
                           </div>
                           <div class="col-xs-2 photo3_upload_ms">
                           </div>
                        </div>
                        <div class="col-xs-12 having_troble_ms text-center">
                           Having trouble uploading?
                        </div>
                        <div class="col-xs-12 text-center small_txt_ms no-margin">
                           You can email your photos with your profile id to <a href="mailto:photos@kammavaari.com?subject = Feedback&body = Message">photos@kammavaari.com</a>
                        </div>
                     </form>
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
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Update Property Details</h4>
                  </div>
                  <div class="modal-body">
                     <form id="propertyForm">
                        <input type="hidden" name="userId" id="userId" value="<?php echo $this->uri->segment(3) ?>">                
                        <div class="row">
                           <div class="col-md-4 col-sm-5 col-xs-6">
                              <label>Property Type : </label>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-6">
                              <div class="form-radio-item pr-10">
                                 <input type="radio" name="Property_type" id="family" value="family">
                                 <label for="family">Family</label>
                                 <span class="check"></span>
                                 <input type="radio" name="Property_type" id="shared" value="shared">
                                 <label for="shared">Shared</label>
                                 <span class="check"></span>
                              </div>
                              <div style="margin-top:-15px;" id="property_type_error" class="text-danger font-weight-bold"></div>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4 col-sm-5 col-xs-6">
                              <label>Property Value : </label>
                           </div>
                           <div class="col-md-6 col-sm-7 col-xs-6">
                              <div class="form-group">
                                 <input type="text" class="form-control" name="property_value" id="property_value"/>
                                 <span id="property_valueErr" class="text-danger font-weight-bold"></span>
                              </div>
                           </div>
                           <div class="col-md-2 col-sm-7 col-xs-6">
                              <label>In Lakh</label>
                           </div>
                        </div>
                        <div class="row">
                           <div class="col-md-4 col-sm-5 col-xs-6">
                              <label>Property Description : </label>
                           </div>
                           <div class="col-md-12 col-sm-12 col-xs-12">
                              <div class="form-group">
                                 <textarea class="form-control" name="property_Desc" id="property_Desc" cols="20" rows="5"></textarea>
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
		if (isset($images_infoADM) && count($images_infoADM) > 0) { ?>
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
											foreach ($images_infoADM as $value) {
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
   </div>  </div>
<script src="<?php echo base_url(); ?>/js/jquery-1.12.4.js"></script>
<script>
   $(document).ready(function() {
   
     $('.delete_image').on('click', function() {  
   
       var rec_id=$(this).attr("data-id");  
       var confirm_status = confirm("Are you sure?");
       var user_id=$(".user_id").val();
       
       if(confirm_status){     
         $.ajax({
           type: "POST",
           url: "<?php echo site_url(); ?>dashboard/delete_image",
           data: {'rec_id':rec_id},
           dataType:"text",
           success:
           function(data){           
                alert("Photo deleted successfully");
                window.location.reload();
           }              
         });
       }        
     });
                 
            
             
     $('.set_profile').on('click', function() {     
        //  alert(1);
         var rec_id=$(this).attr("data-id");        
         var user_id=$(".user_id").val();       
         $.ajax({
           type: "POST",
           url: "<?php echo site_url(); ?>dashboard/set_profile_pic_admin",
           data: {'rec_id':rec_id,'user_id':user_id},
           success:
           function(data){              
                alert("Profile pic updated successfully");           
                window.location.reload();            
           }          
         });        
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
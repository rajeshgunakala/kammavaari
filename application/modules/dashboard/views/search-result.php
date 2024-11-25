<style>
    .tm_meta li {
    margin: 0 0 0px !important;
}
.cd-pagination li.current {
background-color: #e43659;
}
.cd-pagination li.current a {
    color: #fff;
    border-radius: 0;
	border-color: #e43659;
}
</style>
<div class="main__content teamSinglePage pb-0">
	<div class="container">
		<div class="row">
		
	            	<a class="back_link pl-2 mb-3" href="<?php echo site_url();?>dashboard/search_partner"><i class="icofont-circled-left back_link_arrow"></i> Modify search results</a>
	            </div>
				<div class="row main_content_top">
				<p class="col-md-12 heading">
					<span><?php echo $total_search_profiles?></span>  Search Result Profiles 
				</p>
			</div>
	            
	        </div>
			 
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-9">
					<?php  foreach($search_records as $value){
               
                		?>
						<div class="box_styles row pt-3 pb-4">
							<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
								<div class="team_thumb">
								<?php  $fileExists = fopen($value['applicationphotopath'], 'r');
								if($value['applicationphotopath']!="" && $fileExists && $value['ismain']==1 && $value['isactive']==1) { ?>
							            <img src="<?php echo $value['applicationphotopath']; ?>" class="profileImg"  alt="<?php echo $value['last_name'];?>"> 
									 <?php } else{ ?>
									    <?php if($value['gender']=='male') { ?>
									     <img src="<?php echo site_url();?>images/boy.png"  class="profileImg" alt="<?php echo $value['last_name'];?>">
									    <?php }else { ?>
									    <img src="<?php echo site_url();?>images/female.jpg"  class="profileImg" alt="<?php echo $value['last_name'];?>">
									    <?php } ?>
										 
									 <?php } ?>
								</div>
							</div>
							<div class="col-lg-9 col-md-9 col-sm-8">
							    
							    <div class="row">
							    
							    <div class="col-md-7">
							        
							        <div class="team_content">
    									<b style="color:black;font-size:18px; font-family: "Times New Roman", Times, serif !important;"><?php echo $value['last_name'];?> | <?php echo $value['profile_id'];?></b>
    									<ul class="tm_meta mb_103 mb-3">
    										<li><i class="icofont-business-man"></i>D.O.B And Height: <b><?php echo date('d-M-Y',strtotime($value['dob'])) ;?> , <?php echo $value['height'];?> ''</b></li>
    										<li><i class="icofont-education"></i>Education: <b><?php echo $value['heighst_education'];?></b></li>
    										<li><i class="icofont-bag-alt"></i>Profession: <b><?php echo $value['occupation'];?></b></li>
    										<li><i class="icofont-star-shape"></i>Gothram / Star / Raasi: <b>
    										    <?php if($value['gothram']=='' || $value['gothram']==NULL) { ?> NA <?php } else { echo $value['gothram']; } ?>
    										    /
    										    <?php if($value['star']=='' || $value['star']==NULL) { ?> NA <?php } else { echo $value['star']; } ?>
    										    /
    										    <?php if($value['raasi']=='' || $value['raasi']==NULL) { ?> NA <?php } else { echo $value['raasi']; } ?>
    										 </b></li>
    									</ul>
								    </div>
								
							    </div>
							    
							    <div class="col-md-5">
							        <div class="team_content">
    									<h6><p></p></h6>
    									<ul class="tm_meta mb_103 mb-3">
    									    <li><i class="icofont-ui-map"></i>Living in: <b><?php echo $value['living_in'];?></b></li>
    									    <li><i class="icofont-ui-rating"></i>Religion: <b><?php echo $value['caste'];?>, <?php echo $value['religion'];?> </b></li>
    										<li><i class="icofont-package"></i>Package: <b>
    										    <?php if($value['annual_income']=='' || $value['annual_income']==NULL) { ?> NA <?php } 
    										    else { echo $value['annual_income']; } ?></b></li>
    										<li><i class="icofont-building"></i>Job Location: <b>
    										    <?php if($value['city']=='' || $value['city']==NULL) { ?> NA <?php } else { echo $value['city']; } ?></b></li>
    										
    									</ul>
    									<div class="tm_social">
    									    <?php
    									     
    									       if($pprimary_info["ms_usertype"]=='regular') 
        									   { 
                    					             $showinterestedp = count($showinterestcount);
                    					             if(710 <= $showinterestedp)
                    					             {
                    					             ?>
                    					             <a href="javascript:void(0)" class="profile_detail_icons" data-toggle="modal" data-target="#showinterestmodelpopup"><i class="icofont-heart-alt"></i></a>
                    					             <?php
                    					             }
                    					             else
                    					             {
                    					              ?>
                    					               	<a href="javascript:void(0)" title="Show Interest" class="contact_now" id="profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-heart-alt"></i></a>
                    					             <?php   
                    					             }
        
        									   }
        									   else if($pprimary_info["ms_usertype"]=='confidential')
        									   {
        									         $showinterestedp = count($showinterestcount);
                    					             if(710 <= $showinterestedp)
                    					             {
                    					             ?>
                    					             <a href="javascript:void(0)" class="profile_detail_icons" data-toggle="modal" data-target="#showinterestmodelpopup"><i class="icofont-heart-alt"></i></a>
                    					             <?php
                    					             }
                    					             else
                    					             {
                    					              ?>
                    					               	<a href="javascript:void(0)" title="Show Interest" class="contact_now" id="profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-heart-alt"></i></a>
                    					             <?php   
                    					             }
        									   }
        									   else if($pprimary_info["ms_usertype"]=='superconfidential')
        									   {
        									         $showinterestedp = count($showinterestcount);
                    					             if(1210 <= $showinterestedp)
                    					             {
                    					             ?>
                    					             <a href="javascript:void(0)" class="profile_detail_icons" data-toggle="modal" data-target="#showinterestmodelpopup"><i class="icofont-heart-alt"></i></a>
                    					             <?php
                    					             }
                    					             else
                    					             {
                    					              ?>
                    					               	<a href="javascript:void(0)" title="Show Interest" class="contact_now" id="profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-heart-alt"></i></a>
                    					             <?php   
                    					             }
        									   }
        									   else if($pprimary_info["ms_usertype"]=='elite')
        									   {
        									        $showinterestedp = count($showinterestcount);
                    					             if(1210 <= $showinterestedp)
                    					             {
                    					             ?>
                    					             <a href="javascript:void(0)" class="profile_detail_icons" data-toggle="modal" data-target="#showinterestmodelpopup"><i class="icofont-heart-alt"></i></a>
                    					             <?php
                    					             }
                    					             else
                    					             {
                    					              ?>
                    					               	<a href="javascript:void(0)" title="Show Interest" class="contact_now" id="profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-heart-alt"></i></a>
                    					             <?php   
                    					             }
        									   }
    									   
            					            ?>
    					            
    									
    										<a href="javascript:void(0)" title="Get RM Details" class="rm_details" id="rm_data_<?php echo $value['id']; ?>" data-name="<?php echo $value['rm_name'];?>#<?php echo $value['rm_phone'];?>#<?php echo $value['rm_email'];?>"><i class="icofont-phone"></i></a>
    										<a href="javascript:void(0)" title="Shortlist Profile" class="shortlist_update" id="shortlist_profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-book-mark"></i></a>
    										<a href="javascript:void(0)" title="Decline Interest" class="ignore_update" id="ign_profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-close"></i></a>
    									</div>
    									<div class="mt-3">
    										<a href="javascript:void(0)" data-id="<?php echo $value['profile_id'];  ?>"  class="view_profile btn btn-black max-206 m-2 btn-grad-orange" >View Profile</a>
    									</div>
								    </div>
							    </div>
							    
							    </div>
								
							</div>
						</div>
			   <?php  }?>
						
		
						<!-- Pagination Start Here-->
						<div class="mt-3">
						<nav role="navigation">
						<ul class="cd-pagination">
						<?php echo $this->pagination->create_links(); ?>		
							</ul>
						</nav>
					 </div>

						 <!-- Pagination Ends Here -->
					</div>
					<div class="col-md-12 col-lg-3 col-xs-12 p-0">
						<!--  Confidential Profiles Slider Content Start Here-->
						<?php  if(count($conf_profiles_for_regular) > 0 && $primary_info['ms_usertype'] == "regular") {?>
	                    <div class="dashboard_main_content p-0">
	                        <div class="row main_content_top">
	                            <p class="col-md-12 heading">
	                                <span><?php echo count($conf_profiles_for_regular) ?></span>  Confidential Profiles 
	                            </p>
	                        </div>
	                        <div class="confidential_profile">
	                        	<div class="slider responsive main_slider m-0">
							 <?php foreach($conf_profiles_for_regular as $value) { ?>
	                            <div class="multiple main_slider_in">
	                                <div  class="imgContainers">
									<?php if($value['image']!="" && $value['ismain']==1 && $value['isactive']) { ?>
							            <img src="<?php echo site_url();?>images/profilepics/<?php echo $value['id'];?>/<?php echo $value['image']; ?>" alt="<?php echo $value['last_name']; ?>"> 
									 <?php } else{ ?>
										<img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>"> 
									 <?php } ?>
	                                </div>
	                                <div class="col-md-12 main_slider_in_content">
	                                    <p title="<?php echo $value['last_name']; ?>"><?php echo $value['last_name']; ?></p>	                                    
	                                </div>
	                            </div>
							<?php } ?>	                            
	                        </div>
	                        <div class="fullWidthBlur">
	                        	<img alt="" class="ka-locked" src="<?php echo site_url();?>assets/kammavaari/images/lock_ic.svg">
	                        	<p class="pt-2 pb-3">As a confidential user, <br> you have the privilege to browse and select from thousands of profiles on Kammavaari Matrimony. </p>
	                        	<a class="btn btn-teal min-140" data-toggle="modal" data-target="#exampleModal">Upgrade Your Membership</a>
	                       	</div>
	                       	</div>
	                    </div>
						<?php } ?>	    
	                    <!--  Confidential Profiles Slider Content Ends Here-->
					</div>
				</div>
				
				 
			</div>
		</div>

        		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog profile_popup">
		    <div class="modal-content popup_main_in">      
		        <button type="button" class="close close_btn close_btn1 text-right" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      <div class="modal-body row">
		        <div class="col-md-12 text-center">
		        	<p class="font-size-16 font-weight-500 pb-4">Are You Sure?</p>
					<button class="btn btn-black mr-3 btn-grad-orange width-120" type="submit">Yes</button>
					<button class="btn btn-black m-2 btn-grad-orange width-120" type="submit">No</button>
				</div>
		      </div>
		    </div>
		  </div>
		</div>
		
<script>
  $(document).ready(function() {
      $(".ShortListADM").click(function(){
          var profileID = $(this).attr("data-id");
          $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/sendOnshortlist",
            data: {'to_user_id':profileID},
            context:this,
            success:
            function(data){
                              
            }
          });
      });

      $(".expressInterest").click(function(){
          var profileID = $(this).attr("data-id");
          $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/sendProfileOnMail",
            data: {'toProfileId':profileID},
            context:this,
            success:
            function(data){
                if(data > 0)
                {
                    alert("Profile Send successfully");
                }              
            }
          });
      });

      $(".expressInterestUnpaid").click(function(){
          var profileID = $(this).attr("data-id");
          $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/sendProfileOnMailunPaidAc",
            data: {'toProfileId':profileID},
            context:this,
            success:
            function(data){
                if(data > 0)
                {
                    alert("Profile Send successfully");
                }
                else if(data == 0)
                {
                  $("#myModal").modal();
                }
            }
          });
      });
  });
</script>

<style>
	@media(max-width:575px){
		.team_thumb {
			max-width: 290px;
			margin: auto;
			margin-bottom: 20px;
		}
	}
</style>
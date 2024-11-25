<style>
    .tm_meta li {
    margin: 0 0 0px !important;
}
</style>
<div class="main__content teamSinglePage pb-0">
	 <div class="row main_content_top">
		<div class="container">
			<div class="row main_content_top">
				<p class="col-md-12 heading">
					<span><?php echo $total_decision_pending_profiles; ?></span>  Myside Pending Profiles 
				</p>
			</div>
			<div class="row">
				<div class="col-md-9">
				
				<?php  foreach($decision_pending_profiles as $value){ ?>
					<div class="box_styles row pt-3 pb-4">
						<div class="col-lg-3 col-md-3 col-xs-12">
							<div class="team_thumb">
								<?php  $fileExists = fopen($value['applicationphotopath'], 'r');
								if($value['applicationphotopath']!="" && $fileExists && $value['ismain']==1 && $value['isactive']==1) { ?>
							            <img src="<?php echo $value['applicationphotopath']; ?>" class="profileImg"  alt="<?php echo $value['last_name'];?>"> 
									 <?php } else{ ?>
										<img src="<?php echo site_url();?>images/noimage.jpg"  class="profileImg" alt="<?php echo $value['last_name'];?>"> 
									 <?php } ?>
							</div>
						</div>
						<div class="col-lg-9 offset-lg-1 col-md-9">
						    
						    <div class="row">
						        
						        <div class="col-md-7">
						            <div class="team_content">
        								<b style="color:black;font-size:18px; font-family: "Times New Roman", Times, serif !important;"><?php echo $value['last_name'];?> | <?php echo $value['profile_id'];?></b>
    									<ul class="tm_meta mb_103 mb-3">
    										<li><i class="icofont-business-man"></i>D.O.B And Height: <b><?php echo date('d-M-Y',strtotime($value['dob'])) ;?> , <?php echo $value['height'];?> '' Height</b></li>
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
    									<h4><p></p></h4>
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
        									<a href="javascript:void(0)" title="Get RM Details" class="rm_details" id="rm_data_<?php echo $value['id']; ?>" data-name="<?php echo $value['rm_name'];?>#<?php echo $value['rm_phone'];?>#<?php echo $value['rm_email'];?>"><i class="icofont-phone"></i></a>
        									<a href="javascript:void(0)" title="Shortlist Profile" class="shortlist_update" id="shortlist_profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-book-mark"></i></a>
        									<a href="javascript:void(0)" title="Decline Interest" class="ignore_update" id="ign_profile_<?php echo $value['id']; ?>" data-name="<?php echo $value['last_name'];?>" data-id="<?php echo $value['id'];  ?>"><i class="icofont-close"></i></a>
        								</div>
        								<div class="mt-3">
        									<a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" data-id="<?php echo $value['profile_id'];  ?>"  class="btn btn-black max-206 m-2 btn-grad-orange" >View Profile</a>
        								</div>
								    </div>
						        </div>
						        
						    </div>
						    
						    
							<!--<div class="team_content">
								<h4><?php echo $value['last_name'];?></h4>
								<ul class="tm_meta mb_103 mb-3">
									<li><i class="icofont-business-man"></i>Age And Height:<span><?php echo $value['cur_age'];?> Age, <?php echo $value['height'];?> inches Height</span></li>
									<li><i class="icofont-ui-rating"></i>Religion:<span> <?php echo $value['caste'];?>, <?php echo $value['religion'];?> </span></li>
									<li><i class="icofont-ui-map"></i>Address: <span> <?php echo $value['living_in'];?></li>
									<li><i class="icofont-bag-alt"></i>Education: <span><?php echo $value['heighst_education'];?></span></li>
									<li><i class="icofont-bag-alt"></i>Profession: <span><?php echo $value['occupation'];?></span></li>
								</ul>
								<div class="tm_social">
									<a href="#" title="Show Interest" class="<?php echo (count($payment_details)>0) ? 'contact_now' : 'update-contact-now';?>" data-id="<?php echo $value['profile_id'];  ?>"><i class="icofont-heart-alt "></i></a>
									<a href="#" title="Get RM Details"><i class="icofont-phone"></i></a>
									<a href="#" title="Message to bride"><i class="icofont-email"></i></a>
									<a href="#" class="shortlist_update" data-id="<?php echo $value['profile_id'];  ?>" title="Shortlist Profile"><i class="icofont-book-mark"></i></a>
									<a href="#"  class="ignore_update"  data-id="<?php echo $value['profile_id'];  ?>" title="Decline Interest"><i class="icofont-close"></i></a>
								</div>
								<div class="mt-4">
									<a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $value['profile_id'];?>" data-id="<?php echo $value['profile_id'];  ?>"  class="btn btn-black max-206 m-2 btn-grad-orange" >View Profile</a>
								</div>
								
							</div>-->
							
						</div>
					</div>
		   <?php } ?>
					<!-- Render pagination links -->
					<div class="mt-4">
						<nav role="navigation">
						<ul class="cd-pagination">
						<?php echo $this->pagination->create_links(); ?>		
							</ul>
						</nav>
					 </div>
				</div>
				<div class="col-md-3 col-xs-12 p-0">
					<!--  Confidential Profiles Slider Content Start Here-->
					<div class="dashboard_main_content p-0">
						<div class="row main_content_top">
							<p class="col-md-12 heading">
								<span>20</span>  Confidential Profiles 
							</p>
						</div>
						<div class="confidential_profile">
							<img src="<?php echo site_url()?>/assets/kammavaari/images/confi-profile-bg.png" alt="">
						<div class="fullWidthBlur">
							<img alt="" class="ka-locked" src="images/lock_ic.svg">
							<p class="pt-2 pb-3">As a confidential user, <br> you have the privilege to browse and select from thousands of profiles on Kammavaari Matrimony. </p>
							<a class="btn btn-teal min-140" data-toggle="modal" data-target="#exampleModal">Upgrade Your Membership</a>
						</div>
						</div>
					</div>
					<!--  Confidential Profiles Slider Content Ends Here-->
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
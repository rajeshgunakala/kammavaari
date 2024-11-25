	 <?php   
			$completeness=$profile_complete[0]->total;  
			  if($profile_complete[0]->religion==0){
                
               $complete_profile_link=site_url()."register/religion";
               $txt="Add Religion details to get 2 times more responses ( +10% )";
               $btn_txt="Add Religion details";
		   }
            else if($profile_complete[0]->edu_prof==0)
            {
                $complete_profile_link = site_url()."register/profession";
                $txt="Add Prefession details to get 2 times more responses ( +20% )";
                $btn_txt="Add Prefession details";
            }
            else if($profile_complete[0]->parents==0)
            {
                $complete_profile_link=site_url()."register/parents";
                $txt="Add Parent details to get 2 times more responses ( +10% )";
                $btn_txt="Add Parent details";
            }
            else if($profile_complete[0]->Siblings==0)
            {
                $complete_profile_link=site_url()."register/siblings";
                $txt="Add Siblings details to get 2 times more responses ( +20% )";
                $btn_txt="Add Siblings details";
            }
            else if($profile_complete[0]->photo==0)
            {
                $complete_profile_link=site_url()."register/upload";
                $txt="Add Images to get 2 times more responses ( +30% )";
                $btn_txt="Add Photos";
            }
            
             if($completeness!=100){
			 }
            ?>

<style>
    .textblue{
    color:blue !important;
}
</style>     
     
	<!-- Dashboard Banner Start Here -->
		<div class="dashboard_banner">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<section class="">
							<div class="row mobile-responsive-row">
		
								<div class="col-md-3 upload-photo" style="cursor: pointer;">
									<?php if($profile_pic[0]["applicationphotopath"] != ''){ ?>
									<div class="" ><img class="dashboard_profile_img" src="<?php echo $profile_pic[0]["applicationphotopath"]; ?>" ></div>
									<?php } else { ?>
									<div class="" ><img class="dashboard_profile_img" src="<?php echo site_url()?>images/noimage.jpg" ></div>
									<?php } ?>
								</div>
								<div class="col-9 col-md-9 dashboard_profile">
								
									<h2><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name'];?></h2>
									<p class="ka-small-p m-0 p-0">Profile ID - <span> <?php echo $primary_info['profile_id']; ?> </span><span> &nbsp;<?php if(($payment_details[0]['expiry_date'])==''){ }else{ ?> (Expiry Date -  <?php echo date("d/M/Y",strtotime($payment_details[0]['expiry_date'])); ?>)<?php } ?></span></p>
									<p class="ka-small-p m-0 p-0">Account Type - &nbsp; <span><?php echo ucwords($primary_info['ms_usertype']); ?></span></p>
									<p style="width: 50%; justify-content: space-between !important; cursor: pointer;">Profile Completeness <span> <?php echo $completeness; ?>%</span></p>
									<div class="progress">
										<div class="progress-bar" style="width: <?php echo $completeness; ?>%;">                                        
										</div>
									</div>   
								<!--	<?php if($primary_info['ms_usertype'] == "regular") {?>   -->
										<a class="btn btn-teal min-140" data-toggle="modal" data-target="#exampleModal">Upgrade Membership</a>
								<!--	<?php } ?>   -->
								</div>
							</div>
						</section>
					</div>
					<div class="col-md-5 rmSection">
						<div class="row mt-4">
							<div class="col-md-6 mrm_section"><img alt="" src="<?php echo base_url() ?>assets/kammavaari/images/relationship_ic.svg" /></div>
							<div class="col-md-6 mrm_section_right">
								<p class="m-0 p-0">
									YOUR RM<br />
									<span><?php echo ucwords($primary_info['rm_name']); ?></span><br />
									<span style="color:yellow;">+91 - <?php echo $primary_info['rm_phone']; ?></span><br />
									<span style="display:none;"><?php echo $primary_info['rm_email']; ?></span>
									<span>9:00AM to 6:00PM</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Dashboard Banner Ends Here -->

		<!--Profiles Cards Section Start Here-->
		<div class="profile_cards_section">			
			<div class="container">
					<div class="row mx-n2 profile_list-main">
					
					<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
						<div class="row profile_list profile_list_bg" style="cursor: pointer; background-color:MediumSeaGreen;">
							<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
								<p class="count"><?php echo count($contact_list); ?></p></div>
								<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
									<a href="<?php echo site_url();?>dashboard/contact_list"><p>Intrested Profiles</p>
									<div class="col-lg-12 col-md-12 profile_list_right">
										<!---->
										<?php $i=0;
										foreach($contact_list as $contact) { 
										$i++;?>
										<div class="profile_list_right_content">
											<?php if($contact["applicationphotopath"]) { ?>
										<img alt="" src="<?php echo $contact["applicationphotopath"]; ?>" />
									<?php } else { ?>
										<img alt="" src="<?php echo site_url;?>/images/no-image.jpg" />
									<?php } ?>	</div>
										<?php  if($i==3) 
										{ 
										break;	
										}
									} ?>
										<?php if(count($contact_list) > 3)  { ?>
										<div class="profile_list_right_content">
										<?php if($contact_list[3]["applicationphotopath"]) { ?>
										<img alt="" src="<?php echo $contact_list[3]["applicationphotopath"]; ?>" />
									<?php } else { ?>
										<img alt="" src="<?php echo site_url;?>/images/no-image.jpg" />
									<?php } ?><div class="cover_img">+ <?php echo count($contact_list)-3; ?></div>
										</div>
										<?php } 
										else if(count($contact_list) == 0)  { 
										?>
										<p>Not Available</p>
										<?php } ?>
										
									
								</div></a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
						<div  class="row profile_list profile_list_bg" style="cursor: pointer;background-color:DodgerBlue;">
							<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left"><p class="count"><?php echo count($viewed_contacts); ?></p></div>
							<div class="col-8 col-md-8 col-xs-8 col-sm-3 profile_list_right_main">
								<a href="<?php echo site_url();?>dashboard/recently_viewed">
								<p>Viewed Profiles</p>
								<div class="col-lg-12 col-md-12 profile_list_right">
									<?php $i=0;
									foreach($viewed_contacts as $viewed) { 
									$i++;?>
									<div class="profile_list_right_content">
										<?php if($viewed["applicationphotopath"]) { ?>
										<img alt="" src="<?php echo $viewed["applicationphotopath"]; ?>" />
									<?php } else { ?>
										<img alt="" src="<?php echo site_url();?>/images/no-image.jpg" />
									<?php } ?>
									</div>
									<?php  if($i==3) 
										{ 
										break;	
										}
									} ?>
									<?php if(count($viewed_contacts) > 3)  { ?>
										<div class="profile_list_right_content">
										<?php if($viewed["applicationphotopath"]) {?>
										<img alt="" src="<?php echo $viewed_contacts[3]["applicationphotopath"]; ?>" />
									<?php } else { ?>
										<img alt="" src="<?php echo site_url();?>/images/no-image.jpg" />
									<?php } ?>
									<div class="cover_img">+ <?php echo count($viewed_contacts)-3; ?></div>
										</div>
										<?php } 
										else if(count($viewed_contacts) == 0)  { 
										?>
										<p>Not Available</p>
										<?php } ?>
								</div></a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
						<div class="row profile_list profile_list_bg" style="cursor: pointer;background-color:Violet;">
							<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left">
								<p class="count"><?php echo count($shortlisted_profiles); ?></p></div>
								<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
									<a href="<?php echo site_url();?>dashboard/my_shortlist">
									<p>ShortList Profiles</p>
									<div class="col-lg-12 col-md-12 profile_list_right">
										<?php $i=0;
										foreach($shortlisted_profiles as $shortlist) { 
										$i++;?>
										<div class="profile_list_right_content">
										<?php if($shortlist["applicationphotopath"]) { ?>
										<img alt="" src="<?php echo $shortlist["applicationphotopath"]; ?>" />
									<?php } else { ?>
										<img alt="" src="<?php echo site_url();?>/images/no-image.jpg" />
									<?php } ?>		</div>
										<?php  if($i==3) 
										{ 
										break;	
										}
									} ?>
										<?php if(count($shortlisted_profiles) > 3)  { ?>
										<div class="profile_list_right_content">
										<?php if($shortlisted_count[3]["applicationphotopath"]) { ?>
										<img alt="" src="<?php echo $shortlisted_count[3]["applicationphotopath"]; ?>" />
									<?php } else { ?>
										<img alt="" src="<?php echo site_url();?>/images/no-image.jpg" />
									<?php } ?>
									<div class="cover_img">+ <?php echo count($shortlisted_profiles)-3; ?></div>
										</div>
										<?php } 
										else if(count($shortlisted_profiles) == 0)  { 
										?>
										<p>Not Available</p>
										<?php } ?>
									
								</div>
								</a>
							</div>
						</div>
					</div>
					
					<div class="col-12 col-sm-6 col-md-3 col-lg-3 px-2">
						<div class="row profile_list profile_list_bg" style="cursor: pointer;background-color:;">
							<div class="col-4 col-md-4 col-xs-3 col-sm-3 profile_list_left"><p class="count"><?php echo is_array($profile_intrest_by)?count($profile_intrest_by):'0'; ?></p></div>
							<div class="col-8 col-md-8 col-xs-8 col-sm-9 profile_list_right_main">
							<a href="<?php echo site_url();?>dashboard/Profileinterestedby_list">
								<p>Decision Pending</p>
								<div class="col-lg-12 col-md-12 profile_list_right">
									<?php if(count($profile_intrest_by) == 0)  { 
										?>
										<p>Not Available</p>
										<?php } else { $i=0;
									foreach($profile_intrest_by as $pending) { 
									$i++;?>
									<div class="profile_list_right_content">
										<img alt="" src="<?php echo site_url();?>/images/no-image.jpg" />
									</div>
									<?php  if($i==3) 
										{ 
										break;	
										}
									} ?>
									<?php if(count($profile_intrest_by) > 3)  { ?>
										<div class="profile_list_right_content">
										<img alt="" src="<?php echo site_url();?>/images/no-image.jpg" />
										<div class="cover_img">+ <?php echo count($profile_intrest_by)-3; ?></div>
										</div>
										<?php } } ?>
										
										
								</div>
								</a>
							</div>
						</div>
					</div>
					
	<!--			<div class="col-md-3 col-lg-3">
						<div class="row profile_list" data-toggle="modal" data-target="#exampleModal">
							<div  class="col-md-12">
								<div class="offers_card">
									<p>
										Upgrade Your Membership
										<br />
										<span>Offers Avaliable</span>
									</p>
								</div>
							</div>
						</div>
					</div>  -->
				</div>
			</div>
		</div>
		<!--Profiles Cards Section Ends Here-->

		<!-- Main Content Start Here -->
		<div class="main_content">
			<div class="container">
	            <div class="row">
	                <div class="col-md-9">
	                    
	                    
	                    <!-- Regular Profile Slider Content Start Here-->
	                    <div class="dashboard_main_content">
	                        <div class="row main_content_top">
	                            <p class="col-md-8 heading">
	                                <span><?php echo count($get_all_records); ?></span> New Profiles
	                            </p>
	                            <div class="show_all col-md-4">
	                                <a href="<?php echo site_url();?>dashboard/newprofiles">Show All Profiles</a>
	                            </div>
	                        </div>
	                        <div class="slider responsive main_slider">
							<?php if(count($get_all_records) > 0) {
									foreach($get_all_records as $value) { ?>
									<div class="multiple main_slider_in">
										<div  class="imgContainers">  <!--&& $value['ismain']==1 && $value['isactive']-->
										<?php if($value['applicationphotopath']!="") { ?>
    										   <?php 
    										      if($primary_info["ms_usertype"]=='regular') 
        										   { 
                        					             $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(61 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }

        										   }
        										   else if($primary_info["ms_usertype"]=='confidential')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(76 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }
        										   }
        										   else if($primary_info["ms_usertype"]=='superconfidential')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(101 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }
        										   }
        										   else if($primary_info["ms_usertype"]=='elite')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(101 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }
        										   }
    										   ?>
											<!-- <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>-->
										 <?php } else{ ?>
										 
										    <?php 
    										      if($primary_info["ms_usertype"]=='regular') 
        										   { 
                        					             $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(61 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }

        										   }
        										   else if($primary_info["ms_usertype"]=='confidential')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(76 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }
        										   }
        										   else if($primary_info["ms_usertype"]=='superconfidential')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(101 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }
        										   }
        										   else if($primary_info["ms_usertype"]=='elite')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(101 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					             <a href="javascript:void(0)" ><img data-toggle="modal" data-target="#viewprofilemodelpopup" src="<?php echo $value["applicationphotopath"];   ?>" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					               <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>
                        					             <?php   
                        					             }
        										   }
    										   ?>
    										   
    										   
											<!--<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>" > </a>-->
										 <?php } ?>
										</div>
										<div class="col-md-12 main_slider_in_content">
										    
										    <?php 
    										      if($primary_info["ms_usertype"]=='regular') 
        										   { 
                        					             $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(61 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					                   <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" data-toggle="modal" data-target="#viewprofilemodelpopup">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					                   <a   href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php   
                        					             }

        										   }
        										   else if($primary_info["ms_usertype"]=='confidential')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(76 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					                   <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" data-toggle="modal" data-target="#viewprofilemodelpopup">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					                    <a   href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php   
                        					             }
        										   }
        										   else if($primary_info["ms_usertype"]=='superconfidential')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(101 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					                  <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" data-toggle="modal" data-target="#viewprofilemodelpopup">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					                    <a   href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php   
                        					             }
        										   }
        										   else if($primary_info["ms_usertype"]=='elite')
        										   {
        										         $viewprofilesbyuser = count($countprofileviwesbyuser);
                        					             if(101 <= $viewprofilesbyuser)
                        					             {
                        					             ?>
                        					                   <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" data-toggle="modal" data-target="#viewprofilemodelpopup">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php
                        					             }
                        					             else
                        					             {
                        					              ?>
                        					                    <a   href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">	
                    										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
                    											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
                    											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
                    											<span><?php echo $value['heighst_education']; ?></span>
                    											<span><?php echo $value['occupation']; ?></span>
                    											</a>
                        					             <?php   
                        					             }
        										   }
    										?>
    										   
										    <!--<a   href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile">	
										    <p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p> 
											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
											<span><?php echo $value['heighst_education']; ?></span>
											<span><?php echo $value['occupation']; ?></span>
											</a>-->
                    											
										</div>
									</div>
							<?php } } else {?>
								     <p>No matches found</p>
							<?php } ?>
	                            
	                        </div>
	                    </div>
	                    <!-- Regular Profile Slider Content Ends Here-->

	                    <!--  Assisted Profiles Slider Content Start Here-->
						<?php if(count($assisted_profiles) > 0) {?>
	                    <div class="dashboard_main_content">
	                        <div class="row main_content_top">
	                            <p class="col-md-8 heading">
	                                <span><?php echo count($assisted_profiles) ?></span>  Assisted Profiles 
	                            </p>
	                            <div class="show_all col-md-4">
	                                <a href="<?php echo site_url();?>dashboard/assistedprofiles">Show All Profiles</a>
	                            </div>
	                        </div>
	                        <div class="slider responsive main_slider">
	                            <?php foreach($assisted_profiles as $value) { ?>
	                            <div class="multiple main_slider_in">
	                                <div  class="imgContainers"> <!-- && $value['ismain']==1 && $value['isactive']-->
									<?php if($value['applicationphotopath']!="") { ?>
							            <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php  echo $value['applicationphotopath']; ?>" alt="<?php echo $value['last_name']; ?>"></a> 
									 <?php } else{ ?>
										<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>"> </a>
									 <?php } ?>
	                                </div>
	                                <div class="col-md-12 main_slider_in_content">
	                                    <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p>
	                                    <span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
	                                    <span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
	                                    <span><?php echo $value['heighst_education']; ?></span>
	                                    <span><?php echo $value['occupation']; ?></span></a>
	                                </div>
	                            </div>
							<?php } ?>
	                        </div>
	                    </div>
						<?php } ?>
	                    <!--  Assisted Profiles Slider Content Ends Here-->
	                    
	                    <!--  Recommended Profiles Slider Content Start Here 08-03-2023 09-03-2023 -->
						<?php if(count($assisted_profiles) > 0) {?>
	                    <div class="dashboard_main_content">
	                        <div class="row main_content_top">
	                            <p class="col-md-8 heading">
	                                <span><?php if((count($assisted_profiles)) >= 3) { echo $we=3;}else { echo count($assisted_profiles); } ?></span>  Recommended Profiles 
	                            </p>
	                            <div class="show_all col-md-4 d-none">
	                                <a href="<?php echo site_url();?>dashboard/assistedprofiles">Show All Profiles</a>
	                            </div>
	                        </div>
	                        <div class="slider responsive main_slider">
	                            <?php $z=1; foreach($assisted_profiles as $value) {  
                                 if( $z <= 3)
                                 { ?>
                                 	<div class="multiple main_slider_in">
                                 	    
	                                <div  class="imgContainers"> <!--&& $value['ismain']==1 && $value['isactive']-->
									<?php if($value['applicationphotopath']!="") { ?>
							            <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php  echo $value['applicationphotopath']; ?>" alt="<?php echo $value['last_name']; ?>"></a> 
									 <?php } else{ ?>
										<a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>"></a>
									 <?php } ?>
	                                </div>
	                                <div class="col-md-12 main_slider_in_content">
	                                    <a href="javascript:void(0)" data-id="<?php echo $value["profile_id"]; ?>" class="view_profile"><p title="<?php echo $value['last_name']; ?>" class="textblue"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p>
	                                    <span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
	                                    <span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
	                                    <span><?php echo $value['heighst_education']; ?></span>
	                                    <span><?php echo $value['occupation']; ?></span></a>
	                                </div>
	                            </div>
                                 <?php } $z++;
	                             ?>
							    <?php } ?>
	                        </div>
	                    </div>
						<?php } ?>
	                    <!--  Recommended Profiles Slider Content Ends Here 08-03-2023 09-03-2023 -->
	                    
	                    
						<!--- System Suggested Profiles start here---->
						<?php if(count($suggestedProfiles) > 0) {?>
	                    <div class="dashboard_main_content">
	                        <div class="row main_content_top">
	                            <p class="col-md-8 heading">
	                                <span><?php echo count($suggestedProfiles) ?></span>  Suggested Profiles 
	                            </p>
	                            <div class="show_all col-md-4">
	                                <a href="<?php echo site_url();?>dashboard/suggestedprofiles">Show All Profiles</a>
	                            </div>
	                        </div>
	                        <div class="slider responsive main_slider">
	                            <?php foreach($suggestedProfiles as $value) { ?>
	                            <div class="multiple main_slider_in">
	                                <div  class="imgContainers">  <!--&& $value['ismain']==1 && $value['isactive']-->
									<?php if($value['applicationphotopath']!="") { ?>
							            <img src="<?php  echo $value['applicationphotopath']; ?>" alt="<?php echo $value['last_name']; ?>"> 
									 <?php } else{ ?>
										<img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>"> 
									 <?php } ?>
	                                </div>
	                                <div class="col-md-12 main_slider_in_content">
	                                    <p title="<?php echo $value['last_name']; ?>"><?php echo $value['last_name']; ?> | <?php echo $value["profile_id"]; ?> </p>
	                                    <span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
	                                    <span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
	                                    <span><?php echo $value['heighst_education']; ?></span>
	                                    <span><?php echo $value['occupation']; ?></span>
	                                </div>
	                            </div>
							<?php } ?>
	                        </div>
	                    </div>
						<?php } ?>
	                    
						<!--  System Suggested Profiles ends here --->
	                    <!--  Confidential Profiles Slider Content Start Here-->
						<?php if(count($conf_profiles_for_regular) > 0 && $primary_info['ms_usertype'] == "regular") {?>
	                    <div class="dashboard_main_content p-0">
	                        <div class="row main_content_top">
	                            <p class="col-md-8 heading">
	                                <span><?php echo count($conf_profiles_for_regular) ?></span>  Confidential Profiles 
	                            </p>
	                        </div>
	                        <div class="confidential_profile">
								<div class="slider responsive main_slider m-0">
								 <?php foreach($conf_profiles_for_regular as $value) { ?>
									<div class="multiple main_slider_in">
										<div  class="imgContainers">   <!--&& $value['ismain']==1 && $value['isactive']-->
										<?php if($value['image']!="") { ?>
											<img src="<?php echo site_url();?>images/profilepics/<?php echo $value['id'];?>/<?php echo $value['image']; ?>" alt="<?php echo $value['last_name']; ?>"> 
										 <?php } else{ ?>
											<img src="<?php echo site_url();?>images/noimage.jpg" alt="<?php echo $value['last_name']; ?>"> 
										 <?php } ?>
										</div>
										<div class="col-md-12 main_slider_in_content">
											<p title="<?php echo $value['last_name']; ?>"><?php echo $value['last_name']; ?></p>
											<span><?php echo $value['cur_age']; ?> Years, Height <?php echo $value['height']; ?></span>
											<span><?php echo $value['religion']; ?>, <?php echo $value['caste']; ?> <?php echo $value['mother_tounge']; ?></span>
											<span><?php echo $value['heighst_education']; ?></span>
											<span><?php echo $value['occupation']; ?></span>
										</div>
									</div>
								<?php } ?>	                            
								</div>
	                        <div class="fullWidthBlur">
	                        	<img alt="" class="ka-locked" src="<?php echo base_url() ?>assets/kammavaari/images/lock_ic.svg">
	                        	<p class="pt-2 pb-3">As a confidential user, <br> you have the privilege to browse and select from thousands of profiles on kammavaari Matrimony. </p>
	                        	<a class="btn btn-teal min-140" data-toggle="modal" data-target="#exampleModal">Upgrade Your Membership</a>
	                       	</div>
	                       	</div>
	                    </div>
						<?php } ?>
	                    <!--  Confidential Profiles Slider Content Ends Here-->
	                </div>

	                <div class="col-md-3 p-0">
	                    <div class="search_section">
	                    	<div class="text-center">
	                				<p>Why are you waiting, Start searching<br> your life partner</p>
	                				<a class="btn btn-teal btn_gradiant" href="<?php echo site_url()?>dashboard/search_partner">Search Now</a>
                  			</div>
	                    </div>
	                </div>
	            </div>            
	        </div>
		</div>
		<!-- Main Content Ends Here -->

		
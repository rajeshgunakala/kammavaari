<?php if(count($conf_profiles_for_regular) > 0 && $primary_info['ms_usertype'] == "regular") {?>
<div class="dashboard_main_content p-0">
	<div class="row main_content_top">
		<p class="col-md-12 heading">
			<span><?php echo count($conf_profiles_for_regular) ?></span>  Confidential Profiles 
		</p>
	</div>
	<div class="confidential_profile">
		<div class="imgContainers">
			<?php if($conf_profiles_for_regular[0]['image']!="" && $conf_profiles_for_regular[0]['ismain']==1 && $conf_profiles_for_regular[0]['isactive']) { ?>
				<img src="<?php echo site_url();?>images/profilepics/<?php echo $value['id'];?>/<?php echo $conf_profiles_for_regular[0]['image']; ?>" alt="profile_img"> 
			 <?php } else{ ?>
				<img src="<?php echo site_url();?>images/noimage.jpg" alt="profile_img"> 
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
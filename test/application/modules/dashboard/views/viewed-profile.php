<div class="viewed-profile-main">
	<div class="viewed-profile-head">
		<?php   $viewedContactsCount = count($viewed_contacts);  
		$this->session->set_userdata('viewed_contacts_count', $viewedContactsCount);
		// echo $this->session->userdata('viewed_contacts_count');die;
		?>

	<h2><?php echo count($viewed_contacts); ?> | Viewed Profiles </h2> <a href="<?php echo site_url();?>dashboard/recently_viewed">View all</a> </div>
	<?php $i=1;
	foreach($viewed_contacts as $contact) { ?>
	
	<div class="viewed-profile-item">
		<div class="viewed-profile-item-lft">
		<a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $contact['profile_id']; ?>">
		<?php  $fileExists = fopen($contact['applicationphotopath'], 'r');
								if($contact['applicationphotopath']!="" && $fileExists && $contact['ismain']==1 && $contact['isactive']==1) { ?>
							            <img src="<?php echo $contact['applicationphotopath']; ?>" alt="<?php echo $contact['last_name'];?>"> 
									 <?php } else{ ?>
										
										<?php if($contact['gender']=='male') { ?>
                                        <img src="<?php echo site_url();?>images/boy.png"  class="profileImg" alt="<?php echo $contact['last_name'];?>">
                                        <?php }else { ?>
                                        <img src="<?php echo site_url();?>images/female.jpg"  class="profileImg" alt="<?php echo $contact['last_name'];?>">
                                        <?php } ?> 
                                        
									 <?php } ?>
		
		
		</a>
		</div>
		<div class="viewed-profile-item-rgt">
		<p> <strong> <a href="<?php echo site_url();?>dashboard/search/profile/<?php echo $contact['profile_id']; ?>"><?php echo $contact["last_name"]; ?> <?php echo " | ".$contact["profile_id"]; ?></a></strong>
		<br><span class="mt-4">  <?php echo date('d-M-Y',strtotime($contact["dob"])); ?> , <?php echo $contact["height"]; ?> '' Height
		<br> <?php echo $contact["religion"]; ?>  , <?php echo $contact["caste"]; ?>  
		<br><?php echo $contact["heighst_education"]; ?>
    	<br></span></p>
		</div>
	</div>
	
	<?php
	$i++;if($i>15){break;}
	} ?>
	</div>
	
	
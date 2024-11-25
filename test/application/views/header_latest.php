<!DOCTYPE html>
<html lang="en" class="js no-touch backgroundsize csstransforms3d csstransitions">
<head>
<title>Kammavaari.com - Kamma Matrimony, Kamma Marriage Bureau</title>
<meta name="description" content="Kammavaari.com, fastest growing online matrimonial platform for Kammas in India and the world, has 1000s of Kamma brides and grooms. Kammavari VIvaha Vedika Online.">
<meta name="title" content="kammavaari.com - Kamma Matrimony, kamma Marriage Bureau">
<meta name="keywords" content="Telugu Marriage Bureau, Best matrimony sites in India, telugu matrimonial sites, Marriage bureau, Shaadi, Kamma Matrimony">
<link rel="canonical" href="https://www.kammavaari.com/">
<meta name="robots" content="INDEX, FOLLOW, ARCHIVE">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Kammavaari.com" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta property="og:locale" content="en_US">
<meta property="og:type" content="website">
<?php 
$ogTitle = isset($whatsapp_share_profile_title) && !empty($whatsapp_share_profile_title) ? $whatsapp_share_profile_title : "KammaVaari.com - Kamma Matrimony";
$ogDesc = isset($whatsapp_share_profile_desc) && !empty($whatsapp_share_profile_desc) ? $whatsapp_share_profile_desc : "kammavaari.com is one of the kamma matrimonial service in India";
$ogImage = isset($whatsapp_share_profile_image_url) && !empty($whatsapp_share_profile_image_url) ? $whatsapp_share_profile_image_url : "https://www.kammavaari.com/images/kammavaari.png";
?>
<meta property="og:title" content="<?php echo $ogTitle; ?>">
<meta property="og:description" content="<?php echo $ogDesc; ?>">
<meta property="og:url" content="https://www.kammavaari.com/">
<meta property="og:site_name" content="Kamma Matrimony">
<meta property="og:image" content="<?php echo $ogImage; ?>">
<meta name="google-site-verification" content="HgX3tbOQXER0tivoeG8ue72hULC6AXZ_h0myW_6bcdI">
<!--SEO END-->
<meta charset="utf-8">
  <!-- App css -->
<link href="<?php echo base_url();?>assets/kamma/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/kamma/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/kamma/css/theme.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>assets/kamma/css/kammamarriages.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/kamma/js/jquery.min.js"></script>
<style>
@media (min-width: 767px){
  button.navbar-toggle.msnnewmenu {
    display: none !important;
}
}
@media (max-width: 767px){
  button.navbar-toggle.msnnewmenu {
    display: block !important;
}
}
@media (min-width: 1200px){
  .new_media_deva{
    max-width : 100% !important;
    flex-basis : auto !important;
  }
}
@media (max-width: 400px){
  .logoClass {
      width: 260px;
  }
  .nav.navbar-nav.navbar-right {
      margin-top: 0;
      margin-right: 0;
      float: none;
      display: block;
  }
  .nav.navbar-nav.navbar-right li {
      text-align: center;
  }
}
</style>
</head>
<body>
<header>
               <nav class="navbar navbar-default navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header ">
			  <a class="navbar-brand" href="<?php echo base_url();?>">
				<img src="<?php echo base_url();?>images/logo.png" class="logoClass">
			  </a>	
			  <!-- <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
              </button>
            </div> -->
			  <button type="button" class="navbar-toggle msnnewmenu" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<!-- <span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> -->
        <i class="fas fa-bars"></i>
			  </button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse new_media_deva"  id="myNavbar2">
			  <ul class="nav navbar-nav navbar-right">
			      <?php if($this->session->userdata('user_email') == '' &&  $this->session->userdata('user_id') == '')  {?>
                <li><a href="<?php echo base_url();?>login/sendotp">Login </a></li>
                <li><a href="<?php echo base_url();?>">Home </a></li>
                <li><a href="<?php echo base_url();?>contactus"><img src="<?php echo base_url();?>/images/header_icon.png" class="headerNavIcon"></a></li>
                <?php } else {?> 
                <li class="nav-item"><a href="<?php echo site_url();?>dashboard/my_account">My Account</a></li>
                <li class="nav-item"><a class="searchmenu" href="<?php echo site_url();?>dashboard/search_partner">Search</a></li>
                <li class="dropdown <?php if( ($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="") || 
                      $this->uri->segment(2)=="religion" || 
                      $this->uri->segment(2)=="professionalinfo" || 
                      $this->uri->segment(2)=="parentsinfo" || 
                      $this->uri->segment(2)=="siblingsinfo" || 
                      $this->uri->segment(2)=="imagesinfo" )
                      { echo "active-menu"; } ?>" ><a href="<?php echo site_url();?>dashboard/imagesadd"><i class="fa fa-edit"></i> Manage Photo </a></li>
                <li class="nav-item"><a href="<?php echo site_url();?>dashboard/viewprofile" class="<?php if($this->uri->segment(2)=="viewprofile") { echo "active-menu"; } ?>"><i class="fa fa-fw fa-file"></i> View My Profile</a></li>
                <!--<li class="matches-dropdown" data-toggle="dropdown"><a href="">Matches</a>-->
                <li data-toggle="dropdown" class="matchmenu_ms"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Matches <span class="caret"></span></a>

                    <ul class="dropdown-menu">
                        <li class="<?php if ($this->uri->segment(2) == 'recently_viewed') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/recently_viewed" class="no-padding menu_txt_ms"><i class="fa fa-eye"></i> Recently Viewed</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'my_shortlist') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/my_shortlist" class="no-padding menu_txt_ms" ><i class="fa fa-tag"></i> My Shortlist</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'ignore_list') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/ignore_list" class="no-padding menu_txt_ms"><i class="fa fa-list-alt"></i> My Ignore List</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'contact_list') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/contact_list" class="no-padding menu_txt_ms"><i class="fa fa-address-book-o"></i> My Interested Profiles</a></li>
                        <li class="<?php if ($this->uri->segment(2) == 'contact_list') echo 'active-menu'; ?>" ><a href="<?php echo site_url(); ?>dashboard/profileinterestedby_list" class="no-padding menu_txt_ms"><i class="fa fa-address-book-o"></i> My Profile Interested By</a></li>
                    </ul>
                <?php /*?><li><a href="<?php echo site_url() ?>dashboard/payment" >Upgrade</a></li><?php */?>
                <li><a href="<?php echo site_url() ?>dashboard/feedback" >Help</a></li>
                <li class="<?php if($this->uri->segment(2)=="userinfo") { echo "active-menu"; } ?> dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php
                        //echo $this->session->userdata('user_id');
                        //$resultss = $this->helper('utility')->getuserdetbyid($this->session->userdata('user_id'));
                        //print_r($resultss);
                        if($profile_pic[0]['applicationphotopath']!=''){  ?>
                        <img src="<?php echo $profile_pic[0]['applicationphotopath']; ?>" width="30px" height="30px" style="border-radius:50%;" >
                        <?php }else{ ?>
                        <img src="<?php echo site_url();?>assets/images/user.jpg" width="30px" height="30px" style="border-radius:50%;" >
                        <?php } ?> <span class="caret"></span>
                    </a>
                      <ul class="dropdown-menu userprofile_ms" style=" right:0px !important; top:49px;" >
                            <li class="username">
                            <div class="name_profile_ms"><?php echo $this->session->userdata('user_name'); echo " (".$this->session->userdata('profile_id').")"; ?></div>
                            <div class="id_profile_ms">Account Type : 
                            <?php
                            $payment_details=$this->session->userdata('payment_level');
                            if($payment_details=="Free"){
                                echo "Free";// | <a href='".site_url()."dashboard/payment' class='upgrade-ms'>Upgrade Account</a>
                            }else if($payment_details=="Renewal"){
                                        echo "Renewal";// 
                                    }else{
                                         echo "Paid";
                                    }
                            ?>
                           <?php /*?> | <a href='<?php echo site_url();?>dashboard/payment' class='upgrade-ms'>Upgrade Account</a><?php */?>
                            </div>
                                <?php 
                                $completeness=$profile_complete[0]->total;
                                if($profile_complete[0]->religion==0){
                                   $complete_profile_link=site_url()."register/religion";
                                }
                                else if($profile_complete[0]->edu_prof==0)
                                {
                                    $complete_profile_link=site_url()."register/profession";
                                }
                                else if($profile_complete[0]->parents==0)
                                {
                                    $complete_profile_link=site_url()."register/parents";
                                }
                                else if($profile_complete[0]->Siblings==0)
                                {
                                    $complete_profile_link=site_url()."register/siblings";
                                }
                                else if($profile_complete[0]->photo==0)
                                {
                                    $complete_profile_link=site_url()."register/upload";
                                }
                                ?>
                                <div class="col-xs-12 no-padding">
                                <p class="profile_complete"><span><?php echo $completeness."%"; ?></span> Profile Completeness <?php if($completeness!=100){ ?>  | <a href="<?php echo $complete_profile_link ?>">Complete Your Profile </a><?php  } ?> </p>
                                </div>
                             </li>  
                             <li><div class="col-xs-12 no-padding usermenu_ms">
                                 <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/><path d="M0 0h24v24H0z" fill="none"/></svg> Edit Profile</a></div>
                                 <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg> Edit Partner Preference</a></div>
                                 <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>contactus"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 12h-2v-2h2v2zm0-4h-2V6h2v4z"/></svg> Feedback</a></div>
                                 <div class="col-xs-6"><a class="menu_txt_ms" href="<?php echo site_url();?>dashboard/logout"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"/></svg> Logout</a></div>
                                 </div></li>
                        </ul>
                </li>
				<?php } ?>
			  </ul>
			</div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
      </header>
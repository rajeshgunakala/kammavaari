<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Define Charset -->
      <meta charset="utf-8">
      <!-- Page Title -->
      <title>Matrimonial Website</title>
      <!-- Responsive Metatag -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0" keywords="kammavaari.com, shaadi, Shaadi Matrimony, matrimonial, matrimony, marriage Bureau, Matrimony sites, telugumatrimony
         ">
      <!-- Page Description and Author -->
      <meta name="description" content="kammavaari.com - Matrimony services for the people of All Community of India and the world,Telugu Matrimony, shaadi matrimonial,marriage bureau
         ">
      <meta name="description" content="kammavaari.com, shaadi, Shaadi Matrimony, matrimonial, matrimony, marriage Bureau, Matrimony sites, telugumatrimony" title="kammavaari.com - Shaadi Matrimony, Matrimonial Sites, Marriage Bureau" description="kammavaari.com - Matrimony services for the people of All Community of India and the world,Telugu Matrimony, shaadi matrimonial,marriage bureau">
      <meta name="author" content="Matrimonial"  title="kammavaari.com - Shaadi Matrimony, Matrimonial Sites, Marriage Bureau">
      <!-- Stylesheet
         ===================================================================================================	 -->
      <!-- Bootstrap -->
      <link href="<?php echo site_url();?>design/css/style.css?v=<?php echo time();?>" rel="stylesheet" media="screen">
      <link href="<?php echo site_url();?>design/css/bootstrap/bootstrap.min.css" rel="stylesheet" media="screen">
      <link href="<?php echo site_url();?>css/font-awesome.css" rel="stylesheet" media="screen">
      <link href="<?php echo site_url();?>design/css/bootstrap/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
      <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
      <!-- Grid galery -->
      <noscript>
         <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>design/css/grid/fallback.css" />
      </noscript>
      <link href="<?php echo site_url();?>design/css/mi_home.css?v=<?php echo time();?>" rel="stylesheet" media="screen">
      <!-- Media Queries -->
      <link href="<?php echo site_url();?>design/css/media-queries.css" rel="stylesheet" media="screen">
      <!-- Fav and touch icons -->
      <link rel="shortcut icon" href="<?php echo site_url();?>design/img/icons/favicon.ico">
      <link rel="apple-touch-icon" href="<?php echo site_url();?>design/img/icons/apple-touch-icon.png">
      <link rel="apple-touch-icon" sizes="72x72" href="<?php echo site_url();?>design/img/icons/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="<?php echo site_url();?>design/img/icons/apple-touch-icon-114x114.png">
      <link rel="stylesheet" href="<?php echo site_url();?>css/admin/css/jquery.fancybox.min.css">
      <link href="<?php echo site_url();?>css/admin/css/flexslider.min.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo site_url();?>css/admin/css/jquery.bxslider.min.css">
      <link rel="stylesheet" href="<?php echo site_url();?>css/admin/css/admin_custom.css">
   </head>
   <body>
      <header>
         <!--<div class="container-fluid">-->
         <ul class="navbar-nav">
         <li class="nav-item">
            <a href="<?php echo site_url();?>admin/admin_home?msg=back" class="nav-link">Dashboard</a>  
         </li>
         <li >
            <a href="#">My Account <span class="caret"></span></a>
            <!--<ul class="matches-dropdown-content dropdown">-->
            <ul class="sub-menu">
               <li><a href="<?php echo site_url();?>registration">Free Registrations</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url();?>admin/admin_search" class="dropdown-item">Search</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url(); ?>admin/express_interest" class="dropdown-item">Shared Profiles</a></li>
               <li><a href="<?php echo site_url(); ?>admin/express_interest?exint=1" class="dropdown-item">Express Interest</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url(); ?>admin/service_report" class="dropdown-item" >Service Reports </a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url();?>admin/admin_payment" class="dropdown-item">Payment Details</a></li>
            </ul>
         </li>
		 <li>
            <a href="#">Profiles<span class="caret"></span></a>
            <ul class="sub-menu">
               <li><a href="<?php echo site_url(); ?>admin/admin_pv" class="dropdown-item">Profile Validation</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url(); ?>admin/admin_pv/pv_result_myprofile" class="dropdown-item">My Profile</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url(); ?>admin/list_inactivate_profiles" class="dropdown-item">Inactive Profiles List</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url(); ?>admin/inactivate_profile" class="dropdown-item">Inactivate Profile</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url(); ?>admin/admin_del_profiles" class="dropdown-item">Delete/Settle Profile</a></li>
            </ul>
         </li>
         <li>
            <a href="#"> Masters <span class="caret"></span> </a>  
            <ul class="sub-menu">
               <li><a href="#" class="dropdown-item">CMS</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="#" class="dropdown-item">Religious Details</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="#" class="dropdown-item">Residence Details</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="#" class="dropdown-item">Education Details</a></li>
            </ul>
         </li>
         <li>
            <a href="#"> Maintainence <span class="caret"></span></a>             
            <ul class="sub-menu">
               <?php if($this->session->userdata('type')=='admin'){?> 
               <li><a href="<?php echo site_url();?>admin/profile_assign" class="dropdown-item">Un Assigned Profiless</a></li>
               <div class="dropdown-divider"></div>
               <?php } ?>  
               <li><a href="<?php echo site_url();?>admin/call_history" class="dropdown-item">Marketing Slide</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url();?>admin/marketing_reminders" class="dropdown-item">Marketing Reminder</a></li>
               <div class="dropdown-divider"></div>
               <!-- <a href="<?php echo site_url();?>admin/admin_photos" class="dropdown-item">Photos</a></li> -->
               <li><a href="<?php echo site_url();?>admin/photoshp_photos" class="dropdown-item">Photos</a></li>
               <div class="dropdown-divider"></div>
               <li><a href="<?php echo site_url();?>admin/admin_del_profiles" class="dropdown-item">Delete / Settle Profiles</a></li>
               </div>
            </ul>
         </li>
         <li>
            <a href="#"> Reports <span class="caret"></span> </a>  
            <ul class="sub-menu">
               <li><a href="#" class="dropdown-item">Registrations</a></li>
            </ul>
         </li>
         </nav>
         <div class="logout">
            <a href="<?php echo site_url();?>admin/log_out">Logout</a>
         </div>
         <div class="logout">
            <a href="javascript:void(0)"><?php echo ucfirst($this->session->userdata('uname'));?>&nbsp;&nbsp;</a>
         </div>
         <!--</div>-->
      </header>
      <!-- ======================= JQuery libs =========================== -->
      <script src="<?php echo site_url();?>design/js/jquery-1.8.2.min.js"></script>   
      <script src="<?php echo site_url();?>js/admin/jquery-1.12.4.js"></script>     
      <!-- Bootstrap.js-->
      <script src="<?php echo site_url();?>design/js/bootstrap.js"></script>
      <script src="<?php echo site_url();?>design/js/bootstrap-select.min.js"></script>        
      <!-- Gallery -->
      <script src="<?php echo site_url();?>design/js/modernizr.custom.26633.js"></script>
      <script src="<?php echo site_url();?>design/js/jquery.gridrotator.js"></script>        
      <!-- Slider -->
      <script src="<?php echo site_url();?>design/js/responsiveslides.min.js"></script>        
      <!-- Video Responsive-->
      <script src="<?php echo site_url();?>design/js/jquery.fitvids.min.js"></script>        
      <!-- Easing plugin ( optional ) -->
      <script src="<?php echo site_url();?>design/js/easing.js"></script>        
      <!-- UItoTop plugin -->
      <script src="<?php echo site_url();?>design/js/jquery.ui.totop.min.js"></script>        
      <!--  Waypoints -->
      <script src="<?php echo site_url();?>design/js/waypoints.min.js"></script>        
      <!-- Template custom script  -->
      <!-- <script src="<?php echo site_url();?>design/js/jquery-func.js"></script> -->
      <!-- ======================= End JQuery libs ======================= -->
      <script>
         $(document).ready(function(){
         
          $('.navbar-nav li a').click(function() {
          
           if($(this).next().hasClass('sub-menu')){
           /*  e.preventDefault();*/
             $('.sub-menu').slideUp();
             $('.navbar-nav ul li a').removeClass('active');
             if ($(this).next('.sub-menu').is(':visible')) {
               $(this).removeClass('active');
               $(this).next('.sub-menu').slideUp();
             } else {
               $(this).addClass('active');
               $(this).next('.sub-menu').slideToggle();
             }
           }
         });
         
         });
         
      </script>
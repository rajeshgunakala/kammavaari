<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


 <!-- App css -->
        <link href="<?php echo site_url(); ?>assets/kamma/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url(); ?>assets/kamma/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo site_url(); ?>assets/kamma/css/theme.min.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo site_url(); ?>assets/kamma/css_border-radius.scss" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo site_url(); ?>assets/kamma/js/jquery.min.js"></script>
        <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/admin_new.css?v=<?php echo time(); ?>" />
  <link rel="stylesheet" href="<?php echo site_url(); ?>css/style_new.css?v=<?php echo time(); ?>" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <title>Welcome to Kammavaari.com</title>
    <script type="text/javascript">
        function showform() {


            if (document.getElementById("thru_outside").checked)

            {
                document.getElementById("outside").style.display = "block";
                document.getElementById("manashaadi").style.display = "none";

            } else if (document.getElementById("thru_manashaadi").checked)

            {
                document.getElementById("outside").style.display = "none";
                document.getElementById("manashaadi").style.display = "block";


            }
        }
    </script>
<style>
.row {
	margin-right: 0;
    margin-left: 0;
}
.dropdown-menu {
    max-height: 280px;
    overflow-y: auto;
}



.new-left-contnet {
            max-width: 235px;
            background-color: #15283c;
            color: #fff;
            transition: all 0.3s;
            position: relative;
            z-index: 11;
            box-shadow: 0 0 3px 0px rgba(0, 0, 0, 0.4);
            float: left;
            width: 100%;
            background-image: url('images/layout_img/pattern_h.png');
            position: fixed;
            height: 100%;
            overflow: auto;
            top:0px;
        }



        /* #sidebar {
            min-width: 215px;
            max-width: 235px;
            background-color: #15283c;
            color: #fff;
            transition: all 0.3s;
            position: relative;
            z-index: 11;
            box-shadow: 0 0 3px 0px rgba(0, 0, 0, 0.4);
            float: left;
            width: 100%;
            background-image: url('images/layout_img/pattern_h.png');
            position: fixed;
            height: 100%;
            overflow: auto;
        } */

        .sidebar_blog_1,
        .sidebar_blog_2,
        .sidebar_blog_3 {
            float: left;
            width: 100%;
        }

        #sidebar ul li a {
            text-align: left;
        }

        #sidebar .sidebar-header strong {
            display: none;
            font-size: 1.8em;
        }

        #sidebar ul.components {
            padding: 15px 0;
            margin: 0;
            float: left;
            width: 100%;
        }

        #sidebar ul li a {
            padding: 15px 25px;
            display: block;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 300;
        }

        #sidebar ul li a:hover,
        #sidebar ul li a:focus {
            color: rgba(255, 255, 255, 0.95);
        }

        #sidebar ul.components li {
            position: relative;
        }

        #sidebar ul.components ul {
            background: #214162;
            padding: 20px 0;
        }

        #sidebar ul.components ul li a {
            font-size: 13px;
            color: rgba(255, 255, 255, .7);
            padding: 7px 35px;
            transition: 0.5s all;
        }

        #sidebar ul.components ul li a:hover {
            color: #fff;
            background: transparent;
            padding-left: 45px;
            transition: 0.5s all;
        }

        #sidebar ul li a i {
            margin-right: 20px;
            width: 15px;
            font-size: 20px;
            float: left;
        }

        .bottom_sidebar ul li {
            float: left;
            width: 50%;
            list-style: none;
        }

        a[data-toggle="collapse"] {
            position: relative;
        }

        #content {
            width: 100%;
            min-height: 100vh;
            transition: ease all 0.3s;
            position: relative;
            padding: 60px 25px 25px 305px;
            background: #f8f8f8;
        }

        .page_title {
            background: #fff;
            margin-top: 0;
            margin-bottom: 30px;
            padding: 25px 35px 22px 38px;
            box-shadow: 1px 0 5px rgba(0, 0, 0, 0.1);
            margin-left: -40px;
            margin-right: -40px;
            position: relative;
        }

        .page_title h2 {
            font-size: 20px;
            font-weight: 500;
            color: #15283c;
        }

        #sidebar.active+#content {
            padding-left: 115px;
        }

        .topbar .navbar {
            padding: 0;
            background: #4a6076;
            border: none;
            border-radius: 0;
        }

        .user_profle_side {
            display: flex;
        }

        .sidebar_user_info {
            padding: 15px 25px;
            background: #214162;
        }

        .user_img img {
            border-radius: 100% 100%;
            max-width: 100%;
        }

        .user_info {
            margin: 0 0 0 15px;
            padding-top: 15px;
        }

        .online_animation {
            width: 12px;
            height: 12px;
            background: #1ed085;
            border-radius: 100%;
            margin-top: 0;
            position: relative;
            top: 1px;
            -webkit-animation: online 2s infinite;
            /* Safari 4.0 - 8.0 */
            animation: online 2s infinite
        }


        /* Safari 4.0 - 8.0 */

        @-webkit-keyframes online {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes online {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .user_info p {
            font-size: 13px;
            font-weight: 500;
            color: #1ed085;
            margin: 0;
        }

        .user_info h6 {
            font-size: 17px;
            font-weight: 500;
            color: #fff;
            letter-spacing: 0;
        }

        .user_img {
            width: 75px;
            height: 75px;
            float: left;
        }

        .logo_section {
            padding: 0;
            width: auto;
            text-align: center;
            background: transparent;
            float: left;
        }

        .logo_section img {
            height: 42px;
            padding: 0;
            margin: 8px 15px 0;
        }

        #sidebar.active .logo_section a {
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .logo_section img.logo_icon {
            margin: 0;
            text-align: center;
            padding: 8px 8px;
            height: 60px;
        }

        #sidebar h4 {
            background: #15283c;
            margin: 0;
            padding: 21px 25px 19px;
            font-weight: 500;
            font-size: 18px;
            color: #fff;
            border-bottom: solid #ff5722 1px;
        }


        .brown_color {
            color: #795548 !important;
        }

        .brown_bg {
            background: #795548 !important;
        }

        .blue1_color {
            color: #2196f3 !important;
        }

        .blue1_bg {
            background: #2196f3 !important;
        }

        .orange_color {
            color: #ff5722 !important;
        }

        .orange_bg {
            background: #ff5722 !important;
        }

        .purple_color {
            color: #673ab7 !important;
        }

        .purple_bg {
            background: #673ab7 !important;
        }

        .purple_color2 {
            color: #3f51b5 !important;
        }

        .purple_bg2 {
            background: #3f51b5 !important;
        }

        .blue2_color {
            color: #03a9f4 !important;
        }

        .blue2_bg {
            background: #03a9f4 !important;
        }

        .red_color {
            color: #e91e63 !important;
        }

        .red_bg {
            background: #e91e63 !important;
        }

        .yellow_color {
            color: #ff9800 !important;
        }

        .yellow_bg {
            background: #ff9800 !important;
        }

        .purple_color2 {
            color: #9c27b0 !important;
        }

        .purple_bg2 {
            background: #9c27b0 !important;
        }

        .orange_color2 {
            color: #f44336 !important;
        }

        .orange_bg2 {
            background: #f44336 !important;
        }

        .green_color {
            color: #009688 !important;
        }

        .green_bg {
            background: #009688 !important;
        }

        .topbar {
            position: fixed;
            width: calc(100%);
            padding-left: 235px;
            z-index: 2;
            background: #15283c;
            top: 0;
            transition: ease all 0.3s;
            left: 0;
        }

        .new-side-content {
            width: calc(100% - 225px);
            margin-left: auto;
            margin-right: 0;
        }

        .limiter {
            width: auto !important;
        }


        ul.notification {
            display: inline-flex;
        }

        ul.notification li a {
            color: #fff;
            position: relative;
            padding: 0 10px;
        }

        ul.notification li a span.badge {
            position: absolute;
            left: 15px;
            top: -12px;
            background: #ffffff;
            border-radius: 50%;
            color: #3F51B5;
        }

        /* scroll bar css */
        ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #3366FF;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(0deg,
                    rgba(255, 255, 255, 0.5) 25%,
                    transparent 25%,
                    transparent 50%,
                    rgba(255, 255, 255, 0.5) 50%,
                    rgba(255, 255, 255, 0.5) 75%,
                    transparent 75%,
                    transparent)
        }

        /* scroll bar css ends */

        div#collapse_target1,.new-left-contnet{
            z-index: 9999 !important;
        }
        /* responsive start */
        @media (max-width: 991px) {
            .new-left-contnet {
                min-width: auto;
                max-width: 188px;
            }

            .new-side-content {
                width: calc(100% - 188px);

            }

            .topbar {
                padding-left: 188px;
            }

            .user_profle_side {
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .user_profle_side .user_info {
                padding: 0;
                margin: 0;
            }

            .user_info p {
                text-align: center;
            }

            #sidebar h4 {
                padding: 10px 15px 10px;
            }

            #sidebar ul li a {
                padding: 13px 10px;
            }

            #sidebar ul.components ul li a {
                font-size: 13px;
                color: rgba(255, 255, 255, .7);
                padding: 7px 20px;
            }

            table#users {
                background: #fff;
            }

            .table100 {
                /* background: #fff !important; */
                overflow-x: auto;
            }
        }

        @media (max-width: 767px) {
            div#collapse_target1 {
                display: flex;
                padding: 0 10px 0 10%;
            }
        }

        @media (max-width: 575px) {
            .new-left-contnet {
                min-width: auto;
                max-width: 105px;
            }

            .new-side-content {
                width: calc(100% - 90px);
            }

            #sidebar ul li a i {
                margin-right: 0;
                width: auto;
                font-size: 30px;
                float: none;
                display: block;
                text-align: center;
                margin-bottom: 8px;
            }

            #sidebar ul li a {
                padding: 8px 5px;
                text-align: center;
            }

            #sidebar ul.components ul li a {
                font-size: 13px;
                color: rgba(255, 255, 255, .7);
                padding: 7px 5px;
                text-align: left;
            }

            #sidebar ul.components ul {
                background: #214162;
                padding: 10px 0;
            }
            .topbar {
                padding-left: 100px;
            }
        }

        @media (max-width: 480px) {
            div#collapse_target1 {
                display: flex;
                padding: 0 5px 0 10%;
            }
        }

        @media (max-width: 400px) {
            div#collapse_target1 {
                display: flex;
                padding: 10px 5px 10px 10%;
                flex-direction: column;
                gap: 12px;

            }

            .new-side-content {
                padding-top: 65px;
            }
        }

        /* responsive ends */
        /* new styles ends */
    </style>


</head>

<body>
        <!-- Begin page -->
      
               
                <div class="new-left-contnet">
                <nav id="sidebar">
            <div class="sidebar_blog_1">

                <div class="sidebar_user_info">
                    <div class="icon_setting"></div>
                    <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="https://themewagon.github.io/pluto/images/layout_img/user_img.jpg" alt="#" /></div>
                        <div class="user_info">
                            <h6> <span class="nav-link"><?php echo ucfirst($this->session->userdata('uname')); ?></span></h6>
                            <p><span class="online_animation"></span> Online</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sidebar_blog_2">
                <h4>Generallll-latest</h4>
                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="<?php echo site_url(); ?>admin/MyDashboard?msg=back" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        <!-- <ul class="collapse list-unstyled" id="dashboard">
                            <li>
                                <a href="dashboard.html">> <span>Default Dashboard</span></a>
                            </li>
                            <li>
                                <a href="dashboard_2.html">> <span>Dashboard style 2</span></a>
                            </li>
                        </ul> -->
                    </li>

                    <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-diamond purple_color"></i> <span>My Account</span></a>
                        <ul class="collapse list-unstyled" id="element">
                            <li><a href="<?php echo site_url(); ?>register">> <span>Free Registrations</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/basic_search">> <span>Search</span></a></li>
                           <li> <a href="<?php echo site_url(); ?>admin/express_interest" class="dropdown-item">Shared Profiles</a></li>
                            <li><a href="<?php echo site_url(); ?>admin/express_interest?exint=1">> <span>Express Interest</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/service_report">> <span>Service Reports</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/enterpayment">> <span>Payment Details</span></a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="tables.html"><i class="fa fa-table purple_color2"></i> <span>Profiles</span></a></li> -->
                    <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-object-group blue2_color"></i> <span>Profiles</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                            <li><a href="<?php echo site_url(); ?>admin/admin_pv">> <span>Profile Validation</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/admin_pv/pv_result_myprofile">> <span>My Profile</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/list_inactivate_profiles">> <span>Inactive Profiles List</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/inactivate_profile">> <span>Inactivate Profile</span></a></li>
                            <li><a href="<?php echo site_url(); ?>admin/admin_del_profiles">> <span>Delete/Settle Profile</span></a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="price.html"><i class="fa fa-briefcase blue1_color"></i> <span>Pricing Tables</span></a></li> -->
                    <!-- <li>
                        <a href="contact.html">
                            <i class="fa fa-paper-plane red_color"></i> <span>Contact</span></a>
                    </li> -->
                    <li class="active">
                        <a href="#additional_page" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Masters</span></a>
                        <ul class="collapse list-unstyled" id="additional_page">
                            <li>
                                <a href="#">> <span>CMS</span></a>
                            </li>
                            <li>
                                <a href="#">> <span>Religious Details</span></a>
                            </li>
                            <li>
                                <a href="#">> <span>Residence Details</span></a>
                            </li>
                            <li>
                                <a href="#">> <span>Education Details</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="#additional_page_master" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-clone yellow_color"></i> <span>Maintainence</span></a>
                        <ul class="collapse list-unstyled" id="additional_page_master">
                            <?php if ($this->session->userdata('type') == 'admin') {  ?>
                                <li>
                                    <a href="<?php echo site_url(); ?>admin/profile_assign" class="dropdown-item"><span>Un Assigned Profiless</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>admin/addeditstaff" class="dropdown-item"><span>/Edit Staff</span></a>
                                </li>
                            <?php  } ?>

                            <li>
                                <a href="<?php echo site_url(); ?>admin/call_history">> <span>Marketing Slide</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(); ?>admin/marketing_reminders">> <span>Marketing Reminder</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(); ?>admin/photoshp_photos">> <span>Photos</span></a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(); ?>admin/emailtemplates">> <span>Email Templates</span></a>
                            </li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="#additional_page_reports" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-cog yellow_color"></i></i> <span>Reports</span></a>
                        <ul class="collapse list-unstyled" id="additional_page_reports">
                            <li>
                                <a href="#">> <span>Registrations</span></a>
                            </li>
                            <?php if ($this->session->userdata('type') == 'admin') { ?>

                                <li>
                                    <a href="#">> <span>Payment History</span></a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>admin/rm_profile_list" class="nav-link">
                                        <spam>Profiles By RM</spam>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url(); ?>admin/register_list" class="nav-link">
                                        <spam>Register List</spam>
                                    </a>
                                </li>

                            <?php  } ?>
                            <li>
                                <a href="<?php echo site_url(); ?>admin/online_users" class="nav-link">
                                    <spam>Online Users</spam>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url(); ?>admin/getSearchPageMyProfile" class="nav-link" style="color:red;">My Profile (New*)</a>
                            </li>
                        </ul>
                    </li>

                    <li><a href="<?php echo site_url(); ?>admin/online_users" class="nav-link"><i class="fa fa-bar-chart-o green_color"></i>
                            <spam>Online Users</spam>
                        </a></li>
                    <li class="nav-item">
                        <a href="<?php echo site_url(); ?>admin/logout" class="nav-link"><i class="fa fa-bar-chart-o green_color"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </nav>


                               </div>
                               <div class="topbar">
        <nav class="navbar navbar-expand-md navbar-bg">
            <!-- <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                <span class="navbar-toggler-icon"> </span>
            </button> -->
            <div class="collapse navbar-collapse" id="collapse_target1" style="justify-content: space-between;">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><img src="<?php echo site_url(); ?>images/logo-light.png" alt="kvm" width="220"></a>
                    </li>

                </ul>
                <ul class="notification">
                <div class="d-flex align-items-center">
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect waves-light" id="page-header-notifications-dropdown"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-bell"></i>
									
                                    <span class="badge badge-danger badge-pill"><?php echo $notifications["login_count"]; ?></span>
                                    
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0"><a href="#"> Notifications </a></h6>
                                                <?php
                                    foreach ($notifications["total_records"] as $value) {	?>
                                    <ul class="dropdown-primary"> 
                                    <li><mark><?php echo stripcslashes($value['last_name']).' '.stripcslashes($value['first_name']); ?></mark></li>
                                    
                                    </ul>
                                <?php } ?>
                                            </div>
                                            <div class="col-auto">
                                                <a href="<?php echo base_url(); ?>admin/notifications" class="small"> View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                             
                </ul>
            </div>
        </nav>
    </div>

              
    <?php session_start(); ?>
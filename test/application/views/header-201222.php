<!DOCTYPE html>
<html lang="en" class="js no-touch backgroundsize csstransforms3d csstransitions">
<head>
<title>Kammavaari.com - Kamma Matrimony, Kamma Marriage Bureau</title>
<meta charset="utf-8">
<meta name="description" content="Kammavaari.com, fastest growing online matrimonial platform for Kammas in India and the world, has 1000s of Kamma brides and grooms. Kammavari VIvaha Vedika Online.">
<meta name="title" content="kammavaari.com - Kamma Matrimony, kamma Marriage Bureau">
<meta name="keywords" content="Telugu Marriage Bureau, Best matrimony sites in India, telugu matrimonial sites, Marriage bureau, Shaadi, Kamma Matrimony">
<link rel="canonical" href="https://www.kammavaari.com/">
<meta name="robots" content="INDEX, FOLLOW, ARCHIVE">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta content="Kammavaari.com" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php 
$ogTitle = isset($whatsapp_share_profile_title) && !empty($whatsapp_share_profile_title) ? $whatsapp_share_profile_title : "KammaVaari.com - Kamma Matrimony";
$ogDesc = isset($whatsapp_share_profile_desc) && !empty($whatsapp_share_profile_desc) ? $whatsapp_share_profile_desc : "kammavaari.com is one of the kamma matrimonial service in India";
$ogImage = isset($whatsapp_share_profile_image_url) && !empty($whatsapp_share_profile_image_url) ? $whatsapp_share_profile_image_url : "https://www.kammavaari.com/images/kammavaari.png";
?>
<!-- MS Tile - for Microsoft apps-->
<meta name="msapplication-TileImage" content="<?php echo $ogImage; ?>">    

<!-- Site Name, Title, and Description to be displayed -->
<meta property="og:site_name" content="kammavaari">
<meta property="og:title" content="<?php echo $ogTitle; ?>">
<meta property="og:description" content="<?php echo $ogDesc; ?>">

<!-- Image to display -->
<meta property="og:image" content="<?php echo $ogImage; ?>">

<!-- No need to change anything here -->
<meta property="og:type" content="website" />
<meta property="og:locale" content="en_US">
<meta property="og:image:type" content="image/jpeg">

<!-- Size of image. Any size up to 300. Anything above 300px will not work in WhatsApp -->
<meta property="og:image:width" content="300">
<meta property="og:image:height" content="300">

<!-- Website to visit when clicked in fb or WhatsApp-->
<meta property="og:url" content="http://www.kammavaari.com">
<meta name="google-site-verification" content="HgX3tbOQXER0tivoeG8ue72hULC6AXZ_h0myW_6bcdI">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url();?>images/favicon-32x32.png">
<!--SEO END-->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet" media="all">
<link href="https://unpkg.com/@icon/icofont/icofont.css" rel="stylesheet" media="all">
  <!-- App css -->
<link href="<?php echo base_url();?>assets/kammavaari/css/bootstrap-grid.css" rel="stylesheet" media="all" >
<link href="<?php echo base_url();?>assets/kammavaari/css/style.css" rel="stylesheet" media="all" >
<link href="<?php echo base_url();?>assets/kammavaari/css/slick.css" rel="stylesheet" media="all" >
<link href="<?php echo base_url();?>assets/kammavaari/css/font-awesome.min.css" rel="stylesheet" media="all" >
<link href="https://unpkg.com/@icon/icofont/icofont.css" rel="stylesheet" media="all">
<script src="<?php echo base_url();?>assets/kammavaari/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/kammavaari/js/jquery.validate.js"></script>
</head>
<body>
<div class="wrapper">
	<header class="header bg-color">
	<div class="container container-1250 navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
            		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>images/logo-light.png" alt="kvm" width="220" ></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				 <?php if($this->session->userdata('user_email') == '' &&  $this->session->userdata('user_id') == '')  {?>
					<li class="nav-item"><a class="nav-link login_pop" data-toggle="modal" data-target="#loginModal">Login</a></li>
					<li class="nav-item"><a  class="nav-link" href="<?php echo base_url();?>registration">Register</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>aboutus">About Us</a></li>
					<li class="nav-item"><a  class="nav-link" href="<?php echo base_url();?>contactus">Contact Us</a></li>
			  <?php } else {?> 
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/index">Home</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/search_partner">Search</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/my_account">My Account</a>
				</li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>aboutus">About Us</a></li>
					<li class="nav-item"><a  class="nav-link" href="<?php echo base_url();?>contactus">Contact Us</a></li>
			
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url() ?>contactus">Help</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/logout">Logout</a>
				</li>
				<?php } ?>	
			</ul>
		</div>
		<div class="menu-overlay"></div>
	</div>
	</header>
	<!-- Login Popup Start Here -->
<form class="welcome-form"  id="login-popup" method="POST" action="" novalidate="novalidate">
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog popup_main login_popup">
    <div class="modal-content popup_main_in">
      <div class="modal-header popup_header">
        <h2 class="modal-title" id="exampleModalLabel">Login</h2>
        <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <div class="col-md-12 pt-1 pb-3 edit_password_content">
        	<p class="pb-3 text-center">Enter your Email ID / Registered Mobile Number and we'll send you an OTP to your Registered Email ID / Mobile Number.</p>
			<div class="form-group">
				<input type="text" name="mobile" id="mobile" maxlenth="10" required class="form_control col-md-12 p-2" placeholder="Please enter Email ID / Mobile number"/>
			</div>
			<div class="form-group">
				<input type="text" name="otp" id="otp" maxlenth="6" required class="form_control col-md-12 p-2 otp_no" placeholder="Enter OTP number"/>
			</div>
			<span class="text-right"><a href="javascript:void(0);" class="resend_otp">Resend OTP</a></span>
			<p class="text-center messages"></p>
			<input class="btn btn-black m-2 btn-grad-orange edit_submit login_submit" name="login" type="submit" value="Submit">
		</div>
      </div>
    </div>
  </div>
</div>
</form>
<!-- Login Popup Ends Here -->	
<script type="text/javascript">
$(document).ready(function() {
	 $("#login-popup").validate({
                rules: {                   
                    mobile: {
                        required: true
                    }
                },
                messages: {
					 mobile: {
						required: "Please enter your Email / mobile number"
					 }
                },
                submitHandler: function(form) {
                    //form.submit();
					var mobile_no = $("#mobile").val();
					var otp_no = $("#otp").val();
					if(mobile_no != "") {
						 $("#otp").show();						
						 
					}					
					$.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>login/otplogin",
						type: "POST",
						data: {
							"mobile": mobile_no,
							"otp":otp_no
						},
						success: function(res) {
							response = JSON.parse(res);
							if(response.type == "otp") {
								if(response.status == "success") {
									$(".login_popup .messages").html(response.message).addClass("success");									
								} else {
									$(".login_popup .messages").html(response.message).addClass("error");
								}
								setTimeout(function () {
									$(".resend_otp").show();	
								}, 30000);
							} else if(response.type == "login_otp") {
								if(response.status == "success") {
									location.href = "dashboard/index";
								} else {
									$(".login_popup .messages").html(response.message).addClass("error");
								}
							}
							setTimeout(function () {
								$(".login_popup .messages").html("");
							}, 3000);
						}
					});
                }
                
            });

	$(".resend_otp").click(function() {
		var mobile_no = $("#mobile").val();
		if(mobile_no != "") {
				$("#otp").show();
		}
		$(".resend_otp").hide();	
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>login/otplogin",
			type: "POST",
			data: {
				"mobile": mobile_no
			},
			success: function(res) {
				response = JSON.parse(res);
				if(response.type == "otp") {
					if(response.status == "success") {
						$(".login_popup .messages").html(response.message).addClass("success"); 
					} else {
						$(".login_popup .messages").html(response.message).addClass("error"); 
					}
					 setTimeout(function () {
						$(".login_popup .messages").html("");
					}, 3000);
					setTimeout(function () {
						$(".resend_otp").show();	
					}, 30000);
				}
			}
		});
	});
});
</script>
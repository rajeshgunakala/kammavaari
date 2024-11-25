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
            		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>images/logo-light.png" alt="kvm" width="220"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				 <?php if($this->session->userdata('user_email') == '' &&  $this->session->userdata('user_id') == '')  {?>
					<li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
					<li class="nav-item"><a class="nav-link login_pop" data-toggle="modal" data-target="#loginModal">Login</a></li>
					<li class="nav-item"><a  class="nav-link" href="<?php echo base_url();?>registration">Register</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>aboutus">About Us</a></li>
					<li class="nav-item"><a  class="nav-link" href="<?php echo base_url();?>contactus">Contact Us</a></li>
			  <?php } else {?> 
				<li class="nav-item userin">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/index">Home</a>
				</li>
				
				<li class="nav-item userin">
					<a class="nav-link" target="_blank" href="<?php echo site_url();?>dashboard/search_partner">Search</a>
				</li>
				<li class="nav-item userin">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/my_account">My&nbsp;Account</a>
				</li>
				<li class="nav-item userin">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/plan">Plans</a>
				</li>
				<li class="nav-item userin">
					<a class="nav-link" href="<?php echo base_url();?>aboutus">About&nbsp;Us</a>
				</li>
						
				<li class="nav-item userin">
					<a  class="nav-link" href="<?php echo base_url();?>contactus">Contact&nbsp;Us</a>
				</li>
			
				<!--<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url() ?>contactus">Help</a>
				</li>-->
				<li class="nav-item userin">
					<a class="nav-link" href="<?php echo site_url();?>dashboard/logout">Logout</a>
				</li>
				<?php } ?>	
			</ul>
		</div>
		<div class="menu-overlay"></div>
	</div>
	</header>
	
	
<style>
.login_popup {
    width: 100% !important;
    margin: 25px 30% !important;
    max-width: 40%!important;
}   
/* msn responsive code start */
@media(max-width : 1280px) {
	.navbar-light .navbar-nav .nav-item.userin {
		margin-left: 7px;
	}
}

@media(max-width : 1180px) {
	.navbar-light .navbar-nav .nav-item.userin .nav-link {
		padding: 6px 15px;
	}
}
@media(max-width : 1080px) {
	.navbar-light .navbar-nav .nav-item.userin {
		margin-left: 1px;
	}
}

@media(max-width : 425px) {
	
	.modal-dialog{
		width:90% !important
	}
}
@media(width < 425){
}
/* msn responsive code ends */
</style>



	<!-- Login Popup Start Here -->
<form onsubmit="return false;" class="welcome-form"  id="login-popup" method="POST" action="" novalidate="novalidate">
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg popup_main login_popup1">
    <div class="modal-content popup_main_in">
      <div class="modal-header popup_header">
        <h2 class="modal-title" id="exampleModalLabel">Welcome back! Please Login</h2>
        <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body row">
        <div class="col-md-12 pt-1 pb-3 edit_password_content">
        	<!-- <p class="pb-3 text-center">Enter your Email ID / Registered Mobile Number and we'll send you an OTP to your Registered Email ID / Mobile Number.</p>
			<div class="form-group">
				<input type="text" name="mobile" id="mobile" maxlenth="10" required class="form_control col-md-12 p-2" placeholder="Please enter Email ID / Mobile number"/>
			</div> -->
			<div class="form-group">
				<label for="login_email">Mobile No. / Email ID</label>
				<input type="text" name="mobile" id="mobile" maxlenth="10" required class="form_control col-md-12 p-2" placeholder="Enter Mobile no. / Email ID"/>
			</div>
			<div class="form-group relative" style="position:relative">
				<label for="login_password">Password</label>
				<input data-testid="login_password" class="form_control col-md-12 p-2" type="password" placeholder="Enter password" name="password" id="password">
				<i id="togglePassword" class="fa fa-eye-slash absolute" aria-hidden="true" style="position: absolute;
    top: 60%;
    right: 2%;"></i>

			</div>
			<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>
			<div class="form-check">
				<!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Stay Logged in</label> -->
				<a href="<?php echo base_url();?>login/forget_password" class="forgot-pass">Forgot Password?</a>
			</div>
			
			<button data-testid="sign_in" id="deva" class="btn btn-md btn-block login-but" type="submit" onclick="navigateToController()">Login</button>
			<div class="login-or" style="color:red;"><span class="login_text">OR</span></div>
			<a href="<?php echo site_url();?>login/sendotp" data-testid="login_with_otp" class="btn btn-md btn-block otp-but" role="button">Login with OTP</a>

			
			<p class="new-signup">New to kammavaari?<a href="<?php echo base_url();?>registration" class="new-signup-text">Sign Up Free </a></p>
		</div>
			<div class="form-group">
				<input type="text" name="otp" id="otp" maxlenth="6" required class="form_control col-md-12 p-2 otp_no" placeholder="Enter OTP number"/>
			</div>
			<span class="text-right"><a href="javascript:void(0);" class="resend_otp">Resend OTP</a></span>
			<p class="text-center messages" style="color:red;"></p>
			<!-- <input class="btn btn-black m-2 btn-grad-orange edit_submit login_submit" name="login" type="submit" value="Submit"> -->
		</div>
		<div class="col-md-12 pt-1 pb-3 edit_password_content home-logo" style="display:none;">
			<h2 style="padding: 0 0 35px; font-size: 20px; line-height: 24px; color: #51505d; margin: 0 auto; text-align: center;
    font-family: Roboto,sans-serif; font-weight: 400;">Welcome back! Please Login</h2>
			
	
      </div>
    </div>
  </div>
</div>
</form>



<script>
  function navigateToController() {
	
    var mobile_no = $("#mobile").val();
    var password = $("#password").val();

	$.ajax({
  type: "POST",
  url: "<?php echo base_url(); ?>login/index",
  data: {
    "email": mobile_no,
    "password": password
  },
  success: function(res) {
    var response = JSON.parse(res);
    if (response.login == true) {
      window.location.href = "<?php echo base_url(); ?>dashboard/index";
    } else {
      $(".login_popup .messages").html(response.message).addClass("error");
    }
  },
  error: function(xhr, status, error) {
    console.error("Error in Ajax request:", xhr, status, error);
  }
});

  }
</script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Login Popup Ends Here -->	


	</script>
<!DOCTYPE html>
<html lang="en" class="js no-touch backgroundsize csstransforms3d csstransitions">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/custom101.css" />
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/kammavaari/css/style.css" />
    <script src="<?php echo base_url();?>assets/kammavaari/js/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/kammavaari/js/jquery.validate.js"></script>
    <title>Admin Login</title>
</head>
<body>
<div class="container" style="margin-top: 80px;min-height: 385px;background-color:#f0f0f0;border-radius: 5px;" >
    <div class="row main-login-title">
        <h1 class="mx-auto" style="font-size: 30px;color:white"><b>Welcome to Kammavaari.com</b></h1>
    </div>      
    <div class="login-page col-4" style="margin-top:30px; margin-left: auto;margin-right: auto;margin-bottom:30px;padding-bottom: auto;" >
        <h1 class="login-title" style="font-size: 30px" >Login</h1>
        
        <form method="POST" class="admin_login" id="admin_login">
			<div class="form-group" style="padding-left: 50px; padding-right: 50px;font-weight:700;">
				Enter your login account Mobile Number and we'll send you an OTP to your login account Mobile Number.                
            </div>
            <div class="form-group" style="padding-left: 50px; padding-right: 50px">
                
                <input type="text" name="mobile" class="form-control"  placeholder="Enter Mobile Number" id="mobile" autocomplete="off" style="margin-bottom: 4px">
            </div>

            <div class="form-group otp_no" style="padding-left: 50px; padding-right: 50px;display:none;">                
                <input type="text" name="otp" class="form-control" placeholder="Enter OTP number" id="otp" autocomplete="off" style="margin-bottom: 4px">
            </div>
			<div class="form-group otp_no" style="padding-left: 50px; padding-right: 50px;display:none;"><a href="javascript:void(0);" class="resend_otp">Resend OTP</a></div>
			 <div class="form-group" style="padding-left: 50px; padding-right: 50px">
				<span id="credentials"  class="font-weight-bold"></span>                    
            </div>
            <div class="form-group" style="padding-left: 50px; padding-right: 50px">
                 <input type="submit" name="submit" class="form-control btn-primary" style="background:#f5b306 !important" value="Submit">
            </div>
           
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	 $("#admin_login").validate({
	
                rules: {                   
                    mobile: {
                        required: true,
						maxlength: 10
                    }
                },
                messages: {
					 mobile: {
						required: "Please enter your mobile number",
						maxlength: "Please enter 10 digit mobile number"
					 }
                },
                submitHandler: function(form) {
                    //form.submit();
					var mobile_no = $("#mobile").val();
					var otp_no = $("#otp").val();
					if(mobile_no != "") {
					//	 $(".otp_no").show();						
						 
					}					
					$.ajax({
						type: "POST",
						crossDomain: true,
						url: "<?php echo base_url(); ?>admin/otplogin",
						type: "POST",
						data: {
							"mobile": mobile_no,
							"otp":otp_no
						},
						headers: {
						  "accept": "application/json",
					     "Access-Control-Allow-Origin":"kammavaari.com"
						  },
						success: function(res) {
							response = JSON.parse(res);
							console.log(response);
							if(response.type == "otp") {
								if(response.status == "success") {
									 $(".otp_no").show();
									 $("#credentials").html(response.message).removeClass("error");
									$("#credentials").html(response.message).addClass("success");									
								} else {
									 $(".otp_no").hide();
									$("#credentials").html(response.message).addClass("error");
								}
								setTimeout(function () {
									$(".resend_otp").show();	
								}, 30000);
							} else if(response.type == "login_otp") {
								if(response.status == "success") {
									location.href = "<?php echo base_url(); ?>admin/MyDashboard";
								} else {
									$("#credentials").html(response.message).addClass("error");
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
				$(".otp_no").show();
		}
		$(".resend_otp").hide();	
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>admin/otplogin",
			type: "POST",
			data: {
				"mobile": mobile_no
			},
			success: function(res) {
				response = JSON.parse(res);
				if(response.type == "otp") {
					if(response.status == "success") {
						$("#credentials").html(response.message).addClass("success"); 
					} else {
						$("#credentials").html(response.message).addClass("error"); 
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
</body>
<style>
	@media(max-width:575px){
		.login-page.col-4 {
    width: 100% !important;
    max-width: 100% !important;
}

.container {
    max-width: 90% !important;
    width: 90%;
}
.main-login-title h1 {
    color: #292727 !important;
    text-align: center;
}
	}
</style>
</html>
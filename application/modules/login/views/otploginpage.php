<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
   
</head>

<body>
<div class="wrapper">
	<header class="header bg-color">
	    <div class="container container-1250 navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo">
            		<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url();?>images/logo-light.png" alt="kvm" width="220"></a>
            
            </div>
        </div>
    </header>
</div>

    <form class="welcome-form" id="loginpopup" method="POST" action="" novalidate="novalidate">
        <div class="container">
            <div class="row justify-content-center mt-5 login_popup1">
                <div class="col-6">
                    <h6 class="p-3 text-center texttop">Login with OTP</h6>
                    <h3 class="text-center headotp">Enter Mobile No. or Email ID</h3>
                    <p class="text-center otptext">We will send an OTP to login.</p>

                    <div class="mobileinput">
                        <label for="mobile">Mobile No./Email ID</label>
                        <input type="text" id="mobile" name="mobile" placeholder="">

                        <div class="form-group">
                        <!-- <label for="otp">Enter OTP number</label> -->
                            <input type="text" name="otp" id="otp" maxlength="6" required class="form-control col-md-12 p-2 otp_no" placeholder="Enter OTP number" style="display:none;">
                        </div>
                    </div>


                    <span class="text-right"><a href="javascript:void(0);" class="resend_otp">Resend OTP</a></span>
                    <p class="text-center messages" style="color:red;"></p>

                    <div class="text-center">
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script type="text/javascript">
//    $(document).ready(function($) {
     $("#loginpopup").validate({
      
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
    submitHandler: function (form, event) {
    event.preventDefault();

    var mobile_no = $("#mobile").val();
    var otp_no = $("#otp").val();
    // if (mobile_no !== "") {
        // $("#otp").show();
    // }

    $.ajax({
        type: "POST",
        url: "<?php echo base_url(); ?>login/otplogin",
        type: "POST",
        data: {
            "mobile": mobile_no,
            "otp": otp_no
        },
        success: function (res) {
            
            var response = JSON.parse(res);
          console.log(response);
            if (response.type == "otp") {
                if (response.status == "success") {
                  
                    $(".login_popup1 .messages").html(response.message).addClass("success");
                    $("#otp").show();
                } else {
                    $(".login_popup1 .messages").html(response.message).addClass("error");
                    if (mobile_no !== "") {
                        $("#otp").hide();
                    }
                }
                setTimeout(function () {
                    $(".resend_otp").show();
                }, 30000);
            } else if (response.type == "login_otp") {
                if (response.status == "success") {
                    console.log("sfdfg");
                    window.location.href = "<?php echo base_url(); ?>dashboard/index";
                    return;
                } else {
                    $(".login_popup1 .messages").html(response.message).addClass("error");
                }
            }
            setTimeout(function () {
                $(".login_popup1 .messages").html("");
            }, 3000);

            if (response.type == "login_otp" && response.status == "success") {
             
                form.submit();
            }
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
				
                console.log(response);
				if(response.type == "otp") {
					if(response.status == "success") {
						$(".login_popup1 .messages").html(response.message).addClass("success"); 
					} else {
						$(".login_popup1 .messages").html(response.message).addClass("error"); 
					}
					 setTimeout(function () {
						$(".login_popup1 .messages").html("");
					}, 3000);
					setTimeout(function () {
						$(".resend_otp").show();	
					}, 30000);
				}
			}
		});
	});
// });
</script>
<style>
    body{
        margin:0px;
    }
    form#loginpopup {
    object-fit: contain;
    margin-bottom: 30px;
    background-image: linear-gradient(to right, #f2bc28, rgb(115, 196, 124));
    font-family: Roboto, sans-serif;
    text-align: center;
    font-size: 100%;
}

.row.justify-content-center.mt-5.login_popup1 {
    margin: 82px 0px 32px;
    width: 880px;
    height: 480px;
    border-radius: 5px;
    box-shadow: rgba(130, 134, 145, 0.18) 0px 0px 4px 0px;
    background-color: rgb(255, 255, 255);
    display: inline-block;
    text-align: center;
    position: relative;
    max-width:94%;
}

label {
    display: block;
    font-size: 14px;
    margin-bottom: 6px;
}

input {
    border: 0px;
    border-bottom: 2px solid #73c47d;
    margin-bottom: 0;
    width: 100%;
    outline:none;
    margin-bottom: 20px;
}
.mobileinput {
    width: 400px;
    text-align: left;
    margin: auto;
    margin-bottom: 20px;
    margin-top: 50px;
    max-width:94%;
}

button {
    border-radius: 54px;
    border: 0px;
    width: 164px;
    cursor: pointer;
    box-shadow: none;
    background: linear-gradient(rgb(96, 206, 212) 0%, rgb(0, 188, 213) 100%);
    -webkit-box-align: center;
    align-items: center;
    text-decoration: none;
    font: 500 18px / 18px Roboto, sans-serif;
    color: rgb(255, 255, 255);
    min-height: 46px;
    min-width: 46px;
    height: 46px;
    text-transform: capitalize;
    transition: width 400ms ease-in-out 0s;
}
.headotp{
    display: inline-block;
    margin-top: 6%;
    width: 353px;
    height: 28px;
    text-align: center;
    font-size: 24px;
    color: rgb(65, 64, 77);
    margin-bottom:0px;
    max-width:94%;
}
.otptext{
    /* display: inline-block; */
    margin-top: 12px;
    height: 19px;
    font-weight: 300;
    text-align: center;
    color: rgb(114, 114, 125);
}
.texttop{
    margin-top: 30px;
    height: 21px;
    font-weight: 300;
    text-align: center;
    color: rgb(81, 80, 93);
    font-size: 18px;
    margin-bottom: 0;
}
.wrapper {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 15px;
    padding-bottom: 19px;
    background: #e43659;
}
</style>
</body>

</html>




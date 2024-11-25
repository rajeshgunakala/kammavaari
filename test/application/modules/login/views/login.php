<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="main__content p-0">
	<div class="welcome-back-wrapper">
		<div class="container">
			<div class="welcome-back-gird">
				<div class="row">
					<div class="col-md-6 col-12 login-left-col">
						<div class="welcome-back-img">
							<img src="<?php echo site_url();?>assets/kammavaari/images/login-image.jpg">
						</div>
					</div>
					<div class="col-md-6 col-12 login-right-col bg-color">
						<div class="welcome-content">
						<h1>Login</h1>							
								<form class="welcome-form"  id="login-form" method="POST" action="<?php echo site_url();?>login" novalidate="novalidate">
								<?php if($this->session->flashdata('msg_succ') != ''){
													// echo "hi";
													  ?>
													<div class="alert alert-block alert-success">
														<button type="button" class="close" data-dismiss="alert">
															<i class="ace-icon fa fa-times"></i>
														</button>
														<p><?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?></p>
													</div>
												<?php } ?>
												<?php if($this->session->flashdata('msg_fail') != ''){ 
												// echo "hiiii";?>
													<div class="alert alert-block alert-danger">
														<button type="button" class="close" data-dismiss="alert">
															<i class="ace-icon fa fa-times"></i>
														</button>
														<p>
															<?php echo $this->session->flashdata('msg_fail')?$this->session->flashdata('msg_fail'):'';?>
														</p>
													</div>
												<?php } ?>
								<div class="form-group">
									<input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
								</div>
								<div class="form-group mb-02">
									<input type="password" class="form-control" name="password" id="password" placeholder="Password">
								</div>
								<div class="remember-gird mt-2 mb-3">
									<div class="remember-left">
										<!--<div class="check-input">
											<input type="checkbox" name="optins" id="optins" class="check-input">
											<label for="optins">Remember Me </label>
										</div>-->
									</div>
									<div class="forgot-password">
										<a href="<?php echo site_url() ?>login/forget_password">Forgot Password?</a>
									</div>
								</div>
								<div class="form-group text-right">
									<input type="submit" class="btn yellow-black max-206" name="submit" value="Log In">
								</div>
							</form>
							<h4>Need an account? <a href="<?php echo site_url();?>registration">Sign Up</a></h4>
						</div>
						
					</div>
				</div>
			</div>



		</div>
	</div>
</div>
  
<script>
         $(document).ready(function($) {
            $('#myModal').on('shown.bs.modal', function () {
				$('#myInput').trigger('focus')
			});
           

            $("#login-form").validate({
                rules: {
                    // name: "required",                    
                    email: {
                        required: true,
                        email: true
                    },
                    password:  {
                        required: true,
                    },
                },
                messages: {
                    email: "Please enter your Valid email",                   
                    zipcode: "Please enter valid password",
                },
                submitHandler: function(form) {
                    form.submit();
                }
                
            });
        });
    </script>  

<script>
window.onload = function() {
var $recaptcha = document.querySelector('#g-recaptcha-response');

if($recaptcha) {
		$recaptcha.setAttribute("required", "required");
	}
};
</script>
<style>
#g-recaptcha-response {
	display: block !important;
	position: absolute;
	margin: -78px 0 0 0 !important;
	width: 302px !important;
	height: 76px !important;
	z-index: -999999;
	opacity: 0;
}
</style>
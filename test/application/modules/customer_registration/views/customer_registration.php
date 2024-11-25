<script src='https://www.google.com/recaptcha/api.js'></script>
  <div >
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <div class="w-100 d-block bg-white shadow-lg rounded my-5">
                                        <div class="row">
                                            <div class="col-lg-5 d-none d-lg-block bg-register rounded-left"><div class="bg-text"><h1 class="h5 mb-1">REGISTER YOUR PROFILE FREE</h1><br> Let's Create Your Profile, while we find Matches for you!</div></div>
                                            <div class="col-lg-7">
                                                <div class="p-5 msnpadding">
                                                   
                                                    <form class="customerregister needs-validation" method="POST" action="<?php echo site_url();?>registration" novalidate data-toggle="validator">
														  <?php if($this->session->flashdata('msg_succ') != ''){
                                                            // echo "hi";
															  ?>
															<div class="alert alert-block alert-success">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<p>
																	<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
																</p>
															</div>
														<?php } ?>
														<?php if($this->session->flashdata('msg_failure') != ''){ 
														// echo "hiiii";?>
															<div class="alert alert-block alert-danger">
																<button type="button" class="close" data-dismiss="alert">
																	<i class="ace-icon fa fa-times"></i>
																</button>
																<p>
																	<?php echo $this->session->flashdata('msg_failure')?$this->session->flashdata('msg_failure'):'';?>
																</p>
															</div>
														<?php } ?>
														<div class="form-group row" style="margin-left: 0px;">
															 <label for="validationCustom01">Profile Created By&nbsp;&nbsp;&nbsp;&nbsp;</label>
															 <div class="row ">
															 <div class="custom-control custom-radio custom-control-inline">
																  <input type="radio" id="self" name="createdby" value="self" class="custom-control-input" required>
																  <label class="custom-control-label" for="self">Self</label>
																</div>
																<div class="custom-control custom-radio custom-control-inline">
																  <input type="radio" id="Parents" value="parents" name="createdby" class="custom-control-input">
																  <label class="custom-control-label" for="Parents">Parents</label>
																</div>
																<div class="custom-control custom-radio custom-control-inline">
																  <input type="radio" id="Sibling" value="sibling" name="createdby" class="custom-control-input">
																  <label class="custom-control-label" for="Sibling">Sibling</label>
																</div>
																<div class="custom-control custom-radio custom-control-inline">
																  <input type="radio" id="Relative" value="relative" name="createdby" class="custom-control-input">
																  <label class="custom-control-label" for="Relative">Relative</label>
																</div>
																<div class="custom-control custom-radio custom-control-inline">
																  <input type="radio" id="Friend" value="friend" name="createdby" class="custom-control-input">
																  <label class="custom-control-label" for="Friend">Friend</label>
																</div>
															 </div>
																
														</div>														
                                                        <div class="form-group row">
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
																<label for="validationCustom01">First name</label>
                                                                <input type="text" class="form-control form-control-user" minlength="3" maxlength="50" pattern="^[a-zA-Z _.-]*$" name="first_name" id="firstname" placeholder="First Name" required>
																<div class="invalid-feedback">
																	Please enter first name.
																</div>
                                                            </div>
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
																<label for="validationCustom01">Last name</label>
                                                                <input type="text" class="form-control form-control-user" minlength="3" maxlength="50" pattern="^[a-zA-Z _.-]*$" name="last_name" id="lastname" placeholder="Last Name" required>
																<div class="invalid-feedback">
																	Please enter last name.
																</div>
                                                            </div>
                                                        </div>
														<div class="form-group row justify-content-center justify-content-md-start gender-mobile ">
														 <div class=" row ">
														 <label for="validationCustom01">Gender&nbsp;&nbsp;&nbsp;&nbsp;</label>
															<div class="custom-control custom-radio custom-control-inline">
																<input type="radio" id="customRadio3" name="gender" value="male" class="custom-control-input" required>
																<label class="custom-control-label" for="customRadio3">Male</label>
															</div>
															<div class="custom-control custom-radio custom-control-inline">
																<input type="radio" id="customRadio4" name="gender"  value="female" class="custom-control-input" required>
																<label class="custom-control-label" for="customRadio4">Female</label>
																</div>
															</div>
														</div>
                                                        <div class="form-group">
															<label for="validationCustom01">Email</label>
                                                            <input type="email" class="form-control form-control-user" autocomplete="off" name="email" id="email" placeholder="Email Address" required>
															<div class="invalid-feedback">
																Please enter valid email address.
															</div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
																<label for="validationCustom01">Password</label>
                                                                <input type="password" class="form-control form-control-user" data-minlength="8" data-error="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$" name="password" id="password" placeholder="Password" required>
																<div class="help-block with-errors"></div>	
                                                            </div>
                                                            <div class="col-sm-6">
																<label for="cpassword">Confirm Password</label>
                                                                <input type="password" class="form-control form-control-user" name="cpassword" data-match="#password" data-match-error="Password don't match" id="cpassword" placeholder="Repeat Password" required>
																<div class="invalid-feedback">
																	Please enter confirm password.
																</div>
																
                                                            </div>
                                                        </div>
														<div class="form-group row">
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
																<label for="mobile">Mobile Number</label>
                                                                <input type="number" class="form-control form-control-user" pattern="^[0-9]{10}$" name="mobile" id="mobile" placeholder="Mobile Number" required>
																<div class="invalid-feedback">Please enter 10 digit mobile number</div>	
                                                            </div>
															<div class="col-sm-6 mb-3 mb-sm-0">
																<label for="country">Living In</label>
																<select id="country" class="form-control form-control-user" name="country" required>
																   <option value="">Select Country</option>
																   <?php foreach($countries as $value)
																   { ?>
																   <option  value="<?php echo $value['country'];?>"><?php echo ucwords($value['country']);?></option><?php } ?>
																</select>
																<div class="invalid-feedback">
																	Please select country.
																</div>
                                                            </div>
                                                        </div>

														<div class="form-group row">
                                                            <div class="col-sm-6 mb-3 mb-sm-0">
																<label for="mobile">DOB</label>
                                                                <div class="row dob-mobile ">

																	<div class="custom-control custom-dropdown  col-4 m-0">
																		<select name="date" id="date" class="form-control" tabindex="-1" required>
																		   <option value="">Date</option>
																		   <option value="1">1</option>
																		   <option value="2">2</option>
																		   <option value="3">3</option>
																		   <option value="4">4</option>
																		   <option value="5">5</option>
																		   <option value="6">6</option>
																		   <option value="7">7</option>
																		   <option value="8">8</option>
																		   <option value="9">9</option>
																		   <option value="10">10</option>
																		   <option value="11">11</option>
																		   <option value="12">12</option>
																		   <option value="13">13</option>
																		   <option value="14">14</option>
																		   <option value="15">15</option>
																		   <option value="16">16</option>
																		   <option value="17">17</option>
																		   <option value="18">18</option>
																		   <option value="19">19</option>
																		   <option value="20">20</option>
																		   <option value="21">21</option>
																		   <option value="22">22</option>
																		   <option value="23">23</option>
																		   <option value="24">24</option>
																		   <option value="25">25</option>
																		   <option value="26">26</option>
																		   <option value="27">27</option>
																		   <option value="28">28</option>
																		   <option value="29">29</option>
																		   <option value="30">30</option>
																		   <option value="31">31</option>
																		</select>
																	</div>
																	<div class="custom-control custom-dropdown   col-4 m-0">
																	<select name="month" id="month" class="form-control" tabindex="-1" required>
																	  <option value="" selected="selected">Month</option>
																	   <option value="1">Jan</option>
																	   <option value="2">Feb</option>
																	   <option value="3">Mar</option>
																	   <option value="4">Apr</option>
																	   <option value="5">May</option>
																	   <option value="6">Jun</option>
																	   <option value="7">Jul</option>
																	   <option value="8">Aug</option>
																	   <option value="9">Sep</option>
																	   <option value="10">Oct</option>
																	   <option value="11">Nov</option>
																	   <option value="12">Dec</option>
																	</select>
																	</div>
																	<div class="custom-control custom-dropdown col-4">
																	<select name="year" id="year" class="form-control" tabindex="-1" required>
																	   <option value="" selected="selected">Year</option>
																	 
																	   <option value="2002">2012</option>
																	   <option value="2002">2011</option>
																	   <option value="2002">2010</option>
																	   <option value="2002">2009</option>
																	   <option value="2002">2008</option>
																	   <option value="2002">2007</option>
																	   <option value="2002">2006</option>
																	   <option value="2002">2005</option>
																	   <option value="2002">2004</option>
																	   <option value="2002">2003</option>
																		<option value="2002">2002</option>
																		<option value="2001">2001</option>
																		<option value="2000">2000</option>
																		<option value="1999">1999</option>
																		<option value="1998">1998</option>
																		<option value="1997">1997</option>
																		<option value="1996">1996</option>
																		<option value="1995">1995</option>
																		<option value="1994">1994</option>
																		<option value="1993">1993</option>
																		<option value="1992">1992</option>
																		<option value="1991">1991</option>
																		<option value="1990">1990</option>
																		<option value="1989">1989</option>
																		<option value="1988">1988</option>
																		<option value="1987">1987</option>
																		<option value="1986">1986</option>
																		<option value="1985">1985</option>
																		<option value="1984">1984</option>
																		<option value="1983">1983</option>
																		<option value="1982">1982</option>
																		<option value="1981">1981</option> 
																		<option value="1980">1980</option>
																		<option value="1979">1979</option>
																		<option value="1978">1978</option>
																		<option value="1977">1977</option>
																		<option value="1976">1976</option>
																		<option value="1975">1975</option>
																		<option value="1974">1974</option>
																		<option value="1973">1973</option>
																		<option value="1972">1972</option>
																		<option value="1971">1971</option>
																		<option value="1970">1970</option>
																	
																	</select>
																   </div>

																	
																</div>
                                                            </div>
															<div class="col-sm-6 mb-3 mb-sm-0">
																<?php if($this->session->userdata('type') == 'admin'){ ?>
																	<label for="country">LEAD BY</label>

																	<div class="col-sm-6 mb-3 mb-sm-0">
																	<select id="leadby" class="form-control form-control-user" name="leadby" required>
																	   <option value="">Select Leadby</option>
																	   <?php foreach($rmdata as $rm)
																	   { ?>
																	   <option  value="<?php echo $rm['id'];?>"><?php echo ucwords($rm['username']);?></option><?php } ?>
																	</select>
																	<?php  } ?>
                                                            </div>
                                                        </div>
														                                                          
																<!-- </div> -->
																<div class="">
																	<!-- <label for="phone" style="width:100%;"></label> -->
																	<div class="g-recaptcha " style="width:auto" data-sitekey="6Lc2sXQeAAAAAF9PBOgZKImOB-D1vBkALdytsDEu"></div>  
																 </div>
																 <div class="form-group">
																	 <div class="custom-control custom-checkbox form-check">
																		 <input type="checkbox" class="custom-control-input" id="invalidCheck"
																			 required>
																		 <label class="custom-control-label" for="invalidCheck">I agree to the <span> <span><a href="terms" target="_blank" style="text-decoration:underline;">T&C </a> and <a href="privacypolicy"  style="text-decoration:underline;" target="_blank">Privacy Policy</a>.</span></span></label>
																		 <div class="invalid-feedback">
																			 You must agree terms and conditions before submitting.
																		 </div>
																	 </div>
																 </div>
																 <input id="submit" type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="submit" value="Register">
															</div> 
                                                       </form>
            
                                                    <div class="row mb-4">
                                                        <div class="col-12 text-center">
                                                            <p class="text-muted mb-0">Already have account?  <a href="<?php echo site_url();?>login/sendotp" class="text-muted font-weight-medium ml-1"><b>Log In</b></a></p>
                                                        </div> <!-- end col -->
                                                    </div>
                                                 <!-- end row -->
                                                </div> <!-- end .padding-5 -->
                                            </div> <!-- end col -->
                                        </div> <!-- end row -->
                                    </div> <!-- end .w-100 -->
                                </div> <!-- end .d-flex -->
                            </div> <!-- end col-->
                        </div> <!-- end row -->
                    </div>
                    <!-- end container -->
                </div>
                <!-- end page -->

<script>

$("#email").blur(function() 
{
var email = $('#email').val();

	if(email!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo site_url() . 'customer_registration/get_email_availability'; ?>",
		dataType: 'html',
		data: {email: email},
		success: function(res) 
		{
			
			if(res==true)
			{
			$("#email").css({"color":"red"});
			alert("This email is already registered, Please use another email address to register");
			// Enable the button with id "submit"
                 $("#submit").prop("disabled", true);

			}else{
				   $("#submit").prop("disabled", false);
				   $("#email").css({"color":"black"});
			}
			
		},
		error:function()
		{
		alert('some error');	
		}
		});
	}
	
});

$("#mobile").blur(function() 
{
var mobile = $('#mobile').val();

	if(mobile!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php echo site_url() . 'customer_registration/get_number_availability'; ?>",
		dataType: 'html',
		data: {mobile: mobile},
		success: function(res) 
		{
			
			if(res==true)
			{
			$("#mobile").css({"color":"red"});
			alert("This Number is already registered, Please use another number to register");
			     $("#submit").prop("disabled", true);
			}else{
				$("#submit").prop("disabled", false);
				$("#mobile").css({"color":"black"});
			}
			
		},
		error:function()
		{
		alert('some error');	
		}
		});
	}
	
});

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
@media(min-width : 768px) {
	.gender-mobile {
		padding:0px 0px 0px 25px
	}
	.dob-mobile{
		padding:0px 0px 0px 12px

	}
	
}

@media(max-width : 640px){
	.msnpadding{
		padding: 20px !important;
	}
}
</style>
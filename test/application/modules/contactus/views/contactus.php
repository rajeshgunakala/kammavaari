<!-- Main Content Start Here -->
		<div class="main_content">
			<div class="container">
	            <div class="row">
	                <div class="col-md-12 contact_main pt-4">
	                	<div class="contact_main_top">
		                	<h2 class="text-center">Let's Get In Touch</h2>
		                	<ul>
	                          
				              	
				              	<li>
				                  <span class="help_icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				                  <h4>Address</h4>
				                  <p>Kammavaari Matrimony </p>
								  <p>Plot No 1282, Road No 64 . Jubilee Hills, Hyderabad-500033 </p>
				              	</li>
				              	
				              	<li>
				                  <span class="help_icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				                  <h4>Address</h4>
				                  <p>Kammavaari Matrimony </p>
								  <p>Flat No-501, Shanthi Apartments, K.S. Bakery Lane, Bhagyanagar Colony, KPHB, Hyderabad</p>
				              	</li>
				              	
				              	<li>
				                  <span class="help_icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				                  <h4>Address</h4>
				                  <p>Kammavaari Matrimony </p>
								  <p>Flat No F4, D.No:59.8/1-8, Sai Sudha Apartments,3rd Lane, Bhashyam School Road,Pinnamaneni Poly Clinic Road, Gayathri Nagar,Vijayawada - 520010</p>
				              	</li>
				              	
				              	<li>
				                  <span class="help_icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				                  <h4>Address</h4>
				                  <p>Kammavaari Matrimony </p>
								  <p>Opp Dr.Jaganmohan Rao House Near Fire Station, Navayuga Hotel Road, NR Pet, Eluru- -534006</p>
				              	</li>

								  <li>
				                  <span class="help_icons"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
				                  <h4>Address</h4>
				                  <p>Kammavaari Matrimony </p>
								  <p>Flat.No.12, Sindhuri Apartments, Nalanda Nagar, 2nd Lane, Guntur</p>
				              	</li>
				              	
				              	
				              	<li>
				                  <span class="help_icons"><i class="fa fa-phone" aria-hidden="true"></i></span>
				                  <h4>Phone</h4>
				                  <p>+91-9177036777</p>
				                  <p>RM: +91-7032306555</p>
				              	</li>
				                <li>
				                  <span class="help_icons"><i class="fa fa-envelope" aria-hidden="true"></i></span>
				                  <h4>Email</h4>
				                  <p> info@kammavaari.com</p>
				              	</li>
				                <li>
				                  <span class="help_icons"><i class="fa fa-fax" aria-hidden="true"></i></span>
				                  <h4>Fax</h4>
				                  <p>+91-7032306555</p>
				              	</li>
	                        </ul>
                        </div>
                        <div class="contact_map">
                        	<div class="container">
	            				<div class="row">
					                <div class="col-md-6 col-xs-12 contact_map">
					                	<h3>Request a Query</h3>
					                    <div class="contact-form">
					                        <div role="form" class="wpcf7" id="wpcf7-f103-o1" lang="en-US" dir="ltr">
					                            <div class="screen-reader-response">
					                                <p role="status" aria-live="polite" aria-atomic="true"></p>
					                                <ul><?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?></ul>
					                            </div>		
					                            <form id="contact_form" name="contact_form" class="contact-form" action="<?php echo site_url();?>contactus" method="post">
												
					                                <div class="form-row">
					                                    <label>Name</label>
					                                    <span class="-wrap fullname">
					                                        <input type="text" name="name"  required="required"  value="">
					                                    </span>
					                                </div>
					                                <div class="form-row">
					                                    <label>Email</label>
					                                    <span class="-wrap email">
					                                        <input type="email" name="email"  required="required"  value="">
					                                    </span>
					                                </div>
					                                <div class="form-row">
					                                    <label>Phone</label>
					                                    <span class="">
					                                        <input type="tel" name="mobile"  required="required"  value="">
					                                    </span>
					                                </div>
					                                <div class="form-row">
					                                    <label>Message</label>
					                                    <span class="-wrap message">
					                                        <textarea name="message" required="required"  cols="40" rows="10"></textarea>
					                                    </span>
					                                </div>
					                                <div><input type="submit" name="submit" value="Submit" class="btn btn-black max-206 m-2 btn-grad-orange" /></div>

					                            </form>
					                        </div>
					                    </div>
					                </div>
					                <div class="col-md-6 col-xs-12 contact_map">
					                    <h3>Kammavaari Location</h3>
					                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d487295.0253645971!2d78.12783944478475!3d17.41215305912964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb99daeaebd2c7%3A0xae93b78392bafbc2!2sHyderabad%2C+Telangana!5e0!3m2!1sen!2sin!4v1547103303212" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen=""></iframe>
					                </div>
					            </div>
			        		</div>
				        </div>
	            	</div>
	            </div>
	        </div>
		</div>
		<!-- Main Content Ends Here -->
<style>
	.contact_main_top ul li{
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		margin: -1px 0 0 -1px;
		padding: 20px 10px;
		border: 1px solid #ffa500;
	}
	.contact_main_top ul{
		border: none;
	}
	.contact_main_top ul li:after{
		display: none !important;
	}
	@media screen and (max-width : 767px) {
		.contact_main_top ul li {
			max-width: 400px;
			margin-left: auto;
			margin-right: auto;
		}
		.col-md-6.col-xs-12.contact_map:nth-child(1) {
			max-width: 400px;
			margin-left: auto;
			margin-right: auto;
		}
	}
</style>
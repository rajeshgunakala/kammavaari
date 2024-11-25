<div class="home-banner-main">
<div class="home-banner-over">
	<div class="home-banner-over-container">
		<div class="home-banner-over-content">
			<!-- <h1>IT’S Bringing People Together</h1> -->
			<h2 class="mb-4">Different people. Different tastes. The best Platform for perfect matches.</h2>
			<div class="form-banner home-kvm-coming-container bg-color">
				<form class="row row-10" action="<?php echo site_url();?>home/search" id="homepagesearch" method="POST">
					<div class="col-12 col-sm-12 col-md-12 mb-2 form-group">
						<label class="form-label">I'm looking for</label>
						<select class="form-control grey-bg" name="gender" id="exampleInputEmail1">
						<option value="female" selected="">Bride</option>
						<option value="male">Bride Groom</option>
						</select>
					</div>
					<div class="col-12">
						<label class="form-label">Age</label>
					</div>
					<div class="col-12">
						<div class="row row-10">
							<div class="col flex-1 form-group">
							<select name="agefrom" id="agefrom" tabindex="-1" class="form-control grey-bg">
								<option value="">Age</option>
									<?php for($i=18;$i<=50;$i++){?>
								<option <?php if($i==18){?> selected="selected" <?php } ?>  value="<?php echo $i;?>" label="<?php echo $i;?>"><?php echo $i;?></option>
									<?php }?>
							</select>
							  
							</div>
							<div class="col text-center px-0"><label class="form-label pt-3 text-center">To</label></div>
							<div class="col flex-1 form-group">
							   <select name="agefrom" id="agefrom" tabindex="-1" class="form-control grey-bg">
								<option value="">Age</option>
									<?php for($i=18;$i<=50;$i++){?>
								<option <?php if($i==30){?> selected="selected" <?php } ?>  value="<?php echo $i;?>" label="<?php echo $i;?>"><?php echo $i;?></option>
									<?php }?>
							</select>
							</div>
						</div>

					</div>
					
					<div class="col-12 col-sm-12 col-md-6 form-group">
						<label class="form-label">Religion</label>
						<select class="form-control grey-bg"  name="religion">
							<option value="" label="Select Religion" selected="selected">Select Religion</option>
								<?php foreach($religions as $value) { ?>
							<option value="<?php echo $value['religion'];?>" <?php if($value['religion']=="Hindu"){echo "selected";} ?>><?php echo $value['religion'];?></option>
								<?php } ?>
						</select>
					   </div>
					<div class="col-12 col-sm-12 col-md-6 form-group mb-4">
						<label class="form-label">Mother Tongue
						</label>
						<select class="form-control grey-bg" id="date_to"  name="mother_tounge">
							 <option value="" label="Select Mother Tongue" selected="selected">Select Mother Tongue</option>
							<?php foreach($mother_tounges as $value) { ?>
							  <option value="<?php echo $value['mothertounge'];?>" <?php if($value['mothertounge']=="Telugu"){echo "selected";} ?> ><?php echo $value['mothertounge'];?></option>
							 <?php } ?>
						</select>
					</div>
					<div class="col-12 col-sm-12 col-md-12 text-center">
					<a href="javascript:void(0);" class="btn yellow-black max-206 mr-8 homepagesearch">LET'S BEGIN</a>
					   
					</div>
				</form>
			</div>
		 
		</div>
		<div class="home-banner-img-rgt">
			<img src="images/banner-trans-img.png" class="home-banner-right" alt="img"   >
		</div>
	</div>
</div>
</div>
<div class="using-kvm profile_list_bg">
<div class="using-kvm-container">
	<h2>Find your Special Someone</h2>
	<div class="row using-kvm-row">
		<div class="col-12 col-sm-12 col-md-4 using-kvm-col">
			<div class="using-kvm-col-in bg-color">
				<div class="using-kvm-col-icon">
					<img src="images/Get-it-Icon.svg" alt="img" width="95" height="94" >
				</div>
				<h3>Sign Up</h3>
				<p>Register for free & put up your Profile</p>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 using-kvm-col">
			<div class="using-kvm-col-in bg-color">
				<div class="using-kvm-col-icon">
					<img src="images/Book-It-Icon.svg" alt="img" width="89" height="94" >
				</div>
				<h3>Connect</h3>
				<p>Select & Connect with Matches you like
				</p>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 using-kvm-col">
			<div class="using-kvm-col-in bg-color">
				<div class="using-kvm-col-icon">
					<img src="images/Love-It-Icon.svg" alt="img" width="96" height="78" >
				</div>
				<h3>Interact</h3>
				<p>Become a Premium Member & Start a Conversation </p>
			</div>
		</div>
	</div>
</div>
</div>
<div class="our-brands" style="background: #F9F9F9;">
<div class="our-brands-container">
	<h2>OUR SUCCESS STORIES</h2>
	<div class="row our-brands-row">
		<?php $i=0; 
		foreach($success_stories as $value) { 
			?>
		<div class="col-sm-6 col-md-3 text-center p-2">
			<div class="success_stories">
			   <img src="<?php echo site_url();?>images/successstories/<?php echo $value['image']; ?>" alt="img"> 
				<h2 class="mt-2"> <?php echo $value['title']; ?></h2>
				<p class="pt-2 pl-2 pr-2"><?php echo $value['content']; ?></p>
			</div>
		</div>
		<?php $i++; 
			if($i == 4)
				{
					break;
				}
			} ?>
	</div>
</div>
</div>
<div class="using-kvm trusted_section" style="background-color: white;">
<div class="using-kvm-container yellow-bg-container">
	<h2>THE MOST TRUSTED MATRIMONY <br>BRAND FOR KAMMA COMMUNITY</h2>
	<div class="row using-kvm-row">
		<div class="col-12 col-sm-12 col-md-4 using-kvm-col">
			<div class="using-kvm-col-in bg-color">
				<div class="using-kvm-col-icon">
					<img src="images/couple.svg" alt="img" width="95" height="94" >
				</div>
				<h3>Best Matches</h3>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 using-kvm-col">
			<div class="using-kvm-col-in bg-color">
				<div class="using-kvm-col-icon">
					<img src="images/verified.svg" alt="img" width="89" height="94" >
				</div>
				<h3>Verified Profiles</h3>
			</div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 using-kvm-col">
			<div class="using-kvm-col-in bg-color">
				<div class="using-kvm-col-icon">
					<img src="images/security.svg" alt="img" width="96" height="78" >
				</div>
				<h3>100% Privacy</h3>
			</div>
		</div>
	</div>
</div>
</div>

<div class="home-whereglow profile_list_bg">
<div class="home-whereglow-container">
	<h2>WHERE TO Contact</h2>
	<div class="row home-whereglow-row">
		<div class="col-12 col-sm-12 col-md-6 home-whereglow-col home-whereglow-col-lft">
			<div class="home-whereglow-col-in">
				<div class="home-whereglow-col-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.2851858115816!2d78.44177175820369!3d17.432393856032302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ce69555555%3A0x82e84e2e0a69e8b2!2sKammavaari%20Matrimony!5e0!3m2!1sen!2sin!4v1649075160127!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div> 
		<div class="col-12 col-sm-12 col-md-6 home-whereglow-col home-whereglow-col-rgt">
			 <div class="row">
				<div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
					<div class="brand-where-glow-col-in">
						<div class="brand-where-glow-col-head parent">
							<span class="resize-txt">Ameerpet</span>
						</div>
						<div class="brand-where-glow-col-body">
							<div class="brand-where-address">Flat No-102, Sri Sai Ram Estate, Beside Kamma Sangham, Ameerpet, Hyderabad.</div>
							<div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i> Phone:</strong> +91  70323 06555</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
					<div class="brand-where-glow-col-in">
						<div class="brand-where-glow-col-head parent">
							<span class="resize-txt">KPHB</span>
						</div>
						<div class="brand-where-glow-col-body">
							<div class="brand-where-address">Flat No-501, Shanthi Apartments, K.S. Bakery Lane, Bhagyanagar Colony, KPHB, Hyderbad.</div>
							<div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i> Phone:</strong> +91 916051 6777</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
					<div class="brand-where-glow-col-in">
						<div class="brand-where-glow-col-head parent">
							<span class="resize-txt">Vijayawada</span>
						</div>
						<div class="brand-where-glow-col-body">
							<div class="brand-where-address">Flat No F4, D.No:59.8/1-8,Sai Sudha Apartments,3rd Lane, Bhashyam School Road,Pinnamaneni Poly Clinic Road, Gayathri Nagar,Vijayawada - 520010.</div>
							<div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i> Phone:</strong> +91 97034 10777</div>
						</div>
					</div>
				</div>
			   <div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
					<div class="brand-where-glow-col-in">
						<div class="brand-where-glow-col-head parent">
							<span class="resize-txt">Eluru</span>
						</div>
						<div class="brand-where-glow-col-body">
							<div class="brand-where-address">NR Pet, fire station, navayuga hotel road, opp dr. jaganmohan rao house -534006.</div>
							<div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i> Phone:</strong> +91 97036 10777</div>
						</div>
					</div>
				</div>
			 </div>
		</div> 
	</div>
</div>
</div>
<!-- Footer Start Here -->

<!-- Footer Ends Here -->    

<!-- Privacy Policy Popup Start Here -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog popup_main">
	<div class="modal-content popup_main_in">
	<div class="modal-header popup_header">
		<h2 class="modal-title" id="exampleModalLabel">Privacy Policy</h2>
		<button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body row">
		<div class="col-md-12 privacy_policy">
			<object data="privacy-policy-pdf.pdf" type="application/pdf" width="100%" height="100%">
			</object>
		</div>
	</div>
	</div>
</div>
</div>
<!-- Privacy Policy Popup Ends Here --> 
<!-- Terms And Conditions Popup Start Here -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog popup_main">
	<div class="modal-content popup_main_in">
	<div class="modal-header popup_header">
		<h2 class="modal-title" id="exampleModalLabel">Terms and Conditions</h2>
		<button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body row">
		<div class="col-md-12 privacy_policy">
			<object data="term-conditions-pdf.pdf" type="application/pdf" width="100%" height="100%">
			</object>
		</div>
	</div>
	</div>
</div>
</div>
<!-- Terms And Conditions Popup Ends Here --> 
</div>


<style>
    .shadow {
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}
.home-banner-over1 {
    width: 100%;
    position: static;
    left: 0;
    top: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background: rgba(153,62,69,1); */
    /* background: #e43659; */
}
</style>
<div class="home-banner-main">
<div class="home-banner-over1">
    <div class="clearfix"></div>
 <div style="background-image: url('images/bg3.png')">
  <div class="row" style="margin-top:10px; padding-left: 30px;">
    <div class="col-sm-7 p-3" style="padding-left: 50px;margin-top: 6%">
      <div class="col-sm-12 shadow" style="background-color: white; border-radius: 10px; ">
                    <div class="row" style="padding: 0px">
        <div class="col-sm-4" style="padding: 15px;"> 
            <p style="color: black; font-size:15px; font-weight: 700">Matrimony Profile for</p>
            <form action="<?php echo base_url();?>registration" method="post">
            <select class="form-select form-control" name="profile">
                <option>Select Profile</option>
                <option>Self</option>
                <option>Parents</option>
                <option>Sibling</option>
                <option>Relative</option>            
                <option>Friend</option>
                
            </select>
        </div>
        <div class="col-sm-3" style="padding: 15px;">
            <p style="color: black; font-size:15px; font-weight: 700">Name</p>
            <input type="text" class="form-control" placeholder="Name" required name="name">
        </div>
        
        <div class="col-sm-3" style="padding: 15px;">
            <p style="color: black; font-size:15px; font-weight: 700">Mobile Number</p>
            <input type="text" class="form-control" placeholder="mobile number" required name="mobile">
        </div>
         <div class="col-sm-2 btn-warning" style="border-bottom-right-radius: 10px;border-top-right-radius: 10px;">
            
            <button type="" class="btn btn-warning fa-3x" style="margin-top: 5%" onclick="myFunction()">
                <span style="font-size: 18px;font-weight: 700;align-content: center;text-align: center">Register</span>
            </button></form>
             <script>
function myFunction() 
{
 window.open("<?php echo base_url();?>registration", "_self");

};
                 function validateForm() {
  let x = document.forms["myForm"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
        </div>               
                        
    </div>
                    <div class="" style="float: right;">
            <span class="paddl5" style="display:inline-block; font-size:12px; line-height: 13px;color:#606b8a;letter-spacing:0.8px;">By clicking register free, I agree to the <a href="<?php echo site_url();?>terms" target="_blank"  style="text-decoration:underline;color:#606b8a;letter-spacing:0.8px;">T&amp;C</a> and <a href="<?php echo site_url();?>privacypolicy" target="_blank" style="text-decoration:underline;color:#606b8a;letter-spacing:0.8px;">Privacy Policy</a></span><div class="paddb10 regis-errtxt-terms" id="regis-errtxt-terms" style="display:none;">Please read and confirm acceptance of our Terms and Conditions, Privacy Policy, and to receive emails and telephonic communications from us.</div>
         </div>
                    
</div>
      
    </div>
    
    <div class="col-sm-5 text-white d-none d-sm-block">
<img src="images/banner-trans-img1.png" class="img-responsive" alt="img" style="height:450px;width:530px">
        
    </div>
  
</div>
</div>
</div></div>

 <section class="contact-map-sec">
  <div class="progress">
  <h2 style="margin-top: -30px;font-size: 30px; font-weight: 700; color: #8b0000; line-height: 38px;">Different people. Different tastes. <br>The best Platform for perfect matches.</h2>
  <h2 style="font-size: 22px; font-weight: 700;margin-top: -2px;float: left; margin-left: 150px;">Our Branches</h2>
  <div class="progress_inner">
    <div class="progress_inner__step">
      <label for="step-1">Jubilee Hills</label>
    </div>
    <div class="progress_inner__step">
      <label for="step-2">Ameerpet</label>
    </div>
    <div class="progress_inner__step">
      <label for="step-3">KPHB</label>
    </div>
    <div class="progress_inner__step">
      <label for="step-4">Vijayawada</label>
    </div>
    <div class="progress_inner__step">
      <label for="step-5">Eluru</label>
    </div>
    <input id="step-1" name="step" type="radio">
    <input checked="checked" id="step-2" name="step" type="radio">
    <input id="step-3" name="step" type="radio">
    <input id="step-4" name="step" type="radio">
    <input id="step-5" name="step" type="radio">
    <div class="progress_inner__bar"></div>
    <div class="progress_inner__bar--set"></div>
    <div class="progress_inner__tabs">
      <div class="tab tab-0">
        <h3>Jubilee Hills</h3>
        <p>Plot No. 1282/A, Road No 64, Jubilee Hills, Hyderabad.<br>
		Phone: +91 9177036777</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.2851858115816!2d78.44177175820369!3d17.432393856032302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ce69555555%3A0x82e84e2e0a69e8b2!2sKammavaari%20Matrimony!5e0!3m2!1sen!2sin!4v1649075160127!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      </div>
      <div class="tab tab-1">
        <h3>Ameerpet</h3>
		<p>Flat No-102, Sri Sai Ram Estate, <br>Beside Kamma Sangham, Ameerpet, Hyderabad.<br>
		Phone: +91 70323 06555</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.2851858115816!2d78.44177175820369!3d17.432393856032302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ce69555555%3A0x82e84e2e0a69e8b2!2sKammavaari%20Matrimony!5e0!3m2!1sen!2sin!4v1649075160127!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      </div>
      <div class="tab tab-2">
        <h3>KPHB</h3>
		<p>Shanthi Apartments, Bhagya Nagar Colony, <br>Kukatpally, Hyderabad, Telangana 500072</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.2503700601037!2d78.39944551487785!3d17.495557788013897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x298382131449a63f!2zMTfCsDI5JzQ0LjAiTiA3OMKwMjQnMDUuOSJF!5e0!3m2!1sen!2sin!4v1671574231146!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      </div>
      <div class="tab tab-3">
        <h3>Vijayawada</h3>
		<p>Dhanaya Gari St, Ramachandra Nagar, <br>Vijayawada, Andhra Pradesh 520008</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.448862697135!2d80.6531153148642!3d16.503421788613988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a35345336675e4e!2zMTbCsDMwJzEyLjMiTiA4MMKwMzknMTkuMSJF!5e0!3m2!1sen!2sin!4v1671574137257!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      </div>
      <div class="tab tab-4">
        <h3>Eluru</h3>
		<p>Narasimharao Pet, <br>Eluru, Andhra Pradesh 534006</p>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.3647056711466!2d81.092034314867!3d16.70864488848868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e9014422fe7a990!2zMTbCsDQyJzMxLjEiTiA4McKwMDUnMzkuMiJF!5e0!3m2!1sen!2sin!4v1671574044392!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      </div>
    </div>
    <div class="progress_inner__status">
      <div class="box_base"></div>
      <div class="box_lid"></div>
      <div class="box_ribbon"></div>
      <div class="box_bow">
        <div class="box_bow__left"></div>
        <div class="box_bow__right"></div>
      </div>
      <div class="box_item"></div>
      <div class="box_tag"></div>
      <div class="box_string"></div>
    </div>
  </div>
</div>
 </section>
 
<div class="home-whereglow profile_list_bg" style="display: none;">
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


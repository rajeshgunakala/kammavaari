<div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center min-vh-100">
				<div class="w-100 d-block bg-white shadow-lg rounded my-5">
					<div class="row">
						<div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
						<div class="col-lg-7">
							<div class="p-5">
								<h1 class="h5 mb-3">Profession details help us to find best companion</h1>
								<form class="customerregister needs-validation" method="POST" action="<?php echo site_url();?>registration/profession" novalidate data-toggle="validator">
									  <?php if($this->session->flashdata('msg_succ') != ''){ ?>
										<div class="alert alert-block alert-success">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<p>
												<?php echo $this->session->flashdata('msg_succ')?$this->session->flashdata('msg_succ'):'';?>
											</p>
										</div>
									<?php } ?>
									<?php if($this->session->flashdata('msg_failure') != ''){ ?>
										<div class="alert alert-block alert-danger">
											<button type="button" class="close" data-dismiss="alert">
												<i class="ace-icon fa fa-times"></i>
											</button>
											<p>
												<?php echo $this->session->flashdata('msg_failure')?$this->session->flashdata('msg_failure'):'';?>
											</p>
										</div>
									<?php } ?>
									<div class="form-group row">
										<div class="col-sm-6 mb-3 mb-sm-0">
											 <label for="highest_education_1">Highest Education</label>
											 <select class="form-control" id="highest_education_1" name="highest_education_1" required onchange="getdegree(this.value,1)">
											  <option value="">Select Education</option>
											  <?php foreach($heighsteducation as $value) {?>
											  <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
											  <?php  }?>
											</select>
											<div class="invalid-feedback">
												Please select highest education.
											</div>
										</div>
										<div class="col-sm-6">
											 <label for="height">Education</label>
											<select class="form-control" id="education_degree_1" name="education_degree_1" required>
												<option value="">Select Education Degree</option>
											</select>
											<div class="invalid-feedback">
												Please select additional degree.
											</div>
										</div>
									</div>
									<div class="form-group row">										
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="employee_in">Employed In</label>
											<select class="form-control" id="employee_in" onchange="employee(this.value);" name="employee_in" required>
											  <option value="">Select Employed In</option>
											  <option value="Government">Government</option>
											  <option value="Private">Private</option>
											  <option value="Business">Business</option>
											  <option value="Defencce">Defencce</option>
											  <option value="Student">Student</option>
											  <option value="Not-Working">Not-Working</option>
											</select>
											<div class="invalid-feedback">
												Please select employed in.
											</div>	
										</div>
										<div class="col-sm-6" id="hide_profession">
											<label for="profession">Occupation</label>
											<select class="form-control" id="profession" name="profession" onchange="getprofessioninfo(this.value)">
											  <option value="">Select Occupation</option>
											  <?php foreach($professions as $value) { ?>
											  <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option>
											  <?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select Occupation.
											</div>																
										</div>
									</div>
									<div class="form-group row hidedata">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label for="currency">Currency</label>
											<select id="currency" class="form-control" name="currency">
												<option value="">Select Currency</option>
												<option value="Rs">India</option>
												<option value="US">USA</option>
												<option value="GBP">UK</option>
												<option value="CAD">Canada</option>
												<option value="AUD">Australia</option>
												<option value="SGD">Singapore</option>
												<option value="SAR">Saudi Arabia</option>
												<option value="ZAR">South Africa</option>
												<option value="KWD">Kuwait</option>
												<option value="PKR">Pakistan</option>
												<option value="AFA">Afghanistan</option>
												<option value="ALL">Albania</option>
												<option value="DZD">Algeria</option>
												<option value="SAR">Anguiila</option>
												<option value="XCD">South Africa</option>
												<option value="XCD">Antarctica</option>
												<option value="AMD">Armenia</option>
												<option value="AWG">Aruba</option>
												<option value="EUR">Austria</option>
												<option value="AZM">Azerbaijan</option>
												<option value="BHD">Bahrain</option>
												<option value="BDT">Bangladesh</option>
												<option value="EUR">Belgium</option>
												<option value="BWP">Botswana</option>
												<option value="BRL">Brazil</option>
												<option value="USD">British Indian Ocean Territory</option>
												<option value="BND">Brunei</option>
												<option value="CNY">China</option>
												<option value="XAF">Congo</option>
												<option value="CZK">Czech Republic</option>
												<option value="DKK">Denmark</option>
												<option value="ERN">Eritrea</option>
												<option value="ETB">Ethiopia</option>
												<option value="EUR">Finland</option>
												<option value="EUR">France</option>
												<option value="EUR">Germany</option>
												<option value="GHC">Ghana</option>
												<option value="XCD">Grenada</option>
												<option value="HKD">Hong Kong</option>
												<option value="HUF">Hungary</option>
												<option value="ISK">Iceland</option>
												<option value="IDR">Indonesia</option>
												<option value="IQD">Iraq</option>
												<option value="EUR">Ireland</option>
												<option value="ILS">Israel</option>
												<option value="EUR">Italy</option>
												<option value="XOF">Ivory Coast</option>
												<option value="JMD">Jamaica</option>
												<option value="JPY">Japan</option>
												<option value="JOD">Jordan</option>
												<option value="KZT">Kazakstan</option>
												<option value="KES">Kenya</option>
												<option value="KRW">South Korea</option>
												<option value="KPW">North Korea</option>
												<option value="LNP">Lebanon</option>
												<option value="LRD">Liberia</option>
												<option value="EUR">Luxembourg</option>
												<option value="MYR">Malaysia</option>
												<option value="MVR">Maldives</option>
												<option value="LRD">Liberia</option>
												<option value="EUR">Luxembourg</option>
												<option value="MYR">Malaysia</option>
												<option value="MVR">Maldives</option>
												<option value="XOF">Mali</option>
												<option value="EUR">Martinique</option>
												<option value="MUR">Martinique</option>
												<option value="MXN">Mexico</option>
												<option value="NPR">Nepal</option>
												<option value="EUR">Netherlands</option>
												<option value="NZD">New Zealand</option>
												<option value="NGN">Nigeria</option>
												<option value="NOK">Norway</option>
												<option value="OMR">Oman</option>
												<option value="PHP">Philippines</option>
												<option value="PLZ">Poland</option>
												<option value="USD">Puerto Rico</option>
												<option value="QAR">Qatar</option>
												<option value="RUR">Russia</option>
												<option value="XOF">Senegal</option>
												<option value="EUR">Spain</option>
												<option value="SDD">Sudan</option>
												<option value="SZL">Swaziland</option>
												<option value="SEK">Sweden</option>
												<option value="CHF">Switzerland</option>
												<option value="RUR">Russia</option>
												<option value="XOF">Senegal</option>
												<option value="EUR">Spain</option>
												<option value="SDD">Sudan</option>
												<option value="SZL">Swaziland</option>
												<option value="SEK">Sweden</option>
												<option value="CHF">Switzerland</option>
												<option value="TWD">Taiwan</option>
												<option value="TZS">Tanzania</option>
												<option value="THB">Thailand</option>
												<option value="TRL">Turkey</option>
												<option value="UGS">Uganda</option>
												<option value="NO">Ukraine</option>
												<option value="AED">United Arab Emirates</option>
												<option value="VND">Vietnam</option>
												<option value="ZMK">Zambia</option>
												<option value="NotG">Not Given</option>
												<option value="OthR">Other</option>
												<option value="LKR">Srilanka</option>
												<option value="BWI">West Indies</option>
												<option value="Euro">Europe</option>
												<option value="CFA">WEST AFRICA</option>
												<option value="Riel">Cambodia</option>
												<option value="RS">Seychelles</option>
											  </select>
											<div class="invalid-feedback">
												Please select currency.
											</div>	
										</div>
										<div class="col-sm-6">
											<label for="annual_income">Annual Income</label>
											<select class="form-control form-control-user" id="subcaste" name="subcaste">
												<option value="">Select Annual Income</option>
												<option value="0.5">50,000</option>
												<option value="0.6">60,000</option>
												<option value="0.7">70,000</option>
												<option value="0.8">80,000</option>
												<option value="0.9">90,000</option>
												<option value="1">1 Lakh</option>
												<option value="2">2 Lakhs</option>
												<option value="3">3 Lakhs</option>
												<option value="4">4 Lakhs</option>
												<option value="5">5 Lakhs</option>
												<option value="6">6 Lakhs</option>
												<option value="7">7 Lakhs</option>
												<option value="8">8 Lakhs</option>
												<option value="9">9 Lakhs</option>
												<option value="10">10 Lakhs</option>
												<option value="11">11 Lakhs</option>
												<option value="12">12 Lakhs</option>
												<option value="13">13 Lakhs</option>
												<option value="14">14 Lakhs</option>
												<option value="15">15 Lakhs</option>
												<option value="16">16 Lakhs</option>
												<option value="17">17 Lakhs</option>
												<option value="18">18 Lakhs</option>
												<option value="19">19 Lakhs</option>
												<option value="20">20 Lakhs</option>
												<option value="21">21 Lakhs</option>
												<option value="22">22 Lakhs</option>
												<option value="23">23 Lakhs</option>
												<option value="24">24 Lakhs</option>
												<option value="25">25 Lakhs</option>
												<option value="More than 25">More than 25 lakhs</option>
											</select>
											<div class="invalid-feedback">
												Please select Annual Income.
											</div>																
										</div>
									</div>
									<div class="form-group row hidedata">
										<div class="col-sm-6 mb-3 mb-sm-0">
											<label id="countryId" for="countryId">Country</label>
											<select class="form-control form-control-user" id="groom_country" name="groom_country" onchange="getstates(this.value)">
											  <option value="">Select Country</option>
											  <?php foreach($countries as $value) { ?>
											  <option  value="<?php echo $value['country'];?>"><?php echo ucwords($value['country']);?></option>
											  <?php } ?>
											</select>
											<div class="invalid-feedback">
												Please select work location.
											</div>	
										</div>
										<div class="col-sm-6">
											<label id="stateId" for="stateId">State</label>
											<select class="form-control form-control-user" id="state_id" name="state_id">
											  <option value="">Select State</option>
											</select>
											<div class="invalid-feedback">
												Please select state.
											</div>																	
										</div>
									</div>
									<div class="form-group hidedata">
											<label for="city">City</label>
											<input type="text" class="form-control form-control-user" name="city" id="city" />
											<div class="invalid-feedback">Please enter city.</div>
									</div>
									<div class="form-group">
											<label for="about">About Me</label>
											 <textarea class="form-control form-control-user" name="about" id="about" cols="20" rows="5"></textarea>
											<div class="invalid-feedback">Please enter about yourself.</div>
									</div>
									  <input type="submit" class="btn btn-primary btn-block waves-effect waves-light" name="submit" value="Submit Profession Details">
								   </form>
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
<style>
.hide {display:none;}
</style>
<script type="text/javascript">

        //programmer defined functions
		function getstates(valu)
		{
		    if((valu!="India"))
    		{
    			$('#appdate').show(1000);
    		}
    		else
    		{
    			$('#appdate').hide(1000);
    		}
    		
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getstates',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#state_id").html(op);
			   }
		   });
		}
		function getdegree(valu,n)
		{
		    
		    $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdegree',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				   //alert(op);
				  $("#education_degree_"+n).html(op);
			   }
		   });
		}
		function getspecialization(valu,n)
		{
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getspecialization',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				   //alert(op);
				  $("#specialization_"+n).html(op);
			   }
		   });
		}

        

        function employee(valu)
        {
            if((valu=="Student")||(valu=="Not-Working"))
            {
                $('.hidedata').hide(1000);
				if(valu == "Student") {
					$("#hide_profession").show();
				}
				if(valu == "Not-Working") {
					$("#hide_profession").hide();
				}
            }
            else
            {
                $('.hidedata').show(1000);
				$("#hide_profession").show();
            }
        }

		function getprofessioninfo(valu)
		{

  var prof=document.getElementById("employee_in").value;


		    if((prof=="Student")||(prof=="Not-Working"))
    		{
    			$('.hidedata').hide(1000);
    		}
    		else
    		{
    			$('.hidedata').show(1000);
    		}
		}
</script> 
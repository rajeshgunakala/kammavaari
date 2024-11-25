<section class="form-section">
  <div class="container">
    <div class="col-12">
      <div class="general-form">
        <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i>Education Details</h2>
        <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/profession" onSubmit="return validation()">
          <!--Education Start-->
            <div class="panel panel-default panelCustProfessional">
              <div class="panel-heading">Highest Qualification</div>
              <div class="panel-body">
                	<div class="col-md-4">
                    	<label>Education</label>
                        <select class="form-control" id="highest_education_1" name="highest_education_1" onchange="getdegree(this.value,1)">
                          <option value="">Select Education</option>
                          <?php foreach($heighsteducation as $value) { if($value['edutype']=='he'){?>
                          <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
                          <?php } }?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label>Education Degree</label>
                        <select class="form-control" id="education_degree_1" name="education_degree_1" onchange="getspecialization(this.value,1)">
                            <option value="">Select Education Degree</option>
                        </select>
                        <span id="education_degrees" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-md-4">
                        <label>Specialization</label>
                        <select id="specialization_1" class="form-control" name="specialization_1">
                            <option value="" selected="selected">Select Specialization</option>
                        </select>
                        <span id="specializations" class="text-danger font-weight-bold"></span>
                    </div>
                    <div class="col-md-4">
                    	<label>Universiy</label>
                        <input type="text" name="university_1" class="form-control" id="university_1" />
                    </div>
                    <div class="col-md-4">
                    	<label>College</label>
                        <input type="text" name="college_1" class="form-control" id="college_1"/>
                    </div>
                    <div class="col-md-4">
                    	<label>Enter Year of Passing</label>
                        <input type="text"  maxlength="4" class="form-control" name="txt_yearofpassing_1" id="txt_yearofpassing_1"/>
                    </div>
               </div>
            </div>
          
            <div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">Post Graduate</div>
                <div class="panel-body">
                    <div class="col-md-4">
                    	<label>Education</label>
                        <select class="form-control" id="highest_education_2" name="highest_education_2" onchange="getdegree(this.value,2)">
                          <option value="">Select Education</option>
                          <?php foreach($heighsteducation as $value) { if($value['edutype']=='pg'){?>
                          <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
                          <?php } }?>
                        </select>
                    </div>
                    
                    <div class="col-md-4">
                        <label>Education Degree</label>
                        <select class="form-control" id="education_degree_2" name="education_degree_2" onchange="getspecialization(this.value,2)">
                            <option value="">Select Education Degree</option>
                        </select><span id="education_degrees" class="text-danger font-weight-bold"></span>
                    </div>
                    
                    <div class="col-md-4">
                            	<label>Specialization</label>
                            <select id="specialization_2" class="form-control" name="specialization_2">
                      <option value="" selected="selected">Select Specialization</option>
                    </select>
                    <span id="specializations" class="text-danger font-weight-bold"></span>
                    </div>
                        
                        <div class="col-md-4">
                            	<label>Universiy</label>
                            <input type="text" name="university_2" id="university_2" class="form-control" />
                        </div>
                        
                        <div class="col-md-4">
                            	<label>College</label>
                             <input type="text" name="college_2" class="form-control" id="college_2"/>
                        </div>
                        
                        <div class="col-md-4">
                            	<label>Enter Year of Passing</label>

                            <input type="text" maxlength="4" name="txt_yearofpassing_2" class="form-control" id="txt_yearofpassing_2"/>
                        </div>
                </div>
            </div>
          
          	<div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">Graduate</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        	<label>Education</label>
                            <select class="form-control" id="highest_education_3" name="highest_education_3" onchange="getdegree(this.value,3)">
                      <option value="">Select Education</option>
                      <?php foreach($heighsteducation as $value) { if($value['edutype']=='g'){?>
                      <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
                      <?php } }?>
                    </select>
                    </div>
                    
                    <div class="col-md-4">
                        	 <label for="height">Education Degree</label>
                            <select class="form-control" id="education_degree_3" name="education_degree_3" onchange="getspecialization(this.value,3)">
                      <option value="">Select Education Degree</option>
                    </select><span id="education_degrees" class="text-danger font-weight-bold"></span>
                    </div>
                    
                    <div class="col-md-4">
                            	<label for="country">Specialization</label>
                            <select id="specialization_3" class="form-control" name="specialization_3">
                      <option value="" selected="selected">Select Specialization</option>
                    </select>
                    <span id="specializations" class="text-danger font-weight-bold"></span>
                        </div>
                        
                        <div class="col-md-4">
                           <label for="height">Universiy</label>
                            <input type="text" class="form-control" name="university_3" id="university_3" />
                        </div>
                        
                        <div class="col-md-4">
                            	<label for="college">College</label>
                             <input type="text" class="form-control" name="college_3" id="college_3"/>
                        </div>
                        
                        <div class="col-md-4">
                            	<label for="college">Enter Year of Passing</label>
                            <input type="text" maxlength="4"  class="form-control" name="txt_yearofpassing_3" id="txt_yearofpassing_3"/>
                        </div>
                </div>
            </div>
          
          	<div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">Intermediate</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        	<label for="country">Education</label>
                            <select class="form-control" id="highest_education_4" name="highest_education_4" onchange="getdegree(this.value,4)">
                      <option value="">Select Education</option>
                      <?php foreach($heighsteducation as $value) { if($value['edutype']=='ug'){?>
                      <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
                      <?php } }?>
                    </select>
                    </div>
                    
                    <div class="col-md-4">
                        	 <label for="height">Education Degree</label>
                            <select class="form-control" id="education_degree_4" name="education_degree_4" onchange="getspecialization(this.value,4)">
                      <option value="">Select Education Degree</option>
                    </select><span id="education_degrees" class="text-danger font-weight-bold"></span>
                    </div>
                    
                    <div class="col-md-4">
                            	<label for="country">Specialization</label>
                            <select id="specialization_4" class="form-control" name="specialization_4">
                      <option value="" selected="selected">Select Specialization</option>
                    </select>
                    <span id="specializations" class="text-danger font-weight-bold"></span>
                        </div>
                        
                        <div class="col-md-4">
                           <label for="height">Universiy</label>
                            <input type="text" class="form-control" name="university_4" id="university_4" />
                        </div>
                        
                        <div class="col-md-4">
                            	<label for="college">College</label>
                             <input type="text" class="form-control" name="college_4" id="college_4"/>
                        </div>
                        
                        <div class="col-md-4">
                            	<label for="college">Enter Year of Passing</label>

                            <input type="text" maxlength="4" class="form-control" name="txt_yearofpassing_4" id="txt_yearofpassing_4"/>
                        </div>
                </div>
            </div>

          	<div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">X Grade</div>
                <div class="panel-body">
                    <div class="col-md-4">
                        	<label for="country"> Board</label>
                            
                             <select class="form-control txt_tenth" id="txt_tenth" name="txt_tenth"  >
                              <option value="">Select Board</option>
                              <?php foreach($heighsteducation as $value) { if($value['edutype']=='sc'){?>
                              <option value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
                              <?php } }?>
                            </select> 
                    </div>
                    <div class="col-md-4">
                            	<label for="college">School</label>
                             <input type="text"  class="form-control" name="school" id="school"/>
                        </div>
                        
                        <div class="col-md-4">
                            	<label for="college">Enter Year of Passing</label>

                            <input type="text" maxlength="4" class="form-control" name="txt_yearofpassing_5" id="txt_yearofpassing_5"/>
                        </div>
                    <div class="col-md-4">
                        	 <label for="height">&nbsp;</label>
                            &nbsp;<span id="education_degrees" class="text-danger font-weight-bold"></span>
                    </div>
                    
                    <div class="col-md-4 hide">
                            	<label for="country">Specialization</label>
                            <input type="text" name="txt_tenthspec"  class="form-control txt_tenthspec" value="&nbsp;">
                    <span id="specializations" class="text-danger font-weight-bold"></span>
                        </div>
                        
                        <div class="col-md-4 hide">
                           <label for="height">Board</label>
                            <input type="text" name="txt_tenthboard" class="form-control txt_tenthboard" value="&nbsp;">
                        </div>
                </div>
            </div>

          <!--Education End-->
          	<div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">Education in Detailed</div>
                    <div class="panel-body">
                        <div class="col-md-12">
                        	<label for="country" class="text-primary"> &nbsp;</label>
                            <textarea class="form-control" name="education-details" id="education-details" cols="20" rows="5"></textarea>
                        </div>
                    </div>
            </div>


            <h2><i class="fa fa-suitcase" aria-hidden="true"></i>Professional Details</h2>
            <div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">Employment Details</div>
                    <div class="panel-body">
                      <div class="col-md-4">
                        <label for="employeein">Employed In</label>
                        <select class="form-control" id="employee_in" onchange="employee(this.value);" name="employee_in">
                          <option value="">Select Employed In</option>
                          <option value="Government">Government</option>
                          <option value="Private">Private</option>
                          <option value="Business">Business</option>
                          <option value="Defencce">Defencce</option>
                          <option value="Student">Student</option>
                          <option value="Not-Working">Not-Working</option>
                        </select>
                        <span id="employee_ins" class="text-danger font-weight-bold"></span>
                        </div>
                      <div class="col-md-4" id="hide_profession">
                        <label for="occupation">Profession</label>
                        <select class="form-control" id="profession" name="profession" onchange="getprofessioninfo(this.value)">
                          <option value="">Select Profession</option>
                          <?php foreach($professions as $value) { ?>
                          <option value="<?php echo $value['profession'];?>"><?php echo stripcslashes($value['profession']);?></option>
                          <?php } ?>
                        </select>
                        <span id="professions" class="text-danger font-weight-bold"></span>
					  </div>
                      <div id="hidedata" style="display:none;">
                        <div class="col-md-4">
                          <label id="label_annualIncomeCurrencyId" for="annualIncomeCurrencyId">Currency </label>
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
                          <span id="currencys" class="text-danger font-weight-bold"></span>
                          </div>
                        <div class="col-md-4">
                          <label id="label_annualIncomeAmount" for="annualIncomeAmount">Annual Income </label>
                          <input type="number" id="monthly_income" class="form-control" name="monthly_income">
                          <span id="monthly_incomes" class="text-danger font-weight-bold"></span> 
                          </div>
                        <div class="col-md-4">
                          <label for="company">Company</label>
                          <input type="text" name="company"  class="form-control" id="company"/>
                          <span id="companys" class="text-danger font-weight-bold"></span> 
                          </div>
                        <div class="col-md-4">
                          <label for="occupation">Profession In Details</label>
                          <textarea type="text" name="about_profession" id="about_profession" class="form-control" cols="20" rows="5"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            

            <h2><i class="fa fa-map-marker" aria-hidden="true"></i>Candidate's Current Location</h2>
            <div class="panel panel-default panelCustProfessional">
            	<div class="panel-heading">Employment Details</div>
                    <div class="panel-body">
                          <div class="col-md-4">
                            <label id="countryId" for="countryId">Country</label>
                            <select class="form-control" id="groom_country" name="groom_country" onchange="getstates(this.value)">
                              <option value="">Select Country</option>
                              <?php foreach($countries as $value) { ?>
                              <option  value="<?php echo $value['country'];?>"><?php echo ucwords($value['country']);?></option>
                              <?php } ?>
                            </select>
                            <span id="groom_countrys" class="text-danger font-weight-bold"></span> </div>
                          <div class="col-md-4">
                            <label id="label_stateId" for="stateId">State </label>
                            <select class="form-control" id="state_id" name="state_id">
                              <option value="">Select State</option>
                            </select>
                            <span id="state_ids" class="text-danger font-weight-bold"></span> </div>
                          <div class="col-md-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" id="city" />
                            <span id="citys" class="text-danger font-weight-bold"></span> </div>
                          <div id="appdate" style="display:none;">
                            <div class="col-md-4">
                              <label for="visatype">Visa Type</label>
                              <select class="form-control" id="visatype" name="visatype">
                                <option value="">Select Visa Type</option>
                                <option value="Student Visa(F1)">Student Visa(F1)</option>
                                <option value="Work Permit">Work Permit</option>
                                <option value="Temporary Vissa">Temporary Vissa</option>
                                <option value="Citizen">Citizen</option>
                                <option value="Permanent Resident">Permanent Resident</option>
                                <option value="Green Card">Green Card</option>
                                <option value="Opt">Opt</option>
                                <option value="H1B">H1B</option>
                                <option value="O1">O1</option>
                                <option value="B1">B1</option>
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label for="birth_date">Residing Since</label>
                              <input type="date" name="residing-since"  class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label for="birth_date">Arrival Date</label>
                              <input type="date" name="arrival-date"  class="form-control">
                            </div>
                            <div class="col-md-4">
                              <label for="birth_date">Departure Date</label>
                              <input type="date" name="departure-date" class="form-control">
                            </div>
                        </div>
                    </div>
              </div>
              
              <h2><i class="fa fa-pencil-square" aria-hidden="true"></i>About Me</h2>
                <p class="col-md-12 form-p">Prospective matches would like to know what you are like,as a person.Write about yourself</p>
                <div class="col-md-12">
                  <textarea class="form-control" name="about" id="about" cols="20" rows="5"></textarea>
                </div>
                <div class="col-md-12">
                    <div class="submit-form">
                        <input type="submit" value="Submit Profession Details" class="btn btn-primary submit submitprofdet" name="submit" id="submit">
                    </div>
                </div>
             </form>
        </div>
    </div>
      </div>
</section>
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
                $('#hidedata').hide(1000);
				if(valu == "Not-Working") {
					$("#hide_profession").hide();
				}
            }
            else
            {
                $('#hidedata').show(1000);
				$("#hide_profession").show();
            }
        }

		function getprofessioninfo(valu)
		{

  var prof=document.getElementById("employee_in").value;


		    if((prof=="Student")||(prof=="Not-Working"))
    		{
    			$('#hidedata').hide(1000);
    		}
    		else
    		{
    			$('#hidedata').show(1000);
    		}
		}
</script> 
<script type="text/javascript">
    $(document).ready(function() {
        
	function validation()
    {
       var country = document.getElementById('groom_country').value;
	 
       var state = document.getElementById('state_id').value;
       var city = document.getElementById('city').value;
       var employee_in = document.getElementById('employee_in').value;
	    
       var currency = document.getElementById('currency').value; 
       var profession = document.getElementById('profession').value;
       var monthly_income = document.getElementById('monthly_income').value;
       var company = document.getElementById('company').value;
       /*var heighsteducation = document.getElementById('highest_education').value;
       var education_degree = document.getElementById('education_degree').value;
       var specialization = document.getElementById('specialization').value;*/
      
      //alert(employee_in);
        /*if(heighsteducation == "Select Education")
       {
           document.getElementById('highest_educations').innerHTML = "Please select heighst education ";
           document.getElementById('highest_education').focus();
           return false;
       }else {
            document.getElementById('highest_educations').innerHTML = " ";
       }
       
        if(education_degree == "Select Education Degree")
       {
           document.getElementById('education_degrees').innerHTML = "Please select education degree";
            document.getElementById('education_degree').focus();
           return false;
       }else {
            document.getElementById('education_degrees').innerHTML = " ";
       }
       
        if(specialization == "Select Specialization")
       {
           document.getElementById('specializations').innerHTML = "Please select specialization";
           document.getElementById('specialization').focus();
           return false;
       }else {
            document.getElementById('specializations').innerHTML = " ";
       }*/
	  
       if(employee_in == "")
       {
           document.getElementById('employee_ins').innerHTML = "Please select Employment";
           document.getElementById('employee_in').focus();
           return false;
       }else {
            document.getElementById('employee_ins').innerHTML = " ";
       }
	   
	   
       if(employee_in != "Not-Working" && employee_in != "Student" && profession == "")
	   {
		   document.getElementById('professions').innerHTML = "Please select profession";
		   document.getElementById('profession').focus();
		   return false;
	   }else {
			document.getElementById('professions').innerHTML = " ";
	   }
           
      /*  if((employee_in != "Student")||(employee_in != "Not-Working"))
       {
           
           
           if(currency == "Select Currency")
           {
               document.getElementById('currencys').innerHTML = "Please select currency";
               document.getElementById('currency').focus();
               return false;
           }else {
                document.getElementById('currencys').innerHTML = " ";
           }
           
           if(monthly_income == "")
           {
               document.getElementById('monthly_incomes').innerHTML = "Please enter income";
               document.getElementById('monthly_income').focus();
               return false;
           }else {
                document.getElementById('monthly_incomes').innerHTML = " ";
           }
            if(company == "")
           {
               document.getElementById('companys').innerHTML = "Please enter company name";
               document.getElementById('company').focus();
               return false;
           }else {
                document.getElementById('companys').innerHTML = " ";
           }
           if(!isNaN(company))
           {
               document.getElementById('companys').innerHTML = "Please enter only characters";
               document.getElementById('company').focus();
               return false;
           }else {
                document.getElementById('companys').innerHTML = " ";
           }
       }*/
       
       if(country == "")
       {
           document.getElementById('groom_countrys').innerHTML = "Please select country";
           document.getElementById('groom_country').focus();
           return false;
       }else {
            document.getElementById('groom_countrys').innerHTML = " ";
       }
       
       /*if(state == "")
       {
           document.getElementById('state_ids').innerHTML = "Please select state ";
           document.getElementById('state_id').focus();
           return false;
       }else {
            document.getElementById('state_ids').innerHTML = " ";
       }
       
        if(city == "")
       {
           document.getElementById('citys').innerHTML = "Please enter city";
           return false;
           document.getElementById('city').focus();
       }else {
            document.getElementById('citys').innerHTML = " ";
       }*/
        if((city != "" && city.length < 3))
       {
           document.getElementById('citys').innerHTML = "Please fill the city with minimum 3 characters";
            document.getElementById('city').focus();
           return false;
       }else {
            document.getElementById('citys').innerHTML = " ";
       }
        if(city != "" && !isNaN(city))
       {
           document.getElementById('citys').innerHTML = "Please enter only characters";
            document.getElementById('city').focus();
           return false;
       }else {
            document.getElementById('citys').innerHTML = " ";
       }
       
	   return 'success';
    }
	
	
	$('.submitprofdet').click(function(){
	
	if($('#highest_education_1').val()=='' && $('#highest_education_2').val()=='' && $('#highest_education_3').val()=='' && $('#highest_education_4').val()=='' && $('.txt_tenth').val()=='')
{
	
	return false;
}	
 var ret=validation();
 if(ret=='success')
 {
	 return true;
 }
 else
 {
 return false;
 }
	});
	
	
    });
	

</script> 

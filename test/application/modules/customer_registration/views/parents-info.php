<section  class="form-section">
   <div class="container">
      <div class="col-md-12">
            <div class="general-form">
               <h2><i class="fa fa-users" aria-hidden="true"></i>Parents Details</h2>
                <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/parents" onsubmit="return validation()">
                    <div class="col-md-6">
                        <label for="name">Father Name <span style="color:red">*</span></label>
                        <input type="text" class="form-control" name="father-name" id="father-name"/>
                         <span id="father-names" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Father Education</label>
                        <input type="text" class="form-control" name="father-education" id="father-education"/>
                        <span id="father-educations" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Father Profession</label>
                        <input type="text" class="form-control" name="father-profession" id="father-profession"/>
                         <span id="father-professions" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Father Email</label>
                        <input type="email" class="form-control" name="father-email" id="father-email"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Father Mobile</label>
                        <input type="phone" class="form-control" name="father-mobile" id="father-mobile"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Father Father Name</label>
                        <input type="text" class="form-control" name="fathers-father-name" id="fathers-father-name"/>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Father Father State</label>
                        <select class="form-control" id="fathers-father-state" onchange="getfatherdistricts(this.value)" name="fathers-father-state">
                            <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Father Father District</label>
                        <select class="form-control" id="fathers-father-district" name="fathers-father-district">
                           <option value="">Select State First</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Father's Father Native Place</label>
                        <input type="text" class="form-control" name="fathers-father-native-place" id="fathers-father-native-place"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Mother Name <span style="color:red;">*</span></label>
                        <input type="text" class="form-control" name="mother-name" id="mother-name" />
                         <span id="mother-names" class="text-danger font-weight-bold"></span>
                     </div>
                     
                     <span id="groom_countrys" class="text-danger font-weight-bold"></span>
                     <div class="col-md-6">
                        <label for="name">Mother Education</label>
                        <input type="text" class="form-control" name="mother-education" id="mother-education"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Mother Profession</label>
                        <input type="text" class="form-control" name="mother-profession" id="mother-profession"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Mother Email </label>
                        <input type="email" class="form-control" name="mother-email" id="mother-email"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Mother Mobile </label>
                        <input type="phone" class="form-control" name="mother-mobile" id="mother-mobile"/>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Mother's Father Name </label>
                        <input type="text" class="form-control" name="mothers-father-name" id="mothers-father-name"/>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Mother's Father State </label>
                        <select class="form-control" id="mothers-father-state" onchange="getdistricts(this.value)" name="mothers-father-state">
                           <option value="">Select State</option>
                           <?php foreach($states as $value) { ?>
                           <option value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Mother's Father District </label>
                        <select class="form-control" id="mothers-father-district" name="mothers-father-district">
                           <option value="">Select State</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="name">Mother Father Native Place </label>
                        <input type="text" class="form-control" name="mothers-father-native-place" id="mothers-father-native-place"/>
                     </div>
                    <div class="col-xs-12">
                     <div class="submit-form">
                        <input type="submit" value="Submit Parents Details" class="submit btn btn-primary" name="submit" id="submit">
                     </div>
                  </div>
               </form>
            </div>
      </div>
   </div>
</section>
<script type="text/javascript">
    function validation()
    {
       var fathername = document.getElementById('father-name').value;
       var fatherprofession = document.getElementById('father-profession').value;
       var fathereducation = document.getElementById('father-education').value;
       var mothername = document.getElementById('mother-name').value;
       
           
           if(fathername == "")
           {
               document.getElementById('father-names').innerHTML = " Please enter father name";
                document.getElementById('father-name').focus();  
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(!isNaN(fathername))
           {
               document.getElementById('father-names').innerHTML = "Please enter only characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
            if(fathername.length < 3)
           {
               document.getElementById('father-names').innerHTML = "Name should be grater than 2 characters";
               document.getElementById('father-name').focus();
               return false;
           }else {
                document.getElementById('father-names').innerHTML = " ";
           }
                   
           
           if(mothername == "")
           {
               document.getElementById('mother-names').innerHTML = "Please enter mother name";
               document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(!isNaN(mothername))
           {
               document.getElementById('mother-names').innerHTML = "Please enter only characters";
                document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
            if(mothername.length < 3)
           {
               document.getElementById('mother-names').innerHTML = "Profession should be grater than 2 characters";
                document.getElementById('mother-name').focus();
               return false;
           }else {
                document.getElementById('mother-names').innerHTML = " ";
           }
    }
</script>
<script>
    function getdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#mothers-father-district").html(op);
			   }
		   });
        
    }
    function getfatherdistricts(value){
        $.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getdistricts',
			   data: "value="+value,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#fathers-father-district").html(op);
			   }
		   });
        
    }
</script>
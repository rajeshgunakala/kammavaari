<section class="form-section">
  <div class="container">
    <div class="col-12">
      <div class="general-form">
               <h2><i class="fa fa-users" aria-hidden="true"></i>Property Details</h2>
                   <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/property" onsubmit="return validation()">

                   <!--   Property Type-->
                      
                      <div class="form-radio form-group col-md-12">
                        <label for="property_type" class="radio-label"><span style="color:red">*</span> Property Type :</label>
                        <div style="display:flex;" class="col-md-9">
                           <div class="form-radio-item col-md-2">
                              <input type="radio" name="property_type" id="family" value="family" checked="checked">
                              <label for="family">Family</label>
                              <span class="check"></span>
                              
                           </div>
                           <div class="form-radio-item  col-md-2">
                              <input type="radio" name="property_type" id="shared" value="shared">
                              <label for="shared">Shared</label>
                              <span class="check"></span>
                           </div>
                           <div style="margin-top:-15px;" id="property_type_error" class="text-danger font-weight-bold"></div>
                        </div>
                        
                     </div>
                     
                   <!--  Property Value -->
                     
                     
                     <div class="col-md-12">
                        <select class="form-control" id="property_value" name="property_value" >
											  <option value="">Select Property Value</option>
											  
											   <?php foreach($property_values as $property_value) { ?>
												<option value="<?php echo $property_value["property_value"] ?>"><?php echo $property_value["property_value_label"] ?></option>
											   <?php } ?>
											</select>
												
                     </div>
						
                     
                     <!-- Property Description -->
                             <div class="col-md-12">
                            <label for="property_description" style="color:black;">Property Description :</label>
                            </div>
                            <div class="col-md-12">
                            <textarea type="text" rows="4" cols="40" name="property_description" class="form-control" id="property_description"/></textarea>
                             </div>
                  <div class="col-md-12">
                     <div class="submit-form">
                        <input type="submit" value="Submit Property Details" class="submit btn btn-primary" name="submit" id="submit">
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<script type="text/javascript">

    function validation()
    {
       var family = document.getElementById('family').checked;
       
       var shared = document.getElementById('shared').checked;
      
           if(family==false && shared==false)
           {
                document.getElementById('property_type_error').innerHTML = " *please select property type";
               
                return false;
           }else{
                document.getElementById('property_type_error').innerHTML = " ";
                return true;
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
<div id="page-inner" class="edit-profile">
   <div class="container">
      <div class="col-md-12 no-padding">
         <div class="col-xs-3 no-padding">
            <div class="sidebar">
               <ul class="dropdown-content">
                  <a class="<?php if($this->uri->segment(1)=="dashboard" && $this->uri->segment(2)=="") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard">Basic Details</a>
                  <a class="<?php if($this->uri->segment(2)=="religion") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/religion">Religion Details</a>
                  <a class="<?php if($this->uri->segment(2)=="professionalinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/professionalinfo">Education & Profession Details</a>                  
                  <a class="<?php if($this->uri->segment(2)=="parentsinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/parentsinfo">Parents Details</a>
                  <a class="<?php if($this->uri->segment(2)=="siblingsinfo") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/siblingsinfo">Sibling Details</a>
                  <a class="<?php if($this->uri->segment(2)=="property") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/property">Property Details</a>
                  <a class="<?php if($this->uri->segment(2)=="imagesadd") { echo "active-menu"; } ?>" href="<?php echo site_url();?>dashboard/imagesadd">Update Images</a>
               </ul>
            </div>
         </div>
         <!-- Insert property records start-->
         <div class="col-xs-9 no-padding">
            <div class="col-xs-12">
               <h1 class="page-header">
                  <i class="fa fa-user" aria-hidden="true"></i>Property Details</small>
               </h1>
               <?php if(isset($msg)){ ?>
               <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong><?php echo $msg ?></strong> 
               </div>
               <?php }?>
               <div class="col-xs-12 profile-details">
                  <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>dashboard/property" onsubmit="return validation()">
                     <div class="col-md-12 col-xs-12 no-padding">
                           <div class="col-xs-2 margin_bottom  no-padding">
                              <label for="property_type" class="radio-label">Property Type <span style="color:red">*</span></label>
                           </div>
                           <div class="col-xs-8">
                              <div style="display:flex;width:100%">
                                 <div class="form-radio-item pr-10">
                                    <input type="radio" name="property_type" id="family" <?php if($property_info['Property_type']=="family") { ?> checked="checked" <?php } ?> value="family">
                                    <label for="family">Family</label>
                                    <span class="check"></span>
                                 </div>
                                 <div class="form-radio-item">
                                    <input type="radio" name="property_type" id="shared" <?php if($property_info['Property_type']=="shared") { ?> checked="checked" <?php } ?> value="shared">
                                    <label for="shared">Shared</label>
                                    <span class="check"></span>
                                 </div>
                                 <div id="property_type_error" class="text-danger font-weight-bold"></div>
                              </div>
                           </div>
                        </div>
                        <!--  Property Value -->
                           <div class="col-xs-12  col-md-8 no-padding" >
								<label for="name"> Property Value</label>
							<select name="property_value" style="margin-bottom:10px;">
								<?php
							foreach($property_values as $property_value) {  ?>
                              <option class="form-control" name="property_value" maxlength="7" value="<?php echo $property_value['property_value']; ?>" id="property_value" <?php if($property_info['property_value']==$property_value['property_value']) { echo "selected"; } ?> /><?php echo $property_value["property_value_label"]; ?>
                        <?php } ?>   </div>
                        <!-- Property Description -->
                           <div class="col-xs-12  col-md-8 no-padding">
						   <label for="property_description">Property Description</label>
                              <textarea type="text" rows="4" class="form-control" cols="50" name="property_description" id="property_description"/><?php echo $property_info['property_Desc']; ?></textarea>
                           </div>
                        <!-- Property Description -->
                        <div class="col-xs-12"> &nbsp;</div>
						<?php if($property_count > 0) {?>
						 <div class="submit-form col-xs-12 text-center">
                           <input type="submit" value="Update Property Details" class="btn btn-primary submit m-0" style="margin-top:20px;" name="submit" id="submit" />
                        </div>
						<?php } else {?>
                        <div class="submit-form col-xs-12 text-center">
                           <input type="submit" value="Submit Property Details" class="btn btn-primary submit" name="insert_submit" id="submit" />
                        </div>
						<?php } ?>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
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
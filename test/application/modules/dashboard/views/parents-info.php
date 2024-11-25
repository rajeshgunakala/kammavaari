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
      <div class="col-xs-9 no-padding">
	  <div class="col-xs-12">
               <h1 class="page-header">
                  <i class="fa fa-users" aria-hidden="true"></i> Parents Details
               </h1>
         <?php if(isset($msg)){ ?>
         <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $msg ?></strong> 
         </div>
         <?php }?>
         <div class="col-md-12 col-xs-12 profile-details">
            <form method="POST" action="<?php echo site_url();?>dashboard/parentsinfo" class="register-form" id="register-form">
               <div class="form-row">
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Name </label> 
                     <input type="text" class="form-control" name="father-name" id="father-name" value="<?php echo $parents_info['father_name'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Education </label>
                     <input type="text" class="form-control" name="father-education" id="father-education" value="<?php echo $parents_info['father_education'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Profession </label>
                     <input type="text" class="form-control" name="father-profession" id="father-profession" value="<?php echo $parents_info['father_profession'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Email </label>
                     <input type="email" class="form-control" name="father-email" id="father-email"  value="<?php echo $parents_info['father_email'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Mobile </label>
                     <input type="phone" class="form-control" name="father-mobile" id="father-mobile"  value="<?php echo $parents_info['father_mobile'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Father Name </label>
                     <input type="text" class="form-control" name="fathers-father-name" id="fathers-father-name"  value="<?php echo $parents_info['fathers_father_name'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="country">Father Father State </label>
                     <select class="form-control" id="state" name="fathers-father-state" id="fathers-father-state" onchange="getfatherdistricts(this.value)">
                        <option value="">Select State</option>
                        <?php foreach($states as $value) { ?>
                        <option <?php if($parents_info['fathers_father_state']==$value['state']) { ?> selected <?php } ?> value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="country">Father Father District </label>
                     <select class="form-control" id="fathers-father-district" name="fathers-father-district">
                        <option value="">Select State</option>
                        <?php foreach($districts as $value) { ?>
                        <option <?php if($parents_info['mothers_father_district']==$value['district']) { ?> selected <?php } ?> value="<?php echo $value['district'];?>"><?php echo $value['district'];?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Father Father Native Place </label>
                     <input type="text" class="form-control" name="fathers-father-native-place" id="fathers-father-native-place"  value="<?php echo $parents_info['fathers_father_native_place'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Name </label>
                     <input type="text" class="form-control" name="mother-name" id="mother-name" value="<?php echo $parents_info['mother_name'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Education </label>
                     <input type="text" class="form-control" name="mother-education" id="mother-education"  value="<?php echo $parents_info['mother_education'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Profession </label>
                     <input type="text" class="form-control"  name="mother-profession" id="mother-profession"  value="<?php echo $parents_info['mother_profession'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Email </label>
                     <input type="email" class="form-control" name="mother-email" id="mother-email"  value="<?php echo $parents_info['mother_email'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Mobile </label>
                     <input type="phone" class="form-control" name="mother-mobile" id="mother-mobile" value="<?php echo $parents_info['mother_mobile'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Father Name </label>
                     <input type="text" class="form-control" name="mothers-father-name" id="mothers-father-name"  value="<?php echo $parents_info['mothers_father_name'];?>">
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="country">Mother Father State </label>
                     <select class="form-control" id="mothers-father-state" onchange="getdistricts(this.value)" name="mothers-father-state">
                        <option value="">Select State</option>
                        <?php foreach($states as $value) { ?>
                        <option <?php if($parents_info['mothers_father_state']==$value['state']) { ?> selected <?php } ?> value="<?php echo $value['state'];?>"><?php echo $value['state'];?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="country">Mother Father District </label>
                     <select class="form-control" id="mothers-father-district" name="mothers-father-district">
                        <option value="">Select State</option>
                        <?php foreach($districts as $value) { ?>
                        <option <?php if($parents_info['mothers_father_district']==$value['district']) { ?> selected <?php } ?> value="<?php echo $value['district'];?>"><?php echo $value['district'];?></option>
                        <?php } ?>
                     </select>
                  </div>
                  <div class="col-xs-12 col-md-6">
                     <label for="name">Mother Father Native Place </label>
                     <input type="text" class="form-control" name="mothers-father-native-place" id="mothers-father-native-place" value="<?php echo $parents_info['mothers_father_native_place'];?>">
                  </div>
               </div>
			   <div class="col-xs-12"> &nbsp;</div>
               <div class="submit-form text-center col-xs-12">
                  <input type="submit" value="Update Parents Details" class="submit btn btn-primary m-0" name="submit" id="submit">
               </div>
         </div>
         </form>
         <script>
            function getdistricts(value){
                $.ajax({ 
              type: "POST", 
              url: '<?php echo site_url();?>dashboard/getdistricts',
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
              url: '<?php echo site_url();?>dashboard/getdistricts',
              data: "value="+value,
              complete: function(data){  
              var op = data.responseText.trim();
              $("#fathers-father-district").html(op);
              }
             });
                
            }
         </script>
      </div>
	  </div>
   </div>
</div>
</div>
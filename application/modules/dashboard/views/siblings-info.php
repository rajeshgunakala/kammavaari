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
                  <i class="fa fa-users" aria-hidden="true"></i> Siblings Details
               </h1>
            
            <?php if(isset($msg)){ ?>
            <div class="alert alert-success alert-dismissible">
               <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
               <strong><?php echo $msg ?></strong> 
            </div>
            <?php }?>
            <div class="col-md-12 col-xs-12 profile-details">
               <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>dashboard/siblingsinfo">
                     <div class="col-xs-12 col-md-6">
                        <label for="country">Number Of Brothers</label>
                        <select class="form-control"name="no-of-brothers" onchange="getbrothers(this.value)">
                           <option>Select Brothers</option>
                           <option <?php if($siblings_info['no_of_brothers'] == 0) { ?> selected <?php } ?> value="0">0</option>
                           <option <?php if($siblings_info['no_of_brothers'] == 1) { ?> selected <?php } ?> value="1">1</option>
                           <option <?php if($siblings_info['no_of_brothers'] == 2) { ?> selected <?php } ?> value="2">2</option>
                           <option <?php if($siblings_info['no_of_brothers'] == 3) { ?> selected <?php } ?> value="3">3</option>
                        </select>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <label for="country">Number Of Sisters</label>
                        <select class="form-control"name="no-of-sisters" onchange="getsisters(this.value)">
                           <option>Select Sisters</option>
                           <option <?php if($siblings_info['no_of_sisters'] == 0) { ?> selected <?php } ?> value="0">0</option>
                           <option <?php if($siblings_info['no_of_sisters'] == 1) { ?> selected <?php } ?> value="1">1</option>
                           <option <?php if($siblings_info['no_of_sisters'] == 2) { ?> selected <?php } ?> value="2">2</option>
                           <option <?php if($siblings_info['no_of_sisters'] == 3) { ?> selected <?php } ?> value="3">3</option>
                        </select>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <label for="country">Number Of Elder Brothers </label>
                        <select class="form-control"id="no-of-elder-brothers" name="no-of-elder-brothers">
                           <option value="">Select</option>
                           <option <?php if($siblings_info['no_of_elder_brothers'] == 0) { ?> selected <?php } ?> value="0">0</option>
                           <option <?php if($siblings_info['no_of_elder_brothers'] == 1) { ?> selected <?php } ?> value="1">1</option>
                           <option <?php if($siblings_info['no_of_elder_brothers'] == 2) { ?> selected <?php } ?> value="2">2</option>
                           <option <?php if($siblings_info['no_of_elder_brothers'] == 3) { ?> selected <?php } ?> value="3">3</option>
                        </select>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <label for="country">Number Of Younger Brothers </label>
                        <select class="form-control"id="no-of-younger-brothers" name="no-of-younger-brothers">
                           <option <?php if($siblings_info['no_of_younger_brothers'] == 0) { ?> selected <?php } ?> value="0">0</option>
                           <option <?php if($siblings_info['no_of_younger_brothers'] == 1) { ?> selected <?php } ?> value="1">1</option>
                           <option <?php if($siblings_info['no_of_younger_brothers'] == 2) { ?> selected <?php } ?> value="2">2</option>
                           <option <?php if($siblings_info['no_of_younger_brothers'] == 3) { ?> selected <?php } ?> value="3">3</option>
                        </select>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <label for="country">Number Of Elder Sisters</label>
                        <select class="form-control"id="no-of-elder-sisters" name="no-of-elder-sisters">
                           <option <?php if($siblings_info['no_of_elder_sisters'] == 0) { ?> selected <?php } ?> value="0">0</option>
                           <option <?php if($siblings_info['no_of_elder_sisters'] == 1) { ?> selected <?php } ?> value="1">1</option>
                           <option <?php if($siblings_info['no_of_elder_sisters'] == 2) { ?> selected <?php } ?> value="2">2</option>
                           <option <?php if($siblings_info['no_of_elder_sisters'] == 3) { ?> selected <?php } ?> value="3">3</option>
                        </select>
                     </div>
                     <div class="col-xs-12 col-md-6">
                        <label for="country">Number Of Younger Sisters</label>
                        <select class="form-control"id="no-of-younger-sisters" name="no-of-younger-sisters">
                           <option <?php if($siblings_info['no_of_younger_sisters'] == 0) { ?> selected <?php } ?> value="0">0</option>
                           <option <?php if($siblings_info['no_of_younger_sisters'] == 1) { ?> selected <?php } ?> value="1">1</option>
                           <option <?php if($siblings_info['no_of_younger_sisters'] == 2) { ?> selected <?php } ?> value="2">2</option>
                           <option <?php if($siblings_info['no_of_younger_sisters'] == 3) { ?> selected <?php } ?> value="3">3</option>
                        </select>
                     </div>
                 
				   <div class="col-xs-12"> &nbsp;</div>
                  <div class="submit-form col-xs-12 text-center">
                     <input type="submit" value="Update Sibling Details" class="submit btn btn-primary m-0" name="submit" id="submit">
                  </div>
				  </form>	
            </div>
            </div>
         </div>
      </div>
   </div>
</div>
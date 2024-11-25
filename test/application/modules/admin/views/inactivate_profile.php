<div class="new-side-content">   
<div class="row top20">
   <div class="col-md-12">
      <div class="card">
         <div class="card-header">
            <h1 style="color: #07A0C3">Inactive Profile</h1>
         </div>
         <div class="card-body">
			
			
               <form method="POST" action="<?php echo site_url(); ?>admin/admin_ap/profileInactive" onsubmit="return validation_outside()">
			   <div class="form-group" style="background-color:white;width: 100%; text-align:center; color:green; padding-left: 20px;font-weight: 700;">              
                   <?php echo $this->session->flashdata('profile_message') ? $this->session->flashdata('profile_message') : ""; ?>
              </div> 
                  <div class="form-group row">
                     <label class="col-form-label col-md-2 offset-md-1 h5" style="color: #07A0C3">Profile ID</label>
                     <div class="col-md-3" style="height: 40px;">
                        <input type="text" name="pf_id" id="pf_id" class="form-control" style="border-color: #07A0C3">
                        <span id="profile_id" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                     </div>
                     <label class="col-form-label col-md-2 h5" style="color: #07A0C3">
                     Activate After (in Days)
                     </label>    
                     <div class="col-md-3" style="height: 40px;">
                        <input type="number"  name="activate_after" id="activate_after" class="form-control" style="border-color: #07A0C3">
                        <span id="activate_after_msg" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                     </div>
                  </div>
                  <br>
                  <div class="form-group row">
                     <label class="col-form-label col-md-2 offset-md-1 h5" style="color: #07A0C3">
                     Remind Before (in Days)
                     </label>
                     <div class="col-md-3" style="height: 40px;">
                        <input type="number" name="remind_before" id="remind_before" class="form-control" style="border-color: #07A0C3">
                        <span id="remind_before_msg" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                     </div>
                  </div>
                  <br>
                  <div class="form-group row">
                     <label class="col-form-label col-md-2 offset-md-1 h5" style="color: #07A0C3">
                        Reason
                     </label>
                     <div class="col-md-8" style="height: 70px;">
                        <textarea name="reason" id="reason" class="form-control" placeholder="Enter reason here.." style="border-color: #07A0C3"></textarea>
                        <span id="reason_msg" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                     </div>
                  </div>
                  
                  <br>
                  <div class="form-group row">
				  <div class="col-md-3">&nbsp;</div>
					 <div class="col-md-9">
                     <input type="submit" class="btn " value="Submit" name="submit" id="submit" style="border-color: #07A0C3; color: #07A0C3;">
						&nbsp;
                     <button  type="Reset" class="btn " name="reset" id="Reset" style="background-color: #07A0C3; color: white">Reset</button>
					 </div>
                  </div>
               </form>
         </div>
      </div>
   </div>
</div></div>
<script type="text/javascript">
   function validation_outside()
   {
      var pf_id = document.getElementById('pf_id').value;           
      if(pf_id == ""){
		  document.getElementById('profile_id').innerHTML = "Please enter Profile ID!";
		  document.getElementById('pf_id').focus();
		  return false;    
	  } else {
		   document.getElementById('profile_id').innerHTML = " ";
	  }
	  var activate_after = document.getElementById('activate_after').value;           
      if(activate_after == ""){
		  document.getElementById('activate_after_msg').innerHTML = "Please enter activate after in days (Only numbers allowed)";
		  document.getElementById('activate_after').focus();
		  return false;    
	  } else {
		   document.getElementById('activate_after_msg').innerHTML = " ";
	  }
	  
	  var remind_before = document.getElementById('remind_before').value;           
      if(remind_before == ""){
		  document.getElementById('remind_before_msg').innerHTML = "Please enter activate after in days (Only numbers allowed)";
		  document.getElementById('remind_before').focus();
		  return false;    
	  } else {
		   document.getElementById('remind_before_msg').innerHTML = " ";
	  }
   
       var reason = document.getElementById('reason').value;           
       if(reason == "") {
		  document.getElementById('reason_msg').innerHTML = "Please enter reason for inactive";
		  document.getElementById('reason').focus();
		  return false;    
		  }	else {
			   document.getElementById('reason_msg').innerHTML = " ";
		  }  
   
       }   
</script>
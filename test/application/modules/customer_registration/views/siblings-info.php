<section class="form-section">
   <div class="container">
      <div class="col-md-12">
            <div class="general-form">
               <h2><i class="fa fa-users" aria-hidden="true"></i>Siblings Details</h2>
              <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/siblings" onsubmit="return validation()">
                     <div class="col-md-6">
                        <label for="country">Number Of Brothers</label>
                        <select class="form-control" id="no-of-brothers" name="no-of-brothers" onchange="getbrothers(this.value)">
                           <option selected>Select Brothers</option>
                            <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                         <span id="no-of-brotherss" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Number Of Sisters</label>
                        <select class="form-control" id="no-of-sisters" name="no-of-sisters" onchange="getsisters(this.value)">
                           <option selected>Select Sisters</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                         <span id="no-of-sisterss" class="text-danger font-weight-bold"></span>
                     </div>
                     <div id="appdate" style="display:none;">
                     <div class="col-md-6">
                        <label for="country">Number Of Elder Brothers</label>
                        <select class="form-control" id="no-of-elder-brothers" name="no-of-elder-brothers">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Number Of Younger Brothers</label>
                        <select class="form-control" id="no-of-younger-brothers" name="no-of-younger-brothers">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                     </div>
                     </div>
                     <div id="appdatesisters" style="display:none;">
                     <div class="col-md-6">
                        <label for="country">Number Of Elder Sisters</label>
                        <select class="form-control" id="no-of-elder-sisters" name="no-of-elder-sisters">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="0">3</option>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Number Of Younger Sisters</label>
                        <select class="form-control" id="no-of-younger-sisters" name="no-of-younger-sisters">
                           <option value="">Select</option>
                           <option value="0">0</option>
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                        </select>
                     </div>
                     </div>
                  <div class="col-xs-12">
                     <div class="submit-form">
                        <input type="submit" value="Complete Registration" class="submit btn btn-primary" name="submit" id="submit">
                     </div>
                  </div>
               </form>
            </div>
      </div>
   </div>
</section>
<script type="text/javascript">
        //programmer defined functions
		function getbrothers(valu)
		{
		   if((valu > 0))
    		{
    			$('#appdate').show(1000);
    		}
    		else
    		{
    			$('#appdate').hide(1000);
    		}
		}
		function getsisters(valu)
		{
		   if((valu > 0))
    		{
    			$('#appdatesisters').show(1000);
    		}
    		else
    		{
    			$('#appdatesisters').hide(1000);
    		}
		}
		
</script>
<script type="text/javascript">
    function validation()
    {
       var noofbrothers = document.getElementById('no-of-brothers').value;
       var noofsisters = document.getElementById('no-of-sisters').value;
      
        if(noofbrothers == "Select Brothers")
       {
           document.getElementById('no-of-brotherss').innerHTML = "Please select no of brothers ";
           document.getElementById('no-of-brothers').focus();
           return false;
       }else {
            document.getElementById('no-of-brotherss').innerHTML = " ";
       }
       
        if(noofsisters == "Select Sisters")
       {
           document.getElementById('no-of-sisterss').innerHTML = "Please select no of sisters";
            document.getElementById('no-of-sisters').focus();
           return false;
       }else {
            document.getElementById('no-of-sisterss').innerHTML = " ";
       }
    }
</script>
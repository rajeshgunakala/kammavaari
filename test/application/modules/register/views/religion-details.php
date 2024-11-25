<section>
   <div class="container">
      <div class="col-md-12">
         <div class="row">
            <div class="general-form">
               <h2> Religion Details</h2>
                 <form method="POST" class="register-form" id="register-form" action="<?php echo site_url();?>register/religion" onsubmit="return validation()">
                  <div class="form-row">
                     <div class="col-md-6">
                        <label for="country">Marital Status <span style="color:red;">*</span></label>
                        <select class="form-control" id="marital_status" name="marital_status">
                             <option selected="selected">Select Marital Status</option>
                           <option value="never_married">Never Married</option>
                           <option value="divorced">Divorced</option>
                           <option value="widow-widower">Widow / Widower</option>
                           <option value="separated">Separated</option>
                           <option value="annulled">Annulled</option>
                        </select>
                         <span id="marital_statuss" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="height">Height <span style="color:red;">*</span></label>
                        <select class="form-control" id="height" name="height" aria-invalid="false">
                           <option selected="selected">Select Height</option>
                           <?php foreach($heights as $value) { ?>
                           <option value="<?php echo stripcslashes($value['height']);?>"><?php echo stripcslashes($value['height']);?></option><?php } ?>
                        </select>
                         <span id="heights" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Religion <span style="color:red;">*</span></label>
                        <select class="form-control" id="religion" name="religion">
                            <option selected="selected">Select Religion</option>
                           <?php foreach($religions as $value) { ?>
                           <option value="<?php echo $value['religion'];?>"><?php echo $value['religion'];?></option><?php } ?>
                        </select>
                         <span id="religions" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="country">Mother Tongue <span style="color:red;">*</span></label>
                        <select class="form-control" id="mothertounge" name="mothertounge">
                           <option selected="selected">Select Mother Tongue</option>
                           <?php foreach($mother_tounges as $value) { ?>
                           <option value="<?php echo $value['mothertounge'];?>"><?php echo $value['mothertounge'];?></option><?php } ?>
                        </select>
                       <span id="mothertounges" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6">
                        <label for="casteName">Caste <span style="color:red;">*</span></label>
                        <select class="form-control" id="caste" name="caste" onchange="getsubcaste(this.value)">
                            <!--<option selected="selected">Select Caste</option>--><?php foreach($castes as $value) { if($value['caste']=='Kamma'){?>
                           <option value="<?php echo $value['caste'];?>"><?php echo $value['caste'];?></option><?php } } ?>
                        </select>
                         <span id="castes" class="text-danger font-weight-bold"></span>
                     </div>
                     <div class="col-md-6 hide">
                        <label for="casteName">Sub Subcaste :</label>
                        <select class="form-control" id="subcaste" name="subcaste">
                            <option value="">Select Subcaste</option>
                        </select>
                       
                     </div>
                     <div class="col-md-6">
                        <label for="gothram">Gothram :</label>
                        <input type="text" name="gothram" id="gothram" class="form-control"/>
                     </div>
                     
                     
                     
                     <div class="col-md-6">
                        <label for="place">Place Of Birth :</label>
                        <input type="place" name="place" id="place" class="form-control" />
                     </div>
                     <div class="col-md-6">
                        <label for="last_name">Time of Birth :</label>
                        <div class="input-group time" id="timepicker"><input class="form-control" name="time"/><span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <label id="label_maternalGothramName" for="maternalGothramName">Raasi :</label>
                        <select class="form-control" id="raasi" name="raasi">
                           <option value="">Select Raasi</option>
                           <?php foreach($zodic_signs as $value) { ?>
                           <option value="<?php echo $value['zodic'];?>"><?php echo $value['zodic'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label id="label_starId" for="starId">Star</label>
                        <select class="form-control" id="star" name="star">
                           <option value="">Select Star</option>
                           <?php foreach($stars as $value) { ?>
                           <option value="<?php echo $value['star'];?>"><?php echo $value['star'];?></option><?php } ?>
                        </select>
                     </div>
                     <div class="col-md-6">
                        <label for="paadam">Padam :</label>
                        <select name="paadam" id="paadam" class="form-control">
                        <option value="">Select padam</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        </select>
                     </div>
                     
                     <div class="form-radio col-md-6">
                        <label for="gender" class="radio-label">Dosham :</label>
                        <div style="display:flex;width:100%;">
                           <div class="col-md-2 form-radio-item pr-10">
                              <input type="radio" name="dosham" id="no" value="no">
                              <label for="no">No</label>
                              <span class="check"></span>
                           </div>
                           <div class="col-md-2 form-radio-item">
                              <input type="radio" name="dosham" id="yes" value="yes">
                              <label for="yes">Yes</label>
                              <span class="check"></span>
                           </div>
                           <div class="col-md-5 form-radio-item">
                              <input type="radio" name="dosham" id="dont_know" value="dont_know">
                              <label for="dont_know">Don't Know</label>
                              <span class="check"></span>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                      <div class="submit-form">
                            <input type="submit" value="Submit Religion Details" class="btn btn-primary" name="submit" id="submit" />
                      </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
	<script src="<?php echo site_url();?>js/jquery.menu-aim.js"> </script>
	<script src="<?php echo site_url();?>js/main.js"></script> <!-- Resource jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
	<!-- //menu js aim -->		
<!-- Calendar -->
	<link rel="stylesheet" href="<?php echo site_url();?>css/jquery-ui.css" />
	<script src="<?php echo site_url();?>js/jquery-ui.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker();
		 });
		</script>
<!-- //Calendar -->	
	<!-- for bootstrap working -->
		<!--<script src="<?php echo site_url();?>js/bootstrap.js"></script>-->
<!-- //for bootstrap working -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- for smooth scrolling -->
	<script type="text/javascript" src="<?php echo site_url();?>js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo site_url();?>js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
	</script>
	<!-- //for smooth scrolling -->
	<script>if (/Mobi/.test(navigator.userAgent)) {
  // if mobile device, use native pickers
  $(".date-time input").attr("type", "datetime-local");
  $(".date input").attr("type", "date");
  $(".time input").attr("type", "time");
} else {
  // if desktop device, use DateTimePicker
  $("#datetimepicker").datetimepicker({
    icons: {
      time: "fa fa-clock-o",
      date: "fa fa-calendar",
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down",
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#datepicker").datetimepicker({
    useCurrent: false,
    format: "L",
    icons: {
      next: "fa fa-chevron-right",
      previous: "fa fa-chevron-left"
    }
  });
  $("#timepicker").datetimepicker({
    format: "LT",
    icons: {
      up: "fa fa-chevron-up",
      down: "fa fa-chevron-down"
    }
  });
}
</script>
  <script type="text/javascript">
        //programmer defined functions
		function getsubcaste(valu)
		{
			$.ajax({ 
			   type: "POST", 
			   url: '<?php echo site_url();?>register/getsubcastes',
			   data: "valu="+valu,
			   complete: function(data){  
				  var op = data.responseText.trim();
				  $("#subcaste").html(op);
			   }
		   });
		}
		</script>
		<script type="text/javascript">
    function validation()
    {
       var marital_status = document.getElementById('marital_status').value;
       var height = document.getElementById('height').value;
       var religion = document.getElementById('religion').value;
       var mothertounge = document.getElementById('mothertounge').value;
       var caste = document.getElementById('caste').value;
      
       if(marital_status == "Select Marital Status")
       {
           document.getElementById('marital_statuss').innerHTML = "Please select marital status";
           document.getElementById('marital_status').focus();
           return false;
       }else {
            document.getElementById('marital_statuss').innerHTML = " ";
       }
       if(height == "Select Height")
       {
           document.getElementById('heights').innerHTML = "Please select height";
           document.getElementById('height').focus();
           return false;
       }else {
            document.getElementById('heights').innerHTML = " ";
       }
        if(religion == "Select Religion")
       {
           document.getElementById('religions').innerHTML = "Please select religion";
           document.getElementById('religion').focus();
           return false;
       }else {
            document.getElementById('religions').innerHTML = " ";
       }
       if((mothertounge == "Select Mother Tongue"))
       {
           document.getElementById('mothertounges').innerHTML = "Please select mother tounge";
           document.getElementById('mothertounge').focus();
           return false;
       }else {
            document.getElementById('mothertounges').innerHTML = " ";
       }
      if((caste == "Select Caste"))
       {
           document.getElementById('castes').innerHTML = "Please select caste";
           document.getElementById('caste').focus();
           return false;
       }else {
            document.getElementById('castes').innerHTML = " ";
       }
    }
</script>
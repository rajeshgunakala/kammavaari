 <!--Footer-->
      <div class="footer">
         <section class="container generic-section">
            <div class="row-fluid">
               <div class="col-md-3 col-sm-6 col-xs-12 item right" style="right: 0px;">
                  <h3>About Us</h3>
                  <p><b>KammaVaari Matrimony</b> is a pioneer in matrimonial matchmaking services committed to provide good assisted Service to all prospective Telugu Kamma brides and Kamma grooms. Your search for the perfect life partner ends here.</p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 item right" style="right: 0px;">
                  <h3>QUICK LINKS</h3>
                  <p><a href="<?php echo site_url();?>aboutus">About Us</a></p>
                  <p><a href="<?php echo site_url();?>search">Search</a></p>
                  <p><a href="<?php echo site_url();?>contactus">Contact Us</a></p>
                  <p><a href="<?php echo site_url();?>faqs">FAQ</a></p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 item right" style="right: 0px;">
                  <h3>COMPANY</h3>
                  <p><a href="<?php echo site_url();?>terms">Terms of use</a></p>
                  <p><a href="<?php echo site_url();?>privacypolicy">Privacy Policy</a></p>
                  <p><a href="<?php echo site_url();?>feedback">Success Stories</a></p>
                  <p><a href="<?php echo site_url();?>contactus">Help</a></p>
               </div>
               <div class="col-md-3 col-sm-6 col-xs-12 item right" style="right: 0px;">
                  <h3>Stay in Touch!</h3>
                  <p>Follow US in our social networks!<br></p>
                  <ul class="social">
                     <li class="tooltip_hover" title="" data-original-title="Linkedin"><a href="#" class="in">Linked In</a></li>
                     <li class="tooltip_hover" title="" data-original-title="Youtube"><a href="#" class="youtube">Linked In</a></li>
                     <li class="tooltip_hover" title="" data-original-title="Facebook"><a href="#" class="facebook">Linked In</a></li>
                     <li class="tooltip_hover" title="" data-original-title="Twitter"><a href="#" class="twitter">Linked In</a></li>
                  </ul>
               </div>
            </div>
         </section>
      </div>
      <!-- End Footer -->  
      <!--Copyright-->
      <div class="copy">
         <section class="copyrights text-center">
            <p>Copyright © <?php echo date('Y');?>. All rights reserved. </p>
         </section>
      </div>
      <!--End Copyright-->

   <!-- jQuery  -->
        
        <script src="<?php echo base_url();?>assets/kamma/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/kamma/js/waves.js"></script>
        <script src="<?php echo base_url();?>assets/kamma/js/simplebar.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url();?>assets/kamma/js/theme.js"></script>
		 <!-- Validation custom js-->
         <script src="<?php echo base_url();?>assets/kamma/pages/validation-demo.js"></script>
		 <script src="<?php echo base_url();?>assets/kamma/js/validator.min.js"></script>
		 

<script type="text/javascript">

        $(document).ready(function() {
			
			 function profileview()
			 {
				 var ticket = "<?php echo $this->uri->segment(4) ?>";            
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/search/profileviewed",
            type: "POST",
            data: {
                ticket: ticket
            },
            success: function(res) {
              if(res)
              {
				//  $("#profileviewed").hide();
               
              }
            },
      }); 
			 }
             
			 <?php if($profileviewpage=='1'){?>
			  profileview();
			 
			 <?php } ?>
			function upgradeaccount()
			{
				
				alert('For upgrade your account please consult <?php echo $this->session->userdata('s_name');?> : <?php echo $this->session->userdata('s_mobile');?>.');
			}
			
			
			
			$('.searchmenu').click(function(){
			
			if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
				  return true;
			});
			
		$('.viewprofile').click(function(){
			
			if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
				  return true;
			});
				
		$('.partnersearchbtn').click(function(){
			
			if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
				 
				 return true;
			
			});
		
          
          $(".upgradePlan").on("click", function(){
            var price  = 0;
            var plan   = $(this).attr("data-plan");
            // var click  = $(this).attr("data-contacts");
            // var months = $(this).attr("data-months");
              if(plan == "Gold") {
                price  = 4500;
                click  = 35;
                months = 3;
              }
              else if(plan == "Diamond Plus") {
                 price  = 6000;
                 click  = 55;
                 months = 6;

              }
              else if(plan == "Platinum Plus") {
                 price  = 8000;
                 click  = 100;
                 months = 9;                
              }
                var options = {
                    "key": "rzp_live_kzPMQ5JtYBquRV",
                    "amount": (price * 100), // 2000 paise = INR 20
                    "currency": "INR",
                    "name": '<?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name')?>',
                    "description": plan+" Plan",
                    "image": "<?php echo base_url(); ?>/design/img/logo.png",
                    "handler": function (response){
                        if((typeof response.razorpay_payment_id == 'undefined') || response.razorpay_payment_id != 1)
                        {   var stat = "success"; 

                            $.ajax({
                              url: "<?php echo base_url('dashboard/my_account/updatepaymentinfo'); ?>",
                              type: "POST",
                              data: {'stat':stat, 'price':price, 'price':price, 'click':click, 'months':months},
                              success: function(data)
                              {
                                if(data == 1) {
                                  alert("Payment done successfully");
                                }
                                else {
                                  alert("payment failed");
                                }
                              },
                              beforeSend: function()
                              {
                                $(".upgradePlan").css("pointer-event", "none");
                              },
                              complete: function()
                              {
                                $(".upgradePlan").css("pointer-event", "none");
                              }         
                            });
                        }
                        else
                        { 
                          var stat = "failed";
                          alert("payment failed, please try again."); 
                        }
                        
                    },
                    "prefill": {
                        "name": '<?php echo $this->session->userdata('first_name')." ".$this->session->userdata('last_name')?>',
                        "email": "<?php echo $this->session->userdata('user_email')?>",
                        "contact": "<?php echo $this->session->userdata('mobile')?>"
                    },
                    /*"notes": {
                        "address": "note value"
                    },*/
                    "theme": {
                        "color": "#13baff"
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.open();
        });

      $('.colorChange').on('change', function(){
          var value = $(this).val();
          if(value !="")
          {
              $(this).css('border-color', 'blue');
          }
          else
          {
              $(this).css('border-color', '');
          }
      });

      $(document).on('change', 'div.ms-options-wrap', function(){
          var value = $(this).find('button').text();
          if(value !="Select options")
          {
              $(this).find('button').css('border-color', 'blue');
          }
          else
          {
              $(this).find('button').css('border-color', '');
          }
      });

      $('.colorChange').trigger("change");
      $('div.ms-options-wrap').trigger("change");
      
          $("#myNavbar2").hide();
          $(".navbar-toggle").on('click', function(){
            $("#myNavbar2").slideToggle();
          });
            
             $(".user-info").on('click',function(){
               $(".user-details").toggle();
            });
          
            $(".profile-view-close .close-btn").on('click',function(){
               window.close();
            });
            
            
            
             $(".view_update").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                   
                    $(this).next().find('i').removeClass("view_active");
                    $(this).next().next().find('i').removeClass("view_active");
                 
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           console.log(data);
                        if(data==0){
                              
                              $(this).find("i").addClass("view_active");
                              alert("You have viewed this profile");
                              
                          }
                          
                           $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        });
                 
             });
             
             
              $(".details").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                   
                    
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_profile_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           
                          if(data==0){
                          $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          }
                          
                        }
                        });
                 
             });
             
             
			
              $("#profileviewed").on("click", function(){
		
		if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
     profileview();
	  alert("Response saved successfully.");
    });
	
             $("#bookmark").on("click", function(){
		
		if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
      var ticket = "<?php echo $this->uri->segment(4) ?>";            
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/search/bookmark",
            type: "POST",
            data: {
                ticket: ticket
            },
            success: function(res) {
              if(res)
              {
				  $("#bookmark").hide();
                alert("Response saved successfully.");
              }
            },
      });
    });
	
    $("#interested").on("click", function(){
		if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
      var ticket = "<?php echo $this->uri->segment(4) ?>";            
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/search/setInterestedStatus",
            type: "POST",
            data: {
                ticket: ticket
            },
            success: function(res) {
              if(res)
              {
                alert("Response saved successfully.");
              }
            },
      });
    });

    $("#notinterested").on("click", function(){
		if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
      var ticket = "<?php echo $this->uri->segment(4) ?>";            
      $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/search/setNotInterestedStatus",
            type: "POST",
            data: {
                ticket: ticket
            },
            success: function(res) {
              if(res)
              {
                alert("Response saved successfully.");
              }
            },
      });
    });
	
	
    $(".shortlist_update").on('click',function(){
        if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
        {
        upgradeaccount();
        return false;
        }
        var to_user_id=$(this).attr("data-id");
        $(this).next().find('i').removeClass("view_active");
        $(this).prev().find('i').removeClass("view_active");
    
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/shortlist_update",
            data: {'to_user_id':to_user_id},
            context:this,
            success:
            function(data){
                if(data==0){
                alert("You shortlisted this profile");
                $(this).find("i").addClass("view_active");
                }
                $("#ignored").load(location.href + " #ignored");
                $("#short_listed").load(location.href + " #short_listed");
                $("#recent_views").load(location.href + " #recent_views");
            }
        });
    
    });
             
    $(".ignore_update").on('click',function(){
        if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
        {
            upgradeaccount();
            return false;
        }
        var to_user_id=$(this).attr("data-id");
        $(this).prev().find('i').removeClass("view_active");
        $(this).prev().prev().find('i').removeClass("view_active");
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/ignore_update",
            data: {'to_user_id':to_user_id},
            context:this,
            success:
            function(data){
                if(data==0){
                alert("You ignored this profile");
                $(this).find("i").addClass("view_active");
                }
                $("#ignored").load(location.href + " #ignored");
                $("#short_listed").load(location.href + " #short_listed");
                $("#recent_views").load(location.href + " #recent_views");
            }
        });
    
    });
             
    $(".notinterest_now").on('click',function(){
        var to_user_id=$(this).attr("data-id");
        $(this).parent().prev().find("i").addClass("view_active");
        $(this).parent().parent().prev().find("i").removeClass("view_active");
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/notinerest_update",
            data: {'to_user_id':to_user_id},
            success:function(data){
                alert("You Added to not interested Profile");
                //  $("#contact_list").load(location.href + " #contact_list");
                // $("#ignored").load(location.href + " #ignored");
                //  $("#short_listed").load(location.href + " #short_listed");
                //  $("#recent_views").load(location.href + " #recent_views");
            }
            
        });
    });
			 
    $(".contact_now").on('click',function(){
        var to_user_id=$(this).attr("data-id");
        $(this).addClass("view_active_background");
        $(".view_update").find("i").removeClass("view_active");
        $(".shortlist_update").find("i").removeClass("view_active");
        $(".ignore_update").find("i").removeClass("view_active");
        $(this).parent().parent().prev().find("i").removeClass("view_active");
            $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/contact_update",
            data: {'to_user_id':to_user_id},
            success:
            function(data){
                alert("You Interested On This Profile");
                $("#contact_list").load(location.href + " #contact_list");
                $("#ignored").load(location.href + " #ignored");
                $("#short_listed").load(location.href + " #short_listed");
                $("#recent_views").load(location.href + " #recent_views");
              
            }
        });
    });
             
    $(".update-contact-now").on('click',function(){
        upgradeaccount();   
    });
             
    $('.dropdown-menu li a').click(function(e){
        e.stopPropagation()
    });
             
    // payment upgrade
    // $(".plan-one").on('click',function(e){
    //        e.preventDefault();
    //        alert("Please Contact Our Relationship Manager ");
    //    });    


    $('.all-images img, a.viewall').on('click', function() {
        $('.sliderPop').show();
        $('.ct-sliderPop-container').addClass('open');
        $('.sliderPop').addClass('flexslider');
        $('.sliderPop .ct-sliderPop-container').addClass('slides');
        
        $('.sliderPop').flexslider({
            selector: '.ct-sliderPop-container > .ct-sliderPop',
            slideshow: false,
            controlNav: false,
            controlsContainer: '.ct-sliderPop-container'
        });
    });

    $('.ct-sliderPop-close').on('click', function() {
        $('.sliderPop').hide();
        $('.ct-sliderPop-container').removeClass('open');
        $('.sliderPop').removeClass('flexslider');
        $('.sliderPop .ct-sliderPop-container').removeClass('slides');
    });


    var width = $(window).width();
    if(width<1000){
        $(".header_login .btn-login").removeClass('show');
    }
            
    $('.delete_image').on('click', function() {
        var rec_id=$(this).attr("data-id");
        var confirm_status = confirm("Are you sure?");
        if(confirm_status){
            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>dashboard/delete_image",
                data: {'rec_id':rec_id},
                dataType:"text",
                success:
                function(data){
                    alert("Photo deleted successfully");
                    window.location.reload();
                }
            });
        }
    });
                
           
            
    $('.set_profile').on('click', function() {
        var rec_id=$(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/set_profile_pic",
            data: {'rec_id':rec_id},
            success:
            function(data){
                 alert("Profile Pic Updated Successfully");
                 window.location.reload();
            }
        });
    });

    $("#resetpass").on('click', function() {
        var email =  $('#email').val();
        if(email != "")
        {
          $.ajax({
              type: "POST",
              url: "<?php echo base_url('login/email'); ?>",
              data: "email="+email,
              cache: false,
              success: function(data) {
                  if(data==1){
                    alert("Your login information has been sent on your email account.");
                    // $("#resetpass").on("click", function(){
                        window.location.href = "<?php echo base_url('login'); ?>";
                    // });
                  }
                  else{
                   alert("This email does not exist.");
                  }                    
              }
          }); 
        }
        else
        {
          alert('Please enter mail id.');
        }
    });
            
});
$('#home_login').on('click',function(){
    if($.trim($('input[name="email"]').val()) == '')
    {
       $('input[name="email"]').val('');
       $('input[name="email"]').focus();
       return false;
    }
    if($.trim($('input[name="password"]').val()) == '')
    {
        $('input[name="password"]').val('');
       $('input[name="password"]').focus();
       return false;
    }
});
        
$('.homepagesearch').click(function(){
	$('#homepagesearch').submit();
});
</script>
  <style>
    .footer .row-fluid{
      display: flex;
      flex-wrap: wrap;
    }
  </style>
</body>
</html>
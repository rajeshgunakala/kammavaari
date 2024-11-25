<script src="<?php echo site_url();?>js/admin/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo site_url();?>js/admin/popper.min.js"></script>
<script src="<?php echo site_url();?>js/admin/bootstrap.min.js"></script>


<!-- ======================= JQuery libs =========================== -->
<!--<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery-1.8.2.min.js"></script>-->
<script type="text/javascript" src="<?php echo site_url(); ?>assets/js/jquery-1.12.3.js"></script>

<script src="<?php echo site_url(); ?>design/js/bootstrap.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/bootstrap-select.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/modernizr.custom.26633.js"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery.gridrotator.js"></script>


<script type="text/javascript" src="<?php echo site_url(); ?>design/js/responsiveslides.min.js"></script>

<script src="<?php echo site_url(); ?>design/js/jquery.fitvids.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/easing.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/jquery.ui.totop.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/waypoints.min.js"></script>


<!-- <script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery-func.js"></script> -->


<!-- pop image gallery  -->
<script src="<?php echo site_url();?>js/admin/jquery.flexslider-min.js"></script>

<!-- date picker jquery start -->
<script src="<?php echo site_url();?>js/admin/jquery-ui.js"></script>
<link rel="stylesheet" href="<?php echo site_url();?>css/admin/css/jquery-ui.css">
<!-- date picker jquery end -->
<script src="<?php echo site_url() ?>assets/js/jquery.exzoom.js"></script>
<link href="<?php echo site_url() ?>assets/css/jquery.exzoom.css" rel="stylesheet" type="text/css"/>
<!-- ======================= End JQuery libs ======================= -->
<script type="text/javascript">
function profile_images_popup_close() {
	$("#profile_images_popup").hide();
}
$(document).ready(function() {
  checkForNewMessages();
	 $("#exzoom").exzoom({
        autoPlay: false,
    });

	$('.btnmarketingticket').on('click',function(){
				
				var $this=$(this);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/marketingticketshistory",
                              type: "POST",
                              data: {'uid':$this.attr('rel1')},
                              success: function(data)
                              {
								$('.mtickethistory').html(data);
							  }
                                    
                            });
							
				});
	
	$('.tickethistory').on('click',function(){
				var $this=$(this);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/getrmticketnotes",
                              type: "POST",
                              data: {'intid':$('.txt_intid').val(),'rmid':$this.attr('id'), 'uid':$this.attr('rel1')},
                              success: function(data)
                              {
								$('.tickethistorynotes').html(data);
							  }
                                    
                            });
				});
				
                $('.all-images img').on('click', function() {
						$("#exzoom").removeClass('hidden');
						$("#profile_images_popup").show();	
                        /*$('.sliderPop').show();
                        $('.ct-sliderPop-container').addClass('open');
                        $('.sliderPop').addClass('flexslider');
                        $('.sliderPop .ct-sliderPop-container').addClass('slides');

                        $('.sliderPop').flexslider({
                                selector: '.ct-sliderPop-container > .ct-sliderPop',
                                slideshow: false,
                                controlNav: false,
                                controlsContainer: '.ct-sliderPop-container'
                        });*/
                });

                $('.ct-sliderPop-close').on('click', function() {
                        $('.sliderPop').hide();
                        $('.ct-sliderPop-container').removeClass('open');
                        $('.sliderPop').removeClass('flexslider');
                        $('.sliderPop .ct-sliderPop-container').removeClass('slides');
                });


                $("#dor_from").datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'yy-mm-dd'
                });

                $("#dor_to").datepicker({
                        showOtherMonths: true,
                        selectOtherMonths: true,
                        dateFormat: 'yy-mm-dd'
                });

                $(".whatsapp_icon").on('click', function() {
                        var id =$(this).attr('id');
                        // alert(id);
                        $('.sliderPop_'+id).show();
                        $('.ct-sliderPop-container').addClass('open');
                        $('.sliderPop_'+id).addClass('flexslider');
                        $('.sliderPop_'+id+' .ct-sliderPop-container').addClass('slides');
                        $('.sliderPop_'+id).flexslider({
                                selector: '.ct-sliderPop-container > .ct-sliderPop',
                                slideshow: false,
                                controlNav: false,
                                controlsContainer: '.ct-sliderPop-container'
                        });
                });
                $('.close_info').on('click', function() {
                        var id = $(this).attr('id');
                        // alert(id);
                        //subpop_close_wicon_984
                        var fid= id.substring(10, id.length);
                        // alert(fid);
                        $('.sliderPop_'+fid).hide();
                        $('.ct-sliderPop-container').removeClass('open');
                        $('.sliderPop_'+fid).removeClass('flexslider');
                        $('.sliderPop_'+fid + ' .ct-sliderPop-container').removeClass('slides');
                });

        });
		
		$('body').on('click','.addstaffadmin',function(){
			
			 if($('.txt_email_a').val() == '' || !$('.txt_email_a').val().match(/^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i))
		   {
			   $('.txt_email_a').focus();
			   alert('Please provide valid Email');
			   return false;
		   }
		   
		   if($('.txt_phone_a').val().length <10 ||$('.txt_phone_a').val().length >10 ||  isNaN($('.txt_phone_a').val()))
			 {
    	alert('Please enter Mobile number. It should contain 10 digits');
		 return false;
			 }
			 
			 if($.trim($('.txt_username_a').val()) == '')
			 {
				 
				 alert('Please provide valid UserName');
				 return false;
			 }
			 
			 if($('.txt_password_a').val().length <5 || $.trim($('.txt_password_a').val()) == '')
			 {
     alert('Please provide valid Password');
		 return false;
			 }
			 
			
			 
			var $this=$(this);
      var formData = new FormData($('.addnewstaffadmin')[0]);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/addstaffadmin",
                              type: "POST",
                              data: formData,
                              contentType: false,
                               processData: false,
                              success: function(res)
                              {
								  //alert(res);
								if(res==0)
								{
									alert('RM/Admin Name already existed. Please provide new one');
									return false;
								}
								
								if(res==1)
								{
									alert('RM/Admin details successfully created');
									location.reload();
									return false;
								}
							  }
                                    
                            });
							
			});
			
			
		$('body').on('click','.staffupdate',function(){
			
			var $this=$(this);
      var formData = new FormData($('.staffupdate' + $this.attr('id'))[0]);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/staffupdate",
                              type: "POST",
                              data: formData,
                              contentType: false,
                              processData: false,
                              success: function(res)
                              {
								  //alert(res);
								if(res==0)
								{
									alert('RM/Admin Name already existed. Please provide new one');
									return false;
								}
								
								if(res==1)
								{
									alert('RM/Admin details successfully updated');
									location.reload();
									return false;
								}
							  }
                                    
                            });
							
			});
			
		$('body').on('click','.deletestaff', function(){
			
			if (confirm('Would you like to delete?')) {
				
				var $this=$(this);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/staffdelete",
                              type: "POST",
                              data: {'txt_sid':$this.attr('id')},
                              success: function(res)
                              {
								  alert('RM/Admin details successfully deleted');
								 location.reload();
								 
							  }
                                    
                            });
				} 
			});	
		$('body').on('click','.fadeoutclass', function(){$('.fade').removeClass('modal-backdrop');});
		
		 $('.deletephoto').click(function(){
			 
			  var $this=$(this);  
			  
			 if (confirm('Would you like to delete?')) {
				 $('.'+$this.attr('id')).hide();

				 $.ajax({
                              url: "<?php echo base_url();?>admin/admin_photosdelete",
                              type: "POST",
                              data:  {photoid:$this.attr('id')} ,
                              success: function(res)
                              {
								
								
								 
							  }
                                    
                            });
 
  }  


		  
		  });
		  
		  
		$('.submittemplate').on('click',function(){
			
			//alert('Hi....');
			for ( instance in CKEDITOR.instances )
    CKEDITOR.instances[instance].updateElement();
			$.ajax({
                              url: "<?php echo base_url();?>admin/submitemailtemplate",
                              type: "POST",
                              data: $('#emailtemplateform').serialize(),
                              success: function(data)
                              {
								alert('Email Template successfully updated.');  
								 location.reload(); 
								 
							  }
                                    
                            });
							
							return false;
			
			});
			
	
	$('.deletepayment').click(function(){
		
		if (confirm('Would you like to delete?')) {
				
				var $this=$(this);
		$.ajax({
                              url: "<?php echo base_url();?>admin/deletepayment",
                              type: "POST",
                              data: {'pid':$this.attr('id')},
                              success: function(data)
                              {
								  
								 $('.d'+$this.attr('id')).css('display','none'); 
									alert('Payment details deleted successfully.');  
									location.reload(); 
								 
							  }
                                    
                            });
		}
							
		});
		
		$('.updatepayment').click(function(){
		
		if (confirm('Would you like to Update?')) {
				
				var $this=$(this);
		            $.ajax({
                              url: "<?php echo base_url();?>admin/Updatepayment",
                              type: "POST",
                              data: {'pid':$this.attr('id')},
                              success: function(data)
                              {
								  
								
									alert('Payment details Update successfully.');  
									location.reload(); 
								 
							  }
                                    
                            });
		}
							
		});
			
</script>

<audio id="myAudio">
  <source src="<?php  echo base_url()?>/assets/sounds/new_message.mp3" type="audio/ogg">
  <source src="<?php  echo base_url()?>/assets/sounds/new_message.mp3" type="audio/mpeg">
</audio>

<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_marketingtickethistory">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b class="fs20">Marketing Ticket History</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body mtickethistory">
        <p></p>
      </div>
      <div class="modal-footer"> 
        <!--button type="button" class="btn btn-primary">Save changes</button-->
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_tickethistory">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b class="fs20">Ticket History</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body tickethistorynotes">
        <p></p>
      </div>
      <div class="modal-footer"> 
        <!--button type="button" class="btn btn-primary">Save changes</button-->
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- <button onclick="playAudio()" type="button" id="playbutton">Play Audio</button> -->
<script>
  function checkForNewMessages() {
    $.ajax({
        url: '<?php echo site_url('admin/Chat_users/check_new_message/'); ?>',
        type: 'GET',
        success: function(response) {
            if (response.newMessages) {
              button.click();
                console.log("New messages found");
            }
        }
    });
}
var x = document.getElementById("myAudio"); 
let button =document.getElementById("playbutton");

function playAudio() { 
  if(x){
    x.play(); 
  }
} 

function pauseAudio() { 
  x.pause(); 
} 


</script>

</body>

</html>
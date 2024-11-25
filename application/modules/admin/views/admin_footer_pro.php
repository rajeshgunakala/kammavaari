
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<style>

    .styleClose{
    text-wrap: nowrap;
    align-items: baseline;
    }

</style>



<!-- ======================= JQuery libs =========================== -->
        <!-- <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-1.8.2.min.js"></script>         -->
        <!-- Bootstrap.js-->
        <script src="<?php echo site_url();?>design/js/bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo site_url();?>design/js/bootstrap-select.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo site_url();?>design/js/modernizr.custom.26633.js"></script>
        <!-- Gallery -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery.gridrotator.js"></script>        
        <!-- Slider -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/responsiveslides.min.js"></script>        
        <!-- Controls styles -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery.jstyling.min.js"></script>        
        <!-- Video Responsive-->
        <script src="<?php echo site_url();?>design/js/jquery.fitvids.min.js" type="text/javascript"></script>        
        <!-- Easing plugin ( optional ) -->
        <script src="<?php echo site_url();?>design/js/easing.js" type="text/javascript"></script>        
        <!-- UItoTop plugin -->
        <script src="<?php echo site_url();?>design/js/jquery.ui.totop.min.js" type="text/javascript"></script>        
        <!--  Waypoints --> 
        <script type="text/javascript" src="<?php echo site_url();?>design/js/waypoints.min.js"></script>        
        <!-- Template custom script  -->
        <script type="text/javascript" src="<?php echo site_url();?>design/js/jquery-func.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider-min.js"></script>
	<!-- ======================= End JQuery libs ======================= -->
    
    
        <script type="text/javascript">
        $(document).ready(function() {
			
			$('.btnviewsaform').on('click',function(){
				
				var $this=$(this);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/viewsaform",
                              type: "POST",
                              data: {'uid':$this.attr('rel1')},
                              success: function(data)
                              {
								$('.vsaform').html(data);
							  }
                                    
                            });
							
				});
				
				
			$('.btnviewcontacts').on('click',function(){
				
				var $this=$(this);
				 $.ajax({
                              url: "<?php echo base_url();?>admin/viewcontactsinfo",
                              type: "POST",
                              data: {'uid':$this.attr('rel1')},
                              success: function(data)
                              {
								$('.vcontacts').html(data);
							  }
                                    
                            });
							
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
				
		$('.tickettextclear').on('click',function(){
			
			$('.txt_desc').val('');
			$('.txt_rmid').val($(this).attr('id'));
			$('.txt_uid').val($(this).attr('rel1'));
			
			});
		$('.submitticketnotes').on('click',function(){
			
			if($.trim($('.txt_desc').val())=='')
			{
				$('.txt_desc').val('');
				$('.txt_desc').focus();
				return false;
			}
			/*console.log($('.txt_desc').val());
			console.log($('.txt_rmid').val());
			console.log($('.txt_uid').val());*/
			
			 $.ajax({
                              url: "<?php echo base_url();?>admin/savermticketnotes",
                              type: "POST",
                              data: {'intid':$('.txt_intid').val(),'notes':$.trim($('.txt_desc').val()), 'rmid':$('.txt_rmid').val(), 'uid':$('.txt_uid').val()},
                              success: function(data)
                              {
								  //$('#IDModal').modal('toggle');
								  $('.submitticketnotesclose').click();
								//  $('.notes_'+$('.txt_uid').val()).find('li.createdate').html(data);
								 // $('.notes_'+$('.txt_uid').val()).find('li.createnotes').html($.trim($('.txt_desc').val()));
								$('.notes_'+$('.txt_uid').val()).append('<li><div class="CPPrifileLeftProfileIntractionLeft">'+data+'</div><div class="CPPrifileLeftProfileIntractionDivider">: </div><div class="CPPrifileLeftProfileIntractionRight">'+$.trim($('.txt_desc').val())+'</div></li>');
								//alert(successalert);  
								// location.reload(); 
							  }
                                    
                            });
			});	
 var confirmmessage="Would you like to process this action?";
 var successalert="Action successfully processed";
$('.sel_bothsideinterest').change(function(){
var $this=$(this);
if(!$this.val())
{
	return false;
}
	if (confirm(confirmmessage)) {
		//$(this).children(":selected").attr("id")
   
   $.ajax({
                              url: "<?php echo base_url();?>admin/bothsideinterest_action",
                              type: "POST",
                              data: {'intid':$this.children(":selected").attr("id"), 'action':$this.val()},
                              success: function(data)
                              {
								alert(successalert);  
								 location.reload(); 
							  }
                                    
                            });
							
							
	
		} 
	});
                $('.all-images img').on('click', function() {
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

                $(document).on('click','.ct-sliderPop-close', function(){
                        $('div.sliderPop').hide();
                        $('.ct-sliderPop-container').removeClass('open');
                        $('.sliderPop').removeClass('flexslider');
                        $('.sliderPop .ct-sliderPop-container').removeClass('slides');
                });

                // $('#modalData div a.ct-sliderPop-close').click(function() {
                //         $('div.sliderPop').hide();
                //         $('.ct-sliderPop-container').removeClass('open');
                //         $('.sliderPop').removeClass('flexslider');
                //         $('.sliderPop .ct-sliderPop-container').removeClass('slides');
                // });

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
</script>


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


<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="marketing_history">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">


              <div class="cust_call_hsitory_log" style=" width: 100%;float:left; height: 88%; margin-top:2vw;">
                        <div class="form-check-inline form-group styleClose" style="padding-left:1vw; float:left; width:100%;">
                        <input type="hidden" value="<?php echo $profile_1 ?>" id="cust_profile_id" name="cust_profile_id" >  
                        <div class="col-md-3 ">
                                <lable style="margin-right:1vw;"> Call Type:</lable>
                            </div>
                            <div class="col-md-3 form-check-inline form-group ">
                                <input type="radio" class="radio-inline" checked name="call_type" value="cl_type_incoming"> Incoming Call
                            </div>
                            <div class="col-md-3 form-check-inline form-group ">
                                <input type="radio" class="radio-inline" name="call_type" value="cl_type_outgoing"> Outgoing Call
                            </div>
                            <div class="col-md-3 form-check-inline form-group ">
                                <input type="radio" class="radio-inline" name="call_type" value="cl_type_memo"> Memo
                            </div>
                        </div>
                        <div class="form-check-inline form-group styleClose" style="padding-left:1vw; float:left; width:100%;">
                            <div class="col-md-3">
                                <lable style="margin-right:1vw;">Call Success:</lable>
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" checked name="call_success_type" value="cl_status_connected"> Connected
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" name="call_success_type" value="cl_status_not_connected"> Not Connected
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" name="call_success_type" value="cl_status_switch_off"> Switched Off
                            </div>

                        </div>
                        <div class="form-check-inline form-group" style="padding-left:1vw; float:left; width:100%;">
                            <div class="col-md-3">
                                <lable style="margin-right:1vw;">Call Discussion:</lable>
                            </div>
                        </div>
                        <div class="form-inline form-group" style="padding-left:1em; float:left; width:100%;">
                            <div class="col-md-3">

                            </div>
                            <textarea rows="10" style="width:96%; height:100px" class="form-control" id="call_descption" name="description"> </textarea>
                            </br>
                            <div style="width:100%; float:left; height:50px;">
                                <button id="btn_save_new" style="width:20%; float:left; margin-left:40%; height:100%;" class="btn btn-warning form-control"> Submit</button>
                            </div>
                        </div>
                    </div>
       
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

        $('#btn_save_new').click(function(e) { 

            var cl_description = $('#call_descption').val().trim();
            var cl_success = $('input[name=call_success_type]:checked').val();
            var cl_type = $('input[name=call_type]:checked').val();
            var cust_id = $('#cust_profile_id').val();
        

            if (cl_description == '') {
                showErrorAlert("Please enter some information for log!");
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/save_call_log",
                    dataType: 'json',
                    data: {
                        cl_type: cl_type,
                        cl_success: cl_success,
                        cl_description: cl_description,
                        cust_id: cust_id,
                        cl_by: <?php echo $user_id ?>
                    },
                    success: function(result) {
                        if (result.success == "1") {
                          $('#marketing_history').modal('hide');
                          window.location.reload();
                            closeAndShowSucces();
                            showSuccessAlert("Log saved successfully!");
                        

                        } else {
                            showErrorAlert("Problem in saving log");

                        }
                    },
                    error: function(xhr, error) {
                        showErrorAlert("Problem in saving log");
                    }
                });
            }
});
</script>

 <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="marketing_history2">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">


              <div class="cust_call_hsitory_log" style=" width: 100%;float:left; height: 88%; margin-top:2vw;">
                        <div class="form-check-inline form-group styleClose"  style="padding-left:1vw; float:left; width:100%;">
                        <input type="hidden" value="<?php echo $profile_2 ?>" id="cust_profile_id2" name="cust_profile_id" >  
                        <div class="col-md-3 ">
                                <lable style="margin-right:1vw;"> Call Type2:</lable>
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" checked name="call_type" value="cl_type_incoming"> Incoming Call
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" name="call_type" value="cl_type_outgoing"> Outgoing Call
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" name="call_type" value="cl_type_memo"> Memo
                            </div>
                        </div>
                        <div class="form-check-inline form-group styleClose" style="padding-left:1vw; float:left; width:100%;">
                            <div class="col-md-3">
                                <lable style="margin-right:1vw;">Call Success:</lable>
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" checked name="call_success_type" value="cl_status_connected"> Connected
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" name="call_success_type" value="cl_status_not_connected"> Not Connected
                            </div>
                            <div class="col-md-3 form-check-inline form-group">
                                <input type="radio" class="radio-inline" name="call_success_type" value="cl_status_switch_off"> Switched Off
                            </div>

                        </div>
                        <div class="form-check-inline form-group" style="padding-left:1vw; float:left; width:100%;">
                            <div class="col-md-3">
                                <lable style="margin-right:1vw;">Call Discussion:</lable>
                            </div>
                        </div>
                        <div class="form-inline form-group" style="padding-left:1em; float:left; width:100%;">
                            <div class="col-md-3">

                            </div>
                            <textarea rows="10" style="width:96%; height: 100px;" class="form-control" id="call_descption2" name="description"> </textarea>
                            </br>
                            <div style="width:100%; float:left; height:50px;">
                                <button id="btn_save_2" style="width:20%; float:left; margin-left:40%; height:100%;" class="btn btn-warning form-control"> Submit</button>
                            </div>
                        </div>
                    </div>
       
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 





<script>

        $('#btn_save_2').click(function(e) { 

            var cl_description2 = $('#call_descption2').val().trim();
            var cl_success = $('input[name=call_success_type]:checked').val();
            var cl_type = $('input[name=call_type]:checked').val();
            var cust_id = $('#cust_profile_id2').val();

            if (cl_description2 == '') {
                showErrorAlert("Please enter some information for log!");
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/save_call_log",
                    dataType: 'json',
                    data: {
                        cl_type: cl_type,
                        cl_success: cl_success,
                        cl_description: cl_description2,
                        cust_id: cust_id,
                        cl_by: <?php echo $user_id ?>
                    },
                    success: function(result) {
                        if (result.success == "1") {
                          $('#marketing_history2').modal('hide');
                          window.location.reload();
                            closeAndShowSucces();
                            showSuccessAlert("Log saved successfully!");
                        

                        } else {
                            showErrorAlert("Problem in saving log");

                        }
                    },
                    error: function(xhr, error) {
                        showErrorAlert("Problem in saving log");
                    }
                });
            }
});
</script>





</body> 
</script>

</html>
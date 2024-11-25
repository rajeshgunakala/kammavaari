<!--popups html-->
<input type="hidden" name="txt_rmid" class="txt_rmid" value="" />
<input type="hidden" name="txt_uid" class="txt_uid" value="" />
<input type="hidden" name="txt_rm_name" class="txt_rm_name" value="" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>
<div class="modal myModal_uticket" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_uticket">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b class="fs20">Ticket Notes</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>
         <div class="modal-body">
            <div class="element">
               <label class="label">Call Received By:</label>
               <input type="text" class="form-control" name="call_received_by" id="call_received_by">
            </div>
            <div class="element">
               <label class="label">Call Discussion:</label>
               <textarea class="form-control txt_desc" name="txt_desc"></textarea>
            </div>
            <div class="element">
               <label class="label">Call Status:</label>
               <select name="call_status" class="form-control" id="call_status">
                  <option value="Successful">Successful</option>
                  <option value="Not Connected">Not Connected</option>
               </select>
            </div>
            <p>
            </p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-xs submit_ticket_notes">Submit</button>
            <button type="button" class="btn btn-secondary btn-xs submitticketnotesclose" data-dismiss="modal">Close</button>
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
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_viewcontacts">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b class="fs20">Contacts</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>
         <div class="modal-body vcontacts">
            <p></p>
         </div>
         <div class="modal-footer">
            <!--button type="button" class="btn btn-primary">Save changes</button-->
            <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_viewsaform">
   <div class="modal-dialog modal-lg modal-cust">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b class="fs20">SA Form</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>
         <div class="modal-body vsaform">
            <p></p>
         </div>
         <div class="modal-footer">
            <!--button type="button" class="btn btn-primary">Save changes</button-->
            <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_close_ticket">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b class="fs20">Close Ticket</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>         
		 <div class="modal-body"> 
			<div style="margin-bottom:10px;" class="popup_notification"></div>
            <div class="element">
               <label class="label">Reason:</label>
               <textarea class="form-control txt_desc" name="close_reason" id="close_reason"></textarea>
            </div>
         </div>
         <input type="hidden" name="init_id" class="init_id" id="init_id" value="" />
         <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-xs submit_close_ticket">Submit</button>
            <button type="button" class="btn btn-secondary btn-xs close_ticket_close" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="modal myModal_create_reminder" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_create_reminder">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title"><b class="fs20">Create Reminder</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
         </div>
         <div class="modal-body">
			<div style="margin-bottom:10px;" class="popup_notification"></div>
            <div class="element">
               <label class="label">Reminder Date:</label>
               <input type="text" class="form-control" style="width:120px;" id="reminder_date">		  
            </div>

			<div class="element">
               <label class="label">Reason:</label>
               <input type="text" class="form-control" style="width:300px;" id="reason">		  
            </div>

         </div>
         <input type="hidden" name="cust_id" class="cust_id" value="" />
         <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-xs submit_create_reminder">Submit</button>
            <button type="button" class="btn btn-secondary btn-xs create_reminder_close" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<!--popups html end--> 
<!-- Loading Image -->
<div class="loading" style="display: none;">
   <div class="content">
      <div class="loader_img"><img src="<?php echo base_url('assets/images/ajax-loader.gif'); ?>"/></div>
      <div class="processing_txt">Processing...</div>
   </div>
</div>
<link rel="stylesheet" href="<?php echo base_url('css/admin/css/jquery-ui.css'); ?>" />
<script src="<?php echo base_url('js/admin/jquery-ui.js'); ?>"></script>
<script type="text/javascript">
	function close_ticket(id) {
		$("#init_id").val(id);		
	}
	
   function profile_submit_action(id, action) {
   	var confirmmessage="Would you like to process this action?";
   	var successalert="Action successfully processed";	
   		if (confirm(confirmmessage)) {
   			$.ajax({
   			  url: "<?php echo base_url();?>admin/bothsideinterest_action",
   			  type: "POST",
   			  data: {'intid':id, 'action':action},
   			  success: function(data)
   			  {
   				alert(successalert);  
   				 location.reload(); 
   			  }
   					
   			});
   		} 
   }
   function marketing_ticket_history(rel1) {
   	$.ajax({
   	  url: "<?php echo base_url();?>admin/marketingticketshistory",
   	  type: "POST",
   	  data: {'uid':rel1},
   	  success: function(data)
   	  {
   		$('.mtickethistory').html(data);
   	  }
   			
   	});
   }
   function viewsaform(rel1) {
   	$.ajax({
   	  url: "<?php echo base_url();?>admin/viewsaform",
   	  type: "POST",
   	  data: {'uid':rel1},
   	  success: function(data)
   	  {
   		$('.vsaform').html(data);
   	  }
   			
   	});
   }
   function viewcontacts(rel1) {
   	$.ajax({
   	  url: "<?php echo base_url();?>admin/viewcontactsinfo",
   	  type: "POST",
   	  data: {'uid':rel1},
   	  success: function(data)
   	  {
   		$('.vcontacts').html(data);
   	  }
   			
   	});
   }
   function submit_ticket_notes(id, rel1, rmname){
   	$('.txt_desc').val('');
   	$('.txt_rmid').val(id);
   	$('.txt_uid').val(rel1);
   	$('.txt_rm_name').val(rmname);
   }
   function viewTicketHistory(rmid, rel1) {
   	$.ajax({
   		url: "<?php echo base_url();?>admin/getrmticketnotes",
   		type: "POST",
   		data: {'intid':$('.txt_intid').val(),'rmid':rmid, 'uid':rel1},
   		success: function(data)
   		{
   			$('.tickethistorynotes').html(data);
   		}				
   	});
   }
   
   function create_reminder(rel1) {
  	$(".cust_id").val(rel1);
   
   }
   function showSuccessAlert(message) {
   var alert = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> ' + message + '</div>';
   $('#notification').html(alert);
   window.setTimeout(function() {
   	$(".alert").fadeTo(500, 0).slideUp(500, function() {
   		$(this).remove();
   	});
   }, 3000);
   }
   
   function showErrorAlert(message) {
   var alert = '<div class="alert alert-danger"> <strong>Error!</strong> ' + message + ' </div>';
   $('#notification').html(alert);
   window.setTimeout(function() {
   	$(".alert").fadeTo(500, 0).slideUp(500, function() {
   		$(this).remove();
   	});
   }, 3000);
   
   }
   
   function showSuccessPopupAlert(message) {
   var alert = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> ' + message + '</div>';
   $('.popup_notification').html(alert);
   window.setTimeout(function() {
   	$(".alert").fadeTo(500, 0).slideUp(500, function() {
   		$(this).remove();
   	});
   }, 3000);
   }
   
   function showErrorPopupAlert(message) {
   var alert = '<div class="alert alert-danger"> <strong>Error!</strong> ' + message + ' </div>';
   $('.popup_notification').html(alert);
   window.setTimeout(function() {
   	$(".alert").fadeTo(500, 0).slideUp(500, function() {
   		$(this).remove();
   	});
   }, 3000);
   
   }
   
   $(document).ready(function() {
   $("#reminder_date").datepicker({
   	showOtherMonths: true,
   	selectOtherMonths: true,
   	dateFormat: 'yy-mm-dd'
   });
   $('.submit_ticket_notes').on('click',function(){
   	if($.trim($('#call_received_by').val())=='')
   	{
   		$('#call_received_by').val('');
   		$('#call_received_by').focus();
   		return false;
   	}
   	if($.trim($('.txt_desc').val())=='')
   	{
   		$('.txt_desc').val('');
   		$('.txt_desc').focus();
   		return false;
   	}
   	$.ajax({
   		url: "<?php echo base_url();?>admin/savermticketnotes",
   		type: "POST",
   		data: {'intid':$('.txt_intid').val(),'notes':$.trim($('.txt_desc').val()),'call_received_by':$.trim($('#call_received_by').val()),'call_status':$.trim($('#call_status').val()), 'rmid':$('.txt_rmid').val(), 'uid':$('.txt_uid').val()},
   		success: function(data)
   		{
   			$('.submitticketnotesclose').click();
   			$('#recent_conversation_'+$('.txt_rmid').val()).html('<div class="recent_conversation">'+
			'<table class="full_width">'+
				'<tr>'+
					'<td class="label">Call Done by</td>'+
					'<td class="colon">:</td>'+
					'<td> '+ $.trim($('.txt_rm_name').val())+'</td>'+
				'</tr>'+
				'<tr>'+
					'<td class="label">Call Status</td>'+
					'<td class="colon">:</td>'+
					'<td>'+ $.trim($('#call_status').val())+'</td>'+
				'</tr>'+
				'<tr>'+										
					'<td class="label">Call Received by</td>'+
					'<td class="colon">:</td>'+
					'<td>'+ $.trim($('#call_received_by').val())+'</td>'+
				'</tr>'+
				'<tr>'+										
					'<td class="label">Contacted On</td>'+
					'<td class="colon">:</td>'+
					'<td>'+data+'</td>'+					
				'</tr>'+
				'<tr>'+										
					'<td class="label">Call Discussion</td>'+
					'<td class="colon">:</td>'+
					'<td>'+ $.trim($('.txt_desc').val())+'</td>'+
				'</tr>'+
		   '</table>'); 
   		}
   
   	});
   });	
   $('.submit_create_reminder').on('click',function(){
   	var reminder_date = $('#reminder_date').val();
   	var cust_id = $(".cust_id").val();
	var reason = $('#reason').val();
	
   	if (reminder_date != '' && cust_id != "") {
   		
   		$.ajax({
   			type: "POST",
   			url: "<?php echo base_url(); ?>admin/ws/save_reminder",
   			dataType: 'json',
   			data: {
   				cust_id: cust_id,
   				rem_date: reminder_date,
				reason:reason
   			},
   			success: function(result) {
   				$('.create_reminder_close').click();
   				if (result.success == "1") {
   					showSuccessPopupAlert("Reminder saved successfully!");
   				} else {
   					showErrorPopupAlert("Problem in saving reminder!");
   				}
   			},
   			error: function(xhr, error) {
   				showErrorPopupAlert("Problem in saving reminder!");
   			}
   		});
   	} else {
   		showErrorPopupAlert("Please enter a valide date for reminder to save!");
   	}
   });
   
   $('.submit_close_ticket').on('click',function(){
   	var init_id = $('#init_id').val();
   	var close_reason = $("#close_reason").val();
   	if (init_id != '' && close_reason != "") {  		
   		$.ajax({
   			url: "<?php echo base_url();?>admin/close_ticket_action",
			  type: "POST",
			  data: {'init_id':init_id, 'close_reason':close_reason},
   			dataType: 'json',
   			success: function(result) {
   				$('.close_ticket_close').click();
   				if (result.success == "1") {
   					showSuccessPopupAlert("Ticket is closed successfully!");
   				} else {
   					showErrorPopupAlert("Problem in saving close ticket!");
   				}
				location.reload();
   			},
   			error: function(xhr, error) {
				showErrorPopupAlert("Problem in saving close ticket!");
   			}
   		});
   	} else {
		showErrorPopupAlert('Please enter a valid reason for closing ticket!');
		}
   });
   });
</script>
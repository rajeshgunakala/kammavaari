<?php echo $this->ajaxpaginationsingle->create_links(); ?>
<div class="col-md-12 col-xs-12 no-padding headings">
            <div class="row contaCtShareMatchMeeting">
               <div class="col">Contact Shared</div>
               <div class="col">Match Meeting</div>
               <div class="col"><span class="serviceLabel">Serivce Done By:</span> <?php echo $service_done_by != "" ? ucfirst($service_done_by) : "NA";?></div>
            </div>
         </div>
<div class="col-md-6 profile1 no-padding">
   <div class="row-fluid">
	  <div class="col-sm-12 compareprofile">
		 <div class="completeProfileLeftPanWrapper">
			<div class="CPProfileLefDetailwOuter CPPrifileLeftProfileIntraction">
			   <div class="CPProfileLefDetail">                              
				  <ul>
					 <li class="displayInline no-margin"><button class="btn btn-xs custBtnPInt no-padding"><span class="left_rm_name"><?php echo ucfirst($rm_profile1->username);?></span><?php echo $rm_profile1->phone_no;?></button></li>
					 <li class="displayInline"><button class="btn btn-xs custBtnPInt btn-primary" onclick="profile_submit_action(<?php echo $profile_inid; ?>, 'consultrm')">Consult <?php echo ucfirst($rm_profile2->username);?></button></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $profile_1;?>" onclick="marketing_ticket_history(<?php echo $profile_1;?>)">Marketing Ticket</span></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#marketing_history3" rel1="<?php echo $profile_1;?>" onclick="marketing_history3(<?php echo $profile_1;?>)">CALL ENTRY</span></li>

					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_viewsaform" rel1="<?php echo $profile_1;?>" onclick="viewsaform(<?php echo $profile_1;?>)">View SA Form</span></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary"><a href="<?php echo base_url();?>admin/admin_search/full_profile/<?php echo $profile_1;?>" target="_blank">View Full Profile</a></span></li>
					 <li class="displayInline"><button class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_close_ticket" onclick="close_ticket(<?php echo $profile_inid; ?>)">Close Ticket</button></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_create_reminder" rel1="<?php echo $profile_1;?>" onclick="create_reminder(<?php echo $profile_1;?>)">Create Reminder</span></li>
				  </ul>
			   </div>
			</div>
			<div class="CPProfileImgNameOuter">
			   <div class="CPProfileImg"><img src="<?php echo $profile_pic1[0]['applicationphotopath'];?>" onerror="this.src='<?php echo base_url();?>images/profilepics/noimage.jpg';"></div>
			   <div class="CPProfileName"> <?php echo ucfirst($primary_info1['first_name'] . ' ' . $primary_info1['last_name']);?> (<a href="<?php echo base_url();?>admin/admin_search/viewprofile/<?php echo $profile_1;?>" target="_blank"><?php echo $primary_info1['profile_id'];?></a>)</div>
			   <div class="CPProfileData contact-details"><strong class="label">Mobileeee:</strong> <?php echo $primary_info1['mobile'];?></div>
			   <div class="CPProfileData contact-details"><strong class="label">Email Id:</strong> <?php echo $primary_info1['email'];?></div>
			   <div class="service_dates">
					<div class="service_done"><strong class="label">Service Date:</strong> <?php echo date('d-m-Y', strtotime($user_data["send_Date"]));?></div>
					<div class="proceed"><strong class="label">Proceed Date:</strong> <?php echo (!empty($user_data["fs_Date"]) || $user_data["fs_Date"] != "0000-00-00 00:00:00") ? date('d-m-Y', strtotime($user_data["fs_Date"])) : "NA";?></div>
				</div>
			</div>
			<div id="recent_conversation_<?php echo $rm_profile1->id;?>">
			<?php if (count($rmnotes_1) > 0) {?>
			<div class="recent_conversation">
			   <?php foreach ($rmnotes_1 as $notes) {?>
				<table class="full_width">
						<tr>
							<td class="label">Call Done by</td>
							<td class="colon">:</td>
							<td><?php echo ucfirst($notes->username);?></td>
						</tr>
						<tr>
							<td class="label">Call Status</td>
							<td class="colon">:</td>
							<td><?php echo $notes->kv_rmn_call_status;?></td>
						</tr>
						<tr>										
							<td class="label">Call Received by</td>
							<td class="colon">:</td>
							<td><?php echo $notes->kv_rmn_call_received_by;?></td>
						</tr>
						<tr>										
							<td class="label">Contacted On</td>
							<td class="colon">:</td>
							<td><?php echo date('d-m-Y', strtotime($notes->kv_created_date));?></td>
							
						</tr>
						<tr>										
							<td class="label">Call Discussion</td>
							<td class="colon">:</td>
							<td><?php echo base64_decode($notes->kv_rmn_notes);?></td>
						</tr>
				   </table>
			   <?php } ?>
			</div>
			<?php } ?>
			</div>
			<div class="bottom-actions">
			   <div class="rm-ticket"><button class="btn btn-xs custBtnPInt btn-success" id="<?php echo $rm_profile1->id;?>" rel1="<?php echo $profile_1;?>" rmname="<?php echo ucfirst($rm_profile1->username); ?>" data-toggle="modal" data-target="#myModal_uticket" onclick="submit_ticket_notes(<?php echo $rm_profile1->id;?>, <?php echo $profile_1 ?>,'<?php echo ucfirst($rm_profile1->username) ?>')"><?php echo ucfirst($rm_profile1->username);?> Ticket</button></div>
			   <div class="ticket-history"><a href="#" class="btn btn-xs btn-primary custBtnPInt" id="<?php echo $rm_profile1->id;?>" rel1="<?php echo $profile_1;?>" data-toggle="modal" data-target="#myModal_tickethistory" onclick="viewTicketHistory(<?php echo $rm_profile1->id;?>, <?php echo $profile_1;?>)">Ticket History</a></div>
			</div>
		 </div>
	  </div>
   </div>
</div>
<div class="col-md-6 profile2 no-padding">
   <div class="row-fluid">
	  <div class="col-sm-12 compareprofile">
		 <div class="completeProfileLeftPanWrapper">
			<div class="CPProfileImgNameOuter">
			   <div class="CPProfileImg"><img src="<?php echo $profile_pic2[0]['applicationphotopath'];?>" onerror="this.src='<?php echo base_url();?>images/profilepics/noimage.jpg';"></div>
			   <div class="CPProfileName"> <?php echo ucfirst($primary_info2['first_name'] . ' ' . $primary_info2['last_name']);?> (<a href="<?php echo base_url();?>admin/admin_search/viewprofile/<?php echo $profile_2;?>" target="_blank"><?php echo $primary_info2['profile_id'];?></a>) <img src="<?php echo base_url();?>images/heartblink.gif" width="20"  style="text-align:center;"/></div>
			   <div class="CPProfileData contact-details"><strong class="label">Mobile:</strong> <?php echo $primary_info2['mobile'];?></div>
			   <div class="CPProfileData contact-details"><strong class="label">Email Id:</strong> <?php echo $primary_info2['email'];?></div>
			   <div class="service_dates">
					<div class="service_done"><strong class="label">Service Date:</strong> <?php echo date('d-m-Y', strtotime($user_data["send_Date"]));?></div>
					<div class="proceed"><strong class="label">Proceed Date:</strong> <?php echo (!empty($user_data["ts_Date"]) || $user_data["ts_Date"] != "0000-00-00 00:00:00") ? date('d-m-Y', strtotime($user_data["ts_Date"])) : "NA";?></div>
				</div>
			</div>
			<div class="CPProfileLefDetailwOuter CPPrifileLeftProfileIntraction">
			   <div class="CPProfileLefDetail">
				  <ul>
					 <li class="displayInline no-margin"><button class="btn btn-xs custBtnPInt no-padding"><span class="right_rm_name"><?php echo ucfirst($rm_profile2->username);?></span> <?php echo $rm_profile2->phone_no;?></button></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $profile_2;?>" onclick="marketing_ticket_history(<?php echo $profile_2;?>)">Marketing Ticket</span></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#marketing_history4" rel1="<?php echo $profile_2;?>" onclick="marketing_history4(<?php echo $profile_2;?>)">CALL ENTRY</span></li>

					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_viewsaform" rel1="<?php echo $profile_2;?>" onclick="viewsaform(<?php echo $profile_2;?>)">View SA Form</span></li>
					 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary"><a href="<?php echo base_url();?>admin/admin_search/full_profile/<?php echo $profile_2;?>" target="_blank">View Full Profile</a></span></li>
				  </ul>
			   </div>
			</div>
			<div id="recent_conversation_<?php echo $rm_profile2->id;?>">
				<?php if (count($rmnotes_2) > 0) {?>
				<div class="recent_conversation">
				   <?php foreach ($rmnotes_2 as $notes) {?>
				   <table class="full_width">
						<tr>
							<td class="label">Call Done by</td>
							<td class="colon">:</td>
							<td><?php echo ucfirst($notes->username);?></td>
						</tr>
						<tr>
							<td class="label">Call Status</td>
							<td class="colon">:</td>
							<td><?php echo $notes->kv_rmn_call_status;?></td>
						</tr>
						<tr>										
							<td class="label">Call Received by</td>
							<td class="colon">:</td>
							<td><?php echo $notes->kv_rmn_call_received_by;?></td>
						</tr>
						<tr>										
							<td class="label">Contacted On</td>
							<td class="colon">:</td>
							<td><?php echo date('d-m-Y', strtotime($notes->kv_created_date));?></td>
							
						</tr>
						<tr>										
							<td class="label">Call Discussion</td>
							<td class="colon">:</td>
							<td><?php echo base64_decode($notes->kv_rmn_notes);?></td>
						</tr>
				   </table>
				   <?php } ?>
				</div>
				<?php } ?>
			</div>
			<div class="bottom-actions">
			   <div class="rm-ticket"><button class="btn btn-xs custBtnPInt btn-success" id="<?php echo $rm_profile2->id;?>" rel1="<?php echo $profile_2;?>" rmname="<?php echo ucfirst($rm_profile2->username); ?>" data-toggle="modal" data-target="#myModal_uticket" onclick="submit_ticket_notes(<?php echo $rm_profile2->id;?>, <?php echo $profile_2 ?>,'<?php echo ucfirst($rm_profile2->username) ?>')"><?php echo ucfirst($rm_profile2->username);?> Ticket</button></div>
			   <div class="ticket-history"><a href="#" class="btn btn-xs btn-primary custBtnPInt" id="<?php echo $rm_profile2->id;?>" rel1="<?php echo $profile_2;?>" data-toggle="modal" data-target="#myModal_tickethistory" onclick="viewTicketHistory(<?php echo $rm_profile2->id;?>, <?php echo $profile_2;?>)">Ticket History</a></div>
			</div>
		 </div>
	  </div>
   </div>
</div>
<input type="hidden" name="txt_intid" class="txt_intid" value="<?php echo $profile_inid;?>" />



<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="marketing_history3">
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
                            <textarea rows="10" style="width:96%; height:100px" class="form-control" id="call_descption3" name="description3"> </textarea>
                            </br>
                            <div style="width:100%; float:left; height:50px;">
                                <button id="btn_save3" style="width:20%; float:left; margin-left:40%; height:100%;" class="btn btn-warning form-control"> Submit</button>
                            </div>
                        </div>
                    </div>
       
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

        $('#btn_save3').click(function(e) { 

            var cl_description = $('#call_descption3').val().trim();
            var cl_success = $('input[name=call_success_type]:checked').val();
            var cl_type = $('input[name=call_type]:checked').val();
            var cust_id = $('#cust_profile_id').val();
        //    alert(cust_id);

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

<div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="marketing_history4">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">


              <div class="cust_call_hsitory_log" style=" width: 100%;float:left; height: 88%; margin-top:2vw;">
                        <div class="form-check-inline form-group styleClose" style="padding-left:1vw; float:left; width:100%;">
                        <input type="hidden" value="<?php echo $profile_2 ?>" id="cust_profile_id1" name="cust_profile_id" >  
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
                            <textarea rows="10" style="width:96%; height:100px" class="form-control" id="call_descption4" name="description3"> </textarea>
                            </br>
                            <div style="width:100%; float:left; height:50px;">
                                <button id="btn_save4" style="width:20%; float:left; margin-left:40%; height:100%;" class="btn btn-warning form-control"> Submit</button>
                            </div>
                        </div>
                    </div>
       
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>

        $('#btn_save4').click(function(e) { 

            var cl_description = $('#call_descption4').val().trim();
            var cl_success = $('input[name=call_success_type]:checked').val();
            var cl_type = $('input[name=call_type]:checked').val();
            var cust_id = $('#cust_profile_id1').val();
        //    alert(cust_id);

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
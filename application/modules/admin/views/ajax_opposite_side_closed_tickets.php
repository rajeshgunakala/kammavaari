<?php echo $this->ajaxpaginationsingle->create_links(); ?>
<div class="col-md-12 no-padding close_reason"><?php echo $user_data["close_reason"] ?></div>
<div class="col-md-6 profile1 no-padding">
<div class="row-fluid">
  <div class="col-sm-12 compareprofile">
	 <div class="completeProfileLeftPanWrapper">
		<div class="CPProfileLefDetailwOuter CPPrifileLeftProfileIntraction">
		   <div class="CPProfileLefDetail">
			  <ul>
				 <li class="displayInline no-margin"><button class="btn btn-xs custBtnPInt no-padding"><span class="left_rm_name"><?php echo ucfirst($rm_profile1->username);?></span><?php echo $rm_profile1->phone_no;?></button></li>
				 <li class="displayInline"><button class="btn btn-xs custBtnPInt btn-primary" onclick="profile_submit_action(<?php echo $profile_inid; ?>, 'consultrm')">Consult <?php echo ucfirst($rm_profile2->username);?></button></li>
				 <li class="displayInline"><button class="btn btn-xs custBtnPInt btn-primary" onclick="profile_submit_action(<?php echo $profile_inid; ?>, 'open')">Revise</button></li>
				 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $profile_1;?>" onclick="marketing_ticket_history(<?php echo $profile_1;?>)">Marketing Ticket</span></li>
				 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_viewsaform" rel1="<?php echo $profile_1;?>" onclick="viewsaform(<?php echo $profile_1;?>)">View SA Form</span></li>
				 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary"><a href="<?php echo base_url();?>admin/admin_search/full_profile/<?php echo $profile_1;?>" target="_blank">View Full Profile</a></span></li>
			  </ul>
		   </div>
		</div>
		<div class="CPProfileImgNameOuter">
		   <div class="CPProfileImg"><img src="<?php echo $profile_pic1[0]['applicationphotopath'];?>" onerror="this.src='<?php echo base_url();?>images/profilepics/noimage.jpg';"></div>
		   <div class="CPProfileName"> <?php echo ucfirst($primary_info1['first_name'] . ' ' . $primary_info1['last_name']);?> (<a href="<?php echo base_url();?>admin/admin_search/viewprofile/<?php echo $profile_1;?>" target="_blank"><?php echo $primary_info1['profile_id'];?></a>) <span><?php if($user_data["f_status"] == 2) {?><img src="<?php echo base_url();?>images/heartblink.gif" width="20" style="text-align:center;" /> <?php } ?></span></div>
		<!--   <div class="CPProfileData contact-details"><strong class="label">Mobile:</strong> <?php echo $primary_info1['mobile'];?></div>
		   <div class="CPProfileData contact-details"><strong class="label">Email Id:</strong> <?php echo $primary_info1['email'];?></div>
		-->   <div class="service_dates">
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
		   <div class="CPProfileName"> <?php echo ucfirst($primary_info2['first_name'] . ' ' . $primary_info2['last_name']);?> (<a href="<?php echo base_url();?>admin/admin_search/viewprofile/<?php echo $profile_2;?>" target="_blank"><?php echo $primary_info2['profile_id'];?></a>) <?php if($user_data["f_status"] == 2) {?><img src="<?php echo base_url();?>images/heartblink.gif" width="20" style="text-align:center;" /> <?php } ?></div>
		<!--   <div class="CPProfileData contact-details"><strong class="label">Mobile:</strong> <?php echo $primary_info2['mobile'];?></div>
		   <div class="CPProfileData contact-details"><strong class="label">Email Id:</strong> <?php echo $primary_info2['email'];?></div>
		 -->  <div class="service_dates">
				<div class="service_done"><strong class="label">Service Date:</strong> <?php echo date('d-m-Y', strtotime($user_data["send_Date"]));?></div>
				<div class="proceed"><strong class="label">Proceed Date:</strong> <?php echo (!empty($user_data["ts_Date"]) || $user_data["ts_Date"] != "0000-00-00 00:00:00") ? date('d-m-Y', strtotime($user_data["ts_Date"])) : "NA";?></div>
			</div>
		</div>
		<div class="CPProfileLefDetailwOuter CPPrifileLeftProfileIntraction">
		   <div class="CPProfileLefDetail">
			  <ul>
				 <li class="displayInline no-margin"><button class="btn btn-xs custBtnPInt no-padding"><span class="right_rm_name"><?php echo ucfirst($rm_profile2->username);?></span> <?php echo $rm_profile2->phone_no;?></button></li>
				 <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $profile_2;?>" onclick="marketing_ticket_history(<?php echo $profile_2;?>)">Marketing Ticket</span></li>
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

<input type="hidden" name="txt_intid" class="txt_intid" value="<?php echo $profile_inid;?>" />
<input type="hidden" name="txt_rmid" class="txt_rmid" value="" />
<input type="hidden" name="txt_uid" class="txt_uid" value="" />
<div class="col-sm-12 homeclass">
<div class="row">
  <?php $this->load->view('leftpanelstaff');?>
  <div class="col-sm-9 col-xs-12">
  <div class="row">
  	<div class="col-sm-12">
    	<div class="row contaCtShareMatchMeeting">
    	<div class="col">Contact Share</div>
        <div class="col">Match Meeting</div>
        <div class="col dn"><span class="serviceLabel">Serivce Done By:</span> User(112)</div>
    </div>
    </div>
    <div class="col-sm-6 1profile">
      <div class="row-fluid">
        <div class="col-sm-12 compareprofile">
          <div class="completeProfileLeftPanWrapper">
            <div class="CPProfileImgNameOuter">
              <div class="CPProfileImg"><img src="<?php echo $profile_pic1[0]['applicationphotopath'];?>" onerror="this.src='<?php echo base_url();?>images/profilepics/noimage.jpg';"></div>
              <div class="CPProfileName"> <?php echo ucfirst($primary_info1['first_name'] . ' ' . $primary_info1['last_name']);?> </div>
              <div class="CPProfileId">(ID:<a href="<?php echo base_url();?>admin/admin_search/viewprofile/<?php echo $profile_1;?>" target="_blank"><?php echo $primary_info1['profile_id'];?></a>)</div>
            </div>
            <div class="CPProfileLefDetailwOuter CPPrifileLeftProfileIntraction">
              <div class="CPProfileLefDetail">
                <ul>
                  <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary btnmarketingticket" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $profile_1;?>">Marketing Ticket</span></li>
                  <li class="displayInline">
                    <button class="btn btn-xs custBtnPInt btn-success tickettextclear" id="<?php echo $rm_profile1->id;?>" rel1="<?php echo $profile_1;?>" data-toggle="modal" data-target="#myModal_uticket"><?php echo ucfirst($rm_profile1->username);?> Ticket</button>
                  </li>
                  <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary btnviewcontacts" data-toggle="modal" data-target="#myModal_viewcontacts" rel1="<?php echo $profile_1;?>">View Contacts</span></li>
                  <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary btnviewsaform" data-toggle="modal" data-target="#myModal_viewsaform" rel1="<?php echo $profile_1;?>">View SA Form</span></li>
                  <li><img src="<?php echo base_url();?>images/heartblink.gif" width="40" /></li>
                </ul>
              </div>
            </div>
            
            <div class="CPProfileTicketHistoryOuter">
                    	<ul>
                        	<li class="nameMobile"> Mobile: <?php echo $primary_info1['mobile'];?></li>
                  			<li class="nameMobile">Email: <?php echo $primary_info1['email'];?></li>
                        	<li><a href="#" class="btn btn-xs btn-success tickethistory custBtnPInt" id="<?php echo $rm_profile1->id;?>" rel1="<?php echo $profile_1;?>" data-toggle="modal" data-target="#myModal_tickethistory">Ticket History</a></li>
                  <ul class="notes_<?php echo $profile_1;?> CPPIntractionUL">
                    <li><b>Recent Ticket History</b></li>
                    <ul class="innerContent">
                      <?php foreach($rmnotes_1 as $notes){?>
                      <li>
                        <div class="CPPrifileLeftProfileIntractionLeft"><?php echo date('d-m-Y',strtotime($notes->kv_created_date));?> </div>
                        <div class="CPPrifileLeftProfileIntractionDivider">: </div>
                        <div class="CPPrifileLeftProfileIntractionRight"><?php echo base64_decode($notes->kv_rmn_notes);?></div>
                      </li>
                      <?php } ?>
                    </ul>
                  </ul>
                        </ul>
                    </div>
            
          </div>
          
        </div>
        
      </div>
    </div>
    <div class="col-sm-6 2profile">
      <div class="row-fluid">
        <div class="col-sm-12 compareprofile">
          <div class="completeProfileLeftPanWrapper">
            <div class="CPProfileImgNameOuter">
              <div class="CPProfileImg"><img src="<?php echo $profile_pic2[0]['applicationphotopath'];?>" onerror="this.src='<?php echo base_url();?>images/profilepics/noimage.jpg';"></div>
              <div class="CPProfileName"> <?php echo ucfirst($primary_info2['first_name'] . ' ' . $primary_info2['last_name']);?> </div>
              <div class="CPProfileId">(ID:<a href="<?php echo base_url();?>admin/admin_search/viewprofile/<?php echo $profile_2;?>" target="_blank"><?php echo $primary_info2['profile_id'];?></a>)</div>
            </div>
            <div class="CPProfileLefDetailwOuter CPPrifileLeftProfileIntraction">
              <div class="CPProfileLefDetail">
                <ul>
                  <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary btnmarketingticket" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $profile_2;?>">Marketing Ticket</span></li>
                  <li class="displayInline">
                    <button class="btn btn-xs custBtnPInt btn-success tickettextclear" id="<?php echo $rm_profile2->id;?>" rel1="<?php echo $profile_2;?>" data-toggle="modal" data-target="#myModal_uticket"><?php echo ucfirst($rm_profile2->username);?> Ticket</button>
                  </li>
                  <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary btnviewcontacts" data-toggle="modal" data-target="#myModal_viewcontacts" rel1="<?php echo $profile_2;?>">View Contacts</span></li>
                  <li class="displayInline"><span class="btn btn-xs custBtnPInt btn-primary btnviewsaform" data-toggle="modal" data-target="#myModal_viewsaform" rel1="<?php echo $profile_2;?>">View SA Form</span></li>
                  
                 <?php if($prof_intdet->kv_msi_onresstatus=='accepted'){?> <li><img src="<?php echo base_url();?>images/heartblink.gif" width="40" /></li><?php } ?>
                </ul>
              </div>
            </div>
            
            <div class="CPProfileTicketHistoryOuter">
                    	<ul>
                        	<li class="nameMobile"> Mobile: <?php echo $primary_info2['mobile'];?></li>
                  			<li class="nameMobile">Email: <?php echo $primary_info2['email'];?></li>
                        	<li><a href="#" class="btn btn-xs btn-success tickethistory custBtnPInt" id="<?php echo $rm_profile2->id;?>" rel1="<?php echo $profile_2;?>" data-toggle="modal" data-target="#myModal_tickethistory">Ticket History</a></li>
                  <ul class="notes_<?php echo $profile_2;?> CPPIntractionUL">
                    <li><b>Recent Ticket History</b></li>
                    <ul class="innerContent">
                      <?php foreach($rmnotes_2 as $notes){?>
                      
                      <li>
                        <div class="CPPrifileLeftProfileIntractionLeft"><?php echo date('d-m-Y',strtotime($notes->kv_created_date));?> </div>
                        <div class="CPPrifileLeftProfileIntractionDivider">: </div>
                        <div class="CPPrifileLeftProfileIntractionRight"><?php echo base64_decode($notes->kv_rmn_notes);?></div>
                      </li>
                      <?php } ?>
                    </ul>
                  </ul>
                        </ul>
                    </div>
            
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  </div>
  </div>
</div>
<!-- CompleteProfileWrapper End --> 
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>
<div class="modal myModal_uticket" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_uticket">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b class="fs20">Ticket Notes</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body">
        <p>
          <textarea class="txt_desc" name="txt_desc" style="height: 114px;width: 450px;"></textarea>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-xs submitticketnotes">Submit</button>
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

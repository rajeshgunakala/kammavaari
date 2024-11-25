<div class="table-responsive"><table class="table table-bordered table-sm table-striped">
                <thead style="text-align: center; ">
                        <tr>                        
                            <th class="cell11">Profile ID</th>
                            <th class="cell10">Payment type</th>
                            <th class="cell8">Agreed amount</th>
                            <th class="cell8">Paid amount</th>
                            <th class="cell8">Balance</th>
                            <th class="cell5">Allowed contacts</th>
                            <th class="cell5">Used contacts</th>
                            <th class="cell10">Paid date</th>
                            <th class="cell10">Expiry date</th> 
                            <th class="cell7">Entered by</th>
                            <th class="cell18">Comments</th>
                            <th class="cell18">Image</th>

                        </tr>
                    </thead>
                

                <tbody style="text-align: center;">
                <?php foreach($calllog as $res){ $udet=getuserdetbyid($res['user_id']);?>
                                                    <tr>
                                <td class="cell11">
                            <a target="new" href="<?php base_url();?>admin/admin_search/viewprofile/<?php echo $udet->id;?>">
                                <?php echo $udet->profile_id;?></a></td>
                                <td class="cell10">
                                  <?php echo $res['payment_type'];?></td>
                                <td class="cell8">
                                <?php echo $res['agreed_amount'];?></td>
                                <td class="cell8">
                                <?php echo $res['paid_amount'];?></td>
                                <td class="cell8">
                                <?php echo $res['bal_amount'];?></td>
                                <td class="cell5">
                                <?php echo $res['allowed_contacts'];?></td>
                                <td class="cell5">
                                <?php echo $res['used_contacts'];?></td>
                                <td class="cell10">
                                <?php echo $res['paid_date'];?></td> 
                                <td class="cell10">
                                <?php echo $res['expiry_date'];?></td>
                                <td class="cell7">
                                <?php echo getstaffdetbyid($res['entered_by'])->username;?></td>
                                <td class="cell18">
                                <?php echo $res['comments'];?></td>
                                 <td class="cell18">
                                <?php if($res['tbl_image']){?><img data-toggle="modal" data-target="#myModal_<?php echo $res['payment_id'];?>" src="<?php echo base_url();?>images/paymentslips/<?php echo $res['tbl_image'];?>" height="50px" /><?php } else {?>&nbsp;<?php }?></td>
                            </tr>
                            
                            <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_<?php echo $res['payment_id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b class="fs20">Payment Slip</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body mtickethistory">
        <p><img  src="<?php echo base_url();?>images/paymentslips/<?php echo $res['tbl_image'];?>" width="471"/></p>
      </div>
      <div class="modal-footer"> 
        <!--button type="button" class="btn btn-primary">Save changes</button-->
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

                                        <?php } ?>
                    </tbody>    
                
                         
        </table>
</div>
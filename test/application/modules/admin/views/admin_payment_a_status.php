<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>

<script type="text/javascript">
    
    function validation()
    {
       var profileid = document.getElementById('profileid').value;
            
       if(profileid == "")
               {
                   document.getElementById('profileids').innerHTML = "* Please enter Profile ID  ";
                   document.getElementById('profileid').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('profileids').innerHTML = " ";
               }

    }

</script>


        <div class="row new-side-content">                    
            <div class="col-md-12">
                <div class="card" style="border-style: none;background-color: white;">

                        <div class="card-header" style="border-style: none;background-color: white">                      
                            <!-- <button class="submit" style="width:300px; margin-left: 540px;">Payment Information</button> -->
                            <h1 style="text-align: center;font-weight: 700px;font-size: 28px;color:#07A0C3">Payment Information</h1>
                        </div> 
                            
                         

                        <div class="card-body " style="width:80%;margin:auto;padding-top:2px;"> 

                            <hr>

                            <form method="POST" action="<?php echo site_url();?>admin/admin_payment/get_payment_status" onsubmit="return validation()">
                                
                               <div class=" form-group row">
                                    
                                    <div class="col-form-label col-md-2 offset-md-2" style="font-size: 18px;font-weight: 900px">
                                    <label class="text-nowrap" style="padding-left: 15px;color:#07A0C3" class="h5" >
                                        Profile ID :
                                    </label>
                                    </div>                      
                                   

                                    <div class="form-group" style="width: 250px;">                
                                    <input type="text" class="form-control" name="profileid" value=" <?php echo set_value('profileid')?>" id="profileid" style="border-color: #07A0C3">
                                    <span id="profileids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                                    </div>
                                    
                                    <div class="form-group" style="padding-left: 40px;">
                                    <input type="submit" class="submit" value="Submit" name="submit" id="submit" style="color:white;background-color:#07A0C3">
                                    </div>

                                    <div class="form-group" style="padding-left: 10px;">
                                    <button  type="Reset" class=" btn" id="Reset" style="color:#07A0C3;background-color: white">Reset</button>
                                    </div>                   

                                </div> 
                                                                                 
                            </form> 

                            <hr> 


                                <div class="form-group" style="float: right;display:flex;align-items: center;justify-content: center;width: 70%;color:green; padding-left: 200px;font-weight: 900;">

                                 
                                <!--  -->
                                
                                <?php   

                                        foreach($payment_rec as $value)
                                        {

                                        $total_paid_amount=$total_paid_amount+$value['paid_amount'];
                                        $agreed_amount=$agreed_amount+$value['agreed_amount'];
                                            
                                        } 
                                        
                                        if ($agreed_amount<=$total_paid_amount)
                                        {
                                        ?> 
                                         <a href="<?php echo site_url();?>admin/Admin_payment/initial_details_form">  
                                       <!-- <a href="<?php echo site_url();?>admin/Admin_payment/renewal_details_form">  -->  
                                        <?php
                                        if($this->session->userdata("type")== "admin"){
                                        echo 'Click here for Renewal payment!'; 
                                        }
                                        ?></a><?php
                                        }
                                        else
                                        {
                                        ?> 
                                        
                                      <?php /*?>   <a href="<?php echo site_url();?>admin/Admin_payment/renewal_details_form">    
                                        <?php
                                        echo 'Click here for Renewal payment!'; 
                                        ?></a><?php */?>
                                        
                                   
                                        <a href="<?php echo site_url();?>admin/Admin_payment/initial_details_form">    
                                        <?php
                                        if($this->session->userdata("type")== "admin"){
                                        echo 'Click here for Renewal payment!';
                                        }
                                        ?></a>
                                        
                                        <?php /*?><a href="<?php echo site_url();?>admin/Admin_payment/balance_details_form">    
                                        <?php
                                        echo 'Click here for Balance payment!';
                                        ?></a><?php */?><?php
                                        }

                                ?>                                                           
                                       
                                </div>                            
                        </div>
                </div>
            </div>
        </div>

<div class="row new-side-content ">
<div class="   d-flex  justify-content-end align-items-end" >     
   
        


        <table   class="table table-responsive table-bordered ">
                <div class="table100-head">
                    <thead class="py-2 my-2" style="text-align: center; color:#fff;background-color:#07a0c3">
                        <tr class=" ">                        
                            <th  style="padding:19px 0px;">Profile ID</th>
                            <th  style="padding:19px 0px;">Payment Type</th>
                            <th style="padding:19px 0px;">Registration Amount</th>
                            <th style="padding:19px 0px;">Settlement Amount</th>
                            <!--<th>Balance</th>
                            <th class="cell5">Allowed contacts</th>
                            <th class="cell5" style="width:10%">Used Contacts</th>-->
                            <th  style="padding:19px 0px;">Paid Date</th>
                            <th  style="padding:19px 0px;">Expiry Date</th> 
                            <th style="padding:19px 0px;">Entered By</th>
                            <th  style="padding:19px 0px;">Comments</th>
							<th  style="padding:19px 0px;">SA Form</th>
                            <!--<th class="cell5">Edit</th>-->
                           <?php if($this->session->userdata('type')=='admin'){?> <th class="cell5" style="width:10%">Delete</th> <?php } ?>
                        </tr>
                    </thead>
                </div>

                <div class="table100-body" >
                    <tbody style="text-align: center;">
                        <?php 
                            foreach($payment_rec as $value){ ?>
                            <tr class="<?php echo $value['payment_id']."_".$value['user_id'];?>">
                                <td >
                            <a target="_blank" href="<?php echo site_url();?>admin/admin_search/viewprofile/<?php echo $value['user_id'];?>">
                                <?php echo stripcslashes($this->session->userdata('profileid'));?></a></td>
                                <td >
                                  <?php echo stripcslashes($value['payment_type']);?></td>
                                <td>
                                <?php echo stripcslashes($value['agreed_amount']);?></td>
                                <td>
                                <?php echo stripcslashes($value['saamount']);?></td>
                               <?php /*?> <td>
                                <?php echo stripcslashes($value['bal_amount']);?></td>
                                <td class="cell5">
                                <?php
                                if ($value['payment_type']== 'Renewal' OR $value['payment_type']== 'Registration'){ 
                                    echo stripcslashes($value['allowed_contacts']);}?></td>
                                <td class="cell5">
                                <?php 
                                if ($value['payment_type']== 'Renewal' OR $value['payment_type']== 'Registration' ) {
                                   echo stripcslashes($value['used_contacts']);}?></td><?php */?>
                                <td class="cell10">
                                <?php echo stripcslashes(date('d/m/Y',strtotime($value['paid_date'])));?></td> 
                                <td class="cell10">
                                <?php 
                                if ($value['payment_type']== 'renewal' OR $value['payment_type']== 'Registration'){
                                echo stripcslashes(date('d/m/Y',strtotime($value['expiry_date'])));}?></td>
                                <td>
                               <?php echo ucfirst(getstaffdetbyid(stripcslashes($value['entered_by']))->username);?></td>
                                <td >
                                <?php if(!empty($value['comments'])) { echo stripcslashes($value['comments']); } else { echo "NA"; }?></td>
                                
                                <td >
                                <?php if($value['tbl_image']){?><img data-toggle="modal" data-target="#myModal_<?php echo $value['payment_id'];?>" src="<?php echo base_url();?>images/paymentslips/<?php echo $value['tbl_image'];?>" height="50px" /><?php } else {?> NA <?php }?></td>
                               <td class=""><?php if($this->session->userdata('type')=='admin'){?><a class="text-white p-1 bg-primary text-bold border rounded-top" href="<?php echo site_url('admin/Admin_payment/getPaymentUpdateStatus1/'.$value['user_id'].'/'.$value['payment_id']);?>" class="updatepayment" id="<?php echo $value['payment_id'];?>" user_id="<?php echo $value['user_id'];?>">Edit</a><?php } ?>
                             <?php if($this->session->userdata('type')=='admin'){?><a class="text-white text-bold py-1 bg-danger deletepayment" href="javascript:void(0)"  id="<?php echo $value['payment_id']."_".$value['user_id'];?>">Delete</a><?php } ?>
                                </td> 
                            </tr>                            
                            <div class="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="myModal_<?php echo $value['payment_id'];?>">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b class="fs20">Payment Slip</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
      </div>
      <div class="modal-body mtickethistory">
        <p><img  src="<?php echo base_url();?>images/paymentslips/<?php echo $value['tbl_image'];?>" width="471"/></p>
      </div>
      <div class="modal-footer"> 
        <!--button type="button" class="btn btn-primary">Save changes</button-->
        <button type="button" class="btn btn-secondary btn-xs" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
                                        <?php  $i=1;} ?>

                    </tbody>    
                </div>
                         
        </table>
        
        
   
</div>


                                   </div>


      









































           

             

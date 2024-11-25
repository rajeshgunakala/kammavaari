<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" />  
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>  

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>   


<div class="col-md-12">
<div class="row">
<?php $this->load->view('leftpanelstaff');?>
           
             
            <div class="col-md-9 col-xs-12"> 
          
            <div class="form-group">    
               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped" id="the_table">
<thead style="background-color:#fd9f17; color:white;">
  <tr class="th" >
   
    <th width="12%" align="center" valign="middle">Date Requested</th>
    <th width="12%" align="center" valign="middle">Date Recjected</th>
    <th width="7%" align="center" valign="middle">Staff Name</th>
    <th width="15%" align="center" valign="middle">Client name</th>
    <th width="19%" align="center" valign="middle">Client Interest On</th>
   <th width="19%" align="center" valign="middle">Progress</th>
   
  </tr>
  </thead>
  <?php foreach($user_data as $hold){?>
	   
  <tr role="row" class="odd">
 
    <td align="center" valign="middle"><?php echo date('m/d/Y h:i A', strtotime($hold->kv_msi_created_date));  ?></td>
    <td align="center" valign="middle"><?php echo date('m/d/Y h:i A', strtotime($hold->kv_msi_modified_date));  ?></td>
    <td align="center" valign="middle"><strong><?php echo ucfirst($hold->username);?></strong>(<?php echo $hold->phone_no;?>)</td>
    <td align="center" valign="middle"><?php echo ucfirst($hold->clientfname.' '.$hold->clientlname);?></strong>(<?php echo $hold->clientprofileid;?>)</td>
    <td align="center" valign="middle"><?php echo ucfirst($hold->intonclientfname.' '.$hold->intonclientlname);?></strong>(<?php echo $hold->intonclientprofileid;?>)</td>
  <td><select name="sel_bothsideinterest" class="sel_bothsideinterest form-control">
    <option value="">Select</option>
    <option value="consultrm" <?php if($hold->kv_msi_rmstatus=='consultrm'){?>selected="selected"<?php } ?> id="<?php echo $hold->kv_msi_id;?>"><?php echo getlangkeywords('dd_consultrm');?></option>
    <option value="mms" <?php if($hold->kv_msi_rmstatus=='mms'){?>selected="selected"<?php } ?> id="<?php echo $hold->kv_msi_id;?>"><?php echo getlangkeywords('dd_mms');?></option>
    <option value="open" <?php if($hold->kv_msi_rmstatus=='open'){?>selected="selected"<?php } ?> id="<?php echo $hold->kv_msi_id;?>"><?php echo getlangkeywords('dd_open');?></option>
    
    </select></td>
  </tr>
 <?php //}
  }?>
</table>
            </div>
       
 </div>
 </div>
 </div>
<script>
    $(document).ready(function() {  
      $('#the_table').DataTable({
					"aaSorting": []});
      
    } );  
  </script>


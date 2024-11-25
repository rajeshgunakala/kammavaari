<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" />  
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>  

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>   


<div class="col-md-12 top20">
<div class="row">
<div class="new-side-content">

           
             
            <div class="col-md-9 col-xs-12"> 
                    <h3 style="text-align:center;"> Marketing Ticket Exp Within 2 days</h3>

            <div class="form-group"  style="margin-top:30px;">    
               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped" id="the_table">
<thead style="background-color:#fd9f17; color:white;">
  <tr class="th" >
   
    <th width="12%" align="center" valign="middle">Register Date</th>
    <th width="12%" align="center" valign="middle">Reminder Date</th>
    <th width="7%" align="center" valign="middle">Name</th>
    <th width="7%" align="center" valign="middle">Mobile</th>
     <th width="7%" align="center" valign="middle">View Details</th>
   
   
  </tr>
  </thead>
  <?php foreach($user_data as $hold){?>
	   
  <tr role="row" class="odd ">
 
    <td align="center" valign="middle"><?php echo date('m/d/Y h:i A', strtotime($hold->registered_on));  ?></td>
     <td align="center" valign="middle"><?php echo date('m/d/Y h:i A', strtotime($hold->rem_date));  ?></td>
    <td align="center" valign="middle"><?php echo ucfirst($hold->first_name.' '.$hold->last_name);?></strong>(<strong><?php echo $hold->profile_id;?></strong>)</td>
  <td align="center" valign="middle"><?php echo $hold->mobile;?></td>
  <td align="center" valign="middle"><a href="<?php echo base_url();?>admin/call_history?userid=<?php echo $hold->id;?>">View</a></td>
  
  </tr>
 <?php //}
  }?>
</table>
            </div>
       
 </div>
 </div>
 </div></div>
<script>
    $(document).ready(function() {  
      $('#the_table').DataTable({
					"aaSorting": []});
      
    } );  
  </script>


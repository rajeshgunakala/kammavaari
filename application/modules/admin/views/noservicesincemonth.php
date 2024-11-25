<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" />  
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>  

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>   


<div class="col-md-12 top20">
<div class="row">

<div class="new-side-content">
             
            <div class="col-md-9 col-xs-12" style="margin-top:100px;"> 
          
            <div class="form-group pull-left">    
               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped" id="the_table">
<thead>
  <tr class="th" >
   
    <th width="200px" align="center" valign="middle">Register Date</th>
    <th width="200px" align="center" valign="middle">Last Call Date</th>
    <th width="200px" align="center" valign="middle">Name</th>
    <th width="200px" align="center" valign="middle">Mobile</th>
   
   
  </tr>
  </thead>
  <?php foreach($user_data as $hold){ 
  //print_r($hold); exit;
  ?>
	   
  <tr role="row" class="odd ">
 
    <td align="center" valign="middle"><?php echo date('m/d/Y h:i A', strtotime($hold['registered_on']));  ?></td>
     <td align="center" valign="middle"><?php echo date('m/d/Y h:i A', strtotime($hold['last_call_updated']));  ?></td>
    <td align="center" valign="middle"><?php echo ucfirst($hold['first_name']." ".$hold['last_name']);?></strong>(<strong><?php echo $hold['profile_id'];?></strong>)</td>
  <td align="center" valign="middle"><?php echo $hold['mobile'];?></td>
  
  </tr>
 <?php //}
  }?>
</table>
            </div>
       
 </div>
 </div></div>
 </div>
<script>
    $(document).ready(function() {  
      $('#the_table').DataTable({
					"aaSorting": []});
      
    } );  
  </script>


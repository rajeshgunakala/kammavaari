<link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.dataTables.min.css" />  
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.12.3.js"></script>  

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.dataTables.min.js"></script>   


<div class="col-md-12 top20">
<div class="row">
<?php $this->load->view('leftpanelstaff');?>
           
             
            <div class="col-md-9 col-xs-12"> 
          
            <div class="form-group">    
               <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped" id="the_table">
<thead style="background-color:#fd9f17; color:white;">
  <tr class="th" >
   
    <th width="12%" align="center" valign="middle">Date Requested</th>
    <th width="7%" align="center" valign="middle">Staff Name</th>
    <th width="15%" align="center" valign="middle">Client name</th>
    <th width="7%" align="center" valign="middle">Opposite Side Staff Name</th>
    <th width="19%" align="center" valign="middle">Client Interest On</th>
   
   
   
  </tr>
  </thead>
  <?php foreach($user_data as $hold){?>
	   
  <tr role="row" class="odd">
 
    <td align="center" valign="middle"><?php echo date('d/m/Y h:i A', strtotime($hold->kv_profileview_created_date));  ?></td>
    <td align="center" valign="middle"><strong><?php echo ucfirst($hold->fromstaffname);?></strong>(<?php echo $hold->sfromphone;?>)</td>
    <td align="center" valign="middle"><?php echo ucfirst($hold->fromname);?></strong>(<a href="<?php echo base_url();?>/admin/admin_search/viewprofile/<?php echo $hold->fromid;?>" target="new"><?php echo $hold->fromprofileid;?></a>)</td>
     <td align="center" valign="middle"><strong><?php echo ucfirst($hold->tostaffname);?></strong>(<?php echo $hold->stophone;?>)</td>
    <td align="center" valign="middle"><?php echo ucfirst($hold->toname);?></strong>(<a href="<?php echo base_url();?>/admin/admin_search/viewprofile/<?php echo $hold->toid;?>" target="new"><?php echo $hold->toprofileid;?></a>)</td>
   
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


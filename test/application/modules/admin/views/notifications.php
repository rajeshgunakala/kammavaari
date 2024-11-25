<style>
  .wrap-table100-new {
    max-width: 100%;
    overflow-x: auto;
}
select#profile_search,input#search {
    display: inline-block;
    width: 100%;
    border: 1px solid #e43659;
    padding: 5px;
    margin: 10px 0;
    border-radius: 3px;
    max-width: 210px;
}
.newsubmit{
  border: 1px solid #e43659;
    background: #e43659;
    width: 125px;
    color: #fff;
    padding: 8px 0;
    border-radius: 3px;
    transition: 0.5s all;
}
input.newsubmit:hover {
    background: transparent;
    color: #e43659;
    transition: 0.5s all;
}
</style>


<div class="new-side-content">
<div class="page-content">
	<div class="container-fluid">
		 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"> Recently Logged In Customers</h4>
										
										 <table id="rm_profile_list" class="table dt-responsive nowrap table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>S No.</th>
											<th>Profile ID</th>
											<th>Name</th>
											<th>status</th>
											<th>Login Time</th>
                                            
                                        </tr>
 </thead>  
 <tbody>  
				<?php
		//echo "<pre>";print_r($notifications);exit;	
		foreach ($notifications["total_records"] as $value) {	?>
              <tr>
                <td><?php echo ++$slno ?></td>
                <td> <a class="badge badge-success" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                 <td><?php echo stripcslashes($value['last_name']).' '.stripcslashes($value['first_name']); ?></td>
               <td><?php if($value['status'] == 0)
				{	?>
		<button class="btn_read btn-outline btn-warning" value="<?php echo $value['notification_id']; ?>" >Read </button>
				<?php } else { echo "Already Read"; }?>	</td> 
				<td><?php echo $value["login_date_time"]; ?></td>
              </tr>
              <?php } ?>
                                   
                                                 
                                    </tbody>
                                </table>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
	</div>
</div>
                </div>

<script type="text/javascript">
function activateProfile(id) {
	var confirmmessage="Would you like to activate profile?";
	var successalert="Profile activated successfully";	
	if (confirm(confirmmessage)) {
		$.ajax({
		  url: "<?php echo base_url();?>admin/Admin_ap/activateProfile",
		  type: "POST",
		  data: {'id':id},
		  success: function(data)
		  {
			alert(successalert);  
			 location.reload(); 
		  }
				
		});
	} 
}
$(document).ready(function() {
    $('#rm_profile_list').DataTable();
} );
   $('body').on('click','.btn_read',function(event){
                        var notification_id = $(this).val();//stafflist
                     					
                        $.ajax({
                            type: "POST",	
                            url: "<?php echo base_url(); ?>admin/Admin_ap/update_login_notification", 
                            dataType: 'json',
                            data:{
                                notification_id:notification_id
                            },
                            success: function(result){
							console.log("status--"+result.success);

                                if(result.success == "1")
                                {

                                    //showSuccessAlert("Profile assigned successfully");
									alert("Notifaction Read successfully");	
                                    console.log("success update profile owner");
								location.reload(); 
                                }else{
                                    console.log("error in read notification");
									alert("error in read notification");	
                                }
                            },
                            error: function(xhr, error){
                                console.log("error in read notification");
                                alert("error in read notification");	
                            }
                        });

                    });
             
</script>

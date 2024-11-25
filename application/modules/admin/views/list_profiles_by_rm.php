<div class="new-side-content">
<div class="page-content">
	<div class="container-fluid">
		 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                        <h4 class="card-title"><?php echo $profile_details["profileOwner"]["username"]?> Profiles (<?php echo $tot_rec; ?>)</h4>
										<h4 class="card-title"> Paid Profiles (<?php echo $paid_count; ?>)</h4>
										<h4 class="card-title"> Unpaid Profiles (<?php echo $unpaid_count; ?>)</h4>
                                       </div>
										 <table id="rm_profile_list" class="table dt-responsive nowrap table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>S No.</th>
											<th>Profile ID</th>
											<th>Name</th>
											<th>Payment Status</th>
											<th>Property Value</th>
											<th>Country</th>
											<th>RM List</th>
                                            
                                        </tr>
 </thead>  
 <tbody>  
				<?php
//echo "<pre>";print_r($rm_profiles);exit;	
		foreach ($profile_details["profiles"] as $value) {	?>
              <tr>
                <td><?php echo ++$slno ?></td>
                <td><?php if ($value["payment_status"] == 1) { ?>
                  <a class="badge badge-success" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } else { ?>
                  <a class="badge badge-danger" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } ?>
                  
                  <td><?php echo stripcslashes($value['last_name']).' '.stripcslashes($value['first_name']); ?></td>
                <td><?php echo ($value["payment_status"] == 1)?'Done':'Unpaid';?> </td>
                <td><?php echo ucfirst(stripcslashes($value['property_value'])); ?></td>
                <td><?php echo stripcslashes($value['living_in']); ?></td>
                <td class="d-flex"><select class="stafflist mr-1"><?php foreach($rm_profiles["rmdata"] as $rm) { ?>
					<option value="<?php echo $rm["id"]; ?>" <?php if($rm['username']==$profile_details["profileOwner"]["username"])
                      { echo "selected"; } ?> ><?php echo stripcslashes($rm['username']); ?></option>
				<?php } ?></select>
				<button class="btn_assign btn-outline btn-warning" value="<?php echo $value['id']; ?>" >Assign </button>
				</td>                
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
</div></div>

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
   $('body').on('click','.btn_assign',function(event){
                        var user_profile_id = $(this).val();//stafflist
                        var employee_id = $(this).parent().parent().find(".stafflist").children(":selected").val();
                      // console.log(employee_id); exit;
						if(employee_id == "0")
						{
							alert("Please select Profile Owner.");
							return false;
						}
						
                        $.ajax({
                            type: "POST",	
                            url: "<?php echo base_url(); ?>admin/ws/update_profile_owner", 
                            dataType: 'json',
                            data:{
                                cust_id:user_profile_id,
                                emp_id: employee_id
                            },
                            success: function(result){
				console.log("status--"+result.success);

                                if(result.success == "1")
                                {

                                    //showSuccessAlert("Profile assigned successfully");
									alert("Profile assigned successfully");	
                                    console.log("success update profile owner");
								location.reload(); 
                                }else{
                                    console.log("error update profile owner");
									alert("Problem in profile assigning");	
                                }
                            },
                            error: function(xhr, error){
                                console.log("error update profile owner");
                                alert("Problem in profile assigning");	
                            }
                        });

                    });
             
</script>

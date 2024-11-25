<div class="page-content  new-side-content">
	<div class="container-fluid">
		 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title" style="color: #07A0C3"> Total Profiles (<?php echo count($profile_details); ?>)</h4>
										<form method="post" class="" action="<?php echo site_url()?>/admin/export_csv">
									 <input type="date" id="from_date" name="from_date">	
									 <input type="date" id="to_date" name="to_date">	
 <input type="submit" value="Export to Excel" class="pull-right btn btn-large" style="margin-right:40px; background-color: #07A0C3; color: white;"><i class="fa fa-file-excel-o"></i>
 <h2>Register list</h2>
 </form> 
 </div>

     <!-- Export button -->
										 <table id="rm_profile_list" class="table dt-responsive nowrap table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="background-color: #07A0C3; border-color: #07A0C3">S No.</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">Profile ID</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">Name</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">mobile</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">Living In</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">Rm Name</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">Created By</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">Register BY</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3">RegisterDate</th>
                                            
                                        </tr>
 </thead>  
 <tbody>  
				<?php
//echo "<pre>";print_r($rm_profiles);exit;	
		foreach ($profile_details as $value) {	?>
              <tr>
                <td><?php echo ++$slno ?></td>
                <td>
                  <a target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a></td>
                  <td><?php echo stripcslashes($value['last_name']).' '.stripcslashes($value['first_name']); ?></td>
                <td><?php echo $value['mobile'];?> </td>
                <td><?php echo $value['living_in'];?> </td>
                <td><?php if($value['username']==''){echo "Not assigned"; }else{echo ucfirst(stripcslashes($value['username']));} ?></td>
                <td><?php echo $value['created_by']; ?></td>
                <td><?php echo !empty($value['username']) ? $value['username'] : "online"; ?></td>
                <td><?php echo $value['registered_on']; ?>
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
</div>

<script type="text/javascript">
   

</script>

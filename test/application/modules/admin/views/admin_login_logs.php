<div class="page-content">
	<div class="container-fluid">
		 <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title"> Admin Login History</h4>
											<form method="post" action="<?php echo site_url()?>/admin/admin_login_logs_csv">
									 <input type="date" id="from_date" name="from_date">	
									 <input type="date" id="to_date" name="to_date">	
 <input type="submit" value="Export to Excel" class="pull-right btn btn-warning btn-large" style="margin-right:40px"><i class="fa fa-file-excel-o"></i>
 </form> 
										 <table id="rm_profile_list" class="table dt-responsive nowrap table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>S No.</th>
											<th>Admin Name</th>
											<th>Location</th>
											<th>Login Time</th>
                                            <th>Logout Time</th>
                                        </tr>
 </thead>  
 <tbody>  
				<?php
		//echo "<pre>";print_r($notifications);exit;
		foreach ($admin_notifications as $value) {	?>
              <tr>
                <td><?php echo ++$slno ?></td>
                <td> <?php echo stripcslashes($value['admin_name']); ?></td>
               <td><?php echo $value["city"]; ?></td> 
				<td><?php echo $value["login_date_time"]; ?></td>
				<td><?php echo $value["logout_date_time"]; ?></td>
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

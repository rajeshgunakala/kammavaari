
<style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
}

.content {
    margin-top: 2%;
}
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css"> -->

<div class="new-side-content">
<div class="page-content" >
	<div class="container-fluid" >
		 <div class="row">
    
                            <div class="col-12">
                                
                                <div class="card">
                                    
                                    <div class="card-body ">
                                    <form type="get" name="inactive_search" class="row">
                                    <h2 class="card-title col-3 text-center">Prime Profiles</h2>
			
        <?php if($this->session->userdata('type') == 'admin'){ ?>

        <div style="float:left; margin-right:1vw; col-6">
    <div class="form-group form-inline">  
        <select name="rm_names" id="rm_names" class="form-control" style="border-color: #07A0C3; color: #07A0C3">
            <option value="" selected="selected">Select All</option>
            <?php
            foreach ($rm_names as $option) {          
              echo "<option value='{$option['id']}' $selected>{$option['username']}</option>";
            }
            ?>

        </select>

    </div>
</div>
<div style="float:left;">
					<div class="form-group form-inline">
						<button class="form-group form-control btn " id="search_prof_emp"style="background-color: #07A0C3; color: white"> Search </button>
					</div>
				</div>
			</div>

<?php  }  ?>

      
			
			</form>
                                       
										 <table id="example" class="table dt-responsive nowrap table-striped" >
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Profile ID</th>
                                            <th>Name</th>
                                            <th>Payment Status</th>
                                            <th>Gender</th>
                                           
                                            <th>Profile Type</th>
                                            <th>Owner</th>
                                            <!-- <th>Assigning Date</th> -->
                                        
                                            
                                        </tr>
 </thead>  
 <tbody>  
					<?php foreach($prime as $profile) { ?>
										<tr>
											<td> <a  class="<?Php if($profile['payment_status']=='1'){echo 'badge badge-success'; }else{echo 'badge badge-danger';} ?>" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $profile['ms_id']; ?>"><?Php echo $profile["profile_id"]; ?></td>
											<td> <?Php echo $profile["first_name"].' '.$profile["last_name"]; ?></td>
                                            <td><?php if($profile['payment_status']=='1'){echo "Paid"; }else{ echo "unpaid";}?></td>
											<td> <?Php echo $profile["gender"]; ?></td>
											<td> <?Php echo $profile["ms_usertype"]; ?></td>
											<td> <?Php  echo $profile['username']?></td>
										
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>


<script>
jQuery(document).ready(function($) {
    $('#example').DataTable({
        // dom: 'Bfrtip'
    
    });
});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.css">
<style type="text/css">
.bxslider img {
    width: 70px !important;
    height: 80px !important;
    border-radius: 8px;
    border: 2px solid #ccc;
}
.badge{font-size: 13px;}
.pagination-sec{}
.pagination-sec .pagination{margin: 0 auto 11px; width: auto; float: right;}
.pagination-sec .pg-blue{background: #3281f2; color: #fff;}
.pagination-sec .page-link{margin: 0 3px;}
.m-t-10{margin-top:10px;}
</style>
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
                                        <h4 class="card-title" style="color: #07A0C3"> Logged In Customers</h4>
										<div class="pagination-sec"><?php echo $this->pagination->create_links(); ?></div>
										 <table id="rm_profile_list" class="table dt-responsive nowrap table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="background-color: #07A0C3; border-color: #07A0C3;">S No.</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3;">Profile ID</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3;">Name</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3;">Photo</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3;">Login Time</th>
											<th style="background-color: #07A0C3; border-color: #07A0C3;">Online Status</th>
                                            
                                        </tr>
 </thead>  
 <tbody>  
				<?php
		//echo "<pre>";print_r($notifications);exit;	
		$slno = $this->uri->segment(3, 0);
		foreach ($notifications["total_records"] as $value) {
        $online_status = Admin_ap::getTimeago(strtotime($value["last_activity"]));		
			?>
              <tr>
                <td><?php echo ++$slno ?></td>
                <!-- <td> <a class="badge badge-success" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> -->

                <td style="color: <?php echo is_null($value['payment_id']) ? 'red' : 'green'; ?>">
    <?php echo stripcslashes($value['profile_id']); ?>
</td>

                 <td><?php echo stripcslashes($value['last_name']).' '.stripcslashes($value['first_name']); ?></td>
               <td>
			   <ul class="bxslider">
				   <!--<img src="<?php echo site_url(); ?>images/profilepics/<?php echo $value['MS_id'].'/'.$value['photoname'] ?>" class="profil-img">-->
				   
				   <?php
           $imagePath = site_url() . "images/profilepics/" . $value['MS_id'] . "/" . $value['photoname'];
        
        // Define gender-specific placeholders
        $malePlaceholder = site_url() . "images/placeholder1.jpg";
        $femalePlaceholder = site_url() . "images/placeholder2.jpg";
        
        // Determine which placeholder to use based on gender
        $placeholder = ($value['gender'] == 'male') ? $malePlaceholder : $femalePlaceholder;
?>

<img src="<?php echo $imagePath; ?>" 
     class="profil-img" 
     onerror="this.onerror=null; this.src='<?php echo $placeholder; ?>';" 
     alt="Profile Image">
     
			   </ul>
			   </td>
				<td><?php echo date("d-m-Y h:i A", strtotime($value["last_activity"])); ?></td>
				<td><?php echo $online_status; ?></td>
              </tr>
              <?php } ?>
                                   
                                                 
                                    </tbody>
                                </table>
								
								<div class="pagination-sec m-t-10"><?php echo $this->pagination->create_links(); ?></div>
                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
	</div>
</div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
      setTimeout(function () {
        //alert('Reloading Page');
        location.reload(true);
      }, 300000);
    });
  </script>
  <style>
    @media(min-width:767px){
      .pagination-sec {
          position: absolute;
          right: 5px;
          top: 5px;
          margin: 0 !important;
      }
    }
  </style>

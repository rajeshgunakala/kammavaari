<style>
.row {
	margin-bottom: 5px;
	font-size: 1vw;
}
</style>
<div class="new-side-content">   

<div class="row">
  <div class="col-md-12">
    <div class="card" style="border-style: none;background-color: white">
      <div class="card-header" style="border-style: none;background-color: white;    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;" >
        <button href="#display_form" class="btn" data-toggle="collapse">Inactive/Deleted/Settled Profiles</button>
        <h5 style="text-align: center;font-size:22px;text-decoration: underline; color: #F97832"> Profiles Found : <?php echo $tot_rec; ?></h5>
      </div>
    </div>
  </div>
</div>
<div style="">
  <!-- <h5 style="text-align: center;font-size:22px;text-decoration: underline;"><?php echo $tot_rec; ?> profiles found</h5> -->
</div>

<div class="limiter">
  <div class="container-table100">
	  <form type="get" name="inactive_search">
	  <div style="">
				<!-- <div style="float:left; margin-right:1vw;" class="<?php if($this->session->userdata('type')=='staff') echo 'dn';?>">
					<div class="form-group form-inline">
						<label class="form-group">Employee:</label>
						<select class="form-group form-control" id="emp_drop_down"> </select>
					</div>
				</div> -->
				<div style="float:left; margin-right:1vw;">
					<div class="form-group form-inline">
						<label class="form-group pr-10" style="color: #07A0C3">Profile Id: </label>
						<input type="text" name="profile_id" id="profile_id" class="form-group form-control" style="border-color: #07A0C3;" value="<?php echo $this->input->get("profile_id"); ?>"  style="width:100px;" >
					</div>
				</div>
				<div style="float:left; margin-right:1vw;">
					<div class="form-group form-inline">
						<label class="form-group pr-10" style="color: #07A0C3">Surname: </label>
						<input type="text" name="surname" id="surname" style="border-color: #07A0C3;" value="<?php echo $this->input->get("surname"); ?>" class="form-group form-control" >
					</div>
				</div>
				<div style="float:left; margin-right:1vw;">
					<div class="form-group form-inline">
						<label class="form-group pr-10" style="color: #07A0C3">Name: </label>
						<input type="text" name="firstname" id="firstname" style="border-color: #07A0C3;" value="<?php echo $this->input->get("firstname"); ?>" class="form-group form-control" >
					</div>
				</div>
				<div style="float:left; margin-right:1vw;">
					<div class="form-group form-inline">
				<select name="app_status" id="app_status" class="form-control" style="color: #07A0C3; border-color: #07A0C3;">
                                   <option value="" selected="selected">Select All</option>
                                    <option value="2" <?php if($this->input->get("app_status") == 2){ echo "selected";}?>>Deleted</option>
                                    <option value="3" <?php if($this->input->get("app_status") == 3){ echo "selected";}?>>Settled</option>
                                    <option value="4" <?php if($this->input->get("app_status") == 4){ echo "selected";}?>>Inactive</option>
                                </select>
								</div>
				</div>
				<div style="float:left;">
					<div class="form-group form-inline">
						<button class="form-group form-control btn " id="search_prof_emp" style="border-color: #07A0C3; color: #07A0C3;"> Search </button> &nbsp;<a href="<?php echo base_url()."admin/list_inactivate_profiles" ?>" class="form-group form-control btn btn-info" id="search_prof_emp"> Reset </a>
					</div>
				</div>
        <div style="float:left;margin-left:1vw;">
          <div class="form-group form-inline">
            <a href="#" id="excel-export" class="btn btn-primary">Excel</a>
          </div>
        </div>


			</div>
			</form>

      <?php  $val =  $this->session->userdata("Settled"); 
      ?>

      
			
    <div class="wrap-table100">
      <div class="table100"> <?php echo $this->pagination->create_links(); ?>
        <table>
          <div class="table100-head">
            <thead style="text-align: left;">
              <tr>
              
                <th class="cell6" style="width:1%">S No.</th>
                <?php if($val == '1'){ ?>
                <th class="cell8" style="width:5%">Action</th>
                <th class="cell18" style="width:5%">Profile ID</th>
                <th class="cell10" style="width:5%">Surname</th>
                <th class="cell20" style="width:15%">Name</th>
                <th class="cell5" style="width:5%">Activate Date</th>
                <th class="cell5" style="width:10%">Reason</th>
                <th class="cell17" style="width:10%">Reminder Before</th>
                <?php  }  ?>
                <?php  if($val == '3'){ ?>
                <th class="cell5" style="width:10%">Bride Profile ID</th>
                <th class="cell5" style="width:10%">Groom Profile ID</th>
                <th class="cell5" style="width:10%">Engagement Date</th>
                <th class="cell5" style="width:10%">Marriage Date</th>
                <th class="cell5" style="width:10%">Narration</th>
                  <?php  } ?>
              </tr>
            </thead>
            <?php  if($val == '1'){ ?>
            <tbody style="text-align: left;">
              <?php $slno = $this->uri->segment(3, 0);
                                   foreach ($sub_rec as $value) {	?>
              <tr>
                <td style="width:1%; text-align:center; border-color: #F97832;" class="cell5"><?php echo ++$slno ?></td>
                <td class="cell4" style="width:5%; border-color: #F97832;"><a href="javascript:void(0)" onclick="activateProfile(<?php echo $value['id']; ?>)"><button class="btn btn-warning fs12">Activate</button></a></td>
                <td class="cell12" style="width:10%;color:#00818e; border-color: #F97832;"><?php if ($value["payment_status"] == "paid") {  ?>
                  <a style="color:#1bb73f;font-weight: 600;color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } else { ?>
                  <a style="color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } ?>
                  
                  <td class="cell10" style="width:5%; border-color: #F97832;"><?php echo stripcslashes($value['last_name']); ?></td>
                <td class="cell20" style="width:15%; border-color: #F97832;"><span class="<?php echo $vipconfi;?>"></span><?php echo stripcslashes($value['first_name']); ?></td>
                <td class="cell5" style="width:5%; border-color: #F97832;"><?php echo ucfirst(stripcslashes($value['activate_date'])); ?></td>
                <td class="cell5" style="width:10%; border-color: #F97832;"><?php echo stripcslashes($value['inactive_reason']); ?></td>
                <td class="cell17" style="width:10%; border-color: #F97832;"><?php echo stripcslashes($value['before_remind']); ?></td>                
              </tr>
              <?php } ?>


            </tbody>
            <?php }else if ($val == '3'){ ?>
              <tbody style="text-align: center;">
              <?php $slno = $this->uri->segment(3, 0);
                                   foreach ($sub_rec as $value) {	?>
              <tr>
                <td style="width:1%; text-align:center; border-color: #F97832;" class="cell5"><?php echo ++$slno ?></td>
              <td class="cell10" style="width:5%; border-color: #F97832;">    <?php echo htmlspecialchars($value['first_name_t'] . ' ' . $value['last_name_t'], ENT_QUOTES, 'UTF-8'); ?><br>
    <?php echo htmlspecialchars($value['profile_id_t'], ENT_QUOTES, 'UTF-8'); ?>
              <td class="cell10" style="width:5%; border-color: #F97832;"> <?php echo htmlspecialchars($value['first_name_tt'] . ' ' . $value['last_name_tt'], ENT_QUOTES, 'UTF-8'); ?><br>
    <?php echo htmlspecialchars($value['profile_id_tt'], ENT_QUOTES, 'UTF-8'); ?>
              <td class="cell10" style="width:5%; border-color: #F97832;"><?php echo stripcslashes($value['e_date']); ?></td>
              <td class="cell10" style="width:5%; border-color: #F97832;"><?php echo stripcslashes($value['marriage_date']); ?></td>
              <td class="cell10" style="width:5%; border-color: #F97832;"><?php echo stripcslashes($value['Narration']); ?></td>




                
              </tr>
              <?php } ?>

              
            </tbody>

              <?php  } ?>
            
          </div>
        </table>
      </div>
    </div>
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
</script>
<script>

const excel = document.querySelector('#excel-export');
excel.addEventListener('click', (e) => {
    e.preventDefault();
       const status = encodeURIComponent(document.querySelector('#app_status').value);
       const name = encodeURIComponent(document.querySelector('#firstname').value);
       const initial_name = encodeURIComponent(document.querySelector('#surname').value);
       const profile_id = encodeURIComponent(document.querySelector('#profile_id').value);


    const params = `?status=${status}&name=${name}&initial_name=${initial_name}&profile_id=${profile_id}`;
    const URL = '<?php echo base_url() . 'admin/Admin_ap/export_report/' ?>' + params;
    window.open(URL, '_blank');
});

</script>
<style>
  a#excel-export {
    background-color: #1a7243 !important;
    border-color: #1a7243 !important;
    color: #fff;
    transition: 0.5s all;
}

a#excel-export:hover {
    background-color: #25a560 !important;
    border-color: #1a7243 !important;
    color: #fff;
    transition: 0.5s all;
}
  @media (min-width: 576px){
.form-inline .form-control {
    max-width: 170px;
}  
}  
</style>
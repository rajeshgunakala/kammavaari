

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">



<!-- <style>

table {
    width: 95%;
}
.new-side-conten {
    margin-left: 250px;
}
th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #e0e0e0;
}

/* Add this to your CSS file or style section in the HTML */
.small-green-btn {
    padding: 5px 8px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:8px;
}


  .row {
    margin-bottom: 5px;
    font-size: 1vw;
  }
</style> -->


<div class="new-side-content">


<?php if ($disp == "grid") {
?>

  <div class="row">
    <div class="col-md-12">
      <div class="card" style="border-style: none;background-color: white">
        <div class="card-header" style="border-style: none;background-color: white">
<h1>My Profiles</h1>
        </div>
      </div>
    </div>
  </div>
  

  <div class="limiter mt-3">
    <div class="">
      <div class="wrap-table100-new">

      <form type="get" name="inactive_search">
				<div style="float:left; margin-right:1vw;">
					<div class="form-group form-inline">
          <b style="text-align: center;font-size:22px;text-decoration: underline; color: #F97832" class="mx-2"> profiles found :- <?php echo $tot_rec; ?></b>
				<select name="app_status" id="app_status" class="form-control" style="border-color: #07A0C3; color: #07A0C3">
                                   <option value="" selected="selected">Select All</option>
                                    <option value="paid" <?php if($this->input->get("app_status") == "paid"){ echo "selected";}?>>paid</option>
                                    <option value="free" <?php if($this->input->get("app_status") == "free"){ echo "selected";}?>>free</option>
                                   
                                  </select>
                                  
			                  	<select name="app_status_bride" id="app_status_bride" class="form-control" style="border-color: #07A0C3; color: #07A0C3">
                                   <option value="" selected="selected">Select All</option>
                                   
                                    <option value="female" <?php if($this->input->get("app_status_bride") == "female"){ echo "selected";}?>>female</option>
                                    <option value="male" <?php if($this->input->get("app_status_bride") == "male"){ echo "selected";}?>>male</option>
                                  </select>
								</div>
				</div>
        <?php if($this->session->userdata('type') == 'admin'){ ?>

        <div style="float:left; margin-right:1vw;">
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

<?php  }  ?>

        <div style="float:left; margin-right:1vw;">
					<div class="form-group form-inline">
						<label class="form-group pr-10"> </label>
						<input type="search" name="search" id="search" style="border-color: #07A0C3; color: #07A0C3" value="<?php echo $this->input->get("search"); ?> " class="form-group form-control" >
					</div>
				</div>
				<div style="float:left;">
					<div class="form-group form-inline">
						<button class="form-group form-control btn " id="search_prof_emp"style="background-color: #07A0C3; color: white"> Search </button>
					</div>
				</div>
			</div>
			</form>




        
        <!-- <div class=""> <?php echo $this->pagination->create_links(); ?> -->
          <table id="users">
            <div class="">
              <thead style="text-align: left;">
                <tr>
                  <th  >S No.</th>
                
                  <th  >Profile ID</th>
                 
                  <th  >Name</th>
                 
                  <!-- <th  >Height</th> -->
               
                  <th >Gender</th>
                  <!-- <th  >Education</th> -->
                  <th >Property Value</th>
                  <th  >Profession</th>
                  <th  >User type</th>
                
                </tr>
              </thead>
              <tbody style="text-align: left;">
                <?php $slno = $this->uri->segment(4, 0);
                foreach ($sub_rec as $value) {
                  // print_r($value);die;
                  $vipconfi = '';
                  if ($value['ms_usertype'] == 'confidential') {
                    $vipconfi = 'premium';
                  }
                  if ($value['ms_usertype'] == 'elite') {
                    $vipconfi = 'elite';
                  }
                ?>
                  <tr>
                    <td style="width:1%; text-align:center;" class="cell5"><?php echo ++$slno ?></a></td>
                  
                 
                  
                    <td >
                    <?php if ($value["payment_status"] == "paid") {  ?>
                    ( <a  target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> )
                  <?php } else { ?>
                    <a  target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> 
                   <?php } ?></td>

                     
                        <td >
                        <span class="<?php echo $vipconfi; ?>"></span>
                        <?php echo stripcslashes($value['first_name'] . ' ' . $value['last_name']); ?>
                        </td>
                 
                    <!-- <td  ><?php echo stripcslashes($value['height']); ?></td> -->
                    
                    <td  ><?php echo ucfirst(stripcslashes($value['gender'])); ?></td>
                    <td  ><?php echo ucfirst(stripcslashes($value['property_value'])); ?></td>
                    <!-- <td  ><?php echo stripcslashes($value['education_degree']); ?></td> -->
                    <td  ><?php echo stripcslashes($value['occupation']); ?></td>
                    <td  ><?php echo stripcslashes($value['ms_usertype']); ?></td>
                  </tr>
                <?php } ?>
              </tbody>
            </div>
          </table>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<?php  $type = $this->session->userdata("type"); ?>
<script>
jQuery(document).ready(function($) {
    var userType = '<?php echo $type; ?>';

    if (userType === 'admin') {
        $('#users').DataTable({
          dom: 'Bfrtip',
            buttons: [
                'excel', 'pdf'
            ]
        });
    } else {
        $('#users').DataTable({
            //dom: 'rtip' // Initialize DataTable without buttons for non-admin users
            dom: 'Bfrtip',
            buttons: [
                'excel'
            ]
        });
    }
});
</script>


  <?php $slno = $this->uri->segment(4, 0);
  foreach ($sub_rec as $value) { ?>
    <div class="sliderPop_wicon_<?php echo $value['id']; ?>" style="display:none;">
      <div class="ct-sliderPop-container">
        <div class="ct-sliderPop ct-sliderPop-slide1 open">
          <div class="inner">
            <!-- <a href='<?php echo site_url(); ?>images/profilepics/990/image_1.jpeg'>
                            <img src="<?php echo site_url(); ?>images/profilepics/990/image_1.jpeg" class="profil-img"></a> -->
            <?php if ($value["applicationphotopath"] != '') { ?>
              <!-- <img src="http://kammavaari.com/images/profilepics/<?php echo $value['MS_id']; ?>/image_1.jpeg" width="250px" height="250px" class="profil-img"> -->
              <img src="<?php echo $value["applicationphotopath"]; ?>" width="250px" height="250px" class="profil-img">
            <?php } else { ?>
              <img src="http://kammavaari.com/images/profilepics/noimage.jpg" width="250px" height="250px" class="profil-img">
            <?php } ?>
            <br>
            <div class="row" style="margin-left:170px;"> Name: <?php echo stripcslashes($value['first_name']); ?> ( <?php echo stripcslashes($value['profile_id']); ?> ) </div>
            <div class="row" style="margin-left:170px;"> DOB : <?php echo stripcslashes($value['date']); ?> / <?php echo stripcslashes($value['month']); ?> / <?php echo stripcslashes($value['year']); ?>
              <?php
              $he =  stripcslashes($value['height']);
              echo $he;
              // if ($he != "") {
              //     $str_arr = explode(" ", $he);
              //     // print_r($str_arr);
              //     // print_r($he);
              //     $ft = substr($str_arr[0], 0, strpos($str_arr, 'Ft') + 1);
              //     $inc = substr($str_arr[1], 0, strpos($str_arr, 'In') + 1);
              //     echo ", " . $ft;
              //     if ($inc < 10) {
              //         echo ".0" . $inc;
              //     }
              // }
              // 
              ?>
            </div>
            <div class="row" style="margin-left:170px;"> Tob : <?php echo stripcslashes($value['time_of_birth']); ?></div>
            <div class="row" style="margin-left:170px;"> Star : <?php echo stripcslashes($value['star']); ?></div>
            <div class="row" style="margin-left:170px;"> Raasi : <?php echo stripcslashes($value['raasi']); ?></div>
            <br>
            <div class="row" style="margin-left:170px;"> Education : <?php echo stripcslashes($value['education_degree']); ?></div>
            <div class="row" style="margin-left:170px;"> Profession: <?php echo stripcslashes($value['occupation']); ?></div>
            <div class="row" style="margin-left:170px;"> Monthly Salary : <?php echo stripcslashes($value['annual_income']); ?></div>
            <div class="row" style="margin-left:170px;"> Job Location : <?php echo stripcslashes($value['country']); ?></div>
            <?php if ($value['visatype'] != "") { ?>
              <div class="row" style="margin-left:170px;"> Visa Status : <?php echo stripcslashes($value['visatype']); ?></div>
            <?php } ?>
            <br>
            <div class="row" style="margin-left:170px;"> Father Native : <?php echo stripcslashes($value['fathers_father_district']); ?></div>
            <div class="row" style="margin-left:170px;"> Mother Native : <?php echo stripcslashes($value['mothers_father_district']); ?></div>
            <div class="row" style="margin-left:170px;"> Property : <?php echo stripcslashes($value['property_value']); ?> ( Lakhs ) </div>

            <!-- <div class="row" style="margin-left:10px;"> DOR : <?php echo stripcslashes($value['registered_on']); ?></div> -->
            <!-- <div class="row" style="margin-left:10px;"> Last Suggested : <?php echo stripcslashes($value['']); ?></div>
                        <div class="row" style="margin-left:10px;"> MrkDoc Updated On : <?php echo stripcslashes($value['last_call_updated']); ?></div>
                        <div class="row" style="margin-left:10px;"> Whats app send on: <?php echo stripcslashes($value['']); ?></div>
                        <div class="row" style="margin-left:10px;"> Profile Owner: <?php echo stripcslashes($value['profile_owner']); ?></div> -->
            <a class="ct-newsletter-close ct-sliderPop-close close_info" id="pop_close_wicon_<?php echo $value['id']; ?>" href="#"> <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
<?php } else {
  $value = $search_sub_rec[0]; ?>
  <section>
    <div class="result-container">
      <div class="arrow-left bg-white" style="display: flex;  align-items: center;justify-content: center;font-size: 48px;"><?php echo $links; ?> </div>
      <div class="result">
        <?php if ($search_tot_rec > 0) { ?>
          <div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;">
            <div style="font-size: 22px;font-weight: 700;"> Record : <?php echo $this->uri->segment(4) + 1; ?> of <?php echo $search_tot_rec; ?></div>
            <div style="padding-left: 40px;float: right;"><a href="<?php echo site_url(); ?>admin/admin_search"></a></div>
            <div> <a href="<?php echo site_url(); ?>admin/Admin_pv">
                <button class="submit"> Back to Search</button>
              </a> </div>
          </div>
          <div class="result-body">
            <div class="row d-flex justify-content-center" style="font-size:12px;">
              <div class="col-5 border" style="float:left;padding:20px;">
                <div class="row" style="margin-left:10px; "><b> Name: </b> <?php echo stripcslashes($value['first_name']); ?> <?php echo stripcslashes($value['last_name']); ?>
                  <?php if ($value["payment_status"] == "paid") {  ?>

                    <?php /*?><?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?><?php */ ?>


                    ( <a style="color:green;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> )
                  <?php } else { ?>
                    ( <a target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> )
                  <?php } ?>
                </div>
                </br>
                <div class="row" style="margin-left:10px;"><b> DOB : </b> <?php echo stripcslashes($value['date']); ?> / <?php echo stripcslashes($value['month']); ?> / <?php echo stripcslashes($value['year']); ?>
                  <?php
                  $he =  stripcslashes($value['height']);
                  echo $he;
                  // if ($he != "") {
                  //     $str_arr = explode(" ", $he);
                  //     $ft = substr($str_arr[0], 0, strpos($str_arr, 'Ft') + 1);
                  //     $inc = substr($str_arr[1], 0, strpos($str_arr, 'In') + 1);
                  //     echo ", " . $ft;
                  //     if ($inc < 10) {
                  //         echo ".0" . $inc;
                  //     }
                  // }
                  // 
                  ?>
                </div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Tob : </b><?php echo stripcslashes($value['time_of_birth']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Star : </b><?php echo stripcslashes($value['star']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Raasi :</b> <?php echo stripcslashes($value['raasi']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Education : </b><?php echo stripcslashes($value['education_degree']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Profession : </b><?php echo stripcslashes($value['occupation']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Monthly Salary : </b><?php echo stripcslashes($value['annual_income']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Job Location : </b><?php echo stripcslashes($value['country']); ?></div>
                </br>
                <?php if ($value['visatype'] != "") { ?>
                  <div class="row" style="margin-left:10px;"><b> Visa Status : </b><?php echo stripcslashes($value['visatype']); ?></div>
                <?php } ?>
                </br>
                <div class="row" style="margin-left:10px;"><b> Father Native : </b><?php echo stripcslashes($value['fathers_father_district']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Mother Native : </b><?php echo stripcslashes($value['mothers_father_district']); ?></div>
                </br>
                <div class="row" style="margin-left:10px;"><b> Property : </b><?php echo stripcslashes($value['property_value']); ?> ( Lakhs )</div>
                </br>
                <hr>
                <div class="row" style="margin-left:10px;"><b> DOR : </b><?php echo stripcslashes($value['registered_on']); ?></div>
                <div class="row" style="margin-left:10px;"><b> Last Suggested : </b><?php echo stripcslashes($value['']); ?></div>
                <div class="row" style="margin-left:10px;"><b> MrkDoc Updated On: </b><?php echo stripcslashes($value['last_call_updated']); ?></div>
                <div class="row" style="margin-left:10px;"><b> Whats app send on : </b><?php echo stripcslashes($value['']); ?></div>
                <div class="row" style="margin-left:10px;"><b> Profile Owner : </b><?php echo stripcslashes($value['profile_owner']); ?></div>
              </div>
              <div class="col-5 border" style="float:left;margin-left:40px;">
                <div class="row d-flex justify-content-center">
                  <div class="col" style="text-align: center; margin-top:10px;">
                    <!-- <img src="<?php echo site_url(); ?>images/profilepics/990/image_1.jpeg" width="250px" height="250px" class="profil-img"> -->
                    <?php if ($value["applicationphotopath"] != '') { ?>
                      <!-- <img src="http://kammavaari.com/images/profilepics/<?php echo $value['MS_id']; ?>/image_1.jpeg" width="250px" height="250px" class="profil-img"> -->
                      <img src="<?php echo $value["applicationphotopath"]; ?>" width="250px" height="250px" class="profil-img">
                    <?php } else { ?>
                      <img src="http://kammavaari.com/images/profilepics/noimage.jpg" width="250px" height="250px" class="profil-img">
                    <?php } ?>
                  </div>
                </div>
                <div class="row" style="margin:20px;">
                  <div class="col border" style="padding:20px;">
                    <div class="row"><b>Contact Number :</b> <?php echo $search_sub_rec['0']['mobile']; ?></div>
                    </br>
                    <div class="row"><b>Father Number :</b> <?php echo $search_sub_rec['0']['father_mobile']; ?> </div>
                    </br>
                    <div class="row"><b>Email :</b> <?php echo $search_sub_rec['0']['email']; ?> </div>
                  </div>
                </div>
                <div class="row container-fluid" style="margin-top:10px;">
                  <div class="left"> <a target="_blank" href="<?php echo site_url(); ?>admin/basic_search"> Search </a></div>
                  <div class="col"> |</div>
                  <div class="left"> <a target="_blank" href="<?php echo site_url(); ?>admin/admin_del_profiles"> Delete </a></div>
                  <div class="col"> |</div>
                  <div class="col"> <a target="_blank" href="<?php echo site_url(); ?>admin/enterpayment"> Payment </a></div>
                  <div class="col"> |</div>
                  <div class="left"><a target="_blank" href="<?php echo site_url(); ?>admin/admin_ap/call_history_pf/<?php echo $value['pfs_id']; ?>">Marketing </a></div>
                  <div class="col"> |</div>
                  <div class="col"> <a target="_blank" href="<?php echo site_url(); ?>admin/edit_profile/<?php echo $value['id']; ?>">Edit </a></div>
                </div>
                </br>
              </div>
            </div>
          </div>
        <?php                 } else { ?>
          <div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;">
            <div style="font-size: 22px;font-weight: 700;">No records Found</div>
            <div style="padding-left: 40px;float: right;"><a href="<?php echo site_url(); ?>admin/admin_search"></a></div>
            <div> <a href="<?php echo site_url(); ?>admin/Admin_pv">
                <button class="submit"> Back to Search</button>
              </a> </div>
          </div>
        <?php } ?>
      </div>
      <div class="arrow-right bg-white" style="display: flex; align-items: center;justify-content: center;font-size: 48px;"><?php echo $links; ?></div>
    </div>
  </section>
<?php } ?>

</div>


<script type="text/javascript">
  function activateProfile(id) {
    var confirmmessage = "Would you like to activate profile?";
    var successalert = "Profile activated successfully";
    if (confirm(confirmmessage)) {
      $.ajax({
        url: "<?php echo base_url(); ?>admin/Admin_ap/activateProfile",
        type: "POST",
        data: {
          'id': id
        },
        success: function(data) {
          alert(successalert);
          location.reload();
        }

      });
    }
  }
</script>


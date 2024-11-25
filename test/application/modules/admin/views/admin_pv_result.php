<style>
.row {
	margin-bottom: 5px;
	font-size: 1vw;
}
</style>
<?php if ($disp == "grid") {
    ?>
<div class="new-side-content">   

<div class="row">
  <div class="col-md-12">
    <div class="card" style="border-style: none;background-color: white">
      <div class="card-header" style="border-style: none;background-color: white">
        <button href="#display_form" class="btn" data-toggle="collapse"> Profile Validation </button>
      </div>
    </div>
  </div>
</div>
<div style="width: 87%;float: left;">
  <h5 style="text-align: center;font-size:22px;text-decoration: underline;"> profiles found  <?php echo $tot_rec; ?></h5>
</div>
<div> <a href="<?php echo site_url(); ?>admin/Admin_pv">
  <button class="submit"> Back to Search</button>
  </a> </div>
<div class="limiter">
  <div class="container-table100">
    <div class="wrap-table100">
      <div class="table100"> <?php echo $this->pagination->create_links(); ?>
        <table>
          <div class="table100-head">
            <thead style="text-align: left;">
              <tr>
                <th class="cell6" style="width:1%">S No.</th>
                <th colspan='3' class="cell8" style="width:5%">Action</th>
                <th class="cell18" style="width:5%">Profile ID</th>
                <th class="cell10" style="width:5%">Surname</th>
                <th class="cell20" style="width:15%">Name</th>
                <!--<th class="cell8">Caste</th>-->
                <th class="cell5" style="width:5%">Height</th>
                <!--<th class="cell5">Age</th>-->
                <th class="cell5" style="width:5%">Gender</th>
                <th class="cell5" style="width:10%">Education</th>
                <th class="cell17" style="width:10%">Profession</th>
                <th class="cell17" style="width:12%;">Maketing Ticket</th>
                <th class="cell17" style="width:10%;">RM Ticket</th>
              </tr>
            </thead>
            <tbody style="text-align: left;">
              <?php $slno = $this->uri->segment(4, 0);
                                   foreach ($sub_rec as $value) { 
									$vipconfi='';
									if($value['ms_usertype']=='confidential'){$vipconfi='premium';}
									if($value['ms_usertype']=='elite'){$vipconfi='elite';}
									?>
              <tr class="<?php echo ($value['payment_status']) ? 'profileBlue' : 'profileRed';?>">
                <td style="width:1%; text-align:center;" class="cell5"><a target="_blank" href="<?php echo site_url(); ?>admin/admin_ap/call_history_pf/<?php echo $value['pfs_id']; ?>"><?php echo ++$slno ?></a></td>
                <td class="cell4" style="width:5%"><a href="<?php echo site_url(); ?>admin/edit_profile/<?php echo $value['id']; ?>">
                  <button class="btn btn-warning fs12">Edit</button></a></td>
				  <td class="cell4" style="width:5%"><a href="javascript:void(0)" onclick="activateProfile(<?php echo $value['id']; ?>)"><button class="btn btn-warning fs12">Activate</button>
                  </a></td>
                <td class="cell4" style="width:5%">
                    <?php if($_SESSION['app_status'] != 2){ ?>
                    <a target="_blank" href="">
                  <button class="btn btn-danger fs12">Del</button> <?php } else { ?>
                 <a href="javascript:void(0)" onclick="activateProfile(<?php echo $value['id']; ?>)"><button class="btn btn-warning fs12">Activate</button></a>
                 <?php } ?>
                  </a></td><?php /*?><?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?><?php */?>
                <td class="cell12" style="width:10%;color:#00818e;"><?php if ($value["payment_status"] == "paid") {  ?>
                  ( <a style="color:#1bb73f;font-weight: 600;color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> )
                  <?php } else { ?>
                  ( <a style="color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a> )
                  <?php } ?>
                  
                  <!-- <a target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"><?php echo stripcslashes($value['profile_id']); ?></a></td> -->
                <td class="cell10" style="width:5%"><?php echo stripcslashes($value['last_name']); ?></td>
                <td class="cell20" style="width:15%"><span class="<?php echo $vipconfi;?>"></span><?php echo stripcslashes($value['first_name']); ?> <a href="#"><img src="<?php echo site_url(); ?>images/whats_app.png" width="25px" height="25px" id="wicon_<?php echo $value['id']; ?>" class="whatsapp_icon" /> </a></td>
                <?php /*?><td class="cell8">
                                            <?php echo stripcslashes($value['caste']); ?></td><?php */?>
                <td class="cell5" style="width:5%"><?php echo stripcslashes($value['height']); ?></td>
                <?php /*?>  <td class="cell5">
                                            <?php echo stripcslashes($value['age']); ?></td><?php */?>
                <td class="cell5" style="width:5%"><?php echo ucfirst(stripcslashes($value['gender'])); ?></td>
                <td class="cell5" style="width:10%"><?php echo stripcslashes($value['education_degree']); ?></td>
                <td class="cell17" style="width:10%"><?php echo stripcslashes($value['occupation']); ?></td>
                <td style="width:12%;text-align: center;"><span class="btn fs12 btn-xs custBtnPInt btn-primary btnmarketingticket" data-toggle="modal" data-target="#myModal_marketingtickethistory" rel1="<?php echo $value['id'];?>">Marketing Ticket</span></td>
                <td style="width:8%;text-align: center;"><span class="btn fs12 btn-xs custBtnPInt btn-primary tickethistory" data-toggle="modal" data-target="#myModal_tickethistory"  id="<?php echo $value['rmid'];?>" rel1="<?php echo $value['id'];?>">RM Ticket</span></td>
              </tr>
              <?php } ?>
            </tbody>
          </div>
        </table>
      </div>
    </div>
  </div>
</div>
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
                                    // ?>
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
        <a class="ct-newsletter-close ct-sliderPop-close close_info" id="pop_close_wicon_<?php echo $value['id']; ?>" href="#"> <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a> </div>
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
			  
			  <?php /*?><?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?><?php */?>
			  
			 
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
                                            // ?>
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
  </div></div>
</section>
<?php } ?>
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


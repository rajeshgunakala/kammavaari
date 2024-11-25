   <section class="admin_search_container">

      <?php if ($search_tot_rec != 0) { ?>

         <div class="result-container bg-white">
            
			<div class="col-md-12 no-padding">
				<div class="col-md-9 no-padding">
				<div class="arrow-left bg-white" style="display: flex;  align-items: center;justify-content: center;font-size: 48px;"><?php echo $links; ?>
            </div>
					<div class="result">
               <div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;">
                  <div style="font-size: 22px;font-weight: 700;"> Record : <?php echo $this->uri->segment(4) + 1; ?> of <?php echo $search_tot_rec; ?></div>

                  <div style="padding-left: 40px;float: right;"><a href="<?php echo site_url(); ?>admin/admin_search"><button class="submit">Modify Search</button></a></div>


               </div>

               <div class="profile_block">
                  <!-- <div class=""> -->
				  <?php $i =0; foreach($search_sub_rec as $searchProfile) {?>
				<div class="col-md-12 <?php if($i%2 == 0) { echo "even"; } else { echo "odd"; }?>">	
                  <div class="all-images result-body-left col-md-3">
                     <ul class="bxslider" style="height:100%;width:100%;">
                        <?php
                           if ($searchProfile['applicationphotopath']) {  ?>

                           <img src="<?php echo $search_sub_rec[0]['applicationphotopath']; ?>" class="profil-img">

                        <?php } else { ?>

                           <img src="<?php echo site_url(); ?>images/profilepics/noimage.jpg" class="profil-img">

                        <?php } ?>
                     </ul>

                  </div>

                  <div class="result-body-right col-md-9">

                     <div class="result-body-right-top">

                        <div class="result-body-right-top1">

                           <div style="width:auto;font-weight:500;font-size:18px;float: left;padding:14px 8px 14px 25px;"> <b><?php echo $searchProfile['first_name']; ?></b></div>
                           <div style="width:auto;font-weight:500;font-size:18px;float: left;padding:14px 8px 14px 8px;"> <b><?php echo $searchProfile['last_name']; ?></b></div>

                           <div style="width:auto;font-weight:500;font-size:18px;padding:14px 14px 14px 14px;text-align: right;"><b> ID : ( <?php echo $searchProfile['profile_id']; ?> )</b>
                           </div>

                           <div style="width:23%;float: left;padding:14px 2px 14px 25px;">
                              <div style="float: left;"> <?php echo $searchProfile['date'] . "- "; ?></div>
                              <div style="float: left;"> <?php echo $searchProfile['month'] . "- "; ?></div>
                              <div style="float: left;"> <?php echo $searchProfile['year'] . ","; ?></div>
                           </div>




                           <div style="width:27%;float: left;padding:14px 14px 14px 1px;"> <?php echo " (" . $searchProfile['age'] . " Yrs) "; ?> </div>
                           <div style="width:10%;width:auto;float: left;padding:14px 8px 14px 0px;"> <?php echo $searchProfile['height'] . " , "; ?></div>
                           <div style="width:auto;padding:14px 14px 14px 10px;text-align: left;"><?php echo $searchProfile['marital_status']; ?>
                           </div>


                           <div style="width:auto;float: left;padding:14px 4px 14px 25px;"> <?php echo $searchProfile['religion'] . ","; ?></div>
                           <div style="width:auto;float: left;padding:14px 8px 14px 2px;"> <?php echo $searchProfile['caste']; ?></div>

                           <div style="float:right;width:50%;padding:14px 14px 14px 2px;text-align:left;"><?php echo $searchProfile['heighst_education']; ?>
                           </div>

                           <div style="width:50%;float: left;padding:14px 14px 14px 25px; margin-left: -136px;	" ><?php echo $searchProfile['occupation']; ?></div>
                         
 <div style="width:50%;float: left;margin-left: 323px;
margin-top: -30px;"> <?php echo $searchProfile['living_in']; ?></div>

                        </div>

                        <div class="result-body-right-top2" style="text-align: center;">
                           <p class="ex-p" style="font-weight: 700;font-size: 18px;"> <a target="_blank" href="<?php echo site_url(); ?>admin/admin_search/profileview/<?php echo $searchProfile['id']; ?>">View Profile </a>
                            
                           
                           </p>
                           <br>
                           <br>
                           <br>
                           <p class="ex-p">Like This Profile</p>
                           <a href="#"><i class="fa fa-phone-square" aria-hidden="true"></i></a>
                           <a href="#">
                              <p class="ex-p">Contact Now</p>
                           </a>

                        </div>

                     </div>


                     <div class="result-body-right-middle">


                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Monthly Income :</b> <?php echo $searchProfile['annual_income']; ?></div>
                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Property Value :</b> <?php echo $searchProfile['property_value']; ?> (Lakhs) </div>


                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Father's Native :</b> <?php echo $searchProfile['fathers_father_district']; ?> </div>
                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Mother's Native :</b> <?php echo $searchProfile['mothers_father_district']; ?> </div>

                     </div>

                     <div class="result-body-right-bottom">
                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Time of Birth :</b> <?php echo $searchProfile['time_of_birth']; ?></div>
                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Place of Birth :</b> <?php echo $searchProfile['place_of_birth']; ?></div>

                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Gothram :</b> <?php echo $searchProfile['gothram']; ?> </div>
                        <div style="width:50%;float: left;padding:25px 25px 25px 25px;"><b>Star :</b> <?php echo $searchProfile['star']; ?> </div>

                     </div>

                  </div>
				</div>
				  <?php $i++; } ?>
               </div>
            </div>
             <div class="arrow-right bg-white" style="display: flex; align-items: center;justify-content: center;font-size: 48px;"><?php echo $links; ?></div>
				</div>
				<div class="col-md-3 no-padding">
				<h3>Selected Profiles</h3>
				<div>No Profiles found</div>
				</div>
			</div>
           
         </div>
      <?php } else { ?>

         <div class="result-container">
            <div class="result-head" style="display: flex; align-items: center;align-content: center; justify-content: center;">
               <div style="font-size: 22px;font-weight: 700;"> No Records available </div>
               <div style="padding-left: 100px;"><a href="<?php echo site_url(); ?>admin/admin_search" class="modify">Modify Search</a></div>
            </div>
         </div>

      <?php } ?>


      </div>
   </section>

   <style>
   .admin_search_container {display:block;}
   .admin_search_container .col-md-12{display:flex;}
   .no-padding {padding:0;}
   .profile_block {
		display: block;
		width: 100%;
		position: relative;
		overflow: hidden;		
   }
   .profile_block .even{
	   display: block;
		width: 100%;
		position: relative;
		overflow: hidden;	
		background: #ccc;
		margin: 10px 0;
   }
   .profile_block .odd{
	   display: block;
		width: 100%;
		position: relative;
		overflow: hidden;	
		background: #fff;
		margin: 10px 0;
   }
      .pagination>li>,
      .pagination>li>span {
         background-color: #eae6e6;
         color: black;
      }

      .pagination>li {
         padding: 0px;
      }

      .page-link {
         background-color: white;
         border: none;
      }

      .page-link a#hover {
         text-decoration: none;
      }

      a:hover {
         text-decoration: none;
      }

      /* .pagination > li:nth-child(2){display:none;} */
      .pagination .previous .disabled,
      .pagination .next .disabled {
         display: none;
      }
   </style>


   <!-- popup slider  -->
   <?php
   if (isset($images_info) && count($images_info) > 0) {
      ?>
      <div class="sliderPop" style="display:none;">
         <div class="ct-sliderPop-container">
            <?php
               $i = 1;
               foreach ($images_info as $value) {
                  // if ($value['fullphotopath'] != '') 
                  {
                     ?>

                  <div class="ct-sliderPop ct-sliderPop-slide<?php echo $i; ?> open">
                     <div class="inner">

                        <a href='<?php echo $value['applicationphotopath']; ?>'> <img src='<?php echo $value['applicationphotopath']; ?>' class="profil-img"></a>
                        <!-- <a href='<?php echo site_url(); ?>images/profilepics/99  0/image_1.jpeg'> <img src="<?php echo site_url(); ?>images/profilepics/990/image_1.jpeg" class="profil-img"></a> -->
                        <a class="ct-newsletter-close ct-sliderPop-close" href="#">
                           <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a>
                     </div>
                  </div>
            <?php

                     $i++;
                  }
               } ?>

         </div>
      </div>


   <?php
   }
   ?>
   <!--  popup slider -->
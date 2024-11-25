<style type="text/css">
    .navbar-default .navbar-nav>li>a {
    color: #fff !important;
    padding: 12px 15px;
    float: left;
}
ul.navbar-nav.bd-navbar-nav.flex-row {
    float: right;
}
.view-profile{
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 4px 2px 1px #efebebf0;
    border-radius: 4px;
    margin: 5px 10px;
    padding: 0px;
}
.log-form {
    background: #fff;
    border: 1px solid #cecece;
    box-shadow: 2px 2px 2px 2px #cecece;
    border-radius: 4px;
}
p {
    font-weight: normal !important;
}

img.profil-img {
    width: 150px;
    height: 150px;
}
span.clr-blue {
    font-weight: normal;
}
h3.lead {
    border-bottom: 1px solid #4dbdab;
    font-size: 19px;
    font-weight: bold;
    padding: 6px 0;
}
/*.page-header {
    padding-bottom: 9px;
    margin: 20px 0 20px !important;
    border-bottom: 1px solid #eee;
}*/
.page-header {
    padding-left: 10px;
    padding-top: 10px;
    margin: 0px 0px 10px 0px !important;
    padding-left: 10px;
    padding-top: 10px;
    color: #FFF;
    font-size: 16px;
    background: #ff5a60;
}
.bxslider img{
    margin-bottom:10px;
}
.profile-heading{
    background:#ccc;
    padding-left:0px;
}

.profile-heading h3{
    font-size: 15px;
    color: #000000;
    padding-left: 15px;
}

.all-images.search_profile{
  text-align: center;
}

/*Css Admsoft*/
.infoDiv {
  padding: 25px !important;
}
.proHeader {
  padding: 0 !important;
}
.mainDiv2 {
  border: solid 1px #eee;
  background: #FFF;
  padding-right: 0px !important;
  padding-left: 0px !important;
  box-shadow: 2px 2px 6px 3px #cecece !important;
}
.dashboard_search_profile {
  margin: 75px auto !important;
  /* margin-top: 75px !important; */
  background: #f3f3f3;
  padding-bottom: 0px !important;
  padding-right: 0px !important;
  padding-left: 0px !important;
}
.preson-details {
  padding-left: 15px;
  padding-bottom: 7px;
}
.familyDet p {
  padding-bottom: 4px;
}
.candidate-information {
  padding-left: 20px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
</style>
<!-- /. NAV SIDE  -->
<div> 
   <div id="page-inner" class="container dashboard_search_profile" style="margin:75px auto !important ;">
      
<div class=" col-xs-12 col-md-12 col-lg-12 mainDiv2">
    <div class="col-xs-12 col-md-12 col-lg-12 proHeader">
         <h1 class="page-header" style="padding-left:10px;">
         Profile</small></h1>
    </div>
   <div class=" container infoDiv">
      <div class="col-md-3 view-profile">
          
          <div class="candidate-information">
                        <div class="col-xs-12" style="padding: 0px;">
                           <h4 style="font-weight:bold; padding:10px 0;" ><?php echo $primary_info['first_name'] . ' ' . $primary_info['last_name'];?> <span>(ID:<?php echo $primary_info['profile_id'];?>)</span></h4>
                        </div>
                        <div class="col-md-12" style="padding: 0px;">
                          
                              <ul style=" line-height: 31px; font-size: 14px;  text-align: left; list-style:none;">
                                 <li><?php echo $primary_info['age'];?> Years, <?php echo stripcslashes($religion_info['height']);?></li>
                                 <li><?php echo ucwords($religion_info['religion']);?>, <?php echo ucwords($religion_info['caste']);?>,<?php echo ucwords($religion_info['mother_tounge']);?></li>
                                 <li><?php echo ucwords($religion_info['marital_status']);?></li>
                              </ul>
                        
                        </div>
                        <div class="col-md-12" style="padding: 0px;">
                         
                              <ul>
                                 <li><?php echo $profession_info['heighst_education'];?></li>
                                 <li><?php echo ucwords($profession_info['occupation']);?></li>
                                 <li><?php echo ucwords($profession_info['living_in']);?></li>
                              </ul>
                          
                        </div>
                        <p class="p-20"><?php $cdata4= preg_replace('/<[^>]*>/', '', $profession_info['about_me']); echo substr(stripslashes(str_replace("\n", "",$cdata4)),0,80);?></p>
        </div>



       <!-- popup slider  -->


<div class="sliderPop" style="display:none;">
  <div class="ct-sliderPop-container">
    

     
        <?php

      

                   if(isset($images_info) && count($images_info) > 0) { $i=1; foreach($images_info as $value)
                    {

                        if($value['applicationphotopath']!=''){
                     ?>


                
<div class="ct-sliderPop ct-sliderPop-slide<?php echo $i; ?> open">
   <div class="inner">
    <a class="ct-newsletter-close ct-sliderPop-close" href="#">
        <img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"></a>
                  <a href='#' ><img src="<?php echo $value['applicationphotopath']; ?>" class="profil-img"></a>
                   
      </div>
    </div>



                <?php

                 $i++; 
               }

               } } ?>


       
  
    
  </div>
</div>



<!-- popup slider  --> 


<!--  to display all images -->

<div class="modal"  style="display: none;" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title text-center">Gallery</h4>
                            </div>



                 <!-- Modal body -->

                 <div class="modal-body">

                  <?php

                   if(isset($images_info) && count($images_info) > 0) { foreach($images_info as $value)
                    { ?>
                

                  <a href='<?php echo site_url(); ?>images/profilepics/<?php echo $value['MS_id'].'/'.$value['photoname'] ?>' ><img src="<?php echo site_url(); ?>images/profilepics/<?php echo $value['MS_id'].'/'.$value['photoname'] ?>" class="profil-img"></a>

                <?php } } ?>

                 </div>
                           
                                  <div class="form-group">
                                      <button type="button" class="btn btn-danger modal_close">Close</button>
                                  </div>
                               
                           
                </div>
              </div>
            </div>

           <!--  to display all images -->

        
            <div class="all-images search_profile" style="clear:both; padding-top:50px;">
                
               <ul class="bxslider">
                   
                   <p style="margin-bottom:20px; text-left:left"><b>Photos</b></p>
                  <?php if(isset($images_info) && count($images_info) > 0) { $ap_image=0; foreach($images_info as $value) {  ?>
                            <?php if($value['photoname']!="" && $value['ismain']==1 && $value['isactive']) { $ap_image=1; ?>
                        <img class="profile_img" width="25%" src="<?php echo $value['applicationphotopath']; ?>"> 
                        <div class="view_all_photos"><a>View All</a></div>
                      <?php } 

                        if($ap_image==0){
                          ?>
                          <img src="<?php echo site_url();?>images/profilepics/noimage.jpg" class="profil-img">

                        <?php } ?>

                <?php } } else{ ?>
                              <li ><a data-fancybox="gallery" href="<?php echo site_url();?>images/profilepics/noimage.jpg"><img src="<?php echo site_url();?>images/profilepics/noimage.jpg" class="profil-img"></a></li>
                             <?php } ?>
               </ul>
              
            </div>
          
      </div>
      <div class=" col-xs-12 col-sm-12 col-md-8">
   <div class="view-profile col-xs-12 col-md-12 AdmviewProfile">
      <div class="profile-heading">
         <h3 class="lead">My Astro Details</h3>
      </div>
      <div class="col-xs-12 col-md-12" style="padding-left: 17px;padding-bottom: 7px;" >
         <div class="col-md-4" style="padding: 0px;">
            <p><strong>Age:</strong><span class="clr-blue"> <?php echo $primary_info['date'];?> -<?php echo $primary_info['month'];?> -<?php echo $primary_info['year'];?>  (<?php echo $primary_info['age'];?>)</span></p>
            <p><strong>Star(Padam):</strong><span class="clr-blue"> <?php echo ucwords($religion_info['star']);?></span></p>
         </div>
         <div class="col-md-4">
            <p><strong>Time Of Birth:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['time_of_birth']);?></span></p>
            <p><strong>Raasi:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['raasi']);?></span></p>
         </div>
         <div class="col-md-4">
            <p><strong>Place Of Birth:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['place_of_birth']);?></span></p>
            <p><strong>Gothram:</strong><span class="clr-blue"> <?php echo ucwords($religion_info['gothram']);?></span></p>
         </div>
      </div>
   </div>
   <div class="view-profile col-xs-12 col-md-12" style="">
      <div class="profile-heading">
          <h3 class="lead">My Professional &amp; Educational Details</h3>
      </div>
      <?php if($profession_info['education_description']!=""){ ?>
      <div class="preson-details">
          <strong>Educational Details</strong>
        <p><?php 
        
      
       $profession=explode("\\r\\n",$profession_info['education_description']);
       
        for($i=0;$i<count($profession);$i++){
            echo $profession[$i]."<br>";
        }
         
          
        
          
          ?></p>
      </div>
      <?php } else{ ?>
            <div class="preson-details">
                <strong>Educational Details</strong>
             <p>No Description Found!.<br></p>
          </div> <?php } ?>
          <?php if($profession_info['about_profession']!=""){ ?>
      <div class="preson-details">
         <strong>Professional Details</strong>
         <p>
         <?php 
         
                
                $about_prof=explode("\\r\\n",$profession_info['about_profession']);
                for($i=0;$i<count($about_prof);$i++){
                echo $about_prof[$i]."<br>";
                }

         ?>
         </p>
        
      </div> 
      <?php } else{ ?>
            <div class="preson-details">
            <strong>Professional Details</strong>
             <p>No Description Found!</p>
          </div> <?php } ?>
          
                    
      <div class="preson-details">
         <strong>Salary Details</strong>
         <?php if($profession_info['annual_income']!=""){ ?>
                <p>Monthly Income : <?php echo $profession_info['annual_income']." ".$profession_info['currency']; ?></p>
         <?php } ?>
     
      </div> 
          
          </div>
    <div class="view-profile col-xs-12 col-md-12" style="">
                     <div class="profile-heading">
                        <h3 class="lead">Current Details</h3>
                     </div>
                     
                  <div class="col-xs-12 col-md-12" style="padding: 0px;">
                        <div class="col-md-4" style="padding: 0px;">
                       <p class="preson-details"><strong>Country Living In:</strong><span class="clr-blue"> <?php echo ucwords($profession_info['country']);?></span></p>
                            <?php if($profession_info['visatype']!="") { ?>
                           <p class="preson-details"><strong>Visa Type:</strong><span class="clr-blue"> <?php echo $profession_info['visatype'];?></span></p><?php } ?>
                             <?php if($profession_info['departure-date']!="0000-00-00") { ?>
                           <p class="preson-details"><strong>Departure Date:</strong><span class="clr-blue"> <?php echo $profession_info['departure-date'];?></span></p><?php } ?>
                        </div>
                        <div class="col-md-4">
                           <p class="preson-details"><strong>State Living:</strong><span class="clr-blue"> <?php echo ucwords($profession_info['state']);?></span></p>
                           <?php if($profession_info['residing-since']!="0000-00-00") { ?>
                           <p class="preson-details"><strong>Residing Since:</strong><span class="clr-blue"> <?php echo $profession_info['residing-since'];?></span></p><?php } ?>
                        </div>
                        <div class="col-md-4">
                           <p class="preson-details"><strong>City Living:</strong><span class="clr-blue"> <?php echo ucwords($profession_info['city']);?></span></p>
                            <?php if($profession_info['arrival-date']!="0000-00-00") { ?>
                           <p class="preson-details"><strong>Arrival Date:</strong><span class="clr-blue"> <?php echo $profession_info['arrival-date'];?></span></p><?php } ?>
                        </div>
                 </div>
                 
                  </div>
                  <div class="view-profile col-xs-12 col-md-12 col-offset-md-2" >
                  <div class="profile-heading">
                      <h3 class="lead">About My Family</h3>
                  </div>
                  <div class="preson-details familyDet">
                     <p><strong>Father Name:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['father_name']).", ".$parents_info['father_education'].", ".$parents_info['father_profession'];?></span></p>

                     <p><strong>Father Father Name And Native:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['fathers_father_name']);?> </span><span><?php echo ", ".ucwords($parents_info['fathers_father_district']);?></span><span><?php echo ", ".ucwords($parents_info['fathers_father_state']);?></span></p>
                     <p><strong>Mother Name:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['mother_name']).", ".$parents_info['mother_education'].", ".$parents_info['mother_profession'];?></span></p>
                     <p><strong>Mother Father Name And Native:</strong><span class="clr-blue"> <?php echo ucwords($parents_info['mothers_father_name']);?> </span><span><?php echo ucwords($parents_info['mothers_father_district']);?></span><span><?php echo ", ".ucwords($parents_info['mothers_father_district']);?></span><span><?php echo ", ".ucwords($parents_info['mothers_father_state']);?></span></p>
                     <!--<p><strong>No. Of Siblings:</strong><span class="clr-blue"> <?php //echo $siblings_info['no_of_brothers'] + $siblings_info['no_of_sisters'];?></span></p>-->
                 
                    <?php if($siblings_info['no_of_elder_brothers']!=0){ ?>
                    
                     <p><strong>No. Of Elder Brothers:</strong><span class="clr-blue"> <?php 
                     
                     echo $siblings_info['no_of_elder_brothers'];
                     
                     ?></span></p>
                     
                      <?php } ?>
                     
                     
                     <?php if($siblings_info['no_of_younger_brothers']!=0){ ?>
                     
                     <p><strong>No. Of Younger Brothers:</strong><span class="clr-blue"><?php 
                     
                     echo $siblings_info['no_of_younger_brothers'];
                     
                     ?></span></p>
                     
                     <?php } ?>
                     
                     
                     
                     <?php if($siblings_info['no_of_elder_sisters']!=0){ ?>
                     
                     <p><strong>No. Of Elder Sisters:</strong><span class="clr-blue"> <?php 
                     
                     echo $siblings_info['no_of_elder_sisters'];
                     
                     ?></span></p>
                     
                      <?php } ?>
                      
                      
                      
                      <?php if($siblings_info['no_of_younger_sisters']!=0){ ?>
                     
                     <p><strong>No. Of Younger Sisters:</strong><span class="clr-blue"><?php 
                     
                     echo $siblings_info['no_of_younger_sisters'];
                     
                     ?></span></p>
                     
                      <?php } ?>
            </div>
                 
               </div>
               
                  </div>
            </div>
      </div>
   </div>
</section>
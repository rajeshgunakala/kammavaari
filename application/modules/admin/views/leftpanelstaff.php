<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-" crossorigin="anonymous" />

<div class="new-dashboard-design">
   <div class="row">

  

    



      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/matchmetingserious" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-spa "></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;">Match Meeting Serious (MMS)</div>
            <div class="ticket-count"><?php echo matchmetingserious_count();?></div>
         </a>
      </div>

      

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/bothsideinterest" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-comments-o red_color"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"><?php echo getlangkeywords('bothsideinterest');?></div>
            <div class="ticket-count"><?php echo bothsideinterest_count();?></div>
         </a>
         
      </div>

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/opposidesidesinterest" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-globe-asia"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"><?php echo getlangkeywords('oppositesidesinterest');?></div>
            <div class="ticket-count"><span class="count">(<?php echo oppositesidesinterest_count();?>)</span></div>
         </a>
         
      </div>

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/mysidefollowupsint" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-heart"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> <?php echo getlangkeywords('mysidesinterest');?></div>
            <div class="ticket-count"> <span class="count">(<?php echo mysidefollowupsint_count();?>)</span></div>
         </a>
         
      </div>

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/prime_profiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa-solid fa-eye-slash"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> <?php echo getlangkeywords('prime_profiles');?></div>
            <div class="ticket-count"> <span class="count">(<?php echo get_prime_active_profiles_count();?>)</span></div>
         </a>
         
      </div>




       <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/regularprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-ring"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;">Regular Profiles</div>
            <div class="ticket-count"><span class="count">(<?php echo $regular_profiles["regcount"];?>)</div>
         </a>
      </div>

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/confidentialprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-moon"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;">Confidential Profiles</div>
            <div class="ticket-count"><?php echo $confidential_profiles["confcount"];?></div>
         </a>
      </div>

      <div class="col-lg-3 ticket-box">
      <a href="<?php echo base_url();?>admin/superconfidentialprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-shuffle"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;">Super Confidential Profiles</div>
            <div class="ticket-count"> <span class="count">(<?php echo $sc_profiles["superconfcount"];?>)</span></div>
         </a>
      </div>

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/eliteprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-tree"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> Elite Profiles </div>
            <div class="ticket-count"><span class="count">(<?php echo $elite_profiles["eliteprofilescount"];?>)</span></div>
         </a>
      </div>

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/supereliteprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-signs-post"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;">Super Elite Profiles </div>
            <div class="ticket-count"> <span class="count">(<?php echo $supereliteprofiles["superelitecount"];?>)</span></div>
         </a>
      </div>
      

      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/notshownprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-clock-o blue1_color"></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;">Not Shown Profiles</div>
            <div class="ticket-count"><span class="count">(<?php echo $notshownprofiles["notshowncount"];?>)</span>
         </div>
         </a>
      </div>
      
      <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/freenewprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-spa "></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> Assigned Profiles </div>
            <div class="ticket-count"><span class="count">(<?php echo freenewprofiles_count();?>)</span></span></div>
         </a>
      </div>


	  <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/nearbyexpiryprofiles" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-spa "></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> Near by Expiry profiles </div>
            <div class="ticket-count"><span class="count">(<?php echo count($nearbyexpiryprofiles_total);?>)</span></span></div>
         </a>
      </div>
       
	  <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/noservicesincemonth" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-spa "></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> No Service Since Last 10 days </div>
            <div class="ticket-count"><span class="count">(<?php echo count($noservicesincemonth_total);?>)</span></span></div>
         </a>
      </div>

	  <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/freeprofticketexpiry" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-spa "></i></div>
            <div class="ticket-name" style="font-size:13px;font-weight: 800;"> <?php echo getlangkeywords('freeprofticketexpiry');?></div>
            <div class="ticket-count"><span class="count">(<?php echo freeprofticketexpiry_count();?>)</span></span></div>
         </a>
      </div>
   </div>

 


<div class="row">
   <div class="col-lg-6">
   <h3>Closed Tickets</h3>
   <div class="row mt-3">

      <!-- <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/opposidesidesinterest" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-globe-asia"></i></div>
            <div class="ticket-name"><?php echo getlangkeywords('oppositesidesinterest');?></div>
            <div class="ticket-count"><span class="count">(<?php echo oppositesidesinterest_count();?>)</span></div>
         </a>
         
      </div> -->
     

      <div class="col-lg-6 ticket-box">
         <a href="<?php echo base_url();?>admin/mysideclosetickets" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-regular fa-circle-xmark"></i></div>
            <div class="ticket-name">My Side Closed Tickets</div>
            <div class="ticket-count"> <span class="count">(<?php echo mysideclosetickets_count();?>)</span></div>
         </a>
      </div>



      <div class="col-lg-6 ticket-box">
         <a href="<?php echo base_url();?>admin/opposideclosetickets" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-dumbbell"></i></div>
            <div class="ticket-name" >Opposite Side Closed Tickets</div>
            <div class="ticket-count"> <span class="count">(<?php echo opposideclosetickets_count();?>)</span></div>
         </a>
      </div>
</div>

   </div>
   <div class="col-lg-6">
   <h3>Untouched follow ups</h3>
   <div class="row mt-3">

      <!-- <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/mysidefollowupsint" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-heart"></i></div>
            <div class="ticket-name"> <?php echo getlangkeywords('mysidesinterest');?></div>
            <div class="ticket-count"> <span class="count">(<?php echo mysidefollowupsint_count();?>)</span></div>
         </a>
         
      </div> -->
      <div class="col-lg-6 ticket-box">
         <a href="<?php echo base_url();?>admin/mysidefollowupsintfortyeighth" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-solid fa-spa "></i></div>
            <div class="ticket-name"> Untouched > 48 Hrs </div>
            <div class="ticket-count"><span class="count">(<?php echo mysidefollowupsint_count();?>)</span></span></div>
         </a>
      </div>
      <div class="col-lg-6 ticket-box">
         <a href="<?php echo base_url();?>admin/opposidependingfourtyeighth" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-archway"></i></div>
            <div class="ticket-name">Pending > 48 Hrs From Me </div>
            <div class="ticket-count"><span class="count">(<?php echo oppositesidesinterest_count('48hours');?>)</span></div>
         </a>
      </div>

    

      <!-- <div class="col-lg-3 ticket-box">
         <a href="<?php echo base_url();?>admin/freeprofticketexpiry" target="_blank" class="ticket-box-link">
            <div class="ticket-icon"><i class="fa fa-clock-o blue1_color"></i></div>
            <div class="ticket-name"> Reminders</div>
            <div class="ticket-count">  <span class="count">(<?php echo freeprofticketexpiry_count();?>)</span></div>
         </a>
      </div> -->
</div>
   </div>
</div>


</div>



<div class="col-md-12 col-xs-12">
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/bothsideinterest" target="_blank"><i class="fa fa-caret-right"></i> <?php echo getlangkeywords('bothsideinterest');?> <span class="count">(<?php echo bothsideinterest_count();?>)</span></a></li>
         </ul>
      </div>
   </div> -->
  <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/notifications"><i class="fa fa-caret-right"></i> Notifications</a></li>
         </ul>
      </div>
   </div>  -->
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/matchmetingserious" target="_blank"><i class="fa fa-caret-right"></i> Match Meting Serious (MMS) <span class="count">(<?php echo matchmetingserious_count();?>)</span></a></li>
         </ul>
      </div>
   </div> -->
 <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/regularprofiles" target="_blank"><i class="fa fa-caret-right"></i> Regular Profiles <span class="count">(<?php echo $regular_profiles["regcount"];?>)</span></a></li>
         </ul>
      </div>
   </div> -->
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/confidentialprofiles" target="_blank"><i class="fa fa-caret-right"></i> Confidential Profiles <span class="count">(<?php echo $confidential_profiles["confcount"];?>)</span></a></li>
         </ul>
      </div>
   </div> -->
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/superconfidentialprofiles" target="_blank"><i class="fa fa-caret-right"></i> Super Confidential Profiles <span class="count">(<?php echo $sc_profiles["superconfcount"];?>)</span></a></li>
         </ul>
      </div>
   </div> -->
 <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/eliteprofiles" target="_blank"><i class="fa fa-caret-right"></i> Elite Profiles <span class="count">(<?php echo $elite_profiles["eliteprofilescount"];?>)</span></a></li>
         </ul>
      </div>
   </div> -->
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/supereliteprofiles" target="_blank"><i class="fa fa-caret-right"></i> Super Elite Profiles <span class="count">(<?php echo $supereliteprofiles["superelitecount"];?>)</span></a></li>
         </ul>
      </div>
   </div> -->
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/notshownprofiles" target="_blank"><i class="fa fa-caret-right"></i> Not Shown Profiles <span class="count">(<?php echo $notshownprofiles["notshowncount"];?>)</span></a></li>
         </ul>
      </div>
   </div> -->




   
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <h3>Opposite side follow ups</h3>

         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/opposidesidesinterest" target="_blank"><i class="fa fa-caret-right"></i> 
            <?php echo getlangkeywords('oppositesidesinterest');?>
             <span class="count">(<?php echo oppositesidesinterest_count();?>)</span></a></li>

            <li><a href="<?php echo base_url();?>admin/opposidependingfourtyeighth" target="_blank"><i class="fa fa-caret-right"></i> Pending > 48 Hrs From Me <span class="count">(<?php echo oppositesidesinterest_count('48hours');?>)</span></a></li>

            <li><a href="<?php echo base_url();?>admin/opposideclosetickets" target="_blank"><i class="fa fa-caret-right"></i> Closed Tickets <span class="count">(<?php echo opposideclosetickets_count();?>)</span></a></li>
         </ul>
      </div>
   </div> -->
   <!-- <div class="menubox-ms custNew">
      <div class="col-xs-12 no-padding">
         <h3>My Side Follow Ups</h3>

         <ul class="nav nav-pills nav-stacked" style="padding:0px !important;">
            <li><a href="<?php echo base_url();?>admin/mysidefollowupsint" target="_blank">
            <i class="fa fa-caret-right"></i> <?php echo getlangkeywords('mysidesinterest');?>
             <span class="count">(<?php echo mysidefollowupsint_count();?>)</span></a></li>

            <li><a href="<?php echo base_url();?>admin/mysidefollowupsintfortyeighth" target="_blank">
            <i class="fa fa-caret-right"></i> Untouched > 48 Hrs
             <span class="count">(<?php echo mysidefollowupsint_count('48hours');?>)</span></a></li>

            <li class="dn">
               <a href="javascript:void(0);" target="_blank"><i class="fa fa-caret-right"></i> 
               With Other Emps (3)</a></li>
            <li>
               <a href="<?php echo base_url();?>admin/mysideclosetickets" target="_blank"><i class="fa fa-caret-right"></i> Closed Tickets 
               <span class="count">(<?php echo mysideclosetickets_count();?>)</span></a></li>

            <li>
               <a href="<?php echo base_url();?>admin/freeprofticketexpiry" target="_blank">
               <i class="fa fa-caret-right"></i> Reminders
                <span class="count">(<?php echo freeprofticketexpiry_count();?>)</span></a></li>

         </ul>
      </div>
   </div> -->
</div> 


<style>
   a.ticket-box-link {
    display: block;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    border: 0px solid #e7e7e7;
    padding: 10px 20px;
    background: #fff;
    border-radius: 15px;
    min-height: 140px;
    text-align: center;
    margin-bottom:30px;
    font-family: 'Poppins', sans-serif;
    vertical-align: bottom;
}
.new-dashboard-design {
    display: block;
    width: 100%;
}
.ticket-icon>.fa {
    font-size: 30px;
    line-height: normal;
    width: 100%;
    float: left;
    text-align: center;
}
.ticket-name {
    font-size: 13px !important;
    color: #99abb4;
    font-weight: 300;
    margin: 10px 0;
    display: inline-block;
    width: 100%;
    line-height: 23px;
    vertical-align: bottom;
    font-weight: 800;
}

.ticket-count {
    /* color: #455a64; */
    color: #BD1700;
    font-size: 13px;
    font-weight: 400;
    vertical-align: bottom;
}
.col-lg-3{
   max-width : 20% !important
}
</style>
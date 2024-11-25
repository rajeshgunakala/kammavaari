<style>
        table.dataTable thead > tr > th, table.dataTable thead > tr > td {
            padding-right: 20px;
        }
        table > thead > tr:first-child {
            background-color: #00818e;
            color: white; 
        }
        .table-striped tbody tr:nth-of-type(odd) {
             background-color: unset; 
        }
        .dataTables_wrapper .dt-buttons a.dt-button {
            float: unset !important;
        }
        .dataTables_filter {
            float: unset !important;
            margin-bottom: 7px !important;
        }
        .dataTables_length {
            display: none !important;
            position: relative !important;
            right: 0 !important;
            top: 5px !important;
        }
        /* Pagination & Pager ========================== */
        .pager li > a {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -ms-border-radius: 0 !important;
            border-radius: 0 !important;
            border: none !important;
            background-color: transparent !important;
            color: #222 !important;
            font-weight: bold !important;
         }
         div.dataTables_wrapper div.dataTables_length select,div.dataTables_wrapper div.dataTables_length label{
            display:none !important;
            z-index: 0;
         }

        .pager li a:focus,
        .pager li a:active {
            background-color: transparent !important; }

        .pagination .disabled a,
        .pagination .disabled a:hover,
        .pagination .disabled a:focus,
        .pagination .disabled a:active {
        color: #bbb !important; }

        .pagination li.active a {
            background-color: #00818e !important;
            color: white !important; 
        }

        .pagination li {
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -ms-border-radius: 0 !important;
            border-radius: 0 !important; 
        }
        .pagination li a:focus,
        .pagination li a:active {
            background-color: transparent !important;
            color: #000 !important; 
        }

        .pagination > li > a {
            border: none !important;
            font-weight: bold !important;
            color: #000 !important; 
        }

        .pagination > li:first-child > a,
        .pagination > li:last-child > a {
            width: auto !important;
            height: 32px !important;
            -webkit-border-radius: 0 !important;
            -moz-border-radius: 0 !important;
            -ms-border-radius: 0 !important;
            border-radius: 0 !important; 
        }
        .pagination > li:first-child > a .material-icons,
        .pagination > li:last-child > a .material-icons {
            position: relative !important;
            bottom: 2px !important; 
        }

        .pagination-sm > li:first-child > a,
        .pagination-sm > li:last-child > a {
            width: 28px !important;
            height: 28px !important; 
        }
        .pagination-sm > li:first-child > a .material-icons,
        .pagination-sm > li:last-child > a .material-icons {
            position: relative !important;
            top: -1px !important;
            left: -6px !important;
            font-size: 20px !important;
        }

        .pagination-lg > li:first-child > a,
        .pagination-lg > li:last-child > a {
            width: 44px !important;
            height: 44px !important;
        }
        .pagination-lg > li:first-child > a .material-icons,
        .pagination-lg > li:last-child > a .material-icons {
            font-size: 30px !important;
            position: relative !important;
            top: -3px !important;
            left: -10px !important;
        }
        .dataTables_info, .dataTables_paginate {
            display: inline-block !important;
        }
        .dataTables_info {
            float: left !important;
        }
        .dataTables_paginate {
            float: right !important;
        }
        .dataTables_filter label {
            margin-bottom: 0 !important;
        }
        .dataTables_filter {
            float: right !important;
            margin-bottom: 10px !important;
        }
        .dataTables_length {
            display: inline-block !important;
            position: absolute !important;
            right: 310px !important;
        }
        .dataTables_length label {
            margin-top: 8px !important;
        }
        .srchbox input {
        padding: 5px !important;
        }
        .dataTables_length select, .srchbox input {
        border: 1px solid #ddd !important;  
        border-radius: 5px !important;
        font-size: 12px !important;
        }
        .srchbox input[type="submit"], .srchbox input[type="reset"] {
        padding-left: 10px !important;
        padding-right: 10px !important;
        background-color: #00b0e4 !important;
        color: #ffffff !important;
        border: none !important;
        }
        #productDetails_filter, #productDetails2_filter {
            display: inline-block !important;
            position: absolute !important;
            right: 23px !important;
            top: 9px !important;
        }
        .card .header h2 {
            margin: 0;
            font-size: 18px;
            font-weight: normal;
            color: #111; 
        }
        .card .body {
            /*font-size: 14px;*/
            color: #000;
            padding: 10px 20px;
        }
        .card .header {
            color: #555;
            padding: 22px 20px;
            position: relative;
            /*border-bottom: 1px solid rgba(204, 204, 204, 0.35); */
        }
        table.dataTable {
            margin-top: 0px !important;
        }
        .pagination > li > a, .pagination > li > span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        .pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
            color: #777;
            cursor: not-allowed;
            background-color: #fff;
            border-color: #ddd;
        }
        div.dataTables_wrapper div.dataTables_paginate {
            text-align: right;
        }
        .dataTables_info {
            width: 50%;
            float: left !important;
        }
        .dataTables_paginate {
            width: 50% !important;
            float: right !important;
            text-align: right;
        }
        .dataTables_paginate > ul.pagination {
            float: right;
        }
		.sr_counts {font-weight:600;color:#0056b3;}
        div.dataTables_wrapper div.dataTables_paginate {
    display:none !important
}
div.dataTables_wrapper div.dataTables_info {
    display:none !important

}


    </style>
         
         <div class="new-side-content">

<div class="row">
  <div class="col-md-12">
    <div class="card" style="border-style: none;background-color: white">
      <div class="card-header" style="border-style: none;background-color: white">
        <!-- <button href="#display_form" class="btn" data-toggle="collapse">Inactive/Deleted/Settled Profiles</button> -->
      </div>
    </div>
  </div>
</div>
<!-- <div style="width: 87%;float: left;">
<h5 style="text-align: center;font-size:22px;text-decoration: underline;"><?php echo $tot_rec; ?> profiles found</h5>
</div> -->

<div class="limiter">
  <div class="container-table100 py-0">
    <!-- <form type="get" name="inactive_search" class="row justify-content-center">
      <div style="float:left; font-size:1vw; margin-top:25px;">
        <div class="align-items-center" style="float:left; margin-right:1vw;">
          <div class="form-group form-inline align-self-center">
            <label class="form-group pr-10 h5" style="color: #07A0C3;">Profile Id : </label>
            <input type="text" name="profileid" id="profileid" style="border-color: #07A0C3; color: #07A0C3" value="<?php echo $this->input->get("profileid"); ?>"
              class="form-group form-control">
          </div>
        </div>

        <div style="float:left;">
          <div class="form-group form-inline">
            <button class="form-group form-control btn " id="search_prof_emp" style="background-color: #07A0C3; color: white;"> Search </button>
          </div>
        </div>
      </div>
    </form> -->
    <!-- changed now -->
    <form type="get" class=" d-flex col-12 mb-2 justify-content-center" name="inactive_search">
        <div class=" d-flex col-12 col-md-6 col-lg-5 justify-content-center align-items-center flex-row " >
                    <h6>Profile Id:</h6>
               <div class="col-6">
        <input type="text" name="profileid" id="profileid" class="form-control" value="<?php echo $this->input->get("profileid"); ?>" />
        </div>
              
             <button  class="btn btn-sm btn-success " id="search_prof_emp" > Search </button>                
               
         </div>
    </form>

    <div class="">
    <div class="row" style="margin-top: 20px;">

        <div class="col-md-3">
            <div class="card">
                <div class="card-header m-0 p-0 d-flex justify-content-center" style="margin-top: 10px; ">
                    <?php
                    // echo "<pre>"; print_r($posts['applicationphotopath']);die;
                    // foreach ($posts as $post) { print_r($post);die;  ?>
                    <?php if (!empty($posts["applicationphotopath"])) { ?>
                        <img src="<?php echo $posts["applicationphotopath"]; ?>" alt="Profile Image" class="rounded-top m-0 p-0"
                            width="200px"height ="190px"   >
                    <?php } ?>


                </div>
                <div class="card-body" style="">
                    <?php foreach ($payment_details as $details) { ?>
                        <h6 class="text-bold text-center" >
                            
                            <?php  echo $details['first_name'] . ' ' . $details['last_name']; ?>
                        </h6>
                        </br>
                        <div class="d-flex justify-content-center">
                        <span class="bg bg-danger text-light text-bold px-1   text-center align-self-center">
                            <!-- <strong style="color: #07A0C3;">Profile ID</strong> -->
                            <?php echo $details['profile_id']; ?>
                    </span>
                    </div>
                        <br>
                    <?php } ?>

                   

                </div>
            </div>
        </div>
        <div class="col-md-9  flex-col">
        <div class="col-md-12">
        <h5 class="card-title text-bold" style="color: #07A0C3;font-weight:bold;font-size:18px;text-align:center;">Profile Report</h5>
               <!--  profile report table  -->
               <table class="table table-responsive">
                         <thead>
                            <tr>
                            <th class="text-center text-wrap">Received Profiles</th>
                            <th class="text-center text-wrap">Opp sent Profiles</th>
                            <th class="text-center text-wrap">No Of Online Viewed</th>
                            <th class="text-center text-wrap">No Of Times Login</th>
                            <th class="text-center text-wrap">Last Login</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($profile_share_report as $row) { ?>
                                <tr>
                                    <td class="text-nowrap text-center">
                                        <?php echo $row['my_intrested']; ?>
                                    </td>
                                    <td class="text-nowrap text-center" >
                                        <?php echo $row['me_recived']; ?>
                                    </td>
                                    <td class="text-nowrap text-center">
                                    <?php echo count($viewed_contacts); ?>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <?php echo $row['number_of_times_login']; ?>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <?php echo $row['last_login']; ?>
                                    </td>

                                    

                                </tr>
                            <?php } ?>
                    </tbody>
                    </table>
    
    </div>
    <div class="col-md-12">
        <h5 class="card-title text-bold" style="color: #07A0C3;font-weight:bold;font-size:18px;text-align:center;">Interest Report</h5>
               <!--  Intrest report table  -->
               <table class="table table-responsive">
                         <thead>
                            <tr>
                            <th class="text-center text-wrap">Myside Interest</th>
                            <th class="text-center text-wrap">Opp Side Interest</th>
                            <th class="text-center text-wrap">Contact Exchanged</th>
                            <th class="text-center text-wrap">Match Meetings</th>
                            <th class="text-center text-wrap">Office Visitings</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($profile_share_report as $row) { ?>
                                <tr>
                                    <td class="text-nowrap text-center">
                                        <?php echo $row['my_intrest']; ?>
                                    </td>
                                    <td class="text-nowrap text-center" >
                                        <?php echo $row['another_person_intrestedonme']; ?>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <?php echo $row['contact_exchanged']; ?>
                                    </td>
                                    <td class="text-nowrap text-center">
                                        <?php echo $row['match_makings']; ?>
                                    </td>
                                    <td class="text-nowrap text-center">
                                      0
                                    </td>

                                    

                                </tr>
                            <?php } ?>
                    </tbody>
                    </table>
    
    </div>
                    </div>

        <!-- Second Card (Data Table) -->
      
    </div>
    <div class="col-md-12 mx-0 px-0 d-flex justify-content-center my-1">
            <div class="card">
               
                    <h5  class="card-title text-bold" style="color: #07A0C3;font-weight:bold;font-size:18px;text-align:center;">Data Table</h5>
                
                <div class="card-body" style="overflow-x:auto;">
                    <!-- Your data table HTML goes here -->
                    <table class="table table-responsive w-100">
                        <thead>
                            <tr>
                                <th class="text-nowrap text-center" >Register Date</th>
                                <th class="text-nowrap text-center" >date of payment</th>
                                <th class="text-nowrap text-center" >payment type</th>
                                <th class="text-nowrap text-center" >Expiry date</th>
                                <th class="text-nowrap text-center" >user type</th>
                                <th class="text-nowrap text-center" >amount</th>
                                <th class="text-nowrap text-center" >sa amount</th>
                                <th class="text-nowrap text-center" >paid times</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($payment_details as $row) { ?>
                                <tr>
                                    <td>
                                        <?php echo $row['registered_date']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['date_of_payment']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['payment_type']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['expiry_date']; ?>
                                    </td>

                                    <td>
                                        <?php echo $row['ms_usertype']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['registered_amount']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['saamount']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['paid_times']  ?>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
                   
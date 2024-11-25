<style>
    table.dataTable thead>tr>th,
    table.dataTable thead>tr>td {
        padding-right: 20px;
    }

    table>thead>tr:first-child {
        /* background-color: #00818e; */
        background-color: #07A0C3;
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
        display: block !important;
        position: relative !important;
        right: 0 !important;
        top: 5px !important;
    }

    /* Pagination & Pager ========================== */
    .pager li>a {
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        -ms-border-radius: 0 !important;
        border-radius: 0 !important;
        border: none !important;
        background-color: transparent !important;
        color: #222 !important;
        font-weight: bold !important;
    }

    .pager li a:focus,
    .pager li a:active {
        background-color: transparent !important;
    }

    .pagination .disabled a,
    .pagination .disabled a:hover,
    .pagination .disabled a:focus,
    .pagination .disabled a:active {
        color: #bbb !important;
    }

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

    .pagination>li>a {
        border: none !important;
        font-weight: bold !important;
        color: #000 !important;
    }

    .pagination>li:first-child>a,
    .pagination>li:last-child>a {
        width: auto !important;
        height: 32px !important;
        -webkit-border-radius: 0 !important;
        -moz-border-radius: 0 !important;
        -ms-border-radius: 0 !important;
        border-radius: 0 !important;
    }

    .pagination>li:first-child>a .material-icons,
    .pagination>li:last-child>a .material-icons {
        position: relative !important;
        bottom: 2px !important;
    }

    .pagination-sm>li:first-child>a,
    .pagination-sm>li:last-child>a {
        width: 28px !important;
        height: 28px !important;
    }

    .pagination-sm>li:first-child>a .material-icons,
    .pagination-sm>li:last-child>a .material-icons {
        position: relative !important;
        top: -1px !important;
        left: -6px !important;
        font-size: 20px !important;
    }

    .pagination-lg>li:first-child>a,
    .pagination-lg>li:last-child>a {
        width: 44px !important;
        height: 44px !important;
    }

    .pagination-lg>li:first-child>a .material-icons,
    .pagination-lg>li:last-child>a .material-icons {
        font-size: 30px !important;
        position: relative !important;
        top: -3px !important;
        left: -10px !important;
    }

    .dataTables_info,
    .dataTables_paginate {
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

    .dataTables_length select,
    .srchbox input {
        border: 1px solid #ddd !important;
        border-radius: 5px !important;
        font-size: 12px !important;
    }

    .srchbox input[type="submit"],
    .srchbox input[type="reset"] {
        padding-left: 10px !important;
        padding-right: 10px !important;
        background-color: #00b0e4 !important;
        color: #ffffff !important;
        border: none !important;
    }

    #productDetails_filter,
    #productDetails2_filter {
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

    .pagination>li>a,
    .pagination>li>span {
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

    .pagination>.disabled>span,
    .pagination>.disabled>span:hover,
    .pagination>.disabled>span:focus,
    .pagination>.disabled>a,
    .pagination>.disabled>a:hover,
    .pagination>.disabled>a:focus {
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

    .dataTables_paginate>ul.pagination {
        float: right;
    }

    .sr_counts {
        font-weight: 600;
        color: #0056b3;
    }
</style>

<div class="row new-side-content">
    <div class="col-md-12">
        <div class="card" style="border-style: none;background-color: white;">
            <div class="card-header" style="border-style: none;background-color: white">
                <!-- <button class="submit" style="width:300px; margin-left: 540px;">Payment Information</button> -->
                <h1 style="text-align: center;font-weight: 700px;font-size: 28px;">Service Report</h1>
            </div>
            <div class="card-body " style="width:100%;margin:auto;padding-top:2px;">

                <hr>
                <form>

                    <div class=" form-group row justify-content-center align-items-center">
                        <div class="col-form-label col-md-2 offset-md-2" style="font-size: 18px;font-weight: 900px">
                            <label style="padding-left: 20px; color: #07A0C3;" class="h4">
                                Profile ID :
                            </label>
                        </div>
                        <div class="form-group" style="width: 250px">
                            <input type="text" class="form-control" name="fromprofileid"
                                placeholder="Enter From Profile ID" id="fromprofileid" value="" style="border-color: #07A0C3">
                            <span id="profileids" class="font-weight-bold"
                                style="vertical-align: middle;color: red;"></span>
                        </div>
                        <div class="form-group" style="padding-left: 40px;">
                            <a href="#" id="sendProfile" class="btn "
                                style="color:white; background-color: #07A0C3">Go</a>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="container">
                    <div class="card-group">
                        <div class="row addprofiletoDiv">
                            <!-- <div class="card" style="width: 18rem;"><img src="..." class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">Card title</h5><p>Some quick example text to build on the card title and make up the bulk of the cards content.</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<section class="content">
    <div class="container-fluid cust"><!-- 
            <div class="block-header">
                <h2>Product Details</h2>
            </div> -->
        <!-- Exportable Table -->
        <div class="new-side-content">
            <div class="row clearfix" style="margin-top: 0px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h3 id="table1head" style="color: #07A0C3">
                            Profiles Received By Owner
                            </h3>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 f_counts" style="display:flex;">
                            </div>
                        </div>
                        <div class="body InvoiceDetail">
                            <div class="table-responsive" id="tableresponse" style="overflow: visible;">
                                <table id="productDetails"
                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Profile ID</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Resend Date</th>
                                            <th>Owner</th>
                                            <!--<th>Ticket ID</th>-->
                                            <th>Status</th>
                                            <th>Given By</th>
                                            <th>Status Date</th>
                                            <th>Share Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 25px;">
                    <div class="card">
                        <div class="header">
                            <h3 id="table2head">
                            Owner Profile Received By Customer
                            </h3>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 t_counts" style="display:flex;">
                            </div>
                            <!-- <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul> -->
                        </div>

                        <div class="body InvoiceDetail">
                            <div class="table-responsive" id="tableresponse" style="overflow: visible;">
                                <table id="productDetails2"
                                    class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Profile ID</th>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Resend Date</th>
                                            <th>Owner</th>
                                            <!-- <th>Ticket ID</th>-->
                                            <th>Status</th>
                                            <th>Given By</th>
                                            <th>Status Date</th>
                                            <th>Share Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
    </div>
</section>
<!-- Jquery Core Js -->
<script src="<?php echo base_url(); ?>assets/datatable/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<!-- ======================= JQuery libs =========================== -->
<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery-1.8.2.min.js"></script>

<script src="<?php echo site_url(); ?>design/js/bootstrap.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/bootstrap-select.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/modernizr.custom.26633.js"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery.gridrotator.js"></script>


<script type="text/javascript" src="<?php echo site_url(); ?>design/js/responsiveslides.min.js"></script>

<script src="<?php echo site_url(); ?>design/js/jquery.fitvids.min.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/easing.js" type="text/javascript"></script>

<script src="<?php echo site_url(); ?>design/js/jquery.ui.totop.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>design/js/waypoints.min.js"></script>


<!-- <script type="text/javascript" src="<?php echo site_url(); ?>design/js/jquery-func.js"></script> -->


<!-- pop image gallery  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider-min.js"></script>

<!-- date picker jquery start -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<!-- Jquery DataTable Plugin Js -->
<script src="<?php echo base_url(); ?>assets/datatable/jquery-datatable/jquery.dataTables.js"></script>
<script
    src="<?php echo base_url(); ?>assets/datatable/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/datatable/dataTables.checkboxes.min.js"></script> -->
<!-- Demo Js -->
<script src="<?php echo base_url(); ?>assets/datatable/dataTables.responsive.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/datatable/dataTables.checkboxes.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/datatable/dataTables.select.min.js"></script>
<script>
    $(document).ready(function () {


        var profile_id = '<?php echo $_GET["profileId"] ?>';
        if (profile_id != "") {
            getServicereport(profile_id);
        }

        graphDrawer = function (data) {
            table = $('#productDetails').DataTable({
                "ordering": false,
                responsive: false,
                // scrollX: true,
                language: {
                    searchPlaceholder: "Master Search",
                    lengthMenu: "Show:  _MENU_",
                },
                dom: 'lBfrtip',
                buttons: [
                ],
                data: data.fdata,
                autoWidth: false,
                searching: true,
                pageLength: 25,
                bDestroy: true,
                bFilter: true,
                columns: [

                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return '<a href="<?php echo base_url("admin/admin_search/viewprofile"); ?>/' + row.from_msID + '"   target="_blank" >' + row.FproID + '</a>';
                                // return row.FproID;
                            }
                            else {
                                return '<a href="<?php echo base_url("admin/admin_search/viewprofile"); ?>/' + row.to_msID + ' " target="_blank" >' + row.TproID + '</a>';
                                // return row.TproID;                            
                            }
                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return row.FproFnm + " " + row.FproLnm;
                            }
                            else {
                                return row.TproFnm + " " + row.TproLnm;
                            }
                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {

                            if (row.send_Date != "0000-00-00 00:00:00") {
                                return row.send_Date;
                            }
                            else {
                                return " - - -";
                            }
                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {

                            if (row.revsend_Date !== null && row.revsend_Date !== undefined && row.revsend_Date !== "00-00-0000 00:00") {

                                return row.revsend_Date;
                            }
                            else {
                                return "- - - ";
                            }

                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return row.FpsID;
                            }
                            else {
                                return row.TpsID;
                            }
                        }
                    },
                    // {data: "f_ticketid"},
                    {
                        data: "f_status", render: function (rec, type, row) {

                            if (row.checkId == row.from_msID) {
                                if (rec == 0) {
                                    return "Not Viewed";
                                }
                                else if (rec == 1) {
                                    return "Viewed";
                                }
                                else if (rec == 2) {
                                    return "<span class='text-warning'><strong>Interested</strong></span>";
                                }
                                else if (rec == 3) {
                                    return "Not Interested";
                                }
                            }
                            if (row.checkId == row.to_msID) {
                                if (row.f_status == 0) {
                                    return "Not Viewed";
                                }
                                else if (row.f_status == 1) {
                                    return "Viewed";
                                }
                                else if (row.f_status == 2) {
                                    return "<span class='text-warning'><strong>Interested</strong></span>";
                                }
                                else if (row.f_status == 3) {
                                    return "Not Interested";
                                }
                            }
                        }
                    },

                    { data: "sendName" },
                    {
                        data: "fs_Date", render: function (rec, type, row) {
                            if (row.f_status == 1) {
                                return row.fs_Date;
                            }
                            else {
                                return " - - -";
                            }
                        }
                    },
                    {
                        data: "share_type", render: function (rec, type, row) {
                            if (rec == '') {
                                return "Email";
                            }
                            else {
                                return rec;
                            }
                        }
                    },
                ],
                select: {
                    style: 'multi',
                    selector: 'td:first-child'
                },
                aaSorting: [2, "desc"],
                deferRender: true,
                bDeferRender: true,
                deferLoading: 10,
                bDeferLoading: 10,
                stateSave: false,
            });
        }

        graphDrawer1 = function (data) {
            table = $('#productDetails2').DataTable({
                "ordering": false,
                responsive: false,
                // scrollX: true,
                language: {
                    searchPlaceholder: "Master Search",
                    lengthMenu: "Show:  _MENU_",
                },
                dom: 'lBfrtip',
                buttons: [
                ],
                data: data.tdata,
                autoWidth: false,
                searching: true,
                pageLength: 25,
                bDestroy: true,
                bFilter: true,
                columns: [

                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return '<a href="<?php echo base_url("admin/admin_search/viewprofile"); ?>/' + row.from_msID + ' " target="_blank" >' + row.FproID + '</a>';
                                // return row.FproID;
                            }
                            else {
                                return '<a href="<?php echo base_url("admin/admin_search/viewprofile"); ?>/' + row.to_msID + ' " target="_blank" >' + row.TproID + '</a>';
                                // return row.TproID;                            
                            }
                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return row.FproFnm + " " + row.FproLnm;
                            }
                            else {
                                return row.TproFnm + " " + row.TproLnm;
                            }
                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return row.send_Date;
                            }
                            else {
                                return " - - - ";
                            }
                        }
                    },
                    {
                        data: "to_msID", render: function (rec, type, row) {
                            if (row.checkId == rec) {
                                return row.revsend_Date;
                            }
                            else {
                                return "- - - -";
                            }
                        }
                    },
                    {
                        data: "FpsID", render: function (rec, type, row) {

                            if (row.checkId == rec) {
                                return row.FpsID;
                            }
                            else {
                                return row.TpsID;
                            }
                        }
                    },
                    //  {data: "t_ticketid"},
                    {
                        data: "t_status", render: function (rec, type, row) {
                            console.log(row)
                            if (row.checkId != row.to_msID) {
                                if (rec == 0) {
                                    return "Not Viewed";
                                }
                                else if (rec == 1) {
                                    return "Viewed";
                                }
                                else if (rec == 2) {
                                    return "<span class='text-warning'><strong>Interested</strong></span>";
                                }
                                else if (rec == 3) {
                                    return "Not Interested";
                                }
                            }
                            if (row.checkId != row.from_msID) {
                                if (row.t_status == 0) {
                                    return "Not Viewed";
                                }
                                else if (row.t_status == 1) {
                                    return "Viewed";
                                }
                                else if (row.t_status == 2) {
                                    return "<span class='text-warning'><strong>Interested</strong></span>";
                                }
                                else if (row.t_status) {
                                    return "Not Interested";
                                }

                            }
                        }
                    },
                    { data: "sendName" },
                    {
                        data: "ts_Date", render: function (rec, type, row) {
                            // console.log(rec);
                            if (rec == '00-00-0000 00:00') {
                                return "- - - -";
                            }
                            else {
                                return rec;
                            }
                        }
                    },
                    {
                        data: "share_type", render: function (rec, type, row) {

                            if (rec == '') {
                                return "Email";
                            }
                            else {
                                return rec;
                            }
                        }
                    },
                ],
                select: {
                    style: 'multi',
                    selector: 'td:first-child'
                },
                aaSorting: [2, "desc"],
                deferRender: true,
                bDeferRender: true,
                deferLoading: 10,
                bDeferLoading: 10,
                stateSave: false,
            });
        }

        getData = function (argument) {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/getServiceData",
                data: "",
                cache: false,
                success: function (data) {
                    var d = JSON.parse(data);
                    //alert(d);
                    graphDrawer(d);
                    graphDrawer1(d);
                    setTimeout(function () {
                        $("table#productDetails").wrap("<div style='width: 100%; overflow-x: auto;'></div>");
                    }, 100);
                }
            });
        }
        getData();

        $("#sendProfile").on("click", function () {

            var profileID = $("#fromprofileid").val();
            getServicereport(profileID);
        });
        function getServicereport(profileID) {
            // alert(1);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/getIDServiceData",
                data: 'profileID=' + profileID,
                cache: false,
                success: function (data) {
                    if (data != 0) {
                        var dt = JSON.parse(data);
                        $(".f_counts").html('<div class="col-md-2">Total (<span class="sr_counts">' + dt.fCounts.fTotalCount + '</span>)</div>' +
                            '<div class="col-md-2">Interested (<span class="sr_counts">' + dt.fCounts.fInterested + '</span>)</div>' +
                            '<div class="col-md-2">Not Interested (<span class="sr_counts">' + dt.fCounts.fNotInterested + '</span>)</div>' +
                            '<div class="col-md-2">Viewed (<span class="sr_counts">' + dt.fCounts.fViewed + '</span>)</div>' +
                            '<div class="col-md-2">Not Viewed (<span class="sr_counts">' + dt.fCounts.fNotViewed + '</span>)</div>');

                        $(".t_counts").html('<div class="col-md-2">Total (<span class="sr_counts">' + dt.tCounts.tTotalCount + '</span>)</div>' +
                            '<div class="col-md-2">Interested (<span class="sr_counts">' + dt.tCounts.tInterested + '</span>)</div>' +
                            '<div class="col-md-2">Not Interested (<span class="sr_counts">' + dt.tCounts.tNotInterested + '</span>)</div>' +
                            '<div class="col-md-2">Viewed (<span class="sr_counts">' + dt.tCounts.tViewed + '</span>)</div>' +
                            '<div class="col-md-2">Not Viewed (<span class="sr_counts">' + dt.tCounts.tNotViewed + '</span>)</div>');

                        // var T = JSON.parse(data.tdata);
                        graphDrawer(dt);
                        graphDrawer1(dt);
                        $("#table1head").text('' + dt.data.first_name + ' ' + dt.data.last_name + ' received this Profile');
                        setTimeout(function () {
                            $("table#productDetails").wrap("<div style='width: 100%; overflow-x: auto;'></div>");
                        }, 100);

                        $("#table2head").text('Customer who received ' + dt.data.first_name + ' ' + dt.data.last_name + ' Profile');

                        setTimeout(function () {
                            $("table#productDetails2").wrap("<div style='width: 100%; overflow-x: auto;'></div>");
                        }, 100);
                    }
                    else {
                        alert("Please enter valid profile id");
                    }
                }
            });
        }

    });
</script>
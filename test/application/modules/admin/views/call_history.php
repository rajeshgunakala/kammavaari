<style>
    #cust_call_log_list {
        list-style-type: none;
        height: 95%;
        color: black;
    }

    #cust_call_log_list li {
        margin-top: 1vw;
        width: 100%;
    }

    .btn_save_reg {
        margin-left: 20px;
    }

    #btn_view_call_history {
        width: 60%;
        height: 100%;
        float: left;
        font-size: 1em;
    }

    #btn_log_call_history {
        width: 60%;
        height: 100%;
        float: left;
        font-size: 1em;
    }

    .cust_call_hsitory_tab {
        margin-top: 20px;
        width: 100%;
        height: 40px;
        float: left;
    }

    .form-inline>* {
        margin: 5px 3px;
    }

    .btn-ms-main {
        background-color: #fd9f17;
    }
</style>
<input type="hidden" name="txt_staffid" class="txt_staffid" value="<?php echo $user_id; ?>" />
<div class="new-side-content">
    <div style="width:100%;float:left; padding:20px; margin-top: 0px;">
        <div class="text-center">
            <h3 style="color:#f97932;font-weight: 700; font-size: 16px !important;">Marketing Slide</h3>
            <!-- notification area start  -->
            <div style="margin-bottom:10px;" id="notification">
            </div>
        </div>
        <?php if ($type == "multiple") { ?>
            <!-- search area start  -->
            <div style="width:100%; font-size:1vw; max-width: 760px; margin: auto;text-align:center;">
                <div style="">
                    <div class="form-group form-inline" style="justify-content: center;">
                    <div class="d-flex <?php if ($this->session->userdata('type') == 'staff')
                        echo 'dn'; ?>">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">Employee:</label>
                        <select class="form-group form-control" id="emp_drop_down"> </select>
                    </div>
                    <div class="d-flex">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">Payment:</label>
                        <select class="form-group form-control" id="payment">
                            <!--<option value="0">Select</option>-->
                            <option value="">Choose One</option>
                            <option value="paid">Paid</option>
                            <option value="unpaid">Unpaid</option>
                        
                        </select>
                    </div>
                    </div>
                </div>
                

                <div style="display:inline-block;margin-right:1vw;">
                    <div class="form-group form-inline">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">Profile Id:</label>
                        <input type="text" name="profile_id" id="profile_id" class="form-group form-control"
                            style="width:100px;">
                    </div>
                </div>
                <div style="display:inline-block;margin-right:1vw;">
                    <div class="form-group form-inline">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">Surname:</label>
                        <input type="text" name="surname" id="surname" class="form-group form-control" style=" max-width: 160px;">
                    </div>
                </div>
                <div style="display:inline-block;margin-right:1vw;">
                    <div class="form-group form-inline">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">Name:</label>
                        <input type="text" name="firstname" id="firstname" class="form-group form-control" style=" max-width: 160px;">
                    </div>
                </div>
            </div>
        

            <div style="width:100%; font-size:1vw; max-width: 760px; margin: auto; text-align:center;">
                <div style="display:inline-block;margin-right:1vw;">
                    <div class="form-group form-inline">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">DOR From :</label>
                        <input type="text" class="form-group form-control" style=" max-width: 140px;" id="dor_from" />
                    </div>
                </div>

                <div style="display:inline-block;margin-right:1vw;">
                    <div class="form-group form-inline">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">To : </label>
                        <input type="text" class="form-group form-control" style=" max-width: 140px;" id="dor_to" />
                    </div>
                </div>

                <div style="display:inline-block;margin-right:1vw;">
                    <div class="form-group form-inline">
                        <label class="form-group" style="color : #07A0C3;    font-weight: 700;">Application Status :</label>
                        <select class="form-group form-control" id="app_status">
                            <!--<option value="0">Select</option>-->
                            <option value="1">Active</option>
                            <option value="2">Deleted</option>
                            <option value="3">Closed</option>
                        </select>
                    </div>
                </div>
            

                <div style=" clear: both;">
                    <div class="form-group form-inline" style="justify-content: center;">
                        <button class="form-group form-control btn " id="search_prof_emp"
                            style="background-color: #07A0C3; color: white;box-shadow: 0px 8px 15px rgb(0 0 0 / 20%);"> Search </button>
                    </div>
                </div>
            </div>
            <!-- search area end  -->


            <!-- profiles assigned information start -->
            <div id="info_div" class="form-group" style="widht:100%; font-size:1vw;">
                <label style="color: #f97932;font-weight: 700;font-size: 18px !important;" class="h5"> Total Profiles : </label>
                <label id="profile_count" style="color: #f97932;font-weight: 700;font-size: 18px !important; margin-right: 20px;"> </label>
                
                <label style="color: #f97932;font-weight: 700;font-size: 18px !important;" class="h5"> Present Profile Loaded : </label>
                <label id="cur_profile" style="color: #f97932;font-weight: 700;font-size: 18px !important;"> </label>
            </div>
        <?php } ?>
        <!-- profiles assigned information end -->
        <div style="widht:100%;float:left;font-size:1vw; ">
            </hr>
        </div>

        <!-- single profile details start -->
        <div id="user_profile_result" style="width: 100%; float:left; margin-bottom:20px;height:60%;">

            <?php if ($type == "multiple") { ?>

                <!-- previouse profile selection start -->
                <div style="width:4%; float:left;  border:1px solid white;">
                    <!-- position: absolute;top:50%; -->
                    <span class="btn btn-warning" style="font-size:1vw;position: fixed;top:50%;"
                        id="prof_prev_action">Prev</span>
                </div>
                <!-- previouse profile selection end -->
            <?php } ?>
            <!-- main profile info area  start -->
            <div id="prof_display" style="width:92%;float:left;height:100%; ">


                <!-- customer profile detials information start -->
                <div id="cust_profile_info"
                    style="width: 30%;float: left;font-size: 0.8vw;margin-left: 2%;padding-top: 20px;border: 2px solid #07a0c3;padding-bottom: 2vw;display: block;box-shadow: 0px 8px 15px rgb(0 0 0 / 20%);padding-left: 15px;padding-right: 15px;border-radius: 5px;padding-bottom:15px;">
                    <div style="display: flex; justify-content: center; ">
                        <div class="all-images">
                            <ul class="bxslider"
                                style="min-height:200px;max-height:200px;overflow: hidden;text-align: center;">

                                <img id="profile_img" src="<?php echo base_url(); ?>assets/img/img_avatar.png"
                                    width="200px; height=200px;" class="profil-img" /> </br></br>
                            </ul>
                        </div>
                    </div>
                    </br>
                    
                    <div style="font-size:1vw; width:102%; margin-left:-6px;float:left; ">

                        <div class="form-inline form-group" style="margin-bottom: 8px;">
                            <label style="font-weight: 800;font-size: 13px;">DOR : </label>
                            <label id="cust_dor"></label>
                            <label> : </label>
                            <label id="cust_edit_profile"></label>
                        </div>
                        
                    <div class="form-inline form-group" style="margin-bottom: 8px;">
                            <label style="font-weight: 800;font-size: 13px;">Paid Status : </label>
                            <label id="paid_status"></label>
                          
                        </div>
                        <div class="form-inline form-group" style="margin-bottom: 8px;">
                            <label style="font-weight: 800;font-size: 13px;">Name : </label>
                            <label id="cust_name"></label> <label id="cust_ms_profile_id"></label>
                        </div>
                        <div class="form-inline form-group" style="margin-bottom: 8px;">
                            <label style="font-weight: 800;font-size: 13px;">Mobile No : </label>
                            <label id="cust_mobile_no"></label>
                        </div>
                        <div class="form-inline form-group" style="margin-bottom: 8px;">
                            <label style="font-weight: 800;font-size: 13px;">Father No : </label>
                            <label id="cust_father_no"></label>
                        </div>
                        <div class="form-inline form-group" style="margin-bottom: 8px;">
                            <label style="font-weight: 800;font-size: 13px;">Reminder Date : </label>
                            <input type="datetime-local" class="form-control" style="width:140px;" id="reminder_datee">
                        </div>
                        <div class="form-inline form-group" style="margin-bottom: 8px;">
                        <label style="font-weight: 800;font-size: 13px;">Notepad : </label>
                        <textarea type="text" class="form-control" style="width:188px; height: 70px;" id="reason"></textarea>

                        </div>
                            <button class="btn form-control" id="btn_save_reminder"
                                style="background-color: #07A0C3; color: white;">Reminder</button>
                        
                    </div>
                </div>
                <!-- customer profile detials information end -->

                <!-- customer call related info start -->
                <div id="cust_call_history"
                    style="width: 60%;float: left;margin-left: 4vw;margin-right: 2%;height: 100%;border: 2px solid rgb(7, 160, 195);display: block;box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 15px;border-radius: 5px;max-height: 650px;overflow-y: auto;background: #fff;padding-right: 15px;height:540px;">
                    <input type='hidden' id="cust_profile_id">

                    <!-- fee related stuff start -->
                    <div
                        style="width:100%;float:left; height:3em; margin-top:1.5em;display: flex; align-items: right; justify-content: center;">
                        <div style="width:50%;float:left; height:3em;padding-left:2vw;">
                            <div class="form-inline form-group">
                                <label class="form-group" style="font-size:1vw; color: #07A0C3;">Reg Fee: </label>
                                <input type="text" readonly="readonly" style="width:110px;"
                                    class="form-control form-group" id="reg_fee" />
                                <input type="button" class="btn btn-warning form-control form-group dn"
                                    id="btn_save_reg_fee" value="Save" />
                            </div>
                        </div>
                        <div
                            style="width:50%;float:left; height:3em; display: flex;  align-items: right;  justify-content: center;">
                            <div class="form-inline form-group">
                                <label class="form-group" style="font-size:1vw; color: #07A0C3;">Sa Fee: </label>
                                <input type="text" readonly="readonly" class="form-control form-group"
                                    style="width:110px;" id="sa_fee" />
                                <input type="button" class="btn btn-warning form-group dn" id="btn_save_sa_fee"
                                    value="Save" />
                            </div>
                        </div>
                    </div>
                    <!-- fee related stuff end -->

                    <!-- call data view edit start -->
                    <div class="cust_call_hsitory_tab" style="float:left;">
                        <div
                            style="width:50%;float:left;display: flex;  align-items: right; justify-content: center; ">
                            <div id="btn_view_call_history" class="btn"> View Call history</div>
                        </div>
                        <div
                            style="width:50%;float:left;display: flex; align-items: center;  justify-content: center; ">
                            <div id="btn_log_call_history" class="btn"> Call Entry </div>
                        </div>
                    </div>
                    <!-- call data view edit end -->


                    <div style="width:100%;float:left; font-size:1vw; ">

                        <!-- call data start -->
                        <div class="cust_call_hsitory_list list-group row" style="padding-left:2vw; margin-top:1vw;
    margin-bottom: 10px;width:100%;
    overflow:auto; min-height:350px;
    -webkit-overflow-scrolling: touch;">
                            <ul id="cust_call_log_list"> </ul>
                        </div>
                        <!-- call data end -->

                        <!-- call data entry start  -->
                        <div class="cust_call_hsitory_log"
                            style=" width: 100%;float:left; height: 88%; margin-top:2vw;">
                            <div class="form-check-inline form-group" style="padding-left:1vw; float:left; width:100%;">
                                <div class="col-md-3 ">
                                    <lable style="margin-right:1vw;color: #07a0c3;font-weight: 700;"> Call Type:</lable>
                                </div>
                                <div class="col-md-3 form-check-inline form-group  mb-0 ">
                                    <input type="radio" class="radio-inline mx-2" checked name="call_type"
                                        value="cl_type_incoming"> Incoming Call
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0 ">
                                    <input type="radio" class="radio-inline mx-2" name="call_type"
                                        value="cl_type_outgoing"> Outgoing Call
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0 ">
                                    <input type="radio" class="radio-inline mx-2" name="call_type" value="cl_type_memo">
                                    Memo
                                </div>
                            </div>
                            <div class="form-check-inline form-group" style="padding-left:1vw; float:left; width:100%;">
                            <div class="col-md-3">
                                    <lable style="margin-right:1vw;color: #07a0c3;font-weight: 700;">Call Success:</lable>
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0">
                                    <input type="radio" class="radio-inline mx-2" checked name="call_success_type"
                                        value="cl_status_connected"> Connected
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0">
                                    <input type="radio" class="radio-inline mx-2" name="call_success_type"
                                        value="cl_status_not_connected"> Not Connected
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0">
                                    <input type="radio" class="radio-inline mx-2" name="call_success_type"
                                        value="cl_status_switch_off"> Switched Off
                                </div>
                            </div>

                            <div class="form-check-inline form-group" style="padding-left:1vw; float:left; width:100%;">
                            <div class="col-md-3">
                                    <lable style="margin-right:1vw;color: #07a0c3;font-weight: 700;">Service Type:</lable>
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0">
                                    <input type="radio" class="radio-inline mx-2" checked name="call_service_type"
                                        value="cl_type_service"> Service
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0">
                                    <input type="radio" class="radio-inline mx-2" name="call_service_type"
                                        value="cl_type_marketing"> Marketing
                                </div>
                                <div class="col-md-3 form-check-inline form-group mb-0">
                                    <input type="radio" class="radio-inline mx-2" name="call_service_type"
                                        value="cl_type_followup"> Follow Up
                                </div>
                            </div>


                    
                            
                            <div class="form-check-inline form-group" style="padding-left:1vw; float:left; width:100%;">
                                <div style="display:inline-block; width:150px;">
                                    <lable style="margin-right:1vw;color: #07a0c3;font-weight: 700; margin-left: 17px;">Call Discussion:</lable>
                                </div>
                                <div style="display:inline-block; width:70%;">
                                <textarea rows="10" style="width:100%;height: 120px;" class="form-control" id="call_descption"
                                    name="description"> </textarea>
                                </div>
                            </div>
                            <div class="form-inline form-group" style="padding-left:1em;  width:100%;">
                               
                                
                                
                                <div style="width:100%;  text-align:center;  height:50px;">
                                    <button id="btn_save_call_log"
                                        style="width:20%; float:left; margin-left:40%; height:100%; background-color: #07A0C3; color : white;"
                                        class="btn  form-control"> Submit</button>
                                </div>
                            </div>
                        </div>
                        <!-- call data entry end -->
                    </div>

                </div>
                <!-- customer call related info end -->

            </div>
            <!-- main profile info area  stop -->
            <?php if ($type == "multiple") { ?>

                <!-- next profile selection start -->
                <div style="width:4%;height:100%;float:left; right: 0px;">
                    <span class="btn btn-warning" style="position: fixed;top:50%;font-size:1vw;"
                        id="prof_next_action">Next</span>
                </div>
            <?php } ?>
            <!-- next profile selection end -->
        </div>
        <!-- single profile details end -->

        <!-- image modal popup start -->
        <div class="sliderPop" style="display:none;">
            <div class="ct-sliderPop-container" id="modalData">
            </div>
        </div>
        <!-- image modal popup start -->
    </div>
</div>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function () {

        var g_profile_list = [];
        var g_profile_postion = 1;
        var get_profile_id = '<?php echo isset($_GET["profileId"]) ? $_GET["profileId"] : ""; ?>';


        $('#prof_prev_action').click(function () {
            var len = g_profile_list.length;
            if (len != 0) {
                if (g_profile_postion > 1) {
                    g_profile_postion--;
                    $("#cur_profile").html(g_profile_postion);
                    getUserInormation(g_profile_list[g_profile_postion - 1].user_id);
                    if (1 >= g_profile_postion) {
                        $("#prof_prev_action").addClass('disabled');
                    } else {
                        $("#prof_prev_action").removeClass('disabled');
                        $("#prof_next_action").removeClass('disabled');
                    }
                } else {
                    $("#prof_prev_action").addClass('disabled');
                }
            }
        });

        $('#prof_next_action').click(function () {
            var len = g_profile_list.length;
            console.log('lsdfsd');
            if (len != 0) {
                if (len > g_profile_postion) {
                    g_profile_postion++;
                    $("#cur_profile").html(g_profile_postion);
                    getUserInormation(g_profile_list[g_profile_postion - 1].user_id);
                    if (len < g_profile_postion) {
                        $("#prof_next_action").addClass('disabled');
                    } else {
                        $("#prof_next_action").removeClass('disabled');
                        $("#prof_prev_action").removeClass('disabled');
                    }
                }
            }
        });





        function showSuccessAlert(message) {
            var alert = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> ' + message + '</div>';
            $('#notification').html(alert);
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3000);
        }

        function showErrorAlert(message) {
            var alert = '<div class="alert alert-danger"> <strong>Error!</strong> ' + message + ' </div>';
            $('#notification').html(alert);
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3000);

        }

        function loadEmployeeData() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_employees",
                dataType: 'json',
                success: function (result) {
                    if (result.success == "1") {
                        var employees = result.data.employees;
                        var option_data = '<option value="0" >Select</option>';
                        employees.forEach(function (employee) {
                            if (employee["emp_id"] == <?php echo $user_id; ?>) {
                                option_data += '<option value="' + employee["emp_id"] + '" selected >' + employee["emp_name"] + '</option>';
                            } else {
                                option_data += '<option value="' + employee["emp_id"] + '" >' + employee["emp_name"] + '</option>';
                            }
                        });
                        $('#emp_drop_down').html(option_data);
                    } else {
                        console.log("errorr");
                    }
                },
                error: function (xhr, error) {
                    console.log("error");
                }
            });
        }

        $('#cust_profile_info').hide();
        $('#cust_call_history').hide();

        $(".cust_call_hsitory_log").hide();
        $(".cust_call_hsitory_list").show();

        $("#btn_view_call_history").toggleClass('btn-warning');
        $("#btn_log_call_history").toggleClass('btn-default');

        <?php if ($type == "multiple" && $_GET["profileId"] == "") { ?>
            loadEmployeeData();
            loadProfileList();
        <?php } ?>


        $("#btn_log_call_history").click(function () {
            show_log_box();
        });

        function show_history() {
            $(".cust_call_hsitory_log").hide();
            $(".cust_call_hsitory_list").show();

            $("#btn_view_call_history").addClass('btn-warning').removeClass('btn-default');
            $('#btn_log_call_history').addClass('btn-default').removeClass('btn-warning');

        }

        function show_log_box() {
            $(".cust_call_hsitory_log").show();

            $(".cust_call_hsitory_list").hide();
            $("#btn_view_call_history").addClass('btn-default').removeClass('btn-warning');
            $('#btn_log_call_history').addClass('btn-warning').removeClass('btn-default');

        }

        $("#btn_view_call_history").click(function () {
            show_history();
        });


        $('#search_prof_emp').click(function () {
            var em_selected = $('#emp_drop_down').find("option:selected").val();
            var dor_from = $('#dor_from').val().trim();
            var dor_to = $('#dor_to').val().trim();
            var app_status = $('#app_status').find("option:selected").val().trim();
            var profile_id = $('#profile_id').val().trim();
            var surname = $('#surname').val().trim();
            var firstname = $('#firstname').val().trim();
            var payment = $('#payment').find("option:selected").val().trim();
            
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_association_search",
                dataType: 'json',
                data: {
                    emp_id: em_selected,
                    dor_from: dor_from,
                    dor_to: dor_to,
                    app_status: app_status,
                    profile_id: profile_id,
                    surname: surname,
                    firstname: firstname,
                    payment : payment

                },
                success: function (result) {
                    console.log(result);
                    if (result.success == "1") {
                        var users = result.data.users;
                        if (users.length > 0) {
                            recordsFound();
                            parseProfileList(users);

                        } else {
                            norecordsFound();
                        }
                    } else {
                        norecordsFound();
                    }
                },
                error: function (xhr, error) {
                    norecordsFound();
                }
            });
        });


        //Get profile by Id
        if (get_profile_id != "") {
            var dor_from = $('#dor_from').val().trim();
            var dor_to = $('#dor_to').val().trim();
            var app_status = $('#app_status').find("option:selected").val().trim();
            var profile_id = get_profile_id;
            var surname = $('#surname').val().trim();
            var firstname = $('#firstname').val().trim();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_association_search",
                dataType: 'json',
                data: {
                    emp_id: <?php echo $user_id; ?>,
                    dor_from: dor_from,
                    dor_to: dor_to,
                    app_status: app_status,
                    profile_id: profile_id,
                    surname: surname,
                    firstname: firstname
                },
                success: function (result) {
                    //console.log(result);
                    if (result.success == "1") {
                        var users = result.data.users;
                        if (users.length > 0) {
                            recordsFound();
                            parseProfileList(users);

                        } else {
                            norecordsFound();
                        }
                    } else {
                        norecordsFound();
                    }
                },
                error: function (xhr, error) {
                    norecordsFound();
                }
            });
        }

        function parseProfileList(users) {
            var first_cust_id = '';
            g_profile_list = [];
            g_profile_postion = 0;

            if (Array.isArray(users)) {
                users.forEach(function (element) {
                    if (first_cust_id == '') {
                        first_cust_id = element["user_id"];
                    }
                    g_profile_list.push(element);
                    g_profile_postion = 1;
                });
            } else {
                g_profile_list.push(users);
                g_profile_postion = 1;
            }
            $('#profile_count').html(g_profile_list.length);
            $('#cur_profile').html(g_profile_postion);

            if (first_cust_id != '') {
                $('#cust_profile_info').show();
                $('#cust_call_history').show();
                $('#cust_profile_id').val(first_cust_id);
                g_profile_postion = 1;
                $("#prof_prev_action").addClass('disabled');
                getUserInormation(first_cust_id);

            }

        }


        function norecordsFound() {
            $('#user_profile_result').hide();
            $('#info_div').hide();
            showErrorAlert("No records found");
        }

        function recordsFound() {
            console.log("recordsFound");
            $('#user_profile_result').show();
            $('#info_div').show();
        }


        function loadProfileList() {

            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_emp_associated_profiles",
                dataType: 'json',
                data: {
                    emp_id: <?php echo $user_id ?>, user_id: <?php echo ($seluserid) ? $seluserid : '0'; ?>
                },
                success: function (result) {
                    // console.log(result);

                    if (result.success == "1") {
                        var users = result.data.users;
                        if (users.length > 0) {
                            recordsFound();
                            parseProfileList(users);

                        } else {
                            norecordsFound();
                        }
                    } else {
                        console.log("errorr");
                        norecordsFound();
                    }
                },
                error: function (xhr, error) {
                    console.log("error");
                }
            });
        }


        function getUserInormation(userId) {
            console.log("getUserInormation : " + userId);
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_user_info",
                dataType: 'json',
                data: {
                    user_id: userId
                },
                success: function (result) {
                    if (result.success == "1") {
                        if (result.data.found == 1) {
                            console.log(result);
                            $("#prof_display").show();
                            var profile_url = '';
                            if (result.data.user.profile_url == "img_avatar.png") {
                                profile_url = "<?php echo base_url(); ?>assets/img/" + result.data.user.profile_url;
                            } else {
                                profile_url = result.data.user.profile_url;
                            }
                            $('#profile_img').attr({
                                "src": profile_url
                            });

                            var images = result.data.user.images_info;

                            var modal = '';

                            images.forEach(function (images) {

                                modal += '<div class="ct-sliderPop ct-sliderPop-slide' + images['photos_id'] + ' open"><div class="inner"><a href="' + images['applicationphotopath'] + '"> <img src="' + images['applicationphotopath'] + '" class="profil-img"/></a><a class="ct-newsletter-close ct-sliderPop-close" href="#"><img alt="close" src="https://www.solodev.com/assets/popup-slider/popup-close.png"/></a></div></div>';

                            });

                            $("#modalData").html(modal);

                            $('.sliderPop').removeData("flexslider");

                            $('#cust_profile_id').val(result.data.user.user_id);
                            // $('#cust_profile_id').val(result.data.user.profile_id);
                            $('#cust_name').html(result.data.user.user_name);
                            $('#cust_ms_profile_id').html('<a href="https://www.kammavaari.com/admin/admin_search/viewprofile/' + result.data.user.user_id + '" target="_blank" >( ' + result.data.user.user_ms_id + ' )</a>');
                            $('#cust_edit_profile').html('<a href="<?php echo base_url()?>/admin/edit_profile/' + result.data.user.user_id + '" target="_blank" >( Edit Profile )</a>');

                            $('#cust_mobile_no').html(result.data.user.user_mobile);
                            $('#cust_dor').html(result.data.user.user_dor);
                            $('#cust_father_no').html(result.data.user.father_mobile);
                            $('#paid_status').html(result.data.user.paid_status);
                            // /* $('#reg_fee').val(result.data.user.reg_fee);
                            //  $('#sa_fee').val(result.data.user.sa_fee);*/
                            //alert(result.data.user.reg_amount);
                            $('#reg_fee').val(result.data.user.reg_amount);
                            $('#sa_fee').val(result.data.user.setllement_amount);


                            $('#reminder_date').val(result.data.user.rem_date);
                            get_chat_logs();
                            setDatePicker();
                        } else {
                            showErrorAlert("User infomation not correct!");
                            $("#prof_display").hide();
                        }
                    } else {
                        $("#prof_display").hide();
                        showErrorAlert("Unable to retrived user information");
                    }
                },
                error: function (xhr, error) {
                    $("#prof_display").hide();
                    showErrorAlert("Unable to retrived user information");
                }
            });
        }

        $('#btn_save_reg_fee').click(function (e) {
            var reg_fee = $('#reg_fee').val().trim();
            if (reg_fee == '') {
                showErrorAlert("Please enter Registration Fee to save!!");
            } else {
                var cust_profile_id = $('#cust_profile_id').val();
                console.log(reg_fee);
                console.log(cust_profile_id);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/save_customer_reg_fee",
                    dataType: 'json',
                    data: {
                        cust_profile_id: cust_profile_id,
                        cust_reg_fee: reg_fee
                    },
                    success: function (result) {
                        if (result.success == "1") {
                            showSuccessAlert("Registration Fees saved successfully");
                        }
                    },
                    error: function (xhr, error) {
                        showErrorAlert("Problem in saving Registration Fees");
                    }
                });
            }

        });

        $('#btn_save_sa_fee').click(function (e) {
            var sa_fee = $('#sa_fee').val().trim();
            if (sa_fee == '') {
                showErrorAlert("Please enter SA Fee to save!!");
            } else {
                var cust_profile_id = $('#cust_profile_id').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/save_customer_sa_fee",
                    dataType: 'json',
                    data: {
                        cust_profile_id: cust_profile_id,
                        cust_sa_fee: sa_fee
                    },
                    success: function (result) {
                        if (result.success == "1") {
                            showSuccessAlert("SA Fees saved successfully");
                        }
                    },
                    error: function (xhr, error) {
                        showErroAlert("Problem in saving SA Fees");
                    }
                });
            }
        });

        function closeAndShowSucces() {
            $('#call_descption').val("");
            show_history();
            get_chat_logs();

        }

        function get_chat_logs() {
            var cust_id = $('#cust_profile_id').val();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_call_log",
                dataType: 'json',
                data: {
                    cust_id: cust_id
                },
                success: function (result) {
                    if (result.success == "1") {
                        var list = result.data.call_log;
                        var list_items = '';
                        list.forEach(function (element) {
                            var ac_cl_suc = element.cl_success;
                            var cl_su = (ac_cl_suc == 'cl_status_not_connected') ? ("Not Connected") : ((ac_cl_suc == 'cl_status_connected') ? ("Connected") : ("Switched Off"));
                            if (element.cl_type == "cl_type_outgoing") {
                                list_items += '<li>';
                                list_items += '<div class="card-body card list-group-item-success list-group-item ">';
                                // list_items += '<div class="card-body">';
                                list_items += '<h5 class="card-title"><b>Outgoing Call </b>  |  ' + element.called_date + ' | ' + cl_su + ' | ' + element.added_by + '</h5>';
                                // list_items += '<h6 class="card-subtitle mb-2 text-muted">'+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h6>';
                                list_items += '<h4 class="card-text" style="font-size:1vw;">' + element.cl_description + '</h4>';
                            } else if (element.cl_type == "cl_type_incoming") {
                                list_items += '<li>';
                                list_items += '<div class="card-body card list-group-item list-group-item-warning">';
                                // list_items += '<div class="">';
                                list_items += '<h5 class="card-title"><b>Incoming Call</b>  |  ' + element.called_date + ' | ' + cl_su + ' | ' + element.added_by + '</h5>';
                                // list_items += '<h6 class="card-subtitle mb-2 text-muted">'+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h6>';
                                list_items += '<h4 class="card-text" style="font-size:1vw;">' + element.cl_description + '</h4>';
                            } else if (element.cl_type == "cl_type_memo") {
                                list_items += '<li>';
                                list_items += '<div class="card-body card list-group-item list-group-item-info">';
                                // list_items += '<div class="">';
                                list_items += '<h5 class="card-title"><b>Memo</b>   |  ' + element.called_date + ' | ' + cl_su + ' | ' + element.added_by + '</h5>';
                                // list_items += '<h6 class="card-subtitle mb-2 text-muted">'+element.called_date+' | ' +cl_su+' | ' + element.added_by+'</h6>';
                                list_items += '<h4 class="card-text" style="font-size:1vw;">' + element.cl_description + '</h4>';
                            }
                            list_items += '</div>';
                            list_items += '</li>';
                        });
                        $('#cust_call_log_list').html(list_items);
                    } else {
                        showErrorAlert("Problem in retriving call logs");
                        $('#cust_call_log_list').html('');
                    }
                },
                error: function (xhr, error) {
                    $('#cust_call_log_list').html("");
                    showErrorAlert("Problem in retriving call logs");
                }
            });
        }

        $('#btn_save_call_log').click(function (e) {
            var cl_description = $('#call_descption').val().trim();
            var cl_success = $('input[name=call_success_type]:checked').val();
            var cl_service = $('input[name=call_service_type]:checked').val();
            var cl_type = $('input[name=call_type]:checked').val();
            var cust_id = $('#cust_profile_id').val();
            // alert(cust_id);
            if (cl_description == '') {
                showErrorAlert("Please enter some information for log!");
            } else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/save_call_log",
                    dataType: 'json',
                    data: {
                        cl_type: cl_type,
                        cl_service:cl_service,
                        cl_success: cl_success,
                        cl_description: cl_description,
                        cust_id: cust_id,
                        cl_by: <?php echo $user_id ?>
                    },
                    success: function (result) {
                        if (result.success == "1") {
                            closeAndShowSucces();
                            showSuccessAlert("Log saved successfully!");
                        } else {
                            showErrorAlert("Problem in saving log");

                        }
                    },
                    error: function (xhr, error) {
                        showErrorAlert("Problem in saving log");
                    }
                });
            }


        });

        $('#btn_save_reminder').click(function (e) {
            var reminder_date = $('#reminder_datee').val();
            var reason = $('#reason').val();

            if (reminder_date != '') {
                var cust_id = $('#cust_profile_id').val();
                // alert(cust_id);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/save_reminder",
                    dataType: 'json',
                    data: {
                        cust_id: cust_id,
                        rem_date: reminder_date,
                        reason: reason
                    },
                    success: function (result) {         
                        if (result.success == "1") {                      
                            alert("Reminder saved successfully!");
                        } else {                        
                            alert("Problem in saving reminder!");
                        }
                    },
                    error: function (xhr, error) {
                        showErrorAlert("Problem in saving reminder!");
                    }
                });
            } else {
                showErrorAlert("Please enter a valide date for reminder to save!");
            }

        });

        function setDatePicker() {
            $("#reminder_date").datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                dateFormat: 'yy-mm-dd'
            });
        }

        $("#dor_from").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            dateFormat: 'yy-mm-dd'
        });

        $("#dor_to").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            dateFormat: 'yy-mm-dd'
        });

        <?php if ($type == "single") { ?>
            $('#cust_profile_info').show();
            $('#cust_call_history').show();
            $('#cust_profile_id').val(<?php echo $user_profile_id; ?>);
            g_profile_postion = 1;
            getUserInormation(<?php echo $user_profile_id; ?>);
        <?php } ?>
    });
</script>
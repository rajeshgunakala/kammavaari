<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" />
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.3.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<div class="new-side-content">

    <div style="width:100%;float:left;padding:20px;">
        <div style="width:100%;float:left;" id="notification">
        </div>
        <div style="width:100%;float:left;margin-top:20px;">
            <div class="form-inline" style="margin-left:20px;">
                <div class="form-group">
                    <label style="color : #07A0C3; margin-right: 10px"> Profile ID:</label>
                    <input type="text" class="form-control" id="profile_id"
                        style="border-color: #07A0C3; margin-right: 10px" />
                    <button type="button" class="form-control btn" id="btn_search_profile"
                        style="background-color: #07A0C3; color: white;"> Search </button>
                </div>
            </div>
        </div>
        <div style="width:100%;float:left;">
            <hr>
        </div>

        <div id="profile_inforamtion_list">

        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        function showSuccessAlert(message) {
            var alert = '<div class="alert alert-success" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <strong>Success!</strong> ' + message + '</div>';
            $('#notification').html(alert);
            window.setTimeout(function () {
                $(".alert").fadeTo(500, 0).slideUp(500, function () {
                    $(this).remove();
                });
            }, 3000);
            window.location.reload();
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

        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>admin/ws/get_customers",
            dataType: 'json',
            success: function (result) {
                if (result.success == "1") {
                    var users = [];
                    users = result.data.users;
                    var employees = result.data.employees;
                    if (users.lenght > 0) {
                        console.log("error get_customers");
                    } else {
                        parseList(users, employees);
                    }
                } else {
                    console.log("error get_customers");
                }
            },
            error: function (xhr, error) {
                console.log("error get_customers");
            }
        });



        function registerbytrack(userid) {
            var rtype = ''; $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_registerby",
                dataType: 'json',
                async: false,
                data: { 'userid': userid },
                success: function (result) {
                    //console.log(result);
                    rtype = result;

                }

            });
            //console.log(rtype);
            return rtype;
        }
        function parseList(users, employees) {

            console.log(users);
            //console.log("success get_customers");
            var table_data = '<table id="MyTable" class="display" cellspacing="0"  width="100%">';
            table_data += ' <thead  style="background-color:#fd9f17; color:white;"><tr><th>KV ID</th><th>Name</th><th>Type</th><th>Shown</th><th>Prime</th><th>Profile Owner</th><th>Register By</th><th>ACTION</th></tr></thead><tbody>';
            users.forEach(function (element) {
                //  alert(element['ms_showntype']);
                table_data += '<tr>';
                table_data += '<td><a href="<?php echo base_url(); ?>admin/admin_search/viewprofile/' + element["user_id"] + '?disp=fp" target="new">' + element["user_ms_id"] + '</a></td>';
                table_data += '<td>' + element["user_name"] + '</td>';
                if (element["ms_usertype"] == "regular") {
                    regular_selected = "selected";
                } else {
                    regular_selected = "";
                }
                if (element["ms_usertype"] == "confidential") {
                    confidential_selected = "selected";
                } else {
                    confidential_selected = "";
                }
                if (element["ms_usertype"] == "superelite") {
                    superelite_selected = "selected";
                } else {
                    superelite_selected = "";
                }
                if (element["ms_usertype"] == "elite") {
                    elite_selected = "selected";
                } else {
                    elite_selected = "";
                }
                if (element["ms_usertype"] == "superconfidential") {
                    superconfidential_selected = "selected";
                } else {
                    superconfidential_selected = "";
                }
                if (element["ms_usertype"] == "notshown") {
                    notshown_selected = "selected";
                } else {
                    notshown_selected = "";
                }
                table_data += '<td><select name="usertype" class="usertype form-control" onchange="onUserTypeChange(event)">' +
                    '<option value="regular" rel="' + element["user_id"] + '" id="no" ' + regular_selected + '>Regular</option>' +
                    '<option  rel="' + element["user_id"] + '" value="confidential" id="yes" ' + confidential_selected + '>Confidential</option>' +
                    '<option  rel="' + element["user_id"] + '" value="superconfidential" id="yes" ' + superconfidential_selected + '>Super Confidential</option>' +
                    '<option  rel="' + element["user_id"] + '" value="elite" id="yes" ' + elite_selected + '>Elite</option>' +
                    '<option  rel="' + element["user_id"] + '" value="superelite" id="yes" ' + superelite_selected + '>Super Elite</option>' +
                    '<option  rel="' + element["user_id"] + '" value="notshown" id="yes" ' + notshown_selected + '>Not Shown</option>' +
                    '</select></td>';
                if (element["ms_showntype"] == "yes") {
                    yes_selected = "selected";
                } else {
                    yes_selected = "";
                }
                if (element["ms_showntype"] == "no") {
                    no_selected = "selected";
                } else {
                    no_selected = "";
                }

                table_data += '<td><select name="shown" class="form-control shown" onchange="onShownTypeChange(event)">' +
                    '<option value="0" >Select</option>' +
                    '<option value="yes" rel="' + element["user_id"] + '" id="yes" ' + yes_selected + '>Yes</option>' +
                    '<option value="no" rel="' + element["user_id"] + '" id="no" ' + no_selected + '>No</option>' +
                    '</select></td>';
                if (element["prime"] == "yes") {
                    prime_yes = "selected";
                } else {
                    prime_yes = "";
                }
                if (element["prime"] == "no") {
                    prime_no = "selected";
                } else {
                    prime_no = "";
                }

                table_data += '<td><select name="prime" class="form-control prime" onchange="onprimeTypeChange(event)">' +
                    '<option value="0" >Select</option>' +
                    '<option value="yes" rel="' + element["user_id"] + '" id="yes" ' + prime_yes + '>Yes</option>' +
                    '<option value="no" rel="' + element["user_id"] + '" id="no" ' + prime_no + '>No</option>' +
                    '</select></td>';

                var option_data = '<option value="0" >Select</option>';
                employees.forEach(function (employee) {
                    if (employee["emp_id"] == element["prof_owner"]) {
                        option_data += '<option   value="' + employee["emp_id"] + '" selected >' + employee["emp_name"] + '</option>';
                    } else {
                        option_data += '<option   value="' + employee["emp_id"] + '" >' + employee["emp_name"] + '</option>';
                    }
                });
                table_data += '<td><select class="form-control stafflist">' + option_data + '</select></td>';
                table_data += '<td class="registerbystaffname" id="' + element["user_id"] + '">' + element["user_registerby"] + '</td>';
                table_data += '<td><button class="btn_assign btn " style="background-color : #07A0C3; color:white;" value="' + element["user_id"] + '" >Assign </button> | <a class="btn" style="background-color : #07A0C3; color:white;" href="<?php echo base_url(); ?>admin/admin_search/full_profile/' + element["user_id"] + '">View Full Profile</a></td>';
                table_data += '</tr>';
            });//registerbytrack(element["user_id"])
            table_data += ' </tbody></table>';
            $('#profile_inforamtion_list').html(table_data);
            set_table();
        }

        $('#btn_search_profile').click(function (e) {
            // console.log($('#profile_id').val());
            var membership_id = $('#profile_id').val().trim();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>admin/ws/get_customers",
                dataType: 'json',
                data: {
                    customer_id: membership_id
                },
                success: function (result) {
                    if (result.success == "1") {
                        var users = [];
                        users = result.data.users;
                        var employees = result.data.employees;
                        //alert(JSON.stringify(users));
                        if (users.lenght > 0) {
                            console.log("error get_customers");
                        } else {
                            parseList(users, employees);
                        }
                    } else {
                        console.log("error get_customers");
                    }
                },
                error: function (xhr, error) {
                    console.log("error get_customers");
                }
            });

        });

        function set_table() {
            $('#MyTable').DataTable({
                initComplete: function () {
                    this.api().columns().every(function () {
                        var column = this;
                        var select = $('<select><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column.search(val ? '^' + val + '$' : '', true, false).draw();
                            });
                        column.data().unique().sort().each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });
                }
            });

            //    $('[name="MyTable_length"]').addClass('form-control form-inline');   

            // $('.usertype').change(function () {
            //     // alert(1);
            //     console.log($this)
            //     var $this = $(this);
            //     $.ajax({
            //         type: "POST",
            //         url: "<?php echo base_url(); ?>admin/ws/updateEliteInfo",
            //         type: "POST",
            //         data: {
            //             user_id: $this.children(":selected").attr("rel"),
            //             eliteValue: $this.children(":selected").attr("id"),
            //             usertype: $this.val()
            //         },
            //         success: function (res) {
            //             alert("User type changed successfully.");
            //         }
            //     });
            // });
            // $('.shown').change(function () {
            //     var $this = $(this);
            //     $.ajax({
            //         type: "POST",
            //         url: "<?php echo base_url(); ?>admin/ws/updateShownInfo",
            //         type: "POST",
            //         data: {
            //             user_id: $this.children(":selected").attr("rel"),

            //             showValue: $this.val()
            //         },
            //         success: function (res) {
            //             alert("Shown type changed successfully.");
            //         }
            //     });
            // });
            $('.prime').change(function () {
                var $this = $(this);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/updatePrimeInfo",
                    type: "POST",
                    data: {
                        user_id: $this.children(":selected").attr("rel"),

                        primeValue: $this.val()
                    },
                    success: function (res) {
                        alert("Prime type changed successfully.");
                    }
                });
            });
            $('body').on('click', '.btn_assign', function (event) {
             
                var user_profile_id = $(this).val();//stafflist
                var employee_id = $(this).parent().parent().find(".stafflist").children(":selected").val();

                console.log(employee_id);
                if (employee_id == "0") {
                    alert("Please select Profile Owner.");
                    return false;
                }

                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/update_profile_owner",
                    dataType: 'json',
                    data: {
                        cust_id: user_profile_id,
                        emp_id: employee_id
                    },
                    success: function (result) {
                        console.log("status--" + result.success);
                        if (result.success == "1") {
                            showSuccessAlert("Profile assigned successfully");
                            console.log("success update profile owner");
                        } else {
                            console.log("error update profile owner");
                            showErrorAlert("Problem in profile assigning");
                        }
                    },
                    error: function (xhr, error) {
                        console.log("error update profile owner");
                        showErrorAlert("Problem in profile assigning");
                    }
                });

            });
            $('#MyTable_filter').hide();
        }

    });

        // $('.usertype').change(function () {
        //         // alert(1);
        //         console.log($this)
        //         var $this = $(this);
        //         $.ajax({
        //             type: "POST",
        //             url: "<?php echo base_url(); ?>admin/ws/updateEliteInfo",
        //             type: "POST",
        //             data: {
        //                 user_id: $this.children(":selected").attr("rel"),
        //                 eliteValue: $this.children(":selected").attr("id"),
        //                 usertype: $this.val()
        //             },
        //             success: function (res) {
        //                 alert("User type changed successfully.");
        //             }
        //         });
        //     });

            const onUserTypeChange = (event) => {
                // console.log(event.target)
                var $this = $(event.target);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/updateEliteInfo",
                    type: "POST",
                    data: {
                        user_id: $this.children(":selected").attr("rel"),
                        eliteValue: $this.children(":selected").attr("id"),
                        usertype: $this.val()
                    },
                    success: function (res) {
                        alert("User type changed successfully.");
                    }
                });
            }

            const onShownTypeChange = (event) => {
                var $this = $(event.target);
               
                console.log($this);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/updateShownInfo",
                    type: "POST",
                    data: {
                        user_id: $this.children(":selected").attr("rel"),

                        showValue: $this.val()
                    },
                    success: function (res) {
                        console.log(res);
                        alert("Shown type changed successfully.");
                    }
                });
          
            }

            const onprimeTypeChange = () =>{

                
                var $this = $(event.target);
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>admin/ws/updatePrimeInfo",
                    type: "POST",
                    data: {
                        user_id: $this.children(":selected").attr("rel"),

                        primeValue: $this.val()
                    },
                    success: function (res) {
                        alert("Prime type changed successfully.");
                    }
                });
            


            }




</script>

<!--<script>
    $(document).ready(function() {
        
        $('.registerbystaffname').each(function() {
        alert('a');//console.log($(this).attr('id'));
    });
    
    });
</script>-->
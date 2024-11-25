<div class="new-side-content">
    <div class="row">
        <div class="col-md-12" >
            <div class="">
                <div class="card-header">
                    <button href="#display_form" class="btn" data-toggle="collapse" style="color: #07A0C3"> Profile
                        Validation</button>
                </div>
                <div class="card-body" id="display_form bg">
                    <div class="d-flex justify-content-center">
                        <form class="form-horizontal" method="POST"
                            action="<?php echo site_url(); ?>admin/Admin_pv/pv_result">
                            
                            <div class="d-flex">
                            <div class="col-4 d-flex justify-content-around align-items-center">
                                    <label class="col-5"
                                        style=" color: #07A0C3;"><b>Profile
                                            ID</b></label>  <span style="font-weight : 700">:</span>
                                    <input type="text"  class="form-control col-6" name="profileid"
                                        placeholder="Enter Profile ID" id="profileid">
                                    </label>
                                </div>

                                <div class="col-4 d-flex justify-content-around align-items-center" >
                                    <label
                                    class="col-5"
                                        style=" color: #07A0C3;">
                                        <b>Surname</b>
                                    </label><span style="font-weight : 700">:</span>
                                    <input type="text" name="surname" class="form-control col-6">


                                </div>
                                <div class="col-4 d-flex justify-content-around align-items-center" >
                                    <label 
                                    class="col-5"
                                        style="color: #07A0C3;">
                                        <b>Name</b>
                                    </label><span style="font-weight : 700">:</span>
                                    <input type="text" name="name" class="form-control col-6">


                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="row  justify-content-around  col-6 align-items-center">
                                    <label style="color: #07A0C3"> <b>Gender : </b> </label>
                                    <label style="padding-left: 10px;" class="radio-inline"><input type="radio"
                                            name="gender" value="female"> Bride</label>
                                    <label style="padding-left: 25px;" class="radio-inline"><input type="radio"
                                            name="gender" value="male"> Groom</label>
                                    <label style="padding-left: 25px;" class="radio-inline"><input type="radio"
                                            name="gender" checked value=""> Both</label>
                                </div>
                                <div class="row  justify-content-around  col-6 align-items-center">
                                    <label style="padding-left: 40px; color: #07A0C3;"><b>Payment : </b></label>
                                    <label style="padding-left: 10px;" class="radio-inline"><input type="radio"
                                            name="payment" value="paid"> Paid</label>
                                    <label style="padding-left: 25px;" class="radio-inline"><input type="radio"
                                            name="payment" value="free"> Free</label>
                                    <label style="padding-left: 25px;" class="radio-inline"><input type="radio"
                                            name="payment" checked value=""> Both</label>
                                </div>
                                
                            </div>
                            
                            <div class="row  justify-content-around">
                            <div class="col-6 d-flex align-items-center justify-content-around" >
                                    <label style="color: #07A0C3;" class="col-3">
                                        <b>All&nbsp;Phones</b>
                                    </label>
                                    <span style="font-weight : 700" class="col-2 ">:</span>
                                    <input type="text" name="allphones" class="form-control col-7" >

                                </div>

                                <div class="col-6 d-flex align-items-center  justify-content-around" >
                                    <label style="color: #07A0C3;" class="col-3">
                                        <b>All&nbsp;E-&nbsp;Mails</b>
                                    </label>
                                    <span style="font-weight : 700" class="col-2 ">:</span>
                                    <input type="text" name="allemails" class="form-control col-7" >

                                </div>

                               
                            </div>



                            <div class="row justify-content-around my-3">
                                                        
                                <div class="col-6 d-flex align-items-center justify-content-around" >
                                    <label style="color:#07A0C3;" class="col-3" >
                                        <b>Caste</b>
                                    </label><span style="font-weight : 700" class="col-2 ">:</span>
                                    <select class="form-control col-7" name="caste" id="caste">
                                        <option value="">Select Caste</option>
                                        <?php foreach ($castes as $value) { ?>
                                            <option value="<?php echo $value['caste']; ?>">
                                                <?php echo stripcslashes($value['caste']); ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                
                            <div class="col-6 d-flex align-items-center justify-content-around" >
                                    <label style="color:#07A0C3;" class="col-3">
                                        <b>Application Status</b>
                                    </label><span style="font-weight : 700" class="col-2 ">:</span>
                                    <select name="app_status" id="app_status" class="form-control col-7" >
                                        <!-- <option value="" selected="selected">Select All</option>-->
                                        <option value="1">Active</option>
                                        <option value="2">Deleted</option>
                                        <option value="3">Settled</option>
                                        <option value="4">Inactive</option>
                                    </select>
                                </div>
                            </div>

                          
                            <div class="row  justify-content-around my-3">
                                <div class="col-6 d-flex align-items-center justify-content-around">
                                <label style="color: #07A0C3"> <b>DOR From </b></label>
                                <span style="font-weight : 700" class="col-2 ">:</span>
                                <div  class="col-6 d-flex align-items-center justify-content-between">
                                    <input type="text" style="" class="form-control col-6"
                                    name="dor_form" id="dor_from">
                                    <label style="color: #07A0C3"> <b>TO </b></label>
                                    <input type="text" style="" class="form-control col-6"
                                    name="dor_to" id="dor_to">
                                </div>
                                        </div>

                                       
                                   
                                    <div class="col-6 d-flex align-items-center justify-content-around">
                                    <label style=" color: #07A0C3; " class="col-3"> <b>Native </b></label>
                                    <span style="font-weight : 700" class="col-2 ">:</span>
                                    <input type="text" style="margin-left:10px; width:300px;" class="form-control col-7"
                                        placeholder="Enter Area Name" name="area_name" id="area_name" >
                                </div>
                             
                            </div>
                         

                            <div class="row">
                            <div class="col-6 d-flex align-items-center justify-content-around" >
                                    <div class="form-group form-inline">
                                        <label class="form-group" style="color: #07A0C3"><b>Employee:</b></label>
                                        <select class="form-group form-control" style="margin-left:10px;"
                                            name="emp_drop_down" id="emp_drop_down">
                                            <option value="0" selected="selected">Select Employee</option>
                                            <?php $data = $employees["employees"];
                                            foreach ($data as $employee) { ?>
                                                <option value="<?php echo $employee["emp_id"]; ?>">
                                                    <?php echo $employee["emp_name"]; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-form-label form-inline">
                                    <div class="col-form-label form-inline ">
                                        <label class="form-group" style="color: #07A0C3"><b>Result Display
                                                Type:</b></label>
                                        <label style="padding-left: 25px;" class="radio-inline "><input type="radio"
                                                name="disp_type" checked value="grid"> Grid</label>
                                        <label style="padding-left: 10px;" class="radio-inline form  "><input
                                                type="radio" name="disp_type" value="slide"> Slider</label>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="row col-12 offset-md-3 justify-content-center ">


                                <input type="submit" class="btn" value="Search" name="submit" id="submit"
                                    style="border-color: #07A0C3; color: #07A0C3;">


                                <pre> </pre>

                                <button type="Reset" class="btn" id="Reset"
                                    style="background-color: #07A0C3; color: white;">Reset</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
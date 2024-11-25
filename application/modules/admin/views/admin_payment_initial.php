<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

?>

<script type="text/javascript">

    function validation() {
        var agreed_amount = document.getElementById('agreed_amount').value;

        if (agreed_amount == "") {
            document.getElementById('agreed_amounts').innerHTML = "* Please enter Registration amount!";
            document.getElementById('agreed_amount').focus();
            return false;
        }
        else {
            document.getElementById('agreed_amounts').innerHTML = " ";
        }


        var paid_amount = document.getElementById('paid_amount').value;

        if (paid_amount == "") {
            document.getElementById('paid_amounts').innerHTML = "* Please enter Settlement amount!";
            document.getElementById('paid_amount').focus();
            return false;
        }
        else {
            document.getElementById('paid_amounts').innerHTML = " ";
        }


        /* var allowed_contacts = document.getElementById('allowed_contacts').value;
             
         if(allowed_contacts == "")
                {
                    document.getElementById('allowed_contactss').innerHTML = "Please enter Allowed contacts!";
                    document.getElementById('allowed_contacts').focus();
                    return false;    
                }
         else   
                {
                     document.getElementById('allowed_contactss').innerHTML = " ";
                }*/


        var expiry_date = document.getElementById('expiry_date').value;

        if (expiry_date == "") {
            document.getElementById('expiry_dates').innerHTML = "* Please enter Expiry date!";
            document.getElementById('expiry_date').focus();
            return false;
        }
        else {
            document.getElementById('expiry_dates').innerHTML = " ";
        }


        /*var comments = document.getElementById('comments').value;
            
        if(comments == "")
               {
                   document.getElementById('commentss').innerHTML = "* Please enter Comments!  ";
                   document.getElementById('comments').focus();
                   return false;    
               }
        else   
               {
                    document.getElementById('commentss').innerHTML = " ";
               }*/

    }

</script>







<div class="row new-side-content">
    <div class="col-md-12">
        <div class="card" style="border-style: none;background-color: white;">

            <div class="card-header" style="border-style: none;background-color: white">
                <h1 style="text-align: center;font-weight: 700px;font-size: 28px; color:#07A0C3">Payment details</h1>
            </div>



            <div class="card-body" style="width:80%;margin:auto;padding-top:2px;">

                <hr>

                <form method="POST" enctype="multipart/form-data"
                    action="<?php echo site_url(); ?>admin/admin_payment/insert_initial_payment_details"
                    onsubmit="return validation()">

                    <div class=" form-group row align-items-center justify-content-center">


                        <label class="col-form-label col-md-3 offset-md-1  h4" style="color:#07A0C3">
                            Profile ID
                        </label>

                        <div class="col-md-4">
                            <input type="text" readonly="readonly" name="profileid" value="<?php echo $id_rec; ?>"
                                class="form-control">
                        </div>


                    </div>
                    <br>

                    <div class="form-group row align-items-center justify-content-center">

                        <label class="col-form-label col-md-3 offset-md-1 h4" style="color:#07A0C3">
                            Registration amount
                        </label>



                        <div class="col-md-4" style="height: 40px;">
                            <input type="text" name="agreed_amount" id="agreed_amount" class="form-control">
                            <span id="agreed_amounts" class="font-weight-bold" style=" color: red;"></span>
                        </div>




                    </div>

                    <br>
                    <div class="form-group row align-items-center justify-content-center">
                        <label class="col-form-label col-md-3 offset-md-1 h4" style="color:#07A0C3">
                            Settlement amount
                        </label>
                        <div class="col-md-4" style="height: 40px;">
                            <input type="text" name="sa_amount" id="sa_amount" class="form-control">
                            <span id="sa_amount" class="font-weight-bold" style=" color: red;"></span>
                        </div>
                    </div>

                    <div class="form-group row align-items-center justify-content-center">

                        <label class="col-form-label col-md-3 offset-md-1 h4" style="color:#07A0C3">
                            Payment Image Upload
                        </label>

                        <div class="col-md-4">
                            <input type="file" name="image" />

                        </div>

                    </div>
                    <br />
                    <div class="form-group row align-items-center justify-content-center">
                        <!--<label class="col-form-label col-md-3 offset-md-1">
                                      Allowed Contacts
                                      </label>
                                      <div class="col-md-3" style="height: 40px;">
                                      <input type="text" name="allowed_contacts" id="allowed_contacts" class="form-control">
                                      <span id="allowed_contactss" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span> 
                                      </div>      -->

                        <label class="col-form-label col-md-3 offset-md-1 h4" style="color:#07A0C3">
                            Expiry Date
                        </label>
                        <div class="col-md-4" style="height: 40px;">
                            <select name="expiry_date" id="expiry_date" class="form-control">
                                <option value="" selected="selected">Select Period</option>
                                <option value="1">1 Month</option>
                                <option value="2">45 Days</option>
                                <option value="3">3 Months</option>
                                <option value="6">6 Months</option>
                                <option value="9">9 Months</option>
                                <option value="12">12 Months</option>
                            </select>
                            <span id="expiry_dates" class="font-weight-bold"
                                style="vertical-align: middle;color: red;"></span>
                        </div>




                    </div>

                    <br>
                    <div class="form-group row align-items-center justify-content-center">
                        <label for="staffSelect" style="color:#07A0C3"
                            class="col-form-label col-md-3 offset-md-1 h4">Select Staff:</label>
                        <div class="col-md-4" style="height: 40px;">
                        
                            <select name="staffSelect" id="staffSelect" class="form-control">
                            <option value="">Select </option>
                                <?php foreach ($rm_names as $staff): ?>
                                    <option value="<?= $staff->id ?>">
                                        <?= $staff->username ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                    </div>

                    <div class="form-group row align-items-center justify-content-center">
                        <label for="payment_mode" style="color:#07A0C3"
                            class="col-form-label col-md-3 offset-md-1 h4">Payment Mode:</label>
                        <div class="col-md-4" style="height: 40px;">
                            <select name="payment_mode" id="payment_mode" class="form-control">
                                    <option value="" selected="selected">Select Mode</option>
                                        <option value="Cash">Cash</option>
                                        <option value="phonepe">PhonePe</option>
                                        <option value="gpay">Google Pay</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row align-items-center justify-content-center">

                        <label class="col-form-label col-md-3 offset-md-1 h4" style="color:#07A0C3">
                            Comments
                        </label>

                        <div class="col-md-4    ">
                            <textarea name="comments" class="form-control" id="comments"
                                placeholder="Note comments here.."></textarea>
                            <span id="commentss" class="font-weight-bold"
                                style="vertical-align: middle;color: red;"></span>
                        </div>

                    </div>

                    <br>

                    <div class="row col-md-12 offset-md-4 justify-content-center">

                        <pre>     </pre>

                        <input type="submit" class="btn submit" value="Submit" name="submit" id="submit"
                            style="background-color: #07A0C3;color: white">

                        </input>
                        <pre>  </pre>

                        <button type="Reset" class="btn btn-link" name="reset" id="Reset"
                            style="background-color: white ;color: #07A0C3">Reset</button>
                    </div>


                </form>
                <hr>
            </div>
        </div>
    </div>

</div>
<style>
    .user-statics p strong {
        width: 161px;
        display: inline-block;
    }

    .user-statics p {
        margin-bottom: 10px;
    }
</style>

<div class="new-side-content">
    <div class="row" style="margin-top: 20px;">

        <div class="col-md-3">
            <div class="card">
                <div class="card-header" style="margin-top: 10px; ">
                    <?php
                    // echo "<pre>"; print_r($posts['applicationphotopath']);die;
                    // foreach ($posts as $post) { print_r($post);die;  ?>
                    <?php if (!empty($posts["applicationphotopath"])) { ?>
                        <img src="<?php echo $posts["applicationphotopath"]; ?>" alt="Profile Image" class="rounded-top"
                            width="150px" height="150px">
                    <?php } ?>


                </div>
                <div class="card-body" style="">
                    <?php foreach ($payment_details as $details) { ?>
                        <h6 class="d-flex justify-content-between" >
                            <strong style="color: #07A0C3;">NAME</strong>
                            <?php echo $details['first_name'] . ' ' . $details['last_name']; ?>
                        </h6>
                        </br>
                        <p class="d-flex justify-content-between">
                            <strong style="color: #07A0C3;">Profile ID</strong>
                            <?php echo $details['profile_id']; ?>
                        </p>
                        <br>
                    <?php } ?>

                    <?php foreach ($profile_share_report as $profile_reports) { ?>

                        <div class="user-statics">
                            <p class="card-title d-flex justify-content-between"><strong style="color: #07A0C3;">Opp sent profiles</strong>
                                <?php echo $profile_reports['me_recived'] ?>
                            </p>

                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">Received profiles</strong>
                                <?php echo $profile_reports['my_intrested']; ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">myside interest </strong>
                                <?php echo $profile_reports['my_intrest']; ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">opposite interest </strong>
                                <?php echo $profile_reports['another_person_intrestedonme']; ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">no of online viewed </strong>
                                <?php echo count($viewed_contacts); ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">contact exchanged </strong>
                                <?php echo $profile_reports['contact_exchaged']; ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">match meetings </strong>
                                <?php echo $profile_reports['no_of_match_makings']; ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">office visitings </strong>
                                <?php echo $profile_reports['my_intrest']; ?>
                            </p>
                            <p class="d-flex justify-content-between"><strong style="color: #07A0C3;">no of times login </strong>
                                <?php echo $profile_reports['number_of_times_login']; ?>
                            </p>
                        </div>
                        <p class="card-title d-flex justify-content-between"><strong style="color: #07A0C3;">last login </strong>
                            <?php echo $profile_reports['last_login']; ?>
                        </p>


                    <?php } ?>
                    

                </div>
            </div>
        </div>

        <!-- Second Card (Data Table) -->
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="color: #07A0C3;">Data Table</h5>
                </div>
                <div class="card-body" style="overflow-x:auto;">
                    <!-- Your data table HTML goes here -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-nowrap" style="color: #07A0C3;">Register Date</th>
                                <th class="text-nowrap" style="color: #07A0C3;">date of payment</th>
                                <th class="text-nowrap" style="color: #07A0C3;">payment type</th>
                                <th class="text-nowrap" style="color: #07A0C3;">expiry date</th>
                                <th class="text-nowrap" style="color: #07A0C3;">user type</th>
                                <th class="text-nowrap" style="color: #07A0C3;">amount</th>
                                <th class="text-nowrap" style="color: #07A0C3;">sa amount</th>
                                <th class="text-nowrap" style="color: #07A0C3;">paid times</th>
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
                                        <?php echo $row['paid_times'] ; ?>
                                    </td>

                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #1a202c;
        text-align: left;
        background-color: #e2e8f0;
    }

    .card-header:first-child {
        border-radius: .25rem .25rem 0 0;
    }

    .p-3 {
        padding: 0.5rem !important;
    }

    .align-items-start {
        align-items: flex-start !important;
    }

    .flex-column {
        flex-direction: column !important;
    }

    .border-bottom {
        border-bottom: 1px solid #cbd5e0 !important;
    }

    .card-footer,
    .card-header {
        display: flex;
        align-items: center;
    }

    .card-header {
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 0 solid rgba(0, 0, 0, .125);
    }

    .card-footer:last-child {
        border-radius: 0 0 .25rem .25rem;
    }

    .h3,
    h3 {
        font-size: 1.75rem;
    }

    .ml-1 {
        font-size: 0.8rem;
        font-weight: 600;
    }

    .mb-2 {
        font-size: 1.2rem;

    }

    .justify-content-center {
        justify-content: center !important;
    }

    .card-footer,
    .card-header {
        display: flex;
        align-items: center;
    }

    .card-footer {
        padding: .5rem 1rem;
        background-color: #fff;
        border-top: 0 solid rgba(0, 0, 0, .125);
    }

    .card {
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: .25rem;
    }

    .month {
        font-size: 1.2rem;
    }

    .card-body {
        padding: 0px;
        margin: 9px;
    }

    .blue1_color {
        color: #2196f3 !important;
        text-align: center;

    }

    .update-message {
        background-color: black;
        border: 1px solid #d6e9c6;
        color: white;
        padding: 10px;
        margin: 0 auto;
        /* Center the message horizontally */
        width: 50%;
        /* Set a specific width or use 'auto' for full width */
        text-align: center;
        /* Center the text within the message */
    }


    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        height: 100%;
        /* Add a fixed height to ensure all cards have the same height */
        min-height: 300px;
        /* Set a minimum height if needed */
    }

    .card:hover {
        transform: translateY(-10px);
    }

    /* Rest of your styles remain unchanged */


    .card-header {
        padding: .5rem 1rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 0 solid rgba(0, 0, 0, .125);
        border-radius: 15px 15px 0 0;
        /* Adjust border-radius for the top corners */
        transition: background-color 0.3s ease;
        /* Add transition property for smooth background color change */
    }

    .card-footer:last-child {
        border-radius: 0 0 15px 15px;
        /* Adjust border-radius for the bottom corners */
    }

    .card-footer,
    .card-header {
        display: flex;
        align-items: center;
    }

    .card-footer {
        padding: .5rem 1rem;
        background-color: #fff;
        border-top: 0 solid rgba(0, 0, 0, .125);
    }

    /* Other styles remain unchanged */
    </style>
</head>

<?php  
        // Retrieve the flashdata
        $update_message = $this->session->userdata('update_message');
        
        // Check if there's an update message
        if ($update_message) {
            echo '<div class="update-message">' . $update_message . '</div>';
        }
?>
<br />


<div class="">
    <div class="main-body" style="margin-left:10px;">

        <div class="container" style="margin-left: 214px; margin-top: 100px;">

            <?php  
        $update_message = $this->session->userdata('update_message');
        if ($update_message) {
            echo '<div id="update-message" class="update-message">' . $update_message . '</div>';
        }
       ?>

<?php if ($this->session->userdata('type') == 'admin') {  ?>
            <button style="margin-left:20px; margin-bottom:20px; background-color:#07A0C3; color: white" type="button" class="btn" 
                data-toggle="modal" data-target="#AddPlanexampleModal">Add Plan</button>
        <?php } ?>
            <div class="row gutters-sm">

                <?php $i=1; foreach ($plans as $plan) { ?>
                <div class="col-sm-6 col-xl-3 mb-1">
                    <div class="card">
                        <div class="card-header border-bottom flex-column align-items-center p-3" style="background-color: #07A0C3">
                            <h4 class=" font-weight-medium mb-2" style="color:white">
                                <strong><?php echo $plan->title;  ?></strong>
                            </h4>
                        </div>

                        <div class="card-body">
                            <h3 class="pricing-price blue1_color">
                                <small class="align-self-start month  ">Rs.</small>
                                <small class=" "><?php echo $plan->amount; ?></small>
                                <small class="align-self-end month  ">/<?php echo $plan->months; ?></small>
                            </h3>
                            <ul class="list-unstyled font-size-sm mb-2">
                                <li><span class="text-secondary ml-1"><?php echo $plan->profiles;  ?></span>
                                </li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check text-success mr-2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg><span class="text-secondary ml-1"><?php echo $plan->servies; ?></span>
                                </li>
                                <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check text-success mr-2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg><span class="text-secondary ml-1"><?php echo $plan->intrests; ?>s</span>
                                </li>

                                <?php 
                                        if(!empty($plan->contact)){  ?>

                                <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check text-warning mr-2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg><span class="text-secondary ml-1">Any Time RM in Contact</span>
                                </li>
                                <?php   }
                            ?>

                                <li><svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-check text-success mr-2">
                                        <polyline points="20 6 9 17 4 12"></polyline>
                                    </svg><span class="text-secondary ml-1"><?php echo $plan->des;  ?></span></li>

                                    <?php  if ($this->session->userdata('type') == 'admin') {  ?>
                                <div class="card-footer justify-content-center p-3">
                                    <button type="button" class="btn " data-toggle="modal"style="border-color: #07A0C3; color: #07A0C3"
                                        data-target="#exampleModal<?php echo $i; ?>">Edit</button>

                                    <button type="button" class="btn " style="background-color: #07A0C3; color: white"><a
                                            style="color:white; text-decoration:none"
                                            href="<?php echo site_url() ?>admin/Admin_payment/delete_plan/<?php echo $plan->id ?>">Delete</a></button>


                                </div>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>


                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $i; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Plans</h5>
                                <button type="button" class="close" aria-label="Close"><a style="color:black; text-decoration:none"; href="<?php echo site_url()?>admin/Admin_payment/plans"> <span aria-hidden="true">&times;</span></a>
                                </button>
                            </div>
                            <form action="<?php echo site_url() ?>/admin/Admin_payment/edit_plan" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="planTitle">Plan Title:</label>
                                        <input type="text" hidden class="form-control" id="planId" name="planId"
                                            value="<?php echo $plan->id; ?>">
                                        <input type="text" class="form-control" id="planTitle" name="planTitle"
                                            value="<?php echo $plan->title; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="planAmount">Plan Amount:</label>
                                        <input type="text" class="form-control" id="planAmount" name="planAmount"
                                            value="<?php echo $plan->amount; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="planMonths">Plan Months:</label>
                                        <input type="text" class="form-control" id="planMonths" name="planMonths"
                                            value="<?php echo $plan->months; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="planMonths">Profiles:</label>
                                        <input type="text" class="form-control" id="profiles" name="profiles"
                                            value="<?php echo $plan->profiles; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="planMonths">Plan Service:</label>
                                        <input type="text" class="form-control" id="service" name="service"
                                            value="<?php echo $plan->servies; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="planMonths">Interests:</label>
                                        <input type="text" class="form-control" id="interests" name="interests"
                                            value="<?php echo $plan->intrests; ?>">
                                    </div>

                                    <?php 
                                        if(!empty($plan->contact)){  ?>
                                    <div class="form-group">
                                        <label for="planMonths">Contact With:</label>
                                        <input type="text" class="form-control" id="contact" name="contact"
                                            value="<?php echo $plan->contact; ?>">
                                    </div>
                                    <?php   }  ?>


                                    <div class="form-group">
                                        <label for="planMonths">Discription:</label>
                                        <input type="text" class="form-control" id="dis" name="dis"
                                            value="<?php echo $plan->des; ?>">
                                    </div>


                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss=""> <a style="color:white; text-decoration:none"; href="<?php echo site_url()?>admin/Admin_payment/plans">Close</a></button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <?php  $i++; } ?>

            </div>

            <!--add Model-->
            <div class="modal fade" id="AddPlanexampleModal" tabindex="-1" role="dialog"
                aria-labelledby="AddPlanexampleModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel" style="color: #07A0C3">Add Plans</h4>
                            <button type="button" class="close" aria-label="Close"><a style="color:black; text-decoration:none"; href="<?php echo site_url()?>admin/Admin_payment/plans"> <span aria-hidden="true">&times;</span></a>
                                </button>
                        </div>
                        <form action="<?php echo site_url() ?>/admin/Admin_payment/add_plan" method="post">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="planTitle">Plan Title:</label>
                                    <input type="text" class="form-control" id="planTitle" name="planTitle" value="">
                                </div>

                                <div class="form-group">
                                    <label for="planAmount">Plan Amount:</label>
                                    <input type="text" class="form-control" id="planAmount" name="planAmount" value="">
                                </div>

                                <div class="form-group">
                                    <label for="planMonths">Plan Months:</label>
                                    <input type="text" class="form-control" id="planMonths" name="planMonths" value="">
                                </div>

                                <div class="form-group">
                                    <label for="planMonths">Profiles:</label>
                                    <input type="text" class="form-control" id="profiles" name="profiles" value="">
                                </div>

                                <div class="form-group">
                                    <label for="planMonths">Plan Service:</label>
                                    <input type="text" class="form-control" id="service" name="service" value="">
                                </div>

                                <div class="form-group">
                                    <label for="planMonths">Interests:</label>
                                    <input type="text" class="form-control" id="interests" name="interests" value="">
                                </div>

                                <div class="form-group">
                                    <label for="planMonths">Contact With:</label>
                                    <input type="text" class="form-control" id="contact" name="contact" value="">
                                </div>
                             
                                <div class="form-group">
                                    <label for="planMonths">Discription:</label>
                                    <input type="text" class="form-control" id="dis" name="dis" value="">
                                </div>


                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn " data-dismiss="" style="color: #07A0C3; border-color: #07A0C3;"> <a style=" text-decoration:none"; href="<?php echo site_url()?>admin/Admin_payment/plans">Close</a></button>
                                <button type="submit" class="btn" style="background-color: #07A0C3; color: white;">Add Plan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    // Add a script to hide the update message after 20 seconds
    setTimeout(function() {
        var updateMessage = document.getElementById('update-message');
        if (updateMessage) {
            updateMessage.style.display = 'none';
        }
    }, 3000); // 20,000 milliseconds = 20 seconds
    </script>
</div>


<!-- Dashboard Banner Ends Here -->
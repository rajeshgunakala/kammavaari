<!-- <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>REPORT PAGE</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Taviraj:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <style>
    body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }

    .print-grid {
        max-width:80%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ddd;
        background-color:  #f0f0f0; /* Add your desired background color here */
        /* margin-top: 8%;
        margin-right: 3%; */
        box-shadow: 0 0 10px black;
        border-radius: 10px;
    }

    .header {
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f2f2f2;
        z-index: 1;
        padding: 10px;
    }

    .date_print_wrap {
        margin-top: 40px;
    }

    .date-fuilds {
        display: flex;
        align-items: center;
    }

    .company-info {
        display: flex;
        align-items: center;
    }

    .print-middile {
        margin-top: 70px;
        max-height: 400px;
        overflow-y: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
        background-color: transparent; /* Set the background color of the table to transparent */
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        background-color: white;
    }

    th {
        background-color: black;
        color:white;
        
    }

    .print-top-left-info {
        margin-top: 1em;
    }
    h3 {
            text-align: right;
            color:black;
        }
        th {
        position: sticky;
        top: 0;
    }
</style>
</head>

<body>

  <div class="new-side-content">
    <div class="print-grid">
         <h2>List of Site Visit Customers</h2>
         <h3>Toatl visits :<?php echo count($track_users); ?></h3>
        <div class="date_print_wrap">
            <div class="col-md-6">
                <?php if (!empty($frm_dat) && !empty($to_dat) && !empty($track_users)) { ?>
                    <div class="print-top-text date-fuilds">
                        <div class="company-info">
                        
                            <div class="print-info-grid date-time">
                                <p style="font-size: 1.2em;min-width: 95px;">
                                <span class="font-weight-bold">From :</span>
                                    <?php echo date('d-M-Y', strtotime($frm_dat)); ?>
                                </p>
                                <p style="font-size: 1.2em;min-width: 95px;"><span class="font-weight-bold"> To &nbsp;&nbsp;&nbsp;&nbsp; : </span><?php echo date('d-M-Y', strtotime($to_dat)); ?></p>
                            </div>
                        </div>
                    </div>
                <?php  } ?>
            </div>
        </div>

        <?php if (!empty($track_users)) { ?>
            <div class="print-middile">
                <div class="Lubricants">
                    <div class="print-top-left-info" style="margin-top:1em;">
                     
                    </div>
                </div>
                <table>
                    <tr>
                        <th>S.No</th>
                        <th>User Name</th>
                        <th>User Id</th>
                        <th>Login Time</th>
                        <th>Logout Time</th>
                    </tr>
                    <?php
                    $i = 1;
                    foreach ($track_users as $stock) {
                    ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo ($stock->first_name) ?></td>
                            <td><?php echo $stock->profile_id; ?></td>
                            <td><?php echo $stock->login_date_time; ?></td>
                            <td><?php echo $stock->logout_date_time; ?></td>
                        </tr>
                    <?php $i++;
                    } ?>
                </table>
            </div>
        <?php } else{?>
                  <h1>No Site Visites</h1>

            <?php }?>

        <div class="clearfix"></div>

    </div>
    </div> 
</body>

</html> -->



<style>
        body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }
    .content{
         margin-top: 5%;
    }
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<div class="content new-side-content">

    <?php if (!empty($track_users)) { ?>
    <table id="example" class="display nowrap" style="width:97%;background-color:795548;">
    <div style="display: flex; justify-content: center;">
    <h2>List of Site Visit Customers</h2>
    <h3>Toatl visits :<?php echo count($track_users); ?></h3>
</div>
        <thead>
                    <tr>
                        <th style="background-color:#fd7e14;">S.No</th>
                        <th style="background-color:#fd7e14;">User Name</th>
                        <th style="background-color:#fd7e14;">User Id</th>
                        <th style="background-color:#fd7e14;">Login Time</th>
                        <th style="background-color:#fd7e14;">Logout Time</th>
                    </tr>
        </thead>
        <tbody>
            <?php
                    $i = 1;
                    foreach ($track_users as $stock) {
                    ?>
                 <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo ($stock->first_name) ?></td>
                            <td><?php echo $stock->profile_id; ?></td>
                            <td><?php echo $stock->login_date_time; ?></td>
                            <td><?php echo $stock->logout_date_time; ?></td>
                </tr>
            <?php $i++;
                    } ?>
        </tbody>
        <tfoot>
            <!-- <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr> -->
        </tfoot>
    </table>
    <?php } else{?>
    <h1>No Site Visites</h1>

    <?php }?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});
</script>
<style>
body {
    font-family: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
}

.content {
    margin-top: 2%;
}
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<div class="content new-side-content">


<div style="display: flex; justify-content: center;">

</div>


    <table id="example" class="display nowrap" style="width:97%;background-color:795548;">
        <div style="display: flex; justify-content: center;">

        </div>
        <thead>
            <tr>
                <th style="background-color:#fd7e14;">S No.</th>

                <th style="background-color:#fd7e14;">Profile ID</th>

                <th style="background-color:#fd7e14;">Name</th>
                <th style="background-color:#fd7e14;">Gender</th>
                <!-- <th class="cell5 total-row" style="width:10%">Entered by</th> -->
                <th style="background-color:#fd7e14;">Register Date</th>
            </tr>
        </thead>
        <tbody style="text-align: left;">
            <?php $amount = 0;
                $slno = $this->uri->segment(3, 0);
                foreach ($no_image as $value) { ?>
            <tr>
                <td style="width:1%; text-align:center;" class="cell5">
                    <?php echo ++$slno ?>
                </td>
                <!-- <td class="cell12" style="width:10%;color:#00818e;"><?php if ($value["payment_status"] == "paid") { ?>
                  <a style="color:#1bb73f;font-weight: 600;color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } else { ?>
                  <a style="color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } ?> -->


                <td class="cell10" style="width:5%; color : <?php echo strtolower($value['gender']) === 'female' ? 'red' : 'blue'; ?>">
                    <?php echo stripcslashes($value['profile_id']); ?>
                </td>

                <td class="cell20" style="width:5%">
                    <span class="<?php echo $vipconfi; ?>"></span>
                    <?php echo stripcslashes($value['first_name'] . ' ' . $value['last_name']); ?>
                </td>

                <td class="cell5" style="width:5% ">
    <?php echo ucfirst(stripcslashes($value['gender'])); ?>
</td>

    
                <td class="cell5" style="width:5%">
                    <?php echo stripcslashes($value['registered_on']); ?>
                </td>
            </tr>
            <?php $amount += $value['total_amount'];
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
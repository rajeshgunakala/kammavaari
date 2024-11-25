
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
<h2>Profile Incomplete</h2>
</div>
<div style="">
</div>

    <table id="example" class="display nowrap" style="width:97%;background-color:795548;">
        <div style="display: flex; justify-content: center;">

        </div>
        <thead>
            <tr>
                <th style="background-color:#fd7e14;">S No.</th>

                <th style="background-color:#fd7e14;">Profile ID</th>

                <th style="background-color:#fd7e14;">Name</th>
                <th style="background-color:#fd7e14;">Register Date</th>
                <th style="background-color:#fd7e14;">Percentage</th>
            </tr>
        </thead>
        <tbody style="text-align: left;">
            <?php $amount = 0;
                $slno = $this->uri->segment(3, 0);
                foreach ($count as $value) {  
                    if($value->total < 50){?>
            <tr>
                <td style="width:1%; text-align:center;" class="cell5">
                    <?php echo ++$slno ?>
                </td>
               
                <td class="cell10" style="width:5%">
                    <?php echo stripcslashes($value->profile_id); ?>
                </td>

                <td class="cell20" style="width:5%">
                    <span class="<?php echo $vipconfi; ?>"></span>
                    <?php echo stripcslashes($value->first_name . ' ' . $value->last_name); ?>
                </td>

                <td class="cell5" style="width:5%">
                    <?php echo ucfirst(stripcslashes($value->registered_on)); ?>
                </td>
                <td class="cell5" style="width:5%">
                    <?php echo stripcslashes($value->total.'%'); ?>
                </td>
            </tr>
            <?php 
                } }?>
        </tbody>
        <tfoot>
          
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


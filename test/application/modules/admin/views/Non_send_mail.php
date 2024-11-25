
<style>
        body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }
    .content{
         margin-top: 2%;
    }
</style>


<div class="new-side-content">
<div style="display: flex; justify-content: center;margin-top:3%;">
<h2>Bounsed Mails List</h2>
</div>
<div style="width: 100%; margin-top:2%; background-color: #e3f2fd; padding: 20px; border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <form method="POST" name="" action="<?php echo base_url()?>/admin/chat_users/bounce_mails3">
        <div style="display: flex; justify-content: space-between;">
            <div style="flex: 1;margin-right: 5%">
                <div class="form-group">
                    <label for="f_date">FROM:</label>
                    <input type="date" name="f_date" id="f_date" value="" class="form-control">
                </div>
            </div>
            <div style="flex: 1;margin-right:5%">
                <div class="form-group">
                    <label for="t_date">TO:</label>
                    <input type="date" name="t_date" id="t_date" value="" class="form-control">
                </div>
            </div>
            <div style="flex: 1;">
                <div class="form-group">
                    <label>&nbsp;</label><br>
                    <button type="submit" class="btn btn-info">Search</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
// Display success message if set
if ($this->session->flashdata('success')) {
    echo '<div id="successMessage" class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
}

// Display error message if set
if ($this->session->flashdata('failed')) {
    echo '<div id="errorMessage" class="alert alert-danger">' . $this->session->flashdata('failed') . '</div>';
}
?>



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<div class="content">

    <table id="example" class="display nowrap" style="width:97%;background-color:795548;">

        <thead>
            <tr>
                <th style="background-color:#fd7e14;">S.No</th>
                <th style="background-color:#fd7e14;">Received User Id</th>
                <th style="background-color:#fd7e14;">Received user Name</th>
                <th style="background-color:#fd7e14;">Sent User Id</th>
                <th style="background-color:#fd7e14;">Sent User Name</th>
                <th style="background-color:#fd7e14;">Send By</th>
                <th style="background-color:#fd7e14;">Send Date</th>
                <th style="background-color:#fd7e14;">Action</th>
            </tr>
        </thead>
        <?php if (!empty($bounce_mails)) { ?>
        <tbody>
            <?php
                    $i = 1;
                    foreach ($bounce_mails as $stock) {
                    ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo ($stock->receive_cust_id) ?></td>
                <td><?php echo $stock->receive_cust; ?></td>
                <td><?php echo $stock->send_cust_id; ?></td>
                <td><?php echo $stock->send_cust_name; ?></td>
                <td><?php echo $stock->send_by; ?></td>
                <td><?php echo $stock->send_Date; ?></td>
                <td><a href="<?php echo base_url()?>/admin/chat_users/Delete_bounce/<?php echo $stock->activity_id; ?>"><button class="btn btn-info btn-inline">Delete</button></a></td>
            </tr>
            <?php $i++;
                    } ?>
        </tbody>
        <?php } else{?>
    <h1>No Bounsed Mails Found</h1>

    <?php }?>
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

<script>
// Function to hide success message after 5 seconds
setTimeout(function() {
    document.getElementById('successMessage').style.display = 'none';
}, 3000);

// Function to hide error message after 5 seconds
setTimeout(function() {
    document.getElementById('errorMessage').style.display = 'none';
}, 3000);
</script>

</div>

<style>
        body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }
   
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<div class="content new-side-content">

    <?php if (!empty($bounce_mails)) { ?>
    <table id="example" class="display nowrap" style="width:97%;background-color:795548;">
    <div style="display: flex; justify-content: center;">
    <h2>List of Users with No Emails</h2>
</div>

<div>

<?php if($this->session->userdata('type') == 'admin'){ ?>
    <select name="rm_names" id="rm_names" style="margin-left: 900px;">
        <option value="">Select RM Name</option>
        <?php foreach($rm_names as $rm_name):?>
            <option value="<?php echo $rm_name['id']; ?>"><?php echo $rm_name['username']; ?></option>
        <?php endforeach; ?>
    </select>
<?php } ?>

</div>
        <thead>
            <tr>
                <th style="background-color:#fd7e14;">S.No</th>
                <th style="background-color:#fd7e14;">Profile Id</th>
                <th style="background-color:#fd7e14;">First Name</th>
                <th style="background-color:#fd7e14;">Last Name</th>
                <th style="background-color:#fd7e14;">Gender</th>
                <th style="background-color:#fd7e14;">Registered On</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $i = 1;
                    foreach ($bounce_mails as $stock) {
                    ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo ($stock->profile_id) ?></td>
                <td><?php echo $stock->first_name; ?></td>
                <td><?php echo $stock->last_name; ?></td>
                <td><?php echo $stock->gender; ?></td>
                <td><?php echo $stock->registered_on; ?></td>
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
    <h1>No Users Found</h1>

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
    // Initialize DataTable once
    var table = $('#example').DataTable({
        dom: 'Brtip',
        buttons: [
            'copy', 'csv', 'excel'
        ]
    });

    // Event handler for dropdown change
    $('#rm_names').change(function() {
        var rm_id = $(this).val();
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url("admin/Chat_users/bounce_mails"); ?>',
            data: {rm_id: rm_id},
            dataType: 'json', // Ensure the response is in JSON format
            success: function(response) {
                console.log(response); // Debugging: Check the format of the response
                
                table.clear(); // Clear existing table data
                
                if (response.length > 0) {
                    $.each(response, function(index, mail) {
                        table.row.add([
                            index + 1,
                            mail.profile_id,
                            mail.first_name,
                            mail.last_name,
                            mail.gender,
                            mail.registered_on
                        ]).draw(); // Add new row and redraw
                    });
                } else {
                    table.row.add([
                        'No Users Found', '', '', '', '', ''
                    ]).draw(); // Add no data row
                }
            },
            error: function(xhr, status, error) {
                console.error('AJAX Error:', status, error); // Debugging: Log AJAX errors
            }
        });
    });
});
</script>


      
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
<h2>Payment Report</h2>
</div>
<div style="width: 100%; margin-bottom:4%; background-color: #e3f2fd; padding: 20px; border: 1px solid #ccc; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <form type="get" name="inactive_search">
        <div style="display: flex; justify-content: space-between;">
            <div style="flex: 1;margin-right: 5%">
                <div class="form-group">
                    <label for="f_date">FROM:</label>
                    <input type="date" name="f_date" id="f_date" value="<?php echo $this->input->get("f_date"); ?>" class="form-control">
                </div>
            </div>
            <div style="flex: 1;margin-right:5%">
                <div class="form-group">
                    <label for="t_date">TO:</label>
                    <input type="date" name="t_date" id="t_date" value="<?php echo $this->input->get("t_date"); ?>" class="form-control">
                </div>
            </div>
             <?php  if($this->session->userdata("type") == "admin"){ ?>

            <div style="flex: 1;margin-right:5%">
                <div class="form-group">
                    <label for="app_status">Employee list:</label>
                    <select name="app_status" id="app_status" class="form-control">
                        <option value="" selected>Select All</option>
                        <?php foreach ($collected_by as $collected_item): ?>
                            <option value="<?php echo $collected_item['id']; ?>" <?php echo ($this->input->get("app_status") == $collected_item['id']) ? "selected" : ""; ?>>
                                <?php echo $collected_item['username']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
           <?php  }  ?>

            <div style="flex: 1;">
                <div class="form-group">
                    <label>&nbsp;</label><br>
                    <button type="submit" class="btn btn-info">Search</button>
                    <!-- <a href="<?php echo base_url() . "admin/list_inactivate_profiles" ?>" class="btn btn-info">Reset</a> -->
                </div>
            </div>
        </div>
    </form>
</div>

    <table id="example" class="display nowrap" style="width:97%;background-color:795548;">
        <div style="display: flex; justify-content: center;">

        </div>
        <thead>
            <tr>
                <th style="background-color:#fd7e14;">S No.</th>

                <th style="background-color:#fd7e14;">Profile ID</th>

                <th style="background-color:#fd7e14;">Name</th>
                <th style="background-color:#fd7e14;">paid amount</th>
                <th style="background-color:#fd7e14;">Payment Mode</th>
                <!-- <th class="cell5 total-row" style="width:10%">Entered by</th> -->
                <th style="background-color:#fd7e14;">collected by</th>
                <?php
                       if($this->session->userdata("type") == "admin"){ ?>
                             <th style="background-color:#fd7e14;">Approved By</th>
                     <?php  }
                ?>
            </tr>
        </thead>
        <tbody style="text-align: left;">
            <?php $amount = 0;
                $slno = $this->uri->segment(3, 0);
                foreach ($sub_rec as $value) { ?>
            <tr>
                <td style="width:1%; text-align:center;" class="cell5">
                    <?php echo ++$slno ?>
                </td>
                <!-- <td class="cell12" style="width:10%;color:#00818e;"><?php if ($value["payment_status"] == "paid") { ?>
                  <a style="color:#1bb73f;font-weight: 600;color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } else { ?>
                  <a style="color:#00818e;" target="_blank" href="<?php echo site_url(); ?>admin/admin_search/viewprofile/<?php echo $value['id']; ?>"> <?php echo stripcslashes($value['profile_id']); ?></a>
                  <?php } ?> -->


                <td class="cell10" style="width:5%">
                    <?php echo stripcslashes($value['profile_id']); ?>
                </td>

                <td class="cell20" style="width:5%">
                    <span class="<?php echo $vipconfi; ?>"></span>
                    <?php echo stripcslashes($value['first_name'] . ' ' . $value['last_name']); ?>
                </td>

                <td class="cell5" style="width:5%">
                    <?php echo ucfirst(stripcslashes($value['total_amount'])); ?>
                </td>

                <td class="cell5" style="width:5%">
                    <?php echo ucfirst(stripcslashes($value['payment_mode'])); ?>
                </td>
                <!-- <td class="cell5" style="width:5%"><?php echo stripcslashes($value['username']); ?></td> -->
                <td class="cell5" style="width:5%">
                    <?php echo stripcslashes($value['username']); ?>
                </td>
                <?php
                       if($this->session->userdata("type") == "admin"){ ?>
                            <td class="cell5" style="width:5%">
                                 <?php echo stripcslashes($value['approved_by']); ?>
                            </td>
                     <?php  }
                ?>
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
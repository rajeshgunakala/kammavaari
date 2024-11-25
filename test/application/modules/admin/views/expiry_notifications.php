
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<style>
        body {
        font-family: 'Roboto', sans-serif;
        margin: 0;
        padding: 0;
    }
    .content{
         margin-top: 0%;
    }
    .container-table100{
        flex-direction:column;
    }
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css">
<div class="content new-side-content">
<div class="limiter">
<!-- <h2>Expiry Paymnet Report</h2> -->
<h3 class="text-center">Payment Expiry List</h3>
    <div class="container-table100">
      <form type="get" name="inactive_search">
        <div style="float:left; font-size:1vw; margin-top:25px;">
          <div style="float:left; margin-right:1vw;">
            <div class="form-group form-inline">
              <label class="form-group pr-10 h5" style="color: #07A0C3;">FROM : </label>
              <input type="date" name="f_date" id="f_date" style="border-color: #07A0C3; color: #07A0C3" value="<?php echo $this->input->get("f_date"); ?>"
                class="form-group form-control">
            </div>
          </div>

          <div style="float:left; margin-right:1vw;">
            <div class="form-group form-inline">
              <label class="form-group pr-10 h5" style="color: #07A0C3;">TO: </label>
              <input type="date" name="t_date" id="t_date" style="border-color: #07A0C3; color: #07A0C3;" value="<?php echo $this->input->get("t_date"); ?>"
                class="form-group form-control">
            </div>
          </div>

          <?php  if($this->session->userdata("type") == "admin"){ ?>

            <div style="float:left; margin-right:1vw;">
                    <div class="form-group pr-10 h5">
                      <label for="app_status" style="color: #07A0C3;margin-top: 6px;">Employee list:</label>
                    </div>
            </div>

              <div style="float:left; margin-right:1vw;">
                  <div class="form-group pr-10 h5">
                      <!-- <label for="app_status">Employee list:</label> -->
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


          <div style="float:left;">
            <div class="form-group form-inline">
              <button class="form-group form-control btn " id="search_prof_emp" style="background-color: #07A0C3; color: white;"> Search </button>
            </div>
          </div>
        </div>
      </form>

    <table id="example" class="display nowrap" style="width:100%;background-color:795548;">
    <div style="display: flex; justify-content: center;">

</div>
        <thead>
        <tr>
                <th>S.No</th>
                <th>Profile ID</th>
                <th>Name</th>
                <th>Registred Date</th>
                <th>Paid date</th>
               
                <th>Expiry date</th>
                
            </tr>
        </thead>
        <tbody>
    <?php
    $sno = 1;
    if (!empty($expiry_notifications)) {
        foreach ($expiry_notifications as $row) {
            $substr = substr($row->profile_id, 4);
            
            echo "<tr>";
            echo "<td>{$sno}</td>";
            echo "<td><a style='color:#00818e;' target='_blank' href='" . site_url() . "admin/admin_search/viewprofile/{$substr}'>" . stripcslashes($row->profile_id) . "</a></td>";
            echo "<td>{$row->first_name} {$row->last_name}</td>"; 
            // echo "<td>{$row->registered_on}</td>"; 
            echo "<td>" . date('Y-m-d', strtotime($row->registered_on)) . "</td>";
            // echo "<td>{$row->paid_date}</td>"; 
            echo "<td>" . date('Y-m-d', strtotime($row->paid_date)) . "</td>";
            
            echo "<td>{$row->formatted_expiry_date}</td>"; 
           
            $sno++;
        }
    }
    
     else {
        echo "<tr><td colspan='6'>No data available</td></tr>";
    }
    ?>
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
<script>
function handleCompletion(profileId) {
    
    $.ajax({
        type: 'POST',
        url: 'admin_ap/update_remainder', 
        data: { profileId: profileId },
        success: function(response) {
            alert(response); 
            location.reload(); 
        },
        error: function(error) {
            alert('Error updating item: ' + error.responseText);
        }
    });
}
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-XYZ" crossorigin="anonymous" />


<style> 

table {
    width: 95%;
}
.new-side-conten {
    margin-left: 250px;
}
th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #e0e0e0;
}

/* Add this to your CSS file or style section in the HTML */
.small-green-btn {
    padding: 5px 8px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-left:8px;
}


</style>
<!-- notification_table.php -->

<div class="new-side-conten" style="margin-top:100px">

    <table>
        <thead>
            <tr>
                <th>S.No</th>
                <th>Profile ID</th>
                <th>Name</th>
                <th>Remainder Date</th>
                <th>Purpose</th>
                <th>Completed</th>
            </tr>
        </thead>
        <tbody>
    <?php
    $sno = 1;
    if (!empty($notifications)) {
        foreach ($notifications as $row) {
            echo "<tr>";
            echo "<td>{$sno}</td>";
            echo "<td>{$row->profile_id}</td>"; 
            echo "<td>{$row->first_name} {$row->last_name}</td>"; 
            echo "<td>{$row->rem_date}</td>"; 
            echo "<td>" . wordwrap($row->reason, 50, "<br>", true) . "</td>";

            echo "<td>";
            echo "<label class='small-green-btn' for='completed{$sno}' onclick='handleCompletion(\"{$row->ms_id}\", \"{$row->reason}\")'><i class='fas fa-check'></i></label>";
            echo "</tr>";
            $sno++;
        }
    } else {
        echo "<tr><td colspan='6'>No data available</td></tr>";
    }
    ?>
</tbody>


    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
function handleCompletion(profileId,reason) {
    
    $.ajax({
        type: 'POST',
        url: 'admin_ap/update_remainder', 
        data: { 
            profileId: profileId,
            reason : reason
         },
        success: function(response) {
            // alert(response); 
            location.reload(); 
        },
        error: function(error) {
            alert('Error updating item: ' + error.responseText);
        }
    });
}
</script>

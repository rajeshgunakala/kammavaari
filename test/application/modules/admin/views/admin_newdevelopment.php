<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
  
    <div class="container-fluid">
    <div class="new-side-content"> 
        
    <h2>Search Result  <a href="<?php echo site_url(); ?>admin/admin_search"><button class="submit" style="background-color: #07A0C3; color : white;">Modify Search</button></a></h2>
     <div class="d-flex justify-content-end">
     <button type="button" class="btn" id="btnExport" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" style="padding: 9px; background-color: #07A0C3; color : white;">Export Report</button>
     </div>
<div class="row">
     
         <div class="col-md-12 mt-3">
             <table id="example1" class="table table-striped table-bordered">
                 <thead>
                     <tr>
                         <th style="color: #07A0C3;">S.no.</th>
                         <th style="color: #07A0C3;">ID</th>
                         <th style="color: #07A0C3;">Name</th>
                         <th style="color: #07A0C3;">Age</th>
                         <th style="color: #07A0C3;">Height</th>
                         <th style="color: #07A0C3;">Property Value</th>
                         <th style="color: #07A0C3;">Education</th>
                         <th style="color: #07A0C3;">Profession/Package Name</th>
                         <th style="color: #07A0C3;">Country</th>
                         <th style="color: #07A0C3;">Profiles Received</th>
                         <th style="color: #07A0C3;">Profiles Send To Opposite</th>
                         <th style="color: #07A0C3;">Contact Exchanged</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php $i =1; foreach($search_sub_rec as $searchProfile) { ?>
                     <tr>
                         <td><?= $i ?></td>
                         <td><?= $searchProfile['profile_id'] ?></td>
                         <td><?= $searchProfile['first_name'] ?></td>
                         <td><?= $searchProfile['cur_age'] ?></td>
                         <td><?= $searchProfile['height'] ?></td>
                         <td><?= $searchProfile['property_value'] ?> Cr</td>
                         <td><?= $searchProfile['heighst_education'] ?></td>
                         <td><?= $searchProfile['occupation'] ?> / <?=  $searchProfile['annual_income'] ?></td>
                         <td><?= $searchProfile['country'] ?></td>
                         <td><?php echo rand(3,40) ?></td>
                         <td><?php echo rand(7,40) ?></td>
                         <td><?= $searchProfile['contact_exchaged'] ?></td>
                     </tr>
                     <?php $i++; } ?>
                 </tbody>
             </table>
         </div>
     </div>
</div></div>

<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
  new DataTable('#example');
});
</script>

<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/linways/table-to-excel@v1.0.4/dist/tableToExcel.js"></script>
<script>
    $(document).ready(function () {
        $("#btnExport").click(function () {
            let table = document.getElementsByTagName("table");
            console.log(table);
            debugger;
            TableToExcel.convert(table[0], {
                name: `SearchExcelsheet.xlsx`,
                sheet: {
                    name: 'SearchExcelsheet'
                }
            });
        });
    });
</script>


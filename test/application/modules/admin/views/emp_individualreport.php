<style>
  .row {
    margin-bottom: 5px;
    font-size: 1vw;
  }

  .total-row {
    background-color: #325d85 !important;

  }
</style>
<div class="new-side-content">

  <div class="row">
    <div class="col-md-12">
      <div class="card" style="border-style: none;background-color: white">
        <div class="card-header" style="border-style: none;background-color: white">
          <!-- <button href="#display_form" class="btn" data-toggle="collapse">Inactive/Deleted/Settled Profiles</button> -->
        </div>
      </div>
    </div>
  </div>
  <!-- <div style="width: 87%;float: left;">
  <h5 style="text-align: center;font-size:22px;text-decoration: underline;"><?php echo $tot_rec; ?> profiles found</h5>
</div> -->

  <div class="limiter">
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



         
          <div style="float:left;">
            <div class="form-group form-inline">
              <button class="form-group form-control btn " id="search_prof_emp" style="background-color: #07A0C3; color: white;"> Search </button>
              <!-- &nbsp;<a href="<?php echo base_url() . "admin/list_inactivate_profiles" ?>" class="form-group form-control btn btn-info" id="search_prof_emp"> Reset </a> -->
            </div>
          </div>
        </div>
      </form>


      <div class="table100 " style="align-items:center">
        <div class="table100" style="width: 100%">
          <?php echo $this->pagination->create_links(); ?>
          <table>
            <div class="table100-head">
              <thead style="text-align: center;">
                <tr>
                  <th class="cell6 total-row" style="width:1%">S No.</th>

                  <th class="cell18 total-row" style="width:5%">Employee  </th>

                  <th class="cell20 total-row" style="width:5%">Register</th>
                  <th class="cell5 total-row" style="width:5%">No.of Payments </th>
                  <th class="cell5 total-row" style="width:5%">Service </th>
                  <th class="cell5 total-row" style="width:5%">Marketing </th>
                  <th class="cell5 total-row" style="width:5%">Followup </th>
                  <th class="cell5 total-row" style="width:5%">Contact Exchanged </th>
                  <th class="cell5 total-row" style="width:5%">Match Makings </th>





                </tr>
              </thead>
              <tbody style="text-align: center;">
                <?php $amount = 0;
                $slno = $this->uri->segment(3, 0);
                foreach ($emp_report as $value) { ?>
                  <tr>
                    <td style="width:1%; text-align:center;" class="cell5">
                      <?php echo ++$slno ?>
                    </td>
                    


                    <td class="cell10" style="width:5%">
                      <?php echo stripcslashes($value['username']); ?>
                    </td>

                    

                    <td class="cell5" style="width:5%">
                      <?php echo ucfirst(stripcslashes($value['register_count'])); ?>
                    </td>

                    
                    <td class="cell5" style="width:5%">
                      <?php echo stripcslashes($value['payment']); ?>
                    </td>

                    <td class="cell5" style="width:5%">
                      <?php echo stripcslashes($value['service_type_c_count']); ?>
                    </td>

                    <td class="cell5" style="width:5%">
                      <?php echo stripcslashes($value['service_type_b_count']); ?>
                    </td>

                    <td class="cell5" style="width:5%">
                      <?php echo stripcslashes($value['service_type_a_count']); ?>
                    </td>


                    <td class="cell5" style="width:5%">
                      <?php echo stripcslashes($value['contact_exchanged']); ?>
                    </td>

                    <td class="cell5" style="width:5%">
                      <?php echo stripcslashes($value['no_of_match_makings']); ?>
                    </td>

                  </tr>
                  <?php 
                } ?>
              </tbody>
            </div>

          </table>
         
        </div>
      </div>
    </div>
  </div>
</div>

<!-- <script>

const excel = document.querySelector('#excel-export');
excel.addEventListener('click', (e) => {
    e.preventDefault();
       const status = encodeURIComponent(document.querySelector('#app_status').value);
       const name = encodeURIComponent(document.querySelector('#firstname').value);
       const initial_name = encodeURIComponent(document.querySelector('#surname').value);
       const profile_id = encodeURIComponent(document.querySelector('#profile_id').value);


    const params = `?status=${status}&name=${name}&initial_name=${initial_name}&profile_id=${profile_id}`;
    const URL = '<?php echo base_url() . 'admin/Admin_ap/export_report/' ?>' + params;
    window.open(URL, '_blank');
});

</script>  -->
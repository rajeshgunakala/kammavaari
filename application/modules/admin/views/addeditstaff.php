<!--<script src="<?php echo base_url(); ?>/js/jquery-1.12.4.js"></script><script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script><script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.3.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>assets/css/bootstrap.css"></script> -->
<div class="new-side-content">
  <div class="container-fluid mt25">

    <div class="row">
      <div class="col-sm-12">
        <a href="#" class="addnew btn btn-sm  text-right mb15" data-toggle="modal" data-target="#addnewstaffadmin"
          style="background-color: #07A0C3; color: white;">Add Staff/Admin</a>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-12">
        <div class="table-responsive">
          <table class="table table-bordered custTableBtnXS">
            <thead>
              <tr>


                <th scope="col" style="color : #07A0C3">User Name</th>
                <th scope="col" style="color : #07A0C3">Email</th>
                <th scope="col" style="color : #07A0C3">Phone</th>
                <th scope="col" style="color : #07A0C3">Rm Type</th>
                <th scope="col" style="color : #07A0C3">Type</th>
                <th scope="col" style="color : #07A0C3">Edit</th>
                <th scope="col" style="color : #07A0C3">Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($user_data as $ud) { ?>
                <tr>

                  <td>
                    <?php echo $ud->username; ?>
                  </td>
                  <td>
                    <?php echo $ud->email; ?>
                  </td>
                  <td>
                    <?php echo $ud->phone_no; ?>
                  </td>
                  <td>
                    <?php echo $ud->rm_type_name; ?>
                  </td>
                  <td>
                    <?php echo ucfirst($ud->type); ?>
                  </td>
                  <td><a href="#" class="editstaff btn btn-xs " style="background-color : #07A0C3; color: white;" data-toggle="modal" 
                      data-target="#exampleModal<?php echo $ud->id; ?>" id="<?php echo $ud->id; ?>">Edit</a></td>
                  <td><a href="#" class="deletestaff btn btn-xs btn-danger" id="<?php echo $ud->id; ?>">Delete</a></td>
                </tr>

                <div class="modal fade" id="exampleModal<?php echo $ud->id; ?>" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" >Edit
                          <?php echo $ud->username; ?>
                        </h5>
                        <button type="button" class="close fadeoutclass" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form enctype="multipart/form-data"  class="staffupdate<?php echo $ud->id; ?>">
                          <input type="hidden" name="txt_sid" class="txt_sid" value="<?php echo $ud->id; ?>">

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">User Name</label>
                                <input type="text" name="txt_username" class="txt_username form-control"
                                  value="<?php echo $ud->username; ?>">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">Password</label>
                                <input type="password" name="txt_password" class="txt_password form-control"
                                  value="<?php echo $ud->password; ?>">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">Email</label>
                                <input type="text" name="txt_email" class="txt_email form-control"
                                  value="<?php echo $ud->email; ?>">
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">Phone</label>
                                <input type="text" name="txt_phone" class="txt_phone form-control"
                                  value="<?php echo $ud->phone_no; ?>">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">RM Type</label>
                                <select name="rm_type" class="sel_usertype form-control">
                                  <option value="">select Rm type</option>
                                  <?php foreach ($rm_types as $rm_type) { ?>
                                    <option value=<?php echo $rm_type['id']; ?>     <?php if ($rm_type["rm_type_name"] == $ud->rm_type_name) {
                                              echo 'selected="selected"';
                                            } ?>><?php echo $rm_type["rm_type_name"]; ?></option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">User Type</label>
                                <select name="sel_usertype" class="sel_usertype form-control">
                                  <option value="staff" <?php if ($ud->type == 'staff') {
                                    echo 'selected="selected"';
                                  } ?>>Staff
                                  </option>
                                  <option value="admin" <?php if ($ud->type == 'admin') {
                                    echo 'selected="selected"';
                                  } ?>>Admin
                                  </option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">Joining Date</label>
                                <input type="date" name="txt_joining_date" class="txt_joining_date form-control"
                                  value="<?php echo $ud->joining_date; ?>">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                <label style="color : #07A0C3;" class="mb-2">Relieving Date</label>
                                <input type="date" name="txt_relieving_date" class="txt_relieving_date form-control"
                                  value="<?php echo $ud->relieving_date; ?>">
                              </div>
                            </div>
                          </div>

              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">image</label>
                  <input type="file" required='required'  class="txt_update_image form-control" name="txt_update_image" id="txt_update_image">
                </div>
              </div>


                          <div class="row">
                            <div class="col-sm-12 text-center"><a href="#" class="btn btn-sm staffupdate"
                            style="background-color : #07A0C3; color: white;" id="<?php echo $ud->id; ?>">Update</a></div>
                          </div>


                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary fadeoutclass" data-dismiss="modal">Close</button>

                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>
            </tbody>
            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>




  <div class="modal fade" id="addnewstaffadmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New User/Admin</h5>
          <button type="button" class="close fadeoutclass" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form class="addnewstaffadmin" enctype="multipart/form-data" >

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">User Name</label>
                  <input type="text" required='required' id='txt_username' name="txt_username" class="txt_username_a form-control"
                    value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">Password</label>
                  <input type="password" required='required' id='txt_password' name="txt_password" class="txt_password_a form-control"
                    value="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">Email</label>
                  <input type="email" required='required' id='txt_email' name="txt_email" class="txt_email_a form-control" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">Phone</label>
                  <input type="text" required='required' id='txt_phone' name="txt_phone" class="txt_phone_a form-control" value="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">RM Type</label>
                  <select name="rm_type" id="rm_type" class="sel_usertype form-control">
                    <option value="">select Rm type</option>
                    <?php foreach ($rm_types as $rm_type) { ?>
                      <option value=<?php echo $rm_type['id']; ?>><?php echo $rm_type["rm_type_name"]; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">User Type</label>
                  <select name="sel_usertype" id="sel_usertype" class="sel_usertype form-control">
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="col-sm-6">
                <div class="form-group">
                  <label style="color : #07A0C3" class="mb-2">image</label>
                  <input type="file" required='required'  class="txt_image form-control" name="txt_image" id="txt_image">
                </div>
              </div>



           

            <div class="row">
              <div class="col-sm-12 text-center"><a href="#" class="btn btn-sm addstaffadmin" style="background-color: #07A0C3; color: white;">Add</a></div>
            </div>


          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary fadeoutclass" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
   
.profile_img > img {
    width: 150px;
}
@media (min-width: 768px)
.navbar-nav>li {
    float: left;
    width: 100%;
}
.person-details {
    margin: 30px 0;
    border: 2px solid #f5f5f5;
    padding: 20px 10px;
    display: flex;
}
</style>
<section  class="form-section">
   <div class="container">
      <div class="col-md-12">
            <div class="general-form">
   <div class="col-md-12">
      <h2><i class="fa fa-book" aria-hidden="true"></i> Images Details</small></h2>
   </div>
<?php echo $this->session->flashdata('msg_succ') != "" ? $this->session->flashdata('msg_succ') : ''; ?>
        <?php $user_id=$this->session->userdata('user_id'); ?>
         <form method="POST" enctype="multipart/form-data" class="register-form" id="register-form">
             <div class="col-md-12">
                  <label id="label_starId" for="starId">Uploaded Image: </label>
                 <img style="width:100px;height:100px;" src="<?php echo site_url();?>images/profilepics/<?php echo $user_id."/".$record['photoname'];?>"/>
               </div>
               <div class="col-md-12">
                  <label id="label_starId" for="starId">Upload New Image</label>
                  <input type="file" name="image" style="width:50%" class="form-control"/>
               </div>
             <div class="col-xs-12">
                <div class="submit-form">
                  <input type="submit" value="Update" class="submit btn btn-primary" name="submit" id="submit">
                </div>
            </div>
         </form>
</div>
</div>
</div>
</section>
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
<div id="page-wrapper" class="container-fluid">
<div id="page-inner" class="col-xs-12 no-padding col-offset-xs-4">
<div class="col-xs-12 no-padding">
   <div class="col-md-12">
      <h2><i class="fa fa-book" aria-hidden="true"></i> Images Details</small></h2>
   </div>
</div>
<?php echo $this->session->flashdata('msg_succ') != "" ? $this->session->flashdata('msg_succ') : ''; ?>
<div class="col-md-12">
   <div class="col-xs-12">
      <div class="log-form">
         <form method="POST" enctype="multipart/form-data" class="register-form" id="register-form">
             <div class="form-row">
               <div class="form-group">
                  <label id="label_starId" for="starId">Upload Image</label>
                 <img style="width:100px;height:100px;" src="<?php echo site_url();?>images/profilepics/<?php echo $record['image'];?>"/>
               </div>
            </div>
            <div class="form-row">
               <div class="form-group">
                  <label id="label_starId" for="starId">Upload Image</label>
                  <input type="file" name="image" class="form-control"/>
               </div>
            </div>
            <div class="submit-form">
              <input type="submit" value="Update" class="submit m-0" name="submit" id="submit">
            </div>
         </form>
      </div>
   </div>
</div>
</div>
</div>
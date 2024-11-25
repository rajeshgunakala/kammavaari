<div class="new-side-content">
      <div id="page-inner">
      <div class="container" style="margin-top:40px;">
         <div class="row col-xs-12">
<div id="page-inner" class="col-xs-12 no-padding col-offset-xs-4">
  <h1 class="page-header">
	 <i class="fa fa-book" aria-hidden="true"></i> Images Details</small>
  </h1>
<?php if ($this->session->flashdata('msg_succ') != '') { ?>
<?php echo $this->session->flashdata('msg_succ') ? $this->session->flashdata('msg_succ') : ''; } ?>
   <div class="col-xs-12 d-flex ">
      <div class="general-form ">         
         <form method="POST" enctype="multipart/form-data" class="register-form" id="register-form">
            <div class="d-flex " style="    display: flex !important;
    flex-direction: column;    border: 1px solid #f97832;
    border-radius: 10px;">
            <div class="col-12">
                  <div class="col-md-6">
				  <label id="label_starId" for="starId"><strong>Existing Image:</strong></label>
				  </div>
				  <div class="col-md-12">
                 <img style="border:1px solid #1c1c1c;height : 200px" class="w-100 " src="<?php echo site_url();?>images/profilepics/<?php echo $record['MS_id']."/".$record['photoname'];?>"/>
               </div>
            </div>
            <div class="">
               <div class="col-md-12 p-2 my-3">
                  <label id="label_starId" for="starId"><strong>Upload New Image:</strong></label>
                  <input type="file" name="image" class="form-control"/>
               </div>
            </div>
			<div class="col-md-12 my-3">
				<div class="col-md-12  d-flex justify-content-center">
				  <input type="submit" value="Update" class="submit btn btn-primary" name="submit" id="submit">
				</div>
			</div>
            </div>
              
         </form>
      </div>
   </div>
</div>
</div>
</div>
</div>
</div>
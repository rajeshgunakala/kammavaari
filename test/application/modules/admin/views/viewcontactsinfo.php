<ul id="cust_call_log_list">

<?php if($calllog){   ?>
  <li>
    <div class="card-body card list-group-item list-group-item-success mb10">
      <h5 class="card-title">Father Email: </h5>
      <h4 class="card-text" style="font-size:1vw;"><?php echo $calllog->father_email;?></h4>
    </div>
  </li>
  
  <li>
    <div class="card-body card list-group-item list-group-item-success mb10">
      <h5 class="card-title">Father Mobile: </h5>
      <h4 class="card-text" style="font-size:1vw;"><?php echo $calllog->father_mobile;?></h4>
    </div>
  </li>
  
  <li>
    <div class="card-body card list-group-item list-group-item-success mb10">
      <h5 class="card-title">Mother Mobile: </h5>
      <h4 class="card-text" style="font-size:1vw;"><?php echo $calllog->mother_mobile;?></h4>
    </div>
  </li>
  <li>
    <div class="card-body card list-group-item list-group-item-success mb10">
      <h5 class="card-title">Mother Email: </h5>
      <h4 class="card-text" style="font-size:1vw;"><?php echo $calllog->mother_email;?></h4>
    </div>
  </li>
  
  
  <?php } else{ ?> <li><li>
    <div class="card-body card list-group-item list-group-item-warning mb10">
      
      <h4 class="card-text" style="font-size:1vw;">Contacts not Available.</h4>
    </div>
  </li></li><?php }?>
  
</ul>

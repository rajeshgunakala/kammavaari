<ul id="cust_call_log_list">

<?php if($calllog['call_log']){$c='success';foreach($calllog['call_log'] as  $res){  ?>
  <li>
    <div class="card-body card list-group-item list-group-item-<?php echo $c;?> mb10">
      <h5 class="card-title"><b><?php echo getlangkeywords($res['cl_type']);?></b> |  <?php echo $res['called_date'];?> | <?php echo getlangkeywords($res['cl_success']);?> | <?php echo ucfirst(getstaffdetbyid($res['cl_by'])->username);?></h5>
      <h4 class="card-text" style="font-size:1vw;"><?php echo $res['cl_description'];?></h4>
    </div>
  </li>
  <?php $c=($c=='warning') ? 'success' : 'warning';}} else{ ?> <li><li>
    <div class="card-body card list-group-item list-group-item-warning mb10">
      
      <h4 class="card-text" style="font-size:1vw;">Marketing History not Available.</h4>
    </div>
  </li></li><?php }?>
  
</ul>

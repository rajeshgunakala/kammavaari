<!-- <section class="about-us">
    <div class="container">
        <div class="col-md-12">
           <div class="row">
              <div class="forgot-form">
                 <h2>Forgot Password</h2>
                <?php if(isset($msg)){ ?>
            		<div class="alert alert-danger alert-dismissible">
            			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            			  <strong><?php echo $msg ?></strong> 
            		</div>
                <?php }?>
                 <form action="<?php echo site_url();?>login/resetpassword" method="POST" class="form1">
                    <p class="forget-p">Enter the email id that you registered with us.</p>
                    <div class="forgot-passwd">
                        <label class="labelUser">Email Id </label>
                       <input type="text" name="email" data-Nclass=".labelUser" class="form-control" required />
                    </div>
                    <button type="submit" name="submit" class="btn">Send Password</button>
                 </form>
              </div>
           </div>
        </div>
    </div>
</section> -->


<style>
    .form-gap {
    padding-top: 70px;
}
</style>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"> -->
<div class="form-gap"></div>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <div class="text-center">
                  <h3><i class="fa fa-lock fa-4x"></i></h3>
                  <?php if(isset($msg)){ ?>
            		<div class="alert alert-danger alert-dismissible">
            			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            			  <strong><?php echo $msg ?></strong> 
            		</div>
                <?php }?>
                  <h2 class="text-center">Forgot Password?</h2>
                  <p>You can reset your password here.</p>
                  <div class="panel-body">
    
                    <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="<?php echo site_url();?>login/resetpassword">
    
                      <div class="form-group">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                          <input id="email" name="email" placeholder="email address" class="form-control"  type="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                      </div>
                      
                      <input type="hidden" class="hide" name="token" id="token" value=""> 
                    </form>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>


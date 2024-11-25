	<style>
	.wrapper {padding-top:40px;}
	</style>
	<div class="wrapper">
		<!-- Header Styles Ends Here -->
		<!-- Search List main Content Start Here -->
		<div class="main_content teamSinglePage pb-0">
			<div class="container">
				<div class="row mx-n2">
					<div class="col-md-9 px-2">
					    
					    <div class="box_styles row">
					        
					<?php foreach($search_records as $value) { ?>
						
						    
							<div class="col-lg-4 col-md-4 col-xs-12">
								<div class="team_thumb">
									<?php if($value['photoname']!="" && $value['ismain']==1 && $value['isactive']) { ?>
										<img class="profile_img" width="20%" src="<?php echo $value['applicationphotopath']; ?>"><?php } 
										else{ ?>
										<img class="profile_img" src="<?php echo site_url();?>images/profilepics/noimage.jpg" width="75%">
									<?php }?>
								</div>
							</div>
							<div class="col-lg-6 offset-lg-1 col-md-6">
								<div class="team_content">
									<h4><?php echo $value['last_name'];?><span>(ID:<?php echo $value['profile_id'];?>)</h4>
									<ul class="tm_meta mb_103 mb-3">
										 <li><?php echo $value['age'];?> Years, <?php echo stripcslashes($value['height']);?></li>
										<li><?php echo ucwords($value['religion']);?>, <?php echo ucwords($value['caste']);?></li>
										<li><?php echo ucwords($value['mother_tounge']);?></li>
										<li><?php echo $value['heighst_education'];?></li>
										<li><?php echo ucwords($value['occupation']);?></li>
										<li><?php echo ucwords($value['annual_income']);?></li>
									</ul>
									
									<div class="mt-4">
										<a href="<?php echo site_url(); ?>registration" style="float:left;width:45% !important" class="btn btn-black max-150 m-2 btn-grad-orange">View Profile</a>
										<a href="<?php echo site_url(); ?>registration" style="width:45% !important" class="btn btn-black max-150 m-2 btn-grad-orange" >Contact Now</a>
									</div>
									
								</div>
							</div>
							
					
					<?php } ?>
						</div>
						<!-- Pagination Start Here-->
					<!--	<div class="mt-4">
							<nav role="navigation">
								<ul class="cd-pagination">
								<li class="button"><a class="disabled" href="#0">Prev</a></li>
								<li><a class="current" href="#0">1</a></li>
								<li><a href="#0">2</a></li>
								<li><a href="#0">3</a></li>
								<li><a href="#0">4</a></li>
								<li><span>...</span></li>
								<li><a href="#0">20</a></li>
								<li class="button"><a href="#0">Next</a></li>
								</ul>
							</nav>
						 </div> -->
						 <!-- Pagination Ends Here -->
					</div>
								 
			</div>
		</div>
		<!-- Search List main Content Ends Here -->
		 <!-- Footer Start Here -->
			<!-- Footer Ends Here -->

		<!-- Upgrade Membership Popup Start Here -->
		
  		<!-- Upgrade Membership Popup Ends Here -->	

	</div>
	
	<script type="text/javascript">
          $(document).ready(function() { 
              $('#myModal').on('shown.bs.modal', function () {
				$('#myInput').trigger('focus')
			})
          });
      </script>
</body>
</html>
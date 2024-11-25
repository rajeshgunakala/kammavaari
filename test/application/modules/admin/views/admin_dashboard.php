<div class="new-side-content">
 <!-- <div class="welcomeUserBgRed">Welcome <?php echo ucfirst($this->session->userdata('uname'));?>
	<p class="sub">
		<span class="sLabel dn">Notifications(60)</span>
		<span class="sLabel"><a class="loadMoreBtn" href="<?php echo base_url();?>admin/unpaidmembers"><?php echo getlangkeywords('unpaidmembers');?>(<?php echo unpaidmembers_count();?>)</a></span>
	</p>
 </div> -->
  <div class="admin-body-wrapper">
	<div class="row">
		<div class="col-xs-6 col-md-6">
			<div class="pageHadingWithBlue">
				
				 Followup matches
			</div>
			</div>
			<div class="col-xs-6 col-md-6">
				<div style="text-align:right;font-weight:700;font-size:28px;color:#000;margin: 10px 0 10px 15px;padding: 0 0 15px 0;">
					<a style="color:#07A0C3;" href="<?php echo base_url();?>admin/admin_search/ajaxLatestProfiles?searchtype=latest_profiles">Latest Profiles (<?php echo getLatestProfilesCount();?>)</a>
				</div>
			</div>
	</div>
	 <div class="row">
		<?php $this->load->view('leftpanelstaff');?>
		 <div class="col-md-12 col-xs-12">
			<div class="row">
				<!-- <div class="col-sm-4 userMatBox">
					<div class="userMatBoxWrapper">

						<div class="userMatBoxHeading">Match Meeting (<?php echo matchmetingserious_count();?>) <a href="javascript:void(0);"><i class="fa fa-close"></i></a></div>
						<div class="userMatBoxRunning">
							<?php if(matchmetingserious_count() > 0) {?>
								<ul class="custCheckBoxUl">
								 <?php foreach($matchmetingserious as $hold){?>
									<li class="custCheckBoxLabel">
										<div class="form-group form-check">
											<label class="form-check-label" for="exampleCheck1"><?php echo ucfirst($hold->clientfname.' '.$hold->clientlname);?></label>
										  </div>
										  <div class="expireDate">Created Date: <?php echo date('d/m/Y h:i A', strtotime($hold->kv_msi_created_date));  ?></div>
									</li>
									<?php } ?>
									<a class="loadMoreBtn" href="<?php echo base_url();?>admin/matchmetingserious">Load More...</a>
								</ul>
							<?php } else {?>
							<p class="no_records">No records found.</p>
							<?php } ?>
						</div>
					</div>
				</div> -->


				

			
				</div>
				<!-- <div class="col-sm-4 userMatBox">
					<div class="userMatBoxWrapper">
						<div class="userMatBoxHeading"><?php echo getlangkeywords('nearbyexpiryprofiles');?>(<?php echo count($nearbyexpiryprofiles_total);?>) <a href="javascript:void(0);"><i class="fa fa-close"></i></a></div>
						<div class="userMatBoxRunning">
						<?php if(nearbyexpiryprofiles_count() > 0) {?>
							<ul class="custCheckBoxUl">
							 <?php foreach($nearbyexpiryprofiles as $hold){?>
								<li class="custCheckBoxLabel">
									<div class="form-group form-check">
										
										<label class="form-check-label" for="exampleCheck1"><?php echo ucfirst($hold->first_name.' '.$hold->last_name);?></label>
									  </div>
									  <div class="expireDate">Expire Date: <?php echo date('d/m/Y h:i A', strtotime($hold->expiry_date));  ?></div>
								</li>
								<?php } ?>
								<a class="loadMoreBtn" href="<?php echo base_url();?>admin/nearbyexpiryprofiles">Load More...</a>
							</ul>
							<?php } else {?>
							<p class="no_records">No records found.</p>
							<?php } ?>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-sm-4 userMatBox">
					<div class="userMatBoxWrapper">
						<div class="userMatBoxHeading"><?php echo getlangkeywords('noservicesincemonth');?> (<?php echo count($noservicesincemonth_total);?>) <a href="javascript:void(0);"><i class="fa fa-close"></i></a></div>
						<div class="userMatBoxRunning">
						<?php if(noservicesincemonth_count() > 0) {?>
							<ul class="custCheckBoxUl">
							<?php foreach($noservicesincemonth as $hold){ ?>
								<li class="custCheckBoxLabel">
									<div class="form-group form-check">
										<label class="form-check-label" for="exampleCheck1"><?php echo ucfirst($hold['first_name'].' '.$hold['last_name']);?></label>
									  </div>
									  <div class="expireDate">Last Call Date: <?php echo date('d/m/Y h:i A', strtotime($hold['last_call_updated']));  ?></div>
								</li>
								<?php } ?>
								<a class="loadMoreBtn" href="<?php echo base_url();?>admin/noservicesincemonth">Load More...</a>
							</ul>
							<?php } else {?>
							<p class="no_records">No records found.</p>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-sm-4 userMatBox">
					<div class="userMatBoxWrapper">
						<div class="userMatBoxHeading"><?php echo getlangkeywords('freeprofticketexpiry');?> (<?php echo freeprofticketexpiry_count();?>)<a href="javascript:void(0);"><i class="fa fa-close"></i></a></div>
						<div class="userMatBoxRunning">
						<?php if(freeprofticketexpiry_count() > 0) {?>
							<ul class="custCheckBoxUl">
							 <?php foreach($freeprofticketexpiry as $hold){?>
								<li class="custCheckBoxLabel">
									<div class="form-group form-check">
										<label class="form-check-label" for="exampleCheck1"><?php echo ucfirst($hold->first_name.' '.$hold->last_name);?></label>
									  </div>
									  <div class="expireDate">Reminder Date: <?php echo date('d/m/Y h:i A', strtotime($hold->rem_date));  ?></div>
								</li>
								<?php } ?>
								<a class="loadMoreBtn" href="<?php echo base_url();?>admin/freeprofticketexpiry">Load More...</a>
							</ul>
							<?php } else {?>
							<p class="no_records">No records found.</p>
							<?php } ?>
						</div>
					</div>
				</div> -->
				<!-- <div class="col-sm-4 userMatBox">
					<div class="userMatBoxWrapper">
						<div class="userMatBoxHeading"><?php echo getlangkeywords('bothsideinterest');?> (<?php echo bothsideinterest_count();?>) <a href="javascript:void(0);"><i class="fa fa-close"></i></a></div>
						<div class="userMatBoxRunning">
						<?php if(bothsideinterest_count() > 0) {?>
							<ul class="custCheckBoxUl">
							 <?php foreach($bothsideinterest as $hold){?>
								<li class="custCheckBoxLabel">
									<div class="form-group form-check">										
										<label class="form-check-label" for="exampleCheck1"><?php echo ucfirst($hold->clientfname.' '.$hold->clientlname);?></label>
									</div>
									<div class="expireDate">Interested On: <?php echo date('d/m/Y h:i A', strtotime($hold->kv_msi_modified_date));  ?></div>
								</li>
								<?php } ?>
								<a class="loadMoreBtn" href="<?php echo base_url();?>admin/bothsideinterest">Load More...</a>
							</ul>
							<?php } else {?>
							<p class="no_records">No records found.</p>
							<?php } ?>
						</div>
					</div>
				</div> -->

			</div>
		 </div>
	 </div>
  </div>
</div>


<style>
	.admin-body-wrapper {
    padding: 15px;
    background: #f8f8f8;
}
.welcomeUserBgRed{
	padding: 10px 0px;
}
</style>
<div class="CPProfileMyProfessionalEduWrapper">				
<div class="CPProfileMyProfessionalEduContiner">
	<div class="CPProfileMyProfessionalEduSubHeading">&nbsp;</div>
	<div class="CPProfileMyProfessionalEduRunningContent custOverFlowScroll">
		<ul>
		<?php foreach($rmnotes_1 as $notes){?>
			<li>
				<div class="CPProfileMyProfessionalEduRunningContentLeft"><?php echo date('d-m-Y',strtotime($notes->kv_created_date));?> </div>
				<div class="CPProfileMyProfessionalEduRunningContentDivider">: </div>
				<div class="CPProfileMyProfessionalEduRunningContentRight"><?php echo base64_decode($notes->kv_rmn_notes);?></div>
			</li>
			<?php } ?>
		</ul>
	</div>
</div>
</div>
<script src="https://cdn.ckeditor.com/4.7.3/standard-all/ckeditor.js"></script>
<?php /*?><script src="<?php echo base_url();?>js/ckeditor.js"></script><?php */?>
<div class="new-side-content">   
<div class="container " >
	<div class="row ">
    <div class="col-sm-4 mt80">
    <ul class="list-group">
     <?php foreach($templates_data as $td){?>
     <li class="list-group-item <?php if($seltemplatetype==$td->et_key){?> bg-warning <?php } ?>"><a href="<?php echo base_url();?>admin/emailtemplates?template=<?php echo $td->et_key;?>"><?php echo ucfirst($td->et_title);?></a></li>
     <?php }?>
     </ul>
    </div>
   
    <div class="col-sm-8 mt80">
     <form id="emailtemplateform" action="#" method="post">
    <input type="hidden" name="txt_template" class="txt_template" value="<?php echo $templatetype->et_key;?>" />
   <textarea id="editor" name="txt_editor" > <?php echo $templatetype->et_body;?>   </textarea>
   <div class="text-center mt10"><div class="btn btn-sm btn-primary submittemplate">Submit</div></div>
   
   
   </form>
    <div class="text-center mt10"><strong>Note:</strong> You can change the Email text but don't change the text in braces{}. ex: {name}, {email}, {support_contact} etc., </div>
    </div>
    <!--<div class="btn btn-sm btn-primary submittemplate">Submit</div>-->
    
  </div>
 </div></div>
  
   <script>
  
  
		CKEDITOR.replace( 'editor', {
			extraPlugins: 'uploadimage,image2',
			height: 300,

			// Upload images to a CKFinder connector (note that the response type is set to JSON).
			uploadUrl: '<?php echo base_url();?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

			// Configure your file manager integration. This example uses CKFinder 3 for PHP.
			filebrowserBrowseUrl: '<?php echo base_url();?>ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: '<?php echo base_url();?>ckfinder/ckfinder.html?type=Images',
			filebrowserUploadUrl: '<?php echo base_url();?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
			filebrowserImageUploadUrl: '<?php echo base_url();?>ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',

			// The following options are not necessary and are used here for presentation purposes only.
			// They configure the Styles drop-down list and widgets to use classes.

			stylesSet: [
				{ name: 'Narrow image', type: 'widget', widget: 'image', attributes: { 'class': 'image-narrow' } },
				{ name: 'Wide image', type: 'widget', widget: 'image', attributes: { 'class': 'image-wide' } }
			],

			// Load the default contents.css file plus customizations for this sample.
			contentsCss: [ CKEDITOR.basePath + 'contents.css', 'http://sdk.ckeditor.com/samples/assets/css/widgetstyles.css' ],

			// Configure the Enhanced Image plugin to use classes instead of styles and to disable the
			// resizer (because image size is controlled by widget styles or the image takes maximum
			// 100% of the editor width).
			image2_alignClasses: [ 'image-align-left', 'image-align-center', 'image-align-right' ],
			image2_disableResizer: true
		} );
		
		
		
	</script>
 
 
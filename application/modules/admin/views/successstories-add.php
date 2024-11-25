<div class="main-content new-side-content" style="margin-left:250px;">
	<div class="main-content-inner">
		<!-- </div> -->
		<!-- /.pull-left -->

		<div class="pull-left width-50">
			<!-- #section:abouts/sidebar.options -->
			<div class="ace-settings-item">
				<!-- <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" /> -->
				<!-- <label class="lbl" for="ace-settings-hover"> Submenu on Hover</label> -->
				<label class="lbl" for="ace-settings-hover"></label>

			</div>

			<div class="ace-settings-item">
				<!-- <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" /> -->
				<!-- <label class="lbl" for="ace-settings-compact"> Compact Sidebar</label> -->
				<label class="lbl" for="ace-settings-compact"></label>

			</div>

			<div class="ace-settings-item">
				<!-- <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" /> -->
				<!-- <label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label> -->
				<label class="lbl" for="ace-settings-highlight"></label>

			</div>

			<!-- /section:abouts/sidebar.options -->
		</div><!-- /.pull-left -->

		<!-- <h3 class="header smaller lighter blue">&nbsp;</h3> -->
		<div class="row" style="margin-left: 100px">
			<?php if ($msg != '') { ?>
				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</button>
					<p>
						<i class="icon-ok"></i>
						<?php echo $msg ? $msg : ''; ?>
					</p>
				</div>
			<?php } ?>
			<div class="col-xs-12" style="margin-top:50px">
				<!-- PAGE CONTENT BEGINS -->
				<form class="form-horizontal" name="myform" id="myform" method="post" enctype="multipart/form-data"
					role="form">
					<h2 style="font-family: 'Roboto', sans-serif; margin-left: 10px;">Add Couple Page</h2>


					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Couple Names :
						</label>
						<div class="col-sm-9">
							<input type="text" id="form-field-1" required name="title"
								placeholder="Enter Couple Names Seperated bY Comma" class="col-xs-10 col-sm-5" />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Upload Image:
						</label>
						<div class="col-sm-4">
							<input type="file" name="image" id="id-input-file-2" class="col-xs-10 col-sm-5" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Description :
						</label>

						<div class="col-sm-9">
							<script src="//cdn.ckeditor.com/4.5.9/full/ckeditor.js"></script>
							<textarea name="content"></textarea>
							<script>
								CKEDITOR.replace('content');
							</script>
						</div>
					</div>
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							<button class="btn btn-info" type="submit" name="submit" value="submit">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Submit
							</button>

							&nbsp; &nbsp; &nbsp;
							<a class="btn" href="<?php echo site_url(); ?>admin/successstories/index">
								<i class="ace-icon fa fa-undo bigger-110"></i>
								Cancel
							</a>
						</div>
					</div>
				</form>
			</div>

		</div>

	</div><!-- /.page-content -->
</div>
</div><!-- /.main-content -->

<?php echo $this->load->view('footer_copywrite_div'); ?>

<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
	<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
</a>
</div><!-- /.main-container -->

<!-- about scripts -->

<!--[if !IE]> -->
<script type="text/javascript">
	window.jQuery || document.write("<script src='<?php echo site_url(); ?>assets/js/jquery.js'>" + "<" + "/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='<?php echo site_url(); ?>assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) document.write(
		"<script src='<?php echo site_url(); ?>assets/js/jquery.mobile.custom.js'>" + "<" + "/script>");
</script>
<script src="<?php echo site_url(); ?>assets/js/bootstrap.js"></script>

<!-- page specific plugin scripts -->
<script src="<?php echo site_url(); ?>assets/js/jquery-ui.custom.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.ui.touch-punch.js"></script>
<script src="<?php echo site_url(); ?>assets/js/markdown/markdown.js"></script>
<script src="<?php echo site_url(); ?>assets/js/markdown/bootstrap-markdown.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.hotkeys.js"></script>
<script src="<?php echo site_url(); ?>assets/js/bootstrap-wysiwyg.js"></script>
<script src="<?php echo site_url(); ?>assets/js/bootbox.js"></script>
<script src="<?php echo site_url(); ?>assets/js/chosen.jquery.js"></script>
<script src="<?php echo site_url(); ?>assets/js/fuelux/fuelux.spinner.js"></script>
<script src="<?php echo site_url(); ?>assets/js/date-time/bootstrap-datepicker.js"></script>
<script src="<?php echo site_url(); ?>assets/js/date-time/bootstrap-timepicker.js"></script>
<script src="<?php echo site_url(); ?>assets/js/date-time/moment.js"></script>
<script src="<?php echo site_url(); ?>assets/js/date-time/daterangepicker.js"></script>
<script src="<?php echo site_url(); ?>assets/js/date-time/bootstrap-datetimepicker.js"></script>
<script src="<?php echo site_url(); ?>assets/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.knob.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.autosize.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.inputlimiter.1.3.1.js"></script>
<script src="<?php echo site_url(); ?>assets/js/jquery.maskedinput.js"></script>
<script src="<?php echo site_url(); ?>assets/js/bootstrap-tag.js"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
	jQuery(function ($) {

		function showErrorAlert(reason, detail) {
			var msg = '';
			if (reason === 'unsupported-file-type') {
				msg = "Unsupported format " + detail;
			} else {
				//console.log("error uploading file", reason, detail);
			}
			$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
				'<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
		}

		//$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

		//but we want to change a few buttons colors for the third style
		$('#editor1').ace_wysiwyg({
			toolbar: [
				'font',
				null,
				'fontSize',
				null,
				{
					name: 'bold',
					className: 'btn-info'
				},
				{
					name: 'italic',
					className: 'btn-info'
				},
				{
					name: 'strikethrough',
					className: 'btn-info'
				},
				{
					name: 'underline',
					className: 'btn-info'
				},
				null,
				{
					name: 'insertunorderedlist',
					className: 'btn-success'
				},
				{
					name: 'insertorderedlist',
					className: 'btn-success'
				},
				{
					name: 'outdent',
					className: 'btn-purple'
				},
				{
					name: 'indent',
					className: 'btn-purple'
				},
				null,
				{
					name: 'justifyleft',
					className: 'btn-primary'
				},
				{
					name: 'justifycenter',
					className: 'btn-primary'
				},
				{
					name: 'justifyright',
					className: 'btn-primary'
				},
				{
					name: 'justifyfull',
					className: 'btn-inverse'
				},
				null,
				{
					name: 'createLink',
					className: 'btn-pink'
				},
				{
					name: 'unlink',
					className: 'btn-pink'
				},
				null,
				{
					name: 'insertImage',
					className: 'btn-success'
				},
				null,
				'foreColor',
				null,
				{
					name: 'undo',
					className: 'btn-grey'
				},
				{
					name: 'redo',
					className: 'btn-grey'
				}
			],
			'wysiwyg': {
				fileUploadError: showErrorAlert
			}
		}).prev().addClass('wysiwyg-style2');

		$('#myform').on('submit', function () {
			$('input[name=content]', this).val($('#editor1').html());
			return true;
		});
		/**
		//make the editor have all the available height
		$(window).on('resize.editor', function() {
			var offset = $('#editor1').parent().offset();
			var winHeight =  $(this).height();
			
			$('#editor1').css({'height':winHeight - offset.top - 10, 'max-height': 'none'});
		}).triggerHandler('resize.editor');
		*/


		$('#editor2').css({
			'height': '200px'
		}).ace_wysiwyg({
			toolbar_place: function (toolbar) {
				return $(this).closest('.widget-box')
					.find('.widget-header').prepend(toolbar)
					.find('.wysiwyg-toolbar').addClass('inline');
			},
			toolbar: [
				'bold',
				{
					name: 'italic',
					title: 'Change Title!',
					icon: 'ace-icon fa fa-leaf'
				},
				'strikethrough',
				null,
				'insertunorderedlist',
				'insertorderedlist',
				null,
				'justifyleft',
				'justifycenter',
				'justifyright'
			],
			speech_button: false
		});




		$('[data-toggle="buttons"] .btn').on('click', function (e) {
			var target = $(this).find('input[type=radio]');
			var which = parseInt(target.val());
			var toolbar = $('#editor1').prev().get(0);
			if (which >= 1 && which <= 4) {
				toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g, '');
				if (which == 1) $(toolbar).addClass('wysiwyg-style1');
				else if (which == 2) $(toolbar).addClass('wysiwyg-style2');
				if (which == 4) {
					$(toolbar).find('.btn-group > .btn').addClass('btn-white btn-round');
				} else $(toolbar).find('.btn-group > .btn-white').removeClass('btn-white btn-round');
			}
		});




		//RESIZE IMAGE

		//Add Image Resize Functionality to Chrome and Safari
		//webkit browsers don't have image resize functionality when content is editable
		//so let's add something using jQuery UI resizable
		//another option would be opening a dialog for user to enter dimensions.
		if (typeof jQuery.ui !== 'undefined' && ace.vars['webkit']) {

			var lastResizableImg = null;

			function destroyResizable() {
				if (lastResizableImg == null) return;
				lastResizableImg.resizable("destroy");
				lastResizableImg.removeData('resizable');
				lastResizableImg = null;
			}

			var enableImageResize = function () {
				$('.wysiwyg-editor')
					.on('mousedown', function (e) {
						var target = $(e.target);
						if (e.target instanceof HTMLImageElement) {
							if (!target.data('resizable')) {
								target.resizable({
									aspectRatio: e.target.width / e.target.height,
								});
								target.data('resizable', true);

								if (lastResizableImg != null) {
									//disable previous resizable image
									lastResizableImg.resizable("destroy");
									lastResizableImg.removeData('resizable');
								}
								lastResizableImg = target;
							}
						}
					})
					.on('click', function (e) {
						if (lastResizableImg != null && !(e.target instanceof HTMLImageElement)) {
							destroyResizable();
						}
					})
					.on('keydown', function () {
						destroyResizable();
					});
			}

			enableImageResize();

		/**
		//or we can load the jQuery UI dynamically only if needed
		if (typeof jQuery.ui !== 'undefined') enableImageResize();
		else {//load jQuery UI if not loaded
			//in Ace demo <?php echo site_url(); ?>assets will be replaced by correct assets path
			$.getScript("<?php echo site_url(); ?>assets/js/jquery-ui.custom.min.js", function (data, textStatus, jqxhr) {
				enableImageResize()
			});
		}
		* /
	}


	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
		no_file: 'No File ...',
		btn_choose: 'Choose',
		btn_change: 'Change',
		droppable: false,
		onchange: null,
		thumbnail: false //| true | large
		//whitelist:'gif|png|jpg|jpeg'
		//blacklist:'exe|php'
		//onchange:''
		//
	});


});
</script>

<!-- ace scripts -->
<script src="<?php echo site_url(); ?>assets/js/ace/elements.scroller.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.colorpicker.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.fileinput.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.typeahead.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.wysiwyg.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.spinner.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.treeview.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.wizard.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/elements.aside.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.ajax-content.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.touch-drag.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.sidebar.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.sidebar-scroll-1.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.submenu-hover.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.widget-box.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.settings.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.settings-rtl.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.settings-skin.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.widget-on-reload.js"></script>
<script src="<?php echo site_url(); ?>assets/js/ace/ace.searchbox-autocomplete.js"></script>

<!-- inline scripts related to this page -->

</body>

</html>
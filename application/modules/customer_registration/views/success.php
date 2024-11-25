<div>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="d-flex align-items-center">
				<div class="w-100 d-block bg-white shadow-lg rounded my-5">
					<div class="row">
						<div class="col-lg-5 d-none d-lg-block bg-register rounded-left"></div>
						<div class="col-lg-7">
							<div class="p-5">
								<h1 class="h5 mb-3">Your profile is registered successfully.</h1>
								<p>You received an email for activating profile. Click on the link and activate profile.</p>
								<!--<p>Profile Id: KV2321321</p>-->
	
            
								<!-- end row -->
							</div> <!-- end .padding-5 -->
						</div> <!-- end col -->
					</div> <!-- end row -->
				</div> <!-- end .w-100 -->
			</div> <!-- end .d-flex -->
		</div> <!-- end col-->
	</div> <!-- end row -->
</div>
<!-- end container -->
</div>
<!-- end page -->
<style>
.hide {display:none;}
#image_preview img {  
  width: 100%;
    border: 2px solid #f3f3f3;
    padding: 10px;
    margin: 10px;
	}
</style>




      <style>
         :focus{
         outline: none;
         }
         #formdiv {
         text-align: center;
         }
         #file {
         color: green;
         padding: 5px;
         border: 1px dashed #123456;
         background-color: #f9ffe5;
         }
         #img {
         width: 17px;
         border: none;
         height: 17px;
         margin-left: -20px;
         margin-bottom: 191px;
         }
         .upload {
         width: 100%;
         height: 30px;
         }
         
         .upload-input{
         height: 50px;
         background: #950c5e;
         color: #fff;
         padding: 7px;
         font-size:25px;
         font-weight:500;
         margin:25px 0px;
         }
         .previewBox {
         text-align: center;
         position: relative;
         width: 150px;
         height: 150px;
         margin-right: 10px;
         margin-bottom: 20px;
         float: left;
         }
         .previewBox img {
         height: 150px;
         width: 150px;
         padding: 5px;
         border: 1px solid rgb(232, 222, 189);
         }
         .delete {
         color: red;
         font-weight: bold;
         position: absolute;
         top: 0;
         cursor: pointer;
         width: 20px;
         height:  20px;
         border-radius: 50%;
         background: #ccc;
         }
      </style>
   <section  class="form-section">
   <div class="container">
      <div class="col-md-12">
           </div>
         </div>
      </section>
     
      <script>
         function preview_images() 
         {
          var total_file=document.getElementById("images").files.length;
          for(var i=0;i<total_file;i++)
          {
           $('#image_preview').append("<div class='col-md-4'><img class='img-responsive ht-140 mb-20' src='"+URL.createObjectURL(event.target.files[i])+"'></div>");
          }
         }
      </script>
      <script>
         $('#add_more').click(function() {
              "use strict";
              $(this).before($("<div/>", {
                id: 'filediv'
              }).fadeIn('slow').append(
                $("<input/>", {
                  name: 'file[]',
                  type: 'file',
                  id: 'file',
                  multiple: 'multiple',
                  accept: 'image/*'
                })
              ));
            });
         
            $('#upload').click(function(e) {
              "use strict";
              e.preventDefault();
         
              if (window.filesToUpload.length === 0 || typeof window.filesToUpload === "undefined") {
                alert("No files are selected.");
                return false;
              }
         
            });
         
            deletePreview = function (ele, i) {
              "use strict";
              try {
                $(ele).parent().remove();
                window.filesToUpload.splice(i, 1);
              } catch (e) {
                console.log(e.message);
              }
            }
         
            $("#file").on('change', function() {
              "use strict";
         
              // create an empty array for the files to reside.
              window.filesToUpload = [];
         
              if (this.files.length >= 1) {
                $("[id^=previewImg]").remove();
                $.each(this.files, function(i, img) {
                  var reader = new FileReader(),
                    newElement = $("<div id='previewImg" + i + "' class='previewBox'><img /></div>"),
                    deleteBtn = $("<span class='delete' onClick='deletePreview(this, " + i + ")'>X</span>").prependTo(newElement),
                    preview = newElement.find("img");
         
                  reader.onloadend = function() {
                    preview.attr("src", reader.result);
                    preview.attr("alt", img.name);
                  };
         
                  try {
                    window.filesToUpload.push(document.getElementById("file").files[i]);
                  } catch (e) {
                    console.log(e.message);
                  }
         
                  if (img) {
                    reader.readAsDataURL(img);
                  } else {
                    preview.src = "";
                  }
         
                  newElement.appendTo("#filediv");
                });
              }
            });
         
      </script>
      <script>
         $(document).ready(function(){
         
         $("input").focusout(function(){
         
         var nameC = $(this).attr("data-Nclass");
         
         if($(this).val().length > 0)
          $(nameC).addClass("stayPlaceInput");
         else
          $(nameC).removeClass("stayPlaceInput");
         });
         
         });
      </script>
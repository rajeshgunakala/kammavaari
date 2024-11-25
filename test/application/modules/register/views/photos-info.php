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
            <div class="general-form">
                <h2>Manage Photos</h2>
                  <div class="upload-image">
                     <div class="do-later"><a href="<?php echo site_url();?>login" class="upload-later">Will Do this Later</a></div>
                     <?php if ($this->session->flashdata('msg_succ') != '') { ?>
                            <div class="alert alert-block alert-success">
                                <button type="button" class="close" data-dismiss="alert">
                                    <i class="ace-icon fa fa-times"></i>
                                </button>
                                <p>
                            <?php echo $this->session->flashdata('msg_succ') ? $this->session->flashdata('msg_succ') : ''; ?>
                                </p>
                            </div>
                    <?php } ?>
                     <form method="post" action="<?php echo site_url();?>register/upload" enctype="multipart/form-data">
                        <div class="col-md-12">
                           <p>75% of our users feel they need atleast 3 photos to send an expression of intrest.</p>
                           <div class="col-md-6">
                               <input type="file" class="form-control upload-input" id="images" name="images[]" onchange="preview_images();" multiple/>
                           </div>
                        </div>
                        <div class="row ptb-20 ht-140" id="image_preview"></div>
                        <div class="col-md-12">
                           <p>Strong Photo Privacy Options | No downloads allowed | Photos are Watermarked Jpeg, Jpg, PNG | Upto 10MB | 3 photos only</p>
                        </div>
                        <div class="col-md-12">
                           <input type="submit" class="btn btn-primary" name='submit_image' value="Upload Images"/>
                        </div>
                     </form>
                  </div>
               </div>
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
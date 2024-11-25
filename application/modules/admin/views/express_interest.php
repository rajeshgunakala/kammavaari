<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

?>
<style type="text/css">
    .ProfileCard {
        margin: 10px;
    }
    .ProfileCard span {
        position: absolute;
    }
    .ProfileCard p {
        margin: 8px;
    }
    .ProfileCard label {
        font-weight: 700;
    }
    .card-img-top {
        height: 150px;
    }
    h5.card-title {
        margin-left: 8px;
    }
    .removeP {
        margin: 5px;
        color: white !important;
        border-color: unset;
    }
    .card-body {
        padding: 5px;
    }
</style>
<div class="new-side-content">
<div class="row">                    
    <div class="col-md-12">
        <div class="card" style="border-style: none;background-color: white;">
            <div class="card-header" style="border-style: none;background-color: white">                      
                <!-- <button class="submit" style="width:300px; margin-left: 540px;">Payment Information</button> -->
                <h1 style="text-align: center;font-weight: 700px;font-size: 28px;"><?php echo $heading;?></h1>
            </div> 
            <div class="card-body " style="width:100%;margin:auto;padding-top:2px;"> 

            <hr>
                <form>                
                    <div class=" form-group row">
                        <div class="col-form-label col-md-3 offset-md-2" style="font-size: 18px;font-weight: 900px">
                            <label style="padding-left: 20px;color:#07A0C3" class="h5">
                                From Profile ID :
                            </label>
                        </div>
                        <div class="form-group" style="width: 250px;">                
                            <input type="text" class="form-control" name="fromprofileid" placeholder="Enter From Profile ID" id="fromprofileid" value="" style="border-color:#07A0C3">
                            <span id="profileids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                        </div>
                        <div class="form-group <?php if($expressint=='1') echo 'dn';?>" style="padding-left: 40px;">
                            <label style="padding: 10px;">Reverse Send</label><input type="checkbox" value="revSend" name="revSend" id="revSend" checked style="height: 20px;width: 20px;" >
                        </div>
                        
                        <div class="form-group resendtotuser dn" style="padding-left: 40px;">
                            <label style="padding: 10px;">Resend</label><input type="checkbox" value="resend" name="resend" id="resend"  style="height: 20px;width: 20px;" >
                        </div>
                        
                    </div>                
                    <div class=" form-group row">
                        <div class="col-form-label col-md-3 offset-md-2" style="font-size: 18px;font-weight: 900px">
                            <label style="padding-left: 20px; color: #07A0C3" class="h5" >
                                To Profile ID :
                            </label>
                        </div>
                        <div class="form-group " style="width: 250px;">                
                            <input type="text" class="form-control" name="Toprofileid" placeholder="Enter To Profile ID" style="border-color: #07A0C3" id="Toprofileid" value="">
                            <span id="profileids" class="font-weight-bold" style="vertical-align: middle;color: red;" ></span>
                        </div>
                       
                    </div>  
                    <div class="row justify-content-center">
                    <div class="form-group <?php if($expressint!='1') echo 'dn';?>" style="padding-left: 40px;">
                            <input type="button" class="addinterest btn btn-sm" style="background-color: #07A0C3; color:white" value="Add Interest" name="submit" id="addInterest">
                        </div>
                        <div class="form-group <?php if($expressint=='1') echo 'dn';?>" style="padding-left: 40px;">
                            <input type="button" class="submit" value="Add Profile" name="submit" id="addProfile">
                        </div>

                        <div class="form-group <?php if($expressint=='1') echo 'dn';?>" style="padding-left: 40px;">
                            <a href="#" id="sendProfile" class="btn btn-primary">Send Service</a>
                        </div>  
                        
                        <div class="form-group <?php if($expressint=='1') echo 'dn';?>" style="padding-left: 40px;">
                            <select name="sel_servicetype" class="sel_servicetype form-control">
                            <option value="regular">Send Semi Profile</option>
                            <option value="mms">Send Full Profile</option>
                            
                            </select>
                        </div>
                    </div>                                                                
                </form> 
               <hr>
                <div class="container"> 
                    <div class="card-group"> 
                        <div class="row addprofiletoDiv"> 
                            <!-- <div class="card" style="width: 18rem;"><img src="..." class="card-img-top" alt="..."><div class="card-body"><h5 class="card-title">Card title</h5><p>Some quick example text to build on the card title and make up the bulk of the cards content.</p><a href="#" class="btn btn-primary">Go somewhere</a></div></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div></div>

<script src="<?php echo base_url(); ?>/js/jquery-1.12.4.js"></script>
<script>

$('.addinterest').click(function(){
	
						 $.ajax({
                            
                            url: "<?php echo base_url(); ?>admin/rmsendinterest",
							type: "POST",
                            data: {toProfileArr:$('#Toprofileid').val(),FromProfileId:$('#fromprofileid').val()},
                           // cache: false,
						    dataType: "json",
                            success: function(res){
								//alert(res);
                                if(res=='success')
                                {
                                    alert("Profile Send successfully");
                                    window.location.reload();
                                }
                                 if(res=='profileidwrong')
                                {
                                     alert("Profile Id's wrong. Please check once.");
									 return false;
                                }
								 if(res=='profilesinmatcheddata')
                                {
                                     alert("Profile Id's already in interested list. Please check once.");
                                }
								if(res=='profilesnotshared')
                                {
                                     alert("Profile not shared to customer. Please check once.");
                                }
								
								
                            }
                        });
	return false;
	});
	
  $(document).ready(function() {
        
    toProfileArr = [];
    toIDArr = [];

        $("#addProfile").on("click", function(){

            var ToprofileID = $("#Toprofileid").val();
            if(ToprofileID != "")
            {
                if(!toProfileArr.includes(ToprofileID))
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url(); ?>admin/ws/addProfile",
                        data: 'ToprofileID='+ToprofileID,
                        cache: false,
                        success: function(data){
                            // alert(data);
                            var dt = JSON.parse(data);
                            if(dt.data != null)
                            {
                                if(dt.image == null)
                                {
                                    var image = "<?php echo base_url(); ?>assets/img/img_avatar.png";
                                }
                                else
                                {
                                    if(dt.image.applicationphotopath == "" )
                                    {
                                        var image = "<?php echo base_url(); ?>assets/img/img_avatar.png";
                                    }
                                    else
                                    {
                                        var image = dt.image.applicationphotopath;
                                    }
                                }
                                $(".addprofiletoDiv").append('<div class="card ProfileCard" style="width: 200px;"><img src="'+image+'" class="card-img-top" alt="..." height:150px; ><div class="card-body"><h5 class="card-title">'+dt.data.first_name+' '+dt.data.last_name+'</h5><p>('+dt.data.profile_id+')</p><p><label>DOB : </label> <span>'+dt.data.date+' '+dt.data.month+' '+dt.data.year+'</span></p><p><label>Property Value : </label> <span>'+dt.data.property_value+'</span></p><a class="btn btn-primary removeP" value="'+dt.data.profile_id+'" >Remove Profile</a></div></div>');

                                toProfileArr.push(ToprofileID);
                                // toIDArr.push(dt.id);
                                // console.log(toProfileArr);
                                $("#Toprofileid").val("");
                            }
                            else
                            {
                                alert("Please enter valid profile ID.");
                            }
                        }           
                    });
                }
                else
                {
                    alert("You already access this profile.");
                }
            }
            else
            {
                alert("Please enter To profile Id.");
            }
        });


	
        $(document).on('click', 'a.removeP', function() {
            var val =  $(this).attr("value");
            toProfileArr.pop(val);
            $(this).closest('.ProfileCard').remove();
            // console.log(val);
            console.log(toProfileArr);
        });

        $("#sendProfile").on("click", function(){
			
            if(toProfileArr.length > 0)
            {
                var FromProfileId = $("#fromprofileid").val();
                if(FromProfileId != "")
                {
                    if(!toProfileArr.includes(FromProfileId))
                    {
                        if($("#revSend").is(":checked"))
                        {
                            var IsrevSend = 1;
                        }
                        else
                        {
                            var IsrevSend = 0;   
                        }
						//alert($('.sel_servicetype').val());
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>admin/ws/sendProfileOnMail",
                            data: 'toProfileArr='+toProfileArr+'&FromProfileId='+FromProfileId+'&IsrevSend='+IsrevSend+'&sendprofile='+$('.sel_servicetype').val()+'&resend='+$('input#resend:checked').val(),
                            cache: false,
                            success: function(data){
								if(data==2)
								{
									alert('These profiles already sent to this user. ');
									$('.resendtotuser').removeClass('dn');
									return false;
								}
                                if(data > 0)
                                {
                                    alert("Profile Send successfully");
                                    window.location.reload();
                                }
                                else
                                {
									
                                    alert("Profile Send successfully");
                                    window.location.reload();
                                }
                            }
                        });
                    }
                    else
                    {
                        alert("Please enter Correct From Profile Id its already exist in Profile to send.");
                    }
                }
                else
                {
                    alert("Please enter From Profile Id.");
                }
            }
            else
            {
                alert("Please add profile first.");
            }
        });
  
  });
</script>
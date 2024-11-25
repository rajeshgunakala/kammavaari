<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer_top">
                <ul>
                    <li class="footer_aboutus">
                        <h4>About Us</h4>
                        <ul>
                            <li>
                                <p><span>KammaVaari Matrimony</span> is a pioneer in matrimonial matchmaking services
                                    committed to provide good assisted Service to all prospective Telugu Kamma brides
                                    and Kamma grooms. Your search for the perfect life partner ends here.</p>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h4>Quick Links</h4>
                        <ul class="">
                            <li class=""><a href="<?php echo site_url();?>aboutus">About us</a></li>
                            <!--<li class=""><a href="<?php echo site_url();?>search">Search</a></li>-->
                            <li class=""><a href="<?php echo site_url();?>contactus">Contact Us</a></li>
                            <li class=""><a href="<?php echo site_url();?>faqs">FAQ</a></li>


                            <li class="">
                            <?php $user_id = $this->session->userdata('user_id');   
if(!empty($user_id)){ ?>
                                <button type="button" class="openmodal feedbackbtn"
                                    data-toggle="modal" data-target="#myModal"><span>FeedBack</span></button><?php  }  ?>
                                </li>
                        </ul>
                    </li>

                    <li class="mobile_social_icons">
                        <h4>Stay in Touch!</h4>
                        <ul class="social_icons">
                            <li><a href="https://www.facebook.com/kammavaarudotcom" target="_blank"
                                    class="facebook"><span><i class="icofont-facebook"></i></span> : Facebook</a></li>
                            <li><a href="https://twitter.com/kammavaarigrand" target="_blank" class="twitter"><span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="width: 22px;margin-top: -3px;" class="fab fa-twitter social  twitter"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                            </span> : Twitter(X)</a></li>
                            <li><a href="#" target="_blank" class="youtube"><span><i
                                            class="icofont-youtube-play"></i></span> : Youtube</a></li>
                            <li><a href="https://www.instagram.com/kammavaarimatrimony/" target="_blank"
                                    class="linkedin"><span><i class="icofont-linkedin"></i> </span> : Instagram</a></li>
                        </ul>
                    </li>
                    <li>
                        <h4>Company</h4>
                        <ul class="">
                            <li class=""><a href="<?php echo site_url();?>terms">Terms of use</a></li>
                            <li class=""><a href="<?php echo site_url();?>privacypolicy">Privacy Policy</a></li>
                            <li class=""><a href="<?php echo site_url();?>feedback">Success Stories</a></li>
                            <li class=""><a href="<?php echo site_url();?>contactus">Help</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="footer_bottom">
                <p>Copyright © <?php echo date('Y');?>. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<div class="back_top"><i class="icofont-hand-drag1"></i></div>

<!--Division for Modal-->
<div id="myModal" class="modal fade feedbackmodal" role="dialog">

    <!--Modal-->
    <div class="modal-dialog mt-4 feedbackmodal-dialog">

        <!--Modal Content-->
        <form action="<?php echo site_url()?>/feedback/Feedback/add_fd" method="post">
            <div class="modal-content">

                <!-- Modal Header-->
                <div class="modal-header" style="background-color:#e43659">
                    <h3 class="feedbackmodal-head">Feedback Request</h3>

                    <!--Close/Cross Button-->
                    <button style="border-radius:20px" type="button" class="close feedclbtn" data-dismiss="modal" style="color: blue;">&times;</button>
                </div>

                <!-- Modal Body-->
                <div class="modal-body text-center">
                    <i class="far fa-file-alt fa-4x mb-3 animated rotateIn icon1"></i>
                    
                    <!-- <hr> -->
                    <h6 class="feedbackmodal-subhead">Your Rating</h6>
                </div>

                <div class="d-flex flex-wrap feedbackoptions"> <!-- Radio Buttons for Rating-->
                <div class="form-check">
                    <input name="feedback" id="very_good" type="radio" value="very_good">
                    <label class="" for="very_good">Very good</label>
                </div>
                <div class="form-check">
                    <input name="feedback" id="good" type="radio" value="good">
                    <label class="" for="good">Good</label>
                </div>
                <div class="form-check">
                    <input name="feedback" id="mediocre" type="radio" value="mediocre">
                    <label class="" for="mediocre">Mediocre</label>
                </div>
                <div class="form-check">
                    <input name="feedback" id="bad" type="radio" value="bad">
                    <label class="" for="bad">Bad</label>
                </div>
                <div class="form-check">
                    <input name="feedback" id="verybad" type="radio" value="very_bad">
                    <label class="" for="verybad">Very Bad</label>
                </div>  </div>

               

                <!--Text Message-->
                <div class="text-center">
                    <h4 class="feedbackmodal-subhead">What could we improve?</h4>
                </div>
                <textarea name="message" type="textarea" placeholder="Your Message" rows="3"></textarea>


                <!-- Modal Footer-->
                <div class="modal-footer">
                    <a href="" class="btn">
                        <button type="submit" class="btn btn-danger">Save changes</button>
                    </a>
                    <a href="" class="btn btn-outline-primary" data-dismiss="modal">Cancel</a>
                </div>

            </div>
        </form>

    </div>

</div>

<style>
.modal-dialog {
    height: 50%;
    width: 50%;
    margin: auto;
}
.modal-dialog.modal-lg.popup_main.login_popup1 {
    width: 400px;
    max-width: 94%;
}

.modal-header {
    color: white;
    background-color: #007bff;
}

textarea {
    border: none;
    box-shadow: none !important;
    -webkit-appearance: none;
    outline: 0px !important;
}

.openmodal {
    /* margin-left: 35%;
    width: 25%;
    margin-top: 25%; */
}

.icon1 {
    color: #007bff;

}

a {
    margin: auto;
}

input {
    color: #007bff;
}
</style>

<style>
#mobile-footer {
    display: none;
}

@media screen and (max-width: 500px) {
    #mobile-footer {
        display: block;
    }
}

#content {
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: url("https://s3.amazonaws.com/plloyd/codepen/eidfjord.jpg") no-repeat center center;
    background-size: cover;
}

#mobile-footer {
    position: fixed;
    bottom: 0;
    padding-top: 0px;
    width: 100%;

    @media(max-width: 1000px) {
        display: none;
        visibility: hidden;
    }
}

#mobile-menu {
    background: #f2bc28;
}

#mobile-footer-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    overflow: hidden;
}

.mobile-link {
    padding-top: 0.75em;
    padding-bottom: 0.75em;
}

.mobile-link a {
    font-size: 16px;
    color: #fff;
    text-decoration: none;
}

.is-rotating {
    transform: rotate(135deg);
}

.is-rotating-back {
    transform: rotate(-90deg);
}

.mobile-menu-hide {
    animation: hideFooter 10s forwards;
}

.mobile-menu-show {
    animation: showFooter 1s forwards;
}

@keyframes hideFooter {
    0% {
        transform: translateY(0);
        opacity: 1;
    }

    100% {
        transform: translateY(1000px);
        opacity: 0;
    }
}

@keyframes showFooter {
    0% {
        transform: translateY(300px);
        opacity: 0;
    }

    100% {
        transform: translateY(0);
        opacity: 1;
    }
}
</style>

<!-- Sticky Footer -->
<footer id="mobile-footer" style="display:none;">
    <div id="mobile-menu">
        <div id="mobile-footer-container">
            <div class="mobile-link">
                <a href="<?= base_url('dashboard/index') ?>" class="text-center"><b>Home</b></a>
            </div>
            <div class="mobile-link">
                <a href="<?= base_url('dashboard/my_account') ?>" class="text-center"><b>My Account</b></a>
            </div>
            <div class="mobile-link">
                <a href="<?= base_url('dashboard/search_partner') ?>" class="text-center"><b>Search</b></a>
            </div>
        </div>
    </div>
</footer>
<!-- Sticky Footer -->



<!-- Upgrade Membership Popup Start Here -->
<div class="modal fade" id="upgradeModal" tabindex="-1" aria-labelledby="upgradeModalLabel" aria-hidden="true">
    <div class="modal-dialog popup_main">
        <div class="modal-content popup_main_in">
            <div class="modal-header popup_header">
                <h2 class="modal-title" id="upgradeModalLabel">Upgrade Your Membership Offers Available</h2>

                <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">

                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <p style="allin:justify;margin:20px"> Largest Telugu Kammavaari Matrimonial Boys & Girls Profiles
                    We Kammavaari, The Best Chowdary Marriage Bureau Offers The Different Membership Plans Of Which You
                    Can Register According To Your Need. Kammavaari Matrimony Membership Plans Include Silver, Diamond,
                    Premium Service, VIP & Fast Track. Thus You Can Register To Any Of The Telugu Chowdary Matrimony
                    Packages And Get Benefitted With The Desired And Specific Features. Each Package Include A Specified
                    Time Period And The Number Of Profiles, So based On Your Budget You Can Plan Accordingly
                </p>
                <div class="col-md-3 services_card">
                    <div class="row">
                        <div class="services_card_top">
                            <h2>Diamond Membership</h2>
                        </div>
                        <div class="services_card_content pb-3 pl-3 pr-3">
                            <p>₹4,999 <span>/ 60 Days</span></p>
                            <ul>
                                <li>Express interest & View Upto 30 contacts</li>
                                <li>Client Should Contact Relation Ship Manager </li>
                                <li>Call Support For Any Clarifications</li>
                                <li>60 days of validity</li>
                            </ul>
                            <button class="btn btn-teal min-140 gradient_bg" type="submit">Contact: +91-
                                9177036777</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 services_card">
                    <div class="row">
                        <div class="services_card_top">
                            <h2>PREMIUM SERVICE </h2>
                        </div>
                        <div class="services_card_content pb-3 pl-3 pr-3">
                            <p>₹9,999 <span>/ 120 Days</span></p>
                            <ul>
                                <li>Assisted by separate RM</li>
                                <li>Express interest & View Upto 45 contacts</li>
                                <li>Call Support For Any Clarifications</li>
                                <li>Feed Back Will Be Updated For With In 10 Days</li>
                                <li>120 days of validity</li>
                            </ul>
                            <button class="btn gradient_bg btn-teal min-140" type="submit">Contact: +91-
                                9177036777</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 services_card">
                    <div class="row">
                        <div class="services_card_top">
                            <h2>VIP & FAST TRACK</h2>
                        </div>
                        <div class="services_card_content pb-3 pl-3 pr-3">
                            <p>₹19,999 <span>/ 240 Days</span></p>
                            <ul>
                                <li>Express interest & View Upto 60 contacts</li>
                                <li>Our Senior General Manager Will Take Responsibility In Dealing With Both Sides </li>
                                <li>Call Support For Any Clarifications</li>
                                <li>Feedback Will Be Updated With In Week</li>
                            </ul>
                            <button class="btn btn-teal min-140 gradient_bg" type="submit">Contact: +91-
                                9177036777</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 services_card">
                    <div class="row">
                        <div class="services_card_top">
                            <h2>ELITE Membership</h2>
                        </div>
                        <div class="services_card_content pb-3 pl-3 pr-3">
                            <p>₹49,999 <span>/ 1 Year</span></p>
                            <ul>
                                <li>Express interest & View Upto "90 contacts"</li>
                                <li>Our Senior General Manager will take responsibility in dealing with both sides </li>
                                <li>Call Support For Any Clarifications</li>
                                <li>Feedback Will Be Updated Twice a Week</li>
                            </ul>
                            <button class="btn btn-teal min-140 gradient_bg" type="submit">Contact: +91-
                                9177036777</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Upgrade Membership Popup Ends Here -->
</div>


<div class="modal fade" id="viewprofilemodelpopup" tabindex="-1" role="dialog" aria-labelledby="viewprofilemodelpopup"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p style="color:red;">YOU HAVE REACHED THE MAXIMUM NUMBER OF LIMIT, TO GET MORE LIMIT PLEASE CONTACT RM.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="showinterestmodelpopup" tabindex="-1" role="dialog" aria-labelledby="showinterestmodelpopup"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p style="color:red;">YOU HAVE REACHED THE MAXIMUM NUMBER OF LIMIT, TO GET MORE LIMIT PLEASE CONTACT RM.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade showexpmodelpopup" id="showexpmodelpopup" tabindex="-1" role="dialog"
    aria-labelledby="showexpmodelpopup" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <p style="color:red;">YOUR PROFILE HAS BEEN EXPIRE/OUTDATED, PLEASE CONTACT RM FOR RENEW IT OR MORE
                    QUERY.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
<script defer src="<?php echo base_url() ?>assets/kammavaari/js/bootstrap.bundle.min.js"></script>
<script defer src="<?php echo base_url() ?>assets/kammavaari/js/app.js?ver=0.1"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/kammavaari/css/bootstrap-select.min.css">
<!-- Latest compiled and minified JavaScript -->
<script defer src="<?php echo base_url() ?>assets/kammavaari/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url() ?>assets/kammavaari/js/lightgallery-all.min.js"></script>
<script src="<?php echo base_url() ?>assets/kammavaari/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url() ?>assets/kammavaari/js/slick.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/kammavaari/css/jquery-confirm.min.css">
<script src="<?php echo base_url() ?>assets/kammavaari/js/jquery-confirm.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.homepagesearch').click(function() {
        $('#homepagesearch').submit();
    });
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    });
    // Back to top functionality 
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.back_top').fadeIn();
        } else {
            $('.back_top').fadeOut();
        }
    });
    $('.back_top').click(function() {
        $('body, html').animate({
            scrollTop: 0
        }, 500, "easeInOutQuart");
        return false;
    });
    // Back to top functionality Ends
    $('.selectpicker').selectpicker();

    $('.responsive').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    function profileview() {
        var ticket = "<?php echo $this->uri->segment(4) ?>";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/search/profileviewed",
            type: "POST",
            data: {
                ticket: ticket
            },
            success: function(res) {
                if (res) {
                    //  $("#profileviewed").hide();

                }
            },
      }); 
			 }
             
			 <?php if($profileviewpage=='1'){?>
			  profileview();
			 
			 <?php } ?>
			function upgradeaccount(name=null,number=null)
			{
				
				alert('For upgrading your account, please consult: ' + name + ' - ' + number);
				     window.location.href = 'dashboard/plan';


			}
			
			
			
			$('.searchmenu').click(function(){
			
			if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
				  return true;
			});
			
		$('.viewprofile').click(function(){
			
			if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
				
					 upgradeaccount();
					  return false;
				 }
				  return true;
			});
				
		$('.partnersearchbtn').click(function(){
			
			if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
				 
				 return true;
			
			});
            
             $(".view_update").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                   
                    $(this).next().find('i').removeClass("view_active");
                    $(this).next().next().find('i').removeClass("view_active");
                 
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           console.log(data);
                        if(data==0){
                              
                              $(this).find("i").addClass("view_active");
                              alert("You have viewed this profile");
                              
                          }
                          
                           $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          
                        }
                        });
                 
             });
             
             
              $(".details").on('click',function(){
                 
                 var to_user_id=$(this).attr("data-id");
                   
                    
                        $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>dashboard/my_account/view_profile_update",
                        data: {'to_user_id':to_user_id},
                        context:this,
                        success:
                        function(data){
                           
                          if(data==0){
                          $("#ignored").load(location.href + " #ignored");
                          $("#short_listed").load(location.href + " #short_listed");
                          $("#recent_views").load(location.href + " #recent_views");
                          }
                          
                        }
                        });
                 
             });
             
             
			
              $("#profileviewed").on("click", function(){
		
		if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
				 {
					 upgradeaccount();
					  return false;
				 }
     profileview();
	  alert("Response saved successfully.");
    });

    $('.viewprofile').click(function() {

        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {

            upgradeaccount();
            return false;
        }
        return true;
    });

    $('.partnersearchbtn').click(function() {

        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }

        return true;

    });

    $(".view_update").on('click', function() {

        var to_user_id = $(this).attr("data-id");

        $(this).next().find('i').removeClass("view_active");
        $(this).next().next().find('i').removeClass("view_active");

        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/view_update",
            data: {
                'to_user_id': to_user_id
            },
            context: this,
            success: function(data) {
                console.log(data);
                if (data == 0) {

                    $(this).find("i").addClass("view_active");
                    alert("You have viewed this profile");

                }

                $("#ignored").load(location.href + " #ignored");
                $("#short_listed").load(location.href + " #short_listed");
                $("#recent_views").load(location.href + " #recent_views");

            }
        });

    });


    $(".details").on('click', function() {

        var to_user_id = $(this).attr("data-id");


        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/my_account/view_profile_update",
            data: {
                'to_user_id': to_user_id
            },
            context: this,
            success: function(data) {

                if (data == 0) {
                    $("#ignored").load(location.href + " #ignored");
                    $("#short_listed").load(location.href + " #short_listed");
                    $("#recent_views").load(location.href + " #recent_views");
                }

            }
        });

    });



    $("#profileviewed").on("click", function() {

        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        profileview();
        alert("Response saved successfully.");
    });

    $("#bookmark").on("click", function() {

        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var ticket = "<?php echo $this->uri->segment(4) ?>";
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>dashboard/search/bookmark",
            type: "POST",
            data: {
                ticket: ticket
            },
            success: function(res) {
                if (res) {
                    $("#bookmark").hide();
                    alert("Response saved successfully.");
                }
            },
        });
    });

    $(".interested").on("click", function() {
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var ticket = "<?php echo $this->uri->segment(4) ?>";
        var name = $(this).attr('data-name');
        var to_user_id = $(this).attr("data-id");
        var message =
            "Profile interest sent successfully. Once the user expresses interest on your profile, you can see the complete information."
        var title = "Show Interest";
        var content = "Are you sure want to show interest on " + name;
        var url = "<?php echo base_url(); ?>dashboard/search/setInterestedStatus";
        var exist_content = "Already expressed interest on this profile.";
        var add_class = "#profile_" + to_user_id;
        trigger_share_actions(to_user_id, title, exist_content, content, url, add_class, message,
            ticket);
    });

    $(".notinterested").on("click", function() {
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var ticket = "<?php echo $this->uri->segment(4) ?>";
        var name = $(this).attr('data-name');
        var to_user_id = $(this).attr("data-id");
        var title = "Decline"
        var content = "Are you sure want to decline " + name;
        var url = "<?php echo site_url(); ?>dashboard/search/setNotInterestedStatus";
        var exist_content = "Already declined this profile.";
        var add_class = "#ign_profile_" + to_user_id;
        var message = "Your decline sent successfully.";

        trigger_share_actions(to_user_id, title, exist_content, content, url, add_class, message,
            ticket);


    });

    function trigger_share_actions(to_user_id, title, exist_content, content, call_url, add_class, message,
        ticket) {
        //check already expressed interest
        if ($(add_class).hasClass('done')) {
            $.confirm({
                title: false,
                content: exist_content,
                autoClose: 'Yes|5000',
                escapeKey: true,
                buttons: {
                    Yes: {
                        text: 'Ok',
                        btnClass: 'btn-orange',
                        action: function() {}
                    }
                }
            });
            return;
        }
        //Show interest on profile
        $.confirm({
            title: title,
            content: content,
            type: 'blue',
            typeAnimated: false,
            buttons: {
                Yes: {
                    text: 'Yes',
                    btnClass: 'btn-orange',
                    action: function() {
                        $.ajax({
                            type: "POST",
                            url: call_url,
                            data: {
                                'ticket': ticket
                            },
                            success: function(data) {
                                $.confirm({
                                    title: false,
                                    content: message,
                                    autoClose: 'Yes|5000',
                                    escapeKey: true,
                                    buttons: {
                                        Yes: {
                                            text: 'Ok',
                                            btnClass: 'btn-orange',
                                            action: function() {
                                                $(add_class).addClass(
                                                    'done');
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    }
                },
                No: function() {}
            }
        });
    }

    $(".rm_details").on('click', function() {
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var rm_data = $(this).attr('data-name');
        rm_deatils = rm_data.split("#");
        var rm_name = rm_deatils[0];
        var rm_phone = rm_deatils[1];
        var rm_email = rm_deatils[2];
        var site_url = '<?php echo site_url() ?>';
        var rm_popup = '<div class="col-md-12 rm_details text-center">' +
            '<img src="' + site_url + 'assets/kammavaari/images/call-img.png">' +
            '<p>' +
            'Contact RM for more details<br>' +
            '<span><strong>' + rm_name + '</strong></span><br>' +
            '<span>' + rm_email + '</span><br>' +
            '<span>+91 - ' + rm_phone + '</span>' +
            '</p>' +
            '</div>';
        $.confirm({
            title: false,
            content: rm_popup,
            //autoClose: 'Yes|5000',
            escapeKey: true,
            type: 'blue',
            typeAnimated: false,
            buttons: {
                Yes: {
                    text: 'Ok',
                    btnClass: 'btn-orange',
                    action: function() {}
                }
            }
        });
    });

    $(".shortlist_update").on('click', function() {
       
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var name = $(this).attr('data-name');
        var to_user_id = $(this).attr("data-id");
        var title = "Shortlist"
        var content = "Are you sure want to shortlist " + name;
        var url = "<?php echo site_url(); ?>dashboard/my_account/shortlist_update";
        var exist_content = "Already short listed this profile.";
        var add_class = "#shortlist_profile_" + to_user_id;
        var message = "Your shortlist sent successfully.";
        trigger_popup(to_user_id, title, exist_content, content, url, add_class, message);

    });

    $(".ignore_update").on('click', function() {
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var name = $(this).attr('data-name');
        var to_user_id = $(this).attr("data-id");
        var title = "Ignore"
        var content = "Are you sure want to ignore " + name;
        var url = "<?php echo site_url(); ?>dashboard/my_account/ignore_update";
        var exist_content = "Already ignored this profile.";
        var add_class = "#ign_profile_" + to_user_id;
        var message = "Your ignore sent successfully.";
        trigger_popup(to_user_id, title, exist_content, content, url, add_class, message);
    });

    $(".notinterest_now").on('click', function() {
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var name = $(this).attr('data-name');
        var to_user_id = $(this).attr("data-id");
        var title = "Not Interest"
        var content = "Are you sure want to show not interest on " + name;
        var url = "<?php echo site_url(); ?>dashboard/my_account/notinerest_update";
        var exist_content = "Already shown not interest on this profile.";
        var add_class = "#noint_profile_" + to_user_id;
        var message = "Not interest sent successfully.";
        trigger_popup(to_user_id, title, exist_content, content, url, add_class, message);
    });

    $(".contact_now").on('click', function() {
        if ('<?php echo $this->session->userdata('payment_level');?>' == 'Free') {
            upgradeaccount();
            return false;
        }
        var name = $(this).attr('data-name');
        var to_user_id = $(this).attr("data-id");
        var message =
            "Profile interest sent successfully. Once the user expresses interest on your profile, you can see the complete information."
        var title = "Show Interest";
        var content = "Are you sure want to show interest on " + name;
        var url = "<?php echo site_url(); ?>dashboard/my_account/contact_update";
        var exist_content = "Already expressed interest on this profile.";
        var add_class = "#profile_" + to_user_id;
        trigger_popup(to_user_id, title, exist_content, content, url, add_class, message);
    });

    function trigger_popup(to_user_id, title, exist_content, content, call_url, add_class, message) {
        //check already expressed interest
        if ($(add_class).hasClass('done')) {
            $.confirm({
                title: false,
                content: exist_content,
                autoClose: 'Yes|5000',
                escapeKey: true,
                buttons: {
                    Yes: {
                        text: 'Ok',
                        btnClass: 'btn-orange',
                        action: function() {}
                    }
                }
            });
            return;
        }
        //Show interest on profile
        $.confirm({
            title: title,
            content: content,
            type: 'blue',
            typeAnimated: false,
            buttons: {
                Yes: {
                    text: 'Yes',
                    btnClass: 'btn-orange',
                    action: function() {
                        $.ajax({
                            type: "POST",
                            url: call_url,
                            data: {
                                'to_user_id': to_user_id
                            },
                            success: function(data) {
                                $.confirm({
                                    title: false,
                                    content: message,
                                    autoClose: 'Yes|5000',
                                    escapeKey: true,
                                    buttons: {
                                        Yes: {
                                            text: 'Ok',
                                            btnClass: 'btn-orange',
                                            action: function() {
                                                $(add_class).addClass(
                                                    'done');
                                            }
                                        }
                                    }
                                });
                            }
                        });
                    }
                },
                No: function() {}
            }
        });
    }

    $(".update_contact_now").on('click', function() {
        upgradeaccount();
    });

    $('.dropdown-menu li a').click(function(e) {
        e.stopPropagation()
    });

    $('.all-images img, a.viewall').on('click', function() {
        $('.sliderPop').show();
        $('.ct-sliderPop-container').addClass('open');
        $('.sliderPop').addClass('flexslider');
        $('.sliderPop .ct-sliderPop-container').addClass('slides');

        $('.sliderPop').flexslider({
            selector: '.ct-sliderPop-container > .ct-sliderPop',
            slideshow: false,
            controlNav: false,
            controlsContainer: '.ct-sliderPop-container'
        });
    });

    $('.ct-sliderPop-close').on('click', function() {
        $('.sliderPop').hide();
        $('.ct-sliderPop-container').removeClass('open');
        $('.sliderPop').removeClass('flexslider');
        $('.sliderPop .ct-sliderPop-container').removeClass('slides');
    });


    var width = $(window).width();
    if (width < 1000) {
        $(".header_login .btn-login").removeClass('show');
    }

    $('.delete_image').on('click', function() {
        var rec_id = $(this).attr("data-id");
        var confirm_status = confirm("Are you sure?");
        if (confirm_status) {
            $.ajax({
                type: "POST",
                url: "<?php echo site_url(); ?>dashboard/delete_image",
                data: {
                    'rec_id': rec_id
                },
                dataType: "text",
                success: function(data) {
                    alert("Photo deleted successfully");
                    window.location.reload();
                }
            });
        }
    });



    $('.set_profile').on('click', function() {
        var rec_id = $(this).attr("data-id");
        $.ajax({
            type: "POST",
            url: "<?php echo site_url(); ?>dashboard/set_profile_pic",
            data: {
                'rec_id': rec_id
            },
            success: function(data) {
                alert("Profile Pic Updated Successfully");
                window.location.reload();
            }
        });
    });

    $("#resetpass").on('click', function() {
        var email = $('#email').val();
        if (email != "") {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('login/email'); ?>",
                data: "email=" + email,
                cache: false,
                success: function(data) {
                    if (data == 1) {
                        alert(
                            "Your login information has been sent on your email account."
                        );
                        // $("#resetpass").on("click", function(){
                        window.location.href = "<?php echo base_url('login'); ?>";
                        // });
                    } else {
                        alert("This email does not exist.");
                    }
                }
            });
        } else {
            alert('Please enter mail id.');
        }
    }); 
	$(".view_profile").on('click',function(){
	
	    var id='<?php echo $this->session->userdata('id_value'); ?>'; 
        var user_id=$(this).attr('data-id');
		
        if('<?php echo $this->session->userdata('payment_level');?>'=='Free')
        {
			$.ajax({
    url: "<?php echo base_url(); ?>/dashboard/get_rmname",
    method: "POST",
    data: {
        id: id 
    },
    success: function (response) {
      console.log(response);
        var responseObject = JSON.parse(response);
        upgradeaccount(responseObject.USERNAME,responseObject.phone_no);
       
        console.log(responseObject.USERNAME);
        console.log(responseObject.phone_no);
    },
    error: function (xhr, status, error) {
       
    }
});
        }
        else
        {
             $.ajax(
             {
                 url:"<?php echo base_url(); ?>/dashboard/checkexpdatevscurdate",
                 method:"POST",
                 success:function(data)
                 {
                    if(data=='exp')
                    {
                     
                        $('.showexpmodelpopup').modal('show');
                    } else {
                        
                        var url = "<?php echo site_url();?>dashboard/search/profile/" + user_id;
                        window.open(url, '_blank');
                    }
                }
            });

            /*var id=$(this).attr('data-id');
		    var url = "<?php echo site_url();?>dashboard/search/profile/"+id;
		    window.open(url,'_blank');*/
        }
        //var name = $(this).attr('data-name');
        //var to_user_id = $(this).attr("data-id");
        //var title = "Ignore"
        //var content = "Are you sure want to ignore "+name;
        // var id=$(this).attr('data-id');
        //alert(id);
        // var url = "<?php echo site_url();?>dashboard/search/profile/"+id;
        //window.open(url,'_blank');
        // location.href=url;  
    });
});

$(document).ready(function() {
    <?php 
    if ($this->session->userdata['active_user_session']['login_id']) {?>

    function update_user_activity() {
        var active_time = 'update_time';
        $.ajax({
            url: "<?php echo base_url(); ?>/dashboard/update_login_time",
            method: "POST",
            data: {
                active_time: active_time
            },
            success: function(data) {
                //alert(data);
            }
        });
    }
    setInterval(function() {
        update_user_activity()
    }, 300000);
    <?php
               }?>
});
</script>
<style>
    .btn-grad-orange {
    color: #ffffff;
    background-image: linear-gradient(#ff6d1c, #ff6d1c) !important;
    transition: all 0.8s ease-in-out;
}
    .btn-grad-orange:hover {
    color: #ffffff;
    background-image: linear-gradient(#ff6d1c, #ed1c24) !important;
    transition: all 0.8s ease-in-out;
}
.social_icons li a.twitter span {
    border-color: #000;
    color: #000;
    transition: all ease-in-out 0.4s;
}
.social_icons li a.twitter:hover span {
    border-color: #000;
    color: #ffffff;
    background: #000;
    transition: all ease-in-out 0.4s;
}
.social_icons li a.twitter:hover {
    color: #000;
}
.social_icons li a.twitter:hover span svg {
    fill: #fff;
}
    /* feedback modal css start */ 
    h3.feedbackmodal-head {
        font-size: 17px;
    margin: 0;
    display: block;
    width: 100%;
    text-align: center;
}
.feedbackoptions {
    justify-content: center;
    /* gap: 15px; */
}
.feedbackmodal textarea {
    max-width: 87%;
    margin: auto;
    text-align: left;
    border: 1px solid #ddd;
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
}
h4.feedbackmodal-subhead {
    font-size: 18px;
    margin: 0;
    text-align: center;
    display: block;
    width: 100%;
}
.feedbackmodal-dialog {
    max-width: 440px;
    width: 90%;
    top: 10%;
}
.feedbackmodal-dialog .modal-header {
    padding: 7px;
}

.feedbackmodal-dialog .form-check {
    margin: 0 8px 10px;
}

.feedbackmodal-dialog .form-check label {
    margin: 0;
    font-weight: 600;
}
.feedbackmodal-dialog .modal-body.text-center {
    padding: 10px;
}

.feedbackmodal-dialog .modal-footer {
    padding: 0px 10px;
    justify-content: center;
}
button.close.feedclbtn {
    width: 30px;
    height: 30px;
    line-height: 19px;
    text-align: center;
    padding: 0px;
    font-size: 25px;
    border: 1px solid #e43659;
    background: #ffffff;
    color: #000000;
    position: relative;
    top: -3px;
    right: -3px;
    border-radius: 50%;
}
h6.feedbackmodal-subhead {
    font-size: 18px;
    margin-bottom: 0;
    padding: 0px !important;
}
button.feedbackbtn {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
  background: #009688;
    font-family: "Montserrat", sans-serif;
    box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
    overflow: hidden;
    cursor: pointer;
    border: none;
    margin-top: 10px;
}

button.feedbackbtn:after {
  content: " ";
  width: 0%;
  height: 100%;
  background: #ffd401;
  position: absolute;
  transition: all 0.4s ease-in-out;
  right: 0;
}

button.feedbackbtn:hover::after {
  right: auto;
  left: 0;
  width: 100%;
}

button.feedbackbtn span {
    text-align: center;
    text-decoration: none;
    width: 100%;
    padding: 6px 10px;
    color: #fff;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 0.3em;
    z-index: 20;
    transition: all 0.3s ease-in-out;
}

button.feedbackbtn:hover span {
  color: #183153;
  animation: scaleUp 0.3s ease-in-out;
}

@keyframes scaleUp {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(0.95);
  }

  100% {
    transform: scale(1);
  }
}

/* feedback modal css ends */ 
/* pagination start */
.cd-pagination li.current {
background-color: #e43659;
}
.cd-pagination li.current a {
    color: #fff;
    border-radius: 0;
	border-color: #e43659;
}
/* pagination ends */
/* msn responsive start */
@media(max-width:991px){
    #chat-window{
        max-width: 90%;
        margin: 20px auto;
        height: 65dvh;
    }
    div#chat-heading h4 {
        font-size: 20px;
    }
    div#message-input-container #message-input{
        padding-left: 15px;
    }
    .viewed-profile-item {
		flex-direction: column;
		align-items: center;
	}
	.viewed-profile-item-rgt {
		padding-left: 0;
		text-align: center;
		margin-top: 5px;
	}
	.viewed-profile-item-lft{
		max-width: 150px;
	}
	.viewed-profile-item-rgt p {
		font-size: 15px;
		line-height: 24px;
	}
}
@media(max-width:767px){
    li.mobile_social_icons {
        margin-left: 0 !important;
        margin-right: auto;
    }
    .social_icons li {
        width: 60px !important;
    }
    .mobile_social_icons {
        width: 100% !important;
        margin: 0 auto !important;
    }
    .viewed-profile-item-lft img {
        width: auto;
        height: 170px;
    }
    

}
@media(max-width:640px){
.viewed-profile-item-lft{
			max-width: 200px;
		}
        .tab-nav .nav-pills .nav-item {
            margin: 0 15px 5px 0;
        }
		}
</style>
</body>

</html>
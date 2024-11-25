<div class="home-banner-main">
    <div class="home-banner-over">
        <div class="home-banner-over-container">
            <div class="home-banner-over-content">
                <!-- <h2 class="mb-4">Different people. Different tastes. The best Platform for perfect matches.</h2> -->
                <h2 class="mb-3 kammahead" >Where Individuality meets Compatability</h2>
                <h5 class="mb-3 kammahead1">The best platform for perfect matches</h5>

                <div class="form-banner home-kvm-coming-container" style="background : #e43659eb;">
                    <form class="row row-10" action="<?php echo site_url(); ?>home/search" id="homepagesearch"
                        method="POST">
                        <div class="col-12 col-sm-6 col-md-3 mb-2 form-group">
                            <label class="form-label">I'm looking for a</label>
                            <select class="form-control grey-bg" name="gender" id="exampleInputEmail1">
                                <option value="female" selected="">Bride</option>
                                <option value="male">Bride Groom</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="col-12">
                                <label class="form-label">Aged</label>
                            </div>
                            <div class="col-12">
                                <div class="row row-10">
                                    <div class="col flex-1 form-group">
                                        <select name="agefrom" id="agefrom" tabindex="-1" class="form-control grey-bg">
                                            <option value="">Age</option>
                                            <?php for ($i = 18; $i <= 50; $i++) { ?>
                                                <option <?php if ($i == 18) { ?> selected="selected" <?php } ?>
                                                    value="<?php echo $i; ?>" label="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                    <div class="col text-center px-0"><label class="form-label pt-3 text-center">to</label>
                                    </div>
                                    <div class="col flex-1 form-group">
                                        <select name="ageto" id="ageto" tabindex="-1" class="form-control grey-bg">
                                            <option value="">Age</option>
                                            <?php for ($i = 18; $i <= 50; $i++) { ?>
                                                <option <?php if ($i == 30) { ?> selected="selected" <?php } ?>
                                                    value="<?php echo $i; ?>" label="<?php echo $i; ?>"><?php echo $i; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3 form-group">
                            <label class="form-label">Of Religion</label>
                            <select class="form-control grey-bg" name="religion">
                                <option value="" label="Select Religion" selected="selected">Select Religion</option>
                                <?php foreach ($religions as $value) { ?>
                                    <option value="<?php echo $value['religion']; ?>"
                                        <?php if ($value['religion'] == "Hindu") {
                                            echo "selected";
                                        } ?>>
                                        <?php echo $value['religion']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3 form-group mb-4">
                            <label class="form-label">And Mother Tongue
                            </label>
                            <select class="form-control grey-bg" id="date_to" name="mother_tounge">
                                <option value="" label="Select Mother Tongue" selected="selected">Select Mother Tongue
                                </option>
                                <?php foreach ($mother_tounges as $value) { ?>
                                    <option value="<?php echo $value['mothertounge']; ?>"
                                        <?php if ($value['mothertounge'] == "Telugu") {
                                            echo "selected";
                                        } ?>>
                                        <?php echo $value['mothertounge']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 text-center">
                            <a href="javascript:void(0);" class="btn yellow-black max-206 mr-8 homepagesearch">LET'S
                                BEGIN</a>

                        </div>
                    </form>
                </div>

            </div>
            <!-- <div class="home-banner-img-rgt">
                <img src="images/banner-trans-img.png" class="home-banner-right" alt="img">
            </div> -->
        </div>
    </div>
</div>
<div class="using-kvm ">
    <div class="using-kvm-container">
        <h2 class="splheading" style="color: black; font-weight: 700;">Find your Special Someone</h2>
        <div class="row using-kvm-row text-center">
            <div class="col-12 col-sm-12 col-md-4 using-kvm-col " style="padding-left: 30px; padding-right: 30px; border-right: 1px solid #e5e3e3; ">
                <div class="">
                    <div class="using-kvm-col-icon">
                        <img src="images/signup-image.png" alt="img" width="95" height="94">
                    </div>
                    <h3 class="splhead">Sign Up</h3>
                    <p class="spltext">Register for free and create your profile</p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 using-kvm-col" style="padding-left: 30px; padding-right: 30px; border-right: 1px solid #e5e3e3;">
                <div class="">
                    <div class="using-kvm-col-icon">
                        <img src="images/contact-image.png" alt="img" width="89" height="94">
                    </div>
                    <h3 class="splhead">Connect</h3>
                    <p class="spltext">Select and connect with the matches you like
                    </p>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 using-kvm-col" style="padding-left: 30px; padding-right: 30px; ">
                <div class="">
                    <div class="using-kvm-col-icon">
                        <img src="images/interact-image.png" alt="img" width="96" height="78">
                    </div>
                    <h3 class="splhead">Interact</h3>
                    <p class="spltext">Become a premium member and start a conversation </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="our-brands" style="background: #F9F9F9;">
    <div id="content-container" style="width: 100%; /*max-width: 1200px;*/  max-width: 96%; padding-left: 13px; margin: 0 auto; ">
        <h2 class="whyheading">Why choose Kammavaari?</h2>
        <div class="row ">
            <div class="col-12 col-sm-12 col-md-12 using-kvm-col " style="padding-left: 30px; padding-right: 30px; ">
                <div class="why-choose-k">
                    <ul style="list-style : none; margin-bottom: 0px; line-height: 4">
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;">
                            <img src="images/handshake-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Dedicated to serving the Kamma community</p>
                        </li>
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;"><img src="images/usercard-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Suitable Profile Grading</p>
                        </li>
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;"><img src="images/teamwork-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Committed and professional team</p>
                        </li>
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;"><img src="images/dignity-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Personalized Experience</p>
                        </li>
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;"><img src="images/customer-service-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Assisted Services</p>
                        </li>
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;"><img src="images/quality-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Trustworthy and confidential</p>
                        </li>
                        <li class="d-flex" style="align-items: center; margin-bottom: 15px;"><img src="images/growth-image.png" alt="img" width="40" height="40">
                            <p style="margin-left: 12px; margin-bottom: 0px;">Fast growth success rate</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6  text-center">
                <div id="slider-container">
                    <?php foreach ($videos as $video) { ?>
                        <video class="slider-video" controls>
                            <source src="<?php echo site_url(); ?>images/successstories/<?php echo $video['video'] ?>"
                                type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    <?php    } ?>
                </div>
                <div class="text-center" style="width : 75%; margin-top: 20px;">
                    <!-- <button class="btn max-206 mr-8" style=" background: #BD1700; color: white; border-radius: 20px; font-family: Poppins; font-size: 30px; font-weight: 700; line-height: 32px; letter-spacing: 0px; /* text-align: left; */ min-width: 60%; padding: 20px; ">REGISTER NOW</button> -->
                </div>

            </div>

        </div>

    </div>
</div>
<!-- 
<div class="our-brands" >
    <div class="width: 100%; /*max-width: 1200px;*/  max-width: 96%; padding-left: 13px; margin: 0 auto;">
        <h2 style="font-family: Poppins; font-size: 48px; font-weight: 700; line-height: 52px; letter-spacing: 0px; color: 383F51 !important; text-align: center; margin-bottom: 50px;">OUR SUCCESS STORIES</h2>
        <div class="row our-brands-row">
            <?php $i = 0;
            foreach ($success_stories as $value) {
            ?>
            <div class="col-sm-6 col-md-3 text-center p-2">
                <div class="success_stories">
                    <img src="<?php echo site_url(); ?>images/successstories/<?php echo $value['image']; ?>" alt="img"
                        style=" width:100%; height: 225 px; object-fit:cover ">
                    <h2 class="mt-2"> <?php echo $value['title']; ?></h2>
                    <p class="pt-2 pl-2 pr-2"><?php echo $value['content']; ?></p>
                </div>
            </div>
            <?php $i++;
                // if($i == 4)
                // 	{
                // 		b
                // 	}
            } ?>
        </div>

        </div>


   



</div> -->

<section>
    <div id="cCarousel1">
        <div class="arrow" id="prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="arrow" id="next"><i class="fa-solid fa-chevron-right"></i></div>

        <div id="carousel-vp1">
            <div id="cCarousel-inner1">
                <?php
                $i = 1; // Initialize counter
                foreach ($success_stories as $value) {
                ?>
                    <article class="cCarousel-item1">
                        <img src="<?php echo site_url(); ?>images/successstories/<?php echo $value['image']; ?>" alt="img"
                            style=" width:100%; height: 225 px; object-fit:cover ">
                        <div class="infos">
                            <h2 class="mt-2" style="font-size: 20px; margin-bottom: 0px"> <?php echo $value['title']; ?></h2>
                            <p style="margin-bottom: 0px; padding-left: 2px; padding-right: 2px; line-height: 20px;"><?php echo $value['content']; ?></p>
                        </div>

                    </article>

                <?php
                    $i++; // Increment counter
                } ?>
            </div>
        </div>
    </div>
</section>
<div class="using-kvm trusted_section" style="background-color: white;">
    <div class="using-kvm-container yellow-bg-container">
        <h2>THE MOST TRUSTED MATRIMONY <br>BRAND FOR KAMMA COMMUNITY</h2>
        <div class="row using-kvm-row">
            <div class="col-12 col-sm-12 col-md-4 using-kvm-col">
                <div class="using-kvm-col-in bg-color">
                    <div class="using-kvm-col-icon">
                        <img src="images/couple.svg" alt="img" width="95" height="94">
                    </div>
                    <h3 class="text-white">Best Matches</h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 using-kvm-col">
                <div class="using-kvm-col-in bg-color">
                    <div class="using-kvm-col-icon">
                        <img src="images/verified.svg" alt="img" width="89" height="94">
                    </div>
                    <h3 class="text-white">Verified Profiles</h3>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4 using-kvm-col">
                <div class="using-kvm-col-in bg-color">
                    <div class="using-kvm-col-icon">
                        <img src="images/security.svg" alt="img" width="96" height="78">
                    </div>
                    <h3 class="text-white">100% Privacy</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="home" class="hero-section">
    <div class="container">
        <div class="hero-inner text-center">
            <div class="hero-content">
                <h1>Introducing Kammavaari <br> Mobile App</h1>
                <p>Available on the kammavaari.com App</p>
                <div class="hero-btn">
                    <a href="#" class="download-btn"><img src="assets/images/appstore.png" alt="btn"></a>
                    <!--<a href="https://play.google.com/store/apps/details?id=com.kammavaari.matrimony"-->
                    <!--    class="download-btn"><img src="assets/images/playstore.png" alt="btn"></a>-->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section -->

<section id="features" class="feature-section bd-bottom padding-60">
    <div class="container">
        <div class="feature-mock"></div>
        <div class="row feature-wrap">
            <div class="col-md-4 text-right feature-list col-sm-12 xs-padding">
                <div class="feature-content wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms"
                    style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInRight;">
                    <div class="icon"><img src="assets/images/app-img1.jpg" alt="Great Interface"></div>
                    <h3>Great Interface</h3>
                    <p>Connecting individuals who share the rich heritage of Kammavaari culture, fostering meaningful relationships for a brighter future.</p>
                </div>
                <div class="feature-content wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1000ms"
                    style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInRight;">
                    <div class="icon"><img src="assets/images/app-img2.jpg" alt="Made With Love"></div>
                    <h3>Made With Love</h3>
                    <p>Made with love, we bring together the vibrant Kammavaari community. Join us in celebrating love, tradition, and family values!</p>
                </div> <!-- Item-2 -->
            </div>
            <div class="col-md-4 offset-md-4 feature-list col-sm-12 xs-padding">
                <div class="feature-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms"
                    style="visibility: visible; animation-duration: 1000ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                    <div class="icon"><img src="assets/images/app-img3.jpg" alt="Easy To Custimize"></div>
                    <h3>Easy To Custimize</h3>
                    <p>Find your perfect match with our customizable search options based on preferences like age, location, and values.</p>
                </div>
                <div class="feature-content wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1000ms"
                    style="visibility: visible; animation-duration: 1000ms; animation-delay: 200ms; animation-name: fadeInLeft;">
                    <div class="icon"><img src="assets/images/app-img4.jpg" alt="24/7 Support"></div>
                    <h3>24/7 Support</h3>
                    <p>We're here for you 24/7, ready to assist with your journey. Our dedicated suppport team ensures a smooth experience.</p>
                </div> <!-- Item-2 -->
            </div>
        </div>

    </div>
</section>

<style>
    .contact-map-sec .progress_inner__status .box_base {
        width: 30px !important;
        height: 30px !important;
        background-color: red !important;
        border-radius: 60px 60px 0px 60px !important;
        position: relative !important;
        transform: rotate(45deg) !important;
    }

    .contact-map-sec .progress_inner__bar--set {
        width: 80%;
        top: -6px;
        background: #70afd0;
        position: relative;
        z-index: -2;
    }
</style>


<section class="contact-map-sec">
    <div class="progress">
        <h2>Where To Contact</h2>
        <div class="progress_inner">
            <div class="progress_inner__step">
                <label for="step-1">Jubilee Hills</label>
            </div>
            <div class="progress_inner__step">
                <label for="step-2">KPHB</label>
            </div>
            <div class="progress_inner__step">
                <label for="step-3">Vijayawada</label>
            </div>
            <div class="progress_inner__step">
                <label for="step-4">GUNTUR</label>
            </div>
            <div class="progress_inner__step">
                <label for="step-5">Eluru</label>
            </div>
            <input id="step-1" name="step" type="radio" checked="checked">
            <input id="step-2" name="step" type="radio">
            <input id="step-3" name="step" type="radio">
            <input id="step-4" name="step" type="radio">
            <input id="step-5" name="step" type="radio">
            <div class="progress_inner__bar"></div>
            <div class="progress_inner__bar--set"></div>
            <!--<div class="progress_inner__tabs">-->
            <!--    <div class="tab tab-0">-->
            <!--        <h3>Jubilee Hills</h3>-->
            <!--        <p>Plot No. 1282/A, Road No 64, Jubilee Hills, Hyderabad.<br>-->
            <!--            Phone: +91 9177036777, 7032306555, 9160516777</p>-->
            <!--        <p><iframe-->
            <!--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.2851858115816!2d78.44177175820369!3d17.432393856032302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ce69555555%3A0x82e84e2e0a69e8b2!2sKammavaari%20Matrimony!5e0!3m2!1sen!2sin!4v1649075160127!5m2!1sen!2sin"-->
            <!--                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
            <!--                referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
            <!--    </div>-->
            <!--    <div class="tab tab-1">-->
            <!--        <h3>KPHB</h3>-->
            <!--        <p>Flat.No.501, Shanthi Apartments, Bhagya Nagar Colony, <br>Kukatpally, Hyderabad, Telangana 500072</p>-->
            <!--        Phone: +91 9160512777, 9160513777</p>-->
            <!--        <p>-->
            <!--            <iframe-->
            <!--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3805.2503700601037!2d78.39944551487785!3d17.495557788013897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x298382131449a63f!2zMTfCsDI5JzQ0LjAiTiA3OMKwMjQnMDUuOSJF!5e0!3m2!1sen!2sin!4v1671574231146!5m2!1sen!2sin"-->
            <!--                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
            <!--                referrerpolicy="no-referrer-when-downgrade"></iframe>-->
            <!--        </p>-->
            <!--    </div>-->
            <!--    <div class="tab tab-2">-->
            <!--        <h3>Vijayawada</h3>-->
            <!--        <p>Flat.No.F4, Sai Sudha Apartments, <br>3rd Lane, Pinnamaneni Poly Clinic Road,-->
            <!--            <br>Gayathri Nagar, Vijayawada - 520010 <br>Contact : 9703510777, 8297276969-->
            <!--        </p>-->
            <!--        <p><iframe-->
            <!--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.448862697135!2d80.6531153148642!3d16.503421788613988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2a35345336675e4e!2zMTbCsDMwJzEyLjMiTiA4MMKwMzknMTkuMSJF!5e0!3m2!1sen!2sin!4v1671574137257!5m2!1sen!2sin"-->
            <!--                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
            <!--                referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->
            <!--    </div>-->
            <!--    <div class="tab tab-3">-->
            <!--        <h3>GUNTUR</h3>-->
            <!--        <p> Flat.No.12, Sindhuri Apartments, Nalanda Nagar, <br>Beside Max Showroom, 2nd Lane, Guntur - 522006, <br>Contact : 8019819777, 8008102990</p>-->
            <!--        <p><iframe-->
            <!--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.3647056711466!2d81.092034314867!3d16.70864488848868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e9014422fe7a990!2zMTbCsDQyJzMxLjEiTiA4McKwMDUnMzkuMiJF!5e0!3m2!1sen!2sin!4v1671574044392!5m2!1sen!2sin"-->
            <!--                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
            <!--                referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->

            <!--    </div>-->
            <!--    <div class="tab tab-4">-->
            <!--        <h3>Eluru</h3>-->
            <!--        <p>H.No.25/9/17, Near Yarlagadda Jaganmohan Rao House, <br>Navayuga Hotel Road, NR Pet, Eluru - 534006,<br>-->
            <!--            Contact : 9581536777, 9703410777</p>-->
            <!--        <p><iframe-->
            <!--                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.3647056711466!2d81.092034314867!3d16.70864488848868!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6e9014422fe7a990!2zMTbCsDQyJzMxLjEiTiA4McKwMDUnMzkuMiJF!5e0!3m2!1sen!2sin!4v1671574044392!5m2!1sen!2sin"-->
            <!--                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"-->
            <!--                referrerpolicy="no-referrer-when-downgrade"></iframe></p>-->

            <!--    </div>-->
            <!--</div>-->
            <div class="progress_inner__status">
                <div class="box_base"><span style="font-size: 20px;font-weight: 700;padding: 6px;">o</span></div>
            </div>
        </div>
    </div>
</section>

<div class="home-whereglow profile_list_bg" style="display: none;">
    <div class="home-whereglow-container">
        <h2>WHERE TO Contact</h2>
        <div class="row home-whereglow-row">
            <div class="col-12 col-sm-12 col-md-6 home-whereglow-col home-whereglow-col-lft">
                <div class="home-whereglow-col-in">
                    <div class="home-whereglow-col-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.2851858115816!2d78.44177175820369!3d17.432393856032302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ce69555555%3A0x82e84e2e0a69e8b2!2sKammavaari%20Matrimony!5e0!3m2!1sen!2sin!4v1649075160127!5m2!1sen!2sin"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 home-whereglow-col home-whereglow-col-rgt">
                <div class="row">
                    <div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
                        <div class="brand-where-glow-col-in">
                            <div class="brand-where-glow-col-head parent">
                                <span class="resize-txt">Guntur</span>
                            </div>
                            <div class="brand-where-glow-col-body">
                                <div class="brand-where-address">Flat.No.12, Sindhuri Apartments, Nalanda Nagar, 2nd Lane, Guntur.
                                </div>
                                <div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i>
                                        Phone:</strong> +91 70323 06555</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
                        <div class="brand-where-glow-col-in">
                            <div class="brand-where-glow-col-head parent">
                                <span class="resize-txt">KPHB</span>
                            </div>
                            <div class="brand-where-glow-col-body">
                                <div class="brand-where-address">Flat No-501, Shanthi Apartments, K.S. Bakery Lane,
                                    Bhagyanagar Colony, KPHB, Hyderbad.</div>
                                <div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i>
                                        Phone:</strong> +91 916051 6777</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
                        <div class="brand-where-glow-col-in">
                            <div class="brand-where-glow-col-head parent">
                                <span class="resize-txt">Vijayawada</span>
                            </div>
                            <div class="brand-where-glow-col-body">
                                <div class="brand-where-address">Flat No F4, D.No:59.8/1-8,Sai Sudha Apartments,3rd
                                    Lane, Bhashyam School Road,Pinnamaneni Poly Clinic Road, Gayathri Nagar,Vijayawada -
                                    520010.</div>
                                <div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i>
                                        Phone:</strong> +91 97034 10777</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12  col-md-6  item brand-where-glow-col">
                        <div class="brand-where-glow-col-in">
                            <div class="brand-where-glow-col-head parent">
                                <span class="resize-txt">Eluru</span>
                            </div>
                            <div class="brand-where-glow-col-body">
                                <div class="brand-where-address">NR Pet, fire station, navayuga hotel road, opp dr.
                                    jaganmohan rao house -534006.</div>
                                <div class="brand-where-address p-0 m-0"><strong><i class="icofont-phone"></i>
                                        Phone:</strong> +91 97036 10777</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Start Here -->

<!-- Footer Ends Here -->

<!-- Privacy Policy Popup Start Here -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog popup_main">
        <div class="modal-content popup_main_in">
            <div class="modal-header popup_header">
                <h2 class="modal-title" id="exampleModalLabel">Privacy Policy</h2>
                <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <div class="col-md-12 privacy_policy">
                    <object data="privacy-policy-pdf.pdf" type="application/pdf" width="100%" height="100%">
                    </object>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Privacy Policy Popup Ends Here -->
<!-- Terms And Conditions Popup Start Here -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog popup_main">
        <div class="modal-content popup_main_in">
            <div class="modal-header popup_header">
                <h2 class="modal-title" id="exampleModalLabel">Terms and Conditions</h2>
                <button type="button" class="close close_btn" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body row">
                <div class="col-md-12 privacy_policy">
                    <object data="term-conditions-pdf.pdf" type="application/pdf" width="100%" height="100%">
                    </object>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Terms And Conditions Popup Ends Here -->
</div>


<!-- <style>
#content-container {
    overflow: hidden;
}

#slider-container {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slider-video {
    width: 100vw;
    height: 70vh;
    object-fit: cover;
    margin: 0;
}
</style>

<script>
const sliderContainer = document.getElementById('slider-container');
let currentIndex = 0;

function showNextVideo() {
    currentIndex = (currentIndex + 1) % 2;
    const translateValue = `translateX(${-currentIndex * 100}vw)`;
    sliderContainer.style.transform = translateValue;
}

sliderContainer.addEventListener('click', showNextVideo);
</script> -->

<style>
    #content-container {
        overflow: hidden;
    }

    #slider-container {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 75%;

        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 15px;
    }

    .slider-video {
        /* width: 100vw; */
        /* height: 35vh; */
        /* object-fit: cover; */
        margin: 0;
        width: 100%;
        border-radius: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px;
    }

    .why-choose-k ul li p {
        font-family: Roboto Serif;
        font-size: 20px;
        font-weight: 600;
        line-height: 29px;
        letter-spacing: 0px;
        text-align: left;
        color: #BD1700
    }
</style>
<style>
    /* msn responsive start */
    .home-banner-over-content h2.kammahead{
        text-align: center;
        color: #FFE066;
        font-size: 55px;
        font-weight: 800;
    }
    .kammahead1{
        text-align: center; color: #fff; font-size: 35px;
    }
    h3.text-white {
        color: #fff !important;
    }
    .why-choose-k>ul {
        column-count: 2;
    }
    .splhead{
        color:#BD1700;
        font-size: 30px; 
        margin-bottom: 20px;
    }
    .spltext{
        font-size: 20px;
    }
    .whyheading{
        font-family: Poppins; 
        font-size: 48px; 
        font-weight: 700; 
        line-height: 52px; 
        letter-spacing: 0px; 
        color: #383F51 !important; 
        text-align: center; 
        margin-bottom: 50px;
    }
    .home-banner-over{
        background-image: url('images/couple-new.jpg');
    }


    @media screen and (max-width : 1099px) {
        .home-banner-over-content h2 {
            line-height: 60px;
        }
    }
    @media screen and (max-width : 1023px) {
        .home-banner-over-content {
            max-width: 100%;
        }
    }
    @media screen and (max-width : 900px) {
        .home-banner-over-content h2.kammahead {
            font-size: 45px;
            line-height: 55px;
        }
        .kammahead1 {
            font-size: 30px;
        }
        .splhead{
            font-size: 25px; 
        }
        .spltext{
            font-size: 16px;
        }
        .whyheading {
            font-size: 40px;
            line-height: 45px;
            margin-bottom: 30px;
        }
        .using-kvm-col-icon:before{
            border-radius: 50%;
        }
    }
    @media screen and (max-width : 767px) {
        .why-choose-k>ul {
           column-count: 1;
        }
        .form-banner.home-kvm-coming-container {
            max-width: 400px;
            background: #e43659eb !important;
        }
        .row.using-kvm-row.text-center {
            max-width: 400px;
        }
        .row.using-kvm-row.text-center .using-kvm-col {
            border-bottom: 1px solid #e5e3e3 !important;
            padding-bottom: 10px;
        }
        .row.using-kvm-row.text-center .using-kvm-col:nth-child(3) {
            border-bottom: none !important;
        }
        .whyheading {
            font-size: 35px;
            line-height: 40px;
            margin-bottom: 25px;
        }
        .why-choose-k ul li p {
            font-size: 18px;
        }
        .trusted_section .row.using-kvm-row {
            max-width: 400px;
        }
        .feature-mock {
            position: static;
        }
        .feature-list {
            text-align: center !important;
            margin-top: 20px;
            max-width: 400px;
            margin: 20px auto;
        }

        .tab iframe {
            height: 350px !important;
        }

    }
    @media screen and (max-width : 640px) {
        .home-banner-over {
            height: auto;
        }
        .home-banner-over-content h2.kammahead {
            font-size: 37px;
            line-height: 43px;
        }
        .kammahead1 {
            font-size: 25px;
        }
        .using-kvm-container h2.splheading{
            font-size: 22px;
        }
        .trusted_section h2 {
            font-size: 22px;
        }
        .hero-content h1 {
            font-size: 36px;
        }
        .hero-section{
            height: 80vh;
        }
        .contact-map-sec .progress h2 {
            margin: 0em 0 0 0;
            font-size: 28px;
        }
    }
    @media screen and (max-width : 575px) {
        .form-banner.home-kvm-coming-container {
            max-width: 400px;
            background: #e43659eb !important;
        }
        .home-banner-over-content h2.kammahead {
            font-size: 35px;
            line-height: 40px;
            padding-top: 20px;
        }
        .home-banner-over-content h5.kammahead1 {
            line-height: 30px;
            margin-bottom: 15px !important;
        }
        .why-choose-k>ul {
            column-count: 1;
            padding: 0;
        }
        a.download-btn {
            margin-bottom: 20px;
            display: inline-block;
        }
    }
    @media screen and (max-width : 426px) {
        

        .home-banner-over-content h2 {
            font-size: 30px !important;
            margin-bottom: 0px !important;
            margin-top: 30px !important;

        }

        .home-banner-over-content h5 {
            margin-top: 10px !important;
            margin-bottom: 0px !important;
            font-size: 25px !important;
        }

        .home-kvm-coming-container {
            padding: 10px;
            background-color: transparent !important;
        }

        .progress_inner__step label {
            font-size: 14px !important;
        }

        .mobile {
            display: flex !important;
            flex-wrap: wrap
        }

        .feature-mock {
            position: relative !important;
            top: 0px !important;
        }

        .feature-content {

            text-align: center
        }
        .splhead {
            font-size: 23px;
        }
        .home-banner-over-content h2.kammahead {
            line-height: 40px;
            padding-top: 5px;
        }
        
    }
    /* msn responsive ends */
</style>

<script>
    // const sliderContainer = document.getElementById('slider-container');
    // let currentIndex = 0;
    // const totalVideos = <?php echo count($videos); ?>;

    // function showNextVideo() {
    //     currentIndex = (currentIndex + 1) % totalVideos;
    //     const translateValue = `translateX(${-currentIndex * 100}vw)`;
    //     sliderContainer.style.transform = translateValue;
    // }

    // sliderContainer.addEventListener('click', showNextVideo);

    const sliderContainer = document.getElementById('slider-container');
    let currentIndex = 0;
    const totalVideos = <?php echo count($videos); ?>;

    function showNextVideo() {
        // Hide the current video (if any)
        sliderContainer.children[currentIndex].style.display = 'none';

        // Calculate the index of the next video
        currentIndex = (currentIndex + 1) % totalVideos;

        // Show the next video
        sliderContainer.children[currentIndex].style.display = 'block';
    }

    // Initially hide all videos except the first one
    for (let i = 1; i < sliderContainer.children.length; i++) {
        sliderContainer.children[i].style.display = 'none';
    }

    sliderContainer.addEventListener('click', showNextVideo);
</script>

<script>
    const prev = document.querySelector("#prev");
    const next = document.querySelector("#next");

    let carouselVp = document.querySelector("#carousel-vp1");

    let cCarouselInner = document.querySelector("#cCarousel-inner1");
    let carouselInnerWidth = cCarouselInner.getBoundingClientRect().width;

    let leftValue = 0;

    // Variable used to set the carousel movement value (card's width + gap)
    const totalMovementSize =
        parseFloat(
            document.querySelector(".cCarousel-item1").getBoundingClientRect().width,
            10
        ) +
        parseFloat(
            window.getComputedStyle(cCarouselInner).getPropertyValue("gap"),
            10
        );

    prev.addEventListener("click", () => {
        if (leftValue < 0) {
            leftValue += totalMovementSize;
            cCarouselInner.style.left = leftValue + "px";
        } else {
            // Move to the last card
            leftValue = -(carouselInnerWidth - carouselVp.getBoundingClientRect().width);
            cCarouselInner.style.left = leftValue + "px";
        }
    });

    next.addEventListener("click", () => {
        if (carouselInnerWidth - Math.abs(leftValue) > carouselVp.getBoundingClientRect().width) {
            leftValue -= totalMovementSize;
            cCarouselInner.style.left = leftValue + "px";
        } else {
            // Move to the first card
            leftValue = 0;
            cCarouselInner.style.left = leftValue + "px";
        }
    });

    const mediaQuery510 = window.matchMedia("(max-width: 510px)");
    const mediaQuery770 = window.matchMedia("(max-width: 770px)");

    mediaQuery510.addEventListener("change", mediaManagement);
    mediaQuery770.addEventListener("change", mediaManagement);

    let oldViewportWidth = window.innerWidth;

    function mediaManagement() {
        const newViewportWidth = window.innerWidth;

        if (leftValue <= -totalMovementSize && oldViewportWidth < newViewportWidth) {
            leftValue += totalMovementSize;
            cCarouselInner.style.left = leftValue + "px";
            oldViewportWidth = newViewportWidth;
        } else if (
            leftValue <= -totalMovementSize &&
            oldViewportWidth > newViewportWidth
        ) {
            leftValue -= totalMovementSize;
            cCarouselInner.style.left = leftValue + "px";
            oldViewportWidth = newViewportWidth;
        }
    }
</script>
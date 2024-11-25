<style type="text/css">

  
a.details {

    background: #17a554;

    padding: 7px;

    border-radius: 3px;

    float: right;

    color: #fff;

    text-decoration: none;

}

.log-form {

    background: #fff;

}
.ms-options-wrap button {
  color: #555;
}

 section{
  overflow: visible;
 }

@media (min-width: 768px)

.navbar-nav>li {
    float: left;
    width: 100%;
}
.container {    margin-top: 30px;
}

</style>

<section>

   <div class="main">

      <div class="container">
         <div class="col-xs-12 col-md-12 view-profile log-form no-padding">

            <form method="POST" action="<?php echo site_url();?>dashboard/search_partner/searchprofiles" class="register-form" id="register-form">

              <div class="search-title-ms col-xs-12">

                   <h4>Search Your Partner </h4>

              </div>

               

               <div class="form-row" >

 <div class="col-xs-12">&nbsp;</div>

                  <div class="ol-xs-12 col-md-6" style="padding: 0px;">

                      <div class="col-xs-6">

                     <label id="label_heightId" for="heightId" title="Height">Height </label>
						<?php $genderType = $primary_info['gender'];
							$inchesArr = explode(".",$religion_details['height']);
							$heightFromInCms = (($inchesArr[0] * 12) + $inchesArr[1])* 2.54;
						?>
                     <select class="form-control colorChange" id="heightfrom" name="heightfrom" >
                        <option value="">Select Height</option>						
						
                        <?php foreach($heights as $value) {
							$inchesArr = explode(".",$value['height']);
							$OptiomheightInCms = (($inchesArr[0] * 12) + $inchesArr[1])* 2.54;
							$selected = "";
                              if(isset($_SESSION['heightfrom']) && !empty($_SESSION['heightfrom'])) {
                                if($_SESSION['heightfrom'] == stripcslashes(str_replace("\n","",$value['height'])))
                                $selected = "selected";
                              } elseif($preference_details['p_height_from'] == stripcslashes(str_replace("\n","",$value['height']))) {
								 $selected = "selected";
								} elseif($genderType == "female" && $heightFromInCms == $OptiomheightInCms) {
								 $selected = "selected";
								}
							?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>" <?php echo $selected ?>><?php echo stripcslashes($value['height']);?></option><?php } ?>

                     </select></div>
                      <div class="col-xs-6">

                     <label class="plr-5">to</label>

                     <select class="form-control colorChange" id="heightto" name="heightto" >

                        <option value="">Select Height</option>

                        <?php foreach($heights as $value) { 
							$inchesArr = explode(".",$value['height']);
							$OptiomheightInCms = (($inchesArr[0] * 12) + $inchesArr[1])* 2.54;
							$selected = "";
                              if(isset($_SESSION['heightto']) && !empty($_SESSION['heightto'])) {
                                if($_SESSION['heightto'] == stripcslashes(str_replace("\n","",$value['height'])))
                                $selected = "selected";
                              } elseif($preference_details['p_height_to'] == stripcslashes(str_replace("\n","",$value['height']))) {
								 $selected = "selected";
								} elseif($genderType == "male" && $heightFromInCms == $OptiomheightInCms) {
								 $selected = "selected";
								}

							?>
                        <option value="<?php echo stripcslashes(str_replace("\n","",$value['height']));?>" <?php echo $selected ?>><?php echo stripcslashes($value['height']);?></option><?php } ?>

                     </select></div>

                  </div>

                  <div class="ol-xs-12 col-md-6 fx" style="padding: 0px;">

                       <div class="col-xs-6">

                      <label id="label_ageId" for="heightId" title="age">Age </label>
					<?php //echo "<pre>";print_r($preference_details);
							$ageFrom = $ageTo = "";
							$age = $primary_info['age'];
							if($genderType == "male") {								
								if(isset($preference_details["p_age_from"]) && !empty($preference_details["p_age_from"])) {
									$ageFrom = $age - $preference_details["p_age_from"];
								}
								if(isset($preference_details["p_age_to"]) && !empty($preference_details["p_age_to"])) {
									$ageTo = $age - $preference_details["p_age_to"];
								}
							}
							if($genderType == "female") {
								if(isset($preference_details["p_age_from"]) && !empty($preference_details["p_age_from"])) {
									$ageFrom = $age + $preference_details["p_age_from"];
								}
								if(isset($preference_details["p_age_to"]) && !empty($preference_details["p_age_to"])) {
									$ageTo = $age + $preference_details["p_age_to"];
								}
							}							

						?>
                  <select name="agefrom" id="agefrom" class="form-control colorChange" tabindex="-1">
                        <option value="">Age</option>
						<?php foreach($ages as $value) {							
							$selected = "";
                              if(isset($_SESSION['agefrom']) && !empty($_SESSION['agefrom'])) {
                                if($_SESSION['agefrom'] == $value['age'])
									$selected = "selected";
								} elseif(!empty($ageTo) && $ageTo == $value['age']) {
									$selected = "selected";
								}
							?>
						<option value="<?php echo $value['age'];?>" <?php echo $selected ?>><?php echo $value['age'];?></option>
						<?php } ?>
                     </select> </div><div class="col-xs-6">
                     <label class="plr-5">to</label>

                     <select name="ageto" id="ageto" class="form-control colorChange" tabindex="-1" >
                         <option value="">Age</option>
						<?php foreach($ages as $value) {							
							$selected = "";
                              if(isset($_SESSION['ageto']) && !empty($_SESSION['ageto'])) {
                                if($_SESSION['ageto'] == $value['age'])
									$selected = "selected";
								} elseif(!empty($ageFrom) && $ageFrom == $value['age']) {
									$selected = "selected";
								}
							?>
						<option value="<?php echo $value['age'];?>" <?php echo $selected ?>><?php echo $value['age'];?></option>
						<?php } ?>
                     </select></div>
                  </div>

                  <div class="ol-xs-12 col-md-6" style="padding: 15px;">

                     <label>Marital Status</label>
					 <select multiple class="multiselect form-control" id="maritalstatus" name="maritalstatus[]">
                           <option value="never_married" <?php
                            if(isset($_SESSION['maritalstatus'])) { 
                              if(in_array(stripcslashes('never_married'),$_SESSION['maritalstatus']))
                              echo 'selected'; 
                            }
                            elseif(in_array('never_married', explode(",", $preference_details['p_marital_status']))){ echo 'selected';} ?> >Never Married</option>

                           <option value="divorced" <?php 
                            if(isset($_SESSION['maritalstatus'])) { 
                              if(in_array(stripcslashes('divorced'),$_SESSION['maritalstatus']))
                              echo 'selected'; 
                            }
                            elseif(in_array('divorced', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Divorced</option>

                           <option value="widow-widower"  <?php 
                            if(isset($_SESSION['maritalstatus'])) { 
                              if(in_array(stripcslashes('widow-widower'),$_SESSION['maritalstatus']))
                              echo 'selected'; 
                            }
                            elseif(in_array('widow-widower', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Widow / Widower</option>

                           <option value="separated" <?php 
                            if(isset($_SESSION['maritalstatus'])) { 
                              if(in_array(stripcslashes('separated'),$_SESSION['maritalstatus']))
                              echo 'selected'; 
                            }
                            elseif(in_array('separated', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Separated</option>

                           <option value="annulled" <?php 
                            if(isset($_SESSION['maritalstatus'])) { 
                              if(in_array(stripcslashes('annulled'),$_SESSION['maritalstatus']))
                              echo 'selected'; 
                            }
                            elseif(in_array('annulled', explode(",", $preference_details['p_marital_status']))) echo 'selected' ?> >Annulled</option>

                     </select>

                  </div> 

                  <div class="ol-xs-12 col-md-6" style="padding: 15px;">

                     <label id="label_motherTongueId" for="motherTongueId">Mother Tongue</label>

                     <select multiple class="multiselect form-control" id="mothertounge" name="mothertounge[]">

                        <?php foreach($mothertounges as $value) { ?>

                        <option value="<?php echo $value['mothertounge'];?>"<?php
                        if(isset($_SESSION['mothertounge'])) { 
                          if(in_array(stripcslashes($value['mothertounge']),$_SESSION['mothertounge']))
                          echo 'selected'; 
                        }
                        elseif(in_array(stripcslashes($value['mothertounge']),explode(",", $preference_details['p_mother_tongue']))) { echo 'selected'; } ?>
                        ><?php echo stripcslashes($value['mothertounge']);?></option><?php } ?>

                     </select>

                  </div>

                   <div class="ol-xs-12 col-md-6" style="padding: 15px;">

                     <label id="label_motherTongueId" for="motherTongueId">Caste</label>

                     <select multiple="" class="multiselect form-control" id="caste" name="caste[]">

                        <?php foreach($castes as $value) { ?>

                        <option value="<?php echo $value['caste'];?>"
                          <?php                               
                            if(isset($_SESSION['caste'])) { 
                              if(in_array(stripcslashes($value['caste']),$_SESSION['caste']))
                              echo 'selected'; 
                            }
                            elseif(in_array(stripcslashes($value['caste']),explode(",", $preference_details['p_caste'])))
                              { echo 'selected'; } ?>
                          ><?php echo stripcslashes($value['caste']);?></option>

                      <?php } ?>

                     </select>

                  </div>

                  <div class="ol-xs-12 col-md-6" style="padding: 15px;">

                     <label id="label_educationLevelId" for="educationLevelId">Education Level</label>

                     <select multiple="" class="multiselect form-control" id="education" name="education[]">

                           <option value="Bachelors in Engineering"  <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Bachelors in Engineering'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Bachelors in Engineering', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Engineering</option>

                           <option value="Bachelors in Medicine"  <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Bachelors in Medicine'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Bachelors in Medicine', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Medicine</option>

                           <option value="Bachelors in Degree"  <?php           
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Bachelors in Degree'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Bachelors in Degree', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Bachelors in Degree</option>

                           <option value="Masters in Engineering"  <?php
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Masters in Engineering'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Masters in Engineering', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Engineering</option>

                           <option value="Masters in Medicine"  <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Masters in Medicine'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Masters in Medicine', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Medicine</option>

                           <option value="Masters in Degree"  <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Masters in Degree'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Masters in Degree', explode(",", $preference_details['p_education']))) echo 'selected' ?>  >Masters in Degree</option>

                           <option value="Finance - ICWAI/CA/CS"  <?php 

                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Finance - ICWAI/CA/CS'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Finance - ICWAI/CA/CS', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Finance - ICWAI/CA/CS</option>

                           <option value="Union Public Service Commision-Civil Services"  <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Union Public Service Commision-Civil Services'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Union Public Service Commision-Civil Services', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Union Public Service Commision-Civil Services</option>

                           <option value="Doctorate/phd" <?php 

                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Doctorate/phd'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Doctorate/phd', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Doctorate/phd</option>

                           <option value="Diploma / Below Graduation" <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Diploma / Below Graduation'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Diploma / Below Graduation', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Diploma / Below Graduation</option>

                           <option value="Others" <?php 
                              if(isset($_SESSION['education'])) { 
                                if(in_array(stripcslashes('Others'),$_SESSION['education']))
                                echo 'selected'; 
                              }
                              elseif(in_array('Others', explode(",", $preference_details['p_education']))) echo 'selected' ?> >Others</option>

                     </select>

                  </div>

                 <div class="ol-xs-12 col-md-6" style="padding: 15px;">

                     <label id="label_educationLevelId" for="educationLevelId" style="padding-top:10px;">Select Profession</label>

                     <select multiple="" class="multiselect form-control" id="profession" name="profession[]">

                           <?php foreach($professions as $value) { ?>

                            <option value="<?php echo $value['profession'];?>"
                              <?php                               
                              if(isset($_SESSION['profession'])) { 
                                if(in_array(stripcslashes($value['profession']),$_SESSION['profession']))
                                echo 'selected'; 
                              }
                              elseif(in_array(stripcslashes($value['profession']),explode(",", $preference_details['p_profession']))) echo 'selected'; ?>
                              ><?php echo stripcslashes($value['profession']);?></option><?php } ?>

                     </select>

                  </div>

                  <div class="ol-xs-12 col-md-6" style="padding: 15px;">

                     <label id="label_countryOfBirthId" for="countryOfBirthId" style="padding-top:10px;">Country Living In</label>

                     <select multiple="" class="multiselect form-control" id="country" name="country[]">
                      <?php foreach($countries as $value) { ?>

                        <option value="<?php echo $value['country'];?>"
                          <?php 
                            if(isset($_SESSION['country'])) { 
                              if(in_array(stripcslashes($value['country']),$_SESSION['country']))
                              echo 'selected'; 
                            }
                            elseif(in_array(stripcslashes($value['country']),explode(",", $preference_details['p_country']))) echo 'selected'; ?>
                          ><?php echo stripcslashes($value['country']);?></option><?php } ?>

                     </select>

                  </div>

               </div>

              

                  <div class="col-md-12 text-right no-padding" style="margin-top:10px; margin-bottom:10px;">

                     <div class="submit-form">

                        <input type="submit" value="Search" class="submit bsbb darkbg1 white bdr partnersearchbtn" name="submit" id="submit" style="width:100px; line-height:36px; margin-right: 15px; font-size:16px; font-weight:normal;">

                   

                    

                  </div>

               </div>

            </form>

         </div>

      </div>

   </div>

</section>
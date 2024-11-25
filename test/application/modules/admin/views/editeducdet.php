<form id="updateedudet" method="post">
	  <input type="hidden" name="userIdEdu" id="userIdEdu" value="<?php echo $userid; ?>">
	  <div class="col-sm-12">
		<div class="panel panel-primary">
		   <div class="panel-heading p-1">Highest Education</div>
		   <div class="panel-body">
			<div class="d-flex my-3">
				<div class="col-md-6 col-sm-7 col-xs-6">
				  <label>Select Education </label>
					<select class="form-control" id="select_education_1" name="select_education_1" onchange="getdegree(this.value,1)" rel="<?php echo $edudet->kv_ue_highedu_deg;?>" rel1="<?php echo $edudet->kv_ue_highedu_spec;?>" >
						<option value="">Select Education</option>
						<?php foreach($heighsteducation as $value) { if($value['edutype']=='he'){?>
						<option <?php if($value['heighsteducation']==$edudet->kv_ue_highedu){?> selected="selected" <?php } ?> value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option><?php }} ?>
					</select>
					  <span id="highest_educations" class="text-danger font-weight-bold"></span>
				  </div>
				<div class="col-md-6 col-sm-7 col-xs-6">
				<label>Education Degree </label>
			  <select class="form-control" id="education_degree_1" name="education_degree_1" onchange="getspecialization(this.value,1)">
				  <option value="">Select Education Degree</option>
			  </select>
				<span id="education_degrees" class="text-danger font-weight-bold"></span>
			</div>
			</div>

			<div class="d-flex my-3">
			<div class="col-md-6 col-sm-7 col-xs-6">
			<label>Specialization </label>
			  <select id="specialization_1" class="form-control" name="specialization_1">
				 <option value="">Select Specialization</option>
			  </select>
				<span id="specializations" class="text-danger font-weight-bold"></span>
			</div>

			<div class="col-md-6">
    <label for="special"></label>
    <select class="form-control" id="special_1" name="special_1">
        <option value="">IIT/IIM</option>
        <?php foreach ($special as $value) { ?>
            <?php if ($value['specialization'] == $edudet->kv_ue_highedu_special) { ?>
                <option value="<?php echo $value['specialization']; ?>" selected><?php echo $value['specialization']; ?></option>
            <?php } else { ?>
                <option value="<?php echo $value['specialization']; ?>"><?php echo $value['specialization']; ?></option>
            <?php } ?>
        <?php } ?>
    </select>
</div>


		
			</div>
			<div class="d-flex my-3">

			<div class="col-md-6 col-sm-7 col-xs-6">
			<label>University </label>
			  <input type="text" class="form-control" name="university_1" value="<?php echo $edudet->kv_ue_highedu_univ;?>" id="university_1"/>
			</div>	

				<div class="col-md-6 col-sm-7 col-xs-6">
				  <label>College </label>
					<input type="text" class="form-control" name="college_1" value="<?php echo $edudet->kv_ue_highedu_college;?>" id="college_1"/>
				  </div>            
				
		 
			
			</div>
			<div class="col-md-6 col-sm-7 col-xs-6"><label>Enter Year of Passing</label>
			  <input type="text" class="form-control" name="txt_yearofpassing_1" value="<?php echo $edudet->kv_ue_highedu_year;?>" id="txt_yearofpassing_1"/>
			</div>
	
		</div>
		</div>
		</div>
		<!-- <div class="row">
		  <div class="col-md-4 col-sm-5 col-xs-6">
			  <label>City Study In </label>
		  </div>
		  <div class="col-md-6 col-sm-7 col-xs-6">
			<div class="form-group">                      
			  <input type="text" class="form-control" name="studyCity" id="studyCity"/>
			</div>
		  </div>
		</div> -->
		
		
		
		 <!--Education Start-->
  

	  <div class="col-sm-12">
	  
		<div class="panel panel-primary">
<div class="panel-heading p-1">Post Graduate</div>
<div class="panel-body">
	<div class="d-flex my-3">

		<div class="col-md-6">
			  <label for="country"> Highest Education</label>
			  <select class="form-control" id="highest_education_2" name="highest_education_2" onchange="getdegree(this.value,2)" rel="<?php echo $edudet->kv_ue_pg_deg;?>" rel1="<?php echo $edudet->kv_ue_pg_spec;?>">
				 <option value="">Select Education</option>
				 <?php foreach($heighsteducation as $value) { if($value['edutype']=='pg'){?>
				 <option <?php if($value['heighsteducation']==$edudet->kv_ue_pg){?> selected="selected" <?php } ?> value="<?php echo $value['heighsteducation'];?>" id="<?php echo $value['id'];?>"><?php echo $value['heighsteducation'];?></option>
				 <?php } }?>
			   </select>
		</div>
		<div class="col-md-6">
			  <label for="height">Education Degree</label>		
			  <select class="form-control" id="education_degree_2" name="education_degree_2" onchange="getspecialization(this.value,2)">
				 <option value="">Select Education Degree</option>
			   </select>
			  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
		   </div>
	</div>

	<div class="d-flex my-3">
		<div class="col-md-6">
			  <label for="country">Specialization</label>
			  <select id="specialization_2" class="form-control" name="specialization_2">
				 <option value="" selected="selected">Select Specialization</option>
			   </select>
			  <span id="specializations" class="text-danger font-weight-bold"></span> 
		   </div>

		   <div class="col-md-6">
    <label for="special"></label>
    <select class="form-control" id="special_2" name="special_2">
        <option value="">IIT/IIM</option>
        <?php foreach ($special as $value) { ?>
            <?php if ($value['specialization'] == $edudet->kv_ue_pg_special) { ?>
                <option value="<?php echo $value['specialization']; ?>" selected><?php echo $value['specialization']; ?></option>
            <?php } else { ?>
                <option value="<?php echo $value['specialization']; ?>"><?php echo $value['specialization']; ?></option>
            <?php } ?>
        <?php } ?>
    </select>
</div>


		

	</div>

	<div class="d-flex my-3">

	<div class="col-md-6">
			  <label for="height">Universiy</label>
			  <input type="text" class="form-control" value="<?php echo $edudet->kv_ue_pg_univ;?>" name="university_2" id="university_2" />
			  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
		   </div>

		<div class="col-md-6">
			  <label for="college">College</label>
			  <input type="text" class="form-control" value="<?php echo $edudet->kv_ue_pg_college;?>" name="college_2" id="college_2"/>
		   </div>
	
		   
	

	</div>
	<div class="col-md-6">
			  <label for="college">Enter Year of Passing</label>
			  <input type="text" class="form-control" value="<?php echo $edudet->kv_ue_pg_year;?>"   maxlength="4" name="txt_yearofpassing_2" id="txt_yearofpassing_2"/>
		   </div>
	
</div>
</div>
		
		<div class="form-row"> 
		  <label class="bg-primary text-white"> </label>
		</div>
		
	  </div>
	
	
	  <div class="col-sm-12">
	  
		<div class="panel panel-primary">
<div class="panel-heading p-1">Graduate</div>
<div class="panel-body">
	<div class="d-flex my-3">

		<div class="col-md-6">
			  <label for="country"> Highest Education</label>
			  <select class="form-control" id="highest_education_3" name="highest_education_3" onchange="getdegree(this.value,3)" rel="<?php echo $edudet->kv_ue_g_deg;?>" rel1="<?php echo $edudet->kv_ue_g_spec;?>">
				 <option value="">Select Education</option>
				 <?php foreach($heighsteducation as $value) { if($value['edutype']=='g'){?>
				 <option <?php if($value['heighsteducation']==$edudet->kv_ue_g){?> selected="selected" <?php } ?> value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
				 <?php } }?>
			   </select>
		</div>
		<div class="col-md-6">
			  <label for="height">Education Degree</label>		
			  <select class="form-control" id="education_degree_3" name="education_degree_3" onchange="getspecialization(this.value,3)">
				 <option value="">Select Education Degree</option>
			   </select>
			  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
		   </div>
	</div>
	<div class="d-flex my-3">
		<div class="col-md-6">
			  <label for="country">Specialization</label>
			  <select id="specialization_3" class="form-control" name="specialization_3">
				 <option value="" selected="selected">Select Specialization</option>
			   </select>
			  <span id="specializations" class="text-danger font-weight-bold"></span> 
		   </div>

		   <div class="col-md-6">
    <label for="special">Specialization</label>
    <select class="form-control" id="special" name="special">
        <option value="">IIT/IIM</option>
        <?php foreach ($special as $value) { ?>
            <?php if ($value['specialization'] == $edudet->kv_ue_g_special) { ?>
                <option value="<?php echo $value['specialization']; ?>" selected><?php echo $value['specialization']; ?></option>
            <?php } else { ?>
                <option value="<?php echo $value['specialization']; ?>"><?php echo $value['specialization']; ?></option>
            <?php } ?>
        <?php } ?>
    </select>
</div>


	

	</div>
	

	<div class="d-flex my-3">

	<div class="col-md-6">
			  <label for="height">Universiy</label>
			  <input type="text" class="form-control" value="<?php echo $edudet->kv_ue_g_univ;?>" name="university_3" id="university_3" />
			  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
		   </div>

		<div class="col-md-6">
			  <label for="college">College</label>
			  <input type="text" class="form-control" name="college_3" value="<?php echo $edudet->kv_ue_g_college;?>" id="college_3"/>
		   </div>
		
	</div>
	<div class="col-md-6">
			  <label for="college">Enter Year of Passing</label>
			  <input type="text" class="form-control"  maxlength="4" value="<?php echo $edudet->kv_ue_g_year;?>" name="txt_yearofpassing_3" id="txt_yearofpassing_3"/>
		   </div>
</div>
</div>
		
		<div class="form-row"> 
		  <label class="bg-primary text-white"> </label>
		</div>
		
	  </div>
	
	
	<div class="row">
	  <div class="col-sm-12">
	  
		<div class="panel panel-primary">
<div class="panel-heading p-1">Under Graduate</div>
<div class="panel-body">

<div class="d-flex my-3">
	<div class="col-md-6">
		  <label for="country"> Highest Education</label>
		  <select class="form-control" id="highest_education_4" name="highest_education_4" onchange="getdegree(this.value,4)" rel="<?php echo $edudet->kv_ue_ug_deg;?>" rel1="<?php echo $edudet->kv_ue_ug_spec;?>">
			 <option value="">Select Education</option>
			 <?php foreach($heighsteducation as $value) { if($value['edutype']=='ug'){?>
			 <option <?php if($value['heighsteducation']==$edudet->kv_ue_ug){?> selected="selected" <?php } ?>  value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option>
			 <?php } }?>
		   </select>
	</div>
	<div class="col-md-6">
		  <label for="height">Education Degree</label>		
		  <select class="form-control" id="education_degree_4" name="education_degree_4" onchange="getspecialization(this.value,4)">
			 <option value="">Select Education Degree</option>
		   </select>
		  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
	   </div>
</div>

<div class="d-flex my-3">
<div class="col-md-6">
	   <label for="country">Specialization</label>
	   <select id="specialization_4" class="form-control" name="specialization_4">
		  <option value="" selected="selected">Select Specialization</option>
		</select>
	   <span id="specializations" class="text-danger font-weight-bold"></span> 
	</div>
 <div class="col-md-6">
	   <label for="height">Universiy</label>
	   <input type="text" class="form-control"  value="<?php echo $edudet->kv_ue_ug_univ;?>"  name="university_4" id="university_4" />
	   <span id="education_degrees" class="text-danger font-weight-bold"></span> 
	</div>
</div>

<div class="d-flex my-3">
	<div class="col-md-6">
		  <label for="college">College</label>
		  <input type="text" class="form-control" name="college_4" value="<?php echo $edudet->kv_ue_ug_college;?>" id="college_4"/>
	   </div>
	<div class="col-md-6">
		  <label for="college">Enter Year of Passing</label>
		  <input type="text" class="form-control"  maxlength="4" value="<?php echo $edudet->kv_ue_ug_year;?>" name="txt_yearofpassing_4" id="txt_yearofpassing_4"/>
	   </div>
</div>

</div>
</div>
		
		<div class="form-row"> 
		  <label class="bg-primary text-white"> </label>
		</div>
		
	  </div>
	</div>
	
	  <div class="col-sm-12">
	  
		<div class="panel panel-primary">
<div class="panel-heading p-1">X Grade</div>
<div class="panel-body">
	<div class="d-flex my-3">
		<div class="col-md-6">
			  <label for="country">Board </label>
			  <select class="form-control txt_tenth" id="txt_tenth" name="txt_tenth"  >
						 <option value="">Select Education</option>
						 <?php foreach($heighsteducation as $value) { if($value['edutype']=='sc'){?>
						 <option <?php if($value['heighsteducation']==$edudet->kv_ue_x){?> selected="selected" <?php } ?> value="<?php echo $value['heighsteducation'];?>"><?php echo $value['heighsteducation'];?></option><?php }} ?>
					 </select>
		</div>
		<div class="col-md-6 hide">
			  <label for="height">&nbsp;</label>		
			  &nbsp;
			  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
		   </div>

	</div>
	<div class="d-flex my-3">

		<div class="col-md-6 hide">
			  <label for="country">Specialization</label>
			  <input type="text" name="txt_tenthspec"  value="<?php echo $edudet->kv_ue_x_spec;?>" class="txt_tenthspec form-control">
			  <span id="specializations" class="text-danger font-weight-bold"></span> 
		   </div>
		<div class="col-md-6 hide">
			  <label for="height">Board</label>
			  <input type="text" name="txt_tenthboard" value="<?php echo $edudet->kv_ue_x_univ;?>" class="txt_tenthboard form-control">
			  <span id="education_degrees" class="text-danger font-weight-bold"></span> 
		   </div>
	</div>
	<div class="d-flex my-3">

		<div class="col-md-6">
			  <label for="college">School</label>
			  <input type="text" name="school" id="school" value="<?php echo $edudet->kv_ue_x_college;?>" class="form-control"/>
		   </div>
		<div class="col-md-6">
			  <label for="college">Enter Year of Passing</label>
			  <input type="text" maxlength="4" name="txt_yearofpassing_5" value="<?php echo $edudet->kv_ue_x_year;?>" id="txt_yearofpassing_5" class=" form-control"/>
		   </div>
	</div>
</div>
</div>
		
		
		
	  </div>

	
		  <div class="col-md-4 col-sm-5 col-xs-6">
			  <label>More Details </label>
		  </div>
		  <div class="col-md-12 col-sm-12 col-xs-12">
			<div class="form-group">                      
			  <textarea class="form-control" name="education-details" id="education-details" cols="20" rows="5"><?php echo $eduotherdet['education_description'];?></textarea>
			</div>
		  </div>
	 <!--Education End-->
		  <div class="col-md-12 col-sm-12 col-xs-12">
			<div class="btn-submit">
			  <a href="#"  class="btn btn-primary py-3 px-5 btnrmeducform">Submit Education Details</a>
			</div>
		  </div>
</form>
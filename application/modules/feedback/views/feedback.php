<!-- Search List main Content Start Here -->
		<div class="main_content teamSinglePage pb-0">
			<div class="container">
				<div class="row m-0">
					<div class="col-md-12 search_section">
						<h2 class="mt-4 mb-4 text-center">Success Stories</h2>
						<div class="row">
						<?php if(isset($successstories) && count($successstories) > 0) { 
                      foreach($successstories as $value) { ?>
                      <div class="col-sm-6 col-md-4 col-lg-3 text-center p-2">
		                        <div class="success_stories">
		                        	<img src="<?php echo site_url();?>images/successstories/<?php echo $value['image'];?>" alt="<?php echo ucwords($value['title'])?>"> 
			                        <h2 class="mt-2"><?php echo ucwords($value['title'])?></h2>
			                        <p class="pt-2 pl-2 pr-2"><?php echo stripcslashes(str_replace('\n','',$value['content']));?></p>
		                        </div>
		                    </div>
                     <?php } } else{
                        echo "No Records Found Yet!";
                     }?>		                    
		                    
		                </div>	
					</div>
				</div>	
			</div>
		</div>
<style>
@media(max-width:575px){
    .search_section h2.mt-4.mb-4.text-center {
    font-size: 25px;
}
.main_content.teamSinglePage.pb-0 {
    padding: 0;
    border: 0;
}
.main_content.teamSinglePage .container{
    padding: 0;
    margin: 0;
    border: 0;
    box-shadow: none;
}
.search_section {
    box-shadow: none;
    width: 100%;
    border: 0;
}
    .success_stories {
        min-height: auto;
        max-width: 310px;
        margin: auto;
    }

}
</style>
<section class="about-us privacy_page">
    <div class="container">
        <div class="row">
            <div class="about-heading text-center">
                <h1 class="head_title">Privacy Policy</h1>
            </div>
            <div class="about-content">
            <div class="col-md-12 pb-40">
                <div class="row">
                    <div class="col-md-12">
                      <p><?php echo stripcslashes(str_replace('\n','',$policy_info['content']));?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .about-us{
        border-radius: 10px;
    box-shadow: 5px 4px 24px 0 rgb(0 0 0 / 5%);
    border: 1px solid #eaeaea;
    background-color: #fff;
    padding: 10px 20px;
    margin: 20px;
    }
    h1.head_title {
    font-size: 35px;
    padding-left: 15px;
    padding-top: 15px;
}
    @media(max-width:640px){
h1.head_title {
    font-size: 25px;
    padding-left: 15px;
}
.about-us{
    padding: 5px;
}
    }
    @media(max-width:575px){
        .about-us {
        padding: 5px;
        margin: 0;
        border: 0;
    }
    }
</style>
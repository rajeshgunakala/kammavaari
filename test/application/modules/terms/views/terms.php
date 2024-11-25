<section class="about-us terms_page">
    <div class="container">
        <div class="card">
            <div class="about-heading text-center">
                <h1 class="head_title">Terms & Conditions</h1>
            </div>
            <div class="about-content">
            <div class="col-md-12 pb-40">
                <div class="row">
                    <div class="col-md-12">
                      <p><?php echo stripcslashes(str_replace('\n','',$terms_info['content']));?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .about-content h3,.about-content h4 {
    font-size: 23px;
}
section.about-us.terms_page {
    border-radius: 10px;
    box-shadow: 5px 4px 24px 0 rgb(0 0 0 / 5%);
    border: 1px solid #eaeaea;
    background-color: #fff;
    padding: 10px 20px;
    margin: 20px;
    /* width: 100%; */
}
h1.head_title {
    font-size: 30px;
}
@media(max-width:767px){
.about-content h3, .about-content h4 {
    font-size: 20px;
    text-align: center !important;
    line-height: 25px;
}
.about-content p{
    text-align: center !important;
}
section.about-us.terms_page {
    padding: 15px 0px;
}
}
@media(max-width:640px){
h1.head_title {
    font-size: 25px;
}
.about-content h3, .about-content h4 {
        font-size: 16px;

}
 .container {
    padding: 0;
}
.about-us{
    padding: 5px;
}
}
@media(max-width:575px){
section.about-us.terms_page {
        padding: 15px 0px;
        margin: 0;
        border: 0;
        width: 100%;
    }
    }
</style>
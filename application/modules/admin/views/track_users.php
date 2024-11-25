<style>
.container-fluid {
    margin-top: 30px;
}

.card {
    /* background-color: #424242; */
    background-color: #07A0C3;

    padding: 40px 10px
}

.text-grey {
    color: #9E9E9E
}

.fa {
    font-size: 25px;
    cursor: pointer
}

input,
select {
    padding: 2px 6px;
    border: none;
    border-bottom: 1px solid #fff;
    border-radius: none;
    box-sizing: border-box;
    color: #fff;
    background-color: transparent;
    font-size: 14px;
    letter-spacing: 1px;
    text-align: center !important
}

input:focus,
select:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #00C853;
    outline-width: 0
}

::placeholder {
    color: #fff;
    opacity: 1
}

:-ms-input-placeholder {
    color: #fff
}

::-ms-input-placeholder {
    color: #fff
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn {
    border-radius: 50px;
    width: 120px
}

.exit {
    border: 1px solid #9E9E9E;
    color: #9E9E9E;
    background-color: transparent
}

.exit:hover {
    border: 1px solid #9E9E9E;
    color: #000 !important;
    background-color: #9E9E9E
}

@media screen and (max-width: 768px) {
    .mob {
        width: 70%
    }

    select.mob {
        width: 50%
    }
}

/* Set color of labels and date fonts to white */
.text-white {
    color: #fff !important;
}
</style>

<?php  $type = $this->session->userdata('type'); 

if($type == "admin" ) { ?>

<div>
    <form action="<?php echo site_url() ?>/admin/chat_users/get_track_users" method="post">

        <div class="container-fluid px-1 px-sm-4 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8">
                    <div class="card border-0">
                    <h2 style="color:white;margin-bottom:50px;">Track Online Site Visits</h2>
                        <div class="row px-3">
                            <div class="col-sm-10 list">
                                <div class="mb-2 row justify-content-between px-3"> 
                                    <div class="mob">
                                        <label class="text-white mr-1">From :</label>
                                        <input class="ml-1" type="date" name="from" value="">
                                    </div>
                                    <div class="mob mb-2">
                                        <label class="text-white mr-4">To :</label>
                                        <input class="ml-1" type="date" name="to" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row px-3 mt-3 justify-content-center">
                            <button type="submit" class="btn btn-success ml-2">Done</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php }  ?>


<div>
    <form action="<?php echo site_url() ?>/admin/chat_users/bounce_mails" method="post">
        <div class="container-fluid px-1 px-sm-4 py-5 mx-auto">
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-lg-9 col-xl-8">
                    <div class="card border-0">
                    <h2 style="color:white;margin-bottom:50px;">Non-Email Users</h2>
                        <div class="row px-3">
                            <div class="col-sm-10 list">

                            </div>
                        </div>
                        <div class="row px-3 mt-3 justify-content-center">
                            <button type="submit" class="btn btn-success ml-2">Click</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>





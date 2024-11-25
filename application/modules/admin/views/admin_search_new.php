<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />-->


<style>
    ul li {
        list-style: none;
    }

    div.ms-options ul {
        display: contents;
    }

    /*.ms-options-wrap > .ms-options > ul input[type="checkbox"] {
        display: none;
    }
    .ms-options-wrap > .ms-options > ul label {
            padding-left: 15px;
    }*/
</style>
<style>
    body {
        overflow-y: scroll;
    }

    .row {
        margin-bottom: 10px;
    }

    hr {
        margin-top: 12px;
        margin-bottom: 12px;
    }

    .form-inline div select,
    .form-inline div input {
        padding: 6px 12px !important;
        font-size: 14px;
    }

    .form-inline>div>label {
        float: left;
        font-weight: 600;
        font-size: 14px;
    }

    .form-inline>div>span {
        font-size: 14px;
    }

    .form-inline span {
        font-size: 14px;
    }

    .form-inline div>select {
        width: 100% !important;
    }

    .form-inline label {
        justify-content: left;
        font-weight: 600;
        font-size: 14px;
    }

    .form-inline input[type="text"] {
        /* width: 27% !important; */
        /* margin-left: 12px; */
        margin-right: 5px;
        padding: 6px 12px !important;
        font-size: 14px !important;
    }

    .form-inline input[type="date"] {
        /* width: 27% !important; */
        margin-left: 12px;
        margin-right: 5px;
        padding: 6px 12px !important;
        font-size: 14px !important;
    }

    #selectHeight select,
    #selectAge select {
        width: 40% !important;
    }

    @media screen and (max-width: 992px) {

        #selectHeight select,
        #selectAge select {
            width: 100% !important;
        }
    }



    .ms-options-wrap>button:focus,
    .ms-options-wrap>button {
        position: relative;
        width: 100%;
        text-align: left;
        border: 1px solid #ced4da;
        background-color: #fff;
        padding: 6px 12px !important;
        font-size: 14px;
        color: #495057;
        outline: none;
        white-space: nowrap;
        border-radius: .25rem;
    }

    .ms-options-wrap>button:after {
        content: ' ';
        height: 0px;
        position: absolute;
        top: 50%;
        right: 5px;
        width: 0;
        border: 4px solid rgba(0, 0, 0, 0);
        border-top-color: #495057;
        margin-top: -3px;
    }

    .ms-options-wrap>.ms-options>ul label {
        padding: 4px 12px !important;
    }

    .ms-options-wrap>.ms-options>ul li.selected label,
    .ms-options-wrap>.ms-options>ul label:hover {
        background-color: #007bff !important;
        color: #ffffff !important;
    }

    .ms-options {
        max-height: auto !important;
        min-height: auto !important;
    }
        .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #FFE4C4 !important;
    color: white;
}

    .space {
        margin-bottom: 10px;
    }

    .vline {
        border-left: 2px solid #ccc;
        min-height: 400px;
        margin-left: -6px;
        margin-bottom: 10px;
    }

    .tab-wrap {
        -webkit-transition: 0.3s box-shadow ease;
        transition: 0.3s box-shadow ease;
        border-radius: 6px;
        max-width: 100%;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        position: relative;
        list-style: none;
        background-color: #fff;
    }

    .tab {
        display: none;
    }

    .tab:checked:nth-of-type(1)~.tab__content:nth-of-type(1) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(2)~.tab__content:nth-of-type(2) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(3)~.tab__content:nth-of-type(3) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(4)~.tab__content:nth-of-type(4) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:checked:nth-of-type(5)~.tab__content:nth-of-type(5) {
        opacity: 1;
        -webkit-transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s -webkit-transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease;
        transition: 0.5s opacity ease-in, 0.8s transform ease, 0.8s -webkit-transform ease;
        position: relative;
        top: 0;
        z-index: 100;
        -webkit-transform: translateY(0px);
        transform: translateY(0px);
        text-shadow: 0 0 0;
    }

    .tab:first-of-type:not(:last-of-type)+label {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .tab:not(:first-of-type):not(:last-of-type)+label {
        border-radius: 0;
    }

    .tab:last-of-type:not(:first-of-type)+label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
    }

    .tab:checked+label {
        background-color: #ccc8c8;
        box-shadow: 0 -1px 0 #ccc8c8 inset;
        cursor: default;
        font-weight: 700;
        border-radius: 0;
        border-bottom: 1px solid #f5b308;
    }

    .tab:checked+label:hover {
        box-shadow: 0 -1px 0 #f5b308 inset;
        background-color: #ccc8c8;
        border-bottom: 1px solid #f5b308;
    }

    .tab+label {
        box-shadow: 0 -1px 0 #eee inset;
        border-radius: 0;
        cursor: pointer;
        display: block;
        text-decoration: none;
        color: #333;
        -webkit-box-flex: 3;
        -ms-flex-positive: 3;
        flex-grow: 3;
        text-align: center;
        background-color: #f2f2f2;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        text-align: center;
        -webkit-transition: 0.3s background-color ease, 0.3s box-shadow ease;
        transition: 0.3s background-color ease, 0.3s box-shadow ease;
        height: 50px;
        box-sizing: border-box;
        padding: 15px;
    }

    .tab+label:hover {
        background-color: #f9f9f9;
        box-shadow: 0 1px 0 #f4f4f4 inset;
    }

    .tab__content {
        padding: 10px 25px;
        background-color: transparent;
        position: absolute;
        width: 100%;
        z-index: -1;
        opacity: 0;
        left: 0;
        -webkit-transform: translateY(-3px);
        transform: translateY(-3px);
        border-radius: 6px;
    }

    @media screen and (min-width: 767px) {
        .quick_search {
            width: 50%;
        }
    }

    [type=reset] {
        color: #fff !important;
        background: #716b6b;
        text-decoration: none;
        height: 40px !important;
    }

    label {
        color: #07A0C3 !important;
        /* text-wrap: nowrap; */

    }

    ul,
    li {
        border-color: #07A0C3 !important;
        color: #07A0C3 !important;
    }

    select {
        border-color: #07A0C3 !important;
        color: #07A0C3 !important;
    }
    .select2-search__field{
        width : 200px !important
    }
</style>
<div class="row">
    <div class="col-md-12">
        <div class="new-side-content">
            <div class="card">

                <div class="card-header">
                    <button href="#display_form" class="btn" data-toggle="collapse"> Profile Search</button>
                </div>
                <div class="tab-wrap">
                    <!-- active tab on page load gets checked attribute -->
                    <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
                    <label for="tab1" id="advanced_tab">Advanced Search</label>

                    <input type="radio" id="tab2" name="tabGroup1" class="tab">
                    <label for="tab2" id="quick_tab">Quick Search</label>

                    <input type="radio" id="tab3" name="tabGroup1" class="tab">
                    <label for="tab3" id="recomend_tab">Recommended Search</label>

                    <input type="radio" id="tab4" name="tabGroup1" class="tab">
                    <label for="tab4" id="new_search_tab">My Profiles</label>

                    <div class="tab__content">
                        <div class="card-body" id="display_form bg">
                            <div class="d-flex justify-content-center">
                                <div class="container">
                                    <form id="formSearch" class="form-horizontal" method="POST" target="_blank"
                                        action="<?php echo site_url(); ?>admin/admin_search/ajaxProfileSearchResult?searchtype=advanced">
                                        <div class="row">
                                            <div class="col-md-6 form-inline" style="align-items: flex-start;">
                                                <div class="row">
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>GENDER</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="radio" name="gender" value="female" <?php if ((!empty($_SESSION['gender']) && $_SESSION['gender'] == "female") || empty($_SESSION['gender']))
                                                                echo 'checked'; ?>><span>
                                                                Bride</span>
                                                            <input type="radio" name="gender" value="male" <?php if (!empty($_SESSION['gender']) && $_SESSION['gender'] == "male")
                                                                echo 'checked'; ?>><span>
                                                                Groom</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>AGE </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7" id="selectAge">
                                                            <select name="age_from" id="age_from"
                                                                class="form-control colorChange">
                                                                <option selected value="" label="Select Age">Select Age
                                                                </option>
                                                                <option value="18" label="18" <?php if ((!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "18") || empty($_SESSION['agefrom']))
                                                                    echo 'selected' ?>>18
                                                                    </option>
                                                                    <option value="19" label="19" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "19")
                                                                    echo 'selected' ?>>19
                                                                    </option>
                                                                    <option value="20" label="20" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "20")
                                                                    echo 'selected' ?>>20
                                                                    </option>
                                                                    <option value="21" label="21" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "21")
                                                                    echo 'selected' ?>>21
                                                                    </option>
                                                                    <option value="22" label="22" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "22")
                                                                    echo 'selected' ?>>22
                                                                    </option>
                                                                    <option value="23" label="23" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "23")
                                                                    echo 'selected' ?>>23
                                                                    </option>
                                                                    <option value="24" label="24" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "24")
                                                                    echo 'selected' ?>>24
                                                                    </option>
                                                                    <option value="25" label="25" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "25")
                                                                    echo 'selected' ?>>25
                                                                    </option>
                                                                    <option value="26" label="26" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "26")
                                                                    echo 'selected' ?>>26
                                                                    </option>
                                                                    <option value="27" label="27" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "27")
                                                                    echo 'selected' ?>>27
                                                                    </option>
                                                                    <option value="28" label="28" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "28")
                                                                    echo 'selected' ?>>28
                                                                    </option>
                                                                    <option value="29" label="29" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "29")
                                                                    echo 'selected' ?>>29
                                                                    </option>
                                                                    <option value="30" label="30" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "30")
                                                                    echo 'selected' ?>>30
                                                                    </option>
                                                                    <option value="31" label="31" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "31")
                                                                    echo 'selected' ?>>31
                                                                    </option>
                                                                    <option value="32" label="32" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "32")
                                                                    echo 'selected' ?>>32
                                                                    </option>
                                                                    <option value="33" label="33" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "33")
                                                                    echo 'selected' ?>>33
                                                                    </option>
                                                                    <option value="34" label="34" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "34")
                                                                    echo 'selected' ?>>34
                                                                    </option>
                                                                    <option value="35" label="35" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "35")
                                                                    echo 'selected' ?>>35
                                                                    </option>
                                                                    <option value="36" label="36" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "36")
                                                                    echo 'selected' ?>>36
                                                                    </option>
                                                                    <option value="37" label="37" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "37")
                                                                    echo 'selected' ?>>37
                                                                    </option>
                                                                    <option value="38" label="38" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "38")
                                                                    echo 'selected' ?>>38
                                                                    </option>
                                                                    <option value="39" label="39" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "39")
                                                                    echo 'selected' ?>>39
                                                                    </option>
                                                                    <option value="40" label="40" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "40")
                                                                    echo 'selected' ?>>40
                                                                    </option>
                                                                    <option value="41" label="41" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "41")
                                                                    echo 'selected' ?>>41
                                                                    </option>
                                                                    <option value="42" label="42" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "42")
                                                                    echo 'selected' ?>>42
                                                                    </option>
                                                                    <option value="43" label="43" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "43")
                                                                    echo 'selected' ?>>43
                                                                    </option>
                                                                    <option value="44" label="44" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "44")
                                                                    echo 'selected' ?>>44
                                                                    </option>
                                                                    <option value="45" label="45" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "45")
                                                                    echo 'selected' ?>>45
                                                                    </option>
                                                                    <option value="46" label="46" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "46")
                                                                    echo 'selected' ?>>46
                                                                    </option>
                                                                    <option value="47" label="47" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "47")
                                                                    echo 'selected' ?>>47
                                                                    </option>
                                                                    <option value="48" label="48" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "48")
                                                                    echo 'selected' ?>>48
                                                                    </option>
                                                                    <option value="49" label="49" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "49")
                                                                    echo 'selected' ?>>49
                                                                    </option>
                                                                    <option value="50" label="50" <?php if (!empty($_SESSION['agefrom']) && $_SESSION['agefrom'] == "50")
                                                                    echo 'selected' ?>>50
                                                                    </option>
                                                                </select>
                                                                <span>TO</span>
                                                                <select name="age_to" id="age_to"
                                                                    class="form-control colorChange">
                                                                    <option selected value="" label="Select Age">Select Age
                                                                    </option>
                                                                    <option value="18" label="18" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "18")
                                                                    echo 'selected' ?>>18
                                                                    </option>
                                                                    <option value="19" label="19" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "19")
                                                                    echo 'selected' ?>>19
                                                                    </option>
                                                                    <option value="20" label="20" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "20")
                                                                    echo 'selected' ?>>20
                                                                    </option>
                                                                    <option value="21" label="21" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "21")
                                                                    echo 'selected' ?>>21
                                                                    </option>
                                                                    <option value="22" label="22" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "22")
                                                                    echo 'selected' ?>>22
                                                                    </option>
                                                                    <option value="23" label="23" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "23")
                                                                    echo 'selected' ?>>23
                                                                    </option>
                                                                    <option value="24" label="24" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "24")
                                                                    echo 'selected' ?>>24
                                                                    </option>
                                                                    <option value="25" label="25" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "25")
                                                                    echo 'selected' ?>>25
                                                                    </option>
                                                                    <option value="26" label="26" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "26")
                                                                    echo 'selected' ?>>26
                                                                    </option>
                                                                    <option value="27" label="27" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "27")
                                                                    echo 'selected' ?>>27
                                                                    </option>
                                                                    <option value="28" label="28" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "28")
                                                                    echo 'selected' ?>>28
                                                                    </option>
                                                                    <option value="29" label="29" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "29")
                                                                    echo 'selected' ?>>29
                                                                    </option>
                                                                    <option value="30" label="30" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "30")
                                                                    echo 'selected' ?>>30
                                                                    </option>
                                                                    <option value="31" label="31" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "31")
                                                                    echo 'selected' ?>>31
                                                                    </option>
                                                                    <option value="32" label="32" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "32")
                                                                    echo 'selected' ?>>32
                                                                    </option>
                                                                    <option value="33" label="33" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "33")
                                                                    echo 'selected' ?>>33
                                                                    </option>
                                                                    <option value="34" label="34" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "34")
                                                                    echo 'selected' ?>>34
                                                                    </option>
                                                                    <option value="35" label="35" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "35")
                                                                    echo 'selected' ?>>35
                                                                    </option>
                                                                    <option value="36" label="36" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "36")
                                                                    echo 'selected' ?>>36
                                                                    </option>
                                                                    <option value="37" label="37" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "37")
                                                                    echo 'selected' ?>>37
                                                                    </option>
                                                                    <option value="38" label="38" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "38")
                                                                    echo 'selected' ?>>38
                                                                    </option>
                                                                    <option value="39" label="39" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "39")
                                                                    echo 'selected' ?>>39
                                                                    </option>
                                                                    <option value="40" label="40" <?php if ((!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "40") || empty($_SESSION['ageto']))
                                                                    echo 'selected' ?>>40
                                                                    </option>
                                                                    <option value="41" label="41" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "41")
                                                                    echo 'selected' ?>>41
                                                                    </option>
                                                                    <option value="42" label="42" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "42")
                                                                    echo 'selected' ?>>42
                                                                    </option>
                                                                    <option value="43" label="43" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "43")
                                                                    echo 'selected' ?>>43
                                                                    </option>
                                                                    <option value="44" label="44" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "44")
                                                                    echo 'selected' ?>>44
                                                                    </option>
                                                                    <option value="45" label="45" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "45")
                                                                    echo 'selected' ?>>45
                                                                    </option>
                                                                    <option value="46" label="46" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "46")
                                                                    echo 'selected' ?>>46
                                                                    </option>
                                                                    <option value="47" label="47" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "47")
                                                                    echo 'selected' ?>>47
                                                                    </option>
                                                                    <option value="48" label="48" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "48")
                                                                    echo 'selected' ?>>48
                                                                    </option>
                                                                    <option value="49" label="49" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "49")
                                                                    echo 'selected' ?>>49
                                                                    </option>
                                                                    <option value="50" label="50" <?php if (!empty($_SESSION['ageto']) && $_SESSION['ageto'] == "50")
                                                                    echo 'selected' ?>>50
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12 form-inline space">
                                                            <div class="col-md-3">
                                                                <label>HEIGHT</label>
                                                            </div>
                                                            <div class="col-md-1">
                                                                <label>:</label>
                                                            </div>
                                                            <div class="col-md-7" id="selectHeight">
                                                                <select name="height_from" id="height_from"
                                                                    class="form-control height colorChange">
                                                                    <option value="">Select Height</option>
                                                                <?php foreach ($heights as $value) { ?>
                                                                    <option
                                                                        value="<?php echo stripcslashes(str_replace("\n", "", $value['height_in_cm'])); ?>"
                                                                        <?php if ((!empty($_SESSION['heightfrom']) && $_SESSION['heightfrom'] == stripcslashes(str_replace("\n", "", $value['height']))) || (empty($_SESSION['heightfrom']) && $value['height'] == "5.00"))
                                                                            echo 'selected' ?>>
                                                                        <?php echo stripcslashes($value['height']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                            <span>TO</span>
                                                            <select name="height_to" id="height_to"
                                                                class="form-control colorChange">
                                                                <option selected value="" label="Select Height">Select
                                                                    Height</option>
                                                                <?php foreach ($heights as $value) { ?>
                                                                    <option
                                                                        value="<?php echo stripcslashes(str_replace("\n", "", $value['height_in_cm'])); ?>"
                                                                        <?php if ((!empty($_SESSION['heightto']) && $_SESSION['heightto'] == stripcslashes(str_replace("\n", "", $value['height']))) || (empty($_SESSION['heightto']) && $value['height'] == "6.5"))
                                                                            echo 'selected' ?>>
                                                                        <?php echo stripcslashes($value['height']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>RELIGION </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="religion[]" id="religion"
                                                                style="width: 200px;">
                                                                <?php foreach ($religions as $value) { ?>
                                                                    <option value="<?php echo $value['religion']; ?>" <?php if ((isset($_SESSION['religion']) && in_array(stripcslashes($value['religion']), $_SESSION['religion'])) || (empty($_SESSION['religion']) && $value['religion'] == "Hindu"))
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['religion']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <script>

                                                        $(document).ready(function () {
                                                            $('.js-example-basic-multiple').select2();
                                                        });
                                                    </script>


                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Mother Tongue </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="mother_tongue[]" id="mother_tongue"
                                                                style="width: 200px;">
                                                                <?php foreach ($mothertounges as $value) { ?>
                                                                    <option value="<?php echo $value['mothertounge']; ?>"
                                                                        <?php if ((isset($_SESSION['mothertounge']) && in_array(stripcslashes($value['mothertounge']), $_SESSION['mothertounge'])) || (empty($_SESSION['mothertounge']) && $value['mothertounge'] == "Telugu"))
                                                                            echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['mothertounge']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>CASTE </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="caste[]" id="caste"
                                                                style="width: 200px;">
                                                                <?php foreach ($castes as $value) { ?>
                                                                    <option value="<?php echo $value['caste']; ?>" <?php if ((isset($_SESSION['caste']) && in_array(stripcslashes($value['caste']), $_SESSION['caste'])) || (empty($_SESSION['caste']) && $value['caste'] == "Kamma"))
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['caste']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>EDUCATION</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="education_level[]" id="education_level"
                                                                style="width: 200px;">
                                                                <?php foreach ($educations as $value) { ?>
                                                                    <option value="<?php echo $value['heighsteducation']; ?>"
                                                                        <?php if ((isset($_SESSION['education']) && in_array(stripcslashes($value['heighsteducation']), $_SESSION['education'])) /*|| (empty($_SESSION['education']) && $value['heighsteducation'] == "Bachelors in Engineering")*/)
                                                                            echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['heighsteducation']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                       <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>IIT/IIM</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="specialization[]" id="specialization"
                                                                style="width: 200px;">
                                                                <option value="">Select Specialization</option>
                                                                <?php foreach ($special as $value) { ?>
                                                                    <option value="<?php echo $value['specialization']; ?>"
                                                                        <?php if ((isset($_SESSION['specialization']) && in_array(stripcslashes($value['specialization']), $_SESSION['specialization'])) )
                                                                            echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['specialization']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>PROFESSION </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="profession[]" id="profession"
                                                                style="width: 200px;">
                                                                <?php foreach ($professions as $value) { ?>
                                                                    <option value="<?php echo $value['profession']; ?>" <?php if ((isset($_SESSION['profession']) && in_array(stripcslashes($value['profession']), $_SESSION['profession'])) /*|| (empty($_SESSION['profession']) && $value['profession'] == "Software Developer")*/)
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['profession']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Country Living In </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple" onchange="getstates(this.value)"
                                                                multiple="multiple" name="country[]" id="country"
                                                                style="width: 200px;">
                                                                <?php foreach ($countries as $value) { ?>
                                                                    <option value="<?php echo $value['country']; ?>" <?php if ((isset($_SESSION['country']) && in_array(stripcslashes($value['country']), $_SESSION['country'])) || (empty($_SESSION['country']) && $value['country'] == "India"))
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['country']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>

                                                        </div>
                                                    </div>
                                                         <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">

                                                            <label>State  </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                     <select class="form-control" id="workState" name="workState" class="js-example-basic-multiple"      onchange="getdistrict(this.value)">
                                                     <option value="">Select State</option>
                                                     </select>
                                                     <span id="state_ids" class="text-danger font-weight-bold"></span>
                                                                </div>
                                                      </div>
                                                      
                                                       <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>City </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">

                                                        <input type="text" class="form-control"
                                                                name="city_new" id="city_new"
                                                                value="<?php if (!empty($_SESSION['city_new']))
                                                                    echo $_SESSION['city_new']; ?>">                                                       
                                                        </div>

                                                    </div>
                                                      
                                                      
                                                      <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Visa Type </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select class="js-example-basic-multiple"
                                                                multiple="multiple" name="visatype[]" id="visatype"
                                                                style="width: 200px;">
                                                                <option value="">Select Visa Type</option>
                                                                <option value="Student Visa">Student Visa</option>
                                                                <option value="Work Permit">Work Permit</option>
                                                                <option value="Temporary Vissa">Temporary Visa</option>
                                                                <option value="Citizen">Citizen</option>
                                                                 <option value="Permanent Resident">Permanent Resident</option>
                                                                <option value="Green Card">Green Card</option>
                                                                <option value="Green Card(Process)">Green Card(Process)</option>
                                                                <option value="H1b">H1b</option>
                                                                <option value="H1b i140 Approved">H1b i140 Approved</option>
                                                                <option value="L1 Visa">L1 Visa</option>
                                                                <option value="F1">F1</option>
                                                                <option value="O1">O1</option>
                                                                 <option value="Opt">Opt</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Marital Status </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select multiple="" name="material_status[]"
                                                                id="material_status" class="js-example-basic-multiple">
                                                                <option value="never_married" <?php if ((isset($_SESSION['maritalstatus']) && in_array('never_married', $_SESSION['maritalstatus'])) || (empty($_SESSION['maritalstatus'])))
                                                                    echo ' selected'; ?>>Never Married</option>
                                                                <option value="divorced" <?php if (isset($_SESSION['maritalstatus']) && in_array('divorced', $_SESSION['maritalstatus']))
                                                                    echo ' selected'; ?>>Divorced</option>
                                                                <option value="widow-widower" <?php if (isset($_SESSION['maritalstatus']) && in_array('widow-widower', $_SESSION['maritalstatus']))
                                                                    echo ' selected'; ?>>Widow / Widower</option>
                                                                <option value="separated" <?php if (isset($_SESSION['maritalstatus']) && in_array('separated', $_SESSION['maritalstatus']))
                                                                    echo ' selected'; ?>>Separated</option>
                                                                <option value="annulled" <?php if (isset($_SESSION['maritalstatus']) && in_array('annulled', $_SESSION['maritalstatus']))
                                                                    echo ' selected'; ?>>Annulled</option>
                                                            </select>
                                                        </div> 
                                                    </div>

                                                  
                                                </div>
                                            </div>
                                            <div class="vline"></div>



                                            <div class="col-md-6 form-inline">
                                                <div class="row">

                                                <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Property From </label>

                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7"><input type="text" class="form-control"
                                                                name="propertyfor" id="propertyfor"
                                                                value="<?php if (!empty($_SESSION['propertyfor']))
                                                                    echo $_SESSION['propertyfor']; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3"><label>Property to</label></div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7"> <input type="text" class="form-control"
                                                                name="propertyto" id="propertyto"
                                                                value="<?php if (!empty($_SESSION['propertyto']))
                                                                    echo $_SESSION['propertyto']; ?>">
                                                        </div>
                                                    </div>
<!-- 
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Property From </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-3">
                                             <input type="text" class="form-control" name="property_for"
                                                       id="property_for"
                                                value="<?php if (!empty($_SESSION['property_for']))
                                                echo $_SESSION['property_for']; ?>">
                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>To </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="text" class="form-control" name="property_to"
                                                                id="property_to"
                                                                value="<?php if (!empty($_SESSION['property_to']))
                                                                    echo $_SESSION['property_to']; ?>">
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Currency </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7 currency">
                                                            <select multiple="" name="currency[]" id="currency"
                                                                class="js-example-basic-multiple">
                                                                <option value="Rs" <?php if (!empty($_SESSION['currency']) && in_array("Rs", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>India</option>
                                                                <option value="US" <?php if (!empty($_SESSION['currency']) && in_array("US", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>USA</option>
                                                                <option value="GBP" <?php if (!empty($_SESSION['currency']) && in_array("GBP", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>UK</option>
                                                                <option value="CAD" <?php if (!empty($_SESSION['currency']) && in_array("CAD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Canada</option>
                                                                <option value="AUD" <?php if (!empty($_SESSION['currency']) && in_array("AUD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Australia</option>
                                                                <option value="SGD" <?php if (!empty($_SESSION['currency']) && in_array("SGD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Singapore</option>
                                                                <option value="SAR" <?php if (!empty($_SESSION['currency']) && in_array("SAR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Saudi Arabia</option>
                                                                <option value="ZAR" <?php if (!empty($_SESSION['currency']) && in_array("ZAR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>South Africa</option>
                                                                <option value="KWD" <?php if (!empty($_SESSION['currency']) && in_array("KWD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Kuwait</option>
                                                                <option value="PKR" <?php if (!empty($_SESSION['currency']) && in_array("PKR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Pakistan</option>
                                                                <option value="AFA" <?php if (!empty($_SESSION['currency']) && in_array("AFA", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Afghanistan</option>
                                                                <option value="ALL" <?php if (!empty($_SESSION['currency']) && in_array("ALL", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Albania</option>
                                                                <option value="DZD" <?php if (!empty($_SESSION['currency']) && in_array("DZD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Algeria</option>
                                                                <option value="SAR" <?php if (!empty($_SESSION['currency']) && in_array("SAR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Anguiila</option>
                                                                <option value="XCD" <?php if (!empty($_SESSION['currency']) && in_array("XCD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>South Africa</option>
                                                                <option value="XCD" <?php if (!empty($_SESSION['currency']) && in_array("XCD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Antarctica</option>
                                                                <option value="AMD" <?php if (!empty($_SESSION['currency']) && in_array("AMD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Armenia</option>
                                                                <option value="AWG" <?php if (!empty($_SESSION['currency']) && in_array("AWG", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Aruba</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Austria</option>
                                                                <option value="AZM" <?php if (!empty($_SESSION['currency']) && in_array("AZM", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Azerbaijan</option>
                                                                <option value="BHD" <?php if (!empty($_SESSION['currency']) && in_array("BHD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Bahrain</option>
                                                                <option value="BDT" <?php if (!empty($_SESSION['currency']) && in_array("BDT", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Bangladesh</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Belgium</option>
                                                                <option value="BWP" <?php if (!empty($_SESSION['currency']) && in_array("BWP", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Botswana</option>
                                                                <option value="BRL" <?php if (!empty($_SESSION['currency']) && in_array("BRL", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Brazil</option>
                                                                <option value="USD" <?php if (!empty($_SESSION['currency']) && in_array("USD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>British Indian Ocean Territory
                                                                </option>
                                                                <option value="BND" <?php if (!empty($_SESSION['currency']) && in_array("BND", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Brunei</option>
                                                                <option value="CNY" <?php if (!empty($_SESSION['currency']) && in_array("CNY", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>China</option>
                                                                <option value="XAF" <?php if (!empty($_SESSION['currency']) && in_array("XAF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Congo</option>
                                                                <option value="CZK" <?php if (!empty($_SESSION['currency']) && in_array("CZK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Czech Republic</option>
                                                                <option value="DKK" <?php if (!empty($_SESSION['currency']) && in_array("DKK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Denmark</option>
                                                                <option value="ERN" <?php if (!empty($_SESSION['currency']) && in_array("ERN", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Eritrea</option>
                                                                <option value="ETB" <?php if (!empty($_SESSION['currency']) && in_array("ETB", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Ethiopia</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Finland</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>France</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Germany</option>
                                                                <option value="GHC" <?php if (!empty($_SESSION['currency']) && in_array("GHC", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Ghana</option>
                                                                <option value="XCD" <?php if (!empty($_SESSION['currency']) && in_array("XCD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Grenada</option>
                                                                <option value="HKD" <?php if (!empty($_SESSION['currency']) && in_array("HKD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Hong Kong</option>
                                                                <option value="HUF" <?php if (!empty($_SESSION['currency']) && in_array("HUF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Hungary</option>
                                                                <option value="ISK" <?php if (!empty($_SESSION['currency']) && in_array("ISK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Iceland</option>
                                                                <option value="IDR" <?php if (!empty($_SESSION['currency']) && in_array("IDR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Indonesia</option>
                                                                <option value="IQD" <?php if (!empty($_SESSION['currency']) && in_array("IQD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Iraq</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Ireland</option>
                                                                <option value="ILS" <?php if (!empty($_SESSION['currency']) && in_array("ILS", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Israel</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Italy</option>
                                                                <option value="XOF" <?php if (!empty($_SESSION['currency']) && in_array("XOF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Ivory Coast</option>
                                                                <option value="JMD" <?php if (!empty($_SESSION['currency']) && in_array("JMD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Jamaica</option>
                                                                <option value="JPY" <?php if (!empty($_SESSION['currency']) && in_array("JPY", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Japan</option>
                                                                <option value="JOD" <?php if (!empty($_SESSION['currency']) && in_array("JOD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Jordan</option>
                                                                <option value="KZT" <?php if (!empty($_SESSION['currency']) && in_array("KZT", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Kazakstan</option>
                                                                <option value="KES" <?php if (!empty($_SESSION['currency']) && in_array("KES", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Kenya</option>
                                                                <option value="KRW" <?php if (!empty($_SESSION['currency']) && in_array("KRW", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>South Korea</option>
                                                                <option value="KPW" <?php if (!empty($_SESSION['currency']) && in_array("KPW", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>North Korea</option>
                                                                <option value="LNP" <?php if (!empty($_SESSION['currency']) && in_array("LNP", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Lebanon</option>
                                                                <option value="LRD" <?php if (!empty($_SESSION['currency']) && in_array("LRD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Liberia</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Luxembourg</option>
                                                                <option value="MYR" <?php if (!empty($_SESSION['currency']) && in_array("MYR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Malaysia</option>
                                                                <option value="MVR" <?php if (!empty($_SESSION['currency']) && in_array("MVR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Maldives</option>
                                                                <option value="LRD" <?php if (!empty($_SESSION['currency']) && in_array("LRD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Liberia</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Luxembourg</option>
                                                                <option value="MYR" <?php if (!empty($_SESSION['currency']) && in_array("MYR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Malaysia</option>
                                                                <option value="MVR" <?php if (!empty($_SESSION['currency']) && in_array("MVR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Maldives</option>
                                                                <option value="XOF" <?php if (!empty($_SESSION['currency']) && in_array("XOF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Mali</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Martinique</option>
                                                                <option value="MUR" <?php if (!empty($_SESSION['currency']) && in_array("MUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Martinique</option>
                                                                <option value="MXN" <?php if (!empty($_SESSION['currency']) && in_array("MXN", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Mexico</option>
                                                                <option value="NPR" <?php if (!empty($_SESSION['currency']) && in_array("NPR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Nepal</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Netherlands</option>
                                                                <option value="NZD" <?php if (!empty($_SESSION['currency']) && in_array("NZD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>New Zealand</option>
                                                                <option value="NGN" <?php if (!empty($_SESSION['currency']) && in_array("NGN", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Nigeria</option>
                                                                <option value="NOK" <?php if (!empty($_SESSION['currency']) && in_array("NOK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Norway</option>
                                                                <option value="OMR" <?php if (!empty($_SESSION['currency']) && in_array("OMR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Oman</option>
                                                                <option value="PHP" <?php if (!empty($_SESSION['currency']) && in_array("PHP", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Philippines</option>
                                                                <option value="PLZ" <?php if (!empty($_SESSION['currency']) && in_array("PLZ", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Poland</option>
                                                                <option value="USD" <?php if (!empty($_SESSION['currency']) && in_array("USD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Puerto Rico</option>
                                                                <option value="QAR" <?php if (!empty($_SESSION['currency']) && in_array("QAR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Qatar</option>
                                                                <option value="RUR" <?php if (!empty($_SESSION['currency']) && in_array("RUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Russia</option>
                                                                <option value="XOF" <?php if (!empty($_SESSION['currency']) && in_array("XOF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Senegal</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Spain</option>
                                                                <option value="SDD" <?php if (!empty($_SESSION['currency']) && in_array("SDD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Sudan</option>
                                                                <option value="SZL" <?php if (!empty($_SESSION['currency']) && in_array("SZL", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Swaziland</option>
                                                                <option value="SEK" <?php if (!empty($_SESSION['currency']) && in_array("SEK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Sweden</option>
                                                                <option value="CHF" <?php if (!empty($_SESSION['currency']) && in_array("CHF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Switzerland</option>
                                                                <option value="RUR" <?php if (!empty($_SESSION['currency']) && in_array("RUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Russia</option>
                                                                <option value="XOF" <?php if (!empty($_SESSION['currency']) && in_array("XOF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Senegal</option>
                                                                <option value="EUR" <?php if (!empty($_SESSION['currency']) && in_array("EUR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Spain</option>
                                                                <option value="SDD" <?php if (!empty($_SESSION['currency']) && in_array("SDD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Sudan</option>
                                                                <option value="SZL" <?php if (!empty($_SESSION['currency']) && in_array("SZL", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Swaziland</option>
                                                                <option value="SEK" <?php if (!empty($_SESSION['currency']) && in_array("SEK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Sweden</option>
                                                                <option value="CHF" <?php if (!empty($_SESSION['currency']) && in_array("CHF", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Switzerland</option>
                                                                <option value="TWD" <?php if (!empty($_SESSION['currency']) && in_array("TWD", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Taiwan</option>
                                                                <option value="TZS" <?php if (!empty($_SESSION['currency']) && in_array("TZS", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Tanzania</option>
                                                                <option value="THB" <?php if (!empty($_SESSION['currency']) && in_array("THB", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Thailand</option>
                                                                <option value="TRL" <?php if (!empty($_SESSION['currency']) && in_array("TRL", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Turkey</option>
                                                                <option value="UGS" <?php if (!empty($_SESSION['currency']) && in_array("UGS", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Uganda</option>
                                                                <option value="NO" <?php if (!empty($_SESSION['currency']) && in_array("NO", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Ukraine</option>
                                                                <option value="AED" <?php if (!empty($_SESSION['currency']) && in_array("AED", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>United Arab Emirates</option>
                                                                <option value="VND" <?php if (!empty($_SESSION['currency']) && in_array("VND", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Vietnam</option>
                                                                <option value="ZMK" <?php if (!empty($_SESSION['currency']) && in_array("ZMK", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Zambia</option>
                                                                <option value="NotG" <?php if (!empty($_SESSION['currency']) && in_array("NotG", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Not Given</option>
                                                                <option value="OthR" <?php if (!empty($_SESSION['currency']) && in_array("OthR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Other</option>
                                                                <option value="LKR" <?php if (!empty($_SESSION['currency']) && in_array("LKR", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Srilanka</option>
                                                                <option value="BWI" <?php if (!empty($_SESSION['currency']) && in_array("BWI", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>West Indies</option>
                                                                <option value="Euro" <?php if (!empty($_SESSION['currency']) && in_array("Euro", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Europe</option>
                                                                <option value="CFA" <?php if (!empty($_SESSION['currency']) && in_array("CFA", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>WEST AFRICA</option>
                                                                <option value="Riel" <?php if (!empty($_SESSION['currency']) && in_array("Riel", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Cambodia</option>
                                                                <option value="RS" <?php if (!empty($_SESSION['currency']) && in_array("RS", $_SESSION['currency']))
                                                                    echo ' selected'; ?>>Seychelles</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Salary From </label>

                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7"><input type="text" class="form-control"
                                                                name="salaryfrom" id="salaryfrom"
                                                                value="<?php if (!empty($_SESSION['salaryfrom']))
                                                                    echo $_SESSION['salaryfrom']; ?>">
                                                        </div>

                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3"><label>To</label></div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7"> <input type="text" class="form-control"
                                                                name="salaryto" id="salaryto"
                                                                value="<?php if (!empty($_SESSION['salaryto']))
                                                                    echo $_SESSION['salaryto']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Parents District </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7 district">
                                                            <select multiple="" name="district[]" id="district"
                                                                class="js-example-basic-multiple">
                                                                <?php foreach ($district as $value) { ?>
                                                                    <option value="<?php echo $value['district']; ?>" <?php if (isset($_SESSION['district']) && in_array(stripcslashes($value['district']), $_SESSION['district']))
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['district']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Profile Owner </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7 employee">
                                                            <select multiple="" name="employee[]" id="employee"
                                                                class="js-example-basic-multiple">
                                                                <?php foreach ($employee as $value) { ?>
                                                                    <option value="<?php echo $value['id']; ?>" <?php if (isset($_SESSION['employee']) && in_array(stripcslashes($value['id']), $_SESSION['employee']))
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['username']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space">

                                                        <div class="col-md-3"><label>DOR From </label></div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>

                                                        <input type="date" class="form-control colorChange"
                                                            name="dorfrom" id="dorfrom"
                                                            value="<?php if (!empty($_SESSION['dorfrom']))
                                                                echo $_SESSION['dorfrom']; ?>">
                                                        
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                    <div class="col-md-3"><label>To</label></div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <input type="date" class="form-control colorChange" name="dorto"
                                                            id="dorto"
                                                            value="<?php if (!empty($_SESSION['dorto']))
                                                                echo $_SESSION['dorto']; ?>">
                                                    </div>
                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Member Ship Type</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="radio" name="payment" value="paid" <?php if (!empty($_SESSION['payment_type']) && $_SESSION['payment_type'] == "paid")
                                                                echo 'checked'; ?>><span> Paid</span>

                                                            <input type="radio" name="payment" value="free" <?php if (!empty($_SESSION['payment_type']) && $_SESSION['payment_type'] == "free")
                                                                echo 'checked'; ?>><span> Free</span>

                                                            <input type="radio" name="payment" value="both" <?php if ((!empty($_SESSION['payment_type']) && $_SESSION['payment_type'] == "both") || (empty($_SESSION['payment_type'])))
                                                                echo 'checked'; ?>><span> Both</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 form-inline space"
                                                        style="padding-bottom: 15px;">
                                                        <div class="col-md-3">
                                                            <label>Elite</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <input type="radio" name="elight" value="yes" <?php if (!empty($_SESSION['elight']) && $_SESSION['elight'] == "yes")
                                                                echo 'checked'; ?>><span>
                                                                Yes</span>
                                                                <input type="radio" name="elight" value="no" <?php if ((!empty($_SESSION['elight']) && $_SESSION['elight'] == "no")  || (empty($_SESSION['elight'])))
                                                                echo 'checked'; ?>><span>
                                                                No</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 form-inline space"
                                                        style="padding-bottom: 15px;">
                                                        <div class="col-md-3">
                                                            <label>Photos</label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7" style="display: contents !important;">
                                                            <input type="radio" name="photos" style="margin: 0 5px;"
                                                                value="yes" <?php if (!empty($_SESSION['photos']) && $_SESSION['photos'] == "yes")
                                                                    echo 'checked'; ?>><span>
                                                                Yes</span>
                                                            <input type="radio" name="photos" style="margin: 0 5px;"
                                                                value="no" <?php if (!empty($_SESSION['photos']) && $_SESSION['photos'] == "no")
                                                                    echo 'checked'; ?>><span>
                                                                No</span>
                                                            <input type="radio" name="photos" style="margin: 0 5px;"
                                                                value="both" <?php if ((!empty($_SESSION['photos']) && $_SESSION['photos'] == "both") || (empty($_SESSION['photos'])))
                                                                    echo 'checked'; ?>><span>
                                                                Both</span>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Star </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>

                                                        <div class="col-md-7">
                                                            <select multiple="" name="star[]" id="star1"
                                                                class="js-example-basic-multiple">
                                                                <?php foreach ($stars as $value) { ?>
                                                                    <option value="<?php echo $value['star']; ?>" <?php if (isset($_SESSION['star']) && in_array(stripcslashes($value['star']), $_SESSION['star']))
                                                                          echo ' selected'; ?>>
                                                                        <?php echo stripcslashes($value['star']); ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 form-inline space">
                                                        <div class="col-md-3">
                                                            <label>Application Status </label>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <label>:</label>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <select multiple="" name="application_status[]"
                                                                id="profession1" class="js-example-basic-multiple">
                                                                <option value="1" selected="selected">Active</option>
                                                                <option value="2">Deleted</option>
                                                                <option value="3">Settled</option>
                                                                <option value="4">Inactive</option>
                                                            </select>
                                                        </div>
                                                   
                                                    </div>
                                                   
                                                    
                                                   
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="col-md-12">
                                                <button type="submit" class="btn" name="submit" id="submit"
                                                    style="margin:0 0 0 45%; color: #07A0C3; border-color:#07A0C3;">Search</button>&nbsp;
                                                <button type="Reset" class="btn " id="Reset" style="background-color: #07A0C3">Reset</button>
                                            </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

  <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.0/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
    
        // // Initialize Select2
        $('#profession').select2();

    
        $('#Reset').click(function() {

            $('radio').prop('checked', false);
            $('input').val('');
            $('input').val('');
            $('option').attr('selected', false);			
            // $('select[multiple]').multiselect('reload');
            $('.colorChange').trigger("change");
            // location.reload();
            
            // $('#profession1').val(null).trigger('change');
            // $('#star1').val(null).trigger('change');
            // $('#religion').val(null).trigger('change');
            // $('#mother_tongue').val(null).trigger('change');
            // $('#caste').val(null).trigger('change');
            // $('#education_level').val(null).trigger('change');
            // $('#profession').val(null).trigger('change');
            // $('#country').val(null).trigger('change');
            // $('#material_status').val(null).trigger('change');
            // $('#propertyfor').val(null).trigger('change');
            // $('#propertyto').val(null).trigger('change');
            // $('#currency').val(null).trigger('change');
            // $('#salaryfrom').val(null).trigger('change');
            // $('#salaryto').val(null).trigger('change');
            // $('#district').val(null).trigger('change');
            // $('#employee').val(null).trigger('change');
            // $('#dorfrom').val(null).trigger('change');
            // $('#dorto').val(null).trigger('change');
             $('#city_new').val('');

        });
    });
</script>



                <div class="tab__content">
                    <div class="card-body" id="display_form bg">
                        <div class="d-flex justify-content-center">
                            <div class="container quick_search">
                                <form id="quickSearch" class="form-horizontal quick_search_form" method="POST"
                                    action="<?php echo site_url(); ?>admin/admin_search/ajaxProfileSearchResult?searchtype=quick">
                                    <div class="row">
                                        <div class="col-md-12 form-inline">
                                            <div class="row">
                                                <div class="col-md-12 form-inline space">
                                                    <div class="col-md-3">
                                                        <label>Profile Id</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="profile_id" id="profile_id"
                                                            class="form-control"
                                                            style="width: 100% !important;margin-left:0;"
                                                            value="<?php echo $_SESSION['profile_id'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-inline space">
                                                    <div class="col-md-3">
                                                        <label>Surname</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="surname" id="surname"
                                                            class="form-control"
                                                            style="width: 100% !important;margin-left:0;"
                                                            value="<?php echo $_SESSION['surname'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-inline space">
                                                    <div class="col-md-3">
                                                        <label>Name</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="name" id="name" class="form-control"
                                                            style="width: 100% !important;margin-left:0;"
                                                            value="<?php echo $_SESSION['name'] ?>" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-inline space">
                                                    <div class="col-md-3">
                                                        <label>Phone Number</label>
                                                    </div>
                                                    <div class="col-md-1">
                                                        <label>:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="phone_no" id="phone_no"
                                                            class="form-control"
                                                            style="width: 100% !important;margin-left:0;" value="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn " name="submit" id="submit"
                                                style="margin:0 0 0 45%; color: #07A0C3; border-color:#07A0C3;">Search</button>&nbsp;
                                            <input type="reset" class="btn  quick_reset" style="background-color: #07A0C3" id="quick_reset"
                                                value="Reset" />
                                        </div>

                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="tab__content">
                <div class="card-body" id="display_form bg">
                    <div class="d-flex justify-content-center">
                        <div class="container">
                            <form id="recomendSearch" class="form-horizontal" method="POST"
                                action="<?php echo site_url(); ?>admin/admin_search/ajaxProfileSearchResult?searchtype=recomend">
                                <div class="row">
                                    <div class="col-md-12 form-inline">
                                        <div class="row" style="width: 60%; display: block; margin: 0 auto;">
                                            <div class="col-md-12 form-inline space">
                                                <div class="col-md-3">
                                                    <label>Profile Id</label>
                                                </div>
                                                <div class="col-md-1">
                                                    <label>:</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="profile_id" id="profile_id"
                                                        class="form-control"
                                                        style="width: 100% !important;margin-left:0;"
                                                        value="<?php echo $_SESSION['profile_id'] ?>" />
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn " name="submit" id="submit"
                                            style="margin:0 0 0 45%; color: #07A0C3; border-color:#07A0C3;">Search</button>&nbsp;
                                        <button type="Reset" class="btn btn-default" id="Reset" style="background-color: #07A0C3">Reset</button>
                                    </div>

                                   

                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

     

        <div class="tab__content">
            <div class="card-body" id="display_form bg">
                <div class="d-flex justify-content-center">
                    <div class="container">
                        <form id="recomendSearch" class="form-horizontal" method="POST"
                            action="<?php echo site_url(); ?>admin/getSearchPageMyProfile">
                            <div class="row">
                                <div class="col-md-12 form-inline">
                                    <div class="row" style="width: 60%; display: block; margin: 0 auto;">
                                        <div class="col-md-12 form-inline space">
                                            <div class="col-md-3 col-sm-3">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-1 col-sm-1">
                                                <label>:</label>
                                            </div>
                                            <div class="col-md-8 col-sm-7">
                                                <input type="radio" name="gender" value="female" <?php if ((!empty($_SESSION['gender']) && $_SESSION['gender'] == "female") || empty($_SESSION['gender']))
                                                    echo 'checked'; ?>><span> Bride</span>
                                                <input type="radio" name="gender" value="male" <?php if (!empty($_SESSION['gender']) && $_SESSION['gender'] == "male")
                                                    echo 'checked'; ?>><span> Groom</span>
                                                <input type="radio" name="gender" value="both" <?php if (!empty($_SESSION['gender']) && $_SESSION['gender'] == "both")
                                                    echo 'checked'; ?>><span> Both</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-inline space">
                                            <div class="col-md-3">
                                                <label>Payment Status</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="radio" name="payment" value="paid"><span> Paid</span>
                                                <input type="radio" name="payment" value="free"><span> Unpaid</span>
                                                <input type="radio" name="payment" value="both"><span> Both</span>
                                            </div>
                                        </div>
                                        <div class="col-md-12 form-inline space">
                                            <div class="col-md-3">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-1">
                                                <label>:</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select multiple="" name="country[]" id="country"
                                                    class="multiselect form-control my-multi-select">
                                                    <?php foreach ($countries as $value) { ?>
                                                        <option value="<?php echo $value['country']; ?>" <?php if ((isset($_SESSION['country']) && in_array(stripcslashes($value['country']), $_SESSION['country'])) || (empty($_SESSION['country']) && $value['country'] == "India"))
                                                              echo ' selected'; ?>>
                                                            <?php echo stripcslashes($value['country']); ?>
                                                        </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn " name="getnewdsearch" id="submit"
                                        style="margin:0 0 0 45%; color: #07A0C3; border-color:#07A0C3;">Search</button>&nbsp;
                                    <button type="Reset" class="btn btn-default" id="Reset" style="background-color: #07A0C3">Reset</button>
                                </div>

                               

                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>



    </div>

</div>
</div>
</div>

<script> 

getstates = function(valu) {
    // alert(1);
      $.ajax({
        type: "POST",
        url: '<?php echo site_url(); ?>admin/ws/getstatesADM',
        data: "valu=" + valu,
        complete: function(data) {
          var op = data.responseText.trim();
          $("#workState").html(op);
        }
      });
    }
    getstates('<?php echo $primary_info['country']; ?>');



</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Find all dropdown toggle links
        var dropdownToggles = document.querySelectorAll('li > a[data-toggle="collapse"]');

        // Add a click event listener to each dropdown toggle link
        dropdownToggles.forEach(function (dropdownToggle) {
            dropdownToggle.addEventListener('click', function (event) {
                // Find the associated <ul> element
                var dropdownUl = dropdownToggle.nextElementSibling;

                // Toggle the "show" class on the <ul> element
                if (dropdownUl) {
                    dropdownUl.classList.toggle('show');
                }

                // Prevent the default behavior of the link (e.g., navigating to a URL)
                event.preventDefault();
            });
        });
    });
</script>



</body>

</html>
<style>
    .left {
        float: left;
    }

    .right {
        float: right;
    }

    .sans-serif {
        font-family: Helvetica, san-serif;
    }

/* 
    .p-table {
        display: grid;
        grid-gap: 2px;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(10, 1fr);

        
    }

    .p-table {
        display: grid;
        flex-direction: row;
        grid-gap: 2px;
        grid-template-columns: repeat(8, 1fr);
        Updated to display 8 boxes per row
    } */

    .unit {
        border: 2px solid black;
        border-radius: 0px 8px 8px 8px;
        cursor: cell;
        display: flex;
        flex-direction: column;
        padding: 5px;
        text-align: center;
        position: relative;
        min-height: 68px;
        /* width: 75%; */
    }

    .unit:hover {
        background-color: #07A0C3;
        color: white;
        z-index: 1;
        animation: scale 0.5s ease-in-out forwards;
        border-color: white;
    }

    .symbol {
        max-height: 120px;

        .type-number {
            text-align: left;
        }

        .name {
            font-size: 15px;
            margin-top: 10px;
            margin-bottom: 17px;
        }

        .author-year {
            font-size: 9px;
        }
    }


    .attributes {
        line-height: 1.2;
        font-size: 5px;
    }

    .number {
        font-size: 9px;
    }

    .letter {
        font-size: 7px;
    }

    .name {
        font-size: 6px;
        margin-bottom: 8px;
        margin-top: 0px;
    }

    .author-year {
        bottom: 0px;
        font-size: 3.5px;
        padding-bottom: 5px;
        position: relative;
        text-align: left;

        .author {
            position: absolute;
            bottom: 0px;
            line-height: 1;
        }

        .year {
            position: absolute;
            bottom: -1px;
            right: 0px;
        }
    }

    .unit-0 {
        grid-column: 4 / 6;
        grid-row: 2 / 4;
    }

    .unit-1 {
        grid-column: 0 / 1;
        grid-row: 0 / 1;
    }

    .unit-2 {
        grid-column: 17 / 18;
        grid-row: 0 / 1;
    }

    .unit-3 {
        grid-column: 18 / 19;
        grid-row: 2 / 3;
    }

    .unit-4 {
        grid-column: 0 / 1;
        grid-row: 2 / 3;
    }

    .unit-5 {
        grid-column: 2 / 3;
        grid-row: 2 / 3;
    }

    .unit-6 {
        grid-column: 9 / 10;
        grid-row: 4 / 5;
    }

    .unit-7 {
        grid-column: 6 / 7;
        grid-row: 4 / 5;
    }

    .unit-8 {
        grid-column: 12 / 13;
        grid-row: 2 / 3;
    }

    .unit-9 {
        grid-column: 13 / 14;
        grid-row: 2 / 3;
    }

    .unit-10 {
        grid-column: 13 / 14;
        grid-row: 4 / 5;
    }

    .unit-14 {
        grid-column: 14 / 15;
        grid-row: 2 / 3;
    }

    .unit-16 {
        grid-column: 0 / 1;
        grid-row: 3 / 4;
    }

    .unit-18 {
        grid-column: 15 / 16;
        grid-row: 2 / 3;
    }

    .unit-20 {
        grid-column: 16 / 17;
        grid-row: 2 / 3;
    }

    .unit-22 {
        grid-column: 17 / 18;
        grid-row: 2 / 3;
    }

    .unit-27 {
        grid-column: 2 / 3;
        grid-row: 3 / 4;
    }

    .unit-31 {
        grid-column: 0 / 1;
        grid-row: 4 / 5;
    }

    .unit-40 {
        grid-column: 1 / 2;
        grid-row: 4 / 5;
    }

    .unit-21 {
        grid-column: 3 / 4;
        grid-row: 4 / 5;
    }

    .unit-26 {
        grid-column: 4 / 5;
        grid-row: 4 / 5;
    }

    .unit-30 {
        grid-column: 5 / 6;
        grid-row: 4;
    }

    .unit-17 {
        grid-column: 7 / 8;
        grid-row: 4;
    }

    .unit-19 {
        grid-column: 8 / 9;
        grid-row: 4;
    }

    .unit-10 {
        grid-column: 10 / 11;
        grid-row: 4;
    }

    .unit-11 {
        grid-column: 11 / 12;
        grid-row: 4;
    }

    .unit-12 {
        grid-column: 12 / 13;
        grid-row: 4;
    }

    .unit-15 {
        grid-column: 13 / 14;
        grid-row: 4;
    }

    .unit-32 {
        grid-column: 12 / 13;
        grid-row: 3;
    }

    .unit-65 {
        grid-column: 13 / 14;
        grid-row: 3;
    }

    .unit-71 {
        grid-column: 14 / 15;
        grid-row: 3;
    }

    .unit-72 {
        grid-column: 15 / 16;
        grid-row: 3;
    }

    .unit-74 {
        grid-column: 16 / 17;
        grid-row: 3;
    }

    .unit-47 {
        grid-column: 17 / 18;
        grid-row: 3;
    }

    .unit-13 {
        grid-column: 18 / 19;
        grid-row: 3;
    }

    .unit-75 {
        grid-column: 14 / 15;
        grid-row: 4;
    }

    .unit-78 {
        grid-column: 15 / 16;
        grid-row: 4;
    }

    .unit-87 {
        grid-column: 16 / 17;
        grid-row: 4;
    }

    .unit-60 {
        grid-column: 17 / 18;
        grid-row: 4;
    }

    .unit-44 {
        grid-column: 18 / 19;
        grid-row: 4;
    }

    .feedback-text {
        font-size: 10px;
        /* You can adjust the size as needed */
    }

    @keyframes scale {
        0% {
            transform: scale(1, 1);
        }

        10% {
            transform: scale(1.1, 0.9);
            box-shadow: rgba(0, 0, 0, 0.3) 1px 2px 3px 1px;
        }

        30% {
            transform: scale(1.9, 2.1);
            box-shadow: rgba(0, 0, 0, 0.1) 1px 1px 3px 1px;
        }

        50% {
            transform: scale(2, 2);
        }

        57% {
            transform: scale(2, 2);
            box-shadow: rgba(0, 0, 0, 0.1) 1px 2px 4px 1px;
        }

        64% {
            transform: scale(2, 2);
        }

        100% {
            transform: scale(2, 2);
            box-shadow: rgba(0, 0, 0, 0.2) 1px 2px 7px 1px;
        }

    }
</style>

<div class="new-side-content row container " style="margin-top: 40px;">


    <?php foreach ($feedback as $feed) { ?>
        <div class="p-table col-md-4 mb-3 d-flex justify-content-center">

            <!--  Symbol  -->
            <div class="symbol unit unit-0 sans-serif" style="width: 75%">
                <div class="type-number">
                    <span class="attributes left">
                        User </br> Feedback
                    </span>
                    <span class="number right">
                        Kammavari *
                    </span>
                </div>
                <span class="letter">
                    <?php
                    echo '<br><span class="feedback-text">User Id: ' . $feed['user_id'] . '</span>';
                    echo '<br><span class="feedback-text">Feedback: ' . $feed['feedback_text'] . '</span>';
                    //   echo '<br><span class="feedback-text">Improve: ' . $feed['improve_text'] . '</span>';
                    ?>
                </span>
                <span class="name">Typeface</span>
                <div class="author-year">
                    <span class="author left">
                        Designer(s)
                    </span>
                    <span class="year right">
                        Year Designed
                    </span>
                </div>
            </div>
        </div>
    <?php } ?>

</div>
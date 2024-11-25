<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .frame {
            position: absolute;
            top: 30%;
            left: 30%;
            width: 300px;
            /* Reduced width */
            height: 300px;
            /* Reduced height */
            margin-top: -150px;
            margin-left: -150px;
            border-radius: 2px;
            box-shadow: 4px 8px 16px 0 rgba(0, 0, 0, 0.1);
            overflow: hidden;
            background: linear-gradient(to top right, #07A0C3 0%, hotpink 100%);
            color: #333;
            font-family: "Open Sans", Helvetica, sans-serif;
        }

        .center {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 240px;
            /* Reduced width */
            height: 200px;
            /* Reduced height */
            border-radius: 3px;
            box-shadow: 8px 10px 15px 0 rgba(0, 0, 0, 0.2);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            flex-direction: column;
        }

        .title {
            padding-top: 10px;
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #999;
            text-align: center;
        }

        h1 {
            font-size: 16px;
            font-weight: 600;
            color: #666;
        }

        .dropzone {
            width: 100px;
            height: 80px;
            border: 1px dashed #999;
            border-radius: 3px;
            text-align: center;
        }

        .upload-icon {
            margin: 25px 2px 2px 2px;
        }

        .upload-input {
            position: relative;
            top: -62px;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
        }

        .btn {
            display: block;
            width: 140px;
            height: 40px;
            /* background: darkmagenta; */
            color: #fff;
            border-radius: 3px;
            border: 1px solid #07A0C3;
            /* box-shadow: 0 3px 0 0 hotpink; */
            transition: all 0.3s ease-in-out;
            font-size: 14px;
        }

        .btn:hover {
            text-decoration: none;
            /* background: rebeccapurple;
            box-shadow: 0 3px 0 0 deeppink; */
        }

        .video-table-container {
            position: absolute;
            top: 50%;
            left: 18%;
            right: 0;
            bottom: 0;
            overflow: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        .table-wrapper {
            height: 300px;
            /* Set the desired height for the table body */
            overflow: auto;
        }

        th {
            position: sticky;
            top: 0;
            background-color: #f2f2f2;
        }


        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            white-space: nowrap;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<?php if ($msg != '') { ?>
    <div class="alert alert-block alert-success">
        <button type="button" class="close" data-dismiss="alert">
            <i class="icon-remove"></i>
        </button>
        <p>
            <i class="icon-ok"></i>
            <?php echo $msg ? $msg : ''; ?>
        </p>
    </div>
<?php } ?>
<div class="frame">
    <h4 style="color:white;text-align: center; padding-top: 10px;">Advertisement Page</h4>
    <form action="<?php echo site_url() ?>/admin/successstories/save_add" method="post" enctype="multipart/form-data"
        onsubmit="return validateForm()">
        <div class="center">
            <div class="title">
                <h1>Drop file to upload</h1>
            </div>

            <div class="dropzone">
                <img src="http://100dayscss.com/codepen/upload.svg" class="upload-icon" />
                <input id="file" type="file" class="upload-input" name="fileToUpload" />
            </div>

            <!-- <button type="submit" name="submit" class="btn" name="uploadbutton">Upload file</button> -->
            <button type="submit" name="submit" class="btn" style="background-color: #07A0C3; color: white;">Upload
                file</button>
        </div>
    </form>
</div>


<div class="video-table-container">
    <?php
    // Check if the flash message exists
    if ($this->session->flashdata('msg_succ')) {
        echo '<div id="flash-msg" class="alert alert-success">';
        echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo $this->session->flashdata('msg_succ');
        echo '</div>';
    }
    ?>
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th style="color: #07A0C3" class="text-center">S No</th>
                    <th style="color: #07A0C3" class="text-center">Video</th>
                    <th style="color: #07A0C3" class="text-center">Create Date Time</th>
                    <th style="color: #07A0C3" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($videos as $video) { ?>
                    <tr>
                        <td class="text-center">
                            <?php echo $i; ?>
                        </td>
                        <td class="text-center">
                            <video width="220" height="100" controls>
                                <source src="<?php echo site_url(); ?>images/successstories/<?php echo $video['video']; ?>"
                                    type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </td>
                        <td class="text-center">
                            <?php echo $video['create_date_time'] ?>
                        </td>
                        <td class="text-center"><a class="d-flex justify-content-center"
                                href="<?php echo site_url() ?>admin/Successstories/delete_add/<?php echo $video['id'] ?>"><Button
                                    class="btn" style="border border-color: #07A0C3; color: #07A0C3;">Delete</Button></a>
                        </td>
                    </tr>
                    <?php $i++;
                } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    function validateForm() {
        let file = document.getElementById('file').value;
        if (file == '') {
            alert("Please..... Select a Video");
            return false;
        } else {
            return true;
        }
    }
</script>

<script>
    // Function to hide the alert after a few seconds
    function hideAlert() {
        document.getElementById('flash-msg').style.display = 'none';
    }

    // Trigger the function after a delay (e.g., 5000 milliseconds or 5 seconds)
    setTimeout(hideAlert, 5000);
</script>

</html>
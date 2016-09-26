<?php

error_reporting(~E_NOTICE); // avoid notice

require_once 'dbconfig.php';

$message = "ทำการเพิ่มข้อมูลใหม่แล้ว !!!";

if (isset($_POST['btnsave'])) {


//    $province_image = $_POST['province_image'];


    $imgFile = $_FILES['province_image']['name'];
    $tmp_dir = $_FILES['province_image']['tmp_name'];
    $imgSize = $_FILES['province_image']['size'];


    $upload_dir = 'province_image/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

    // rename uploading image
    $userpic = $_FILES['province_image']['name'];

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    if (!isset($errMSG)) {


        $sql = " INSERT INTO allprovince
 					(province_image)
 					VALUES
 					('$imgFile')";

        if (mysqli_query($mysqli, $sql)) {
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("refresh:1;allprovince.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    } //    ______________________________________________________________________________________________________________



}


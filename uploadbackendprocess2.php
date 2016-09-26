<?php

$message = "ทำการเพิ่มข้อมูลใหม่แล้ว !!!";
require_once 'dbconfig.php';

if (isset($_POST['btnsave2'])) {


    $province = $_POST['province'];
    $area = $_POST['area'];


    $imgFile2 = $_FILES['province_image2']['name'];
    $tmp_dir = $_FILES['province_image2']['tmp_name'];
    $imgSize = $_FILES['province_image2']['size'];


    $upload_dir = 'province_area_image/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

    // rename uploading image
    $userpic2 = $_FILES['province_image2']['name'];

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic2);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

    if (!isset($errMSG)) {


        $sql = " INSERT INTO provincearea
 					(province,area,province_image2)
 					VALUES
 					('$province','$area','$imgFile2')";


        if (mysqli_query($mysqli, $sql)) {
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("refresh:1;provincearea.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }


}
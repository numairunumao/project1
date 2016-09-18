<?php

error_reporting(~E_NOTICE); // avoid notice

require_once 'dbconfig.php';

if (isset($_POST['btnsave'])) {
//    $username = $_POST['user_name'];// user name
//    $userjob = $_POST['user_job'];// user email            เขียวๆ คือ name ใน text field

    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a4 = $_POST['a4'];
    $a5 = $_POST['a5'];

    $b1 = $_POST['b1'];
    $b2 = $_POST['b2'];
    $b3 = $_POST['b3'];

//    //  $b4 = $_GET['b4'];  //รูป user_image 1

    $c1 = $_POST['c1'];
    $c2 = $_POST['c2'];
    $c3 = $_POST['c3'];
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $c6 = $_POST['c6'];
    $c7 = $_POST['c7'];
    $c8 = $_POST['c8'];
    $c9 = $_POST['c9'];
    $c10 = $_POST['c10'];

    $d1 = $_POST['d1'];
    $d2 = $_POST['d2'];
    $d3 = $_POST['d3'];
    $d4 = $_POST['d4'];
    $d5 = $_POST['d5'];
    $d6 = $_POST['d6'];
    $d7 = $_POST['d7'];
    $d8 = $_POST['d8'];
    $d9 = $_POST['d9'];
    $d10 = $_POST['d10'];
    $d11 = $_POST['d11'];
    $d12 = $_POST['d12'];
    $d13 = $_POST['d13'];
    $d14 = $_POST['d14'];
    $d15 = $_POST['d15'];

////    $d15 = $_POST['d16']; //รูป   user_image2

    $d17 = $_POST['d17'];
    $d18 = $_POST['d18'];
    $d19 = $_POST['d19'];
    $d20 = $_POST['d20'];
    $d21 = $_POST['d21'];
    $d22 = $_POST['d22'];
    $d23 = $_POST['d23'];

////    $d23 = $_POST['d24'];  //รูป  user_image3

    $e1 = $_POST['e1'];
    $e2 = $_POST['e2'];
    $e3 = $_POST['e3'];
//
//    $f1 = $_POST['f1'];  รูป
    $f2 = $_POST['f2'];





    $imgFile = $_FILES['user_image']['name'];
    $tmp_dir = $_FILES['user_image']['tmp_name'];
    $imgSize = $_FILES['user_image']['size'];


    $upload_dir = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

    // rename uploading image
    $userpic = $_FILES['user_image']['name'];

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


//		__________________________________________________________________________________________


    $imgFile2 = $_FILES['user_image2']['name'];
    $tmp_dir2 = $_FILES['user_image2']['tmp_name'];
    $imgSize2 = $_FILES['user_image2']['size'];

    $upload_dir2 = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

    // rename uploading image
    $userpic2 = $_FILES['user_image2']['name'];

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize2 < 5000000) {
            move_uploaded_file($tmp_dir2, $upload_dir2 . $userpic2);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }


//		__________________________________________________________________________________________


    $imgFile3 = $_FILES['user_image3']['name'];
    $tmp_dir3 = $_FILES['user_image3']['tmp_name'];
    $imgSize3 = $_FILES['user_image3']['size'];

    $upload_dir3 = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile3, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

    // rename uploading image
    $userpic3 = $_FILES['user_image3']['name'];

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize3 < 5000000) {
            move_uploaded_file($tmp_dir3, $upload_dir3 . $userpic3);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }


    //		__________________________________________________________________________________________


    $imgFile4 = $_FILES['user_image4']['name'];
    $tmp_dir4 = $_FILES['user_image4']['tmp_name'];
    $imgSize4 = $_FILES['user_image4']['size'];

    $upload_dir4 = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile4, PATHINFO_EXTENSION)); // get image extension

    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

    // rename uploading image
    $userpic4 = $_FILES['user_image4']['name'];

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize4 < 5000000) {
            move_uploaded_file($tmp_dir4, $upload_dir4 . $userpic4);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }


    // if no error occured, continue ....
    if (!isset($errMSG)) {


        $sql = " INSERT INTO dataFollow
 					(a1,a2,a3,a4,a5,
 					b1,b2,b3,b4,
 					c1,c2,c3,c4,c5,c6,c7,c8,c9,c10,
 					d1,d2,d3,d4,d5,d6,d7,d8,d9,d10,d11,d12,d13,d14,d15,d16,d17,d18,d19,d20,d21,d22,d23,d24,
 					e1,e2,e3,f1,f2)

 					VALUES


 					('$a1','$a2','$a3','$a4','$a5',
 					'$b1','$b2','$b3','$imgFile',
 					'$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10',
                    '$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10',
                    '$d11','$d12','$d13','$d14','$d15','$imgFile2',
                    '$d17','$d18','$d19','$d20','$d21','$d22','$d23','$imgFile3',
                    '$e1','$e2','$e3','$imgFile4','$f2')";





        if (mysqli_query($mysqli, $sql)) {
            echo "ลงทะเบียนข้อมูลใหม่เรียบร้อยแล้ว";
            header("refresh:2;system.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }


}


?>

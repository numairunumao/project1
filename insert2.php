<head>
    <meta charset="utf-8">
</head>


<?php
error_reporting(~E_NOTICE); // avoid notice
require_once 'dbconfig.php';
$message = "ทำการเพิ่มข้อมูลใหม่แล้ว !!!";

if (isset($_POST['btnsave'])) {

    $a1 = $_POST['a1'];
    $a2 = $_POST['a2'];
    $a3 = $_POST['a3'];
    $a41 = $_POST['a41'];
    $a42 = $_POST['a42'];
    $a43 = $_POST['a43'];
    $a51 = $_POST['a51'];
    $a52 = $_POST['a52'];
    $a53 = $_POST['a53'];
    $a61 = $_POST['a61'];
    $a62 = $_POST['a62'];
    $a63 = $_POST['a63'];
    $a64 = $_POST['a64'];
    $a7 = $_POST['a7'];
//  $a8 = $_POST['a8'];  //file
    $a9 = $_POST['a9'];
    $a10 = $_POST['a10'];
    $a11 = $_POST['a11'];


    $b11 = $_POST['b11'];
    $b12 = $_POST['b12'];
    $b13 = $_POST['b13'];
//    $b2 = $_POST['b2'];  //file


    $c1 = $_POST['c1'];
    $c21 = $_POST['c21'];
    $c22 = $_POST['c22'];
    $c23 = $_POST['c23'];
//    $c3 = $_POST['c3'];  //file
    $c4 = $_POST['c4'];
    $c5 = $_POST['c5'];
    $c61 = $_POST['c61'];
    $c62 = $_POST['c62'];
    $c63 = $_POST['c63'];
//    $c7 = $_POST['c7'];  //file
    $c81 = $_POST['c81'];
    $c82 = $_POST['c82'];
    $c83 = $_POST['c83'];
//    $c9 = $_POST['c9']; //file
    $c101 = $_POST['c101'];
    $c102 = $_POST['c102'];
    $c103 = $_POST['c103'];

    $d1 = $_POST['d1'];
    $d21 = $_POST['d21'];
    $d22 = $_POST['d22'];
    $d23 = $_POST['d23'];
    $d31 = $_POST['d31'];
    $d32 = $_POST['d32'];
    $d33 = $_POST['d33'];
    $d4 = $_POST['d4'];
    $d5 = $_POST['d5'];
    $d61 = $_POST['d61'];
    $d62 = $_POST['d62'];
    $d63 = $_POST['d63'];
    $d7 = $_POST['d7'];
    $d8 = $_POST['d8'];
    $d9 = $_POST['d9'];
    $d101 = $_POST['d101'];
    $d102 = $_POST['d102'];
    $d103 = $_POST['d103'];
//    $d11 = $_POST['d11'];  //file
    $d12 = $_POST['d12'];
//    $d13 = $_POST['d13']; //file




    $e1 = $_POST['e1'];
    $e2 = $_POST['e2'];
    $e3 = $_POST['e3'];

    $e41 = $_POST['e41'];
    $e42 = $_POST['e42'];
    $e43 = $_POST['e43'];

//    $e5 = $_POST['e5']; //file

    $e61 = $_POST['e61'];
    $e62 = $_POST['e62'];
    $e63 = $_POST['e63'];

//    $e7 = $_POST['e7']; //file
    $e8 = $_POST['e8'];
    $e91 = $_POST['e91'];
    $e92 = $_POST['e92'];
    $e93 = $_POST['e93'];
//    $e10 = $_POST['e10']; //file
//    $e11 = $_POST['e11']; //file




    //    ________________________________________A8__________________________________________________________


    $a8 = $_FILES['a8']['name'];
    $tmp_dir = $_FILES['a8']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($a8, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic = $_FILES['a8']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($a8)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
            echo "error1";
        }
    }

    //    __________________________________________B2________________________________________________________


    $b2 = $_FILES['b2']['name'];
    $tmp_dir = $_FILES['b2']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($b2, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic2 = $_FILES['b2']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($b2)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic2);
        } else {
            echo "error1";
        }
    }

    //    __________________________________________C3________________________________________________________

    $c3 = $_FILES['c3']['name'];
    $tmp_dir = $_FILES['c3']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($c3, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic3 = $_FILES['c3']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($c3)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic3);
        } else {
            echo "error1";
        }
    }

    //    ___________________________________________C7_______________________________________________________

    $c7 = $_FILES['c7']['name'];
    $tmp_dir = $_FILES['c7']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($c7, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic3 = $_FILES['c7']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($c7)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic3);
        } else {
            echo "error1";
        }
    }

    //    __________________________________________C9_______________________________________________________

    $c9 = $_FILES['c9']['name'];
    $tmp_dir = $_FILES['c9']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($c9, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic4 = $_FILES['c9']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($c9)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic4);
        } else {
            echo "error1";
        }
    }
    //    __________________________________________D11_______________________________________________________

    $d11 = $_FILES['d11']['name'];
    $tmp_dir = $_FILES['d11']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($d11, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic5 = $_FILES['d11']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($d11)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic5);
        } else {
            echo "error1";
        }
    }
    //    __________________________________________D13_______________________________________________________

    $d13 = $_FILES['d13']['name'];
    $tmp_dir = $_FILES['d13']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($d13, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic6 = $_FILES['d13']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($d13)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic6);
        } else {
            echo "error1";
        }
    }

    //    __________________________________________E5_______________________________________________________

    $e5 = $_FILES['e5']['name'];
    $tmp_dir = $_FILES['e5']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($e5, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic7 = $_FILES['e5']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($e5)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic7);
        } else {
            echo "error1";
        }
    }

    //    __________________________________________E7_______________________________________________________

    $e7 = $_FILES['e7']['name'];
    $tmp_dir = $_FILES['e7']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($e7, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic8 = $_FILES['e7']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($e7)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic8);
        } else {
            echo "error1";
        }
    }
    //    __________________________________________E10_______________________________________________________

    $e10 = $_FILES['e10']['name'];
    $tmp_dir = $_FILES['e10']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($e10, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic9 = $_FILES['e10']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($e10)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic9);
        } else {
            echo "error1";
        }
    }
    //    __________________________________________E11_______________________________________________________

    $e11 = $_FILES['e11']['name'];
    $tmp_dir = $_FILES['e11']['tmp_name'];
    $upload_dir = 'user_images/'; // upload directory
    $imgExt = strtolower(pathinfo($e11, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'pdf', 'xls','zip','shp','xlsx'); // valid extensions
    // rename uploading image
    $userpic10 = $_FILES['e11']['name'];
    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions))
    {
        // Check file size '5MB'
        if ($imgSize < 5000000 && isset($e11)) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic10);
        } else {
            echo "error1";
        }
    }









    if (!isset($errMSG)) {
        $sql = " INSERT INTO data1
 					(a1,a2,a3,
 					a41,a42,a43,
 					a51,a52,a53,
 					a61,a62,a63,a64,
 					a7,a8,a9,a10,a11,
 					b11,b12,b13,b2,
 					c1,c21,c22,c23,c3,c4,c5,c61,c62,c63,c7,c81,c82,c83,c9,c101,c102,c103,
 					d1,d21,d22,d23,d31,d32,d33,d4,d5,d61,d62,d63,d7,d8,d9,d101,d102,d103,d11,d12,d13,
 					e1,e2,e3,e41,e42,e43,e5,e61,e62,e63,e7,e8,e91,e92,e93,e10,e11
 			
 					
  
 					)
 					VALUES
 					('$a1','$a2','$a3',
 					'$a41','$a42','$a43',
 					'$a51','$a52','$a53',
 					'$a61','$a62','$a63','$a64',
 					'$a7','$a8','$a9','$a10','$a11',
 					'$b11','$b12','$b13','$b2',
 					'$c1','$c21','$c22','$c23','$c3','$c4','$c5','$c61','$c62','$c63','$c7','$c81','$c82','$c83','$c9','$c101','$c102','$c103',
 					'$d1','$d21','$d22','$d23','$d31','$d32','$d33','$d4','$d5','$d61','$d62','$d63','$d7','$d8','$d9','$d101','$d102','$d103','$d11','$d12','$d13',
 					'$e1','$e2','$e3','$e41','$e42','$e43','$e5','$e61','$e62','$e63','$e7','$e8','$e91','$e92','$e93','$e10','$e11'
 					)";

        if (mysqli_query($mysqli, $sql)) {
            echo "<script type='text/javascript'>alert('$message');</script>";
            header("refresh:1;boardstaff.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
        }
    }


}

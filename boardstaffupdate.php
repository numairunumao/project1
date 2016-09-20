<html>
<body>
<?php

include_once 'dbconfig.php';
$message = "แก้ไขข้อมูลเรียบร้อยแล้ว !!!";
error_reporting(0);

$sql = "SELECT * FROM dataFollow WHERE id = '" . $_POST["id"] . "' ";
$query = mysqli_query($mysqli, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);



$imgFile = $_FILES['user_image']['name'];
$tmp_dir = $_FILES['user_image']['tmp_name'];
$imgSize = $_FILES['user_image']['size'];

if ($imgFile) {


    $upload_dir = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension

// valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

// rename uploading image
    $userpic = $_FILES['user_image']['name'];
    move_uploaded_file($tmp_dir, $upload_dir . $userpic);
    
} else{
    $userpic = $result["b4"];
}
//		__________________________________________________________________________________________


$imgFile2 = $_FILES['user_image2']['name'];
$tmp_dir2 = $_FILES['user_image2']['tmp_name'];
$imgSize2 = $_FILES['user_image2']['size'];

if($imgFile2) {


    $upload_dir2 = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile2, PATHINFO_EXTENSION)); // get image extension

// valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

// rename uploading image
    $userpic2 = $_FILES['user_image2']['name'];

    move_uploaded_file($tmp_dir2, $upload_dir2 . $userpic2);
}
 else{
    $userpic2 = $result["d16"];
}
//		__________________________________________________________________________________________


$imgFile3 = $_FILES['user_image3']['name'];
$tmp_dir3 = $_FILES['user_image3']['tmp_name'];
$imgSize3 = $_FILES['user_image3']['size'];

if($imgFile3) {
    $upload_dir3 = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile3, PATHINFO_EXTENSION)); // get image extension

// valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

// rename uploading image
    $userpic3 = $_FILES['user_image3']['name'];

    move_uploaded_file($tmp_dir3, $upload_dir3 . $userpic3);
}
 else{
    $userpic3 = $result["d24"];
}

//		__________________________________________________________________________________________


$imgFile4 = $_FILES['user_image4']['name'];
$tmp_dir4 = $_FILES['user_image4']['tmp_name'];
$imgSize4 = $_FILES['user_image4']['size'];

if($imgFile4) {
    $upload_dir4 = 'user_images/'; // upload directory

    $imgExt = strtolower(pathinfo($imgFile4, PATHINFO_EXTENSION)); // get image extension

// valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'pdf', 'xlsx'); // valid extensions

// rename uploading image
    $userpic4 = $_FILES['user_image4']['name'];

    move_uploaded_file($tmp_dir4, $upload_dir4 . $userpic4);
}
else{
    $userpic4 = $result["f1"];
}

$strSQL = "UPDATE dataFollow SET ";
$strSQL .= "a1 = '" . $_POST["a1"] . "' ";
$strSQL .= ",a2 = '" . $_POST["a2"] . "' ";
$strSQL .= ",a3 = '" . $_POST["a3"] . "' ";
$strSQL .= ",a4 = '" . $_POST["a4"] . "' ";
$strSQL .= ",a5 = '" . $_POST["a5"] . "' ";

$strSQL .= ",b1 = '" . $_POST["b1"] . "' ";
$strSQL .= ",b2 = '" . $_POST["b2"] . "' ";
$strSQL .= ",b3 = '" . $_POST["b3"] . "' ";

$strSQL .= ",c1 = '" . $_POST["c1"] . "' ";
$strSQL .= ",c2 = '" . $_POST["c2"] . "' ";
$strSQL .= ",c3 = '" . $_POST["c3"] . "' ";
$strSQL .= ",c4 = '" . $_POST["c4"] . "' ";
$strSQL .= ",c5 = '" . $_POST["c5"] . "' ";
$strSQL .= ",c6 = '" . $_POST["c6"] . "' ";
$strSQL .= ",c7 = '" . $_POST["c7"] . "' ";
$strSQL .= ",c8 = '" . $_POST["c8"] . "' ";
$strSQL .= ",c9 = '" . $_POST["c9"] . "' ";
$strSQL .= ",c10 = '" . $_POST["c10"] . "' ";

$strSQL .= ",d1 = '" . $_POST["d1"] . "' ";
$strSQL .= ",d2 = '" . $_POST["d2"] . "' ";
$strSQL .= ",d3 = '" . $_POST["d3"] . "' ";
$strSQL .= ",d4 = '" . $_POST["d4"] . "' ";
$strSQL .= ",d5 = '" . $_POST["d5"] . "' ";
$strSQL .= ",d6 = '" . $_POST["d6"] . "' ";
$strSQL .= ",d7 = '" . $_POST["d7"] . "' ";
$strSQL .= ",d8 = '" . $_POST["d8"] . "' ";
$strSQL .= ",d9 = '" . $_POST["d9"] . "' ";
$strSQL .= ",d10 = '" . $_POST["d10"] . "' ";
$strSQL .= ",d11 = '" . $_POST["d11"] . "' ";
$strSQL .= ",d12 = '" . $_POST["d12"] . "' ";
$strSQL .= ",d13 = '" . $_POST["d13"] . "' ";
$strSQL .= ",d14 = '" . $_POST["d14"] . "' ";
$strSQL .= ",d15 = '" . $_POST["d15"] . "' ";
$strSQL .= ",d17 = '" . $_POST["d17"] . "' ";
$strSQL .= ",d18 = '" . $_POST["d18"] . "' ";
$strSQL .= ",d19 = '" . $_POST["d19"] . "' ";
$strSQL .= ",d20 = '" . $_POST["d20"] . "' ";
$strSQL .= ",d21 = '" . $_POST["d21"] . "' ";
$strSQL .= ",d22 = '" . $_POST["d22"] . "' ";
$strSQL .= ",d23 = '" . $_POST["d23"] . "' ";

$strSQL .= ",e1 = '" . $_POST["e1"] . "' ";
$strSQL .= ",e2 = '" . $_POST["e2"] . "' ";
$strSQL .= ",e3 = '" . $_POST["e3"] . "' ";
$strSQL .= ",f2 = '" . $_POST["f2"] . "' ";
$strSQL .= ",b4 = '" . $userpic . "' ";
$strSQL .= ",d16 = '" . $userpic2 . "' ";
$strSQL .= ",d24 = '" . $userpic3 . "' ";
$strSQL .= ",f1 = '" . $userpic4 . "' ";

$strSQL .= "WHERE id = '" . $_POST["id"] . "' ";

if (mysqli_query($mysqli, $strSQL)) {
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:1;boardstaffsearch.php");
} else {
    echo "Error Save [" . $strSQL . "]";
}

?>
</body>
</html>
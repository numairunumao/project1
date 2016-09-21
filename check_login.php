<?php
//include("dbconfig.php");
//session_start();
//
//if ($_SERVER["REQUEST_METHOD"] == "POST") {
//    // username and password sent from form
//
//    $myusername = mysqli_real_escape_string($mysqli, $_POST['txtUsername']);
//    $mypassword = mysqli_real_escape_string($mysqli, $_POST['txtPassword']);
//
//    $sql = "SELECT id FROM user WHERE username = '$myusername' and password = '$mypassword'";
//    $result = mysqli_query($mysqli, $sql);
//    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//    $count = mysqli_num_rows($result);
//
//    if ($result[$role] == "ceo") {
//
//        $_SESSION['login_user'] = $result[$role];
//
//        header("location: welcome.php");
//    } else {
//        $error = "Your Login Name or Password is invalid";
//    }
//
//}
//?>


<?php
session_start();
include("dbconfig.php");

$strSQL = "SELECT * FROM user WHERE username = '" . mysqli_real_escape_string($mysqli, $_POST['txtUsername']) . "'
	and password = '" . mysqli_real_escape_string($mysqli, $_POST['txtPassword']) . "'";
$objQuery = mysqli_query($mysqli, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);

if ($objResult)
{




    if ($objResult["role"] == "ceo")

    {

        $_SESSION["id"] = $objResult["id"];
        $_SESSION["role"] = $objResult["role"];
        $_SESSION["name"] = $objResult["name"];
        $message = "ยินดีต้อนรับเข้าสู่ระบบ (ผู้บริหาร)";
        echo "<script type='text/javascript'>alert('$message') ;</script> ";
        header("refresh:1;policyreportbackend.php");

    }

    else if ($objResult["role"] == "board")

    {
        $_SESSION["id"] = $objResult["id"];
        $_SESSION["role"] = $objResult["role"];
        $message = "ยินดีต้อนรับเข้าสู่ระบบ (ผู้ปฏิบัติงาน)";
        echo "<script type='text/javascript'>alert('$message') ;</script> ";
        header("refresh:1;boardstaff.php");   // BOARD
    }

    else if ($objResult["role"] == "staff")

    {
        $_SESSION["id"] = $objResult["id"];
        $_SESSION["role"] = $objResult["role"];
        $message = "ยินดีต้อนรับเข้าสู่ระบบ (กรรมการ)";
        echo "<script type='text/javascript'>alert('$message') ;</script> ";
        header("refresh:1;boardstaff.php");
    }

}

else

{
    $message = "ชื่อผู้ใช้งานหรือรหัสผ่านไม่ถูกต้อง";
    echo "<script type='text/javascript'>alert('$message') ;</script> ";
    header("refresh:1;login.php");
    session_destroy();
}






mysqli_close($mysqli);
?>




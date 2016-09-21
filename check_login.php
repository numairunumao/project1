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
        echo $_SESSION["role"];
        echo $_SESSION["id"];
        header("location:policyreportbackend.php");

    }

    else if ($objResult["role"] == "board")

    {
        $_SESSION["id"] = $objResult["id"];
        $_SESSION["role"] = $objResult["role"];
        echo $_SESSION["role"];
        echo $_SESSION["id"];
        header("location:boardstaff.php");   // BOARD
    }

    else if ($objResult["role"] == "staff")

    {
        $_SESSION["id"] = $objResult["id"];
        $_SESSION["role"] = $objResult["role"];
        echo $_SESSION["role"];
        echo $_SESSION["id"];
        header("location:boardstaff.php");
    }

}

else

{
    echo "Username and Password Incorrect!";
}






mysqli_close($mysqli);
?>




<?php

require_once 'dbconfig.php';

if (isset($_POST['btnsave1'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy1 SET
			s11 = '" . $_POST["s11"] . "' ,
			s12 = '" . $_POST["s12"] . "' ,
			s13 = '" . $_POST["s13"] . "' ,
			s14 = '" . $_POST["s14"] . "'
			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreport.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}


else if (isset($_POST['btnsave2'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy2 SET
			s21 = '" . $_POST["s21"] . "' ,
			s22 = '" . $_POST["s22"] . "' ,
			s23 = '" . $_POST["s23"] . "'

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreport.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}

else if (isset($_POST['btnsave3'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy3 SET
			s31 = '" . $_POST["s31"] . "' ,
			s32 = '" . $_POST["s32"] . "' ,
			s33 = '" . $_POST["s33"] . "'

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreport.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}

else if (isset($_POST['btnsave4'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy4 SET
			s41 = '" . $_POST["s41"] . "' ,
			s42 = '" . $_POST["s42"] . "' ,
			s43 = '" . $_POST["s43"] . "' ,
			s44 = '" . $_POST["s44"] . "'

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreport.php#menu4";</script>

        <?php


    }

    mysqli_close($mysqli);


}



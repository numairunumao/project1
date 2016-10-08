<head>
    <meta charset="utf-8">
</head>

<?php

require_once 'dbconfig.php';

if (isset($_POST['btnsave1'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy1 SET
			a1 = '" . $_POST["a1"] . "' ,
			a2 = '" . $_POST["a2"] . "' ,
			a3 = '" . $_POST["a3"] . "' ,
			a4 = '" . $_POST["a4"] . "' ,
			a5 = '" . $_POST["a5"] . "' ,
			a6 = '" . $_POST["a6"] . "' ,
			a7 = '" . $_POST["a7"] . "' ,
			a8 = '" . $_POST["a8"] . "' ,
			a9 = '" . $_POST["a9"] . "' ,
			a10 = '" . $_POST["a10"] . "' ,
			a11 = '" . $_POST["a11"] . "' ,
			a12 = '" . $_POST["a12"] . "' ,
			a13 = '" . $_POST["a13"] . "' ,
			a14 = '" . $_POST["a14"] . "' ,
			a15 = '" . $_POST["a15"] . "' ,
			a16 = '" . $_POST["a16"] . "' ,
			a17 = '" . $_POST["a17"] . "' ,
			a18 = '" . $_POST["a18"] . "' ,
			a19 = '" . $_POST["a19"] . "' ,
			a20 = '" . $_POST["a20"] . "' ,
			a21 = '" . $_POST["a21"] . "' ,
			a22 = '" . $_POST["a22"] . "' ,
			a23 = '" . $_POST["a23"] . "' ,
			a24 = '" . $_POST["a24"] . "' 
			

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("อัพเดทข้อมูลเสร็จเรียบร้อย.."); </script>
        <script>window.location = "policyreportbackend1.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}


else if (isset($_POST['btnsave2'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy2 SET
			b1 = '" . $_POST["b1"] . "' ,
			b2 = '" . $_POST["b2"] . "' ,
			b3 = '" . $_POST["b3"] . "' ,
			b4 = '" . $_POST["b4"] . "' ,
			b5 = '" . $_POST["b5"] . "' ,
			b6 = '" . $_POST["b6"] . "' ,
			b7 = '" . $_POST["b7"] . "' ,
			b8 = '" . $_POST["b8"] . "' ,
			b9 = '" . $_POST["b9"] . "' ,
			b10 = '" . $_POST["b10"] . "' ,
			b11 = '" . $_POST["b11"] . "' ,
			b12 = '" . $_POST["b12"] . "' ,
			b13 = '" . $_POST["b13"] . "' ,
			b14 = '" . $_POST["b14"] . "' ,
			b15 = '" . $_POST["b15"] . "' ,
			b16 = '" . $_POST["b16"] . "' ,
			b17 = '" . $_POST["b17"] . "' ,
			b18 = '" . $_POST["b18"] . "' ,
			b19 = '" . $_POST["b19"] . "' ,
			b20 = '" . $_POST["b20"] . "' ,
			b21 = '" . $_POST["b21"] . "' ,
			b22 = '" . $_POST["b22"] . "' ,
			b23 = '" . $_POST["b23"] . "' ,
			b24 = '" . $_POST["b24"] . "' 
			
			
			

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreportbackend2.php";</script>

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
			s33 = '" . $_POST["s33"] . "' ,
			s31new = '" . $_POST["s31new"] . "' ,
			s32new = '" . $_POST["s32new"] . "' ,
			s33new = '" . $_POST["s33new"] . "'

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreportbackend.php";</script>

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
        <script>window.location = "policyreportbackend.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}



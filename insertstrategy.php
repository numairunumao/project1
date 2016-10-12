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
			b24 = '" . $_POST["b24"] . "' ,
			b25 = '" . $_POST["b25"] . "' ,
			b26 = '" . $_POST["b26"] . "' ,
			b27 = '" . $_POST["b27"] . "' ,
			b28 = '" . $_POST["b28"] . "' ,
			b29 = '" . $_POST["b29"] . "' ,
			b30 = '" . $_POST["b30"] . "' ,
			b31 = '" . $_POST["b31"] . "' ,
			b32 = '" . $_POST["b32"] . "' ,
			b33 = '" . $_POST["b33"] . "' ,
			b34 = '" . $_POST["b34"] . "' ,
			b35 = '" . $_POST["b35"] . "' ,
			b36 = '" . $_POST["b36"] . "' ,
			b37 = '" . $_POST["b37"] . "' ,
			b38 = '" . $_POST["b38"] . "' ,
			b39 = '" . $_POST["b39"] . "' ,
			b40 = '" . $_POST["b40"] . "' ,
			b41 = '" . $_POST["b41"] . "' ,
			b42 = '" . $_POST["b42"] . "' ,
			b43 = '" . $_POST["b43"] . "' ,
			b44 = '" . $_POST["b44"] . "' ,
			b45 = '" . $_POST["b45"] . "' ,
			b46 = '" . $_POST["b46"] . "' ,
			b47 = '" . $_POST["b47"] . "' ,
			b48 = '" . $_POST["b48"] . "' 
		
			
			
			
			
			

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
			c1 = '" . $_POST["c1"] . "' ,
			c2 = '" . $_POST["c2"] . "' ,
			c3 = '" . $_POST["c3"] . "' ,
			c4 = '" . $_POST["c4"] . "' ,
			c5 = '" . $_POST["c5"] . "' ,
			c6 = '" . $_POST["c6"] . "' ,
			c7 = '" . $_POST["c7"] . "' ,
			c8 = '" . $_POST["c8"] . "' ,
			c9 = '" . $_POST["c9"] . "' ,
			c10 = '" . $_POST["c10"] . "' ,
			c11 = '" . $_POST["c11"] . "' ,
			c12 = '" . $_POST["c12"] . "' ,
			c13 = '" . $_POST["c13"] . "' ,
			c14 = '" . $_POST["c14"] . "' ,
			c15 = '" . $_POST["c15"] . "' 

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreportbackend3.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}

else if (isset($_POST['btnsave4'])) {


    ini_set('display_errors', 1);
    error_reporting(~0);

    $sql = "UPDATE strategy4 SET
			d1 = '" . $_POST["d1"] . "' ,
			d2 = '" . $_POST["d2"] . "' ,
			d3 = '" . $_POST["d3"] . "' ,
			d4 = '" . $_POST["d4"] . "' ,
			d5 = '" . $_POST["d5"] . "' ,
			d6 = '" . $_POST["d6"] . "' ,
			d7 = '" . $_POST["d7"] . "' ,
			d8 = '" . $_POST["d8"] . "' ,
			d9 = '" . $_POST["d9"] . "' 
			
			

			WHERE id = '1' ";

    $query = mysqli_query($mysqli, $sql);

    if ($query) {

        ?>

        <script> window.alert("บันทึกข้อมูลเรียบร้อยแล้ว"); </script>
        <script>window.location = "policyreportbackend4.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}



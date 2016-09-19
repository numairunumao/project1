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

        <script> window.alert("sometext"); </script>
        <script>window.location = "policyreport.php";</script>

        <?php


    }

    mysqli_close($mysqli);


}




?>
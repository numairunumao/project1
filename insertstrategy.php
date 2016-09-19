<?php

require_once 'dbconfig.php';

if (isset($_POST['btnsave1'])) {


    $s11 = $_POST['s11'];
    $s12 = $_POST['s12'];
    $s13 = $_POST['s13'];
    $s14 = $_POST['s14'];


    $sql = " INSERT INTO strategy1
 					(s11,s12,s13,s14)
 					VALUES
 					('$s11','$s12','$s13','$s14')";


    if (mysqli_query($mysqli, $sql)) {
        echo "ลงทะเบียนข้อมูลใหม่เรียบร้อยแล้ว";
        header("refresh:2;system.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
    }

    

}
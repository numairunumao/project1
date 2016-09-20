<?php
require_once 'dbconfig.php';
$message = "ทำการลบข้อมูลเรียบร้อยแล้ว !!!";
$id = $_REQUEST['id'];

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM dataFollow WHERE id=$id";

if (mysqli_query($mysqli, $sql)) {
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("refresh:1;boardstaffsearch.php");
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);

?>






<?php
require_once 'dbconfig.php';

$id = $_REQUEST['id'];

if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to delete a record
$sql = "DELETE FROM dataFollow WHERE id=$id";

if (mysqli_query($mysqli, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($mysqli);
}

mysqli_close($mysqli);
?>






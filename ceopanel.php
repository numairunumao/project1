<?php
include_once 'dbconfig.php';

session_start();

$id=$_SESSION['id'];
$selectuser = mysql_query("SELECT * FROM user WHERE id = $id");
$row=mysql_fetch_row($selectuser);
?>

<?php echo  $row[5]; ?>
<?php echo  $row[4]; ?>
<?php echo  $row[3]; ?>
<?php echo  $row[2]; ?>
<?php echo  $row[1]; ?>





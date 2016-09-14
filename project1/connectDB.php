<?php
    session_start();
    $mysqli = mysqli_connect('localhost','root','','project1');
    mysqli_set_charset($mysqli, "utf8");
    date_default_timezone_set('Asia/Bangkok');
?>
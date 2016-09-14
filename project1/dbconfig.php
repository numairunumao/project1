<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "project1";
mysql_connect($host,$user,$password);
mysql_select_db($datbase);
mysql_query("SET NAMES UTF8");
date_default_timezone_set('Asia/Bangkok');
?>
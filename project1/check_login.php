<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("project1");
$strSQL = "SELECT * FROM user WHERE username = '".mysql_real_escape_string($_POST['txtUsername'])."'
	and password = '".mysql_real_escape_string($_POST['txtPassword'])."'";
$objQuery = mysql_query($strSQL);
$objResult = mysql_fetch_array($objQuery);
if(!$objResult)
{
    ?>
    <script type="text/javascript">
        alert("ไม่มีผู้ใช้นี้ในระบบ กรุณาตรวจสอบข้อมูลใหม่");
        history.back();
    </script>
    <?php
}
else
{
    $_SESSION["id"] = $objResult["id"];
    $_SESSION["role"] = $objResult["role"];

    session_write_close();

    if($objResult["role"] == "ceo" )
    {
        header("location:ceopanel.php");
    }
    else
    {
        header("location:user_page.php");
    }

}
mysql_close();
?>

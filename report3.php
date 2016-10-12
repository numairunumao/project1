<?php
$id = $_GET["id"];
require_once('mpdf/mpdf.php');
ob_start();
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <!--<link href="css/page.css" rel="stylesheet">-->

    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy3 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result3 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container">
<h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
<br>

    <table border="1" width="100%" align="center">
        <tr>
            <td align="center" colspan="7" class="bg-success">
                <h4>ยุทธศาสตร์ที่ 3 : ด้านการจัดที่ดินให้ประชาชนผู้ด้อยโอกาสอย่างทั่วถึงและเป็นธรรม
                </h4>ผู้ด้อยโอกาสมีที่ดินทำกิน ที่อยู่อาศัย และบริการขั้นพื้นฐานให้พึ่งตนเองได้
                โดยเป็นไปตามหลักปรัชญาเศรษฐกิจพอเพียง
                รวมทั้งป้องกันมิให้มีการถ่ายโอนทรัพย์สินของรัฐไปยังกลุ่มผลประโยชน์
            </td>
        </tr>
        <tr class="bg-primary">
            <td align="center" width="25%">ตัวชี้วัด</td>
            <td align="center" colspan="3">ตัวชี้วัดในการติดตามประเมินผล</td>
            <td align="center" width="25%">แหล่งข้อมูล</td>
            <td align="center" width="8%">ข้อมูลปีฐาน</td>
        </tr>

        <tr>
            <td align="center" >1. จำนวนผู้ยากไร้ที่ไม่มีที่ดินทำกินลดลง</td>
            <td align="center" >จำนวนผู้ได้รับการจัดที่ดินทำกินจากรัฐ</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c1"]; ?></td>
            <td align="center">ราย</td>
            <td align="center">ฝ่ายเลขานุการ คทช.คณะอนุกรรมการจัดที่ดิน
                หน่วยงานที่รับผิดชอบจัดที่ดินตามนโยบาย</td>
            <td align="center" rowspan="15">2559 - 2560</td>
        </tr>

        <tr>
            <td align="center" rowspan="6">2. มีการเข้าถึงการครอบครอง ที่ดินอย่างทั่วถึงเป็นธรรมมากขึ้น</td>
            <td align="center" rowspan="3">ที่ดินทำกินที่รัฐได้จัดให้แก่ราษฎร</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c2"]; ?></td>
            <td align="center">จำนวนโครงการ (พื้นที่)</td>
            <td align="center" rowspan="6">ฝ่ายเลขานุการ คทช.
                คณะอนุกรรมการจัดที่ดิน
                หน่วยงานที่รับผิดชอบจัดที่ดินตามนโยบาย</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c3"]; ?></td>
            <td align="center">จำนวนแปลง (แปลง)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c4"]; ?></td>
            <td align="center">เนื้อที่ (ไร่)</td>
        </tr>
        <tr>
            <td align="center" rowspan="3">ที่ดินเพื่อที่อยู่อาศัยที่รัฐได้จัดให้ แก่ราษฎร</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c5"]; ?></td>
            <td align="center">จำนวนโครงการ (พื้นที่)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c6"]; ?></td>
            <td align="center">จำนวนแปลง (แปลง)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c7"]; ?></td>
            <td align="center">เนื้อที่ (ไร่)</td>
        </tr>

        <tr>
            <td align="center" rowspan="8">3. การบุกรุกที่ดินของรัฐลดลง</td>
            <td align="center" rowspan="4">ที่ดินของรัฐที่เคยถูกบุกรุก ที่ได้คืนจากการย้ายราษฎรเข้าสู่พื้นที่จัดที่ดิน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c8"]; ?></td>
            <td align="center">จำนวนโครงการ (พื้นที่)</td>
            <td align="center" rowspan="8">ฝ่ายเลขานุการ คทช.
                คณะอนุกรรมการจัดที่ดิน
                หน่วยงานที่รับผิดชอบจัดที่ดินตามนโยบาย</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c9"]; ?></td>
            <td align="center">จำนวนแปลง (แปลง)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c10"]; ?></td>
            <td align="center">เนื้อที่ (ไร่)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c11"]; ?></td>
            <td align="center">จำนวนครัวเรือน (ครัวเรือน)</td>
        </tr>
        <tr>
            <td align="center" rowspan="4">ที่ดินของรัฐที่เคยถูกบุกรุกและนำมาจัดที่ดินให้แก่ราษฎรเข้าใช้ประโยชน์</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c12"]; ?></td>
            <td align="center">จำนวนโครงการ (พื้นที่)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c13"]; ?></td>
            <td align="center">จำนวนแปลง (แปลง)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c14"]; ?></td>
            <td align="center">เนื้อที่ (ไร่)</td>
        </tr>
        <tr>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["c15"]; ?></td>
            <td align="center">จำนวนครัวเรือน (ครัวเรือน)</td>
        </tr>
    </table>
    <br>
    <br>
<h5 align="left">ผู้รายงาน ............................................................................
    วันที่รายงาน ..................................................................</h5>

</div>

</body>

</html>
<?php
include_once 'pdfproperties.php';
;?>

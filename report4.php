<?php
$id = $_GET["id"];
require_once('mpdf/mpdf.php');
ob_start();
?>

<html lang="en" xmlns:border="http://www.w3.org/1999/xhtml">

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
    <link href="css/table.css" rel="stylesheet">

    <META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


<?php

include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy4 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result4 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container">
    <h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
    <br>

    <table border="1" width="100%" align="center">
        <tr>
            <td align="center" colspan="7" class="bg-success">
                <h4>ยุทธศาสตร์ที่ 4 : ด้านการบริหารจัดการที่ดินและทรัพยากรดิน​
                </h4>
                เพื่อความมีเอกภาพในการบริหารจัดการที่ดินและทรัพยากรดิน
                ที่อาศัยความร่วมมือจากทุกฝ่ายที่เกี่ยวข้อง
                รวมทั้งเพิ่มประสิทธิภาพการบริหารจัดการที่ดินและทรัพยากรดิน
                ลดปัญหาความซ้ำซ้อนและความล่าช้า
            </td>
        </tr>
        <tr class="bg-primary">
            <td align="center" width="25%">ตัวชี้วัด</td>
            <td align="center" colspan="3">ตัวชี้วัดในการติดตามประเมินผล</td>
            <td align="center" width="25%">แหล่งข้อมูล</td>
            <td align="center" width="8%">ข้อมูลปีฐาน</td>
        </tr>

        <tr>
            <td align="center" >1. มีระบบฐานข้อมูลที่สนับสนุน การบริหารจัดการที่ดินและทรัพยากรดินอย่างมีประสิทธิภาพ</td>
            <td align="center" >มีการพัฒนาฐานข้อมูล ระบบข้อมูลที่เกี่ยวข้องเพิ่มขึ้นในแต่ละปีหรือไม่</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d1"]; ?></td>
            <td align="center" width="6%">ฐานข้อมูล</td>
            <td align="center" rowspan="9">• การสำรวจหรือการรายงานจากหน่วยงานที่มีภารกิจเกี่ยวกับการบริหารจัดการที่ดิน <br>

                • การสำรวจหรือการรายงานจากหน่วยงานที่มีภารกิจเกี่ยวกับการบริหารจัดการที่ดิน <br>

                • คณะอนุกรรมการบูรณาการกฎหมายการบริหารจัดการที่ดิน (หากยังมีภารกิจต่อเนื่อง)</td>
            <td align="center" rowspan="9">2559 - 2563</td>
        </tr>

        <tr>
            <td align="center" rowspan="8">2. กฎหมายได้รับการพัฒนาและแก้ไขปรับปรุงให้สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดินอย่างมีประสิทธิภาพ</td>
            <td align="center">ชื่อกฎหมายที่อยู่ขั้นตอนการ ยกร่าง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d2"]; ?></td>
            <td align="center">กฎหมาย</td>
        </tr>
        <tr>
            <td align="center">หน่วยงานที่ทำการยกร่าง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d3"]; ?></td>
            <td align="center">หน่วยงาน</td>
        </tr>
        <tr>
            <td align="center">สาระสำคัญ ของกฎหมายที่อยู่ขั้นตอนการยกร่าง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d4"]; ?></td>
            <td align="center">สาระสำคัญ</td>
        </tr>
        <tr>
            <td align="center">ส่วนที่สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดิน ในกฎหมายที่อยู่ขั้นตอนการ ยกร่าง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d5"]; ?></td>
            <td align="center">ส่วน</td>
        </tr>
        <tr>
            <td align="center">ชื่อกฎหมายที่อยู่ขั้นตอนการปรับปรุง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d6"]; ?></td>
            <td align="center">กฏหมาย</td>
        </tr>
        <tr>
            <td align="center">หน่วยงานที่ทำการปรับปรุง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d7"];?></td>
            <td align="center">หน่วยงาน</td>
        </tr>
        <tr>
            <td align="center">สาระสำคัญ ของกฎหมายที่อยู่ขั้นตอนการปรับปรุง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d8"];?></td>
            <td align="center">สาระสำคัญ</td>
        </tr>
        <tr>
            <td align="center">ส่วนที่สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดิน ในกฎหมายที่อยู่ขั้นตอนการปรับปรุง</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["d9"];?></td>
            <td align="center">ส่วน</td>
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

<?php
session_start();
error_reporting(0);

if (!$_SESSION) {
    $message = "ต้องเข้าสู่ระบบก่อน";
    echo "<script type='text/javascript'>alert('$message') ;</script> ";
    header("refresh:1;login.php");
}
?>

<?php

include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy1 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<?php

include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy2 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result2 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<?php

include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy3 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result3 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<?php

include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy4 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result4 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ติดตามประเมินผลโครงการสำคัญ</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/page.css" rel="stylesheet">
    <link href="css/table.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-size: 14px;
        }
    </style>

</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

</nav>

<div class="container">
    <?php include("menu2.php"); ?>



    <div class="container">
        <div class="row centered-form">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="h2">นโยบายและแผน</h1>
                </div>
                <div class="panel-body">

                    <table border="1" width="100%" align="center">
                        <tr>
                            <td align="center" colspan="8" class="bg-success">
                                <h4>ยุทธศาสตร์ที่ 1 : ด้านการรักษาความสมดุลทางธรรมชาติ
                                    การอนุรักษ์ที่ดินและทรัพยากรดินอย่างยั่งยืน</h4>
                                เพื่อรักษาความสมดุลระหว่างพื้นที่อนุรักษ์และพื้นที่ใช้ประโยชน์โดยคำนึงถึงการอนุรักษ์และฟื้นฟูทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                และการพัฒนาด้านเศรษฐกิจและสังคม
                            </td>
                        <tr class="bg-primary">
                            <td align="center" width="25%">ตัวชี้วัด</td>
                            <td align="center" colspan="3">ตัวชี้วัดในการติดตามประเมินผล</td>
                            <td align="center" colspan="3">แหล่งข้อมูล</td>
                            <td align="center">ข้อมูลปีฐาน</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="2">1. มีสัดส่วนของพื้นที่ป่าไม้ร้อยละ 40 ของพื้นที่ประเทศ</td>
                            <td align="center">เนื้อที่ป่าไม้ในประเทศไทย</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center" width="8%">ไร่</td>
                            <td align="center" rowspan="2" width="25%">พื้นที่ประเทศไทยทั้งหมด ตามข้อมูลของกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</td>
                            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result["s11new"]; ?></td>
                            <td align="center" rowspan="2" width="3%">ไร่</td>
                            <td align="center" rowspan="2" width="8%">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center">สัดส่วนร้อยละของพื้นที่ป่าไม้ต่อพื้นที่ประเทศไทย</td>
                            <td align="center" bgcolor="#D5D5D5"><?php $value = ($result["s11"] * 100) / $result["s11new"];
                                printf("%.2f", $value); ?></td>
                            <td align="center">%</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="18">2. พื้นที่ต้นน้ำลำธาร พื้นที่ป่าไม้ และที่ดินของรัฐ ได้รับการประกาศเป็นเขตเพื่อการอนุรักษ์ตามกฎหมายเพิ่มขึ้น</td>
                            <td align="center" rowspan="4">อุทยานแห่งชาติ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืช</td>
                            <td align="center" rowspan="18">-</td>
                            <td align="center" rowspan="18">-</td>
                            <td align="center" rowspan="18">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">เขตรักษาพันธุ์สัตว์ป่า</td>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมป่าไม้</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">วนอุทยาน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืช</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">เขตห้ามล่าสัตว์ป่า</td>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมป่าไม้</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="2">เขตป่าสงวนแห่งชาติ ที่กำหนดเป็นเขตป่าเพื่อการอนุรักษ์</td>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="2">กรมป่าไม้</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="8">3. พื้นที่ป่าเสื่อมโทรมได้รับการอนุรักษ์ และฟื้นฟูเป็นพื้นที่ป่าสมบูรณ์เพิ่มขึ้น</td>
                            <td align="center" rowspan="4">พื้นที่ป่าเสื่อมโทรมที่ได้ทำการสำรวจ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="8">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืชกรมป่าไม้ </td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">พื้นที่ป่าเสื่อมโทรมที่ได้ดำเนินการฟื้นฟู</td>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">จำนวนโครงการ/จำนวนแปลง</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="2">4. มีการจัดทำแนวเขตพื้นที่อนุรักษ์ของรัฐให้มีความชัดเจนยิ่งขึ้น</td>
                            <td align="center" rowspan="2">จำนวนแนวเขตพื้นที่อนุรักษ์ และที่ดินของรัฐ ที่ได้มีการจัดทำแนวเขต</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ตาราง กม.</td>
                            <td align="center" rowspan="8">ส่วนราชการที่รับผิดชอบพื้นที่อนุรักษ์และที่ดินของรัฐในกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                กระทรวงมหาดไทย</td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่</td>
                        </tr>

                    </table>


                    <table border="1" width="100%" align="center">

                        <tr>
                            <td align="center" colspan="7" class="bg-success">
                                <h4>ยุทธศาสตร์ที่ 2 : ด้านการใช้ที่ดินและทรัพยากรดินเพื่อให้เกิดประโยชน์สูงสุดและเป็นธรรม
                                </h4>
                                เพื่อเพิ่มประสิทธิภาพการใช้ที่ดินและทรัพยากรดินให้เกิดประโยชน์สูงสุด
                                ลดปัญหาการทอดทิ้งไม่ทำประโยชน์ หรือปล่อยที่ดินให้เป็นที่รกร้างว่างเปล่า
                                ลดปัญหาขนาดการถือครองและเพิ่มความเป็นธรรมต่อเจ้าของที่ดินและลดปัญหาการใช้
                            </td>
                        </tr>

                        <tr class="bg-primary">
                            <td align="center" width="25%">ตัวชี้วัด</td>
                            <td align="center" colspan="3">ตัวชี้วัดในการติดตามประเมินผล</td>
                            <td align="center" width="25%">แหล่งข้อมูล</td>
                            <td align="center" width="8%">ข้อมูลปีฐาน</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="12">1. มีการใช้ที่ดินที่เหมาะสมกับ ศักยภาพและสมรรถนะของ ทรัพยากรดิน</td>
                            <td align="center" rowspan="6">เนื้อที่ของที่ดินที่มีการใช้ที่ดิน ที่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
                            <td align="center" rowspan="6">• กระทรวงมหาดไทย
                                • กระทรวงเกษตรและสหกรณ์
                                • กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</td>
                            <td align="center">2559</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2560)</td>
                            <td align="center">2560</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2561)</td>
                            <td align="center">2561</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2562)</td>
                            <td align="center">2562</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2563)</td>
                            <td align="center">2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดรวม (ไร่)</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="6">เนื้อที่ของที่ดินที่มีการใช้ที่ดิน  ไม่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
                            <td align="center" rowspan="6">• กระทรวงมหาดไทย
                                • กระทรวงเกษตรและสหกรณ์
                                  • กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</td>
                            <td align="center">2559</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2560)</td>
                            <td align="center">2560</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2561)</td>
                            <td align="center">2561</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2562)</td>
                            <td align="center">2562</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2563)</td>
                            <td align="center">2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดรวม (ไร่)</td>
                            <td align="center">2559 - 2563</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="7">2. ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ ได้นํามาใช้ประโยชน์มากขึ้น</td>
                            <td align="center" >ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ของประเทศ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ยอดการสำรวจล่าสุด ที่เสนอให้ คทช. เห็นชอบใช้เป็นข้อมูลปีฐาน</td>
                            <td align="center" rowspan="7">• ส่วนราชการที่รับผิดชอบในกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                • กระทรวงมหาดไทย</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="6">ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ ได้มีการนำมาใช้ประโยชน์ต่างๆ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
                            <td align="center">2559</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2560)</td>
                            <td align="center">2560</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2561)</td>
                            <td align="center">2561</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2562)</td>
                            <td align="center">2562</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2563)</td>
                            <td align="center">2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php ?></td>
                            <td align="center">ยอดรวม (ไร่)</td>
                            <td align="center">2559 - 2563</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="8">3. ที่ดินที่มีปัญหาและขาดความอุดมสมบูรณ์ ได้รับการพัฒนาและฟื้นฟูคุณภาพของทรัพยากรดินเพื่อนํามาใช้ประโยชน์</td>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเค็ม</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center" rowspan="8">• กระทรวงเกษตรและสหกรณ์
                                - กรมพัฒนาที่ดิน
                                - กรมวิชาการเกษตร
                                - กรมส่งเสริมการเกษตร
                                - กรมประมง
                                - กรมปศุสัตว์</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินทรายจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินตื้นดินที่มีชั้นลูกรัง</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเปรี้ยวจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินอินทรีย์</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินดาน </td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินที่มีการปนเปื้อน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาอื่นๆ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>

                    </table>


                    <table border="1" width="100%" align="center">
                        <tr>
                            <td align="center" colspan="7" class="bg-success">
                                <h4>ยุทธศาสตร์ที่ 3 : ด้านการจัดที่ดินให้ประชาชนผู้ด้อยโอกาสอย่างทั่วถึงและเป็นธรรม
                                </h4>ผู้ด้อยโอกาสมีที่ดินทำกิน ที่อยู่อาศัย และบริการขั้นพื้นฐานให้พึ่งตนเองได้
                                โดยเป็นไปตามหลักปรัชญาเศรษฐกิจพอเพียง
                                รวมทั้งป้องกันมิให้มีการถ่ายโอนทรัพย์สินของรัฐไปยังกลุ่มผลประโยชน์
                            </td>
                        </tr>
                        </tr>
                    </table>



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
                    </table>
                </div>
            </div>
        </div>
    </div>







</div>
</div>

</div>



<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<!-- Footer -->
<?php //include("footer.php"); ?>

<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

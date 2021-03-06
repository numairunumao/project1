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
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a1"]; ?></td>
                            <td align="center" width="8%">ไร่</td>
                            <td align="center" rowspan="2" width="25%">พื้นที่ประเทศไทยทั้งหมด ตามข้อมูลของกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</td>
                            <td align="center" rowspan="2" bgcolor="#D5D5D5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result["a2"]; ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                            <td align="center" rowspan="2" width="3%">ไร่</td>
                            <td align="center" rowspan="2" width="8%">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center">สัดส่วนร้อยละของพื้นที่ป่าไม้ต่อพื้นที่ประเทศไทย</td>
                            <td align="center" bgcolor="#D5D5D5">&nbsp;&nbsp;<?php $value = ($result["a1"] * 100) / $result["a2"];
                                printf("%.2f", $value); ?>&nbsp;&nbsp;</td>
                            <td align="center">%</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="18">2. พื้นที่ต้นน้ำลำธาร พื้นที่ป่าไม้ และที่ดินของรัฐ ได้รับการประกาศเป็นเขตเพื่อการอนุรักษ์ตามกฎหมายเพิ่มขึ้น</td>
                            <td align="center" rowspan="4">อุทยานแห่งชาติ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a3"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืช</td>
                            <td align="center" rowspan="18">-</td>
                            <td align="center" rowspan="18">-</td>
                            <td align="center" rowspan="18">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a4"]; ?></td>
                            <td align="center">เนื้อที่</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a5"]; ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a3"]+$result["a4"]+$result["a5"]; ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">เขตรักษาพันธุ์สัตว์ป่า</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a6"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมป่าไม้</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a7"]; ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a8"]; ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a6"]+ $result["a7"] + $result["a8"]; ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">วนอุทยาน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a9"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืช</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a10"]; ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a11"]; ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php  echo $result["a9"]+ $result["a10"]+$result["a11"];?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">เขตห้ามล่าสัตว์ป่า</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a12"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="4">กรมป่าไม้</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a13"]; ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a14"]; ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a12"] + $result["a13"] + $result["a14"]; ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="2">เขตป่าสงวนแห่งชาติ ที่กำหนดเป็นเขตป่าเพื่อการอนุรักษ์</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a15"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="2">กรมป่าไม้</td>

                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a16"]; ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="8">3. พื้นที่ป่าเสื่อมโทรมได้รับการอนุรักษ์ และฟื้นฟูเป็นพื้นที่ป่าสมบูรณ์เพิ่มขึ้น</td>
                            <td align="center" rowspan="4">พื้นที่ป่าเสื่อมโทรมที่ได้ทำการสำรวจ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a17"]; ?></td>
                            <td align="center">แห่ง</td>
                            <td align="center" rowspan="8">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืชกรมป่าไม้ </td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a18"]; ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a19"]; ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a17"]+$result["a18"]+$result["a19"]; ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="4">พื้นที่ป่าเสื่อมโทรมที่ได้ดำเนินการฟื้นฟู</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a20"]; ?></td>
                            <td align="center">จำนวนโครงการ/จำนวนแปลง</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a21"]; ?></td>
                            <td align="center">เนื้อที่ ตาราง กม.</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a22"]; ?></td>
                            <td align="center">ยอดที่ประกาศเพิ่มในแต่ละปี</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a20"]+$result["a21"]+$result["a22"]; ?></td>
                            <td align="center">ยอดสะสมรวม</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="2">4. มีการจัดทำแนวเขตพื้นที่อนุรักษ์ของรัฐให้มีความชัดเจนยิ่งขึ้น</td>
                            <td align="center" rowspan="2">จำนวนแนวเขตพื้นที่อนุรักษ์ และที่ดินของรัฐ ที่ได้มีการจัดทำแนวเขต</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a23"]; ?></td>
                            <td align="center">ตาราง กม.</td>
                            <td align="center" rowspan="8">ส่วนราชการที่รับผิดชอบพื้นที่อนุรักษ์และที่ดินของรัฐในกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                กระทรวงมหาดไทย</td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">-</td>
                            <td align="center" rowspan="8">2559-2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result["a24"]; ?></td>
                            <td align="center">ไร่</td>
                        </tr>

                    </table>

                    <hr><hr><hr>
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
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b1"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
                            <td align="center" rowspan="6">• กระทรวงมหาดไทย<br>
                                • กระทรวงเกษตรและสหกรณ์<br>
                                • กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</td>
                            <td align="center">2559</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b2"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2560)</td>
                            <td align="center">2560</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b3"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2561)</td>
                            <td align="center">2561</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b4"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2562)</td>
                            <td align="center">2562</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b5"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2563)</td>
                            <td align="center">2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b1"] + $result2["b2"] + $result2["b3"] + $result2["b4"] + $result2["b5"] ?></td>
                            <td align="center">ยอดรวม (ไร่)</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="6">เนื้อที่ของที่ดินที่มีการใช้ที่ดิน  ไม่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b6"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
                            <td align="center" rowspan="6">• กระทรวงมหาดไทย<br>
                                • กระทรวงเกษตรและสหกรณ์<br>
                                • กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม</td>
                            <td align="center">2559</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b7"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2560)</td>
                            <td align="center">2560</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b8"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2561)</td>
                            <td align="center">2561</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b9"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2562)</td>
                            <td align="center">2562</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b10"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2563)</td>
                            <td align="center">2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b6"]+$result2["b7"]+$result2["b8"]+$result2["b9"]+$result2["b10"]; ?></td>
                            <td align="center">ยอดรวม (ไร่)</td>
                            <td align="center">2559 - 2563</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="7">2. ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ ได้นํามาใช้ประโยชน์มากขึ้น</td>
                            <td align="center" >ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ของประเทศ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b11"]; ?></td>
                            <td align="center">ยอดการสำรวจล่าสุด ที่เสนอให้ คทช. เห็นชอบใช้เป็นข้อมูลปีฐาน</td>
                            <td align="center" rowspan="7">• ส่วนราชการที่รับผิดชอบในกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม<br>
                                • กระทรวงมหาดไทย</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center" rowspan="6">ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ ได้มีการนำมาใช้ประโยชน์ต่างๆ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b12"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
                            <td align="center">2559</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b13"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2560)</td>
                            <td align="center">2560</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b14"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2561)</td>
                            <td align="center">2561</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b15"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2562)</td>
                            <td align="center">2562</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b16"]; ?></td>
                            <td align="center">ไร่ (รวมปี พ.ศ. 2563)</td>
                            <td align="center">2563</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b11"]+ $result2["b12"] + $result2["b13"] + $result2["b14"] + $result2["b15"]+ $result2["b16"]; ?></td>
                            <td align="center">ยอดรวม (ไร่)</td>
                            <td align="center">2559 - 2563</td>
                        </tr>

                        <tr>
                            <td align="center" rowspan="32">3. ที่ดินที่มีปัญหาและขาดความอุดมสมบูรณ์ ได้รับการพัฒนาและฟื้นฟูคุณภาพของทรัพยากรดินเพื่อนํามาใช้ประโยชน์</td>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเค็ม</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b17"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center" rowspan="32">- กระทรวงเกษตรและสหกรณ์ <br>
                                - กรมพัฒนาที่ดิน<br>
                                - กรมวิชาการเกษตร<br>
                                - กรมส่งเสริมการเกษตร<br>
                                - กรมประมง<br>
                                - กรมปศุสัตว์</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินทรายจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b18"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินตื้นดินที่มีชั้นลูกรัง</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b19"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเปรี้ยวจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b20"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินอินทรีย์</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b21"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินดาน </td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b22"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินที่มีการปนเปื้อน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b23"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาอื่นๆ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b24"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>

                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเค็ม ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b25"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินทรายจัด ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b26"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินตื้นดินที่มีชั้นลูกรัง ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b27"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเปรี้ยวจัด ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b28"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินอินทรีย์ ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b29"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินดาน ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b30"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินที่มีการปนเปื้อน ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b31"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาอื่นๆ ได้รับการแก้ไขแล้ว</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b32"]; ?></td>
                            <td align="center">ไร่</td>
                            <td align="center">2559 - 2563</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินเค็ม</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b33"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินเค็ม</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b34"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินทรายจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b35"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินทรายจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b36"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินตื้น ดินที่มีชั้นลูกรัง</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b37"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินตื้น ดินที่มีชั้นลูกรัง</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b38"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินเปรี้ยวจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b39"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินเปรี้ยวจัด</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b40"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินอินทรีย์</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b41"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินอินทรีย์</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b42"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินดาน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b43"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินดาน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b44"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาดินที่มีการปนเปื้อน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b45"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาดินที่มีการปนเปื้อน</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b46"]; ?></td>
                            <td align="center">บาท</td>
                        </tr>
                        <tr>
                            <td align="center">จำนวนแผนงานโครงการ ที่ดำเนินการแก้ไขปัญหาอื่น ๆ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b47"]; ?></td>
                            <td align="center">แผนงาน</td>
                            <td align="center" rowspan="2">2559</td>
                        </tr>
                        <tr>
                            <td align="center">งบประมาณ ที่ดำเนินการแก้ไขปัญหาอื่น ๆ</td>
                            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b48"]; ?></td>
                            <td align="center">บาท</td>
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

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
$sql = "SELECT * FROM strategy1 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>




<div class="container">
    <h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
    <br>
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
        <td align="center" rowspan="2" width="25%">พื้นที่ประเทศไทยทั้งหมด
            ตามข้อมูลของกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
        </td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $result["a2"]; ?></td>
        <td align="center" rowspan="2" width="3%">ไร่</td>
        <td align="center" rowspan="2" width="8%">2559-2563</td>
    </tr>
    <tr>
        <td align="center">สัดส่วนร้อยละของพื้นที่ป่าไม้ต่อพื้นที่ประเทศไทย</td>
        <td align="center" bgcolor="#D5D5D5">
            &nbsp;&nbsp;<?php $value = ($result["a1"] * 100) / $result["a2"];
            printf("%.2f", $value); ?>&nbsp;&nbsp;</td>
        <td align="center">%</td>
    </tr>

    <tr>
        <td align="center" rowspan="18">2. พื้นที่ต้นน้ำลำธาร พื้นที่ป่าไม้ และที่ดินของรัฐ
            ได้รับการประกาศเป็นเขตเพื่อการอนุรักษ์ตามกฎหมายเพิ่มขึ้น
        </td>
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
        <td align="center"
            bgcolor="#D5D5D5"><?php echo $result["a3"] + $result["a4"] + $result["a5"]; ?></td>
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
        <td align="center"
            bgcolor="#D5D5D5"><?php echo $result["a6"] + $result["a7"] + $result["a8"]; ?></td>
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
        <td align="center"
            bgcolor="#D5D5D5"><?php echo $result["a9"] + $result["a10"] + $result["a11"]; ?></td>
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
        <td align="center"
            bgcolor="#D5D5D5"><?php echo $result["a12"] + $result["a13"] + $result["a14"]; ?></td>
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
        <td align="center" rowspan="8">3. พื้นที่ป่าเสื่อมโทรมได้รับการอนุรักษ์
            และฟื้นฟูเป็นพื้นที่ป่าสมบูรณ์เพิ่มขึ้น
        </td>
        <td align="center" rowspan="4">พื้นที่ป่าเสื่อมโทรมที่ได้ทำการสำรวจ</td>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["a17"]; ?></td>
        <td align="center">แห่ง</td>
        <td align="center" rowspan="8">กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
            กรมอุทยานแห่งชาติ สัตว์ป่า และพันธุ์พืชกรมป่าไม้
        </td>
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
        <td align="center"
            bgcolor="#D5D5D5"><?php echo $result["a17"] + $result["a18"] + $result["a19"]; ?></td>
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
        <td align="center"
            bgcolor="#D5D5D5"><?php echo $result["a20"] + $result["a21"] + $result["a22"]; ?></td>
        <td align="center">ยอดสะสมรวม</td>
    </tr>

    <tr>
        <td align="center" rowspan="2">4.
            มีการจัดทำแนวเขตพื้นที่อนุรักษ์ของรัฐให้มีความชัดเจนยิ่งขึ้น
        </td>
        <td align="center" rowspan="2">จำนวนแนวเขตพื้นที่อนุรักษ์ และที่ดินของรัฐ
            ที่ได้มีการจัดทำแนวเขต
        </td>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["a23"]; ?></td>
        <td align="center">ตาราง กม.</td>
        <td align="center" rowspan="8">
            ส่วนราชการที่รับผิดชอบพื้นที่อนุรักษ์และที่ดินของรัฐในกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
            กระทรวงมหาดไทย
        </td>
        <td align="center" rowspan="8">-</td>
        <td align="center" rowspan="8">-</td>
        <td align="center" rowspan="8">2559-2563</td>
    </tr>
    <tr>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["a24"]; ?></td>
        <td align="center">ไร่</td>
    </tr>

</table>


    <br>
    <br>
    <h5 align="left">ผู้รายงาน ............................................................................
        วันที่รายงาน ..................................................................</h5>

</div>

</body>
<?php
include_once 'pdfproperties.php';
;?>

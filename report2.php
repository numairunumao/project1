policyreport.php<?php
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
$sql = "SELECT * FROM strategy2 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result2 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container">
<h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
<br>

    <table border="1" width="100%" align="center">

        <tr>
            <td align="center" colspan="7" class="bg-success">
                <h4>ยุทธศาสตร์ที่ 2 :
                    ด้านการใช้ที่ดินและทรัพยากรดินเพื่อให้เกิดประโยชน์สูงสุดและเป็นธรรม
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
            <td align="center" rowspan="12">1. มีการใช้ที่ดินที่เหมาะสมกับ ศักยภาพและสมรรถนะของ
                ทรัพยากรดิน
            </td>
            <td align="center" rowspan="6">เนื้อที่ของที่ดินที่มีการใช้ที่ดิน
                ที่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน
            </td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b1"]; ?></td>
            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
            <td align="left" rowspan="6">• กระทรวงมหาดไทย<br>
                • กระทรวงเกษตรและสหกรณ์<br>
                • กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
            </td>
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
            <td align="center"
                bgcolor="#D5D5D5"><?php echo $result2["b1"] + $result2["b2"] + $result2["b3"] + $result2["b4"] + $result2["b5"] ?></td>
            <td align="center">ยอดรวม (ไร่)</td>
            <td align="center">2559 - 2563</td>
        </tr>
        <tr>
            <td align="center" rowspan="6">เนื้อที่ของที่ดินที่มีการใช้ที่ดิน
                ไม่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน
            </td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b6"]; ?></td>
            <td align="center">ไร่ (รวมปี พ.ศ. 2559)</td>
            <td align="left" rowspan="6">• กระทรวงมหาดไทย<br>
                • กระทรวงเกษตรและสหกรณ์<br>
                • กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม
            </td>
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
            <td align="center"
                bgcolor="#D5D5D5"><?php echo $result2["b6"] + $result2["b7"] + $result2["b8"] + $result2["b9"] + $result2["b10"]; ?></td>
            <td align="center">ยอดรวม (ไร่)</td>
            <td align="center">2559 - 2563</td>
        </tr>

        <tr>
            <td align="center" rowspan="7">2. ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์
                ได้นํามาใช้ประโยชน์มากขึ้น
            </td>
            <td align="center">ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ของประเทศ</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b11"]; ?></td>
            <td align="center">ยอดการสำรวจล่าสุด ที่เสนอให้ คทช. เห็นชอบใช้เป็นข้อมูลปีฐาน</td>
            <td align="left" rowspan="7">•
                ส่วนราชการที่รับผิดชอบในกระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม<br>
                • กระทรวงมหาดไทย
            </td>
            <td align="center">2559 - 2563</td>
        </tr>
        <tr>
            <td align="center" rowspan="6">ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์
                ได้มีการนำมาใช้ประโยชน์ต่างๆ
            </td>
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
            <td align="center"
                bgcolor="#D5D5D5"><?php echo $result2["b11"] + $result2["b12"] + $result2["b13"] + $result2["b14"] + $result2["b15"] + $result2["b16"]; ?></td>
            <td align="center">ยอดรวม (ไร่)</td>
            <td align="center">2559 - 2563</td>
        </tr>

        <tr>
            <td align="center" rowspan="32">3. ที่ดินที่มีปัญหาและขาดความอุดมสมบูรณ์
                ได้รับการพัฒนาและฟื้นฟูคุณภาพของทรัพยากรดินเพื่อนํามาใช้ประโยชน์
            </td>
            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินเค็ม</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result2["b17"]; ?></td>
            <td align="center">ไร่</td>
            <td align="left " rowspan="32">- กระทรวงเกษตรและสหกรณ์ <br>
                - กรมพัฒนาที่ดิน<br>
                - กรมวิชาการเกษตร<br>
                - กรมส่งเสริมการเกษตร<br>
                - กรมประมง<br>
                - กรมปศุสัตว์
            </td>
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
            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินดาน</td>
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
            <td align="center">เนื้อที่ของที่ดินที่มีปัญหาดินตื้นดินที่มีชั้นลูกรัง ได้รับการแก้ไขแล้ว
            </td>
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


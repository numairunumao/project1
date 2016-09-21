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
<table border="1" width="100%" align="center">

    <tr>
        <td align="center" colspan="7" class="bg-success">
            <h4>ยุทธศาสตร์ที่ 1 : ด้านการรักษาความสมดุลทางธรรมชาติ การอนุรักษ์ที่ดินและทรัพยากรดินอย่างยั่งยืน</h4><br>
            เพื่อรักษาความสมดุลระหว่างพื้นที่อนุรักษ์และพื้นที่ใช้ประโยชน์โดยคำนึงถึงการอนุรักษ์และฟื้นฟูทรัพยากรธรรมชาติและสิ่งแวดล้อม
            และการพัฒนาด้านเศรษฐกิจและสังคม
        </td>
    </tr>

    <tr class="bg-primary">
        <td align="center">ตัวชี้วัด</td>
        <td align="center" colspan="3">สรุปผลการดำเนินงาน</td>
        <td align="center" colspan="2">หมายเหตุ</td>
        <td align="center">การประเมินผล</td>
    </tr>
    <tr>
        <td align="center" rowspan="2">1. มีสัดส่วนของพื้นที่ป่าไม้ร้อยละ 40 ของพื้นที่ประเทศ</td>
        <td align="center">พื้นที่ป่าไม้</td>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["s11"]; ?></td>
        <td align="center">ไร่</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result["s11new"]; ?></td>
        <td align="center" rowspan="2">พื้นที่ประเทศไทยทั้งหมด (ไร่)</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
            if (($result["s11"] * 100) / $result["s11new"] > 40) {
                echo "ผ่าน";
            } else {
                echo "ไม่ผ่าน";
            } ?></td>
    </tr>
    <tr>
        <td align="center">คิดเป็น ร้อยละ</td>
        <td align="center" bgcolor="#D5D5D5"><?php $value = ($result["s11"] * 100) / $result["s11new"];
            printf("%.2f", $value); ?></td>
        <td align="center">ของทั้งประเทศ</td>
    </tr>


    <tr>
        <td align="center" rowspan="2">2. พื้นที่ต้นน้ำลำธาร พื้นที่ป่าไม้ และที่ดินของรัฐ
            ได้รับการประกาศเป็นเขตเพื่อการอนุรักษ์ตามกฎหมายเพิ่มขึ้น
        </td>
        <td align="center">พื้นที่ที่ได้รับการประกาศใหม่</td>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["s12"]; ?></td>
        <td align="center">ไร่</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result["s12new"]; ?></td>
        <td align="center" rowspan="2">พื้นที่ที่ได้รับการประกาศเดิม (ไร่)</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
            if ($result["s12"] - $result["s12new"] > 0) {
                echo "ผ่าน";
            } else {
                echo "ไม่ผ่าน";
            } ?></td>
    </tr>
    <tr>
        <td align="center"><?php
            if (($result["s12"] - $result["s12new"]) > 0) {
                echo "เพิ่มขึ้น";
            } elseif (($result["s12"] - $result["s12new"]) == 0) {
                echo "เท่าเดิม";
            } else {
                echo "ลดลง";
            } ?>
        </td>
        <td align="center" bgcolor="#D5D5D5"><?php echo($result["s12"] - $result["s12new"]); ?></td>
        <td align="center">ไร่</td>
    </tr>


    <tr>
        <td align="center" rowspan="2">3. พื้นที่ป่าเสื่อมโทรมได้รับการอนุรักษ์และฟื้นฟูเป็นพื้นที่ป่าสมบูรณ์เพิ่มขึ้น
        </td>
        <td align="center">พื้นที่ป่าเสื่อมโทรมที่ได้รับการฟื้นฟูปัจจุบัน</td>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["s13"]; ?></td>
        <td align="center">ไร่</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result["s13new"]; ?></td>
        <td align="center" rowspan="2">พื้นที่ป่าเสื่อมโทรมที่ได้รับการฟื้นฟูเดิม (ไร่)</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
            if ($result["s13"] - $result["s13new"] > 0) {
                echo "ผ่าน";
            } else {
                echo "ไม่ผ่าน";
            } ?></td>
    </tr>
    <tr>
        <td align="center"><?php
            if (($result["s13"] - $result["s13new"]) > 0) {
                echo "เพิ่มขึ้น";
            } elseif (($result["s13"] - $result["s13new"]) == 0) {
                echo "เท่าเดิม";
            } else {
                echo "ลดลง";
            } ?>
        </td>
        <td align="center" bgcolor="#D5D5D5"><?php echo($result["s13"] - $result["s13new"]); ?></td>
        <td align="center">ไร่</td>
    </tr>


    <tr>
        <td align="center" rowspan="2">4. มีการจัดทำแนวเขตพื้นที่อนุรักษ์ของรัฐให้มีความชัดเจนยิ่งขึ้น</td>
        <td align="center">แนวเขตพื้นที่อนุรักษ์ปัจจุบัน</td>
        <td align="center" bgcolor="#D5D5D5"><?php echo $result["s14"]; ?></td>
        <td align="center">ไร่</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result["s14new"]; ?></td>
        <td align="center" rowspan="2">แนวเขตพื้นที่อนุรักษ์ เดิม (ไร่)</td>
        <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
            if ($result["s14"] - $result["s14new"] > 0) {
                echo "ผ่าน";
            } else {
                echo "ไม่ผ่าน";
            } ?></td>
    </tr>
    <tr>
        <td align="center"><?php
            if (($result["s14"] - $result["s14new"]) > 0) {
                echo "เพิ่มขึ้น";
            } elseif (($result["s14"] - $result["s14new"]) == 0) {
                echo "เท่าเดิม";
            } else {
                echo "ลดลง";
            } ?></td>
        <td align="center" bgcolor="#D5D5D5"><?php echo($result["s14"] - $result["s14new"]); ?></td>
        <td align="center">ไร่</td>
    </tr>

</table>


<div class="container">
    <h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
    <br>


    <br>
    <br>
    <h5 align="left">ผู้รายงาน ............................................................................
        วันที่รายงาน ..................................................................</h5>

</div>

</body>

</html>

<?php

$HTMLoutput = ob_get_contents();
ob_end_clean();

$mpdf = new mPDF('th', 'A4-L', '10', '', '15', '15', '15', '15');

$mpdf->WriteHTML($HTMLoutput, 2);
$mpdf->Output();

$mpdf->Output("user_pdf/report.pdf");

?>


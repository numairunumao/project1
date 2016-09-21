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
                <h4>ยุทธศาสตร์ที่ 3 : ด้านการจัดที่ดินให้ประชาชนผู้ด้อยโอกาสอย่างทั่วถึงและเป็นธรรม</h4><br>
                ผู้ด้อยโอกาสมีที่ดินทำกิน ที่อยู่อาศัย และบริการขั้นพื้นฐานให้พึ่งตนเองได้
                โดยเป็นไปตามหลักปรัชญาเศรษฐกิจพอเพียง
                รวมทั้งป้องกันมิให้มีการถ่ายโอนทรัพย์สินของรัฐไปยังกลุ่มผลประโยชน์
            </td>
        </tr>

        <tr class="bg-primary">
            <td align="center">ตัวชี้วัด</td>
            <td align="center" colspan="3">สรุปผลการดำเนินงาน</td>
            <td align="center" colspan="2">หมายเหตุ</td>
            <td align="center">การประเมินผล</td>
        </tr>
        <tr>
            <td align="center" rowspan="2">1. จำนวนผู้ยากไร้ที่ไม่มีที่ดินทำกินลดลง</td>
            <td align="center">จำนวนผู่ไม่มีที่ดินทำกิน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["s31"]; ?></td>
            <td align="center">คน</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result3["s31new"]; ?></td>
            <td align="center" rowspan="2">จำนวนผู้ไม่มีที่ดินทำกินสำรวจในปีก่อนหน้า</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
                if ($result3["s31"] - $result3["s31new"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
        </tr>
        <tr>
            <td align="center"><?php
                if (($result3["s31"] - $result3["s31new"]) > 0) {
                    echo "เพิ่มขึ้น";
                } elseif (($result3["s31"] - $result3["s31new"]) == 0) {
                    echo "เท่าเดิม";
                } else {
                    echo "ลดลง";
                } ?></td> <!--ลดลง-->
            <td align="center" bgcolor="#D5D5D5"><?php echo($result3["s31"] - $result3["s31new"]); ?></td>
            <td align="center">คน</td>
        </tr>


        <tr>
            <td align="center" rowspan="2">2. มีการเข้าถึงการครอบครองที่ดินอย่างทั่วถึงเป็นธรรมมากขึ้น</td>
            <td align="center">จำนวนผู้ที่อยู่ระหว่างขอจัดสรรที่ดิน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["s32"]; ?></td>
            <td align="center">คน</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result3["s32new"]; ?></td>
            <td align="center" rowspan="2">จำนวนผู้ที่อยู่ระหว่างขอจัดสรรที่ดิน สำรวจในปีก่อนหน้า</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
                if ($result3["s32"] - $result3["s32new"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
        </tr>
        <tr>
            <td align="center"><?php
                if (($result3["s32"] - $result3["s32new"]) > 0) {
                    echo "มีการขอจัดสรรที่ดินเพิ่มขึ้น";
                } elseif (($result3["s32"] - $result3["s32new"]) == 0) {
                    echo "เท่าเดิม";
                } else {
                    echo "ได้รับการจัดสรรแล้ว";
                } ?></td> <!--มีการขอจัดสรรที่ดินเพิ่มขึ้น-->
            <td align="center" bgcolor="#D5D5D5"><?php echo($result3["s32"] - $result3["s32new"]); ?></td>
            <td align="center">คน</td>
        </tr>


        <tr>
            <td align="center" rowspan="2">3. การบุกรุกที่ดินของรัฐลดลง</td>
            <td align="center"> ที่ดินรัฐที่ถูกบุกรุก</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result3["s33"]; ?></td>
            <td align="center">ไร่</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php echo $result3["s33new"]; ?></td>
            <td align="center" rowspan="2">ที่ดินรัฐที่ถูกบุกรุก สำรวจในปีก่อนหน้า</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5"><?php
                if ($result3["s33"] - $result3["s33new"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
        </tr>
        <tr>
            <td align="center"><?php
                if (($result3["s33"] - $result3["s33new"]) > 0) {
                    echo "ถูกบุกรุกเพิ่มขึ้น";
                } elseif (($result3["s33"] - $result3["s33new"]) == 0) {
                    echo "เท่าเดิม";
                } else {
                    echo "ถูกบุกรุกลดลง";
                } ?></td> <!--ถูกบุกรุกลดลง-->
            <td align="center" bgcolor="#D5D5D5"><?php echo($result3["s33"] - $result3["s33new"]); ?></td>
            <td align="center">ไร</td>
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

$HTMLoutput = ob_get_contents();
ob_end_clean();

$mpdf = new mPDF('th', 'A4-L', '10', '', '15', '15', '15', '15');

$mpdf->WriteHTML($HTMLoutput,2);
$mpdf->Output();

$mpdf->Output("user_pdf/report.pdf");

?>


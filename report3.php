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
<div class="container">
<h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
<br>

    <table border="1" width="100%" align="center">

        <tr>
            <td align="center" colspan="7" class="bg-success">
                <h4>ยุทธศาสตร์ที่ 3 : ด้านการจัดที่ดินให้ประชาชนผู้ด้อยโอกาสอย่างทั่วถึงและเป็นธรรม</h4><br>
                ผู้ด้อยโอกาสมีที่ดินทำกิน ที่อยู่อาศัย และบริการขั้นพื้นฐานให้พึ่งตนเองได้ โดยเป็นไปตามหลักปรัชญาเศรษฐกิจพอเพียง รวมทั้งป้องกันมิให้มีการถ่ายโอนทรัพย์สินของรัฐไปยังกลุ่มผลประโยชน์
            </td>
        </tr>

        <tr bgcolor="#D5D5D5">
            <td align="center" >ตัวชี้วัด</td>
            <td align="center" colspan="3" >สรุปผลการดำเนินงาน</td>
            <td align="center" colspan="2">หมายเหตุ</td>
            <td align="center" >การประเมินผล</td>
        </tr>
        <tr>
            <td align="center" rowspan="2">1. จำนวนผู้ยากไร้ที่ไม่มีที่ดินทำกินลดลง</td>
            <td align="center">จำนวนผู่ไม่มีที่ดินทำกิน</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">คน</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
            <td align="center" rowspan="2">จำนวนผู้ไม่มีที่ดินทำกินสำรวจในปีก่อนหน้า</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
        </tr>
        <tr>
            <td align="center">เพิ่มขึ้น</td> <!--ลดลง-->
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">คน</td>
        </tr>



        <tr>
            <td align="center" rowspan="2">2. มีการเข้าถึงการครอบครองที่ดินอย่างทั่วถึงเป็นธรรมมากขึ้น</td>
            <td align="center">จำนวนผู้ที่อยู่ระหว่างขอจัดสรรที่ดิน</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">คน</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
            <td align="center" rowspan="2">จำนวนผู้ที่อยู่ระหว่างขอจัดสรรที่ดิน สำรวจในปีก่อนหน้า</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
        </tr>
        <tr>
            <td align="center">ได้รับการจัดสรรแล้ว</td> <!--มีการขอจัดสรรที่ดินเพิ่มขึ้น-->
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">คน</td>
        </tr>



        <tr>
            <td align="center" rowspan="2">3. การบุกรุกที่ดินของรัฐลดลง</td>
            <td align="center"> ที่ดินรัฐที่ถูกบุกรุก</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">ไร่</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
            <td align="center" rowspan="2">ที่ดินรัฐที่ถูกบุกรุก สำรวจในปีก่อนหน้า</td>
            <td align="center" rowspan="2" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
        </tr>
        <tr>
            <td align="center">ถูกบุกรุกเพิ่มขึ้น</td> <!--ถูกบุกรุกลดลง-->
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
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


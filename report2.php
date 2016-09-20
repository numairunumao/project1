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
<div class="container">
<h5 align="right">ระบบติดตามประเมินผลนโยบายและแผน</h5>
<br>

    <table border="1" width="100%" align="center">

        <tr>
            <td align="center" colspan="5">
            <h4> ยุทธศาสตร์ที่ 2 : ด้านการใช้ที่ดินและทรัพยากรดินเพื่อให้เกิดประโยชน์สูงสุดและเป็นธรรม</h4><br>
            เพื่อเพิ่มประสิทธิภาพการใช้ที่ดินและทรัพยากรดินให้เกิดประโยชน์สูงสุด ลดปัญหาการทอดทิ้งไม่ทำประโยชน์ หรือปล่อยที่ดินให้เป็นที่รกร้างว่างเปล่า
            ลดปัญหาขนาดการถือครองและเพิ่มความเป็นธรรมต่อเจ้าของที่ดินและลดปัญหาการใช้ที่ดินผิดประเภท
            </td>
        </tr>

        <tr bgcolor="#D5D5D5">
            <td align="center" >ตัวชี้วัด</td>
            <td align="center" colspan="3" >สรุปผลการดำเนินงาน</td>
            <td align="center" >การประเมินผล</td>
        </tr>
        <tr>
            <td align="center">1. มีการใช้ที่ดินที่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน</td>
            <td align="center">จำนวนที่ดินที่ใช้อย่างเหมาะสม</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">แปลง</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
        </tr>
        <tr>
            <td align="center">2. ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ ได้นํามาใช้ประโยชน์มากขึ้น</td>
            <td align="center">จำนวนที่ดินที่นำมาใช้ประโยชน์</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">แปลง</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
        </tr>

        <tr>
            <td align="center">3. ที่ดินที่มีปัญหาและขาดความอุดมสมบูรณ์ ได้รับการพัฒนาและฟื้นฟูคุณภาพของทรัพยากรดินเพื่อนํามาใช้ประโยชน์</td>
            <td align="center">จำนวนที่ดินที่ได้รับการฟื้นฟู </td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างรวบรวมข้อมูล</td>
            <td align="center">แปลง</td>
            <td align="center" bgcolor="#D5D5D5">อยู่ระหว่างการประเมินผล</td>
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


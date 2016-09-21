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

    <table width="100%" align="center" border="1">

        <tr>
            <td align="center" colspan="5" class="bg-success">
                <h4> ยุทธศาสตร์ที่ 4 : ด้านการบริหารจัดการที่ดินและทรัพยากรดิน​</h4><br>
                เพื่อความมีเอกภาพในการบริหารจัดการที่ดินและทรัพยากรดิน
                ที่อาศัยความร่วมมือจากทุกฝ่ายที่เกี่ยวข้อง
                รวมทั้งเพิ่มประสิทธิภาพการบริหารจัดการที่ดินและทรัพยากรดิน
                ลดปัญหาความซ้ำซ้อนและความล่าช้า
            </td>
        </tr>

        <tr class="bg-primary">
            <td align="center">ตัวชี้วัด</td>
            <td align="center" colspan="3">สรุปผลการดำเนินงาน</td>
            <td align="center">การประเมินผล</td>
        </tr>
        <tr>
            <td align="center">1.
                มีองค์กรในการขับเคลื่อนและบูรณาการนโยบายด้านการบริหารจัดการที่ดินและทรัพยากรดิน
            </td>
            <td align="center">จำนวน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["s41"]; ?></td>
            <td align="center">องค์กร</td>
            <td align="center" bgcolor="#D5D5D5"><?php
                if ($result4["s41"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
        </tr>

        <tr>
            <td align="center">2.
                มีระบบฐานข้อมูลที่สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดินอย่างมีประสิทธิภาพ
            </td>
            <td align="center">จำนวน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["s42"]; ?></td>
            <td align="center">ฐานข้อมูล</td>
            <td align="center" bgcolor="#D5D5D5"><?php
                if ($result4["s42"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
        </tr>

        <tr>
            <td align="center">3.
                กฎหมายได้รับการพัฒนาและแก้ไขปรับปรุงให้สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดินอย่างมีประสิทธิภาพ
            </td>
            <td align="center">จำนวน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["s43"]; ?></td>
            <td align="center">มาตรา</td>
            <td align="center" bgcolor="#D5D5D5"><?php
                if ($result4["s43"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
        </tr>

        <tr>
            <td align="center">4. มีการพัฒนาองค์ความรู้ด้านการบริหารจัดการที่ดินและทรัพยากรดิน</td>
            <td align="center">จำนวน</td>
            <td align="center" bgcolor="#D5D5D5"><?php echo $result4["s44"]; ?></td>
            <td align="center">องค์ความรู้</td>
            <td align="center" bgcolor="#D5D5D5"><?php
                if ($result4["s44"] > 0) {
                    echo "ผ่าน";
                } else {
                    echo "ไม่ผ่าน";
                } ?></td>
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

$mpdf = new mPDF('th', 'A4-L', '11', '', '15', '15', '15', '15');

$mpdf->WriteHTML($HTMLoutput, 2);
$mpdf->Output();

$mpdf->Output("user_pdf/report.pdf");

?>


<?php
include_once 'dbconfig.php';
$id = $_REQUEST['id'];
$result = mysqli_query($mysqli, "SELECT * FROM dataFollow where id = $id");
$row = mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เกี่ยวกับโปรเจค</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/portfolio-item.css" rel="stylesheet">

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>

</nav>


<table border="0" width="70%" align="center">

    <tr>
        <th>
            <p style="color:red;">รายงานระบบติดตามประเมินผลโครงการจัดที่ดิน </p>
        </th>
        <th>
        </th>
    </tr>

    <tr>
        <th>
            <p style="color:red;">ข้อมูลเบื้องต้น </p>
        </th>
        <th>
        </th>
    </tr>


    <tr>
        <th>จังหวัด</th>
        <th><?php echo $row[1]; ?></th>
    </tr>

    <tr>
        <th>ชื่อพื้นที่</th>
        <th><?php echo $row[2]; ?></th>
    </tr>

    <tr>
        <th>ชื่อหน่วยงานรับผิดชอบ</th>
        <th><?php echo $row[3]; ?></th>
    </tr>

    <tr>
        <th>ชื่อผู้กรอกข้อมูล</th>
        <th><?php echo $row[4]; ?></th>
    </tr>

    <tr>
        <th>วันที่กรอกข้อมูล</th>
        <th><?php echo $row[5]; ?></th>
    </tr>

    <tr>
        <th><p style="color:red;">การกำหนดพื้นที่และจัดทำข้อมูลพื้นที่ </p></th>
        <th></th>
    </tr>

    <tr>
        <th>ชื่อพื้นที่ที่นำมาจัดที่ดินทำกิน</th>
        <th><?php echo $row[6]; ?></th>
    </tr>

    <tr>
        <th>เนื้อที่เริ่มต้นดำเนินการ (ไร่)</th>
        <th><?php echo $row[7]; ?></th>
    </tr>


    <tr>
        <th>การจัดทำข้อมูล</th>
        <th><?php echo $row[8]; ?></th>
    </tr>


    <tr>
        <th>ไฟล์แผนที่ดำเนินการ</th>
        <th><a href="user_images/<?php echo $row[9] ?>" target="_blank">ไฟล์แผนที่ดำเนินการ</a></th>
    </tr>


    <tr>
        <th><p style="color:red;">ขั้นตอนการจัดหาที่ดิน </p></th>
        <th></th>
    </tr>


    <tr>
        <th>วันที่นำส่งคณะอนุกรรมการจัดหาที่ดิน</th>
        <th><?php echo $row[10]; ?></th>
    </tr>


    <tr>
        <th>การพิจารณาคณะอนุกรรมการจัดหาที่ดิน</th>
        <th><?php echo $row[11]; ?></th>
    </tr>

    <tr>
        <th>วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช.จังหวัด</th>
        <th><?php echo $row[12]; ?></th>
    </tr>


    <tr>
        <th>การตรวจสอบและพิจารณาของ คทช.จังหวัด</th>
        <th><?php echo $row[13]; ?></th>
    </tr>


    <tr>
        <th>วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการจัดหาที่ดิน</th>
        <th><?php echo $row[14]; ?></th>
    </tr>


    <tr>
        <th>วันที่ได้รับการเห็นชอบคณะอนุกรรมการจัดหาที่ดิน</th>
        <th><?php echo $row[15]; ?></th>
    </tr>


    <tr>
        <th>อำเภอ</th>
        <th><?php echo $row[16]; ?></th>
    </tr>


    <tr>
        <th>ตำบล 1</th>
        <th><?php echo $row[17]; ?></th>
    </tr>


    <tr>
        <th>ตำบล 2</th>
        <th><?php echo $row[18]; ?></th>
    </tr>


    <tr>
        <th>ตำบล 3</th>
        <th><?php echo $row[19]; ?></th>
    </tr>


    <tr>
        <th><p style="color:red;">ขั้นตอนการจัดที่ดิน </p></th>
        <th></th>
    </tr>

    <tr>
        <th>วันที่อนุญาตให้เข้าทำประโยชน์</th>
        <th><?php echo $row[20]; ?></th>
    </tr>

    <tr>
        <th>วันที่มอบหนังสืออนุญาตให้เข้าทำประโยชน์</th>
        <th><?php echo $row[21]; ?></th>
    </tr>

    <tr>
        <th>พื้นที่ที่ได้รับอนุญาตใช้ประโยชน์รวม (ไร่)</th>
        <th><?php echo $row[22]; ?></th>
    </tr>

    <tr>
        <th>อำเภอ</th>
        <th><?php echo $row[23]; ?></th>
    </tr>

    <tr>
        <th>ตำบล 1</th>
        <th><?php echo $row[24]; ?></th>
    </tr>

    <tr>
        <th>ตำบล 2</th>
        <th><?php echo $row[25]; ?></th>
    </tr>

    <tr>
        <th>ตำบล 3</th>
        <th><?php echo $row[26]; ?></th>
    </tr>

    <tr>
        <th>พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (ไร่)</th>
        <th><?php echo $row[27]; ?></th>
    </tr>

    <tr>
        <th>พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (แปลง)</th>
        <th><?php echo $row[28]; ?></th>
    </tr>

    <tr>
        <th>ผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (คน)</th>
        <th><?php echo $row[29]; ?></th>
    </tr>

    <tr>
        <th>พื้นที่ที่จัดเพื่อทำกินรวม (ไร่)</th>
        <th><?php echo $row[30]; ?></th>
    </tr>

    <tr>
        <th>พื้นที่ที่จัดเพื่อทำกินรวม (แปลง)</th>
        <th><?php echo $row[31]; ?></th>
    </tr>

    <tr>
        <th>ผู้ที่ได้รับการจัดเพื่อทำกิน (คน)</th>
        <th><?php echo $row[32]; ?></th>
    </tr>

    <tr>
        <th>วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการจัดที่ดิน</th>
        <th><?php echo $row[33]; ?></th>
    </tr>

    <tr>
        <th>วันที่ จัดทำสัญญา</th>
        <th><?php echo $row[34]; ?></th>
    </tr>

    <tr>
        <th>ไฟล์ข้อมูลการได้รับอนุญาต</th>
        <th><a href="user_images/<?php echo $row[35] ?>" target="_blank">ไฟล์ข้อมูลการได้รับอนุญาต</a></th>
    </tr>

    <tr>
        <th>การกำหนดหลักเกณฑ์คุณสมบัติ และประเภทของผู้ได้รับความช่วยเหลือ</th>
        <th><?php echo $row[36]; ?></th>
    </tr>

    <tr>
        <th>วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช.จังหวัด</th>
        <th><?php echo $row[37]; ?></th>
    </tr>

    <tr>
        <th>การตรวจสอบและจัดทำข้อมูลคนของ คทช.จังหวัด</th>
        <th><?php echo $row[38]; ?></th>
    </tr>

    <tr>
        <th>วันที่ คทช.จังหวัด ส่งข้อมูลคนให้คณะอนุกรรมการจัดที่ดิน</th>
        <th><?php echo $row[39]; ?></th>
    </tr>

    <tr>
        <th>วันที่ คทช.จังหวัด แจ้งหน่วยงานรับผิดชอบ ดำเนินการตามกระบวนการอนุญาต/จัดทำสัญญาแต่ละหน่วยงาน</th>
        <th><?php echo $row[40]; ?></th>
    </tr>

    <tr>
        <th>วันที่ อนุญาติให้เข้าทำประโยชน์</th>
        <th><?php echo $row[41]; ?></th>
    </tr>

    <tr>
        <th>วันที่ จัดทำสัญญา</th>
        <th><?php echo $row[42]; ?></th>
    </tr>

    <tr>
        <th>ส่งไฟล์ข้อมูลการจัดคนลงพื้นที่</th>
        <th><a href="user_images/<?php echo $row[43] ?>" target="_blank">ไฟล์ข้อมูลการจัดคนลงพื้นที่</a></th>
    </tr>

    <tr>
        <th><p style="color:red;">ขั้นตอนการส่งเสริมและพัฒนาอาชีพ </p></th>
        <th></th>
    </tr>

    <tr>
        <th>วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</th>
        <th><?php echo $row[44]; ?></th>
    </tr>


    <tr>
        <th>วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</th>
        <th><?php echo $row[45]; ?></th>
    </tr>

    <tr>
        <th>วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</th>
        <th><?php echo $row[46]; ?></th>
    </tr>

    <tr>
        <th>ส่งไฟล์รายงานการดำเนินงาน</th>
        <th>  <a href="user_images/<?php echo $row[47] ?>" target="_blank">ไฟล์รายงานการดำเนินงาน</a></th>
    </tr>

    <tr>
        <th>Text area</th>
        <th><?php echo $row[48]; ?></th>
    </tr>





</table>
<br>
<br>
<br>
<br>
<br>

</body>

</html>


<!---->
<!--//while ($row = mysqli_fetch_array($result))  ออกมาหมดเลย-->
<!--//{-->
<!--//    echo "<tr>";-->
<!--    //    echo "<td>" . $row['a1'] . "</td>";-->
<!--    //    echo "<td>" . $row['a2'] . "</td>";-->
<!--    //    echo "</tr>";-->
<!--//}-->
<!--//echo "</table>";-->
<!---->
<!--mysqli_close($mysqli);-->
<!--?>-->

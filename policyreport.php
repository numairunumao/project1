
<?php
session_start();
error_reporting(0);

if (!$_SESSION) {
    $message = "ต้องเข้าสู่ระบบก่อน";
    echo "<script type='text/javascript'>alert('$message') ;</script> ";
    header("refresh:1;login.php");
}
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
    <![endif]-->

</head>

<body>

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


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>
</nav>
<div class="container">
    <div class="row centered-form">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="h2">นโยบายและแผน</h1>
            </div>

            <div class="panel-body">

                <table border="1" width="100%" align="center">

                    <tr>
                        <td align="center" colspan="7" class="bg-success">
                            <h4>ยุทธศาสตร์ที่ 1 : ด้านการรักษาความสมดุลทางธรรมชาติ
                                การอนุรักษ์ที่ดินและทรัพยากรดินอย่างยั่งยืน</h4><br>
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
                        <td align="center" rowspan="2">3.
                            พื้นที่ป่าเสื่อมโทรมได้รับการอนุรักษ์และฟื้นฟูเป็นพื้นที่ป่าสมบูรณ์เพิ่มขึ้น
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
                        <td align="center" rowspan="2">4. มีการจัดทำแนวเขตพื้นที่อนุรักษ์ของรัฐให้มีความชัดเจนยิ่งขึ้น
                        </td>
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
                <br>
                <br>
                <table border="1" width="100%" align="center">

                    <tr>
                        <td align="center" colspan="6" class="bg-success">
                            <h4> ยุทธศาสตร์ที่ 2 :
                                ด้านการใช้ที่ดินและทรัพยากรดินเพื่อให้เกิดประโยชน์สูงสุดและเป็นธรรม</h4><br>
                            เพื่อเพิ่มประสิทธิภาพการใช้ที่ดินและทรัพยากรดินให้เกิดประโยชน์สูงสุด
                            ลดปัญหาการทอดทิ้งไม่ทำประโยชน์ หรือปล่อยที่ดินให้เป็นที่รกร้างว่างเปล่า
                            ลดปัญหาขนาดการถือครองและเพิ่มความเป็นธรรมต่อเจ้าของที่ดินและลดปัญหาการใช้ที่ดินผิดประเภท
                        </td>
                    </tr>

                    <tr class="bg-primary">
                        <td align="center">ตัวชี้วัด</td>
                        <td align="center" colspan="3">สรุปผลการดำเนินงาน</td>
                        <td align="center">การประเมินผล</td>
                    </tr>
                    <tr>
                        <td align="center">1. มีการใช้ที่ดินที่เหมาะสมกับศักยภาพและสมรรถนะของทรัพยากรดิน</td>
                        <td align="center">จำนวนที่ดินที่ใช้อย่างเหมาะสม</td>
                        <td align="center" bgcolor="#D5D5D5"><?php echo $result2["s21"]; ?></td>
                        <td align="center">แปลง</td>
                        <td align="center" bgcolor="#D5D5D5"><?php
                            if ($result2["s21"] > 0) {
                                echo "ผ่าน";
                            } else {
                                echo "ไม่ผ่าน";
                            } ?></td>
                    </tr>
                    <tr>
                        <td align="center">2. ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการใช้ประโยชน์ ได้นํามาใช้ประโยชน์มากขึ้น
                        </td>
                        <td align="center">จำนวนที่ดินที่นำมาใช้ประโยชน์</td>
                        <td align="center" bgcolor="#D5D5D5"><?php echo $result2["s22"]; ?></td>
                        <td align="center">แปลง</td>
                        <td align="center" bgcolor="#D5D5D5"><?php
                            if ($result2["s22"] > 0) {
                                echo "ผ่าน";
                            } else {
                                echo "ไม่ผ่าน";
                            } ?></td>
                    </tr>

                    <tr>
                        <td align="center">3. ที่ดินที่มีปัญหาและขาดความอุดมสมบูรณ์
                            ได้รับการพัฒนาและฟื้นฟูคุณภาพของทรัพยากรดินเพื่อนํามาใช้ประโยชน์
                        </td>
                        <td align="center">จำนวนที่ดินที่ได้รับการฟื้นฟู</td>
                        <td align="center" bgcolor="#D5D5D5"><?php echo $result2["s23"]; ?></td>
                        <td align="center">แปลง</td>
                        <td align="center" bgcolor="#D5D5D5"><?php
                            if ($result2["s23"] > 0) {
                                echo "ผ่าน";
                            } else {
                                echo "ไม่ผ่าน";
                            } ?></td>
                    </tr>


                </table>
                <br>
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

                <div class="container">
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
                </div>
            </div>
        </div>
    </div>


</div>


</body>
</html>
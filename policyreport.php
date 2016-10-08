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
                            <td align="center" colspan="7" class="bg-success">
                                <h4>ยุทธศาสตร์ที่ 1 : ด้านการรักษาความสมดุลทางธรรมชาติ
                                    การอนุรักษ์ที่ดินและทรัพยากรดินอย่างยั่งยืน</h4>
                                เพื่อรักษาความสมดุลระหว่างพื้นที่อนุรักษ์และพื้นที่ใช้ประโยชน์โดยคำนึงถึงการอนุรักษ์และฟื้นฟูทรัพยากรธรรมชาติและสิ่งแวดล้อม
                                และการพัฒนาด้านเศรษฐกิจและสังคม
                            </td>
                    </table>


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

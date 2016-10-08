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
    <link href="css/table.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', serif;
            font-size: 14px;
        }
    </style>

</head>

<body>


<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>
</nav>
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


<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">


            <div class="panel-heading">
                <h1 class="h2"> นโยบายและแผน</h1>
            </div>


            <div class="container">


                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#menu1">ยุทธศาสตร์ที่ 1</a></li>
                    <li><a data-toggle="tab" href="#menu2">ยุทธศาสตร์ที่ 2</a></li>
                    <li><a data-toggle="tab" href="#menu3">ยุทธศาสตร์ที่ 3</a></li>
                    <li><a data-toggle="tab" href="#menu4">ยุทธศาสตร์ที่ 4</a></li>
                </ul>


                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade in active">
                        <h3>ยุทธศาสตร์ที่ 1 ด้านการรักษาความสมดุลของธรรมชาติ
                            การอนุรักษ์ที่ดินและทรัพยากรที่ดินอย่างยั่งยืน</h3><br>

                        <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                              class="form-horizontal">

                            <div class="divTable">
                                <div class="divTableBody">
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>1.1 พื้นที่ป่าไม้</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>

                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>1.2 พื้นที่ประเทศไทยทั้งหมด</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>2.1 อุทยานแห่งชาติ</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>แห่ง</b></div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>เนื้อที่ ตาราง กม.</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดที่ประกาศเพิ่มในแต่ละปี</b></div>

                                    </div>

                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>2.2 เขตรักษาพันธ์ุสัตว์ป่า</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>แห่ง</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>เนื้อที่ ตาราง กม.</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดที่ประกาศเพิ่มในแต่ละปี</b></div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>2.3 วนอุทยาน</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>แห่ง</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>เนื้อที่ ตาราง กม.</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดที่ประกาศเพิ่มในแต่ละปี</b></div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>2.4 เขตห้ามล่าสัตว์ป่า</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>แห่ง</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>เนื้อที่ ตาราง กม.</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดที่ประกาศเพิ่มในแต่ละปี</b></div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>2.5 เขตป่าสงวนแห่งชาติ
                                                ที่กำหนดเป็นเขตป่าเพื่อการอนุรักษ์</b>
                                        </div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>แห่ง</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>เนื้อที่ ตาราง กม.</b></div>

                                    </div>

                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.1 พื้นที่ป่าเสื่อมโทรมี่ได้รับการสำรวจ</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>แห่ง</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b><b>เนื้อที่ ตาราง กม.</b></b>
                                        </div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดที่ประกาศเพิ่มในแต่ละปี</b></div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.2 พื้นที่ป่าเสื่อมโทรมที่ได้รับการฟื้นฟู</b>
                                        </div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>จำนวนโครงการ/จำนวนแปลง</b></div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>เนื้อที่ ตาราง กม.</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดที่ประกาศเพิ่มในแต่ละปี</b></div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>4.
                                                จำนวนแนวเขตพื้นที่อนุรักษ์และที่ดินที่ได้มีการจัดทำแนวเขต</b>
                                        </div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ตาราง กม.</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31"
                                                                         value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>


                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell">
                                            <button type="submit" name="btnsave3" class="btn btn-default">
                                                <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                                            </button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- DivTable.com -->
                        </form>
                    </div>

                    <!--                    ______________________ ______________________ ______________________ ______________________ ______________________-->


                    <div id="menu2" class="tab-pane fade">
                        <h3>ยุทธศาสตร์ที่ 2 ด้านการใช้ที่ดิน และ ทรัพยากรที่ดินเพื่อให้เกิดประโยชน์สูงสุด</h3><br>
                        <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                              class="form-horizontal">

                            <div class="divTable">
                                <div class="divTableBody">

                                    <div class="divTableRow">
                                        <div class="divTableCell">1.1 เนื้อที่ของที่ดินที่มีการใช้ที่ดินที่เหมาะกับศักยภาพและสมรรถนะของทรัพยากรดิน</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2559)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2560)</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2561)</b></div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2562)</b></div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2563)</b></div>
                                    </div>

                                    <hr>

                                    <div class="divTableRow">
                                        <div class="divTableCell">1.2 เนื้อที่ของที่ดินที่มีการใช้ที่ดินไม่เหมาะสมกับศักยภาพ และ สมรถถนะของทรัพยากรดิน</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2559)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2560)</b></div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2561)</b></div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2562)</b></div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2563)</b></div>
                                    </div>

                                    <hr>


                                    <div class="divTableRow">
                                        <div class="divTableCell">2.1 ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการ ใช้ประโยชน์ของประเทศ</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ยอดการสำรวจล่าสุด ที่เสนอให้ คทช. เห็นชอบ ใช้เป็นข้อมูลปีฐาน (ไร่)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>2.2 ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการ ใช้ประโยชน์ต่างๆ</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2559)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2560)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2561)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2562)</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b></b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่ (รวมปี พ.ศ. 2563)</b></div>
                                    </div>

                                    <hr>


                                    <div class="divTableRow">
                                        <div class="divTableCell">3.1 เนื้อที่ของที่ดินที่มีปัญหา ดินเค็ม</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.2 เนื้อที่ของที่ดินที่มีปัญหา ดินทรายจัด</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.3 เนื้อที่ของที่ดินที่มีปัญหา ดินตื้น ดินที่มีชั้นลูกรัง</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.4 เนื้อที่ของที่ดินที่มีปัญหา ดินเปรี้ยวจัด</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.5 เนื้อที่ของที่ดินที่มีปัญหา ดินอินทรีย์</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.6 เนื้อที่ของที่ดินที่มีปัญหา ดินดาน</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.7 เนื้อที่ของที่ดินที่มีปัญหา ดินที่มีการปนเปื้อน</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell"><b>3.8 เนื้อดินของที่ดินที่มีปัญหาอื่นๆ</b></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="s31" value="<?php echo $result3["s31"]; ?>"/></div>
                                        <div class="divTableCell"><b>ไร่</b></div>
                                    </div>





                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell">
                                            <button type="submit" name="btnsave3" class="btn btn-default">
                                                <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>


                    <div id="menu3" class="tab-pane fade">
                        <h3>ยุทธศาสตร์ที่ 3</h3>
                        <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                              class="form-horizontal">

                            <table class="table table-bordered table-responsive">

                                <tr>
                                    <td><label class="control-label"> จำนวนผู้ยากไร้ที่ไม่มีที่ดินทำกินลดลง </label>
                                    </td>
                                    <td><input class="form-control" type="text" name="s31"
                                               value="<?php echo $result3["s31"]; ?>"/></td>

                                    <td><label class="control-label"> จำนวนผู่ไม่มีที่ดินทำกินสำรวจในปีก่อนหน้า </label>
                                    </td>
                                    <td><input class="form-control" type="text" name="s31new"
                                               value="<?php echo $result3["s31new"]; ?>"/></td>

                                </tr>

                                <tr>
                                    <td><label class="control-label">
                                            มีการเข้าถึงการครอบครองที่ดินอย่างทั่วถึงเป็นธรรมมากขึ้น </label></td>
                                    <td><input class="form-control" type="text" name="s32"
                                               value="<?php echo $result3["s32"]; ?>"/></td>
                                    <td><label class="control-label">
                                            จำนวนผู้ที่อยู่ระหว่างขอจัดสรรที่ดิน สำรวจในปีก่อนหน้า </label></td>
                                    <td><input class="form-control" type="text" name="s32new"
                                               value="<?php echo $result3["s32new"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label"> การบุกรุกที่ดินของรัฐลดลง </label></td>
                                    <td><input class="form-control" type="text" name="s33"
                                               value="<?php echo $result3["s33"]; ?>"/></td>
                                    <td><label class="control-label"> ที่ดินรัฐที่ถูกบุกรุก สำรวจในปีก่อนหน้า </label>
                                    </td>
                                    <td><input class="form-control" type="text" name="s33new"
                                               value="<?php echo $result3["s33new"]; ?>"/></td>
                                </tr>


                                <tr>
                                    <td align="center" colspan="2">
                                        <button type="submit" name="btnsave3" class="btn btn-default">
                                            <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                                        </button>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>


                    <div id="menu4" class="tab-pane fade">
                        <h3>ยุทธศาสตร์ที่ 4</h3>
                        <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                              class="form-horizontal">

                            <table class="table table-bordered table-responsive">

                                <tr>
                                    <td><label class="control-label">
                                            มีองค์กรในการขับเคลื่อนและบูรณาการนโยบายด้านการบริหารจัดการที่ดินและทรัพยากรดิน </label>
                                    </td>
                                    <td><input class="form-control" type="text" name="s41"
                                               value="<?php echo $result4["s41"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label">
                                            มีระบบฐานข้อมูลที่สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดินอย่างมีประสิทธิภาพ </label>
                                    </td>
                                    <td><input class="form-control" type="text" name="s42"
                                               value="<?php echo $result4["s42"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label">
                                            กฎหมายได้รับการพัฒนาและแก้ไขปรับปรุงให้สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดินอย่างมีประภาพ </label>
                                    </td>
                                    <td><input class="form-control" type="text" name="s43"
                                               value="<?php echo $result4["s43"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label">
                                            มีการพัฒนาองค์ความรู้ด้านการบริหารจัดการที่ดินและทรัพยากรดิน </label></td>
                                    <td><input class="form-control" type="text" name="s44"
                                               value="<?php echo $result4["s44"]; ?>"/></td>
                                </tr>


                                <tr>
                                    <td align="center" colspan="2">
                                        <button type="submit" name="btnsave4" class="btn btn-default">
                                            <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                                        </button>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>
                </div>
            </div>


            <?php
            if (isset($errMSG)) {
                ?>
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-info-sign"></span> <strong><?php echo $errMSG; ?></strong>
                </div>
                <?php
            } else if (isset($successMSG)) {
                ?>
                <div class="alert alert-success">
                    <strong><span class="glyphicon glyphicon-info-sign"></span> <?php echo $successMSG; ?></strong>
                </div>
                <?php
            }
            ?>
            <div class="panel-body">
                <form method="post" action="insert.php" enctype="multipart/form-data" class="form-horizontal">

                    <table class="table table-bordered table-responsive">


                    </table>

                </form>
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

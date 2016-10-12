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
            font-family: 'Kanit', sans-serif;
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
$sql = "SELECT * FROM strategy4 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result4 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">


            <div class="panel-heading">
                <h3>ยยุทธศาสตร์ที่ 4 ด้านการบริหารจัดการที่ดินและทรัพยากรดิน
                </h3>
            </div>
            <br>
            <div class="container">
                <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                      class="form-horizontal">

                    <div class="divTable">
                        <div class="divTableBody">

                            <div class="divTableRow">
                                <div class="divTableCell">1.1 มีการพัฒนาฐานข้อมูล ระบบข้อมูลที่เกี่ยวข้องเพิ่มขึ้นในแต่ละปีหรือไม่
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d1"
                                                                 value="<?php echo $result4["d1"]; ?>"/></div>
                                <div class="divTableCell"> ฐานข้อมูล</div>
                            </div>
                            <hr>
                            <div class="divTableRow">
                                <div class="divTableCell">2.1 ชื่อกฎหมายที่อยู่ขั้นตอนการ ยกร่าง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d2"
                                                                 value="<?php echo $result4["d2"]; ?>"/></div>
                                <div class="divTableCell">กฎหมาย</div>
                            </div>
                                                      <div class="divTableRow">
                                <div class="divTableCell">2.2 หน่วยงานที่ทำการ ยกร่าง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d3"
                                                                 value="<?php echo $result4["d3"]; ?>"/></div>
                                <div class="divTableCell">หน่วยงาน</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">2.3 สาระสำคัญ ของกฎหมายที่อยู่ขั้นตอนการ ยกร่าง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d4"
                                                                 value="<?php echo $result4["d4"]; ?>"/></div>
                                <div class="divTableCell">สาระสำคัญ</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">2.4 ส่วนที่สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดิน ในกฎหมายที่อยู่ขั้นตอนการ ยกร่าง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d5"
                                                                 value="<?php echo $result4["d5"]; ?>"/></div>
                                <div class="divTableCell">ส่วน</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">2.5 ชื่อกฎหมายที่อยู่ขั้นตอนการ ปรับปรุง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d6"
                                                                 value="<?php echo $result4["d6"]; ?>"/></div>
                                <div class="divTableCell">กฎหมาย</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">2.6 หน่วยงานที่ทำการ  ปรับปรุง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d7"
                                                                 value="<?php echo $result4["d7"]; ?>"/></div>
                                <div class="divTableCell">หน่วยงาน</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">2.7 สาระสำคัญ ของกฎหมายที่อยู่ขั้นตอนการ  ปรับปรุง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d8"
                                                                 value="<?php echo $result4["d8"]; ?>"/></div>
                                <div class="divTableCell">สาระสำคัญ</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">2.8 ส่วนที่สนับสนุนการบริหารจัดการที่ดินและทรัพยากรดิน ในกฎหมายที่อยู่ขั้นตอนการ  ปรับปรุง
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="d9"
                                                                 value="<?php echo $result4["d9"]; ?>"/></div>
                                <div class="divTableCell">ส่วน</div>
                            </div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell"></div>
                            <div class="divTableCell">
                                <button type="submit" name="btnsave4" class="btn btn-default">
                                    <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                                </button>
                            </div>
                        </div>

                    </div>
            </div>
            </form>


        </div>

        <!--                    ______________________ ______________________ ______________________ ______________________ ______________________-->


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

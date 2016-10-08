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
$sql = "SELECT * FROM strategy2 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result2 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">


            <div class="panel-heading">
                <h3>ยุทธศาสตร์ที่ 2 ด้านการใช้ที่ดินและทรัพยากรดินเพื่อให้เกิดประโยชน์สูงสุด
                    </h3>
            </div>
            <br>
            <div class="container">
                <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                      class="form-horizontal">

                    <div class="divTable">
                        <div class="divTableBody">

                            <div class="divTableRow">
                                <div class="divTableCell">1.1 เนื้อที่ของที่ดินที่มีการใช้ที่ดินที่เหมาะกับศักยภาพและสมรรถนะของทรัพยากรดิน</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b1" value="<?php echo $result2["b1"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2559)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell"></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b2" value="<?php echo $result2["b2"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2560)</div>

                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell"></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b3" value="<?php echo $result2["b3"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2561)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b4" value="<?php echo $result2["b4"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2562)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b5" value="<?php echo $result2["b5"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2563)</div>
                            </div>

                            <hr>

                            <div class="divTableRow">
                                <div class="divTableCell">1.2 เนื้อที่ของที่ดินที่มีการใช้ที่ดินไม่เหมาะสมกับศักยภาพ และ สมรถถนะของทรัพยากรดิน</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b6" value="<?php echo $result2["b6"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2559)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell"></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b7" value="<?php echo $result2["b7"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2560)</div>

                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell"></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b8" value="<?php echo $result2["b8"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2561)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b9" value="<?php echo $result2["b9"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2562)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b10" value="<?php echo $result2["b10"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2563)</div>
                            </div>

                            <hr>


                            <div class="divTableRow">
                                <div class="divTableCell">2.1 ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการ ใช้ประโยชน์ของประเทศ</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b11" value="<?php echo $result2["b11"]; ?>"/></div>
                                <div class="divTableCell">ยอดการสำรวจล่าสุด ที่เสนอให้ คทช. เห็นชอบ ใช้เป็นข้อมูลปีฐาน (ไร่)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">2.2 ที่ดินที่ถูกทิ้งร้าง หรือไม่มีการ ใช้ประโยชน์ต่างๆ</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b12" value="<?php echo $result2["b12"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2559)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b13" value="<?php echo $result2["b13"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2560)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b14" value="<?php echo $result2["b14"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2561)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b15" value="<?php echo $result2["b15"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2562)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell"><b></b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b16" value="<?php echo $result2["b16"]; ?>"/></div>
                                <div class="divTableCell">ไร่ (รวมปี พ.ศ. 2563)</div>
                            </div>

                            <hr>


                            <div class="divTableRow">
                                <div class="divTableCell">3.1 เนื้อที่ของที่ดินที่มีปัญหา ดินเค็ม</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b17" value="<?php echo $result2["b17"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.2 เนื้อที่ของที่ดินที่มีปัญหา ดินทรายจัด</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b18" value="<?php echo $result2["b18"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.3 เนื้อที่ของที่ดินที่มีปัญหา ดินตื้น ดินที่มีชั้นลูกรัง</b></div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b19" value="<?php echo $result2["b19"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.4 เนื้อที่ของที่ดินที่มีปัญหา ดินเปรี้ยวจัด</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b20" value="<?php echo $result2["b20"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.5 เนื้อที่ของที่ดินที่มีปัญหา ดินอินทรีย์</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b21" value="<?php echo $result2["b21"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.6 เนื้อที่ของที่ดินที่มีปัญหา ดินดาน</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b22" value="<?php echo $result2["b22"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.7 เนื้อที่ของที่ดินที่มีปัญหา ดินที่มีการปนเปื้อน</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b23" value="<?php echo $result2["b23"]; ?>"/></div>
                                <div class="divTableCell">ไร่</b></div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">3.8 เนื้อดินของที่ดินที่มีปัญหาอื่นๆ</div>
                                <div class="divTableCell"><input class="form-control" type="text" name="b24" value="<?php echo $result2["b24"]; ?>"/></div>
                                <div class="divTableCell">ไร่</div>
                            </div>





                            <div class="divTableRow">
                                <div class="divTableCell"></div>
                                <div class="divTableCell">
                                    <button type="submit" name="btnsave2" class="btn btn-default">
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

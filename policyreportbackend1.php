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
$sql = "SELECT * FROM strategy1 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>
<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3>ยุทธศาสตร์ที่ 1 ด้านการรักษาความสมดุลของธรรมชาติ
                    การอนุรักษ์ที่ดินและทรัพยากรที่ดินอย่างยั่งยืน</h3>
            </div>
            <br>


            <div class="container">

                <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                              class="form-horizontal">

                            <div class="divTable">
                                <div class="divTableBody">
                                    <div class="divTableRow">
                                        <div class="divTableCell">1.1 พื้นที่ป่าไม้</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a1"
                                                                         value="<?php echo $result["a1"]; ?>"/></div>
                                        <div class="divTableCell">ไร่</div>

                                    </div>

                                    <div class="divTableRow">
                                        <div class="divTableCell">1.2 พื้นที่ประเทศไทยทั้งหมด</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a2"
                                                                         value="<?php echo $result["a2"]; ?>"/></div>
                                        <div class="divTableCell">ไร่</div>
                                    </div>

                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">2.1 อุทยานแห่งชาติ</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a3"
                                                                         value="<?php echo $result["a3"]; ?>"/></div>
                                        <div class="divTableCell">แห่ง</div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a4"
                                                                         value="<?php echo $result["a4"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a5"
                                                                         value="<?php echo $result["a5"]; ?>"/></div>
                                        <div class="divTableCell">ยอดที่ประกาศเพิ่มในแต่ละปี</div>

                                    </div>

                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">2.2 เขตรักษาพันธ์ุสัตว์ป่า</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a6"
                                                                         value="<?php echo $result["a6"]; ?>"/></div>
                                        <div class="divTableCell">แห่ง</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a7"
                                                                         value="<?php echo $result["a7"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a8"
                                                                         value="<?php echo $result["a8"]; ?>"/></div>
                                        <div class="divTableCell">ยอดที่ประกาศเพิ่มในแต่ละปี</div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">2.3 วนอุทยาน</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a9"
                                                                         value="<?php echo $result["a9"]; ?>"/></div>
                                        <div class="divTableCell">แห่ง</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a10"
                                                                         value="<?php echo $result["a10"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a11"
                                                                         value="<?php echo $result["a11"]; ?>"/></div>
                                        <div class="divTableCell">ยอดที่ประกาศเพิ่มในแต่ละปี</div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">2.4 เขตห้ามล่าสัตว์ป่า</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a12"
                                                                         value="<?php echo $result["a12"]; ?>"/></div>
                                        <div class="divTableCell">แห่ง</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a13"
                                                                         value="<?php echo $result["a13"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a14"
                                                                         value="<?php echo $result["a14"]; ?>"/></div>
                                        <div class="divTableCell">ยอดที่ประกาศเพิ่มในแต่ละปี</div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">2.5 เขตป่าสงวนแห่งชาติ
                                                ที่กำหนดเป็นเขตป่าเพื่อการอนุรักษ์ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        </div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a15"
                                                                         value="<?php echo $result["a15"]; ?>"/></div>
                                        <div class="divTableCell">แห่ง</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a16"
                                                                         value="<?php echo $result["a16"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>

                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">3.1 พื้นที่ป่าเสื่อมโทรมี่ได้รับการสำรวจ</div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a17"
                                                                         value="<?php echo $result["a17"]; ?>"/></div>
                                        <div class="divTableCell">แห่ง</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a18"
                                                                         value="<?php echo $result["a18"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a19"
                                                                         value="<?php echo $result["a19"]; ?>"/></div>
                                        <div class="divTableCell">ยอดที่ประกาศเพิ่มในแต่ละปี</div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">3.2 พื้นที่ป่าเสื่อมโทรมที่ได้รับการฟื้นฟู
                                        </div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a20"
                                                                         value="<?php echo $result["a20"]; ?>"/></div>
                                        <div class="divTableCell">จำนวนโครงการ/จำนวนแปลง</div>
                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a21"
                                                                         value="<?php echo $result["a21"]; ?>"/></div>
                                        <div class="divTableCell">เนื้อที่ ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a22"
                                                                         value="<?php echo $result["a22"]; ?>"/></div>
                                        <div class="divTableCell">ยอดที่ประกาศเพิ่มในแต่ละปี</div>

                                    </div>
                                    <hr>
                                    <div class="divTableRow">
                                        <div class="divTableCell">4.
                                                จำนวนแนวเขตพื้นที่อนุรักษ์และที่ดินที่ได้มีการจัดทำแนวเขต
                                        </div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a23"
                                                                         value="<?php echo $result["a23"]; ?>"/></div>
                                        <div class="divTableCell">ตาราง กม.</div>

                                    </div>
                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell"><input class="form-control" type="text" name="a24"
                                                                         value="<?php echo $result["a24"]; ?>"/></div>
                                        <div class="divTableCell">ไร่</div>
                                    </div>


                                    <div class="divTableRow">
                                        <div class="divTableCell"></div>
                                        <div class="divTableCell">
                                            <button type="submit" name="btnsave1" class="btn btn-default">
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

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
$sql = "SELECT * FROM strategy3 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result3 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">


            <div class="panel-heading">
                <h3>ยุทธศาสตร์ที่ 3 ด้านการจัดที่ดินให้ประชาชนผู้ด้อยโอกาสอย่างทั่วถึงและเป็นธรรม
                </h3>
            </div>
            <br>
            <div class="container">
                <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                      class="form-horizontal">

                    <div class="divTable">
                        <div class="divTableBody">

                            <div class="divTableRow">
                                <div class="divTableCell">1.1 จำนวนผู้ได้รับการจัดที่ดินทำกินจากรัฐ
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c1"
                                                                 value="<?php echo $result3["c1"]; ?>"/></div>
                                <div class="divTableCell"> ราย</div>
                            </div>


                            <hr>
                            <div class="divTableRow">
                                <div class="divTableCell">2.2 ที่ดินทำกินที่รัฐได้จัดให้แก่ราษฎร
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c2"
                                                                 value="<?php echo $result3["c2"]; ?>"/></div>
                                <div class="divTableCell">จำนวนโครงการ (พื้นที่)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c3"
                                                                 value="<?php echo $result3["c3"]; ?>"/></div>
                                <div class="divTableCell">จำนวนแปลง (แปลง)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c4"
                                                                 value="<?php echo $result3["c4"]; ?>"/></div>
                                <div class="divTableCell">เนื้อที่ (ไร่)</div>
                            </div>
                            <hr>
                            <!--                            end 2.2-->

                            <div class="divTableRow">
                                <div class="divTableCell">2.3 ที่ดินเพื่อที่อยู่อาศัยที่รัฐได้จัดให้ แก่ราษฎร
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c5"
                                                                 value="<?php echo $result3["c5"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนโครงการ (พื้นที่)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c6"
                                                                 value="<?php echo $result3["c6"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนแปลง (แปลง)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c7"
                                                                 value="<?php echo $result3["c7"]; ?>"/></div>
                                <div class="divTableCell"> เนื้อที่ (ไร่)</div>
                            </div>

                            <hr>
                            <!--                            end 2.3-->

                            <div class="divTableRow">
                                <div class="divTableCell">3.1 ที่ดินของรัฐที่เคยถูกบุกรุก
                                    ที่ได้คืนจากการย้ายราษฎรเข้าสู่พื้นที่จัดที่ดิน&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c8"
                                                                 value="<?php echo $result3["c8"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนโครงการ (พื้นที่)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c9"
                                                                 value="<?php echo $result3["c9"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนแปลง (แปลง)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c10"
                                                                 value="<?php echo $result3["c10"]; ?>"/></div>
                                <div class="divTableCell"> เนื้อที่ (ไร่)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c11"
                                                                 value="<?php echo $result3["c11"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนครัวเรือน (ครัวเรือน)</div>
                            </div>
                            <hr>
                            <!--                            end 3.1-->

                            <div class="divTableRow">
                                <div class="divTableCell">3.2
                                    ที่ดินของรัฐที่เคยถูกบุกรุกและนำมาจัดที่ดินให้แก่ราษฎรเข้าใช้ประโยชน์
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c12"
                                                                 value="<?php echo $result3["c12"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนโครงการ (พื้นที่)</div>
                            </div>

                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c13"
                                                                 value="<?php echo $result3["c13"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนแปลง (แปลง)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c14"
                                                                 value="<?php echo $result3["c14"]; ?>"/></div>
                                <div class="divTableCell"> เนื้อที่ (ไร่)</div>
                            </div>
                            <div class="divTableRow">
                                <div class="divTableCell">
                                </div>
                                <div class="divTableCell"><input class="form-control" type="text" name="c15"
                                                                 value="<?php echo $result3["c15"]; ?>"/></div>
                                <div class="divTableCell"> จำนวนครัวเรือน (ครัวเรือน)</div>
                            </div>


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

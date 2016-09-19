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
                <h1 class="h2"> นโยบายและแผน</h1>
            </div>


            <div class="container">


                <ul class="nav nav-tabs">
                    <li><a data-toggle="tab" href="#menu1">ยุทธศาสตร์ที่ 1</a></li>
                    <li><a data-toggle="tab" href="#menu2">ยุทธศาสตร์ที่ 2</a></li>
                    <li><a data-toggle="tab" href="#menu3">ยุทธศาสตร์ที่ 3</a></li>
                    <li><a data-toggle="tab" href="#menu3">ยุทธศาสตร์ที่ 4</a></li>
                </ul>


                <div class="tab-content">
                    <div id="menu1" class="tab-pane fade in active">
                        <h3 align="center">ยุทธศาสตร์ที่ 1</h3>

                        <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                              class="form-horizontal">

                            <table class="table table-bordered table-responsive">

                                <tr>
                                    <td><label class="control-label">พื้นที่ป่าไม้ (ไร่)</label></td>
                                    <td><input class="form-control" type="text" name="s11"
                                               value="<?php echo $result["s11"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label">พื้นที่ที่ได้รับการประกาศใหม่ (ไร่)</label></td>
                                    <td><input class="form-control" type="text" name="s12"
                                               value="<?php echo $result["s12"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label">พื้นที่ป่าเสื่อมโทรมที่ได้รับการฟื้นฟูปัจจุบัน
                                            (ไร่) </label></td>
                                    <td><input class="form-control" type="text" name="s13"
                                               value="<?php echo $result["s13"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td><label class="control-label">แนวเขตพื้นที่อนุรักษ์ปัจจุบัน (ไร่)</label></td>
                                    <td><input class="form-control" type="text" name="s14"
                                               value="<?php echo $result["s14"]; ?>"/></td>
                                </tr>

                                <tr>
                                    <td align="center" colspan="2">
                                        <button type="submit" name="btnsave1" class="btn btn-default">
                                            <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                                        </button>
                                    </td>
                                </tr>

                            </table>
                        </form>
                    </div>


                    <div id="menu2" class="tab-pane fade">
                        <h3>ยุทธศาสตร์ที่ 2</h3>
                        <p>Hello World</p>
                    </div>
                    <div id="menu3" class="tab-pane fade">
                        <h3>ยุทธศาสตร์ที่ 3</h3>
                        <p>Hello World</p>
                    </div>
                    <div id="menu4" class="tab-pane fade">
                        <h3>ยุทธศาสตร์ที่ 4</h3>
                        <p>Hello World</p>
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

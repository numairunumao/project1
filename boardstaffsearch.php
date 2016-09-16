<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>เกี่ยวกับโปรเจค</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/portfolio-item.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
    <!-- Portfolio Item Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ระบบนำเสนอรายงาน
            </h1>
        </div>
    </div>

    <hr>

    <?php

    ini_set('display_errors', 1);
    error_reporting(~0);

    $strKeyword = null;

    if (isset($_POST["txtKeyword"])) {
        $strKeyword = $_POST["txtKeyword"];
    }
    ?>
    <form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
        <table width="1000" border="1" align="center">
            <tr>
                <th>Keyword
                    <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword; ?>">
                    <input type="submit" value="ค้นหา"></th>
            </tr>
        </table>
    </form>

    <br>

    <?php

    $serverName = "localhost";
    $userName = "root";
    $userPassword = "";
    $dbName = "project1";
    $conn = mysqli_connect($serverName, $userName, $userPassword, $dbName);
    mysqli_set_charset($conn, "utf8");
    date_default_timezone_set('Asia/Bangkok');


    $sql = "SELECT * FROM dataFollow WHERE a1 LIKE '%" . $strKeyword . "%' ";

    $query = mysqli_query($conn, $sql);

    ?>
    <table width="1000" border="1" align="center">
        <tr>
            <th width="91">
                <div align="center">จังหวัด</div>
            </th>
            <th width="91">
                <div align="center">ชื่อพื้นที่</div>
            </th>
            <th width="38">
                <div align="center">แก้ไข</div>
            </th>
            <th width="38">
                <div align="center">ดูข้อมูลทั้งหมด</div>
            </th>
            <th width="38">
                <div align="center">ลบทิ้ง</div>
            </th>
            <th width="38">
                <div align="center">ปริ้นไฟล์ PDF</div>
            </th>
        </tr>

        <?php
        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            ?>
            <tr>
                <td>
                    <div align="center"><?php echo $result["a1"]; ?></div>
                </td>

                <td>
                    <div align="center"><?php echo $result["a2"]; ?></div>
                </td>

                <td align="center">
                    <a href="phpMySQLDeleteRecord.php?CusID=<?php echo $objResult["CustomerID"]; ?>">แก้ไข</a>
                </td>

                <td align="center">
                    <a href="phpMySQLDeleteRecord.php?CusID=<?php echo $objResult["CustomerID"]; ?>">คลิก</a>
                </td>

                <td align="center">
                    <a href="phpMySQLDeleteRecord.php?CusID=<?php echo $objResult["CustomerID"]; ?>">ลบ</a>
                </td>

                <td align="center">
                    <a href="phpMySQLDeleteRecord.php?CusID=<?php echo $objResult["CustomerID"]; ?>">ปริ้น</a>
                </td>

            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($conn);
    ?>


    <!--    <table class="table table-bordered table-responsive">-->
    <!--        <form method="post" action="search.php" enctype="multipart/form-data" class="form-horizontal">-->
    <!---->
    <!---->
    <!--            <tr>-->
    <!--                <td><h1>รายงานระบบติดตามประเมินผลโครงการจัดที่ดิน</h1></td>-->
    <!--                <td></td>-->
    <!--            </tr>-->
    <!---->
    <!---->
    <!--            <tr>-->
    <!--                <td><label class="control-label">เลือกจังหวัด</label></td>-->
    <!--                <td><select name="a1">-->
    <!--                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>-->
    <!--                        <option value="ลำพูน">ลำพูน</option>-->
    <!--                        <option value="พะเยา" selected>พะเยา</option>-->
    <!--                        <option value="น่าน">น่าน</option>-->
    <!--                    </select>-->
    <!--                </td>-->
    <!--            </tr>-->
    <!--            <tr>-->
    <!--                <td><label class="control-label"> เลือกพื้นที่ </label></td>-->
    <!--                <td><input class="form-control" type="text" name="a2"/></td>-->
    <!--            </tr>-->
    <!--            </tr>-->
    <!---->
    <!--            <tr>-->
    <!--                <td colspan="2">-->
    <!--                    <button type="submit" name="btnsave" class="btn btn-default">-->
    <!--                        <span class="glyphicon glyphicon-save"></span> &nbsp; ค้นหา-->
    <!--                    </button>-->
    <!--                </td>-->
    <!--            </tr>-->
    <!---->
    <!---->
    <!---->
    <!--        </form>-->
    <!--    </table>-->


    <!-- Footer -->
    <?php include("footer.php"); ?>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

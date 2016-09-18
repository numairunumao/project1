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
    <link href="css/page.css" rel="stylesheet">

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

    <div class="row centered-form">
        <div class="panel panel-primary">


            <div class="panel-heading">
                <h1 class="h3" > รายงานระบบติดตามประเมินผลโครงการจัดที่ดิน </h1>
            </div>
        <div class="panel-body">
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
                    <tr class="bg-success">
                        <th>พิมชื่อจังหวัดเพื่อทำการค้นหา
                        <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword; ?>">
                        <input type="submit" value="ค้นหา"></th>
                    </tr>
                </table>
            </form>



    <br>

    <?php

    include_once 'dbconfig.php';
    $sql = "SELECT * FROM dataFollow WHERE a1 LIKE '%" . $strKeyword . "%' ";
    $query = mysqli_query($mysqli, $sql);

    ?>
    <table width="1000" border="1" align="center">
        <tr class="bg-primary">
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
                    <a href="boardstaffedit.php?id=<?php echo $result["id"]; ?>">แก้ไข</a>
                </td>

                <td align="center">
                    <a href="viewreport.php?id=<?php echo $result["id"]; ?>">คลิก</a>
                </td>

                <td align="center">
                    <a href="delete.php?id=<?php echo $result["id"]; ?>" onclick="return confirm('คุณแน่ใจที่จะลบ ?')" >ลบ</a>
                </td>

                <td align="center">
                    <a href="pdf.php?id=<?php echo $result["id"]; ?>">ปริ้น</a>
                </td>

            </tr>
            <?php
        }
        ?>
    </table>
    <?php
    mysqli_close($mysqli);
    ?>

            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>

</div>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

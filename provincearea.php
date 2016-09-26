<?php
session_start();


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

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>
    <!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container" style="width: 1200px">
    <br><br><br>

    <div class="row centered-form">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="h2">ฐานข้อมูลภูมิสารสนเทศโครงการจัดที่ดินทำกินตามนโยบายคณะกรรมการที่ดินแห่งชาติ</h1>
            </div>
            <br>
            <div class="container">

                <div class="panel-body">

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
                                    <input name="txtKeyword" type="text" id="txtKeyword"
                                           value="<?php echo $strKeyword; ?>">
                                    <input type="submit" value="ค้นหา"></th>
                            </tr>
                        </table>
                    </form>


                    <br>

                    <?php

                    include_once 'dbconfig.php';
                    $sql = "SELECT * FROM provincearea WHERE province LIKE '%" . $strKeyword . "%' ";
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
                                <div align="center">ไฟล์แผนที่</div>
                            </th>
                            <th width="38">
                                <div align="center">ลบไฟล์</div>
                            </th>
                        </tr>

                        <?php
                        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                            ?>
                            <tr>
                                <td>
                                    <div align="center"><?php echo $result["province"]; ?></div>
                                </td>

                                <td>
                                    <div align="center"><?php echo $result["area"]; ?></div>
                                </td>

                                <td align="center">
                                    <?php echo '<p><a href="province_area_image/' . $result['province_image2'] . '" target="_blank">' . $result['province_image2'] . '</a></p>'; ?>
                                </td>

                                <td align="center">
                                    <a href="deleteprovincearea.php?id=<?php echo $result["id"]; ?>"
                                       onclick="return confirm('คุณแน่ใจที่จะลบ ?')">ลบ</a>
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

    </div>

</div>

</div>


<!-- Portfolio Item Heading -->


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






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
    <!-- /.container -->
</nav>

<!-- Page Content --><br><br><br>
<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1 class="h2">ฐานข้อมูลภูมิสารสนเทศเกี่ยวกับการบริหารจัดการที่ดินของประเทศ</h1>
            </div>
            <br>
            <div class="container">

                <!--                          <table width="1000" border="1" align="center">-->
                <!--                    <tr class="bg-primary">-->
                <!--                        <th width="91">-->
                <!--                            <div align="center">จังหวัด</div>-->
                <!--                        </th>-->
                <!--                        <th width="91">-->
                <!--                            <div align="center">ชื่อพื้นที่</div>-->
                <!--                        </th>-->
                <!--                        <th width="38">-->
                <!--                            <div align="center">ไฟล์แผนที่</div>-->
                <!--                        </th>-->
                <!---->
                <!--                    </tr>-->
                <!---->
                <!--                --><?php
                //                require_once 'dbconfig.php';
                //                $sql = "SELECT * FROM allprovince";
                //                $query = mysqli_query($mysqli, $sql);
                //                echo "<table>";
                //                while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                //                    echo '<tr><p><a href="province_image/' . $result['province_image'] . '" target="_blank">' . $result['province_image'] . '</a></p></tr>';
                //                }
                //                ?>
                <!---->


                <?php

                include_once 'dbconfig.php';
                $sql = "SELECT * FROM allprovince";
                $query = mysqli_query($mysqli, $sql);

                ?>
                <table width="750" border="1" align="center">
                    <tr class="bg-primary">
                        <th width="700">
                            <div align="center">รายชื่อไฟล์</div>
                        </th>

                        <th>
                            <div align="center"> ลบไฟล์</div>
                        </th>

                    </tr>

                    <?php
                    while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        ?>
                        <tr>
                            <td align="center">
                                <?php echo '<p><a href="province_image/' . $result['province_image'] . '" target="_blank">' . $result['province_image'] . '</a></p>'; ?>
                            </td>

                            <td align="center">
                                <a href="deleteallprovince.php?id=<?php echo $result["id"]; ?>"
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
<!-- Portfolio Item Heading -->


<!-- Footer -->
<?php include("footer.php"); ?>
<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>






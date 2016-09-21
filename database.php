<?php
session_start();


if ($_SESSION["role"] == 'ceo') {

    echo "ceo";

} else if ($_SESSION["role"] == 'board') {
    echo "board";

} else {

    echo "You are not allow to visit this page";
    exit();
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
<div class="container">


    <div class="container">
        <div class="row centered-form">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1 class="h2">ฐานข้อมูลภูมิสารสนเทศ</h1>
                </div>
                <br>
                <div class="container">


                    <div class="panel-group" id="accordion">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        ฐานข้อมูลภูมิสารสนเทศเกี่ยวกับการบริหารจัดการที่ดินของประเทศ</a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body"><?php

                                    require_once 'dbconfig.php';
                                    $sql = "SELECT * FROM dataFollow";
                                    $query = mysqli_query($mysqli, $sql);

                                    while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                                        echo '<p><a href="user_images/' . $result['b4'] . '" target="_blank">' . $result['b4'] . '</a></p>';
                                        echo '<p><a href="user_images/' . $result['d16'] . '" target="_blank">' . $result['d16'] . '</a></p>';
                                        echo '<p><a href="user_images/' . $result['d24'] . '" target="_blank">' . $result['d24'] . '</a></p>';
                                        echo '<p><a href="user_images/' . $result['f1'] . '" target="_blank">' . $result['f1'] . '</a></p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        ฐานข้อมูลภูมิสารสนเทศโครงการจัดที่ดินทำกินตามนโยบายคณะกรรมการที่ดินแห่งชาติ </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">


                                    <p>Hello world </p>


                                </div>
                            </div>
                        </div>
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






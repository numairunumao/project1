<?php
session_start();
error_reporting(0);
?>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li>
                    <a href="index.php">หน้าแรก</a>
                </li>
                <?php
                if (!$_SESSION)
                    echo " <li>
                    <a href=\"login.php\">เข้าสู่ระบบ</a>
                </li>";
                ?>
                <?php
                if ($_SESSION)
                    echo " <li>
                    <a href=\"policyreport.php\">ระบบติดตามประเมินผลนโยบายและแผน</a>
                </li>";
                ?>
                <?php
                if ($_SESSION["role"] == "ceo")
                    echo " <li>
                    <a href=\"policyreportbackend.php\">กรอกผลประเมิณนโยบายและแผน</a>
                </li>";
                ?>

                <?php
                if ($_SESSION["role"] == "staff" || $_SESSION["role"] == "board")
                    echo " <li>
                    <a href=\"boardstaff.php\">ระบบติดตามประเมินผลโครงการจัดที่ดิน</a>
                </li>";
                ?>



                <?php
                if ($_SESSION["role"] == "ceo" || $_SESSION["role"] == "board")
                    echo "  <li class=\"dropdown\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">ฐานข้อมูลภูมิสารสนเทศ
                        <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"allprovince.php\">ฐานข้อมูลภูมิสารสนเทศเกี่ยวกับการบริหารจัดการที่ดินของประเทศ</a></li>
                        <li><a href=\"provincearea.php\">ฐานข้อมูลภูมิสารสนเทศโครงการจัดที่ดินทำกินตามนโยบายคณะกรรมการที่ดินแห่งชาติ</a></li>
                    </ul>
                </li>";
                ?>








                <?php
                if ($_SESSION["role"] == "board")
                    echo " <li>
                    <a href=\"uploadbackend.php\">อัพโหลด ฐานข้อมูลภูมิสารสนเทศ</a>
                </li>";
                ?>

                <?php
                if ($_SESSION)
                    echo " <li>
                    <a href=\"boardstaffsearch.php\">ระบบนำเสนอรายงาน</a>
                </li>";
                ?>
                <?php
                if ($_SESSION)
                    echo " <li>
                    <a href=\"logout.php\">ออกจากระบบ</a>
                </li>";
                ?>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
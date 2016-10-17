<?php
session_start();


if (!$_SESSION) {
    $message = "ต้องเข้าสู่ระบบก่อน";
    echo "<script type='text/javascript'>alert('$message') ;</script> ";
    header("refresh:1;login.php");
}

?>


<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

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
                    <h1 class="h2">อัพโหลด ฐานข้อมูลภูมิสารสนเทศ</h1>
                </div>
                <br>
                <div class="container">


                    <div class="panel-group" id="accordion" style="width: auto">


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        ฐานข้อมูลภูมิสารสนเทศเกี่ยวกับการบริหารจัดการที่ดินของประเทศ</a>
                                </h4>
                            </div>


                            <div id="collapse2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form method="post" action="uploadbackendprocess.php" enctype="multipart/form-data">


                                        <div><input class="input-group" type="file" name="province_image"
                                                    accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                                        <br>
                                        <div>
                                            <button type="submit" name="btnsave" class="btn btn-primary btn-xs">
                                                <span class="glyphicon glyphicon-save"></span> &nbsp; upload
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <!--                        ____________________ ____________________ ____________________ ____________________ ____________________-->


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        ฐานข้อมูลภูมิสารสนเทศโครงการจัดที่ดินทำกินตามนโยบายคณะกรรมการที่ดินแห่งชาติ </a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form method="post" action="uploadbackendprocess2.php"
                                          enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-sm-6"><b>ชื่อจังหวัด</b></div>
                                            <div class="col-sm-6"><select class="form-control" name="province" required>
                                                    <option value="" selected>--------- เลือกจังหวัด ---------</option>
                                                    <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                                                    <option value="กระบี่">กระบี่</option>
                                                    <option value="กาญจนบุรี">กาญจนบุรี</option>
                                                    <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                                                    <option value="กำแพงเพชร">กำแพงเพชร</option>
                                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                                    <option value="จันทบุรี">จันทบุรี</option>
                                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                                    <option value="ชัยนาท">ชัยนาท</option>
                                                    <option value="ชัยภูมิ">ชัยภูมิ</option>
                                                    <option value="ชุมพร">ชุมพร</option>
                                                    <option value="ชลบุรี">ชลบุรี</option>
                                                    <option value="เชียงใหม่">เชียงใหม่</option>
                                                    <option value="เชียงราย">เชียงราย</option>
                                                    <option value="ตรัง">ตรัง</option>
                                                    <option value="ตราด">ตราด</option>
                                                    <option value="ตาก">ตาก</option>
                                                    <option value="นครนายก">นครนายก</option>
                                                    <option value="นครปฐม">นครปฐม</option>
                                                    <option value="นครพนม">นครพนม</option>
                                                    <option value="นครราชสีมา">นครราชสีมา</option>
                                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                                    <option value="นครสวรรค์">นครสวรรค์</option>
                                                    <option value="นราธิวาส">นราธิวาส</option>
                                                    <option value="น่าน">น่าน</option>
                                                    <option value="นนทบุรี">นนทบุรี</option>
                                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                                    <option value="ปทุมธานี">ปทุมธานี</option>
                                                    <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                                                    <option value="ปัตตานี">ปัตตานี</option>
                                                    <option value="พะเยา">พะเยา</option>
                                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                                    <option value="พังงา">พังงา</option>
                                                    <option value="พิจิตร">พิจิตร</option>
                                                    <option value="พิษณุโลก">พิษณุโลก</option>
                                                    <option value="เพชรบุรี">เพชรบุรี</option>
                                                    <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                                                    <option value="แพร่">แพร่</option>
                                                    <option value="พัทลุง">พัทลุง</option>
                                                    <option value="ภูเก็ต">ภูเก็ต</option>
                                                    <option value="มหาสารคาม">มหาสารคาม</option>
                                                    <option value="มุกดาหาร">มุกดาหาร</option>
                                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                                    <option value="ยโสธร">ยโสธร</option>
                                                    <option value="ยะลา">ยะลา</option>
                                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                                    <option value="ระนอง">ระนอง</option>
                                                    <option value="ระยอง">ระยอง</option>
                                                    <option value="ราชบุรี">ราชบุรี</option>
                                                    <option value="ลพบุรี">ลพบุรี</option>
                                                    <option value="ลำปาง">ลำปาง</option>
                                                    <option value="ลำพูน">ลำพูน</option>
                                                    <option value="เลย">เลย</option>
                                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                                    <option value="สกลนคร">สกลนคร</option>
                                                    <option value="สงขลา">สงขลา</option>
                                                    <option value="สมุทรสาคร">สมุทรสาคร</option>
                                                    <option value="สมุทรปราการ">สมุทรปราการ</option>
                                                    <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                                                    <option value="สระแก้ว">สระแก้ว</option>
                                                    <option value="สระบุรี">สระบุรี</option>
                                                    <option value="สิงห์บุรี">สิงห์บุรี</option>
                                                    <option value="สุโขทัย">สุโขทัย</option>
                                                    <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                                    <option value="สุรินทร์">สุรินทร์</option>
                                                    <option value="สตูล">สตูล</option>
                                                    <option value="หนองคาย">หนองคาย</option>
                                                    <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                                                    <option value="อำนาจเจริญ">อำนาจเจริญ</option>
                                                    <option value="อุดรธานี">อุดรธานี</option>
                                                    <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                                                    <option value="อุทัยธานี">อุทัยธานี</option>
                                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                                    <option value="อ่างทอง">อ่างทอง</option>
                                                </select></div>

                                            <br><br><br>

                                            <div class="col-sm-6"><b>ชื่อพื้นที่</b></div>
                                            <div class="col-sm-6"><input class="form-control" type="text" name="area"
                                                                         required/></div>
                                            <br><br><br>
                                            <div class="col-sm-6"><b>ไฟล์</b></div>
                                            <div class="col-sm-6"><input class="input-group" type="file"
                                                                         name="province_image2"
                                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/>
                                            </div>
                                            <br><br><br>
                                            <div class="col-sm-6">
                                                <button type="submit" name="btnsave2" class="btn btn-primary btn-xs">
                                                    <span class="glyphicon glyphicon-save"></span> &nbsp; upload
                                                </button>
                                            </div>

                                        </div>
                                    </form>

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






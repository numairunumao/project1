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
<html lang="en" xmlns="http://www.w3.org/1999/html">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/portfolio-item.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <!-- date picker-->
    <!--    <link href="//getbootstrap.com/2.3.2/assets/css/bootstrap.css" rel="stylesheet" media="screen">-->
    <link href="css/datepicker.css" rel="stylesheet" media="screen">
    <link href="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.css" rel="stylesheet">
    <link href="//getbootstrap.com/2.3.2/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <!-- date picker-->
    <link href="css/page.css" rel="stylesheet">
    <link href="css/table3.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>
</nav>
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

<div class="container" style="width: 1000px">


    <div class="row centered-form">
        <div class="panel panel-default">

    <form method="post" action="insert2.php" enctype="multipart/form-data">
        <table class="table table-hover">
                        <thead>
                        <tr style="background: rgba(3, 21, 14, 0.3)">
                            <th><h2 class="text-left">ข้อมูลการติดตามประเมินผล</h2></th>
                            <th><h2 class="text-center">หมายเหตุ</h2></th>
                        </tr>
                        </thead>
            <tbody>
            <tr style="background: #DCDCDC">
                <th><h4><b>กรอกข้อมูลผู้ติดตาม</b></h4></th>
                <th>
                    <h></h>
                </th>
            </tr>
            <tr>
                <th class="col-md-8">จังหวัด (a1)</th>
                <td class="col-lg-4">
                    <select class="form-control" name="a1">
                        <option value="" selected>---------------เลือกจังหวัด --------------</option>
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
                    </select></td>

            </tr>

            <tr>
                <th class="col-md-8">ชื่อพื้นที่ (a2)</th>
                <td class="col-lg-4"><input class="form-control" type="text" name="a2"/></td>
            </tr>

            <tr>

                <th class="col-md-8">ประเภทของพื้นที่ที่นำมาจัดที่ดินทำกิน (a3)</th>
                <td class="col-lg-4">
                    <select class="form-control" name="a3">
                        <option value="" selected>------------- เลือกประเภทของพื้นที่ ---------</option>
                        <option value="พื้นที่ป่าสงวนแห่งชาติ">1. พื้นที่ป่าสงวนแห่งชาติ</option>
                        <option value="พื้นที่ป่าชายเลน">2. พื้นที่ป่าชายเลน</option>
                        <option value="พื้นที่เขตปฏิรูปที่ดิน">3. พื้นที่เขตปฏิรูปที่ดิน</option>
                        <option value="ที่ดินสาธารณประโยชน์"> 4. ที่ดินสาธารณประโยชน์</option>
                        <option value="พื้นที่นิคมสหกรณ์">5. พื้นที่นิคมสหกรณ์</option>
                        <option value="พื้นที่นิคมสร้างตนเอง">6. พื้นที่นิคมสร้างตนเอง</option>
                        <option value="ที่ราชพัสดุ">7. ที่ราชพัสดุ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่จากคณะอนุกรรมการจัดหาที่ดิน (a4)</th>
                <td class="col-lg-4">
                    <input style="width: 200px" class="form-control" type="text" name="a41" placeholder="ไร่">
                    <input style="width: 200px" class="form-control" type="text" name="a42" placeholder="งาน">
                    <input style="width: 200px" class="form-control" type="text" name="a43" placeholder="ตารางวา">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่จากหนังสืออนุญาตให้เข้าทำประโยชน์ในที่ดิน (a5)</th>
                <td class="col-lg-4">
                    <input style="width: 200px" class="form-control" type="text" name="a51" placeholder="ไร่">
                    <input style="width: 200px" class="form-control" type="text" name="a52" placeholder="งาน">
                    <input style="width: 200px" class="form-control" type="text" name="a53" placeholder="ตารางวา">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">ครอบคลุมพื้นที่ (a6)</th>
                <td class="col-lg-4">
                    <input class="form-control" type="text" name="a61" placeholder="อำเภอ">
                    <input class="form-control" type="text" name="a62" placeholder="ตำบล 1">
                    <input class="form-control" type="text" name="a63" placeholder="ตำบล 2">
                    <input class="form-control" type="text" name="a64" placeholder="ตำบล 3">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่อนุญาต/ทำสัญญาให้เข้าทำประโยชน์ในที่ดินตาม
                    หนังสืออนุญาตฯ (a7)
                </th>
                <td><input class="input-medium" type="text"
                           data-provide="datepicker" data-date-language="th-th" name="a7">
                </td>


            </tr>
            <tr>
                <th class="col-md-8">ส่งไฟล์หนังสืออนุญาตฯ/สัญญา (a8)</th>
                <td class="col-lg-4">
                    <input class="input-group" type="file" name="a8"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">หน่วยงานที่รับผิดชอบ (a9)</th>
                <td class="col-lg-4">
                    <select class="form-control" name="a9">
                        <option value="" selected>-------------- เลือกหน่วยงาน ------------</option>
                        <option value="1. ฝ่ายเลขานุการ คทช.">1. ฝ่ายเลขานุการ คทช.</option>
                        <option value="2. ฝ่ายคณะอนุกรรมการจัดหาที่ดิน">2. ฝ่ายคณะอนุกรรมการจัดหาที่ดิน</option>
                        <option value="3. ฝ่ายคณะอนุกรรมการจัดที่ดิน">3. ฝ่ายคณะอนุกรรมการจัดที่ดิน</option>
                        <option value="4. ฝ่ายคณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ">4.
                            ฝ่ายคณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">ชื่อผู้กรอกข้อมูล (a10)</th>
                <td class="col-lg-4"><input class="form-control" type="text" name="a10"/></td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่กรอกข้อมูล (a11)</th>
                <td class="col-lg-4">
                    <input class="input-medium" type="text"
                           data-provide="datepicker" data-date-language="th-th" name="a11"></td>
            </tr>

            <!--            _______________________________________ B1 - B2 ____________________________________________________________-->

            <tr style="background: #DCDCDC">
                <th class="col-md-8"><h4><b>ขั้นตอนการกำหนดพื้นที่และจัดทำข้อมูลพื้นที่</b></h4></th>
                <td class="col-lg-4">
                </td>
            </tr>

            <tr>
                <th class="col-md-8">การดำเนินการจัดทำข้อมูลพื้นที่ (b1)</th>
                <td class="col-lg-4">
                    <input type="radio" name="b11" value="no"/> อยู่ระหว่างดำเนินการ
                    <textarea name="b12" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <br>
                    <input type="radio" name="b11" value="yes"/> ดำเนินการแล้วเสร็จ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="b13">
                </td>
            </tr>

            <tr>
                <th class="col-md-8">ส่งไฟล์แผนที่ดำเนินการ (b2)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="b2"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <!--            _______________________________________ C1 - C10 ____________________________________________________________-->


            <tr style="background: #DCDCDC">
                <th class="col-md-8"><h4><b>ขั้นตอนการจัดหาที่ดิน</b></h4></th>
                <td class="col-lg-4">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่หน่วยงานรับผิดชอบพื้นที่เสนอข้อมูลต่อ คณะอนุกรรมการจัดหาที่ดิน (c1)</th>
                <td class="col-lg-4"><input class="input-medium" type="text"
                                            data-provide="datepicker" data-date-language="th-th" name="c1">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">การพิจารณาของคณะอนุกรรมการจัดหาที่ดิน (c2)</th>
                <td class="col-lg-4">
                    <input type="radio" name="c21" value="no"/> อยู่ระหว่างดำเนินการ
                    <textarea name="c22" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <br>
                    <input type="radio" name="c21" value="yes"/> ดำเนินการแล้วเสร็จ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="c23">
                </td>

            </tr>
            <tr>
                <th class="col-md-8">ส่งไฟล์รายงานการประชุม (c3)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="c3"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช. จังหวัด(c4)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="c4">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่คณะอนุกรรมการจัดหาที่ดินแจ้งต่อ กระทรวงมหาดไทย (c5)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="c5">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">การพิจารณาขอบเขตพื้นที่และข้อมูลผู้ครอบครองที่ดิน เดิม
                    และการรายงานผลการดำเนินงานของ คทช. จังหวัด ต่อคณะ อนุกรรมการจัดหาที่ดิน (c6)
                </th>
                <td class="col-lg-4"><input type="radio" name="c61" value="no"/> อยู่ระหว่างการพิจารณาและตรวจสอบของ
                    คทช.จังหวัด
                    <textarea name="c62" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <br>
                    <input type="radio" name="c61" value="yes"/> คทช. จังหวัด ส่งรายงานผลการดำเนินงาน
                    ต่อคณะอนุกรรมการจัดหาที่ดินแล้ว เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="c63">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">ส่งไฟล์ผลการดำเนินงาน (c7)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="c7"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">การพิจารณาผลการดำเนินงานของ คทช. จังหวัด ของคณะอนุกรรมการจัดหาที่ดิน (c8)</th>
                <td class="col-lg-4">
                    <input type="radio" name="c81" value="no"/> อยู่ระหว่างการพิจารณา
                    <textarea name="c82" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <br>
                    <input type="radio" name="c81" value="yes"/> พิจารณาเห็นชอบ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="c83">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">ส่งไฟล์รายงานการประชุม (c9)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="c9"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">การดำเนินงานของคณะอนุกรรมการจัดหาที่ดิน (c10)</th>
                <td class="col-lg-4">
                    <input type="radio" name="c101" value="no"/> คณะอนุกรรมการจัดหาที่ดินแจ้งผลการพิจารณาให้
                    คทช. จังหวัดทราบเมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="c102">
                    <br>
                    <input type="radio" name="c101" value="yes"/> กรณีเร่งด่วน วันที่คณะอนุกรรมการจัดหาที่ดินมอบหมาย
                    ให้ คทช. จังหวัด แจ้งหน่วยงานรับผิดชอบดำเนินการตาม
                    กระบวนการอนุญาต/จัดทำสัญญากับแต่ละหน่วยงาน
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="c103">
                </td>
            </tr>


            <!--            _______________________________________ D1 - C13 ____________________________________________________________-->


            <tr style="background: #DCDCDC">
                <th class="col-md-8"><h4><b>ขั้นตอนการจัดที่ดิน</b></h4></th>
                <td class="col-lg-4">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คณะอนุกรรมการจัดที่ดิน (d1)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="d1">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่ที่ได้รับอนุญาตให้ใช้ประโยชน์ตามหนังสืออนุญาตฯ (d2)</th>
                <td class="col-lg-4">
                    <input style="width: 200px" class="form-control" type="text" name="d21" placeholder="ไร่">
                    <input style="width: 200px" class="form-control" type="text" name="d22" placeholder="งาน">
                    <input style="width: 200px" class="form-control" type="text" name="d23" placeholder="ตารางวา">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่ที่จัดเพื่ออยู่อาศัยรวม (d3)</th>
                <td class="col-lg-4">
                    <input style="width: 200px" class="form-control" type="text" name="d31" placeholder="ไร่">
                    <input style="width: 200px" class="form-control" type="text" name="d32" placeholder="งาน">
                    <input style="width: 200px" class="form-control" type="text" name="d33" placeholder="ตารางวา">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่ที่จัดเพื่ออยู่อาศัยรวม (d4)</th>
                <td class="col-lg-4"><input style="width: 200px" class="form-control" type="text" name="d4" placeholder="แปลง">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">จำนวนผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (d5)</th>
                <td class="col-lg-4"><input style="width: 200px" class="form-control" type="text" name="d5" placeholder="ราย">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่ที่จัดเพื่อทำกินรวม (d6)</th>
                <td class="col-lg-4">
                    <input style="width: 200px" class="form-control" type="text" name="d61" placeholder="ไร่">
                    <input style="width: 200px" class="form-control" type="text" name="d62" placeholder="งาน">
                    <input style="width: 200px" class="form-control" type="text" name="d63" placeholder="ตารางวา">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">เนื้อที่ที่จัดเพื่อทำกินรวม (d7)</th>
                <td class="col-lg-4"><input style="width: 200px" class="form-control" type="text" name="d7" placeholder="แปลง">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">จำนวนผู้ที่ได้รับการจัดเพื่อทำกิน (d8)</th>
                <td class="col-lg-4"><input style="width: 200px" class="form-control" type="text" name="d8" placeholder="ราย">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช. จังหวัด ตรวจสอบและจัดทำบัญชีรายชื่อ (d9)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="d9">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">การตรวจสอบและจัดทำบัญชีรายชื่อของ คทช. จังหวัด (d10)</th>
                <td class="col-lg-4">
                    <input type="radio" name="d101" value="no"/> อยู่ระหว่างการตรวจสอบและจัดทำข้อมูลของ คทช. จังหวัด
                    <textarea name="d102" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <input type="radio" name="d101" value="yes"/> คทช. จังหวัด ส่งรายงานผลการดำเนินงาน เพื่อให้คณะ อนุกรรมการจัดที่ดินรับทราบ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="d103">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">ส่งไฟล์บัญชีรายชื่อ / หนังสือนำส่งถึงคณะอนุกรรมการจัด ที่ดิน (d11)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="d11"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8">วันที่ คทช. จังหวัด แจ้งหน่วยงานรับผิดชอบดำเนินการ ตามกระบวนการอนุญาต/จัดทำสัญญากับแต่ละหน่วยงาน (d12)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="d12">
                </td>
            </tr>
            <tr>
                <th class="col-md-8">ส่งไฟล์หนังสืออนุญาตฯ/สัญญา (d13)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="d13"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>

            <!--            _______________________________________ E1 - E11 ____________________________________________________________-->


            <tr style="background: #DCDCDC">
                <th class="col-md-8"><h4><b>ขั้นตอนการส่งเสริมและพัฒนาอาชีพ</b></h4></th>
                <td class="col-lg-4">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ (e1)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="e1">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> วันที่คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ (e2)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="e2">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> วันที่คณะกรรมการส่งเสริมและพัฒนาอาชีพมอบหมาย หน่วยงานที่เกี่ยวข้อง จัดทำแผน การส่งเสริมและพัฒนาอาชีพ (e3)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="e3">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> การจัดทำแผนการส่งเสริมและพัฒนาอาชีพของ
                    หน่วยงานที่เกี่ยวข้อง (e4)</th>
                <td class="col-lg-4">
                    <input type="radio" name="e41" value="no"/> อยู่ระหว่างการจัดทำแผน
                    <textarea name="e42" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <input type="radio" name="e41" value="yes"/> หน่วยงานที่เกี่ยวข้องเสนอแผนการส่งเสริมและพัฒนา อาชีพต่อคณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="e43">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> ส่งไฟล์หนังสือ/แผนการส่งเสริมและพัฒนาอาชีพ (e5)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="e5"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> การพิจารณาของคณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ (e6)</th>
                <td class="col-lg-4">
                    <input type="radio" name="e61" value="no"/> อยู่ระหว่างการพิจารณา
                    <textarea name="e62" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <input type="radio" name="e61" value="yes"/> พิจารณาเห็นชอบ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="e63">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> ส่งไฟล์รายงานการประชุม (e7)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="e7"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> วันที่คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพแจ้ง
                    หน่วยงานผู้รับผิดชอบ เพื่อจัดทำแผนปฏิบัติการและ
                    ขับเคลื่อนแผนการส่งเสริมและพัฒนาอาชีพ (e8)</th>
                <td class="col-lg-4"><input type="text" data-provide="datepicker" data-date-language="th-th" name="e8">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> การจัดทำแผนปฏิบัติการและขับเคลื่อนแผนการส่งเสริม
                    และพัฒนาอาชีพ (e9)</th>
                <td class="col-lg-4">
                    <input type="radio" name="e91" value="no"/> อยู่ระหว่างการจัดทำแผนปฏิบัติการ
                    <textarea name="e92" rows="3" cols="45" placeholder="ปัญหาและอุปสวรรค"></textarea>
                    <input type="radio" name="e91" value="yes"/> หน่วยงานที่เกี่ยวข้องเสนอแผนปฏิบัติการต่อ คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ เมื่อวันที่
                    <input type="text" data-provide="datepicker" data-date-language="th-th" name="e93">
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> ส่งไฟล์แผนปฏิบัติการ (e10)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="e10"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>
            <tr>
                <th class="col-md-8"> ผลการดำเนินงานส่งเสริมและพัฒนาอาชีพ
                    ส่งไฟล์ผลการดำเนินการส่งเสริมและพัฒนาอาชีพ (e11)</th>
                <td class="col-lg-4"><input class="input-group" type="file" name="e11"
                                            accept="file_extension|audio/*|video/*|image/*|media_type"/>
                </td>
            </tr>








            <tr>
                <th class="col-md-8"></th>
                <td class="col-lg-4">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <button type="submit" name="btnsave" class="btn btn-default">
                        <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </form>
            </div>
            </div>
</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery -->
<script src="js/jquery.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- date picker-->
<script src="//getbootstrap.com/2.3.2/assets/js/jquery.js"></script>
<script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script>
<script src="jsdatepicker/bootstrap-datepicker.js"></script>
<script src="jsdatepicker/bootstrap-datepicker-thai.js"></script>
<script src="jsdatepicker/locales/bootstrap-datepicker.th.js"></script>
<script id="example_script" type="text/javascript">
    function demo() {
        $('.datepicker').datepicker();
    }
</script>
<script type="text/javascript">
    $(function () {
        $('pre[data-source]').each(function () {
            var $this = $(this),
                $source = $($this.data('source'));

            var text = [];
            $source.each(function () {
                var $s = $(this);
                if ($s.attr('type') == 'text/javascript') {
                    text.push($s.html().replace(/(\n)*/, ''));
                } else {
                    text.push($s.clone().wrap('<div>').parent().html()
                        .replace(/(\"(?=[[{]))/g, '\'')
                        .replace(/\]\"/g, ']\'').replace(/\}\"/g, '\'') // javascript not support lookbehind
                        .replace(/\&quot\;/g, '"'));
                }
            });

            $this.text(text.join('\n\n').replace(/\t/g, '    '));
        });

        prettyPrint();
        demo();
    });
</script>   <!-- date picker-->

</body>


</html>

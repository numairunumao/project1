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


<div class="container">

    <div class="row centered-form">
        <div class="panel panel-primary">


    <div class="panel-heading">
        <h1 class="h2" > ติดตามประเมินผลโครงการสำคัญ <a class="btn btn-default" href="#"> <span
                    class="glyphicon glyphicon-eye-open"></span> &nbsp; ดูข้อมูลทั้งหมด </a></h1>
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

            <td colspan="2" class="bg-primary">
                <h3>กรอกข้อมูลติดตาม</h3>
            </td>
            <td>

            </td>
            <tr>
                <td><label class="control-label">เลือกจังหวัด a1</label></td>
                <td><select class="form-control" name="a1" required>
                        <option value="" selected>--------- เลือกจังหวัด ---------</option>
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="กระบี่">กระบี่ </option>
                        <option value="กาญจนบุรี">กาญจนบุรี </option>
                        <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                        <option value="กำแพงเพชร">กำแพงเพชร </option>
                        <option value="ขอนแก่น">ขอนแก่น</option>
                        <option value="จันทบุรี">จันทบุรี</option>
                        <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                        <option value="ชัยนาท">ชัยนาท </option>
                        <option value="ชัยภูมิ">ชัยภูมิ </option>
                        <option value="ชุมพร">ชุมพร </option>
                        <option value="ชลบุรี">ชลบุรี </option>
                        <option value="เชียงใหม่">เชียงใหม่ </option>
                        <option value="เชียงราย">เชียงราย </option>
                        <option value="ตรัง">ตรัง </option>
                        <option value="ตราด">ตราด </option>
                        <option value="ตาก">ตาก </option>
                        <option value="นครนายก">นครนายก </option>
                        <option value="นครปฐม">นครปฐม </option>
                        <option value="นครพนม">นครพนม </option>
                        <option value="นครราชสีมา">นครราชสีมา </option>
                        <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                        <option value="นครสวรรค์">นครสวรรค์ </option>
                        <option value="นราธิวาส">นราธิวาส </option>
                        <option value="น่าน">น่าน </option>
                        <option value="นนทบุรี">นนทบุรี </option>
                        <option value="บึงกาฬ">บึงกาฬ</option>
                        <option value="บุรีรัมย์">บุรีรัมย์</option>
                        <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                        <option value="ปทุมธานี">ปทุมธานี </option>
                        <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                        <option value="ปัตตานี">ปัตตานี </option>
                        <option value="พะเยา">พะเยา </option>
                        <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                        <option value="พังงา">พังงา </option>
                        <option value="พิจิตร">พิจิตร </option>
                        <option value="พิษณุโลก">พิษณุโลก </option>
                        <option value="เพชรบุรี">เพชรบุรี </option>
                        <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                        <option value="แพร่">แพร่ </option>
                        <option value="พัทลุง">พัทลุง </option>
                        <option value="ภูเก็ต">ภูเก็ต </option>
                        <option value="มหาสารคาม">มหาสารคาม </option>
                        <option value="มุกดาหาร">มุกดาหาร </option>
                        <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                        <option value="ยโสธร">ยโสธร </option>
                        <option value="ยะลา">ยะลา </option>
                        <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                        <option value="ระนอง">ระนอง </option>
                        <option value="ระยอง">ระยอง </option>
                        <option value="ราชบุรี">ราชบุรี</option>
                        <option value="ลพบุรี">ลพบุรี </option>
                        <option value="ลำปาง">ลำปาง </option>
                        <option value="ลำพูน">ลำพูน </option>
                        <option value="เลย">เลย </option>
                        <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                        <option value="สกลนคร">สกลนคร</option>
                        <option value="สงขลา">สงขลา </option>
                        <option value="สมุทรสาคร">สมุทรสาคร </option>
                        <option value="สมุทรปราการ">สมุทรปราการ </option>
                        <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                        <option value="สระแก้ว">สระแก้ว </option>
                        <option value="สระบุรี">สระบุรี </option>
                        <option value="สิงห์บุรี">สิงห์บุรี </option>
                        <option value="สุโขทัย">สุโขทัย </option>
                        <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                        <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                        <option value="สุรินทร์">สุรินทร์ </option>
                        <option value="สตูล">สตูล </option>
                        <option value="หนองคาย">หนองคาย </option>
                        <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                        <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                        <option value="อุดรธานี">อุดรธานี </option>
                        <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                        <option value="อุทัยธานี">อุทัยธานี </option>
                        <option value="อุบลราชธานี">อุบลราชธานี</option>
                        <option value="อ่างทอง">อ่างทอง </option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label class="control-label">ชื่อพื้นที่ a2</label></td>
                <td><input class="form-control" type="text" name="a2" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ชื่อหน่วยงานที่รับผิดชอบ a3</label></td>
                <td><input class="form-control" type="text" name="a3" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ชื่อผู้กรอกข้อมูล a4</label></td>
                <td><input class="form-control" type="text" name="a4"required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่กรอกข้อมูล a5</label></td>
                <td><input class="form-control" type="date" name="a5"/></td>
            </tr>


            <!--       B     -->
            <td colspan="2">
                <h3>ขั้นตอนการกำหนดพื้นที่และจัดทำข้อมูลพื้นที่</h3>
            </td>

            <td>

            </td>

            <tr>
                <td><label class="control-label"> ขื่อพื้นที่ที่นำมาจัดที่ดินทำกิน b1 </label></td>
                <td><input class="form-control" type="text" name="b1"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> เนื้อที่เริ่มดำเนินการ (ไร่) b2 </label></td>
                <td><input class="form-control" type="text" name="b2"required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> การจัดทำข้อมูล b3 </label></td>
                <td><input class="form-control" type="checkbox" name="b3"/></td>
            </tr>

            <tr>
                <td><label class="control-label">ส่งไฟล์แผนที่ดำเนินการ b4</label></td>
                <td><input class="input-group" type="file" name="user_image"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <!--       C     -->
            <td colspan="2" class="bg-primary">
                <h3>ขั้นตอนการจัดหาที่ดิน</h3>
            </td>
            <td>

            </td>

            <tr>
                <td><label class="control-label"> วันที่นำส่งคณะอนุกรรมการจัดหาที่ดิน c1</label></td>
                <td><input class="form-control" type="date" name="c1"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> การพิจารณาคณะอนุกรรมการจัดหาที่ดิน c2</label></td>
                <td><input class="form-control" type="checkbox" name="c2"/>อยู่ระหว่างการพิจารณา</td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช.จังหวัด c3</label>
                </td>
                <td><input class="form-control" type="date" name="c3"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> การตรวจสอบและพิจารณาของ คทช.จังหวัด c4 </label></td>
                <td><input class="form-control" type="checkbox" name="c4"/>การตรวจสอบและพิจารณาของ คทช.จังหวัด</td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการจัดหาที่ดิน c5</label>
                </td>
                <td><input class="form-control" type="date" name="c5"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ได้รับการเห็นชอบคณะอนุกรรมการจัดหาที่ดิน c6</label></td>
                <td><input class="form-control" type="date" name="c6"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> อำเภอ c7 </label></td>
                <td><input class="form-control" type="text" name="c7"required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 1 c8 </label></td>
                <td><input class="form-control" type="text" name="c8"required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 2 c9 </label></td>
                <td><input class="form-control" type="text" name="c9"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 3 c10 </label></td>
                <td><input class="form-control" type="text" name="c10"/></td>
            </tr>

            <!--       D     -->

            <td colspan="2" class="bg-primary">
                <h3>ขั้นตอนการจัดที่ดิน</h3>
            </td>
            <td>
            </td>

            <tr>
                <td><label class="control-label"> วันที่ อนุญาติให้เข้าทำประโยชน์ d1</label>
                </td>
                <td><input class="form-control" type="date" name="d1" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ มอบหนังสืออนุญาติให้เข้าทำประโยชน์ d2</label>
                </td>
                <td><input class="form-control" type="date" name="d2" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่ได้รับอนุญาติใช้ประโยชน์รวม (ไร่) d3 </label></td>
                <td><input class="form-control" type="text" name="d3" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> อำเภอ d4 </label></td>
                <td><input class="form-control" type="text" name="d4"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 1 d5 </label></td>
                <td><input class="form-control" type="text" name="d5"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 2 d6 </label></td>
                <td><input class="form-control" type="text" name="d6"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 3 d7 </label></td>
                <td><input class="form-control" type="text" name="d7"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (ไร่) d8 </label></td>
                <td><input class="form-control" type="text" name="d8" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (แปลง) d9 </label></td>
                <td><input class="form-control" type="text" name="d9" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (คน) d10 </label></td>
                <td><input class="form-control" type="text" name="d10" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่อทำกินรวม (ไร่) d11 </label></td>
                <td><input class="form-control" type="text" name="d11" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่อทำกินรวม (แปลง) d12 </label></td>
                <td><input class="form-control" type="text" name="d12" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ผู้ที่ได้รับการจัดเพื่อทำกิน (คน) d13 </label></td>
                <td><input class="form-control" type="text" name="d13" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่
                        คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการจัดที่ดินd14</label>
                </td>
                <td><input class="form-control" type="date" name="d14" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ จัดทำสัญญา d15</label>
                </td>
                <td><input class="form-control" type="date" name="d15" required/></td>
            </tr>

            <tr>
                <td><label class="control-label">ส่งไฟล์ข้อมูลการได้รับอนุญาต d16</label></td>
                <td><input class="input-group" type="file" name="user_image2"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <tr>
                <td><label class="control-label"> อยู่ระหว่างการกำหนดหลักเกณฑ์คุณสมบัติ
                        และประเภทของผู้ได้รับความช่วยเหลือ d17 </label></td>

                <td colspan="2"><input class="form-control" type="checkbox" name="d17" size="small">อยู่ระหว่างการกำหนดหลักเกณฑ์</td>


            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช.จังหวัด d18</label>
                </td>
                <td><input class="form-control" type="date" name="d18" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> การตรวจสอบและจัดทำข้อมูลคนของ คทช.จังหวัด d19 </label></td>
                <td><input class="form-control" type="checkbox" name="d19"/>อยู่ระหว่าง การตรวจสอบและจัดทำข้อมูล</td>
            </tr>


            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด ส่งข้อมูลคนให้คณะอนุกรรมการจัดที่ดิน d20</label>
                </td>
                <td><input class="form-control" type="date" name="d20" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด
                        แจ้งหน่วยงานรับผิดชอบดำเนินการตามกระบวนการอนุญาต/จัดทำสัญญาแต่ละหน่วยงาน d21</label>
                </td>
                <td><input class="form-control" type="date" name="d21" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ อนุญาติให้เข้าทำประโยชน์ * d22</label>
                </td>
                <td><input class="form-control" type="date" name="d22" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ จัดทำสัญญา d23</label>
                </td>
                <td><input class="form-control" type="date" name="d23" required/></td>
            </tr>

            <tr>
                <td><label class="control-label">ส่งไฟล์ข้อมูลการจัดคนลงพื้นที่ d24</label></td>
                <td><input class="input-group" type="file" name="user_image3"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <!--       E     -->


            <td colspan="2" class="bg-primary">
                <h3>ขั้นตอนการส่งเสริมและพัฒนาอาชีพ</h3>
            </td>
            <td>
            </td>

            <tr>
                <td><label class="control-label"> วันที่
                        คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ e1</label>
                </td>
                <td><input class="form-control" type="date" name="e1" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ
                        e2</label>
                </td>
                <td><input class="form-control" type="date" name="e2" required/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่
                        คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ e3</label>
                </td>
                <td><input class="form-control" type="date" name="e3" required/></td>
            </tr>


            <tr>
                <td><label class="control-label"> ส่งไฟล์รายงานการดำเนินงาน F1</label></td>
                <td><input class="input-group" type="file" name="user_image4"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <tr>
                <td><label class="control-label"> Text area f2 </label></td>
                <td><textarea name="f2" rows="4" cols="50"></textarea></td>
            </tr>


            <tr>
                <td colspan="2">
                    <button type="submit" name="btnsave" class="btn btn-default">
                        <span class="glyphicon glyphicon-save"></span> &nbsp; save
                    </button>
                </td>
            </tr>

        </table>

    </form>
    </div>
        </div>
    </div>


    <div class="alert alert-info">
        <strong>tutorial link !</strong> <a
            href="http://www.codingcage.com/2016/02/upload-insert-update-delete-image-using.html">Coding Cage</a>!
    </div>


</div>


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<!-- Footer -->
<?php include("footer.php"); ?>

<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>

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


    <div class="page-header">
        <h1 class="h2"> ติดตามประเมินผลโครงการสำคัญ <a class="btn btn-default" href="#"> <span
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

    <form method="post" action="insert.php" enctype="multipart/form-data" class="form-horizontal">

        <table class="table table-bordered table-responsive">

            <td>
                <h3>กรอกข้อมูลติดตาม</h3>
            </td>
            <td>

            </td>
            <tr>
                <td><label class="control-label">เลือกจังหวัด a1</label></td>
                <td><select name="a1">
                        <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                        <option value="ลำพูน">ลำพูน</option>
                        <option value="พะเยา" selected>พะเยา</option>
                        <option value="น่าน">น่าน</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label class="control-label">ชื่อพื้นที่ a2</label></td>
                <td><input class="form-control" type="text" name="a2"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ชื่อหน่วยงานที่รับผิดชอบ a3</label></td>
                <td><input class="form-control" type="text" name="a3"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ชื่อผู้กรอกข้อมูล a4</label></td>
                <td><input class="form-control" type="text" name="a4"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่กรอกข้อมูล a5</label></td>
                <td><input class="form-control" type="date" name="a5"/></td>
            </tr>


            <!--       B     -->
            <td>
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
                <td><input class="form-control" type="text" name="b2"/></td>
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
            <td>
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
                <td><input class="form-control" type="checkbox" name="c2"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช.จังหวัด c3</label>
                </td>
                <td><input class="form-control" type="date" name="c3"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> การตรวจสอบและพิจารณาของ คทช.จังหวัด c4 </label></td>
                <td><input class="form-control" type="checkbox" name="c4"/></td>
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
                <td><input class="form-control" type="text" name="c7"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ตำบลที่ 1 c8 </label></td>
                <td><input class="form-control" type="text" name="c8"/></td>
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

            <td>
                <h3>ขั้นตอนการจัดที่ดิน</h3>
            </td>
            <td>
            </td>

            <tr>
                <td><label class="control-label"> วันที่ อนุญาติให้เข้าทำประโยชน์ d1</label>
                </td>
                <td><input class="form-control" type="date" name="d1"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ มอบหนังสืออนุญาติให้เข้าทำประโยชน์ d2</label>
                </td>
                <td><input class="form-control" type="date" name="d2"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่ได้รับอนุญาติใช้ประโยชน์รวม (ไร่) d3 </label></td>
                <td><input class="form-control" type="text" name="d3"/></td>
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
                <td><input class="form-control" type="text" name="d8"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (แปลง) d9 </label></td>
                <td><input class="form-control" type="text" name="d9"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (คน) d10 </label></td>
                <td><input class="form-control" type="text" name="d10"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่อทำกินรวม (ไร่) d11 </label></td>
                <td><input class="form-control" type="text" name="d11"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> พื้นที่ที่จัดเพื่อทำกินรวม (แปลง) d12 </label></td>
                <td><input class="form-control" type="text" name="d12"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> ผู้ที่ได้รับการจัดเพื่อทำกิน (คน) d13 </label></td>
                <td><input class="form-control" type="text" name="d13"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่
                        คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการจัดที่ดินd14</label>
                </td>
                <td><input class="form-control" type="date" name="d14"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ จัดทำสัญญา d15</label>
                </td>
                <td><input class="form-control" type="date" name="d15"/></td>
            </tr>

            <tr>
                <td><label class="control-label">ส่งไฟล์ข้อมูลการได้รับอนุญาต d16</label></td>
                <td><input class="input-group" type="file" name="user_image2"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <tr>
                <td><label class="control-label"> อยู่ระหว่างการกำหนดหลักเกณฑ์คุณสมบัติ
                        และประเภทของผู้ได้รับความช่วยเหลือ d17 </label></td>
                <td><input class="form-control" type="checkbox" name="d17"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช.จังหวัด d18</label>
                </td>
                <td><input class="form-control" type="date" name="d18"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> การตรวจสอบและจัดทำข้อมูลคนของ คทช.จังหวัด d19 </label></td>
                <td><input class="form-control" type="checkbox" name="d19"/></td>
            </tr>


            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด ส่งข้อมูลคนให้คณะอนุกรรมการจัดที่ดิน d20</label>
                </td>
                <td><input class="form-control" type="date" name="d20"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด
                        แจ้งหน่วยงานรับผิดชอบดำเนินการตามกระบวนการอนุญาต/จัดทำสัญญาแต่ละหน่วยงาน d21</label>
                </td>
                <td><input class="form-control" type="date" name="d21"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ อนุญาติให้เข้าทำประโยชน์ * d22</label>
                </td>
                <td><input class="form-control" type="date" name="d22"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ จัดทำสัญญา d23</label>
                </td>
                <td><input class="form-control" type="date" name="d23"/></td>
            </tr>

            <tr>
                <td><label class="control-label">ส่งไฟล์ข้อมูลการจัดคนลงพื้นที่ d24</label></td>
                <td><input class="input-group" type="file" name="user_image3"
                           accept="file_extension|audio/*|video/*|image/*|media_type"/></td>
            </tr>


            <!--       E     -->


            <td>
                <h3>ขั้นตอนการส่งเสริมและพัฒนาอาชีพ</h3>
            </td>
            <td>
            </td>

            <tr>
                <td><label class="control-label"> วันที่
                        คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ e1</label>
                </td>
                <td><input class="form-control" type="date" name="e1"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ
                        e2</label>
                </td>
                <td><input class="form-control" type="date" name="e2"/></td>
            </tr>

            <tr>
                <td><label class="control-label"> วันที่
                        คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ e3</label>
                </td>
                <td><input class="form-control" type="date" name="e3"/></td>
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

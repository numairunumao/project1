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

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">ติดตามประเมินผลโครงการสำคัญ
        </div>
                <form method="get" action="insert2.php" enctype="multipart/form-data">
                <br>
                <div class="col-lg-12">
                <h1>กรอกข้อมูลติดตาม</h1>
                <h3>ลงทะเบียนข้อมูลใหม่</h3>
                </div>

                    <div  class="col-lg-8">
                        <div class="row">
                        <div class="col-md-4"><h4>เลือกจังหวัด</h4></div>
                        <div class="col-md-8">
                            <select class="form-control" name="a1">
                            <option>กรุงเทพมหานคร</option>
                            <option>เชียงใหม่</option>
                            <option>เชียงราย</option>
                            <option>ลำปาง</option>
                            <option>ลำพูน</option>
                        </select>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><h4>ชื่อพื้นที่</h4></div>
                            <div class="col-md-8">
                            <input type="text" class="form-control" id="landName" name="a2">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"><h4>ชื่อหน่วยงานที่รับผิดชอบ</h4></div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="landName" name="a3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"><h4>ชื่อผู้กรอกข้อมูล</h4></div>
                            <div class="col-md-8">
                                <input type="text" class="form-control" id="landName" name="a4">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"><h4>วันที่กรอกข้อมูล</h4></div>
                            <div class="col-md-8">
                                <input type="date" class="form-control" id="landName" name="a5">
                            </div>
                        </div>

                    </div>


                <div class="col-lg-12">
                <h3>ขั้นตอนการกำหนดพื้นที่และจัดทำข้อมูลพื้นที่</h3>
                </div>
                    <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4"><h4>ขื่อพื้นที่ที่นำมาจัดที่ดินทำกิน</h4></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="landName" name="b1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>เนื้อที่เริ่มดำเนินการ (ไร่)</h4></div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" id="landName" name="b2">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>การจัดทำข้อมูล</h4></div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <h4>
                                    <input class="form-check-input" type="checkbox" name="b3"> อยู่ระหว่างการดำเนินงาน
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ส่งไฟล์แผนที่ดำเนินการ</h4> </div>
                        <div class="col-md-8"><input type="file" id="exampleInputFile" name="b4" style="font-size: small"></div>
                    </div>
                    </div>

                <div class="col-lg-12">
                <h3>ขั้นตอนการจัดหาที่ดิน</h3>
                </div>
                    <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4"><h4>วันที่นำส่งคณะอนุกรรมการจัดหาที่ดิน</h4></div>
                        <div class="col-md-8">
                            <input type="date" class="form-control" id="landName" name="c1">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><h4>การพิจารณาคณะอนุกรรมการจัดหาที่ดิน</h4></div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <h4>
                                    <input class="form-check-input" type="checkbox" name="c2"> อยู่ระหว่าง การพิจารณา
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช.จังหวัด</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="c3"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>การตรวจสอบและพิจารณาของ คทช.จังหวัด</h4></div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <h4>
                                    <input class="form-check-input" type="checkbox" name="c4">
                                    การตรวจสอบและพิจารณาของ คทช.จังหวัด
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการจัดหาที่ดิน</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="c5"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ได้รับการเห็นชอบคณะอนุกรรมการจัดหาที่ดิน</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="c6"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>อำเภอ</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="c7" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ตำบลที่ 1</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="c8" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ตำบลที่ 2</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="c9"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ตำบลที่ 3</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="c10"></div>
                    </div>

                    </div>

                <div class="col-lg-12">
                <h3>ขั้นตอนการจัดที่ดิน</h3>
                </div>
                    <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ อนุญาติให้เข้าทำประโยชน์</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d1" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ มอบหนังสืออนุญาติให้เข้าทำประโยชน์</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d2" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>พื้นที่ที่ได้รับอนุญาติใช้ประโยชน์รวม (ไร่)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d3" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>อำเภอ</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="d4"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ตำบลที่ 1</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="d5"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ตำบลที่ 2</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="d6"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ตำบลที่ 3</h4></div>
                        <div class="col-md-8"><input type="text" class="form-control" id="landName2" name="d7"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (ไร่)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d8" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (แปลง)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d9" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (คน)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d10" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>พื้นที่ที่จัดเพื่อทำกินรวม (ไร่)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d11" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>พื้นที่ที่จัดเพื่อทำกินรวม (แปลง)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d12" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ผู้ที่ได้รับการจัดเพื่อทำกิน (คน)</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="d13" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการจัดที่ดิน</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d14" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ จัดทำสัญญา</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d15" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ส่งไฟล์ข้อมูลการได้รับอนุญาต</h4></div>
                        <div class="col-md-8"><input type="file" id="exampleInputFile" style="font-size: small" name="d16"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>อยู่ระหว่างการกำหนดหลักเกณฑ์คุณสมบัติ และประเภทของผู้ได้รับความช่วยเหลือ</h4></div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <h4>
                                    <input class="form-check-input" type="checkbox" name="d17">
                                    อยู่ระหว่างการกำหนดหลักเกณ
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช.จังหวัด</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d18" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>การตรวจสอบและจัดทำข้อมูลคนของ คทช.จังหวัด</h4></div>
                        <div class="col-md-8">
                            <div class="form-check">
                                <h4>
                                    <input class="form-check-input" type="checkbox" name="d19">
                                    อยู่ระหว่าง การตรวจสอบและจัดทำข้อมูล
                                </h4>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คทช.จังหวัด ส่งข้อมูลคนให้คณะอนุกรรมการจัดที่ดิน </h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d20" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คทช.จังหวัด แจ้งหน่วยงานรับผิดชอบดำเนินการตามกระบวนการอนุญาต/จัดทำสัญญาแต่ละหน่วยงาน</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ อนุญาติให้เข้าทำประโยชน์ </h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d21" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ จัดทำสัญญา</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="d22" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>ส่งไฟล์ข้อมูลการจัดคนลงพื้นที่</h4></div>
                        <div class="col-md-8"><input type="file" id="exampleInputFile" style="font-size: small" name="d23"></div>
                    </div>
                    </div>

                <div class="col-lg-12">
                <h3>ขั้นตอนการส่งเสริมและพัฒนาอาชีพ</h3>
                </div>

                    <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="e1" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="e2" ></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</h4></div>
                        <div class="col-md-8"><input class="form-control" type="date" id="example-date-input" name="e3" ></div>
                    </div>
                    </div>

                <div class="col-lg-12">
                <h3>การดำเนินงานและส่งเสริมพัฒนาอาชีพ</h3>
                </div>
                    <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4"><h4>ส่งไฟล์รายงานการดำเนินงาน</h4></div>
                        <div class="col-md-8"><input type="file" id="exampleInputFile" style="font-size: small" name="f1"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4"><h4>รายละเอียด</h4></div>
                        <div class="col-md-8"><textarea class="form-control" rows="3" name="f2"></textarea></div>
                    </div>
                    </div>

                <div class="col-lg-12"  >
                <h3>การตรวจทานข้อมูล</h3>
                </div>
                    <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-4"><h4>กรุณาใส่ตัวเลข</h4></div>
                        <div class="col-md-8"><input type="number" class="form-control" id="landName2" name="g1" ></div>
                    </div>

                    <div align="center">
                        <button type="submit" name="submit" class="btn btn-info btn-lg">ยืนยัน</button>
                    </div>
                    </div>
                </form>
            </h1>
    </div>



    <hr>

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

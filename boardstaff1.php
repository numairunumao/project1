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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <meta name="description" content="">-->
<!--    <meta name="author" content="">-->
<!--    <title>ติดตามประเมินผลโครงการสำคัญ</title>-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/portfolio-item.css" rel="stylesheet">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <link href="css/page.css" rel="stylesheet">
    <link href="css/table2.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<!--    ______________________________________________________________________________________________________-->


    <script>
        function selectOnlyThis(id) {
            for (var i = 1;i <= 2; i++)
            {
                document.getElementById("Check" + i).checked = false;
            }

            document.getElementById(id).checked = true;
        }
    </script>


</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <?php include("menu2.php"); ?>
    </div>
</nav>
<?php
include_once 'dbconfig.php';
$sql = "SELECT * FROM strategy3 WHERE id = '1' ";
$query = mysqli_query($mysqli, $sql);
$result3 = mysqli_fetch_array($query, MYSQLI_ASSOC)
?>

<div class="container" style="width: 1200px">

    <div class="row centered-form">
        <div class="panel panel-primary">

            <br>
            <div class="panel-heading">
                <h3>กรอกข้อมูล การติดตามประเมินผล
                </h3>
            </div>
            <br>
            <form method="post" action="insertstrategy.php" enctype="multipart/form-data"
                  class="form-horizontal">

                <div class="divTable">
                    <div class="divTableBody">
                        <div class="divTableRow">
                            <div class="divTableCell"><h2><b>ข้อมูลการติดตามประเมินผล</b></h2></div>
                            <div class="divTableCell"><h2><b>หมายเหตุ</b></h2></div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">- จังหวัด (a1)</div>
                            <div class="divTableCell">
                                <select class="form-control" name="a1" required>
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
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">- ชื่อพื้นที่ (a2)</div>
                            <div class="divTableCell"><input class="form-control" type="text" name="a2" required/></div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">- ประเภทของพื้นที่ที่นำมาจัดที่ดินทำกิน (a3)</div>
                            <div class="divTableCell"><select class="form-control" name="a3">
                                    <option value="พื้นที่ป่าสงวนแห่งชาติ">1. พื้นที่ป่าสงวนแห่งชาติ</option>
                                    <option value="พื้นที่ป่าชายเลน">2. พื้นที่ป่าชายเลน</option>
                                    <option value="พื้นที่เขตปฏิรูปที่ดิน">3. พื้นที่เขตปฏิรูปที่ดิน</option>
                                    <option value="ที่ดินสาธารณประโยชน์"> 4. ที่ดินสาธารณประโยชน์</option>
                                    <option value="พื้นที่นิคมสหกรณ์">5. พื้นที่นิคมสหกรณ์</option>
                                    <option value="พื้นที่นิคมสร้างตนเอง">6. พื้นที่นิคมสร้างตนเอง</option>
                                    <option value="ที่ราชพัสดุ">7. ที่ราชพัสดุ</option>
                                </select></div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">- เนื้อที่จากคณะอนุกรรมการจัดหาที่ดิน (a4)</div>
                            <div class="divTableCell">
                                <input class="form-control" type="text" name="a41" placeholder="ไร่">
                                <input class="form-control" type="text" name="a42" placeholder="งาน">
                                <input class="form-control" type="text" name="a43" placeholder="ตารางวา">
                            </div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">- เนื้อที่จากหนังสืออนุญาตให้เข้าทำประโยชน์ในที่ดิน (a5)</div>
                            <div class="divTableCell">
                                <input class="form-control" type="text" name="a51" placeholder="ไร่">
                                <input class="form-control" type="text" name="a52" placeholder="งาน">
                                <input class="form-control" type="text" name="a53" placeholder="ตารางวา"></div>
                        </div>
                        <div class="divTableRow">
                            <div class="divTableCell">- ครอบคลุมพื้นที่ (a6)</div>
                            <div class="divTableCell">
                                <input class="form-control" type="text" name="a61" placeholder="อำเภอ">
                                <input class="form-control" type="text" name="a62" placeholder="ตำบล 1">
                                <input class="form-control" type="text" name="a63" placeholder="ตำบล 2">
                                <input class="form-control" type="text" name="a63" placeholder="ตำบล 3"></div>
                        </div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่อนุญาต/ทำสัญญาให้เข้าทำประโยชน์ในที่ดินตาม
                            หนังสืออนุญาตฯ (a7)
                        </div>
                        <div class="divTableCell"><input class="form-control" type="date" name="a7"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์หนังสืออนุญาตฯ/สัญญา (a8)</div>
                        <div class="divTableCell">
                            <input class="input-group-sm" type="file" name="a8"
                                   accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- หน่วยงานที่รับผิดชอบ (a9)</div>
                        <div class="divTableCell">
                            <select class="form-control" name="a9">
                                <option value="พื้นที่ป่าสงวนแห่งชาติ">1. หน่วยงาน</option>
                                <option value="พื้นที่ป่าชายเลน">2. หน่วยงาน</option>

                            </select>
                        </div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ชื่อผู้กรอกข้อมูล (a10)</div>
                        <div class="divTableCell">input</div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- วันที่กรอกข้อมูล (a11)</div>
                        <div class="divTableCell"><input type="date" size="15" name="a11" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell"><h4><b>ขั้นตอนการกำหนดพื้นที่และจัดทำข้อมูลพื้นที่</b></h4></div>
                        <div class="divTableCell"></div>
                    </div>
                    <div class="divTableRow"> <!-- อยู่ระหว่างการดำเนินงาน -->
                        <div class="divTableCell">- การดำเนินการจัดทำข้อมูลพื้นที่ (b1)</div>
                        <div class="divTableCell">
                            <input type="checkbox" id="Check1" value="Value1" name="b11" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างดำเนินการ</input>
                            <br><textarea name="b12" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="b13" onclick="selectOnlyThis(this.id)"> ดำเนินการแล้วเสร็จ เมื่อวันที่</input>
                            <input type="date" size="15" name="b14" />
                        </div>
                    </div>

                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์แผนที่ดำเนินการ (b2)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="b2"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>

<!--                    ____________________________ขั้นตอนการจัดหาที่ดิน____________________________________________-->


                    <div class="divTableRow">
                        <div class="divTableCell"><h4><b>ขั้นตอนการจัดหาที่ดิน</b></h4></div>
                        <div class="divTableCell"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่หน่วยงานรับผิดชอบพื้นที่เสนอข้อมูลต่อ
                            คณะอนุกรรมการจัดหาที่ดิน (c1)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="a11" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- การพิจารณาของคณะอนุกรรมการจัดหาที่ดิน (c2)</div>
                        <div class="divTableCell"><input type="checkbox" id="Check1" value="Value1" name="c21" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างดำเนินการ</input>
                            <br><textarea name="c22" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="c23" onclick="selectOnlyThis(this.id)"> ดำเนินการแล้วเสร็จ เมื่อวันที่</input>
                            <input type="date" size="15" name="c24" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์รายงานการประชุม (c3)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="c3"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช. จังหวัด(c4)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="c4" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะอนุกรรมการจัดหาที่ดินแจ้งต่อ
                            กระทรวงมหาดไทย (c5)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="c5" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - การพิจารณาขอบเขตพื้นที่และข้อมูลผู้ครอบครองที่ดิน
                            เดิม และการรายงานผลการดำเนินงานของ คทช. จังหวัด
                            ต่อคณะ อนุกรรมการจัดหาที่ดิน (c6)
                        </div>
                        <div class="divTableCell"><input type="checkbox" id="Check1" value="Value1" name="c61" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างการพิจารณาและตรวจสอบของ คทช.จังหวัด</input>
                            <br><textarea name="c62" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="c62" onclick="selectOnlyThis(this.id)"> คทช. จังหวัด ส่งรายงานผลการดำเนินงาน<br>ต่อคณะอนุกรรมการจัดหาที่ดินแล้ว เมื่อวันที่</input>
                            <input type="date" size="15" name="c64" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์ผลการดำเนินงาน (c7)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="c7"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - การพิจารณาผลการดำเนินงานของ คทช. จังหวัด
                            ของคณะอนุกรรมการจัดหาที่ดิน (c8)
                        </div>
                        <div class="divTableCell"><input type="checkbox" id="Check1" value="Value1" name="c61" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างการพิจารณา</input>
                            <br><textarea name="c81" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="c62" onclick="selectOnlyThis(this.id)"> พิจารณาเห็นชอบ เมื่อวันที่</input>
                            <input type="date" size="15" name="c82" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์รายงานการประชุม (c9)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="c9"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- การดำเนินงานของคณะอนุกรรมการจัดหาที่ดิน (c10)</div>
                        <div class="divTableCell"><input type="checkbox" id="Check1" value="Value1" name="c101" onclick="selectOnlyThis(this.id)"> คณะอนุกรรมการจัดหาที่ดินแจ้งผลการพิจารณาให้ <br>คทช. จังหวัด ทราบ เมื่อวันที่</input>
                            <input type="date" size="15" name="c102" />
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="c103" onclick="selectOnlyThis(this.id)"> กรณีเร่งด่วน วันที่คณะอนุกรรมการจัดหาที่ดินมอบหมาย <br> ให้ คทช. จังหวัด แจ้งหน่วยงานรับผิดชอบดำเนินการตาม<br>กระบวนการอนุญาต/จัดทำสัญญากับแต่ละหน่วยงาน <br>เมื่อวันที่</input>
                            <input type="date" size="15" name="c104" />
                        </div>
                    </div>


<!--                    ___________  ___________  ขั้นตอนการจัดที่ดิน  ___________  ___________  ___________-->



                    <div class="divTableRow">
                        <div class="divTableCell"><h4><b>ขั้นตอนการจัดที่ดิน</b></h4></div>
                        <div class="divTableCell"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้
                            คณะอนุกรรมการจัดที่ดิน (d1)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="d1" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - เนื้อที่ที่ได้รับอนุญาตให้ใช้ประโยชน์ตามหนังสืออนุญาตฯ
                            (d2)
                        </div>
                        <div class="divTableCell">
                            <input class="form-control" type="text" name="d21" placeholder="ไร่">
                            <input class="form-control" type="text" name="d22" placeholder="งาน">
                            <input class="form-control" type="text" name="d23" placeholder="ตารางวา"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- เนื้อที่ที่จัดเพื่ออยู่อาศัยรวม (d3)</div>
                        <div class="divTableCell">
                            <input class="form-control" type="text" name="d31" placeholder="ไร่">
                            <input class="form-control" type="text" name="d32" placeholder="งาน">
                            <input class="form-control" type="text" name="d33" placeholder="ตารางวา"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- เนื้อที่ที่จัดเพื่ออยู่อาศัยรวม (d4)</div>
                        <div class="divTableCell"><input class="form-control" type="text" name="d4" placeholder="แปลง"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- จำนวนผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (d5)</div>
                        <div class="divTableCell"><input class="form-control" type="text" name="d5" placeholder="ราย"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- เนื้อที่ที่จัดเพื่อทำกินรวม (d6)</div>
                        <div class="divTableCell">
                            <input class="form-control" type="text" name="d61" placeholder="ไร่">
                            <input class="form-control" type="text" name="d62" placeholder="งาน">
                            <input class="form-control" type="text" name="d63" placeholder="ตารางวา"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- เนื้อที่ที่จัดเพื่อทำกินรวม (d7)</div>
                        <div class="divTableCell"><input class="form-control" type="text" name="d7" placeholder="แปลง"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- จำนวนผู้ที่ได้รับการจัดเพื่อทำกิน (d8)</div>
                        <div class="divTableCell"><input class="form-control" type="text" name="d8" placeholder="ราย"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช. จังหวัด
                            ตรวจสอบและจัดทำบัญชีรายชื่อ (d9)
                        </div>
                        <div class="divTableCell"><input class="form-control" type="date" name="a7"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - การตรวจสอบและจัดทำบัญชีรายชื่อของ คทช. จังหวัด
                            (d10)
                        </div>
                        <div class="divTableCell"><input type="checkbox" id="Check1" value="Value1" name="d101" onclick="selectOnlyThis(this.id)"> ( ) อยู่ระหว่างการตรวจสอบและจัดทำข้อมูลของ <br>คทช. จังหวัด</input>
                            <br><textarea name="d102" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="d103" onclick="selectOnlyThis(this.id)"> คทช. จังหวัด ส่งรายงานผลการดำเนินงาน <br>เพื่อให้คณะ อนุกรรมการจัดที่ดินรับทราบ เมื่อวันที่</input>
                            <input type="date" size="15" name="d104" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - ส่งไฟล์บัญชีรายชื่อ / หนังสือนำส่งถึงคณะอนุกรรมการจัด
                            ที่ดิน (d11)
                        </div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="d11"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่ คทช. จังหวัด แจ้งหน่วยงานรับผิดชอบดำเนินการ
                            ตามกระบวนการอนุญาต/จัดทำสัญญากับแต่ละหน่วยงาน
                            (d12)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="d12" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์หนังสืออนุญาตฯ/สัญญา (d13)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="d13"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>




<!--                    _______________________________________ขั้นตอนการส่งเสริมและพัฒนาอาชีพ_________________________________________-->




                    <div class="divTableRow">
                        <div class="divTableCell"><h4><b>ขั้นตอนการส่งเสริมและพัฒนาอาชีพ</b></h4></div>
                        <div class="divTableCell"></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้
                            คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ (e1)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="e1" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- วันที่คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ (e2)</div>
                        <div class="divTableCell"><input type="date" size="15" name="e2" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะกรรมการส่งเสริมและพัฒนาอาชีพมอบหมาย
                            หน่วยงานที่เกี่ยวข้อง จัดทำแผน การส่งเสริมและพัฒนา
                            อาชีพ (e3)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="e3" /></div>
                    </div>

                    <div class="divTableRow">
                        <div class="divTableCell">
                            - การจัดทำแผนการส่งเสริมและพัฒนาอาชีพของ
                            หน่วยงานที่เกี่ยวข้อง (e4)
                        </div>
                        <div class="divTableCell">
                            <input type="checkbox" id="Check1" value="Value1" name="e41" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างการจัดทำแผน</input>
                            <br><textarea name="e42" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="e43" onclick="selectOnlyThis(this.id)"> หน่วยงานที่เกี่ยวข้องเสนอแผนการส่งเสริมและพัฒนา อาชีพต่อคณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ เมื่อวันที่</input>
                            <input type="date" size="15" name="e44" /></div>
                    </div>

                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์หนังสือ/แผนการส่งเสริมและพัฒนาอาชีพ (e5)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="e5"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - การพิจารณาของคณะอนุกรรมการส่งเสริมและพัฒนา
                            อาชีพ (e6)
                        </div>
                        <div class="divTableCell">
                            <input type="checkbox" id="Check1" value="Value1" name="e61" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างการพิจารณา</input>
                            <br><textarea name="e62" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="e63" onclick="selectOnlyThis(this.id)"> พิจารณาเห็นชอบ เมื่อวันที่</input>
                            <input type="date" size="15" name="e64" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์รายงานการประชุม (e7)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="e7"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - วันที่คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพแจ้ง
                            หน่วยงานผู้รับผิดชอบ เพื่อจัดทำแผนปฏิบัติการและ
                            ขับเคลื่อนแผนการส่งเสริมและพัฒนาอาชีพ (e8)
                        </div>
                        <div class="divTableCell"><input type="date" size="15" name="e8" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - การจัดทำแผนปฏิบัติการและขับเคลื่อนแผนการส่งเสริม
                            และพัฒนาอาชีพ (e9)
                        </div>
                        <div class="divTableCell"><input type="checkbox" id="Check1" value="Value1" name="e91" onclick="selectOnlyThis(this.id)"> อยู่ระหว่างการจัดทำแผนปฏิบัติการ</input>
                            <br><textarea name="e92" rows="4" cols="30" placeholder="ปัญหาและอุปสวรรค"></textarea>
                            <br>
                            <input type="checkbox" id="Check2" value="Value1"  name="e93" onclick="selectOnlyThis(this.id)"> ( ) หน่วยงานที่เกี่ยวข้องเสนอแผนปฏิบัติการต่อ คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ เมื่อวันที่</input>
                            <input type="date" size="15" name="e94" /></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">- ส่งไฟล์แผนปฏิบัติการ (e10)</div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="e10"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell">
                            - ผลการดำเนินงานส่งเสริมและพัฒนาอาชีพ (e11)
                            ส่งไฟล์ผลการดำเนินการส่งเสริมและพัฒนาอาชีพ
                        </div>
                        <div class="divTableCell"><input class="input-group-sm" type="file" name="e11"
                                                         accept="file_extension|audio/*|video/*|image/*|media_type"/></div>
                    </div>
                    <div class="divTableRow">
                        <div class="divTableCell"></div>
                        <div class="divTableCell">
                            <button type="submit" name="btnsave1" class="btn btn-default">
                                <span class="glyphicon glyphicon-save"></span> &nbsp; บันทึกข้อมูล
                            </button>
                        </div>
                    </div>
                </div>
        </div><!-- DivTable.com -->
        </form><!-- form -->
    </div><!-- panel panel-primary -->
</div><!--row centered-form-->
</div><!-- container -->


<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>


<!-- Footer -->
<?php //include("footer.php"); ?>

<!-- /.container -->

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>



</html>

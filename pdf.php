<?php
include('mpdf/mpdf.php');
include_once 'dbconfig.php';
ob_start();
$id = $_REQUEST['id'];
$result = mysqli_query($mysqli, "SELECT * FROM dataFollow where id = $id");
$row = mysqli_fetch_array($result);
?>


<h1 align="center">รายงานระบบติดตามประเมินผลโครงการจัดที่ดิน</h1>
<table border="0" width="100%" align="center">
    
    <tr>
        <th align="left">
            <p style="color:red;">ข้อมูลเบื้องต้น </p>
        </th>
        <th>
        </th>
    </tr>

    <tr>
        <th align="left">จังหวัด</th>
        <th align="left"><?php echo $row[1]; ?></th>
    </tr>

    <tr>
        <th align="left">ชื่อพื้นที่</th>
        <th align="left"><?php echo $row[2]; ?></th>
    </tr>

    <tr>
        <th align="left">ชื่อหน่วยงานรับผิดชอบ</th>
        <th align="left"><?php echo $row[3]; ?></th>
    </tr>

    <tr>
        <th align="left">ชื่อผู้กรอกข้อมูล</th>
        <th align="left"><?php echo $row[4]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่กรอกข้อมูล</th>
        <th align="left"><?php echo $row[5]; ?></th>
    </tr>

    <tr>
        <th><br></th>
        <th><br></th>
    </tr>

    <tr>
        <th align="left"><p style="color:red;">การกำหนดพื้นที่และจัดทำข้อมูลพื้นที่ </p></th>
        <th></th>
    </tr>

    <tr>
        <th align="left">ชื่อพื้นที่ที่นำมาจัดที่ดินทำกิน</th>
        <th align="left"><?php echo $row[6]; ?></th>
    </tr>

    <tr>
        <th align="left">เนื้อที่เริ่มต้นดำเนินการ (ไร่)</th>
        <th align="left"><?php echo $row[7]; ?></th>
    </tr>

    <tr>
        <th align="left">การจัดทำข้อมูล</th>
        <th align="left"><?php echo $row[8]; ?></th>
    </tr>

    <tr>
        <th align="left">ไฟล์แผนที่ดำเนินการ</th>
        <th align="left"><a href="user_images/<?php echo $row[9] ?>" target="_blank">ไฟล์แผนที่ดำเนินการ</a></th>
    </tr>

    <tr>
        <th><br></th>
        <th><br></th>
    </tr>

    <tr>
        <th align="left"><p style="color:red;">ขั้นตอนการจัดหาที่ดิน </p></th>
        <th></th>
    </tr>

    <tr>
        <th align="left">วันที่นำส่งคณะอนุกรรมการจัดหาที่ดิน</th>
        <th align="left"><?php echo $row[10]; ?></th>
    </tr>

    <tr>
        <th align="left">การพิจารณาคณะอนุกรรมการจัดหาที่ดิน</th>
        <th align="left"><?php echo $row[11]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้ คทช.จังหวัด</th>
        <th align="left"><?php echo $row[12]; ?></th>
    </tr>


    <tr>
        <th align="left">การตรวจสอบและพิจารณาของ คทช.จังหวัด</th>
        <th align="left"><?php echo $row[13]; ?></th>
    </tr>


    <tr>
        <th align="left">วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการจัดหาที่ดิน</th>
        <th align="left"><?php echo $row[14]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ได้รับการเห็นชอบคณะอนุกรรมการจัดหาที่ดิน</th>
        <th align="left"><?php echo $row[15]; ?></th>
    </tr>

    <tr>
        <th align="left">อำเภอ</th>
        <th align="left"><?php echo $row[16]; ?></th>
    </tr>


    <tr>
        <th align="left">ตำบล 1</th>
        <th align="left"><?php echo $row[17]; ?></th>
    </tr>


    <tr>
        <th align="left">ตำบล 2</th>
        <th align="left"><?php echo $row[18]; ?></th>
    </tr>

    <tr>
        <th align="left">ตำบล 3</th>
        <th align="left"><?php echo $row[19]; ?></th>
    </tr>

    <tr>
        <th><br></th>
        <th><br></th>
    </tr>

    <tr>
        <th align="left"><p style="color:red;">ขั้นตอนการจัดที่ดิน </p></th>
        <th></th>
    </tr>

    <tr>
        <th align="left">วันที่อนุญาตให้เข้าทำประโยชน์</th>
        <th align="left"><?php echo $row[20]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่มอบหนังสืออนุญาตให้เข้าทำประโยชน์</th>
        <th align="left"><?php echo $row[21]; ?></th>
    </tr>

    <tr>
        <th align="left">พื้นที่ที่ได้รับอนุญาตใช้ประโยชน์รวม (ไร่)</th>
        <th align="left"><?php echo $row[22]; ?></th>
    </tr>

    <tr>
        <th align="left">อำเภอ</th>
        <th align="left"><?php echo $row[23]; ?></th>
    </tr>

    <tr>
        <th align="left">ตำบล 1</th>
        <th align="left"><?php echo $row[24]; ?></th>
    </tr>

    <tr>
        <th align="left">ตำบล 2</th>
        <th align="left"><?php echo $row[25]; ?></th>
    </tr>

    <tr>
        <th align="left">ตำบล 3</th>
        <th align="left"><?php echo $row[26]; ?></th>
    </tr>

    <tr>
        <th align="left">พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (ไร่)</th>
        <th align="left"><?php echo $row[27]; ?></th>
    </tr>

    <tr>
        <th align="left">พื้นที่ที่จัดเพื่ออยู่อาศัยรวม (แปลง)</th>
        <th align="left"><?php echo $row[28]; ?></th>
    </tr>

    <tr>
        <th align="left">ผู้ที่ได้รับการจัดเพื่ออยู่อาศัย (คน)</th>
        <th align="left"><?php echo $row[29]; ?></th>
    </tr>

    <tr>
        <th align="left">พื้นที่ที่จัดเพื่อทำกินรวม (ไร่)</th>
        <th align="left"><?php echo $row[30]; ?></th>
    </tr>

    <tr>
        <th align="left">พื้นที่ที่จัดเพื่อทำกินรวม (แปลง)</th>
        <th align="left"><?php echo $row[31]; ?></th>
    </tr>

    <tr>
        <th align="left">ผู้ที่ได้รับการจัดเพื่อทำกิน (คน)</th>
        <th align="left"><?php echo $row[32]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการจัดที่ดิน</th>
        <th align="left"><?php echo $row[33]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ จัดทำสัญญา</th>
        <th align="left"><?php echo $row[34]; ?></th>
    </tr>

    <tr>
        <th align="left">ไฟล์ข้อมูลการได้รับอนุญาต</th>
        <th align="left"><a href="user_images/<?php echo $row[35] ?>" target="_blank">ไฟล์ข้อมูลการได้รับอนุญาต</a></th>
    </tr>

    <tr>
        <th align="left">การกำหนดหลักเกณฑ์คุณสมบัติ และประเภทของผู้ได้รับความช่วยเหลือ</th>
        <th align="left"><?php echo $row[36]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้ คทช.จังหวัด</th>
        <th align="left"><?php echo $row[37]; ?></th>
    </tr>

    <tr>
        <th align="left">การตรวจสอบและจัดทำข้อมูลคนของ คทช.จังหวัด</th>
        <th align="left"><?php echo $row[38]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ คทช.จังหวัด ส่งข้อมูลคนให้คณะอนุกรรมการจัดที่ดิน</th>
        <th align="left"><?php echo $row[39]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ คทช.จังหวัด แจ้งหน่วยงานรับผิดชอบ ดำเนินการตามกระบวนการอนุญาต/จัดทำสัญญาแต่ละหน่วยงาน
        </th>
        <th align="left"><?php echo $row[40]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ อนุญาติให้เข้าทำประโยชน์</th>
        <th align="left"><?php echo $row[41]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ จัดทำสัญญา</th>
        <th align="left"><?php echo $row[42]; ?></th>
    </tr>

    <tr>
        <th align="left">ส่งไฟล์ข้อมูลการจัดคนลงพื้นที่</th>
        <th align="left"><a href="user_images/<?php echo $row[43] ?>" target="_blank">ไฟล์ข้อมูลการจัดคนลงพื้นที่</a>
        </th>
    </tr>

    <tr>
        <th><br></th>
        <th><br></th>
    </tr>

    <tr>
        <th align="left"><p style="color:red;">ขั้นตอนการส่งเสริมและพัฒนาอาชีพ </p></th>
        <th></th>
    </tr>

    <tr>
        <th align="left">วันที่ คณะอนุกรรมการจัดหาที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</th>
        <th align="left"><?php echo $row[44]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ คทช.จังหวัด ส่งรายงานผลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</th>
        <th align="left"><?php echo $row[45]; ?></th>
    </tr>

    <tr>
        <th align="left">วันที่ คณะอนุกรรมการจัดที่ดินส่งข้อมูลให้คณะอนุกรรมการส่งเสริมและพัฒนาอาชีพ</th>
        <th align="left"><?php echo $row[46]; ?></th>
    </tr>

    <tr>
        <th align="left">ส่งไฟล์รายงานการดำเนินงาน</th>
        <th align="left"><a href="user_images/<?php echo $row[47] ?>" target="_blank">ไฟล์รายงานการดำเนินงาน</a></th>
    </tr>

    <tr>
        <th align="left">Text area</th>
        <th align="left"><?php echo $row[48]; ?></th>
    </tr>
    </div>
    </div>
    </div>


</table>


<?Php
//$html = ob_get_contents();
////oend_clean();
//$pdf = new mPDF('th', 'A4', '0', '0');
//$pdf->SetAutoFont();
//$pdf->SetDisplayMode('fullpage');
//$pdf->WriteHTML($html, 2);
////$pdf->Output("user_pdf/MyPDF.pdf");
//$mpdf->Output();
//exit;


//$mpdf = new mPDF('th', 'A4', '0', '0');
//
//$mpdf->WriteHTML($HTMLoutput);
//$mpdf->Output();
//


$HTMLoutput = ob_get_contents();
ob_end_clean();

$mpdf = new mPDF('th', 'A4', '11', '', '15', '15', '15', '15');

$mpdf->WriteHTML($HTMLoutput);
$mpdf->Output();

$mpdf->Output("user_pdf/report.pdf");

?>


<!--1
$mpdf = new mPDF('',    // mode - default ''
2
'',    // format - A4, for example, default ''
3
0,     // font size - default 0
4
'',    // default font family
5
15,    // margin_left
6
15,    // margin right
7
16,     // margin top
8
16,    // margin bottom
9
9,     // margin header
10
9,     // margin footer
11
'L');  // L - landscape, P - portrait-->





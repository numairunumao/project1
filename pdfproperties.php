
<?php

$HTMLoutput = ob_get_contents();
ob_end_clean();

$mpdf = new mPDF('th', 'A4-L', '10', '', '5', '5', '5', '5');
//$stylesheet = file_get_contents('../css/pdf.css');
$mpdf->WriteHTML($HTMLoutput, 2);
$mpdf->Output();
$mpdf->Output("user_pdf/report.pdf");

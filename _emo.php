

<?php 
include 'connection.php';

$query=mysqli_query($con,"select * from ch_password where sr_no=1");
$a=mysqli_fetch_array($query);$b=$a['e_ro'];
$select=mysqli_query($con,"select * from student_result where enrollment_no='$b'") or die(mysqli_error($con));
$fetch=mysqli_fetch_array($select);
extract($fetch);
require('fpdf.php'); 
$pdf = new FPDF(); 
$pdf->AddPage(); 
$pdf->SetFont('Times', 'B', 22); 
$pdf->Cell(0, 5, 'Maharashtra State Board of Technical Education', 0, 0, 'C');
$pdf->Ln(); 
$pdf->SetFont('Times', '', 16); 
$pdf->Cell(0,18,"Name: $f_name", 0, 0, 'L');
$pdf->Cell(0,18,"Enrollment No: $enrollment_no",0,1,'R');

$pdf->Cell(0,0,"Course: $course",0,0,'L');
$pdf->Cell(0,0,"Scheme: $scheme",0,1,'R');
$pdf->Ln(35);
 $pdf->Cell(60,6,"Subject",1,0,'C');
 $pdf->Cell(60,6,"Mark",1,0,'C');
 $pdf->Cell(60,6,"Total",1,1,'C');
// $pdf->Cell(60,6,"Maths",1,0,'C');
// $pdf->Cell(60,6,"$maths",1,0,'C');
// $pdf->Cell(0,6,' ','LTR',0,'C',0);   // empty cell with left,top, and right borders
// $pdf->Cell(60,6,"$total",1,0,'L',0);




  // empty cell with left,top, and right borders
$pdf->Cell(60,6,"Maths",1,0,'C',0);
$pdf->Cell(60,6,"$maths",1,0,'C',0);
$pdf->Cell(60,6,"",'LTR',0,'L',0); 
                $pdf->Ln();

  // cell with left and right borders
$pdf->Cell(60,6,"Science",1,0,'C',0);
$pdf->Cell(60,6,"$science",1,0,'C',0);
$pdf->Cell(60,6,"$total",'LBR',0,'C',0); 
                $pdf->Ln();

  // empty cell with left,bottom, and right borders
$pdf->Cell(60,6,"Percentage",'LRB',0,'C',0);
$pdf->Cell(60,6,"$percentage%",'LRB',0,'C',0);
$pdf->Cell(60,6,"$remark",'LBR',0,'C',0); 
                $pdf->Ln();
               

$pdf->Output();   
?> 
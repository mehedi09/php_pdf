<?php
require('fpd/fpdf.php');
$pdf=new FPDF();
//var_dump(get_class_methods($pdf));
$pdf->AddPage();
$pdf->SetTitle('fff');
$pdf->SetFont('Arial','',20);
$pdf->Cell(40,5,'Hello World!');
$pdf->Output();
 
 ?>

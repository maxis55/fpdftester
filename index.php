<?php
require ('includes/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','U',16);
$pdf->Cell(40,10,'Hello Cruel World!');
$pdf->Output('f','test.pdf');

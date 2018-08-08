<?php
require ('includes/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->SetFont('Arial','U',9);
$pdf->setXY(40,20);

$pdf->Cell(40,5,'Hello Cruel World!',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->setX(40);

$pdf->MultiCell(50,5,"Herr\nMax Mustermann\nMustoratrasse 1\n12345 Mustentadt",0,'L');
$pdf->Image('includes/fpdf/tutorial/logo.png',140,15,30);
$pdf->setXY(140,45);
$pdf->MultiCell(50,5,"Angethosdatum: ".date('d.m.Y')."\n"
                                .'Getting his: '.date('d.m.Y')."\n"
                                .'Usr-tdNr: DE123456789',0,'R');
$pdf->setXY(50,$pdf->getY()+15);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'Angebot Nr. 12345',0,1,'L');
$pdf->Output('f','test.pdf');


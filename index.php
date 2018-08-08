<?php
require ('includes/fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->SetFont('Arial','U',9);
$pdf->setXY(40,20);

$pdf->Cell(40,10,'Hello Cruel World!',0,1,'L');
$pdf->SetFont('Arial','',9);
$pdf->setX(40);

$pdf->MultiCell(50,5,"Herr\nMax Mustermann\nMustoratrasse 1\n12345 Mustentadt",0,'L');
$pdf->Image('includes/fpdf/logo.png',140,15,30);
$pdf->setXY(140,45);
$pdf->MultiCell(50,5,"Angethosdatum: ".date('d.m.Y')."\n"
                                .'Getting his: '.date('d.m.Y')."\n"
                                .'Usr-tdNr: DE123456789',0,'R');
$pdf->setXY(42,$pdf->getY()+15);

$pdf->SetFont('Arial','B',9);
$pdf->Cell(40,5,'Angebot Nr. 12345',0,1,'L');

$pdf->setXY(42,$pdf->getY()+5);
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(100,8,"Seht girefute Damen uhfdf Heren,\n"
    ."lorem ipsum some text ok\n"
    .'And some other text with huge width or something like that lets see',0,'L');


$pdf->Output('f','test.pdf');


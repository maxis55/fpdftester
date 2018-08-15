<?php
require('includes/fpdf/fpdf.php');
$globalX = 30;
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetAutoPageBreak(false);
$pdf->SetFont('Arial', 'U', 9);

$pdf->setXY($globalX, 20);
$pdf->Cell(40, 10, 'Hello Cruel World!', 0, 1, 'L');
$pdf->SetFont('Arial', '', 9);

$pdf->setX($globalX);
$pdf->MultiCell(50, 5, "Herr\nMax Mustermann\nMustoratrasse 1\n12345 Mustentadt", 0, 'L');
$pdf->Image('includes/fpdf/logo.png', 140, 15, 30);

$pdf->setXY(140, 45);
$pdf->MultiCell(50, 5, "Angethosdatum: " . date('d.m.Y') . "\n"
    . 'Getting his: ' . date('d.m.Y') . "\n"
    . 'Usr-tdNr: DE123456789', 0, 'R');
$pdf->setXY($globalX, $pdf->getY() + 15);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(40, 5, 'Angebot Nr. 12345', 0, 1, 'L');

$pdf->setXY($globalX, $pdf->getY() + 5);
$pdf->SetFont('Arial', '', 9);
$pdf->MultiCell(100, 8, "Seht girefute Damen uhfdf Heren,\n"
    . "lorem ipsum some text ok\n"
    . 'And some other text with huge width or something like that lets see', 0, 'L');


$pdf->SetFont('Arial', 'B', 9);
$header = array('Nr.', 'Bezeichnung', 'Monge', 'Einzel/€', 'Gasamt/€');
$tableWidth = array(15, 65, 30, 30, 30);
$tableWidthSum=array_sum($tableWidth)+$globalX;
$pdf->setXY($globalX, $pdf->getY() + 5);
for ($i = 0; $i < 5; $i++) {
    $pdf->Cell($tableWidth[$i], 6, $header[$i], 0);
}
$pdf->Ln();
$pdf->Line($globalX, $pdf->getY(), $tableWidthSum, $pdf->getY());


$pdf->SetFont('Arial', '', 9);

$lines = array(); //data from post with values to add to table
for ($i = 1; $i <= 5; $i++) {
    $lines[] = array(
        'nr' => $i,
        'name' => 'Femesesher 40 Zeit dfdffdf',
        'message' => "$i Stuck",
        'price1' => "$i.00.00",
        'price2' => "$i.00.00.00"
    );
}

foreach ($lines as $line){
    $pdf->setX($globalX);

    $i=0;
    foreach ($line as $value){
        $pdf->Cell($tableWidth[$i++], 6, $value, 0,'','L');
    }
    $pdf->Ln();
}
$pdf->Ln();
echo 'some changes';

$pdf->setX(130);
$pdf->Cell(20, 5, 'Summe', 0, 0, 'L');
$pdf->setX(170);
$pdf->Cell(20, 5, '1.120.00', 0, 1, 'L');


$pdf->setX(130);
$pdf->Cell(20, 5, 'Ravait', 0, 0, 'L');
$pdf->setX(170);
$pdf->Cell(20, 5, '-112.00', 0, 1, 'L');

$pdf->Line($globalX, $pdf->getY(), $tableWidthSum, $pdf->getY());


$pdf->Output('f', 'test.pdf');


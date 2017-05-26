<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require('fpdf.php');
$pdf = new FPDF();

$pdf->SetLeftMargin(10);
$pdf->AddPage();

$pdf->SetTextColor('0','0','0');
$pdf->SetFont('Arial','B',10);
$pdf->Cell(100,5,$busi);
$pdf->SetFont('Arial','B',10);
$pdf->MultiCell(80,5,$busi);
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(15,5,"Date :");
$pdf->Cell(85,5,date('M, d Y H:i:s',strtotime($date)));
$pdf->Cell(15,5,"BOL :");
$pdf->Cell(85,5,$od);
$pdf->Ln();
$pdf->Line(10, 45, 200, 45);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(25,5,"Test By :");
$pdf->Cell(75,5,$od);

$pdf->Cell(25,5,"D To :");
$pdf->Cell(85,5,$st);
$pdf->Ln();

$pdf->Cell(25,5,"");
$pdf->Cell(75,5,$ods);

$pdf->Cell(10,5,"");
$pdf->Cell(100,5,$add);
$pdf->Ln();
$pdf->Ln();
$tick1="";
$tick2="";

$pdf->Cell(35,5,"Sample :");
$pdf->Cell(65,5,$ternm);
$pdf->Ln();

$pdf->Cell(35,5,"Sample ");
$pdf->Cell(32,5,$tk);
$pdf->Cell(32,5,$tk);
$pdf->Ln();
$pdf->Cell(35,5,"Sample #: ");
$pdf->Cell(65,5,$od);
$pdf->Cell(35,5,"Sample : ");
$pdf->Cell(32,5,$od);
$pdf->Ln();
$pdf->Ln();
$pdf->Line(10,85,200,85);
$pdf->Ln();
$pdf->Ln();



$pdf->SetTextColor('0','0','0');
$pdf->SetFont('Arial','',8);
$pdf->Cell(90,5,"Sample",1,0,"C");
$pdf->Cell(7,5,"");
$pdf->Cell(94,5,"Sample",1,0,"C");
$pdf->SetFillColor(976,245,458);

$pdf->Ln();
$pdf->SetDrawColor(0, 0, 0);
$pdf->Cell(8,5,"#",1);
$pdf->Cell(42,5,"Sample",1);
$pdf->Cell(20,5,"Sample",1);
$pdf->Cell(20,5,"Sample",1);

$pdf->Cell(7,5,"");

$pdf->Cell(28,5,"Sample",1);
$pdf->Cell(12,5,"Sample",1);
$pdf->Cell(10,5,"Sample",1);
$pdf->Cell(12,5,"Sample",1);
$pdf->Cell(10,5,"Sample",1);
$pdf->Cell(12,5,"Sample",1);
$pdf->Cell(10,5,"Sample",1);
$pdf->Ln();


$pdf->Cell(8,5,$jsos,1);
$pdf->Cell(42,5,$mat,1);

$pdf->Cell(20,5,$jsos,1);
$pdf->Cell(20,5,$loas,1);
$pdf->Cell(7,5,"");

$pdf->Cell(28,5,$mats,1);
$pdf->Cell(12,5,$st,1);
$pdf->Cell(10,5,$st,1);
$pdf->Cell(12,5,$st,1);
$pdf->Cell(10,5,$st,1);
$pdf->Cell(12,5,$st,1);
$pdf->Cell(10,5,$st,1);
$pdf->Ln();

$pdf->Ln();



$pdf->Cell(200,5,"Sample");

$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->MultiCell(190,5,"Text Content here.",10);

$pdf->Ln();
$pdf->SetFont('Arial','',10);
$pdf->Line(10,215,200,215);
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(110,5,"Recd By :");
$sia="images/signatures/signature.jpg";
if(!empty($sia)){
//$pdf->Image("images/signatures/signature.jpg",50,220,20,20);
}
//$tick="images/signatures/signature.jpeg";
//$tick="images/signatures/signature.jpeg";
//$pdf->Image($tick,20,50,150,150);
//$this->Cell(10,6,$this->Image('check.png',$this->GetX(),$this->GetY()),1,0,'C',1);

$pdf->Cell(25,5,"Carrier : ");
$pdf->Cell(85,5,$busis);

$pdf->Ln();

$pdf->Cell(25,5,"");
$pdf->Cell(85,5,"");
$pdf->Cell(25,5,"Phone : ");
$pdf->Cell(85,5,$busis);

$pdf->Ln();
$pdf->Ln();

$pdf->Cell(25,5,"Driver : ");
$pdf->Cell(85,5,$ods);
$pdf->Cell(25,5,"No : ");
$pdf->Cell(85,5,"");

$pdf->Ln();
$pdf->Line(10,250,200,250);



$terarr=$jsond['ter'][$a];

$unique=array_unique($terarr);
$avilter=array_values($unique);


$imgr1="images/tick/".$tics."";
$imgr2="images/tick/".$tics."";

if($tick[0]['image1']!=""){
$pdf->SetLeftMargin(10);
$pdf->AddPage();
$pdf->Image($imgr1,0,10,210,280,0,10,210,280);
}

if($tick[0]['image2']!=""){
$pdf->SetLeftMargin(10);
$pdf->AddPage();
$pdf->Image($imgr2,0,10,210,280,0,10,210,280);
}

$pdf->Output();

?>
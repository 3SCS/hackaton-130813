<?php

require('fpdf.php');

$pdf=new FPDF('P','cm','A4');

//Titres des colonnes
$header=array('NOM MATIERE','COEFICIENT','ENSEIGNANT','CLASSE');
$pdf->SetFont('Arial','B',14);
$pdf->AddPage();
$pdf->SetFillColor(96,96,96);
$pdf->SetTextColor(255,255,255);
mysql_connect('localhost','root','') or die("ERROR DATABASE CONNECTION");
mysql_select_db('gestion_scolaire') or die("DATA SELECTION ERRROR");
$query="select * from enseignant";
$resultat=mysql_query($query);
$pdf->SetXY(3,3);
for($i=0;$i<sizeof($header);$i++)
    $pdf->cell(5,1,$header[$i],1,0,'C',1);

$pdf->SetFillColor(0xdd,0xdd,0xdd);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','',10);
$pdf->SetXY(3,$pdf->GetY()+1);
$fond=0;
while($row=mysql_fetch_array($resultat))
  {
   $pdf->cell(5,0.7,$row['nomENS'],1,0,'C',$fond);
   $pdf->cell(5,0.7,$row['prenomENS'],1,0,'C',$fond);
   $pdf->cell(5,0.7,$row['emailENS'],1,0,'C',$fond);
   $pdf->SetXY(3,$pdf->GetY()+0.7);
   $fond=!$fond;
  }
$pdf->output();
?>

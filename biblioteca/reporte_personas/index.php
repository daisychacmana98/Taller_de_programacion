<?php 
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Pagína ').$this->PageNo().'',0,0,'C');
}
}

require_once("../conexion/conexion.php");
$query="SELECT * FROM personas WHERE Activo=1";
$resultado=$conexion->query($query);

$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
    // Movernos a la derecha
    $pdf->Cell(80);
    $pdf->Image('../images/logo1.png',10,8,20);
    // Título
    $pdf->Cell(110,10,'Golden Library',1,0,'C');
    // Salto de línea
    $pdf->Ln(20);
    $pdf->Cell(50,10,'Personas registradas',0,0,'C');
    $pdf->Ln(20);
    $pdf->cell(8,10,'ID',1,0,'C',0);
    $pdf->cell(50,10,'Nombre',1,0,'C',0);
    $pdf->cell(24,10,'Barrio',1,0,'C',0);
    $pdf->cell(27,10,'Calle',1,0,'C',0);
    $pdf->cell(14,10,utf8_decode('Número'),1,0,'C',0);
    $pdf->cell(24,10,'Estado',1,0,'C',0);
    $pdf->cell(24,10,'Ciudad',1,0,'C',0);
    $pdf->cell(17,10,'Sexo',1,0,'C',0);
    $pdf->cell(30,10,'Fecha de nacimiento',1,0,'C',0);
    $pdf->cell(17,10,utf8_decode('Teléfono'),1,0,'C',0);
    $pdf->cell(47,10,'Correo',1,1,'C',0);

$pdf->SetFont('Arial','I',8);

while ($row=$resultado->fetch_assoc()) {
	$pdf->cell(8,10,$row['Id_persona'],1,0,'C',0);
	$pdf->cell(50,10,utf8_decode($row['Nombre']),1,0,'C',0);
    $pdf->cell(24,10,utf8_decode($row['Barrio']),1,0,'C',0);
    $pdf->cell(27,10,utf8_decode($row['Calle']),1,0,'C',0);
	$pdf->cell(14,10,$row['Numero'],1,0,'C',0);
    $pdf->cell(24,10,utf8_decode($row['Ciudad']),1,0,'C',0);
    $pdf->cell(24,10,utf8_decode($row['Estado']),1,0,'C',0);
    $pdf->cell(17,10,$row['Sexo'],1,0,'C',0);
    $pdf->cell(30,10,$row['Fecha_nacimiento'],1,0,'C',0);
    $pdf->cell(17,10,utf8_decode($row['Telefono']),1,0,'C',0);
    $pdf->cell(47,10,$row['Correo'],1,1,'C',0);
}
$pdf->Output();
 ?>
<?php 
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    
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
$query="SELECT * FROM libros WHERE Activo=1";
$resultado=$conexion->query($query);

$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->Image('../images/logo1.png',10,8,20);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    $pdf->Cell(110,10,'Golden Library',1,0,'C');
    // Salto de línea
    $pdf->Ln(20);
    $pdf->Cell(50,10,'Libros registrados',0,0,'C');
    $pdf->Ln(20);
    $pdf->cell(15,10,'ID',1,0,'C',0);
    $pdf->cell(65,10,'Titulo',1,0,'C',0);
    $pdf->cell(17,10,'Copias',1,0,'C',0);
    $pdf->cell(38,10,'Editorial',1,0,'C',0);
    $pdf->cell(45,10,utf8_decode('Fecha de edición'),1,0,'C',0);
    $pdf->cell(45,10,utf8_decode('Categoría'),1,0,'C',0);
    $pdf->cell(17,10,'Estante',1,1,'C',0);

$pdf->SetFont('Arial','I',9);

while ($row=$resultado->fetch_assoc()) {
	$pdf->cell(15,10,$row['Id_libro'],1,0,'C',0);
	$pdf->cell(65,10,utf8_decode($row['Titulo']),1,0,'C',0);
	$pdf->cell(17,10,$row['Copias'],1,0,'C',0);
    $pdf->cell(38,10,utf8_decode($row['Editorial']),1,0,'C',0);
    $pdf->cell(45,10,$row['Fecha_edicion'],1,0,'C',0);
    $pdf->cell(45,10,utf8_decode($row['Categoria']),1,0,'C',0);
    $pdf->cell(17,10,$row['Estante'],1,1,'C',0);
}
$pdf->Output();
 ?>
<?php 
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',12);
    // Movernos a la derecha
    $this->Cell(80);
    $this->Image('../images/logo1.png',10,8,20);
    // Título
    $this->Cell(40,10,'Golden Library',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(50,10,'Autores registrados',0,0,'C');
    $this->Ln(20);
    $this->cell(25,10,'ID',1,0,'C',0);
    $this->cell(65,10,'Nombre',1,0,'C',0);
    $this->cell(75,10,'Titulo del libro',1,1,'C',0);
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
$query="SELECT autores.Id_autor,autores.Nombre,libros.Titulo FROM autores,libros WHERE autores.Id_libro=libros.Id_libro AND autores.Activo=1";
$resultado=$conexion->query($query);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I',9);
while ($row=$resultado->fetch_assoc()) {
	$pdf->cell(25,10,$row['Id_autor'],1,0,'C',0);
	$pdf->cell(65,10,utf8_decode($row['Nombre']),1,0,'C',0);
	$pdf->cell(75,10,utf8_decode($row['Titulo']),1,1,'C',0);
}
$pdf->Output();
 ?>
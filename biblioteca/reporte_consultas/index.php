<?php 
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',9);
    // Movernos a la derecha
    $this->Cell(80);
    $this->Image('../images/logo1.png',10,8,20);
    // Título
    $this->Cell(40,10,'Golden Library',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(50,10,'Consultas registradas',0,0,'C');
    $this->Ln(20);
    $this->cell(8,10,'ID',1,0,'C',0);
    $this->cell(52,10,'Nombre',1,0,'C',0);
    $this->cell(52,10,'Titulo del libro',1,0,'C',0);
    $this->cell(28,10,'Fecha de visista',1,0,'C',0);
    $this->cell(28,10,'Hora de entrada',1,0,'C',0);
    $this->cell(28,10,'Hora de salida',1,1,'C',0);
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
$query="SELECT * FROM consulta,personas,libros WHERE personas.Id_persona=consulta.Id_persona AND
                                    libros.Id_libro=consulta.Id_libro";
$resultado=$conexion->query($query);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I',9);
while ($row=$resultado->fetch_assoc()) {
	$pdf->cell(8,10,$row['Id_consulta'],1,0,'C',0);
	$pdf->cell(52,10,utf8_decode($row['Nombre']),1,0,'C',0);
	$pdf->cell(52,10,utf8_decode($row['Titulo']),1,0,'C',0);
    $pdf->cell(28,10,$row['Fecha_visita'],1,0,'C',0);
    $pdf->cell(28,10,$row['Hora_entrada'],1,0,'C',0);
    $pdf->cell(28,10,$row['Hora_salida'],1,1,'C',0);
}
$pdf->Output();
 ?>
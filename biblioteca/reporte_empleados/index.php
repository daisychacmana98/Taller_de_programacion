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
    $this->Cell(50,10,'Empleados registrados',0,0,'C');
    $this->Ln(20);
    $this->cell(25,10,'ID',1,0,'C',0);
    $this->cell(65,10,'Nombre',1,0,'C',0);
    $this->cell(40,10,utf8_decode('Contratación'),1,0,'C',0);
    $this->cell(45,10,'Puesto',1,1,'C',0);
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
$query="SELECT empleados.Id_empleado,personas.Nombre,empleados.Fecha_contratacion,puesto.Descripcion
                                FROM personas,empleados,puesto WHERE personas.Id_persona=empleados.Id_persona
                                AND empleados.Id_puesto=puesto.Id_puesto AND empleados.Activo=1";
$resultado=$conexion->query($query);

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I',9);
while ($row=$resultado->fetch_assoc()) {
	$pdf->cell(25,10,$row['Id_empleado'],1,0,'C',0);
	$pdf->cell(65,10,utf8_decode($row['Nombre']),1,0,'C',0);
    $pdf->cell(40,10,$row['Fecha_contratacion'],1,0,'C',0);
	$pdf->cell(45,10,utf8_decode($row['Descripcion']),1,1,'C',0);
}
$pdf->Output();
 ?>
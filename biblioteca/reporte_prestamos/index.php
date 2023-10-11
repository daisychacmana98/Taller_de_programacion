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
$query="SELECT prestamos.Id_prestamo,personas.Nombre,prestamos.Cantidad,prestamos.Identificacion,
                                prestamos.Fecha_prestamo,prestamos.Fecha_devolucion,libros.Titulo,detalle.Descripcion,
                                prestamos.Estatus FROM libros,prestamos,detalle,personas WHERE
                                prestamos.Id_persona=personas.Id_persona AND libros.Id_libro=detalle.Id_libro AND
                                prestamos.Id_prestamo=detalle.Id_prestamo ORDER BY Id_prestamo";
$resultado=$conexion->query($query);

$query1="SELECT personas.Nombre FROM empleados,prestamos,personas WHERE empleados.Id_persona=personas.Id_persona
                                        AND prestamos.Id_empleado=empleados.Id_empleado";
                                        
                                        $resultado1=$conexion->query($query1);

$pdf=new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    $pdf->Image('../images/logo1.png',10,8,20);
    $pdf->Cell(110,10,'Golden Library',1,0,'C');
    // Salto de línea
    $pdf->Ln(20);
    $pdf->Cell(50,10,'Prestamos registrados',0,0,'C');
    $pdf->Ln(20);
    $pdf->cell(8,10,'ID',1,0,'C',0);
    $pdf->cell(45,10,'Nombre',1,0,'C',0);
    $pdf->cell(45,10,'Empleado',1,0,'C',0);
    $pdf->cell(15,10,'Cantidad',1,0,'C',0);
    $pdf->cell(25,10,utf8_decode('Identificación'),1,0,'C',0);
    $pdf->cell(24,10,'Fecha prestamo',1,0,'C',0);
    $pdf->cell(26,10,utf8_decode('Fecha devolución'),1,0,'C',0);
    $pdf->cell(30,10,'Titulo',1,0,'C',0);
    $pdf->cell(40,10,utf8_decode('Descripción'),1,0,'C',0);
    $pdf->cell(20,10,'Estatus',1,1,'C',0);

$pdf->SetFont('Arial','I',8);

while ($row=$resultado->fetch_assoc() AND $row1=$resultado1->fetch_assoc()) {
	$pdf->cell(8,10,$row['Id_prestamo'],1,0,'C',0);
	$pdf->cell(45,10,utf8_decode($row['Nombre']),1,0,'C',0);
    $pdf->cell(45,10,utf8_decode($row1['Nombre']),1,0,'C',0);
    $pdf->cell(15,10,utf8_decode($row['Cantidad']),1,0,'C',0);
	$pdf->cell(25,10,utf8_decode($row['Identificacion']),1,0,'C',0);
    $pdf->cell(24,10,utf8_decode($row['Fecha_prestamo']),1,0,'C',0);
    $pdf->cell(26,10,utf8_decode($row['Fecha_devolucion']),1,0,'C',0);
    $pdf->cell(30,10,utf8_decode($row['Titulo']),1,0,'C',0);
    $pdf->cell(40,10,utf8_decode($row['Descripcion']),1,0,'C',0);
    $pdf->cell(20,10,$row['Estatus'],1,1,'C',0);
}
$pdf->Output();
 ?>
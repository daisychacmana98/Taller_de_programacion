<!doctype html>
<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="Styles.css">
</head>
<body>
<?php
class Persona {
 private $nombre;
 public function inicializar($nom)
 {
 $this->nombre=$nom;
 }
 public function imprimir()
 {
 echo $this->nombre;
 echo '<br>';
 }
}
$per1=new Persona();
$per1->inicializar('Juan');
	$per1->imprimir();
$per2=new Persona();
$per2->inicializar('Ana');
$per2->imprimir();
$per3=new Persona();
$per3->inicializar('Josè');
	$per3->imprimir();
$per4=new Persona();
$per4->inicializar('Maria');
	$per4->imprimir();
?>
</body>
</html>

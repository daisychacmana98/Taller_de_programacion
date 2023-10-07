<html>
<head>
<title>Pruebas</title>
<link rel="stylesheet" href="Styles.css">
</head>
<body>
<?php
class Menu {
 private $enlaces=array();
 private $titulos=array();
 public function cargarOpcion($en,$tit)
 {
 $this->enlaces[]=$en;
 $this->titulos[]=$tit;
 }
 public function mostrar()
 {
 for($f=0;$f<count($this->enlaces);$f++)
 {
 echo '<a href="'.$this->enlaces[$f].'">'.$this->titulos[$f].'</a>';
 echo " - ";
 }
 }
	}
	$menu1=new Menu();
$menu1->cargarOpcion('http://www.google.com','Google');
$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
$menu1->cargarOpcion('http://www.msn.com','MSN');
$menu1->cargarOpcion('http://www.gmail.com','Gmail');	
$menu1->mostrar();
	
?>
</body>
</html>

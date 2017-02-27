<?php
include_once("contacto.class.php");
include("conectar.php");
$contacto = new Contacto();
mysql_select_db($db,$conexion);
echo json_encode($contacto->buscar($_GET['term'],$conexion));
?>
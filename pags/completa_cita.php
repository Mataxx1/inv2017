<?php
include_once("cita.class.php");
include("conectar.php");
$cita = new Cita();
mysql_select_db($db,$conexion);
echo json_encode($cita->buscar($_GET['term'],$conexion));
?>
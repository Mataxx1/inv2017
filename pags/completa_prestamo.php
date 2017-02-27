<?php
include_once("paciente.class.php");
include("conectar.php");
$paciente = new Paciente();
mysql_select_db($db,$conexion);
echo json_encode($paciente->buscar($_GET['term'],$conexion));
?>
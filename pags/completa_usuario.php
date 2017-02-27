<?php
include_once("usuario.class.php");
include("conectar.php");
$usuario = new Usuario();
mysql_select_db($db,$conexion);
echo json_encode($usuario->buscar($_GET['term'],$conexion));
?>
<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$sql="SELECT idequipo FROM `equipo` WHERE tipo_equipo_idtipo_equipo = 'libjoni' ORDER BY idequipo DESC";
$qry = mysql_query($sql,$conexion);
$arr= mysql_fetch_array($qry);
natsort($arr);
for($i=0;$i<sizeof($arr);$i++){
	echo $arr[0]."<br>";
	}
	
	print_r($arr);
?>
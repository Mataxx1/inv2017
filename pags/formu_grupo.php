<?php
$term = $_GET['q'];
include("conectar.php");
mysql_select_db($db,$conexion);

retornaForm($term,$conexion);




function retornaForm($id,$conexion){
	$sql="SELECT * FROM `grupo` WHERE id =  '$id'";
	if(mysql_query($sql,$conexion)){
		$res = mysql_query($sql,$conexion);
		$objEspec = mysql_fetch_object($res);
		echo '<table>
		<tr><td>Nuevo nombre:</td><td><input type="text" size="50" name="nomb_grupo" id="nomb_grupo" value="'.$objEspec->nombre.'"></td></tr>
		<tr><td>Fecha: </td><td><input type="text" size="50" name="horario" id="horario" value="'.$objEspec->horario.'"></td></tr>
		<tr><td>Lugar: </td><td><input type="text" size="50" name="lugar" id="lugar" value="'.$objEspec->lugar.'"></td></tr>';		
		
		}else{
			echo 'erro: '.mysql_error();
			}
	
	
	}
?>
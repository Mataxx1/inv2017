<?php
$term = $_GET['q'];
include("conectar.php");
mysql_select_db($db,$conexion);

retornaForm($term,$conexion);




function retornaForm($id,$conexion){
	$sql="SELECT * FROM `especialidad` WHERE idespecialidad =  '$id'";
	if(mysql_query($sql,$conexion)){
		$res = mysql_query($sql,$conexion);
		$objEspec = mysql_fetch_object($res);
		echo '<td>Nombre especialidad</td><td><input type="text" name="nomb_espec" id="nomb_espec" placeholder="'.$objEspec->nombre.'" value="'.$objEspec->nombre.'" style="width:100%;"></td>';		
		
		}else{
			echo 'erro: '.mysql_error();
			}
	
	
	}
?>
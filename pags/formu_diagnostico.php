<?php
$term = $_GET['q'];
include("conectar.php");
mysql_select_db($db,$conexion);

retornaForm($term,$conexion);




function retornaForm($id,$conexion){
	$sql="SELECT * FROM `diagnostico` WHERE id =  '$id'";
	if(mysql_query($sql,$conexion)){
		$res = mysql_query($sql,$conexion);
		$objEspec = mysql_fetch_object($res);
		echo '<td><input type="text" name="nomb_diagnostico" id="nomb_diagnostico" placeholder="'.$objEspec->nombre.'" value="'.$objEspec->nombre.'" style="width:100%;"></td>';		
		
		}else{
			echo 'erro: '.mysql_error();
			}
	
	
	}
?>
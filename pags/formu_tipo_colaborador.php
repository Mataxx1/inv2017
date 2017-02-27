<?php
$term = $_GET['q'];
include("conectar.php");
mysql_select_db($db,$conexion);

retornaForm($term,$conexion);




function retornaForm($id,$conexion){
	$sql="SELECT * FROM `tipo_colaborador` WHERE id =  '$id'";
	if(mysql_query($sql,$conexion)){
		$res = mysql_query($sql,$conexion);
		$objEspec = mysql_fetch_object($res);
		echo '<td><input type="text" name="tipo_colaborador" id="tipo_colaborador" placeholder="'.$objEspec->tipo.'" value="'.$objEspec->tipo.'" style="width:100%;"></td>';		
		
		}else{
			echo 'erro: '.mysql_error();
			}
	
	
	}
?>
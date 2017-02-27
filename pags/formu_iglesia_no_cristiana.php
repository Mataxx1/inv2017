<?php
$term = $_GET['q'];
include("conectar.php");
mysql_select_db($db,$conexion);

retornaForm($term,$conexion);




function retornaForm($id,$conexion){
	$sql="SELECT * FROM `iglesia` WHERE id =  '$id'";
	if(mysql_query($sql,$conexion)){
		$res = mysql_query($sql,$conexion);
		$objEspec = mysql_fetch_object($res);
		echo '<input type="text" size="50" name="nomb_iglesianc" id="nomb_iglesianc" placeholder="'.$objEspec->nombre.'" style="width:100%">';		
		
		}else{
			echo 'erro: '.mysql_error();
			}
	
	
	}
?>
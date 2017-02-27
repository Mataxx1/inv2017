<?php
$nombre = $_POST['iglesia'];
include ("conectar.php");



if($conexion){
	mysql_select_db($db,$conexion);
	
		if(add_IC($nombre,$conexion)){
			
			mensaje("La iglesia cristiana Se ha agregado con \u00e9xito","alta_iglesia.php");
			}else{
				mensaje("Algo salió mal: ".mysql_error(),"alta_iglesia.php");
				}
		
	}else{
		echo "error conectando";
		}

function add_IC($nombre,$conexion){
	$Sql= "INSERT INTO `iglesia`(`nombre`) VALUES ('$nombre')";
	if(mysql_query($Sql,$conexion)){
		return true;
		}else{
			return false;
			}
		mysql_close($conexion);
	}


?>
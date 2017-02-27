<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$cedula=$_POST['cedula'];
$nombre = $_POST['nombre'];
$dom=$_POST['domicilio'];
$mun = $_POST['municipio'];
$tel = $_POST['telefono'];
@$ap = $_POST['apaterno'];
@$am = $_POST['amaterno'];
$loc = $_POST['localidad'];






if(actualizaPastor($cedula,$nombre,$ap,$am,$dom,$mun,$loc,$tel,$conexion)){

		mensaje("Datos de m\u00e9dico actualizados","editar_medico.php");
	}else{
		mensaje("Error actualizando datos del m\u00e9dico","editar_medico.php");
		echo 'error: '.mysql_error();
		}




	
function actualizaPastor($cedula,$nom,$ap,$am,$dom,$mun,$loc,$tel,$conexion){
	$sql="UPDATE `medico` SET `nombre`='$nom',`apaterno`='$ap',`amaterno`='$am',`ciudad`='$mun',`colonia`='$loc',`calle`='$dom',`telefono`='$tel' WHERE cedula='$cedula'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
	


?>
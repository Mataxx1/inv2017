<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id=$_POST['id_acompanante'];
$nombre = $_POST['nombre'];
$dom=$_POST['domicilio'];
$mun = $_POST['municipio'];
$tel = $_POST['telefono'];
@$ap = $_POST['apaterno'];
@$am = $_POST['amaterno'];
$loc = $_POST['localidad'];
$pac_id = $_POST['id_paciente'];
$desicion= $_POST['desicion'];
$evangelio = $_POST['evangelio'];
$sexo = $_POST['sexo'];

if(actualizaAcompanante($id,$nombre,$ap,$am,$tel,$mun,$dom,$loc,$pac_id,$desicion,$evangelio,$sexo,$conexion)){
		mensaje("Datos de acompa\u00f1ante actualizados","editar_acompanante.php");
	}else{
		mensaje("Error actualizando datos del acompa\u00f1ante","editar_acompanante.php");
		echo 'error: '.mysql_error();
		}




	
function actualizaAcompanante($id,$nom,$ap,$am,$tel,$mun,$dom,$loc,$paciente_id,$desicion,$evangelio,$sexo,$conexion){
	$sql="UPDATE `acompanante` SET `nombre`='$nom',`apaterno`='$ap',`amaterno`='$am',`telefono`='$tel',`municipio`='$mun',`domicilio`='$dom',`localidad`='$loc',`paciente_id`='$paciente_id',`desicion`='$desicion',`evangelio`='$evangelio',`sexo`='$sexo' WHERE id = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>
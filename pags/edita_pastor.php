<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id=$_POST['id_pastor'];
$nombre = $_POST['nombre'];
$dom=$_POST['domicilio'];
$mun = $_POST['municipio'];
$tel = $_POST['telefono'];
@$ap = $_POST['apaterno'];
@$am = $_POST['amaterno'];
$em = $_POST['email'];
$loc = $_POST['localidad'];
$fn = $_POST['fech_nac'];
$iglid= $_POST['id_iglesia'];

if(actualizaPastor($id,$nombre,$ap,$am,$em,$loc,$fn,$dom,$mun,$tel,$iglid,$conexion)){
		mensaje("Datos de pastor actualizados","editar_pastor.php");
	}else{
		mensaje("Error actualizando datos de pastor","editar_pastor.php");
		echo 'error: '.mysql_error();
		}




	
function actualizaPastor($id,$nom,$ap,$am,$em,$loc,$fn,$dom,$mun,$tel,$iglid,$conexion){
	$sql="UPDATE `pastor` SET `nombre`='$nom',`apaterno`='$ap',`amaterno`='$am',`telefono`='$tel',`email`='$em',`municipio`='$mun',`localidad`='$loc',`domicilio`='$dom',`fecha_nacimiento`='$fn', iglesia_cristiana_id='$iglid' WHERE id = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>
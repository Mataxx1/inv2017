<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id=$_POST['id_iglesiac'];
$nombre = $_POST['nombre_iglesiac'];
$dom=$_POST['domicilio'];
$mun = $_POST['municipio'];
$tel = $_POST['telefono'];
$loc = $_POST['localidad'];
$seg = $_POST['seguimiento'];

if(actualizaIglesiaC($id,$nombre,$dom,$mun,$loc,$tel,$seg,$conexion)){
		mensaje("Iglesia cristiana actualizada","editar_iglesia_cristiana.php");
	}else{
		mensaje("Error actualizando iglesia cristiana","editar_iglesia_cristiana.php");
		echo 'error: '.mysql_error();
		}




	
function actualizaIglesiaC($id,$nom,$dom,$mun,$loc,$tel,$seg,$conexion){
	$sql="UPDATE `iglesia_cristiana` SET `nombre`='$nom',`domicilio`='$dom',`municipio`='$mun', localidad='$loc',`telefono`='$tel', seguimiento='$seg' WHERE id='$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>
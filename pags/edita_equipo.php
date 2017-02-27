<?php
@$id=$_POST['id'];

@$estatus=$_POST['estatus'];
@$descripcion = $_POST['descripcion'];
@$tipo_equipo = $_POST['tipo_equipo'];
$anio = $_POST['anio'];
@$ancho=$_POST['ancho'];
@$alto = $_POST['alto'];
@$profundo = $_POST['profundo'];
include("conectar.php");
mysql_select_db($db,$conexion);

if(actualizaEquipo($id,$estatus,$descripcion,$tipo_equipo,$anio,$ancho,$alto,$profundo,$conexion)){
	addFotoEquipo($_FILES['foto'],$id);
	mensaje("Equipo: ".$id." actualizado exitosamente","editar_equipo.php");
	}else{
		mensaje("Error actualizando el equipo: ".$id."","editar_equipo.php");
		echo 'error: '.mysql_error();
		}



function actualizaEquipo($id,$estatus,$descripcion,$tipo,$anio,$ancho,$alto,$profundo,$conexion){
	$sql="UPDATE `equipo` SET `estatus`='$estatus',`descripcion`='$descripcion',anio ='$anio', ancho='$ancho',alto='$alto',profundo='$profundo',`tipo_equipo_idtipo_equipo`='$tipo' WHERE idequipo ='$id'";
	if(mysql_query($sql,$conexion)){
		
		return true;
		}else{
			return false;
			}
	}

function addFotoEquipo($archivo,$id){
$dir='../fotos_equipo/'.$id.'.jpg';
if(move_uploaded_file($archivo['tmp_name'],$dir)){
	return true;
	}else{
		return false;
		}
}
?>
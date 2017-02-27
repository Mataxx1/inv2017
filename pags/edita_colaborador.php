<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id=$_POST['id_colaborador'];
$nombre = $_POST['nombre'];
$dom=$_POST['domicilio'];
$mun = $_POST['municipio'];
$tel = $_POST['telefono'];
@$ap = $_POST['apaterno'];
@$am = $_POST['amaterno'];

$loc = $_POST['localidad'];
$fn = $_POST['fech_nac'];

$colid = $_POST['id_tipo_colaborador'];
if(actualizaColaborador($id,$nombre,$ap,$am,$loc,$fn,$dom,$mun,$tel,$colid,$conexion)){
	if(addFotoColab($_FILES['foto'],$nombre.$ap.$am)){
		mensaje("Datos de colaborador actualizados","editar_colaborador.php");
	}else{
		mensaje("Colaborador actualizado sin foto","editar_colaborador.php");
		}
	}else{
		mensaje("Error actualizando datos de colaborador","editar_colaborador.php");
		echo 'error: '.mysql_error();
		}




	
function actualizaColaborador($id,$nom,$ap,$am,$loc,$fn,$dom,$mun,$tel,$colid,$conexion){
	$sql="UPDATE `colaborador` SET `nombre`='$nom',`apaterno`='$ap',`amaterno`='$am',`telefono`='$tel',`domicilio`='$dom',`fecha_nacimiento`='$fn',`tipo_colaborador_id`='$colid',`municipio`='$mun',`localidad`='$loc' WHERE id = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
function addFotoColab($archivo,$nombre){
	$dir='../fotos_colaboradores/'.$nombre.'.jpg';
	if(move_uploaded_file($archivo['tmp_name'],$dir)){
		return true;
		}else{
			return false;
			}
	}

?>
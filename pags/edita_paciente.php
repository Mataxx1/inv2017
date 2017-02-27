<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$id=$_POST['id_paciente'];
$nombre = $_POST['nombre'];
$dom=$_POST['domicilio'];
$mun = $_POST['municipio'];
$tel = $_POST['telefono'];
@$ap = $_POST['apaterno'];
@$am = $_POST['amaterno'];

$loc = $_POST['localidad'];
$fn = $_POST['fech_nac'];

$evangelio = $_POST['evangelio'];
$desicion = $_POST['desicion'];
$diagnostico = $_POST['diagnostico'];

//medidas
$espalda = $_POST['espalda'];
$cadera_rodilla = $_POST['cadera_rodilla'];
$rodilla_talon = $_POST['rodilla_talon'];
$cintura = $_POST['cintura'];
@$altura = $_POST['altura'];
@$peso = $_POST['peso'];
@$fecha_reg = $_POST['fech_reg'];
@$solicitud = $_POST['solicitud'];
@$causa_solicitud = $_POST['causa_solicitud'];
@$requiere = $_POST['requiere'];
@$codo_piso = $_POST['codo_piso'];
@$axila_piso = $_POST['axila_piso'];


if(actualizaPastor($id,$nombre,$ap,$am,$loc,$fn,$dom,$mun,$tel,$desicion,$evangelio,$diagnostico,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$fecha_reg,$solicitud,$causa_solicitud,$requiere,$codo_piso,$axila_piso,$conexion)){
	addFotoPaciente($_FILES['foto'],$id);
		mensaje("Datos de paciente actualizados","editar_paciente.php");
	}else{
		mensaje("Error actualizando datos del paciente","editar_paciente.php");
		echo 'error: '.mysql_error();
		}




	
function actualizaPastor($id,$nom,$ap,$am,$loc,$fn,$dom,$mun,$tel,$desicion,$evangelio,$diagnostico,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$fecha_reg,$solicitud,$causa_solicitud,$requiere,$codo_piso,$axila_piso,$conexion){
	$sql="UPDATE `paciente` SET `nombre`='$nom',`apaterno`='$ap',`amaterno`='$am',`fecha_nacimiento`='$fn',`telefono`='$tel',`municipio`='$mun',`localidad`='$loc',`calle`='$dom', desicion='$desicion',evangelio='$evangelio',diagnostico_id = '$diagnostico', espalda='$espalda', cadera_rodilla='$cadera_rodilla', rodilla_talon='$rodilla_talon', cintura = '$cintura', altura='$altura', peso = '$peso', fecha_registro='$fecha_reg', solicitud='$solicitud', causa_solicitud='$causa_solicitud', requiere = '$requiere',codo_piso = '$codo_piso', axila_piso = '$axila_piso' WHERE id = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
	
	function addFotoPaciente($archivo,$id){
$dir='../fotos_pacientes/'.$id.'.jpg';
if(move_uploaded_file($archivo['tmp_name'],$dir)){
	return true;
	}else{
		return false;
		}
}

?>
<?php
include("conectar.php");
mysql_select_db($db,$conexion);
@$nombre = $_POST['nombre'];
@$domicilio = $_POST['domicilio'];
@$localidad = $_POST['localidad'];
@$municipio = $_POST['municipio'];
@$estado = $_POST['estado'];
@$telefono = $_POST['tel'];
@$acompanante = $_POST['acomp'];
@$prob_fisic = $_POST['prob_fis'];
@$fn = $_POST['nacimiento'];
$grupo = $_POST['id_grupo'];

if(agregaPersona($nombre,$domicilio,$localidad,$municipio,$estado,$telefono,$acompanante,$prob_fisic,$fn,$conexion)){
	$idPersona = recuperaId($nombre,$fn,$conexion);
	if(registraAGrupo($grupo,$idPersona,$conexion)){
		mensaje("Est\u00e1s inscrito al grupo!","../autoregistrar_a_grupo.php");
		}else{
			mensaje("Algo sali\u00f3 mal al inscribir al grupo!","../autoregistrar_a_grupo.php");
			echo "".mysql_error();
			}
	}else{
		mensaje("Ocurri\u00f3 un error al registrarte","../autoregistrar_a_grupo.php");
		echo "".mysql_error();
		}


function agregaPersona($nombre,$domicilio,$localidad,$municipio,$estado,$tel,$acomp,$p_f,$fec_nac,$conexion){
	$sql="INSERT INTO `persona`(`nombre`,domicilio, `localidad`, `municipio`, `estado`, `telefono`, `acompanante`, `problema_fisico`, `fecha_nac`) VALUES ('$nombre','$domicilio','$localidad','$municipio','$estado','$tel','$acomp','$p_f','$fec_nac')";
	
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
						die(mysql_error());
			return false;

			}
	}
function recuperaId($nombre,$fec_nac,$conexion){
	$sql= "SELECT * FROM persona WHERE nombre='$nombre' AND fecha_nac = '$fec_nac'";
	$res = mysql_query($sql,$conexion);
	$persona = mysql_fetch_object($res);
	return $persona->id;
	}
function registraAGrupo($grupo_id,$persona_id,$conexion){
	$sql="INSERT INTO `grupo_asist_persona`(`grupo_id`, `persona_id`, `asistio`) VALUES ('$grupo_id','$persona_id','si')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			die(mysql_error());
			}
	}

?>
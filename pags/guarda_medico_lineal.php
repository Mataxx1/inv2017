<?php

header('Content-Type: text/html; charset=UTF-8');
include("conectar.php");

mysql_select_db($db,$conexion);

$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$nombre=$_POST["nombre"];
$telefono=$_POST['telefono'];
$prim = substr($apaterno,0,1);
$seg = substr($amaterno,0,1);
$ter = substr($nombre,0,1);
$cedula=$prim.$seg.$ter.$telefono;//inicialesnombre, iniciales ap, iniciales am

$estado=$_POST["estado"];
$ciudad=$_POST["ciudad"];
$colonia=$_POST['colonia'];
$calle=$_POST["calle"];

$pais="México";
$usuario = $_POST['usuario'];
$pass=md5($_POST['pass']);

if(!$conexion){
	echo "error en la conexion<br>";
	}else{
		$sql="select * from especialidad";
		$numeroEspec=mysql_num_rows(mysql_query($sql,$conexion));
		if(addMedico($cedula,$nombre,$apaterno,$amaterno,$pais,$estado,$ciudad,$colonia,$calle,$telefono,$conexion)){
			for($i=0;$i<$numeroEspec;$i++){
				if(isset($_POST['especialidad'.$i]) && !empty($_POST['especialidad'.$i])){
					if(guardaEspecialidadXMedico($cedula,$_POST['especialidad'.$i],$conexion)){
						//mensaje("Especialidad agregado con éxito","");
						}else{
							echo 'error en las especialidades';
							}
					}
				}
				if(addMedicoSistema($cedula,$nombre,$apaterno,$amaterno,$usuario,$pass,$conexion)){
					echo 'se agregó exitosamente al sistema';
					}else{
						echo 'error: '.mysql_error();
						}
				mensaje("Médico agregado con éxito","alta_medico.php");
			}else{
				echo "Algo salió mal: ".mysql_error();
				}
		}

function addMedico($ced, $no, $ap, $am, $pa,$es,$ci,$col,$ca,$te,$conexion){
	
$sql="INSERT INTO `medico`(`cedula`, `nombre`, `apaterno`, `amaterno`, `pais`, `estado`, `ciudad`, `colonia`, `calle`, `telefono`) VALUES ('$ced','$no','$ap','$am','$pa','$es','$ci','$col','$ca','$te')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
function addMedicoSistema($cedula,$nombre,$apaterno,$amaterno,$usuario,$pass,$conexion){
	$sql="INSERT INTO `sistema`(`ife`, `nombre`, `apaterno`, `amaterno`, `usuario`, `pass`,`tipo`,estado) VALUES ('$cedula','$nombre','$apaterno','$amaterno','$usuario','$pass','medico','activo')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}	
	
function guardaEspecialidadXMedico($ced,$idEspec,$conex){
	$sql="INSERT INTO `medico_has_especialidad`(`medico_cedula`, `especialidad_idespecialidad`) VALUES ('$ced','$idEspec')";
	if(mysql_query($sql,$conex)){
		return true;
		}else{
			return false;
			}
	}

?>
<?php

header('Content-Type: text/html; charset=UTF-8');
include("conectar.php");

mysql_select_db($db,$conexion);


$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$estado=$_POST["estado"];
$municipio = $_POST['municipio'];
$localidad = $_POST['localidad'];
$domicilio = $_POST['domicilio'];
$id_paciente = $_POST['id_paciente'];
$desicion = $_POST['desicion'];
$evangelio = $_POST['evangelio'];
$sexo = $_POST['sexo'];


if(!$conexion){
	echo "error en la conexion<br>";
	}else{
		
		if(addAcompanante($nombre,$apaterno,$amaterno,$telefono,$estado,$municipio,$localidad,$domicilio,$id_paciente,$desicion,$evangelio,$sexo,$conexion)){
			mensaje("Acompañante agregado exitosamente","alta_acompanante.php");
			}else{
			mensaje("Algo salió mal: ".mysql_error(),"alta_acompanante.php");
				}
		}

function addAcompanante($no, $ap, $am,$tel,$est,$mun,$loc,$dom,$id_pac,$desic,$evangelio,$sexo,$conexion){
	
$sql="INSERT INTO `acompanante`(`nombre`, `apaterno`, `amaterno`, `telefono`, `estado`, `municipio`, `domicilio`, `localidad`, `paciente_id`, `desicion`, `evangelio`, sexo) VALUES ('$no','$ap','$am','$tel','$est','$mun','$dom','$loc','$id_pac','$desic','$evangelio','$sexo')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}


?>
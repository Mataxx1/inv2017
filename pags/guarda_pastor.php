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
$nacimiento = $_POST['fech_nac'];

$iglesia=$_POST['iglesia'];
@$email = $_POST['email'];

if(!$conexion){
	echo "error en la conexion<br>";
	}else{
		
		if(addPastor(utf8_decode($nombre),utf8_decode($apaterno),utf8_decode($amaterno),$telefono,$email,$estado,$municipio,$localidad,$domicilio,$nacimiento,$iglesia,$conexion)){
			mensaje("Pastor agregado exitosamente","alta_pastor.php");
			}else{
				if(mysql_errno() == 1452){
			mensaje("No se pudo dar de alta porque no seleccionó la iglesia","alta_pastor.php");
				}
				}
		}

function addPastor($no, $ap, $am,$tel,$email,$est,$mun,$loc,$dom,$nacim,$igl,$conexion){
	

$sql="INSERT INTO `pastor`(`nombre`, `apaterno`, `amaterno`, `telefono`, `email`, `estado`, `municipio`, `localidad`, `domicilio`, `fecha_nacimiento`, `iglesia_cristiana_id`) VALUES ('$no','$ap','$am','$tel','$email','$est','$mun','$loc','$dom','$nacim','$igl')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}


?>
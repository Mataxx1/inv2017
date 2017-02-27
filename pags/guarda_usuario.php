<?php

header('Content-Type: text/html; charset=UTF-8');
include("conectar.php");

mysql_select_db($db,$conexion);

$ife="";
$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$nombre=$_POST["nombre"];
$usuario=$_POST["usuario"];
$pass=md5($_POST["pass"]);
$tipo=$_POST['tipo'];

$pre1 = substr($apaterno,0,2);
$pre2 = substr($amaterno,0,2);
$pre3 = substr($nombre,0,2);

$ife=$tipo.$pre1.$pre2.$pre3;
if(!$conexion){
	echo "error en la conexion<br>";
	}else{
		
		if(addUsuario($ife,$nombre,$apaterno,$amaterno,$usuario,$pass,$tipo,$conexion)){
			mensaje("Usuario agregado exitosamente","alta_usuario.php");
			}else{
			mensaje("Algo salió mal: ".mysql_error(),"alta_usuario.php");
				}
		}

function addUsuario($ife, $no, $ap, $am,$usr,$pss,$tipo,$conexion){
	
$sql="INSERT INTO `sistema`(`ife`, `nombre`, `apaterno`, `amaterno`, `usuario`, `pass`, `acceso`, `tipo`,estado) VALUES ('$ife','$no','$ap','$am','$usr','$pss','00','$tipo','activo')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}


?>
<?php


include("conectar.php");

mysql_select_db($db,$conexion);

//$ife=$_POST["ife"];
$apaterno=$_POST["apaterno"];
$amaterno=$_POST["amaterno"];
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$estado=$_POST["estado"];
$municipio = $_POST['municipio'];
$localidad = $_POST['localidad'];
$domicilio = $_POST['domicilio'];
$nacimiento = $_POST['fech_nac'];
$tipo=$_POST['tipo'];

if(!$conexion){
	echo "error en la conexion<br>";
	}else{
		
		if(addColaborador($nombre,$apaterno,$amaterno,$telefono,$estado,$municipio,$localidad,$domicilio,$nacimiento,$tipo,$conexion)){
			if(addFotoColab($_FILES['foto'],$nombre.$apaterno.$amaterno)){
			mensaje("colaborador agregado exitosamente","alta_colaborador.php");
			}else{
				mensaje("Se ha agregado el colaborador pero sin foto","alta_colaborador.php");
				}
			}else{
			mensaje("Algo salió mal: ".mysql_error(),"alta_colaborador.php");
				}
		}

function addColaborador($no, $ap, $am,$tel,$est,$mun,$loc,$dom,$nacim,$tipo,$conexion){
	
$sql="INSERT INTO `colaborador`(`nombre`, `apaterno`, `amaterno`, `telefono`, `domicilio`, `fecha_nacimiento`, `tipo_colaborador_id`, `estado`, `municipio`, `localidad`) VALUES ('$no','$ap','$am','$tel','$dom','$nacim','$tipo','$est','$mun','$loc')";
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
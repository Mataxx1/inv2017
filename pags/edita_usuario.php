<?php

include("conectar.php");
mysql_select_db($db,$conexion);
@$ife=$_POST['ife'];
@$nombre=$_POST['nombre'];
@$apat = $_POST['apaterno'];
@$amat = $_POST['amaterno'];
@$usuario = $_POST['usuario'];
@$tipo = $_POST['tipo'];
@$estado = $_POST['estado'];
@$reestablecer = $_POST['reestablecer'];


if(isset($reestablecer) && !empty($reestablecer)){
	$passw=md5($_POST['pass']);
	if(actualizaDatosYPw($ife,$nombre,$apat,$amat,$usuario,$passw,$tipo,$estado,$conexion)){
		mensaje("actualizado exitosamente","editar_usuario.php");
		}else{
			mensaje("Error actualizando usuario","editar_usuario.php");
			}
	}else{
		if(actualizaDatos($ife,$nombre,$apat,$amat,$usuario,$tipo,$estado,$conexion)){
		mensaje("actualizado exitosamente","editar_usuario.php");
		}else{
			mensaje("Error actualizando usuario","editar_usuario.php");
			}
		}





function actualizaDatosYPw($ife, $no,$ap,$am,$us,$pw,$ti,$es,$conexion){
	$sql="UPDATE `sistema` SET `nombre`='$no',`apaterno`='$ap',`amaterno`='$am',`usuario`='$us',`pass`='$pw',`tipo`='$ti',`estado`='$es' WHERE ife = '$ife'";
	
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
		
	}
function actualizaDatos($ife,$no,$ap,$am,$us,$ti,$es,$conexion){
	$sql="UPDATE `sistema` SET `nombre`='$no',`apaterno`='$ap',`amaterno`='$am',`usuario`='$us',`tipo`='$ti',`estado`='$es' WHERE ife='$ife'";
	
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
		
	}


?>
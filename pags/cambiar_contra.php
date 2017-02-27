<?php
include("conectar.php");

mysql_select_db($db,$conexion);

$us=$_POST['usuario'];
$pwAnt = md5($_POST['pass_ant']);
$pwN1 = $_POST['pass_nuev1'];
$pwN2 = $_POST['pass_nuev2'];


if(check_passAnt($us,$pwAnt,$conexion)){
	if(comparaPassNueva($pwN1,$pwN2)){
		if(cambiaPass($us,$pwAnt,$pwN1,$conexion)){
			echo '';
			mensaje("la contraseña se cambio exitosamente","cambia_contra.php");
			}else{
					mensaje("no se pudo cambiar la contraseña","cambia_contra.php");
				echo ':  '.mysql_error();
				}
		}else{
					mensaje("las contraseñas no coinciden","cambia_contra.php");
			echo '';
			}
	}else{
				mensaje("la contraseña anterior o el usuario no son vàlidos","cambia_contra.php");
		echo '';
		}



function check_passAnt($usu,$pwAnt,$conexion){
	$sql="SELECT * FROM sistema WHERE usuario = '$usu' AND pass = '$pwAnt'";
	$res=mysql_query($sql,$conexion);
	if(mysql_num_rows($res)>0){
		return true;
		}else{
			return false;
			}
	
	}
	
function comparaPassNueva($pwN1,$pwN2){
	if($pwN1==$pwN2){
		return true;
		}else{
			return false;
			}
	}
function cambiaPass($us,$pwAnt,$pwN,$conexion){
	$pwEnc=md5($pwN);
	$sql="UPDATE `sistema` SET `pass`='$pwEnc' WHERE usuario='$us' and pass = '$pwAnt'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
?>
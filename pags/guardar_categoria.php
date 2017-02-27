<?php
$cat = $_POST['categoria'];

$pre=substr($cat,0,3);
$suf=substr($cat,-4,4);
$id_cat=$pre.$suf;
include("conectar.php");
$conexion=mysql_connect($host,$user,$pass);
if($conexion){
	mysql_select_db($db,$conexion);
		if(add_categoria($id_cat,$cat,$conexion)){
			mensaje("Se agreg\u00f3 correctamente la nueva categor\u00eda","alta_categoria_equipo.php");
			}else{
			mensaje("Ocurri\u00f3 un error: ".mysql_error(),"alta_categoria_equipo.php");
				}
	}else{
		echo "Error en la conexión";
		}







function add_categoria($id_cat,$categoría,$conexion){
	$sql="INSERT INTO tipo_equipo(idtipo_equipo,nombre) VALUES('$id_cat','$categoría')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	
	
	
	}


?>
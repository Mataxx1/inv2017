<?php
include("conectar.php");
mysql_select_db($db,$conexion);
$utc=time();
$hoy=date("Y-m-d",$utc);
$numero_prestamo = $_GET['prestamo'];
$estado=$_GET['estado'];

if(actualizaPrestamo($numero_prestamo,$estado,$hoy,$conexion)){
	if(actualizarEquipos($numero_prestamo,$conexion)){
		
		}
		mensaje("Entrega actualizada","editar_prestamo.php");
	}else{
		echo 'error: '.mysql_error();
		}


function actualizarEquipos($numero_prestamo,$conexion){
$sqlP="select equipo.idequipo from equipo inner join equipo_prestamo on equipo_prestamo.equipo_idequipo = equipo.idequipo inner join prestamo on equipo_prestamo.prestamo_id_prestamo = prestamo.id_prestamo where prestamo.id_prestamo='$numero_prestamo'";
	$res=mysql_query($sqlP,$conexion);
	while($rowEquipo = mysql_fetch_array($res)){
    actualizaEquipo($rowEquipo['idequipo'],$conexion);
	}
}
	
function actualizaEquipo($id,$conexion){
	$sql="UPDATE `equipo` SET `estatus`='disponible' WHERE idequipo = '$id'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
	
function actualizaPrestamo($prestamo,$estado,$fecha,$conexion){
	$sql="UPDATE `prestamo` SET `fecha_devolucion`='$fecha',`estado`='$estado' WHERE id_prestamo='$prestamo'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>
<?php
include("conectar.php");
mysql_select_db($db,$conexion);
date_default_timezone_set('America/Mexico_City');
@$id = $_POST['ife'];
@$cita = $_POST['cita'];
@$asistio = $_POST['asistio'];
@$observaciones = $_POST['observaciones'];
@$visita = $_POST['visita'];

$today=date("Y-m-d H:i:s",time());
//echo $today;

if(actualiza_cita($cita,$asistio,$conexion)){
	if(!empty($observaciones)){
		if(guarda_historial($today,$observaciones,$id,$conexion)){
			actualiza_paciente($visita,$id,$conexion);
		mensaje("Actualizado correctamente","consultar_citas.php");
		}else{
			echo mysql_error();
			}
		}
	}else{
		echo 'error: '.mysql_error();
		}




function guarda_historial($fecha,$observaciones,$id,$conexion){
	$sql="INSERT INTO historial_medico(fecha, observaciones,paciente_id) VALUES ('$fecha','$observaciones','$id')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
function actualiza_cita($cita,$asistio,$conexion){
	$sql="UPDATE cita SET asistio='$asistio' WHERE numero='$cita'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
function actualiza_paciente($visita,$id,$conexion){
	$sql="UPDATE paciente SET visita_casa='$visita' WHERE id='$id'";
	if(mysql_query($sql,$conexion)){
		return true;		
		}else{
			return false;
			}
	}

?>
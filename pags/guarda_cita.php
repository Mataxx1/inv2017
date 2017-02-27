<?php
session_start();
@$cedula = $_POST['medico'];
@$id= $_POST['id'];
@$fechaInicio= $_POST['fecha_cita'];
@$duracion = $_POST['duracion_cita'];
$sumaFecha = strtotime($fechaInicio);
$minutosAniadir=$duracion*60;
$fechaFin=date("Y-m-d H:i:s",$sumaFecha+$minutosAniadir);
include ("conectar.php");
mysql_select_db($db,$conexion);

if(guardarCita($cedula,$id,$fechaInicio,$fechaFin,$conexion)){
	mensaje("Cita agregada con \u00e9xito","nueva_cita.php");
	}else{
		mensaje("Error guardando cita".mysql_error(),"nueva_cita.php");
		}

function guardarCita($cedula, $id,$fecha_inicio,$fecha_fin,$conexion){
//	$sql="INSERT INTO `cita`(`medico_cedula`, `paciente_id`, `fecha_incio`,fecha_fin,asistio, sistema_ife) VALUES ('$cedula','$id','$fecha_inicio','$fecha_fin','no','".$_SESSION['ife']."')";
	$sql="INSERT INTO `cita`(`fecha_inicio`, `fecha_fin`, `asistio`, `sistema_ife`, `paciente_id`, `medico_cedula`) VALUES ('$fecha_inicio','$fecha_fin','no','".$_SESSION['ife']."','$id','$cedula')";
	if(mysql_query($sql,$conexion)){
		return true;
	}else{
		return false;
		}
	
	}

?>
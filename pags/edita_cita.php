<?php
session_start();
$cita=$_POST['cita'];
@$cedula = $_POST['medico'];
@$id= $_POST['id'];
@$fechaInicio= $_POST['fecha_cita'];
@$duracion = $_POST['duracion_cita'];
$sumaFecha = strtotime($fechaInicio);
$minutosAniadir=$duracion*60;
$fechaFin=date("Y-m-d H:i:s",$sumaFecha+$minutosAniadir);
include ("conectar.php");
mysql_select_db($db,$conexion);

if(guardarCita($cita,$cedula,$id,$fechaInicio,$fechaFin,$conexion)){
	mensaje("Cita editada con \u00e9xito","editar_cita.php");
	}else{
		mensaje("Error editando cita".mysql_error(),"editar_cita.php");
		}

function guardarCita($cita,$cedula, $id,$fecha_inicio,$fecha_fin,$conexion){
//	$sql="INSERT INTO `cita`(`medico_cedula`, `paciente_id`, `fecha_incio`,fecha_fin,asistio, sistema_ife) VALUES ('$cedula','$id','$fecha_inicio','$fecha_fin','no','".$_SESSION['ife']."')";
$sql="UPDATE `cita` SET `fecha_inicio`='".$fecha_inicio."',`fecha_fin`='".$fecha_fin."',`asistio`='no',`sistema_ife`='".$_SESSION['ife']."',`paciente_id`='".$id."',`medico_cedula`='".$cedula."' WHERE numero='".$cita."'";
	
	if(mysql_query($sql,$conexion)){
		return true;
	}else{
		return false;
		}
	
	}

?>
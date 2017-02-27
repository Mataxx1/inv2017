<?php
header('Content-Type: text/html; charset=utf-8');
include("conectar.php");
mysql_select_db($db,$conexion);
@$ced=$_GET['medico'];
@$ife=$_GET['paciente'];
@$fechaInicio=$_GET['fecha'].":00";
@$especialidad = $_GET['especialidad'];
@$duracion = $_GET['duracion'];
$sumaFecha = strtotime($fechaInicio);
$minutosAniadir=$duracion*60;
$fechaFin=date("Y-m-d H:i:s",$sumaFecha+$minutosAniadir);

//echo 'lo que sea';
if(validarMedicoHorarioFI($ced,$fechaInicio,$fechaFin,$conexion) && validarMedicoHorarioFF($ced,$fechaInicio,$fechaFin,$conexion) && validarPacienteHorarioFI($ife,$fechaInicio,$fechaFin,$conexion) && validarPacienteHorarioFF($ife,$fechaInicio,$fechaFin,$conexion) && !empty($ife) && !empty($ced)){
echo ''.'si';
}else{
	echo ''.'no';
	}
	
function validarMedicoHorarioFI($cedula,$fechaInicio,$fechaFin,$conexion){
	$sql="select cita.numero, medico.cedula from cita inner join medico on cita.medico_cedula=medico.cedula where medico.cedula = '$cedula' AND cita.fecha_inicio BETWEEN '$fechaInicio' AND '$fechaFin'";
	$numero=mysql_num_rows(mysql_query($sql,$conexion));
	if($numero==0){
		return true;
		}else{
			return false;
			}
	}
	
function validarMedicoHorarioFF($cedula,$fechaInicio,$fechaFin,$conexion){
	$sql="select cita.numero, medico.cedula from cita inner join medico on cita.medico_cedula=medico.cedula where medico.cedula = '$cedula' AND cita.fecha_fin BETWEEN '$fechaInicio' AND '$fechaFin'";
	$numero=mysql_num_rows(mysql_query($sql,$conexion));
	if($numero==0){
		return true;
		}else{
			return false;
			}
	}
	
function validarPacienteHorarioFI($ife,$fechaInicio,$fechaFin,$conexion){
	$sql="select cita.numero, paciente.id from cita inner join paciente on cita.paciente_id=paciente.id where paciente.id='$ife' AND cita.fecha_inicio BETWEEN '$fechaInicio' AND '$fechaFin'";
	$numero = mysql_num_rows(mysql_query($sql,$conexion));
	if($numero==0){
		return true;
		}else{
			return false;
			}
	
	}
	
	function validarPacienteHorarioFF($ife,$fechaInicio,$fechaFin,$conexion){
	$sql="select cita.numero, paciente.id from cita inner join paciente on cita.paciente_id=paciente.id where paciente.id='$ife' AND cita.fecha_fin BETWEEN '$fechaInicio' AND '$fechaFin'";
	$numero = mysql_num_rows(mysql_query($sql,$conexion));
	if($numero==0){
		return true;
		}else{
			return false;
			}
	
	}

?>
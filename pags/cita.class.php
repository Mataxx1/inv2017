<?php
class Cita{
	
	public function __construct(){
		
		}
	
	public function buscar($numero,$conexion){
		
		$datos=array();
		$sql="select paciente.id,paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.cedula as 'cedula', es.idespecialidad as 'n_esp', cita.asistio
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad  WHERE cita.numero like '%$numero%'";
		if(mysql_query($sql,$conexion)){
		$resultado = mysql_query($sql,$conexion);
		while($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
			$datos[]=array("value"=>$row['numero'],"id"=>$row['id'], "nom_pac"=>$row['nom_pac'], "ap_pac" => $row['ap_pac'], "am_pac" => $row['am_pac'], "telefono" => $row['telefono'], "fecha_inicio" => $row['fecha_inicio'], "cedula" => $row['cedula'], "esp"=>$row['n_esp']);
			}
			return $datos;
		}else{
			$error=array("value"=>'no sirve'.mysql_error());
			return $error;
			}
		}
}
?>
<?php
class Paciente{
	
	public function __construct(){
		
		}
	
	public function buscar($id,$conexion){
		
		$datos=array();
		$sql="SELECT * FROM paciente WHERE id like '%$id%'";
		if(mysql_query($sql,$conexion)){
		$resultado = mysql_query($sql,$conexion);
		while($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
			$datos[]=array("value"=>$row['id'], "nombre"=>$row['nombre'], "apaterno" => $row['apaterno'], "amaterno" => $row['amaterno'], "fecha_nacimiento" => $row['fecha_nacimiento'], "telefono" => $row['telefono'], "estado" => $row['estado'], "municipio" => $row['municipio'], "calle"=>$row['calle'], "iglesia" => $row['iglesia_id'], "decision"=>$row['desicion'], "evangelio"=>$row['evangelio']);
			}
			return $datos;
		}else{
			$error=array("value"=>'no sirve'.mysql_error());
			return $error;
			}
		}
}
?>
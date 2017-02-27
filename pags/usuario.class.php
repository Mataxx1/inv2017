<?php
class Usuario{
	
	public function __construct(){
		
		}
	
	public function buscar($id,$conexion){
		
		$datos=array();
		$sql="SELECT * FROM sistema WHERE ife like '%$id%'";
		if(mysql_query($sql,$conexion)){
		$resultado = mysql_query($sql,$conexion);
		while($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
			$datos[]=array("value"=>$row['ife'], "nombre"=>$row['nombre'], "apaterno" => $row['apaterno'], "amaterno" => $row['amaterno'],"usuario"=>$row['usuario'], "tipo" => $row['tipo'],"estado"=>$row['estado']);
			}
			return $datos;
		}else{
			$error=array("value"=>'no sirve'.mysql_error());
			return $error;
			}
		}
}
?>
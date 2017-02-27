<?php
class Contacto{
	
	public function __construct(){
		
		}
	
	public function buscar($nombre,$conexion){
		
		$datos=array();
		$sql="SELECT * FROM contacto WHERE nombre like '%$nombre%'";
		if(mysql_query($sql,$conexion)){
		$resultado = mysql_query($sql,$conexion);
		while($row = mysql_fetch_array($resultado, MYSQL_ASSOC)){
			$datos[]=array("value"=>$row['nombre'], "id"=> $row['id'],"tel_casa"=>$row['tel_casa'], "tel_celular" => $row['tel_celular'], "iglesia_cristiana_id" => $row['iglesia_cristiana_id']);
			}
			return $datos;
		}else{
			$error=array("value"=>'no sirve'.mysql_error());
			return $error;
			}
		}
}
?>
<?php
include("conectar.php");


header('Content-type: text/html; charset=utf-8');


mysql_select_db($db,$conexion);

if($conexion){
	echo '<b>Se muestran los ids</b><br><br>';
	busca_ids($conexion);
	}else{
		echo "problemas conectando";
		}

function busca_ids($conexion){
	$sql="select idequipo from equipo";
	//$arreglo = array();
	if(mysql_query($sql,$conexion)){
		$res = mysql_query($sql,$conexion);
		while($arr = mysql_fetch_array($res)){
			lista_ids($arr[0]);
			$nuevo = separa_id($arr[0]);
			//array_push($arreglo,$nuevo);
			actualizaIds($arr[0],$nuevo,$conexion);
			}
			
			imprimeArray($arreglo);
		}
		
	}
	
function lista_ids($id){
	echo $id."<br>";
	}
function separa_id($id){
	$separados = explode("-",$id);
	return $separados[0].$separados[1];
	}
function imprimeArray($arr){
	$i = 0;
	foreach($arr as $element){
		 echo "Elemento $i -> $element <br>";
		}
	}
function actualizaIds($id,$nuevo,$conexion){
	$sql = "UPDATE `equipo` SET `idequipo`='".$nuevo."' WHERE idequipo = '".$id."'";
	if(mysql_query($sql,$conexion)){
		echo $id." cambiado OK a ".$nuevo;
		}else{
			echo "Error en ".$id.mysql_error();
			}
		
	
	}
?>
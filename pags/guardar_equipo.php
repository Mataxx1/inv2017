<?php
$prefix = $_POST['tipo_equipo'];
//$nombre = $_POST['nombre'];
$estatus = 'disponible';
$tipo_equipo = $prefix;
$descripcion = $_POST['descripcion'];
$anio = $_POST['anio'];
@$alto=$_POST['alto'];
@$ancho = $_POST['ancho'];
@$profundo = $_POST['profundo'];
include ("conectar.php");

$SQL="SELECT * FROM `equipo` WHERE tipo_equipo_idtipo_equipo = '$prefix' ORDER BY idequipo+0 ASC";

if($conexion){
	mysql_select_db($db,$conexion);
	$arr_new=array();
	$ultimo = mysql_query($SQL,$conexion);
	$arr_new=procesa_array($ultimo);
	$arr_ultimo=mysql_fetch_array($ultimo);
	$tot=mysql_num_rows($ultimo);
	
	$divide_numero= $arr_ultimo[0];
	//$numero = explode("-",$divide_numero);
	$descripcion = $_POST['descripcion'];
	
	//$siguiente = $tot+1;
	//echo "manera anterior, siguiente: ".$siguiente."<br>";
	$ult_arr = $arr_new[$tot-1];
	$ult_item = $ult_arr[0];
	
	//extraigo el número
	$siguiente = extrae_numero($ult_item)+1;
	//print_r($ult_arr);
	//echo "manera nueva, siguiente: ".$num_new."<br>";
	
		if(add_equipo($anio,$prefix,$siguiente,$descripcion,$alto,$ancho,$alto,$conexion)){
			if(addFotoEquipo($_FILES['foto'],$prefix."".$siguiente)){
				
				}
			mensaje("Se ha agregado con \u00e9xito: ".$prefix."".$siguiente,"alta_equipo.php");
			}else{
				mensaje("Algo sali\u00f3 mal: ".mysql_error(),"alta_equipo.php");
				}
		
	}else{
		echo "error conectando";
		}

function add_equipo($anio, $categoria,$siguiente,$descr,$alto,$ancho,$profundo,$conexion){
	$Sql= "INSERT INTO `equipo`(`idequipo`, `nombre`,anio, estatus, descripcion,ancho,alto,profundo,`tipo_equipo_idtipo_equipo`) VALUES ('$categoria$siguiente','$categoria$siguiente','$anio','disponible','$descr','$ancho','$alto','$profundo','$categoria')";
	if(mysql_query($Sql,$conexion)){
		return true;
		}else{
			return false;
			}
		mysql_close($conexion);
	}

function addFotoEquipo($archivo,$nombre){
	$dir='../fotos_equipo/'.$nombre.'.jpg';
	if(move_uploaded_file($archivo['tmp_name'],$dir)){
		return true;
		}else{
			return false;
			}
	}
function extrae_numero($string){
	$int = intval(preg_replace('/[^0-9]+/', '', $string), 10);
	return $int;
	}
function procesa_array($res){
	$arr_aux=array();
	while($arr = mysql_fetch_array($res)){
		array_push($arr_aux,$arr);
		}
		return $arr_aux;
	}
?>
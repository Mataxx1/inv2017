<?php
include("conectar.php");
date_default_timezone_set("America/Mexico_City");

$usr=$_POST['usuario'];
$passw=md5($_POST['pass']);
$utc = time();
$fecha = date("Y-m-d H:i:s",$utc);
mysql_select_db($db,$conexion);
$sql="SELECT * FROM sistema where usuario='$usr' AND pass = '$passw'";
if(mysql_query($sql,$conexion)){
	if(mysql_num_rows(mysql_query($sql,$conexion))>0){
		
	$datos=mysql_fetch_object(mysql_query($sql,$conexion));
	if($datos->estado=="activo"){
	session_start();
	$_SESSION['tipo']=$datos->tipo;
	$_SESSION['ife']=$datos->ife;
	$_SESSION['nombre']=$datos->nombre." ".$datos->apaterno;
	ultimoAcceso($_SESSION['ife'],$fecha,$conexion);
	mensaje("Bienvenido ".$datos->nombre."","../index.php");
	
	}else{
		mensaje("El usuario no tiene permiso para acceder.","../index.php");
		}
	}else{
        echo "Error 28".mysql_error();
		mensaje("Usuario o nip incorrectos","../login.php");

		}
	}else{
		echo "Error 31 ".mysql_error();
		}
function ultimoAcceso($ife,$fecha,$conexion){
	$sql="UPDATE sistema SET acceso='$fecha' WHERE ife = '$ife'";
	if(mysql_query($sql,$conexion)){
		//echo "ya no debe haber puto punto y coma";
        return true;
		}
	
	}
?>
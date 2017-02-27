<?php
include("conectar.php");
date_default_timezone_set("America/Mexico_City");

mysql_select_db($db,$conexion);
@$id=$_POST['id'];
@$evangelio=$_POST['evangelio'];
@$decision=$_POST['creyente'];
@$iglesia=$_POST['iglesia'];
//$hoy=time();
//$fecha=date("Y/m/d H:i:s",$hoy);
$fecha = $_POST['fecha_prestamo'];
$numeroPrestamo=0;

if(guardaPrestamo($id,$fecha,$conexion)){
			$numeroPrestamo=recuperaNumeroPrestamo($conexion);
for($i=0;$i<categoriasNum($conexion);$i++){
	if(isset($_POST['equipo'.$i]) && !empty($_POST['equipo'.$i])){
		
			if(guardaEquipoPrestamo($_POST['equipo'.$i],$numeroPrestamo,$conexion)){
				//echo "guardado equipo: ".$_POST['equipo'.$i]."<br>";
				}else{
					echo "error guardando equipo en entrega: ".mysql_error();
					}
			}else{
				//echo 'no hay equipo y no guardo nada<br>';
				}
			
}
if(actualiza_paciente($id,$iglesia,$evangelio,$decision,$conexion)){
mensaje("Entrega guardada exitosamente. N\u00famero de entrega: ".$numeroPrestamo,"prestamo.php");
}
	}else{
		echo "no se agregó la entrega: ".mysql_error();
		}
	


function ejemploGuardado(){

if(!empty($equipo0)){
	if(guardaPrestamo($id,$fecha,$conexion)){
		$numeroPrestamo=recuperaNumeroPrestamo($conexion);
		if(guardaEquipoPrestamo($equipo0,$numeroPrestamo,$conexion)){
			echo 'listo';
			}else{
				echo "algo salio mal".mysql_error();
				}
		}
	}


}


function guardaPrestamo($id,$fecha,$conexion){
	$sql="INSERT INTO `prestamo`(fecha_prestamo,paciente_id,estado) VALUES ('$fecha','$id','activo')";
	if(mysql_query($sql,$conexion)){
	return true;
		}else{
			echo "error: ".mysql_error();
			return false;
			}
	}

function guardaEquipoPrestamo($equipo,$prestamo,$conexion){
	$sql="INSERT INTO `equipo_prestamo`(`equipo_idequipo`, `prestamo_id_prestamo`) VALUES ('$equipo','$prestamo')";
	if(mysql_query($sql,$conexion)){
		//llamar aquí a la función que actualiza el estado del equipo
		if(actualiza_equipo($equipo,$conexion)){
		return true;
		}
		}else{
			echo 'error'.mysql_error();
			return false;
			
			}
	
	}

function recuperaNumeroPrestamo($conexion){
	$sql="SELECT * from prestamo order by id_prestamo desc limit 1";
	$prestamos=mysql_query($sql,$conexion);
	$arrPrestamos=mysql_fetch_array($prestamos);
	return $arrPrestamos[0];
	}

function categoriasNum($conexion){
	$sql="select * from tipo_equipo";	
	$todos=mysql_query($sql,$conexion);
	return mysql_num_rows($todos);
	}
function actualiza_equipo($idEquipo,$conexion){
	$sql="UPDATE `equipo` SET `estatus`='prestado' WHERE idequipo='$idEquipo'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			echo "Error actualizando equipo: ".mysql_error();
			return false;
			}
	}
	
function actualiza_paciente($id,$iglesia, $evangelio,$decision,$conexion){
	$sql = "UPDATE `paciente` SET `desicion`='".$decision."',`evangelio`='".$evangelio."', `iglesia_id`='".$iglesia."' WHERE id='".$id."'";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

?>
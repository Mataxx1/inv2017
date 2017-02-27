<?php
include("conectar.php");
$q=$_GET['q'];
mysql_select_db($db,$conexion);
$sql="SELECT medico.cedula,medico.nombre, medico.apaterno, medico.amaterno FROM medico INNER JOIN medico_has_especialidad on medico_has_especialidad.medico_cedula=medico.cedula WHERE medico_has_especialidad.especialidad_idespecialidad = '$q' ";
if(!$conexion){
	echo 'error: '.mysql_error();
	}else{
		if(mysql_query($sql,$conexion)){
			$todos=mysql_query($sql,$conexion);
			echo '<select name="medico" id="medico"><option value="">Seleccione el médico...</option>';	
			while($arr=mysql_fetch_array($todos)){
				echo '<option value="'.$arr[0].'">'.$arr[1].' '.$arr[2].' '.$arr[3].'</option>';
				}
			
			}else{
				echo 'error '.mysql_error();
				}
		}

?>

<?php
if(isset($_POST['todo'])){
include("conectar.php");
$sql="SELECT * FROM cita";
mysql_select_db($db,$conexion);
if(mysql_query($sql,$conexion)){
$res=mysql_query($sql,$conexion);

echo '<table cellpadding="0" border="1">';

while($arrDatos = mysql_fetch_array($res)){
	
	echo '<tr>';
	molde_citas($arrDatos[0],$arrDatos[1],$arrDatos[2],$arrDatos[3],$arrDatos[4],$arrDatos[5]);
	echo '</tr>';
	}
	
}else{
	mysql_error();
	}

echo '</table>';
mysql_close($conexion);
}else{
	echo "<h1>Haga su consulta</h1>";
	
	}
function molde_citas($numero, $nombre_medico,$nomb_paciente,$fecha,$asistio,$encargado){
	echo '<table width="600" border="1">
  <tr>
    <td>'.$numero.'</td>
    <td colspan="4">'.$nombre_medico.'</td>
    
  </tr>
  <tr>
    <td>'.$nomb_paciente.'</td>
    <td>'.$fecha.'</td>
    <td>'.$numero.'</td>
    <td>'.$asistio.'</td>
    <td>'.$encargado.'</td>
  </tr>
</table>';
	}
?>

<?php
include("conectar.php");
mysql_select_db($db,$conexion);

@$id_paciente = $_GET['q'];


	retornaFromulario($id_paciente,$conexion);


function retornaFromulario($id_paciente,$conexion){
	$sql ="select paciente.id, paciente.nombre, paciente.apaterno, paciente.amaterno, paciente.telefono, paciente.municipio, prestamo.id_prestamo, prestamo.fecha_prestamo, prestamo.estado from prestamo inner join paciente on prestamo.paciente_id = paciente.id where paciente.id = '$id_paciente' and prestamo.estado='activo'";
	$resPres = mysql_query($sql,$conexion);
	//$objPres = mysql_fetch_object($resPres);
	//datosPaciente($objPres->id,$objPres->apaterno,$objPres->amaterno,$objPres->nombre);
	$i=0;
	while($rowPres=mysql_fetch_array($resPres)){
	formulario($rowPres['id_prestamo'],$rowPres['fecha_prestamo'],$rowPres['estado'],$i,$conexion);
	$i++;
	}
	}
	
function datosPaciente($id, $ap,$am,$nom){
	echo '<table width="600" border="1">
  <tr>
    <td>'.$nom.' '.$ap.' '.$am.'</td>
    <td><img src="../fotos_pacientes/'.$id.'.jpg" width="100" height="100"/></td>
  </tr></table>';
	}
function formulario($numero_prestamo,$fecha_prestamo,$estatus,$i,$conexion){
	$opcionesEstatus = array("activo","finalizado");
	echo '<table width="600" border="1">
  <tr>
    <td><input type="text" name="num_prestamo'.$i.'" id="num_prestamo'.$i.'" size="3" value="'.$numero_prestamo.'"/></td>
    <td>'.$fecha_prestamo.'</td>
	<td rowspan="3"><a href="#"  onclick="iraEditar(document.getElementById('."'estatus".$i."'".').value,document.getElementById('."'num_prestamo".$i."'".').value);">Actualizar</a></td>
  </tr>
  <tr>
    <td colspan="2">
    <table width="100%">';
	$sqlP="select equipo.nombre, equipo.idequipo from equipo inner join equipo_prestamo on equipo_prestamo.equipo_idequipo = equipo.idequipo inner join prestamo on equipo_prestamo.prestamo_id_prestamo = prestamo.id_prestamo where prestamo.id_prestamo='$numero_prestamo'";
	$res=mysql_query($sqlP,$conexion);
	while($rowEquipo = mysql_fetch_array($res)){
    generaFilaDatosPrestamo($rowEquipo['nombre'],$rowEquipo['idequipo']);
	}
    echo '</table>
    </td>
    
  </tr>
  <tr>
    <td align="right">Estatus:</td>
    <td><select name="estatus'.$i.'" id="estatus'.$i.'">';
    foreach($opcionesEstatus as $opciones){
	echo '<option value="'.$opciones.'" '; if($estatus==$opciones){ echo 'selected="selected"';}else{}  echo '>'.$opciones.'</option>';
	}
    echo '</select></td>
  </tr>
</table>';
	}
function generaFilaDatosPrestamo($nombreEquipo,$id_equipo){
	echo '<tr><td>'.$id_equipo.'</td><td>'.$nombreEquipo.'</td><td><img src="../fotos_equipo/'.$id_equipo.'.jpg" width="50" height="50"/></td></tr>';
	}

?>
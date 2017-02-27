
<?php
include("conectar.php");
mysql_select_db($db,$conexion);

@$id = $_GET['q'];
$sql="SELECT * FROM tipo_equipo";
	$categorias = mysql_query($sql,$conexion);
	retornaFromulario($id,$conexion,$categorias);


function retornaFromulario($id,$conexion,$categorias){
	$sql ="SELECT * FROM equipo where idequipo = '$id'";
	$equipo = mysql_fetch_object(mysql_query($sql,$conexion));
	formulario($id,$equipo->estatus,$equipo->descripcion,$equipo->tipo_equipo_idtipo_equipo,$categorias,$equipo->anio,$equipo->ancho,$equipo->alto,$equipo->profundo);
	}
	
function formulario($id,$estatus,$descripcion,$tipo,$cate,$anio,$ancho,$alto,$profundo){
	$estados = array("prestado","disponible");
	$anios = array("2014","2015","2016");
	echo '<table width="400" border="1">
 
  <tr>
    <td align="right">Estatus: </td>
    <td><select name="estatus" id="estatus" style="width:100%"><option value="">Seleccione estatus</option>';
	foreach($estados as $valor){
	echo '<option value="'.$valor.'"'; if($valor==$estatus){ echo 'selected="selected"';}else{} echo'>'.$valor.'</option>';
	}//<option value="">Disponible</option></select></td>
echo '  </tr>
<tr>
	<td align="right">Ancho:</td><td><input type="text" name="ancho" id="ancho" value="'.$ancho.'" size="10">centímetros</td>
</tr>

<tr>
	<td align="right">Alto:</td><td><input type="text" name="alto" id="alto" value="'.$alto.'" size="10">centímetros</td>
</tr>
<tr>
	<td align="right">Profundo:</td><td><input type="text" name="profundo" id="profundo" value="'.$profundo.'" size="10">centímetros</td>
</tr>
  <tr>
    <td align="right">Observaciones</td>
    <td><textarea name="descripcion" id="descripcion" rows="2" cols="28">'.$descripcion.'</textarea></td>
  </tr>
  <tr>
    <td align="right">Tipo de equipo:</td>
    <td><select name="tipo_equipo" id="tipo_equipo" style="width:100%"><option value="">Seleccione...</option>';
	while($arreglo = mysql_fetch_array($cate)){
			echo '<option value="'.$arreglo[0].'" '; if($tipo == $arreglo[0]){ echo 'selected = "selected"';}else{} echo '>'.$arreglo[1].'</option>';		
		}
	echo '</select></td>
  </tr>
  <tr>
  <td>Año en que se adquirió</td><td><select name="anio" id="anio" style="width:100%"><option value="">Seleccione el año de adquisición...</option>';
  foreach($anios as $valAnio){
	  echo '<option value="'.$valAnio.'" '; if($valAnio==$anio){ echo 'selected ="selected"';}else{} echo '>'.$valAnio.'</option>';
	  }
   echo '</select></td>
  </tr>
  <tr>
  <td align="right" colspan="2"><img src="../fotos_equipo/'.$id.'.jpg" width="200" height="200"></img></td>
 </tr>
 <tr>
 <td align="right">Cambiar foto:</td><td><input type="file" name="foto" id="foto"/></td>
 </tr>
</table>';
	}

?>
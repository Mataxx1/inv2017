
<?php
include("conectar.php");
mysql_select_db($db,$conexion);

@$id_iglesia_cristiana = $_GET['q'];

if($conexion){
	$sql = "select * from iglesia_cristiana where id = '$id_iglesia_cristiana'";
	$objIglesiaC=mysql_fetch_object(mysql_query($sql,$conexion));
	datosIglesia($objIglesiaC->id,$objIglesiaC->nombre,$objIglesiaC->domicilio,$objIglesiaC->municipio,$objIglesiaC->localidad,$objIglesiaC->telefono,$objIglesiaC->seguimiento);
	
	}else{
		echo "Error: ".mysql_error();
		}

	
function datosIglesia($id,$nom,$dom,$mun,$loc,$tel,$seg){
	$respuestas = array("si","no");
	echo '<table width="600" border="0">
  <tr>
    <td align="right">Nuevo nombre</td><td><input type="text" name="nombre_iglesiac" id="nombre_iglesiac" value="'.$nom.'" style="width:100%" placeholder="Nombre"></td>
    
  </tr>
  <tr><td width="200px" align="right">Nuevo domicilio</td><td><input type="text" name="domicilio" id="domicilio" value="'.$dom.'" style="width:100%" placeholder="Domicilio"></td></tr>
  <tr><td align="right">Nuevo municipio</td><td><input type="text" name="municipio" id="municipio" value="'.$mun.'" style="width:100%" placeholder="Municipio"></td></tr>
  <tr><td align="right">Nuevo localidad</td><td><input type="text" name="localidad" id="localidad" value="'.$loc.'" style="width:100%" placeholder="Localidad"></td></tr>
  <tr><td align="right">Nuevo número de teléfono</td><td><input type="text" name="telefono" id="telefono" value="'.$tel.'" style="width:100%" placeholder="Número de teléfono"></td></tr>
  <tr><td align="right">¿Participa en el seguimiento?</td><td><select name="seguimiento" id="seguimiento"><option value="">Seleccione respuesta...</option>';
  foreach($respuestas as $respuesta){
  echo '<option value="'.$respuesta.'"'; if($respuesta==$seg){ echo 'selected="selected"';}else{} echo '>'.$respuesta.'</option>'; 
  }
  echo '</td></tr>
  </table>';
	}

?>
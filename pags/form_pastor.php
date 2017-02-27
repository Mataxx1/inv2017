
<?php
include("conectar.php");
mysql_select_db($db,$conexion);

@$id_pastor = $_GET['q'];

if($conexion){
	$sql = "select * from pastor where id = '$id_pastor'";
	$objPastor=mysql_fetch_object(mysql_query($sql,$conexion));
	datosIglesia($objPastor->id,$objPastor->nombre,$objPastor->apaterno,$objPastor->amaterno,$objPastor->email,$objPastor->domicilio,$objPastor->municipio,$objPastor->localidad,$objPastor->fecha_nacimiento,$objPastor->telefono,$conexion,$objPastor->iglesia_cristiana_id);
	
	}else{
		echo "Error: ".mysql_error();
		}

	
function datosIglesia($id,$nom,$ap,$am,$email,$dom,$mun,$loc,$fech_nac,$tel,$conexion,$icid){
	$sql="select * from iglesia_cristiana";
	$res = mysql_query($sql,$conexion);
	echo '<table width="600" border="0">
  <tr>
    <td align="right">Nuevo nombre</td><td><input type="text" name="nombre" id="nombre" value="'.$nom.'" style="width:100%"></td>
    
  </tr>
  <tr>
    <td align="right">Nuevo apellido paterno</td><td><input type="text" name="apaterno" id="apaterno" value="'.$ap.'" style="width:100%"></td>
    
  </tr>
  <tr>
    <td align="right">Nuevo apellido materno</td><td><input type="text" name="amaterno" id="amaterno" value="'.$am.'" style="width:100%"></td>
    
  </tr>
  <tr>
    <td align="right">Nuevo E-mail</td><td><input type="text" name="email" id="email" value="'.$email.'" style="width:100%"></td>
    
  </tr>
  <tr><td width="200px" align="right">Nuevo domicilio</td><td><input type="text" name="domicilio" id="domicilio" value="'.$dom.'" style="width:100%"></td></tr>
  <tr><td align="right">Nuevo municipio</td><td><input type="text" name="municipio" id="municipio" value="'.$mun.'" style="width:100%"></td></tr>
  <tr>
    <td align="right">Nueva localidad</td><td><input type="text" name="localidad" id="localidad" value="'.$loc.'" style="width:100%"></td>
    
  </tr>
  <tr><td align="right">Nuevo número de teléfono</td><td><input type="text" name="telefono" id="telefono" value="'.$tel.'" style="width:100%"></td></tr>
  <tr>
    <td align="right">Fecha de nacimiento</td><td><input type="text" name="fech_nac" id="fech_nac" value="'.$fech_nac.'" style="width:100%"></td>
    
  </tr>
  <tr>
  <td align="right">Iglesia: </td><td><select name="id_iglesia" id="id_iglesia">';
  while($rw = mysql_fetch_array($res)){
	  echo '<option value="'.$rw['id'].'" '; if($icid == $rw['id']){ echo 'selected ="selected"';}else{} echo '>'.$rw['nombre'].'</option>';
	  }
  echo '</select></td>
  </tr>
  </table>';
	}

?>
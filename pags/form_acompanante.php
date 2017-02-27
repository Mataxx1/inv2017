
<?php
include("conectar.php");
mysql_select_db($db,$conexion);

@$id_pastor = $_GET['q'];

if($conexion){
	$sql = "select * from acompanante where id = '$id_pastor'";
	$objPastor=mysql_fetch_object(mysql_query($sql,$conexion));
	datosIglesia($objPastor->id,$objPastor->nombre,$objPastor->apaterno,$objPastor->amaterno,$objPastor->domicilio,$objPastor->municipio,$objPastor->localidad,$objPastor->telefono,$objPastor->desicion,$objPastor->evangelio,$objPastor->sexo,$conexion,$objPastor->paciente_id);
	
	}else{
		echo "Error: ".mysql_error();
		}

	
function datosIglesia($id,$nom,$ap,$am,$dom,$mun,$loc,$tel,$desicion,$evangelio,$sexo,$conexion,$pacid){
	$sql="select * from paciente";
	$res = mysql_query($sql,$conexion);
	$sexos = array("Hombre","Mujer");
	$desiciones = array("si","no","Ya era");
	$evangelios = array("si","no","Ya era");
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
  
  <tr><td width="200px" align="right">Nuevo domicilio</td><td><input type="text" name="domicilio" id="domicilio" value="'.$dom.'" style="width:100%"></td></tr>
  <tr><td align="right">Nuevo municipio</td><td><input type="text" name="municipio" id="municipio" value="'.$mun.'" style="width:100%"></td></tr>
  <tr>
    <td align="right">Nueva localidad</td><td><input type="text" name="localidad" id="localidad" value="'.$loc.'" style="width:100%"></td>
    
  </tr>
  <tr><td align="right">Nuevo número de teléfono</td><td><input type="text" name="telefono" id="telefono" value="'.$tel.'" style="width:100%"></td></tr>
  <tr>
    <td align="right">¿Desición por Jesucristo?</td><td><select name="desicion" id="desicion" style="width:100%">'; 
	foreach($desiciones as $des){
	echo '<option value="'.$des.'" '; if($des==$desicion){ echo 'selected = "selected"';}else{}  echo '>'.$des.'</option>'; 
	}
	echo'</td>
    
  </tr>
  <tr>
    <td align="right">¿Escuchó el evangelio?</td><td><select name="evangelio" id="evangelio" style="width:100%">';
	foreach($evangelios as $eva){
	echo '<option value="'.$eva.'"'; if($eva==$evangelio){ echo 'selected="selected"';}else{} echo '>'.$eva.'</option>'; 
	}
	echo'</td>
    
  </tr>
  <tr>
  <td align="right">Sexo: </td><td><select name="sexo" id="sexo">';
  foreach($sexos as $sex){
	  echo '<option value="'.$sex.'" '; if($sexo == $sex){ echo 'selected ="selected"';}else{} echo '>'.$sex.'</option>';
	  }
  echo '</select></td>
  </tr>
  <tr>
  <td align="right">Paciente al que acompaña: </td><td><select name="id_paciente" id="id_paciente">';
  while($rw = mysql_fetch_array($res)){
	  echo '<option value="'.$rw['id'].'" '; if($pacid == $rw['id']){ echo 'selected ="selected"';}else{} echo '>'.$rw['id'].'-'.$rw['nombre'].' '.$rw['apaterno'].' '.$rw['amaterno'].'</option>';
	  }
  echo '</select></td>
  </tr>
  
  </table>';
	}

?>

<?php
include("conectar.php");

mysql_select_db($db,$conexion);

@$id_pastor = $_GET['q'];

if($conexion){
	$sql = "select * from paciente where id = '$id_pastor'";
	$objPastor=mysql_fetch_object(mysql_query($sql,$conexion));
	datosIglesia($objPastor->id,$objPastor->nombre,$objPastor->apaterno,$objPastor->amaterno,$objPastor->calle,$objPastor->municipio,$objPastor->localidad,$objPastor->fecha_nacimiento,$objPastor->telefono,$objPastor->desicion,$objPastor->evangelio,$objPastor->diagnostico_id,$objPastor->espalda,$objPastor->cadera_rodilla,$objPastor->rodilla_talon,$objPastor->cintura, $objPastor->altura, $objPastor->peso, $objPastor->fecha_registro,$objPastor->solicitud,$objPastor->causa_solicitud,$objPastor->requiere,$objPastor->codo_piso,$objPastor->axila_piso,$conexion);
	
	}else{
		echo "Error: ".mysql_error();
		}

	
function datosIglesia($id,$nom,$ap,$am,$dom,$mun,$loc,$fech_nac,$tel,$desicion,$evangelio,$diagnostico,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$fech_reg,$solicitud,$causa_solicitud,$requiere,$codo_piso,$axila_piso,$conexion){
	$sql="select * from diagnostico";
	$res = mysql_query($sql,$conexion);
	$respuestas = array();
	
	$respuestas[0]="si";
	$respuestas[1]="no";
	$respuestas[2]="Ya era";
	$respuestas2 = array("si","no","Ya era");
	$estatusSolicitud = array("En espera","Aprobada","Rechazada");
	$puede_requerir = array("andador","muletas","silla");
	echo '<table width="600" border="1">
	 <tr>
    <td align="right">Fecha de registro</td><td><input type="text" name="fech_reg" id="fech_reg" value="'.$fech_reg.'" style="width:100%" placeholder="YYYY-MM-DD HH:mm:ss"></td>
    
  </tr>
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
    <td align="right">Fecha de nacimiento</td><td><input type="text" name="fech_nac" id="fech_nac" value="'.$fech_nac.'" style="width:100%"></td>
    
  </tr>
  <tr><td>¿Escuchó el evangelio?</td><td><select name="evangelio" id="evangelio"><option value="">Seleccione...</option>';
  for($i=0;$i<count($respuestas);$i++){
	  echo '<option value="'.$respuestas[$i].'" ';if($respuestas[$i]==$evangelio){ echo 'selected="selected"';}else{} echo'>'.$respuestas[$i].'</option>';
	  }
  echo '</select></td></tr>
  <tr><td>¿Decisión por Jesucristo?</td><td><select name="desicion" id="desicion"><option value="">Seleccione...</option>';
  foreach($respuestas2 as $rs){
	  echo '<option value="'.$rs.'" ';if($rs==$desicion){ echo 'selected="selected"';}else{} echo'>'.$rs.'</option>';
	  }
  echo '</select></td></tr>
   <tr><td>Diagnóstico: </td><td><select name="diagnostico" id="diagnostico"><option value="">Seleccione...</option>';
  while($arrDiag =mysql_fetch_array($res)){
	  echo '<option value="'.$arrDiag['id'].'" ';if($arrDiag['id']==$diagnostico){ echo 'selected="selected"';}else{} echo'>'.$arrDiag['nombre'].'</option>';
	  }
  echo '</td></tr>
  <tr>
    <td align="right">Longitud de la espalda:</td><td><input type="text" name="espalda" id="espalda" value="'.$espalda.'" style="width:20%"> centímetros</td>
    
  </tr>
  <tr>
    <td align="right">Longitud de la cadera a la rodilla:</td><td><input type="text" name="cadera_rodilla" id="cadera_rodilla" value="'.$cadera_rodilla.'" style="width:20%"> centímetros</td>
    
  </tr>
  <tr>
    <td align="right">Longitud de la rodilla al talón:</td><td><input type="text" name="rodilla_talon" id="rodilla_talon" value="'.$rodilla_talon.'" style="width:20%"> centímetros</td>
    
  </tr>
  <tr>
    <td align="right">Ancho de caderas:</td><td><input type="text" name="cintura" id="cintura" value="'.$cintura.'" style="width:20%"> centímetros</td>
    
  </tr>
  <tr>
    <td align="right">Altura en centímetros:</td><td><input type="text" name="altura" id="altura" value="'.$altura.'" style="width:20%"> centímetros</td>
    
  </tr>
  <tr>
    <td align="right">Peso en kilogramos:</td><td><input type="text" name="peso" id="peso" value="'.$peso.'" style="width:20%"> Kg.</td>
    
  </tr>
  <tr>
    <td align="right">Requiere:</td><td><select name="requiere" id="requiere"><option value="">Seleccione...</option>';
 foreach($puede_requerir as $reqArr){
	  echo '<option value="'.$reqArr.'" ';if($reqArr==$requiere){ echo 'selected="selected"';}else{} echo'>'.$reqArr.'</option>';
	  }
	  
	  echo '</td>
    
  </tr>
  <tr>
    <td align="right">Medida del codo al piso en pulgadas:</td><td><input type="text" name="codo_piso" id="codo_piso" value="'.$codo_piso.'" style="width:20%"> pulgadas.</td>
    
  </tr>
  <tr>
    <td align="right">Medida de la axila al piso:</td><td><input type="text" name="axila_piso" id="axila_piso" value="'.$axila_piso.'" style="width:20%"> pulgadas.</td>
    
  </tr>
  <tr>
    <td align="right">Estado de solicitud:</td><td><select name="solicitud" id="solicitud"><option value="">Seleccione estado de la solicitud</option>'; 
	foreach($estatusSolicitud as $estados){
	echo '<option value="'.$estados.'"'; if($estados == $solicitud){ echo 'selected = "selected"';}else{} echo' >'.$estados.'</option>'; 
	}
	
	echo '</td>
    
  </tr>
  <tr>
    <td align="right">Causa del estado de solicitud:</td><td><textarea name="causa_solicitud" id="causa_solicitud" cols="45">'.$causa_solicitud.'</textarea></td>
    
  </tr>
  <tr>
    <td align="right"><img width="100" height="100" src="../fotos_pacientes/'.$id.'.jpg">Cambiar foto:</td><td><input type="file" name="foto" id="foto" ></td>
    
  </tr>
  </table>';
	}

?>
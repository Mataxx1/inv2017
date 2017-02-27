
<?php
include("conectar.php");
mysql_select_db($db,$conexion);

@$cedula = $_GET['q'];

if($conexion){
	$sql = "select * from medico where cedula = '$cedula'";
	$objPastor=mysql_fetch_object(mysql_query($sql,$conexion));
	datosIglesia($objPastor->cedula,$objPastor->nombre,$objPastor->apaterno,$objPastor->amaterno,$objPastor->calle,$objPastor->ciudad,$objPastor->colonia,$objPastor->telefono);
	
	}else{
		echo "Error: ".mysql_error();
		}

	
function datosIglesia($cedula,$nom,$ap,$am,$dom,$mun,$loc,$tel){
	echo '<table width="600" border="1">
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
 
  </table>';
	}

?>
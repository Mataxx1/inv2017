<?php
header("Content-type: application/vnd.ms-excel; name='excel'; ");//charset=utf-8
   header("Content-Disposition: filename=MedicosRegistrados".date('d.m.Y-h:i:s').".xls");
   header("Pragma: no-cache");
   header("Expires: 0");
include("conectar.php");
mysql_select_db($db,$conexion);
$sql=base64_decode($_GET['qry']);


tabla($sql,$conexion);


function tabla($sql,$conexion){
$res = mysql_query($sql,$conexion);
echo '<table border="1">';
cabeceras();
while($rw=mysql_fetch_array($res)){
	
	
	fila($rw['cedula'],$rw['nombre'],$rw['apaterno'],$rw['amaterno'],$rw['telefono'],$rw['estado'],$rw['ciudad'],$rw['colonia'],$rw['calle']);
	
	}
	
echo '<table>';
	}

function cabeceras(){
echo utf8_decode('
<th>Cédula</th>
<th>Nombre</th>
<th>Teléfono</th>
<th>Domicilio</th>
');
}
function fila($cedula,$n_m,$ap_m,$am_m,$tel,$estado,$ciudad,$col,$calle){
	echo utf8_decode('<tr><td>'.$cedula.'</td><td>'.$n_m.' '.$ap_m.' '.$am_m.' '.'</td><td>'.$tel.'</td><td>'.$calle.', '.$col.', '.$ciudad.', '.$estado.'</td></tr>');
	}


?>
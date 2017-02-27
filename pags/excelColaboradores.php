<?php
header("Content-type: application/vnd.ms-excel; name='excel'; ");//charset=utf-8
   header("Content-Disposition: filename=PacientesRegistrados".date('d.m.Y-h:i:s').".xls");
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
	
	
	fila($rw['nombre'],$rw['apaterno'],$rw['amaterno'],$rw['edad_colabo'],$rw['telefono'],$rw['estado'],$rw['domicilio'],$rw['localidad'],$rw['municipio'],$rw['tipo']);
	
	}
	
echo '<table>';
	}
//select colaborador.nombre, colaborador.apaterno, colaborador.amaterno, colaborador.telefono, colaborador.domicilio, (YEAR(curdate())-YEAR(colaborador.fecha_nacimiento)) as 'edad_colabo', colaborador.estado, colaborador.municipio, colaborador.localidad, tipo_colaborador.tipo
function cabeceras(){
echo utf8_decode('
<th>Nombre</th>
<th>Edad</th>
<th>Teléfono</th>
<th>Domicilio</th>
<th>Tipo</th>
');
}
function fila($n_c,$ap_c,$am_c,$edad,$tel_c,$estado,$dom,$loc,$mun,$tipo){
	echo utf8_decode('<tr><td>'.$n_c.' '.$ap_c.' '.$am_c.' '.'</td><td>'.$edad.' años</td><td>'.$tel_c.'</td><td>'.$dom.', '.$loc.', '.$mun.', '.$estado.'</td><td>'.$tipo.'</td></tr>');
	}


?>
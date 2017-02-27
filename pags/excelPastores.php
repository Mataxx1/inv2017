<?php
header("Content-type: application/vnd.ms-excel; name='excel'; ");//charset=utf-8
   header("Content-Disposition: filename=PastoresRegistrados".date('d.m.Y-h:i:s').".xls");
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
	
	
	fila($rw['nombre_p'],$rw['apaterno'],$rw['amaterno'],$rw['edad'],$rw['email'],$rw['telefono'],$rw['estado'],$rw['domicilio'],$rw['localidad'],$rw['municipio'],$rw['nombre_i'],$rw['dom_ic']);
	
	}
	
echo '<table>';
	}
//select p.nombre as nombre_p, p.apaterno, p.amaterno, p.telefono, p.email,p.estado, p.municipio, p.localidad, p.domicilio, TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, NOW()) as edad, ic.nombre as nombre_i, ic.domicilio as dom_ic from pastor as p inner join iglesia_cristiana as ic on ic.id = p.iglesia_cristiana_id
function cabeceras(){
echo utf8_decode('
<th>Nombre</th>
<th>Edad</th>
<th>E-mail</th>
<th>Domicilio</th>
<th>Nombre de la iglesia</th>
<th>Domicilio de la iglesia</th>
');
}
function fila($n_p,$ap_p,$am_p,$edad,$email,$tel_p,$estado,$dom,$loc,$mun,$nombre_i,$dom_i){
	echo utf8_decode('<tr><td>'.$n_p.' '.$ap_p.' '.$am_p.' '.'</td><td>'.$edad.' años</td><td>'.$email.'</td><td>'.$dom.', '.$loc.', '.$mun.', '.$estado.'</td><td>'.$nombre_i.'</td><td>'.$dom_i.'</td></tr>');
	}


?>
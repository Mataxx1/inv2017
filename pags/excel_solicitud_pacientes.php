<?php
header("Content-type: application/vnd.ms-excel; name='excel'; ");//charset=utf-8
   header("Content-Disposition: filename=SolicitudesRegistradas".date('d.m.Y-h:i:s').".xls");
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
	
	
	fila($rw['id'],$rw['nombre_p'],$rw['apaterno'],$rw['amaterno'],$rw['edad'],$rw['localidad'],$rw['registro'],$rw['nombre_d'],$rw['requiere']);
	
	}
	
echo '<table>';
	}
//SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno,  TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, NOW()) as edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d
function cabeceras(){
echo utf8_decode('
<th>ID</th>
<th>Nombre</th>
<th>Edad</th>
<th>Localidad</th>
<th>Fecha de registro</th>
<th>Diagnóstico</th>
<th>Requiere</th>
');
//<th>Nombre del contacto</th>
//<th>Teléfono contacto</th>
}
function fila($id,$n_p,$ap_p,$am_p,$edad,$loc,$f_reg,$diag,$req){
	echo utf8_decode('<tr><td>'.$id.'</td><td>'.$n_p.' '.$ap_p.' '.$am_p.' '.'</td><td>'.$edad.' años</td><td>'.$loc.'</td><td>'.$f_reg.'</td><td>'.$diag.'</td><td>'.$req.'</td></tr>');
	}


?>
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
	
	
	fila($rw['id'],$rw['nombre_p'],$rw['apaterno'],$rw['amaterno'],$rw['edad'],$rw['telefono_p'],$rw['estado'],$rw['calle'],$rw['localidad'],$rw['municipio'],$rw['sexo'],$rw['registro'],$rw['altura'],$rw['peso'],$rw['espalda'],$rw['cadera_rodilla'],$rw['rodilla_talon'],$rw['codo_piso'],$rw['axila_piso'],$rw['cintura'],$rw['desicion'],$rw['evangelio'],$rw['nombre_i'],$rw['nombre_d'],$rw['requiere'],$rw['solicitud']);
	
	}
	
echo '<table>';
	}
//SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno,  TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, NOW()) as edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, p.contacto_id, p.fecha_registro as registro, p.espalda,p.cadera_rodilla,p.rodilla_talon,p.cintura, i.nombre as nombre_i, d.nombre as nombre_d
function cabeceras(){
echo utf8_decode('
<th>ID</th>
<th>Nombre</th>
<th>Edad</th>
<th>Teléfono</th>
<th>Domicilio</th>
<th>Localidad</th>
<th>Municipio</th>
<th>Sexo</th>
<th>Fecha de registro</th>
<th>Altura (cms)</th>
<th>Peso (kg)</th>
<th>Espalda (cms)</th>
<th>Cadera a rodilla (cms)</th>
<th>Rodilla a talón (cms)</th>
<th>Codo al piso (pulg)</th>
<th>Axila al piso (pulg)</th>
<th>Ancho de cadera (cms)</th>
<th>Diagnóstico</th>
<th>¿Decisión por Jesucristo?</th>
<th>¿Escuchó el evangelio?</th>
<th>Iglesia</th>
<th>Requiere</th>
<th>Estado solicitud</th>

');
//<th>Nombre del contacto</th>
//<th>Teléfono contacto</th>
}
function fila($id,$n_p,$ap_p,$am_p,$edad,$tel_p,$estado,$dom,$loc,$mun,$sexo,$f_reg,$altura,$peso,$esp,$cadera_rodilla,$rodilla_talon,$codo_piso,$axila_piso,$cintura, $desicion,$evangelio,$nombre_i,$diag,$req,$sol){
	echo utf8_decode('<tr><td>'.$id.'</td><td>'.$n_p.' '.$ap_p.' '.$am_p.' '.'</td><td>'.$edad.' años</td><td>'.$tel_p.'</td><td>'.$dom.', '.$loc.', '.$mun.', '.$estado.'</td><td>'.$loc.'</td><td>'.$mun.'</td><td>'.$sexo.'</td><td>'.$f_reg.'</td><td>'.$altura.'</td><td>'.$peso.'</td><td>'.$esp.'</td><td>'.$cadera_rodilla.'</td><td>'.$rodilla_talon.'</td><td>'.$codo_piso.'</td><td>'.$axila_piso.'</td><td>'.$cintura.'</td><td>'.$diag.'</td><td>'.$desicion.'</td><td>'.$evangelio.'</td><td>'.$nombre_i.'</td><td>'.$req.'</td><td>'.$sol.'</td></tr>');
	}


?>
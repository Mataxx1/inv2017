<?php
header("Content-type: application/vnd.ms-excel; name='excel'; ");//charset=utf-8
   header("Content-Disposition: filename=AcompaniantesRegistrados".date('d.m.Y-h:i:s').".xls");
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
	
	
	fila($rw['nombre_acom'],$rw['ap_acomp'],$rw['am_acom'],$rw['telefono'],$rw['estado'],$rw['domicilio'],$rw['localidad'],$rw['municipio'],$rw['sexo'],$rw['desicion'],$rw['evangelio'],$rw['nom_pac'],$rw['ap_pac'],$rw['am_pac']);
	
	}
	
echo '<table>';
	}
//select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id
function cabeceras(){
echo utf8_decode('
<th>Nombre</th>
<th>Teléfono</th>
<th>Domicilio</th>
<th>Sexo</th>
<th>¿Desición por Jesucristo?</th>
<th>¿Escuchó el evangelio?</th>
<th>Nombre de la persona a la que acompañó</th>
');
}
function fila($n_a,$ap_a,$am_a,$tel_a,$estado,$dom,$loc,$mun,$sexo,$desicion,$evangelio,$n_p,$ap_p,$am_p){
	echo utf8_decode('<tr><td>'.$n_a.' '.$ap_a.' '.$am_a.'</td><td>'.$tel_a.'</td><td>'.$dom.', '.$loc.', '.$mun.', '.$estado.'</td><td>'.$sexo.'</td><td>'.$desicion.'</td><td>'.$evangelio.'</td><td>'.$n_p.' '.$ap_p.' '.$am_p.'</td></tr>');
	}


?>
<?php
if(isset($_POST['todo'])){
include("conectar.php");
$sql="SELECT * FROM sistema";
mysql_select_db($db,$conexion);
if(mysql_query($sql,$conexion)){
$res=mysql_query($sql,$conexion);

echo '<table width="350" cellpadding="0" border="1">
<th>IFE</th>
<th>Nombre</th>
<th>Apellido Paterno</th>
<th>Apellido Materno</th>';
while($arrDatos = mysql_fetch_array($res)){
	
	echo '<tr>
	<td>'.utf8_encode($arrDatos[0].'</td>
	<td>'.$arrDatos[1].'</td>
	<td>'.$arrDatos[2].'</td>
	<td>'.$arrDatos[3]).'</td>
	</tr>';
	}
	
}else{
	mysql_error();
	}

echo '</table>';
mysql_close($conexion);
}else{
	echo "<h1>Haga su consulta</h1>";
	
	}

?>
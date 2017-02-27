
<?php
if(isset($_POST['todo'])){
include("conectar.php");
$sql="SELECT * FROM medico";
mysql_select_db($db,$conexion);
if(mysql_query($sql,$conexion)){
$res=mysql_query($sql,$conexion);

echo '<table width="250" cellpadding="0" border="1">';

while($arrDatos = mysql_fetch_array($res)){
	
	echo '<tr>';
	molde_medico($arrDatos[0],$arrDatos[1],$arrDatos[2],$arrDatos[3],$arrDatos[7],$arrDatos[6],$arrDatos[5],$arrDatos[4],$arrDatos[8]);
	echo '</tr>';
	}
	
}else{
	mysql_error();
	}

echo '</table>';
mysql_close($conexion);
}else{
	echo "<h1>Haga su consulta</h1>";
	
	}
function molde_medico($cedula,$nomb,$ap,$am,$calle,$ciud,$est,$pais,$tel){
	echo '<table width="600" border="1">
  <tr>
    <td>'.$cedula.'</td>
    <td colspan="4">'.$nomb.' '.$ap.' '.$am.'</td>
    
  </tr>
  <tr>
    <td>'.$calle.'</td>
    <td>'.$ciud.'</td>
    <td>'.$est.'</td>
    <td>'.$pais.'</td>
    <td>'.$tel.'</td>
  </tr>
</table>';
	}
?>
<link rel="stylesheet" href="../css/magnific-popup.css"> 
<script src="../js/jquery.js"></script>
<!-- Magnific Popup core JS file -->
<script src="../js/jquery.magnific-popup.js"></script>
<?php
if(isset($_POST['todo']) || isset($_GET['num'])){
include("conectar.php");
$registros=10;
@$pagina = $_GET['num'];
if(is_numeric($pagina)){
	$inicio=(($pagina-1)*$registros);
	}else{
		$inicio=0;
		}


$sql="SELECT * FROM paciente LIMIT $inicio,$registros";


mysql_select_db($db,$conexion);
if(mysql_query($sql,$conexion)){
$res=mysql_query($sql,$conexion);
$paginas = ceil((mysql_num_rows(mysql_query("SELECT * FROM paciente",$conexion))/$registros));


echo '<table cellpadding="0" border="1">';
while($arrDatos = mysql_fetch_array($res)){
	
	echo '<tr>';
	
	molde_datos_usuario($arrDatos[0],$arrDatos[1],$arrDatos[2],$arrDatos[3],$arrDatos[11],$arrDatos[4],$arrDatos[10],$arrDatos[9],$arrDatos[8],$arrDatos[6],$arrDatos[7],$arrDatos[8],"si");
	echo '</tr>';
	}
	
}else{
	mysql_error();
	}
	echo '<tr><td colspan="4" align="center">';
	if($pagina>1){
		echo'<a href="iframe_consultar_paciente.php?num='.($pagina-1).'">'.'Anterior'.'</a> ';
		}
for($cont = 1; $cont <=$paginas;$cont++){
	
	if($cont==$pagina){
		echo $cont.' ';
		}else{
	echo'<a href="iframe_consultar_paciente.php?num='.$cont.'">'.$cont.'</a> ';
	
		}
		
	}
	if($pagina<$paginas){
		echo'<a href="iframe_consultar_paciente.php?num='.($pagina+1).'">'.' Siguiente'.'</a>';
		}
	echo ' </td></tr>';
echo '</table>';

mysql_close($conexion);
}else{
	echo "<h1>Haga su consulta</h1>";
	
	}
function molde_datos_usuario($id,$ife,$nombre,$ap,$am,$dom,$fech_na,$mun,$estado,$pais,$crey,$iglesia,$prestamo){
	echo '<table width="600" border="1">
  <tr>
    <td width="162">'.$id.' '.$ife.'</td>
    <td colspan="3">'.$nombre.' '.$ap.' '.$am.'</td>
    <td rowspan="2" colspan="2"><a class="popup" href="../fotos_pacientes/'.$id.'.jpg"><img src="../fotos_pacientes/'.$id.'.jpg" width="70px" height="70px"></a></td>
  </tr>
  <tr>
    <td>'.$dom.'</td>
    <td width="238">'.$mun.'</td>
    <td width="238">'.$estado.'</td>
    <td width="178">'.$pais.'</td>
  </tr>
  <tr>
  <td>'.$crey.'</td>
  <td colspan="2">'.$iglesia.'</td>
  <td>'.$fech_na.'</td>
  </tr>
</table>';
	}

?>
<script type="text/javascript">
$('.popup').magnificPopup({ 
  type: 'image'
	// other options
});
</script>
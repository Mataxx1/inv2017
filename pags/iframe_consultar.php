<?php
@$todo = $_POST['todo'];
@$pagi = $_GET['pagi'];
$contar_pagi = (strlen($pagi));
include("conectar.php");
$numer_reg = 5;
mysql_select_db($db,$conexion);
if(isset($_POST['todo'])){
	$sql = "SELECT * FROM paciente";
	if(mysql_query($sql,$conexion)){
		
	$res = mysql_query($sql,$conexion);
	$numero_registros = mysql_num_rows($res);
	
	}else{
		echo mysql_error();
		}
	$prim_reg_an = $numer_reg-$pagi;
	$prim_reg_ant = abs($prim_reg_an);
	
	//if(isset($pagi)){
		$pagina_anterior = "<a href='iframe_consultar.php?pagi=".$prim_reg_ant."'>Pagina anterior</a>";
		//}
	$prim_reg_sig = $numer_reg+$pagi;
	
	if($pagi < $numero_registros -($numer_reg-1)){
		$pag_siguiente = "<a href='iframe_consultar.php?pagi=".$prim_reg_sig."'>Pàgina siguiente</a>";
		}
	if( $pagi < $numero_registros -($numer_reg-1)){
		$separador = "|";
		}
		
		$pagi_navegacion = "".$pagina_anterior.$separador.$pag_siguiente."";
	if($contar_pagi > 0){
		$sql1="SELECT * FROM paciente LIMIT $pagi,$numer_reg";
		}else{
			$sql1="SELECT * FROM paciente LIMIT 0, $numer_reg";
			}
			$result1 = mysql_query($sql1,$conexion);
		$numero_registros1=mysql_num_rows($result1);
		echo '<table border="1">';
		while($registros = mysql_fetch_array($result1)){
			echo '<tr>
			<td>'.$registros[0].'</td>
			<td>'.$registros[1].'</td>
			<td>'.$registros[2].'</td>
			<td>'.$registros[3].'</td>
			</tr>';
			}
			echo '</table><br>'.$pagi_navegacion;
	}else{
		echo "haga una búsqueda.";
		
		}


?>
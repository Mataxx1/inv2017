<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
include("conectar.php");
mysql_select_db($db,$conexion);
$sqlPac = "select * from acompanante";
$resPac = mysql_query($sqlPac,$conexion);
$sqlMun = "select distinct(municipio) from acompanante order by municipio asc";
$resMun = mysql_query($sqlMun,$conexion);
$sqlLoc = "select distinct(localidad) from acompanante order by localidad asc";
$resLoc = mysql_query($sqlLoc,$conexion);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="../index.php"><span class="logo_colour">Invitados</span> Lucas:14</a></h1>
          <h2>Ameca, Jalisco, México <?php $dt = time();
		  $fc=date("Y",$dt); echo $fc;?></h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
         <?php
		 if(isset($_SESSION['tipo'])){
			 navegacion_dentro_pags();
		 }
          ?>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
       <li><img src="../images/1.jpg" width="600" height="150" alt="seascape_one" /></li>
        <li><img src="../images/2.jpg" width="600" height="150" alt="seascape_two" /></li>
        <li><img src="../images/3.jpg" width="600" height="150" alt="seascape_three" /></li>
        <li><img src="../images/4.jpg" width="600" height="150" alt="seascape_four" /></li>
        <li><img src="../images/5.jpg" width="600" height="150" alt="seascape_five" /></li>
        <li><img src="../images/6.jpg" width="600" height="150" alt="seascape_seascape" /></li>
      </ul>
      
      <div class="content">
        <h1>Sección consultar acompañantes</h1>
        <form name="agrega" action="consultar_acompaniantes.php" method="get">
       <p><table width="400" border="0">
          <tr>
            <td align="right"><input type="checkbox" name="todo" id="todo"></td><td> <label for="todo"> Consultar todos los acompañantes registrados</label></td>
            
          </tr>
         
         <tr>
         	<td>Nombre:</td><td><select name="id" id="id" style="width:100%"><option value="">Seleccione el nombre</option>
            <?php
            while($arrPac=mysql_fetch_array($resPac)){
				echo '<option value="'.$arrPac['id'].'">'.$arrPac['nombre'].' '.$arrPac['apaterno'].' '.$arrPac['amaterno'].'</option>';
				}
			?>
            
            </select></td>
         </tr>
         <tr>
         <td>Municipio</td><td><select name="mun" id="mun" style="width:100%"><option value="">Seleccione el municipio</option>
         <?php
         while($arrMun=mysql_fetch_array($resMun)){
			 echo '<option value="'.$arrMun['municipio'].'">'.$arrMun['municipio'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
        <tr>
         <td>Localidad</td><td><select name="loc" id="loc" style="width:100%"><option value="">Seleccione la localidad</option>
         <?php
         while($arrLoc=mysql_fetch_array($resLoc)){
			 echo '<option value="'.$arrLoc['localidad'].'">'.$arrLoc['localidad'].'</option>';
			 }
		 ?>
         </select></td>
         </tr>
          <tr align="right">
          <td colspan="3"><input type="submit" value="Consultar acompañantes"></td>
          </tr>
        </table></p></form>
	<?php
//



$registros=10;

@$pagina = $_GET['num'];

if(is_numeric($pagina)){
	$inicio=(($pagina-1)*$registros);
	}else{
		$inicio=0;
		}
		

if(isset($_GET['todo'])){
	$sql="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id LIMIT $inicio,$registros";
	$sql1="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'todo',$_GET['todo'],$conexion);
	
	}
if(isset($_GET['id']) && !empty($_GET['id'])){
	$sql="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id where acompanante.id = '".$_GET['id']."' LIMIT $inicio,$registros";
	$sql1="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id where acompanante.id = '".$_GET['id']."'";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'id',$_GET['id'],$conexion);
	
	}
if(isset($_GET['mun']) && !empty($_GET['mun'])){
	$sql="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id where acompanante.municipio = '".$_GET['mun']."' LIMIT $inicio,$registros";
	$sql1="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id where acompanante.municipio = '".$_GET['mun']."'";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'mun',$_GET['mun'],$conexion);
	
	}
if(isset($_GET['loc']) && !empty($_GET['loc'])){
	$sql="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id where acompanante.localidad = '".$_GET['loc']."' LIMIT $inicio,$registros";
	$sql1="select acompanante.nombre as 'nombre_acom', acompanante.apaterno as 'ap_acomp', acompanante.amaterno as 'am_acom', acompanante.telefono, acompanante.estado, acompanante.municipio, acompanante.domicilio, acompanante.localidad, acompanante.desicion, acompanante.evangelio,acompanante.sexo, paciente.nombre as 'nom_pac',paciente.id, paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac' from acompanante inner join paciente on acompanante.paciente_id = paciente.id where acompanante.localidad = '".$_GET['loc']."'";
	$paginas = ceil((mysql_num_rows(mysql_query($sql1,$conexion))/$registros));
	tablaconDatos($sql,$sql1,$pagina,$paginas,'loc',$_GET['loc'],$conexion);
	
	}




function tablaconDatos($sql,$sql1,$pagina,$paginas,$criterio,$valor,$conexion){

	if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
		$res1=mysql_query($sql1,$conexion);
		
		
		echo '<table cellpadding="0" border="1" width="600"><caption style="width:100%">Se muestran '.numero($res).' acompañantes de <b>'.numero($res1).'</b>. <a href="excelAcompaniante.php?qry='.base64_encode($sql1).'"><img src="../images/excel.png" width="25" height="25"></a></caption>';
		while($aD = mysql_fetch_array($res)){
			
			
			
			molde_datos_usuario($aD['nombre_acom'],$aD['ap_acomp'],$aD['am_acom'],$aD['telefono'],$aD['domicilio'],$aD['municipio'],$aD['localidad'],$aD['estado'],$aD['desicion'],$aD['evangelio'],$aD['sexo'],$aD['nom_pac'],$aD['ap_pac'],$aD['am_pac'],$aD['id']);
			
			}
			
		}else{
			mysql_error();
			}
			paginacion($pagina,$paginas,$criterio,$valor);
	
echo '</table>';



	
	}

function paginacion($pagina,$paginas,$criterio,$val){
	echo '<tr><td colspan="4" align="center">';
	if($pagina>1){
		echo'<a href="consultar_pacientes.php?num='.($pagina-1).'&'.$criterio.'='.$val.'">'.'Anterior'.'</a> ';
		}
for($cont = 1; $cont <=$paginas;$cont++){
	
	if($cont==$pagina){
		echo $cont.' ';
		}else{
	echo'<a href="consultar_acompaniantes.php?num='.$cont.'&'.$criterio.'='.$val.'">'.$cont.'</a> ';
	
		}
		
	}
	if($pagina<$paginas){
		echo'<a href="consultar_acompaniantes.php?num='.($pagina+1).'&'.$criterio.'='.$val.'">'.' Siguiente'.'</a>';
		}
	}
	
	
function molde_datos_usuario($nombre,$apa,$ama,$tel,$dom,$mun,$loc,$estado,$crey,$ev,$sexo,$nom_pac,$app,$amp,$id){
	echo '<tr class="fila_iluminada"><td><table width="650" border="1" cellspacing="0">
  <tr>
    
    <td colspan="4"><b>Nombre:</b> '.$nombre.' '.$apa.' '.$ama.'</td>
    
  </tr>
  <tr>
    <td colspan="3"><b>Domicilio:</b> '.$dom.', '.$mun.', '.$loc.', '.$estado.'</td><td><b>Teléfono:</b> '.$tel.'</td>
  </tr>
  <tr>
  <td colspan="2"><b>¿Desición por Jesucristo?:</b> '.$crey.'</td>
  <td colspan="2"><b>¿Escuchó el evangelio?:</b> '.$ev.'</td>
 
  </tr>
  <tr>
  <td colspan="4" align="center" style="background-color:#999; font-weight:bold">Datos de la persona a quien acompaña:</td>
  </tr>
  <tr>
  <td colspan="4"><b>Acompaña a:</b> <a href="consultar_pacientes.php?num=1&id='.$id.'" target="_blank">'.$id.'-'.$nom_pac.' '.$app.' '.$ama.'</a></td>
  </tr>
</table></td></tr>';
	}
	function numero($res){
	return mysql_num_rows($res);
	}

?>
        </div>
    </div>
     <footer>
      <?php
      pie_pagina();
	  ?>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <link rel="stylesheet" href="../css/magnific-popup.css"> 
<script src="../js/jquery.js"></script>
<!-- Magnific Popup core JS file -->
<script src="../js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
$('.popup').magnificPopup({ 
  type: 'image'
	// other options
});
</script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
<?php
function navegacion_dentro_pags(){
		 if(isset($_SESSION['tipo'])){
			 if($_SESSION['tipo'] == "administrador" ||$_SESSION['tipo'] == "medico" || $_SESSION['tipo'] == "capturista"){	
         echo' <li><a href="#">Citas</a>
          <ul>';
		  		if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){
          		echo '<li><a href="nueva_cita.php">Nueva cita</a></li>';
				}
				if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "medico"){
				echo '<li><a href="consultar_citas.php">Consultar citas</a></li>';
				}
				if($_SESSION['tipo'] == "administrador"){
				echo '<li><a href="detalle_cita.php">Detalle de citas</a></li>';
				echo '<li><a href="editar_cita.php">Editar citas</a></li>';
				}
         	echo '</ul>
          </li>';
          	if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){
          echo '<li><a href="#">Personas</a>
          	<ul>
		  	<li><a href="#">Pacientes</a>
		  		<ul>
          			<li><a href="alta_paciente.php">Alta paciente</a></li>
          			<li><a href="consultar_pacientes.php">Consultar pacientes</a>
					<li><a href="editar_paciente.php">Editar pacientes</a></li></ul>
          	</li>
			<li><a href="#">Pastores</a>
		  		<ul>
          			<li><a href="alta_pastor.php">Alta pastor</a></li>
					<li><a href="consultar_pastores.php">Consultar pastores</a></li>
					<li><a href="editar_pastor.php">Editar pastores</a></li>
          			</ul>
          	</li>
			<li><a href="#">Acompañantes</a>
          		<ul>
          			<li><a href="alta_acompanante.php">Alta acompañantes</a></li>';
					
					if($_SESSION['tipo'] == "administrador"){
          			echo '<li><a href="consultar_acompaniantes.php">Consultar acompañantes</a></li>';
					echo '<li><a href="editar_acompanante.php">Editar acompañantes</a></li>';
					}//el que se abrió en personas
					echo'</ul>
          	</li>';
			
		  	echo '<li><a href="#">Médicos</a>
          		<ul>
          			<li><a href="alta_medico.php">Alta medico</a></li>';
					if($_SESSION['tipo'] == "administrador"){
          			echo '<li><a href="consultar_medicos.php">Consultar médicos</a></li><li><a href="editar_medico.php">Editar médicos</a></li>';
					}//se cierra el de consultar médicos
					echo '</ul>
          	</li>';
			 }
				}//encierra capturista, medico y administrador
				
			if($_SESSION['tipo'] == "administrador" || $_SESSION['tipo'] == "capturista"){//de aquí en adelante, solo el administrador puede acceder		
			echo '<li><a href="#">Colaboradores</a>
          		<ul>
				
          			<li><a href="alta_colaborador.php">Alta colaboradores</a></li>
          			<li><a href="alta_tipo_colaborador.php">Alta tipo de colaborador</a></li>';
					if($_SESSION['tipo'] == "administrador"){
					echo '<li><a href="consultar_colaboradores.php">Consultar colaboradores</a></li>';
					echo '<li><a href="editar_colaborador.php">Editar colaboradores</a></li>';
					echo '<li><a href="editar_tipo_colaborador.php">Editar tipo de colaborador</a></li>';
					}
				echo '</ul>
          	</li>
			</ul></li>
          <li><a href="#">Especialidades</a>
          <ul>
          <li><a href="alta_padecimiento.php">Nueva especialidad</a></li>
          <li><a href="consultar_padecimiento.php">Consultar especialidades</a></li>
		  <li><a href="editar_padecimiento.php">Editar especialidades</a></li>
		  <li><a href="alta_diagnostico.php">Dar de alta diagnóstico</a></li>
		  <li><a href="consultar_diagnostico.php">Consultar diagnósticos</a></li>
		  <li><a href="editar_diagnostico.php">Editar diagnósticos</a></li></ul></li>
		  
		  <li><a href="#">Iglesias</a>
          <ul>
		  <li><a href="alta_iglesia_cristiana.php">Alta iglesia cristiana</a></li>';
		  if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="consultar_iglesia_cristiana.php">Directorio de iglesias cristianas</a></li>';
		   echo '<li><a href="editar_iglesia_cristiana.php">Editar iglesias cristianas</a></li>';
		  }
          echo '<li><a href="alta_iglesia.php">Alta iglesia no cristiana</a></li>';
			if($_SESSION['tipo'] == "administrador"){
			echo'<li><a href="consultar_iglesia_no_cristiana.php">Directorio  iglesias no cristianas</a></li>';
			echo'<li><a href="editar_iglesia_no_cristiana.php">Editar  iglesias no cristianas</a></li>';
			}
		  		 echo '</ul></li>

		  <li><a href="#">Grupos</a>
          <ul>
          <li><a href="nuevo_grupo.php">Nuevo grupo</a></li>';
          if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="registrar_a_grupo.php">Inscribir paciente a un grupo</a></li>
		  <li><a href="registrar_acomp_grupo.php">Inscribir acompañante a un grupo</a></li><li><a href="../autoregistrar_a_grupo.php">Inscribir persona a un grupo</a></li>
		  <li><a href="ver_grupos.php">Ver grupos</a></li>
		  <li><a href="asistencia_grupos.php">Registrar asistencia</a></li>
		  <li><a href="lista_asistentes.php">Lista de asistencias</a></li>
		  <li><a href="editar_grupo.php">Renombrar grupo</a></li>';
		  }
		  echo '</ul></li>
          <li><a href="#">Equipo</a>
            <ul>
			  <li><a href="alta_equipo.php">Dar de alta equipo</a></li>
			  <li><a href="alta_categoria_equipo.php">Dar de alta categoría</a></li>
              ';
			 if($_SESSION['tipo'] == "administrador"){
			  echo'
              <li><a href="consultar_equipo.php">Consultar equipo</a></li>
			  <li><a href="eliminar_equipo.php">Eliminar equipo</a></li>
			   <li><a href="editar_equipo.php">Editar equipo</a></li>
			   <li><a href="prestamo.php">Nueva entrega</a></li>
		   <li><a href="editar_prestamo.php">Editar entrega</a></li>
		   <li><a href="consultar_prestamos.php">Consultar entregas</a></li>';
			 }
           echo ' </ul>
          </li>
          
          
		  <li><a href="#">Sistema</a>
		  <ul>
		  <li><a href="alta_difusion.php">Alta medio de difusión</a></li>
		  <li><a href="alta_usuario.php">Dar de alta usuarios</a></li>';
		  if($_SESSION['tipo'] == "administrador"){
		  echo '<li><a href="editar_usuario.php">Editar usuarios</a></li>
		  <li><a href="consultar_usuarios.php">Ver a los usuarios</a></li>
		  <li><a href="estadisticas.php">Estadísticas</a></li>';
		  }
		  echo '<li><a href="cambia_contra.php">Cambiar mi contraseña</a></li>
		 ';// </ul>
		  //</li>
			}
			echo '';
		 }
		  if(isset($_SESSION['tipo'])){
			  if($_SESSION['tipo']=='medico'){
				  echo '</li> <li><a href="salir.php">Salir</a></li>';
				  }else{
         echo '</ul></li> <li><a href="salir.php">Salir</a></li>';
				  }
		  }else{
			  echo ' <li class="selected"><a href="../index.php">Inicio</a></li>';
			  echo '<li><a href="../login.php">Ingresar</a></li>';
			  }
			  
}

?>
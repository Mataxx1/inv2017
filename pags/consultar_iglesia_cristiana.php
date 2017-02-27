<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("navegacion_pags.php");
include("conectar.php");
mysql_select_db($db,$conexion);

$sqlIglesias="SELECT * from iglesia_cristiana";
$resIC=mysql_query($sqlIglesias,$conexion);
$sqlMunicipiosIgl="SELECT distinct(municipio) from iglesia_cristiana";
$resMunIC=mysql_query($sqlMunicipiosIgl,$conexion);
$sqlLocIC="SELECT distinct(localidad) from iglesia_cristiana";
$resLocIC = mysql_query($sqlLocIC,$conexion);

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
    
 <link rel="stylesheet" href="../css/magnific-popup.css"> 
<script src="../js/jquery.js"></script>
<!-- Magnific Popup core JS file -->
<script type="text/javascript" src="../js/jquery.magnific-popup.js"></script>   
    
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
		 navegacion_dentro_pags();
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
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Acciones iglesias cristianas</h3>
          <h4>Consultar iglesias</h4>
          <h5>(Sólo cristianas)</h5>
          <p>Muestra una tabla con información de las iglesias cristianas almacenadas<br /><a href="consultar_iglesia_cristiana.php">Consultar</a></p>
          <h4>Editar iglesias</h4>
          <h5>(Sólo cristianas)</h5>
          <p>Puede editar la información de las iglesias cristianas dadas de alta en el sistema.<br /><a href="editar_iglesia_cristiana.php">Ir a editar</a></p>
        </div>
      </div>
      <div class="content">
        <h1>Consultar iglesias cristianas</h1>
        <form name="agrega" action="consultar_iglesia_cristiana.php" method="post">
       <p><table width="300" border="0">
          <tr>
            <td><input type="checkbox" name="todo" id="todo"></td><td> <label for="todo">Consultar iglesias cristianas</label></td></tr>
            <tr>
            <td>Nombre:</td><td><select name="id" style="width:100%"><option value="">Seleccione iglesia</option>
            <?php
            while($rwIC=mysql_fetch_array($resIC)){
				echo '<option value="'.$rwIC['id'].'">'.$rwIC['nombre'].'</option>';
				}
			?>
            </select></td>
            
          </tr>
          <tr>
            <td>Municipio:</td><td><select name="mun" style="width:100%"><option value="">Seleccione municipio</option>
             <?php
            while($rwMIC=mysql_fetch_array($resMunIC)){
				echo '<option value="'.$rwMIC['municipio'].'">'.$rwMIC['municipio'].'</option>';
				}
			?>
            </select></td>
            
          </tr>
          <tr>
            <td>Localidad:</td><td><select name="loc" style="width:100%"><option value="">Seleccione localidad</option>
             <?php
            while($rwLoc=mysql_fetch_array($resLocIC)){
				echo '<option value="'.$rwLoc['localidad'].'">'.$rwLoc['localidad'].'</option>';
				}
			?>
            </select></td>
            
          </tr>
         
          <tr align="right">
          <td colspan="3"><input type="submit" value="Consultar iglesias cristianas"></td>
          </tr>
        </table></p></form>
        
        <?php

if(isset($_POST['todo']) && !empty($_POST['todo'])){
$sql="SELECT * FROM `iglesia_cristiana` ";
    generaTabla($sql,$conexion);
    
}

if(isset($_POST['id']) && !empty($_POST['id'])){
$sql="SELECT * FROM `iglesia_cristiana` where id ='".$_POST['id']."'";
    generaTabla($sql,$conexion);
    
}
if(isset($_POST['mun']) && !empty($_POST['mun'])){
$sql="SELECT * FROM `iglesia_cristiana` where municipio ='".$_POST['mun']."'";
    generaTabla($sql,$conexion);
    
}
if(isset($_POST['loc']) && !empty($_POST['loc'])){
$sql="SELECT * FROM `iglesia_cristiana` where localidad ='".$_POST['loc']."'";
    generaTabla($sql,$conexion);
    
}


function generaTabla($sql,$conexion){
    if(mysql_query($sql,$conexion)){
		$res=mysql_query($sql,$conexion);
echo '<table border="1"><caption style="background-color:#999; font-weight:bold">Se han encontrado '.contar($res).' resultados.  <a href="excelIglesiasCristianas.php?qry='.base64_encode($sql).'"><img src="../images/excel.png" width="25" height="25"></a></caption>';

cabeceras();

    
        while($row=mysql_fetch_array($res)){
        generaFila($row[1],$row[2],$row[3],$row[4],$row[5],$row[6]);
        }
        echo '</table>';
    }else{
    echo 'error :"v '.mysql_error();
    }
    

}
function contar($res){
	return mysql_num_rows($res);
	}
function cabeceras(){
echo '<th>Nombre</th><th>Domicilio</th><th>Teléfono</th>';
}

function generaFila($nombre,$dom,$mun,$loc,$est,$tel){
echo '<tr class="fila_iluminada"><td>'.$nombre.'</td><td>'.$dom.', '.$mun.', '.$loc.', '.$est.'</td><td>'.$tel.'</td></tr>';

}
        
        ?>
	<!--iframe height="500" width="500" name="carga_consultas_equipo" id="carga_consultas_equipo" src="iframe_consultar_equipo.php" scrolling="no" frameborder="0"><iframe--><br><br><br><br><br><br>
        </div>
    </div>
     <footer>
      <?php
      pie_pagina();
	  ?>
    </footer>
  </div>
  <p>&nbsp;</p>
    <script type="text/javascript">
$('.popup').magnificPopup({ 
  type: 'image'
	// other options
});
</script>
    
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
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
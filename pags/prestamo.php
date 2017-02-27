<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("conectar.php");
include("navegacion_pags.php");
mysql_select_db($db,$conexion);
mysql_select_db($db,$conexion);
$sqlIglesias = "select * from iglesia";
$resIglesias = mysql_query($sqlIglesias,$conexion);
$sqlMedios="select * from difusion";
$resMedios=mysql_query($sqlMedios,$conexion);
$sqlCristianos = "select * from iglesia_cristiana";
$resCristianos=mysql_query($sqlCristianos,$conexion);
$resCristianos2=mysql_query($sqlCristianos,$conexion);
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
   <script type="text/javascript" src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="../js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="../js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="../js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/validaciones.js"></script>
  <link type="text/css" href="../css/jquery.datetimepicker.css" rel="stylesheet" />
 
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
          <h3>Acciones para entregas</h3>
          <h4>Consultar entregas</h4>
          <h5>&nbsp;</h5>
          <p>Consultar y exportar datos de las entregas realizadas<br /><a href="consultar_prestamos.php">Ir a consultar</a></p>
          <h4>Editar entregas</h4>
          <h5>&nbsp;</h5>
          <p>Cambiar el estatus de las entregas.<br /><a href="editar_prestamo.php">Ir a editar</a></p>
        </div>
      </div>
      <div class="content">
      <script type="text/javascript">
$(function(){
	$("#id").autocomplete({
		source : "completa_prestamo.php",
		minLength: 1,
		
		
		select : function(event,ui){
			$("#nombre").val(ui.item.nombre);
			$("#apaterno").val(ui.item.apaterno);
			$("#amaterno").val(ui.item.amaterno);
			$("#nacim").val(ui.item.fecha_nacimiento);
			$("#telefono").val(ui.item.telefono);
			$("#estado").val(ui.item.estado);
			$("#municipio").val(ui.item.municipio);
			$("#domicilio").val(ui.item.calle);
			$("#evangelio").val(ui.item.evangelio);
			$("#creyente").val(ui.item.desicion);
			$("#iglesia").val(ui.item.iglesia);
			}
		});
	});

</script>
        <h1>Comience a escribir el ID del paciente, los datos se autocompletarán automáticamente</h1>
        <form name="agrega" action="guarda_prestamo.php" method="post">
       <p><table width="600" border="0">
          <tr>
            <td width="157" align="right">ID: </td><td width="244"><input type="text" name="id" id="id"></td>
           
          </tr>
          <tr>
            <td align="right">Nombre:</td><td colspan="2"><input type="text" name="nombre" id="nombre" disabled="disabled" style="width:100%"></td></tr><tr>
            <td></td><td><input type="text" name="apaterno" id="apaterno" disabled="disabled" style="width:100%"></td>
            <td width="185"><input type="text" name="amaterno" id="amaterno" disabled="disabled" style="width:100%"></td>
          </tr>
          <tr>
            <td align="right">Fecha de nacimiento: </td><td><input type="date" name="nacim" id="nacim" disabled="disabled" placeholder="Fecha de nacimiento" style="width:100%"></td></tr><tr>
            <td align="right">Teléfono</td><td><input type="text" name="telefono" id="telefono" disabled="disabled" placeholder="Teléfono" style="width:100%"></td>
          </tr>
          <tr>
            <td align="right">Estado </td><td><select name="estado" id="estado" disabled="disabled">
            <option value="">Seleccione el estado de procedencia</option>
    <option value="Aguascalientes">Aguascalientes</option>
    <option value="Baja California">Baja California</option>
    <option value="Baja California Sur">Baja California Sur</option>
    <option value="Campeche">Campeche</option>
    <option value="Chiapas">Chiapas</option>
    <option value="Chihuahua">Chihuahua</option>
    <option value="Coahuila">Coahuila</option>
    <option value="Colima">Colima</option>
    <option value="Distrito Federal">Distrito Federal</option>
    <option value="Durango">Durango</option>
    <option value="Estado de México">Estado de México</option>
    <option value="Guanajuato">Guanajuato</option>
    <option value="Guerrero">Guerrero</option>
    <option value="Hidalgo">Hidalgo</option>
    <option value="Jalisco">Jalisco</option>
    <option value="Michoacán">Michoacán</option>
    <option value="Morelos">Morelos</option>
    <option value="Nayarit">Nayarit</option>
    <option value="Nuevo León">Nuevo León</option>
    <option value="Oaxaca">Oaxaca</option>
    <option value="Puebla">Puebla</option>
    <option value="Querétaro">Querétaro</option>
    <option value="Quintana Roo">Quintana Roo</option>
    <option value="San Luis Potosí">San Luis Potosí</option>
    <option value="Sinaloa">Sinaloa</option>
    <option value="Sonora">Sonora</option>
    <option value="Tabasco">Tabasco</option>
    <option value="Tamaulipas">Tamaulipas</option>
    <option value="Tlaxcala">Tlaxcala</option>
    <option value="Veracruz">Veracruz</option>
    <option value="Yucatán">Yucatán</option>
    <option value="Zacatecas">Zacatecas</option>
    </select></td>
            </tr><tr><td align="right">Municipio:</td><td><input type="text" name="municipio" id="municipio" disabled="disabled" placeholder="Municipio" style="width:100%"></td></tr><tr>
            <td align="right">Domicilio: </td><td><input type="text" name="domicilio" id="domicilio" disabled="disabled" style="width:100%"></td>
          </tr>
         <tr>
          <td align="right">Escuchó el evangelio:</td><td><select name="evangelio" id="evangelio" style="width:100%"><option value="">Seleccione una respuesta</option><option value="si">Sí</option><option value="no">No</option></select></td></tr><tr>
	       <td align="right">Decisión por Jesucristo:</td><td><select name="creyente" id="creyente" style="width:100%;"><option value="">Seleccione una respuesta</option><option value="si">Sí</option><option value="no">No</option><option value="Ya era">Ya era</option></select></td></tr>
           <tr>
           <td align="right">Iglesia: </td><td><select name="iglesia" id="iglesia" style="width:100%" onChange="muestraIglesiasCristianas();"><option value="">seleccione la iglesia</option>
           <?php
           while($rowIglesias=mysql_fetch_array($resIglesias)){
			   echo '<option value="'.$rowIglesias[0].'">'.$rowIglesias[1].'</option>';
			   }
		   ?></select></td><td><select id="iglesia_cristiana_paciente"name="iglesia_cristiana_paciente" style="width:200px; display:none;"><option value="">Indique la iglesia cristiana</option><?php
           while($rowCristianos_p=mysql_fetch_array($resCristianos2)){
			   echo '<option value="'.$rowCristianos_p[0].'">'.$rowCristianos_p[1].'</option>';
			   }
		   ?></select></td></tr>
          </tr>
          <tr align="right">
        
          </tr>
        </table></p>
        <table width="600"><caption style="background-color:#999; font-weight:bold">Datos de lo que se prestará</caption>
        <?php
		crea_filas($fc,$conexion);
		
        ?>
        <tr>
        	<td>Fecha del préstamo</td><td><input type="text" name="fecha_prestamo" id="fecha_prestamo"></td>
        </tr>
        <tr>
        	<td colspan="2" align="right"><input type="submit" value="Registrar entrega" onClick="return validaPrestamo();"></td>
        </tr>
        </table></form>
<?php
function crea_filas($fc,$conexion){
	
	
	if($conexion){
		
	$sqlCateEquipos= "SELECT * FROM tipo_equipo";
	if(mysql_query($sqlCateEquipos,$conexion)){
		$i=0;
	$res = mysql_query($sqlCateEquipos,$conexion);
	$total = mysql_num_rows($res);
	echo '<input type="hidden" name="equipos" id="equipos" value="'.$total.'"><script type="text/javascript">console.log("hay: "+'.$total.'+" elementos");</script>';
	while($rowCatego = mysql_fetch_array($res)){
		echo '<tr>
		<td align="right">'.$rowCatego[1].'</td>';
		$sql2="SELECT * FROM equipo where tipo_equipo_idtipo_equipo='".$rowCatego[0]."' AND estatus = 'disponible' AND anio='".$fc."'";
			$equipos=mysql_query($sql2,$conexion);
			echo '<td>';
			echo '<select name="equipo'.$i.'" id="equipo'.$i.'"><option value="">Selecciona un equipo</option>';
			while($rowEquipos = mysql_fetch_array($equipos)){
				echo '<option value="'.$rowEquipos[0].'">'.$rowEquipos[1].'</option>';
				}
				echo '</select></td></tr>';
				$i++;
		}
	}else{
		echo "error: ".mysql_error();
		}
		}else{
			echo "Error:".mysql_error();
			}
	
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
 
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/jquery.datetimepicker.js"></script>
 <script type="text/javascript">
 $(function(){		 
	$("#fecha_prestamo").datetimepicker({
		lang:'es',
		
		format:'Y-m-d H:i',
		});
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
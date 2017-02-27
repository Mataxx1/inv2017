<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("conectar.php");
include("navegacion_pags.php");
mysql_select_db($db,$conexion);
$sqlIglesias = "select * from iglesia";
$resIglesias = mysql_query($sqlIglesias,$conexion);
$sqlMedios="select * from difusion";
$resMedios=mysql_query($sqlMedios,$conexion);
$sqlCristianos = "select * from iglesia_cristiana";
$resCristianos=mysql_query($sqlCristianos,$conexion);
$resCristianos2=mysql_query($sqlCristianos,$conexion);
$sqlDiagnosticos = "select * from diagnostico order by nombre asc";
$resDiagn=mysql_query($sqlDiagnosticos,$conexion);
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/jquery-ui.css" />
  <link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"/>
  <link type="text/css" href="../css/jquery.datetimepicker.css" rel="stylesheet" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js"></script>
  <script type="text/javascript" src="../js/validaciones.js"></script>
  <script type="text/javascript" src="../js/oculta.js"></script>
  <style>
.ui-autocomplete-loading {
background: white url("../images/loading.gif") right center no-repeat;
}
</style>
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
          <h3>Acciones para pacientes:</h3>
          <h4>Consultar pacientes</h4>
          
          <p>Ver a los pacientes registrados<br /><a href="consultar_pacientes.php">Consultar</a></p>
          <h4>Editar pacientes</h4>
          
          <p>Editar información básica de los pacientes almacenados en el sistema<br /><a href="editar_paciente.php">Editar</a></p>
        </div>
      </div>
      <div class="content">
        <h1>Sección para dar de alta pacientes:</h1>
        <form name="agrega" action="guarda_paciente_lineal.php" method="post" enctype="multipart/form-data">
       <p>
       <table width="710" border="0" cellpadding="0" cellspacing="0"><caption>&nbsp;</caption>
<tr>
<td width="706">
<table width="700" border="0">
<caption style="background-color:#999; font-weight:bold">&nbsp;</caption>
  <tr>
    <td colspan="3"><strong>Datos del  Contacto</strong>(<em>INDISPENSABLE</em>)</td>
    <td width="263" colspan="2">&nbsp;</td>
   
  </tr>
  <tr>
<td colspan="3">Nombre:<input type="text" name="nombre_contacto" id="nombre_contacto" size="50" style="width:100%"><input type="hidden" name="id_contacto" id="id_contacto"></td>
    <td colspan="2">Teléfono: <input type="tel" id="tel_casa_contacto" placeholder="Teléfono de casa" name="tel_casa_contacto" size="30"></td>
  </tr>
  <tr>
   <td colspan="3">Iglesia:<select id="iglesia_contacto"name="iglesia_contacto" style="width:200px;"><option value="">Indique la iglesia</option><?php
           while($rowCristianos=mysql_fetch_array($resCristianos)){
			   echo '<option value="'.$rowCristianos[0].'">'.$rowCristianos[1].'</option>';
			   }
		   ?></select></td>
    <td colspan="2">Celular:<input type="text" id="tel_cel_contacto" name="tel_cel_contacto" size="30" placeholder="Teléfono celular"></td>
  </tr>
</table>

</td>
</tr>
<tr>
<td>
<table width="700" height="263" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="8" align="center" style="background-color:#999; font-weight:bold"><strong>Datos Generales  del Solicitante</strong></td>
   
  </tr>
  <tr>
    <td colspan="4">Fecha<span style="color:#F00">*</span>:<input type="text" name="fecha_registro" id="fecha_registro" placeholder="Fecha de registro" style="width:50%"></td>
    <td colspan="4"><strong>Ameca</strong></td>
    
  </tr>
  <tr>
    <td colspan="6"> Nombre<span style="color:#F00">*</span>:<input type="text" name="nombre" id="nombre" placeholder="Nombre(s)" style="width:90%"><br><input type="text" name="apaterno" id="apaterno" placeholder="Apellido paterno" style="width:45%"><input type="text" name="amaterno" id="amaterno" placeholder="Apellido materno" style="width:45%"> </td>
    <td width="203" colspan="2">Fecha de Nacimiento<span style="color:#F00">*</span>:<input type="text" name="nacim" id="nacim" style="width:100%"></td>
    
   </tr>
  <tr>
    <td colspan="3">Sexo<span style="color:#F00">*</span>:<select name="sexo" id="sexo"><option value="">Seleccione...</option><option value="Hombre">Hombre</option><option value="Mujer">Mujer</option></select></td>
    <td colspan="5">Domicilio<span style="color:#F00">*</span>:  <input type="text" name="domicilio" id="domicilio" placeholder="Calle y número" size="50" style="width:100%"></td>
    
  </tr>
  <tr>
    <td colspan="3">Municipio<span style="color:#F00">*</span>:<input type="text" name="municipio" id="municipio" placeholder="Municipio" style="width:100%"></td>
    <td colspan="3"> Localidad<span style="color:#F00">*</span>:<input type="text" name="localidad" id="localidad" placeholder="Localidad" style="width:100%"></td>
    <td colspan="2"> Teléfono<span style="color:#F00">*</span>:<input type="text" name="telefono" id="telefono" placeholder="Teléfono" style="width:100%"></td>
   
  </tr>
  <tr>
    <td colspan="3">Estado<span style="color:#F00">*</span>:
      <select name="estado" id="estado" style="width:100%">
            <option value="">Seleccione estado de procedencia</option>
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
    </select> </td>
    <td colspan="5">Requiere<span style="color:#F00">*</span>:<select name="requiere" id="requiere" style="width:70%"><option value="">Seleccione lo que requiere</option><option value="andador">Andador</option><option value="muletas">Muletas</option><option value="silla">Silla de ruedas</option></select></td>
    
  </tr>
  <tr>
    <td colspan="8"> Diagnóstico médico de su problema de salud<span style="color:#F00">*</span>: <select name="diagnostico" id="diagnostico" style="width:50%"><option value="">Seleccione el diagnóstico</option>
          <?php
          while($arrDiag = mysql_fetch_array($resDiagn)){
			  echo '<option value="'.$arrDiag[0].'">'.$arrDiag[1].'</option>';
			  }
		  ?>
          </select></td>
    
  </tr>
  
</table>


</td>
</tr>
<tr>
<td>

<table width="700" border="0" cellspacing="0" cellpadding="0">
<caption style="background-color:#999; font-weight:bold"></caption>
  <tr>
    <td colspan="4" align="center" style="background-color:#999; font-weight:bold"><strong>Medidas del  Solicitante</strong></td>
 
  </tr>
  <tr>
    <td colspan="1">Peso:<input type="text" name="peso" id="peso" placeholder="Peso en kilogramos"> Kg.</td>
    <td width="176" colspan="2">Altura:<input type="text" name="altura" id="altura" placeholder="Altura en centímetros"> centímetros</td>
    
  </tr>
  <tr>
    <td colspan="4"><strong>Para adaptar su silla de ruedas, favor de tomar las  siguientes medidas en CENTÍMETROS:</strong></td>
   
  </tr>
  <tr>
    <td width="244"><table width="350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>1.<input type="text" name="espalda" id="espalda" placeholder="Logitud en centímetros"> centímetros </td>
    <td rowspan="2"><img src="../formato/espalda.png" /></td>
  </tr>
  <tr>
    <td rowspan="2">Longitud de la espalda</td>
   
  </tr>
</table></td>
    <td width="273"><table width="350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> 2.<input type="text" name="cadera_rodilla" id="cadera_rodilla" placeholder="Logitud en centímetros"> centímetros</td>
    <td rowspan="2"><img src="../formato/cadera-rodilla.png" /></td>
  </tr>
  <tr>
    <td rowspan="2"> De la cadera a la rodilla</td>
   
  </tr>
</table></td>
    
  </tr>
  <tr>
  <td><table width="350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td> 3.<input type="text" name="rodilla_talon" id="rodilla_talon" placeholder="Logitud en centímetros" > centímetros</td>
    <td rowspan="2"><img src="../formato/rodilla-talon.png" /></td>
  </tr>
  <tr>
    <td rowspan="2"> De la rodilla al talón</td>
   
  </tr>
</table></td>
    <td><table width="350" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>4.<input type="text" name="cintura" id="cintura" placeholder="Logitud en centímetros"> centímetros</td>
    <td rowspan="2"><img src="../formato/cadera.png" /></td>
  </tr>
  <tr>
    <td rowspan="2"> Anchura de las caderas
(Hombros a coxis)Hueso a hueso, NO  alrededor)</td>
   
  </tr>
</table></td>
  </tr>
</table>
</td>
</tr>
<tr>
<td><table width="708" border="0" ><caption style="background-color:#999; font-weight:bold">
<strong>En caso de  requerir <u>Andador</u> o <u>Muletas</u></strong>
</caption>
<tr>
<td>&#9633;<strong>Para un andador:</strong> Favor de medir del codo al  piso en pulgadas: </td><td><input type="text" name="codo_piso" id="codo_piso" placeholder="Medida en pulgadas"> pulgadas.</td>
</tr>
<tr>
<td>&#9633;<strong>Para muletas:</strong> Favor de medir de la axila  al piso en pulgadas: </td><td><input type="text" name="axila_piso" id="axila_piso" placeholder="Medida en pulgadas">pulgadas.</td>
</tr>
</table></td>
</tr>
<tr>
<td><table width="708" border="0"><caption style="background-color:#999; font-weight:bold">
<strong>Otros datos</strong>
</caption>
<tr>
<td width="343">Foto: <input type="file" name="foto" id="foto" lang="es"></td>
<td width="349">&nbsp;</td>
</tr>
<tr>
<td align="right">¿Por qué medio se enteró del programa?</td><td colspan="2"><table border="0" cellpadding="0" cellspacing="">
          <?php
		  $i=0;
		  while($rowMedios=mysql_fetch_array($resMedios)){
          echo '<tr><td><input type="checkbox" id="medios'.$i.'" name="medios'.$i.'" value="'.$rowMedios[0].'"></td><td> <label for="medios'.$i.'"> '.$rowMedios[1].'</label></td></tr>';
		  $i++;
		  }
          ?>
          </table></td>
</tr>
<tr>
    <td colspan="8"> Iglesia a la que pertenece<span style="color:#F00">*</span>: 
      <select name="iglesia" id="iglesia" style="width:50%">
          <?php
          while($arrIgl = mysql_fetch_array($resIglesias)){
			  echo '<option value="'.$arrIgl[0].'">'.$arrIgl[1].'</option>';
			  }
		  ?>
          </select></td>
    
  </tr>
</table></td>
</tr>
<tr><td colspan="3" align="right"><input type="submit" onClick="return validaAltaPaciente();" value="Registrar paciente"></td>
          </tr>
</table>
       
          
        </table></p></form>

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
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  <script type="text/javascript" src="../js/jquery.datetimepicker.js"></script>
 <script type="text/javascript">
 $(function(){
	 $("#nacim").datetimepicker({
		 lang:'es',
		 timepicker:false,
		 yearStart:1920,
		 mask:true,
		 format:'Y-m-d',
		 });
		 
	$("#fecha_registro").datetimepicker({
		lang:'es',
		mask:true,
		format:'Y-m-d H:i:s',
		});
	 });
 </script> 
  <script type="text/javascript">
$(function(){
	$("#nombre_contacto").autocomplete({
		source : "completa_contacto.php",
		minLength: 1,
		
		
		select : function(event,ui){
			$("#tel_casa_contacto").val(ui.item.tel_casa);
			$("#tel_cel_contacto").val(ui.item.tel_celular);
			$("#iglesia_contacto").val(ui.item.iglesia_cristiana_id);
			$("#id_contacto").val(ui.item.id);
			}
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
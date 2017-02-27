<?php
session_start();
if(!isset($_SESSION['ife'])){
	header("Location:../index.php");
	}
include("conectar.php");
include("navegacion_pags.php");
mysql_select_db($db,$conexion);
//$sqlEspecialidadXMedico="select medico.cedula, medico.nombre, medico.apaterno, medico.amaterno, especialidad.idespecialidad, especialidad.nombre from medico inner join medico_has_especialidad on medico_has_especialidad.medico_cedula = medico.cedula inner join especialidad on medico_has_especialidad.especialidad_idespecialidad = especialidad.idespecialidad order by especialidad.nombre asc";
$sqlEspecialidad="SELECT * FROM especialidad";
$resEspecialidades = mysql_query($sqlEspecialidad,$conexion);
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
  <link type="text/css" href="../css/jquery.datetimepicker.css" rel="stylesheet" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="../js/modernizr-1.5.min.js">
  </script>
  <script type="text/javascript" src="../js/validaciones.js"></script>
   <style>
.ui-autocomplete-loading {
background: white url("../images/loading.gif") right center no-repeat;
}
</style>
  <script type="text/ecmascript">
  function funcion1(){
	document.getElementById("registrar").disabled=true;
	}
function funcion2(){
	document.getElementById("registrar").disabled=false;
	}
  </script>
  
  <script>
function showMedicos(str) {
  if (str=="") {
    document.getElementById("medicos").innerHTML="Seleccione la especialidad";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  muestraLoading();
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("medicos").innerHTML=xmlhttp.responseText;
	  ocultaLoading();
    }
  }
  xmlhttp.open("GET","getmedicos.php?q="+str,true);
  xmlhttp.send();
}

function validaCita(med,pac,fecha,espe,dur){
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
	  muestraLoading();
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		ocultaLoading();
     // document.getElementById("comprobar").innerHTML=xmlhttp.responseText;
	  if(xmlhttp.responseText=="si"){

		  funcion2();
		  document.getElementById("comprobar").innerHTML="<span id='cita_disponible'>Cita disponible.</span> <br>Presione 'Registrar' para guardar la cita.";
		 }
	if(xmlhttp.responseText=="no"){
		 funcion1();
		 		  document.getElementById("comprobar").innerHTML="<span id='cita_no_disponible'>Cita no disponible</span><br>* Puede deberse a que el médico o el paciente ya tienen una cita programada en esa fecha a esa hora.<br>* Asegurese de que el paciente no tenga otra cita programada a esa hora. <br>* Asegurese que el médico no tenga otra cita programada a esa hora.<br> En ambos casos seleccione otra hora, o bien, otro médico.";
		 }
    }
  }
  xmlhttp.open("GET","validarcita.php?medico="+med+"&paciente="+pac+"&fecha="+fecha+"&especialidad="+espe+"&duracion="+dur,true);
  xmlhttp.send();
	}

</script>
 <script type="text/javascript">
function muestraLoading(){
	document.getElementById("loading").style.display="";
	}
function ocultaLoading(){
	document.getElementById("loading").style.display='none';
	}
	
function desactivaEnviar(){
	document.getElementById("btnEnviar").disabled=true;
	}
function activaEnviar(){
	document.getElementById("btnEnviar").disabled=false;
	}
	

</script>
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
          <h3>Acciones para citas</h3>
          <h4>Detalle de citas</h4>
          <h5>&nbsp;</h5>
          <p>Ver un reporte de las citas y exportar.<br /><a href="detalle_cita.php">Ir a detalle de citas.</a></p>
          <h4></h4>
          <h5></h5>
          <p><br /><a href="#"></a></p>
        </div>
      </div>
      <div class="content">
        <h1>Nuevas citas</h1>
        <form name="nueva_cita" action="guarda_cita.php" method="post">
       <p><table width="200" border="0">
          <tr>
            <td>ID paciente: </td><td><input type="text" name="id" id="id"></td>
            <td colspan="2">&nbsp;</td>
          </tr>
          <tr>
            <td>Nombre: </td><td colspan="2"><input type="text" name="nombre" id="nombre" placeholder="Nombre(s)" style="width:100%" disabled="disabled"></td></tr><tr><td></td><td><input type="text" name="apaterno" id="apaterno" placeholder="Apellido paterno" disabled="disabled"></td><td><input type="text" name="amaterno" id="amaterno" placeholder="Apellido materno" disabled="disabled"></td>
          </tr>
          <tr>
            <td>Especialidad: </td><td><select name="especialidad" id="especialidad" onChange="showMedicos(this.value);" style="width:100%"><option value="">Seleccione</option> <?php while($arr=mysql_fetch_array($resEspecialidades)){ echo '<option value="'.$arr[0].'">'.$arr[1].'</option>';} ?></select><br></td>
            <td colspan="2"><div id="medicos">seleccione especialidad para ver a los médicos</div></td>
          </tr>
          <tr>
            <td>fecha para la cita</td><td>
            <input type="text" name="fecha_cita" id="fecha_cita" > </td>
            <td>Duración:</td>
            <td><select name="duracion_cita" id="duracion_cita">
            <option value="">Seleccione la duración</option>
            <?php
            for($in=1;$in<60;$in++){
				echo '<option value="'.$in.'">'.$in.' minutos</option>';
				}
			?>
            </select></td>
          </tr>
          <tr>
	       <td colspan="3"><div id="comprobar">Seleccione la fecha y hora.</div></td>
           
          </tr>
          <td colspan="2"><div id="loading" style="display:none; width:100%;"><center><img src="../images/loadingAnimation.gif"></center></div></td>
          <tr align="right">
          
          <td colspan="2"><a class="verificar" onClick=' validacionesCita();validaCita(document.getElementById("medico").value,document.getElementById("id").value,document.getElementById("fecha_cita").value,document.getElementById("especialidad").value,document.getElementById("duracion_cita").value);;'>Comprobar</a></td><td colspan="2"><input type="submit" value="Registrar cita" id="registrar" disabled></td>
          </tr>
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
  <script type="text/javascript" src="../js/jquery-ui.js"></script>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 600,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
  <script type="text/javascript" src="../js/jquery.datetimepicker.js"></script>
<script type="text/javascript">
$(function(){ 
$("#fecha_cita").datetimepicker({
	lang:'es',
	<?php echo "allowTimes:['8:00', '8:20', '8:40', 
  '9:00','9:20', '9:40', '10:00', 
  '10:20','10:40', '11:00', '11:20', 
  '11:40','12:00', '12:20', '12:40', 
  '13:00','13:20', '13:40', '14:00', 
  '14:20','14:40', '15:00', '15:20', 
  '15:40','16:00', '16:20', '16:40', 
  '17:00','17:20', '17:40', '18:00', 
  '18:20','18:40', '19:00', '19:20', 
  '19:40','20:00']"; ?>,
	});

}); 


</script>
 <script type="text/javascript">
$(function(){
	$("#id").autocomplete({
		source : "completa_prestamo.php",
		minLength: 1,
		select : function(event,ui){
			$("#nombre").val(ui.item.nombre);
			$("#apaterno").val(ui.item.apaterno);
			$("#amaterno").val(ui.item.amaterno);
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
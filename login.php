<!DOCTYPE HTML>
<html>

<head>
  <title>Invitados Lucas:14</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
           <h1><a href="index.php"><span class="logo_colour">Invitados</span> Lucas:14</a></h1>
          <h2>Ameca, Jalisco, México <?php $dt = time();
		  $fc=date("Y",$dt); echo $fc;?></h2>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li><a href="index.php">Inicio</a></li>
        
          <li class="selected"><a href="login.php">Ingresar</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1.jpg" width="600" height="150" alt="seascape_one" /></li>
        <li><img src="images/2.jpg" width="600" height="150" alt="seascape_two" /></li>
        <li><img src="images/3.jpg" width="600" height="150" alt="seascape_three" /></li>
        <li><img src="images/4.jpg" width="600" height="150" alt="seascape_four" /></li>
        <li><img src="images/5.jpg" width="600" height="150" alt="seascape_five" /></li>
        <li><img src="images/6.jpg" width="600" height="150" alt="seascape_seascape" /></li>
      </ul>
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Enlaces de interés</h3>
          <h4>Acceso público a las estadísticas</h4>
          <h5>Año-mes-día</h5>
          <p>Información de interés para el público en general<br /><a href="#">Leer más</a></p>
          <h4>Otro enlace</h4>
          <h5>Año-mes-día</h5>
          <p>Pequeña descripción de algún enlace de interés, como acceso a un mapa con la ubicación.<br /><a href="#">Leer más</a></p>
        </div>
      </div>
      <div class="content">
        <h1>Ingrese su usuario y su contraseña:</h1>
       <p></p><center>
       <form action="pags/validar.php" method="post">
       <table width="300">
       	<tr>
        	<td align="center">Usuario:<br><input type="text" name="usuario" placeholder="Nombre de usuario" style="width:100%"></td>
        </tr>
        <tr>
        	<td align="center">Contraseña:<br><input type="password" name="pass" placeholder="Contraseña" style="width:100%"><br><input type="submit" value="Iniciar sesión"></td>
        </tr>
       </table></form></center>
        </div>
    </div>
    <footer>
      <p> &copy; Invitados Lucas:14 |<a target="_blank" href="http://www.joniandfriends.org/">Joni and Friends</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
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

<?php
$host="localhost";
$user="root";
$pass="";
//$db="lucas14_1";
$db="consultorio_db_resp";
$conexion = mysql_connect($host,$user,$pass);

function mensaje($msj,$locacion){
	
		echo'<script type="text/javascript">alert("'.$msj.'");</script>';
		$cad="location.href='$locacion'";
	    echo "<script type=\"text/javascript\">setTimeout(".$cad.",4000);</script>";
	
	}

?>
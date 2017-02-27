<?php
session_start();
$_SESSION['ife']="";
$_SESSION['nombre']="";
$_SESSION['tipo']="";
session_destroy();
header('Location:../index.php');

?>
<?php
///Funciona, hacer muchas pruebas
header('Content-Type: text/html; charset=UTF-8');
date_default_timezone_set("America/Mexico_City");
include("conectar.php");

mysql_select_db($db,$conexion);
//Datos contacto
@$nombre_contacto = $_POST['nombre_contacto'];
@$id_contacto = $_POST['id_contacto'];
@$tel_cel_contacto = $_POST['tel_cel_contacto'];
@$tel_casa_contacto = $_POST['tel_casa_contacto'];
@$iglesia_contacto = $_POST['iglesia_contacto'];

//Datos del paciente

@$apaterno=$_POST["apaterno"];
@$amaterno=$_POST["amaterno"];
@$nombre=$_POST["nombre"];
@$estado=$_POST["estado"];
@$municipio=$_POST["municipio"];
@$nacim=$_POST['nacim'];
@$calle=$_POST["domicilio"];
@$localidad = $_POST['localidad'];
@$telefono=$_POST['telefono'];
@$pais="México";
@$creyente=$_POST['creyente'];
@$iglesia=$_POST['iglesia'];
@$sexo=$_POST['sexo'];
@$evangelio=$_POST['evangelio'];
@$diagnostico = $_POST['diagnostico'];
@$igcp=$_POST['iglesia_cristiana_paciente'];
//medidas paciente
@$espalda=$_POST['espalda'];
@$cadera_rodilla=$_POST['cadera_rodilla'];
@$rodilla_talon =$_POST['rodilla_talon'];
@$cintura = $_POST['cintura'];
@$altura = $_POST['altura'];
@$peso = $_POST['peso'];

@$codo_piso = $_POST['codo_piso'];
@$axila_piso = $_POST['axila_piso'];
@$requiere = $_POST['requiere'];
//fecha
//$fech_utc = time();
$fecha_r = $_POST['fecha_registro'];//date("Y-m-d H:i:s");
if(!$conexion){
	echo "error en la conexion<br>";
	}else{
		if(empty($id_contacto) && empty($nombre_contacto)){//dar de alta paciente sin un contacto
//		$sql="select * from especialidad";
	//	$numeroEspec=mysql_num_rows(mysql_query($sql,$conexion));
	//Si se manda el espacio de contacto vacío se guarda con el id 1, que en la base de datos está guardado como sin contacto.
		if(addPaciente($nombre,$apaterno,$amaterno,$nacim,$telefono,$creyente,$iglesia,$pais,$estado,$municipio,$localidad,$calle,$evangelio,$sexo,$igcp,1,$diagnostico,$fecha_r,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$requiere,$codo_piso,$axila_piso,$conexion)){
			$id=recuperaID($nombre,$apaterno,$amaterno,$nacim,$conexion);
			
			
			for($j=0;$j<numeroMedios($conexion);$j++){
				if(isset($_POST['medios'.$j]) && !empty($_POST['medios'.$j])){
					if(guardaOpinion($conexion,$_POST['medios'.$j],$id)){
					echo 'se guardo sin problemas<br>';
					}else{
				echo "error guardando la ifno: ".mysql_error();;
						}
				}else{
				echo "aqui no hago nada";
				}
			}
			
			
			//mensaje("Paciente agregado con éxito, ID: ".$id,"alta_paciente.php");
			if(addFotoPaciente($_FILES['foto'],$id)){
				echo 'se subió exitosamente la foto';
				}else{
					echo 'no se subió la foto';
					}		
				mensaje("Paciente agregado con éxito, ID: ".$id,"alta_paciente.php");
			}else{
				mensaje("Algo salió mal: ".mysql_error(),"alta_paciente.php");
				}
	}else{
		
		}//sí mandan datos de contacto...
		if(validaContacto($id_contacto,$conexion)){//si existe ya el contacto
		//solo guarda al paciente y su foto y todo eso
		
		if(addPaciente($nombre,$apaterno,$amaterno,$nacim,$telefono,$creyente,$iglesia,$pais,$estado,$municipio,$localidad,$calle,$evangelio,$sexo,$igcp,$id_contacto,$diagnostico,$fecha_r,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$requiere,$codo_piso,$axila_piso,$conexion)){
			$id=recuperaID($nombre,$apaterno,$amaterno,$nacim,$conexion);
			
			
			for($j=0;$j<numeroMedios($conexion);$j++){
				if(isset($_POST['medios'.$j]) && !empty($_POST['medios'.$j])){
					if(guardaOpinion($conexion,$_POST['medios'.$j],$id)){
					echo 'se guardo sin problemas<br>';
					}else{
				echo "error guardando la ifno: ".mysql_error();;
						}
				}else{
				echo "aqui no hago nada";
				}
			}
			
			
			//mensaje("Paciente agregado con éxito, ID: ".$id,"alta_paciente.php");
			if(addFotoPaciente($_FILES['foto'],$id)){
				echo 'se subió exitosamente la foto';
				}else{
					echo 'no se subió la foto';
					}		
				mensaje("Paciente agregado con éxito, ID: ".$id,"alta_paciente.php");
			}else{
				mensaje("Algo salió mal: ".mysql_error(),"alta_paciente.php");
				}
			//solo guarda al paciente y su foto y todo eso
			}else{//si no existe
				if(agregaContacto($nombre_contacto,$tel_casa_contacto,$tel_cel_contacto,$iglesia_contacto,$conexion)){//si se agrega exitosamente
					$id_contacto = recuperaIDContacto($nombre_contacto,$tel_casa_contacto,$tel_cel_contacto,$iglesia_contacto,$conexion);
					//agrega al paciente
					if(addPaciente($nombre,$apaterno,$amaterno,$nacim,$telefono,$creyente,$iglesia,$pais,$estado,$municipio,$localidad,$calle,$evangelio,$sexo,$igcp,$id_contacto,$diagnostico,$fecha_r,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$requiere,$codo_piso,$axila_piso,$conexion)){
			$id=recuperaID($nombre,$apaterno,$amaterno,$nacim,$conexion);
			
			
			for($j=0;$j<numeroMedios($conexion);$j++){
				if(isset($_POST['medios'.$j]) && !empty($_POST['medios'.$j])){
					if(guardaOpinion($conexion,$_POST['medios'.$j],$id)){
					echo 'se guardo sin problemas<br>';
					}else{
				echo "error guardando la ifno: ".mysql_error();;
						}
				}else{
				echo "aqui no hago nada";
				}
			}
			
			
			//mensaje("Paciente agregado con éxito, ID: ".$id,"alta_paciente.php");
			if(addFotoPaciente($_FILES['foto'],$id)){
				echo 'se subió exitosamente la foto';
				}else{
					echo 'no se subió la foto';
					}		
				mensaje("Paciente agregado con éxito, ID: ".$id,"alta_paciente.php");
			}else{
				mensaje("Algo salió mal: ".mysql_error(),"alta_paciente.php");
				}
						
					}
				}
				
		}
		
		
		
function numeroMedios($conexion){
$sqlMedios="select * from difusion";
$resMedios=mysql_query($sqlMedios,$conexion);
return mysql_num_rows($resMedios);	
	}
function guardaOpinion($conexion,$mdif,$idPac){
	$sql="INSERT INTO `medio_difusion_x_paciente`(`paciente_id`, `difusion_id`) VALUES ('$idPac','$mdif')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}

function addPaciente($no, $ap, $am, $fech_nac,$tel,$desi,$igl,$pai,$est,$mun,$loc,$call,$evang,$sexo,$igcid,$contacto,$diagnostico,$fech_reg,$espalda,$cadera_rodilla,$rodilla_talon,$cintura,$altura,$peso,$requiere,$codo_piso,$axila_piso,$conexion){
	
$sql="INSERT INTO `paciente`(`nombre`, `apaterno`, `amaterno`, `fecha_nacimiento`, `telefono`, `pais`, `estado`, `municipio`, `localidad`, `calle`, `desicion`, `evangelio`, `sexo`, `iglesia_id`, `contacto_id`, `diagnostico_id`, `fecha_registro`, `espalda`, `cadera_rodilla`, `rodilla_talon`, `cintura`,altura,peso,solicitud,requiere,codo_piso,axila_piso) VALUES ('$no','$ap','$am','$fech_nac','$tel','$pai','$est','$mun','$loc','$call','$desi','$evang','$sexo','$igl','$contacto','$diagnostico','$fech_reg','$espalda','$cadera_rodilla','$rodilla_talon','$cintura','$altura','$peso','En espera','$requiere','$codo_piso','$axila_piso')";
	if(mysql_query($sql,$conexion)){
		return true;
		}else{
			return false;
			}
	}
function recuperaID($nombre,$apaterno,$amaterno,$nac,$con){
	$sql="SELECT * from paciente where nombre='$nombre' and apaterno ='$apaterno' and amaterno = '$amaterno' and fecha_nacimiento='$nac'";
	$res = mysql_query($sql,$con);
	if(mysql_num_rows($res)>0){
	$pac=mysql_fetch_object($res);
	return $pac->id;
	}else{
		return "No se ha encontrado el id, busque en la sección consultar";
		}
	}
function validaContacto($id_contacto,$conexion){
	$sql="SELECT * FROM contacto WHERE id='$id_contacto'";
	if(mysql_num_rows(mysql_query($sql,$conexion))){
	return true;
	}else{
		return false;
		}
	}
function agregaContacto($nombre,$tel_casa,$tel_celular,$id_iglesia,$conexion){
	$sql="INSERT INTO `contacto`(`nombre`, `tel_casa`, `tel_celular`, `iglesia_cristiana_id`) VALUES ('$nombre','$tel_casa','$tel_celular','$id_iglesia')";
	if(mysql_query($sql,$conexion)){
	return true;
	}else{
		echo 'error agregar contacto: '.mysql_error();
		return false;
		}
	}
	
function recuperaIDContacto($nombre,$num_casa,$num_cel,$igl,$conexion){
	$sql="SELECT * from contacto where nombre='$nombre' and tel_casa ='$num_casa' and tel_celular = '$num_cel' and iglesia_cristiana_id='$igl'";
	$res = mysql_query($sql,$conexion);
	if(mysql_num_rows($res)>0){
	$cont=mysql_fetch_object($res);
	return $cont->id;
	}else{
		return 1;//id de "no hay contacto"
		}

	}

function addFotoPaciente($archivo,$ife){
	$dir='../fotos_pacientes/'.$ife.'.jpg';
	if(move_uploaded_file($archivo['tmp_name'],$dir)){
		return true;
		}else{
			return false;
			}
	}

?>
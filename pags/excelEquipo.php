<?php
header("Content-type: application/vnd.ms-excel; name='excel'; ");//charset=utf-8
   header("Content-Disposition: filename=EquiposRegistrados".date('d.m.Y-h:i:s').".xls");
   header("Pragma: no-cache");
   header("Expires: 0");
include("conectar.php");
mysql_select_db($db,$conexion);
$sql=base64_decode($_GET['qry']);
//$obExcelEquipo = new PHPExcel();
//$archivo = "Datosdelosequipos";
//propiedades
//$obExcelEquipo->getProperties()->setCreator("YoEstoyContigo")->setLastModifiedBy("YoEstoyContigo")->setTitle("EquipoRegistrado");
//cabeceras
//va a llegar a H
/*$y = 1;
$obExcelEquipo->setActiveSheetIndex(0)
			->setCellValue("A".$y,"ID")	
			->setCellValue("B".$y,"Tipo")	
			->setCellValue("C".$y,"Estatus")	
			->setCellValue("D".$y,"Alto")
			->setCellValue("E".$y,"Ancho")
			->setCellValue("F".$y,"Profundo")
			->setCellValue("G".$y,"Observaciones")
			->setCellValue("H".$y,"Año en que se adquirió");
$obExcelEquipo->getActiveSheet()	
			  ->getStyle('A1:H1')
			  ->getFill()
			  ->setFillType(PHPExcel_Style_FILL::FILL_SOLID)
			  ->getStartColor()->setARGB('FFEEEEEE');*/

tabla($sql,$conexion);


function tabla($sql,$conexion){
$res = mysql_query($sql,$conexion);
echo '<table border="1">';
cabeceras();
while($rw=mysql_fetch_array($res)){
	//$y++;
	
	fila($rw['id_eq'],$rw['n_tipo'],$rw['estatus'],$rw['alto'],$rw['ancho'],$rw['profundo'],$rw['descripcion'],$rw['anio']);
	
	}
	
echo '<table>';
	}

function cabeceras(){
echo utf8_decode('
<th>ID</th>
<th>Tipo</th>
<th>Estatus</th>
<th>Alto</th>
<th>Ancho</th>
<th>Profundo</th>
<th>Observaciones</th>
<th>Año en que se adquirió</th>

<th>Foto del equipo</th>');
}
function fila($id,$tip,$est,$alt,$anch,$prof,$desc,$anio){
	echo utf8_decode('<tr><td>'.$id.'</td><td>'.$tip.'</td><td>'.$est.'</td><td>'.$alt.'</td><td>'.$anch.'</td><td>'.$prof.'</td><td>'.$desc.'</td><td>'.$anio.'</td></tr>');
	}


/*header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename='".$archivo."'");
header("Code-Control: max-age=0");

$objWriter = PHPExcel_IOFactory::createWriter($obExcelEquipo,'Excel');
$objWriter->save("php://output");
exit;*/
?>
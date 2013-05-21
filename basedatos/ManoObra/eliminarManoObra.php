<?php 
include '../conexion.php';

$con=ConectarBD();

$idManoObra=$_GET['idMano'];


$res=mysql_query("DELETE FROM namoobra WHERE idManoObra='".$idManoObra."'",$con);

if($res){
echo json_encode($response='Se Inserto Elimino Correctamente.');
}else{
	echo json_encode($response='Error Inesperado. ');
}

?>
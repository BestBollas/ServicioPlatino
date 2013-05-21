
<?php 
include '../conexion.php';

$con=ConectarBD();

$idManoObra=$_GET['idMano'];
$des=$_GET['des'];
$pre=$_GET['pre'];


$res=mysql_query("UPDATE namoobra SET descripcion='".$des."',precio=".$pre." WHERE idManoObra='".$idManoObra."'",$con);

if($res){
echo json_encode($response='Se Modifico Correctamente.');
}else{
	echo json_encode($response='Error Inesperado. ');
}

?>
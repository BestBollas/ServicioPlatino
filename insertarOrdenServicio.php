<?php

include 'conexion.php';

$con=ConectarBD();


$idOrdenservEnc=$_POST['idordenserenc'];
$idrefac=$_POST['idrefac'];
$idMano=$_POST['idMano'];
$cantida=$_POST['cantida'];
$precio=$_POST['precio'];
$importe=$_POST['importe'];

$res=mysql_query("insert into ordenserviciodet (idOrdenServDet,idOrdenServEnc,idRefacciones,idManoObra,cantidad,precio,importe) 
values('null','".$idOrdenservEnc."',".$idrefac.",'".$idMano."','".$cantida."','".$precio."','".$importe."')",$con);
if($res){
echo 'Se Inserto Corectamente.';
}else{
	echo 'Error Inesperado.';
}

?>
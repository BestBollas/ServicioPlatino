<?php

include '../conexion.php';

$con=ConectarBD();

$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];

$res=mysql_query("insert into namoobra (idManoObra,descripcion,precio) 
values('null','".$descripcion."',".$precio.")",$con);
if($res){
echo 'Se Inserto Corectamente.';
}else{
	echo 'Error Inesperado. ';
}

?>
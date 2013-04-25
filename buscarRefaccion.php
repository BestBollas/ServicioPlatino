<?php
include 'conexion.php';
$con=ConectarBD();
$nombre=$_GET['nombreRef'];
$result=mysql_query("select * from refacciones where nombreRefaccion='$nombre'")or die ("ERROR");
while($row=mysql_fetch_array($result))
		{
			$id=$row["idRefacciones"];
			$nombre=$row["nombreRefaccion"];
			$des=$row["descripcion"];
			$pres=$row["precio"];
 		}
if($result){
	$variable=array(
			$id,
			$nombre,
			$des,
			$pres			
		);
	echo json_encode($variable);
}else{
	echo json_encode($response='la Refaccion no fue encontrada');
}
?>
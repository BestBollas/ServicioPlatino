<?php
include 'conexion.php';
$con=ConectarBD();
$idclie=$_GET['idCliente'];
$result=mysql_query("select * from vehiculo where idCliente='$idclie'")or die ("ERROR");
while($row=mysql_fetch_array($result))
		{
			$placa=$row["placa"];
			$marca=$row["marca"];
			$modelo=$row["modelo"];
			$color=$row["color"];
			$anio=$row["anio"];
			$subMarca=$row["subMarca"];
 		}
	//getJSON
	
    
    
if($result){
	$variable=array(
			$placa,
			$marca,
			$modelo,
			$color,
			$anio,
			$subMarca
		);
	echo json_encode($variable);
}else{
	echo json_encode($response='El Usuario no fue encontrado');
}
?>


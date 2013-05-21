<?php
include 'conexion.php';
$con=ConectarBD();
$idclie=$_GET['idCliente'];
$result=mysql_query("select * from cliente where idCliente='$idclie'")or die ("ERROR");
while($row=mysql_fetch_array($result))
		{
			$nombre=$row["nombreCliente"];
			$aPaterno=$row["aPaterno"];
			$aMaterno=$row["aMaterno"];
			$tel=$row["telefono"];
			$cel=$row["celular"];
 		}
	//getJSON
	
    
    
if($result){
	$variable=array(
			$nombre,
			$aPaterno,
			$aMaterno,
			$tel,
			$cel
		);
	echo json_encode($variable);
}else{
	echo json_encode($response='El Usuario no fue encontrado');
}
?>


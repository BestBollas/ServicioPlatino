<?php
include 'conexion.php';
$con=ConectarBD();
$idMano=$_GET['idMano'];
$result=mysql_query("select * from namoobra where idManoObra='$idMano'")or die ("ERROR");
while($row=mysql_fetch_array($result))
		{
			$id=$row["idManoObra"];
			$des=$row["descripcion"];
			$pres=$row["precio"];
 		}
if($result){
	$variable=array(
			$id,
			$des,
			$pres			
		);
	echo json_encode($variable);
}else{
	echo json_encode($response='la Mano de Obra no fue encontrada');
}
?>
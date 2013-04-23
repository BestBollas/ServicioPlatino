<?php

include 'conexion.php';

$con=ConectarBD();


$numOr=$_POST['numOrde'];
$fechRecep=$_POST['fechRecep'];
$fechEntre=$_POST['fechEntrega'];
$hrRecep=$_POST['hrRecep'];
$hrEntrega=$_POST['hrEntrega'];
$status=$_POST['status'];
$empleAsig=$_POST['empAsig'];
$prediag=$_POST['preDiagnos'];
$diagnostico=$_POST['diagnos'];
$empReci=$_POST['empRecibio'];
$total=$_POST['totla'];
$res=mysql_query("insert into ordenservicioenc (idOrdenServEnc,numOrden,fechaRecep,fechaEntrega,horaRecep,horaEntrega,status,empAsig,prediagnostico,diagnostico,empRecibio,total) 
values('null','".$numOr."','".$fechRecep."','".$fechEntre."','".$hrRecep."','".$hrEntrega."','".$status."','".$empleAsig."','".$prediag."','".$diagnostico."','".$empReci."','".$total."')",$con);
if($res){
echo 'Se Inserto Corectamente.';
}
?>
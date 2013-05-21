<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Servico Platino</title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<?php
include ("conexion.php");
ConectarBD();
$usuario=$_POST['user'];
$password=$_POST['pass'];
$_SESSION['usuario']=$usuario;
echo $usuario;
echo $password;
$sql= "Select *  From empleado where usuario='$usuario' and password= '$password'";
//echo $sql;

$resultado=mysql_query($sql);

?> 

<?php
 $registro=mysql_fetch_array($resultado);
if($usuario==''&$password=='')
{
 $_SESSION['Aceptado']='no';
		  ?>
	<script>location.href="../index.html?Error=Usuario no Valido";</script>
			<?php
	}
	else
	{

		

	 if ($usuario==$registro['usuario']&$password==$registro['password'])
	  {
		  $_SESSION['Aceptado']='si';
		  ?>
				<script>location.href="../menu.php";</script>
           <?php
	   }
       else
       {
		    $_SESSION['Aceptado']='no';
		  ?>
	<script>location.href="../index.html?Error=Usuario no Valido";</script>
			<?php
       }
       
	}
  ?>
</body>
</html>
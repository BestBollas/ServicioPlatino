<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Servicio Platino</title>
<link rel="stylesheet" href="style.css"/>
</head>

<body>
<header><h1>Servicio Platino</h1></header>
<div class="container">
<table class="tabla"  border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td>
    <h2>Clientes</h2>
    </td>
    <td><form action="buscarcliente.php" method="post">
	<input type="search" name="busqueda2" id="busqueda2" results="5"/>
	<input id="submit" type="submit" name="btnBuscar" Value="Buscar"/>	  
    </form></td>
  </tr>
  <tr>
    <td width="120" rowspan="2" valign="top">
    
    <nav id='cssmenu'>
<ul>
   <li><a href='menu.php'><span>Inicio</span></a></li>
   <li class='has-sub'><a href='#'><span>Cliente</span></a>
        <ul>
            <li><a href='cliente.php'><span>Alta Cliente</span></a></li>
            <li><a href='vehiculo.php'><span>Alta Vehiculo</span></a></li>
            <li><a href='infoFiscal.php'><span>Informaicón Fiscal</span></a></li>
        </ul>
    </li>
    <li class='has-sub'><a href='#'><span>Venta</span></a>
        <ul>
           <li><a href='manoObra.php'><span>Catalogo mano de Obra</span></a></li>
           <li><a href='Refaccione.php'><span>Catalogo refacciones </span></a></li>
           <li><a href='Venta.php'><span>Venta de Refacciones</span></a></li>
           <li><a href='ordenServicio.php'><span>Orden Servicio</span></a></li>
        </ul>
    </li>
    <li class='has-sub'><a href='#'><span>Taller</span></a>
    <ul>
        <li><a href='gasto.php'><span>Gastos</span></a></li>
        <li><a href='empleado.php'><span>Empleados</span></a></li>
        <li><a href='proveedor.php'><span>Proveedores</span></a></li>
    </ul>
</ul>
</nav>
    </td>
    <td valign="top">
    <table cellspacing="2" cellpadding="2"><tr>
    <td><a href="nvocliente.php">Nuevo Cliente</a></td>
    </tr></table>
    <table border="0" cellspacing="0" cellpadding="2" align="center" class="container" frame="box" rules="all">
  
  
  
  <tr bgcolor="#FFFFFF" class="tabla">
    <td>IDCliente</td>
    <td>Nombre</td>
    <td>Apellidos</td>
    <td>Teléfono</td>
    <td>Celular</td>
    <td>Nextel</td>
    <td>Tel. Trabajo</td>
    <td>Email</td>
    <td>Dirección</td>
    <td>Colonia</td>
    <td>Estado</td>
  </tr>
  <?php 		  
		  include("basedatos/conexion.php");
conectarBD();

$result=mysql_query("select * from cliente ORDER BY idCliente desc ");

$encontrado="false";
while ($row=mysql_fetch_array($result))
{
	$idCliente=$row["idCliente"];
	$nombre=$row["nombre"];
	$in="Ver";
	$test="vercliente.php?idCliente=$idCliente";
?>
  <tr bgcolor="#CCCCCC" class="tabla">
    <td><a href="<?php echo $test ?>"><?php echo $row["idCliente"]?></a></td>
    <td><?php echo $row["nombreCliente"]?></td>
    <td><?php echo $row["aPaterno"]?> <?php echo $row["aMaterno"]?></td>
    <td><?php echo $row["telefono"]?></td>
    <td><?php echo $row["celular"]?></td>
    <td><?php echo $row["nextel"]?></td>
    <td><?php echo $row["telTrabajo"]?></td>
    <td><?php echo $row["email"]?></td>
    <td><?php echo $row["direccion"]?></td>
    <td><?php echo $row["colonia"]?></td>
    <td><?php echo $row["edoProv"]?></td>
  </tr>
  <?php
$encontrado="true";
}
mysql_free_result($result);
if($encontrado=="false")
{
	echo "NO HAY CLIENTES";
}

?>
</table></td>
  </tr>
</table>
</div>
<footer><h5>ServicioPlatino</h5></footer>
</body>
</html>
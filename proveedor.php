
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Servico Platino</title>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<header><h1>Servicio Platino</h1></header>
	<section class="container">
	<nav>
	<ul>
	<li><a href="menu.php">Inico</a></li>
	<li><a href="vehiculo.php">Vehiculos</a></li>
	<li><a href="cliente.php">Clientes</a></li>
	<li><a href="gasto.php">Gasto</a></li>
	<li><a href="empleado.php">Empleados</a></li>
	<li><a href="proveedor.php">Proveedores</a></li>
	<li><a href="manoObra.php">Mano Obra</a></li>
	<li><a href="Refaccione.php">Refacciones</a></li>
	<li><a href="venta.php">Venta Refacciones</a></li>
	<li><a href="ordenServicio.php">Orden de Servico</a></li>
	</ul>
	</nav>
			<article>
				<h2>proveedores</h2>
					<form action= "#"  method="post" >
						<input type="text"  name="placa" placeholder="Placa"  required />
						<input id="submit" type="submit" name="btnGuardar" Value="Guardar"/>
						<input id="submit" type="submit" name="btnEliminar" Value="Eliminar"/>
						<input id="submit" type="submit" name="btnModificar" Value="Modificar"/>
					</form>
			</article>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
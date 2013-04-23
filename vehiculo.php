
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
	<li><a href="infoFiscal.php">Información Fiscal</a></li>
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
				<h2>Vehiculos</h2>
					<form action= "#"  method="post" >
						<input type="text"  name="placa" placeholder="Placa" autofocus required />
						<input type="text"  name="marca" placeholder="Marca" autofocus required />
						<input type="text"  name="modelo" placeholder="Modelo" autofocus required />
						<input type="text"  name="color" placeholder="Color" autofocus required />
						<input type="text"  name="anio" placeholder="Año" autofocus required />
						<input type="text"  name="submarca" placeholder="Sub-Marca" autofocus required />
						<input type="text"  name="fechaAlta" placeholder="Fecha Elaboración" autofocus required />
						<input type="text"  name="cliente" placeholder="Cliente" autofocus required />
						<input id="submit" type="submit" name="btnGuardar" Value="Guardar"/>
						<input id="submit" type="submit" name="btnEliminar" Value="Eliminar"/>
						<input id="submit" type="submit" name="btnModificar" Value="Modificar"/>
					</form>
			</article>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
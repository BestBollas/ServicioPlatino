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
				<h2>Empleados</h2>
					<form action= "#"  method="post" >
						<input type="text"  name="nomCliente" placeholder="Nombre Cliente" autofocus required />
						<input type="text"  name="aPaterno" placeholder="Apellido Paterno" autofocus required />
						<input type="text"  name="aMaterno" placeholder="Apellido Materno" autofocus required />
						<input type="text"  name="tel" placeholder="Telefono" autofocus required />
						<input type="text"  name="cel" placeholder="Celular" autofocus required />
						<input type="text"  name="e-mail" placeholder="E-Mail" autofocus required />
						<input type="text"  name="direcc" placeholder="Dirección" autofocus required />
						<input type="text"  name="colonia" placeholder="Colonia" autofocus required />
						<input type="text"  name="edoProv" placeholder="Estado/Provincia" autofocus required />
						<input type="text"  name="tipo" placeholder="Tipo" autofocus required />
						<input type="text"  name="usuario" placeholder="Usuario" autofocus required />
						<input type="text"  name="pass" placeholder="Password" autofocus required />
						<input id="submit" type="submit" name="btnGuardar" Value="Guardar"/>
						<input id="submit" type="submit" name="btnEliminar" Value="Eliminar"/>
						<input id="submit" type="submit" name="btnModificar" Value="Modificar"/>
					</form>
			</article>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
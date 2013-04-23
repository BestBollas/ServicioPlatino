
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
		<article><form action= "#"  method="post" >
				<label for="busqueda2">Búsqueda con histórico</label>
				<input type="search" name="busqueda2" id="busqueda2" results="5"/>
			<input id="submit" type="submit" name="btnGuardar" Value="Guardar"/>
			</form>
			</article>
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
			<article><input type="text" name="diasemana" id="diasemana" list="dias"/>
    <datalist id="dias">
        <option value="Lunes" />
        <option value="Martes" />
        <option value="Miércoles" />
        <option value="Jueves" />
        <option value="Viernes" />
        <option value="Sábado" />
        <option value="Domingo" />
    </datalist></article>
    <article>
    	<form action= "#"  method="post" >
    <label for="correo">Correo electrónico</label>
		<input id="correo" name="correo" type="email" />
		<label for="website">Sitio web</label>
		<input id="website" name="website" type="url" />
		<label for="telefono">Número de teléfono</label>
		<input id="telefono" name="telefono" type="tel" required/>
		<label for="cantidad">¿Cuanto?</label>
		<input id="cantidad" name="cantidad" type="range" />
		<label for="numero">¿Cuanto?</label>
<input id="numero" name="numero" type="number" min="5" max="25" />
<label for="calendario">Fecha de inicio</label>
<input id="calendario" name="calendario" type="date" />
<label for="cp">Código Postal</label>
<input id="cp" name="cp" pattern="[\d]{5}(-[\d]{4})" />
<input id="submit" type="submit" name="btnModificar" Value="Modificar"/>
</form>
</article>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
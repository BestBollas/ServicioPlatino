
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
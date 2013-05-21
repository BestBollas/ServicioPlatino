
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
						<input class="button" type="submit" name="btnGuardar" Value="Guardar"/>
						<input class="button" type="submit" name="btnEliminar" Value="Eliminar"/>
						<input class="button" type="submit" name="btnModificar" Value="Modificar"/>
					</form>
			</article>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
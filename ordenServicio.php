<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Servico Platino</title>
<link rel="stylesheet" href="css/style.css"/> 
<script src="js/jquery-1.9.0.js" type="text/javascript"></script>
<script src="js/funciones.js" type="text/javascript"></script>
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script>
	$(document).on('ready',function(){	
		
		ocultarflecha();
		loadPage();
		//Variables------------------------------------------------------------
		var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
		var solonumeros = /^[0-9_\.\-]+$/;
		var now =new Date();
		$('#dpfecRe').val(new Date().toJSON().slice(0,10));
		var hractual=now.getHours()+":"+now.getMinutes()+":00";
		$("#hrRece").val(hractual);	
		var matriz=new Array(fila);
		var matrizMano=new Array(filaMano);
		totalOrdenServio=0;
		totaldelservicio=$("#txtTot").val();
		var ct=0;
		var c1=0;
		var c2=0;
		var a=0;
		var b=0;
		var flag=4;
		var flagMano=4;
		var total=0;
		var totalMano=0;
		var pos=0;
		var desc=$("#txtParte");
		var canti=$("#txtCanti");
		var cantiMano=$("#txtCantiMano");
		var cmbValue;
		var comboTxt;
		var cmbValueMano;
		var comboTxtMano;
		var tabla=[];
		var tablaMano=[];
		var idrefa;
		var idmanoobra;
		var desrefa;
		var no=0;
		var tot=0;
		var nomano=0;
		var totmano=0;
		var idempleasig;
		var nomempleasig;
		var idcliente;
		var fila=0;
		var columna=0;
		var filaMano=0;
		var columnaMano=0;
		var w=$("#add");
		var w2=$("#addMano");
					function totalorse(d,f,t){
			if(t==1){
				a=d;
				b=0;
				c2=0;
				c1=a+b;
				ct+=c1+c2;
			}else{
				b=f;
				a=0;
				c1=0;
				c2=a+b;
				ct+=c1+c2;
			}
			
			}
		//--terminan las Variables----------------------------------------------
		//funciones elementos

	$('#numOrden').bind('keyup', function (e) {
  			var key = e.keyCode || e.which;
  			$num=$("#numOrden").val();
  				if (key === 13) {
    				alert("Aqui va una funcion que busca todo: "+$num);   
  					};
			});   
				
	$("#btnCance").click(function (){
	validar();
	//$("#servi").focus().after("<span class='error2'>Ingrese un mensaje</span>");
	});
	$("#txtNumOrden").keyup(function(){		
		if( solonumeros.test($(this).val())){
			$(".error").fadeOut();	
			return false;
		}		
	});

		$('#servi').on('click',function(){				
				ocultarmenus();
				$("#submit").slideDown();
				ocultarflecha();
				$("#serviflecha").fadeIn();
		});

		$('#cClie').on('click',function(){	
				ocultarmenus();
				$("#mCliente").slideDown();
				ocultarflecha();
				$("#clieflecha").fadeIn();
				
		});
		$('#cVehi').on('click',function(){
				ocultarmenus();
				$("#mVehiculo").slideDown();
				
				ocultarflecha();
				$("#vehiflecha").fadeIn();
		});
		$('#cObserva').on('click',function(){
				ocultarmenus();
				$("#mObser").slideDown();
				ocultarflecha();
				$("#obserflecha").fadeIn();
		});
		$('#cRefa').on('click',function(){
				ocultarmenus();
				$("#mRefacc").slideDown();
				ocultarflecha();
				$("#refaflecha").fadeIn();
		});
		$('#cManoObra').on('click',function(){
				ocultarmenus();
				$("#mManoObra").slideDown();

				ocultarflecha();
				$("#manoflecha").fadeIn();
				
		});
		
			$('#cmbManoObra').change(function(){
		    var selectedOption = $(this).find('option:selected');
		    cmbValueMano = $(selectedOption).text();
		    comboTxtMano = $(selectedOption).val();
		    datosManoObra(comboTxtMano);
		    w2.fadeOut(10);
		}).change();

		$('#dias').change(function(){
		    var selectedOption = $(this).find('option:selected');
		    cmbValue = $(selectedOption).text();
		    comboTxt = $(selectedOption).val();
		    datosRefacciones(cmbValue);
		    w.fadeOut(10);
		}).change();

		$('#emple').change(function(){
		    var selectedOption2 = $(this).find('option:selected');
		    idempleasig=$(selectedOption2).val();
			nomempleasig=$(selectedOption2).text();
		}).change();
		$('#nomclienteOrden').change(function(){
		    var selectedOption3 = $(this).find('option:selected');
		    idcliente=$(selectedOption3).val();
		    datosCliente(idcliente);
		    datosVehiculo(idcliente);
		}).change();

		$("#addMano").click(function() {
			
			var n = $('thead tr th', $("#mitablaMano")).length;
 			var tds = '<tr>';
 			nomano++;
 			totmano=precioManoObra*cantiMano.val();
			matrizMano[filaMano]=new Array(5);		
			matrizMano[filaMano][columnaMano]=idmanoobra;
			columnaMano++;
			matrizMano[filaMano][columnaMano]=cmbValue;
			columnaMano++;			
			matrizMano[filaMano][columnaMano]=cantiMano.val();
			columnaMano++;
			matrizMano[filaMano][columnaMano]=precioManoObra;
			columnaMano++;
			matrizMano[filaMano][columnaMano]=totmano;

			columnaMano=0;
			filaMano++;
 			if(nomano!=0){
			tablaMano[pos]=nomano;
			pos=pos+1;
			tablaMano[pos]=cmbValueMano;
			pos=pos+1;
			tablaMano[pos]=cantiMano.val();
			pos=pos+1;
			tablaMano[pos]=precioManoObra;
			pos=pos+1;
			tablaMano[pos]=totmano;
			pos++;
 			}
				for(var i = 0; i < n; i++){
					s=(tablaMano.length-n)+i;
  					tds += '<td>'+tablaMano[s]+'</td>';
  					
					}
				tds += '</tr>';
			$("#mitablaMano").append(tds);
				for(var q=0;q<=tablaMano.length;q++){
			if(q==flagMano){
				var pre=tablaMano[flagMano];	
				totalMano=(totalMano)+(tablaMano[flagMano]);
				flagMano+=5;
			}else{
				}

			}
			totalorse(tot,totmano,2);
				$("#txtTot").val(ct);
		});


				$("#add").click(function() {
			
			var n = $('thead tr th', $("#mitabla")).length;
 			var tds = '<tr>';
 			no++;
 			tot=comboTxt*canti.val(); 			
			matriz[fila]=new Array(5);		
			matriz[fila][columna]=idrefa;
			columna++;
			matriz[fila][columna]=cmbValue;
			columna++;			
			matriz[fila][columna]=canti.val();
			columna++;
			matriz[fila][columna]=comboTxt;
			columna++;
			matriz[fila][columna]=tot;

			columna=0;
			fila++;
 			if(no!=0){
			tabla[pos]=no;
			pos=pos+1;
			tabla[pos]=cmbValue;
			pos=pos+1;
			tabla[pos]=canti.val();
			pos=pos+1;
			tabla[pos]=comboTxt;
			pos=pos+1;
			tabla[pos]=tot;
			pos++;
 			}
				for(var i = 0; i < n; i++){
					s=(tabla.length-n)+i;
  					tds += '<td>'+tabla[s]+'</td>';
  					
					}
				tds += '</tr>';
			$("#mitabla").append(tds);
				for(var q=0;q<=tabla.length;q++){
			if(q==flag){
				//var pre=tabla[flag];	
				total=(total)+(tabla[flag]);
				flag+=5;
				
			}else{
				}
			}
				totalorse(tot,totmano,1);
				$("#txtTot").val(ct);
			
		});
			
			$("#btnGuardar").on('click',function(){
		insertarOrdenEnc();
		});
	});
</script>
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
		<section id="menuSer">
			<article id="servi">
				<span class='error2' id="servierror"></span>
				<span class="flecha" id="serviflecha"></span>
				<label>Orden servicio</label>
				<img src="imag/icon/tools.ico"/>
			</article>
			<article id="cClie">
				<span class='error2'></span>
				<span class="flecha" id="clieflecha"></span>
				<label>Cliente</label>
				<img src="imag/icon/user.ico" />
				
			</article>
			<article id="cVehi">
				<span class='error2'></span>
				<span class="flecha" id="vehiflecha"></span>
				<label>Vehiculo</label>
				<img src="imag/icon/home.ico" />
				
			</article>
			<article id="cObserva">
				<span class='error2'></span>
				<span class="flecha" id="obserflecha"></span>
				<label>Observaciones</label>
				<img src="imag/icon/save.ico" />
				
			</article>
			<article id="cRefa">
				<span class='error2'></span>
				<span class="flecha" id="refaflecha"></span>
				<label>Refacciones</label>
				<img src="imag/icon/add.ico" />
				
			</article>
			<article id="cManoObra">
				<span class='error2'></span>
				<span class="flecha" id="manoflecha"></span>
				<label>Mano de Obra</label>
				<img src="imag/icon/accept.ico" />
				
			</article>
		</section>
		
		<section id="contenidoServ">
			<article id="buscar">
			
				<label for="numOrden">Numero de Servico</label>
				<input type="search" name="numOrden" id="numOrden" results="5"/>			
			
			</article>
			
			<article id="submit">
				
					<input type="text"  name="Orden Servicio" title="Orden Servicio" required id="txtNumOrden" />
					<label>Fecha Recepcion:</label>
					<input  name="calendario" type="date" placeholder="Fecha Recepcion" id="dpfecRe"/>
					<label>Fecha Entrega (Aprox):</label>
					<input  name="calendario" type="date" placeholder="Fecha Entrega (Aprox)" id="dpfechEntre"/>
					<label>Estado:</label>
					<input type="text" name="estado" id="txtestadocarro"  list="estado" placeholder="Estado del Carro"/>
    					<datalist id="estado">
        					<option value="En Proceso" />
        					<option value="Terminado" />
        					<option value="Por Pagar" />
    					</datalist>
    				<label>Persona Asignado:</label>
					<?php
				include('basedatos/conexion.php');
				conectarBD();
				$resultado=mysql_query("select*from empleado where tipo='ayudante'")or die ("ERROR");
				?>
				
				    <select id="emple">
				    	<option value="0">Seleccionar...</option>
				    		<?php
    					while($fila=mysql_fetch_array($resultado)){
        					echo "<option value='".$fila["idEmpleado"]."'>".$fila["nombreEmp"]."</option>";
			  				   }
        					 mysql_free_result($resultado);
						?>
				    </select>
					<input type="time" name="horaRece" placeholder="Hora Recepción" title="Formato 24hrs. Ejemplo:13:00:00"  id="hrRece"/>
					<input type="time" name="horaEntre" placeholder="Hora Entrega Aprox." title="Formato 24hrs. Ejemplo:13:00:00"  id="hrEntre"/>
			</article>
			<article id="mCliente">
					<label>Nombre del Cliente:</label>
						<?php
				$result=mysql_query("select * from cliente")or die ("ERROR");
				?>
    					<select id="nomclienteOrden" title="Nombre del Cliente">
				    	<option value="0">Seleccionar...</option>
				    		<?php
    					while($fila=mysql_fetch_array($result)){
        					echo "<option value='".$fila["idCliente"]."'>".$fila["nombreCliente"]." ".$fila["aPaterno"]." ".$fila["aMaterno"]."</option>";
			  				   }
        					 mysql_free_result($resultado);
						?>
				    </select>
					<label>Telefono del Cliente:</label>
						<input type="text"  id="txtTelOrden" placeholder="Telefono" />
					<label>Celular del Cliente:</label>
						<input type="text"  id="txtCelOrden" placeholder="Celular" />
					<label>Observaciones del Cliente:</label>
						<input class="txtObser" type="text"  name="txtObserOrden" placeholder="Observaciones" />
			</article>
			<article id="mVehiculo">
					<label>Placa:</label>
						<input type="text"  id="txtPlacaOrden" placeholder="Placa" />
					<label>Marca:</label>
						<input type="text"  id="txtMarcaOrden" placeholder="Marca" />
					<label>Sub-Marca:</label>
						<input type="text"  id="txtSubMarcaOrden" placeholder="Sub-Marca" />
					<label>Modelo:</label>
						<input type="text"  id="txtModeloOrden" placeholder="Modelo" />
					<label>Color:</label>
						<input type="text"  id="txtColorOrden" placeholder="Color" />
					<label>Año:</label>
						<input type="text"  id="txtAnioOrden" placeholder="Año" />
			</article>
			<article id="mObser">
				<label>Pre-Diagnostico:</label>
						<input class="txtObser" type="text"  name="txtPreDiagOrden" placeholder="Lo que dice el cliente que tiene" id="preDiagnos"/>
				<label>Observaciones del Cliente:</label>
						<input class="txtObser" type="text"  name="txtDiagOrden" placeholder="Lo que dice el mecanico que tiene" id="diagnos"/>
			</article>
			<article id="mRefacc">
				<?php
				$result=mysql_query("select*from refacciones")or die ("ERROR");
				?>
				
				    <select id="dias">
				    	<option value="0">Selecciona...</option>
				    		<?php
    					while($row=mysql_fetch_array($result)){
        					echo "<option value='".$row["precio"]."'>".$row["nombreRefaccion"]."</option>";
			  				   }
        					 mysql_free_result($result);
						?>
				    </select>
				    <label>Selecciona la cantidad</label>
				<input type="text"  id="txtCanti" name="txtCanti" title="Seleciona la cantidad"/>
				<input id="add" type="submit" name="btnInser" class="button" Value="Añadir Fila"/>
    			<table border="1" id="mitabla">  
    					<thead>  
        					<tr>  
            					<th>No</th>  
            					<th width="250">Nombre</th>  
            					<th>Cantidad</th> 
            					<th>Precio</th> 
            					<th>Total</th> 
        					</tr>  
    					</thead>  
    					<tbody>  
        					<tr>
        					</tr>  
    					</tbody>  
				</table>  
			</article>
			<article id="mManoObra"><h1>Mano de Obra</h1>
				<?php
				$result=mysql_query("select*from namoobra")or die ("ERROR");
				?>
				
				    <select id="cmbManoObra">
				    	<option value="0">Selecciona...</option>
				    		<?php
    					while($row=mysql_fetch_array($result)){
        					echo "<option value='".$row["idManoObra"]."'>".$row["descripcion"]."</option>";
			  				   }
        					 mysql_free_result($result);
						?>
				    </select>
				    <label>Selecciona la cantidad</label>
				<input type="text"  id="txtCantiMano" name="txtCanti" title="Seleciona la cantidad"/>
				<input id="addMano" type="submit" class="button" Value="Añadir Fila"/>
    			<table border="1" id="mitablaMano">  
    					<thead>  
        					<tr>  
            					<th>No</th>  
            					<th width="250">Nombre</th>  
            					<th>Cantidad</th> 
            					<th>Precio</th> 
            					<th>Total</th> 
        					</tr>  
    					</thead>  
    					<tbody>  
        					<tr>
        					</tr>  
    					</tbody>  
				</table>  
			</article>
			
		</section>
		<section id="imporServ">
			<article>
				<label>Sub Total: </label>
				<span id="txtTotal"></span>
				<input name="numero" type="text" id="txtTot" value="0"/>
				<label>Importe iva: </label>
				<input name="numero" type="text" />
				<label>Total: </label>
				<input name="numero" type="text" />
			</article>
			<article >
				<input id="btnGuardar" class="button" type="submit" name="btnGuardar" Value="Guardar"/>
				<input id="btnCance" class="button" type="submit" name="btnCance" Value="Cancelar"/>
				<input id="btnModifi" class="button" type="submit" name="btnModifi" Value="Modificar"/> 
			</article>
			
		</section>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
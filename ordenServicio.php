<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8"/>
<title>Servico Platino</title>
<link rel="stylesheet" href="css/style.css"/> 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
	$(document).on('ready',function(){	
		/*$.ajax({
			data: "buscador="+$('#rol').val(), 
			type: "GET",
			dataType: "json",
			url: "/JQ_BuscaPaciente.php",
			success: function(data){
			Resultado(data);
			}*/
		var now =new Date();
		$('#dpfecRe').val(new Date().toJSON().slice(0,10));
		var hractual=now.getHours()+":"+now.getMinutes()+":00";
		$("#hrRece").val(hractual);	
		var flag=4;
		var total=0;
		var pos=0;
		var desc=$("#txtParte");
		var canti=$("#txtCanti");
		var cmbValue;
		var comboTxt;
		var tabla=[];
		var a =[];
		var miArray = [ [],[]];
		var no=0;
		var tot=0;
		var idempleasig;
		var nomempleasig;
		var idcliente;

		var os=$('#submit').css("display");
		var c=$('#mCliente').css("display");
		var v=$('#mVehiculo').css("display");
		var obs=$('#mObser').css("display");
		var re=$('#mRefacc').css("display");
		var mo=$('#mManoObra').css("display");

		$('#servi').on('click',function(){
				$("#submit").slideDown();
				$("#mCliente").slideUp();
				$("#mVehiculo").slideUp();
				$("#mObser").slideUp();
				$("#mRefacc").slideUp();
				$("#mManoObra").slideUp();
		});

		$('#cClie').on('click',function(){	
				$("#submit").slideUp();
				$("#mCliente").slideDown();
				$("#mVehiculo").slideUp();
				$("#mObser").slideUp();
				$("#mRefacc").slideUp();
				$("#mManoObra").slideUp();			
		});
		$('#cVehi').on('click',function(){
			$("#submit").slideUp();
				$("#mCliente").slideUp();
				$("#mVehiculo").slideDown();
				$("#mObser").slideUp();
				$("#mRefacc").slideUp();
				$("#mManoObra").slideUp();
		});
		$('#cObserva').on('click',function(){
				$("#submit").slideUp();
				$("#mCliente").slideUp();
				$("#mVehiculo").slideUp();
				$("#mObser").slideDown();
				$("#mRefacc").slideUp();
				$("#mManoObra").slideUp();
			
		});
		$('#cRefa').on('click',function(){
				$("#submit").slideUp();
				$("#mCliente").slideUp();
				$("#mVehiculo").slideUp();
				$("#mObser").slideUp();
				$("#mRefacc").slideDown();
				$("#mManoObra").slideUp();
		});
		$('#cManoObra').on('click',function(){
				$("#submit").slideUp();
				$("#mCliente").slideUp();
				$("#mVehiculo").slideUp();
				$("#mObser").slideUp();
				$("#mRefacc").slideUp();
				$("#mManoObra").slideDown();
		});

		$('#dias').change(function(){
		    var selectedOption = $(this).find('option:selected');
		    cmbValue = $(selectedOption).text();
		    comboTxt = $(selectedOption).val();
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
		
		function datosVehiculo(id){
			$.getJSON("buscarVehiculo.php",{
					idCliente:id,
				},function(response){
					$("#txtPlacaOrden").val(response[0]);
					$("#txtMarcaOrden").val(response[1]);
					$("#txtSubMarcaOrden").val(response[2]);
					$("#txtModeloOrden").val(response[3]);
					$("#txtAnioOrden").val(response[4]);
					$("#txtColorOrden").val(response[5]);
			}), 'json';
		}

		function datosCliente(id){
			$.getJSON("buscarCliente.php",{
					idCliente:id,
				},function(response){
					//var nomComple=response[0]+" "+response[1]+" "+response[2];
					//$('#nomclienteOrden').val(nomComple);
					$('#txtTelOrden').val(response[3]);
					$('#txtCelOrden').val(response[4]);
			}), 'json';
			}
		$("#add").click(function() {
			/*jQuery.each( tabla, function( index, value ) {
  			console.log( "index", index, "value", value );
  			animales[index]=value;
			});*/
			var n = $('thead tr th', $("#mitabla")).length;
 			var tds = '<tr>';
 			no++;
 			tot=comboTxt*canti.val();
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
				var pre=tabla[flag];	
				total=(total)+(tabla[flag]);
				flag+=5;
				$("#txtTot").val(total);	
			}else{
				}
			}
		});
			
				/*
			miArray[0][pos]=no;
			miArray[0][pos+1]=cmbValue;
			miArray[0][pos+1]=desc.val();
			miArray[0][pos+1]=canti.val();
			miArray[0][pos+1]=comboTxt;
			miArray[0][pos+1]=tot;
			
				 for(fila=0;fila<miArray.length;fila++){
				for(colum=0;colum<miArray[fila].length;colum++){
						console.log('Mi Array: '+miArray[fila][colum]+'\t');
				}
			}
			*/
			$("#btnGuardar").on('click',function(){
			$.post("insertOrdenEnc.php",{
					numOrde:$("#txtNumOrden").val(),
					fechRecep:$("#dpfecRe").val(),
					fechEntrega:$("#dpfechEntre").val(),
					hrRecep:hractual,
					hrEntrega:$("#hrEntre").val(),
					status:$("#txtestadocarro").val(),
					empAsig:idempleasig,
					preDiagnos:$("#preDiagnos").val(),
					diagnos:$("#diagnos").val(),
					empRecibio:idempleasig,
					totla:$("#txtTot").val()
				},function(result){
				alert(result.trim());
			});
		});
	});
</script>
</head>
<body>
	
	<header><h1>Servicio Platino</h1></header>
	 
	<section class="container">
		<nav >
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
		<section id="menuSer">
			<article id="servi">
				<label>Orden servicio</label>
				<img src="imag/icon/tools.ico" />
			</article>
			<article id="cClie">
				<label>Cliente</label>
				<img src="imag/icon/user.ico" />
			</article>
			<article id="cVehi">
				<label>Vehiculo</label>
				<img src="imag/icon/home.ico" />
			</article>
			<article id="cObserva">
				<label>Observaciones</label>
				<img src="imag/icon/save.ico" />
			</article>
			<article id="cRefa">
				<label>Refacciones</label>
				<img src="imag/icon/add.ico" />
			</article>
			<article id="cManoObra">
				<label>Mano de Obra</label>
				<img src="imag/icon/accept.ico" />
			</article>
		</section>
		
		<section id="contenidoServ">
			<article id="buscar">
			<form action= "#"  method="post" >
				<label for="numOrden">Numero de Servico</label>
				<input type="search" name="numOrden" id="numOrden" results="5"/>			
			</form>
			</article>

			<article id="submit">
				
					<input type="text"  name="Orden Servicio" placeholder="Orden Servicio"  id="txtNumOrden" />
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
				include('conexion.php');
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
			</article>
		</section>
		<section id="imporServ">
			<article>
				<label>Sub Total: </label>
				<span id="txtTotal"></span>
				<input name="numero" type="text" id="txtTot"/>
				<label>Importe iva: </label>
				<input name="numero" type="number" />
				<label>Total: </label>
				<input name="numero" type="number" />
			</article>
			<article>
				<input id="btnGuardar" class="button" type="submit" name="btnGuardar" Value="Guardar"/>
				<input id="btnCance" class="button" type="submit" name="btnCance" Value="Cancelar"/>
				<input id="btnModifi" class="button" type="submit" name="btnModifi" Value="Modificar"/>
			</article>
		</section>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
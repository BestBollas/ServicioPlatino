function validar(){

		$(".error").remove();		
		if( $("#txtNumOrden").val() == "" || !solonumeros.test($("#txtNumOrden").val())){
			$("#txtNumOrden").focus().after("<span class='error'>Ingrese Numero de Orden</span>");

			return false;
		}else if( $("#txtTot").val() == "" || !solonumeros.test($("#txtTot").val()) ){
			$("#txtTot").focus().after("<span class='error'>Ingrese el no puede estar en 0</span>");
			return false;
		}else if( $("#txtParte").val() == ""){
			$("#txtParte").focus().after("<span class='error'>Ingrese un asunto</span>");
			return false;
		}else if( $("#txtCanti").val() == "" ){
			$("#txtCanti").focus().after("<span class='error'>Ingrese un mensaje</span>");
			
			
			return false;
		}
		
				}
					function ocultarflecha(){
				$("#serviflecha").fadeOut();
				$("#clieflecha").fadeOut();
				$("#vehiflecha").fadeOut();
				$("#obserflecha").fadeOut();
				$("#refaflecha").fadeOut();
				$("#manoflecha").fadeOut();
			}
			function ocultarmenus(){
				$("#submit").slideUp();
				$("#mCliente").slideUp();
				$("#mVehiculo").slideUp();
				$("#mObser").slideUp();
				$("#mRefacc").slideUp();
				$("#mManoObra").slideUp();

			}
			function datosManoObra(id){
		 	$.getJSON("basedatos/buscarManoObra.php",{
				idMano:id,
				},function(respuesta){
					idmanoobra=respuesta[0];
					precioManoObra=respuesta[2];
					if(idmanoobra==null){
						$("#addMano").fadeOut(10);					
						}
						else{
						$("#addMano").fadeIn(10);							
						}
			}),'json';
		 }

		function datosRefacciones(nombre){
			$.getJSON("basedatos/buscarRefaccion.php",{
				nombreRef:nombre,
				},function(respuesta){
					idrefa=respuesta[0];				
					if(idrefa==null){
						$("#add").fadeOut(10);					
						}
						else{
						$("#add").fadeIn(10);							
						}
					
			}),'json';
		}
			function datosCliente(id){
			$.getJSON("basedatos/buscarCliente.php",{
					idCliente:id,
				},function(response){
					$('#txtTelOrden').val(response[3]);
					$('#txtCelOrden').val(response[4]);
			}), 'json';
			}


			function loadPage(){
		$("#serviflecha").fadeIn();
		$("#submit").slideDown();
		}
			function datosVehiculo(id){
			$.getJSON("basedatos/buscarVehiculo.php",{
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


				function insertarOrdenEnc(){
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
					total:$("#txtTot").val(),
					idclien:idcliente
				},function(result){
				alert(result.trim());
			});
					for(var f=0;f<matriz.length;f++){
				
				$.post("insertarOrdenServicio.php",{					
				idordenserenc:$("#txtNumOrden").val(),
				idrefac:matriz[f][0],
				idMano:0,
				cantida:matriz[f][2],
				precio:matriz[f][3],
				importe:matriz[f][4]
			},function(result){
				
			});
				for(var c=0;c<matriz[f].length;c++){
					//console.log(matriz[f][c]);			
				}
				//alert("Se inserto Correctamente.");
			}

				//para obtener las refacciones de la orden de servicio  este es el querySELECT * FROM `ordenserviciodet` WHERE idOrdenServEnc=1 and  idRefacciones!=0
				for(var f=0;f<matrizMano.length;f++){
				$.post("insertarOrdenServicio.php",{					
				idordenserenc:$("#txtNumOrden").val(),
				idrefac:0,
				idMano:matrizMano[f][0],
				cantida:matrizMano[f][2],
				precio:matrizMano[f][3],
				importe:matrizMano[f][4]
			},function(result){
				
			});
				/*for(var c=0;c<matrizMano[f].length;c++){
					console.log(matrizMano[f][c]);			
				}*/
				//alert("Se inserto Correctamente.");
			}
			alert("Se inserto Correctamente.");
			location.reload();
			ocultarflecha();
				}
			
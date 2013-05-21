function insertar(des,pre){
$.post("basedatos/ManoObra/insertarManoObra.php",{
					descripcion:des,
					precio:pre
				},function(result){
				alert(result.trim());
				 loadPage();
			}),'json';

}
function modificar(id,dess,pree){
	
$.getJSON("basedatos/ManoObra/modificarManoObra.php",{
				idMano:id,
				des:dess,
				pre:pree
				},function(respuesta){
					alert(respuesta);
					 loadPage();
			}),'json';

}
function eliminar(id){
$.getJSON("basedatos/ManoObra/eliminarManoObra.php",{
				idMano:id,
				},function(respuesta){
					alert(respuesta);
					 loadPage();
			}),'json';

}
function buscar(id){
$("#btnGuardar").hide();	
$.getJSON("basedatos/buscarManoObra.php",{
				idMano:id,
				},function(respuesta){
					$("#descrip").val(respuesta[1]);
					$("#precio").val(respuesta[2]);
			}),'json';
		 } 

		 function validar(){
		var solonumeros = /^[0-9_\.\-]+$/;
		$(".error").remove();	
		if( $("#descrip").val() == ""){
			$("#descrip").focus().after("<span class='error'>Ingrese la descripción del servicio</span>");

			return false;
		}else if( $("#precio").val() == "" || !solonumeros.test($("#precio").val()) ){
			$("#precio").focus().after("<span class='error'>Ingrese el Precio</span>");
			return false;
		}else 	
			
			return true;
		}
				


					function loadPage(){
		location.reload();
		//$("#submit").slideDown();
		}

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<title>Servico Platino</title>
<link rel="stylesheet" href="css/style.css"/>
<script src="js/jquery-1.9.0.js" type="text/javascript"></script>
<script src="js/funcionesManoObra.js" type="text/javascript"></script>
<!--<script src="http://code.jquery.com/jquery-1.9.1.js"></script>-->
<script>
  $(document).on('ready',function(){  
      $("#formMano").hide();
      var a;
      var solonumeros = /^[0-9_\.\-]+$/;
    $("#mitablaMano tr").click(function(){
        //$(this).css('background-color','green');
        //$(this).css('color','white');
        a= $(this).closest('tr').children('td:first').text(); 
        buscar(a);
        $("#formMano").fadeIn(1000);
    });
$("#btnNuevo").click(function(){
  $("#formMano").show();
  $("#btnGuardar").show(100);
  $("#btnEliminar").fadeOut(100);
  $("#btnModificar").fadeOut(100);
});
$("#precio").keyup(function(){   
    if( solonumeros.test($(this).val())){
      $(".error").fadeOut();  
      return false;
    }   
  });

$("#descrip").keyup(function(){   
      $(".error").fadeOut();  
  });
    $("#btnGuardar").click(function(){
    if(validar()==true){
        
       var des=$("#descrip").val();
    var pre=$("#precio").val();
      insertar(des,pre);
    }else{
      
    }
    });

    $("#btnEliminar").click(function(){
      eliminar(a);
    
    });

      $("#btnModificar").click(function(){
        if(validar()==true){ 
       var des=$("#descrip").val();
        var pre=$("#precio").val();
          modificar(a,des,pre);
    }else{
      
    }
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
			<article id="formMano">
				<h2>Mano Obra</h2>
						<input type="text"  id="descrip" placeholder="Descripción" autofocus required />
						<input type="text"  id="precio" placeholder="Precio" autofocus required />
						<input class="button" type="submit" id="btnGuardar" Value="Guardar"/>
						<input class="button" type="submit" id="btnEliminar" Value="Eliminar"/>
						<input class="button" type="submit" id="btnModificar" Value="Modificar"/>
			</article>
      <article>
        <input class="button" type="submit" id="btnNuevo" Value="Nuevo Regristro"/>
        <h1>lista de mano de obras</h1>
        <table id="mitablaMano">
          <thead>  
                  <tr>  
                      <th width="50">ID</th>  
                      <th width="350">Descripción</th>  
                      <th width="100">precio</th> 
                  </tr>  
          </thead>
  <?php       
      include("basedatos/conexion.php");
conectarBD();

$result=mysql_query("select * from namoobra ORDER BY idManoObra ");

$encontrado="false";
while ($row=mysql_fetch_array($result))
{
  $idManoObra=$row["idManoObra"];
  $descrip=$row["descripcion"];
  $precio=$row["precio"];
  $test="class='link'"; 
?>
  <tr >
    <td <?php echo $test ?>><?php echo $row["idManoObra"]?></td>
    <td><?php echo $row["descripcion"]?></td>
    <td><?php echo $row["precio"]?></td>
  </tr>
  <?php
$encontrado="true";
}
mysql_free_result($result);
if($encontrado=="false")
{
  echo "NO HAY CLIENTES";
}

?>
</table>
      </article>
	</section>
	<footer><h3>@BestBollas</h3></footer>
</body>
</html>
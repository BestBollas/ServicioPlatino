<?php session_start() ?>
<!DOCTYPE HTML> <!-- Anotación de HTML5 con el DOCTYPE -->
<html>
<head>
<title>Login</title>
<meta charset="utf-8" /> <!-- Codificación UTF-8 -->
<link rel="stylesheet" href="css/style.css"/> 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script>
 $(document).on('ready',function(){
$("#enviar").click(function(){ <!-- Cuando cliquemos en el boton con el id "enviar" hara lo que pongamos dentro de los corchetes -->  
 
if($("#pass1").val() == ""){ <!-- Comprobamos que la contraseña no esté vacía -->
alert("Tienes que poner una contraseña");
return; <!-- Evitamos que la función se siga ejecutando si la contraseña está vacía -->
}else if($("#user").val() == ""){
alert("El usuario no puede estar vacio");
return;
}
var array = new Object(); <!-- Construimos un objeto con la información a enviar -->
array['tag'] = "login";
array['usuario'] = $("#user").val(); <!-- Cogemos el valor del input con id user -->
array['password'] = $("#pass1").val(); <!-- Cogemos el valor del input pass1 y lo encriptamos -->  
$.ajax({ <!-- Comenzamos la función con ajax --> 
type: "POST", <!-- Enviamos los datos por POST -->
data: array, <!-- Metemos los datos del array para enviarlos -->
url: '/ServicioPlatino/consulta.php', <!-- Le ponemos la ruta del PHP al que le enviamos los datos -->
success: function(data) { <!-- En caso de que los datos hayan llegado correctamente al destinatario, y haya contestado, se ejecutará esta función -->
var res = jQuery.parseJSON(data); <!-- Recogemos los datos que devuelve el PHP en formato JSON -->
if(res.error_msg != ""){ <!-- Si el PHP ha devuelto algún error controlado por nosotros -->
alert(res.error_msg);
}else{
<?php 
$_SESSION['login'] = "OK"; 
?>
window.location.href = "portada.html"; <!-- Si todo ha ido correctamente, nos dirigimos a otra página ya con el login -->
}
},
error: function(e){ <!-- Si no ha podido conectar con el servidor -->
alert("Error en el servidor, por favor, intentalo de nuevo mas tarde");
}
}); <!-- fin ajax -->
 
}); <!-- fin onclick -->
 });
</script>
 
</head>
 
<body>
 
<p>Nombre de usuario</p> 
 
<input id="user" type="text"> 
 
<p>Contraseña</p>
 
<input id="pass1" type="password">
 
<button id="enviar">Enviar</button>
 
</body>
 
</html>
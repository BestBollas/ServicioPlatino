<?php
 
if (isset ($_POST['tag']) && $_POST['tag'] != '') { //Comprobamos que haya algún tag por parte del cliente
 
$tag = $_POST['tag'];
 
  
 
//Incluimos el fichero de base de datos
 
require_once 'DB_Functions.php';
 
  
 
// Array de respuesta
 
$response = array (
 
"tag" => $tag,
 
"success" => 0,
 
"error" => 0,
 
"error_msg" => ""
 
);
 
  
 
// Login
 
if ($tag == 'login') {
 
// Recogemos los parametros enviados desde el cliente
 
$usuario = $_POST['usuario'];
 
$password = $_POST['password'];
 
  echo $password;
 
// Conectamos a la base de datos
 
conectar();
 
// Llamamos a la función de login situada en el fichero DB/DB_Functions.php. Devuelve un booleano
 
$user = login($usuario, $password);
 
  
 
// Si el login ha ido bien, y por tanto devuelve verdadero
 
if ($user) {
 
$response["success"] = 1; //Guardamos el código de respuesta
 
echo json_encode($response); //Devolvemos la respuesta en JSON
 
} else {
 
$response["error"] = 4; //Guardamos el código de respuesta
 
$response["error_msg"] = "Usuario y/o contrase&ntilde;a incorrecta"; //Guardamos el mensaje de error
 
echo json_encode($response); //Devolvemos la respuesta en JSON
 
}
 
} else {
 
echo "Invalid Request"; //Si no ha venido en el POST lo que esperabamos
 
}
 
  
 
} else {
 
echo "Acceso denegado"; //Si no hemos puesto ningún tag
 
}
 
?>
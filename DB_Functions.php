<?php
 
function conectar() {
 
$db_host = "localhost"; //host donde se encuentra la base de datos
 
$db_user = "root"; //Usuario de la base de datos
 
$db_password = "best"; //Contraseña de la base de datos
 
$db_database = "servicoplatino"; //Nombre de base de datos
 
    return new PDO('mysql:host='.$db_host.';dbname='.$db_database.';charset=latin1', $db_user, $db_password); //Cadena de conexión al PDO
 
}
 
/**
 * Encripta el password
 */
 
function encryptedPassword($password) {
 
$sec_pass = "aff8a8ff0=(F8fs0+fas_";
 
$encrypted_password = sha1($password . $sec_pass); // encriptamos la contraseña con sha1 más una cadena para evitar la fuerza bruta. Recordamos que además está encriptada en md5 a través de JSON
 
  
 
return $encrypted_password; //Retornamos la contraseña encriptada
 
}
 
  
 
/**
* Comprueba si existe el usuario
*/
 
function login($usuario, $password) {
 
  
 
$db = conectar(); //Conectamos a la base de datos
 
$respuesta = false; //Creamos una respuesta por defecto
 
  
 
$encrypted_password = encryptedPassword($password); //Encriptamos la contraseña
 
$sql = "SELECT usuario from empleado WHERE usuario = :usuario AND password = :password"; //Creamos la select
 
  
 
$query = $db->prepare($sql); //Preparamos la SELECT, de ésta manera evitamos SQL Injection
 
$query-> bindParam(':usuario', $usuario); //Substituimos las variables de la SELECT
 
$query-> bindParam(':password', $encrypted_password);
 
$query-> execute(); //Ejecutamos la consulta
 
$contador = $query -> rowCount(); //Esta función devuelve el número de resultados que ha devuelto la SELECT
 
$usuarioDB = $query-> fetch(PDO::FETCH_ASSOC); // Guardamos los registros que devuelve la SELECT en un array asociativo
 
  
 
if ($contador > 0) { //Si ha devuelto algún resultado
 
  
 
if ($result == 1) {
 
$respuesta['usuario'] = $usuarioDB['usuario']; //Guardamos la respuesta
 
}
 
}
 
  
 
return $respuesta; //Devolvemos el usuario logueado
 
}
 
  
 
/**
 * Comprueba si existe el usuario
 */
 
function existeUsuario($usuario) {
 
  
 
$db = conectar();
 
$sql = "SELECT usuario from empleado WHERE usuario = :usuario";
 
  
 
$query = $db->prepare($sql);
 
$query-> bindParam(':usuario', $usuario);
 
$query-> execute();
 
$contador = $query -> rowCount();
 
  
 
if ($contador > 0) {
 
// el usuario existe
 
return true;
 
} else {
 
return false;
 
}
 
}
 
  
 
?>
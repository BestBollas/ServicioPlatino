<?PHP
function ConectarBD()
{
error_reporting(0);
$conex= mysql_connect('localhost','root','best');
if (!$conex)
{
    die('Error al conectarse al servidor de MySQL: ' . mysql_error() .'<br> Revisa lo siguiente:<br>1. Que ya hayas creado tu base de datos <br>2. Que tu nombre de usuario sea correcto <br>3. Que tu password sea correcto');
}
//echo 'Ahora estas conectado a MySQL';

$db_selected = mysql_select_db ('servicoplatino', $conex);
if (!$db_selected)
{
    die ('No se pudo seleccionar la base de datos : ' . mysql_error() .'<br> Revisa lo siguiente:<br>1. El nombre de tu base de datos<br>');
}
return($conex);
}

function Partes($nombre,$cantidad){
conectarBD();
$num=0;
$total=0;
$result=mysql_query("select*from refacciones where nombreRefaccion='$nombre'")or die ("ERROR");
	while($row=mysql_fetch_array($result))
		{
			$num++;
			$nombre=$row["nombreRefaccion"];
			$descripcion=$row["descripcion"];
			$precio=$row["precio"];
			$total =$precio * $cantidad;
 		}

			mysql_free_result($result);
	return array($num,$nombre,$descripcion,$precio,$cantidad,$total);
}
?>





 <?php

$host = "168.197.48.110";
$usr = "c2110488_PrIspc";
$clave = "98movadoDO";
$db = "c2110488_PrIspc";

$mysqli = new mysqli($host,$usr,$clave,$db);
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//echo $mysqli->host_info . "\n";
		
/*
function cnn(){
$host = "168.197.48.110";
$usr = "c2110488_PrIspc";
$clave = "98movadoDO";
$db = "c2110488_PrIspc";
	
if(!($id = mysql_connect($host,$usr,$clave))){
	echo "Error al conectarse al servidor" .$host. "con el nombre de usuario".$usr;
	exit();
}
if(!(mysql_select_db($db,$id))){
    echo "Error seleccionando la base de datos".$db;
}
return $id;
	}
*/

?>
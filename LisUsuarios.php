<!DOCTYPE html>
<html lang="es">
	<!-- caracter en lenguaje humano -->
  <meta charset="UTF-8">
	<!-- Vista distintas ventanas -->
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
	<!-- Informacion de la pagina -->
  <meta name="Sistema web para gimnasio" content="Pagina de inicio"/>
	<!-- Etiquetas para los bucadores -->
  <meta name="keywords" content="Sistema web, gimnasio, entrenamiento"/>
	
<head>
	<!-- Script JS -->
	<script src="../dir/js/bootstrap.min.js" ></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="js/Archivo.js"></script>
	<script type="text/javascript" src="js/funcionesGrupo6.js"></script>
	<!-- Estilo Alertas -->
	<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	
	<!-- CSS -->
	<link rel="stylesheet" href="../dir/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estiloHome.css">
	<link rel="stylesheet" href="css/Formregistro.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	
	<!-- Logo Icono -->
    <link href="img/LogoSF.png" rel="icon" type="image/png">
	
<title>Usuario</title>

</head>

<body id="estiloBody">

	<header class="menu">
				<nav>
					<ul>
    <li class="CssImage"><img class="CssImage" src="img/LogoSF.png" width="70" height="70" alt="Imagen logo"/></li>
		<li><a href="index.html"> Home </a></li>
		<li><a href="sobre_nosotros.html">Equipo</a></li>
		<li><a href="contacto.html"> Contacto </a></li>
   	<li><a href="form_ingreso.html"> Login </a></li>
    <li><a href="help.html"> Ayuda </a></li>
       
		</ul>
	</nav>
	</header>
  <main>
	
  <div class="container estiloHome">
    <div class="row">
      
      <div class="col">
       
    
  </div>


    <br>
    <section>
    <div class="container ">

      <div class="col CentroHome" >


		<?php

include("Conexion/conexion.php");
  
if(isset($_POST['txtUsuario'])){

    // Variables $_POST[]
    $u = $_POST['txtUsuario'];
    $c = MD5($_POST['txtClave']); // La función MD5() estará encriptando lo ingresado para comparar con lo guardado
 
	

    if($u == "" || $_POST['txtClave'] == null){ // Validamos que ningún campo quede vacío
echo "<script>alert('Error: usuario y/o clave vacios!!');</script>"; // Se utiliza Javascript dentro de PHP
echo "<script type=\"text/javascript\">
window.location.href = \"http://planidear.com.ar/a5-g6-gimnasio/form_ingreso.html\";
</script>";
    }else{
        // Cadena de SQL
echo "<script>swal (\"¡Operacion exitosa!\");</script>";
        $sql = "SELECT * FROM `PrUsuario`";


        // Ejecuto cadena query()
        if(!$consulta = $conexion->query($sql)){
echo "ERROR: no se pudo ejecutar la consulta!";
        }else{

            // Cuento registros obtenidos del select. 
            // Como el nombre de usuario en la clave primaria no debería de haber mas de un registro con el mismo nombre.
			
$mysqli = new mysqli("168.197.48.110","c2110488_PrIspc","98movadoDO","c2110488_PrIspc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
			
$Clave=$_POST['txtClave'];
$query = $mysqli -> query ("SELECT * FROM `PrUsuario` WHERE `Clave` LIKE '$Clave'");
			
            $filas = mysqli_num_rows($query);

            // Comparo cantidad de registros encontrados
            if($filas == 0){
echo "<script>alert('Error: usuario y/o clave incorrectos!!');</script>";
echo "<script type=\"text/javascript\">
window.location.href = \"http://planidear.com.ar/a5-g6-gimnasio/form_ingreso.html\";
</script>";	
				
            }else{
$usuario=$_POST['txtUsuario'];
//echo"Usuario : $usuario";

	
$mysqli1 = new mysqli("168.197.48.110","c2110488_PrIspc","98movadoDO","c2110488_PrIspc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$Clave=$_POST['txtClave'];
$query1 = $mysqli1 -> query ("SELECT * FROM `PrUsuario` WHERE `Clave` LIKE '$Clave'");

  while ($fila = mysqli_fetch_array($query1))

{

	 
//echo "<TR>\n";
echo "<td>".'<img src="'.$fila['Imagen'].'" width="100" heigth="100"/>'."</td>"."<br>";
echo "<h2>"." Id: ".$fila['IdUsuario']."</h2>";
echo "<h1>"." Usuario: ".$fila['usuario']."</h1>";
echo "<h2>"." DNI: ".$fila['DNI']."</h2>";
echo "<h2>"." Nombre: ".$fila['Nombre']."</h2>";
echo "<h2>"." Apellido: ".$fila['Apellido']."</h2>";

//echo "</TR>\n";
}
mysqli_close($mysqli1);

            }

        }
    }
}
	

  ?>  
				   
</table>

      </div>
  
  </main>
  
<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
	<footer .estiloFooter>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
     
        
          <img src="img/LogoSF.png" alt="" width="25" height="25" class="d-inline-block align-text-top" href="index.html">
		<a href="index.html"> Home </a>
         <a href="sobre_nosotros.html">Equipo</a>
        <a href="contacto.html"> Contacto </a>
        <a href="form_ingreso.html"> Login </a>
        <a href="help.html"> Ayuda </a>
      </div>
    </nav>

  </footer>
</body>

</html>
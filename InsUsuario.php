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
 <title>Registrado - a5-g6-gimnasio</title>
</head>

<body id="estiloBody">
  

	<header class="menu">
				<nav>
					<ul>
        <li class="CssImage"><a href="index.html"><img class="CssImage" src="img/LogoSF.png" width="70" height="70" alt="Imagen logo"/></a></li>
  		<li><a href="index.html"> Home </a></li>
		<li><a href="sobre_nosotros.html">Equipo</a></li>
		<li><a href="contacto.html"> Contacto </a></li>
        <li><a href="form_ingreso.html"> Login </a></li>
		<li><a href="alta_cliente.html"> Alta Cliente </a></li>
		<li><a href="help.html"> Ayuda </a></li>
       
		</ul>
	</nav>
	</header>
	
<div id="idbreadcrumbs1">
   		<a href="index.html"> Home </a> 
		<a href="sobre_nosotros.html"> Equipo </a>
		<a href="contacto.html"> Contacto </a>
		<a href="form_ingreso.html"> Login </a>
		<a href="form_registro.html"> Registro </a>
		<a href=""> InsUsuario </a>
</div>

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
  
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_iamgen=$_FILES['imagen']['type'];
$tamagno_imegen=$_FILES['imagen']['size'];


$carpetas_destino='ftp.planidear.com.ar' . $nombre_imagen;

move_uploaded_file($_FILES['imagen']['tmp_name'],$nombre_imagen);


$IdUsuario=(NULL);
$DNI=$_POST['NumDni'];
$Imagen = 'http://planidear.com.ar/a5-g6-gimnasio/'.$nombre_imagen;
$Nombre=$_POST['txtNombre'];
$Apellido=$_POST['txtApellido'];
$Correo=$_POST['Correo'];
$Usuario=$_POST['txtUsuario'];
$Clave=$_POST['txtClave'];
$FechaNac=$_POST['txtFechaNac'];
$FecActual=date('Y-m-d');
$Dif=$FecActual-$FechaNac;


if($Dif>=18){
	
	
	echo '<script type="text/javascript">';
    echo 'EresMayoEdad();';
    echo '</script>';
		  
		  }
		  else {
			  
	echo '<script type="text/javascript">';
    echo 'EresMenorEdad();';
    echo '</script>'; 
			  


$cabeceras = 'From: gymsistem<gymsistem@planidear.com.ar>';
$enviado = mail($Correo, $Nombre, "Usteded es menor de edad",$cabeceras);

if ($enviado)
  echo 'Email enviado correctamente: '.$Correo ."<br>";
else
  echo 'Error en el envío del email';
			  

		  }
		  
include("Conexion/conexion.php");
	
$res=mysqli_query($con,"SELECT * FROM `PrUsuario`");

$insertarUsuario = "INSERT INTO `PrUsuario` (`IdUsuario`, `DNI`, `Nombre`, `Apellido`, `Imagen`, `usuario`, `Clave`, `FechaNac`, `Correo`, `Fecha`) VALUES (NULL, '$DNI', '$Nombre', '$Apellido', '$Imagen', '$Usuario', '$Clave', '$FechaNac', '$Correo', CURRENT_TIMESTAMP);";

$ejecutar_insertar=mysqli_query($mysqli,$insertarUsuario);

mysqli_close($mysqli);
$cabeceras = 'From: gymsistem<gymsistem@planidear.com.ar>';
$enviado = mail($Correo, $Nombre, "REGISTRADO!!",$cabeceras);

if ($enviado)
  echo 'Email REGISTRADO!!: '.$Correo."<br>";
else
  echo 'Error en el envío del email';

echo "<script>swal (\"¡iNGRESASTE!\");</script>";

include("Conexion/conexion.php");

$Clave=$_POST['txtClave'];
$query1 = $mysqli -> query ("SELECT * FROM `PrUsuario` WHERE `Clave` LIKE '$Clave'");

  while ($fila = mysqli_fetch_array($query1))

{

echo "<td>".'<img src="'.$fila['Imagen'].'" width="100" heigth="100"/>'."</td>"."<br>";
echo "<h2>"." Id: ".$fila['IdUsuario']."</h2>";
echo "<h1>"." Usuario: ".$fila['usuario']."</h1>";
echo "<h2>"." DNI: ".$fila['DNI']."</h2>";
echo "<h2>"." Nombre: ".$fila['Nombre']."</h2>";
echo "<h2>"." Apellido: ".$fila['Apellido']."</h2>";

}
mysqli_close($mysqli);
	

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
<br>
<br>
<br>
<br>
		
	<footer>
    <nav class="navbar navbar-light bg-light quitarMargenInferior">
      <div class="container-fluid">

          <img src="img/LogoSF.png" alt="" width="25" height="25" class="d-inline-block align-text-top" href="index.html">
        <a href="index.html">Home</a>
        <a href="sobre_nosotros.html">Equipo</a>
        <a href="contacto.html"> Contacto </a>
        <a href="form_ingreso.html"> Login </a>
        <a href="help.html"> Ayuda </a>
      </div>
    </nav>

  </footer>
  <!-- Minified JS library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
  <script src="dir/js/bootstrap.min.js" ></script>
  <script type="text/javascript" src="js/Archivo.js"></script>
</body>

</html>
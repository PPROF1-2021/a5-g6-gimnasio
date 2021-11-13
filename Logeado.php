<!DOCTYPE html>
<html lang="es">
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
  <meta name="Sistema web para gimnasio" content="Pagina de inicio"/>
  <meta name="keywords" content="Sistema web, gimnasio, entrenamiento"/>
<head>
	 <title>LisUsuario</title>


 
<link rel="stylesheet" href="../dir/css/bootstrap.min.css">
	<script src="../dir/js/bootstrap.min.js" ></script>
  <script src="js/archivo.js" ></script>
	
	<!-- Compiled and minified Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<!-- Minified JS library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" href="css/estiloHome.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
	<script type="text/javascript" src="js/Archivo.js"></script>

<meta charset="utf-8">
	
	<link href="img/LogoSF.png" rel="icon" type="image/png"">
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

      <div class="col" >


<table border=1 align="center">
<tr>
<td border=1 colspan="4" align="center" bgcolor="#E6E7E8">


  <p><B>Usuarios</B></p>
  </td>
</tr>
<TR bgcolor="#E6E7E8">
<TD><B>IdUsuario</B></TD>
<TD><B>DNI</B></TD>
<TD><B>Nombre</B></TD>
<TD><B>Apellido</B></TD>

</TR>

<p>
					   

  <?php

$mysqli = new mysqli("168.197.48.110","c2110488_PrIspc","98movadoDO","c2110488_PrIspc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$query = $mysqli -> query ("SELECT * FROM `PrUsuario`");


  while ($fila = mysqli_fetch_array($query))

{

	  
echo "<TR>\n";
//echo "<td>".'<img src="'.$fila['Imagen'].'" width="50" heigth="50"/>'."</td>\n";
echo "<td>".$fila['IdUsuario']."</td>\n";
echo "<td>"." | ".$fila['DNI']."</td>\n";
echo "<td>"." | ".$fila['Nombre']."</td>\n";
echo "<td>"." | ".$fila['Apellido']."</td>\n";

echo "</TR>\n";
}
						 
//echo "</table>";

?>
				   
</table>
      </div>
      
  </main>
  
<br>
	<footer>
    <nav class="navbar navbar-light bg-light">
      <div class="container-fluid">
      
        <a class="navbar-brand" href="#">
          <img src="img/LogoSF.png" alt="" width="25" height="25" class="d-inline-block align-text-top" href="index.html">
          Home
        </a>
        <a href="sobre_nosotros.html">Equipo</a>
        <a href="contacto.html"> Contacto </a>
        <a href="form_ingreso.php"> Login </a>
        <a href="help.html"> Ayuda </a>
      </div>
    </nav>

  </footer>
</body>

</html>
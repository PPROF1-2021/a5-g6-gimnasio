<?php 
$mysqli = new mysqli("168.197.48.110","c2110488_PrIspc","98movadoDO","c2110488_PrIspc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
$nombre_imagen=$_FILES['imagen']['name'];
$tipo_iamgen=$_FILES['imagen']['type'];
$tamagno_imegen=$_FILES['imagen']['size'];


$carpetas_destino='ftp.planidear.com.ar' . $nombre_imagen;

move_uploaded_file($_FILES['imagen']['tmp_name'],$nombre_imagen);


$IdUsuario=(NULL);

$Imagen = 'http://planidear.com.ar/a5-g6-gimnasio/'.$nombre_imagen;
$Nombre=$_POST['txtNombre'];
$Apellido=$_POST['txtApellido'];
$Usuario=$_POST['txtUsuario'];
$Clave=$_POST['txtClave'];

	
$conInser=mysqli_connect("168.197.48.110","c2110488_PrIspc","98movadoDO","c2110488_PrIspc");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  
$res=mysqli_query($con,"SELECT * FROM `PrUsuario`");



$insertarUsuario = "INSERT INTO `PrUsuario` (`IdUsuario`, `DNI`, `Nombre`, `Apellido`, `Imagen`, `usuario`, `Clave`) VALUES (NULL, '', '$Nombre', '$Apellido', '$Imagen', '$Usuario', '$Clave');";

$ejecutar_insertar=mysqli_query($conInser,$insertarUsuario);

echo "<script>alert('REGISTRADO!!');</script>";
echo "<script type=\"text/javascript\">
window.location.href = \"http://planidear.com.ar/a5-g6-gimnasio/form_ingreso.php\";
</script>";	
?>

<!doctype html>
<html lang="es">
  <meta charset="UTF-8">
  <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">
  <meta name="Sistema web para gimnasio" content="Pagina de inicio"/>
  <meta name="keywords" content="Sistema web, gimnasio, entrenamiento"/>
  <head>
    <title>Contacto</title>
      <link rel="stylesheet" href="dir/css/bootstrap.min.css">
      <!-- Compiled and minified Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      
      <link rel="stylesheet" href="css/estiloHome.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100&display=swap" rel="stylesheet">
      

      <meta charset="utf-8">
    
      <link href="img/LogoSF.png" rel="icon" type="image/png">
  </head>
  <body id="estiloBody">

  </body>
</html>
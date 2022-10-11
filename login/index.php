<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>VaidrollTeam Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
<div>
<form method="post" action="index.php" name="vaidrollteam">

<table>

<tr><td style="background-color:#4e1470;"><label><center>Login</center></label></td></tr>
<tr><td><center><img src="icono.png"></center></td></tr>
<tr><td><input type="text" name="txtusuario" placeholder="&#128273; Ingresar usuario" required /></td></tr>
<tr><td><input type="password" name="txtpassword" placeholder="&#128274; Ingresar Contraseña" required /> </td></tr>
<tr><td><input type="submit" value="Ingresar" name="btningresar"/></td></tr>

<br>
<tr><td><a href="registrar.php" style="float:right">Crear una cuenta</a></td></tr>

</table>

</form>
</div>
</body>
</html>

<?php
include('conexion.php');

session_start();
if(isset($_SESSION['nombredelusuario']))
{

	/*header('location: ../formulario_registro/admin/altadetienda.php');*/
}

if(isset($_POST['btningresar']))
{
	
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

	
$query = mysqli_query($conn,"SELECT * FROM login WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);


if($nr == 1)
{
	$_SESSION['nombredelusuario']=$nombre;

  /*header("Location: ../carpeta-pagina tienda/configurar pagina");*/
  /*header("Location: ../formulario_registro/admin/altadetienda.php");*/
	header("Location: ../admin/admin/inventario.php");
  


}


else if ($nr == 0) 
{
	echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}


} 


?>
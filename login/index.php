<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title> Login</title>
    <link rel="stylesheet" href="login.css">

  </head>
  <body>
<div>
<form method="post" action="index.php" name="vaidrollteam">

<table>

<tr><td style="background-color: #CBB8D3;"><label><center>Login</center></label></td></tr>
<tr><td><center><img src="icono.png"/></center></td></tr>
<tr><td><input type="text" name="txtusuario" placeholder="&#128273; Ingresar usuario" required /></td></tr>
<tr><td><input type="password" name="txtpassword" placeholder="&#128274; Ingresar Contraseña" required /> </td></tr>
<tr><td><input type="submit" value="Ingresar" name="btningresar"/></td></tr>

<br>
<tr><td><a href="registrar.php"><center>Crear una cuenta</center></a></td></tr>

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
	header('location: listar.php');
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
	header("Location: listar.php");
}
else if ($nr == 0) 
{
	//echo "<script> alert('Usuario no existe');window.location= 'index.php' </script>";
}

} 
?>
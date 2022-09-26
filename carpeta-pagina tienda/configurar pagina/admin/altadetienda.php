<?php include '../conexion/conexion.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ecommerce</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <style>
      	body{
      		padding-bottom: 10px;
      	}
      </style>
</head>
<body class="bg-light">

	<nav class="navbar navbar-expand-lg navbar-light bg-info">
	
		
			<form method="POST">
<tr><td colspan='2' align="center"><input type="submit" value="Cerrar sesión" name="btncerrar" /></td></tr>
</form>
		</div>
	</nav>
	

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">configurar página</h4></div>
			<div class="card-body">




<link rel="stylesheet" href="../login/login.css">

<table>

<?php
if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<tr><td colspan='2' align='center'><h1>Bienvenido: $usuarioingresado </h1></td></tr>";
}
else
{
	header('location: ../../login/index.php');
}
?>



<?php 

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: ../../login/index.php');
}

?>
</table>


				<form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
				<div ><h5>Logo</h5></div>
				
					<div class="form-group">
						<input type="file" name="logo"  class="form-control">
					</div>
					
                    <div class="form-group">
						<select name="fondo" required class="form-control">
							<option value="" disabled="" selected="">Elige un color de fondo</option>
							<option value="coral">coral</option>
                           <option value="teal">verde azulado</option>
                           <option value="gray">gris</option>
                           <option value="lightpink">rosa claro</option>
                          <option value="burlywood">marron claro</option>
                           <option value="bisque">cremita</option>
                          <option value="silver"> gris claro</option>
                          <option value="white"> blanco</option>
						</select>

					</div>
                  
					<div ><h5>Video/imagen</h5></div>
					<div class="form-group">
						<input type="file" name="videoimagen" class="form-control">
					</div>
				
					<button type="submit" class="btn btn-info">Guardar</button>

				</form>
			</div>
		</div> 
<!--
		<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">Ultimo registro</h4></div>
				<div class="card-body">
					
					<table class="table">
						<thead>
							<th>Foto</th>
							<th>Nombre de usuario</th>
							<th>cuil</th>
							<th>telefono</th>
							<th>Categoria</th>
								<th>nombre de tienda</th>
							<th>direccion.</th>
							<th></th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<?php 
							$sel = $con->prepare("SELECT * FROM inventario ORDER BY id DESC limit 1 ");
							$sel->execute();
							  	while ($f = $sel->fetch()) {  ?>
							  	<tr>
							  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50" ></td>
							  		<td><?php echo $f['nombredeusuario'] ?></td>
							  		<td><?php echo $f['cuil'] ?></td>
							  		<td><?php echo $f['telefono'] ?></td>
							  		<td><?php echo $f['categoria'] ?></td>
							  		<td><?php echo $f['nombretienda'] ?></td>
							  		<td><?php echo substr($f['direccion'] , 0, 100) ?>...</td>
							  		<td><a href="agregar_imagenes.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-success btn-sm"><span class="material-icons">add</span></a></td>
							  		<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-primary btn-sm"><span class="material-icons">edit</span></a></td>
							  		<td><a href="#" class="btn btn-outline-danger btn-sm" onclick="bootbox.confirm('Seguro que desea realizar esta accion', function(result){ if (result == true){ location.href='eliminar_producto.php?clave=<?php echo $f['clave'] ?>&foto=<?php echo $f['foto'] ?>&pag=inventario.php';} })"><span class="material-icons" >clear</span></a></td>
							  	</tr>
							  	<?php 
							  	}
							  	$sel = null;
							  	$con = null;
							  	 ?>
						</tbody>
					</table>

				

				</div>
			</div>
-->




</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
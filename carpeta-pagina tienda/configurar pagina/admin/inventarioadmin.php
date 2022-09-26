


<?php include '../conexion/conexion.php'; ?>
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
	

		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav mr-auto">
			
				<li class="nav-item dropdown" >
					<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a href="../admin/categorias.php?opc=GENERAL" class="dropdown-item">GENERAL</a>
						<a href="../admin/categorias.php?opc=MODA" class="dropdown-item">MODA</a>
						<a href="../admin/categorias.php?opc=ELECTRONICA" class="dropdown-item">ELECTRONICA</a>
						<a href="../admin/categorias.php?opc=JOYERIA" class="dropdown-item">JOYERIA</a>
						<a href="../admin/categorias.php?opc=RELOJES" class="dropdown-item">RELOJES</a>
						<a href="../admin/categorias.php?opc=HOGAR" class="dropdown-item">HOGAR</a>
						<a href="../admin/categorias.php?opc=ZAPATOS" class="dropdown-item">ZAPATOS</a>
					</div>
				</li>
			</ul>
			<button class="btn btn-dark" id="logout" >Salir</button>
		</div>
	</nav>

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
							  		<td><a href="agregar_imagenes.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-success btn-sm"><span class="material-icons">A</span></a></td>
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



</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
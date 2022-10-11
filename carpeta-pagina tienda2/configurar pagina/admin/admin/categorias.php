<?php include '../extend/header.php';
$opc = htmlentities($_GET['opc']);
 ?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">Inventario <?php echo $opc ?></h4></div>
				<div class="card-body">
					
						<table class="table">
						<thead>
						   <th>Foto</th>
							<th>nombre de usuario</th>
							<th>Cuil</th>
							<th>telefono</th>
							<th>categoria</th>
							<th>direccion</th>
							<th>nombre tienda</th>
						     <th>logo</th>	
							<th>imagen de fondo</th>
				           <th></th>
						   <th></th>
						   <th></th>
						</thead>
						<tbody>
		                 
						 <?php 
							if ($opc == 'aprobado') {
							$sel = $con->prepare("SELECT * FROM inventario WHERE aprobado = ? ORDER BY id ");
							$sel->execute();
							}
							else{
								$sel = $con->prepare("SELECT * FROM inventario WHERE categoria = ? ORDER BY id ");
								$sel->execute(array($opc));
								}

							  	while ($f = $sel->fetch()) {  ?>
							  		<tr>
							  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50" ></td>
							  		<td><?php echo $f['nombredeusuario'] ?></td>
							  		<td><?php echo $f['telefono'] ?></td>
							  		<td><?php echo $f['categoria'] ?></td>
							  		<td><?php echo substr($f['direccion'] , 0, 100) ?>...</td>
								    <td><?php echo $f['nombretienda'] ?></td>
									<td><?php echo $f['logo'] ?></td>
									<td><?php echo $f['imagenfondo'] ?></td>
							  		<td><a href="agregar_imagenes.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-success btn-sm"><span class="material-icons">add</span></a></td>
							  		<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-primary btn-sm"><span class="material-icons">edit</span></a></td>
							  		<td><a href="#" class="btn btn-outline-danger btn-sm" onclick="bootbox.confirm('Seguro que desea realizar esta accion', function(result){ if (result == true){ location.href='eliminar_producto.php?clave=<?php echo $f['clave'] ?>&foto=<?php echo $f['foto'] ?>&pag=inventario.php';} })"><span class="material-icons" >clear</span></a></td>
							  	</tr>
							  	<?php 
							  	}
							  	$sel = null;
							  	$con = null;
							  	 ?>


                            <?php 
							if ($opc == 'pendiente') {
							$sel = $con->prepare("SELECT * FROM inventario WHERE aprobado = ? ORDER BY id ");
							$sel->execute();
							}
							else{
								$sel = $con->prepare("SELECT * FROM inventario WHERE categoria = ? ORDER BY id ");
								$sel->execute(array($opc));
								}

							  	while ($f = $sel->fetch()) {  ?>
							  		<tr>
							  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50" ></td>
							  		<td><?php echo $f['nombredeusuario'] ?></td>
							  		
							  		<td><?php echo $f['telefono'] ?></td>
							  		<td><?php echo $f['categoria'] ?></td>
							  		<td><?php echo substr($f['direccion'] , 0, 100) ?>...</td>
									<td><?php echo $f['nombretienda'] ?></td>
									
									<td><?php echo $f['logo'] ?></td>
									<td><?php echo $f['imagenfondo'] ?></td>
							  		<td><a href="agregar_imagenes.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-success btn-sm"><span class="material-icons">add</span></a></td>
							  		<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-primary btn-sm"><span class="material-icons">edit</span></a></td>
							  		<td><a href="#" class="btn btn-outline-danger btn-sm" onclick="bootbox.confirm('Seguro que desea realizar esta accion', function(result){ if (result == true){ location.href='eliminar_producto.php?clave=<?php echo $f['clave'] ?>&foto=<?php echo $f['foto'] ?>&pag=inventario.php';} })"><span class="material-icons" >clear</span></a></td>
							  	   </tr>
							  	<?php 
							  	}
							  	$sel = null;
							  	$con = null;
							  	 ?>

						</body>
					</table>

				

				</div>
			</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
<?php include '../extend/header.php'; 
$clave = htmlentities($_GET['clave']);
$sel = $con->prepare("SELECT * FROM inventario WHERE clave = ?");
$sel->execute(array($clave));
  	if ($f = $sel->fetch()) { 
  	}
  	$sel = null;
?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">Editar tienda</h4></div>
			<div class="card-body">
				<form action="up_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<input type="hidden" name="clave" value="<?php echo $clave ?>">
					



<div class="form-group">
						<input type="text" name="nombredeusuario" required placeholder="Nombre de usuario" class="form-control" value="<?php echo $f['nombredeusuario'] ?>">
					</div>
					<div class="form-group">
						<input type="number" name="cuil" required placeholder="Cuil" class="form-control value=" value="<?php echo $f['cuil'] ?>">
					</div>
					<div class="form-group">
						<input type="number" required name="telefono" placeholder="Telefono" class="form-control" value="<?php echo $f['telefono'] ?>">
					</div>
					<div class="form-group">
						<select name="categoria" required class="form-control" >">
							<option value="" disabled="" selected="">Elige una categoria</option>
							<option value="MODA">MODA</option>
							<option value="ELECTRONICA">ELECTRONICA</option>
							<option value="JOYERIA">JOYERIA</option>
							<option value="RELOJES">RELOJES</option>
							<option value="HOGAR">HOGAR</option>
							<option value="ZAPATOS">ZAPATOS</option>
						</select>
					</div>
					<div class="form-group">
						<img src="<?php echo $f['foto'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen"  class="form-control">
					</div>
					<div class="form-group">
						<input name="direccion" placeholder="Direccion" class="form-control" value="<?php echo $f['direccion'] ?>"> </input>
					</div>
					<div class="form-group">
						<input name="nombretienda" placeholder="Nombre de tienda" class="form-control"  value="<?php echo $f['nombretienda'] ?>"></input>
					</div>



					<button type="submit" class="btn btn-info">Editar</button>

				</form>
			</div>
		</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
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
			<div class="card-header"><h4 class="card-title">Editar producto</h4></div>
			<div class="card-body">
				<form action="up_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<input type="hidden" name="clave" value="<?php echo $clave ?>">
					<div class="form-group">
						<input type="text" name="nombredeusuario" required placeholder="nombre de usuario" class="form-control" value="<?php echo $f['nombredeusuario'] ?>">
					</div>
					<div class="form-group">
						<input type="text" name="cuil" required placeholder="cuil" class="form-control" value="<?php echo $f['cuil'] ?>">
					</div>
					<div class="form-group">
						<input type="number"  required name="telefono" placeholder="telefono" class="form-control" value="<?php echo $f['telefono'] ?>">
					</div>
					<div class="form-group">
						<select name="categoria" required class="form-control">
							<option value="<?php echo $f['categoria'] ?>"><?php echo $f['categoria'] ?></option>
							<option value="MODA">MODA</option>
							<option value="ELECTRONICA">ELECTRONICA</option>
							<option value="JOYERIA">JOYERIA</option>
							<option value="RELOJES">RELOJES</option>
							<option value="HOGAR">HOGAR</option>
							<option value="ZAPATOS">ZAPATOS</option>
						</select>
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
           


	<div class="form-group">
						<img src="<?php echo $f['logo'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen2" class="form-control">
					</div>




					<div class="form-group">
						<img src="<?php echo $f['foto'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen" class="form-control">
					</div>




					<input type="hidden" name="anterior" value="<?php echo $f['foto'] ?>">
					<div class="form-group">
						<input type="text" name="direccion" required placeholder="direccion" class="form-control" value="<?php echo $f['direccion'] ?>">
					</div>
					<div class="form-group">
						<input type="text" name="nombretienda" required placeholder="nombre tienda" class="form-control" value="<?php echo $f['nombretienda'] ?>">
					</div>
						<div class="form-group">
						<select name="aprobado" required class="form-control">
								<option value="<?php echo $f['aprobado'] ?>"><?php echo $f['aprobado'] ?>
							<option value="aprobado">aprobado</option>
							<option value="pendiente">pendiente</option>
							
						</select>
					</div>
					
					<button type="submit" class="btn btn-info">Editar</button>

				</form>
			</div>
		</div>
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
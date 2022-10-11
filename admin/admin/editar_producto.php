<?php include '../extend/header.php'; 
$clave = htmlentities($_GET['clave']);
$sel = $con->prepare("SELECT * FROM inventario WHERE clave = ?");
$sel->execute(array($clave));
  	if ($f = $sel->fetch()) { 
  	}
  	$sel = null;
?>

<!--armamos la planilla-->

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
		
			<div class="card-header"><h4 class="card-title">Configurar pagina</h4></div>
			<div class="card-body">
               

				<form action="up_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<input type="hidden" name="clave" value="<?php echo $clave ?>">


					<!--NOMBRE DE USUARIO-->
					<div class="form-group">
						<input type="text" name="nombredeusuario" required placeholder="nombre de usuario" class="form-control" value="<?php echo $f['nombredeusuario'] ?>">
					</div>
					<!--CUIL-->
					<div class="form-group">
						<input type="text" name="cuil" required placeholder="Cuil" class="form-control" value="<?php echo $f['cuil'] ?>">
					</div>
					<!--TELEFONO-->
					<div class="form-group">
						<input type="number"  required name="telefono" placeholder="teléfono" class="form-control" value="<?php echo $f['telefono'] ?>">
					</div>

                  <!--FOTO-->

					<div class="form-group">
						<img src="<?php echo $f['foto'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen" class="form-control">
					</div>

					<input type="hidden" name="anterior" value="<?php echo $f['foto'] ?>">


					<!--CATEGORIA-->
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


					<!--DIRECCION-->
					<div class="form-group">
						<input type="text" name="direccion" required placeholder="dirección" class="form-control" value="<?php echo $f['direccion'] ?>">
					</div>

					<!--NOMBRE DE LA TIENDA-->
					<div class="form-group">
						<input type="text" name="nombretienda" required placeholder="nombre de tienda" class="form-control" value="<?php echo $f['nombretienda'] ?>">
					</div>

				

					<!--FONDO-->

					<!--<div class="form-group">
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

					</div>-->
           
					<!--LOGO-->

					<!--<div ><h5>Logo</h5></div>

	                <div class="form-group">
						<img src="<?php echo $f['logo'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen2" class="form-control">
					</div>

					<input type="hidden" name="anterior" value="<?php echo $f['logo'] ?>">-->


					<!--VIDEO/IMAGEN-->

				  <!--	<div ><h5>Video/imagen</h5></div>

					<div class="form-group">
						<img src="<?php echo $f['imagenfondo'] ?>" width="200">
					</div>

					<div class="form-group">
						<input type="file" name="imagen3" class="form-control">
					</div>

					<input type="hidden" name="anterior" value="<?php echo $f['imagenfondo'] ?>">-->

                  <!--BOTON EDITAR--> 

					<button type="submit" class="btn btn-info">Editar</button>

				</form>
			</div>
		</div>

   
		<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title"> registro</h4></div>
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
							  		<td><?php echo $f['nombredeusuario'] ?> </td>
							  		<td><?php echo $f['cuil'] ?></td>
									<td><?php echo $f['telefono'] ?></td>
									<td><?php echo $f['categoria'] ?></td>
									<td><?php echo $f['direccion'] ?></td>
									<td><?php echo $f['nombretienda'] ?></td>
									<!--<td><img src="<?php echo $f['logo'] ?>" width="50" heigth="50" ></td>-->
									<!--<td><img src="<?php echo $f['imagenfondo'] ?>" width="50" heigth="50" ></td>-->
							  		<!--<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-primary btn-sm"><span class="material-icons">edit</span></a></td>-->
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
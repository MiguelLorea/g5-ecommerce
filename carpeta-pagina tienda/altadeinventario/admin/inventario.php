<?php include '../extend/header.php'; ?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">Alta de inventario</h4></div>
			<div class="card-body">
				<form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="producto" required placeholder="Producto" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" name="cantidad" required placeholder="Cantidad" class="form-control">
					</div>
					<div class="form-group">
						<input type="number" step="0.01" required name="precio" placeholder="Precio" class="form-control">
					</div>
					<div class="form-group">
						<select name="categoria" required class="form-control">
							<option value="" disabled="" selected="">Elige una categoria</option>
							<option value="MODA">SI</option>
							<option value="ELECTRONICA">NO</option>
							<option value="JOYERIA">JOYERIA</option>
							<option value="RELOJES">RELOJES</option>
							<option value="HOGAR">HOGAR</option>
							<option value="ZAPATOS">ZAPATOS</option>
						</select>
					</div>
					<div class="form-group">
						<input type="file" name="imagen" class="form-control">
					</div>
					<div class="form-group">
						<textarea name="descripcion" required cols="30" rows="10" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-info">Guardar</button>

				</form>
			</div>
		</div>

		<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">Ultimo registro</h4></div>
				<div class="card-body">
					
					<table class="table">
						<thead>
							<th>Foto</th>
							<th>Producto</th>
							<th>Cantidad</th>
							<th>Precio</th>
							<th>Categoria</th>
							<th>Desc.</th>
							<th></th>
							<th></th>
							<th></th>
						</thead>
						<tbody>
							<?php 
							$sel = $con->prepare("SELECT * FROM productos ORDER BY id DESC limit 5 ");
							$sel->execute();
							  	while ($f = $sel->fetch()) {  ?>
							  	<tr>
							  		<td><img src="<?php echo $f['foto'] ?>" width="50" heigth="50" ></td>
							  		<td><?php echo $f['producto'] ?></td>
							  	
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
<?php include '../extend/header.php'; ?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">Alta de inventario</h4></div>
			<div class="card-body">
				
				<form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					<div class="form-group">
						<input type="text" name="nombredeusuario" required placeholder="Nombre de usuario" class="form-control">
					</div>
					<div class="form-group">
						<input type="number" name="cuil" required placeholder="Cuil" class="form-control">
					</div>
					<div class="form-group">
						<input type="number" required name="telefono" placeholder="Telefono" class="form-control">
					</div>
					<div class="form-group">
						<select name="categoria" required class="form-control">
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
						<input type="file" name="imagen"  class="form-control">
					</div>
					<div class="form-group">
						<input name="direccion" placeholder="Direccion" class="form-control" ></input>
					</div>
					<div class="form-group">
						<input name="nombretienda" placeholder="Nombre de tienda" class="form-control" ></input>
					</div>
					<div class="form-group">
						<select name="aprobado" required class="form-control">
							<option value="" disabled="" selected="">Elige una categoria</option>
							<option value="aprobado">Si</option>
							<option value="pendiente">No</option>
							
						</select>
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
						<th>Whatsapp</th>	
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
							  		<td>

							  			<?php echo $f['categoria'] ?>
							  				



							  			</td>
							  		<td><?php echo $f['cantidad'] ?></td>
							  		<td><?php echo "$". number_format($f['precio'], 2) ?></td>
							  		
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
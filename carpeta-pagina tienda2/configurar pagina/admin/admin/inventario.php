<?php include '../extend/header.php'; ?>

<div class="container" style="margin-top: 1%;">
	<div class="card text-white bg-secondary">
			<div class="card-header"><h4 class="card-title">Alta de inventario</h4></div>
			<div class="card-body">
				
				<form action="ins_inventario.php" method="post" autocomplete="off" enctype="multipart/form-data">
					
                   <!--FONDO-->

				   
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
           
					<!--LOGO-->

					<div ><h5>Logo</h5></div>

	               
					<div class="form-group">
						<input type="file" name="imagen2" class="form-control">
					</div>

					

					<!--IMAGEN fondo-->

				  	<div ><h5>imagen fondo</h5></div>


					<div class="form-group">
						<input type="file" name="imagen3" class="form-control">
					</div>

				
					<button type="submit" class="btn btn-info">Guardar</button>
					

				</form>
			</div>
		</div> 



     <!--
		<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">último registro</h4></div>
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
									<td><img src="<?php echo $f['logo'] ?>" width="50" heigth="50" ></td>
									<td><img src="<?php echo $f['imagenfondo'] ?>" width="50" heigth="50" ></td>
							  		<td><a href="editar_producto.php?clave=<?php echo $f['clave'] ?>" class="btn btn-outline-primary btn-sm"><span class="material-icons">edit</span></a></td>
							  	</tr>
							  	<?php 
							  	}
							  	$sel = null;
							  	$con = null;
							  	 ?>
						</tbody>
					</table>

				

				</div>
			</div>-->
</div>

<?php include '../extend/footer.php'; ?>
</body>
</html>
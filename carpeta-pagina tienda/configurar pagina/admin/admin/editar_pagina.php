<?php include '../extend/header.php'; 
$clave = htmlentities($_GET['clave']);
$sel = $con->prepare("SELECT * FROM configurar WHERE clave = ?");
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


					<!--FONDO-->

					<div class="form-group">

						<select name="fondo"  class="form-control" >
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
						<img src="<?php echo $f['logo'] ?>" width="200">
					</div>
					<div class="form-group">
						<input type="file" name="imagen2" class="form-control">
					</div>

					<input type="hidden" name="anterior" value="<?php echo $f['logo'] ?>">


					<!--IMAGEN fondo-->

				  	<div ><h5>imagen de fondo</h5></div>

					<div class="form-group">
						<img src="<?php echo $f['imagenfondo'] ?>" width="200">
					</div>

					<div class="form-group">
						<input type="file" name="imagen3" class="form-control">
					</div>

					<input type="hidden" name="anterior" value="<?php echo $f['imagenfondo'] ?>">

                  <!--BOTON EDITAR--> 

					<button type="submit" class="btn btn-info">Editar</button>

				</form>
			</div>
		</div>

   
		<div class="card text-white bg-dark" style="margin-top: 1%;">
				<div class="card-header"><h4 class="card-title">ultimo registro</h4></div>
				<div class="card-body">
					
					<table class="table">
						<thead>
							
							<th>fondo</th>
							<th>logo</th>	
							<th>imagen de fondo</th>
							<th></th>
							<th></th>
						</thead>
						<tbody>

						<?php 
							$sel = $con->prepare("SELECT * FROM configurar ORDER BY id DESC limit 1 ");
							$sel->execute();
							  	while ($f = $sel->fetch()) {  ?>
							  	<tr>
							  		
									<td><?php echo $f['fondo'] ?></td>
									<td><img src="<?php echo $f['logo'] ?>" width="50" heigth="50" ></td>
									<td><img src="<?php echo $f['imagenfondo'] ?>" width="50" heigth="50" ></td>
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
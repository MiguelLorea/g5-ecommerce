<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$clave = sha1(rand(0000,9999).rand(00,99));
	$nombredeusuario = htmlentities($_POST['nombredeusuario']);
	$cuil = htmlentities($_POST['cuil']);
	$telefono = htmlentities($_POST['telefono']);
	$categoria = htmlentities($_POST['categoria']);
	$direccion = htmlentities($_POST['direccion']);
	$nombretienda = htmlentities($_POST['nombretienda']);
	$aprobado = htmlentities($_POST['aprobado']);
	
	
	
	// redimensionar y validar imagen

	$ruta = $_FILES['imagen']['tmp_name'];
	$imagen = $_FILES['imagen']['name'];

	if ($ruta != '') {
		
		$ancho = 500;
		$alto = 400;
		$info = pathinfo($imagen);
		$tamano = getimagesize($ruta);
		$width = $tamano[0];
		$height = $tamano[1];

		if ($info['extension'] == 'jpg' || $info['extension'] == 'JPG' || $info['extension'] == 'jpeg' || $info['extension'] == 'JPEG') {
			$imagenvieja = imagecreatefromjpeg($ruta);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled($nueva, $imagenvieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
			$copia = "foto_producto/".$clave.".jpg";
			imagejpeg($nueva,$copia);
		}elseif ($info['extension'] == 'png' || $info['extension'] == 'PNG') {
			$imagenvieja = imagecreatefrompng($ruta);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled($nueva, $imagenvieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
			$copia = "foto_producto/".$clave.".png";
			imagepng($nueva,$copia);
		}else{
			echo alerta('El formato no es aceptado','inventario.php');
			exit;
		}

	}else{
		$copia = 'foto_producto/producto.png';
	}

	$ins = $con->prepare("INSERT INTO inventario VALUES (DEFAULT, :clave,:nombredeusuario, :cuil, :telefono, :categoria, :direccion, :nombretienda,  :foto,   :aprobado)");
	    $ins->bindparam(':clave', $clave);
	    $ins->bindparam(':nombredeusuario', $nombredeusuario);
	    $ins->bindparam(':cuil', $cuil);
	    $ins->bindparam(':telefono', $telefono);
	    $ins->bindparam(':categoria', $categoria);
	    $ins->bindparam(':direccion', $direccion);
	    $ins->bindparam(':nombretienda', $nombretienda);
	    $ins->bindparam(':foto', $copia);
	     $ins->bindparam(':aprobado', $aprobado);
	    
	    
	
	     
		if ($ins->execute()){


		echo alerta('!¡Felicidades! completo con exito el registro, pronto nos contactaremos con usted para evaluar su solicitud.','');
		
		$ins = null;
		$con = null;
		}else{
			echo alerta('El producto no pudo ser guardado','inventario.php');
		}
		



}else{
echo alerta('Utiliza el formulario','inventario.php');
}

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
			<div class="card-header"><h4 class="card-title">Alta de tienda</h4></div>
			<div class="card-body">

</div>

<div class="alert alert-success" role="alert">
 ¡Felicidades! completo con exito el registro, pronto nos contactaremos con usted para evaluar su solicitud.
<br>
 <a href="../../carpeta_pagina_principal">
    <button>Inicio</button>
  </a> 
</div>


</div>


 </body>
 </html>
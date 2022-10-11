<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$clave = sha1(rand(0000,9999).rand(00,99));
	
	$fondo = htmlentities($_POST['fondo']);
	
	

	// redimensionar y validar logo

    $ruta2 = $_FILES['imagen2']['tmp_name'];
	$imagen2 = $_FILES['imagen2']['name'];

   // redimensionar y validar imagenfondo
	
    $ruta3 = $_FILES['imagen3']['tmp_name'];
	$imagen3 = $_FILES['imagen3']['name'];



 if ($ruta2 != '') {
		
		$ancho = 500;
		$alto = 400;
		$info = pathinfo($imagen2);
		$tamano = getimagesize($ruta2);
		$width = $tamano[0];
		$height = $tamano[1];

		if ($info['extension'] == 'jpg' || $info['extension'] == 'JPG' || $info['extension'] == 'jpeg' || $info['extension'] == 'JPEG') {
			$imagenvieja = imagecreatefromjpeg($ruta2);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled($nueva, $imagenvieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
			$logo = "foto_producto/".$clave.".jpg";
			imagejpeg($nueva,$logo);
		}elseif ($info['extension'] == 'png' || $info['extension'] == 'PNG') {
			$imagenvieja = imagecreatefrompng($ruta2);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled($nueva, $imagenvieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
			$logo = "foto_producto/".$clave.".png";
			imagepng($nueva,$logo);
		}else{
			echo alerta('El formato no es aceptado','inventario.php');
			exit;
		}

	}else{
		$logo = 'foto_producto/producto.png';
	}

  
	if ($ruta3 != '') {
		
		$ancho = 500;
		$alto = 400;
		$info = pathinfo($imagen3);
		$tamano = getimagesize($ruta3);
		$width = $tamano[0];
		$height = $tamano[1];

		if ($info['extension'] == 'jpg' || $info['extension'] == 'JPG' || $info['extension'] == 'jpeg' || $info['extension'] == 'JPEG') {
			$imagenvieja = imagecreatefromjpeg($ruta3);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled($nueva, $imagenvieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
			$imagenfondo = "foto_producto/".$clave.".jpg";
			imagejpeg($nueva,$imagenfondo);
		}elseif ($info['extension'] == 'png' || $info['extension'] == 'PNG') {
			$imagenvieja = imagecreatefrompng($ruta3);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled($nueva, $imagenvieja, 0, 0, 0, 0, $ancho, $alto, $width, $height);
			$imagenfondo = "foto_producto/".$clave.".png";
			imagepng($nueva,$imagenfondo);
		}else{
			echo alerta('El formato no es aceptado','inventario.php');
			exit;
		}

	}else{
		$imagenfondo = 'foto_producto/producto.png';
	}


	

	// guardar datos en la base de datos

	$ins = $con->prepare("INSERT INTO configurar VALUES (DEFAULT, :clave, :fondo, :logo, :imagenfondo)");
	    $ins->bindparam(':clave', $clave);
	    $ins->bindparam(':fondo', $fondo);
	    $ins->bindparam(':logo', $logo);
	    $ins->bindparam(':imagenfondo', $imagenfondo);
	    
		
		if ($ins->execute()){

			
		echo alerta('!¡Felicidades! completo con exito la configuracion de pagina.','inventario.php');
		
    
		$ins = null;
		$con = null;
		}else{
			echo alerta('El producto no pudo ser guardado, utiliza el formulario','inventario.php');
		}
		



}
 else{
 //echo alerta('Utiliza el formulario','inventario.php');
}

 ?> 

 <!--

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


</div>-->


 </body>
 </html>
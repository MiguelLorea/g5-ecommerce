<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$clave = htmlentities($_POST['clave']);
	$nombredeusuario = htmlentities($_POST['nombredeusuario']);
	$cuil = htmlentities($_POST['cuil']);
	$telefono = htmlentities($_POST['telefono']);
	$categoria = htmlentities($_POST['categoria']);
	$direccion = htmlentities($_POST['direccion']);
	$nombretienda = htmlentities($_POST['nombretienda']);
	$fondo = htmlentities($_POST['fondo']);
	



	// redimensionar y validar foto

	$ruta = $_FILES['imagen']['tmp_name'];
	$imagen = $_FILES['imagen']['name'];

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
		$logo = htmlentities($_POST['anterior']);
	}



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
		$copia = htmlentities($_POST['anterior']);
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
		$imagenfondo = htmlentities($_POST['anterior']);
	}

	$up = $con->prepare("UPDATE inventario SET nombredeusuario = :nombredeusuario, cuil = :cuil, telefono = :telefono,  categoria = :categoria, foto = :foto , direccion = :direccion, fondo =:fondo, logo = :logo, imagenfondo = :imagenfondo WHERE clave = :clave ");
	    $up->bindparam(':clave', $clave);
	    $up->bindparam(':nombredeusuario', $nombredeusuario);
	    $up->bindparam(':cuil', $cuil);
	    $up->bindparam(':telefono', $telefono);
	    $up->bindparam(':categoria', $categoria);
	    $up->bindparam(':direccion', $direccion);
	    $up->bindparam(':foto', $copia);
	    $up->bindparam(':fondo', $fondo);
	    $up->bindparam(':logo', $logo);
		$up->bindparam(':imagenfondo', $imagenfondo);
		
	     
		if ($up->execute()){
		echo alerta('El producto ha sido actualizado','editar_producto.php?clave='.$clave.'');
		$up = null;
		$con = null;
		}else{
			echo alerta('El producto no ha podido ser actualizado','editar_producto.php?clave='.$clave.'');
		}
		



}else{
echo alerta('Utiliza el formulario','editar_producto.php?clave='.$clave.'');
}

 ?> 
 </body>
 </html>
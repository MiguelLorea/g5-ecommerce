<?php 
include '../extend/headerphp.php'; // plantillas
include '../extend/alertas.php'; // plantillas

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// variables
	$clave=sha1(rand(0000,9999).rand(00,99));
	$nombretienda = htmlentities($_POST['nombretienda']);
	$logo = htmlentities($_POST['logo']);
	$fondo = htmlentities($_POST['fondo']);
	$videoimagen = htmlentities($_POST['videoimagen']);
	


	// redimensionar y validar logo

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
			$logo = "foto_producto/".$clave.".jpg";
			imagejpeg($nueva,$logo);
		}elseif ($info['extension'] == 'png' || $info['extension'] == 'PNG') {
			$imagenvieja = imagecreatefrompng($ruta);
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
 
 

// redimensionar y validar videoimagen

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
		$imagenvieja1 = imagecreatefromjpeg($ruta);
		$nueva1 = imagecreatetruecolor($ancho, $alto);
		imagecopyresampled($nueva1, $imagenvieja1, 0, 0, 0, 0, $ancho, $alto, $width, $height);
		$videoimagen = "foto_producto/".$clave.".jpg";
		imagejpeg($nueva1,$videoimagen);
	}elseif ($info['extension'] == 'png' || $info['extension'] == 'PNG') {
		$imagenvieja1 = imagecreatefrompng($ruta);
		$nueva1 = imagecreatetruecolor($ancho, $alto);
		imagecopyresampled($nueva1, $imagenvieja1, 0, 0, 0, 0, $ancho, $alto, $width, $height);
		$videoimagen = "foto_producto/".$clave.".png";
		imagepng($nueva1,$videoimagen);
	}else{
		echo alerta('El formato no es aceptado','inventario.php');
		exit;
	}

}else{
	$videoimagen = 'foto_producto/producto.png';
}


	// guardar en base de datos

	$ins = $con->prepare("INSERT INTO inventario VALUES ( :nombretienda, :logo, :fondo, :videoimagen)");

	    $ins->bindparam(':nombretienda', $nombretienda);
	    $ins->bindparam(':logo', $logo);
	    $ins->bindparam(':fondo', $fondo);
	    $ins->bindparam(':videoimagen', $videoimagen);
	   
		
		if ($ins->execute()){
		echo alerta('la configuración fue guardada','inventario.php');
		$ins = null;
		$con = null;
		}else{
			echo alerta('la configuración no pudo ser guardada','inventario.php');
		}
		
 


}else{
echo alerta('Utiliza el formulario','inventario.php');
}

 ?> 
 </body>
 </html>
<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$clave = sha1(rand(0000,9999).rand(00,99));
	$telefono = htmlentities($_POST['telefono']);
	$nombredeusuario = htmlentities($_POST['nombredeusuario']);
	$cuil = htmlentities($_POST['cuil']);
	$precio = htmlentities($_POST['precio']);
	$categoria = htmlentities($_POST['categoria']);
	$direccion = htmlentities($_POST['direccion']);

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

	$ins = $con->prepare("INSERT INTO inventario VALUES (DEFAULT, :clave,:telefono, :cuil, :precio, :categoria, :direccion, :foto, :nombredeusuario)");
	    $ins->bindparam(':clave', $clave);
	    $ins->bindparam(':telefono', $telefono);
	    $ins->bindparam(':cuil', $cuil);
	    $ins->bindparam(':precio', $precio);
	    $ins->bindparam(':categoria', $categoria);
	    $ins->bindparam(':direccion', $direccion);
	    $ins->bindparam(':foto', $copia);
	      $ins->bindparam(':nombredeusuario', $nombredeusuario);
	
		if ($ins->execute()){
		echo alerta('El producto fue guardado','inventario.php');
		$ins = null;
		$con = null;
		}else{
			echo alerta('El producto no pudo ser guardado','inventario.php');
		}
		



}else{
echo alerta('Utiliza el formulario','inventario.php');
}

 ?> 
 </body>
 </html>
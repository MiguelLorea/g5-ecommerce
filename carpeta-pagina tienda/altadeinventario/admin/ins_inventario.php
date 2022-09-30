<?php 
include '../extend/headerphp.php';
include '../extend/alertas.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// metodo POST
	$clave = sha1(rand(0000,9999).rand(00,99));
	$producto = htmlentities($_POST['producto']);
	$cantidad = htmlentities($_POST['cantidad']);
	$precio = htmlentities($_POST['precio']);
	$categoria = htmlentities($_POST['categoria']);
	$descripcion = htmlentities($_POST['descripcion']);


	// redimensionar y validar imagen

	$ruta = $_FILES['imagen']['tmp_name'];
	$imagen = $_FILES['imagen']['name'];

	if ($ruta != '') {
		
		$ancho = 500;
		$alto = 400;
		$info = pathinfo($imagen);
		$tamano = getimagesize($ruta);
//La función getimagesize() determinará el tamaño de un archivo de imagen dado y devolverá las dimensiones junto con el tipo de archivo y una cadena de texto

		if ($info['extension'] == 'jpg' || $info['extension'] == 'JPG' || $info['extension'] == 'jpeg' || $info['extension'] == 'JPEG') {
			$imagenvieja = imagecreatefromjpeg($ruta);
			$nueva = imagecreatetruecolor($ancho, $alto); // Crear una nueva imagen de color verdadero
			imagecopyresampled($ancho, $alto); //imagecopyresampled — Copia y cambia el tamaño de parte de una imagen redimensionándola
			$copia = "foto_producto/".$clave.".jpg";
			imagejpeg($nueva,$copia);
		}elseif ($info['extension'] == 'png' || $info['extension'] == 'PNG') {
			$imagenvieja = imagecreatefrompng($ruta);
			$nueva = imagecreatetruecolor($ancho, $alto);
			imagecopyresampled( $ancho, $alto);
			$copia = "foto_producto/".$clave.".png";
			imagepng($nueva,$copia);
		}else{
			echo alerta('El formato no es aceptado','inventario.php');
			exit;
		}

	}else{
		$copia = 'foto_producto/producto.png';
	}


//bindparam = Vincula un parámetro al nombre de variable especificado Carga los datos 
	$ins = $con->prepare("INSERT INTO productos VALUES (DEFAULT, :clave,:producto, :cantidad, :precio, :categoria, :descripcion, :foto)");
	    $ins->bindparam(':clave', $clave);
	    $ins->bindparam(':producto', $producto);
	    $ins->bindparam(':cantidad', $cantidad);
	    $ins->bindparam(':precio', $precio);
	    $ins->bindparam(':categoria', $categoria);
	    $ins->bindparam(':descripcion', $descripcion);
	    $ins->bindparam(':foto', $copia);
	     
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
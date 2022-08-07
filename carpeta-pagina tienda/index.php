



<?php
include_once "conexion/conexion.php";

# Por defecto hacemos la consulta de todas las personas
$consulta = "SELECT * FROM productos";

# Vemos si hay búsqueda
$busqueda = null;
if (isset($_GET["busqueda"])) {
    # Y si hay, búsqueda, entonces cambiamos la consulta
    # Nota: no concatenamos porque queremos prevenir inyecciones SQL
    $busqueda = $_GET["busqueda"];
    $consulta = "SELECT * FROM productos WHERE producto LIKE ?";
}
# Preparar sentencia e indicar que vamos a usar un cursor
$sentencia = $con->prepare($consulta, [
    PDO::ATTR_CURSOR => PDO::CURSOR_SCROLL,
]);
# Aquí comprobamos otra vez si hubo búsqueda, ya que tenemos que pasarle argumentos al ejecutar
# Si no hubo búsqueda, entonces traer a todas las personas (mira la consulta de la línea 5)
if ($busqueda === null) {
    # Ejecutar sin parámetros
    $sentencia->execute();
} else {
    # Ah, pero en caso de que sí, le pasamos la búsqueda
    # Un arreglo que nomás llevará la búsqueda con % al inicio y al final
    $parametros = ["%$busqueda%"];
    $sentencia->execute($parametros);
}
# Sin importar si hubo búsqueda o no, se nos habrá devuelto un cursor que iteramos más abajo...
?>





            <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>eCommerce HTML ITSC</title>
        <!-- Vista desde cualquier navegador (Ancho y escala) -->
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce Multilocal" name="keywords">
        <meta content="eCommerce Multilocal" name="description">

        <!-- Favicon -->
        <link href="img/logo1.jpg" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/whatsapp.css">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body id="body">
        
      
    
        
        <!-- Barra de navegacion empieza -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark ">
                    <a href="#" class="navbar-brand ">Menu</a> <!--class="navbar-brand"-->
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto ">
                            <a href= "" class=" nav-item nav-link"></span><i class="fa fa-home" aria-hidden="true"></i>  Inicio</a> 
                            <a href="product-list.php" class="nav-item nav-link "> <i class="fa fa-archive" aria-hidden="true"></i> Productos</a>
                            <a href="" class="nav-item nav-link "> <i class="fa fa-archive" aria-hidden="true"></i> Detalles del Productos</a>
                            <!--<a href="product-detail.html" class="nav-item nav-link">Detalles del producto</a>-->
                            <a href="" class="nav-item nav-link "> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Compras</a>
                            <a href="" class="nav-item nav-link"><i class="fa fa-truck" aria-hidden="true"></i>  Envios</a>
                            <!--<a href="my-account.html" class="nav-item nav-link"><a href="index.html">
                                <img src="img/logo de pagina.jpg" alt= "Logo">
                            </a></a>-->
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mas</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">Lista de deseos</a>
                                    <a href="login.html" class="dropdown-item">iniciar sesión & registrarse</a>
                                </div>
                            </div>-->
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>  Mi cuenta</a>
                                <div class="dropdown-menu">
                                    <p style="color:rgb(211, 17, 36);"><H6>¡BIENVENIDO!</H6><hr></p>
                                    <a href="#" class="dropdown-item">Ingresá</a>
                                    <a href="#" class="dropdown-item">Crear Cuenta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Barra de Navegacion Termina -->  
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo de pagina.jpg" alt= "Logo">
                            </a>
                        </div>
                    </div>




















<div class="col-md-6">

<form class="form-inline" action="buscar.php" method="GET">

<div class="search">
    <label for="inputPassword2" class="sr-only">Buscar</label>
    <input name="busqueda" type="text" class="form-control" id="inputPassword2" placeholder="Buscar">



                           <button><i class=""><script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/pvbutfdk.json" trigger="hover" style="width:30px;height:30px">
                             </lord-icon></i></button> <!--lupa con movimiento-->


 

                            
                        </div>
                        
    </form>
                    </div>

    
                    
                     <div class="colores">
                       <select name="fondo" id="fondo" onchange="cambiarfondo(this)" class="color">
                        <option selected disabled>colores de fondo</option>
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

                     <!--boton para cambiar el fondo-->
                     <!--<button type="button" id="btn-color" onclick="btnChanger()">Cambiar fondo</button>-->



                   

                </div>
            </div>
        </div>
        <!-- Barra de navegacion termina -->       
        
        <!-- Normal Slider Start -->
        <div class="header">
        
           <div class="absolute">
           
            <h1>¡welcome to the our shop!</h1>

           </div>
           <video src="videos/y2mate.com - Vídeo promocional Moda_1080p.mp4" autoplay muted loop  width="100%" height="500px"></video>
           
        </div>
        <!-- Normal slider End -->      
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><b>ENVIO GRATIS A TODO EL PAIS</b></div> 
                    <div class="brand-item"><img src="img/imagen 300.png"> </div>
                    <div class="brand-item"><b>LAS MEJORES MARCAS</b></div>
                    <div class="brand-item"><img src="img/imagen 300.png"></div>
                    <div class="brand-item"><b>3 Y 6 CUOTAS SIN INTERES</b></div>
                    <div class="brand-item"><img src="img/imagen 300.png"></div> <!--150X80-->
                    <div class="brand-item"><b>HASTA 40% OFF! </b></div>
                    <div class="brand-item"><img src="img/imagen 300.png"></div> <!--150X80-->
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
       <!-- Feature / Descripcion Start -->
       <!-- <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Pago Seguro</h2>
                            <p>
                                bla bla bla
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Envíos a todo el país</h2>
                            <p>
                                Comprá Online 24/7
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>30 Dias De Devolución</h2>
                            <p>
                                bla bla bla
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Soporte</h2>
                            <p>
                                bla bla bla
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Feature / Descripcion End-->      
        
        <!-- Category Start-->
       <!-- <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Texto que describa la img</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Texto que describa la img</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Texto que describa la img</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Texto que describa la img</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Texto que describa la img</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Texto que describa la img</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
       <!-- <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Comunicate ante cualquier consulta</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:xxxxx">Contacto</a>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->















                <div class="featured-product product">
            <div class="container-fluid">
                <div class="section-header">
                  <h3>PRODUCTOS</h3>   
                </div>
                <div class="row align-items-center product-slider product-slider-4">




<?php 
                            $sel = $con->prepare("SELECT * FROM productos ORDER BY id DESC limit 5 ");
                            $sel->execute();
                                while ($f = $sel->fetch()) {  ?>
                         
                            
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><!--Nombre producto--></a>
                              
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                   <img src="altadeinventario/admin/<?php echo $f['foto'] ?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span><?php echo $f['producto'] ?> </span></h3>
                                <h3><span><?php echo "$". number_format($f['precio'], 2) ?></span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
    <?php 
                                }
                                $sel = null;
                                $con = null;
                                 ?>


                  
                </div>



            </div>
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
       <!-- <div class="newsletter">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Suscribete a nuestro Boletin.</h1>
                    </div>
                    <div class="col-md-6">
                        <div class="form">
                            <input type="email" value="Tu email">
                            <button>Suscribirse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Newsletter End -->        
        
        <!-- Prod rec Start -->
        <div class="recent-product product">
            <div class="container-fluid">
                <div class="section-header">
                    <h3>MÁS VENDIDOS</h3>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                
                                <div class="ratting">
                                    
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-6.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <!--<a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>-->
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>nombre producto</span></h3>
                                <h3><span>$ 100</span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-7.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>nombre producto</span></h3>
                                <h3><span>$ 100</span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                               <!-- <a href="#">Nombre prod</a>-->
                                <div class="ratting">
                                   
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-8.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>nombre producto</span></h3>
                                <h3><span>$ 100</span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                
                                <div class="ratting">
                                   
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-9.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>nombre producto</span></h3>
                                <h3><span>$ 100</span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                
                                <div class="ratting">
                                   
                                </div>
                            </div>
                            <div class="product-image">
                                <a href="product-detail.html">
                                    <img src="img/product-10.jpg" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                   
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span>nombre producto</span></h3>
                                <h3><span>$ 100</span></h3>
                                <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Prod rec End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h6><U><I>CONTACTANOS</I></U></h6>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Rio Negro 77,Cordoba,ARG</p>
                                <p><i class="fa fa-envelope"></i>Nuevamoda@gmail.com</p>
                                <p><i class="fa fa-phone"></i>125674385</p>
                                

                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h6><U><I>REDES SOCIALES</I></U></h6>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class=><img src="img/icons8-twitter-circled-32.png" alt=""></i></a><!--"fab fa-twitter"-->
                                    <a href=""><i class=><img src="img/icons8-facebook-nuevo-32.png" alt=""></i></a><!--"fab fa-facebook-f"-->
                        
                                    <a href=""><i class=><img src="img/icons8-instagram-32.png" alt=""></i></a><!--"fab fa-instagram"-->
                                    <a href=""><i class=><img src="img/icons8-youtube-32.png" alt=""></i></a><!--"fab fa-youtube"-->

                                     
                                    <a href="https://api.whatsapp.com/send?phone=3512047231&text=Hola,%20sean%20bienvenidos! "><i class=><img src="img/icons8-whatsapp-32.png" alt=""></i></a><!--"fab fa-youtube"-->
                                     


                                    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
                                    <a href="https://api.whatsapp.com/send?phone=3512047231&text=Hola,%20sean%20bienvenidos!"
                                     class="float" target="_blank">
                                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h6><U><I>NOSOTROS</I></U></h6>
                            <ul>
                                <li><a href="#">Nuestros Locales</a></li>
                                <li><a href="#">Politica de Privacidad</a></li>
                                <li><a href="#">Terminos y Condiciones</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h6><U><I>AYUDA</I></U></h6>
                            <ul>
                                <li><a href="#">Politica de Pagos</a></li>
                                <li><a href="#">Politica de Envios</a></li>
                                <li><a href="#">Politica de Devoluciones</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h6>Medios de pago</h6>
                            <img src="img/payment-method.png"  alt="Payment Method" />
                        </div>
                    </div>
                
                    
                   <!--<div class="col-md-6">
                        <div class="payment-security">
                            <h6>Pago seguro:</h6>
                            <img src="img/godaddy.svg" alt="Payment Security" />
                            <img src="img/norton.svg" alt="Payment Security" />
                            <img src="img/ssl.svg" alt="Payment Security" />
                        </div>
                    </div>-->
                </div>

                
              
                


             

            </div>
        </div>

       
        <div class="iconocharla">
         
         <img src="img/GIF-EO-150x150.gif">
           <!-- <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
            <lord-icon
           src="https://cdn.lordicon.com/mjmrmyzg.json"
           trigger="hover"
            style="width:250px;height:80px">
           </lord-icon>-->

           <span class="tooltip-box">¿como podemos ayudarte?</span>

        </div>
        
    
        <!-- Footer End -->
        
       <!-- Barra superior comienza -->
       <div class="top-bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    
                   <!-- <div class="banner" >

                    
                        <p><b>ENVIOS GRATIS A TODO EL PAIS</b> </p>
                        
                        <p><b>3 Y 6 CUOTAS SIN INTERES</b></p> 
                    
                        <p><b>HASTA 40% OFF!</b></p> 

                    </div>-->
                    
                </div>
                
            </div>
        </div>
    </div> 
    <!-- Barra superior acaba --> 


        <!-- Footer Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        
                        <p>Copyright &copy; <a href="#">Boutique@gmail.com</a>. Todos los derechos reservados</p>
                    </div>

                    <!--<div class="col-md-6 template-by">		
                        <p>Designed By Los Pibes</p>
                    </div>-->

                   <!--charla-->
                  

                </div>
            </div>
        </div>
        <!-- Footer End -->    

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
     
      </select>
    </body>
</html>

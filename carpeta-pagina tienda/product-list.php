<?php include 'extend/header.php'; 

?>

        <!-- Bottom Bar Start -->


        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.php">
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

                    </div>
                    
                    
                     <!--boton para cambiar el fondo-->
                     <!--<button type="button" id="btn-color" onclick="btnChanger()">Cambiar fondo</button>-->

                </div>
            </div>
        </div>

        <!-- Bottom Bar End -->  
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b>--------- LISTA DE PRODUCTOS ---------</b></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        










        <!-- Lista de productos empieza -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-view-top">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="product-search">
												<input type="text" placeholder="Buscar">
                                                <button><i class="fa fa-search"></i></button>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-short">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Ordenar por</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">Nuevo</a>
                                                        <a href="#" class="dropdown-item">Popular</a>
                 
                                      <a href="#" class="dropdown-item">Mas vendido</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-price-range">
                                                <div class="dropdown">
                                                    <div class="dropdown-toggle" data-toggle="dropdown">Rango de precio</div>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="#" class="dropdown-item">$0 to $50</a>
                                                        <a href="#" class="dropdown-item">$51 to $100</a>
                                                        <a href="#" class="dropdown-item">$101 to $150</a>
                                                        <a href="#" class="dropdown-item">$151 to $200</a>
                                                        <a href="#" class="dropdown-item">$201 to $250</a>
                                                        <a href="#" class="dropdown-item">$251 to $300</a>
                                                        <a href="#" class="dropdown-item">$301 to $350</a>
                                                        <a href="#" class="dropdown-item">$351 to $400</a>
                                                        <a href="#" class="dropdown-item">$401 to $450</a>
                                                        <a href="#" class="dropdown-item">$451 to $500</a>
                                                    </div>
                                                </div>
                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            



 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
           
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b> MODA </b></li>
                </ul>
        
        </div>
        <!-- Breadcrumb End -->
     




  <?php 
        $sel_moda = $con->prepare("SELECT foto, precio, producto, clave FROM productos WHERE categoria = 'MODA' AND cantidad > 0 ORDER BY id DESC LIMIT 3 ");
        $sel_moda->execute();
            while ($f_moda = $sel_moda->fetch()) {
         ?>






                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <h6 class="card-title"><b><?php echo $f_moda['producto'] ?></b></h6>
                                        <div class="ratting">
                                            
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="card-img-top" src="altadeinventario/admin/<?php echo $f_moda['foto'] ?>" width="200" height="200">
                                        </a>
                                        <div class="product-action">
                                           
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                 
                                     <p class="card-text"><b><?php echo "$". number_format($f_moda['precio'], 2) ?></b></p>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar </a>
                                    </div><br>

                                </div>
                            </div>




        <?php }
        $sel_moda = null;
         ?>









<br>





 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
           
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b> ELECTRONICA </b></li>
                </ul>
        
        </div>
        <!-- Breadcrumb End -->
     




<?php
 $sel_elec = $con->prepare("SELECT foto, precio, producto, clave FROM productos WHERE categoria = 'ELECTRONICA' AND cantidad > 0 ORDER BY id DESC LIMIT 3");
        $sel_elec->execute();
            while ($f_elec = $sel_elec->fetch()) { ?>






                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <h6 class="card-title"><b><?php echo $f_elec['producto'] ?> </b></h6>
                                        
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="card-img-top" src="altadeinventario/admin/<?php echo $f_elec['foto'] ?>" width="200" height="200">
                                        </a>
                                        <div class="product-action">
                                            
                                        <a href="#"><i class="fa fa-cart-plus"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                 
                    <p class="card-text"><b><?php echo "$". number_format($f_elec['precio'], 2) ?></b></p>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar </a>
                                    </div>

<br>



                                </div>
                            </div>




        <?php }
        $sel_elec = null;
         ?>










 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
           
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b> JOYERIA </b></li>
                </ul>
        
        </div>
        <!-- Breadcrumb End -->
     




<?php
 $sel_joy = $con->prepare("SELECT foto, precio, producto, clave FROM productos WHERE categoria = 'JOYERIA' AND cantidad > 0 ORDER BY id DESC LIMIT 3");
        $sel_joy->execute();
            while ($f_joy = $sel_joy->fetch()) { ?>






                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <h6 class="card-title"><b><?php echo $f_joy['producto'] ?> </b></h6>
                                        <div class="ratting">
                                            
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="card-img-top" src="altadeinventario/admin/<?php echo $f_joy['foto'] ?>" width="200" height="200">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                 
                    <p class="card-text"><b><?php echo "$". number_format($f_joy['precio'], 2) ?></b ></p>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar </a>
                                    </div><br>

                                </div>
                            </div>




        <?php }
        $sel_joy = null;
         ?>





<br>









 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
           
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b> RELOJES </b></li>
                </ul>
        
        </div>
        <!-- Breadcrumb End -->
     




<?php
 $sel_rel = $con->prepare("SELECT foto, precio, producto, clave FROM productos WHERE categoria = 'RELOJES' AND cantidad > 0 ORDER BY id DESC LIMIT 3");
        $sel_rel->execute();
            while ($f_rel = $sel_rel->fetch()) { ?>






                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <h6 class="card-title"><b><?php echo $f_rel['producto'] ?> </b></h6>
                                        <div class="ratting">
                                          
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="card-img-top" src="altadeinventario/admin/<?php echo $f_rel['foto'] ?>" width="200" height="200">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                         
                                        </div>
                                    </div>
                                    <div class="product-price">
                                 
                    <p class="card-text"> <b><?php echo "$". number_format($f_rel['precio'], 2) ?></b></p>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar </a>
                                    </div><br>

                                </div>
                            </div>




        <?php }
        $sel_rel = null;
         ?>







<br>







 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
           
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b> HOGAR </b></li>
                </ul>
              

        </div>
        <!-- Breadcrumb End -->
     




<?php
 $sel_hogar = $con->prepare("SELECT foto, precio, producto, clave FROM productos WHERE categoria = 'HOGAR' AND cantidad > 0 ORDER BY id DESC LIMIT 3");
        $sel_hogar->execute();
            while ($f_hogar = $sel_hogar->fetch()) { ?>






                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <h6 class="card-title"><?php echo $f_hogar['producto'] ?></h6>
                                        <div class="ratting">
                                           
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="card-img-top" src="altadeinventario/admin/<?php echo $f_hogar['foto'] ?>" width="200" height="200">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                           
                                        </div>
                                    </div>
                                    <div class="product-price">
                                 
                    <p class="card-text"><?php echo "$". number_format($f_hogar['precio'], 2) ?></p>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar </a>
                                    </div><br>

                                </div>
                            </div>


<br>


        <?php }
        $sel_hogar = null;
         ?>






<br>






 <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
           
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active"><b>ZAPATOS </b></li>
                </ul>
        
        </div>
        <!-- Breadcrumb End -->
     




<?php
 $sel_zapatos = $con->prepare("SELECT foto, precio, producto, clave FROM productos WHERE categoria = 'ZAPATOS' AND cantidad > 0 ORDER BY id DESC LIMIT 3");
        $sel_zapatos->execute();
            while ($f_zapatos = $sel_zapatos->fetch()) { ?>






                            
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <h6 class="card-title"><?php echo $f_zapatos['producto'] ?></h6>
                                        <div class="ratting">
                                            
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img class="card-img-top" src="altadeinventario/admin/<?php echo $f_zapatos['foto'] ?>" width="200" height="200">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            
                                        </div>
                                    </div>
                                    <div class="product-price">
                                 
                    <p class="card-text"><?php echo "$". number_format($f_zapatos['precio'], 2) ?></p>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar </a>
                                    </div><br>

                                </div>
                            </div>




        <?php }
        $sel_zapatos = null;
         ?>




<br>




























                        </div>
                        
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Siguiente</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>           
                    
                    <!-- Barra lateral empieza -->
                    <div class="col-lg-4 sidebar">
                       <!-- <div class="sidebar-widget category">
                            <h2 class="title">Categorias</h2>
                            <nav class="navbar bg-light">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-female"></i>Moda y Belleza</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-child"></i>Ropa para niños y bebés</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-tshirt"></i>Ropa de Hombre y Mujer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-mobile-alt"></i>Gadgets y Accesorios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa fa-microchip"></i>Tecnologia y Productos Electronicos</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        
                        <div class="sidebar-widget widget-slider">
                            <div class="sidebar-slider normal-slider">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Nombre Prod</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-10.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar ahora</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Nombre Prod</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-9.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar ahora</a>
                                    </div>
                                </div>
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="#">Nombre Prod</a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="product-detail.html">
                                            <img src="img/product-8.jpg" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span>$</span>99</h3>
                                        <a class="btn" href=""><i class="fa fa-shopping-cart"></i>Comprar ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        
                        <div class="sidebar-widget brands">
                            <h2 class="title">Nuestras Marcas</h2>
                            <ul>
                                <li><a href="#">Adidas </a><span>(45)</span></li>
                                <li><a href="#">Nike </a><span>(34)</span></li>
                                <li><a href="#">New Ballance </a><span>(67)</span></li>
                                <li><a href="#">Topper</a><span>(74)</span></li>
                                <li><a href="#">Puma </a><span>(89)</span></li>
                                <li><a href="#">Levis</a><span>(28)</span></li>
                            </ul>
                        </div>
                        
                        <div class="sidebar-widget tag">
                            <h2 class="title">Etiquetas</h2>
                            <a href="#">Pantalon</a>
                            <a href="#">Remera</a>
                            <a href="#">Sueter</a>
                            <a href="#">Camisa</a>
                            <a href="#">Zapatillas</a>
                            <a href="#">Gorras</a>
                            <a href="#">Bata</a>
                            <a href="#">Vestido</a>
                        </div>
                    </div>
                    <!-- Barra lateral termina -->
                </div>
            </div>
        </div>
        <!-- Barra de productos termina -->  
        
        <!-- Marcas empieza -->
       <!-- <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>-->
        <!-- Marcas termina -->
        
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
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>

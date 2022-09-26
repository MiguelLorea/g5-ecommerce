
<?php include '../formulario_registro/conexion/conexion.php';




?>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>pagina web</title>
    <link rel="shortcut icon" href="img/icono.png" type="image/x-icon">
    <!--ponemos icono-->
    <link rel="stylesheet" href="css/pag-principal.css">

    <link rel="stylesheet" href="css/fontello.css">
   
   

    <!--<meta content="width=device-width, initial-scale=1.0" name="viewport">-->

</head>

<body>
    
    <script  src="jquery/jquery-3.6.0.min.js"></script>
    
  
    <!-- shift alt f, para acomodar el codigo-->
 

    <header>
        
       <input type="checkbox" id="btn-menu">
       

        <label class="icono">

           <!-- <div><img class="img" src="img/icono.png"></div>-->
            
            <nav>

                <p>Menú</p>

            </nav>

            <label for="btn-menu" class="icon-menu">

               

            </label>
            
            

        </label>

        


        <nav class="menu">

            
            <ul>

                <div><img src="img/icono.png"></div>







                <li class="submenu"><a href="#">Inicio<span class="icon-down-open"></span></a>
                  
                    <ul>

                    <li> <a href="socialauthphp/indexingreso.php " #="">registrarse con redes sociales</a> </li>
                    <li>
<?php
if(isset($_SESSION['nombredelusuario']))
{
    $usuarioingresado = $_SESSION['nombredelusuario'];
    
    echo "<tr><td colspan='2' align='center'><a href='../carpeta-pagina tienda/index.php'>Bienvenido: $usuarioingresado </a></td></tr>";

}
else
{

echo "<a href='../formulario_registro/admin/altadetienda.php'>registrar tu local</a>";

                       
                   

                
                    }
?>
       



              <?php
if(isset($_SESSION['nombredelusuario']))
{


    echo "<a href='logout.php'>Cerrar Sesión</a>";
 


}


?></form>

  </ul>
 
  

                </li>

              <li><a href=#quienessomos>Quíenes somos</a></li>
                <li><a href="" #="">Categorías</a></li>
                <li><a href="" #="">Nuestros Servicios</a></li>
                <li><a href="" #="">Contacto</a></li>
            </ul>
        </nav>
      
        

        <section class="textos-header">


            <h2><em>Potencía tus ventas al menos un 200% con</em> </h2>
            <h1>LA GALERÍA</h1>


        </section>


        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-0.00,49.99 C219.36,230.27 363.26,50.67 500.01,49.99 L500.01,150.00 L-0.00,150.00 Z"
                    style="stroke: none; fill: rgb(243, 246, 249);"></path>
            </svg></div>



        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-0.00,49.99 C230.64,162.18 349.21,-49.99 500.01,49.99 L500.01,150.00 L-0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>

        </div>

    </header>

    


    <main>
        <!-- especifica el contenido principal de un documento.-->

        <section class="contenedor sobre-nosotros" id="quienessomos">
            <h2 class="titulo"><u>QUÍENES SOMOS</u></h2>
            <br>
            <br>
            <div class="contenedor-sobre-nosotros">

                <img src="img/undraw_People_re_8spw.png" alt="" class="imagen-about-us">
                <div class="contenidos-textos">
                    <!--<h3><span>1</span></h3>-->
                    <p>¡La Galería!, es una plataforma de comercio virtual, <b><i style="color: rgb(33, 17, 102)";>confiable y segura</i></b>.
                         
                    </p>
                    <!--<h3><span>2</span></h3>-->
                    
                    <p>
                        Está diseñada <b><i style="color: rgb(33, 17, 102)";> para pequeñas empresas y/o negocios</i></b> , que desean ofrecer sus productos/servicios, a través de internet,<b><i style="color: rgb(33, 17, 102)";>permitiéndole aumentar los ingresos y  tener su propia tienda virtual fácil de manejar</i></b>.
                        <br>
                        Además en esta plataforma, podrás realizar tus compras las 24 horas de día.
                    </p>
                    <!--<h3><span>3</span>bla bla bla</h3>
                    <p></p>  </p>-->


                </div>

            </div>

        </section>




        <section class="portafolio">



            <div class="contenedor">

                <!-- <h3 class="titulo1"><u>¡¡forma parte de LA GALERIA!!<br> ingresa a:</u></h3>-->
                <h2 class="titulo"><u>CATEGORÍAS</u></h2>
                <br>
                <br>

            
                <div class="galeria-port">

                    <div class="imagen-port">

                        <img src="img/mujer.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>MUJER</p>
                        </div>
                    </div>

                    <div class="imagen-port">

                        <img src="img/hombres.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>HOMBRE</p>
                        </div>
                    </div>

                    <div class="imagen-port">

                        <img src="img/bebe.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>BEBES</p>
                        </div>
                    </div>

                    <div class="imagen-port">

                        <img src="img/hogar.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>HOGAR</p>
                        </div>
                    </div>

                    <div class="imagen-port">

                        <img src="img/cosmetologia.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>BELLEZA</p>
                        </div>
                    </div>


                    <div class="imagen-port">

                        <img src="img/TECNOLOGIA.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>TECNOLOGÍA</p>
                        </div>
                    </div>



                    <div class="imagen-port">

                        <img src="img/DEPORTE.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>DEPORTE</p>
                        </div>
                    </div>

                    <div class="imagen-port">

                        <img src="img/GASTRONOMIA.jpg" alt="">

                        <div class="hover-galeria">

                            <img src="img/icono1.png" alt="">
                            <p>GASTRONOMÍA</p>
                        </div>
                    </div>


                </div>

                <BR>
                <BR>

                <h2 class="titulo"><u>PRODUCTOS DESTACADOS</h2></u>

                

            </div>


            

            <div class="banner">

            </div>


        </section>


        <section class="clientes contenedor">
            <h2 class="titulo"><u>QUE DICEN NUESTROS CLIENTES</u></h2>
            <br>
            <br>
            <div class="cards">

                <div class="card">

                    <img src="img/cara1.png" alt="">
                    <div class="contenido-texto-card">
                        <h4>name</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, aperiam.</p>

                    </div>
                </div>

                <div class="card">

                    <img src="img/cara2.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>name</h4>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, aperiam.</p>

                    </div>
                </div>


            </div>
        </section>

        <section>

            <div class="about-servicios">

                <div class="contenedor">

                    <h2 class="titulo"><u>NUESTROS SERVICIOS</u></h2>
                    <br>
                    <br>
                    <div class="servicio-cont">

                        <div class="servicio-ind">

                            <img src="img/undraw_Services_re_hu5n.png" alt="">
                            <h3>CHAT EN VIVO</h3>
                            <p>podes chatear en el momento con el vendedor.</p>


                        </div>

                        <div class="servicio-ind">

                            <img src="img/undraw_Programming_re_kg9v.png" alt="">
                            <h3>GALERIA DE DISEÑO</h3>
                            <p>podras ingluir logo y fondo de pantalla personalizados.</p>


                        </div>
                        <div class="servicio-ind">

                            <img src="img/undraw_Contact_us_re_4qqt.png" alt="">
                            <h3>NAME</h3>
                            <p>bla-bla-bla</p>



                        </div>

                    </div>




                </div>
            </div>

        </section>


    </main>

    <footer>

        <div class="contenedor-footer">

            <div class="content-foo">
                <h4>TELÉFONO</h4>
                <p>3512786549</p>

            </div>

            <div class="content-foo">
                <h4>EMAIL</h4>
                <p>lagaleria@gmail.com</p>

            </div>

            <div class="content-foo">
                <h4>CHAT</h4>
                <p>....</p>

            </div>


        </div>
        <h2 class="titulo-final">&copy;lA GALERIA MULTILOCAL</h2>
    </footer>

    

    <script src="jquery/menu.js"></script>
   


</body>

</html>
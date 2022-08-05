<?php include 'conexion/conexion.php'; ?>



    <head>
        <meta charset="utf-8">
        <title>eCommerce HTML ITSC</title>
		<!-- Vista desde cualquier navegador (Ancho y escala) -->
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce Multilocal" name="keywords">
        <meta content="eCommerce Multilocal" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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
							<a href= "index.html" class=" nav-item nav-link"></span><i class="fa fa-home" aria-hidden="true"></i>  Inicio</a> 
                            <a href="product-list.html" class="nav-item nav-link "> <i class="fa fa-archive" aria-hidden="true"></i> Productos</a>
                            <a href="" class="nav-item nav-link "> <i class="fa fa-archive" aria-hidden="true"></i> Detalles del Productos</a>
                            <!--<a href="product-detail.html" class="nav-item nav-link">Detalles del producto</a>-->
                            <a href="" class="nav-item nav-link "> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Compras</a>
                            <a href="" class="nav-item nav-link"><i class="fa fa-truck" aria-hidden="true"></i>  Envios</a>
                             <a href="altadeinventario/admin/inventario.php" class="nav-item nav-link"><i class="fa fa-truck" aria-hidden="true"></i>Subir productos</a>
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
                                <a href="altadeinventario/admin/inventario.php" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i>  Mi cuenta</a>
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


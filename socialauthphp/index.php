<?php 
session_start();

require_once('vendor/autoload.php');
require_once('App/Auth/Auth.php');
?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Inicio de sesion en mostrador virutal con redes sociales</title>
     <link rel="stylesheet" href="assets/css/bootstrap.css">
     <link rel="stylesheet" href="assets/css/font-awesome.css">
     <link rel="stylesheet" href="assets/css/bootstrap-social.css">
     <script src="assets/js/jquery.js" charset="utf-8"></script>
     <link rel="stylesheet" href="index.css">
   </head>
   <body>
    <section id="pantalla-dividida">
      <div class="izquierda">
     <div class="container">
       <div class="row">
        <?php if (Auth::isLogin()): ?>
          <h2>Sesion iniciada con exito!</h2>
          <h2>Hola <?php echo $_SESSION['user']['name'] ?></h2>
          <a href="logout.php">Cerrar Sesion</a>
        <?php else: ?>
          <?php
            Auth::getUserAuth();
           ?>
           
           <div class="bg-4">
.
     <h2 class="t-stroke t-shadow-halftone2">Selecciona con cual red social quieres ingresar</h2>
.
</div>
          <div class="col-md-6" >
            <a href="?login=Facebook" class="btn btn-block btn-social btn-facebook"><span class="fa fa-facebook"></span> Inicia sesion con Facebook</a>
            <a href="?login=Google" class="btn btn-block btn-social btn-google"><span class="fa fa-google"></span> Inicia sesion con Google</a>
            <a href="?login=Twitter" class="btn btn-block btn-social btn-twitter"><span class="fa fa-twitter"></span> Inicia sesion con Twitter</a>
          </div>
         
        <?php endif; ?>
        
        </div>
     </div>
     <div class="infor">
      <footer>-Mostrador VirtualⒸ recopilara informacion de la cuenta con la cual inicies sesion 
            solo para fines informativos, solo usaremos el email y el nombre de la cuenta.-</footer>
     </div>
     </div>
     <div class="derecha">
      <h1>Mostrador virtual</h1>
      </div>
      
   </body>
 </html>

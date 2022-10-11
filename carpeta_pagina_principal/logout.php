<?php
@session_start();
session_destroy();
/*header("Location: ../carpeta_pagina_principal/index.php");*/
header("Location: ../formulario_registro/admin/altadetienda.php");
?>
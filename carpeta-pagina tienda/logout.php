<?php
@session_start();
session_destroy();
header("Location: ../formulario_registro/admin/altadetienda.php");
?>
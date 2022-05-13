<?php @session_start();
$con = new PDO('mysql:host=localhost;dbname=ecommerceg5', 'root', '');
$con->exec('set names utf8');
 ?>
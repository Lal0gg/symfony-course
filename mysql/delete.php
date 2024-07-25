<?php

require_once('conectar.php');
$d = new Datos();
if (!isset($_GET['Id'])) {
    die("Error");
}
$d->setDatos("delete from productos where Id ='" . $_GET['Id'] . "'");
header("Location:productos.php");
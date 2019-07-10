<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';
require '../src/config/Funciones.php'; 
$app = new \Slim\App;
 
// Ruta clientes
require '../src/rutas/clientes.php';
require '../src/rutas/usuarios.php';



$app->run();

?>
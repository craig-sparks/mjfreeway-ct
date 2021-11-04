<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('index', new Route('/', array('controller' => 'MainController', 'method'=>'index')));
$routes->add('process', new Route('/process', array('controller' => 'MainController', 'method'=>'process')));
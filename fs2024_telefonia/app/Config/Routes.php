<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_lineastelefonicas', 'LineasTelefonicas::index');
$routes->get('ver_planes', 'Planes::index');
//Controlador     metodo

$routes->get('planes', 'PlanesController::index');
$routes->get('nuevo_plan', 'PlanesController::nuevoPlan');
$routes->post('agregar_plan', 'PlanesController::agregarPlan');
//Crear una ruta a traves del metodo post

$routes->get('clientes', 'ClientesController::index');
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
$routes->get('nuevo_cliente', 'ClientesController::nuevoCliente'); //va a retornar la vista que tiene el controlador (formulario)       

$routes->get('lineastelefonicas', 'LineasTelefonicasController::index');
$routes->post('agregar_lineastelefonicas', 'LineasTelefonicasController::agregarLineasTelefonicas');
$routes->get('nuevas_lineastelefonicas', 'LineasTelefonicasController::nuevaslineastelefonicas');

$routes->get('eliminar_plan/(:num)', 'PlanesController::eliminarPlan/$1');

$routes->get('eliminar_clientes/(:num)', 'ClientesController::eliminarClientes/$1');
                //  ruta                 controlador    metodo   parametro


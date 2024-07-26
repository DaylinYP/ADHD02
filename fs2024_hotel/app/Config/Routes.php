<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
//RUTA PARA ENTRAR A LAS TABLAS
$routes->get('ver_clientes', 'Clientes::index');
$routes->get('ver_hoteles', 'Hoteles::index');
$routes->get('ver_reservaciones', 'Reservaciones::index');

//RUTA PARA IR A LA PAGINA DE INSERCION
$routes->get('clientes', 'ClientesController::index');
$routes->get('nuevo_cliente', 'ClientesController::nuevoCliente');//lleva a los formularios
$routes->post('agregar_cliente', 'ClientesController::agregarCliente');
//Arriba, ruta que agrega al cliente desde el formulario nuevo_cliente y lo lleva a la tabla clientes
$routes->get('hoteles', 'HotelesController::index');
$routes->get('nuevo_hotel', 'HotelesController::nuevoHotel');//lleva a los formularios
$routes->post('agregar_hotel', 'HotelesController::agregarHotel');

$routes->get('reservaciones', 'ReservacionesController::index');
$routes->get('nueva_reservacion', 'ReservacionesController::nuevaReservacion');
$routes->post('agregar_reservacion', 'ReservacionesController::agregarReservacion');


//RUTA PARA ELIMINAR
$routes->get('eliminar_clientes/(:num)', 'ClientesController::eliminarClientes/$1');
$routes->get('eliminar_hoteles/(:num)', 'HotelesController::eliminarHoteles/$1');
$routes->get('eliminar_reservaciones/(:num)', 'ReservacionesController::eliminarReservaciones/$1');
//RUTA PARA ACTUALIZAR
$routes->get('actualizar_clientes/(:num)', 'ClientesController::actualizarClientes/$1');
$routes->get('actualizar_hoteles/(:num)', 'HotelesController::actualizarHoteles/$1');
$routes->get('actualizar_reservaciones/(:num)', 'ReservacionesController::actualizarReservaciones/$1');
//MODIFICAR DATOS
$routes->post('modificar_clientes', 'ClientesController::modificarClientes');
$routes->post('modificar_hoteles', 'HotelesController::modificarHoteles');
$routes->post('modificar_reservaciones', 'ReservacionesController::modificarReservaciones');
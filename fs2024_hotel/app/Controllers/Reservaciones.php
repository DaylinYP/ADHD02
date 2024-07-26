<?php

namespace App\Controllers;

use App\Models\ReservacionesModel;

class Reservaciones extends BaseController
{
    public function index(): string
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->findAll();

        return view('reservaciones', $datos);
    }
} 

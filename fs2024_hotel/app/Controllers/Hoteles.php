<?php

namespace App\Controllers;

use App\Models\HotelesModel;

class Hoteles extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->findAll();

        return view('hoteles', $datos);
    }
} 

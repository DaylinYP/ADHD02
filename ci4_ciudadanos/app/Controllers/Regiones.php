<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\RegionesModel;

class Regiones extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $region = new RegionesModel();
        $datos['datos'] = $region->findAll(); //select * from regiones


        return view('regiones',$datos); //Lo de views
    }
}

    
<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\PlanesModel;

class Planes extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $planes = new PlanesModel();
        $datos['datos'] = $planes->findAll(); //select * from clientes


        return view('planes',$datos); //Lo de views
    }
}

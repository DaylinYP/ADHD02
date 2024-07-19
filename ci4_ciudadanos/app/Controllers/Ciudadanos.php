<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\CiudadanosModel;

class Ciudadanos extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $ciudadanos = new CiudadanosModel();
        $datos['datos'] = $ciudadanos->findAll(); //select * from regiones


        return view('ciudadanos',$datos); //Lo de views
    }
}

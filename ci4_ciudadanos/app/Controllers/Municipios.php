<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\MunicipiosModel;

class Municipios extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $municipios = new MunicipiosModel();
        $datos['datos'] = $municipios->findAll(); //select * from regiones


        return view('municipios',$datos); //Lo de views
    }
}

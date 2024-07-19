<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\DepartamentosModel;

class Departamentos extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $departamentos = new DepartamentosModel();
        $datos['datos'] = $departamentos->findAll(); //select * from regiones


        return view('departamentos',$datos); //Lo de views
    }
}

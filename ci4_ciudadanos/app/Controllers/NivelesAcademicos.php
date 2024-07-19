<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\NivelesAcademicosModel;

class NivelesAcademicos extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $nivelesacademicos = new NivelesAcademicosModel();
        $datos['datos'] = $nivelesacademicos->findAll(); //select * from regiones


        return view('nivelesacademicos',$datos); //Lo de views
    }
}

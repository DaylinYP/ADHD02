<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\LineasTelefonicasModel;

class LineasTelefonicas extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $lineastelefonicas = new LineasTelefonicasModel();
        $datos['datos'] = $lineastelefonicas->findAll(); //select * from clientes


        return view('lineastelefonicas', $datos); //Lo de views
    }
}

<?php

namespace App\Controllers;
//Utilizar el modelo
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string
    {
        //Creando un objeto de tipo RegionesModel
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll(); //select * from clientes


        return view('clientes', $datos); //Lo de views
    }
}

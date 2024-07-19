<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll();
        //clientes es la vista que muestra los clientes
        //pendiente de diseñar
        return view('clientes', $datos);
    }
    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }

    public function agregarCliente()
    {
        $datos = [

            'cliente_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'calle_avenida' => $this->request->getVar('txtCalleAvenida'),
            'no_casa' => $this->request->getVar('txtNoCasa'),
            'zona' => $this->request->getVar('txtZona')
        ];

        $clientes = new ClientesModel();
        $clientes->insert($datos); //insert into cliente values (...)
        echo "Datos guardados";
        return redirect()->route('clientes');
    }
    public function eliminarClientes($id = null)
    {
        $clientes = new ClientesModel(); //Models
        $clientes->delete(['cliente_id'=>$id]); //Nombre de la llave primaria = la que se coloca en el controlador
       //Redireccionarlo a la tabla clientes
        return redirect()->route('clientes');
    }
}

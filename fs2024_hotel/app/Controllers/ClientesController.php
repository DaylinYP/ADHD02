<?php

namespace App\Controllers;

use App\Models\ClientesModel;

class ClientesController extends BaseController
{
    //LLEVAR A LA PAGINA PARA CREAR CLIENTE
    public function index(): string
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes->findAll();

        return view('clientes', $datos);
    }
    public function nuevoCliente(): string
    {
        return view('clientes_nuevos');
    }

    //INSERTAR NUEVO CLIENTE
    public function agregarCliente()
    {
        $datos = [
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtNit'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'correo_electronico' => $this->request->getVar('txtCorreoElectronico'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'contrasenia' => $this->request->getVar('txtContrasenia')
        ];
        $clientes = new ClientesModel();
        $clientes->insert($datos);
        return redirect()->route('clientes');
    }

    //ELIMINAR CLIENTE

    public function eliminarClientes($id=null)
    {
        $clientes = new ClientesModel();
        $clientes->delete($id);
        return redirect()->route('ver_clientes');
    }
        //ACTUALIZAR CLIENTE
    public function actualizarClientes($id=null)
    {
        $clientes = new ClientesModel();
        $datos['datos'] = $clientes -> where ('cliente_id', $id)->first();
        return view('form_modificar_clientes', $datos);
    }

 
    //MODIFICAR CLIENTE
    public function modificarClientes()
    {
        $datos = [
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtNit'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'correo_electronico' => $this->request->getVar('txtCorreoElectronico'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'contrasenia' => $this->request->getVar('txtContrasenia')
        ];
        $clientes = new ClientesModel();
        $clientes->update($datos['cliente_id'], $datos);
        return redirect('ver_clientes');
    }
}
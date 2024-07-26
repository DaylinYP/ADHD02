<?php
namespace App\Controllers;

use App\Models\HotelesModel;

class HotelesController extends BaseController
{
    //LLEVAR A LA PAGINA PARA CREAR CLIENTE
    public function index(): string
    {
        $hoteles = new HotelesModel();
        $datos['datos'] = $hoteles->findAll();

        return view('hoteles', $datos);
    }
    public function nuevoHotel(): string
    {
        return view('hoteles_nuevos');
    }

    //INSERTAR NUEVO HOTEL
    public function agregarHotel()
    {
        $datos = [
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreoElectronico'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        //print_r($datos);
        $hoteles = new HotelesModel();
        $hoteles->insert($datos);
        return redirect()->route('hoteles');
    }
      //ELIMINAR HOTEL

      public function eliminarHoteles($id=null)
      {
          $hoteles = new HotelesModel();
          $hoteles->delete($id);
          return redirect()->route('ver_hoteles');
      }
          //ACTUALIZAR HOTEL
      public function actualizarHoteles($id=null)
      {
          $hoteles = new HotelesModel();
          $datos['datos'] = $hoteles -> where ('hotel_id', $id)->first();
          return view('form_modificar_hoteles', $datos);
      }
      //MODIFICAR HOTEL
    public function modificarHoteles()
    {
        $datos = [
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreoElectronico'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        $hoteles = new HotelesModel();
        $hoteles->update($datos['hotel_id'], $datos);
        return redirect('ver_hoteles');
    }
}
?>
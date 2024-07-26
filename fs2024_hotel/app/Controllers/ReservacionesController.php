<?php
namespace App\Controllers;

use App\Models\ReservacionesModel;

class ReservacionesController extends BaseController
{
    //LLEVAR A LA PAGINA PARA CREAR RESERVACION
    public function index(): string
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->findAll();

        return view('reservaciones', $datos);
    }
    public function nuevaReservacion(): string
    {
        return view('reservaciones_nuevas');
    }

    //INSERTAR NUEVA RESERVACION
    public function agregarReservacion()
    {
        $datos = [
            'reservacion_id'=> $this->request->getVar('txtReservacionId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id'=> $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id'=> $this->request->getVar('txtUsuarioId')
        ];
        $reservaciones = new ReservacionesModel();
        $reservaciones->insert($datos);
        return redirect()->route('reservaciones');
    }
    //ELIMINAR RESERVACION
    public function eliminarReservaciones($id=null)
    {
        $reservaciones = new ReservacionesModel();
        $reservaciones->delete($id);
        return redirect()->route('ver_reservaciones');
    }
    //ACTUALIZAR CLIENTE
    public function actualizarReservaciones($id=null)
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos'] = $reservaciones->where('reservacion_id', $id)->first();
        return view('form_modificar_reservaciones', $datos);

    }
    //MODIFICAR CLIENTE
    public function modificarReservaciones()
    {
        $datos = [
            'reservacion_id'=> $this->request->getVar('txtReservacionId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id'=> $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id'=> $this->request->getVar('txtUsuarioId')
        ];
        $reservaciones = new ReservacionesModel();
        $reservaciones->update($datos['reservacion_id'], $datos);
        return redirect ('ver_reservaciones');
    }
}
   

?>
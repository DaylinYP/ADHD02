<?php

namespace App\Controllers;

use App\Models\PlanesModel;

class PlanesController extends BaseController
{
    public function index(): string
    {
        $planes = new PlanesModel();

        /* select * from planes = findAll()*/
        $datos['datos'] = $planes->findAll();

        //print_r($datos);

        return view('planes', $datos);
    }
    public function nuevoPlan(): string
    {
        return view('planes_nuevos');
    }
    public function agregarPlan()
    {
        $datos = [
            'plan_id' => $this->request->getVar('txtId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'pago_mensual' => $this->request->getVar('txtPagoMensual'),
            'cantidad_minutos' => $this->request->getVar('txtCantidadMinutos'),
            'cantidad_mensajes' => $this->request->getVar('txtCantidadMensajes')
        ];
        $planes = new PlanesModel();
        $planes->insert($datos);
        echo "Datos guardados";
        return redirect()->route('planes');
    }
    public function eliminarPlanes($plan_id = null)
    {
        $planes = new PlanesModel();
        $planes->delete(['plan_id'=>$plan_id]);
        return redirect()->route('planes');
    }
}

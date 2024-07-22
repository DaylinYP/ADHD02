<?php

namespace App\Controllers;

use App\Models\LineasTelefonicasModel;

class LineasTelefonicasController extends BaseController
{
    public function index(): string
    {
        $lineastelefonicas = new LineasTelefonicasModel();
        $datos['datos'] = $lineastelefonicas->findAll();
        //clientes es la vista que muestra los clientes
        //pendiente de diseñar
        return view('lineastelefonicas', $datos);
    }
    public function nuevaslineastelefonicas(): string
    {
        return view('lineastelefonicas_nuevas');
    }

    public function agregarLineasTelefonicas()
    {
        $datos = [

            'no_telefono' => $this->request->getVar('txtNoTelefono'),
            'fecha_pago' => $this->request->getVar('txtFechaPago'),
            'meses_atraso' => $this->request->getVar('txtMesesAtraso'),
            'plan_id' => $this->request->getVar('txtPlanId'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
        ];

        $lineastelefonicas = new LineasTelefonicasModel();
        $lineastelefonicas->insert($datos);
        echo "Datos guardados";
        return redirect()->route('lineastelefonicas');
    }

    public function eliminarLineasTelefonicas($no_telefono = null)
    {
        $lineastelefonicas = new LineasTelefonicasModel();
        $lineastelefonicas->delete(['no_telefono'=>$no_telefono]);
        return redirect()->route('lineastelefonicas');
    }
}

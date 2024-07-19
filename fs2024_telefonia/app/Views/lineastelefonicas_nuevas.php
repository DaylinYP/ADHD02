<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineas Telefónicas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        label,
        h1,
        a {
            color: white;
            text-shadow: 4px 2px 4px #000;
        }
    </style>
</head>

<body style="background-color: #6e6e6e;">
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row text-light table-dark">
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('nuevo_cliente'); ?>">Clientes Nuevos</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('nuevas_lineastelefonicas'); ?>">Líneas Telefónicas Nuevas</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('nuevo_plan'); ?>">Planes Nuevos</a>
        </nav>

        <h1 style="color:#ffff;">Líneas Telefónicas</h1>
        <form action="agregar_lineastelefonicas" method="post"> <!--Metodo post para que se vayan los datos ocultos-->
            <div class="mb-8">
                <label for="txtNoTelefono" class="form-label">No. Teléfono</label>
                <input type="number" id="txtNoTelefono" name="txtNoTelefono" class="form-control" placeholder="Ingrese su número de teléfono">
            </div>

            <div class="mb-8">
                <label for="txtFechaPago" class="form-label">Fecha de Pago</label>
                <input type="number" id="txtFechaPago" name="txtFechaPago" class="form-control" placeholder="Ingrese fecha de pago">
            </div>

            <div class="mb-8">
                <label for="txtMesesAtraso" class="form-label">Meses Atraso</label>
                <input type="number" id="txtMesesAtraso" name="txtMesesAtraso" class="form-control" placeholder="Ingrese meses de atraso">
            </div>

            <div class="mb-8">
                <label for="txtPlanId" class="form-label">Plan ID</label>
                <input type="number" id="txtPlanId" name="txtPlanId" class="form-control" placeholder="Ingrese plan ID">
            </div>

            <div class="mb-8">
                <label for="txtClienteId" class="form-label">Cliente ID</label>
                <input type="number" id="txtCalleAvenida" name="txtClienteId" class="form-control" placeholder="Ingrese cliente ID">
            </div>
            <br>
            <div class="mb-8">
                <input type="submit" value="Guardar" id="btnGuardarLineas" name="btnGuardarLineas" class="form-control btn btn-danger">
            </div>
        </form>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous"></script>
</body>

</html>
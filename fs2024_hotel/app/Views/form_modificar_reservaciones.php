<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Reservación</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AT:ital,wght@0,100..400;1,100..400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
    a {
        color: white;
        text-shadow: 4px 2px 4px #000;
        font-size: 20px;
    }

    h1 {
        color: white;
        text-shadow: 4px 2px 4px #000;
        margin-top: 50px;
    }
    </style>
</head>

<body style="background-color: #0b2346">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-6">
                <h1 style="color:#ffff;">Modificación de Reservaciones</h1>
                <a class="btn btn-outline-danger shadow-lg p-3 mb-5 bg-body rounded"
                    href="<?php echo base_url('ver_reservaciones') ?>" role="button"><i
                        class="bi bi-arrow-left-square-fill">
                        Regresar</i></a>

                <form action="<?= base_url('modificar_reservaciones');?>" method="post">
                    <div class="mb-3" style=" color: white;">
                        <label for="txtReservacionId" class="form-label">Reservación Id</label>
                        <input type="number" id="txtReservacionId" name="txtReservacionId" class="form-control"
                            placeholder="Ingrese reservación ID" readonly value="<?=$datos['reservacion_id'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtFecha" class="form-label">Fecha</label>
                        <input type="date" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="Ingrese fecha" value="<?=$datos['fecha'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtClienteId" class="form-label">Cliente ID</label>
                        <input type="number" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese cliente ID" value="<?=$datos['cliente_id'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtHotelId" class="form-label">Hotel ID</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese su hotel ID" value="<?=$datos['hotel_id'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtDescripcion" class="form-label">Descripción</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control"
                            placeholder="Ingrese descripción" value="<?=$datos['descripcion'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtUsuarioId" class="form-label">Usuario ID</label>
                        <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control"
                            placeholder="Ingrese usuario ID" value="<?=$datos['usuario_id'];?>">
                    </div>

                    <div class="mb-8">
                        <input type="submit" value="Guardar cambios" id="btnGuardarReservacion"
                            name="btnGuardarReservacion" class="form-control btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>


    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous">
    </script>
</body>

</html>
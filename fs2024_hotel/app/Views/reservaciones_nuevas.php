<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones Nuevas</title>
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
        font-size: 22px;
    }

    h1,
    h2 {
        margin-top: 50px;
        color: white;
        text-shadow: 4px 2px 4px #000;
    }
    </style>
</head>

<body style="background-color: #0b2346">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h2 class="animate__animated animate__backInLeft">Reservación Nueva</h2>
                <a class="btn btn-outline-danger shadow-lg p-3 mb-5 bg-body rounded"
                    href="<?php echo base_url('ver_reservaciones') ?>" role="button"><i class="bi bi-arrow-left-square-fill">
                        Regresar</i></a>
                <form action="agregar_reservacion" method="post">
                    <div class="mb-3" style=" color: white;">
                        <label for="txtReservacionId" class="form-label">Reservación Id</label>
                        <input type="number" id="txtReservacionId" name="txtReservacionId" class="form-control"
                            placeholder="Ingrese reservación ID">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtFecha" class="form-label">Fecha</label>
                        <input type="date" id="txtFecha" name="txtFecha" class="form-control"
                            placeholder="Ingrese fecha">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtClienteId" class="form-label">Cliente ID</label>
                        <input type="number" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese cliente ID">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtHotelId" class="form-label">Hotel ID</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese su hotel ID">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtDescripcion" class="form-label">Descripción</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control"
                            placeholder="Ingrese descripción">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtUsuarioId" class="form-label">Usuario ID</label>
                        <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control"
                            placeholder="Ingrese usuario ID">
                    </div>

                    <div class="mb-8">
                        <input type="submit" value="Agregar Reservación" id="btnGuardarReservacion" name="btnGuardarReservacion"
                            class="form-control btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
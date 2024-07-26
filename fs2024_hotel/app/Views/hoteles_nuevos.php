<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoteles Nuevos</title>
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
        margin-top: 20px;
        color: white;
        text-shadow: 4px 2px 4px #000;
    }
    </style>
</head>

<body style="background-color: #0b2346">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-4">
                <h2 class="animate__animated animate__backInLeft"> Nuevo Hotel</h2>
                <a class="btn btn-outline-success shadow-lg p-3 mb-5 bg-body rounded"
                    href="<?php echo base_url('ver_hoteles') ?>" role="button"><i class="bi bi-arrow-left-square-fill">
                        Regresar</i></a>
                <form action="agregar_hotel" method="post">
                    <div class="mb-3" style=" color: white;">
                        <label for="txtHotelId" class="form-label">Hotel Id</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control"
                            placeholder="Ingrese su ID">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese el nombre">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtCorreoElectronico" class="form-label">Correo Electrónico</label>
                        <input type="email" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control"
                            placeholder="Ingrese su correo electronico">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtTelefono" class="form-label">Teléfono</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control"
                            placeholder="Ingrese su teléfono">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtDireccion" class="form-label">Dirección</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control"
                            placeholder="Ingrese direccion">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtCiudadId" class="form-label">Ciudad ID</label>
                        <input type="number" id="txtCiudadId" name="txtCiudadId" class="form-control"
                            placeholder="Ingrese su ciudad ID">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtCategoriaId" class="form-label">Categoría ID</label>
                        <input type="number" id="txtCategoriaId" name="txtCategoriaId" class="form-control"
                            placeholder="Ingrese su categoría ID">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtUsuarioId" class="form-label">Categoría Usuario</label>
                        <input type="number" id="txtUsuarioId" name="txtUsuarioId" class="form-control"
                            placeholder="Ingrese usuario ID">
                    </div>

                    <div class="mb-8">
                        <input type="submit" value="Guardar" id="btnGuardarHotel" name="btnGuardarHotel"
                            class="form-control btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
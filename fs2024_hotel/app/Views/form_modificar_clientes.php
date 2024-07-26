<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Cliente</title>
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

    .navbar-brand {
        text-shadow: 5px 2px 5px #000;
        font-size: 50px;
        font-family: "Playwrite AT", cursive;
        font-optical-sizing: auto;
        font-style: normal;
    }
    </style>
</head>

<body style="background-color: #0b2346">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-6">
                <h1 style="color:#ffff;">Modificación de Cliente</h1>
                <a class="btn btn-outline-danger shadow-lg p-3 mb-5 bg-body rounded"
                    href="<?php echo base_url('ver_clientes') ?>" role="button"><i class="bi bi-arrow-left-square-fill">
                        Regresar</i></a>

                <form action="<?= base_url('modificar_clientes');?>" method="post">

                    <div class="mb-3" style=" color: white;">
                        <label for="txtClienteId" class="form-label">ID</label>
                        <input type="number" id="txtClienteId" name="txtClienteId" class="form-control"
                            placeholder="Ingrese su ID" readonly value="<?= $datos['cliente_id'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control"
                            placeholder="Ingrese su nombre" value="<?= $datos['nombre'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control"
                            placeholder="Ingrese su apellido" value="<?= $datos['apellido'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtNit" class="form-label">NIT</label>
                        <input type="number" id="txtNit" name="txtNit" class="form-control" placeholder="Ingrese su NIT"
                            value="<?= $datos['nit'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtTelefono" class="form-label">Teléfono</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control"
                            placeholder="Ingrese su teléfono" value="<?= $datos['telefono'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtCorreoElectronico" class="form-label">Correo Electrónico</label>
                        <input type="email" id="txtCorreoElectronico" name="txtCorreoElectronico" class="form-control"
                            placeholder="Ingrese su correo electrónico" value="<?= $datos['correo_electronico'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtDireccion" class="form-label">Dirección</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control"
                            placeholder="Ingrese su dirección" value="<?= $datos['direccion'];?>">
                    </div>

                    <div class="mb-3" style=" color: white;">
                        <label for="txtContrasenia" class="form-label">Contraseña</label>
                        <input type="password" id="txtContrasenia" name="txtContrasenia" class="form-control"
                            placeholder="Ingrese su contraseña" value="<?= $datos['contrasenia'];?>">
                    </div>
                    <div class="mb-8">
                        <input type="submit" value="Guardar cambios" id="btnGuardarCliente" name="btnGuardarCliente"
                            class="form-control btn btn-danger">
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
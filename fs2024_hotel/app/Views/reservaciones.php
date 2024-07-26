<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
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
    }
  
    .navbar-brand {
        text-shadow: 5px 2px 5px #000;
        font-size: 50px;
        font-family: "Playwrite AT", cursive;
        font-optical-sizing: auto;
        font-style: normal;
        height: 120px;
    }
    .nav-link:hover{
        color: #92cace !important;
    }
    </style>
</head>

<body style="background-color: #0b2346">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <a class="navbar-brand" href="#">Hoteles Guatemala</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_clientes'); ?>"><i class="bi bi-person-square"> Clientes</i></a>
        <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_hoteles'); ?>"><i class="bi bi-buildings"> Hoteles</i></a>
        <a class="flex-sm-fill text-sm-center nav-link"
            href="<?php echo base_url('ver_reservaciones'); ?>"><i class="bi bi-clipboard-fill"> Reservaciones</i></a>
    </nav>

    <div class="container">
        <br>
        <div>
            <h1 style="color:#ffff;">Reservaciones</h1>
            <a class="btn btn-outline-info shadow-lg p-3 mb-5 bg-body rounded"
                href="<?php echo base_url('nueva_reservacion') ?>" role="button"><i class="bi bi-clipboard-plus-fill">
                    Agregar Reservación</i></a>
        </div>
        <table class="table table-border table-striped table-hover table-dark shadow-lg p-3 mb-5 bg-body rounded">
            <thead>
                <tr class="bg-info text-center">
                    <th>Reservación ID</th>
                    <th>Fecha</th>
                    <th>Cliente ID</th>
                    <th>Hotel ID</th>
                    <th>Descripción</th>
                    <th>Usuario ID</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
            foreach ($datos as $reservaciones) :
            ?>
                <tr class="text-center">
                    <td>
                        <?php echo $reservaciones['reservacion_id']; ?>
                    </td>
                    <td>
                        <?php echo $reservaciones['fecha'];?>
                    </td>
                    <td>
                        <?php echo $reservaciones['cliente_id'];?>
                    </td>
                    <td>
                        <?php echo $reservaciones['hotel_id']; ?>
                    </td>
                    <td>
                        <?php echo $reservaciones['descripcion']; ?>
                    </td>
                    <td>
                        <?php echo $reservaciones['usuario_id'];?>
                    </td>

                    <td>
                        <a href="<?=base_url('actualizar_reservaciones/').$reservaciones['reservacion_id']; ?>"
                            class="btn btn-outline-info"><i class="bi bi-pencil-square"> Actualizar</i></a>
                        <a href="<?=base_url('eliminar_reservaciones/'). $reservaciones['reservacion_id']; ?>"
                            class="btn btn-outline-danger"><i class="bi bi-trash-fill"> Eliminar</i></a>
                    </td>
                </tr>
                <?php
            endforeach;
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous">
    </script>
</body>

</html>
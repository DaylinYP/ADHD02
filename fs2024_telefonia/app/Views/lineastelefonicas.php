<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lineas Telefónicas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        a,
        h1 {
            color: white;
            text-shadow: 4px 2px 4px #000;
        }
    </style>
</head>

<body style="background-color: #6e6e6e;">
    <nav class="nav nav-pills flex-column flex-sm-row table-dark">
        <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_clientes'); ?>">Clientes</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_lineastelefonicas'); ?>">Líneas Telefónicas</a>
        <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_planes'); ?>">Planes</a>
    </nav>
    <div class="container">
        <br>
        <a class="btn btn-outline-danger shadow-lg p-3 mb-5 bg-body rounded" href="nuevas_lineastelefonicas" role="button">Regresar<< </a>
                <h1 style="color:#ffff;">Líneas Telefónicas</h1>
                <table class="table table-border table-striped table-hover table-dark shadow-lg p-3 mb-5 bg-body rounded">
                    <thead>
                        <tr class="bg-danger">
                            <th>Número de Tel.</th>
                            <th>Fecha de Pago</th>
                            <th>Meses de Atraso</th>
                            <th>Plan ID</th>
                            <th>Cliente ID</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $lineastelefonicas) :
                        ?>
                            <tr>
                                <td><?php echo $lineastelefonicas['no_telefono']; ?></td>
                                <td><?php echo $lineastelefonicas['fecha_pago']; ?></td>
                                <td><?php echo $lineastelefonicas['meses_atraso']; ?></td>
                                <td><?php echo $lineastelefonicas['plan_id']; ?></td>
                                <td><?php echo $lineastelefonicas['cliente_id']; ?></td>
                            </tr>
                        <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous"></script>
</body>

</html>
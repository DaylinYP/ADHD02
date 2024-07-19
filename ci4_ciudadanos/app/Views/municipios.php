<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Municipios</title>
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
    <div class="container">
        <nav class="nav nav-pills flex-column flex-sm-row text-light table-dark">
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_ciudadanos'); ?>">Ciudadanos</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_departamentos'); ?>">Departamentos</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_municipios'); ?>">Municipios</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_nivelesacademicos'); ?>">Niveles Académicos</a>
            <a class="flex-sm-fill text-sm-center nav-link" href="<?php echo base_url('ver_regiones'); ?>">Regiones</a>

        </nav>
        <h1>Municipios</h1>
        <table class="table table-striped table-border table-dark table-hover">
            <thead class="text-center">
                <tr class="bg-warning">
                    <th>Código Municipio</th>
                    <th>Nombre</th>
                    <th>Código del Departamento</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $municipios) :
                ?>
                    <tr>
                        <td><?php echo $municipios['cod_muni']; ?></td>
                        <td><?php echo $municipios['nombre_municipio']; ?></td>
                        <td><?php echo $municipios['cod_depto']; ?></td>
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
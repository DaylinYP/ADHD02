<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+AT:ital,wght@0,100..400;1,100..400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1 {
            padding: 50px;
            color: white;
            font-family: "Pacifico", cursive;
            font-weight: 400;
            font-style: normal;
            font-size: 80px;

        }

        .btn {
            margin-top: 70px;
            height: 50px;
        }
    </style>
</head>

<body style="background: #000;">
    <nav class="navbar navbar-info bg-info ">
        <div class="container-fluid ">
            <span class="navbar-brand mb-0 h1 ">
                <h1 >HOTELES GUATEMALA</h1>
            </span>
        </div>
    </nav>

    <div class="d-flex flex-column">
        <a href="<?= base_url('ver_clientes'); ?>" class="btn btn-outline-info"><i class="bi bi-person-circle"> Clientes</i></a>


        <a href="<?= base_url('ver_hoteles'); ?>" class="btn btn-outline-info"><i class="bi bi-buildings-fill"> Hoteles</i></a>

        <a href="<?= base_url('ver_reservaciones'); ?>" class="btn btn-outline-info"><i class="bi bi-calendar2-date-fill"> Reservaciones</i></a>
    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-Ycbvyk1if5Kjr4EtpZc+V0zK0WltjF99bDhAu8RHteUG+6Bz4imktB2DlXDK/kF5" crossorigin="anonymous">
    </script>
</body>

</html>
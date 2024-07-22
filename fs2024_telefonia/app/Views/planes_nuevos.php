<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Nuevos Planes</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
      <a class="flex-sm-fill text-sm-center nav-link" style="color: #ffff;" href="<?php echo base_url('nuevo_cliente'); ?>">Clientes Nuevos</a>
      <a class="flex-sm-fill text-sm-center nav-link" style="color: #ffff;" href="<?php echo base_url('nuevas_lineastelefonicas'); ?>">Líneas Telefónicas Nuevas</a>
      <a class="flex-sm-fill text-sm-center nav-link" style="color: #ffff;" href="<?php echo base_url('nuevo_plan'); ?>">Planes Nuevos</a>
    </nav>
    <h1>Nuevo Plan</h1>
    <form action="agregar_plan" method="post">
      <div class="mb-8">
        <label for="txtId" class="form-label">Código</label>
        <input type="text" id="txtId" name="txtId" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtNombre" class="form-label">Nombre</label>
        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtPagoMensual" class="form-label">Pago Mensual</label>
        <input type="number" id="txtPagoMensual" name="txtPagoMensual" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtCantidadMinutos" class="form-label">Cantidad de minutos</label>
        <input type="text" id="txtCantidadMinutos" name="txtCantidadMinutos" class="form-control">
      </div>
      <div class="mb-8">
        <label for="txtCantidadMensajes" class="form-label">Cantidad de mensajes:</label>
        <input type="text" id="txtCantidadMensajes" name="txtCantidadMensajes" class="form-control">
      </div>
      <br>
      <div class="mb-8">
        <input type="submit" id="btnGuardarPlan" name="btnGuardarPlan" class="form-control btn btn-info" value="Guardar Plan">
      </div>
    </form>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
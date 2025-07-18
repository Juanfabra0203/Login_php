<?php

include 'conexion.php';


$sql = "SELECT * FROM usuarios ";
$resultado = $conexion->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <?php

  ?>

  <div class="container col-3 mt-5 ">
    <form>
      <h1 class="mb-3">Inicio sesión</h1>
      <div class="mb-3">
        <input type="text" class="form-control" id="" placeholder="Usuario">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" placeholder="Constraseña">
      </div>
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary justify-content-center ">Iniciar Sesión</button>
        <a href="registro.php" class="btn btn-secondary">Registrate</a>
      </div>

    </form>
  </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>
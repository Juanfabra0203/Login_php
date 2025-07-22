<?php

include 'conexion.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $email = $_POST["email"] ;
  $pass = $_POST["pass"];

  if (empty($email) || empty($pass)) {
    echo "<div class='alert alert-danger' role='alert'>
               Debes ingresar todos los valores 
          </div>";
  }

  $sql = "SELECT * FROM usuarios WHERE email = ?";
  $consulta = $conexion->prepare($sql);
  $consulta->bind_param("s",$email);
  $consulta->execute();
  $resultado = $consulta->get_result();

  if($resultado->num_rows === 1){

    $usuario = $resultado->fetch_assoc();

    if(password_verify($pass,$usuario['contrasena'])){

      $_SESSION['usuario'] = $usuario['nombre'];
      $_SESSION['id'] = $usuario['id'];
      header("Location: dashboard.php");
      exit;
      
    }else{
      echo "<div class='alert alert-danger' role='alert'>
                Contraseña incorrecta.
            </div>";
    }

  }else{

    echo "<div class='alert alert-danger' role='alert'>
              Correo no esta registrado.
          </div>";
  }

  $consulta->close();


}

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

  <div class="container col-3 mt-5 ">
    <form method="POST" action="">
      <h1 class="mb-3">Inicio sesión</h1>
      <div class="mb-3">
        <input type="text" class="form-control" name="email" placeholder="Email">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" name="pass" placeholder="Constraseña">
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
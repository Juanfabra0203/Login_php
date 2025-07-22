<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <title>Registro</title>
</head>

<?php
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = trim($_POST["nombre"]);
    $email = trim($_POST["email"]);
    $pass = $_POST["pass"];

    if (empty($nombre) || empty($email) || empty($pass)) {
        echo "Llena todos los campos";
        exit;
    }

    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $sql = "INSERT INTO usuarios (nombre,email,contrasena) VALUES (?,?,?)";
    $consulta = $conexion->prepare($sql);
    $consulta->bind_param("sss", $nombre, $email, $pass_hash);


    if ($consulta->execute()) {
        echo "<script>alert('Registro Exitoso');</script>";
        header("Location: login.php");
    } else {
        echo "error al registrar " . $conexion->error;
    }

    $consulta->close();
}

?>



<body>
    <div class="container mt-5 col-3">
        <h2 class="text-center mb-4">Registro de Usuario</h2>
        <form method="POST" action="">
            <h5 class="text-danger"><em>Ingresa todos los valores</em></h3>
                <br>
                <div class="mb-3">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                </div>
                <button class="btn btn-primary w-100" type="submit">Registrarse</button>
                <a href="login.php" class="btn btn-secondary w-100 mt-3">Volver</a>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>
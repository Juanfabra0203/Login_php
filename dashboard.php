<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background-color: #f8f9fa;
    }

    .sidebar {
      height: 100vh;
      background-color: #343a40;
      padding-top: 1rem;
    }

    .sidebar a {
      color: #ffffff;
      display: block;
      padding: 10px 15px;
      text-decoration: none;
    }

    .sidebar a:hover {
      background-color: #495057;
      text-decoration: none;
    }

    .content {
      padding: 2rem;
    }

    .card {
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <nav class="col-md-2 d-none d-md-block sidebar">
      <div class="position-sticky">
        <h5 class="text-white text-center">Menú</h5>
        <a href="#"><i class="bi bi-house-door-fill"></i> Inicio</a>
        <a href="#"><i class="bi bi-person"></i> Usuarios</a>
        <a href="#"><i class="bi bi-bar-chart"></i> Reportes</a>
        <a href="#"><i class="bi bi-gear"></i> Configuración</a>
      </div>
    </nav>

    <!-- Main content -->
    <main class="col-md-10 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <a href="login.php" class="btn btn-outline-secondary"><i class="bi bi-box-arrow-right"></i> Cerrar sesión</a>
        
        
      </div>

      <!-- Dashboard content -->
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card p-3">
            <h5><i class="bi bi-people-fill me-2"></i> Usuarios Registrados</h5>
            <p class="display-6">134</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5><i class="bi bi-envelope-fill me-2"></i> Mensajes</h5>
            <p class="display-6">56</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card p-3">
            <h5><i class="bi bi-bar-chart-fill me-2"></i> Reportes Generados</h5>
            <p class="display-6">22</p>
          </div>
        </div>
      </div>
    </main>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

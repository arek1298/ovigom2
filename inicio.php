<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ERP - Página Principal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">ERP Empresarial</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Soporte</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Título de la página -->
<div class="container mt-5">
    <div class="text-center mb-5">
        <h2 class="text-primary">Bienvenido al Sistema</h2>
        <p class="text-muted">Seleccione un módulo para comenzar a gestionar los recursos de su empresa</p>
    </div>

    <!-- Módulos de ERP -->
    <div class="row text-center">
        <!-- Producción -->
        <div class="col-md-3 mb-4">
            <a href="#" class="text-decoration-none">
                <div class="p-4 bg-info text-white rounded shadow-lg">
                    <i class="fas fa-industry fa-2x mb-2"></i>
                    <h5 class="fw-bold">Producción</h5>
                </div>
            </a>
        </div>
        <!-- Calidad -->
        <div class="col-md-3 mb-4">
            <a href="#" class="text-decoration-none">
                <div class="p-4 bg-success text-white rounded shadow-lg">
                    <i class="fas fa-check-circle fa-2x mb-2"></i>
                    <h5 class="fw-bold">Calidad</h5>
                </div>
            </a>
        </div>
        <!-- Logística -->
        <div class="col-md-3 mb-4">
            <a href="index.php" class="text-decoration-none">
                <div class="p-4 bg-warning text-white rounded shadow-lg">
                    <i class="fas fa-truck fa-2x mb-2"></i>
                    <h5 class="fw-bold">Logística</h5>
                </div>
            </a>
        </div>
        <!-- Recursos Humanos (RH) -->
        <div class="col-md-3 mb-4">
            <a href="#" class="text-decoration-none">
                <div class="p-4 bg-primary text-white rounded shadow-lg">
                    <i class="fas fa-users fa-2x mb-2"></i>
                    <h5 class="fw-bold">Recursos Humanos</h5>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-primary text-white text-center py-3 mt-5">
    <div class="container">
        <p class="mb-0">© 2024 IT OVIGOM</p>
    </div>
</footer>

<!-- Bootstrap JS y Font Awesome -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

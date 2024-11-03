<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logística y Almacén</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome para los iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Gestión Logística</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Servicios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <!-- Botón de regreso -->
    <div class="mb-4">
        <button onclick="history.back()" class="btn btn-secondary">
            <i class="fas fa-arrow-left"></i> Volver
        </button>
    </div>
<div class="container mt-5">
    <div class="text-center mb-4">
        <h2 class="text-primary">Panel de Logística</h2>
        <p class="text-muted">Gestiona inventarios y almacenes de manera eficiente</p>
    </div>

    <!-- Opciones de Logística -->
    <div class="row text-center mb-4">
        <div class="col-md-4 mb-3">
            <div class="p-4 bg-warning text-white fw-bold rounded shadow-sm">
                <i class="fas fa-box"></i> Inventario de Producto Terminado
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="p-4 bg-warning text-white fw-bold rounded shadow-sm">
                <i class="fas fa-cubes"></i> Inventario Materia Prima
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <!-- Dropdown de Almacén -->
            <div class="dropdown">
                <button class="btn btn-warning text-white fw-bold dropdown-toggle w-100 p-4 shadow-sm" type="button" id="almacenDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-warehouse"></i> Almacén
                </button>
                <ul class="dropdown-menu w-100" aria-labelledby="almacenDropdown">
                    <li><a class="dropdown-item" href="#"><i class="fas fa-boxes"></i> A. Secos</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#reciboMaterialesModal"><i class="fas fa-dolly"></i> Recibo Materiales</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#salidaMaterialesModal"><i class="fas fa-truck-loading"></i> Salida Materiales</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fas fa-clipboard-list"></i> Inventario</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#registroModal"><i class="fas fa-file-alt"></i> Registro</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Registro con contenido actualizado -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="registroModalLabel">Registro de Materiales</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Fecha de Recibido</label>
                        <input type="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Producto</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Descripción</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Cantidad</label>
                        <input type="number" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Unidad Medida</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Estandar Empaque</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Tipo compra D/I</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Proveedor</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold text-primary">Folio Factura</label>
                        <input type="text" class="form-control" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</a>
                <a href="#" class="btn btn-primary">Guardar</a>
            </div>
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

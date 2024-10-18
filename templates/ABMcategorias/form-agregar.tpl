<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <script src='js/bootstrap.bundle.min.js'></script>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            Administrador de Productos - Agregar nuevo producto
            </a>
        </div>
    </nav>
    <form class="p-2" action="categoria-agregada" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la categoria</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <button type="submit" class="btn btn-primary">Crear nueva categoria</button>
    </form>
    
</body>
</html>
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
    <form class="p-2" action="nuevo-producto" method="POST">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca">
        </div>
        <div class="mb-3">
            <label for="capacidad" class="form-label">Capacidad</label>
            <input type="text" class="form-control" name="capacidad">
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" class="form-control" name="precio">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion">
        </div>
        <div class="mb-3">
            <label for="id_categoria" class="form-label">Elegir categoria</label>
            <select name="id_categoria">
                {foreach $categorias as $categoria}
                    <option value={$categoria->id_categoria}>{$categoria->nombre} </option>
                {/foreach}
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear nuevo producto</button>
    </form>
    
</body>
</html>
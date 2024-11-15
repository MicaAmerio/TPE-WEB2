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
            Administrador de categoria - Editar categoria
            </a>
        </div>
    </nav>

    <form class="p-2" action="router.php?action=editar-categoria" method="POST">
        <div class="mb-3">
            <input type="hidden" class="form-control" name="id_categoria" value="{$categoria->id_categoria|default:''}">
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" value="{$categoria->nombre|default:''}">
        </div>
   
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="descripcion" value="{$categoria->descripcion|default:''}">
        </div>
       
        <button type="submit" class="btn btn-primary">actualizar categoria</button>
    </form>

</body>
</html>
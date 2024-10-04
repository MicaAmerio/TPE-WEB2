<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.min.css'>
    <script src='../js/bootstrap.bundle.min.js'></script>
</head>
<body>
    <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
        Tienda de Limpieza
        </a>
    </div>
    </nav>
    
    <section>
    <div class="card m-2" style="width: 18rem;">
  <div class="card-header">
  Producto #{$producto->id_producto} -  {$producto->nombre}  
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">$ {$producto->precio} </li>
  <li class="list-group-item">{$producto->descripcion} </li>
  <li class="list-group-item">Categoria: {$producto->categoria}</li>
  </ul>
</div>
    </section>
    
</body>
</html>
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
        Tienda de Limpieza
        </a>
       <a href="login"> <button>login</button> </a>
    </div>
    </nav>
    
    <section>
    <h3>Todos los productos</h3>
    <ul class="list-group">
        {foreach $productos as $producto}
            <li class="list-group-item">{$producto->categoria} - {$producto->nombre}  <a href="producto/{$producto->id_producto}"><button> Ver mas</button></a> </li>
        {/foreach}
    </ul>
    </section>

    <section>
    <h3>Busca tu producto por categoria</h3>
    <ul class="list-group">
    {foreach $categorias as $categoria}
            <li class="list-group-item"> {$categoria->nombre} - {$categoria->descripcion} 
            <a href="categoria/{$categoria->id_categoria}"><button> Ver mas</button></a></li>
        {/foreach}
    </ul>
    </section>
    
</body>
</html>
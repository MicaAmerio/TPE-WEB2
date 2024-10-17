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
        Administrador de Productos - Tienda de Limpieza
        </a>
    </div>
    </nav>
    
    <section>
    <a href="agregar-producto">Agregar nuevo producto</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">categoria</th>
      <th scope="col">nombre</th>
      <th scope="col">marca</th>
      <th scope="col">precio</th>
      <th scope="col">editar</th>
      <th scope="col">eliminar</th>
    </tr>
  </thead>
  <tbody>
    {foreach $productos as $p}
    <tr>
        <th>{$p->categoria}</th>
        <td>{$p->nombre}</td>
        <td>{$p->marca}</td>
        <td>{$p->precio}</td>
        <td><a href="form-editar-producto/{$p->id_producto}"><button>Editar</button></td>
        <td> <a href="eliminar-producto/{$p->id_producto}"><button>Eliminar</button></td>
    </tr>
    {/foreach}
  </tbody>
</table>
    </section>
    
</body>
</html>
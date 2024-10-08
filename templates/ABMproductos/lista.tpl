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
        Administrador de Productos - Tienda de Limpieza
        </a>
    </div>
    </nav>
    
    <section>
    <a href="/">Agregar nuevo producto</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">nombre</th>
      <th scope="col">marca</th>
      <th scope="col">precio</th>
    </tr>
  </thead>
  <tbody>
    {foreach $productos as $p}
    <tr>
        <th>{$p->id_producto}</th>
        <td>{$p->nombre}</td>
        <td>{$p->marca}</td>
        <td>{$p->precio}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
    </section>
    
</body>
</html>
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
        Administrador de categorias - Tienda de Limpieza
        </a>
    </div>
    </nav>
    
    <section>
    <a href="agregar-categoria">Agregar nuevo categoria</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">editar</th>
      <th scope="col">eliminar</th>
      
      
       
    
    </tr>
  </thead>
  <tbody>
    {foreach $categorias as $categoria}
    <tr>
        <th>{$categoria->nombre}</th>
        <td>{$categoria->descripcion}</td>
        <td>{$categoria->id_categoria}</td>
         <td> <a href="eliminar-categoria/{$categoria->id_categoria}"><button>Eliminar</button></td>
         <td> <a href="form-editar-categoria/{$categoria->id_categoria}"><button>Editar</button></td>
    </tr>
    {/foreach}
  </tbody>
</table>
    </section>
    
</body>
</html>
<?php
/* Smarty version 4.5.1, created on 2024-10-04 23:11:44
  from 'C:\xampp\htdocs\TPE-WEB2\templates\mostrarproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67005a10d348d3_65700636',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a24b4f1061e87638bbba2927ae832ac90c7c4e3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\mostrarproduct.tpl',
      1 => 1728076302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67005a10d348d3_65700636 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.min.css'>
    <?php echo '<script'; ?>
 src='../js/bootstrap.bundle.min.js'><?php echo '</script'; ?>
>
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
  Producto #<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
 -  <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
  
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">$ <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
 </li>
  <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
 </li>
  <li class="list-group-item">Categoria: <?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
</li>
  </ul>
</div>
    </section>
    
</body>
</html><?php }
}

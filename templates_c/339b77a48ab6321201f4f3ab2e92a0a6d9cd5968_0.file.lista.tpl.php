<?php
/* Smarty version 4.5.1, created on 2024-10-14 21:24:13
  from 'C:\xampp\htdocs\TPE-WEB2\templates\ABMproductos\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670d6fdd61bf32_56227299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '339b77a48ab6321201f4f3ab2e92a0a6d9cd5968' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\ABMproductos\\lista.tpl',
      1 => 1728933851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670d6fdd61bf32_56227299 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/bootstrap.min.css'>
    <?php echo '<script'; ?>
 src='js/bootstrap.bundle.min.js'><?php echo '</script'; ?>
>
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
      <th scope="col">editar</th>
      <th scope="col">eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
    <tr>
        <th><?php echo $_smarty_tpl->tpl_vars['p']->value->id_producto;?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->nombre;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->marca;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['p']->value->precio;?>
</td>
        <td><button>Editar</button></td>
        <td><button>Eliminar</button></td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  </tbody>
</table>
    </section>
    
</body>
</html><?php }
}

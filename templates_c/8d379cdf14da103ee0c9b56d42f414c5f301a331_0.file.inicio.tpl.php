<?php
/* Smarty version 4.5.1, created on 2024-10-11 00:02:55
  from 'C:\xampp\htdocs\TPE-WEB2\templates\inicio.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_67084f0f305d86_87131821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d379cdf14da103ee0c9b56d42f414c5f301a331' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\inicio.tpl',
      1 => 1728597771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67084f0f305d86_87131821 (Smarty_Internal_Template $_smarty_tpl) {
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
        Tienda de Limpieza
        </a>
       <a href="login"> <button>login</button> </a>
    </div>
    </nav>
    
    <section>
    <h3>Todos los productos</h3>
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['producto']->value->categoria;?>
 - <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
  <a href="producto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_producto;?>
"><button> Ver mas</button></a> </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    </section>

    <section>
    <h3>Busca tu producto por categoria</h3>
    <ul class="list-group">
    </ul>
    </section>
    
</body>
</html><?php }
}

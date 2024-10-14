<?php
/* Smarty version 4.5.1, created on 2024-10-14 21:23:09
  from 'C:\xampp\htdocs\TPE-WEB2\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670d6f9d21aa28_14288627',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d827117a41a2ee1a06abb255e46fb2c5f6a6133' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\panel.tpl',
      1 => 1728933785,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670d6f9d21aa28_14288627 (Smarty_Internal_Template $_smarty_tpl) {
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
        Panel de Administrador - Tienda de Limpieza
        </a>
       <a> <button>Salir de la sesion</button> </a>
    </div>
    </nav>
    
    <section>
        <a><button>Administrar categorias</button> </a>
    </section>
    <section>
        <a href="administrar-productos"><button>Administrar productos</button></a>
    </section>
    
</body>
</html><?php }
}

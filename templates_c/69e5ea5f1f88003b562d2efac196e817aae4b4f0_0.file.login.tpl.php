<?php
/* Smarty version 4.5.1, created on 2024-10-11 01:46:53
  from 'C:\xampp\htdocs\TPE-WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_6708676d27a7d0_10509404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e5ea5f1f88003b562d2efac196e817aae4b4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\login.tpl',
      1 => 1728604007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6708676d27a7d0_10509404 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="login usuario" method="POST">
  <div class="mb-3">
    <label for="usuario" class="form-label">usuario</label>
    <input type="usuario" class="form-control" id="usuario" aria-describedby="usuario">
    <div id="usuarioHelp" class="form-text">completar el campo</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">contraseña</label>
    <input type="contraseña" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">completar</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }
}

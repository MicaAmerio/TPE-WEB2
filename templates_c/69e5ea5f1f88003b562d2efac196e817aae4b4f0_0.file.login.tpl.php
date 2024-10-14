<?php
/* Smarty version 4.5.1, created on 2024-10-14 20:24:45
  from 'C:\xampp\htdocs\TPE-WEB2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.1',
  'unifunc' => 'content_670d61ede71c41_86422246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69e5ea5f1f88003b562d2efac196e817aae4b4f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPE-WEB2\\templates\\login.tpl',
      1 => 1728930121,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670d61ede71c41_86422246 (Smarty_Internal_Template $_smarty_tpl) {
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
<form action="login_usuario" method="POST">
  <div class="mb-3">
      <label for="usuario" class="form-label">usuario</label>
      <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="usuario" required>
      </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">contraseña</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form><?php }
}

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
<form action="login_usuario" method="POST">
  <div class="mb-3">
      <label for="usuario" class="form-label">usuario</label>
      <input name="usuario" type="text" class="form-control" id="usuario" aria-describedby="usuario" required>
    {* <div id="usuarioHelp" class="form-text">completar el campo</div> *}
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">contraseña</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  {* <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">completar</label>
  </div> *}
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
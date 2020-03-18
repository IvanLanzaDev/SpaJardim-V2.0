<?php include("functions.class.php"); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Spa Jardim - Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="less/style.less" rel="stylesheet/less">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="signup.php">
      <img class="mb-4" src="imgs/new-logo-menu.jpg" alt="" width="100%" height="100%">
      <h1 class="h3 mb-3 font-weight-normal text-white">Login</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email_user" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha_user" required>
      <button class="btn btn-lg btn-warning btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-white">Spa Jardim &copy; 1975-2018</p>
      <small><a class="text-warning" href="index.php">Voltar ao Site</a></small>
    </form>
  </body>
</html>
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="post" action="#">
      <img class="mb-4" src="imgs/new-logo.jpg" alt="" width="100%" height="100%">
      <!--h1 class="h3 mb-3 font-weight-normal text-white">Login</h1>-->
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus name="email_users">
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="password_users">
      <button class="btn btn-lg btn-warning btn-block" type="submit" name="btn_login">Entrar</button>
      <p class="mt-5 mb-3 text-white">Spa Jardim &copy; 1975-2018</p>
      <small><a class="text-warning" href="index.php">Voltar ao Site</a></small>
    </form>
  </body>
</html>
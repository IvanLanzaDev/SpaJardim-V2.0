<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administra&ccedil;&atilde;o do Site - Spa Jardim by Ronaldo Est&eacute;tica</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="less/style.less" rel="stylesheet/less">
    <!-- HTML5 shim e Respond.js para suporte no IE8 de elementos HTML5 e media queries -->
    <!-- ALERTA: Respond.js não funciona se você visualizar uma página file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('header-admin.class.php'); ?>
    <?php include('menu-admin.class.php'); ?>
    <div class="alert alert-success alert-dismissible fade in col-lg-8" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
      <h4>Produto Cadastrado</h4>
      <p>Muito bem o produto foi cadastrado.<br>
        <small class="help-block"><i>Escolha uma das opções abaixo, ou utilize o menu ao lado para continuar...</i></small>  
      </p>
      <p>
        <a href="new-product-admin.php" class="btn btn-success">Cadastrar novo produto</a>
        <a href="products-admin.php" class="btn btn-default">Ver produtos cadastrados</a>
      </p>
    </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/less.min.js"></script>
  </body>
</html>
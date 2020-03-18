<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php
        include('functions.class.php'); 
      ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Excluir Novidade</h2>
            <h3 class="text-center hidden-md hidden-lg">Excluir Novidade</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li><a href="news-admin.php">Novidades</a></li>
              <li class="active">Excluir Novidade</li>    
            </ol>
        </div>
         <?php 
        
         ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4>Tem certeza ?</h4>
            <p>Voc&ecirc; est&aacute; prestes a excluir uma novidade.</p>
            
            <div>
                <form method="post" action="">
                    <button type="submit" class="btn btn-danger" name="btn_delete_news">Confirmar</button>
                    <a href="news-admin.php" class="btn btn-default">Cancelar</a>
                </form>    
                
            </div>
            
        </div>

    </div>
  </body>
</html>
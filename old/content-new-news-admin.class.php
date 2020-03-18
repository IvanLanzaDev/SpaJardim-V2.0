<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php include('functions.class.php'); ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Cadastrar Novidades</h2>
            <h3 class="text-center hidden-md hidden-lg">Cadastrar Novidades</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li><a href="news-admin.php">Novidades</a></li>
              <li class="active">Cadastrar Novidades</li>    
            </ol>
        </div>
        
        <?php
            if($insert_news){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> Novidade cadastrada.
                </div>
            ";       
        }
        ?>
        
        
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar Novidades</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>T&iacute;tulo</label>
                        <input type="text" class="form-control" autofocus required name="title_news">
                    </div>
                    <div class="form-group">
                        <label>Conte&uacute;do da mat&eacute;ria</label>
                        <textarea name="content_news" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo_news">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_send_news">Cadastrar Novidade</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
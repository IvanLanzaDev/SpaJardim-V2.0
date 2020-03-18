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
            <h2 class="hidden-xs hidden-sm">Cadastrar novo v&iacute;deo</h2>
            <h3 class="text-center hidden-md hidden-lg">Cadastrar novo v&iacute;deo</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li class="active">Cadastrar novo v&iacute;deo</li>    
            </ol>
        </div>
        
        <?php
            if($insert_videos){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> Novo vídeo cadastrado.
                </div>
            ";       
        }
        ?>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar novo v&iacute;deo</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>C&oacute;digo do YouTube</label>
                        <input type="text" class="form-control" autofocus required name="link_videos">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_send_videos">Cadastrar Vídeo</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
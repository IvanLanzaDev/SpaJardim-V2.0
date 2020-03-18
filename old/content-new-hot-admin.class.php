<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php include("functions.class.php"); ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Cadastrar Destaque</h2>
            <h3 class="text-center hidden-md hidden-lg">Cadastrar Destaque</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li><a href="hot-admin.php">Destaques</a></li>
              <li class="active">Cadastrar Destaque</li>    
            </ol>
        </div>
        
        <?php
            if($insert_featured){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> Novo destaque cadastrado.
                </div>
            ";        
        }
        ?>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar Destaque</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>T&iacute;tulo</label>
                        <input type="text" class="form-control" autofocus required name="title_featured">
                    </div>
                    <div class="form-group">
                        <label>Descri&ccedil;&atilde;o</label>
                        <textarea name="content_featured" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo_featured">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_send_featured" data-toggle='modal' data-target='#modalGaleryImg1'>Cadastrar Novidade</button>
                </form>
            </div>
        </div>
        
        
        
    </div>
  </body>
</html>
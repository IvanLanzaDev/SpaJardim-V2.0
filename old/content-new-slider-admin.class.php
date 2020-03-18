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
            <h2 class="hidden-xs hidden-sm">Cadastrar Slider</h2>
            <h3 class="text-center hidden-md hidden-lg">Cadastrar Slider</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="slider-admin.php">Slider</a></li>
              <li class="active">Cadastrar Slider</li>    
            </ol>
        </div>
        
        <?php
            if($insert_slider){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> Novo slider cadastrado.
                </div>
            ";       
        }
        ?>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar Slider</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Legenda</label>
                        <input type="text" class="form-control" autofocus required name="caption_slider">
                    </div>
                    <div class="form-group">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo_slider">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_send_slider">Cadastrar Slider</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
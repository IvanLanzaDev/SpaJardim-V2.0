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
            <h2 class="hidden-xs hidden-sm">Editar Slider</h2>
            <h3 class="text-center hidden-md hidden-lg">Editar Slider</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="slider-admin.php">Slider</a></li>
              <li class="active">Editar Slider</li>    
            </ol>
        </div>
         <?php 
         ?>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Editar Slider</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Legenda</label>
                        <input type="text" class="form-control" autofocus required name="caption_slider" value="<?php echo $list_info_slider['caption_slider']; ?>">
                    </div>
                    <div class="form-group">
                        
                        <label>Foto em destaque</label>
                        <img src="<?php echo $list_info_slider['photo_slider']; ?>" class="img-responsive col-lg-2">
                        <input type="file" name="photo_slider" value="<?php echo $list_info_slider['photo_slider']; ?>">
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_edit_slider">Editar Slider</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
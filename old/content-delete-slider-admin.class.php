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
            <h2 class="hidden-xs hidden-sm">Excluir Slider</h2>
            <h3 class="text-center hidden-md hidden-lg">Excluir Slider</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="slider-admin.php">Slider</a></li>
              <li class="active">Excluir Slider</li>    
            </ol>
        </div>
         <?php 
        
            if($delete_slider){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <p><strong>Muito Bem !</strong> Slider foi apagado.</p>
                  
                  <a href='slider-admin.php' class='btn btn-primary'>Ver sliders</a>
                  <a href='admin.php' class='btn btn-default'>In&iacute;cio</a>
                </div>
                ";      
        }
         ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4>Tem certeza ?</h4>
            <p>Voc&ecirc; est&aacute; prestes a excluir um slider.</p>
            
            <div>
                <form method="post" action="">
                    <input type="hidden" name="id_slider" value="<?php $list_info_slider['id_slider']; ?>">
                    <input type="hidden" name="caption_slider" value="<?php $list_info_slider['caption_slider']; ?>">
                    <input type="hidden" name="photo_slider" value="<?php $list_info_slider['photo_slider']; ?>">
                    <button type="submit" class="btn btn-danger" name="btn_delete_slider">Confirmar</button>
                    <a href="slider-admin.php" class="btn btn-default">Cancelar</a>
                </form>    
                
            </div>
            
        </div>

    </div>
  </body>
</html>
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
            <h2 class="hidden-xs hidden-sm">Editar Destaque</h2>
            <h3 class="text-center hidden-md hidden-lg">Editar Destaque</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li><a href="hot-admin.php">Destaques</a></li>
              <li class="active">Editar Destaque</li>    
            </ol>
        </div>
        
        <?php
           
        ?>
        
        
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Editar Destaque</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>T&iacute;tulo</label>
                        <input type="text" class="form-control" autofocus required name="title_featured" value="<?php echo $list_get_edit_featured[title_featured]; ?>">
                    </div>
                    <div class="form-group">
                        <label>Conte&uacute;do da mat&eacute;ria</label>
                        <textarea name="content_featured" class="form-control" rows="10"><?php echo $list_get_edit_featured[content_featured]; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo_featured" value="<?php echo $list_get_edit_featured[photo_featured]; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_edit_featured">Editar Destaque</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
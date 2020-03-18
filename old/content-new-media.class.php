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
            <h2 class="hidden-xs hidden-sm">Cadastrar novo item</h2>
            <h3 class="text-center hidden-md hidden-lg">Cadastrar novo item</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li><a href="view-media.php">Na Mídia</a></li>
              <li class="active">Cadastrar Item</li>    
            </ol>
        </div>
        
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Cadastrar item</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>T&iacute;tulo</label>
                        <input type="text" class="form-control" autofocus required name="title_media">
                    </div>
                    <div class="form-group">
                        <label>Descri&ccedil;&atilde;o</label>
                        <textarea name="content_media" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo_media">
                    </div>
                    <div class="form-group">
                        <label>Link do vídeo</label>
                        <input type="text" class="form-control" name="link_media">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_send_media">Cadastrar</button>
                </form>
            </div>
        </div>
        
        
        
    </div>
  </body>
</html>
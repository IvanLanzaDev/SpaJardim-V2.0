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
            <h2 class="hidden-xs hidden-sm">Na Mídia 
                <a href="new-media.php" class="btn btn-success btn-sm"> 
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </h2> 
            <h3 class="text-center hidden-md hidden-lg">Na Mídia 
                <a href="new-media.php" class="btn btn-success btn-sm"> 
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </h3> 
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li class="active">Na Mídia</li>    
            </ol>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Itens Cadastrados</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-xs-2 col-sm-2 col-lg-4">Título</th>
                                <th class="col-xs-2 col-sm-2 col-lg-2">Foto / Vídeo</th>
                                <th class="col-xs-2 col-sm-2 col-lg-1">A&ccedil;&otilde;es</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($get_media){
                                    while($list_get_media = mysqli_fetch_array($get_media)){
                                        echo "
                                            <tr>
                                                <td class='col-xs-2 col-sm-2 col-lg-4'>$list_get_media[title_media]</td>
                                                <td class='col-lg-2'><img src='$list_get_media[photo_media]' class='img-responsive'></td>
                                                <td class=' col-xs-2 col-sm-2 col-lg-1'><a href='edit-media-admin.php?media=$list_get_media[id_media]' class='btn btn-warning btn-sm'>Editar</a></td>
                                                <td class='col-xs-2 col-sm-2 col-lg-1'><a href='delete-media-admin.php?media=$list_get_media[id_media]' class='btn btn-danger btn-sm'>Excluir</a></td>
                                            </tr>   
                                        ";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>

    </div>
  </body>
</html>
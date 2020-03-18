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
            <h2 class="hidden-xs hidden-sm">Novidades 
                <a href="new-news-admin.php" class="btn btn-success btn-sm"> 
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </h2> 
            <h3 class="text-center hidden-md hidden-lg">Novidades 
                <a href="new-news-admin.php" class="btn btn-success btn-sm"> 
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </h3> 
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="home-admin.php">Conte&uacute;do p&aacute;gina inicial</a></li>
              <li class="active">Novidades</li>    
            </ol>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Novidades Cadastradas</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-xs-2 col-sm-2 col-lg-4">Título</th>
                                <th class="col-xs-2 col-sm-2 col-lg-2">Foto</th>
                                <th class="col-xs-2 col-sm-2 col-lg-1">A&ccedil;&otilde;es</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($get_news){
                                    while($list_get_news = mysqli_fetch_array($get_news)){
                                        echo "
                                            <tr>
                                                <td class='col-xs-2 col-sm-2 col-lg-4'>$list_get_news[title_news]</td>
                                                <td class='col-lg-2'><img src='$list_get_news[photo_news]' class='img-responsive'></td>
                                                <td class=' col-xs-2 col-sm-2 col-lg-1'><a href='edit-news-admin.php?news=$list_get_news[id_news]' class='btn btn-warning btn-sm'>Editar</a></td>
                                                <td class='col-xs-2 col-sm-2 col-lg-1'><a href='delete-news-admin.php?news=$list_get_news[id_news]' class='btn btn-danger btn-sm'>Excluir</a></td>
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
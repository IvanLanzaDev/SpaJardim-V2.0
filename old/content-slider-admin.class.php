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
            <h2 class="hidden-xs hidden-sm">Slider 
                <a href="new-slider-admin.php" class="btn btn-success btn-sm"> 
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </h2> 
            <h3 class="text-center hidden-md hidden-lg">Slider 
                <a href="new-slider-admin.php" class="btn btn-success btn-sm"> 
                    <span class="glyphicon glyphicon-plus"></span> Adicionar
                </a>
            </h3> 
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li class="active">Slider</li>
            </ol>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Sliders Cadastrados</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-xs-2 col-sm-2 col-lg-4">Legenda</th>
                                <th class="col-xs-2 col-sm-2 col-lg-2">Foto</th>
                                <th class="col-xs-2 col-sm-2 col-lg-1">A&ccedil;&otilde;es</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($get_slider){
                                    while($list_get_slider = mysqli_fetch_array($get_slider)){
                                        echo "
                                            <tr>
                                                <td class='col-xs-2 col-sm-2 col-lg-4'>$list_get_slider[caption_slider]</td>
                                                <td class='col-lg-2'><img src='$list_get_slider[photo_slider]' class='img-responsive'></td>
                                                <td class=' col-xs-2 col-sm-2 col-lg-1'><a href='edit-slider-admin.php?slider=$list_get_slider[id_slider]' class='btn btn-warning btn-sm'>Editar</a></td>
                                                <td class='col-xs-2 col-sm-2 col-lg-1'><a href='delete-slider-admin.php?slider=$list_get_slider[id_slider]' class='btn btn-danger btn-sm'>Excluir</a></td>
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
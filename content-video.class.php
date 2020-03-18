<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
    <title>Spa Jardim - Painel de Controle</title>
  </head>
  <body>
   
    <div class="col-12 col-md-9 mt-5">
        <div class="row col-12 mb-3">
            <h3>Vídeos</h3> <a href="new-video.php" class="btn btn-outline-success ml-3"> <i class="fas fa-plus"></i> Adicionar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vídeos</li>
            
        </ol>
        </nav>
        
        
        
        <div class="row text-center">
        <?php
            while($list_videos = mysqli_fetch_array($get_videos)){
                echo "
                    <div class='col-md-4 mb-4'>
                        <div class='embed-responsive embed-responsive-16by9'>
                          <iframe class='embed-responsive-item' src='$list_videos[content_videos]' allowfullscreen></iframe>
                        </div>
                         <div class='row mt-3'>
                            <div class='col-12'>
                            <a href='edit-video.php?edit_video=$list_videos[id_videos]' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='delete-video.php?delete_video=$list_videos[id_videos]' class='btn btn-danger btn-sm'>Excluir</a>
                            </div>
                        </div>
                    </div>
                ";
            }
        ?>
      
        </div>
      </div>
  </body>
</html>

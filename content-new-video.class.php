<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
      
    <!-- Bootstrap CSS -->
    
    <title>Spa Jardim - Painel de Controle</title>
  </head>
  <body>
   
    <div class="col-12 col-md-9 mt-5">
        <div class="row col-12 mb-3">
            <h3>Vídeos</h3> <a href="video.php" class="btn btn-outline-secondary ml-3"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Vídeos</li>
            <li class="breadcrumb-item active" aria-current="page">Novo Vídeo</li>
        </ol>
        </nav>
        
        <div class="card">
            <h5 class="card-header">Adicionar novo vídeo.</h5>
            <div class="card-body">
                
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="container-fluid">
                        
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Atenção</strong><br> Ao incorporar o vídeo do YouTube, por favor manter apenas a opção <strong>Mostrar controles do player</strong> marcada.
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        
                        <div class="row">                            
                            <div class="form-group col-md-6">
                                <label>Link do Vídeo</label>
                                <input type="text" class="form-control" name="content_videos" placeholder="Link do Vídeo" required>
                                <a href="https://youtube.com" target="_blank" class="text-danger"><small><strong>Abrir YouTube</strong></small></a>
                            </div>
                            
                            
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success mt-md-5 btn-block btn-lg" name="btn_new_video">Cadastrar</button>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
</div>
     
     
  </body>
</html>

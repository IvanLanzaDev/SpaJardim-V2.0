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
            <h3>Slider</h3> <a href="slider.php" class="btn btn-outline-secondary ml-3"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider</li>
            <li class="breadcrumb-item active" aria-current="page">Novo Slider</li>
        </ol>
        </nav>
        
        <div class="card">
            <h5 class="card-header">Adicionar novo slider.</h5>
            <div class="card-body">
                <form class="col-md-5" method="post" enctype="multipart/form-data">
                    <label><strong>Foto do Slider</strong></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" name="photo_slider">
                        <label class="custom-file-label" for="inputGroupFile04">Escolha o Arquivo</label>
                      </div>
                        <button type="submit" class="btn btn-success ml-3 d-none d-md-block" name="btn_new_slider">Fazer Upload</button>
                        <button type="submit" class="btn btn-success btn-block mt-3 d-block d-md-none" name="btn_new_slider">Fazer Upload</button>
                    </div>
                </form>
            </div>
        </div>
</div>
  </body>
</html>

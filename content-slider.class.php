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
            <h3>Slider</h3> <a href="new-slider.php" class="btn btn-outline-success ml-3"> <i class="fas fa-plus"></i> Adicionar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider</li>
        </ol>
    </nav>
        
        <div class="card">
  <h5 class="card-header">Aqui você pode alterar os sliders.</h5>
  <div class="card-body">
<div class="table-responsive">
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Foto</th>
      <th scope="col">Ações</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      <?php 
        while($list_sliders = mysqli_fetch_array($get_slider)){
            echo "
             <tr>
              <td><img src='$list_sliders[photo_slider]' class='img-fluid col-12 col-md-6'></td>
              <td><a href='edit-slider.php?id_edit_slider=$list_sliders[id_slider]' class='btn btn-outline-warning'>Editar</a></td>
              <td><a href='delete-slider.php?id_delete_slider=$list_sliders[id_slider]' class='btn btn-danger'>Excluir</a></td>
            </tr>
            ";
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

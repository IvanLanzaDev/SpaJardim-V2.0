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
            <h3>Produtos</h3> <a href="new-product.php" class="btn btn-outline-success ml-3"> <i class="fas fa-plus"></i> Adicionar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produtos</li>
            
        </ol>
        </nav>
        
        
        
        <div class="row text-center">
            <?php 
            while($list_products = mysqli_fetch_array($get_products)){
                echo "
                    <div class='product col-md-4 mb-5'>
                        <img src='$list_products[photo_products]' class='img-fluid product-photo mb-2'>
                        <h5 class='product-title'>$list_products[name_products]</h5>
                        <div class='row'>
                            <div class='col-12'>
                            <a href='edit-product.php?edit_product=$list_products[id_products]' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='delete-product.php?delete_product=$list_products[id_products]' class='btn btn-danger btn-sm'>Excluir</a>
                            </div>
                        </div>
                    </div>
                ";
            }
        
            
        ?>
            <!--
                    BASE DESIGN
            <div class="product col-md-4 mb-5">
                <img src="imgs/prod2.jpg" class="img-fluid product-photo mb-2">
                <h5 class="product-title">Day Spa Toque de Seda</h5>
                <div class="row">
                    <div class="col-12">
                    <a href="#" class="btn btn-warning btn-sm">Editar</a>
                    <a href="#" class="btn btn-danger btn-sm">Excluir</a>
                    </div>
                </div>
            </div>
                -->
        </div>
      </div>
  </body>
</html>

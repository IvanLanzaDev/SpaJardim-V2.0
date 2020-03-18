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
            <h3>Blog</h3> <a href="new-post.php" class="btn btn-outline-success ml-3"> <i class="fas fa-plus"></i> Adicionar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
            
        </ol>
        </nav>
        
        
        
        <div class="row text-center">
            <?php 
            while($list_posts = mysqli_fetch_array($get_posts_dashboard)){
                echo "
                    <div class='product col-md-4 mb-5'>
                        <img src='$list_posts[photo_posts]' class='img-fluid product-photo mb-2'>
                        <h5 class='product-title'>$list_posts[title_posts]</h5>
                        <div class='row'>
                            <div class='col-12'>
                            <a href='edit-post.php?edit_post=$list_posts[id_posts]' class='btn btn-warning btn-sm'>Editar</a>
                            <a href='delete-post.php?delete_post=$list_posts[id_posts]' class='btn btn-danger btn-sm'>Excluir</a>
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

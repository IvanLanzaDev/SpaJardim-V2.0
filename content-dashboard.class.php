<?php include("functions.class.php"); ?>
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
   
    <div class="col-md-9 mt-5">
        <div class="row ml-4 ml-md-0">
            <div class="card mr-2" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo "<h1 class='text-center'>$count_products</h1>"; ?></h5>
                <p class="card-text text-center"><strong>Produtos cadastrados</strong></p>
                <a href="product.php" class="btn btn-outline-secondary btn-block">Ver Produtos</a>
              </div>
            </div> 

            <div class="card mr-2 mt-3 mb-3 mt-md-0 mb-md-0" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo "<h1 class='text-center'>$count_slider</h1>"; ?></h5>
                <p class="card-text text-center"><strong>Sliders cadastrados</strong></p>
                <a href="slider.php" class="btn btn-outline-secondary btn-block">Ver Sliders</a>
              </div>
            </div> 
            
            <div class="card mr-2 mt-3 mb-3 mt-md-0 mb-md-0" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo "<h1 class='text-center'>$count_posts</h1>"; ?></h5>
                <p class="card-text text-center"><strong>Posts publicados</strong></p>
                <a href="blog.php" class="btn btn-outline-secondary btn-block">Ver Posts</a>
              </div>
            </div> 
            
            <div class="card mr-2 mt-3 mb-3 mt-md-0 mb-md-0" style="width: 18rem;">
              <div class="card-body">
                <h5 class="card-title"><?php echo "<h1 class='text-center'>$count_videos</h1>"; ?></h5>
                <p class="card-text text-center"><strong>Vídeos publicados</strong></p>
                <a href="video.php" class="btn btn-outline-secondary btn-block">Ver Vídeos</a>
              </div>
            </div>
        </div>
    </div>

  </body>
</html>

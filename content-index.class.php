<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
      
  </head>
  <body>
      
    <div class="container">
       
        <div class="row text-center">
            
            
            
            <div class="col-md-12 mt-5 mb-5">
                <h6>DESTAQUES</h6>
            <h1 class="font-custom green">do mês</h1>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            
            <?php 
                while($hot_products = mysqli_fetch_array($get_hot_products)){
                    echo "
                        <div class='product col-md-4 mb-5'>
                           <img src='$hot_products[photo_products]' class='img-fluid product-photo mb-2'>
                            <h5 class='product-title'>$hot_products[name_products]</h5>
                            <span class='badge badge-success'>$hot_products[discount_products]% OFF</span>
                            <h2 class='text-success mb-4'>R$$hot_products[price_products]</h2>
                            <div class='row'>
                                <div class='col-12'>
                                $hot_products[pagseguro_products]
                                <a href='buy.php?product=$hot_products[id_products]' class='btn btn-primary btn-sm'><big>Mais Informações</big> </a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
        </div>
    </div>
      <div class="row text-center">
            <div class="container-fluid service-container">
                <div class="container">
                    <h2 class="font-custom green mt-3">Serviços</h2>
                    <p>Você merece nossos serviços! Permita-se</p>
               
                <ul class="nav nav-pills justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">
                    <?php echo $tab_menu; ?>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                   <?php echo $tab_content; ?>
                </div>
                </div>
               
            </div>
        </div>
      
        <div class="row text-center">
            <div class="container-fluid blog-container">
                <div class="container">
                    <h2 class="font-custom green mt-3">Blog</h2>
                    
               <!--
                <ul class="nav nav-pills justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="blog.php" role="tab" aria-controls="pills-home1" aria-selected="true">Ver todos os posts</a>
                    </li>
                    
                </ul>
                -->
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                        
                        <div class="row justify-content-start ml-5">
                            <h6 class="mt-4 ml-5">M A I S </h6><h2 class="font-custom green mt-3 ml-2">Recentes</h2>
                        </div>
                        <div class="row justify-content-center ">
                            
                            <?php
                                while($list_posts = mysqli_fetch_array($get_posts)){
                                    $small_desc_post = substr($list_posts[description_posts], 0, 100);
                                    echo "
                                        <div class='card mr-3 mb-4' style='width: 18rem;'>
                                            <img class='card-img-top' src='$list_posts[photo_posts]' alt='Card image cap'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>$list_posts[title_posts]</h5>
                                                <p class='card-text'>$small_desc_post</p>
                                                <div class='row'>
                                                    <div class='col-12'>
                                                        <a href='posts.php?post=$list_posts[id_posts]' class='btn btn-light btn-sm'>Ler <i class='fas fa-arrow-right'></i> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
      
        <div class="row text-center mt-5">
            <div class="container-fluid blog-container">
                <div class="container">
                   <!--<div class="container-video mb-5 pb-0 my-3">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <iframe width="100%" height="280" src="https://www.youtube.com/embed/x9yMd1Owh6s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="my-blank"></iframe>
                            </div>
                            <div class="col-12 col-md-6 text-left text-white">
                                <p><strong>RONALDO COELHO ESTETICISTA A 37 ANOS E MICROPIGMENTADOR A 12 ANOS DEMONSTRA TÉCNICAS DE MICROPIGMENTAÇÃO EM ARÉOLA.</strong></p>
                                <p> É um procedimento indicado para reconstruir e disfarçar cicatrizes, aproximando-se ao máximo da cor natural da pele. A técnica segue os princípios básicos de tatuagens, mas a tinta só é aplicada na camada mais superficial da pele. <br><br>Entre outras aplicações, como lábios leporinos, marcas de vitiligo estacionário e reparação de queimaduras na pele, a técnica é utilizada para o redesenho de aréolas e mamilos das pacientes que precisaram reconstruir os seios após o tratamento de câncer de mama.<br>
O procedimento é rápido e indolor. Mesmo havendo pouca sensibilidade na região, é aplicado um anestésico local sobre a pele, para inibir qualquer desconforto.</p>
                            </div> 
                        </div>
                    </div>-->
                    
                    <div class="container-video col-12 mb-4 mb-md-0">
                        <div class="row">
                            <div class="col-12 col-md-6 mt-4">
                                <iframe width="100%" height="280" src="https://www.youtube.com/embed/x9yMd1Owh6s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="mt-5"></iframe>
                            </div>
                            <div class="col-12 col-md-6 text-white my-3 text-left">
                                <p><strong>RONALDO COELHO ESTETICISTA HÁ 37 ANOS E MICROPIGMENTADOR HÁ 12 ANOS DEMONSTRA TÉCNICAS DE MICROPIGMENTAÇÃO EM ARÉOLA.</strong></p>
                                <p> É um procedimento indicado para reconstruir e disfarçar cicatrizes, aproximando-se ao máximo da cor natural da pele. A técnica segue os princípios básicos de tatuagens, mas a tinta só é aplicada na camada mais superficial da pele. <br><br>Entre outras aplicações, como lábios leporinos, marcas de vitiligo estacionário e reparação de queimaduras na pele, a técnica é utilizada para o redesenho de aréolas e mamilos das pacientes que precisaram reconstruir os seios após o tratamento de câncer de mama.<br>
O procedimento é rápido e indolor. Mesmo havendo pouca sensibilidade na região, é aplicado um anestésico local sobre a pele, para inibir qualquer desconforto.</p>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <div class="row d-none d-md-block mb-4">
            <div class="container">
                <div class="col-md-12">
                    <span class="d-md-inline-flex">
                        <h5 class="mt-2">Mais </h5>
                        <h2 class="font-custom green">Vídeos</h2>
                    </span>
                </div>
            </div>
        </div>
        
        <div class="row text-center">
            <div class="container-fluid blog-container">
                <div class="container">
                   <div class="row justify-content-center ">
                       
                       <?php
                        while($list_videos = mysqli_fetch_array($get_videos)){
                            echo "
                                <div class='col-md-4 mb-4'>
                                    <div class='embed-responsive embed-responsive-16by9'>
                                        <iframe class='embed-responsive-item' src='$list_videos[content_videos]' allowfullscreen></iframe>
                                    </div>
                                </div>
                            ";
                        }
                       ?>

                    </div>
                </div>
            </div>
        </div>
      
      <div class="row text-center">
        <div class="container-fluid container-newsletter ">
            <div class="container col-md-12 justify-content-center">
                <div class="row mx-auto">
                    <div class="col-md-12 mt-4 mb-3">
                        <span class="d-md-inline-flex">
                            <h5 class="mt-2 white">Receba promoções</h5>
                            <h2 class="font-custom gold">&nbsp;exclusivas</h2>
                            
                            <form class="form-inline ml-5" method="post" action="#">
                                <input class="form-control mr-sm-2" type="text" placeholder="Nome" aria-label="Nome" required name="name_newsletter">
                                <input class="form-control mr-sm-2" type="Email" placeholder="Email" aria-label="Email" required name="email_newsletter">
                                <input type="submit" class="btn btn-warning my-2 my-sm-0" name="btn_newsletter" value="Cadastrar-se">
                                
                          </form>
                        </span>
                        
                    </div>
                    
                    
                </div>
            </div>  
        </div>
      </div>
  </body>
</html>

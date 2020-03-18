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
        <div class="row text-center">
            
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
                                <a href='buy.php?product=$hot_products[id_products]' class='btn btn-success btn-sm'><big><i class='fas fa-cart-plus'></i></big> </a>
                                <a href='buy.php?product=$hot_products[id_products]' class='btn btn-primary btn-sm'><big>Mais Informações</big> </a>
                                </div>
                            </div>
                        </div>
                    ";
                }
            ?>
            <!--<div class="product col-md-4 mb-5">
               <img src="imgs/prod1.jpg" class="img-fluid product-photo mb-2">
                <h5 class="product-title">Massagem Relax Dupla</h5>
                <span class="badge badge-success">10% OFF</span>
                <h2 class="text-success mb-4">R$200,00</h2>
                <div class="row">
                    <div class="col-12">
                    <a href="#" class="btn btn-success btn-sm"><big><i class="fas fa-cart-plus"></i></big> </a>
                    <a href="#" class="btn btn-primary btn-sm"><big>Mais Informações</big> </a>
                    </div>
                </div>
            </div>
            <div class="product col-md-4 mb-5">
                <img src="imgs/prod2.jpg" class="img-fluid product-photo mb-2">
                <h5 class="product-title">Day Spa Toque de Seda</h5>
                <span class="badge badge-success">70% OFF</span>
                <h2 class="text-success mb-4">R$200,00</h2>
                
                <div class="row">
                    <div class="col-12">
                    <a href="#" class="btn btn-success btn-sm"><big><i class="fas fa-cart-plus"></i></big> </a>
                    <a href="#" class="btn btn-primary btn-sm"><big>Mais Informações</big> </a>
                    </div>
                </div>
            </div>
            <div class="product col-md-4 mb-5">
                <img src="imgs/prod3.jpg" class="img-fluid product-photo mb-2">
                <h5 class="product-title">Massagem Pedras Quentes</h5>
                <span class="badge badge-success">15% OFF</span>
                <h2 class="text-success mb-4">R$200,00</h2>
                <div class="row">
                    <div class="col-12">
                    <a href="#" class="btn btn-success btn-sm"><big><i class="fas fa-cart-plus"></i></big> </a>
                    <a href="#" class="btn btn-primary btn-sm"><big>Mais Informações</big> </a>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
      <div class="row text-center">
            <div class="container-fluid service-container">
                <div class="container">
                    <h2 class="font-custom green mt-3">Serviços</h2>
                    <p>No Spa Jardim seu atendimento traz o despertar dos 5 sentidos. Escolha seu serviço!</p>
               
                <ul class="nav nav-pills justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">
                    
                    <?php
                                     
                    $list_category_tst = mysqli_fetch_array($get_category);
                    $count_cat = mysqli_num_rows($get_category);
                    echo $count_cat;
                    
                    $show_cat = mysqli_query($link, "SELECT * FROM products WHERE category_products = '$list_category_tst[name_category]'");
                    
                    $count_prod = mysqli_num_rows($show_cat);
                    echo $count_prod;
                    
                    
                    while($list_category = mysqli_fetch_array($get_category)){
                        
                       
                        
                  ?>
                  
                      <li class="nav-item">
                <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#<?php echo str_replace(" ","",$list_category[name_category]); ?>" role="tab" aria-controls="pills-home" aria-selected="true"><?php echo $list_category[name_category]; ?></a>
            </li>
                      <?php
                         $cat = $list_category[name_category];
                   
                    }
                     echo $cat;
                   
                  ?> 
              
                    
                    
                    
                    
                    
                    
                    
                   
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    
                    <?php

                        
                        while($list_services = mysqli_fetch_array($show_cat)){   
                    ?>
                        <div class="tab-pane fade show mb-3" id="<?php echo str_replace(" ","",$list_services[name_category]); ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                            
                            <?php 
                                
                            
                                    echo "
                                        <div class='row justify-content-center '>
                                            <div class='card mr-3 mb-4' style='width: 18rem;'>
                                                <img class='card-img-top' src='imgs/prod2.jpg' alt='Card image cap'>
                                                <div class='card-body'>
                                                    <h5 class='card-title'>$list_services[name_products]</h5>
                                                    <p class='card-text'>$list_services[name_category]</p>
                                                    <div class='row'>
                                                        <div class='col-12'>
                                                            <a href='#' class='btn btn-success btn-sm'><big><i class='fas fa-cart-plus'></i></big> </a>
                                                            <a href='#' class='btn btn-primary btn-sm'><big>Mais Informações</big> </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    "; 
                                
                            
                            ?>
                        </div>
                        <?php
                            
                        }
                        ?>
                    
                    
                    
                </div>
                </div>
               
            </div>
        </div>
      
        <div class="row text-center">
            <div class="container-fluid blog-container">
                <div class="container">
                    <h2 class="font-custom green mt-3">Blog</h2>
               
                <ul class="nav nav-pills justify-content-center mb-3 mt-5" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home1" role="tab" aria-controls="pills-home1" aria-selected="true">Item 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile1" role="tab" aria-controls="pills-profile1" aria-selected="false">Item 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact1" role="tab" aria-controls="pills-contact1" aria-selected="false">Item 3</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home1" role="tabpanel" aria-labelledby="pills-home-tab1">
                        <div class="row justify-content-center ">
                            <div class="card mr-3 mb-4" style="width: 18rem;">
                                <img class="card-img-top" src="imgs/prod2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-light btn-sm">Ler <i class="fas fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-3 mb-4" style="width: 18rem;">
                                <img class="card-img-top" src="imgs/prod2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-light btn-sm">Ler <i class="fas fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mr-3 mb-4" style="width: 18rem;">
                                <img class="card-img-top" src="imgs/prod2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="#" class="btn btn-light btn-sm">Ler <i class="fas fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile1" role="tabpanel" aria-labelledby="pills-profile-tab1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada et eros sit amet molestie. Pellentesque imperdiet laoreet lorem et fermentum. Nulla luctus lorem id tempor euismod. Nam porta, purus ut pretium luctus, risus lorem imperdiet nunc, vitae suscipit eros velit a metus. Duis aliquam, mi sed pellentesque aliquet, leo lectus volutpat felis, et consectetur tellus sapien vitae mauris. Mauris id libero ornare, congue velit sit amet, hendrerit ligula. Curabitur feugiat, ex vel interdum finibus, enim velit elementum enim, eu elementum nisi sapien et erat.</p>
                    </div>
                    <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact-tab1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada et eros sit amet molestie. Pellentesque imperdiet laoreet lorem et fermentum. Nulla luctus lorem id tempor euismod. Nam porta, purus ut pretium luctus, risus lorem imperdiet nunc, vitae suscipit eros velit a metus. Duis aliquam, mi sed pellentesque aliquet, leo lectus volutpat felis, et consectetur tellus sapien vitae mauris. Mauris id libero ornare, congue velit sit amet, hendrerit ligula. Curabitur feugiat, ex vel interdum finibus, enim velit elementum enim, eu elementum nisi sapien et erat.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
      
        <div class="row text-center mt-5">
            <div class="container-fluid blog-container">
                <div class="container">
                   <div class="container-video mb-5 pb-0">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <iframe width="100%" height="280" src="https://www.youtube.com/embed/x9yMd1Owh6s" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen class="my-blank"></iframe>
                            </div>
                            <div class="col-12 col-md-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam malesuada et eros sit amet molestie. Pellentesque imperdiet laoreet lorem et fermentum. Nulla luctus lorem id tempor euismod. Nam porta, purus ut pretium luctus, risus lorem imperdiet nunc, vitae suscipit eros velit a metus. Duis aliquam, mi sed pellentesque aliquet, leo lectus volutpat felis, et consectetur tellus sapien vitae mauris. Mauris id libero ornare, congue velit sit amet, hendrerit ligula. Curabitur feugiat, ex vel interdum finibus, enim velit elementum enim, eu elementum nisi sapien et erat.</p>
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
                        <div class="card mr-3 mb-4" style="width: 18rem;">
                            <img class="card-img-top" src="imgs/prod2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-light btn-sm">Ver <i class="fas fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mr-3 mb-4" style="width: 18rem;">
                            <img class="card-img-top" src="imgs/prod2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-light btn-sm">Ver <i class="fas fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mr-3 mb-4" style="width: 18rem;">
                            <img class="card-img-top" src="imgs/prod2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <div class="row">
                                    <div class="col-12">
                                        <a href="#" class="btn btn-light btn-sm">Ver <i class="fas fa-arrow-right"></i> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
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
                            
                            <form class="form-inline ml-5">
                                <input class="form-control mr-sm-2" type="text" placeholder="Nome" aria-label="Nome" required>
                                <input class="form-control mr-sm-2" type="Email" placeholder="Email" aria-label="Email" required>
                                <button class="btn btn-warning my-2 my-sm-0" type="submit">Cadastrar-se</button>
                          </form>
                        </span>
                        
                    </div>
                    
                    
                </div>
            </div>  
        </div>
      </div>
  </body>
</html>

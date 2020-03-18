<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <!-- MOBILE -->
            <div class="col-12 d-block d-md-none">
                <h4 class="gold mt-4 "><?php echo $list_products_info[category_products]; ?></h4>
                <h3 class="green d-block d-md-none"><?php echo $list_products_info[name_products]; ?></h3>
               <!-- <span class="text-secondary d-inline d-md-none">Compartilhar</span><br>
                <a href="#" class="text-secondary d-inline d-md-none"><i class="fab fa-facebook-square fa-lg"></i></a>
                <a href="#" class="text-secondary d-inline d-md-none"><i class="fab fa-twitter-square fa-lg"></i></a>
                <a href="#" class="text-secondary d-inline d-md-none"><i class="fab fa-whatsapp-square fa-lg"></i></a>
                -->
                <img src="<?php echo $list_products_info['photo_products']; ?>" class="img-fluid mt-4">
                
                <p class="text-justify mt-2">
                   <?php echo $list_products_info[description_products]; ?>
                </p>
                
                <span class='badge badge-success'><?php echo $list_products_info[discount_products]; ?>% OFF</span>
                <h3 class="green">R$<?php echo $list_products_info[price_products]; ?></h3>
               <?php echo $list_products_info[pagseguro_products]; ?>
            </div>
            <!-- END MOBILE -->
            
            <!-- DESKTOP -->
            
            <div class="col-md-12 d-none d-md-block mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="gold mt-4"><?php echo $list_products_info[category_products]; ?></h4>
                        <h3 class="green"><?php echo $list_products_info[name_products]; ?></h3>
                    </div>
                   <!-- <div class="col-md-6 mt-4">
                        <span class="text-secondary ">Compartilhar</span><br>
                        <a href="#" class="text-secondary"><i class="fab fa-facebook-square fa-lg"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-twitter-square fa-lg"></i></a>
                        <a href="#" class="text-secondary"><i class="fab fa-whatsapp-square fa-lg"></i></a>
                    </div>-->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo $list_products_info['photo_products']; ?>" class="img-fluid rounded mt-4">
                    </div>
                    <div class="col-md-6">
                        <p class="text-justify mt-3">
                            <?php echo $list_products_info[description_products]; ?>
                        </p>
                        <span class='badge badge-success'><?php echo $list_products_info[discount_products]; ?>% OFF</span>
                        <h3 class="green">R$<?php echo $list_products_info[price_products]; ?></h3>
                        <!-- BOTAO PAG SEGURO -->
                        <?php echo $list_products_info[pagseguro_products]; ?>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>

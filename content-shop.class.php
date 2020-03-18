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
                <h6>MAIS</h6>
            <h1 class="font-custom green">vendidos</h1>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            
            <?php 
                while($list_shop_products = mysqli_fetch_array($get_shop)){
                    echo "
                        <div class='product col-md-4 mb-5'>
                           <img src='$list_shop_products[photo_products]' class='img-fluid product-photo mb-2'>
                            <h5 class='product-title'>$list_shop_products[name_products]</h5>
                            <span class='badge badge-success'>$list_shop_products[discount_products]% OFF</span>
                            <h2 class='text-success mb-4'>R$$list_shop_products[price_products]</h2>
                            <div class='row'>
                                <div class='col-12'>
                                $list_shop_products[pagseguro_products]
                                <a href='buy.php?product=$list_shop_products[id_products]' class='btn btn-primary btn-sm'><big>Mais Informações</big> </a>
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

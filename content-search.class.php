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
        <?php 
            echo "<div class='alert alert-success mt-5 col-5 text-center mx-auto' role='alert'>
                  Foram encontrados <strong>$count_search resultados</strong> para sua busca.
                </div>";
        ?>
        <div class="row text-center justify-content-center">
            
            <?php 
            
            
         
                while($list_search_products = mysqli_fetch_array($get_search)){
                    echo "
                        <div class='product col-md-4 mb-5'>
                           <img src='$list_search_products[photo_products]' class='img-fluid product-photo mb-2'>
                            <h5 class='product-title'>$list_search_products[name_products]</h5>
                            <span class='badge badge-success'>$list_search_products[discount_products]% OFF</span>
                            <h2 class='text-success mb-4'>$list_search_products[price_products]</h2>
                            <div class='row'>
                                <div class='col-12'>
                                <a href='buy.php?product=$list_search_products[id_products]' class='btn btn-success btn-sm'><big><i class='fas fa-cart-plus'></i></big> </a>
                                <a href='buy.php?product=$list_search_products[id_products]' class='btn btn-primary btn-sm'><big>Mais Informações</big> </a>
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

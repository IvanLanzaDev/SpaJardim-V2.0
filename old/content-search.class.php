<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php include('functions.class.php'); ?>
    <div class="container">
        <div class="container">
            <div class="row">
                
        
        <?php
            if($count_search != 0){
                echo "
                    <div class='alert alert-success text-center'>
                        <h4>Exibindo resultados para <i>$result_search</i></h4>
                    </div>
                ";
            }    
                
            if($count_search == 0){
                echo "
                    <div class='alert alert-danger text-center'>
                        <h4>Desculpe, n&atilde;o encontramos o produto desejado</h4>
                    </div>
                ";
            }        
        ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <form class="form-inline" method="get" action="search.php?search=<?php $search ?>">
                  <div class="form-group col-lg-12">
                    <div class="input-group col-lg-12">
                      <input type="search" class="form-control col-lg-12" placeholder="O que voce procura?" name="search">
                      <span class="input-group-btn">
                        <button class="btn btn-default btn-success col-lg-12" type="submit" name="btn_search" value="true">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
                    </span>
                    </div>
                  </div>
                </form>
                
                
                <?php
                    
                
                    while($list_search_desk = mysqli_fetch_array($get_search_desk)){
                      echo "
                        <div class='row hidden-md hidden-lg'>
                              <div class='col-sm-6 col-md-4 col-lg-4'>
                                <div class='thumbnail'>
                                  <img src='$list_search_desk[photo1_products]' alt='...'>
                                  <div class='caption'>
                                    <h3>$list_search_desk[name_products]</h3>
                                    <h4><span class='label label-danger'>$list_search_desk[off_products]% OFF</span>  </h4>
                                    <p class='text-justify help-block'>$list_search_desk[desc_products]</p>
                                    <h2 class='text-success'>$list_search_desk[price_products]</h2>
                                    <p>
                                        <a href='buy.php?product=$list_search_desk[id_products]' class='btn btn-success' role='button'>
                                            <span class='glyphicon glyphicon-shopping-cart'></span> Comprar
                                        </a>
                                        <a href='buy.php?product=$list_search_desk[id_products]' class='btn btn-default' role='button'>Mais Informa&ccedil;&otilde;es</a>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>  
                      ";
                    }
                ?>
                
                
                <?php
                    while($list_search_mobile = mysqli_fetch_array($get_search_mobile)){
                        echo "
                            <div class='col-md-4 col-lg-4 hidden-xs hidden-sm'>
                                <div class='thumbnail'>
                                    <img src='$list_search_mobile[photo1_products]' alt='...'>
                                    <div class='caption'>
                                        <h3>$list_search_mobile[name_products]</h3>
                                        <h4><span class='label label-danger'>$list_search_mobile[off_products]% OFF</span>  </h4>
                                        <p class='text-justify help-block'>$list_search_mobile[desc_products]</p>
                                        <h2 class='text-success'>$list_search_mobile[price_products]</h2>
                                        <p>
                                            <a href='buy.php?product=$list_search_mobile[id_products]' class='btn btn-success' role='button'>
                                            <span class='glyphicon glyphicon-shopping-cart'></span> Comprar
                                            </a>
                                            <a href='buy.php?product=$list_search_mobile[id_products]' class='btn btn-default' role='button'>Mais Informa&ccedil;&otilde;es</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                ?>     
            </div>
        </div>
    </div>
  </body>
</html>
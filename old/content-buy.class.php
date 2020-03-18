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
        <div class="row">
            <?php 
                echo "
                    <div class='col-xs-4 col-sm-3 col-md-4 col-lg-4'>
                        <a href='#' class='thumbnail' data-toggle='modal' data-target='#modalGaleryImg1'>
                            <img src='$list_detail_products[photo1_products]' alt='...'>
                        </a>
                    </div>
                    
                    <div class='col-xs-4 col-sm-3 col-md-4 col-lg-4'>
                        <a href='#' class='thumbnail' data-toggle='modal' data-target='#modalGaleryImg2'>
                            <img src='$list_detail_products[photo2_products]' alt='...'>
                        </a>
                    </div>
                    
                    <div class='col-xs-4 col-sm-3 col-md-4 col-lg-4'>
                        <a href='#' class='thumbnail' data-toggle='modal' data-target='#modalGaleryImg3'>
                            <img src='$list_detail_products[photo3_products]' alt='...'>
                        </a>
                    </div>
                ";
            ?>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <p class="help-block text-center">Clique nas imagens para ampliar</p>
            </div>
        </div>
    </div>
        
        <h3><?php echo $list_detail_products[name_products]; ?></h3>
        <h4><span class="label label-danger"><?php echo $list_detail_products[off_products]; ?>% OFF</span>  </h4>
        <p class="text-justify help-block col-lg-4 hidden-xs hidden-sm"><?php echo $list_detail_products[desc_products]; ?></p>
        <p class="text-justify help-block hidden-md hidden-lg"><?php echo $list_detail_products[desc_products]; ?></p>
        
        <h2 class="text-success"><?php echo $list_detail_products[price_products]; ?></h2>
            <?php echo $list_detail_products[btn_pagseguro]; ?>


<!-- Modal 1 -->
<?php
        echo "
            <div class='modal fade modal-custom' id='modalGaleryImg1' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button> 
                    </div>
                  <div class='modal-body'>
                      <img src='$list_detail_products[photo1_products]' alt='...' class='img-responsive'>
                  </div>
                </div>
              </div>
            </div>
        ";
?>
<!-- End Modal 1 -->
<!-- Modal 2 -->
<?php
        echo "
            <div class='modal fade modal-custom' id='modalGaleryImg2' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button> 
                    </div>
                  <div class='modal-body'>
                      <img src='$list_detail_products[photo2_products]' alt='...' class='img-responsive'>
                  </div>
                </div>
              </div>
            </div>
        ";
?>
<!-- End Modal 2 --> 
<!-- Modal 3 -->
<?php
        echo "
            <div class='modal fade modal-custom' id='modalGaleryImg3' tabindex='-1' role='dialog' aria-labelledby='myModalLabel'>
              <div class='modal-dialog' role='document'>
                <div class='modal-content'>
                    <div class='modal-header'>
                       <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'>&times;</span></button> 
                    </div>
                  <div class='modal-body'>
                      <img src='$list_detail_products[photo3_products]' alt='...' class='img-responsive'>
                  </div>
                </div>
              </div>
            </div>
        ";
?>
<!-- End Modal 3 -->         
        
        <!-- BOTAO PAGSEGURO FIXED BOTTOM descontinuado
        <nav class="navbar navbar-default navbar-fixed-bottom bg-pagSeguro hidden-md hidden-lg">
          <div class="container">
              <div class="col-xs-12 col-xs-offset-2 btn-pagSeguro">
               
<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post">

<input type="hidden" name="itemCode" value="753F413F1515EA266419DFA48E52B186" />
<input type="hidden" name="iot" value="button" />
<input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/pagamentos/205x30-comprar.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
</form>
-->
              </div>
          </div>
        </nav>
        
    </div>
  </body>
</html>
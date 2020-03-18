<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php
        include('functions.class.php'); 
      ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Excluir Produtos</h2>
            <h3 class="text-center hidden-md hidden-lg">Excluir Produtos</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="products-admin.php">Produtos</a></li>
              <li class="active">Excluir Produtos</li>    
            </ol>
        </div>
         <?php 
        if($delete_products){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> O produto foi apagado.
                </div>
                ";      
        }
         ?>
        <div class="alert alert-danger alert-dismissible fade in" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
            <h4>Tem certeza ?</h4>
            <p>Voc&ecirc; est&aacute; prestes a excluir um produto.</p>
            
            <div>
                <form method="post" action="">
                    <input type="hidden" name="id_products" value="<?php $list_get_edit_products['id_products']; ?>">
                    <input type="hidden" name="name_products" value="<?php $list_get_edit_products['name_products']; ?>">
                    <input type="hidden" name="desc_products" value="<?php $list_get_edit_products['desc_products']; ?>">
                    <input type="hidden" name="price_products" value="<?php $list_get_edit_products['price_products']; ?>">
                    <input type="hidden" name="off_products" value="<?php $list_get_edit_products['off_products']; ?>">
                    <input type="hidden" name="photo1_products" value="<?php $list_get_edit_products['photo1_products']; ?>">
                    <input type="hidden" name="photo2_products" value="<?php $list_get_edit_products['photo2_products']; ?>">
                    <input type="hidden" name="photo3_products" value="<?php $list_get_edit_products['photo3_products']; ?>">
                    
                    <button type="submit" class="btn btn-danger" name="btn_delete_products">Confirmar</button>
                    <a href="products-admin.php" class="btn btn-default">Cancelar</a>
                </form>    
                
            </div>
            
        </div>

    </div>
  </body>
</html>
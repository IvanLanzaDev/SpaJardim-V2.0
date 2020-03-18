<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php include('functions.class.php'); ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Editar Produtos</h2>
            <h3 class="text-center hidden-md hidden-lg">Editar Produtos</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="products-admin.php">Produtos</a></li>
              <li class="active">Editar Produtos</li>    
            </ol>
        </div>
        
        <?php
            if($insert_product){
            echo "
                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
                  <strong>Muito Bem !</strong> Produto $name_products foi cadastrado.
                </div>
                "; 
        }
        ?>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Editar Produtos</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
                        <label>Nome</label>
                        <input type="text" class="form-control" autofocus required name="name_products" value="<?php echo $list_get_edit_products['name_products']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Descri&ccedil;&atilde;o</label>
                        <textarea class="form-control" required name="desc_products" rows="10"><?php echo $list_get_edit_products['desc_products']; ?></textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Pre&ccedil;o</label>
                        <input type="text" class="form-control" required name="price_products" placeholder="Exemplo: R$000,00" value="<?php echo $list_get_edit_products['price_products']; ?>">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Desconto</label>
                        <input type="number" class="form-control" required name="off_products" placeholder="Exemplo: 75" maxlength="3" value="<?php echo $list_get_edit_products['off_products']; ?>">
                    </div>
                    <div class="page-header">
                        <h3>Fotos</h3>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo1_products[]" class="form-control" value="<?php echo $list_get_edit_products['photo1_products']; ?>">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Foto</label>
                        <input type="file" name="photo2_products[]" class="form-control" value="<?php echo $list_get_edit_products['photo2_products']; ?>">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Foto</label>
                        <input type="file" name="photo3_products[]" class="form-control" value="<?php echo $list_get_edit_products['photo3_products']; ?>">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_edit_products">Cadastrar Produto</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
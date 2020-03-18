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
            <h2 class="hidden-xs hidden-sm">Cadastrar Produto</h2>
            <h3 class="text-center hidden-md hidden-lg">Cadastrar Produto</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="products-admin.php">Produto</a></li>
              <li class="active">Cadastrar Produto</li>    
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
                <h3 class="panel-title">Cadastrar Produto</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
                        <label>Nome</label>
                        <input type="text" class="form-control" autofocus required name="name_products">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Descri&ccedil;&atilde;o</label>
                        <textarea class="form-control" required name="desc_products" rows="10"></textarea>
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Pre&ccedil;o</label>
                        <input type="text" class="form-control" required name="price_products" placeholder="Exemplo: R$000,00">
                    </div>
                    <div class="form-group col-lg-6">
                        <label>Desconto</label>
                        <input type="number" class="form-control" required name="off_products" placeholder="Exemplo: 75" maxlength="3">
                    </div>
                    <div class="page-header">
                        <h3>Fotos</h3>
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Foto em destaque</label>
                        <input type="file" name="photo1_products[]" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Foto</label>
                        <input type="file" name="photo2_products[]" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                        <label>Foto</label>
                        <input type="file" name="photo3_products[]" class="form-control">
                    </div>
                    <div class="form-group col-lg-12">
                        <label>Link do Bot&atilde;o PagSeguro <small><a href="https://pagseguro.uol.com.br/integracao/botoes_de_pagamento.jhtml" target="_blank">Link para o site do PagSeguro</a></small></label>
                        <input type="text" name="btn_pagseguro" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="btn_send_products">Cadastrar Produto</button>
                </form>
            </div>
        </div>

    </div>
  </body>
</html>
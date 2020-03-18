<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://cdn.ckeditor.com/ckeditor5/11.0.1/classic/ckeditor.js"></script>
      
    <!-- Bootstrap CSS -->
    
    <title>Spa Jardim - Painel de Controle</title>
  </head>
  <body>
   
    <div class="col-12 col-md-9 mt-5">
        <div class="row col-12 mb-3">
            <h3>Produtos</h3> <a href="slider.php" class="btn btn-outline-secondary ml-3"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Produtos</li>
            <li class="breadcrumb-item active" aria-current="page">Novo Produto</li>
        </ol>
        </nav>
        
        <div class="card">
            <h5 class="card-header">Adicionar novo produto.</h5>
            <div class="card-body">
                
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Produto</label>
                                <input type="text" class="form-control" name="name_products" placeholder="Nome do Produto" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Categoria</label>
                                <select class="form-control" name="category_products">
                                    <option selected>Escolha</option>
                                    <?php
                                        while($category = mysqli_fetch_array($get_category)){
                                            echo "
                                                <option>$category[name_category]</option>
                                            ";
                                        }
                                    ?>
                                    
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                
                                <label for="inlineFormInputGroup">Preço</label>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">R$</div>
                                    </div>
                                    <input type="text" class="form-control money" id="inlineFormInputGroup" placeholder="Preço" required name="price_products">
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="inlineFormInputGroup">Desconto</label>
                                  <div class="input-group mb-2">
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Desconto" maxlength="3" name="discount_products">
                                      <div class="input-group-prepend">
                                      <div class="input-group-text">%</div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="photo_products">
                                    <label class="custom-file-label" for="customFile">Escolher Arquivo</label>
                                </div>
                            </div>
                            <div class="form-group col-md-2">
                                <label>Produto em Destaque</label>
                                <select class="form-control" name="hot_products">
                                    <option selected>Não</option>
                                    <option>Sim</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Descrição <span class="text-info"><strong>Atenção</strong> para dar um espaço menor ao pular linha pressione: <strong>SHIFT e ENTER</strong></span></label>
                                <textarea class="form-control" id="editor" name="description_products"></textarea>
                               
                                    <script>
                                        ClassicEditor
                                            .create( document.querySelector( '#editor' ) )
                                            .then( editor => {
                                                console.log( editor );
                                            } )
                                            .catch( error => {
                                                console.error( error );
                                            } );
                                    </script>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Codigo botão PagSeguro</label>
                                <textarea class="form-control" name="pagseguro_products" required></textarea>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success mt-md-5 btn-block btn-lg" name="btn_new_product">Cadastrar</button>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
</div>
     
     
  </body>
</html>

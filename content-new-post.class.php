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
            <h3>Blog</h3> <a href="blog.php" class="btn btn-outline-secondary ml-3"> <i class="fas fa-arrow-left"></i> Voltar</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
            <li class="breadcrumb-item active" aria-current="page">Novo Post</li>
        </ol>
        </nav>
        
        <div class="card">
            <h5 class="card-header">Adicionar novo post.</h5>
            <div class="card-body">
                
                <form method="post" action="#" enctype="multipart/form-data">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Titulo do Post</label>
                                <input type="text" class="form-control" name="title_posts" placeholder="Titulo do Post" required>
                            </div>
                            
                            <div class="form-group col-md-4">
                                <label>Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="photo_posts">
                                    <label class="custom-file-label" for="customFile">Escolher Arquivo</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Descrição <span class="text-info"><strong>Atenção</strong> para dar um espaço menor ao pular linha pressione: <strong>SHIFT e ENTER</strong></span></label>
                                <textarea class="form-control" id="editor" name="description_posts"></textarea>
                               
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
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-success mt-md-5 btn-block btn-lg" name="btn_new_post">Cadastrar</button>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
</div>
     
     
  </body>
</html>

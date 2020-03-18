<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
    <div class="container-fluid">
        <div class="row">
            <div class="container-logo">
                <a href="index.php"><img src="imgs/new-logo-menu.jpg" class="img-responsive"></a>
                <h5 class="white contact-logo hidden-xs hidden-smn">
                    <strong><i class="fa fa-phone-square" aria-hidden="true"></i></strong> (11)4992-1222  
                    
                    <strong><i class="fa fa-whatsapp" aria-hidden="true"></i></strong> (11)94005-6023
                </h5>
                
                
                <a href="contact.php#vip" class="hidden-xs hidden-smn" data-toggle="modal" data-target="#myModal"><h3 class="white vip-client-text col-md-4 text-center col-md-offset-5">Quero ser um cliente VIP Spa Jardim !!! Clique Aqui</h3></a>
            </div>    
        </div>    
    </div>
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" style="background: #076241 !important; color: #FFF !important;">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
      <!-- ** BRAND TEXT <a class="navbar-brand" href="#">Spa Jardim</a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">Institucional</a></li>
        <li><a href="treatments.php">Tratamentos</a></li>
        <li><a href="day-spa.php">Day Spa</a></li>
        <li><a href="training.php">Treinamento Funcional</a></li>
        <li><a href="personal.php">Personal Trainer</a></li>
        
        <li><a href="pilates.php">Pilates</a></li> 
          <li class="active"><a href="shop.php"><span class="glyphicon glyphicon-shopping-cart"></span> Loja Virtual</a></li>
        <li><a href="contact.php">Contato</a></li>  
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 
      
      <script src="https://use.fontawesome.com/74c8b63bee.js"></script>
      
       

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Quero ser um cliente VIP</h4>
      </div>
      <div class="modal-body">
        <p class="text-info"><strong>Preencha o formulário abaixo:</strong></p>
        <form method="post" action="">
            <div class="form-group">
                <label>Nome:</label>
                <input type="text" class="form-control" placeholder="Digite seu nome" required name="name_newsletter">
            </div>
            <div class="form-group">
                <label>E-mail:</label>
                <input type="email" class="form-control" placeholder="Digite seu e-mail" required name="email_newsletter">
            </div>
            <button type="submit" class="btn btn-success" name="btn_send_newsletter"><span class="glyphicon glyphicon-ok"></span> Quero ser um cliente VIP</button>
        </form>
      </div>
      
    </div>
  </div>
</div>
  </body>
</html>
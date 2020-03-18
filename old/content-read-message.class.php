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
            <h2 class="hidden-xs hidden-sm">Mensagens</h2> 
            <h3 class="text-center hidden-md hidden-lg">Mensagens</h3> 
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li><a href="view-message.php">Mensagens</a></li>
              <li class="active">Ler Mensagens</li>
            </ol>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Mensagem</h3>
            </div>
            <div class="panel-body">
                <h4>Nome</h4>
                <p class="help-block"><?php echo $list_read_message['name_contact']; ?></p>
                
                <h4>Assunto</h4>
                <p class="help-block"><?php echo $list_read_message['subject_contact']; ?></p>
                
                <h4>Email</h4>
                <p class="help-block"><?php echo $list_read_message['email_contact']; ?></p>
                
                <h4>Telefone</h4>
                <p class="help-block"><?php echo $list_read_message['tel_contact']; ?></p>
                
                <h4>Celular</h4>
                <p class="help-block"><?php echo $list_read_message['cel_contact']; ?></p>
                
                <h4>Onde conheceu a Spa Jardim by Ronaldo est&eacute;tica</h4>
                <p class="help-block"><?php echo $list_read_message['know_contact']; ?></p>
                
                <h4>Mensagem</h4>
                <p class="help-block"><?php echo $list_read_message['msg_contact']; ?></p>
            </div>
        </div>

    </div>
  </body>
</html>
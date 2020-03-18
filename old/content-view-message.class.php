<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
    <?php include("functions.class.php"); ?>
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Mensagens</h2> 
            <h3 class="text-center hidden-md hidden-lg">Mensagens</h3> 
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li class="active">Mensagens</li>
            </ol>
        </div>
        
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Mensagens Recebidas</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th class="col-lg-4">Nome</th>
                                <th class="col-lg-2">Assunto</th>
                                <th class="col-lg-1">A&ccedil;&otilde;es</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                if($get_contact){
                                    while($list_get_contact = mysqli_fetch_array($get_contact)){
                                        echo "
                                            <tr>
                                                <td class='col-lg-4'>$list_get_contact[name_contact]</td>
                                                <td class='col-lg-2'>$list_get_contact[subject_contact]</td>
                                                <td class='col-lg-1'><a href='read-message.php?message=$list_get_contact[id_contact]' class='btn btn-warning btn-sm'>Ler Mensagem</a></td>
                                                <td class='col-lg-1'><a href='delete-message.php?message=$list_get_contact[id_contact]' class='btn btn-danger btn-sm'>Excluir</a></td>
                                            </tr>   
                                        ";
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
        
        
        
    </div>
  </body>
</html>
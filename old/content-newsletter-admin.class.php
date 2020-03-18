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
            <h2 class="hidden-xs hidden-sm">Newsletter</h2>
            <h3 class="text-center hidden-md hidden-lg">Newsletter</h3>
            <ol class="breadcrumb">
              <li><a href="admin.php">In&iacute;cio</a></li>
              <li class="active">Newsletter</li>
            </ol>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>E-mail</th>
                </tr>
              </thead>
              <tbody>
                  
                <?php
                    while($list_newsletter = mysqli_fetch_array($get_newsletter)){
                        echo "
                            <tr>
                              <td>$list_newsletter[name_newsletter]</td>
                              <td>$list_newsletter[email_newsletter]</td>
                            </tr>   
                        ";
                    }  
                ?>
                                
              </tbody>
            </table>
        </div>
    </div>
  </body>
</html>
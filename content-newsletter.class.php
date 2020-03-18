<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    
    <title>Spa Jardim - Painel de Controle</title>
  </head>
  <body>
   
    <div class="col-12 col-md-9 mt-5">
        <div class="row col-12 mb-3">
            <h3>Newsletter</h3>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard.php">Painel de Controle</a></li>
            <li class="breadcrumb-item active" aria-current="page">Newsletter</li>
            
        </ol>
        </nav>
        <div class="row text-center mr-0 ml-0">
            <div class="alert alert-primary mx-auto col-12" role="alert">
              Até o momento <strong><?php echo $count_newsletter; ?></strong> pessoas se cadastraram na newsletter!
            </div>
            
            <table class="table table-striped table-hover">
              <thead>
                <tr>
                  <th scope="col">Nome</th>
                  <th scope="col">Email</th>
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

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      
      <?php include("functions.class.php"); ?>
      <?php
      
         session_start();
        if(!isset($_SESSION["email_user"]) || !isset($_SESSION["senha_user"])){
            header("Location: index.php");
            echo "erro Session";
            exit;
        }else{ // RESGATANDO INFORMACOES DO USUARIO PELA SESSION
            $email = $_SESSION["email_user"];
             $query_user = mysqli_query($connect, "SELECT * FROM user WHERE email_user = '$email'");
                if($query_user){
                    $list_user_info = mysqli_fetch_array($query_user);
                }
                $nome = $list_user_info[nome_user];
                $id_user_list = $list_user_info[id_user];
            
                
        }  
      
      ?>
            <!-- SIDE NAV -->
            <div class="side-nav-admin col-md-3 col-lg-3 hidden-xs hidden-sm">
                <ul class="nav nav-pills nav-stacked">
                    <li role="presentation" class="active"><a href="#">
                        <span class="glyphicon glyphicon-user"></span> Bem vindo: <?php echo $nome; ?></a>
                    </li>
                    <li role="presentation"><a href="slider-admin.php">Slider</a></li>
                    <li role="presentation"><a href="home-admin.php">P&aacute;gina Inicial</a></li>
                    <li role="presentation"><a href="products-admin.php">Produtos</a></li>
                    <li role="presentation"><a href="newsletter-admin.php">Newsletter</a></li>
                </ul> 
            </div>
            <!-- END SIDE NAV -->
   
  </body>
</html>
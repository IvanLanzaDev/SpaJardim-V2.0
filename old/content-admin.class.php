<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Administração do Site - Spa Jardim by Ronaldo Estética</title>
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
  </head>
  <body>
      
    <div class="container-admin col-xs-12 col-sm-12 col-md-9 col-lg-9">
        <div class="page-header">
            <h2 class="hidden-xs hidden-sm">Vis&atilde;o Geral</h2>
            <h3 class="text-center hidden-md hidden-lg">Administra&ccedil;&atilde;o do Site</h3>
            
        </div>
         <div class="hidden-xs hidden-sm col-md-12 col-lg-12">
            <span class="btn btn-success">Sliders Cadastrados <span class="badge"><?php echo $count_slider; ?></span></span>
            <span class="btn btn-success">Usu&aacute;rios cadastrados na newsletter <span class="badge"><?php echo $count_newsletter; ?></span></span>
        </div>
        
    </div>
  </body>
</html>
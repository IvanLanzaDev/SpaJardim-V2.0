<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>A Bola da Vez</title>
         <script type='text/javascript' src='http://files.rafaelwendel.com/jquery.js'></script>
        <script type='text/javascript' src='cep.js'></script>              
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      
      
      
    <?php
        include('connect.class.php');
      
        session_start();
        if(!isset($_SESSION["email_user"]) || !isset($_SESSION["senha_user"])){
            header("Location: index.php");
            echo "erro Session";
            exit;
        }else{
            $email = $_SESSION["email_user"];
             $query_user = mysqli_query($link, "SELECT * FROM `u640958987_bola`.`user` WHERE `email_user` = '$email'");
                if($query_user){
                    $list_user_info = mysqli_fetch_array($query_user);
                }
        }
      
        $title = $_POST['title_posts'];
        $text = $_POST['text_posts'];
        $user = $_POST['user_posts'];
        $time = $_POST['time_posts'];
        $id = $_POST['id_user'];
        $img_time = $_POST['img_time_posts'];
        $btn = $_POST['btn_user'];
        $id_post = $_POST['id_posts'];
      
        // UPLOAD DE IMG
        $nome = $_FILES['img_players']['name'];
        $temporario = $_FILES['img_players']['tmp_name'];
        $diretorio = "posts/".$nome;
        move_uploaded_file($temporario, $diretorio); 
      
      // UPLOAD DE VIDEO
        $nome_video = $_FILES['video_posts']['name'];
        $temporario_video = $_FILES['video_posts']['tmp_name'];
        $diretorio_video = "videos/".$nome_video;
        move_uploaded_file($temporario_video, $diretorio_video);
      
        // SETANDO REGIAO E CAPITURANDO O DATETIME          
        setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
        date_default_timezone_set('America/Sao_Paulo');

        $datas = date("d/M/Y H:i:s"); 
        $data = strftime("Publicado em %d de %B de %Y às %H:%M");


        if(isset($btn)){
            
            
            $insert = "INSERT INTO `u640958987_bola`.`posts`(title_posts,text_posts,img_posts,video_posts,user_posts,id_user,time_posts,img_time_posts,data_posts)VALUES('$title','$text','$diretorio','$diretorio_video','$user','$id','$time','$img_time','$data')";
            $result = mysqli_query($link, $insert);
            
            if($result){
                $last_id = mysqli_insert_id($link);
                echo "
                <div class=row>
                <div class='alert alert-success alert-dismissible fade in col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 mt-xs5 mt-lg5 alert-ss' role='alert'>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button>
      <h4>Muito Bem</h4>
      <p>Post <strong>$title</strong> foi cadastrado.<br>
         Clique no botão abaixo para visualizar os posts.
      </p>
      <br class=hidden-lg><br>
      <a href=timeline.php>
          <p>
            <button type='button' class='btn btn-primary'>Visualizar Posts </button>
          </p>
      </a>
    </div>
    </div>
                ";    
            }
            
            
            
            if(isset($btn)){
                $generate_notification = mysqli_query($link, "INSERT INTO post_notification(id_user,user_posts,id_posts)VALUES('$id','$user','$last_id')");
            }
        }
    ?>
  </head>
  <body class="bg-timeline">
      <div class="row">
        <div class="container-new mt-form col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form method="post" enctype="multipart/form-data" action="">
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="completeName" class="white-label">Titulo do Post</label>
                    <input type="text" class="form-control" id="completeName" placeholder="Digite o titulo do post" autofocus name="title_posts">
                </div>
                
                <input type="hidden" name="user_posts" value="<?php echo $list_user_info[nome_user]; ?>">
                <input type="hidden" name="time_posts" value="<?php echo $list_user_info[time_user]; ?>">
                <input type="hidden" name="id_user" value="<?php echo $list_user_info[id_user]; ?>">
                <input type="hidden" name="img_time_posts" value="<?php echo $list_user_info[img_time_user]; ?>">
                
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <label for="age" class="white-label">Conteudo do Post</label>
                    <textarea class="form-control" name="text_posts" rows="6"></textarea>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-3">
                    <label for="user" class="white-label">Postar Como</label>
                    <select class="form-control" name="user_posts">
                        <?php 
                            echo "
                                <option>$list_user_info[nome_user]</option>
                            "; 
                            $get_sub_users = mysqli_query($link, "SELECT * FROM players WHERE team_players='$list_user_info[time_user]'");
                            
                            if($get_sub_users){
                                while($list_sub_users = mysqli_fetch_array($get_sub_users)){
                                    echo "
                                        <option>$list_sub_users[name_players]</option>    
                                    ";
                                }
                            }
                            
                        ?>
                    </select>
                </div>
                
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-3">
                <p class="text-danger"><strong>Atenção: É permitido somente upload de foto ou video, não é possivel utilizar os dois no post.</strong></p>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">
                    <label for="image" class="white-label">Foto do Post</label>
                    <input type="file" style="margin-top: 3%" id="image" name="img_players">
                </div>
                
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">
                    <label for="image" class="white-label">Video</label>
                    <input type="file" style="margin-top: 3%" id="image" name="video_posts">
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">
                    <button type="submit" class="btn btn-success confirm-player" name="btn_user">Publicar Post</button>
                </div>
                
            </form>    
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Spa Jardim by Ronaldo Estética</title>


  </head>
  <body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=259020237587751";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<style>
  a.whats-btn > img{width: 30px; height: 30px; margin-left: 90vw; margin-top: 43vh; position: fixed; z-index: 9999999999999;}
  @media (min-width: 1200px) {a.whats-btn > img{width: 30px; height: 30px; margin-left: 77vw; margin-top: -30vh; position: fixed; z-index: 9999999999999;}}
</style>

      <?php include("functions.class.php"); ?>
    <div class="container">
        <div class="row">
          <a href="https://api.whatsapp.com/send?phone=5511940056023&text=Olá!%20tudo%20bem?" class="whats-btn"><img src="imgs/whats-logo.png"></a>

            <div class="dynamic-content col-xs-12 col-sm-12 hidden-md hidden-lg">
                <?php
                    while($list_show_featured = mysqli_fetch_array($show_featured)){
                        echo "
                            <a href='view-featured.php?featured=$list_show_featured[id_featured]' class=''>
                                <h3 class='green-title'>$list_show_featured[title_featured]</h3>
                                <img src='$list_show_featured[photo_featured]' class='img-responsive thumbnail'>
                                <p class='text-muted text-justify'>$list_show_featured[content_featured]</p>
                            </a>
                        ";
                    }
                ?>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-5 video-player">
                <div class="embed-responsive embed-responsive-16by9">
                <?php
                    while($list_show_videos = mysqli_fetch_array($show_video)){
                     echo "
                        $list_show_videos[link_videos]

                     ";
                    }
                ?>
                </div>
            </div>

            <div class="dynamic-content col-md-7 col-lg-7 hidden-xs hidden-sm">

                    <?php
                    while($list_show_featured_desk = mysqli_fetch_array($show_featured_desk)){
                        echo "
                        <div class='col-lg-6'>
                            <a href='view-featured.php?featured=$list_show_featured_desk[id_featured]' class=''>
                                <h3 class='green-title'>$list_show_featured_desk[title_featured]</h3>
                                <img src='$list_show_featured_desk[photo_featured]' class='img-responsive thumbnail'>
                                <p class='text-muted text-justify'>$list_show_featured_desk[content_featured]</p>
                            </a>
                        </div>
                        ";
                    }
                ?>



            </div>

            <div class="dynamic-news col-xs-12 col-sm-12 col-lg-5">
                <h3 class="green-title">Novidades</h3>

                <?php
                    while($list_show_news = mysqli_fetch_array($show_news)){
                        echo "
                            <a href='view-news.php?news=$list_show_news[id_news]'>
                                <img src='$list_show_news[photo_news]' class='img-responsive thumbnail'>
                                <p class='text-muted text-justify'>$list_show_news[content_news]</p>
                            </a>
                        ";
                    }
                ?>

                <?php
                    if($count_media > 0){
                        echo "<h3 class='green-title'>Na Mídia</h3>";
                    }
                ?>

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                        while($list_get_media = mysqli_fetch_array($get_media)){
                            //echo "<a href='media.php?media=$list_get_media[id_media]'>";
                            echo "<a href='media.php?media=$list_get_media[id_media]'>";
                                $len_img = $list_get_media['photo_media'];
                                $len_video = $list_get_media['link_media'];
                               // echo strlen($len_video);
                                // echo strlen($len_img);
                                if(strlen($len_video) == 0){
                                    echo "<img src='$list_get_media[photo_media]' class='img-responsive thumbnail'>";
                                }
                                if(strlen($len_img) == 0){
                                    echo "
                                        <h4 class='green-title'>$list_get_media[title_media]</p>
                                        <div class='embed-responsive embed-responsive-16by9'>
                                            $list_get_media[link_media]
                                        </div>
                                    ";
                                }

                                if(strlen($len_video) && strlen($len_img) != 0){
                                    echo "
                                        <h4 class='green-title'>$list_get_media[title_media]</p>
                                        <div class='embed-responsive embed-responsive-16by9'>
                                            $list_get_media[link_media]
                                        </div>
                                    ";
                                }
                            echo "</a>";

                        }
                    ?>
                </div>
            </div>


            <div class="col-md-7 col-lg-7 hidden-xs hidden-sm container-right-social-calendar">

                <div class="alert alert-success col-lg-12" role="alert">
                    <a href="contact.php" class="alert-link"><h4>Agende uma consulta</h4></a>
                    <p class="lead text-muted text-justify">Preencha o fomulário de agendamento e aguarde a confirma&ccedil;&atilde;o em seu e-mail.</p>
                    <a href="contact.php" class="alert-link text-right">Agendar Agora</a>
                </div>

                <div class="container-fluid col-lg-12 text-center">
                    <div class="fb-page col-lg-12" data-href="https://www.facebook.com/spajardim" data-tabs="false" data-height="213" data-width="500" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/spajardim" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/spajardim">Spa Jardim by Ronaldo Estetica</a></blockquote>
                    </div>
                </div>

                <div class="container-fluid container-newsletter">
                    <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Cadastre-se e receba promo&ccedil;&otilde;es exclusivas! <span class="glyphicon glyphicon-chevron-down"></span>
                </button>
                    <div class="collapse" id="collapseExample">
                        <div class="well">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label>Nome:</label>
                                    <input type="text" class="form-control" placeholder="Digite seu nome" required name="name_newsletter">
                                </div>
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control" placeholder="Digite seu e-mail" required name="email_newsletter">
                                </div>
                                <button type="submit" class="btn btn-success" name="btn_send_newsletter"><span class="glyphicon glyphicon-ok"></span> Cadastrar-se</button>
                            </form>
                        </div>
                    </div>
                    <?php
                        if($insert_newsletter){
                            echo "
                                <div class='alert alert-success alert-dismissible fade in' role='alert'>
                                  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times</span></button>
                                  <strong>Muito Bem !</strong> Agora voc&ecirc; receber&aacute; novidades em seu e-mail.
                                </div>
                                ";
                        }
                    ?>
                </div>
            </div>

            <div class="container-fluid hidden-md hidden-lg">
                <div class="alert" role="alert">

                </div>
            </div>

            <div class="container-fluid hidden-md hidden-lg">
                <div class="alert alert-success" role="alert">
                    <a href="contact.php" class="alert-link"><h4>Agende uma consulta</h4></a>
                    <p class="lead text-muted text-justify">Preencha o fomul&aacute;rio de agendamento e aguarde a confirma&ccedil;&atilde;o em seu e-mail.</p>
                    <a href="contact.php" class="alert-link text-right">Agendar Agora</a>
                </div>
            </div>

            <div class="container-fluid hidden-md hidden-lg">
                <div class="fb-page" data-href="https://www.facebook.com/spajardim" data-tabs="false" data-height="213" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/spajardim" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/spajardim">Spa Jardim by Ronaldo Estetica</a></blockquote>
                </div>
            </div>

            <div class="container-fluid container-newsletter hidden-md hidden-lg">
                    <button class="btn btn-success btn-block" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                Cadastre-se e receba promo&ccedil;&otilde;es ! <span class="glyphicon glyphicon-chevron-down"></span>
                </button>
                    <div class="collapse" id="collapseExample1">
                        <div class="well">
                            <form method="post" action="">
                                <div class="form-group">
                                    <label>Nome:</label>
                                    <input type="text" class="form-control" placeholder="Digite seu nome" required>
                                </div>
                                <div class="form-group">
                                    <label>E-mail:</label>
                                    <input type="email" class="form-control" placeholder="Digite seu e-mail" required>
                                </div>
                                <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Cadastrar-se</button>
                            </form>
                        </div>
                    </div>
                </div>

        </div>
    </div>
  </body>
</html>

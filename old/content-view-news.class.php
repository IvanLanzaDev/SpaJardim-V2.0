<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Spa Jardim by Ronaldo Estética</title>
  </head>
  <body>
      <?php include('functions.class.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <h3 class="green-title">Novidades</h3>
                <img src="<?php echo $list_view_news[photo_news]; ?>" class="img-responsive">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mt-lg-5">
                <h4 class="green-title"><?php echo $list_view_news[title_news]; ?></h4>
                <p class="text-justify">
                    <?php
                        echo $list_view_news[content_news];  
                    ?>
                </p>
            </div>
        </div>
    </div>
  </body>
</html>
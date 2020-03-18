<?php include("functions.class.php"); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container">
        <?php
            $list_posts = mysqli_fetch_array($show_posts);
        ?>
        <div class="col-12 mt-5 mb-5">
            <div class="row">
                <h2 class="font-custom green ml-2 mb-3"><?php echo $list_posts['title_posts']; ?></h2>
            </div>
            <div class="row">
                <div class="col-12 col-md-8">
                    <img src="<?php echo $list_posts['photo_posts']; ?>" class="img-fluid">
                </div> 
                
            </div>
            <div class="col-12 col-md-8 mt-3">
                <div class="row">
                    <p><?php echo $list_posts['description_posts']; ?></p>
                </div>
            </div>
        </div>
      </div>
  </body>
</html>

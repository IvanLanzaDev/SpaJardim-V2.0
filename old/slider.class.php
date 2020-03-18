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
      <div class="container-fluid hidden-md hidden-lg col-lg-12">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
      <?php
        $count_slider = mysqli_num_rows($show_slider);
        $counter = 0;
      
        while($list_show_slider = mysqli_fetch_array($show_slider)){
            
            if($counter == 0){
               echo "
                <div class='item active'>
                  <img src='$list_show_slider[photo_slider]' alt='...'>
                  <div class='carousel-caption'>
                    <h4>$list_show_slider[caption_slider]</h4>
                  </div>
                </div>
               "; 
            }else{
               echo "
                <div class='item'>
                  <img src='$list_show_slider[photo_slider]' alt='...'>
                  <div class='carousel-caption'>
                    <h4>$list_show_slider[caption_slider]</h4>
                  </div>
                </div>
               ";  
            }
            $counter++;
        }
      ?>  
  </div>
            
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
     <!-- DESKTOP SLIDER -->
      <div class="container hidden-xs hidden-sm">
        <div id="carousel-example-genericDesk" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-genericDesk" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-genericDesk" data-slide-to="1"></li>
    <li data-target="#carousel-example-genericDesk" data-slide-to="2"></li>
    <li data-target="#carousel-example-genericDesk" data-slide-to="3"></li>
    <li data-target="#carousel-example-genericDesk" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <?php
        $count_sliderDesk = mysqli_num_rows($show_sliderDesk);
        $counterDesk = 0;
      
        while($list_show_sliderDesk = mysqli_fetch_array($show_sliderDesk)){
            
            if($counterDesk == 0){
               echo "
                <div class='item active'>
                  <img src='$list_show_sliderDesk[photo_slider]' alt='...'>
                  <div class='carousel-caption'>
                    <h4>$list_show_sliderDesk[caption_slider]</h4>
                  </div>
                </div>
               "; 
            }else{
               echo "
                <div class='item'>
                  <img src='$list_show_sliderDesk[photo_slider]' alt='...'>
                  <div class='carousel-caption'>
                    <h4>$list_show_sliderDesk[caption_slider]</h4>
                  </div>
                </div>
               ";  
            }
            $counterDesk++;
        }
      ?>  

  </div>
  <a class="left carousel-control" href="#carousel-example-genericDesk" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-genericDesk" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div> 
      
  </body>
</html>
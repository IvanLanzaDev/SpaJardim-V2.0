<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
    <div class="container-fluid">
        <div class="row mb-md-4">
            
            
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="imgs/banner-home-lg.jpg" alt="First slide">
    </div>
    
  </div>
</div>
            
        </div>
        <div class="row">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner">
                
                  <?php
                  $counter = 1;
                    while($list_sliders = mysqli_fetch_array($get_slider)){
                  ?>
                  
                      
                        <div class='carousel-item<?php if($counter <= 1){echo ' active'; } ?>'>
                          <img class='d-block w-100' src='<?php echo $list_sliders[photo_slider]; ?>'>
                        </div>
                      <?php
                        $counter++;
                    }
                  ?>
                  
                
              </div>
              <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>
    </div>
  </body>
</html>

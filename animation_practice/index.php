<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="asset/css/layout.css">
    <link rel="stylesheet" type="text/css" href="asset/css/theme.css">
    <link rel="stylesheet" type="text/css" href="asset/css/rhythm.css">
    <link rel="stylesheet" type="text/css" href="asset/css/animation.css">

    <script src="asset/js/jquery-3.6.0.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>


    <div class="container-fluid">
      
      <?php include_once "pure_AT.php"?>
      
      <?php include_once "scroll_AT.php" ?>

      <!-- Hover -->
      <div class="text-center" style="padding-top: 5%;">
        <h1>Hover</h1>
      </div>
  
      <div class="row">
      <!-- AT_flip -->
        <div class="col-3">
          <div class="card_wrap AT_flip hover_AT" style="padding: 5%;">
            <div class="card_box">
              <div class="card_overlay_front" style="background-image: url('img/cats.jpg');">front</div>
              <div class="card_overlay_back">back</div>
            </div>
          </div>
        </div>

        <!-- AT_slidedown -->
        <div class="col-3">
          <div class="image_wrap AT_slidedown hover_AT" style="padding: 5%;">
            <div class="image_box">
              <img src="img/cats.jpg" class="image_self image_cover">
              <div class="image_overlay">123</div>
            </div>
          </div>
        </div>


        <!-- AT_bgcombo -->
        <div class="col-3">
          <div class="image_wrap AT_bgcombo hover_AT" style="padding: 5%;">
            <div class="image_box">
              <img src="img/cats.jpg" class="image_self image_cover">
            </div>
          </div>
        </div>
      </div>


      <?php include_once "others_AT.php" ?>
    
    </div>

    <script type="text/javascript" src="asset/js/scroll_animation.js"></script>
  </body>
</html>

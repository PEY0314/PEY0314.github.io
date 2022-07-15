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
      
      <!-- Pure -->
        <div class="row">
          <div class="col-12">
            <div class="image_wrap AT_bigger">
              <div class="image_box">
                <img src="img/beach.jpg" alt="image" class="image_self image_cover">
              </div>
            </div>
          </div>
        </div>

      <!-- Scroll then Animation -->
        <div class="text-center" style="padding-top: 5%;">
          <h1>Scroll then Animation</h1>
        </div>

      <!-- slide -->
        <div class="row">
          <?php for ($i=0; $i < 2; $i++) { ?>
          <div class="col-md-6">
            <div class="scroll_immed_AT scroll_AT_trigger_4 AT_slideright" style="padding: 5% 0;">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. 
            </div>
          </div>
          <?php } ?>
        </div>

      <!-- rotate -->
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="image_wrap scroll_immed_AT scroll_AT_trigger_4 AT_rotate" style="padding: 5% 5% 10% 5%;">
              <div class="image_box">
                <img src="img/beach.jpg" class="image_self image_cover">
              </div>  
            </div>
          </div>
        </div>

      <!-- Scroll with Animation -->
        <div class="text-center" style="padding-top: 5%;">
          <h1>Scroll with Animation</h1>
        </div>
      <!-- tilt -->
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="card_wrap scroll_AT_trigger_4 AT_tilt" style="padding: 5%;">
              <div class="card_box">
                <div class="card_overlay_front" style="background-image: url('img/cats.jpg');">
                  <div class="card_overlay_front_content">
                    front
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- flip -->
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="card_wrap scroll_AT_trigger_4 AT_flip" style="padding: 5%;">
              <div class="card_box ">
                <div class="card_overlay_front" style="background-image: url('img/cats.jpg');">
                  <div class="card_overlay_front_content">
                    front
                  </div>

                </div>
                <div class="card_overlay_back">
                  <div class="card_overlay_back_content">
                    back
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!-- small size to original size -->
        <div class="row justify-content-center">
          <div class="col-6">
            <div class="image_wrap scroll_AT_trigger_4 AT_sm_to_o">
              <div class="image_box">
                <img src="img/beach.jpg" alt="image" class="image_self image_cover">
              </div>
            </div>
          </div>
        </div>
      <!-- AT_pictures -->
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="image_wrap scroll_AT_trigger_9 AT_pictures" style="padding: 5%;">
              <div class="image_box"> 
                <img src="img/water.jpg" class="image_self" style="object-position: 50% 20%;">
              </div>
            </div>
          </div>
        </div>

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


      <div class="text-center d-none d-lg-block" style="padding-top: 5%;">
        <h1>Others Animation</h1>
      </div>

      <style type="text/css">
        /*範例未來可使用的動畫*/
        .AT_imitate_scroll .image_box{
          position: relative;
          width: 100%;
          overflow: scroll;
        }
        .AT_imitate_scroll .image_box:after {
          content: "";
          display: block;
          padding-bottom: calc(9/16*100%);
        }
        .AT_imitate_scroll .image_self{
          position: absolute;
        }
        @media(min-width: 992px){
          .AT_imitate_scroll .image_box{
            overflow: hidden;
          }
        }
      </style>

      <div class="row my-5 justify-content-center d-none d-lg-flex" >
        <div class="col-6">
          <div class="image_wrap AT_imitate_scroll hover_AT shadow" style="/*padding: 5%;">
            <div class="image_box">
              <img src="img/123.png" data-speed="300" class="image_self img-fluid">
            </div>
          </div>
        </div>
      </div>



      <script type="text/javascript">
        $( document ).ready(function() {
          if(screen.width>992){
            $.each($(".AT_imitate_scroll"),function(i,val) {
              var contentHeight = $(val).children().children().height(); /* 圖片(在rwd內)的高度(尺寸) */
              var viewHeight = $(val).height(); /* 可見範圍的高度(尺寸) */
              var viewTop = $(val).offset().top; /* 可見範圍的最高點(位置) */

              /* 滑鼠滑入，"第一時間讀入"的"固定值" */
              var fixed_contentTop = $(val).children().children().offset().top; /* 圖片最高點(位置) */
              var fixed_b_Distance = (fixed_contentTop + contentHeight) - (viewTop + viewHeight); /* 圖片"下部分"還有多少可以展現 */
              /* 滑鼠滑入，"第一時間讀入"的"固定值" */
             
              var speed = $(val).children().children().data("speed"); /* 速度 px/s */

              $(val).mousemove(function(e){
                var mousePosition = e.pageY - (viewTop + viewHeight*0.5); /* 判斷滑鼠位置，是位於框架中心的上方還是下方？ */ 

                /* 滑鼠滑入後"有變動的值" */
                var contentTop = $(val).children().children().offset().top; /* 圖片最高點(位置) */
                var t_Distance = viewTop - contentTop; /*  */
                var b_Distance = (contentTop + contentHeight) - (viewTop + viewHeight); /* 圖片"下部分"還有多少可以展現 */
                /* 滑鼠滑入後"有變動的值" */

                // console.log("contentHeight:"+contentHeight);
                // console.log("viewHeight:"+viewHeight);
                // console.log("contentTop:"+contentTop);
                // console.log("viewTop:"+viewTop);
                // console.log("t_Distance:"+t_Distance);
                // console.log("b_Distance:"+b_Distance);
                // console.log("speed:"+speed);
                // console.log("mousePosition:"+mousePosition);
                // console.log(viewHeight*0.5);

                if(mousePosition > 0) {
                  var time = b_Distance / speed; /*  */
                  $(val).children().children().css({ transition: time + "s ease-in-out" });
                  $(val).children().children().css({ transform: "translateY(" + (0 - fixed_b_Distance) + "px)"});
                }else{
                  var time = t_Distance / speed;
                  $(val).children().children().css({ transition: time + "s ease-in-out" });
                  $(val).children().children().css({ transform: "translateY(" + (0) + "px)"});
                }            
              });
              $(val).mouseleave(function(e){
                var matrix = new WebKitCSSMatrix($(val).children().children().css("transform"));
                var translateY = matrix.m42;
                $(val).children().children().css({ transform: "translateY(" + (translateY) + "px)"});
              });
            })
          }
        });

      </script>    
    </div>

    <script type="text/javascript" src="asset/js/scroll_animation.js"></script>
  </body>
</html>

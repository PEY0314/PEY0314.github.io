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
      



   
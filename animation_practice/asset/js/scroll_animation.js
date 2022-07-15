$(document).scroll(function () {
  var screenPosition = $(this).scrollTop() + $(window).height();

  $.each($(".scroll_AT_trigger_4"),function(i,val) {
    var contentPosition = $(val).offset().top + $(val).outerHeight()*.4;
    var atPath = screenPosition - contentPosition;
    var atLength = $(val).outerHeight()*.6;
    var atProgress = atPath/atLength;
    if(atProgress > 1){
      atProgress = 1;
    }
  /*Scroll then Animation*/
    if($(val).hasClass("scroll_immed_AT") && atPath > 0){
      $(val).addClass("scroll_AT");
    }
  /*Scroll with Animation*/
    if(!$(val).hasClass("scroll_immed_AT") && atPath > 0){
      if($(val).hasClass("AT_flip")){
        $(val).children().css({ transform: "rotateY(" + (atProgress*0.5) + "turn)" });
      }else if($(val).hasClass("AT_tilt")){
        $(val).children().css({ transform: "rotateX(" + (10-atProgress*20) + "deg)" });
      }else if($(val).hasClass("AT_rotate")){
        $(val).css({ transform: "translateY(" + (100-atProgress*100) + "px) rotate(" + (-10+atProgress*5) + "deg)", opacity: (atProgress*1) });
      }else if($(val).hasClass("AT_sm_to_o")){
        $(val).children().css({ transform: "scale(" + (0.6+atProgress*0.4) + ")" });
      }
      else if($(val).hasClass("AT_pictures")){
        if(atProgress > 0 && atProgress <= 1/5){
          $(val).children().children().css( 'object-position', "50% 20%" );
        }else if(atProgress > 1/5 && atProgress <= 2/5){
          $(val).children().children().css( 'object-position', "50% 40%" );
        }else if(atProgress > 2/5 && atProgress <= 3/5){
          $(val).children().children().css( 'object-position', "50% 60%" );
        }else if(atProgress > 3/5 && atProgress <= 4/5){
          $(val).children().children().css( 'object-position', "50% 80%" );
        }else if(atProgress > 4/5 && atProgress <= 5/5){
          $(val).children().children().css( 'object-position', "50% 100%" );
        }
      }
    }
  });

  $.each($(".scroll_AT_trigger_9"),function(i,val) {
    var contentPosition = $(val).offset().top + $(val).outerHeight()*.9;
    var atPath = screenPosition - contentPosition;
    var atLength = $(val).outerHeight()*.5;
    var atProgress = atPath/atLength;
    if(atProgress > 1){
      atProgress = 1;
    }
  /*Scroll with Animation*/
    if(!$(val).hasClass("scroll_immed_AT") && atPath > 0){
      if($(val).hasClass("AT_pictures")){

        if(atProgress > 0 && atProgress <= 1/5){
          $(val).children().children().css( 'object-position', "50% 20%" );
        }else if(atProgress > 1/5 && atProgress <= 2/5){
          $(val).children().children().css( 'object-position', "50% 40%" );
        }else if(atProgress > 2/5 && atProgress <= 3/5){
          $(val).children().children().css( 'object-position', "50% 60%" );
        }else if(atProgress > 3/5 && atProgress <= 4/5){
          $(val).children().children().css( 'object-position', "50% 80%" );
        }else if(atProgress > 4/5 && atProgress <= 5/5){
          $(val).children().children().css( 'object-position', "50% 100%" );
        }
      }
    }
  });
});
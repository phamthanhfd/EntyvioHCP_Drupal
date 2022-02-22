$( document ).ready(function() {
    $(window).scroll(function () {

      if ($(this).scrollTop() > 500) {
        $('.sticky-bar').css("top","100%");
      } else {
        $('.sticky-bar').css("top","calc(100% - 95px)");
      }

    });
    $(".back-to-top").on("click", function() {
      $("html").scrollTop(0);
    });

    $(this).on('wheel', function(event) {
      if (event.originalEvent.deltaY > 0 ) {
        if($(window).scrollTop() > 190){
          $('header').css("top","-190px");
        }else{
          $('header').css("top","0");
        }
        $('.back-to-top').css("right","-300px");
      } else {
        $('header').css("top","0");
        if ($(window).scrollTop() < 300) {
          $('.back-to-top').css("right","-300px");
        } else {
          if($( window ).width() > 960)
            $('.back-to-top').css("right","-40px");
          else{
            $('.back-to-top').css("right","-175px");
          }
        }
      }
    });

    $('.open-menu').click(function(){
      $('header[data-device="desktop"]').css('left','0');
    })
    $('.close-menu').click(function(){
      $('header[data-device="desktop"]').css('left','-100%');
    })

    $('.icon-trigger').click(function(){
      if($(this).hasClass('active'))
      {
        $(this).removeClass('active');
        $(this).siblings('.subnav').removeClass('open');
        $(this).siblings('.subnav').slideUp();
        $(this).siblings('a').removeClass('active')
      }else{
        $(this).addClass('active');
        $(this).siblings('a').addClass('active')
        $(this).siblings('.subnav').addClass('open');
        $(this).siblings('.subnav').slideDown();
      }
    })
});



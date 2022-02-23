
$( document ).ready(function() {

    if( $('#isi').length ){
      $( "#isi>.section").clone().appendTo( "#fixed_isi" );
    }

    $(window).scroll(function () {

      if($('#isi').length ){
        var show_point = $("#isi").offset().top - $( window ).height() + 30;
        console.log(show_point)
        if(show_point > 0){
          if($(this).scrollTop() < show_point){
            $('#fixed_isi:not(.expanded)').addClass('active')
          }else{
            $('#fixed_isi:not(.expanded)').removeClass('active')
          }
        }
      }

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
        $('.back-to-top').removeClass('show');
      } else {
        $('header').css("top","0");
        if ($(window).scrollTop() < 300) {
          $('.back-to-top').removeClass('show');
        } else {
          $('.back-to-top').addClass('show');
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

    $('.fixed_isi_trigger').click(function(){
      if($(this).closest('#fixed_isi').hasClass('expanded')){
        $(this).closest('#fixed_isi').removeClass('expanded');
      }else{
        $(this).closest('#fixed_isi').addClass('expanded')
      }
    })
});



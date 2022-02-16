$( document ).ready(function() {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 190) {
        $('header').css("top","-190px");
      } else {
        $('header').css("top","0");
      }
      if ($(this).scrollTop() > 400) {
        $('.sticky-bar').css("top","100%");
      } else {
        $('.sticky-bar').css("top","calc(100% - 95px)");
      }
      if ($(this).scrollTop() < 600) {
        $('.back-to-top').css("right","-300px");
      } else {
        $('.back-to-top').css("right","-40px");
      }
    });
    $(".back-to-top").on("click", function() {
      $("html").scrollTop(0);
    });

    var _img = $(".field--name-field-image-item img");
    $(_img).each(function(){
      var parent = $(this).closest(".paragraph--type--pillars-items");
      var img_src = $(this).attr('src');
      $(parent).css('background','url('+img_src+')');
    })
});

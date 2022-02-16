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
        $('.back-to-top').css("right","14px");
      }
    });
});

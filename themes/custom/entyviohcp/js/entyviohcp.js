$( document ).ready(function() {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 190) {
        $('header').css("top","-190px");
      } else {
        $('header').css("top","0");
      }
      if ($(this).scrollTop() > 100) {
        $('.sticky-bar').css("top","100%");
      } else {
        $('.sticky-bar').css("top","calc(100% - 95px)");
      }
    });
});

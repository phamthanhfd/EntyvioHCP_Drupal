$( document ).ready(function() {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 220) {
        $('header').css("top","-190px");
      } else {
        $('header').css("top","0");
      }
    });
});

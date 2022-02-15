$( document ).ready(function() {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 190) {
        $('header').css("top","-190px");
      } else {
        $('header').css("top","0");
      }
    });
});

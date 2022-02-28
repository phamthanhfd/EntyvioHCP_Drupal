
$( document ).ready(function() {

    if($('#isi').length ){
      var show_point = $("#isi").offset().top - $( window ).height() + 30;
      if(show_point > 0){
        if($(this).scrollTop() < show_point){
          $('#fixed_isi:not(.expanded)').addClass('active')
        }else{
          $('#fixed_isi:not(.expanded)').removeClass('active')
        }
      }
    }

    var pathname = window.location.pathname;
    var la = $('.main-nav>.container>nav>ul>li');
    la.each(function(){
      var _this = $(this);
      $(this).removeClass('active');
      var link = $(this).find('a');

      link.each(function(){
        var hr = $(this).attr('href');
        if(hr == pathname){
          $(_this).addClass('active');
        }
      })
    })
    var it_home = $('.main-nav>.container>nav>ul>li[homepage="true"]');
    it_home.addClass('active');

    if( $('#isi').length ){
      $( "#isi>.section").clone().appendTo( "#fixed_isi" );
    }

    var lastScrollTop = 0;
    $(window).scroll(function(event){

      var nav_position = $('#second_section').length ? $('#second_section').offset().top : 99999;
      if (nav_position < $(window).scrollTop()){
        $('html').addClass('move-ahead-sticky');
        $(window).resize(function() {
          var width = $(window).width();
          if (width > 959){
            $('.move-ahead-header').css('height','230px');
          }
        });
        //console.log('move-ahead-sticky '+ nav_position +' < '+ $(window).scrollTop())
      }else{
        //console.log('no move-ahead-sticky '+ nav_position +' > '+ $(window).scrollTop())
        $('html').removeClass('move-ahead-sticky');
        $('.move-ahead-header').removeAttr('style');
      }


      var st = $(this).scrollTop();
      if (st > lastScrollTop){

        $('html').addClass('scroll-state-down');
        $('html').removeClass('scroll-state-up');


        if($(window).scrollTop() > 190){
          var width = $(window).width();
          if (width > 959){
          $('header').css("top","-190px");}
        }else{
          $('header').css("top","0");
        }

        $('.back-to-top').removeClass('show');
      } else {

        $('html').addClass('scroll-state-up');
        $('html').removeClass('scroll-state-down');

        $('header').css("top","0");
        if ($(window).scrollTop() < 300) {
          $('.back-to-top').removeClass('show');
        } else {
          $('.back-to-top').addClass('show');
        }
      }
      lastScrollTop = st;
    });

    $(window).scroll(function () {

      if($('#isi').length ){
        var show_point = $("#isi").offset().top - $( window ).height() + 30;

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
      /*var body = $("html, body");
        body.stop().animate({scrollTop:0}, 1000, 'swing', function() {
      });*/
      //$("html").scrollTop(0);
      $('html, body').animate({
        scrollTop: 0
      }, 1000);
    });

    $(this).on('wheel', function(event) {
      if (event.originalEvent.deltaY > 0 ) {

      } else {

      }
    });

    $('.open-menu').click(function(){
      $('header[data-device="desktop"]').css('left','0');
    })
    $('.close-menu').click(function(){
      $('header[data-device="desktop"]').css('left','-100%');
    })

    $('.icon-trigger').click(function(){
      if($(this).closest('.has-submenu').hasClass('active'))
      {
        $(this).closest('.has-submenu').removeClass('active')
        $(this).removeClass('active');
        $(this).siblings('.subnav').removeClass('open');
        //$(this).siblings('.subnav').slideUp();
        $(this).siblings('a').removeClass('active')
      }else{
        $(this).closest('.has-submenu').addClass('active')
        $(this).addClass('active');
        $(this).siblings('a').addClass('active')
        $(this).siblings('.subnav').addClass('open');
       // $(this).siblings('.subnav').slideDown();
      }
    })

    $('.fixed_isi_trigger').click(function(){
      if($(this).closest('#fixed_isi').hasClass('expanded')){
        $(this).closest('#fixed_isi').removeClass('expanded');
      }else{
        $(this).closest('#fixed_isi').addClass('expanded')
      }
    })

    // Select all links with hashes
    $("[href^='#']").click(function() {
      id=$(this).attr("href")
      $('html, body').animate({
          scrollTop: $(id).offset().top
      }, 1000);
    });

     /* accordion animation varsity page */
    $("#expand_varsity-adverse-events").click(function(){
      if($(this).attr("aria-expanded") == "false"){
        $(this).attr("aria-expanded","true");
        $(this).closest('.expand-trigger').siblings("#varsity-adverse-events-content").attr("aria-hidden","false");
      }else{
        $(this).attr("aria-expanded","false");
        $(this).closest('.expand-trigger').siblings("#varsity-adverse-events-content").attr("aria-hidden","true");
      }
    })

    $("#third_section div[data-accordion-type] li").on("click",function(){
      $("#third_section div[data-accordion-type] li.active").find("button").attr("aria-expanded","false");
      $("#third_section div[data-accordion-type] li.active").find("div[aria-hidden]").attr("aria-hidden","true");
      $("#third_section div[data-accordion-type] li.active").removeClass("active");


      $(this).addClass("active");
      $(this).find("button").attr("aria-expanded","true");
      $(this).find("[id^='humira_content_']").attr("aria-hidden","false");

      var vParent = $(this).closest("div[data-accordion-type]").find(".desktop-image").parent();
      $(this).find("figure.figure-content").clone().appendTo(vParent);
      vParent.find(".desktop-image").remove();
      vParent.find("figure").addClass("desktop-image");
      vParent.find("figure").removeClass("figure-content");

      $('html, body').animate({
          scrollTop: $("div[data-accordion-type]").offset().top - 170
      }, 800);

    })

    /* accordion animation mechanism page */

    $("#first_section div[data-accordion-type] li").on("click",function(){
      $("#first_section div[data-accordion-type] li.active").find("button").attr("aria-expanded","false");
      $("#first_section div[data-accordion-type] li.active").find("div[aria-hidden]").attr("aria-hidden","true");
      $("#first_section div[data-accordion-type] li.active").removeClass("active");


      $(this).addClass("active");
      $(this).find("button").attr("aria-expanded","true");
      $(this).find("[id^='accordion_content_']").attr("aria-hidden","false");

      var vParent = $(this).closest("div[data-accordion-type]").find(".desktop-image").parent();
      $(this).find("figure.figure-content").clone().appendTo(vParent);
      vParent.find(".desktop-image").remove();
      vParent.find("figure").addClass("desktop-image");
      vParent.find("figure").removeClass("figure-content");

      $('html, body').stop().animate({
          scrollTop: $("div[data-accordion-type]").offset().top
      }, 1000);

    })




});



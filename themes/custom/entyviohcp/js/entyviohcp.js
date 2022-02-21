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

    var _img = $(".field--name-field-image-item img");
    $(_img).each(function(){
      var parent = $(this).closest(".paragraph--type--pillars-items");
      var img_src = $(this).attr('src');
      $(parent).css('background','url('+img_src+')');
    })

    var varsity = $(".field--name-field-background-head img");
    var vimg_src = $(varsity).attr('src');
    $(varsity).closest(".paragraph--type--head-to-head").css('background','url('+vimg_src+')');

    var milestone = $(".field--name-field-milestone-background img");
    var mimg_src = $(milestone).attr('src');
    $(milestone).closest(".paragraph--type--milestones").css('background','url('+mimg_src+')');

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

    var ctn = $('.main-menu-mb .main-menu-mb_container .logo');

    var br = $('#block-sitebranding-2 img');
    var main_navi = $('#block-mainnavigation-2>.region-we-mega-menu>nav');
    var second_navi = $('.top-menu-header_container a');
    var slg = $('.top-menu-header_container span');

    $(br).clone().appendTo(ctn);
    $(main_navi).clone().appendTo($('.main-menu-mb .main-menu-mb_container .menus .menu1'));
    $(slg).clone().appendTo($('.main-menu-mb .main-menu-mb_container .sologan'));
    $(second_navi).clone().appendTo($('.main-menu-mb .main-menu-mb_container .menus .menu2'));

    $(".main-menu-mb .we-mega-menu-ul .dropdown-menu>a>i").click(function(){
      var aparent = $(this).closest('a');
      var menu_parent = $(this).closest('we-mega-menu-submenu');
      var li_parent = $(this).closest('.we-mega-menu-li.dropdown-menu');
      if($(this).hasClass('active')){
        $(aparent).siblings('.we-mega-menu-submenu').slideUp();
        $(this).removeClass('active');
        $(menu_parent).removeClass('active');
        $(li_parent).removeClass('active');
        $(this).css('transform', 'rotate(0deg)');
      }else{
        $(aparent).siblings('.we-mega-menu-submenu').slideDown();
        $(this).addClass('active');
        $(menu_parent).addClass('active');
        $(li_parent).addClass('active');
        $(this).css('transform', 'rotate(180deg)');
      }
    })

    $('.main-menu-mb .close-menu').click(function(){
      $('.main-menu-mb').css('left','-100%');
    })
    $('.open-menu').click(function(){
      $('.main-menu-mb').css('left','0');
    })
});

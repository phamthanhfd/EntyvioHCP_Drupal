
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

    //Handle main nav
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

    let contain_clinicalefficacy = pathname.includes("clinical-efficacy/ulcerative-colitis");
    if(contain_clinicalefficacy){
      $('.clinicalefficacy-item').addClass('active');
    }

    let contain_accesssupport = pathname.includes("access-support");
    if(contain_accesssupport){
      $('.access-support-item').addClass('active');
    }

    let contain_resources = pathname.includes("/resources");
    if(contain_resources){
      $('.resources-item').addClass('active');
    }

    //Handle link in submenu
    let contain_clinicalefficacy1 = pathname.includes("clinical-efficacy/ulcerative-colitis/gemini-trial");
    if(contain_clinicalefficacy1){
      $('.sub_gemini-trial').addClass('active');
    }
    let contain_clinicalefficacy2 = pathname.includes("clinical-efficacy/ulcerative-colitis/varsity-trial");
    if(contain_clinicalefficacy2){
      $('.sub_varsity-trial').addClass('active');
    }
    let contain_clinicalefficacy3 = pathname.includes("clinical-efficacy/crohns-disease/entyvio-placebo-trial");
    if(contain_clinicalefficacy3){
      $('.sub_entyvio-placebo-trial').addClass('active');
    }
    let contain_resources1 = pathname.includes("resources/virtual-congress");
    if(contain_resources1){
      $('.sub_professional-resources').addClass('active');
    }
    let contain_resources2 = pathname.includes("resources/peer-perspective");
    if(contain_resources2){
      $('.sub_peer-perspective').addClass('active');
    }
    let contain_resources3 = pathname.includes("resources/request-a-representative");
    if(contain_resources3){
      $('.sub_request-a-representative').addClass('active');
    }
    let contain_resources4 = pathname.includes("resources/clinical-reprints");
    if(contain_resources4){
      $('.sub_clinical-reprints').addClass('active');
    }
    //End handle link in submenu

    //End handle main nav


    if( $('#isi').length ){
      $( "#isi>.section").clone().appendTo( "#fixed_isi" );
    }

    var lastScrollTop = 0;
    $(window).scroll(function(event){

      var nav_position = $('#second_section').length ? $('#second_section').offset().top : 99999;
      nav_position = nav_position + 80;
      if (nav_position < $(window).scrollTop()){
        $('html').addClass('move-ahead-sticky');
        if($('[data-page-category="DosingAdministration"]').length){
          var height_menu = '180px';
        }else{
          var height_menu = '230px';
        }
        var wwidth = $(window).width();
        if (wwidth > 959){
          $('.move-ahead-header').css('height',height_menu);
        }
        $(window).resize(function() {
          var width = $(window).width();
          if (width > 959){
            $('.move-ahead-header').css('height',height_menu);
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
          if ($('header[login="true"]').length){
            $('header').css("top","-229px");
          }else{
            $('header').css("top","-190px");
          }
        }else{
          if ($('header[login="true"]').length){
            $('header').css("top","39px");
          }else{
            $('header').css("top","0");
          }
        }

        $('.back-to-top').removeClass('show');
      } else {

        $('html').addClass('scroll-state-up');
        $('html').removeClass('scroll-state-down');

        if ($('header[login="true"]').length){
          $('header').css("top","39px");
        }else{
          $('header').css("top","0");
        }
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

    // Anchor links
    $("[href^='#']").click(function() {
      _this = $(this);
      id=$(this).attr("href")
      var scr_top = $(window).scrollTop();
      var el_top = $(id).offset().top;
      if($(_this).attr("href") == '#isi'){
        el_top += 30;
      }else if($(_this).attr("href") == '#at-a-glance'){
        el_top += 35;
      }

      var _pos = 0;

      if($('[data-page-category="DosingAdministration"]').length){
        if(el_top > scr_top){
          console.log('dossing')
          _pos = el_top - 30;
        }else{
          _pos = el_top - 145;
        }
      }else if($('[data-page-category="ClinicalEfficacy"]').length){
        if(el_top > scr_top){
          console.log('dossing')
          _pos = el_top - 50;
        }else{
          _pos = el_top - 165;
        }
      }else if($('.path-frontpage')){
        if(el_top > scr_top){
          _pos = el_top;
        }else{
          _pos = el_top - 195;
        }
      }else{
        if(el_top > scr_top){
          _pos = el_top;
        }else{
          _pos = el_top - 135;
        }
      }
      $('html, body').animate({
        scrollTop: _pos
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


    // Modal
    $('[data-modal="external"]').click(function(e){
      e.preventDefault();
      var hr = $(this).attr('href');
      $('#modal [data-modal-content="external"] a.external').attr('href',hr);
      $('[data-modal-content="external"]').addClass('active');
      $('#modal').addClass('active')
    })
    $('[data-modal="external_third_party"]').click(function(e){
      e.preventDefault();
      var hr = $(this).attr('href');
      $('#modal [data-modal-content="external_third_party"] a.external').attr('href',hr);
      $('[data-modal-content="external_third_party"]').addClass('active');
      $('#modal').addClass('active')
    })
    $('[data-modal="external_medconnect"]').click(function(e){
      e.preventDefault();
      var hr = $(this).attr('href');
      $('#modal [data-modal-content="external_medconnect"] a.external').attr('href',hr);
      $('[data-modal-content="external_medconnect"]').addClass('active');
      $('#modal').addClass('active')
    })
    $('#modal button.close').click(function(){
      $('[data-modal-content]').removeClass('active');
      $('#modal').removeClass('active')
    })
    $('#modal a.external').click(function(){
      $('[data-modal-content]').removeClass('active');
      $('#modal').removeClass('active')
    })
    //End modal

});



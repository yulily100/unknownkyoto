<!doctype html>
<html>
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
    <script src="<?php echo get_template_directory_uri(); ?>/script.js" async></script>

    <?php if ( is_front_page() && is_home() ) : ?>
      <link rel="alternate" hreflang="en" href="/en">
    <?php elseif ( is_page('en') ) : ?>
      <link rel="alternate" hreflang="ja" href="/">
    <?php endif; ?>

    <?php wp_head(); ?>
  </head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script>
  $(function() {
    // instagram feed
    var accessToken = '10677467838.a39ffa6.79cee58175a245f994d8e86f61a27698'; //token
    $.getJSON('https://api.instagram.com/v1/users/self/media/recent/?access_token='+accessToken+'&callback=?',function (insta) {
      $.each(insta.data,function (photos,src) {
        if ( photos === 7 ) { return false; }
        $('<li><a href="'+src.link+'" target="_blank"><img src="'+src.images.standard_resolution.url+'"></a></li>').appendTo('#js-instafeed');
      });
    });

    var $fadeIn = $('.js-fadein');

    // scroll event
    $(window).scroll(function () {
      var wh = $(window).height();
      var scroll = $(window).scrollTop();

      // Nロゴの色を変える
      if (scroll > wh ) {
        $('.header-n-logo').addClass('is-active');
        $('.header').addClass('is-active');
      }
      else {
        $('.header-n-logo').removeClass('is-active');
        $('.header').removeClass('is-active');
      }

      // .js-fadein が付けられた要素をふわっと表示
      $fadeIn.each(function() {
        var targetElement = $(this).offset().top;
        if (scroll > targetElement - wh + 100){
          $(this).css('opacity','1');
          $(this).css('transform','translateY(0)');
        }
      });

      $('.js-funding').each(function() {
        var targetElement = $(this).offset().top;
        if (scroll > targetElement - wh ) {
          $('.top-main-funding').addClass('is-active');
        }
      });
    });

    // ページ内をなめらかにスクロール
    $('a[href^="#"]').click(function() {
       var speed = 600;
       var href= $(this).attr("href");
       var target = $(href == "#" || href == "" ? 'html' : href);
       var position = target.offset().top;
       $('body,html').animate({scrollTop:position}, speed, 'swing');
       return false;
    });

    // ハンバーガーメニュー
    $(function() {
      $('.js-btn-toggle').on('click',function() {
        $('.nav-sp').toggleClass('is-open');
      });
    });

    // 画像ギャラリー
    $(function() {
      ['single', 'double', 'twin', 'deluxe'].forEach(function(roomType) {
        for (let i = 1; i <= 5; i++) {
          // single1, double3 などの文字列 
          const name = roomType + i

          $('#' + name + '-thumb').on('click', function() {
            $('.hostel2-gallery-img.' + roomType).removeClass('is-active');
            $('#' + name).addClass('is-active');
          });
        }
      });
    });
  });
  </script>

  <?php
    if ( is_front_page() && is_home() ) {
      $body_class = "page-index";
    }
    elseif ( is_page('index-0207') ) {
      $body_class = "page-index index-0207";
    }
    elseif ( is_page('en') ) {
      $body_class = "page-index lang-en";
    }
    elseif ( is_page('office') ) {
      $body_class = "page-office";
    }
  ?>
  <body class="<?php echo $body_class; ?>">

    <header class="header">
      <div class="header-main">
        <?php if ( is_front_page() && is_home() || is_page('en') || is_page('index-0207') ) : ?>
          <div class="header-n-logo">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-n-default.svg" alt="UNKNWON KYOTO" class="top-n-default">
              <img src="<?php echo get_template_directory_uri(); ?>/img/top-n-active.svg" alt="UNKNWON KYOTO" class="top-n-active">
            </a>
          </div>
          <?php
            $args = array(
              'menu_class' => 'header-language',
              'container' => false,
            );
            wp_nav_menu($args); ?>
        <?php else : ?>
          <h1 class="header-title">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="UNKNWON KYOTO">
            </a>
          </h1>
          <p class="header-description"><a href="/campaign-goto">Go Toキャンペーンご利用方法</a></p>
        <?php endif; ?>
      </div>
      <div class="header-menu">
        <ul class="header-nav">
            <li><a href="/hostel">Hostel<span class="header-nav-jp">宿泊</span></a></li>
            <li><a href="/restaurant">Restaurant<span class="header-nav-jp">レストラン</span></a></li>
            <li><a href="/coworking">Coworking<span class="header-nav-jp">コワーキング</span></a></li>
            <li><a href="/plan">Plan<span class="header-nav-jp">プラン</span></a></li>
            <li><a href="/access">Access<span class="header-nav-jp">アクセス</span></a></li>
            <li class="header-nav-booking"><a href="https://www.beds24.com/book-unknownkyoto" target="_blank">Booking<span>ご予約</span></a></li>
        </ul>
      </div>

      <div class="nav-sp">
        <button type="button" class="nav-sp-toggle js-btn-toggle"><span></span></button>

        <div class="nav-sp-body">
          <h2 class="nav-sp-title">
            <a href="/">
              <img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="UNKNWON KYOTO">
            </a>
          </h2>

          <ul class="nav-sp-menu">
            <li class="nav-sp-booking"><a href="https://www.beds24.com/book-unknownkyoto" target="_blank">Booking<span>ご予約</span></a></li>
            <li><a href="/hostel">Hostel<span>宿泊</span></a></li>
            <li><a href="/restaurant">Restaurant<span>レストラン</span></a></li>
            <li><a href="/coworking">Coworking<span>コワーキング</span></a></li>
            <li><a href="/plan">Plan<span>プラン</span></a></li>
            <li><a href="/access">Access<span>アクセス</span></a></li>
            <li><a href="/blog">Blog<span>ブログ</span></a></li>
          </ul>
          <ul class="nav-sp-sns">
            <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram.svg" alt="Instagram"></a></li>
            <li><a href="https://www.facebook.com/Unknown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter.svg" alt="Twitter"></a></li>
          </ul>
        </div>
      </div>
    </header>

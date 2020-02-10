<?php get_header(); ?>

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
    } else {
      $('.header-n-logo').removeClass('is-active');
    }

    // .js-fadein が付けられた要素をふわっと表示
    $fadeIn.each(function() {
      var targetElement = $(this).offset().top;
      if (scroll > targetElement - wh + 200){
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

});
</script>

<div class="top-main">
  <div class="top-main-inner">
    <h1 class="top-main-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="UNKNOWN KYOTO"></h1>
    <p class="top-main-description">Hostel, Dining, Coworking</p>
    <p class="top-main-open"><img src="<?php echo get_template_directory_uri(); ?>/img/header-open.png" alt="2019秋OPEN予定"></p>
  </div>

  <p class="btn-main-area"><a href="https://unknown.kyoto/office"><span>UNKNOWN KYOTO</span>本池中はこちら</a></p>

  <div class="top-main-image">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/05.jpg" alt="UNKNOWN KYOTO" class="top-image5">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/04.jpg" alt="UNKNOWN KYOTO" class="top-image4">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/03.jpg" alt="UNKNOWN KYOTO" class="top-image3">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/02.jpg" alt="UNKNOWN KYOTO" class="top-image2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/01.jpg" alt="UNKNOWN KYOTO" class="top-image1">
  </div>
</div>

<div class="wrapper">
  <section class="top-about">
    <div class="top-about-intro js-fadein">
      <h2 class="top-about-title"><img src="<?php echo get_template_directory_uri(); ?>/img/top-about-title.svg" alt="UNKNOWN KYOTO"></h2>
      <p class="top-about-description">
        UNKNOWN KYOTOは<br>
        京都の元遊郭建築をリノベーション<br class="for-sp">した宿泊複合施設です。<br>
        ベッドでくつろいで、おいしいご飯を食べて、それから仕事まで。<br>
        自分の住む家のように過ごせます。
      </p>
      <div class="top-about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top-about.png" alt="元遊郭建築">
      </div>
    </div>
  </section>
  <div class="top-contents">
    <section class="top-coliving">
      <ul class="top-coliving-list">
        <li>
          <div class="top-coliving-inner">
            <h3>泊まる</h3>
            <p class="top-coliving-description">遊郭の元客室をゆっくりくつろげるベッドのお部屋に。もっと気軽に泊まれる大部屋も用意しています。</p>
            <p class="top-coliving-notion">※ 宿泊部門の開業は2020年2月以降を予定しています。</p>
          </div>
        </li>
        <li>
          <div class="top-coliving-inner">
            <h3>食べる</h3>
            <p class="top-coliving-description">昼は気軽に食事を、夜はオープンなダイニングバーで楽しいひとときを。</p>
            <p class="top-coliving-restaurant">
              <span>昼営業 11:30-15:00 (14:30 L.O.)</span><br>
              Sin / スパイスオアダイ</p>
            <p class="top-coliving-restaurant">
              <span>夜営業 17:00-23:00 (22:00 L.O.)</span><br>
              Sin / アンノウン食堂</p>
          </div>
        </li>
        <li>
          <div class="top-coliving-inner">
            <h3>働く</h3>
            <p class="top-coliving-description">wifiと電源を完備。旅先にいながらも、しっかりとお仕事することができます。</p>
            <p class="top-coliving-btn"><a href="/coworking">詳しくはこちら</a></p>
          </div>
        </li>
      </ul>
    </section>
  </div>

  <div class="top-contents">
    <section class="top-location">
      <h2 class="top-location-title">知られざる京都<span class="for-pc">、</span><br class="for-sp">五條楽園</h2>

      <p class="top-location-description">かつて「五條楽園」と呼ばれた<br class="for-sp">このエリアは<br class="for-pc">すぐ近くに鴨川と<br class="for-sp">高瀬川が流れ、迷路のように<br>細い路地が入り組んだ、古き良き<br class="for-sp">佇まいを残したまち。<br class="for-pc">そんな中に<br class="for-sp">UNKNOWN KYOTOはあります。</p>

      <div class="js-fadein">
        <ul class="top-architecture-street">
          <li class="small"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/02.jpg" alt=""></li>
          <li class="big"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/01.jpg" alt=""></li>
        </ul>
        <ul class="top-architecture-street">
          <li class="big"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/04.jpg" alt=""></li>
          <li class="small"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/03.jpg" alt=""></li>
        </ul>
      </div>

    </section>


    <section class="top-funding js-funding" id="funding">
      <h3 class="top-funding-title">クラウドファンディング目標額達成！</h3>
      <p class="top-funding-description">みなさんのご支援、ありがとうございました。</p>
      <p class="top-funding-description">プロジェクトの詳細はリンク先<span class="for-pc">のページ</span>にございます。</p>
      <p class="top-about-funding"><a href="https://hello-renovation.jp/renovations/3428" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/top-funding.svg" alt="クラウドファンディング実施中！"></a></p>
    </section>
  </div>


  <section class="top-article">
    <h2 class="top-article-title">BLOG</h2>
    <ul class="top-article-list">
      <?php
      $args = array(
        'posts_per_page' => 8,
        'paged' => get_query_var('paged'),
        'orderby' => 'date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
      );
      $post_query = new WP_Query( $args );
      ?>

      <?php if ( $post_query->have_posts()) :
        while ( $post_query->have_posts()) : $post_query->the_post();
        $image_id = get_post_thumbnail_id(); ?>
      <li>
        <a href="<?php the_permalink(); ?>" class="article-thumb">
          <?php the_post_thumbnail('thumbnail'); ?>
        </a>
        <span class="article-detail">
          <span class="article-category"><?php the_category(); ?></span>
          <span class="article-date"><?php echo get_the_date(); ?></span>
        </span>
        <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
      </li>
    <?php endwhile;endif; wp_reset_query();?>
    </ul>
    <p class="section-link"><a href="/blog">Read more</a></p>
  </section>

  <section class="top-instafeed">
    <ul id="js-instafeed" class="top-instafeed-list">
      <h2 class="top-instafeed-title">
        <a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><span>@unknownkyoto</span></a>
      </h2>
    </ul>
    <p class="section-link"><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener">Follow on Instagram</a></p>
  </section>
</div>
<section class="top-access">
  <h2 class="top-access-title">河原町駅からも京都駅からも歩けます</h2>

  <div class="top-access-map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.2511057065767!2d135.76514277873042!3d34.9937988822923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79557a17e1c2815d!2sUNKNOWN+KYOTO+GOJO-RAKUEN!5e0!3m2!1sja!2sjp!4v1553674826210" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>

<?php get_footer(); ?>

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
      $('.header').addClass('is-active');
    }
    else {
      $('.header-n-logo').removeClass('is-active');
      $('.header').removeClass('is-active');
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

  // ハンバーガーメニュー
  $(function() {
    $('.js-btn-toggle').on('click',function() {
      $('.nav-sp').toggleClass('is-open');
    });
  });

});
</script>

<div class="top-main">
  <div class="top-main-inner">
    <h1 class="top-main-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="UNKNOWN KYOTO"></h1>
    <p class="top-main-description">Hostel, Dining, Coworking</p>
  </div>

  <div class="top-main-share">
    <p class="top-main-share-text">SNS</p>
    <ul class="top-main-share-icon">
      <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram-white.svg" alt="Instagram"></a></li>
      <li><a href="https://www.facebook.com/Unknown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook-white.svg" alt="Facebook"></a></li>
      <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter-white.svg" alt="Twitter"></a></li>
    </ul>
  </div>
  <p class="btn-main-area"><a href="https://unknown.kyoto/office"><span>UNKNOWN KYOTO</span>本池中はこちら</a></p>

  <div class="top-main-image">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/05.jpg" alt="UNKNOWN KYOTO" class="top-image5">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/04.jpg" alt="UNKNOWN KYOTO" class="top-image4">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/03.jpg" alt="UNKNOWN KYOTO" class="top-image3">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/02.jpg" alt="UNKNOWN KYOTO" class="top-image2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/01.jpg" alt="UNKNOWN KYOTO" class="top-image1">
  </div>
</div>


  <section class="top-about">
    <div class="wrapper">
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
    </div>
  </section>
  <section class="top-facilities-hostel">
    <div class="wrapper">
      <h3 class="top-facilities-title">Hostel<span>泊まる</span></h3>
      <p class="top-facilities-description">遊郭の元客室をゆっくりくつろげるベッドのお部屋に。<br>もっと気軽に泊まれる大部屋も用意しています。</p>
      <p class="top-facilities-readmore"><a href="/hostel">詳しくはこちら</a></p>
    </div>
  </section>
  <section class="top-facilities-restaurant">
    <div class="wrapper">
      <h3 class="top-facilities-title">Restaurant & Bar<span>食べる</span></h3>
      <p class="top-facilities-description">一日のはじまりはモーニングから。<br>夜はオープンなダイニングバーで楽しいひとときを。<br>宿泊者以外も、誰でも利用することができます。</p>
      <p class="top-facilities-readmore"><a href="/restaurant">詳しくはこちら</a></p>
    </div>
  </section>
  <section class="top-facilities-coworking">
    <div class="wrapper">
      <h3 class="top-facilities-title">Coworking<span>働く</span></h3>
      <p class="top-facilities-description">旅先にいながらもしっかりとお仕事することができます。<br>高速wifiと電源を完備しています。</p>
      <p class="top-facilities-readmore"><a href="/coworking">詳しくはこちら</a></p>
    </div>
  </section>

<div class="wrapper">
  <section class="top-location">
    <div class="js-fadein">
      <p class="top-location-heading">LOCATION</p>
      <h2 class="top-location-title">知られざる京都<span class="for-pc">、</span><br class="for-sp">五條楽園</h2>

      <p class="top-location-description">かつて「五條楽園」と呼ばれた<br class="for-sp">このエリアは<br class="for-pc">すぐ近くに鴨川と<br class="for-sp">高瀬川が流れ、迷路のように<br>細い路地が入り組んだ、古き良き<br class="for-sp">佇まいを残したまち。<br class="for-pc">そんな中に<br class="for-sp">UNKNOWN KYOTOはあります。</p>
    </div>
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

    <div class="top-access js-fadein">
      <h2 class="top-access-title">河原町駅からも京都駅からも歩けます</h2>

      <div class="top-access-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.2511057065767!2d135.76514277873042!3d34.9937988822923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79557a17e1c2815d!2sUNKNOWN+KYOTO+GOJO-RAKUEN!5e0!3m2!1sja!2sjp!4v1553674826210" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>

  </section>


  <section class="top-instafeed">
    <ul id="js-instafeed" class="top-instafeed-list">
      <h2 class="top-instafeed-title">
        <a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><span>@unknownkyoto</span></a>
      </h2>
    </ul>
    <p class="section-link"><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener">Follow on Instagram</a></p>
  </section>

  <section class="top-article">
    <h2 class="top-article-heading">BLOG</h2>
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



<div class="top-footer">
  <section class="top-footer-contents js-funding" id="funding">
    <p class="top-funding-heading">FUNDING</p>
    <h3 class="top-footer-title">クラウドファンディング<br>目標額達成！</h3>
    <p class="top-footer-description">
      みなさんのご支援、ありがとうございました。<br>
      プロジェクトの詳細は<br>リンク先のページにございます。</p>
    <p class="btn-normal"><a href="https://hello-renovation.jp/renovations/3428" target="_blank" rel="noopener">プロジェクトページへ</a></p>
  </section>
  <section class="top-footer-contents">
    <p class="top-recruit-heading">RECRUIT</p>
    <h3 class="top-footer-title">スタッフ募集</h3>
    <p class="top-footer-description">UNKNOWN KYOTOではスタッフを募集しています。</p>
    <p class="top-footer-description">朝食専属スタッフ（7:00-11:00）<br>
      飲食スタッフ（19:00-23:00）<br>
      コワーキング＆宿スタッフ（9:00-22:00の間で4h以上〜）<br>
      宿清掃スタッフ</p>
    <p class="top-footer-description">時給:1000円〜</p>
    <p class="top-footer-description">ご応募は<br>
      info@unknown.kyoto<br>
      までご連絡ください。</p>
  </section>
</div>

</div>


<?php get_footer(); ?>

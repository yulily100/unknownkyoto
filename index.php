<?php get_header(); ?>

<div class="top-main">
  <div class="top-main-inner">
    <h1 class="top-main-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="UNKNOWN KYOTO" class="logo-pc">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-logo-sp.svg" alt="UNKNOWN KYOTO" class="logo-sp">
    </h1>
    <!--<p class="top-main-btn"><a href="https://unknown.kyoto/blog/ryoko-shien/"><span>全国旅行支援ご利用方法</span></a></p>-->
  </div>

  <div class="top-main-share">
    <p class="top-main-share-text">SNS</p>
    <ul class="top-main-share-icon">
      <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram-white.svg" alt="Instagram"></a></li>
      <li><a href="https://www.facebook.com/Unknown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook-white.svg" alt="Facebook"></a></li>
      <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter-white.svg" alt="Twitter"></a></li>
    </ul>
  </div>


  <div class="top-main-image">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/05.jpg" alt="UNKNOWN KYOTO" class="top-image5">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/04.jpg" alt="UNKNOWN KYOTO" class="top-image4">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/03.jpg" alt="UNKNOWN KYOTO" class="top-image3">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/02.jpg" alt="UNKNOWN KYOTO" class="top-image2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/01.jpg" alt="UNKNOWN KYOTO" class="top-image1">
  </div>
  <!-- <div class="top-main-image-sp">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/01.jpg" alt="UNKNOWN KYOTO">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image0207/04.jpg" alt="UNKNOWN KYOTO">
  </div> -->
</div>


<section class="index-open">
  <ul class="index-open-contents">
    <li>
      <h3 class="index-open-contents-title">
        <a href="/hostel">Hostel</a>
      </h3>
      <p class="index-open-contents-desc">CHECK IN…16:00 - 22:00<br>
      CHECK OUT　11:00</p>
    </li>
    <li>
      <h3 class="index-open-contents-title">
        <a href="/restaurant">Restaurant</a>
      </h3>
      <p class="index-open-contents-desc">11:30 - 15:00 (L.O. 14:30)<br>17:30 - 23:00<br>
      <span class="index-open-contents-note">日曜はポップアップ</span>
      </p>
    </li>
    <li>
      <h3 class="index-open-contents-title">
        <a href="/coworking">Coworking</a>
      </h3>
      <p class="index-open-contents-desc">ドロップイン…10:00 - 19:00<br>月額会員…24時間年中無休<br>
    </p>
    </li>
  </ul>

</section>

<?php
	$toplist = array(
		'posts_per_page' => 2,
		'meta_key' => 'show_pick_up',
		'meta_value' => 'show',
		'meta_compare' => 'LIKE'
	);
	$toplist_query = new WP_Query( $toplist );
?>

<section class="index-info">
  <ul class="index-info-list">
    <?php if ($toplist_query->have_posts()) : while($toplist_query->have_posts()) : $toplist_query->the_post(); ?>
    <li>
    <div class="index-info-cat">
      <?php the_category(); ?>
    </div>
    <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
    </li>
    <?php endwhile; endif; wp_reset_postdata(); ?>
  </ul>

</section>

<section class="index-about js-fadein">

  <div class="index-about-block1">
    <h3 class="index-about-block1-title">元遊郭建築を改装、<br class="for-sp">コワーキングのある宿</h3>
    <p class="index-about-block1-desc">京都・清水五条駅すぐ。<br>
      築100年を超える明治期の元遊郭建築を<br>
      できるだけ元の姿を残しながら<br class="for-sp">リノベーションして<br>
      「仕事もできて暮らせる宿」にしました。</p>
      <div class="index-about-intro">
        <div class="index-about-intro-v js-fadein"><img src="<?php echo get_template_directory_uri(); ?>/img/index/intro-01.jpg" alt="玄関"></div>
        <div class="index-about-intro-h js-fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/index/intro-02.jpg" alt="玄関">
          <img src="<?php echo get_template_directory_uri(); ?>/img/index/intro-03.jpg" alt="玄関">
        </div>
        <div class="index-about-intro-v js-fadein">
          <img src="<?php echo get_template_directory_uri(); ?>/img/index/intro-04.jpg" alt="玄関">
        </div>
      </div>
    <!-- <div class="index-about-block1-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/index/about-01.jpg" alt="玄関">
    </div> -->
  </div>

  <div class="index-about-wrapper">
    <div class="index-about-block2">
      <div class="index-about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/about-02.jpg" alt="">
      </div>
      <div class="index-about-text">
        <h3 class="index-about-title">コワーキング使い放題<br>会議室2時間無料</h3>
        <p class="index-about-desc">チェックインの日の朝10時から<br>
        チェックアウトの日の夜19時まで<br>
        コワーキングスペースが自由に使えます。<br>
        ディスプレイや充電器の用意もございます。</p>
        <p class="index-about-detail"><a href="/coworking">コワーキング詳細</a></p>
        <p class="index-about-detail"><a href="/meeting">会議室詳細</a></p>
      </div>

    </div>

    <div class="index-about-block3">
      <div class="index-about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/about-03.jpg" alt="">
      </div>
      <div class="index-about-text">
        <h3 class="index-about-title">昼は定食でお腹いっぱいに<br>夜は本格的なイタリアンで乾杯</h3>
        <p class="index-about-desc">昼は定食ランチ、夜は本格イタリアンのお店。<br>
          地元の人からも愛される飲食店です。<br>
          名物の「唐揚げ」はぜひ一度<br>
          食べていただきたい逸品です。</p>
        <p class="index-about-detail"><a href="/restaurant">レストラン詳細</a></p>
      </div>
    </div>

    <div class="index-about-block4">
      <div class="index-about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/about-04.jpg" alt="">
      </div>
      <div class="index-about-text">
        <h3 class="index-about-title">長期滞在もおすすめです</h3>
        <p class="index-about-desc">UNKNOWN KYOTOの魅力が一番味わえるのは<br class="for-pc">
          2,3泊、もしくはそれ以上かけて<br  class="for-pc">じっくりと京都を味わうような滞在です。<br>
          シェアキッチンやランドリーなど、<br>
          住むのに必要なものはすべて揃っています。<br>
          長期滞在用のプランもございます。</p>
          <p class="index-about-detail"><a href="https://unknown.kyoto/plan/workation/">4泊以上のロングステイプランはこちら</a></p>
          <p class="index-about-detail"><a href="https://unknown.kyoto/plan/monthly/">2週間/1ヶ月滞在のプランはこちら</a></p>
          
      </div>

    </div>
  </div>
</section>
<section class="index-stay">
  <div class="index-stay-inner">
    <h2 class="index-stay-title js-fadein">Rooms</h2>
    <ul class="index-rooms js-fadein">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-single.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">シングルルーム（定員1名）</h4>
          <p class="index-rooms-desc">デスクのないミニマルなシングルベッドのお部屋です。作業はコワーキングでされる方におすすめです。</p>
          <p>1泊 <?php echo $single1; ?>円〜<br>4泊 <?php echo $single4; ?>円</p>
          <p class="index-rooms-detail"><a href="/hostel">詳しく見る</a></p>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-relaxsingle.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">リラックスシングルルーム（定員1名）</h4>
          <p class="index-rooms-desc">デスクの付いた、シングルベッドのゆったりとしたお部屋です。長期滞在をされる方には特におすすめです。</p>
          <p>1泊 <?php echo $relax1; ?>円〜<br>4泊 <?php echo $relax4; ?>円</p>
          <p class="index-rooms-detail"><a href="/hostel">詳しく見る</a></p>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-widebed.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">ワイドベッドルーム（定員2名）</h4>
          <p class="index-rooms-desc">デスクの付いた、ダブルベッドのお部屋です。小さな床の間付きの和風な趣を残しています。</p>
          <p>1泊 <?php echo $double1; ?>円〜（2名でも同価格）<br>4泊 <?php echo $double4; ?>円</p>
          <p class="index-rooms-detail"><a href="/hostel">詳しく見る</a></p>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-deluxetwin.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">デラックスツインルーム（定員2名）</h4>
          <p class="index-rooms-desc">洗面台付きの広めのお部屋です。大きめのデスクが付き、ゆったり過ごせます。</p>
          <p>1泊 <?php echo $deluxe1; ?>円〜（2名でも同価格）<br>4泊 <?php echo $deluxe4; ?>円</p>
          <p class="index-rooms-detail"><a href="/hostel">詳しく見る</a></p>
        </div>
      </li>

    </ul>
  </div>
  <div class="index-dormitory js-fadein">
    <div class="index-dormitory-img">
      <div class="index-dormitory-left"><img src="<?php echo get_template_directory_uri(); ?>/img/index/dormi-1.jpg" alt=""></div>
      <div class="index-dormitory-right">
        <div class="index-dormitory-2"><img src="<?php echo get_template_directory_uri(); ?>/img/index/dormi-2.jpg" alt=""></div>
        <div class="index-dormitory-bottom">
          <div class="index-dormitory-bottom-img"><img src="<?php echo get_template_directory_uri(); ?>/img/index/dormi-3.jpg" alt=""></div>
          <div class="index-dormitory-bottom-img"><img src="<?php echo get_template_directory_uri(); ?>/img/index/dormi-4.jpg" alt=""></div>
        </div>
      </div>

    </div>
    <div class="index-dormitory-contents">
      <h3 class="index-dormitory-title"><span>ミニデスク付きドミトリー</span><br>ワーキングベッド</h3>
      <div class="index-dormitory-text">
        <p class="index-rooms-desc">全室にミニデスクがついていて作業することができます。一般的な「ドミトリー」よりも、ややゆったりとしたつくりです。</p>
        <p class="index-rooms-price">男女混合・女性専用ともに<br>1泊 <?php echo $dormitory1; ?>円<br>4泊 <?php echo $dormitory4; ?>円</p>
        <p class="index-rooms-detail"><a href="/hostel">詳しく見る</a></p>
      </div>
    </div>
  </div>


</section>

<div class="wrapper">

<section class="top-plan">
  <div class="top-plan-inner">
    <div class="top-plan-head">
      <h2 class="top-plan-title">Plan</h2>
      <p class="top-plan-description">
        「泊まって、食べて、働く」をわかりやすく体験していただくために、<br class="for-tab">UNKNOWN KYOTOをより楽しめるプランをご用意しました。
      </p>
    </div>
    <ul class="top-plan-list">
      <?php
        $args = array(
          'posts_per_page' => 3,
          'post_type' => 'plan',
          'order' => 'DESC',
        );
        $planList = new WP_Query($args);
        if ( $planList->have_posts() ) :
          while($planList->have_posts()): $planList->the_post();
      ?>
      <li>
        <p class="top-plan-intro"><?php echo get_post_meta($post->ID,'intro',true); ?></p>
        <p class="top-plan-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a></p>
        
        <h3 class="top-plan-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

      </li>
      <?php endwhile;endif; ?>
    </ul>
  </div>
  <p class="section-link"><a href="/plan">Read more</a></p>
</section>


<section class="top-location">
  <div class="js-fadein">
    <p class="top-location-heading">LOCATION</p>
    <h2 class="top-location-title">知られざる京都<span class="for-pc">、</span><br class="for-sp">五條楽園</h2>
    <p class="top-location-description">かつて「五條楽園」と呼ばれた<br class="for-sp">このエリアは<br class="for-pc">すぐ近くに鴨川と<br class="for-sp">高瀬川が流れ、迷路のように<br>細い路地が入り組んだ、古き良き<br class="for-sp">佇まいを残したまち。<br>あちこちに古い建築や美しいタイルの造形が並びます。<br>繁華街エリアや、がんばれば京都駅からも徒歩圏内です。</p>
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
    <div class="top-access-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.2511057065767!2d135.76514277873042!3d34.9937988822923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79557a17e1c2815d!2sUNKNOWN+KYOTO+GOJO-RAKUEN!5e0!3m2!1sja!2sjp!4v1553674826210" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>

</section>


<!-- <section class="top-instafeed">
  <ul id="js-instafeed" class="top-instafeed-list">
    <h2 class="top-instafeed-title">
      <a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><span>@unknownkyoto</span></a>
    </h2>
  </ul>
  <p class="section-link"><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener">Follow on Instagram</a></p>
</section> -->

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
      みなさんのご支援、<br>ありがとうございました。<br>
      プロジェクトの詳細は<br>リンク先のページにございます。</p>
    <p class="btn-normal"><a href="https://hello-renovation.jp/renovations/3428" target="_blank" rel="noopener">プロジェクトページへ</a></p>
  </section>
  <section class="top-footer-contents">
    <p class="top-recruit-heading">RECRUIT</p>
    <h3 class="top-footer-title">スタッフ募集</h3>
    <p class="top-footer-description">現在の募集状況は以下をご覧ください</p>
    <p class="btn-normal"><a href="https://unknown.kyoto/recruit/">詳細はこちら</a></p>
  </section>
</div>

</div>


<?php get_footer(); ?>

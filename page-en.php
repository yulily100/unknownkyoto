<?php get_header(); ?>



<div class="top-main">
  <div class="top-main-inner">
    <h1 class="top-main-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="UNKNOWN KYOTO" class="logo-pc">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top-logo-sp.svg" alt="UNKNOWN KYOTO" class="logo-sp">
    </h1>

  </div>

  <div class="top-main-share">
    <p class="top-main-share-text">SNS</p>
    <ul class="top-main-share-icon">
      <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram-white.svg" alt="Instagram"></a></li>
      <li><a href="https://www.facebook.com/Unknown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook-white.svg" alt="Facebook"></a></li>
      <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter-white.svg" alt="Twitter"></a></li>
    </ul>
  </div>
  <!-- <p class="btn-main-area"><a href="/campaign-goto"><span>Go Toトラベルキャンペーン<br class="for-sp">ご利用方法</span></a></p> -->

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
      <span class="index-open-contents-note">Sunday…POP UP</span>
      </p>
    </li>
    <li>
      <h3 class="index-open-contents-title">
        <a href="/coworking">Coworking</a>
      </h3>
      <p class="index-open-contents-desc">Drop In…10:00 - 19:00<br>membership…24hour<br>
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
    <h3 class="index-about-block1-title">Renovated old traditional japanase house, <br class="for-sp">inn with coworking facilities</h3>
    <p class="index-about-block1-desc">Located near Kiyomizu Gojo Station, Kyoto.<br>
      A 111-year-old traditional japanase house from the Meiji era (over 100 years old) was renovated<br>while retaining as much of its original appearance<br>as possible to create an "inn where you can work and live".</p>
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
        <h3 class="index-about-title">Unlimited use of coworking facilities<br>Free meeting room for 2 hours</h3>
        <p class="index-about-desc">The coworking space is free to use<br>from 10:00 a.m. on the day of check-in<br>to 7:00 p.m. on the night of check-out.</p>
        <p class="index-about-detail"><a href="/coworking">Coworking details</a></p>
        <p class="index-about-detail"><a href="/meeting">Meeting Room Details</a></p>
      </div>

    </div>

    <div class="index-about-block3">
      <div class="index-about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/about-03.jpg" alt="">
      </div>
      <div class="index-about-text">
        <h3 class="index-about-title">Satisfied set meals for lunch.<br>Cheers to authentic Italian cuisine at night!</h3>
        <p class="index-about-desc">Set meals lunch during the day and authentic Italian cuisine at night.<br>
        It is a restaurant loved by KYOTOITE.<br>
        The famous "karaage" is a must-try.</p>
        <p class="index-about-detail"><a href="/restaurant">Restaurant Details</a></p>
      </div>
    </div>

    <div class="index-about-block4">
      <div class="index-about-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/about-04.jpg" alt="">
      </div>
      <div class="index-about-text">
        <h3 class="index-about-title">Longer stays are also recommended.</h3>
        <p class="index-about-desc">The best way to enjoy the charm of UNKNOWN KYOTO is to stay for 2 or 3 nights, or even longer, to get a good taste of Kyoto.<br>
        The share kitchen, laundry, and everything you need to live in a hostel are provided.<br>
        Long-term stay plans are also available.</p>
          <p class="index-about-detail"><a href="https://unknown.kyoto/plan/workation/">Click here for long stay plans of 4 nights or more</a></p>
          <p class="index-about-detail"><a href="https://unknown.kyoto/plan/monthly/">Click here for 2-week/1-month stay plans</a></p>
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
          <h4 class="index-rooms-title">Single room (Max. 1 guest)</h4>
          <p class="index-rooms-desc">This is a minimalist single-bed room without a desk. Recommended for those who work in a co-working environment.</p>
          <p>1 night <?php echo hotel_price('single1') ?> yen~<br>4 nights <?php echo hotel_price('single4') ?> yen</p>
          <p class="index-rooms-detail"><a href="/hostel">See details</a></p>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-relaxsingle.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">Relax Single Room (Max. 1 guest)</h4>
          <p class="index-rooms-desc">A spacious single-bed room with a desk. This room is especially recommended for those staying for an extended period of time.</p>
          <p>1 night <?php echo hotel_price('relax1') ?> yen~<br>4 nights <?php echo hotel_price('relax4') ?> yen</p>
          <p class="index-rooms-detail"><a href="/hostel">See details</a></p>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-widebed.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">Double room (Max. 2 guests)</h4>
          <p class="index-rooms-desc">This room has a double bed with a desk. It retains the Japanese style with a small tokonoma.</p>
          <p>1 night <?php echo hotel_price('double1') ?> yen~ (same price for 2 guests)<br>4 nights <?php echo hotel_price('double4') ?> yen</p>
          <p class="index-rooms-detail"><a href="/hostel">See details</a></p>
        </div>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/index/room-deluxetwin.jpg" alt="">
        <div class="index-rooms-text">
          <h4 class="index-rooms-title">Deluxe Twin Room (Max. 2 guests)</h4>
          <p class="index-rooms-desc">A spacious room with a washbasin. A large desk is provided for a relaxing stay.</p>
          <p>1 night <?php echo hotel_price('deluxe1') ?> yen~ (same price for 2 guests)<br>4 nights <?php echo hotel_price('deluxe4') ?> yen</p>
          <p class="index-rooms-detail"><a href="/hostel">See details</a></p>
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
      <h3 class="index-dormitory-title">Dormitory</h3>
      <div class="index-dormitory-text">
        <p class="index-rooms-desc">All rooms are equipped with a mini desk for working. The rooms are more spacious than a typical "dormitory" and can be used spaciously.</p>
        <p class="index-rooms-price">For both mixed-sex and women-only rooms<br>1 night <?php echo hotel_price('dormitory1') ?> yen~<br>4 nights <?php echo hotel_price('dormitory4') ?> yen</p>
        <p class="index-rooms-detail"><a href="/hostel">See details</a></p>
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
        To make the "stay, eat, and work" experience easier to understand, we have prepared plans for you to enjoy UNKNOWN KYOTO even more.
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
    <h2 class="top-location-title">Unknown Kyoto<span class="for-pc">,</span><br class="for-sp">Gojo-Rakuen</h2>
    <p class="top-location-description">This area, once called "Gojo Rakuen", has the Kamo and Takase Rivers flowing nearby and a maze of narrow alleys that have retained their good old appearance.<br>
      Old architecture and beautiful tile formations line the streets here and there.<br>
      It is within walking distance from the downtown area and Kyoto Station.</p>
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


</div>


<?php get_footer(); ?>
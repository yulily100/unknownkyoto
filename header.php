<!doctype html>
<html>
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">

    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width">

    <title><?php
      global $page, $paged;
      if(is_front_page()) : //トップページ
      	bloginfo('name');
      elseif(is_home()) : //ブログページ（ブログサイトの場合はトップページ）
      	wp_title('-', true, 'right');
      	bloginfo('name');
      elseif(is_single()) : //記事ページ
        wp_title('-', true, 'right');
        bloginfo('name');
      elseif(is_page()) : //固定ページ
      	wp_title('-', true, 'right');
      	bloginfo('name');
      elseif(is_author()): //著者ページ
      	wp_title('-', true, 'right');
      	bloginfo('name');
      elseif(is_archive()) : //アーカイブページ（カテゴリーページなど）
      	wp_title('-', true, 'right');
      	bloginfo('name');
      elseif(is_search()) : //検索結果ページ
      	wp_title('');
      elseif(is_404()): //404ページ
      	echo '404 -';
      	bloginfo('name');
      endif;
      if($paged >= 2 || $page >= 2) : //２ページ目以降の場合
      	echo '-' . sprintf('%sページ',
      	max($paged,$page));
      endif;
      ?>
    </title>

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
          <p class="header-description">京都五條楽園の食事ができて働ける宿泊施設<br>元遊郭建築をリノベーション</p>
        <?php endif; ?>
      </div>
      <div class="header-menu">
        <ul class="header-nav">
          <?php if ( is_page('index-0207') ) : ?>
            <li><a href="/hostel">Hostel</a></li>
            <li><a href="/restaurant">Restaurant</a></li>
            <li><a href="/coworking">Coworking</a></li>
            <li><a href="/access">Access</a></li>
            <li class="header-nav-booking"><a href="https://www.beds24.com/booking2.php?propid=101300" target="_blank">Booking<span>ご予約</span></a></li>
          <?php else : ?>
            <li><a href="/coworking">Coworking</a></li>
            <li><a href="/blog/">Blog</a></li>
          <?php endif; ?>

        </ul>



        <ul class="header-sns">
          <?php if ( is_front_page() && is_home() || is_page('en') ) : ?>

            <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram-white.svg" alt="Instagram"></a></li>
            <li><a href="https://www.facebook.com/Unkown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook-white.svg" alt="Facebook"></a></li>
            <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter-white.svg" alt="Twitter"></a></li>

          <?php else : ?>

            <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram.svg" alt="Instagram"></a></li>
            <li><a href="https://www.facebook.com/Unkown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook.svg" alt="Facebook"></a></li>
            <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter.svg" alt="Twitter"></a></li>

          <?php endif ; ?>
        </ul>
      </div>
    </header>

<!doctype html>
<html>
  <head>
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
    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" >
  </head>

  <body>
    <header class="header">
      <div class="header-main">
        <h1 class="header-title">
          <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/img/header-logo.svg" alt="UNKNWON KYOTO">
          </a>
        </h1>
        <p class="header-description">京都五條楽園の食事ができて働ける宿泊施設<br>元遊郭建築をリノベーション</p>
      </div>
      <ul class="header-sns">
        <li><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-instagram-primary.svg" alt="Instagram"></a></li>
        <li><a href="https://www.facebook.com/Unkown.Kyoto.Gojo.Rakuen" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-facebook-primary.svg" alt="Facebook"></a></li>
        <li><a href="https://twitter.com/unknown_kyoto" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/sns-twitter-primary.svg" alt="Twitter"></a></li>
      </ul>
    </header>

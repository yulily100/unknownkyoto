<?php get_header(); ?>
<div class="container">
  <div class="entry-breadcrumbs">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
      <?php if(function_exists('bcn_display'))
      {
       bcn_display();
      }?>
    </div>
  </div>

  <div class="entry-wrapper">
    <article class="entry">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <p class="entry-thumb">
          <?php the_post_thumbnail('entry-top'); ?>
        </p>
        <header class="entry-header">
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
          <span class="article-detail">
            <span class="article-category"><?php the_category(); ?></span>
            <span class="article-date"><?php echo get_the_date(); ?></span>
          </span>
        </header>
        <div class="entry-content editable-content">
          <?php the_content(); ?>
        </div>
        <?php if ( function_exists( 'wpsabox_author_box' ) ) echo wpsabox_author_box(); ?>
        <?php
          endwhile;
          endif;
        ?>
      <ul class="entry-share">
        <li><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(); ?>" class="share-twitter" target="_blank" rel="noopener">ツイートする</a></li>
        <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>" class="share-facebook" target="_blank" rel="noopener">シェアする</a></li>
      </ul>
      <ul class="entry-pager">
        <li class="entry-pager-prev"><?php previous_post_link('%link', '%title') ?></li>
        <li class="entry-pager-next"><?php next_post_link('%link', '%title' ) ?></li>
      </ul>
    </article>
    <div class="entry-side">
      <section class="entry-about">
        <h2 class="entry-about-title"><span>about</span><img src="<?php echo get_template_directory_uri(); ?>/img/blog-logo.svg" alt="UNKNOWN KYOTO"></h2>
        <p class="entry-about-description">UNKNOWN KYOTOは京都・五條楽園に位置する元遊郭建築をリノベーションした複合施設です。宿泊施設、レストラン、コワーキングを併設しています。</p>
        <p class="entry-about-link"><a href="/">webサイトトップへ</a></p>
      </section>
      <section class="entry-side-articles">
        <h3 class="entry-side-articles-title">おすすめ</h3>
        <ul class="entry-side-articles-contents">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'tag' => 'recommend',
              'order' => 'DESC',
            );
            $prList = new WP_Query($args);
            if ( $prList->have_posts() ) :
              while($prList->have_posts()): $prList->the_post();
          ?>
          <li>
          <p class="entry-side-articles-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></p>
            <h3 class="entry-side-articles-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
          <?php endwhile;endif; ?>
        </ul>
      </section>
      <section class="entry-side-articles">
        <h3 class="entry-side-articles-title">過ごし方</h3>
        <ul class="entry-side-articles-contents">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'tag' => 'plan', 
              'order' => 'DESC',
            );
            $prList = new WP_Query($args);
            if ( $prList->have_posts() ) :
              while($prList->have_posts()): $prList->the_post();
          ?>
          <li>
          <p class="entry-side-articles-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></p>
            <h3 class="entry-side-articles-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
          <?php endwhile;endif; ?>
        </ul>
      </section>
      <section class="entry-side-articles">
        <h3 class="entry-side-articles-title">プレスリリース</h3>
        <ul class="entry-side-articles-contents">
          <?php
            $args = array(
              'posts_per_page' => 4,
              'category_name' => 'pr',  
              'order' => 'DESC',
            );
            $prList = new WP_Query($args);
            if ( $prList->have_posts() ) :
              while($prList->have_posts()): $prList->the_post();
          ?>
          <li>
            <p class="entry-side-articles-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a></p>
            <h3 class="entry-side-articles-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          </li>
          <?php endwhile;endif; ?>
        </ul>
      </section>
    </div>
  </div>
  <p class="entry-linktotop"><a href="/blog">UNKNOWN KYOTO BLOG トップへ</a></p>
</div>
<?php get_footer(); ?>

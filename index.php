<?php get_header(); ?>
<div class="eyecatch-image">
  <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/eyecatch-image.jpg" alt="" /> -->
</div>


<div class="container">
<!-- <?php
  $menu = array(
    'menu_class' => 'nav-category',
  );
  wp_nav_menu( $menu );
?> -->

  <div class="blog-top">
    <h1 class="blog-title"><a href="/"><span>UNKNOWN KYOTO</span>BLOG</a></h1>
  </div>

  <div class="top-contents">
    <div class="wrapper">
      <ul class="article-list">
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
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
      <?php endwhile;endif; ?>
      </ul>
      <div class="article-pager"><?php next_posts_link( '次のページへ' ); ?></div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

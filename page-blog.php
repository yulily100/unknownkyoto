<?php
/*
Template Name: blog
*/
get_header(); ?>

<div class="container">
  <div class="page-header page-blog">
    <h1 class="page-title"><a href="/blog"><span>UNKNOWN KYOTO</span>BLOG</a></h1>
  </div>

  <div class="page-contents">
    <div class="wrapper">
      <ul class="article-list">
        <?php
        $args = array(
          'posts_per_page' => 18,
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
      <?php endwhile;endif; ?>
      <?php wp_reset_postdata(); ?>
      </ul>
      <div class="article-pager"><?php next_posts_link( '次のページへ' ); ?></div>
    </div>
  </div>
</div>

<?php get_template_part('footer-funding'); ?>
<?php get_footer(); ?>

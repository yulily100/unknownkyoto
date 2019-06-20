<?php get_header(); ?>

<div class="container-article">
  <div class="article-wrapper">
    <div class="subpage-main">
      <article class="entry">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php the_category(""); ?>
          <?php echo get_the_date(); ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
          </a>
          <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
          <?php the_content(); ?>
          <?php
            endwhile;
            endif;
          ?>
      </article>
    </div>
  </div>
  <div class="related-post">
    <h3 class="related-title">関連記事</h3>
    <ul class="related-list">
      <?php
      $args = array(
        'posts_per_page' => 6
      );
      $the_query = new WP_Query( $args );
      ?>
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li class="article-wrapper">
          <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('recent-image');?></a>
          <h3 class="related-post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        </li>
      <?php endwhile; ?>
      <?php endif; wp_reset_postdata(); ?>
    </ul>
  </div>
  <ul class="sns">
    <li>twitter</li>
    <li>instagram</li>
  </ul>
</div>




<?php get_footer(); ?>

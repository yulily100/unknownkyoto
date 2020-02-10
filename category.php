  <?php
/*
Template Name: archive
*/
get_header(); ?>

<div class="container">
  <div class="category">
    <div class="wrapper">
      <h2 class="category-title"><span>CATEGORY:</span><?php single_cat_title(); ?></h2>

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
      <div class="nav-previous"><?php next_posts_link( '次のページへ' ); ?></div>
    </div>
  </div>
</div>
<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>

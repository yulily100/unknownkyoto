  <?php
/*
Template Name: archive
*/
get_header(); ?>

<?php
  $menu = array(
    'menu_class' => 'nav-category',
  );
  wp_nav_menu( $menu );
?>


    <h2 class="category-title"><?php single_cat_title(); ?></h2>
    <?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <article class="archive">
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archive-image');?></a>
      <div class="archive-data">
        <h1 class="archive-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1><span class="archive-slash">/</span><span class="archive-category"><?php the_category() ?></span>
      </div>
    </article>
    <?php
      endwhile;endif;
      wp_reset_query();
    ?>
    <div class="archive-pager">
      <?php next_posts_link('NEXT PAGE') ?>
    </div>




<?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>

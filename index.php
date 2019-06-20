<?php get_header(); ?>
<div class="eyecatch-image">
  <!-- <img src="<?php echo get_template_directory_uri(); ?>/images/eyecatch-image.jpg" alt="" /> -->
</div>


<div class="container">
<?php
  $menu = array(
    'menu_class' => 'nav-category',
  );
  wp_nav_menu( $menu );
?>



  <div class="">
    <div class="">
      <ul class="article-list">
        <?php if (have_posts()) :
          while (have_posts()) : the_post();
          $image_id = get_post_thumbnail_id(); ?>
        <li>
          <?php the_category(""); ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('thumbnail'); ?>
          </a>
          <?php echo get_the_date(); ?>
          <h2 class="article-list-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
          <p class="article-list-tags"><?php the_tags("",""); ?></p>
        </li>
      <?php endwhile;endif; ?>
      </ul>
    </div>
  </div>
</div>

<?php get_footer(); ?>

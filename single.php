<?php get_header(); ?>

<article class="entry">


  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <!-- <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail('thumbnail'); ?>
    </a> -->
    <header class="entry-header">
      <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
      <span class="article-category"><?php the_category(""); ?></span>
      <span class="article-date"><?php echo get_the_date(); ?></span>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <?php
      endwhile;
      endif;
    ?>
  <ul class="entry-share">
    <li><a href="">ツイートする</a></li>
    <li><a href="">シェアする</a></li>
  </ul>
  <ul class="entry-pager">
    <li>←<?php previous_post_link('%link', '%title') ?></li>
    <li><?php next_post_link('%link', '%title' ) ?>→</li>
  </ul>
</article>


<?php get_footer(); ?>

<?php get_header(); ?>

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
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
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
  <p class="entry-linktotop"><a href="/">UNKNOWN KYOTO BLOG トップへ</a></p>


<?php get_footer(); ?>

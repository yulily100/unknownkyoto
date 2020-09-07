<?php get_header(); ?>
<div class="container">
  <article class="plan">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <header class="plan-header">
        <h2 class="plan-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>

        <?php
        $terms = get_the_terms( $post->ID, 'plan_tags' );
        if ( !empty($terms) ) : if ( !is_wp_error($terms) ) :
        ?>
        <ul class="plan-tags">
          <?php foreach( $terms as $term ) : ?>
          <li><?php echo $term->name; ?></li>
          <?php endforeach; ?>
        </ul>
        <?php endif; endif; ?>

        <!-- <p class="plan-tags"><?php echo get_the_term_list( $post->ID, 'plan_tags'); ?></p> -->
        <!-- <p><?php echo get_the_term_list( $post->ID, 'plan_categories'); ?></p> -->
      </header>
      <div class="plan-body">
        <div class="plan-sidebar">
          <div class="plan-sidebar-inner">
            <?php echo get_post_meta($post->ID,'sidebar',true); ?>
          </div>
        </div>

        <div class="plan-content">
          <?php the_content(); ?>
        </div>
      </div>
      <ul class="entry-share">
        <li><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(); ?>" class="share-twitter" target="_blank" rel="noopener">ツイートする</a></li>
        <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>" class="share-facebook" target="_blank" rel="noopener">シェアする</a></li>
      </ul>
      <?php
        endwhile;
        endif;
      ?>

  </article>

</div>
<?php get_footer(); ?>

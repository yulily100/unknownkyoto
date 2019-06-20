<?php
/*
Template Name: archives
*/
get_header(); ?>
<?php
$paged = (int) get_query_var('paged');
$args = array(
 'posts_per_page' => 15,
 'paged' => $paged,
 'orderby' => 'post_date',
 'order' => 'DESC',
 'post_type' => 'post',
 'post_status' => 'publish'
);
$the_query = new WP_Query($args);
?>
<div class="l-container">
<div class="subpage">
  <?php get_sidebar(); ?>
  <div class="subpage-main">
    <?php
    if ( $the_query->have_posts() ) :
     while ( $the_query->have_posts() ) : $the_query->the_post();
    ?>
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
    <?php
     if ($the_query->max_num_pages > 1) {
     echo paginate_links(array(
     'base' => get_pagenum_link(1) . '%_%',
     'format' => 'page/%#%/',
     'current' => max(1, $paged),
     'total' => $the_query->max_num_pages
     ));
    }
    ?>
    </div>
  </div>
</div>




<?php wp_reset_postdata(); ?>
</div>

<?php get_footer(); ?>

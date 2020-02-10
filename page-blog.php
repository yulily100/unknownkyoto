<?php
/*
Template Name: blog
*/
get_header(); ?>

<div class="container">
  <div class="page-header-blog page-blog">
    <div class="page-header-inner">
      <h1 class="page-header-title">
        <a href="/blog"><span>UNKNOWN KYOTO</span>BLOG</a>
      </h1>
    </div>
  </div>

  <div class="page-contents">
    <div class="wrapper">
      <ul class="article-list">
        <?php
        $args = array(
          'posts_per_page' => 12,
          'paged' => get_query_var('paged'),
          'orderby' => 'date',
          'order' => 'DESC',
          'post_type' => 'post',
          'post_status' => 'publish'
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
      <?php endwhile;endif; wp_reset_query();?>

      </ul>
      <div class="article-pager">
      <?php
        if ($post_query->max_num_pages > 1) {
          echo paginate_links(array(
          'base' => get_pagenum_link(1) . '%_%',
          'format' => '/page/%#%/',
          'current' => max(1, get_query_var('paged')),
          'total' => $post_query->max_num_pages,
          'prev_text'    => '<span>＜</span>',
          'next_text'    => '<span class="pager-next">＞</span>'
          ));
        }
      ?>
      </div>
      <?php wp_reset_postdata(); ?>

    </div>
  </div>
</div>
<?php get_footer(); ?>

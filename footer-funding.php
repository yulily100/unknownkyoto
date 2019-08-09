<div class="article-funding">
  <div class="wrapper">
    <h2 class="article-funding-title">クラウドファンディング<br class="for-sp">実施中！</h2>
    <p class="article-funding-description">UNKNOWN KYOTOでは現在、投資型のクラウドファンディングを実施中です。</p>

    <ul class="article-funding-list">
      <?php
      $args = array(
        'posts_per_page' => 3,
        'category_name' => 'funding'
      );
      $funding_query = new WP_Query( $args );
      ?>
      <?php if ( $funding_query->have_posts() ) : ?>
      <?php while ( $funding_query->have_posts() ) : $funding_query->the_post(); ?>

      <li>
        <a href="<?php the_permalink(); ?>" class="article-thumb">
          <?php the_post_thumbnail('thumbnail'); ?>
        </a>
        <div class="article-funding-inner">
          <span class="article-detail">
            <span class="article-category"><?php the_category(""); ?></span>
            <span class="article-date"><?php echo get_the_date(); ?></span>
          </span>
          <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h2>
        </div>
      </li>

    <?php endwhile; ?>
    <?php endif; wp_reset_postdata(); ?>
    </ul>
    <div class="article-funding-footer">
      <p><span class="for-pc">＼</span> クラウドファンディングへの参加<span class="for-pc">や詳細は</span>こちらから <span class="for-pc">／</span></p>
      <p class="article-funding-link"><a href="https://hello-renovation.jp/renovations/3428" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/top-funding.svg" alt="クラウドファンディングページへ"></a></p>
    </div>
  </div>
</div>
<!-- <div class="wrapper">
  <div class="article-menu">
    <div class="article-menu-contents">
      <h3 class="article-menu-title">category</h3>
      <ul class="article-menu-items">

        <?php
        $args = array(
          'title_li' => '',
          'orderby' => 'count',
          'order' => 'DESC'
        );
        wp_list_categories($args); ?>
      </ul>
    </div>
    <div class="article-menu-contents">
      <h3 class="article-menu-title">member</h3>
      <ul class="article-menu-items">
        <?php
        $args = array(
          'orderby' => 'post_count',
          'order' => 'DESC'
        );
        wp_list_authors( $args ); ?>
      </ul>
    </div>
  </div>
</div> -->

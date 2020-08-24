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
          <div class="plan-detail">
            <h3 class="plan-detail-title">文豪プラン</h3>
            <p class="plan-detail-description">ドミトリーに宿泊。<br>
              泊まりながらコワーキングスペースを丸々2日間ご利用いただけます。<br>
              レストランのランチが1食付いています。<br>
              ご予約の際は「ドミトリー」の欄から「文豪プラン」をお選びください。</p>
            <p class="plan-detail-item">
              <span class="plan-detail-name">男女混合ドミトリー</span>
              <span class="plan-detail-line"></span>
              <span class="plan-detail-price">¥4,000</span></p>
            <p class="plan-detail-item">
              <span class="plan-detail-name">女性専用ドミトリー</span>
              <span class="plan-detail-line"></span>
              <span class="plan-detail-price">¥4,500</span></p>
            <p class="plan-detail-note">消費税・宿泊税が別途必要です</p>
          </div>
          <p class="plan-btn"><a href="">予約する</a></p>
          <ul class="entry-share">
            <li><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php echo get_the_title(); ?>" class="share-twitter" target="_blank" rel="noopener">ツイートする</a></li>
            <li><a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>&t=<?php echo get_the_title(); ?>" class="share-facebook" target="_blank" rel="noopener">シェアする</a></li>
          </ul>
          <ul class="entry-pager">
            <li class="entry-pager-prev"><?php previous_post_link('%link', '%title') ?></li>
            <li class="entry-pager-next"><?php next_post_link('%link', '%title' ) ?></li>
          </ul>
        </div>
        <div class="plan-content">
          <p class="entry-thumb">
            <?php the_post_thumbnail('entry-top'); ?>
          </p>
          <?php the_content(); ?>
        </div>
      </div>
      <?php
        endwhile;
        endif;
      ?>

  </article>

</div>
<?php get_footer(); ?>

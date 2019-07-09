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
<div class="wrapper">
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
</div>

<footer class="footer">
    <div class="wrapper">
      <div class="footer-inner">
        <div class="footer-feed">
          <div class="footer-feed-contents">
            <h2 class="footer-feed-title">Facebook</h2>
            <div class="fb-page" data-href="https://www.facebook.com/Unkown.Kyoto.Gojo.Rakuen/" data-tabs="timeline" data-width="420" data-height="500" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Unkown.Kyoto.Gojo.Rakuen/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Unkown.Kyoto.Gojo.Rakuen/">Unknown Kyoto Gojo-Rakuen</a></blockquote></div>
          </div>
          <div class="footer-feed-contents">
            <h2 class="footer-feed-title">Twitter</h2>
            <div class="footer-feed-inner">
              <a class="twitter-timeline" href="https://twitter.com/unknown_kyoto?ref_src=twsrc%5Etfw">Tweets by unknown_kyoto</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
          </div>
        </div>
        <div class="footer-info">
          <h2 class="footer-title"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="UNKNOWN KYOTO"></h2>
          <p class="footer-text">〒600-8118 京都府京都市下京区平居町55番地１</p>
          <ul class="footer-company">
            <li><a href="https://enjoyworks.jp/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-ew.png" alt="ENJOYWORKS"></a></li>
            <li><a href="https://www.hachise.jp/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-hachise.png" alt="八清"></a></li>
            <li><a href="https://ond-inc.com/" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-ond.png" alt="株式会社OND"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <p class="footer-copyright">Copyright © UNKNOWN KYOTO</p>
  </footer>
</body>


  <script type="text/javascript">
  var toggleBtn = document.getElementById("toggle-btn");
  var globalNav = document.getElementById("global-nav");
  toggleBtn.addEventListener('click', function() {
    globalNav.classList.toggle('is-open');
    toggleBtn.classList.toggle('active');
  });

  </script>

  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v3.2&appId=1677085722603447&autoLogAppEvents=1"></script>

</html>

<?php get_header(); ?>

<div class="container">
  <div class="page-header-food page-food">
    <div class="page-header-inner">
      <h1 class="page-header-title"><a href="/restaurant"><span>UNKNOWN KYOTO</span>Restaurant & Bar</a></h1>
      <p class="page-header-detail">
        11:30 - 15:00 (L.O. 14:30)<br>
        17:00 - 23:00 (L.O. お食事22:00,ドリンク22:30)</p>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="coworking-about">
    <p class="coworking-about-description">
      UNKNOWN KYOTOのレストランです。<br>
      テイクアウトも承っております。<br>
      ご要望に応じて、飲み会のコースプランを<br>
      用意することもできます。</p>
    <div class="coworking-about-image">
      <img src="<?php echo get_template_directory_uri(); ?>/img/food/food-main.jpg" alt="飲食店インテリア" class="for-pc">
      <img src="<?php echo get_template_directory_uri(); ?>/img/food/food-main-sp.jpg" alt="飲食店インテリア" class="for-sp">
    </div>
  </div>
  <div class="food-contents">
    <section class="food-contents-lunch">
      <h2 class="food-contents-title-lunch">Day Time</h2>
      <p class="food-contents-hours">11:30 - 15:00 (L.O. 14:30)</p>
      <ul class="food-type">
        <li>
          <p class="food-type-label">定食</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/food/lunch-1.jpg" alt="唐揚げランチ">
          <div class="food-type-text-sin">
            <h3 class="food-type-title">Sin -Dining＆Bar-</h3>
            <ul class="food-type-list">
              <li><span>唐揚げランチ</span><span class="food-type-price">800円</span></li>
              <li>他にも数種類ランチ定食あります。</li>
            </ul>
          </div>
        </li>
        <li>
          <p class="food-type-label">喫茶（おやすみ中）</p>
          <div class="comming-soon-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/food/lunch-2.jpg" alt="スパイスカレー">
          </div>
          <div class="food-type-text-kissa">
            <h3 class="food-type-title">喫茶アンノウン</h3>
            <ul class="food-type-list">
              <li><span>Aセット</span><span class="food-type-price">550円</span></li>
              <li>他にも数種類セットメニューあります。</li>
            </ul>
          </div>
        </li>
      </ul>
    </section>
    <section class="food-contents-lunch">
      <h2 class="food-contents-title-dinner">Dinner Time</h2>
      <p class="food-contents-hours">17:00 - 23:00 (L.O. 22:00)</p>
      <ul class="food-type">
        <li>
          <p class="food-type-label">本格イタリアン</p>
          <img src="<?php echo get_template_directory_uri(); ?>/img/food/dinner-1.jpg" alt="唐揚げランチ">
          <div class="food-type-text-sin">
            <h3 class="food-type-title">Sin -Dining＆Bar-</h3>
            <ul class="food-type-list">
              <li><span>ベビーホタテと九条ネギのアヒージョ</span><span class="food-type-price">700円</li>
              <li><span>ポッロフリット（唐揚げ）</span><span class="food-type-price">600円</li>
              <li><span>カルボナーラ</span><span class="food-type-price">1100円</li>
              <li><span>京都ポーク肩ロース肉のグリル</span><span class="food-type-price">1500円</li>
              <li>他にもメニュー多数あります。</li>
            </ul>
          </div>
        </li>
      </ul>
    </section>
  </div>
</div>

<section class="food-detail">
  <div class="food-detail-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/food/interior-1.jpg" alt="立ち飲み席">
    <img src="<?php echo get_template_directory_uri(); ?>/img/food/interior-2.jpg" alt="テーブル席">
  </div>
  <div class="food-detail-text">
    <h3 class="food-detail-title">営業時間</h3>
    <p class="food-detail-description">
      11:30 - 15:00 (L.O. 14:30)<br>
      17:00 - 23:00 (L.O. お食事22:00,ドリンク22:30)</p>
    <p class="food-detail-description">日曜定休</p>
    <h3 class="food-detail-title">店舗規模</h3>
    <p class="food-detail-description">テーブル席　8席<br>
      立ち飲み席　12席<br>
      カウンター席　8席</p>
    <p class="food-detail-description">立ち飲み席には椅子を出すこともできます。</p>
    <h3 class="food-detail-title">ご連絡</h3>
    <p class="food-detail-description">075-746-4665</p>
    <p class="food-detail-description">お問い合わせ・ご予約はこちらまで。</p>
    <div class="food-detail-access">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3268.4799155063033!2d135.76624239999998!3d34.994689799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79557a17e1c2815d!2sUNKNOWN%20KYOTO!5e0!3m2!1sja!2sjp!4v1578797119229!5m2!1sja!2sjp" width="auto" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <p class="food-detail-access-btn"><a href="https://goo.gl/maps/9aVuTd8iJGMXpK9f7">google mapで表示する</a></p>
    </div>
  </div>
</section>
<div class="wrapper">
  <section class="food-instafeed">
    <ul id="js-instafeed" class="food-instafeed-list">
    </ul>
    <p class="section-link"><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener">Follow on Instagram @unknownkyoto</a></p>
  </section>
</div>


<?php get_footer(); ?>

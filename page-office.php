<?php
/*
Template Name: office
*/
get_header(); ?>


<section class="office-main">
  <nav class="office-nav">
    <ul class="office-nav-menu">
      <li><a href="#office-facilities">設備</a></li>
      <li><a href="#office-floor">フロア</a></li>
      <li><a href="#office-plan">料金・プラン</a></li>
      <li><a href="#office-access">アクセス</a></li>
      <li class="office-nav-contact"><a href="https://forms.gle/8eJNPyMZ8Gfz12NC7">お問い合わせ</a></li>
    </ul>
  </nav>
  <h1 class="office-title"><img src="<?php echo get_template_directory_uri(); ?>/img/office/office-title.svg" alt="UNKNOWN KYOTO 本池中"></h1>
  <p class="office-description">【2023/10】<br>現在3部屋募集中です</p>
  <p class="btn-main-area"><a href="https://unknown.kyoto/"><span>UNKNOWN KYOTO</span>本館はこちら</a></p>
</section>
<section class="office-about">
  <div class="office-about-image"></div>
  <div class="office-about-text">
    <h2 class="office-about-title">京都・五條楽園<br>
      小さな畳のシェアオフィス</h2>
    <p class="office-about-description">UNKNOWN KYOTO 本池中（ほんいけなか）は小さな個室が集まった京都のシェアオフィスです。元お茶屋さんを活用した、一風変わった和の空間です。</p>
    <div class="office-about-suggestion">
      <h3 class="office-about-suggestion-title">こんな方におすすめ</h3>
      <ul class="office-about-suggestion-list">
        <li>普通のオフィスではない空間をお探しの方</li>
        <li>落ち着ける空間をお探しの方</li>
        <li>京都・関西に新しい拠点を作りたい企業様</li>

      </ul>
    </div>
  </div>
</section>

<section id="office-facilities" class="office-section bg">
  <div class="office-section-inner">
    <h2 class="office-section-title">Facilities<span>施設・設備</span></h2>
    <ul class="office-facilities-list">
      <li>
        <img src="/wp-content/themes/unknownkyoto/img/office/photo-room3.jpg" alt="個室四の間" class="office-facilities-img">
        <h3 class="office-facilities-title">個室</h3>
        <p class="office-facilities-description">畳のオフィスです！ 机を置くと最大4,5人が働けるくらいの規模感です。<br>
天井は茶室によく見られる船底天井。</p>
      </li>
      <li>
        <img src="/wp-content/themes/unknownkyoto/img/office/photo-meeting.jpg" alt="会議室の写真" class="office-facilities-img">
        <h3 class="office-facilities-title">本池中会議室</h3>
        <p class="office-facilities-description">最大５名くらいでご利用いただけます。<br>
料金は１時間税込1,100円（入居者は550円）となります。</p>
      </li>
      <li>
        <img src="/wp-content/themes/unknownkyoto/img/office/photo-communityroom.jpg" alt="コミュニティスペース写真" class="office-facilities-img">
        <h3 class="office-facilities-title">コミュニティスペース</h3>
        <p class="office-facilities-description">玄関を上がった衝立の奥にはちょっとしたコミュニティスペースがあります。<br>
一息つきたい時などに是非ご利用ください。他の入居者の方とのコミュニケーションの場としてもご利用いただいてます。</p>
      </li>
      <li>
        <img src="/wp-content/themes/unknownkyoto/img/office/photo-wifi.jpg" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">高速wifi、複合機</h3>
        <p class="office-facilities-description">高速で快適なwifiをご用意しております。<br>複合機はA4カラー印刷、スキャンが可能です。</p>
      </li>
      <li>
        <img src="/wp-content/themes/unknownkyoto/img/office/photo-mainbuilding.jpg" alt="本館利用" class="office-facilities-img">
        <h3 class="office-facilities-title">本館利用</h3>
        <p class="office-facilities-description">UNKNOWN KYOTO本館のコワーキングが利用可能です。気分を変えたいときなどにオープンな空間をご利用ください。宿泊・飲食も可能です。</p>
      </li>
      <li>
        <img src="/wp-content/themes/unknownkyoto/img/meeting/honkan.jpg" alt="本館会議室" class="office-facilities-img">
        <h3 class="office-facilities-title">本館会議室</h3>
        <p class="office-facilities-description">最大４名でご利用いただけるモニター付きのミーティングルームを本館にご用意しております。</p>
      </li>

<!--
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">水・コーヒー</h3>
        <p class="office-facilities-description">ウォーターサーバーとインスタントコーヒーがご利用いただけます。本格コーヒーが飲みたくなったら本館をご利用ください。</p>
      </li>
-->
    </ul>
  </div>
</section>

<section id="office-floor" class="office-section">
  <div class="office-section-inner">
    <h2 class="office-section-title">Floor<span>フロア</span></h2>
<img src="/wp-content/themes/unknownkyoto/img/office/plan2310.png" alt="UNKNOWN KYOTO 本池中　間取り図" style="width:100%">
<p class="onlySP"><a href="/wp-content/themes/unknownkyoto/img/office/plan2310.png" target="honikenaka" rel="noopener noreferrer">新規ウインドウで拡大して表示する</a></p>
</div></section>

<section id="office-plan" class="office-section bg">
  <div class="office-section-inner">
    <h2 class="office-section-title">Price / Plan<span>利⽤料金 / プラン</span></h2>
    <?php the_content(); ?>

  </div>
</section>

<section id="office-contact" class="office-section">
  <div class="office-section-inner">
    <h2 class="office-section-title">Contact<span>見学/お問い合わせ</span></h2>
    <p class="office-contact-btn"><a href="https://forms.gle/8eJNPyMZ8Gfz12NC7" target="_blank" rel="noopener noreferrer">こちらからご連絡ください</a></p>
  </div>
</section>

<div id="office-access" class="office-access">
  <div class="office-access-route">
  <table>
    <tbody>
		<tr>
			<td class="station">京阪 清水五条駅</td>
			<td class="time">歩 4分</td>
		</tr>
		<tr>
			<td class="station">京阪 七条駅</td>
			<td class="time">歩 9分</td>
		</tr>
		<tr>
			<td class="station">阪急 河原町駅</td>
			<td class="time">歩 14分</td>
		</tr>
		<tr>
			<td class="station">JR 京都駅</td>
			<td class="time">歩 17分</td>
		</tr>
    </tbody>
  </table>
  </div>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d817.121361669603!2d135.7653428291955!3d34.99455129877252!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600108bbd326f329%3A0x8ec55686c052408a!2z44CSNjAwLTgxMTgg5Lqs6YO95bqc5Lqs6YO95biC5LiL5Lqs5Yy65bmz5bGF55S677yV77yY!5e0!3m2!1sja!2sjp!4v1568647347077!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" width="100%" height="400" frameborder="0"></iframe>
</div>
<section class="office-section">
  <div class="office-section-inner">
    <h4 class="office-blog-title">UNKNOWN KYOTO 本池中を<br class="for-sp">もっと知る</h4>
    <p class="office-blog-description">オーナー佐藤さんや、開業当日の様子など、<br class="for-pc">UNKNOWN KYOTO 本池中の魅力をもっと知るには<br class="for-pc">こちらのブログ記事をご覧ください。</p>
    <ul class="office-blog-list">
      <li>▷ <a href="https://unknown.kyoto/blog/%e5%ae%9f%e3%81%afunknown-kyoto%e3%81%ab%e5%88%a5%e9%a4%a8%e3%81%8b%e3%82%99%e3%81%82%e3%82%8b%e3%81%a3%e3%81%a6%e7%9f%a5%e3%81%a3%e3%81%a6%e3%81%9f%ef%bc%9f/" target="_blank" rel="noopener noreferrer">実はUNKNOWN KYOTOに別館があるってホント？</a></li>
      <li>▷ <a href="https://unknown.kyoto/blog/unknown-kyoto-%e6%9c%ac%e6%b1%a0%e4%b8%ad%e3%82%92%e3%82%88%e3%82%8d%e3%81%97%e3%81%8f%e3%81%8a%e9%a1%98%e3%81%84%e3%81%97%e3%81%be%e3%81%99%e3%80%82/" target="_blank" rel="noopener noreferrer">UNKNOWN KYOTO 本池中をよろしくお願いします。</a></li>
    </ul>
  </div>
</section>

<?php get_footer(); ?>

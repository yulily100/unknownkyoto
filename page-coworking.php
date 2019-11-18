<?php get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(function() {
  // scroll event
  $(window).scroll(function () {
    var wh = $(window).height();
    var scroll = $(window).scrollTop();

    // Nロゴの色を変える
    if (scroll > wh ) {
      $('.header-n-logo').addClass('is-active');
    } else {
      $('.header-n-logo').removeClass('is-active');
    }

    // .js-fadein が付けられた要素をふわっと表示
    $fadeIn.each(function() {
      var targetElement = $(this).offset().top;
      if (scroll > targetElement - wh + 200){
        $(this).css('opacity','1');
        $(this).css('transform','translateY(0)');
      }
    });

    $('.js-funding').each(function() {
      var targetElement = $(this).offset().top;
      if (scroll > targetElement - wh ) {
        $('.top-main-funding').addClass('is-active');
      }
    });
  });

  // ページ内をなめらかにスクロール
  $('a[href^="#"]').click(function() {
     var speed = 600;
     var href= $(this).attr("href");
     var target = $(href == "#" || href == "" ? 'html' : href);
     var position = target.offset().top;
     $('body,html').animate({scrollTop:position}, speed, 'swing');
     return false;
  });

});
</script>


<div class="container">
  <div class="page-header page-blog">
    <h1 class="coworking-title"><a href="/coworking">Coworking</a></h1>
  </div>
</div>

<div class="wrapper">
  <div class="coworking-about">
    <p class="coworking-about-description">
      月額利用・ドロップイン利用のほかに、<br>
      宿泊者もご利用いただけるコワーキングスペースです。</p>
    <div class="coworking-about-image">
      <div class="coworking-about-image-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/main-1.png" alt="四角デスク写真" class="image-1">
      </div>
      <div class="coworking-about-image-right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/main-2.png" alt="窓際デスク写真" class="image-2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/main-3.png" alt="壁際デスク写真">
      </div>
    </div>
  </div>
</div>

<section class="section bg">
  <div class="wrapper">
    <h2 class="office-section-title">Facilities<span>施設・設備</span></h2>
    <ul class="office-facilities-list">
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">フリースペース</h3>
        <p class="office-facilities-description">自由に使っていただける空間です。場所を固定しないフリーアドレス制となっています。</p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">個室</h3>
        <p class="office-facilities-description">大個室と小個室があります。個室会員はフリースペースもご利用いただけます。</p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">リビング</h3>
        <p class="office-facilities-description">くつろげるソファがあります。他の会員との交流や、簡単な打ち合わせにも使えます。</p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">キッチン</h3>
        <p class="office-facilities-description">簡単な料理のほか、買ってきた食べ物を温めたり飲み物を冷やしておけます。</p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">会議室</h3>
        <p class="office-facilities-description">4人ほどで使える小さな会議室です。落ち着いて打ち合わせすることができます。</p>
        <p class="office-facilities-price"><a href="#rentalspace">詳しくはこちら</a></p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">本池中会議室</h3>
        <p class="office-facilities-description">別館であるUNKNOWN KYOTO本池中の会議室を利用することもできます。</p>
        <p class="office-facilities-price"><a href="#rentalspace">詳しくはこちら</a></p>
      </li>
    </ul>
    <ul class="coworking-options">
      <li>
        <img src="" alt="">
        <h3 class="coworking-options-title">高速wifi</h3>
      </li>
      <li>
        <img src="" alt="">
        <h3 class="coworking-options-title">ロッカー</h3>
      </li>
      <li>
        <img src="" alt="">
        <h3 class="coworking-options-title">プリンター</h3>
      </li>
      <li>
        <img src="" alt="">
        <h3 class="coworking-options-title">スピーカー</h3>
        <p class="coworking-options-description">※イベント使用時のみ</p>
      </li>
      <li>
        <img src="" alt="">
        <h3 class="coworking-options-title">モニター</h3>
        <p class="coworking-options-description">※イベント使用時のみ</p>
      </li>
    </ul>
  </div>
</section>

<section id="office-floor" class="section">
  <div class="office-section-inner">
    <h2 class="office-section-title">Floor<span>フロア</span></h2>
<img src="/wp-content/themes/unknownkyoto/img/office/plan.png" alt="間取り図" style="width:100%">
<p class="onlySP"><a href="/wp-content/themes/unknownkyoto/img/office/plan.png" target="honikenaka" rel="noopener noreferrer">新規ウインドウで拡大して表示する</a></p>
</div></section>

<section id="office-plan" class="section bg">
  <div class="wrapper">
    <div class="coworking-plan">
      <h2 class="office-section-title">Price / Plan<span>利⽤料金 / プラン</span></h2>
      <h3 class="coworking-plan-title">月額利用</h3>
      <div class="cowoking-plan-block">
        <table class="coworking-plan-tabel">
          <tbody>
            <tr>
              <th>フルタイム会員</th>
              <td class="price">10,000円＋税/月</td>
              <td>24時間</td>
      			</tr>
            <tr>
              <th>週末会員</th>
              <td class="price">4,000円＋税/月</td>
              <td>土・日・祝の0:00〜24:00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <ul class="coworking-plan-notice">
        <li>入会金 5,000円＋税 が必要です。</li>
        <li>オプションとして登記利用が 5,000円＋税/月 で可能です。</li>
        <li>ゲストを会議室に呼ぶ場合は無料ですが、フリースペース利用時には1ドリンク必要です。</li>
        <li>備え付けの机・椅子の利用が可能です。</li>
        <li>駐輪場はフルタイム会員は 1,500円＋税/月、週末会員は 1,000円＋税/月  で1台ご利用いただけます。</li>
        <li>ロッカーの利用が可能です。（大2,500円＋税/月, 中2,000円＋税/月, 小1,500円+税/月）</li>
      </ul>
      <h3 class="coworking-plan-title">個室利用</h3>
      <div class="cowoking-plan-block">
        <table class="coworking-plan-tabel">
          <tbody>
            <tr>
              <th><span class="name">大個室</span><span class="member">6人まで会員登録可</span></th>
              <td class="price">￥85,000＋税/月</td>
              <td>24時間</td>
            </tr>
            <tr>
              <th><span class="name">小個室</span><span class="member">4人まで会員登録可</span></th>
              <td class="price">￥50,000＋税/月</td>
              <td>24 時間</td>
            </tr>
          </tbody>
        </table>
      </div>
      <ul class="coworking-plan-notice">
        <li>入会金 5,000円＋税 が必要です。</li>
        <li>登記利用が無料です。</li>
        <li>ゲストを個室や会議室に呼ぶ場合は無料ですが、フリースペース利用時は1ドリンク/2時間が必要です。</li>
        <li>駐輪場１台分は無料ですが、二台目からは１枠 1,500円＋税/月 が必要です。</li>
        <li>備え付けの机の利用が可能です。椅子は各自お好きなものをご用意ください。</li>
      </ul>
      <h3 class="coworking-plan-title">時間利用</h3>
      <div class="cowoking-plan-block">
        <table class="coworking-plan-tabel">
          <tbody>
            <tr>
              <th>ドロップイン</th>
              <td class="price">1ドリンク/2時間</td>
              <td>7:00〜22:00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <ul class="coworking-plan-notice">
        <li>支払いは利用時に都度お願いします。</li>
        <li>ロッカーの利用はできません。</li>
      </ul>
    </div>
  </div>
</section>

<section class="section" id="rentalspace">
  <div class="wrapper">
    <h2 class="office-section-title">Rental Space<span>レンタルスペース</span></h2>
    <p class="office-section-description">
      コワーキングの会員以外の方でも<br class="for-sp">施設を利用することができます。<br>
      カレンダーで空きを確認のうえ、<br class="for-sp">お問い合わせフォームから<br class="for-sp">お申し込みください。<br>
      ご利用の当日は受付のスタッフまで<br class="for-sp">お声掛けください。</p>
    <ul class="office-facilities-list">
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">イベント利用</h3>
        <p class="coworking-rental-description">フリースペースでイベントが行えます。スピーカーとモニターが利用可能です。</p>
        <p class="coworking-rental-plan">7,000円＋税/1時間<br>
        水金:18:00~22:00<br>
        土:10:00~22:00</p>

        <p class="coworking-rental-btn"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1885cn5hd6mo2jdjkhgei9r0kgas06gb74rjgd9i6gr3edpl6g%40resource.calendar.google.com&ctz=Asia%2FTokyo" target="_blank" rel="noopener">カレンダーで空きを確認</a></p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">会議室</h3>
        <p class="coworking-rental-description">4人ほどで使える小さな会議室です。落ち着いて打ち合わせすることができます。</p>
        <p class="coworking-rental-plan">1,000円＋税/1時間<br>
        毎日:7:00~22:00</p>
        <p class="coworking-rental-btn"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" target="_blank" rel="noopener">カレンダーで空きを確認</a></p>
      </li>
      <li>
        <img src="" alt="" class="office-facilities-img">
        <h3 class="office-facilities-title">本池中会議室</h3>
        <p class="coworking-rental-description">別館であるUNKNOWN KYOTO本池中の会議室です。畳敷きの和室です。</p>
        <p class="coworking-rental-plan">1,000円＋税/1時間<br>
          毎日:7:00~22:00</p>
        <p class="coworking-rental-btn"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" target="_blank" rel="noopener">カレンダーで空きを確認</a></p>
      </li>
    </ul>
    <p class="btn-primary"><a href="https://docs.google.com/forms/d/1quuihBBg9HkvCRx7wk7HhMFsrastC6G_sI3cQ9vwwkQ/viewform?edit_requested=true" target="_blank" rel="noopener noreferrer">利用申し込みはこちら</a></p>
  </div>
</section>

<div id="office-access" class="office-access">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d817.1219253608353!2d135.76605205507957!3d34.99449483904513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79557a17e1c2815d!2sUNKNOWN%20KYOTO!5e0!3m2!1sja!2sjp!4v1573542928864!5m2!1sja!2sjp" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

<section id="office-contact" class="section">
  <div class="office-section-inner">
    <h2 class="office-section-title">Contact<span>お問い合わせ</span></h2>
    <p class="office-section-description">質問や見学希望等、何かございましたらこちらからご連絡ください。</p>
    <p class="btn-primary"><a href="https://docs.google.com/forms/d/1quuihBBg9HkvCRx7wk7HhMFsrastC6G_sI3cQ9vwwkQ/viewform?edit_requested=true" target="_blank" rel="noopener noreferrer">お問い合わせはこちら</a></p>
  </div>
</section>




<?php get_footer(); ?>

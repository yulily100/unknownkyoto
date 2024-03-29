<?php get_header(); ?>

<div class="container">
  <div class="coworking-header">
    <div class="coworking-header-inner">
      <h1 class="coworking-header-title"><a href="/coworking">Coworking Space</a></h1>
      <p class="coworking-header-link"><a href="/office">すぐ近くの別館にも<br>個室のシェアオフィスが<br class="for-sp">ございます</a></p>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="coworking-about">
    <p class="coworking-about-description">
      月額利用・ドロップイン利用のほかに、<br>
      宿泊者もご利用いただけるコワーキングスペースです。</p>
    <div class="coworking-about-image">
      <div class="coworking-about-image-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/main-1.jpg" alt="四角デスク" class="image-1">
      </div>
      <div class="coworking-about-image-right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/main-2.jpg" alt="窓際デスク" class="image-2">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/main-3.jpg" alt="壁際デスク">
      </div>
    </div>
  </div>
</div>

<section class="section bg">
  <div class="wrapper">
    <h2 class="office-section-title">Facilities<span>施設・設備</span></h2>
    <ul class="office-facilities-list">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-freespace.jpg" alt="フリースペース" class="office-facilities-img">
        <h3 class="office-facilities-title">フリースペース</h3>
        <p class="office-facilities-description">自由に使っていただける空間です。場所を固定しないフリーアドレス制となっています。</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-living.jpg" alt="リビング" class="office-facilities-img">
        <h3 class="office-facilities-title">リビング</h3>
        <p class="office-facilities-description">くつろげるソファがあります。他の会員との交流や、簡単な打ち合わせにも使えます。</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-kitchen.jpg" alt="キッチン" class="office-facilities-img">
        <h3 class="office-facilities-title">キッチン</h3>
        <p class="office-facilities-description">簡単な料理のほか、買ってきた食べ物を温めたり飲み物を冷やしておけます。</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-privateroom.jpg" alt="個室" class="office-facilities-img">
        <h3 class="office-facilities-title">個室</h3>
        <p class="office-facilities-description">大個室と小個室があります。個室会員はフリースペースもご利用いただけます。</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-meetingroom.jpg" alt="会議室" class="office-facilities-img">
        <h3 class="office-facilities-title">会議室</h3>
        <p class="office-facilities-description">最大3名ほどで使える小さな会議室です。オンライン会議にもおすすめです。</p>
        <p class="office-facilities-price"><a href="/meeting">詳しくはこちら</a></p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-meetingroom2.jpg" alt="本池中会議室" class="office-facilities-img">
        <h3 class="office-facilities-title">本池中会議室</h3>
        <p class="office-facilities-description">別館の会議室も利用可能です。4,5名ほどで使える小部屋と最大15名ほどで使える大部屋とあります。</p>
        <p class="office-facilities-price"><a href="/meeting">詳しくはこちら</a></p>
      </li>
    </ul>
    <ul class="coworking-options">
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/coworking-wifi.svg" alt="高速wifi">
        <h3 class="coworking-options-title">高速wifi</h3>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/coworking-locker.svg" alt="">
        <h3 class="coworking-options-title">ロッカー</h3>
        <p class="coworking-options-description">月額利用者のみ</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/coworking-printer.svg" alt="">
        <h3 class="coworking-options-title">プリンター</h3>
        <p class="coworking-options-description">A4 1枚10円</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/coworking-speaker.svg" alt="">
        <h3 class="coworking-options-title">スピーカー</h3>
        <p class="coworking-options-description">イベント使用時のみ</p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/coworking-monitor.svg" alt="">
        <h3 class="coworking-options-title">モニター</h3>
        <p class="coworking-options-description">イベント使用時のみ</p>
      </li>
    </ul>
    <a href="/office">
      <span class="coworking-shareoffice">
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/honikenaka.jpg" alt="UNKNOWN KYOTO本池中" class="coworking-shareoffice-img">
        <div class="coworking-shareoffice-text">
          <h3 class="coworking-shareoffice-title">シェアオフィス <br class="for-sp">UNKNOWN KYOTO 本池中</h3>
          <p class="coworking-shareoffice-description">UNKNOWN KYOTOには別館【UNKNOWN KYOTO 本池中】がございます。こちらには4.5帖と6帖の個室があるので併せてご覧ください。<br>
        別館の会員も本館のフリースペースを利用することができます。</p>
        </div>
      </span>
    </a>
  </div>
</section>

<section id="office-floor" class="section">
  <div class="office-section-inner">
    <h2 class="office-section-title">Floor<span>フロア</span></h2>
    <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/floor.png" alt="フロア図" class="coworking-floor-img">
<p class="onlySP"><a href="<?php echo get_template_directory_uri(); ?>/img/coworking/floor.png" target="honikenaka" rel="noopener noreferrer">新規ウインドウで拡大して表示する</a></p>
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
              <th><span class="title">フルタイム会員</span></th>
              <td class="price">11,000円/月</td>
              <td>24時間</td>
      			</tr>
            <tr>
              <th><span class="title">週末会員</span></th>
              <td class="price">4,400円/月</td>
              <td>土・日・祝 24時間</td>
            </tr>
          </tbody>
        </table>
      </div>
      <ul class="coworking-plan-notice">
        <li>入会金 5,500円が必要です。</li>
        <li>オプションとして登記利用が 5,500円で可能です。</li>
        <li>ゲストを会議室に呼ぶ場合は無料ですが、フリースペース利用時には1ドリンク必要です。</li>
        <li>備え付けの机・椅子の利用が可能です。</li>
        <li>駐輪場は、フルタイム会員：1,650円/月・週末会員：1,100円/月  で1台ご利用いただけます。</li>
        <li>ロッカーの利用が可能です。（大2,750円/月, 中2,200円/月, 小1,650円/月）</li>
        <li>記載料金はすべて消費税込みの価格です。</li>
      </ul>
      <h3 class="coworking-plan-title">時間利用</h3>
      <div class="cowoking-plan-block">
        <table class="coworking-plan-tabel">
          <tbody>
            <tr>
              <th><span class="title">ドロップイン</span></th>
              <td class="price">
                2時間 550円<br>
                5時間 1,100円<br>
                1日利用 1,650円<br>
                <span class="price-notice">※すべて1ドリンク付き</span></td>
              <td>毎日 10:00〜19:00</td>
            </tr>
          </tbody>
        </table>
      </div>
      <ul class="coworking-plan-notice">
        <li>支払いは利用時に都度お願いします。</li>
        <li>ロッカーの利用はできません。</li>
      </ul>
      <h3 class="coworking-plan-title">個室利用</h3>
      <div class="cowoking-plan-block">
        <table class="coworking-plan-tabel">
          <tbody>
            <tr>
              <th><span class="title"><span class="name">本館・大個室</span><span class="member">6人まで会員登録可</span></span></th>
              <td class="price">93,500円/月</td>
              <td>24時間<span class="status">満室</span></td>
            </tr>
            <tr>
              <th><span class="title"><span class="name">本館・小個室</span><span class="member">4人まで会員登録可</span></span></th>
              <td class="price">55,000円/月</td>
              <td>24時間<span class="status">満室</span></td>
            </tr>
            <tr>
              <th><span class="title"><span class="name">別館・小個室</span><span class="member">4人まで会員登録可</span></span></th>
              <td class="price">66,000円/月</td>
              <td>8:00～22:00<span class="status">空室あり</span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <ul class="coworking-plan-notice">
        <li>入会金 5,500円が必要です。</li>
        <li>登記利用が無料です。</li>
        <li>ゲストを個室や会議室に呼ぶ場合は無料ですが、フリースペース利用時は1ドリンク/2時間が必要です。</li>
        <li>駐輪場１台分は無料ですが、二台目からは１台 1,650円/月 が必要です。</li>
        <li>備え付けの机の利用が可能です。椅子は各自お好きなものをご用意ください。</li>
        <li>記載料金はすべて消費税込みの価格です。</li>
        <li><a href="/office">別館・本池中の詳細はこちらから。</a></li>
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
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/event.jpg" alt="イベント利用" class="office-facilities-img">
        <h3 class="office-facilities-title">イベント利用</h3>
        <p class="coworking-rental-description">フリースペースでイベントが行えます。スピーカーとモニターが利用可能。３時間以上からご利用いただけます。</p>
        <p class="coworking-facilities-price"><a href="/meeting">詳しくはこちら</a></p>
        <p class="coworking-rental-plan">7,700円/1時間<br>
        水金:18:00~22:00<br>
        土:10:00~22:00</p>
        
        <p class="coworking-rental-btn"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1885cn5hd6mo2jdjkhgei9r0kgas06gb74rjgd9i6gr3edpl6g%40resource.calendar.google.com&ctz=Asia%2FTokyo" target="_blank" rel="noopener">カレンダーで空きを確認</a></p>
        <p class="btn-primary"><a href="https://forms.gle/VcJ5JaqLDGtDtuPE8" target="_blank" rel="noopener noreferrer">イベント利用申し込み</a></p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-meetingroom.jpg" alt="会議室" class="office-facilities-img">
        <h3 class="office-facilities-title">会議室</h3>
        <p class="coworking-rental-description">3名ほどで使える小さな会議室です。オンライン会議にもおすすめです。</p>
        <p class="coworking-facilities-price"><a href="/meeting">詳しくはこちら</a></p>
        <p class="coworking-rental-plan">550円/1時間<br>
        毎日:10:00~19:00</p>
        <p class="coworking-rental-btn"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" target="_blank" rel="noopener">カレンダーで空きを確認</a></p>
        <p class="btn-primary"><a href="https://forms.gle/kjvYqWJYYTFjwaHW7" target="_blank" rel="noopener noreferrer">会議室利用申し込み</a></p>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-meetingroom2.jpg" alt="本池中会議室" class="office-facilities-img">
        <h3 class="office-facilities-title">本池中会議室</h3>
        <p class="coworking-rental-description">別館であるUNKNOWN KYOTO本池中の会議室です。畳敷きの和室です。</p>
        <p class="coworking-facilities-price"><a href="/meeting">詳しくはこちら</a></p>
        <p class="coworking-rental-plan">1,100円/1時間<br>
          毎日:10:00~19:00</p>
        <p class="coworking-rental-btn"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" target="_blank" rel="noopener">カレンダーで空きを確認</a></p>
        <p class="btn-primary"><a href="https://forms.gle/kjvYqWJYYTFjwaHW7" target="_blank" rel="noopener noreferrer">会議室利用申し込みは</a></p>

      </li>
    </ul>
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

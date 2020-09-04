<?php get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(function() {

  // instagram feed
  var accessToken = '10677467838.a39ffa6.79cee58175a245f994d8e86f61a27698'; //token
  $.getJSON('https://api.instagram.com/v1/users/self/media/recent/?access_token='+accessToken+'&callback=?',function (insta) {
    $.each(insta.data,function (photos,src) {
      if ( photos === 4 ) { return false; }
      $('<li><a href="'+src.link+'" target="_blank"><img src="'+src.images.standard_resolution.url+'"></a></li>').appendTo('#js-instafeed');
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
  <div class="page-header-hostel">
    <div class="page-header-inner">
      <h1 class="page-header-title"><a href="/restaurant"><span>UNKNOWN KYOTO</span>Hostel</a></h1>
      <p class="page-header-detail">
        CHECK IN 16:00 - 22:00 <br>
        CHECK OUT 11:00</p>
    </div>
  </div>
</div>

<div class="wrapper">
  <div class="page-about">
    <p class="page-about-description">
      築100年以上の元遊郭建築をベッドのお部屋に。<br>
      出来るだけ昔の姿を残しながら、使いやすいように改装しました。<br>
      コワーキングスペースを併設しており、宿泊のお客様は<br>
      チェックイン日の朝から、チェックアウト日の夜までご利用いただけます。<br>
      お食事やお酒を楽しめるレストランもございます。
    </p>
    <p class="page-about-description">
      長期割引も実施しております。<br>
      <span class="page-about-bold">3泊以上ご宿泊、宿泊料金の20%オフ<br>
      6泊以上ご宿泊、宿泊料金の40%オフ</span><br>
      暮らしているかのように京都に滞在してみませんか。<br>
    </p>
    <p class="btn-primary">
      <a href="https://www.beds24.com/book-unknownkyoto" target="_blink" rel="noopener">ご予約はこちら</a>
    </p>
  </div>
  <div class="hostel-room">
    <section class="hostel-room-inner">
      <div class="hostel-room-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel/room-single.jpg" alt="シングルルーム">
      </div>
      <div class="hostel-room-text">
        <h3 class="hostel-room-title"><span>シングルルーム</span>Single Room</h3>
        <ul class="hostel-room-equipment">
          <li>デスクライト</li>
          <li>Free wifi</li>
          <li>鏡</li>
          <li>ドライヤー</li>
          <li>タオル</li>
          <li>電源コンセント</li>
        </ul>
        <p class="hostel-room-price">7,500円〜</p>
      </div>
    </section>

    <section class="hostel-room-inner">
      <div class="hostel-room-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel/room-double.jpg" alt="ダブルルーム">
      </div>
      <div class="hostel-room-text">
        <h3 class="hostel-room-title"><span>ダブルルーム</span>Double Room</h3>
        <ul class="hostel-room-equipment">
          <li>デスクライト</li>
          <li>Free wifi</li>
          <li>鏡</li>
          <li>ドライヤー</li>
          <li>タオル</li>
          <li>電源コンセント</li>
        </ul>
        <p class="hostel-room-price">8,500円〜</p>
      </div>
    </section>
    <section class="hostel-room-inner">
      <div class="hostel-room-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel/room-twin.jpg" alt="ツインルーム">
      </div>
      <div class="hostel-room-text">
        <h3 class="hostel-room-title"><span>ツインルーム</span>Twin Room</h3>
        <ul class="hostel-room-equipment">
          <li>デスクライト</li>
          <li>Free wifi</li>
          <li>鏡</li>
          <li>ドライヤー</li>
          <li>タオル</li>
          <li>電源コンセント</li>
        </ul>
        <p class="hostel-room-price">9,000円〜</p>
      </div>
    </section>
    <section class="hostel-room-inner">
      <div class="hostel-room-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel/room-deluxe.jpg" alt="デラックスダブルルーム">
      </div>
      <div class="hostel-room-text">
        <h3 class="hostel-room-title"><span>デラックスツインルーム</span>Deluxe Twin Room</h3>
        <ul class="hostel-room-equipment">
          <li>洗面台</li>
          <li>デスクライト</li>
          <li>Free wifi</li>
          <li>鏡</li>
          <li>ドライヤー</li>
          <li>タオル</li>
          <li>電源コンセント</li>
        </ul>
        <p class="hostel-room-price">9,800円〜</p>
      </div>
    </section>
    <section class="hostel-room-inner">
      <div class="hostel-room-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel/dormitory1.jpg" alt="デラックスダブルルーム">
      </div>
      <div class="hostel-room-text">
        <h3 class="hostel-room-title"><span>男女混合ドミトリー</span>MIX Dormitory</h3>
        <ul class="hostel-room-equipment">
          <li>読書灯</li>
          <li>手鏡</li>
          <li>カーテン</li>
          <li>Free wifi</li>
          <li>電源コンセント</li>
        </ul>
        <p class="hostel-room-price">3,500円〜</p>
      </div>
    </section>
    <section class="hostel-room-inner">
      <div class="hostel-room-photo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel/dormitory2.jpg" alt="デラックスダブルルーム">
      </div>
      <div class="hostel-room-text">
        <h3 class="hostel-room-title"><span>女性専用ドミトリー</span>Female Only Dormitory</h3>
        <ul class="hostel-room-equipment">
          <li>読書灯</li>
          <li>手鏡</li>
          <li>カーテン</li>
          <li>Free wifi</li>
          <li>電源コンセント</li>
        </ul>
        <p class="hostel-room-price">4,000円〜</p>
      </div>
    </section>
  </div>
  <div class="hostel-plan">
    <h2 class="hostel-plan-title">Plan</h2>
    <p class="hostel-plan-descripiton">UNKNOWN KYOTOを楽しく利用できるプランを複数ご用意しています</p>
    <ul class="hostel-plan-content">
      <li>
        <div class="hostel-plan-content-img">
          <a href="https://unknown.kyoto/plan/bungo/"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel/plan/plan-bungo.jpg" alt="ホステルに籠もって仕事"></a>
        </div>
        <div class="hostel-plan-content-text">
          <h3 class="hostel-plan-content-title">文豪プラン</h3>
          <p class="hostel-plan-content-description">
            試験やレポート、仕事の資料作りなど、宿に籠もって作業を進めませんか。短期で集中したい時に。ランチ1食付きです。</p>
          <p class="hostel-plan-content-note">ドミトリーの宿泊＋ランチ1食<br>
            男女混合ドミトリー ¥4,000 / 女性専用ドミトリー ¥4,500</p>
          <p class="hostel-plan-content-link"><a href="https://unknown.kyoto/plan/bungo/">詳細・申し込みはこちら</a></p>
        </div>
      </li>
      <li>
        <div class="hostel-plan-content-img">
          <a href="https://unknown.kyoto/plan/reserve-dormitory/"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel/plan/plan-dormitory.jpg" alt="ドミトリーの一室"></a>
        </div>
        <div class="hostel-plan-content-text">
          <h3 class="hostel-plan-content-title">食事付きドミトリー貸し切りプラン</h3>
          <p class="hostel-plan-content-description">大人のお泊り会してみませんか？ 3人以上のご利用でドミトリーを貸し切ることができます。併設レストランの食事と飲み放題付きのプランです。</p>
          <p class="hostel-plan-content-note">食事＆飲み放題＋ドミトリー貸し切り<br>
            3名様〜6名様ご利用、6,000円/お一人様（税・宿泊税別）</p>
          <p class="hostel-plan-content-link"><a href="https://unknown.kyoto/plan/reserve-dormitory/">詳細・申し込みはこちら</a></p>
        </div>
      </li>
      <li>
        <div class="hostel-plan-content-img">
          <a href="https://unknown.kyoto/blog/%e3%83%9e%e3%83%b3%e3%82%b9%e3%83%aa%e3%83%bc%e5%85%a5%e5%b1%85%e8%80%85%e3%82%92%e8%bf%bd%e5%8a%a0%e5%8b%9f%e9%9b%86%e3%81%97%e3%81%be%e3%81%99%e3%80%82/"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel/plan/plan-monthly.jpg" alt="一番大きなお部屋です"></a>
        </div>
        <div class="hostel-plan-content-text">
          <h3 class="hostel-plan-content-title">マンスリープラン</h3>
          <p class="hostel-plan-content-description">京都の元遊郭建築に住んでみませんか。コワーキングが自由に使えるので、普通に仕事するのには困りません。レストランやキッチンもあります。</p>
          <p class="hostel-plan-content-note">
            ひと月以上からの長期滞在割引<br>
            ¥52,000/月 〜
          </p>
          <p class="hostel-plan-content-link"><a href="https://unknown.kyoto/blog/%e3%83%9e%e3%83%b3%e3%82%b9%e3%83%aa%e3%83%bc%e5%85%a5%e5%b1%85%e8%80%85%e3%82%92%e8%bf%bd%e5%8a%a0%e5%8b%9f%e9%9b%86%e3%81%97%e3%81%be%e3%81%99%e3%80%82/">詳細・申し込みはこちら</a></p>
        </div>
      </li>
      <li>
        <div class="hostel-plan-content-img">
          <a href="https://unknown.kyoto/plan/neochi/"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel/plan/plan-neochi.jpg" alt="タクシーと同じ値段でドミトリーの一室に泊まれます。"></a>
        </div>
        <div class="hostel-plan-content-text">
          <h3 class="hostel-plan-content-title">寝落ちプラン ※予約不可</h3>
          <p class="hostel-plan-content-description">レストランでたくさん食べて飲んだあとは、タクシーに乗るのと同じ値段でドミトリーに泊まれます。</p>
          <p class="hostel-plan-content-note">
            レストランでのお会計5,000円につき1名、<br>
            2,000円（消費税・宿泊税別）でドミトリー宿泊可
          </p>
          <p class="hostel-plan-content-link"><a href="https://unknown.kyoto/plan/neochi/">詳細はこちら</a></p>
        </div>
      </li>
    </ul>
  </div>
</div>


<?php get_footer(); ?>

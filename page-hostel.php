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
    遊郭の元客室をゆっくりくつろげるベッドのお部屋に。<br>もっと気軽に泊まれるドミトリータイプのお部屋も用意しています。
    </p>
    <p class="btn-primary">
      <a href="https://www.beds24.com/booking2.php?propid=101300" target="_blink" rel="noopener">ご予約はこちら</a>
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
        <p class="hostel-room-price">6,000円〜</p>
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
        <p class="hostel-room-price">7,000円〜</p>
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
        <p class="hostel-room-price">8,000円〜</p>
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
        <p class="hostel-room-price">9,000円〜</p>
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
  <div class="hostel-booking">
    <p class="btn-primary">
      <a href="https://www.beds24.com/booking2.php?propid=101300" target="_blink" rel="noopener">ご予約はこちら</a>
    </p>
  </div>
</div>


<?php get_footer(); ?>

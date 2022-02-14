<?php get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(function() {

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
<div class="wrapper">
<header class="meeting-header">
    <h1 class="meeting-title"><a href="/meeting">会議室</a></h1>
    <p class="meeting-desc">会議室は会員でなくても誰でも予約可能です。<br>予約ボタンから連絡ください。<br>カレンダーでは予約のある場合でも<br class="for-sp">対応可能な場合もございます。</p>
  </header>
<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本館会議室</h2>
    <p class="meeting-contents-desc">本館の小さな会議室です。1人でのビデオ会議や2,3名様程度の打ち合わせに最適です。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込550円/1時間<br>会員：無料（1日2時間まで）</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">月-土 10:00〜19:00</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">設備</h3>
      <p class="meeting-value-desc">女優ライト</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況カレンダーを大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/facilities-meetingroom.jpg" alt="本館会議室">
    <p class="btn-primary"><a href="https://forms.gle/6J7F7cMpVtWgtKzJA">本館会議室を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本池中会議室（伍の間）<span>おすすめ</span></h2>
    <p class="meeting-contents-desc">別館であるUNKNOWN KYOTO本池中の会議室です。4名様程度の打ち合わせに最適です。机と椅子が使いたい方におすすめです。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込1,100円/1時間<br>
        税込11,000円/丸一日貸し切り<br>
        会員：550円/1時間（毎月2時間まで無料）</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">月-土 10:00〜19:00（1日貸し切りの場合は〜22:00まで可能）</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">設備</h3>
      <p class="meeting-value-desc">女優ライト、USBマイク</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">広さ</h3>
      <p class="meeting-value-desc">四畳半（8.2㎡）</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況カレンダーを大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/meeting/room-5.jpg" alt="本池中会議室（小）">
    <p class="btn-primary"><a href="https://forms.gle/6J7F7cMpVtWgtKzJA">本池中会議室（小）を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本池中会議室（壱の間）</h2>
    <p class="meeting-contents-desc">別館であるUNKNOWN KYOTO本池中の会議室です。隣の部屋と繋げて最大15名様ほどの大人数での打ち合わせにも対応しています。畳に座布団でお座りいただきます。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込2,200円/1時間<br>税込16,500円/丸一日貸し切り</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">月-土 10:00〜19:00（1日貸し切りの場合は〜22:00まで可能）</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">設備</h3>
      <p class="meeting-value-desc">マイク、カメラ、ディスプレイ、ホワイトボード</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">広さ</h3>
      <p class="meeting-value-desc">六畳（10.94 ㎡）<br>隣の部屋と繋げた場合は十畳半（19.14 ㎡）</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=c_18847vmluptcmgarkvp359ludtrbi%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=c_18847vmluptcmgarkvp359ludtrbi%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況カレンダーを大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/meeting/room-1.jpg" alt="本池中会議室（大）">
    <p class="btn-primary"><a href="https://forms.gle/6J7F7cMpVtWgtKzJA">本池中会議室（大）を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">フリースペースイベント利用</h2>
    <p class="meeting-contents-desc">フリースペースでイベントが行えます。スピーカーとモニターが利用可能。３時間以上からご利用いただけます。（写真は2019年のイベントです）</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込7,700円/1時間</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">水金:18:00~22:00<br>
      土:10:00~22:00</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1885cn5hd6mo2jdjkhgei9r0kgas06gb74rjgd9i6gr3edpl6g%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1885cn5hd6mo2jdjkhgei9r0kgas06gb74rjgd9i6gr3edpl6g%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況カレンダーを大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/event.jpg" alt="本館でのイベント開催">
    <p class="btn-primary"><a href="https://forms.gle/VcJ5JaqLDGtDtuPE8" target="_blank">フリースペースを予約</a></p>
  </div>
</div>


</div><!-- wrapper -->
</div><!-- conatiner -->

<?php get_footer(); ?>

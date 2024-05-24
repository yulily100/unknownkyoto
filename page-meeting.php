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
    <h1 class="meeting-title"><a href="/meeting">会議室・レンタルスペース</a></h1>
    <p class="meeting-desc">会議室は会員でなくても誰でも予約可能です。<br>本館会議室はカレンダーから空き状況をご確認ください。<br>本池中会議室とイベントスペースの利用については<br class="for-sp">個別にお問い合わせください。</p>
  </header>
<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本館会議室</h2>
    <p class="meeting-contents-desc">本館の小さな会議室です。1人でのビデオ会議や2,3名様程度の打ち合わせに最適です。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込550円/1時間<br>会員：無料（1日2時間まで）<br>宿泊者：1日2時間無料</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">毎日 10:00〜19:00</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">設備</h3>
      <p class="meeting-value-desc">女優ライト、ディスプレイ</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況カレンダーを大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/meeting/honkan.jpg" alt="本館会議室">
    <p class="btn-primary"><a href="https://forms.gle/kjvYqWJYYTFjwaHW7">本館会議室を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本池中会議室</h2>
    <p class="meeting-contents-desc">別館であるUNKNOWN KYOTO本池中の会議室です。4〜6名様程度の打ち合わせに最適です。机と椅子がありますが、畳に座布団での利用も可能です。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込1,100円/1時間<br>
        税込11,000円/丸一日貸し切り</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">毎日 10:00〜19:00（1日貸し切りの場合は〜22:00まで可能）</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">設備</h3>
      <p class="meeting-value-desc">テレビ会議システム（モニター）、USBマイク、ホワイトボード</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">広さ</h3>
      <p class="meeting-value-desc">六畳間（11.8㎡）</p>
    </div>

    <p class="meeting-contents-desc">利用希望日の3日前までにお申し込みください</p>
    <p class="meeting-contents-desc">こちらからの予約確定メールの送信をもって、予約が確定いたします</p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/meeting/room-5.jpg" alt="本池中会議室（小）">
    <p class="btn-primary"><a href="https://forms.gle/kjvYqWJYYTFjwaHW7">本池中会議室を予約</a></p>
  </div>
</div>

<!-- 壱の間が会議室として使える時だけ出す
<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本池中会議室・大（壱の間）</h2>
    <p class="meeting-contents-desc">別館であるUNKNOWN KYOTO本池中の会議室です。隣の部屋と繋げて最大15名様ほどの大人数での打ち合わせにも対応しています。畳に座布団でお座りいただきます。企業様の合宿などにもおすすめです。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">税込2,200円/1時間<br>税込16,500円/丸一日貸し切り</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">毎日 10:00〜19:00（1日貸し切りの場合は〜22:00まで可能）</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">設備</h3>
      <p class="meeting-value-desc">テレビ会議システム、複数人数対応マイク、webカメラ、ディスプレイ、ホワイトボード</p>
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
    <p class="btn-primary"><a href="https://forms.gle/kjvYqWJYYTFjwaHW7">本池中会議室（大）を予約</a></p>
  </div>
</div>
-->


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
    <p class="meeting-contents-desc">利用希望日の10日前までにお申し込みください</p>
    <p class="meeting-contents-desc">こちらからの予約確定メールの送信をもって、予約が確定いたします</p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/coworking/event.jpg" alt="本館でのイベント開催">
    <p class="btn-primary"><a href="https://forms.gle/VcJ5JaqLDGtDtuPE8" target="_blank">フリースペースを予約</a></p>
  </div>
</div>


</div><!-- wrapper -->
</div><!-- conatiner -->

<?php get_footer(); ?>

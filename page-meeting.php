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
  <header class="meeting-header">
    <h1 class=""><a href="/hostel">会議室・撮影スタジオ</a></h1>
    <p>会議室 ・レンタルスペース / 撮影</p>
  </header>
</div>


<div class="wrapper">

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本館会議室</h2>
    <p class="meeting-contents-desc">本館の小さな会議室です。1人でのビデオ会議や2,3名様程度の打ち合わせに最適です。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">550円 / 1hour</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">毎日10:00〜19:00</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888eqjoh1j6chk9h6ehd9b1ve3co6gb6sp3acpj6os36chk6k%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況を大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/intro.jpg" alt="宿泊2階廊下">
    <p class="btn-primary"><a href="https://forms.gle/d1NDDFjwUiqp8n5c8">本館会議室を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本池中会議室（小）<span>おすすめ</span></h2>
    <p class="meeting-contents-desc">別館であるUNKNOWN KYOTO本池中の会議室です。畳敷きの和室です。1〜6名様程度の打ち合わせに最適です。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">1,100円 / 1hour<br>
        会員価格 550円 / 1hour</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">毎日10:00〜19:00</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況を大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/intro.jpg" alt="宿泊2階廊下">
    <p class="btn-primary"><a href="https://forms.gle/d1NDDFjwUiqp8n5c8">本池中会議室（小）を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">本池中会議室（大）</h2>
    <p class="meeting-contents-desc">別館であるUNKNOWN KYOTO本池中の会議室です。畳敷きの和室です。1〜6名様程度の打ち合わせに最適です。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">2,200円 / 1hour</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">毎日10:00〜19:00</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1888b9a18gqv4ggtnk34evr8m1btq6gb68p3gd9n6ko3ad9o6k%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況を大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/intro.jpg" alt="宿泊2階廊下">
    <p class="btn-primary"><a href="https://forms.gle/d1NDDFjwUiqp8n5c8">本池中会議室（大）を予約</a></p>
  </div>
</div>

<div class="meeting-contents">
  <div class="meeting-contents-text">
    <h2 class="meeting-contents-title">フリースペースイベント利用</h2>
    <p class="meeting-contents-desc">フリースペースでイベントが行えます。スピーカーとモニターが利用可能。３時間以上からご利用いただけます。</p>
    <div class="meeting-value">
      <h3 class="meeting-value-title">値段</h3>
      <p class="meeting-value-desc">7,700円 / 1hour</p>
    </div>
    <div class="meeting-value">
      <h3 class="meeting-value-title">時間</h3>
      <p class="meeting-value-desc">水金:18:00~22:00<br>
      土:10:00~22:00</p>
    </div>
    <iframe class="meeting-calendar" src="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1885cn5hd6mo2jdjkhgei9r0kgas06gb74rjgd9i6gr3edpl6g%40resource.calendar.google.com&ctz=Asia%2FTokyo" frameborder="0" height="400" title="本池中会議室（小）"></iframe>
    <p class="meeting-calendar-more"><a href="https://calendar.google.com/calendar/embed?src=unknown.kyoto_1885cn5hd6mo2jdjkhgei9r0kgas06gb74rjgd9i6gr3edpl6g%40resource.calendar.google.com&ctz=Asia%2FTokyo">空き状況を大きな画面で表示</a></p>
  </div>
  <div class="meeting-contents-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/intro.jpg" alt="宿泊2階廊下">
    <p class="btn-primary"><a href="https://forms.gle/VcJ5JaqLDGtDtuPE8" target="_blank">フリースペースを予約</a></p>
  </div>
</div>


</div><!-- wrapper -->


<?php get_footer(); ?>

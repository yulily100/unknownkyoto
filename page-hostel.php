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
  <div class="hostel2-header">
    <h1 class="hostel2-header-title"><a href="/hostel">Hostel</a></h1>
    <!-- <p class="hostel2-header-note">Go Toトラベルキャンペーン対応施設です</p> -->
  </div>
</div>

<div class="wrapper">


<div class="hostel2-intro">
  <div class="hostel2-intro-img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/intro.jpg" alt="宿泊2階廊下">
  </div>
  <div class="hostel2-intro-text">
    <h3 class="hostel2-intro-title">築100年以上の元遊郭建築を、<br>清潔なベッドのお部屋に。<br>コワーキングが無料で利用可能です。</h3>
    <p class="hostel2-intro-description">
    出来るだけ昔の姿を残しながら、使いやすく改装しました。<br>
    ホテルのような重厚な設備はございませんが、<br class="for-pc">
    古い木造建物ならではの息づかいをお楽しみください。</p>
    <p class="hostel2-intro-description">宿泊のお客様はチェックインの朝からチェックアウトの夜まで<br class="for-pc">追加料金なしでコワーキングがご利用いただけます。<br>また、会議室が1日2時間まで利用可能です。</p>
    <div class="hostel2-intro-footer">
      <div class="hostel2-intro-open">
        <h3 class="hostel2-intro-open-title">チェックイン</h3>
        <p class="hostel2-intro-open-time">16:00 〜 22:00</p>
      </div>
      <div class="hostel2-intro-open">
        <h3 class="hostel2-intro-open-title">チェックアウト</h3>
        <p class="hostel2-intro-open-time">〜 11:00</p>
      </div>
    </div>
  </div>
</div>


<ul class="hostel2-menu">
  <li><a href="#hostel2-room">お部屋</a></li>
  <li><a href="#hostel2-facilities">設備・アメニティ</a></li>
  <li><a href="#hostel2-plan">プラン</a></li>
</ul>

<div class="hostel2-room" id="hostel2-room">
<section class="hostel2-room-private">
    <div class="hostel2-room-private-text">
      <h3 class="hostel2-room-title"><span>Relux Single Room</span>リラックスシングルルーム(定員1名)</h3>
      <p class="hostel2-room-description">デスクのついたゆったりとしたシングルルームです。中・長期の滞在や、お部屋でもテレビ会議などをしたい方に特におすすめです。</p>
      <ul class="hostel2-room-equipment">
        <li>デスク</li>
        <li>スタンドライト</li>
        <li>バスタオル</li>
        <li>フェイスタオル</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>掛け鏡</li>
        <li>ドライヤー</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-price">
        1泊　9,350円<br>
        3泊　25,245円 (1泊8,415円)<br>
        6泊　39,780円 (1泊6,630円)</p>
      <p class="hostel-room-note">消費税込み、宿泊税一人200円/一泊</p>
        <!-- <span class="line-through">7,500円</span>
        <br>GO TOトラベル価格で<br>4,880円 + 地域共通クーポン1000円分配布 -->
    </div>
    <div class="hostel2-room-private-img">
      <ul class="hostel2-gallery">
        <li id="relux1" class="is-active hostel2-gallery-img relux"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux1.jpg" alt="リラックスシングルルーム"></li>
        <li id="relux2" class="hostel2-gallery-img relux"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux2.jpg" alt="リラックスシングルルーム"></li>
        <li id="relux3" class="hostel2-gallery-img relux"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux3.jpg" alt="リラックスシングルルーム"></li>
        <li id="relux4" class="hostel2-gallery-img relux"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux4.jpg" alt="リラックスシングルルーム"></li>
      </ul>
      <ul class="hostel2-gallery-thumb">
        <li><button type="button" id="relux1-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux1-thumb.jpg" alt="リラックスシングルルーム"></button></li>
        <li><button type="button" id="relux2-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux2-thumb.jpg" alt="リラックスシングルルーム"></button></li>
        <li><button type="button" id="relux3-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux3-thumb.jpg" alt="リラックスシングルルーム"></button></li>
        <li><button type="button" id="relux4-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-relux4-thumb.jpg" alt="リラックスシングルルーム"></button></li>
      </ul>
    </div>
  </section>
  <section class="hostel2-room-private">
    <div class="hostel2-room-private-text">
      <h3 class="hostel2-room-title"><span>Single Room</span>シングルルーム(定員1名)</h3>
      <p class="hostel2-room-description">床の間のある和風な趣を残したシングルルームです。障子は完全遮光ではありませんが、柔らかな日差しとともに朝を迎えることができます。<br>※こちらのお部屋にはデスクは付きません。</p>
      <ul class="hostel2-room-equipment">
        <li>スタンドライト</li>
        <li>バスタオル</li>
        <li>フェイスタオル</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>掛け鏡</li>
        <li>ドライヤー</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-price">
        1泊　8,250円<br>
        3泊　22,275円 (1泊7,425円)<br>
        6泊　35,100円 (1泊5,850円)</p>
      <p class="hostel-room-note">消費税込み、宿泊税一人200円/一泊</p>
        <!-- <span class="line-through">7,500円</span>
        <br>GO TOトラベル価格で<br>4,880円 + 地域共通クーポン1000円分配布 -->
    </div>
    <div class="hostel2-room-private-img">
      <ul class="hostel2-gallery">
        <li id="single1" class="is-active hostel2-gallery-img single"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-single1.jpg" alt="シングルルーム"></li>
        <li id="single2" class="hostel2-gallery-img single"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-single2.jpg" alt="シングルルーム"></li>
        
      </ul>
      <ul class="hostel2-gallery-thumb">
        <li><button type="button" id="single1-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-single1-thumb.jpg" alt="シングルルーム"></button></li>
        <li><button type="button" id="single2-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-single2-thumb.jpg" alt="シングルルーム"></button></li>
      </ul>
    </div>
  </section>
  <section class="hostel2-room-private">
    <div class="hostel2-room-private-text">
      <h3 class="hostel2-room-title"><span>Double Room</span>ワイドベッドルーム(定員２名)</h3>
      <p class="hostel2-room-description">デスクのついた、和風な趣を残すダブルベッドのお部屋です。窓と部屋の間は障子で仕切られているため、完全遮光のお部屋ではありませんが優しい光を感じられるお部屋です。</p>
      <ul class="hostel2-room-equipment">
        <li>デスク</li>
        <li>スタンドライト</li>
        <li>バスタオル</li>
        <li>フェイスタオル</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>掛け鏡</li>
        <li>ドライヤー</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-price">
        1泊　9,350円 (2名でも同価格)<br>
        3泊　25,245円 (1泊8,415円)<br>
        6泊　39,780円 (1泊6,630円)</p>
        <!-- <span class="line-through">8,500円</span>
        <br>GO TOトラベル価格で<br>5,530円 + 地域共通クーポン1000円分配布 -->
      </p>
      <p class="hostel-room-note">消費税込み、宿泊税一人200円/一泊</p>
    </div>
    <div class="hostel2-room-private-img">
      <ul class="hostel2-gallery">
        <li id="double1" class="is-active hostel2-gallery-img double"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-double1.jpg" alt="ダブルルーム"></li>
        <li id="double2" class="hostel2-gallery-img double"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-double2.jpg" alt="ダブルルーム"></li>
        <li id="double3" class="hostel2-gallery-img double"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-double3.jpg" alt="ダブルルーム"></li>
      </ul>
      <ul class="hostel2-gallery-thumb">
        <li><button type="button" id="double1-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-double1-thumb.jpg" alt="ダブルルーム"></button></li>
        <li><button type="button" id="double2-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-double2-thumb.jpg" alt="ダブルルーム"></button></li>
        <li><button type="button" id="double3-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-double3-thumb.jpg" alt="ダブルルーム"></button></li>
      </ul>
    </div>
  </section>
  <section class="hostel2-room-private">
    <div class="hostel2-room-private-text">
      <h3 class="hostel2-room-title"><span>Twin Room</span>ツインルーム(定員2名)</h3>
      <p class="hostel2-room-description">洋館のような趣のある、シングルベッドが２台置かれたツインルームです。天井が高く天窓がつきます。<br>※こちらのお部屋にはデスクは付きません。
      </p>
      <ul class="hostel2-room-equipment">
        <li>スタンドライト</li>
        <li>バスタオル</li>
        <li>フェイスタオル</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>掛け鏡</li>
        <li>ドライヤー</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-price">
        1泊　9,900円 (2名でも同価格)<br>
        3泊　26,730円 (1泊8,910円)<br>
        6泊　42,120円 (1泊7,020円)</p>
        <!-- <span class="line-through">9,000円</span>
        <br>GO TOトラベル価格で<br>5,850円 + 地域共通クーポン1000円分配布 -->
      </p>
      <p class="hostel-room-note">消費税込み、宿泊税一人200円/一泊</p>
    </div>
    <div class="hostel2-room-private-img">
      <ul class="hostel2-gallery">
        <li id="twin1" class="is-active hostel2-gallery-img twin"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin1.jpg" alt="ツインルーム"></li>
        <li id="twin2" class="hostel2-gallery-img twin"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin2.jpg" alt="ツインルーム"></li>
        <li id="twin3" class="hostel2-gallery-img twin"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin3.jpg" alt="ツインルーム"></li>
        <li id="twin4" class="hostel2-gallery-img twin"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin4.jpg" alt="ツインルーム"></li>
        <li id="twin5" class="hostel2-gallery-img twin"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin5.jpg" alt="ツインルーム"></li>
      </ul>
      <ul class="hostel2-gallery-thumb">
        <li><button type="button" id="twin1-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin1-thumb.jpg" alt="ツインルーム"></button></li>
        <li><button type="button" id="twin2-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin2-thumb.jpg" alt="ツインルーム"></button></li>
        <li><button type="button" id="twin3-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin3-thumb.jpg" alt="ツインルーム"></button></li>
        <li><button type="button" id="twin4-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin4-thumb.jpg" alt="ツインルーム"></button></li>
        <li><button type="button" id="twin5-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-twin5-thumb.jpg" alt="ツインルーム"></button></li>
      </ul>
    </div>
  </section>
  <section class="hostel2-room-private">
    <div class="hostel2-room-private-text">
      <h3 class="hostel2-room-title"><span>Deluxe Twin Room</span>デラックスツインルーム(定員2名)</h3>
      <p class="hostel2-room-description">洗面台付きの広めのツインルームです。洗面台の他にデスクもあり、お部屋でちょっと仕事をしたいという時にもぴったりです。東西の２面に窓があるのでとても明るく気持ちの良いお部屋です。</p>
      <ul class="hostel2-room-equipment">
        <li>スタンドライト</li>
        <li>バスタオル</li>
        <li>フェイスタオル</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>掛け鏡</li>
        <li>ドライヤー</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>プライベート洗面台</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-price">
        1泊　11,550円 (2名でも同価格)<br>
        3泊　31,185円 (1泊10,395円)<br>
        6泊　49,140円 (1泊8,190円)</p>
        <!-- <span class="line-through">10,500円</span>
        <br>GO TOトラベル価格で<br>6,830円 + 地域共通クーポン2000円分配布 -->
      </p>
      <p class="hostel-room-note">消費税込み、宿泊税一人200円/一泊</p>
    </div>
    <div class="hostel2-room-private-img">
      <ul class="hostel2-gallery">
        <li id="deluxe1" class="is-active hostel2-gallery-img deluxe"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe1.jpg" alt="デラックスツインルーム"></li>
        <li id="deluxe2" class="hostel2-gallery-img deluxe"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe2.jpg" alt="デラックスツインルーム"></li>
        <li id="deluxe3" class="hostel2-gallery-img deluxe"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe3.jpg" alt="デラックスツインルーム"></li>
        <li id="deluxe4" class="hostel2-gallery-img deluxe"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe4.jpg" alt="デラックスツインルーム"></li>
      </ul>
      <ul class="hostel2-gallery-thumb">
        <li><button type="button" id="deluxe1-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe1-thumb.jpg" alt="デラックスツインルーム"></button></li>
        <li><button type="button" id="deluxe2-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe2-thumb.jpg" alt="デラックスツインルーム"></button></li>
        <li><button type="button" id="deluxe3-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe3-thumb.jpg" alt="デラックスツインルーム"></button></li>
        <li><button type="button" id="deluxe4-thumb"><img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/room-deluxe4-thumb.jpg" alt="デラックスツインルーム"></button></li>
      </ul>
    </div>
  </section>

  <div class="hostel2-room-dormitory">
    <div class="hostel2-room-dormitory-contents">
      <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/dormitory1.jpg" alt="男女混合ドミトリー">
      <h3 class="hostel2-room-title"><span>MIX Dormitory</span>ワーキングベッド</h3>
      <p class="hostel2-room-description">男女混合のドミトリールーム（二段ベッド相部屋）です。<br>各ベッドにはカウンターテーブルが付き、通常のベッドよりもゆったりとした空間になっています。</p>
      <ul class="hostel2-room-equipment">
        <li>読書灯</li>
        <li>置き鏡</li>
        <li>ドライヤー</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-note">タオルはこちらのお部屋にはついておりません。ご持参いただくか、レンタルをご用意しておりますのでご利用ください。</p>
      <p class="hostel2-room-price">
        消費税込み3,850円 ＋ 宿泊税一人200円/一泊
        <!-- <span class="line-through">3,500円</span>
        <br>GO TOトラベル価格で<br>2,280円 + 地域共通クーポン1000円分配布 -->
      </p>
    </div>
    <div class="hostel2-room-dormitory-contents">
      <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/dormitory2.jpg" alt="女性専用ドミトリー">
      <h3 class="hostel2-room-title"><span>Female Only Dormitory</span>女性専用ワーキングベッド</h3>
      <p class="hostel2-room-description">女性専用のドミトリールーム（二段ベッド相部屋）です。<br>各ベッドにはカウンターテーブルが付き、通常のベッドよりもゆったりとした空間になっています。</p>
      <ul class="hostel2-room-equipment">
        <li>読書灯</li>
        <li>置き鏡</li>
        <li>ドライヤー</li>
        <li>共同シャワー</li>
        <li>共同トイレ</li>
      </ul>
      <ul class="hostel2-room-equipment">
        <li>コワーキング無料</li>
        <li>会議室2時間無料</li>
      </ul>
      <p class="hostel2-room-note">タオルはこちらのお部屋にはついておりません。ご持参いただくか、レンタルをご用意しておりますのでご利用ください。</p>
      <p class="hostel2-room-price">
        消費税込み4,400円 ＋ 宿泊税一人200円/一泊
        <!-- <span class="line-through">4,000円</span>
        <br>GO TOトラベル価格で<br>2,600円 + 地域共通クーポン1000円分配布 -->
      </p>
    </div>
  </div>
  <div class="hostel2-longterm">
    <h3 class="hostel2-longterm-title">泊まるほどお得に</h3>
    <p class="hostel2-longterm-description">3泊以上ご宿泊で宿泊料金の20%オフいたします。<br>
      6泊以上ではウィークリープラン適用でさらにお安くなります。<br>
      1ヶ月以上から住むマンスリープランもございます。</p>
    <p class="hostel2-longterm-link"><a href="#hostel2-plan">プランについてはこちら</a></p>
  </div>

</div>
</div> <!-- wrapper -->

<div class="hostel2-facilities" id="hostel2-facilities">
  <h2 class="hostel2-section-title"><span>施設・設備</span>Facilities</h2>
  <div class="hostel2-facilities-contents">
    <div class="hostel2-facilities-contents-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/restaurant.jpg" alt="レストランがございます">
    </div>

    <div class="hostel2-facilities-contents-text">
      <div class="hostel2-facilities-contents-right">
        <h3 class="hostel2-facilities-title"><span>レストラン</span>Restaurant</h3>
        <p class="hostel2-facilities-contents-description">元遊郭建築をリノベーションした店内で、昼間はお腹いっぱい食べられる定食や丼ものを、夜は本格的なイタリアンとお酒をお楽しみください。</p>
        <p class="hostel2-facilities-contents-link"><a href="/restaurant">詳しくはこちら</a></p>
      </div>
    </div>
  </div>
  <div class="hostel2-facilities-contents reverse">
    <div class="hostel2-facilities-contents-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/coworking.jpg" alt="">
    </div>

    <div class="hostel2-facilities-contents-text">
      <div class="hostel2-facilities-contents-left">
        <h3 class="hostel2-facilities-title"><span>コワーキング</span>Coworking</h3>
        <p class="hostel2-facilities-contents-description">宿泊のお客様はチェックイン日の朝から、チェックアウト日の夜まで、追加料金なしでコワーキングスペースがご利用いただけます。</p>
        <p class="hostel2-facilities-contents-link"><a href="/coworking">詳しくはこちら</a></p>
      </div>
    </div>
  </div>

  <div class="wrapper">
    <div class="hostel2-facilities-secondary">
      <div class="hostel2-facilities-secondary-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/facilities-kitchen.jpg" alt="">
        <h4 class="hostel2-facilities-secondary-contents-title">キッチン</h4>
        <p class="hostel2-facilities-secondary-contents-description">お部屋に備え付けのポットやお水はございませんが、必要なときにはこちらをお使いください。</p>
        <p class="hostel2-facilities-secondary-contents-description">電子レンジ / 冷蔵庫 / 電気湯沸かし器 / 浄水器 / コンロ / 炊飯器</p>
      </div>
      <div class="hostel2-facilities-secondary-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/facilities-sanitary.jpg" alt="">
        <h4 class="hostel2-facilities-secondary-contents-title">サニタリー</h4>
        <p class="hostel2-facilities-secondary-contents-description">洗面台・トイレ・シャワーが共用になっております。デラックスツインルームにのみ専用の洗面台がございます。</p>
        <p class="hostel2-facilities-secondary-contents-description">シャンプー・リンス / ドライヤー</p>
      </div>
      <div class="hostel2-facilities-secondary-contents">
        <img src="<?php echo get_template_directory_uri(); ?>/img/hostel2/facilities-umeyu.jpg" alt="">
        <h4 class="hostel2-facilities-secondary-contents-title">銭湯「サウナの梅湯」</h4>
        <p class="hostel2-facilities-secondary-contents-description">UNKNOWN KYOTOより徒歩3分の場所にある天然地下水薪沸かしの銭湯。若いスタッフも多く、初心者にもやさしい銭湯です。</p>
      </div>
    </div>
    <div class="hostel2-amenities">
      <h3 class="hostel2-amenities-title"><span>アメニティ</span>Amenity</h3>
      <ul class="hostel2-amenities-contents">
        <li>スリッパ<span>110円</span></li>
        <li>耳栓<span>110円</span></li>
        <li>カミソリ<span>55円</span></li>
        <li>歯ブラシ<span>55円</span></li>
        <li>レンタルバスタオル<span>220円</span></li>
        <li>レンタルフェイスタオル<span>165円</span></li>
      </ul>
    </div>
  </div>
</div>

<div class="wrapper">
<div class="hostel2-plan" id="hostel2-plan">
  <h2 class="hostel2-section-title"><span>プラン</span>Plan</h2>
  <ul class="hostel2-plan-contents">
    <?php
      $args = array(
        'posts_per_page' => 4,
        'post_type' => 'plan',
        'order' => 'DESC',
      );
      $planList = new WP_Query($args);
      if ( $planList->have_posts() ) :
        while($planList->have_posts()): $planList->the_post();
    ?>
    <li>
      <p class="top-plan-intro"><?php echo get_post_meta($post->ID,'intro',true); ?></p>
      <p class="top-plan-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail');?></a></p>
      <h3 class="top-plan-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    </li>
    <?php endwhile;endif; ?>
  </ul>
  <p class="section-link"><a href="/plan">Read more</a></p>
</div>


</div>


<?php get_footer(); ?>

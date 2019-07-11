<?php get_header(); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
$(function() {

  // instagram feed
  var accessToken = '10677467838.a39ffa6.79cee58175a245f994d8e86f61a27698'; //token
  $.getJSON('https://api.instagram.com/v1/users/self/media/recent/?access_token='+accessToken+'&callback=?',function (insta) {
    $.each(insta.data,function (photos,src) {
      if ( photos === 7 ) { return false; }
      $('<li><a href="'+src.link+'" target="_blank"><img src="'+src.images.standard_resolution.url+'"></a></li>').appendTo('#js-instafeed');
    });
  });

  var $fadeIn = $('.js-fadein');

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

<div class="top-main">
  <div>
    <h1 class="top-main-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/top-logo.svg" alt="UNKNOWN KYOTO"></h1>
    <p class="top-main-description">Hostel, Dining, Co-working</p>
    <p class="top-main-open"><img src="<?php echo get_template_directory_uri(); ?>/img/en/header-open.png" alt="2019秋OPEN予定"></p>
  </div>

  <p class="top-main-funding"><a href="#funding">Crowd Funding</a></p>

  <div class="top-main-image">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/05.jpg" alt="UNKNOWN KYOTO" class="top-image5">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/04.jpg" alt="UNKNOWN KYOTO" class="top-image4">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/03.jpg" alt="UNKNOWN KYOTO" class="top-image3">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/02.jpg" alt="UNKNOWN KYOTO" class="top-image2">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top-image/01.jpg" alt="UNKNOWN KYOTO" class="top-image1">
  </div>
</div>

<div class="top-wrapper">
  <section class="top-about">
    <div class="top-about-intro js-fadein">
      <h2 class="top-about-title"><img src="<?php echo get_template_directory_uri() ?>/img/top-about-title.svg" alt="UNKNOWN KYOTO"></h2>
      <p class="top-about-description">
        The highly anticipated Project “UNKNOWN KYOTO” is<br class="for-pc">scheduled to open in the fall of 2019.</p>
      <p class="top-about-description">Come stay, dine and work at<br class="for-pc">“UNKNOWN KYOTO” and enjoy Kyoto life to the fullest!</p>
      <div class="top-about-img">
        <img src="<?php echo get_template_directory_uri() ?>/img/top-about.png" alt="元遊郭建築">
      </div>
    </div>
  </section>

  <div class="top-contents">
    <section class="top-architecture">
      <p class="section-description">The area Gojo Rakuen is home to Kyoto’s iconic narrow alleys, <br class="for-pc">traditional architectural structures and the famous Kamogawa and Takasegawa River.<br>Within footsteps from these areas, <br class="for-pc">you will find the astonishingly renovated hostel “UNKNOWN KYOTO” which will open this fall.</p>
      <p class="section-description">Combining two neighboring Machiya houses that were built more than a hundred years ago, <br class="for-pc">this structure was given new life as a co-living space for guests to enjoy.</p>

      <ul class="top-architecture-interior js-fadein">
        <li class="big"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/arch-01.jpg" alt=""></li>
        <li class="small"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/arch-02.jpg" alt=""></li>
      </ul>

      <p class="top-architecture-description">With neighboring buildings dating as far back to the Meiji Era,<br>experience Kyoto’s rich history and tradition with a modern twist.</p>

      <div class="js-fadein">
        <ul class="top-architecture-street">
          <li class="small"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/02.jpg" alt=""></li>
          <li class="big"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/01.jpg" alt=""></li>
        </ul>
        <ul class="top-architecture-street">
          <li class="big"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/04.jpg" alt=""></li>
          <li class="small"><img src="<?php echo get_template_directory_uri(); ?>/img/photo/03.jpg" alt=""></li>
        </ul>
      </div>

    </section>

    <section class="top-coliving">
      <h2 class="section-title">Enjoy Lodging, Dining and Coworking<br>at UNKNOWN KYOTO</h2>
      <p class="section-description">Come experience all of what UNKNOWN KYOTO has to offer.<br>The newly renovated hostel opening in the fall of 2019 will have a dining option<br class="for-pc">along with a coworking space for guests to enjoy.</p>
      <ul class="top-coliving-list">
        <li>
          <div class="top-coliving-inner">
            <h3>Lodging</h3>
            <p class="top-coliving-description">Relax in the comfort of one of Japan’s original structures. A building filled with rich history and tradition. UNKNOWN KYOTO also offers larger rooms to accommodate our valued guests.</p>
          </div>
        </li>
        <li>
          <div class="top-coliving-inner">
            <h3>Dining</h3>
            <p class="top-coliving-description">Whether you’re looking for a quick bite or a place to have a relaxing meal, UNKNOWN KYOTO offers an excellent dining option. In the evening, guests can have a good time at the open dining bar. Non-hostel guest are also welcome!</p>
          </div>
        </li>
        <li>
          <div class="top-coliving-inner">
            <h3>Coworking</h3>
            <p class="top-coliving-description">Fully equipped with Wi-Fi and power outlets, UNKNOWN KYOTO provides a comfortable place to get work done while on the road.</p>
          </div>
        </li>
      </ul>
    </section>

    <section class="top-funding js-funding" id="funding">
      <h3 class="top-funding-title">Crowd Funding</h3>
      <p class="top-funding-description">To achieve our goals in completing this project, crowdfunding is currently underway.<br>For more information on how to support this project, <br class="for-pc">please click the link below. We appreciate your continued support.</p>
      <p class="top-about-funding"><a href="https://hello-renovation.jp/renovations/3428" target="_blank" rel="noopener"><img src="<?php echo get_template_directory_uri() ?>/img/en/top-funding.svg" alt="crowd funding"></a></p>
    </section>
  </div>

  <section class="top-instafeed">
    <ul id="js-instafeed" class="top-instafeed-list">
      <h2 class="top-instafeed-title">
        <a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener"><span>@unknownkyoto</span></a>
      </h2>
    </ul>
    <p class="section-link"><a href="https://www.instagram.com/unknownkyoto/" target="_blank" rel="noopener">Follow on Instagram</a></p>
  </section>
  <section class="top-access">
    <h2 class="top-access-title">Within walking distance from Kawaramachi station and Kyoto station.</h2>

    <div class="top-access-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1959.2511057065767!2d135.76514277873042!3d34.9937988822923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x79557a17e1c2815d!2sUNKNOWN+KYOTO+GOJO-RAKUEN!5e0!3m2!1sja!2sjp!4v1553674826210" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </section>
</div>

<?php get_footer(); ?>

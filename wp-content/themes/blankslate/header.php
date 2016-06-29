<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<script src="https://use.typekit.net/qwb6xkj.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
  <script type-"text/javascript">
    $(document).ready(function(){
      // Carousel
      $('.carousel').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
        prevArrow: '<div class="prev-slide"><img src="/wp-content/themes/blankslate/images/carousel-arrow-left.svg"/></div>',
        nextArrow: '<div class="next-slide"><img src="/wp-content/themes/blankslate/images/carousel-arrow-right.svg"/></div>',
      });
    });
</script>
<script type-"text/javascript">
  $(document).ready(function(){
    $('.sliding-panel-button,.sliding-panel-fade-screen,.sliding-panel-close').on('click touchstart',function (e) {
      $('.sliding-panel-content,.sliding-panel-fade-screen, .sliding-panel-button').toggleClass('is-visible');
      e.preventDefault();
    });
  });
</script>
<script type-"text/javascript">
  $(function() {
      //caches a jQuery object containing the header element
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();

          if (scroll >= 2) {
              $('#header').removeClass('top-header').addClass("scroll-header");
          } else {
              $('#header').removeClass("scroll-header").addClass('top-header');
          }
      });
  });
</script>
<script type-"text/javascript">
$(document).ready(function(){
  $("a.square-1").click(function() {
      var targetDiv = $(".square-row-1");
      $('html, body').animate({
          scrollTop: $(targetDiv).offset().top - 100
      }, 1000, 'easeOutExpo');
  });
  $("a.square-2").click(function() {
      var targetDiv = $(".square-row-2");
      $('html, body').animate({
          scrollTop: $(targetDiv).offset().top - 100
      }, 1000, 'easeOutExpo');
  });
  $("a.square-3").click(function() {
      var targetDiv = $(".square-row-3");
      $('html, body').animate({
          scrollTop: $(targetDiv).offset().top - 100
      }, 1000, 'easeOutExpo');
  });
});
</script>
<script type-"text/javascript">
  $(function() {
    var stickyTop = $('#home-anchors').offset().top - 54;
    var stickyBottom = $('#mobile-app').offset().top;
    $(window).on( 'scroll', function(){
      if ($(window).scrollTop() >= stickyTop && $(window).scrollTop() <= stickyBottom) {
        $('#home-anchors').css({position: "fixed", top: "54px", width: "100%"});
        $('#home-squares').css({margin: "54px 0 0 0"});
      }
      else {
        $('#home-anchors').css({position: "relative", top: "0px"});
        $('#home-squares').css({margin: "0"});
      }
    });
  });
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
  <header id="header" role="banner" class="top-header">
    <div id="desktop-nav">
      <a href=""class="signup">Sign up now!</a>
      <section id="branding">
        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
            <img src="/wp-content/themes/blankslate/images/svg/BBSS_logo_white.svg" class="logo"/>
          </a>
        <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; } ?>
      </section>
      <nav id="menu" role="navigation">
        <?php wp_nav_menu( array('theme_location' => 'main-menu')); ?>
      </nav>
      <div id="sub-menu">
        <ul>
          <li><a href="">Contact Us</a></li>
          <li><a href="">Parent Portal</a></li>
        </ul>
      </div>
    </div>
    <div id="mobile-nav">
      <img src="/wp-content/themes/blankslate/images/svg/BBSS_logo_rgb.svg" class="logo"/>
      <div class="js-menu-trigger sliding-panel-button">
        <i class="fa fa-bars"></i>
        <i class="fa fa-close"></i>
      </div>
      <nav class="js-menu sliding-panel-content">
        <?php wp_nav_menu( array('theme_location' => 'main-menu')); ?>
        <ul>
          <li class="secondary-menu-item"><a href="">Contact Us</a></li>
          <li class="secondary-menu-item"><a href="">Parent Portal</a></li>
          <li class="signup"><a href="">Sign Up Now!</a></li>
        </ul>
      </nav>

      <div class="js-menu-screen sliding-panel-fade-screen"></div>
    </div>
  </header>
</div>
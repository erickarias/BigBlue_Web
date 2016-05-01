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
        prevArrow: '<div class="prev-slide"><</div>',
        nextArrow: '<div class="next-slide">></div>',
      });
    });
</script>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
  <header id="header" role="banner">
    <div id="signup">Sign up now!</div>
    <section id="branding">
      <?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; } ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
          <img src="wp-content/themes/blankslate/images/svg/BBSS_logo_white.svg" class="logo"/>
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
  </header>
</div>
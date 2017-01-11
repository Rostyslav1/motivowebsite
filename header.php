<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <?php wp_head(); ?>
  <title>Title</title>
  <meta name="description" content="">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <meta property="og:image" content="path/to/image.jpg">

  <style>
    header {
      opacity: 0;
    }
  </style>

  <!-- START Favicon -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url') ?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php echo get_bloginfo('template_url') ?>/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php echo get_bloginfo('template_url') ?>/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo get_bloginfo('template_url') ?>/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php echo get_bloginfo('template_url') ?>/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo get_bloginfo('template_url') ?>/img/favicon/mstile-310x310.png" />
    <meta name="theme-color" content="#ffffff">
    <!-- END Favicon -->
    <!-- <link rel="stylesheet" href="css/main.min.css"> -->

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000">

</head>
<body <?php //body_class(); ?>>

  <header class="header wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-5 col-xs-6">
          <?php $website_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>
          <a href="<?=$website_url?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/long_logo_white.svg" alt=""></a>
        </div>
        <div class="col-md-6">
          <nav class="mob-menu hidden-xs">
            <ul>
              <li class="wow fadeIn" data-wow-delay="0.9s" ><a href="<?=$website_url?>">Home</a></li>
              <li class="wow fadeIn" data-wow-delay="0.8s" ><a href="<?=$website_url.'#about-services'?>">about</a></li>
              <li class="wow fadeIn" data-wow-delay="0.7s" ><a href="<?=$website_url.'#our-services'?>">services</a></li>
              <li class="wow fadeIn" data-wow-delay="0.6s" ><a href="<?=$website_url.'#multiblog'?>">motiblog</a></li>
              <li class="wow fadeIn" data-wow-delay="0.5s" ><a href="<?=$website_url.'#case-study'?>">case study</a></li>
              <li class="wow fadeIn" data-wow-delay="0.4s" ><a href="<?=$website_url.'#contact'?>">contact</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-xs-3 col-xs-offset-3 hidden-sm hidden-md hidden-lg">
          <div id="nav-icon4">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </div>
    </div>
  </header>
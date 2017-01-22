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
<body id="top" <?php //body_class(); ?>>
  <?php if(!is_front_page()) echo '<div class="site-wrapper page">';?>
  <header class="header wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
    <div class="container">
      <div class="row">
        <?php //$website_url = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];?>
        <div class="col-md-5 col-xs-6 col-sm-3">
          <a class="logo" href="<?=get_home_url()?>"><img src="<?php echo get_bloginfo('template_url') ?>/img/long_logo_white.svg" alt=""></a>
        </div>
        <div class="col-md-7 col-sm-9 header-menu">
          <nav class="internal-page mob-menu hidden-xs">
            <ul>
              <?php if(is_front_page()): ?> 
              <li class="wow fadeIn" data-wow-delay="0.9s" ><a href="<?=get_home_url().'#top'?>">Home</a></li>
              <li class="wow fadeIn" data-wow-delay="0.8s" ><a href="<?=get_home_url().'#about-services'?>">about</a></li>
              <li class="wow fadeIn" data-wow-delay="0.7s" ><a href="<?=get_home_url().'#our-services'?>">services</a></li>
              <li class="wow fadeIn" data-wow-delay="0.6s" ><a href="<?=get_home_url().'#multiblog'?>">motiblog</a></li>
              <li class="wow fadeIn" data-wow-delay="0.5s" ><a href="<?=get_home_url().'#case-study'?>">case study</a></li>
              <li class="wow fadeIn" data-wow-delay="0.4s" ><a href="<?=get_home_url().'#contact'?>">contact</a></li>
              <?php else: ?>
              <li><a href="<?=get_home_url()?>">Home</a></li>
              <li><a href="/about">about</a></li>
              <li><a href="/services">services</a></li>
              <li class="parent-toggle_menu">
                <a href="/posts">motiblog</a>
                <ul class="toggle_menu">
                  <li>
                    <ul>
                      <?php $items = get_categories(); if($items){ ?>
                      <?php foreach($items as $item): ?>
                        <li>
                          <a href="<?=get_home_url().'/category/'.strtolower($item->name)?>">
                          <i class="fa fa-angle-right" aria-hidden="true"></i><?=$item->name?></a>
                        </li>
                      <?php endforeach; }?>
                      <!-- <li>
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Tesl1_1</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> TestUrl1sdd_2</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testrl1_3</a>
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> Testrl1_4</a>
                      </li> -->
                    </ul>
                  </li>
                  <?php 
                  $args = array('numberposts' => 3, 'post_type' => 'post');
                  // $latest_posts = get_posts( $args ); 
                  $latest_posts = new WP_Query( $args );
                  // foreach($latest_posts as $post):
                  while($latest_posts->have_posts()): $latest_posts->the_post();?>
                    <li class="menu-post">
                      <a href="<?=$post->guid?>">
                        <div class="menu-post-item">
                          <div class="img">
                          <?php
                          $image = get_the_post_thumbnail($post->ID);
                          if($image == '')
                            $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
                          echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);?>
                        </div>
                        <p><?=$post->post_title?></p>
                        </div>
                      </a>
                    </li>
                  <?php endwhile; wp_reset_postdata()?>
<!-- 
                  <li class="menu-post">
                    <div class="menu-post-item">
                      <div class="img">
                      <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-1.png" alt="">
                      </div>
                      <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Labori osam repudiandae, vitae</p>
                    </div>
                  </li>
                  <li class="menu-post">
                  <div class="menu-post-item">
                      <div class="img">
                      <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-1.png" alt="">
                      </div>
                      <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit. Laboriosam repudiandae, vitae</p>
                    </div>
                  </li>
                  <li class="menu-post">
                  <div class="menu-post-item">
                      <div class="img">
                      <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-1.png" alt="">
                      </div>
                      <p>Lorem ipsum dolor sit amet, con sectetur adip isicing elit. Labor iosam repudian dae, vitae</p>
                    </div>
                  </li> -->
                </ul>
              </li>
              <li><a href="/casestudies">case study</a></li>
              <li><a href="/contact">contact</a></li>
              <?php endif; ?> 
              <li class="search_on_menu parent-toggle_menu hidden-xs">
                
                <img src="<?php echo get_bloginfo('template_url') ?>/img/search.png" alt="search_icon">

                <div class="search_menu">
                  <form role="search" method="get" id="searchform" class="searchform" action="/">
                    <div>
                      <input type="search" placeholder="Keyword" name="s" id="s">
                      <input type="submit" id="searchsubmit" value="Search" style="display: none">
                    </div>
                  </form>
                </div>

              </li>
              <li class="icon_share_on_menu hidden-xs">
                
                <img src="<?php echo get_bloginfo('template_url') ?>/img/icon_share.png" alt="share_icon">

                <div class="icon_share">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>

              </li>

            </ul>
          </nav>
        </div>
        <div class="mob-right col-xs-6 hidden-sm hidden-md hidden-lg">
          <ul class="mobil-search">
            <li class="search_on_menu parent-toggle_menu">

              <img src="<?php echo get_bloginfo('template_url') ?>/img/search.png" alt="">

              <div class="search_menu">
                <form role="search" method="get" id="searchform" class="searchform" action="/">
                  <div>
                    <input type="search" placeholder="Keyword" name="s" id="s">
                    <input type="submit" id="searchsubmit" value="Search" style="display: none">
                  </div>
                </form>
              </div>

            </li>
          </ul>
            <div id="nav-icon4">
              <span></span>
              <span></span>
              <span></span>
            </div>
        </div>
      </div>
    </div>
  </header>
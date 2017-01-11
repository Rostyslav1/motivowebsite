<?php get_header(); ?>
<div style="margin: 0 auto;">
  <section class="top-section parallax"
    style="background-image: 
    linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?=get_field('carousel_image')?>')">
    <div class="dot-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="top-carousel" class="top-section-content carousel slide" data-ride="carousel">
            <img class="wow fadeIn" data-wow-duration="1s" data-wow-delay="1.2s" src="<?php echo get_bloginfo('template_url') ?>/img/logo_white.svg" alt="">
            <div class="carousel-inner" role="listbox">
            
              <?php
              $count = 0; 
              while(have_rows('top_carousel')):the_row();?>
                <?php
                $count++; if($count == 1){echo '<div class="item active">';}else{echo '<div class="item">';} ?>
                  <h1 <?php if($count==1)echo 'class="wow fadeInDown" data-wow-delay="0.6s" data-wow-duration="1s"';?>><?=get_sub_field('ca_title')?></h1>
                  <p <?php if($count==1)echo 'class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s"';?>><?=get_sub_field('ca_content');?><div>
                    <?=get_sub_field('ca_extra');?>
                  </div></p>
                </div>
              <?php endwhile;?>
                
            </div> 
            </div>
            <div class="bot-section-content">
              <div class="top-arrows">
              <?php 
                for($i = 0; $i < $count; $i++){
                  $return = '<span data-target="#top-carousel" data-slide-to="'.$i.'" data-wow-delay="'.(($count-$i)*0.2).'s" data-wow-duration="1s" class="wow fadeInLeft ';
                  if($i == 0)
                    $return .= 'active';
                  $return .= '" ><i class="fa fa-arrow-circle-right" aria-hidden="true"></i></span>';
                  echo $return;
                }
              ?>
              </div>
              <div class="next-button">
                <a href="#motivo-main">
                  <div class="wow fadeIn" data-wow-delay="0.7s">Motivo Consulting</div>
                  <i class="fa fa-arrow-circle-down wow slideInDown" aria-hidden="true"></i>
                </a>
              </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="motivo-main" class="motivo-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img class="section-logo wow fadeIn" src="<?php echo get_bloginfo('template_url') ?>/img/long_logo_dark.svg" alt="">
          <p class="wow fadeIn"><?=get_field('main_content')?></p>
          <img class="wow zoomIn" src="<?php echo get_bloginfo('template_url') ?>/img/section-2-img.png" alt="">
          <?=get_field('main_extra')?>
        </div>
      </div>
    </div>
  </section>
  <section id="about" class="about-services parallax"
    style="background-image: 
    linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?=get_field('about_image')?>')">
    <div class="dot-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="wow fadeIn" data-wow-duration="1.5s"><?=get_field('about_title')?></h2>
          <p class="wow fadeIn" data-wow-delay="0.4s"><?=get_field('about_content')?></p>
          <?=get_field('about_extra')?>
        </div>
      </div>
    </div>
    </div>
  </section>
  <section id="our-services" class="our-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="wow fadeIn"><?=get_field('our_services_title')?></h2>
            <p class="wow fadeIn" data-wow-delay='0.3s'><?=get_field('our_services_content_text')?></p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="section-item-wrapper">
          <?php
              $count = 0; 
              while(have_rows('our_services_content')):the_row();?>
                <?php
                $count++; 
                ?>
                <div class="row">
                  <div class="col-md-6">
                  <div class="services-items-wrapper-left">
                  <?php if(($count % 2) == 1): ?>
                    <div class="services-items-number">
                      <div class="<?php if($count % 2 == 1){echo 'numberCircleDark';}else{echo 'numberCircleBlue';}?>"><?=$count?></div>
                    </div>
                    <div class="services-items services-items-text wow fadeIn">
                      <h4><?=get_sub_field('our_service_name')?></h4>
                      <p><?=get_sub_field('our_service_subcontent');?></p>
                    </div>
                  <?php else: ?>
                    <div class="services-items left-img clearfix wow fadeIn" data-wow-delay='0.4s'>      
                      <img src="<?=get_sub_field('our_service_image');?>" alt="">
                    </div>
                  <?php endif; ?>
                  </div></div>
                  <div class="col-md-6">
                  <div class="services-items-wrapper-right">
                  <?php if($count % 2): ?>
                    <div class="services-items right-img clearfix wow fadeIn" data-wow-delay='0.4s'>      
                      <img src="<?=get_sub_field('our_service_image');?>" alt="">
                    </div>
                  <?php else: ?>
                    <div class="services-items-number">
                      <div class="<?php if($count % 2 == 1){echo 'numberCircleDark';}else{echo 'numberCircleBlue';}?>"><?=$count?></div>
                    </div>
                    <div class="services-items services-items-text wow fadeIn">
                      <h4><?=get_sub_field('our_service_name')?></h4>
                      <p><?=get_sub_field('our_service_subcontent');?></p>
                    </div>
                  <?php endif; ?>
                  </div></div>
                </div>
              <?php endwhile;?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="button-wrapper wow fadeInUp">
            <?=get_field('our_services_content_extra')?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="consult-services">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="wow fadeIn"><?=get_field('services_title')?></h2>
            <p class="wow fadeIn" data-wow-delay='0.4s'><?=get_field('services_content_text')?></p>
          </div>
        </div>
      </div>
      <div class="row">
        <?php $service_count = 0;
          while(have_rows('services_content')):the_row();?>
          <?php $service_count++; ?>
        <?php endwhile;?>
        <?php
          $width = 0;
          if($service_count != 0){
          if($service_count <= 4){
            $width = 12/$service_count;
          } else {
            $width = [];
            $temp = $service_count;
            while($temp > 4){
              if($servce_count/2  > 4){
                $width[] = 4; $temp -= 4;
              } else {
                array_unshift($width, floor($temp/2), ceil($temp/2)); break;
              }
            }
          }

          $i = 0; $j = 0;
          
          while(have_rows('services_content')):the_row();?>
            <?php 
              if($service_count > 4){
                if($i < count($width)){                       
                    ?>
                    <div class="col-md-<?=(12/$width[$i])?> col-sm-6">
                      <div class="consult-services-item wow fadeInUp">
                        <div class="img-wrapper">
                          <img src="<?=get_sub_field('service_image')?>" />
                        </div>
                        <h5><?=get_sub_field('service_name')?></h5>
                        <div><p><?=get_sub_field('service_subcontent')?></p></div>
                      </div>
                    </div>
                    <?php
                  $j++;
                  if($j >= $width[$i]){
                    $i++; $j=0;
                  }
                }
              } else {
                ?>
                <div class="col-md-<?=12/$width?> col-sm-6">
                  <div class="consult-services-item wow fadeInUp">
                    <div class="img-wrapper">
                      <img src="<?=get_sub_field('service_image')?>" />
                    </div>
                    <h<?=$width;?>><?=get_sub_field('service_name')?></h<?=$width;?>>
                    <div><?=get_sub_field('service_subcontent')?></div>
                  </div>
                </div><?php
              }
            ?>
        <?php endwhile;?>
        <?php } ?>
        <!-- 
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp">
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-1.png" alt="">
            </div>
            <h5>Digital Transformation</h5>
            <p>We help you to transform your analogous business into web service solutions.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp">
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-2.png" alt="">
            </div>
            <h5>Team Management</h5>
            <p>We build the structure of your team providing and suggesting the right people for business..</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp">
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-3.png" alt="">
            </div>
            <h5>IT Recruitment</h5>
            <p>Focus in find the right people for developing your web services by mesuring your specs and price.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp" >
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-4.png" alt="">
            </div>
            <h5>Adv. Business</h5>
            <p>We provide business solutions to scale services online by research, analyze and metrics methods to increase your ROI.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp">
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-5.png" alt="">
            </div>
            <h5>Business Incubator</h5>
            <p>Provide business solutions for incubators in East Asia to offshore products and project with the same quality</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp">
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-6.png" alt="">
            </div>
            <h5>IM & HubSpot</h5>
            <p>How to create reliable contents by driving organic traffic to your website and using HubSpot COS and Features.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp" >
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-7.png" alt="">
            </div>
            <h5>Custom Service Dev.</h5>
            <p>Have an idea? Let us help you to scale that idea and provide custom business solutions from infrastructure to sales marketing and more.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="consult-services-item wow fadeInUp" >
            <div class="img-wrapper">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/consulting-services-10.png" alt="">
            </div>
            <h5>Financial Planning</h5>
            <p>How to use the right amount of your investment to create revenue, speed development and focus your service in the next 3,5 or 10 years.</p>
          </div>
        </div> -->
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="button-wrapper">
            <?=get_field('services_extra')?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="multiblog" class="multiblog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="wow fadeIn"><?=get_field('blog_title')?></h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <!-- BLOG POSTS-->
          <?php
          $args = array('numberposts' => 2);
          $latest_posts = get_posts( $args ); 
         
          foreach($latest_posts as $post): ?>
            <div class="big-blog-item">
              <a class="wow fadeIn" href="<?=$post->guid?>" class="thumbnail">
                <?php
                $image = get_the_post_thumbnail($post->ID);
                if($image == '')
                  $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
                echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);
                ?>
                <div class="categories">
                <?php foreach(get_the_category($post->ID) as $category): ?>
                  <span class="purp"><?=$category->name?></span>
                <?php endforeach;?>
                </div>
              </a>
              <h2 class="wow fadeInUp" data-wow-duration="2s"><a href="<?=$post->guid?>"><?=$post->post_title?></a></h2>
              <p class="wow fadeInUp"><?=$post->post_content?></p>
            </div>
          <?php endforeach; wp_reset_postdata()?>

          <!-- 
          <div class="big-blog-item ">
            <a class="wow fadeIn" href="#" class="thumbnail">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-1.png" alt="">
              <span class="purp">inbound</span>
            </a>
            <h2 class="wow fadeInUp" data-wow-duration="2s"><a href="">From boston to tokyo, hubspot release a new office in marunouchi</a></h2>
            <p class="wow fadeInUp">We made it easier to compose messages in HubSpot’s social media tool, and we’ve added in loads of new features, like more organizational tools for messaging and campaigns, easier customization of messages across multiple networks...</p>
          </div>

          <div class="big-blog-item ">
            <a class="wow fadeIn" href="#" class="thumbnail">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-2.png" alt="">
              <span class="purp">Motech</span>
            </a>
            <h2 class="wow fadeInUp"><a href="">From boston to tokyo, hubspot release a new office in marunouchi</a></h2>
            <p class="wow fadeInUp">We made it easier to compose messages in HubSpot’s social media tool, and we’ve added in loads of new features, like more organizational tools for messaging and campaigns, easier customization of messages across multiple networks...</p>
          </div> -->

        </div>


        <div class="col-md-4">
          <div class="section-motiblog-title wow fadeInRight">
            <h4>Popular Posts</h4>
          </div>

          <!-- POPULAR POSTS-->
          <?php 
          $popular_posts  = new WP_Query( array( 'posts_per_page' => 2, 'meta_key' => 'post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
          ?>
          <?php while($popular_posts->have_posts()) : $popular_posts->the_post(); ?>
            <div class="min-blog-item wow fadeInRight">
              <a href="<?=$post->guid?>" class="thumbnail">
                <?php
                $image = get_the_post_thumbnail($post->ID);
                if($image == '')
                  $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
                echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);
                ?>
                <div class="categories">
                <?php foreach(get_the_category($post->ID) as $category): ?>
                  <span class="purp"><?=$category->name?></span>
                <?php endforeach;?>
                </div>
              </a>
              <h2 data-wow-duration="2s"><a href="<?=$post->guid?>"><?=$post->post_title?></a></h2>
              <p><?=$post->post_content?></p>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>

          <?php foreach($popular_posts as $post):?>
            <!-- <div class="min-blog-item wow fadeInRight">
              <a href="<?=$post->guid?>" class="thumbnail">
                <?php
                $image = get_the_post_thumbnail($post->ID);
                if($image == '')
                  $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
                echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);
                ?>
                <div class="categories">
                <?php foreach(get_the_category($post->ID) as $category): ?>
                  <span class="purp"><?=$category->name?></span>
                <?php endforeach;?>
                </div>
              </a>
              <h2 data-wow-duration="2s"><a href="<?=$post->guid?>"><?=$post->post_title?></a></h2>
              <p><?=$post->post_content?></p>
            </div> -->
          <?php endforeach; wp_reset_postdata()?>
          <!-- 
          <div class="min-blog-item wow fadeInRight" data-wow-delay="0.2s">
            <a href="#" class="thumbnail">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-3.png" alt="">
              <span class="blue">Hubspot</span>
            </a>
            <h2><a href="">How to project manage your services and products</a></h2>
            <p>We made it easier to compose messages in HubSpot’s social media tool, and we’ve added in loads of new features...</p>
          </div>

          <div class="min-blog-item wow fadeInRight" data-wow-delay="0.4s">
            <a href="#" class="thumbnail">
              <img src="<?php echo get_bloginfo('template_url') ?>/img/multiblog-4.png" alt="">
              <span class="orange">LIFESTYLE</span>
            </a>
            <h2><a href="">How to project manage your services and products</a></h2>
            <p>We made it easier to compose messages in HubSpot’s social media tool, and we’ve added in loads of new features...</p>
          </div> 
          -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="button-wrapper wow fadeInUp">
            <?=get_field('blog_extra')?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="get_in_touch" class="about-services digital-section parallax" 
    style="background-image: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?=get_field('get_in_touch_image')?>')">
    <div class="dot-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="wow fadeIn"><?=get_field('get_in_touch_title')?></h2>
          <p class="wow fadeIn" data-wow-delay="0.4s"><?=get_field('get_in_touch_content')?></p>
          <?=get_field('get_in_touch_extra')?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="case-study">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2 class="wow fadeIn"><?=get_field('case_title')?></h2>
          </div>
        </div>
      </div>
      <div class="case_study_area">
        <?php
          $case_count = 0;
          while(have_rows('case_content')):
            the_row();
            $case_count++;
          endwhile;?>
        <?php
          $width = 0;
          if($case_count <= 4){
            $width = 12/$case_count;
          } else {
            $width = [];
            $temp = $case_count;
            while($temp > 4){
              if($servce_count/2  > 4){
                $width[] = 4; $temp -= 4;
              } else {
                array_unshift($width, floor($temp/2), ceil($temp/2)); break;
              }
            }
          }

          $i = 0; $j = 0;
          
          while(have_rows('case_content')):the_row();?>
            <?php 
              if($case_count > 4){
                if($i < count($width)){ 
                  
                  if($j < $width[$i]){ 
                    if($j==0)
                      echo '<div style="display: inline-flex;">';
                    ?>
                    <a href="<?=get_sub_field('case_link')?>" class="col-md-<?=12/$width[$i]?> col-sm-6 comp-item">
                      <div class="wow fadeIn" data-wow-delay="0.1s">
                      <div class="img-wrapper"><img class="case_study_img" src="<?=get_sub_field('case_image')?>" /></div>
                      <?=get_sub_field('case_name')?>
                      </div>
                    </a>
                    <?php
                    $j++;
                  } 
                  if($j >= $width[$i]){
                    echo '</div>'; $i++; $j=0;
                  }
                }
              } else {?>
                <a href="<?=get_sub_field('case_link')?>" class="col-md-<?=$width?> col-sm-6 comp-item">                    
                  <div class="comp-item wow fadeIn" data-wow-delay="0.1s">
                    <div class="img-wrapper"><img class="case_study_img" src="<?=get_sub_field('case_image')?>" /></div>
                    <?=get_sub_field('case_name')?>
                  </div>
                </a><?php
              }
            ?>
        <?php endwhile;?>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="button-wrapper wow fadeInUp">
            <?=get_field('case_extra')?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="contact_us" class="about-services question parallax" style="background-image: 
  linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3) ), url('<?=get_field('contact_image')?>')">
    <div class="dot-overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class="wow fadeIn"><?=get_field('contact_title')?></h2>
          <p class="wow fadeIn" data-wow-delay="0.4s"><?=get_field('contact_content')?>
          </p>
          <?=get_field('contact_extra')?>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section id="contact" class="contact_us">
    <div class="container">
      <div class="imgLogo wow zoomIn">
        <img src="<?php echo get_bloginfo('template_url') ?>/img/logo_dark.svg" alt="">
      </div>
      <h2 class="wow fadeIn"><?=get_field('contact_form_title')?></h2>
      <?php echo do_shortcode('[trust-form id='.get_field('contact_form_id').']'); ?>
    </div>
  </section>
<section id="map" class="map wow fadeInUp" ><!--style="background-image: url(img/4-layers.png)"-->
  <!-- <div class="container">
    <div class="row">
      <div class="contact-info">
        <div class="img-wrapper">
          <img src="<?php echo get_bloginfo('template_url') ?>/img/long_logo_white.svg" alt="">
        </div>
        <div class="map-text">
          Meguro-ku, Tokyo Nakameguro 2 - 8 - 22 <br>
          Nakameguro TD building 4F <br>
          www.motivo.jp  |  info@motivo.jp <br>
        </div>
      </div>
    </div>
  </div> -->
</section>



<script>
      function initMap() {
        var nakameguro = {lat: 35.639562, lng: 139.704950};
        //var nakameguro = {lat: 35.639431, lng: 139.704890};
        var office = {lat: 35.639197, lng: 139.704037};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: nakameguro,
          styles:
          [{
            "featureType":"all",
            "elementType":"all", 
            "stylers": [{"invert_lightness":true},
                        {"saturation":10},
                        {"lightness":30},
                        {"gamma":0.5},
                        {"hue":"#435158"}]
          }],
          clickableIcons: false,
          scrollwheel: false,
        });
        
        function createMarker(lat, lng) {
          var newmarker = new google.maps.Marker({
              position: {lat: lat, lng: lng},
              map: map,
              disableDefaultUI: true,
              icon: {
                path: google.maps.SymbolPath.CIRCLE,
                scale: 15,
                strokeColor: "#009ee6",
                strokeWeight: 4
              },
          });
          
          /*
          var infoWindow = new google.maps.InfoWindow();
          infoWindow.setOptions({
            content: "<div class='bg-blue text-white text-left'><div>Meguro-ku, Tokyo Nakameguro 2 - 8 - 22</div><div>Nakameguro TD building 4F</div><div>www.motivo.jp | info@motivo.jp</div></div>",
            position: {lat: lat, lng: lng},
          });
          */
          
          openInfo(lat, lng);          
        }

        function openInfo(lat, lng){
          var infoWindow = new InfoBubble({
            map: map,
            content: "<div id='map_info' class='bg-blue text-white text-left'>"
  +"<div><img src='/wp-content/themes/motivo/images/motivo_logo_white.svg' style='width: 90%; padding-top: 10px; padding-bottom: 10px; padding-left: 5%;'>"
  +"<div class='map-div'>Meguro-ku, Tokyo Nakameguro 2 - 8 - 22</div>"
  +"<div class='map-div'>Nakameguro TD building 4F</div>"
  +"<div class='map-div'>www.motivo.jp | info@motivo.jp</div></div>",
            position:  new google.maps.LatLng(lat, lng),
            padding: 0,
            hideCloseButton: true,
            borderRadius: 0,
            borderWidth: 0,
            arrowPosition: 0,
            arrowSize: 9,
            arrowStyle: 2,
            backgroundColor: '#009ee6',
            disableAutoPan: true,
            minWidth: 180,
            minHeight: 160,
          });
          infoWindow.open();
        }
        
        createMarker(office.lat, office.lng);
        var limit = false;
        var remake = false;
        window.addEventListener('resize', function(event){
          if (typeof event.originalTarget !== 'undefined') {
            var window_width = event.originalTarget.innerWidth;
          } else {
            var window_width = event.srcElement.innerWidth;
          }
          if(window_width <= 480 && limit){
            limit = false;
            remake = true;
          }
          if(window_width > 480 && !limit){
            limit = true;
            remake = true;
          }
          if(remake){
            document.getElementById('map_info').parentNode.parentNode.parentNode.remove();
            openInfo(office.lat, office.lng);          
            remake = false;
          }
        });

      }

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5S_5QuWJIachudWX0eh0lRksaRxYCt9k&callback=initMap">
    </script>
<?php //get_sidebar(); ?>
</div>
<?php get_footer(); ?>
<script>

/*
  $(document).ready(function(){
      function draw() {
          requestAnimationFrame(draw);
          // Drawing code goes here
          scrollEvent();
      }
      draw();
   
  });
   
  function scrollEvent(){
   
      if(!is_touch_device()){
          viewportTop = $(window).scrollTop();
          windowHeight = $(window).height();
          viewportBottom = windowHeight+viewportTop;
   
          if($(window).width())
   
          $('[data-parallax="true"]').each(function(){
              distance = viewportTop * $(this).attr('data-speed');
              if($(this).attr('data-direction') === 'up'){ sym = '-'; } else { sym = ''; }
              $(this).css('transform','translate3d(0, ' + sym + distance +'px,0)');
          });
   
      }
  }   
   
  function is_touch_device() {
    return 'ontouchstart' in window // works on most browsers 
        || 'onmsgesturechange' in window; // works on ie10
  }
*/
/*
  Math.easeOutQuad = function (t, b, c, d) { t /= d; return -c * t*(t-2) + b; };

(function() { // do not mess global space
var
  interval, // scroll is being eased
  mult = 0, // how fast do we scroll
  dir = 0, // 1 = scroll down, -1 = scroll up
  steps = 60, // how many steps in animation
  length = 20; // how long to animate
function MouseWheelHandler(e) {
  e.preventDefault(); // prevent default browser scroll
  clearInterval(interval); // cancel previous animation
  ++mult; // we are going to scroll faster
  var delta = -Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail))); // cross-browser
  if(dir!=delta) { // scroll direction changed
    mult = 1; // start slowly
    dir = delta;
  }
  // in this cycle, we determine which element to scroll
  for(var tgt=e.target; tgt!=document.documentElement; tgt=tgt.parentNode) {
    var oldScroll = tgt.scrollTop;
    tgt.scrollTop+= delta;
    if(oldScroll!=tgt.scrollTop) break;
    // else the element can't be scrolled, try its parent in next iteration
  }
  var start = tgt.scrollTop;
  var end = start + length*mult*delta; // where to end the scroll
  var change = end - start; // base change in one step
  var step = 0; // current step
  interval = setInterval(function() {
    var pos = Math.easeOutQuad(step++,start,change,steps); // calculate next step
    tgt.scrollTop = pos; // scroll the target to next step
    if(step>=steps) { // scroll finished without speed up - stop animation
      mult = 0; // next scroll will start slowly
      clearInterval(interval);
    }
  },10);
}

// nonstandard: Chrome, IE, Opera, Safari
window.addEventListener("mousewheel", MouseWheelHandler, false); 
// nonstandard: Firefox
window.addEventListener("DOMMouseScroll", MouseWheelHandler, false);
})(); */
</script>
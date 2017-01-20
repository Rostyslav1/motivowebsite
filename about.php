<?php
/*
Template Name: About
*/
?>
<?php get_header(); ?>

<section class="company-page for-search">
	<div class="container">
		<div class="row">
		<div class="col-lg-9 col-md-8">
			<div class="content-page-wrapper">
				<h1 class="wow fadeIn"><?=get_field('motivo_title')?></h1>
				<?=get_field('motivo_content')?>
				<!-- <p class="wow fadeIn" data-wow-delay="0.1s">モティーボは東京を拠点にする非公開のビジネスコンサルティング会社です。私共の企業目的は日本のオンラインビジネスに焦点を置く中小企業を国際市場へ進出させること、そして日本市場への参入を試みる海外企業のサポートをすることです。</p>

				<p class="wow fadeIn" data-wow-delay="0.2s">モティーボは最終顧客への優れたサービスと、株主への市場優位なROIを提供することに重点を置いた日本の様々な業界のB2B企業への信頼性の高い直接的なアクセスを持っています。モティーボはサービス目標を達成するための新技術を使用し、グローバリゼーション、統合、および開発による機会を活用したビジネスサービスに注力しています。</p>

				<div class="accenttext">
					<h2 class="wow fadeIn">企業目標</h2>

					<p class="wow fadeInUp" data-wow-delay="0.1s">日本には380万の中小企業があり、企業全体の99.7％を占めています。日本経済の基盤となる全雇用の70％を占めている、これらの中小企業の目的は最先端技術、製品、または最高品質のサービスを発明し、開発することです。</p>

					<p class="wow fadeInUp" data-wow-delay="0.2s">モティーボコンサルティングでは、そういったニーズの高まる急速な発展を可能とする洗練されたアイデア、製品、技術発明（サービスまたは製品）を持つ企業に焦点を当て、テクノロジーや医療、インフラ、環境保護のいずれの分野においても、これらの中小企業が強みを結集し、他の企業や大学と共同することによって新しいビジネス活動や発明を生み出すサポートをします。</p>
				</div>-->
				<div class="accenttext">

					<h2 class="wow fadeIn">会社概要</h2>
					<?php if(have_rows('motivo_contact')): ?>
						<table class="wow fadeInUp">
							<tbody>
						<?php while(have_rows('motivo_contact')): 
										the_row();?>
								<tr>
									<td><?=get_sub_field('motivo_info_title')?></td>
									<td><?=get_sub_field('motivo_info_value')?></td>
								</tr>
						<?php endwhile; ?>
							</tbody>
						</table>
					<?php endif; ?>
				</div>
			</div>
			<!-- RostiK -->
			<?php if(have_rows('motivo_founders')): ?>

	<div class="post_wrapper">
		<?php while(have_rows('motivo_founders')): 
				the_row(); ?>
			<div class="post-item wow fadeInUp">
				<div class="img">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
				</div>
				<div class="content-post">
					<h3><?=get_sub_field('motivo_founder_name')?></h3>
					<span><?=get_sub_field('motivo_founder_title')?></span>
					<p><?=get_sub_field('motivo_founder_desc')?></p>
					<?php if(have_rows('motivo_founder_sns')): ?>
					<div class="social">
						<?php while(have_rows('motivo_founder_sns')): the_row()?>

						<a href="<?=get_sub_field('motivo_founder_sns_url')?>"><?=get_sub_field('motivo_founder_sns_name')?></a>
						<!-- <a href="#">Linkedln</a>
						<a href="#">Twitter</a>
						<a href="#">Instagram</a> -->
						<?php endwhile; ?>
					</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endwhile; ?>

			<!-- <div class="post_wrapper wow fadeInUp">
			<div class="post-item">
				<div class="img">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
				</div>
				<div class="content-post">
					<h3>FABIAN MEZARINA</h3>
					<span>Founder - CEO</span>
					<p>メザリナは起業家精神とビジネスを発展させるプロセスにとても強い興味を持ち、リーンスタートアップと分析方法論、中でも行動につながる指標と顧客フィードバックループを用いて破壊的イノベーションを開発することに注力しています。創造的なイノベーションサービス技術を可能にする立場にあることを目標とし、誰もが思いつかない効果的な方法でコアにある問題を解決するソリューションをご提案します。</p>
					<p>インバウンドマーケターやインキュベーションセンターを設立した経験を持ち、批判的に考え、コンテキストやパターンを探すことで、あらゆる事象に先行する要素を深く理解し、規範的なものではなく洞察的な行動を導きます。</p>
					<div class="social">
						<a href="#">Facebook</a>
						<a href="#">Linkedln</a>
						<a href="#">Twitter</a>
						<a href="#">Instagram</a>
					</div>
				</div>
			</div> -->

		<?php endif; ?>
	</div>

		<?php if(have_rows('motivo_services')): ?>
		<div class="list-wrapper">
			<h3 class="wow fadeIn">事業内容</h3>
			<div class="content">
				<table>
					<?php while(have_rows('motivo_services')): the_row(); ?>
					<tr class="wow fadeInUp">
						<th><img src="<?php echo get_bloginfo('template_url') ?>/img/simple-logot.png" alt=""></th>
						<th><?=get_sub_field('motivo_service_type')?></th>
					</tr>
					<?php if(have_rows('motivo_service_example')): ?>
					<tr class="wow fadeInUp">
						<td></td>
						<td>
							<ul>
					<?php while(have_rows('motivo_service_example')): the_row()?>
					<li><?=get_sub_field('motivo_service_example_name')?></li>
					<?php endwhile; ?>
					<!-- 			<li>チーム管理</li>
								<li>チーム管理</li>
								<li>チーム管理</li>
								<li> インバウンドマーケティング＆HubSpot</li>
								<li> インバウンドマーケティング＆HubSpot</li> -->
							</ul>
						</td>
					</tr>
					<?php endif;?>
					<?php endwhile; ?>
					<!-- <tr class="wow fadeInUp">
						<th><img src="<?php echo get_bloginfo('template_url') ?>/img/simple-logot.png" alt=""></th>
						<th>IT人材紹介派遣</th>
					</tr>
					<tr class="wow fadeInUp">
						<td></td>
						<td></td>
					</tr>
					<tr class="wow fadeInUp">
						<th><img src="<?php echo get_bloginfo('template_url') ?>/img/simple-logot.png" alt=""></th>
						<th>Webシステム・アプリケーション開発サービス</th>
					</tr>
					<tr class="wow fadeInUp">
						<td></td>
						<td>
							<ul>
								<li>Webシステム・アプリケーション開発サービス</li>
								<li>チーム管理</li>
								<li>チーム管理</li>
								<li>チーム管理</li>
								<li> インバウンドマーケティング＆HubSpot</li>
								<li> インバウンドマーケティング＆HubSpot</li>
							</ul>
						</td>
					</tr> -->
				</table>
			</div>
		</div>
		<?php endif; ?>

			<!-- RostiKEND -->

			<div class="map-sect wow">
				<h2 class="wow fadeIn">アクセス</h2>
				<div id="map" class="map wow fadeInUp" >
				</div>
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
  +"<div><img src='/wp-content/themes/newmotivo/img/motivo_logo_white.svg' style='width: 90%; padding-top: 10px; padding-bottom: 10px; padding-left: 5%;'>"
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

      (function($) {
        $('a[href*="#"]').on('click', function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
        });
      })( jQuery );
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5S_5QuWJIachudWX0eh0lRksaRxYCt9k&callback=initMap">
    </script>
				</div>

<div class="about-services page-img-sect wow fadeIn">
					<h2>Motivo consulting service</h2>
					<p>Our Consulting services are focus satisfy evolving regulatory and environmental
						standards driving lower cost models that disruptive to incumbent businesses, but provide opportunities
 						for new entrants and active players.
					</p>
					<a href="#" class="button">Start to changing you business!</a>
				</div>

			</div>

			<div class="col-lg-3 col-md-4 padding-null">
				<!-- <sidebar class="company-sidebar">
					<input type="search" placeholder="search">
					<h4>Information</h4>
					<div class="sidebar-content">

					<div class="clearfix">
						<div class="sidebar-artic clearfix">
							<div class="img-wrapper">
								<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							</div>
							<div class="cont-wrapper">
								<h3>Motivo株式会社</h3>
								<p>初めてご利用いただくお客さまにハブシンクについての説明をさせていただきます。</p>
							</div>
						</div>

							<div class="list">
								<ul>
									<li><a href="#">会社概要</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
								</ul>
							</div>

						</div>

						<div class="clearfix">
						<div class="sidebar-artic clearfix">
							<div class="img-wrapper">
								<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							</div>
							<div class="cont-wrapper">
								<h3>Motivo株式会社</h3>
								<p>初めてご利用いただくお客さまにハブシンクについての説明をさせていただきます。</p>
							</div>
						</div>

							<div class="list">
								<ul>
									<li><a href="#">会社概要</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
								</ul>
							</div>

						</div>

						<div class="clearfix">
						<div class="sidebar-artic clearfix">
							<div class="img-wrapper">
								<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							</div>
							<div class="cont-wrapper">
								<h3>Motivo株式会社</h3>
								<p>初めてご利用いただくお客さまにハブシンクについての説明をさせていただきます。</p>
							</div>
						</div>

							<div class="list">
								<ul>
									<li><a href="#">会社概要</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
								</ul>
							</div>

						</div>

						<div class="clearfix">
						<div class="sidebar-artic clearfix">
							<div class="img-wrapper">
								<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							</div>
							<div class="cont-wrapper">
								<h3>Motivo株式会社</h3>
								<p>初めてご利用いただくお客さまにハブシンクについての説明をさせていただきます。</p>
							</div>
						</div>

							<div class="list">
								<ul>
									<li><a href="#">会社概要</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
								</ul>
							</div>

						</div>

						<div class="clearfix">
						<div class="sidebar-artic clearfix">
							<div class="img-wrapper">
								<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							</div>
							<div class="cont-wrapper">
								<h3>Motivo株式会社</h3>
								<p>初めてご利用いただくお客さまにハブシンクについての説明をさせていただきます。</p>
							</div>
						</div>

							<div class="list">
								<ul>
									<li><a href="#">会社概要</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
									<li><a href="#">代表あいさつ</a></li>
								</ul>
							</div>

						</div>

					</div>
				</sidebar> -->
				<?php get_sidebar(); ?>

			</div>

			</div>
		</div>
	</section>
<?php get_footer(); ?>
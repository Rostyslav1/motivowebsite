<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if(function_exists('motivo_PostViews')) { 
    motivo_PostViews(get_the_ID()); 
}?>
<section class="company-page post-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="content-page-wrapper">
					<h1><?php the_title(); ?><!-- Squareがメールで決済を行えるSquare Cashの招待を開始。個人間決済のトレンドは“メール決済”に？ --></h1>

					<div class="category_tag">

						<div class="cat">
							<ul>
								<li>category : </li>
								<?php 
								$categories = get_the_category($post->ID);
								if($categories)
								foreach($categories as $category): ?>
									<li><a href="#"><?=$category->name?></a></li>
				                <?php endforeach;?>
								<!-- <li><a href="#">blog</a></li> -->
							</ul>
						</div>

						<span> / </span>

						<div class="tag">
							<ul>
								<li>tag : </li>
								<?php 
								$tags = get_the_tags($post->ID);
								if($tags)
								foreach($tags as $key => $tag): ?>
									<li><a href="#"><?=$tag->name?></a></li>
									<?php end($tags);
										if ($key !== key($tags))
											echo '<li> | </li>'; ?>
				                <?php endforeach;?>
								<!-- <li><a href="#">Square</a></li>
								<li> | </li>
								<li><a href="#">デジタル決済</a></li>
								<li> | </li>
								<li><a href="#">モバイル決済</a></li> -->
							</ul>
						</div>

					</div>
					<!-- begin social -->

<div class="ninja_onebutton">
<script type="text/javascript">
//<![CDATA[
(function(d){
if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_88f13d6e5bdb7347e588b24015953ed2)=='undefined'){
    document.write("<sc"+"ript type='text\/javascript' src='\/\/omt.shinobi.jp\/b\/88f13d6e5bdb7347e588b24015953ed2'><\/sc"+"ript>");
}else{
    window.NINJA_CO_JP_ONETAG_BUTTON_88f13d6e5bdb7347e588b24015953ed2.ONETAGButton_Load();}
})(document);
//]]>
</script><span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
</div>

					<!-- end social -->

					<div class="main-img">
						<?php
		                $image = get_the_post_thumbnail($post->ID);
		                if($image == '')
		                  $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
		                echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);
		                ?>
						<!-- <img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt=""> -->
					</div>
					<p><?php the_content(); ?></p>
				</div>
<!-- 
					<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでしょうか？</p>
					<p>
他にも、以前紹介したTippingCircleという決済サービスは、ソーシャルメディアで繋がっている人同士で金銭のやり取りが行えます。口座を聞いて、ATMからそこへ振り込んで……といった手間は無くなるのかもしれませんね。
私の場合は最近、Twitterでの地方のフォロワーに限定グッズを頼まれたときに、代金を口座へ振り込んでもらっていますが、わざわざ口座を使わなくても……と思うことが多々あります。そうしたときに、Square CashやPayPalのメールによる支払いサービスを使えばかなり便利になるはずです。</p>
<p>もっとも、これらのサービスが一般的に(少なくとも日本では)普及しているわけではないので、誰もが利用するようになるには、もう少し時間が必</p>
				</div>



					<div class="accenttext">
						<h2>個人間決済のトレンドは“メール決済”に？</h2>

						<p>Squareは5月20日(現地時間)、Square Cashというメールで個人間決済を行える決済サービスの紹介ページを立ち上げました。現在はInvite Only(招待のみ)のようですが、今後数週間のうちに多くのユーザーを招待する予定がある、とのことです。紹介ページに出てくるアニメーションには、CCにpay@square.com、件名に$25と入力することで、飲み会の代金を支払っています。</p>

						<p>これは相手がSquareに登録していなかったとしても、相手のデビットカード口座へ振り込めるようです。初めて送金を受け取った人はメールからSquareへ登録するという流れだそうで、爆発的にユーザーが増えそうですね。ちなみに手数料はトランザクションごとに50セン</p>
					</div>
					<div class="accenttext">

					<h2>Squareがメールで決済を行える<br>
Square Cashの招待を開始。</h2>
<p>こうしたメールで金銭のやり取りができるサービスは、Squareが最初ではありません。PayPalが以前から行っていましたし、Googleも最近行われたGoogle i/o 2013で、Gmailを利用し、Google Walletで支払いができるようになると発表されました。</p>

				<div class="pay-system">
					<p><span>ールアドレスでお支払い</span>(PayPal)</p>
					<p><span>Send money to friends with Gmail and Google Wallet</span>(Google Commerce)</p>
				</div>

				</div>

				<blockquote>
					<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでしょうか？
他にも、以前紹介したTippingCircleという決済サービスは、ソーシャルメディアで繋がっている人同士で金銭のやり取りが行えます。口座を聞いて、ATMからそこへ振り込んで……といった手間は無くなるのかもしれませんね。
私の場合は最近、Twitterでの地方のフォロワーに限定グッズを頼まれたときに、代金を口座へ振り込んでもらっていますが、わざわざ口座を使わなくても……と思うことが多々あります。そうしたときに、Square CashやPayPalのメールによる支払いサービスを使えばかなり便利になるはずです。</p>
<p>
もっとも、これらのサービスが一般的に(少なくとも日本では)普及しているわけではないので、誰もが利用するようになるには、もう少し時間が必要となりそうです。草の根運動が大事だと思いますので、よく「グッズ買ってきて！」と頼んでくる人へ、布教活動から初めてみたいと思います。</p>
				</blockquote>

				<div class="square-cash">
					<h3>Square Cashの招待を開始。
個人間決済のトレンドは“メール決済”に？</h3>
					<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでしょうか？
他にも、以前紹介したTippingCircleという決済サービスは、ソーシャルメディアで繋がっている人同士で金銭のやり取りが行えます。口座を聞いて、ATMからそこへ振り込んで……といった手間は無くなるのかもしれませんね。
私の場合は最近、Twitterでの地方のフォロワーに限定グッズを頼まれたときに、代金を口座へ振り込んでもらっていますが、わざわざ口座を使わなくても……と思うことが多々あります。そうしたときに、Square CashやPayPalのメールによる支払いサービスを使えばかなり便利になるはずです。</p>
					<p>もっとも、これらのサービスが一般的に(少なくとも日本では)普及しているわけではないので、誰もが利用するようになるには、もう少し時間が必要となりそうです。草の根運動が大事だと思いますので、よく「グッズ買ってきて！」と頼んでくる人へ、布教活動から初めてみたいと思います。</p>
				</div> -->

				<div class="author">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/simple-logot.png" alt="">
					<h5>Author</h5>
				</div>

				<!-- RostiK -->

				<div class="post_wrapper">

					<div class="post-item">
						<div class="img">
							<?php if(get_avatar_url($post->post_author)): //echo get_avatar_url($post->post_author); ?>
							<!-- <img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt=""> -->
							<img src="<?=get_avatar_url($post->post_author, ['size'=>125]); ?>" alt="">
							<?php endif; ?>
						</div>
						<div class="content-post">
							<h3><?php the_author(); ?></h3>
							<!-- REQUIRES EXTRA FIELD IN AUTHOR FOR TAGLINE -->
							<span>motion founder - ceo</span>
							<p><?php the_author_meta('description'); ?></p>

						</div>
					</div>

			</div>

			<div class="change-content clearfix wow fadeInUp">
				<?= previous_post_link('%link', '<span class="angle"><img src="'.get_bloginfo('template_url').'/img/angle-left.png" alt=""></span> <span class="text">previous</span>' ); ?>
				<!-- style="transform: translateX(-50%);" --> 
				<img src="<?php echo get_bloginfo('template_url') ?>/img/simple-logot.png" alt="" class="logo">
				<?= next_post_link('%link', '<span class="text">next</span> <span class="angle"><img src="'.get_bloginfo('template_url').'/img/angle-right.png" alt=""></span>' ); ?>
			</div>

			<div class="post-items">
				<div class="row">
					<div class="col-sm-6">
						<div class="item wow fadeIn" data-wow-delay="0.1s">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							<div class="content">
								<h3>940万回以上再生！コンテンツメーカー・眞鍋海里さんが考え</h3>
								<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでし</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="item wow fadeIn" data-wow-delay="0.2s">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							<div class="content">
								<h3>940万回以上再生！コンテンツメーカー・眞鍋海里さんが考え</h3>
								<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでし</p>
							</div>
						</div>
					</div>
				</div>

				<div class="line"></div>

				<div class="row">
					<div class="col-sm-6">
						<div class="item wow fadeIn" data-wow-delay="0.2s">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							<div class="content">
								<h3>940万回以上再生！コンテンツメーカー・眞鍋海里さんが考え</h3>
								<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでし</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="item wow fadeIn" data-wow-delay="0.1s">
							<img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt="">
							<div class="content">
								<h3>940万回以上再生！コンテンツメーカー・眞鍋海里さんが考え</h3>
								<p>こうした個人間での金銭のやり取りがメールで出来るサービスは、今後の主流となるでし</p>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- RostiKEND -->


			<div class="about-services page-img-sect">
					<h2>Motivo consulting service</h2>
					<p>Our Consulting services are focus satisfy evolving regulatory and environmental
						standards driving lower cost models that disruptive to incumbent businesses, but provide opportunities
 						for new entrants and active players.
					</p>
					<a href="#" class="button">Start to changing you business!</a>
			</div>

		</div>


			<div class="col-lg-3 col-md-4 padding-null">
				<?php get_sidebar(); ?>
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
					<!-- Comrnt -->
				</sidebar> 
			</div>

			</div>
		</div>
	</section>


<?php //get_template_part( 'entry' ); ?>
<?php // if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; wp_reset_query(); ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
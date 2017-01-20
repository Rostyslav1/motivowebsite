<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if(function_exists('motivo_PostViews')) { 
    motivo_PostViews(get_the_ID()); 
}?>
<section class="company-page post-page job-post wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
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
								$categories = get_terms("job_categories"); 
								if($categories)
								foreach($categories as $category): ?>
									<li><a href="<?=get_home_url().'/jobs/categories/'.strtolower($category->name)?>"><?=$category->name?></a></li>
				                <?php endforeach;?>
								<!-- <li><a href="#">blog</a></li> -->
							</ul>
						</div>

						<span> / </span>

						<div class="tag">
							<ul>
								<li>tag : </li>
								<?php 
								$tags = get_terms("job_skills"); 
								if($tags)
								foreach($tags as $key => $tag): ?>
									<li><a href="<?=get_home_url().'/jobs/skills/'.strtolower($tag->name)?>"><?=$tag->name?></a></li>
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

				<div class="table">

							<table>
								<tr class="wow fadeInUp">
									<th>Job Position</th>
									<th><?=get_field('job_position')?></th>
								</tr>
								<tr class="wow fadeInUp">
									<td>Description</td>
									<td><?=get_field('job_description')?></td>
								</tr>
							</table>

							<table>
								<tr class="wow fadeInUp">
									<th>Job Type</th>
									<th><?=get_field('job_type')?></th>
								</tr>
								<tr class="wow fadeInUp">
									<td>Required Experience</td>
									<td>
										<ul><?=get_field('job_requirements')?></ul>
									</td>
								</tr>
								<tr class="wow fadeInUp">
									<td>Aditional Idea Skills</td>
									<td>
										<ul>
											<li>Test driven development</li>
											<li>Knowledge about AI (Learning Machine, Tensorflow, Elastic Search, ) - Continuous delivery</li>
											<li>Automated deployment</li>
											<li>Virtual development environments (Vagrant)</li>
											<li>Server provisioning tools (Ansible)</li>
											<li>Server provisioning tools (Ansible)</li>
											<li>Advanced server administration</li>
											<li>Advanced knowledge of AWS products and services</li>
										</ul>
									</td>
								</tr>
							</table>

							<table>
								<tr class="wow fadeInUp">
									<th>Required Education</th>
									<th><?=get_field('job_education')?></th>
								</tr>
								<tr class="wow fadeInUp">
									<td>Other Requirements</td>
									<td>
										<ul><?=get_field('job_requirements_other')?></ul>
									</td>
								</tr>
								<tr class="wow fadeInUp">
									<td>Compensation</td>
									<td><?=get_field('job_compensation')?></td>
								</tr>
							</table>

						</div>

						<?=get_field('job_description_extra')?>
						<!-- <div class="accenttext bottom_ac">

							<h2 class="wow fadeIn">Who can apply for this position?</h2>
								<p class="wow fadeInUp">We are looking for developers from different nationalities, very active and who want to develop different services. It doesn't matter if you are a freshman or an experienced developer, we have internally different kind of teams which allow us to set you up with the right team and projects in order to scale your skills.</p>

							</div>

							<div class="accenttext bottom_ac">

							<h2 class="wow fadeIn">Company Mission for Developers</h2>
								<p class="wow fadeInUp">One of our main missions is to deliver a good service to clients but also increase the skills of our internal developers in order to develop more internal services.</p>

							</div>

							<div class="accenttext bottom_ac">

							<h2 class="wow fadeIn">Visa Sponsorship</h2>
								<p class="wow fadeInUp">In order to apply for the visa, the candidate must have his/her license or certification (University Degree) or have more than 10 years experience as a developer with documents that prove his/her job career (recommendation letters, job certification).
Once we get all the documents we apply for your visa, this process usually take from 1 to 2 months if you have a university degree. 
If you are applying as 10-year experience without the university degree the process might take as max 6 months.
</p>

							</div> -->

							<div class="ready-to wow fadeIn">
								<h3 class="wow fadeInUp" data-wow-delay="0.1s">Ready to work in Japan?!</h3>
								<a href="#" class="button wow fadeInUp" data-wow-delay="0.2s">Apply now</a>
							</div>

				<div class="author wow fadeInUp">
					<img src="<?php echo get_bloginfo('template_url') ?>/img/simple-logot.png" alt="">
					<h5>Recruiter</h5>
				</div>

				<!-- RostiK -->

				<div class="post_wrapper wow fadeInUp">

					<div class="post-item">
						<div class="img">
							<?php if(get_avatar_url($post->post_author)): //echo get_avatar_url($post->post_author); ?>
							<!-- <img src="<?php echo get_bloginfo('template_url') ?>/img/art-min-img.jpg" alt=""> -->
							<img src="<?=get_avatar_url($post->post_author, ['size'=>125]); ?>" alt="" style="margin-bottom: 25px; border-radius: 6px;">
							<?php endif; ?>
						</div>
						<div class="content-post">
							<h3><?php the_author(); ?></h3>
							<!-- REQUIRES EXTRA FIELD IN AUTHOR FOR TAGLINE -->
							<span>recruiter</span>
							<p><?php the_author_meta('description'); ?></p>

						</div>
					</div>

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
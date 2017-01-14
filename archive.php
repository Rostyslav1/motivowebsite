<?php
/*
Template Name: Archives
*/
?>
<?php get_header(); ?>
<section class="company-page archive-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8">
				<div class="archive-page-wrapper clearfix">

				<!-- <header class="header"> -->
					<h1 class="entry-title"><?php 
					if ( is_day() ) { printf( __( 'Daily Archives: %s', 'motivo' ), get_the_time( get_option( 'date_format' ) ) ); }
					elseif ( is_month() ) { printf( __( 'Monthly Archives: %s', 'motivo' ), get_the_time( 'F Y' ) ); }
					elseif ( is_year() ) { printf( __( 'Yearly Archives: %s', 'motivo' ), get_the_time( 'Y' ) ); }
					else { _e( 'Archives', 'motivo' ); }
					?></h1>
				<!-- </header -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<?php //get_template_part( 'entry' ); ?>
						<div class="archive-item clearfix">
							<div class="img-wrapper">
								<a href="<?=$post->guid?>"><?php
				                $image = get_the_post_thumbnail($post->ID);
				                if($image == '')
				                  $image = '<img src="'.get_bloginfo('template_url').'/img/logo_dark.svg" alt="">';
				                echo preg_replace( '/(width|height)=\"\d*\"\s/', "", $image);
				                ?>
								</a>
							</div>
							<div class="cont-wrapper">
								<h3><a href="<?=$post->guid?>"><?php the_title(); ?></a></h3>
								<p><?php the_content();?></p>
								<div class="footer-cont">
									<span class="meta">
										<a href="">LifeStyle</a>
										<a href="">Tokyo</a>
									</span>
									<span class="name"><a href=""><?php the_author(); ?></a></span>
									<span class="date"><a href=""><?php the_date('Y.m.d');?></a></span>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				<?php get_template_part( 'nav', 'below' ); ?>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 padding-null">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>